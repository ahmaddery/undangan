<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\EmailModel;

class SendEmail extends BaseController
{
    public function index()
    {
        
        if ($this->request->getMethod() == 'post') {
            $email_tujuan = $this->request->getVar('email_tujuan');
            $subject = $this->request->getVar('subject');
            $pesan = $this->request->getVar('pesan');

// Pesan email dengan format HTML yang lebih menarik
$pesan = "
            <!DOCTYPE html>
            <html>
            <head>
                <style>
                    body {
                        font-family: 'Arial', sans-serif;
                        margin: 0;
                        padding: 0;
                        background-color: #f4f4f4;
                    }
                    .email-container {
                        padding: 20px;
                        display: flex;
                        justify-content: center;
                        align-items: center;
                        height: 100vh;
                    }
                    .email-content {
                        background-color: #ffffff;
                        border-radius: 10px;
                        box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
                        text-align: center;
                        padding: 40px;
                        max-width: 600px;
                        margin: 0 auto;
                        overflow: auto; /* Tambahkan overflow untuk scrolling */
                        max-height: 80vh; /* Batasi tinggi kontainer */
                    }
                    .email-header {
                        color: #333333;
                        font-size: 28px;
                        margin-bottom: 20px;
                    }
                    .email-paragraph {
                        margin: 0 0 15px;
                        line-height: 1.5;
                        color: #555555;
                    }
                    .email-footer {
                        color: #777777;
                        margin-top: 40px;
                        font-size: 14px;
                        text-align: center;
                    }
                    .email-footer a {
                        color: #777777;
                        text-decoration: none;
                    }
                    .email-footer a:hover {
                        text-decoration: underline;
                    }
                </style>
            </head>
            <body>
                <div class='email-container'>
                    <div class='email-content'>
                        <h2 class='email-header'>Halo!</h2>
                        <p class='email-paragraph'>Kami berharap Anda dalam keadaan baik-baik saja. Kami ingin memberi Anda kabar terbaru.</p>
                        <p class='email-paragraph'>$pesan</p>
                        <p class='email-paragraph'>Jangan ragu untuk menghubungi kami jika Anda memiliki pertanyaan lebih lanjut.</p>
                        <p class='email-footer'>Terima kasih,<br>Tim Dukungan Kami<br><a href='mailto:admin@ahmadderi.my.id'>dukungan@ahmadderi.my.id</a></p>
                    </div>
                </div>
            </body>
            </html>



";

$email = service('email');
$email->setTo($email_tujuan);
$email->setFrom('admin@ahmadderi.my.id', 'Mengasah Kemampuan Pengembangan Web');
$email->setSubject($subject);
$email->setMessage($pesan);

            if ($email->send()) {
                // Email berhasil terkirim, simpan pesan dalam flash data
                session()->setFlashdata('success', 'Email berhasil terkirim');

                // Simpan detail email yang dikirim ke dalam database
                $emailModel = new EmailModel();
                date_default_timezone_set('Asia/Jakarta');

                $emailModel->insert([
                    'penerima' => $email_tujuan,
                    'subjek' => $subject,
                    'pesan' => $pesan,
                    'terkirim_pada' => date('Y-m-d H:i:s')
                ]);

                return redirect()->to('admin/email');
            } else {
                $data = $email->printDebugger(['headers']);
                print_r($data);
            }

        } else {
            return view('admin/email');
        }
    }
    
                public function viewEmails()
            {
                $emailModel = new EmailModel();
                $data['emails'] = $emailModel->findAll(); // Mengambil semua data dari tabel emails

                return view('admin/view_emails', $data);
            }

                        public function deleteEmail($id)
            {
                $emailModel = new EmailModel();
                $emailModel->delete($id); // Menghapus data dengan ID tertentu

                session()->setFlashdata('success', 'Email berhasil dihapus');
                return redirect()->to('admin/view_emails'); // Redirect kembali ke halaman view_emails
            }


}
