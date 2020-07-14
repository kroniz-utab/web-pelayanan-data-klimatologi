<?php

namespace App\Controllers;

use App\Models\BulanModel;
use App\Models\EvaporationModel;
use App\Models\FklimModel;
use App\Models\HumidityModel;
use App\Models\TemperatureModel;
use App\Models\UserModel;
use App\Models\WindModel;
use CodeIgniter\Debug\Toolbar\Collectors\Views;

class DataController extends BaseController
{
    public function coba()
    {
        $data = [
            'title' => 'HOME | Pusat Pelayanan Iklim',
            'cat' => 1,
        ];
        return view('pages/home', $data);
    }

    public function inputData()
    {
        $db = \Config\Database::connect();

        $bulan = new BulanModel;
        $result = $bulan->findAll();

        $query = $db->query('SELECT id, user_id, username FROM user_data ORDER BY user_id ASC');
        $get = $query->getResultArray();

        $data = [
            'title' => 'Input Data | Pusat Pelayanan Iklim',
            'bulan' => $result,
            'station' => $get,
            'validation' => \Config\Services::validation(),
            'cat' => 2
        ];
        return view('pages/input', $data);
    }

    public function about()
    {
        $data = [
            'title' => 'About Us | Pusat Pelayanan Iklim',
            'cat' => 4
        ];
        return view('pages/about', $data);
    }

    public function create()
    {
        // dd($this->request->getVar());

        if (!$this->validate([
            'stasiun_id' =>  'required|numeric',
            'tgl' =>  'required|numeric',
            'bln' =>  'required|numeric',
            'thn' =>  'required|numeric',
            'temp_bb1' => 'required',
            'temp_bb2' => 'required',
            'temp_bb3' => 'required',
            'temp_bk1' => 'required',
            'temp_bk2' => 'required',
            'temp_bk3' => 'required',
            'temp_max' => 'required',
            'temp_min' => 'required',
            'wind_rate' => 'required',
            'wind_dir' => 'required',
            'wind_max' => 'required',
            'wind_mdir' => 'required',
            'hum_1' => 'required',
            'hum_2' => 'required',
            'hum_3' => 'required',
            'peng_1' => 'required',
            'peng_2' => 'required',
            'peng_3' => 'required',
            'ch' => 'required',
            'solar' => 'required',
            'press' => 'required',
            'wh' => 'required',
        ])) {
            $validate = \Config\Services::validation();
            return redirect()->to('/input')->withInput()->with('validation', $validate);
        }
        $db = \Config\Database::connect();

        $user = $this->request->getVar('stasiun_id');

        // Temperature Handler
        // Bola Basah
        $bb1 = $this->request->getVar('temp_bb1');
        $bb2 = $this->request->getVar('temp_bb2');
        $bb3 = $this->request->getVar('temp_bb3');
        $ratebb = ($bb1 + $bb2 + $bb3) / 3;
        $ratebbr = round($ratebb, 1);

        // Bola Kering
        $bk1 = $this->request->getVar('temp_bk1');
        $bk2 = $this->request->getVar('temp_bk2');
        $bk3 = $this->request->getVar('temp_bk3');
        $ratebk = ($bk1 + $bk2 + $bk3) / 3;
        $ratebkr = round($ratebk, 1);

        $temp = new TemperatureModel();
        $temp->save([
            'id_user' => $user,
            'temp1_bb' => $bb1,
            'temp2_bb' => $bb2,
            'temp3_bb' => $bb3,
            'temp1_bk' => $bk1,
            'temp2_bk' => $bk2,
            'temp3_bk' => $bk3,
            'rate_bb' => $ratebbr,
            'rate_bk' => $ratebkr,
            'temp_min' => $this->request->getVar('temp_min'),
            'temp_max' => $this->request->getVar('temp_max'),
        ]);

        $queryTemp = $db->query('SELECT id FROM temperature ORDER BY id DESC LIMIT 1');
        $getTemp = $queryTemp->getResultArray();

        // Humidity Handler
        $hum1 = $this->request->getVar('hum_1');
        $hum2 = $this->request->getVar('hum_2');
        $hum3 = $this->request->getVar('hum_3');
        $ratehum = ($hum1 + $hum2 + $hum3) / 3;
        $ratehumr = round($ratehum, 1);

        $hum = new HumidityModel();
        $hum->save([
            'id_user' => $user,
            'hum1' => $hum1,
            'hum2' => $hum2,
            'hum3' => $hum3,
            'rate_hum' => $ratehumr
        ]);

        $queryHum = $db->query('SELECT id FROM humidity ORDER BY id DESC LIMIT 1');
        $getHum = $queryHum->getResultArray();

        // Evaporation Handler
        $peng1 = $this->request->getVar('peng_1');
        $peng2 = $this->request->getVar('peng_2');
        $peng3 = $this->request->getVar('peng_3');
        $totaleva = $peng3 - $peng1;

        $eva = new EvaporationModel();
        $eva->save([
            'id_user' => $user,
            'eva1' => $peng1,
            'eva2' => $peng2,
            'eva3' => $peng3,
            'eva_total' => $totaleva
        ]);

        $queryEva = $db->query('SELECT id FROM evaporation ORDER BY id DESC LIMIT 1');
        $getEva = $queryEva->getResultArray();

        // wind Handler
        $wind = new WindModel();
        $wind->save([
            'id_user' => $user, //coming soon
            'wind_rate' => $this->request->getVar('wind_rate'),
            'rate_dir' => $this->request->getVar('wind_dir'),
            'wind_max' => $this->request->getVar('wind_max'),
            'max_dir' => $this->request->getVar('wind_mdir')
        ]);

        $queryWind = $db->query('SELECT id FROM Wind ORDER BY id DESC LIMIT 1');
        $getWind = $queryWind->getResultArray();



        $idTemp = $getTemp[0]['id'];
        $idHum = $getHum[0]['id'];
        $idEva = $getEva[0]['id'];
        $idWind = $getWind[0]['id'];

        // fklim Handler
        $fklim = new FklimModel();
        $fklim->save([
            'id_user' => $user,
            'tgl' => $this->request->getVar('tgl'),
            'id_bulan' => $this->request->getVar('bln'),
            'thn' => $this->request->getVar('thn'),
            'id_temp' => $idTemp,
            'id_hum' => $idHum,
            'id_eva' => $idEva,
            'id_wind' => $idWind,
            'ch_tot' => $this->request->getVar('ch'),
            'solar_rad' => $this->request->getVar('solar'),
            'wh_event' => $this->request->getVar('wh'),
            'air_press' => $this->request->getVar('press'),
        ]);

        $queryBln = $db->query('SELECT bulan FROM bulan WHERE id = ?', $this->request->getVar('bln'));
        $bln = $queryBln->getRow()->bulan;

        $queryUpt = $db->query('SELECT username FROM user_data WHERE id = ?', $user);
        $upt = $queryUpt->getRow()->username;

        session()->setFlashdata('success', 'Berhasil Menambah Data ' . $upt . ' (' . $this->request->getVar('tgl') . ' ' . $bln . ' ' . $this->request->getVar('thn') . ')!');

        return redirect()->to('/input');
    }

    public function pengen()
    {
        // $db = \Config\Database::connect();

        // $query = $db->query('SELECT id, user_id, username FROM user_data');
        // $row = $query->getResultArray();

        $temp = new WindModel();
        $coba = $temp->findAll();
        dd($coba);

        // // echo ($row[12]['bulan']); // output Maret
        // dd($row);
        // foreach ($row as $e) {
        //     echo $e['username'];
        // }
    }
}
