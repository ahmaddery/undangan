<?php

namespace App\Controllers;

use App\Models\MempelaiWanitaModel;

class MempelaiWanita extends BaseController
{
    public function __construct()
    {
        $this->mempelaiModel = new MempelaiWanitaModel();
    }

    public function index()
    {
         // Check if user_id is not set in the session
         if (!session()->has('user_id')) {
            return redirect()->to('login_form'); // Redirect to your login page
        }
        $data['mempelai'] = $this->mempelaiModel->getAll();
        return view('mempelai_wanita/index', $data);
    }

    public function create()
    {
         // Check if user_id is not set in the session
         if (!session()->has('user_id')) {
            return redirect()->to('login_form'); // Redirect to your login page
        }
        return view('mempelai_wanita/create');
    }

    public function store()
    {
        $foto = $this->request->getFile('foto');
        $fotoName = $foto->getRandomName();
        $foto->move('upload/', $fotoName);

        $data = [
            'nama' => $this->request->getPost('nama'),
            'deskripsi' => $this->request->getPost('deskripsi'),
            'orangtua' => $this->request->getPost('orangtua'),
            'foto' => $fotoName,
            'user_id' => session()->get('user_id')
        ];

        $this->mempelaiModel->insert($data);
        return redirect()->to('/mempelai_wanita');
    }

    public function edit($id)
    {
         // Check if user_id is not set in the session
         if (!session()->has('user_id')) {
            return redirect()->to('login_form'); // Redirect to your login page
        }
        $data['mempelai'] = $this->mempelaiModel->find($id);
        return view('mempelai_wanita/edit', $data);
    }

    public function update($id)
    {
        $foto = $this->request->getFile('foto');
        if ($foto->isValid() && !$foto->hasMoved()) {
            $existingFoto = $this->mempelaiModel->getFotoPath($id);
            if ($existingFoto) {
                unlink('upload/' . $existingFoto['foto']);
            }
            $newFotoName = $foto->getRandomName();
            $foto->move('upload/', $newFotoName);
        } else {
            $newFotoName = $this->request->getPost('old_foto');
        }

        $data = [
            'nama' => $this->request->getPost('nama'),
            'deskripsi' => $this->request->getPost('deskripsi'),
            'orangtua' => $this->request->getPost('orangtua'),
            'foto' => $newFotoName,
            'user_id' => session()->get('user_id')
        ];

        $this->mempelaiModel->update($id, $data);
        return redirect()->to('/mempelai_wanita');
    }


    public function delete($id)
    {
        $existingFoto = $this->mempelaiModel->getFotoPath($id);
        if ($existingFoto) {
            unlink('upload/' . $existingFoto['foto']);
        }

        $this->mempelaiModel->delete($id);
        return redirect()->to('/mempelai_wanita');
    }
}
