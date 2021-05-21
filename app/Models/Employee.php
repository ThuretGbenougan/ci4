<?php

namespace App\Models;

use CodeIgniter\Model;

class Employee extends Model
{
    protected $table      = 'employes';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'first_name',
        'last_name',
        'phone',
        'email',
        'designation',
    ];

}