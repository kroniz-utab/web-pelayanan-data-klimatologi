<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col">
            <div class="card mt-3 mb-5">
                <div class="card-body">
                    <form action="/input/save" method="POST">
                        <?= csrf_field(); ?>
                        <div class="form-group row">
                            <label for="stasiun_id" class="col-sm-2 col-form-label">Stasiun</label>
                            <div class="col-sm-6">
                                <select class="form-control form-control-sm <?= ($validation->hasError('stasiun_id')) ? 'is-invalid' : ''; ?>" id="stasiun_id" name="stasiun_id">
                                    <option selected>Stasiun</option>
                                    <?php foreach ($station as $s) : ?>
                                        <option value="<?= $s['id']; ?>"><?= $s['user_id']; ?> - <?= $s['username']; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="tgl" class="col-sm-2 col-form-label">Tanggal</label>
                            <div class="col-sm-2">
                                <select class="form-control form-control-sm <?= ($validation->hasError('tgl')) ? 'is-invalid' : ''; ?>" id="tgl" name="tgl">
                                    <option selected>Tanggal</option>
                                    <?php for ($i = 1; $i < 32; $i++) : ?>
                                        <option value="<?= $i; ?>"><?= $i; ?></option>
                                    <?php endfor; ?>
                                </select>
                            </div>
                            <div class="col-sm-2">
                                <select class="form-control form-control-sm <?= ($validation->hasError('bln')) ? 'is-invalid' : ''; ?>" id="bln" name="bln">
                                    <option selected>Bulan</option>
                                    <?php foreach ($bulan as $r) : ?>
                                        <option value="<?= $r['id']; ?>"><?= $r['bulan']; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="col-sm-2">
                                <select class="form-control form-control-sm <?= ($validation->hasError('thn')) ? 'is-invalid' : ''; ?>" id="thn" name="thn">
                                    <option selected>Tahun</option>
                                    <?php for ($i = 2015; $i < 2051; $i++) : ?>
                                        <option value="<?= $i; ?>"><?= $i; ?></option>
                                    <?php endfor; ?>
                                </select>
                            </div>
                        </div>
                        <div style="overflow-x:auto;">
                            <table class="table mt-1">
                                <tbody>
                                    <tr>
                                        <th colspan="4">TEMPERATUR</th>
                                        <th colspan="4">ANGIN</th>
                                    </tr>
                                    <tr>
                                        <th>07.00 WIB
                                            (BB)</th>
                                        <th>13.00 WIB
                                            (BB)</th>
                                        <th>18.00 WIB
                                            (BB)</th>
                                        <th>MAX</th>
                                        <th>KECEPATAN
                                            RATA - RATA</th>
                                        <th>ARAH TERBANYAK</th>
                                        <th>KECEPATAN
                                            MAX</th>
                                        <th>ARAH
                                            MAX</th>
                                    </tr>
                                    <tr>
                                        <td>
                                            <!--bb 7 -->
                                            <input class="form-control form-control-sm <?= ($validation->hasError('temp_bb1')) ? 'is-invalid' : ''; ?>" type="text" name="temp_bb1" style="text-align: center;" value="<?= old('temp_bb1'); ?>"> (&deg;C)
                                        </td>
                                        <td>
                                            <!--bb 13 -->
                                            <input class="form-control form-control-sm <?= ($validation->hasError('temp_bb2')) ? 'is-invalid' : ''; ?>" type="text" name="temp_bb2" style="text-align: center;" value="<?= old('temp_bb2'); ?>"> (&deg;C)
                                        </td>
                                        <td>
                                            <!--  bb 18-->
                                            <input class="form-control form-control-sm <?= ($validation->hasError('temp_bb3')) ? 'is-invalid' : ''; ?>" type="text" name="temp_bb3" style="text-align: center;" value="<?= old('temp_bb3'); ?>"> (&deg;C)
                                        </td>
                                        <td>
                                            <!-- max-->
                                            <input class="form-control form-control-sm <?= ($validation->hasError('temp_max')) ? 'is-invalid' : ''; ?>" type="text" name="temp_max" style="text-align: center;" value="<?= old('temp_max'); ?>"> (&deg;C)
                                        </td>
                                        <td>
                                            <!-- kec rate-->
                                            <input class="form-control form-control-sm <?= ($validation->hasError('wind_rate')) ? 'is-invalid' : ''; ?>" type="text" name="wind_rate" style="text-align: center;" value="<?= old('wind_rate'); ?>"> (knot)
                                        </td>
                                        <td>
                                            <!-- arah ter-->
                                            <input class="form-control form-control-sm <?= ($validation->hasError('wind_dir')) ? 'is-invalid' : ''; ?>" type="text" name="wind_dir" style="text-align: center;" value="<?= old('wind_dir'); ?>"> (&deg;)
                                        </td>
                                        <td>
                                            <!-- kec max-->
                                            <input class="form-control form-control-sm <?= ($validation->hasError('wind_max')) ? 'is-invalid' : ''; ?>" type="text" name="wind_max" style="text-align: center;" value="<?= old('wind_max'); ?>"> (knot)
                                        </td>
                                        <td>
                                            <!--arah max -->
                                            <input class="form-control form-control-sm <?= ($validation->hasError('wind_mdir')) ? 'is-invalid' : ''; ?>" type="text" name="wind_mdir" style="text-align: center;" value="<?= old('wind_mdir'); ?>"> (&deg;)
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>07.00 WIB
                                            (BK)</th>
                                        <th>13.00 WIB
                                            (BK)</th>
                                        <th>18.00 WIB
                                            (BK)</th>
                                        <th>MIN</th>
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
                                            </small>
                                        </th>
                                        <th rowspan="4">TEKANAN UDARA
                                            RATA - RATA</th>
                                        <th rowspan="4">PERISTIWA
                                            CUACA
                                            KHUSUS</th>
                                    </tr>
                                    <tr>
                                        <td>
                                            <!--bk 7 -->
                                            <input class="form-control form-control-sm <?= ($validation->hasError('temp_bk1')) ? 'is-invalid' : ''; ?>" type="text" name="temp_bk1" style="text-align: center;" value="<?= old('temp_bk1'); ?>"> (&deg;C)
                                        </td>
                                        <td>
                                            <!-- bk 13 -->
                                            <input class="form-control form-control-sm <?= ($validation->hasError('temp_bk2')) ? 'is-invalid' : ''; ?>" type="text" name="temp_bk2" style="text-align: center;" value="<?= old('temp_bk2'); ?>"> (&deg;C)
                                        </td>
                                        <td>
                                            <!-- bk 18-->
                                            <input class="form-control form-control-sm <?= ($validation->hasError('temp_bk3')) ? 'is-invalid' : ''; ?>" type="text" name="temp_bk3" style="text-align: center;" value="<?= old('temp_bk3'); ?>"> (&deg;C)
                                        </td>
                                        <td>
                                            <!-- min-->
                                            <input class="form-control form-control-sm <?= ($validation->hasError('temp_min')) ? 'is-invalid' : ''; ?>" type="text" name="temp_min" style="text-align: center;" value="<?= old('temp_min'); ?>"> (&deg;C)
                                        </td>
                                    </tr>
                                    <tr>
                                        <th colspan="2">KELEMBABAN</th>
                                        <th colspan="2">PENGUAPAN</th>
                                    </tr>
                                    <tr>
                                        <th>07.00 WIB</th>
                                        <td>
                                            <!-- kelem 7-->
                                            <input class="form-control form-control-sm <?= ($validation->hasError('hum_1')) ? 'is-invalid' : ''; ?>" type="text" name="hum_1" style="text-align: center;" value="<?= old('hum_1'); ?>"> (%)
                                        </td>
                                        <th>07.00 WIB</th>
                                        <td>
                                            <!--pengu 7 -->
                                            <input class="form-control form-control-sm <?= ($validation->hasError('peng_1')) ? 'is-invalid' : ''; ?>" type="text" name="peng_1" style="text-align: center;" value="<?= old('peng_1'); ?>">
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>13.00 WIB</th>
                                        <td>
                                            <!--kelem 13 -->
                                            <input class="form-control form-control-sm <?= ($validation->hasError('hum_2')) ? 'is-invalid' : ''; ?>" type="text" name="hum_2" style="text-align: center;" value="<?= old('hum_2'); ?>"> (%)
                                        </td>
                                        <th>13.00 WIB</th>
                                        <td>
                                            <!-- pengu 13-->
                                            <input class="form-control form-control-sm <?= ($validation->hasError('peng_2')) ? 'is-invalid' : ''; ?>" type="text" name="peng_2" style="text-align: center;" value="<?= old('peng_2'); ?>">
                                        </td>
                                        <td rowspan="2">
                                            <!--ch -->
                                            <input class="form-control form-control-sm <?= ($validation->hasError('ch')) ? 'is-invalid' : ''; ?>" type="text" name="ch" style="text-align: center;" value="<?= old('ch'); ?>"> mm
                                        </td>
                                        <td rowspan="2">
                                            <!--solar -->
                                            <input class="form-control form-control-sm <?= ($validation->hasError('solar')) ? 'is-invalid' : ''; ?>" type="text" name="solar" style="text-align: center;" value="<?= old('solar'); ?>"> (%)
                                        </td>
                                        <td rowspan="2">
                                            <!--  press-->
                                            <input class="form-control form-control-sm <?= ($validation->hasError('press')) ? 'is-invalid' : ''; ?>" type="text" name="press" style="text-align: center;" value="<?= old('press'); ?>"> (mb)
                                        </td>
                                        <td rowspan="2">
                                            <!--  wh-->
                                            <input class="form-control form-control-sm <?= ($validation->hasError('wh')) ? 'is-invalid' : ''; ?>" type="text" name="wh" style="text-align: center;" value="<?= old('wh'); ?>">
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>18.00 WIB</th>
                                        <td>
                                            <!--kelem 18 -->
                                            <input class="form-control form-control-sm <?= ($validation->hasError('hum_3')) ? 'is-invalid' : ''; ?>" type="text" name="hum_3" style="text-align: center;" value="<?= old('hum_3'); ?>"> (%)
                                        </td>
                                        <th>18.00 WIB</th>
                                        <td>
                                            <!--pengu 18 -->
                                            <input class="form-control form-control-sm <?= ($validation->hasError('peng_3')) ? 'is-invalid' : ''; ?>" type="text" name="peng_3" style="text-align: center;" value="<?= old('peng_3'); ?>">
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="form-group row" style="float: right;">
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
</div>
</div>

<?= $this->endSection(); ?>