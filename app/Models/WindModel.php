<?php

namespace App\Models;

use CodeIgniter\Model;

class WindModel extends Model
{
    protected $table = 'wind';
    protected $useTimestamps = true;

    protected $allowedFields = [
        'id_user',
        'wind_rate',
        'rate_dir',
        'wind_max',
        'max_dir'
    ];
}
