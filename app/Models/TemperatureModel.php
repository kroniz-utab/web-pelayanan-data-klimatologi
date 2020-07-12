<?php

namespace App\Models;

use CodeIgniter\Model;

class TemperatureModel extends Model
{
    protected $table = 'temperature';
    protected $useTimestamps = true;

    protected $allowedFields = [
        'id_user',
        'temp1_bb',
        'temp2_bb',
        'temp3_bb',
        'temp1_bk',
        'temp2_bk',
        'temp3_bk',
        'rate_bb',
        'rate_bk',
        'temp_min',
        'temp_max',
    ];
}
