<?php

namespace App\Controllers;

use App\Models\UserModel;
use CodeIgniter\Controller;

class UserController extends Controller
{
    protected $session;

    public function __construct()
    {
        $this->session = session();
    }

    public function read()
    {
        if (!$this->isLoggedIn()) {
            return redirect()->to('admin/login');
        }

        $model = new UserModel();
        $data['users'] = $model->findAll();

        return view('admin/read', $data);
    }

    public function delete($id)
    {
        if (!$this->isLoggedIn()) {
            return redirect()->to('admin/login');
        }

        $model = new UserModel();
        $deleted = $model->delete($id);
    
        if ($deleted) {
            return redirect()->to('admin/read')->with('success', 'Pengguna telah berhasil dihapus.');
        } else {
            return redirect()->to('admin/read')->with('error', 'Gagal menghapus pengguna.');
        }
    }
    private function isLoggedIn()
    {
        return $this->session->has('logged_in');
    }

    
}
