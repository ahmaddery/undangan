<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('index');
    }
    

    public function utama(): string
    {
        return view('index');
    }

    public function about(): string
    {
        return view('about');
    }

    public function service(): string
    {
        return view('service');
    }

    public function contact(): string
    {
        return view('contact');
    }
    public function guide()
    {
         // Check if user_id is not set in the session
         if (!session()->has('user_id')) {
            return redirect()->to('login_form'); // Redirect to your login page
        }
        return view('guide/index');
    }

}
