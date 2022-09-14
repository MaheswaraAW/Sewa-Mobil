<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelSewa extends Model
{

    protected $table = 'sewa';
    protected $primaryKey = 'id_sewa';
    protected $allowedFields = [
        'id_sewa', 'nama', 'no_rekening', 'bukti_transfer', 'status_sewa', 'idmobil',  'tgl_sewa', 'tgl_selesai', 'hari', 'harga_total'
    ];
}
