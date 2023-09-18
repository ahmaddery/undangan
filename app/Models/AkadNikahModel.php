<?php

namespace App\Models;

use CodeIgniter\Model;

class AkadNikahModel extends Model
{
    protected $table = 'akad_nikah';
    protected $primaryKey = 'id';
    protected $allowedFields = ['pukul', 'tanggal', 'user_id'];

    public function getAcaraByUserId($user_id)
    {
        return $this->where('user_id', $user_id)->findAll();
    }
}
