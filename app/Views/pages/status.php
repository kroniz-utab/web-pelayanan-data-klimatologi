<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col">
            <div class="card mt-3 mb-3">
                <div class="card-body">
                    <form action="monitor/status" method="GET">
                        <!--?= csrf_field(); ?-->
                        <div class="form-group row">
                            <label for="tgl" class="col-sm-2 col-form-label">Stasiun</label>
                            <div class="col-sm-5">
                                <select class="form-control form-control-sm" id="bln" name="stasiun_id">
                                    <option selected>Stasiun</option>
                                    <?php foreach ($station as $s) : ?>
                                        <option value="<?= $s['id']; ?>"><?= $s['user_id']; ?> - <?= $s['username']; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="tgl" class="col-sm-2 col-form-label">Bulan</label>
                            <div class="col-sm-2">
                                <select class="form-control form-control-sm" id="bln" name="bulan">
                                    <option selected>Bulan</option>
                                    <?php foreach ($bulan as $b) : ?>
                                        <option value="<?= $b['id']; ?>"><?= $b['bulan']; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="col-sm-2">
                                <select class="form-control form-control-sm" id="thn" name="tahun">
                                    <option selected>Tahun</option>
                                    <?php for ($i = 2015; $i < 2051; $i++) : ?>
                                        <option value="<?= $i; ?>"><?= $i; ?></option>
                                    <?php endfor; ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row" style="float: right;">
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-primary">Cari</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <?= $this->renderSection('result'); ?>

        </div>
    </div>
</div>

<?= $this->endSection(); ?>