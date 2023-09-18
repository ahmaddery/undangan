<?php

namespace App\Models;

use CodeIgniter\Model;

class MempelaiWanitaModel extends Model
{
    protected $table = 'mempelai_wanita';
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

    public function getMempelaiWanitaByUserId($user_id)
    {
        return $this->where('user_id', $user_id)->findAll();
    }
}
