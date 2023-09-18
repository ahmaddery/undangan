<?php
namespace App\Controllers;

use App\Models\UserModel;
use CodeIgniter\Controller;
use CodeIgniter\Email\Email;

class Auth extends Controller
{
    public function register()
    {
        if ($this->request->getMethod() == 'post') {
            // Validasi form
            $validation = \Config\Services::validation();
            $validation->setRules([
                'username' => 'required|alpha_numeric',
                'email' => 'required|valid_email|is_unique[users.email]', // is_unique untuk memeriksa email unik
                'password' => 'required|min_length[6]'
            ]);
    
            if ($validation->withRequest($this->request)->run()) {
                $userModel = new UserModel();
    
                // Memeriksa apakah email sudah terdaftar
                if ($userModel->where('email', $this->request->getVar('email'))->first()) {
                    return redirect()->to('register_form')->with('error', 'Email telah terdaftar.');
                }
    
                // Generate random verification code
                $verificationCode = mt_rand(100000, 999999);
    
                // Insert user data into the database
                $userModel->save([
                    'username' => $this->request->getVar('username'),
                    'email' => $this->request->getVar('email'),
                    'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
                    'verification_code' => $verificationCode,
                ]);
    
             // Send verification code via email
$email = service('email');
$email->setTo($this->request->getVar('email'));
$email->setFrom('admin@ahmadderi.my.id', 'code verifikasi');
$email->setSubject('Verification Code');
// Contoh pesan email dengan HTML yang ditingkatkan
$verificationMessage = "
    <html>
    <body>
        <p>Halo!</p>
        <p>Kami telah mengirimkan kode verifikasi untuk akun Anda.</p>
        <p>Silakan gunakan kode verifikasi berikut:</p>
        <h2 style='background-color: #f2f2f2; padding: 10px;'>$verificationCode</h2>
        <p>Jika Anda tidak meminta kode verifikasi ini, Anda dapat mengabaikan pesan ini.</p>
        <p>Terima kasih,</p>
        <p>Tim Dukungan Kami</p>
    </body>
    </html>
";

$email->setMessage($verificationMessage);

    
                if ($email->send()) {
                    // Email terkirim dengan sukses
                    return redirect()->to('auth/verify')->with('success', 'Pengguna berhasil didaftarkan. Periksa email Anda untuk kode verifikasi.');
                } else {
                    // Terjadi kesalahan saat mengirim email
                    return redirect()->to('register_form')->with('error', 'Terjadi kesalahan saat mengirim kode verifikasi.');
                }
            } else {
                return redirect()->to('register_form');
            }
        } else {
            return view('register_form');
        }

    }

    public function verify()
    {
        if ($this->request->getMethod() == 'post') {
            $userModel = new UserModel();
            $user = $userModel->where('email', $this->request->getVar('email'))
                              ->where('verification_code', $this->request->getVar('verification_code'))
                              ->first();
    
                              if ($user) {
                                $userModel->update($user['id'], ['is_verified' => 1]);
                                return redirect()->to('login_form')->with('success', 'Verifikasi berhasil. Anda sekarang dapat masuk.');
                            } else {
                                return redirect()->to('auth/verify')->with('error', 'Kode verifikasi tidak valid. Silakan cek dan coba lagi.');
                            }
                            
        } else {
            return view('verification_form');
        }
    }
    
    public function login()
    {
        if ($this->request->getMethod() == 'post') {
            $userModel = new UserModel();
            $email = $this->request->getVar('email');
            $password = $this->request->getVar('password');
            
            $user = $userModel->where('email', $email)->first();
    
            if ($user && password_verify($password, $user['password'])) {
                if ($user['is_verified'] == 1) {
                    // Periksa apakah email undangan sudah dikirim sebelumnya
                    if ($user['email_sent'] == 0) {
                        // Kirim email undangan hanya jika belum dikirim
                        $this->sendInvitationEmail($email, $user['id']);
                        
                        // Tandai bahwa email undangan telah dikirim
                        $userModel->update($user['id'], ['email_sent' => 1]);
                    }
                    
                    // Set user_id into session
                    session()->set('user_id', $user['id']);
    
                    return redirect()->to('acara')->with('success', 'Login berhasil.');
                } else {
                    return view('login_form', ['message' => 'Akun belum terverifikasi.']);
                }
            } else {
                return view('login_form', ['message' => 'Email atau kata sandi salah.']);
            }
        } else {
            return view('login_form');
        }
    }
    
    
    public function sendInvitationEmail($recipientEmail, $userId)
    {
        // URL undangan dengan user ID
        $invitationLink = 'https://undangan.ahmadderi.my.id/undangan/' . $userId;
    
        // Konfigurasi email
        $email = service('email');
        $email->setTo($recipientEmail);
        $email->setFrom('admin@ahmadderi.my.id', 'Tautan Undangan');
        $email->setSubject('Tautan Undangan');
    
        // Data yang akan digunakan dalam view
        $data['invitationLink'] = $invitationLink;
    
        // Membaca view dan mengirimkannya sebagai pesan email
        $email->setMessage(view('invitation_email', $data));
    
        // Kirim email
        if ($email->send()) {
            return 'Email undangan telah berhasil dikirim.';
        } else {
            return 'Gagal mengirim email undangan.';
        }
    }
    

    

