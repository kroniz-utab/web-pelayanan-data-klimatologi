<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col">
            <div class="card mt-3 mb-5">
                <div class="card-body">
                    <h2 class="text-center text-uppercase font-weight-bold mb-4">data fklim71</h2>
                    <form>
                        <div class="form-group row">
                            <label for="staticStation" class="col-sm-2 col-form-label">Stasiun</label>
                            <div class="col-sm-10">
                                <input type="text" readonly class="form-control-plaintext" id="staticStation" value="<?= $upt[0]['user_id']; ?> - <?= $upt[0]['username']; ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="staticTanggal" class="col-sm-2 col-form-label">Tanggal</label>
                            <div class="col-sm-10">
                                <input type="text" readonly class="form-control-plaintext" id="staticTanggal" value="<?= $data['tgl']; ?> <?= $bulan; ?> <?= $data['thn']; ?>">
                            </div>
                        </div>

                    </form>
                    <div style="overflow-x:auto;">
                        <table class="table mt-2">
                            <tbody>
                                <tr>
                                    <th colspan="6">TEMPERATURE</th>
                                    <th colspan="4">ANGIN</th>
                                </tr>
                                <tr>
                                    <th class="col-1">07.00 WIB
                                        (BB)</th>
                                    <th class="col-1">13.00 WIB
                                        (BB)</th>
                                    <th class="col-1">18.00 WIB
                                        (BB)</th>
                                    <th class="col-1">RERATA
                                        BB</th>
                                    <th class="col-1">MAX</th>
                                    <th class="col-1">MIN</th>
                                    <th>KECEPATAN
                                        RATA - RATA</th>
                                    <th>ARAH TERBANYAK</th>
                                    <th>KECEPATAN
                                        MAX</th>
                                    <th>ARAH MAX</th>
                                </tr>
                                <tr>
                                    <td>
                                        <!--val 7 bb-->
                                        <input class="form-control form-control-sm" type="text" placeholder="<?= $temp[0]['temp1_bb']; ?>" readonly style="text-align: center;"> (&deg;C)
                                    </td>
                                    <td>
                                        <!--val 13 bb-->
                                        <input class="form-control form-control-sm" type="text" placeholder="<?= $temp[0]['temp2_bb']; ?>" readonly style="text-align: center;"> (&deg;C)
                                    </td>
                                    <td>
                                        <!--val 18 bb-->
                                        <input class="form-control form-control-sm" type="text" placeholder="<?= $temp[0]['temp3_bb']; ?>" readonly style="text-align: center;"> (&deg;C)
                                    </td>
                                    <td>
                                        <!--val rata bb-->
                                        <input class="form-control form-control-sm" type="text" placeholder="<?= $temp[0]['rate_bb']; ?>" readonly style="text-align: center;"> (&deg;C)
                                    </td>
                                    <td rowspan="3">
                                        <!--val max-->
                                        <input class="form-control form-control-sm" type="text" placeholder="<?= $temp[0]['temp_max']; ?>" readonly style="text-align: center;"> (&deg;C)
                                    </td>
                                    <td rowspan="3">
                                        <!--val min-->
                                        <input class="form-control form-control-sm" type="text" placeholder="<?= $temp[0]['temp_min']; ?>" readonly style="text-align: center;"> (&deg;C)
                                    </td>
                                    <td>
                                        <!--val kec rata - rata-->
                                        <input class="form-control form-control-sm" type="text" placeholder="<?= $wind[0]['wind_rate']; ?>" readonly style="text-align: center;"> (knot)
                                    </td>
                                    <td>
                                        <!--val arah ter-->
                                        <input class="form-control form-control-sm" type="text" placeholder="<?= $wind[0]['rate_dir']; ?>" readonly style="text-align: center;"> (&deg;)
                                    </td>
                                    <td>
                                        <!--val kec max-->
                                        <input class="form-control form-control-sm" type="text" placeholder="<?= $wind[0]['wind_max']; ?>" readonly style="text-align: center;"> (knot)
                                    </td>
                                    <td>
                                        <!--val arah max-->
                                        <input class="form-control form-control-sm" type="text" placeholder="<?= $wind[0]['max_dir']; ?>" readonly style="text-align: center;"> (&deg;)
                                    </td>
                                </tr>
                                <tr>
                                    <th>07.00 WIB
                                        (BK)</th>
                                    <th>13.00 WIB
                                        (BK)</th>
                                    <th>18.00 WIB
                                        (BK)</th>
                                    <th>RERATA
                                        BK</th>
                                    <th rowspan="4">CURAH HUJAN
                                        <br>
                                        <small>
                                            Diambil setiap pukul 07.00 WIB
                                        </small>
                                    </th>
                                    <th rowspan="4">PENYINARAN
                                        MATAHARI
                                        <br>
                                        <small>
                                            08.00 - 16.00 WIB
                                        </small></th>
                                    <th rowspan="4">TEKANAN UDARA
                                        RATA - RATA</th>
                                    <th rowspan="4">PERISTIWA CUACA
                                        KHUSUS</th>
                                </tr>
                                <tr>
                                    <td>
                                        <!--val 7 bk-->
                                        <input class="form-control form-control-sm" type="text" placeholder="<?= $temp[0]['temp1_bk']; ?>" readonly style="text-align: center;"> (&deg;C)
                                    </td>
                                    <td>
                                        <!--val 13 bk-->
                                        <input class="form-control form-control-sm" type="text" placeholder="<?= $temp[0]['temp2_bk']; ?>" readonly style="text-align: center;"> (&deg;C)
                                    </td>
                                    <td>
                                        <!--val 18 bk-->
                                        <input class="form-control form-control-sm" type="text" placeholder="<?= $temp[0]['temp3_bk']; ?>" readonly style="text-align: center;"> (&deg;C)
                                    </td>
                                    <td>
                                        <!--val rerata bk-->
                                        <input class="form-control form-control-sm" type="text" placeholder="<?= $temp[0]['rate_bk']; ?>" readonly style="text-align: center;"> (&deg;C)
                                    </td>
                                </tr>
                                <tr>
                                    <th colspan="3">KELEMBABAN</th>
                                    <th colspan="3">PENGUAPAN</th>
                                </tr>
                                <tr>
                                    <th>07.00 WIB</th>
                                    <td>
                                        <!--val kel 7-->
                                        <input class="form-control form-control-sm" type="text" placeholder="<?= $hum[0]['hum1']; ?>" readonly style="text-align: center;"> (%)
                                    </td>
                                    <th>RERATA</th>
                                    <th>07.00 WIB</th>
                                    <td>
                                        <!--val peng 7-->
                                        <input class="form-control form-control-sm" type="text" placeholder="<?= $eva[0]['eva1']; ?>" readonly style="text-align: center;">
                                    </td>
                                    <th>JUMLAH</th>
                                </tr>
                                <tr>
                                    <th>13.00 WIB</th>
                                    <td>
                                        <!--val kel 13-->
                                        <input class="form-control form-control-sm" type="text" placeholder="<?= $hum[0]['hum2']; ?>" readonly style="text-align: center;"> (%)
                                    </td>
                                    <td rowspan="2">
                                        <!--val kel rata-->
                                        <input class="form-control form-control-sm" type="text" placeholder="<?= $hum[0]['rate_hum']; ?>" readonly style="text-align: center;"> (%)
                                    </td>
                                    <th>13.00 WIB</th>
                                    <td>
                                        <!--val peng 13-->
                                        <input class="form-control form-control-sm" type="text" placeholder="<?= $eva[0]['eva2']; ?>" readonly style="text-align: center;">
                                    </td>
                                    <td rowspan="2">
                                        <!--val jum peng-->
                                        <input class="form-control form-control-sm" type="text" placeholder="<?= $eva[0]['eva_total']; ?>" readonly style="text-align: center;">
                                    </td>
                                    <td rowspan="2">
                                        <!--val ch-->
                                        <input class="form-control form-control-sm" type="text" placeholder="<?= $data['ch_tot']; ?>" readonly style="text-align: center;"> (mm)
                                    </td>
                                    <td rowspan="2">
                                        <!--val solar-->
                                        <input class="form-control form-control-sm" type="text" placeholder="<?= $data['solar_rad']; ?>" readonly style="text-align: center;"> (%)
                                    </td>
                                    <td rowspan="2">
                                        <!--val tek-->
                                        <input class="form-control form-control-sm" type="text" placeholder="<?= $data['air_press']; ?>" readonly style="text-align: center;"> (mb)
                                    </td>
                                    <td rowspan="2">
                                        <!--val weather-->
                                        <input class="form-control form-control-sm" type="text" placeholder="<?= $data['wh_event']; ?>" readonly style="text-align: center;">
                                    </td>
                                </tr>
                                <tr>
                                    <th>18.00 WIB</th>
                                    <td>
                                        <!--val kel 18-->
                                        <input class="form-control form-control-sm" type="text" placeholder="<?= $hum[0]['hum3']; ?>" readonly style="text-align: center;"> (%)
                                    </td>
                                    <th>18.00 WIB</th>
                                    <td>
                                        <!--val peng 18-->
                                        <input class="form-control form-control-sm" type="text" placeholder="<?= $eva[0]['eva3']; ?>" readonly style="text-align: center;">
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>