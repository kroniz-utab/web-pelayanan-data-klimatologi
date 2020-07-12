<?php

namespace App\Models;

use CodeIgniter\Model;

class EvaporationModel extends Model
{
    protected $table = 'evaporation';
    protected $useTimestamps = true;

    protected $allowedFields = [
        'id_user',
        'eva1',
        'eva2',
        'eva3',
        'eva_total'
    ];
}
