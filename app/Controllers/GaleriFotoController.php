<?php

namespace App\Controllers;

use App\Models\GaleriFotoModel;

class GaleriFotoController extends BaseController
{
    public function index()
    {
         // Check if user_id is not set in the session
         if (!session()->has('user_id')) {
            return redirect()->to('login_form'); // Redirect to your login page
        }
        $model = new GaleriFotoModel();
        $user_id = session()->get('user_id');
        $data['galeri_foto'] = $model->getByUserId($user_id);
        
        return view('galeri_foto/index', $data);
    }

    public function create()
    {
         // Check if user_id is not set in the session
         if (!session()->has('user_id')) {
            return redirect()->to('login_form'); // Redirect to your login page
        }
        return view('galeri_foto/create');
    }
    
    public function store()
    {
        $model = new GaleriFotoModel();
    
        // Mengambil file foto dari form
        $foto = $this->request->getFile('foto');
    
        // Memeriksa apakah file foto valid dan belum dipindahkan
        if ($foto->isValid() && !$foto->hasMoved()) {
            // Membuat nama acak untuk foto
            $newFotoName = $foto->getRandomName();
    
            // Memindahkan file foto ke direktori yang sesuai
            $foto->move('upload/', $newFotoName);
    
            // Mendapatkan user_id dari sesi
            $user_id = session()->get('user_id');
    
            // Menyimpan data ke database
            $data = [
                'user_id' => $user_id,
                'foto' => $newFotoName,
            ];
            $model->insert($data);
    
            return redirect()->to('/galeri_foto');
        } else {
            // Jika ada kesalahan saat mengunggah foto
            // Tambahkan log atau tindakan yang sesuai
            return redirect()->back()->withInput()->with('error', 'Gagal mengunggah foto.');
        }
    }
    
    public function edit($id)
    {
         // Check if user_id is not set in the session
         if (!session()->has('user_id')) {
            return redirect()->to('login_form'); // Redirect to your login page
        }
        $model = new GaleriFotoModel();
        $data['galeri_foto'] = $model->find($id);
    
        return view('galeri_foto/edit', $data);
    }
    
    public function update($id)
    {
        $model = new GaleriFotoModel();
        $foto = $this->request->getFile('foto');
    
        if ($foto->isValid() && !$foto->hasMoved()) {
            $newFotoName = $foto->getRandomName();
            $foto->move('upload/', $newFotoName);
        } else {
            $newFotoName = $this->request->getPost('old_foto');
        }
    
        $data = [
            'foto' => $newFotoName,
        ];
    
        $model->update($id, $data);
    
        return redirect()->to('/galeri_foto');
    }
    
    public function delete($id)
    {
        $model = new GaleriFotoModel();
        $galeri_foto = $model->find($id);
    
        // Hapus foto dari direktori
        unlink('upload/' . $galeri_foto['foto']);
    
        // Hapus data dari database
        $model->delete($id);
    
        return redirect()->to('/galeri_foto');
    }
}    