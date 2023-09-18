<?php

namespace App\Controllers;

use App\Models\EventModel;
use CodeIgniter\Controller;

class EventController extends Controller
{
    public function __construct()
    {
        helper(['session']);
    }

    public function index()
    {
        // Check if user_id is not set in the session
        if (!session()->has('user_id')) {
            return redirect()->to('login_form'); // Redirect to your login page
        }

        $model = new EventModel();
        $data['events'] = $model->getEventsByUserId(session()->get('user_id'));

        return view('events/index', $data);
    }

    public function create()
    {
        // Check if user_id is not set in the session
        if (!session()->has('user_id')) {
            return redirect()->to('login_form'); // Redirect to your login page
        }

        return view('events/create');
    }

    public function store()
    {
        // Check if user_id is not set in the session
        if (!session()->has('user_id')) {
            return redirect()->to('login_form'); // Redirect to your login page
        }

        $model = new EventModel();

        $data = [
            'tanggal' => $this->request->getPost('tanggal'),
            'lokasi' => $this->request->getPost('lokasi'),
            'user_id' => session()->get('user_id')
        ];

        $model->insert($data);

        return redirect()->to('events');
    }

    public function edit($id)
    {
        // Check if user_id is not set in the session
        if (!session()->has('user_id')) {
            return redirect()->to('login_form'); // Redirect to your login page
        }

        $model = new EventModel();
        $data['event'] = $model->find($id);

        return view('events/edit', $data);
    }

    public function update($id)
    {
        // Check if user_id is not set in the session
        if (!session()->has('user_id')) {
            return redirect()->to('login_form'); // Redirect to your login page
        }

        $model = new EventModel();

        $data = [
            'tanggal' => $this->request->getPost('tanggal'),
            'lokasi' => $this->request->getPost('lokasi')
        ];

        $model->update($id, $data);

        return redirect()->to('/events');
    }

    public function delete($id)
    {
        // Check if user_id is not set in the session
        if (!session()->has('user_id')) {
            return redirect()->to('login_form'); // Redirect to your login page
        }

        $model = new EventModel();

        $model->delete($id);

        return redirect()->to('/events');
    }
}
