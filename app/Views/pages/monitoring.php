<!-- this is plan A -->

<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col">
            <div class="card mt-3">
                <div class="card-body">
                    This is some text within a card body.
                </div>
            </div>
            <div class="card mt-3">
                <div class="card-body">
                    <div style="overflow-x:auto;">
                        <table class="table table-bordered table-sm">
                            <tbody>
                                <tr>
                                    <th rowspan="3">TGL</th>
                                    <th colspan="10">TEMPERATUR</th>
                                    <th rowspan="3">CURAH HUJAN
                                        (DALAM mm)</th>
                                    <th rowspan="3">PENYINARAN
                                        MATAHARI
                                        (%)</th>
                                    <th rowspan="3">PERISTIWA
                                        CUACA
                                        KHUSUS</th>
                                    <th rowspan="3">TEKANAN UDARA
                                        RATA - RATA
                                        (mb)</th>
                                    <th colspan="4">KELEMBABAN (%)</th>
                                    <th colspan="4">ANGIN</th>
                                    <th colspan="4">PENGUAPAN</th>
                                </tr>
                                <tr>
                                    <th rowspan="2">07.00 WIB
                                        (BB)</th>
                                    <th rowspan="2">07.00 WIB
                                        (BK)</th>
                                    <th rowspan="2">13.00 WIB
                                        (BB)</th>
                                    <th rowspan="2">13.00 WIB
                                        (BK)</th>
                                    <th rowspan="2">18.00 WIB
                                        (BB)</th>
                                    <th rowspan="2">18.00 WIB
                                        (BK)</th>
                                    <th colspan="2">RATA - RATA</th>
                                    <th rowspan="2">MAX</th>
                                    <th rowspan="2">MIN</th>
                                    <th rowspan="2">07.00 WIB</th>
                                    <th rowspan="2">13.00 WIB</th>
                                    <th rowspan="2">18.00 WIB</th>
                                    <th rowspan="2">RATA - RATA</th>
                                    <th rowspan="2">KEC. ANGIN
                                        (KNOT)</th>
                                    <th rowspan="2">ARAH TERBANYAK</th>
                                    <th rowspan="2">KEC. TERBESAR</th>
                                    <th rowspan="2">ARAH
                                        (DERAJAT)</th>
                                    <th rowspan="2">07.00 WIB</th>
                                    <th rowspan="2">13.00 WIB</th>
                                    <th rowspan="2">18.00 WIB</th>
                                    <th rowspan="2">JUMLAH</th>
                                </tr>
                                <tr>
                                    <th>BB</th>
                                    <th>BK</th>
                                </tr>
                                <?php for ($i = 1; $i < 32; $i++) : ?>
                                    <tr>
                                        <td><?= $i; ?></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                <?php endfor; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<?= $this->endSection(); ?>