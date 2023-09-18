<?php

namespace App\Models;

use CodeIgniter\Model;

class MempelaiPriaModel extends Model
{
    protected $table = 'mempelai_pria';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nama', 'deskripsi', 'orangtua', 'foto', 'user_id'];

    public function getAll()
    {
        return $this->findAll();
    }

    public function getFotoPath($id)
    {
        return $this->where('id', $id)->select('foto')->first();
    }

    public function getMempelaiPriaByUserId($user_id)
    {
        return $this->where('user_id', $user_id)->findAll();
    }
}
