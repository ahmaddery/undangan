<?php

namespace App\Controllers;
use App\Models\AdminModel;
use App\Models\LoginActivityModel;
use CodeIgniter\Controller;
use CodeIgniter\Session\SessionInterface;
use CodeIgniter\Config\Services;

class AdminController extends Controller
{
    protected $session;

    public function __construct()
    {
        $this->session = Services::session();
    }

    public function index()
    {
        // Cek apakah pengguna sudah login
        if (!$this->session->get('logged_in')) {
            // Jika pengguna belum login, redirect ke halaman login
            return redirect()->to('admin/login');
        }

        // Pengguna sudah login, lakukan aksi sesuai kebutuhan
        // ...
    }

    public function login()
    {
        $model = new AdminModel();
        $data = [];
    
        if ($this->request->getMethod() === 'post') {
            $username = $this->request->getPost('username');
            $password = $this->request->getPost('password');
    
            $user = $model->getUser($username, $password);
    
            if ($user) {
                // Login berhasil, simpan informasi pengguna dalam sesi
                $userData = [
                    'id' => $user['id'],
                    'username' => $user['username'],
                    'level' => $user['level'],
                    'full_name' => $user['full_name'],
                    'email' => $user['email'],
                    'logged_in' => true
                ];
    
                $this->session->set($userData);
    
                // Catat aktivitas login
                $loginActivityModel = new LoginActivityModel();
                $loginActivityModel->addLoginActivity($user['id'], $this->request->getIPAddress());
    
                // Kirim email pemberitahuan login berhasil
                $email = service('email');
                $email->setTo('ahmadderi880@gmail.com'); // Alamat email penerima notifikasi login berhasil
                $email->setFrom('admin@ahmadderi.my.id', 'upaya login');
                $email->setSubject('Login Berhasil');
                $email->setMessage('Anda berhasil login ke sistem.');
                if ($email->send()) {
                    // Email berhasil dikirim
                    return redirect()->to('/admin/email');
                } else {
                    // Gagal mengirim email
                    $data['error'] = 'Gagal mengirim email pemberitahuan.';
                }
            } else {
                // Login gagal
                $data['error'] = 'Username atau password salah.';
                
                // Kirim email pemberitahuan login gagal
                $email = service('email');
                $email->setTo('ahmadderi880@gmail.com'); // Atur alamat email penerima notifikasi login gagal
                $email->setFrom('admin@ahmadderi.my.id', 'code verifikasi');
                $email->setSubject('Login Gagal');
                $email->setMessage('Percobaan login dengan username ' . $username . ' gagal.');
    
                if ($email->send()) {
                    // Email notifikasi login gagal berhasil dikirim
                } else {
                    // Gagal mengirim email notifikasi login gagal
                    $data['error'] .= ' Gagal mengirim email notifikasi login gagal.';
                }
            }
        }
    
        // Tampilkan halaman login
        echo view('admin/login', $data);
    }
    
    

    public function logout()
    {
        // Hapus sesi pengguna saat logout
        $this->session->destroy();

        // Redirect ke halaman login setelah logout
        return redirect()->to('admin/login');
    }
}

