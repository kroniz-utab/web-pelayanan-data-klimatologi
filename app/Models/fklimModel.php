<?php

namespace App\Models;

use CodeIgniter\Model;

class FklimModel extends Model
{
    protected $table = 'fklim';
    protected $useTimestamps = true;

    protected $allowedFields = [
        'id_user',
        'tgl',
        'id_bulan',
        'thn',
        'id_temp',
        'id_hum',
        'id_eva',
        'id_wind',
        'ch_tot',
        'solar_rad',
        'wh_event',
        'air_press'
    ];
}
