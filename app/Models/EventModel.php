<?php

namespace App\Models;

use CodeIgniter\Model;

class EventModel extends Model
{
    protected $table = 'event';
    protected $allowedFields = ['tanggal', 'lokasi', 'user_id'];
    
    public function getEventsByUserId($userId)
    {
        return $this->where('user_id', $userId)->findAll();
    }
}
