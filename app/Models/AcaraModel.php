<?php

namespace App\Models;

use CodeIgniter\Model;

class AcaraModel extends Model
{
    protected $table = 'acara';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nama_mempelai', 'tanggal_jam', 'user_id'];

    public function getAcaraByUserId($user_id)
    {
        return $this->where('user_id', $user_id)->findAll();
    }
}
