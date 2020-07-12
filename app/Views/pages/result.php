<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col">
            <div class="card mt-4">
                <div class="card-body">
                    <table class="table">
                        <tbody>
                            <tr>
                                <th class="col-1">Tanggal</th>
                                <th class="col-2">Bulan Tahun</th>
                                <th>UPT</th>
                                <th class="col-1">Status</th>
                                <th class="col-1">Details</th>
                            </tr>
                            <?php for ($i = 1; $i < 32; $i++) : ?>
                                <tr>
                                    <td><?= $i; ?></td>
                                    <td>Bulan Tahun</td>
                                    <td>UPT</td>
                                    <td>Status</td>
                                    <td>Det btn</td>
                                </tr>
                            <?php endfor; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>