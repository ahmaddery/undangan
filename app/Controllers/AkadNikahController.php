<?php

namespace App\Controllers;

use App\Models\AkadNikahModel;

class AkadNikahController extends BaseController
{
    public function index()
    {
         // Check if user_id is not set in the session
         if (!session()->has('user_id')) {
            return redirect()->to('login_form'); // Redirect to your login page
        }
        $model = new AkadNikahModel();
        $data['akad_nikah'] = $model->findAll();
        
        return view('akad_nikah/index', $data);
    }

    public function create()
    {
         // Check if user_id is not set in the session
         if (!session()->has('user_id')) {
            return redirect()->to('login_form'); // Redirect to your login page
        }
        return view('akad_nikah/create');
    }

    public function store()
    {
        $model = new AkadNikahModel();
        $data = [
            'pukul' => $this->request->getVar('pukul'),
            'tanggal' => $this->request->getVar('tanggal'),
            'user_id' => session()->get('user_id'),
        ];
        $model->insert($data);
        return redirect()->to('/akad_nikah');
    }

    public function edit($id)
    {
         // Check if user_id is not set in the session
         if (!session()->has('user_id')) {
            return redirect()->to('login_form'); // Redirect to your login page
        }
        $model = new AkadNikahModel();
        $data['akad'] = $model->find($id);
        return view('akad_nikah/edit', $data);
    }

    public function update($id)
    {
        $model = new AkadNikahModel();
        $data = [
            'pukul' => $this->request->getVar('pukul'),
            'tanggal' => $this->request->getVar('tanggal'),
        ];
        $model->update($id, $data);
        return redirect()->to('/akad_nikah');
    }

    public function delete($id)
    {
        $model = new AkadNikahModel();
        $model->delete($id);
        return redirect()->to('/akad_nikah');
    }
}
