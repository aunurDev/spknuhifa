<?= $this->extend('layout'); ?>
<?= $this->section('title'); ?>Saw<?= $this->endSection(); ?>
<?= $this->section('mainBc'); ?>SAW<?= $this->endSection(); ?>
<?= $this->section('linkBc'); ?>Detail SAW<?= $this->endSection(); ?>
<?= $this->section('cssLink'); ?>master.css<?= $this->endSection(); ?>


<?= $this->section('content'); ?>
<!-- wrapper -->
<div class="wrapper d-flex flex-column">

    <!-- normalisasi bobot -->
    <div class="frame-2 d-flex flex-column flex-wrap bw10 br4 mb-5 mt-3">
        <div class="search d-flex flex-row align-items-center bg-warning py-3 px-4 ">
            <h5 class="fc-main fw-700 mr-5 mb-0">NORMALISASI BOBOT</h5>
        </div>
        <div class="d-flex flex-column px-4 py-3">
            <div class="head-bobot d-flex flex-row justify-content-between align-items-center pb-3">
                <p>Keterangan</p>
                <p>Presensi</p>
                <p>Pelanggaran</p>
                <p>Pengetahuan</p>
                <p>Keterampilan</p>
                <p>Keaktifan</p>
                <p>Total</p>
            </div>
            <div class="list-bobot d-flex flex-row justify-content-between align-items-center">
                <p>Nilai Bobot</p>
                <?php foreach ($bobot as $row) : ?>
                    <p><?= $row['nilai_bobot']; ?></p>
                <?php endforeach; ?>
                <p><?= $total; ?></p>
            </div>
            <div class="list-bobot d-flex flex-row justify-content-between align-items-center">
                <p>Bobot ternormalisasi</p>
                <?php foreach ($bobot as $row) : ?>
                    <p><?= $row['nilai_bobot'] / $total; ?></p>
                <?php endforeach; ?>
                <p><?= $totalNormBobot; ?></p>
            </div>
            <div class="list-bobot d-flex flex-row justify-content-between align-items-center">
                <p>Cost Benefit</p>
                <?php foreach ($bobot as $row) : ?>
                    <p><?= $row['cost_ben']; ?></p>
                <?php endforeach; ?>
                <p></p>
            </div>
        </div>
    </div>
    <!-- /normalisasi bobot -->

    <!-- filter -->
    <div class="frame1-saw d-flex flex-row justify-content-between align-items-end mb-1 p-4">
        <div class="d-flex flex-column flex-fill align-items-center">
            <h5>KELAS</h5>
            <button class="btn-white flex-fill w-280">Kelas 10 <img class="ml-3" src="assets/icon/union.svg" alt="" srcset=""></button>
        </div>
        <div class="d-flex flex-column flex-fill align-items-center">
            <h5>ROMBEL</h5>
            <button class="btn-white flex-fill w-280">Semua <img class="ml-3" src="assets/icon/union.svg" alt="" srcset=""></button>
        </div>
        <div class="d-flex flex-column flex-fill align-items-center">
            <button type="button" class="btn-excel d-flex flex-row justify-content-between align-items-center">Download excel <img src="assets/icon/excel.svg" alt=""></button>
        </div>
        <div class="d-flex flex-column flex-fill align-items-center">
            <input style="width:550px;" type="text" class="form-control" id="userid" placeholder="Cari siswa">
        </div>
    </div>
    <!-- /filter -->

    <!-- normalisasi matriks -->
    <div class="frame-2 d-flex flex-column flex-wrap bw10 br4 mb-5">
        <div class="search d-flex flex-row align-items-center bg-warning py-3 px-4 ">
            <h5 class="fc-main fw-700 mr-5 mb-0">NORMALISASI MATRIKS</h5>
        </div>
        <div class="d-flex flex-column px-4 py-3">
            <div class="head-list-siswa d-flex flex-row justify-content-between align-items-center pb-4">
                <p>No.</p>
                <p>Foto</p>
                <p class="flex-fill m-0">Nama siswa</p>
                <p>Kelas</p>
                <p>Rombel</p>
                <p>Presensi</p>
                <p>Pelanggaran</p>
                <p>Pengetahuan</p>
                <p>Keterampilan</p>
                <p>Keaktifan</p>
            </div>
            <?php $no = 1;
            foreach ($alterKrit as $row) : ?>
                <div class="data-list-siswa d-flex flex-row justify-content-between align-items-center py-2">
                    <p><?= $no++; ?></p>
                    <div class="img">
                        <img style="border-radius:100px;" height="40px" class="my-0" src="assets/img/siswa/<?= $row['foto'] ?>" alt="">
                    </div>
                    <p class="flex-fill m-0"><?= $row['nama']; ?></p>
                    <p><?= $row['kelas']; ?></p>
                    <p><?= $row['rombel']; ?></p>
                    <p><?= $row['nilai_presensi'] / $pembagi['c1']; ?></p>
                    <p><?= $pembagi['c1'] / $row['nilai_pelanggaran']; ?></p>
                    <p><?= $row['nilai_pengetahuan'] / $pembagi['c3']; ?></p>
                    <p><?= $row['nilai_keterampilan'] / $pembagi['c4']; ?></p>
                    <p><?= $row['nilai_keaktifan'] / $pembagi['c5']; ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
    <!-- /normalisasi matriks -->

    <!-- preferensi -->
    <div class="frame-2 d-flex flex-column flex-wrap bw10 br4 mb-5">
        <div class="search d-flex flex-row align-items-center bg-warning py-3 px-4 ">
            <h5 class="fc-main fw-700 mr-5 mb-0">PREFERENSI</h5>
        </div>
        <div class="d-flex flex-column px-4 py-3">
            <div class="head-list-siswa d-flex flex-row justify-content-between align-items-center pb-4">
                <p>No.</p>
                <p>Foto</p>
                <p class="flex-fill m-0">Nama siswa</p>
                <p>Kelas</p>
                <p>Rombel</p>
                <p class="w-50">Preferensi</p>
            </div>
            <?php $no = 1;
            foreach ($alterKrit as $row) : ?>
                <div class="data-list-siswa d-flex flex-row justify-content-between align-items-center py-2">
                    <p><?= $no++; ?></p>
                    <div class="img">
                        <img style="border-radius:100px;" height="40px" class="my-0" src="assets/img/siswa/<?= $row['foto'] ?>" alt="">
                    </div>
                    <p class="w-25 m-0"><?= $row['nama']; ?></p>
                    <p><?= $row['kelas']; ?></p>
                    <p><?= $row['rombel']; ?></p>
                    <p class="w-50">
                        <?=
                        (($row['nilai_presensi'] / $pembagi['c1']) * $normBobot['c1']) +
                            (($pembagi['c2'] / $row['nilai_pelanggaran']) * $normBobot['c2']) +
                            (($row['nilai_pengetahuan'] / $pembagi['c3']) * $normBobot['c3']) +
                            (($row['nilai_keterampilan'] / $pembagi['c4']) * $normBobot['c4']) +
                            (($row['nilai_keaktifan'] / $pembagi['c5']) * $normBobot['c5']);
                        ?>
                    </p>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
    <!-- /normalisasi matriks -->





    <div class="sp-master"></div>
</div>
<!-- end wrapper -->

<?= $this->endSection(); ?>