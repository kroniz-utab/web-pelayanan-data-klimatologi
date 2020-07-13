<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col">
            <div class="card mt-4">
                <div class="card-body">
                    <h2 class="text-center text-uppercase font-weight-bold">Monitoring data fklim71</h2>
                    <table class="table mt-4">
                        <tbody>
                            <tr>
                                <th class="col-1">Tanggal</th>
                                <th class="col-2">Bulan Tahun</th>
                                <th>UPT</th>
                                <th class="col-1">Status</th>
                                <th class="col-1">Details</th>
                            </tr>
                            <?php $i = 1; ?>
                            <?php foreach ($data as $d) : ?>
                                <tr class="<?php if ($d['id'] == 'NULL') {
                                                echo ('table-danger table-sm');
                                            } else {
                                                echo ('table-success table-sm');
                                            } ?>">
                                    <td><?= $i++; ?></td>
                                    <td><?= $d['bulan']; ?> <?= $d['tahun']; ?></td>
                                    <td><?= $d['upt']; ?></td>
                                    <td><?php if ($d['id'] == 'NULL') {
                                            echo ('&#10006');
                                        } else {
                                            echo ('&#10004');
                                        } ?></td>
                                    <td><a <?php if ($d['id'] == 'NULL') {
                                                echo ('href="#" class="btn btn-secondary btn-sm disabled" aria-disabled="true"');
                                            } else {
                                                echo ('href="' . $d['id'] . '" class="btn btn-primary btn-sm"');
                                            } ?>>Details</a></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>