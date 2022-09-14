<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelMobil extends Model
{

    protected $table = 'mobil';
    protected $primaryKey = 'idmobil';
    protected $allowedFields = [
        'idmobil', 'foto_mobil', 'type_mobil', 'merk', 'no_polisi',  'harga', 'status'
    ];
}
