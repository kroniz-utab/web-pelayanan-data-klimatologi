<?php

namespace App\Controllers;

use App\Models\BulanModel;
use App\Models\FklimModel;
use CodeIgniter\Debug\Toolbar\Collectors\Views;


class MonitorController extends BaseController
{
    // public function monitoring()
    // {
    //     $bulan = new BulanModel;
    //     $result = $bulan->findAll();
    //     $data = [
    //         'title' => 'Monitoring FKLIM | Pusat Pelayana FKLIM',
    //         'bulan' => $result,
    //     ];
    //     return view('pages/monitoring', $data);
    // }

    public function status()
    {
        $bulan = new BulanModel;
        $result = $bulan->findAll();

        $db = \Config\Database::connect();

        $query = $db->query('SELECT id, user_id, username FROM user_data ORDER BY user_id ASC');
        $get = $query->getResultArray();


        $data = [
            'title' => 'Monitoring FKLIM | Pusat Pelayana FKLIM',
            'bulan' => $result,
            'station' => $get
        ];
        return view('pages/status', $data);
    }

    public function stat()
    {
        // VALIDATION JANGAN LUPA!

        $db = \Config\Database::connect();

        $station = $this->request->getVar('stasiun_id');
        $bln = $this->request->getVar('bulan');
        $thn = $this->request->getVar('tahun');

        if ($bln == 2) {
            $hr = 29;
        } elseif ($bln == 4 || $bln == 6 || $bln == 9 || $bln == 11) {
            $hr = 30;
        }
        else {
            $hr = 31;
        }

        $data = [];

        $query = $db->query('SELECT tgl FROM fklim WHERE id_user = ? AND id_bulan = ? AND thn = ?', [$station, $bln, $thn]);
        $tanggal = $query->getResultArray();


        for ($i = 1; $i <= $hr; $i++) {
            $data[$i] = 'NULL';
        }

        foreach ($tanggal as $t) {
            $data[$t['tgl']] = 'DONE';
        }

        // dd($data); // Nanti Dilempar

        $querybln = $db->query('SELECT bulan FROM bulan WHERE id = ? LIMIT 1', $bln);
        $bulan = $querybln->getRow()->bulan;

        $queryUpt = $db->query('SELECT username FROM user_data WHERE id = ? LIMIT 1', $station);
        $upt = $queryUpt->getRow()->username;

        d($bulan);
        d($thn);
        d($upt);
        dd($data); //Data Yang dilempar

        $bulan = new BulanModel;
        $bln = $bulan->findAll();

        $data = [
            'title' => 'Monitoring FKLIM | Pusat Pelayana FKLIM',
            'data' => $data,
            'bulan' => $bln,
            'tahun' => $thn,
            'upt' => $upt
        ];

        return view('pages/result', $data);
    }

    public function coba_coba()
    {
        $bln = new BulanModel();
        $result = $bln->findAll();

        dd($result);
    }
}
