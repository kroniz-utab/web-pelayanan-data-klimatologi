<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col">
            <div class="card mt-3 mb-5">
                <div class="card-body">
                    <h3 class="text-center text-uppercase font-weight-bold">Selamat Datang</h3>
                    <img src="/img/banner.jpg" class="banner">
                    <!-- <blockquote class="blockquote mt-3">
                        <p class="mb-0">Saat ini pencatatan data iklim dilakukan dalam bentuk form FKlim71 yang dilaporkan oleh stasiun klimatologi, stasiun meteorologi yang ada di Indonesia serta stasiun geofisika yang menyelenggarakan pengamatan iklim.</p>
                    </blockquote> -->
                    <ul class="list-unstyled mt-4">
                        <li>Saat ini pencatatan data iklim dilakukan dalam bentuk form FKlim71 yang dilaporkan oleh stasiun klimatologi, stasiun meteorologi yang ada di Indonesia serta stasiun geofisika yang menyelenggarakan pengamatan iklim.</li>
                        <li class="mt-2">
                            Metode pencatatan Fklim71 saatini diatur oleh Peraturan Kepala BMKG Nomor 04 tahun 2016 tentang Pengamatan dan Pengelolaan Data Iklim di Lingkungan BMKG.
                            nsur-unsur iklim yang dicatat meliputi:
                        </li>
                        <ul>
                            <li>Suhu udara yang di amati pada pukul 07.00, 13.00 dan 18.00 Waktu Setempat (WS)</li>
                            <li>Suhu maksimum yang diamati pukul 18.00 WS</li>
                            <li>Suhu minimum yang diamati pukul 13.00 WS</li>
                            <li>Curah hujan harian yang ditakar pukul 07.00 WS</li>
                            <li>Lama penyinaran matahari harian yang terrekam mulai pukul 08.00-16.00</li>
                            <li>Peristiwa cuaca khusus dalam 24 jam seperti adanya banjir, kabut, asap dll</li>
                            <li>Tekanan udara yang tercatat pada pukul 00.00 UTC</li>
                            <li>Kelembapan udara yang di amati pada pukul 07.00, 13.00 dan 18.00 WS</li>
                            <li>Kecepatan angin rata-rata dalam 24 jam</li>
                            <li>Arah angin terbanyak selama 24 jam</li>
                            <li>Kecepatan angin maksimum dalam 24 jam</li>
                            <li>Arah angin pada saat kecepatan maksium</li>
                        </ul>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>