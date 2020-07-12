<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col">
            <div class="card mt-3 mb-5">
                <div class="card-body">
                    <form>
                        <div class="form-group row">
                            <label for="staticStation" class="col-sm-2 col-form-label">Stasiun</label>
                            <div class="col-sm-10">
                                <input type="text" readonly class="form-control-plaintext" id="staticStation" value="97876 - Stasiun Meteorologi Tanah Merah">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="staticTanggal" class="col-sm-2 col-form-label">Tanggal</label>
                            <div class="col-sm-10">
                                <input type="text" readonly class="form-control-plaintext" id="staticTanggal" value="23 Maret 2020">
                            </div>
                        </div>

                        <div style="overflow-x:auto;">
                    </form>
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
                                    <input class="form-control form-control-sm" type="text" placeholder="23" readonly style="text-align: center;"> (&deg;C)
                                </td>
                                <td>
                                    <!--bb 13 -->
                                    <input class="form-control form-control-sm" type="text" placeholder="23" readonly style="text-align: center;"> (&deg;C)
                                </td>
                                <td>
                                    <!--  bb 18-->
                                    <input class="form-control form-control-sm" type="text" placeholder="23" readonly style="text-align: center;"> (&deg;C)
                                </td>
                                <td>
                                    <!-- max-->
                                    <input class="form-control form-control-sm" type="text" placeholder="23" readonly style="text-align: center;"> (&deg;C)
                                </td>
                                <td>
                                    <!-- kec rate-->
                                    <input class="form-control form-control-sm" type="text" placeholder="23" readonly style="text-align: center;"> (knot)
                                </td>
                                <td>
                                    <!-- arah ter-->
                                    <input class="form-control form-control-sm" type="text" placeholder="23" readonly style="text-align: center;"> (&deg;)
                                </td>
                                <td>
                                    <!-- kec max-->
                                    <input class="form-control form-control-sm" type="text" placeholder="23" readonly style="text-align: center;"> (knot)
                                </td>
                                <td>
                                    <!--arah max -->
                                    <input class="form-control form-control-sm" type="text" placeholder="23" readonly style="text-align: center;"> (&deg;)
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
                                    <input class="form-control form-control-sm" type="text" placeholder="23" readonly style="text-align: center;"> (&deg;C)
                                </td>
                                <td>
                                    <!-- bk 13 -->
                                    <input class="form-control form-control-sm" type="text" placeholder="23" readonly style="text-align: center;"> (&deg;C)
                                </td>
                                <td>
                                    <!-- bk 18-->
                                    <input class="form-control form-control-sm" type="text" placeholder="23" readonly style="text-align: center;"> (&deg;C)
                                </td>
                                <td>
                                    <!-- min-->
                                    <input class="form-control form-control-sm" type="text" placeholder="23" readonly style="text-align: center;"> (&deg;C)
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
                                    <input class="form-control form-control-sm" type="text" placeholder="23" readonly style="text-align: center;"> (%)
                                </td>
                                <th>07.00 WIB</th>
                                <td>
                                    <!--pengu 7 -->
                                    <input class="form-control form-control-sm" type="text" placeholder="23" readonly style="text-align: center;">
                                </td>
                            </tr>
                            <tr>
                                <th>13.00 WIB</th>
                                <td>
                                    <!--kelem 13 -->
                                    <input class="form-control form-control-sm" type="text" placeholder="23" readonly style="text-align: center;"> (%)
                                </td>
                                <th>13.00 WIB</th>
                                <td>
                                    <!-- pengu 13-->
                                    <input class="form-control form-control-sm" type="text" placeholder="23" readonly style="text-align: center;">
                                </td>
                                <td rowspan="2">
                                    <!--ch -->
                                    <input class="form-control form-control-sm" type="text" placeholder="23" readonly style="text-align: center;"> mm
                                </td>
                                <td rowspan="2">
                                    <!--solar -->
                                    <input class="form-control form-control-sm" type="text" placeholder="23" readonly style="text-align: center;"> (%)
                                </td>
                                <td rowspan="2">
                                    <!--  press-->
                                    <input class="form-control form-control-sm" type="text" placeholder="23" readonly style="text-align: center;"> (mb)
                                </td>
                                <td rowspan="2">
                                    <!--  wh-->
                                    <input class="form-control form-control-sm" type="text" placeholder="23" readonly style="text-align: center;">
                                </td>
                            </tr>
                            <tr>
                                <th>18.00 WIB</th>
                                <td>
                                    <!--kelem 18 -->
                                    <input class="form-control form-control-sm" type="text" placeholder="23" readonly style="text-align: center;"> (%)
                                </td>
                                <th>18.00 WIB</th>
                                <td>
                                    <!--pengu 18 -->
                                    <input class="form-control form-control-sm" type="text" placeholder="23" readonly style="text-align: center;">
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <button type="button" class="btn btn-primary mr-2" style="float: right;">OK</button>
                </div>
            </div>
        </div>

    </div>
</div>
</div>

<?= $this->endSection(); ?>