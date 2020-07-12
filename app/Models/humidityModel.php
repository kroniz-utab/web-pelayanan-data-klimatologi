<?php

namespace App\Models;

use CodeIgniter\Model;

class HumidityModel extends Model
{
    protected $table = 'humidity';
    protected $useTimestamps = true;

    protected $allowedFields = [
        'id_user',
        'hum1',
        'hum2',
        'hum3',
        'rate_hum'
    ];
}
