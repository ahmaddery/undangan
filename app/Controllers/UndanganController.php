<?php

namespace App\Controllers;

class UndanganController extends BaseController
{
    public function index($user_id)
    {
        // Menggunakan $user_id untuk mengambil data dari model-model
        $eventModel = new \App\Models\EventModel();
        $acaraModel = new \App\Models\AcaraModel();
        $mempelaiPriaModel = new \App\Models\MempelaiPriaModel();
        $mempelaiWanitaModel = new \App\Models\MempelaiWanitaModel();
        $akadNikahModel = new \App\Models\AkadNikahModel(); // Menambahkan model AkadNikahModel
        $resepModel = new \App\Models\ResepsiModel(); // Menambahkan model ResepsiModel
        $galeriFotoModel = new \App\Models\GaleriFotoModel(); // Menambahkan model GaleriFotoModel

        $data['events'] = $eventModel->getEventsByUserId($user_id);
        $data['acara'] = $acaraModel->getAcaraByUserId($user_id);
        $data['mempelaiPria'] = $mempelaiPriaModel->getMempelaiPriaByUserId($user_id);
        $data['mempelaiWanita'] = $mempelaiWanitaModel->getMempelaiWanitaByUserId($user_id);
        $data['akadNikah'] = $akadNikahModel->getAcaraByUserId($user_id); // Mengambil data Akad Nikah
        $data['resep'] = $resepModel->getAcaraByUserId($user_id); // Mengambil data Resepsi
        $data['galeriFoto'] = $galeriFotoModel->getByUserId($user_id); // Mengambil data dari GaleriFotoModel


        // Kemudian, Anda bisa mengirim data ini ke tampilan (view) Anda.
        return view('undangan/index', $data);
    }
}
