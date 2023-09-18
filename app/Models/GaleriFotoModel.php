<?php

namespace App\Models;

use CodeIgniter\Model;

class GaleriFotoModel extends Model
{
    protected $table = 'galeri_foto';
    protected $primaryKey = 'id';
    protected $allowedFields = ['user_id', 'foto'];

    // Fungsi untuk mengambil data galeri foto berdasarkan user_id
    public function getByUserId($user_id)
    {
        return $this->where('user_id', $user_id)->findAll();
    }
}
