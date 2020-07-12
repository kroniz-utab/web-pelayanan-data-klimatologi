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
            'title' => 'HOME | Pusat Pelayana FKLIM',
        ];
        return view('pages/result', $data);
    }

    public function inputData()
    {
        $db = \Config\Database::connect();

        $bulan = new BulanModel;
        $result = $bulan->findAll();

        $query = $db->query('SELECT id, user_id, username FROM user_data');
        $get = $query->getResultArray();

        $data = [
            'title' => 'Input Data | Pusat Pelayana FKLIM',
            'bulan' => $result,
            'station' => $get,
            'validation' => \Config\Services::validation()
        ];
        return view('pages/input', $data);
    }

    public function about()
    {
        $data = [
            'title' => 'About Us | Pusat Pelayana FKLIM',
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

        // Bola Kering
        $bk1 = $this->request->getVar('temp_bk1');
        $bk2 = $this->request->getVar('temp_bk2');
        $bk3 = $this->request->getVar('temp_bk3');
        $ratebk = ($bk1 + $bk2 + $bk3) / 3;

        $temp = new TemperatureModel();
        $temp->save([
            'id_user' => $user,
            'temp1_bb' => $bb1,
            'temp2_bb' => $bb2,
            'temp3_bb' => $bb3,
            'temp1_bk' => $bk1,
            'temp2_bk' => $bk2,
            'temp3_bk' => $bk3,
            'rate_bb' => $ratebb,
            'rate_bk' => $ratebk,
            'temp_min' => $this->request->getVar('temp_min'),
            'temp_max' => $this->request->getVar('temp_max'),
        ]);

        // Humidity Handler
        $hum1 = $this->request->getVar('hum_1');
        $hum2 = $this->request->getVar('hum_2');
        $hum3 = $this->request->getVar('hum_3');
        $ratehum = ($hum1 + $hum2 + $hum3) / 3;

        $hum = new HumidityModel();
        $hum->save([
            'id_user' => $user,
            'hum1' => $hum1,
            'hum2' => $hum2,
            'hum3' => $hum3,
            'rate_hum' => $ratehum
        ]);

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

        // wind Handler
        $wind = new WindModel();
        $wind->save([
            'id_user' => $user, //coming soon
            'wind_rate' => $this->request->getVar('wind_rate'),
            'rate_dir' => $this->request->getVar('wind_dir'),
            'wind_max' => $this->request->getVar('wind_max'),
            'max_dir' => $this->request->getVar('wind_mdir')
        ]);

        $query = $db->query('SELECT id FROM temperature ORDER BY id DESC LIMIT 1');
        $get = $query->getResultArray();

        $id = $get[0]['id'];

        // fklim Handler
        $fklim = new FklimModel();
        $fklim->save([
            'id_user' => $user,
            'tgl' => $this->request->getVar('tgl'),
            'id_bulan' => $this->request->getVar('bln'),
            'thn' => $this->request->getVar('thn'),
            'id_temp' => $id,
            'id_hum' => $id,
            'id_eva' => $id,
            'id_wind' => $id,
            'ch_tot' => $this->request->getVar('ch'),
            'solar_rad' => $this->request->getVar('solar'),
            'wh_event' => $this->request->getVar('wh'),
            'air_press' => $this->request->getVar('press'),
        ]);

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
