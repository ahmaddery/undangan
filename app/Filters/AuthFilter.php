<?php
namespace App\Filters;

use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;

class AuthFilter implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        // Periksa apakah user_id ada dalam sesi
        if (!session()->has('user_id')) {
            return redirect()->to('login_form'); // Redirect ke halaman login jika tidak ada user_id dalam sesi
        }
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // Implementasi setelah filter (kosongkan jika tidak diperlukan)
    }


    
}
