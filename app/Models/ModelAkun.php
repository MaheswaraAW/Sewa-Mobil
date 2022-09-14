<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelAkun extends Model
{

    protected $table = 'akun';
    protected $primaryKey = 'Id_akun';
    protected $allowedFields = [
        'Id_akun', 'Nama', 'Email', 'Password', 'Alamat', 'No_Telepon', 'KTP', 'Status'
    ];
}
