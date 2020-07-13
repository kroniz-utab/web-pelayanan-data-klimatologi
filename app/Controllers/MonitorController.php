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
            'station' => $get,
            'validation' => \Config\Services::validation(),
            'cat' => 3
        ];
        return view('pages/status', $data);
    }

    public function stat()
    {
        // VALIDATION JANGAN LUPA!
        if (!$this->validate([
            'stasiun_id' =>  'required|numeric',
            'bulan' =>  'required|numeric',
            'tahun' =>  'required|numeric',
        ])) {
            $validate = \Config\Services::validation();
            return redirect()->to('/monitor')->withInput()->with('validation', $validate);
        }

        $db = \Config\Database::connect();

        $station = $this->request->getVar('stasiun_id');
        $bln = $this->request->getVar('bulan');
        $thn = $this->request->getVar('tahun');

        if ($bln == 2) {
            $hr = 29;
        } elseif ($bln == 4 || $bln == 6 || $bln == 9 || $bln == 11) {
            $hr = 30;
        } else {
            $hr = 31;
        }

        $data = [];

        $querybln = $db->query('SELECT bulan FROM bulan WHERE id = ? LIMIT 1', $bln);
        $bulan = $querybln->getRow()->bulan;

        $queryUpt = $db->query('SELECT username FROM user_data WHERE id = ? LIMIT 1', $station);
        $upt = $queryUpt->getRow()->username;

        $query = $db->query('SELECT id, tgl FROM fklim WHERE id_user = ? AND id_bulan = ? AND thn = ?', [$station, $bln, $thn]);
        $tanggal = $query->getResultArray();


        for ($i = 1; $i <= $hr; $i++) {
            $data[$i]['id'] = 'NULL';
            $data[$i]['bulan'] = $bulan;
            $data[$i]['tahun'] = $thn;
            $data[$i]['upt'] = $upt;
        }

        foreach ($tanggal as $t) {
            $data[$t['tgl']]['id'] = $t['id'];
        }

        // dd($data); // Nanti Dilempar


        // d($bulan);
        // d($thn);
        // d($upt);
        // dd($data); //Data Yang dilempar

        $bulan = new BulanModel;
        $bln = $bulan->findAll();

        $data = [
            'title' => 'Monitoring FKLIM | Pusat Pelayana FKLIM',
            'data' => $data,
            'bulan' => $bln,
            'tahun' => $thn,
            'upt' => $upt,
            'cat' => 3
        ];

        return view('pages/result', $data);
    }

    public function coba_coba()
    {
        $bln = new BulanModel();
        $result = $bln->findAll();

        dd($result);
    }

    public function details($id)
    {

        $fklim = new FklimModel();
        $iklim = $fklim->where(['id' => $id])->first();

        $db = \Config\Database::connect();

        $querybln = $db->query('SELECT bulan FROM bulan WHERE id = ? LIMIT 1', $iklim['id_bulan']);
        $queryUpt = $db->query('SELECT * FROM user_data WHERE id = ? LIMIT 1', $iklim['id_user']);
        $queryTemp = $db->query('SELECT * FROM temperature WHERE id = ? LIMIT 1', $iklim['id_temp']);
        $queryHum = $db->query('SELECT * FROM humidity WHERE id = ? LIMIT 1', $iklim['id_hum']);
        $queryWind = $db->query('SELECT * FROM wind WHERE id = ? LIMIT 1', $iklim['id_wind']);
        $queryEva = $db->query('SELECT * FROM evaporation WHERE id = ? LIMIT 1', $iklim['id_eva']);

        $bulan = $querybln->getRow()->bulan;
        $upt = $queryUpt->getResultArray();
        $temp = $queryTemp->getResultArray();
        $hum = $queryHum->getResultArray();
        $wind = $queryWind->getResultArray();
        $eva = $queryEva->getResultArray();

        // d($iklim);
        // d($bulan);
        // d($upt);
        // d($temp);
        // d($hum);
        // d($wind);
        // dd($eva);

        $data = [
            'title' => 'Monitoring FKLIM | Pusat Pelayana FKLIM',
            'data' => $iklim,
            'bulan' => $bulan,
            'upt' => $upt,
            'temp' => $temp,
            'hum' => $hum,
            'wind' => $wind,
            'eva' => $eva,
            'cat' => 3
        ];

        return view('pages/detail', $data);
    }
}
