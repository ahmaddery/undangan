<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\AcaraModel;

class AcaraController extends BaseController
{
    protected $acaraModel;

    public function __construct()
    {
        $this->acaraModel = new AcaraModel();
    }

    public function index()
    {
        // Check if user_id is not set in the session
        if (!session()->has('user_id')) {
            return redirect()->to('login_form'); // Redirect to your login page
        }

        $data['acaraList'] = $this->acaraModel->where('user_id', session()->get('user_id'))->findAll();
        return view('acara/index', $data);
    }

    // Fungsi tambah acara
    public function create()
    {
        // Check if user_id is not set in the session
        if (!session()->has('user_id')) {
            return redirect()->to('login_form'); // Redirect to your login page
        }

        if ($this->request->getMethod() == 'post') {
            $data = [
                'nama_mempelai' => $this->request->getPost('nama_mempelai'),
                'tanggal_jam' => $this->request->getPost('tanggal_jam'),
                'user_id' => session()->get('user_id'), // Set user_id from session
            ];
            $this->acaraModel->insert($data);

            return redirect()->to('acara')->with('success', 'Acara berhasil ditambahkan.');
        } else {
            return view('acara/create');
        }
    }

    // Fungsi edit acara
    public function edit($id)
    {
        // Check if user_id is not set in the session
        if (!session()->has('user_id')) {
            return redirect()->to('login_form'); // Redirect to your login page
        }

        $data['acara'] = $this->acaraModel->find($id);

        if ($this->request->getMethod() == 'post') {
            $updatedData = [
                'nama_mempelai' => $this->request->getPost('nama_mempelai'),
                'tanggal_jam' => $this->request->getPost('tanggal_jam'),
            ];
            $this->acaraModel->update($id, $updatedData);
            return redirect()->to('acara')->with('success', 'Acara berhasil diperbarui.');
        } else {
            return view('acara/edit', $data);
        }
    }

    // Fungsi hapus acara
    public function delete($id)
    {
        // Check if user_id is not set in the session
        if (!session()->has('user_id')) {
            return redirect()->to('/login'); // Redirect to your login page
        }

        $this->acaraModel->delete($id);
        return redirect()->to('acara')->with('success', 'Acara berhasil dihapus.');
    }
}
