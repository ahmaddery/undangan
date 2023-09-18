<?php

namespace App\Controllers;

use App\Models\ResepsiModel;

class ResepsiController extends BaseController
{
    public function index()
    {
         // Check if user_id is not set in the session
         if (!session()->has('user_id')) {
            return redirect()->to('login_form'); // Redirect to your login page
        }
        $model = new ResepsiModel();
        $data['resepsi'] = $model->findAll();
        
        return view('resepsi/index', $data);
    }

    public function create()
    {
         // Check if user_id is not set in the session
         if (!session()->has('user_id')) {
            return redirect()->to('login_form'); // Redirect to your login page
        }
        return view('resepsi/create');
    }

    public function store()
    {
        $model = new ResepsiModel();
        $data = [
            'pukul' => $this->request->getVar('pukul'),
            'tanggal' => $this->request->getVar('tanggal'),
            'user_id' => session()->get('user_id'),
        ];
        $model->insert($data);
        return redirect()->to('/resepsi');
    }

    public function edit($id)
    {
         // Check if user_id is not set in the session
         if (!session()->has('user_id')) {
            return redirect()->to('login_form'); // Redirect to your login page
        }
        $model = new ResepsiModel();
        $data['resepsi'] = $model->find($id);
        return view('resepsi/edit', $data);
    }

    public function update($id)
    {
        $model = new ResepsiModel();
        $data = [
            'pukul' => $this->request->getVar('pukul'),
            'tanggal' => $this->request->getVar('tanggal'),
        ];
        $model->update($id, $data);
        return redirect()->to('/resepsi');
    }

    public function delete($id)
    {
        $model = new ResepsiModel();
        $model->delete($id);
        return redirect()->to('/resepsi');
    }
}
