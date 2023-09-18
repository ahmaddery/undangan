<?php

namespace App\Models;

use CodeIgniter\Model;

class LoginActivityModel extends Model
{
    protected $table = 'login_activity';
    protected $allowedFields = ['admin_id', 'login_ip'];

    public function addLoginActivity($adminId, $ipAddress)
    {
        $this->insert([
            'admin_id' => $adminId,
            'login_ip' => $ipAddress,
        ]);
    }

    public function getLoginActivities()
    {
        return $this->select('login_activity.*, admin.full_name')
            ->join('admin', 'admin.id = login_activity.admin_id')
            ->orderBy('login_time', 'DESC')
            ->findAll();
    }



}