    public function forgotPasswordForm()
    {
        return view('forgot_password_form');
    }

    public function forgotPassword()
    {
        if ($this->request->getMethod() == 'post') {
            $email = $this->request->getVar('email');
            $resetCode = mt_rand(100000, 999999);
    
            $userModel = new UserModel();
            $user = $userModel->where('email', $email)->first();
    
            if ($user) {
                $userModel->update($user['id'], ['reset_code' => $resetCode]);
    
// Send reset code via email
$emailService = service('email');
$emailService->setTo($email);
$emailService->setFrom('admin@ahmadderi.my.id', 'Code Reset password');
$emailService->setSubject('Password Reset Code');

// Enhanced HTML reset message
$resetMessage = "
    <!DOCTYPE html>
    <html lang='en'>
    <head>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>Password Reset</title>
        <style>
            body {
                font-family: 'Arial', sans-serif;
                background-color: #f4f4f4;
                margin: 0;
                padding: 0;
                display: flex;
                justify-content: center;
                align-items: center;
                min-height: 100vh;
            }
            .email-container {
                background-color: #ffffff;
                padding: 20px;
                border-radius: 10px;
                box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
                text-align: center;
            }
            .email-header {
                color: #333333;
                font-size: 24px;
                margin-bottom: 20px;
            }
            .reset-code {
                background-color: #f2f2f2;
                padding: 10px;
                border-radius: 5px;
                font-size: 18px;
                margin: 20px 0;
            }
            .reset-link {
                color: #007bff;
                text-decoration: none;
                font-weight: bold;
            }
            .email-footer {
                color: #777777;
                margin-top: 20px;
            }
        </style>
    </head>
    <body>
        <div class='email-container'>
            <div class='email-header'>Halo!</div>
            <p>Kami mendapat permintaan untuk mereset kata sandi akun Anda.</p>
            <p>Silakan gunakan kode berikut untuk mereset kata sandi Anda:</p>
            <div class='reset-code'>$resetCode</div>
            <p>Anda juga dapat <a class='reset-link' href='http://localhost/coba/public/auth/reset-password'>klik di sini</a> untuk mereset password.</p>
            <p>Jika Anda tidak melakukan permintaan ini, Anda dapat mengabaikan pesan ini.</p>
            <div class='email-footer'>
                Terima kasih,<br>
                Tim Dukungan Kami
            </div>
        </div>
    </body>
    </html>
";


$emailService->setMessage($resetMessage);

    
                if ($emailService->send()) {
                    session()->setFlashdata('success', 'Kode reset kata sandi dikirim ke email Anda.');
                } else {
                    session()->setFlashdata('error', 'Terjadi kesalahan saat mengirimkan kode reset.');
                }
    
                return redirect()->to('auth/reset-password');
            } else {
                session()->setFlashdata('error', 'Email tidak ditemukan.');
                return redirect()->to('auth/forgot-password');
            }
        }
    }
    

    public function resetPasswordForm()
    {
        return view('reset_password_form');
    }

    public function resetPassword()
    {
        if ($this->request->getMethod() == 'post') {
            $email = $this->request->getVar('email');
            $resetCode = $this->request->getVar('reset_code');
            $newPassword = $this->request->getVar('new_password');

            $userModel = new UserModel();
            $user = $userModel->where('email', $email)
                              ->where('reset_code', $resetCode)
                              ->first();

            if ($user) {
                $userModel->update($user['id'], [
                    'password' => password_hash($newPassword, PASSWORD_DEFAULT),
                    'reset_code' => null
                ]);

                session()->setFlashdata('success', 'Password reset Berhasil');
                return redirect()->to('login_form');
            } else {
                session()->setFlashdata('error', 'Kode reset atau email tidak valid.');
                return redirect()->to('auth/reset-password');
            }
        }
    }

    public function logout()
{
    // Assuming you are using session-based authentication
    session()->destroy();
    return redirect()->to('login_form');
}
}



