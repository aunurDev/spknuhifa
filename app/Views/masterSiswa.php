<?= $this->extend('layout'); ?>
<?= $this->section('title'); ?>Master<?= $this->endSection(); ?>
<?= $this->section('mainBc'); ?>Master<?= $this->endSection(); ?>
<?= $this->section('linkBc'); ?>Master foto siswa<?= $this->endSection(); ?>
<?= $this->section('cssLink'); ?>master.css<?= $this->endSection(); ?>


<?= $this->section('content'); ?>
<!-- wrapper -->
<div class="wrapper d-flex flex-column">
    <div class="frame1 d-flex flex-row justify-content-between align-items-center mb-4 p-4">
        <div class="frame1-1 d-flex flex-row flex-fill mr-4">
            <div class="d-flex flex-column justify-content-between flex-fill">
                <div class="d-flex py-2">
                    <img class="icon-excel" src="assets/img/icon-excel.png" alt="">
                    <div class="ml-3 d-flex flex-fill bw10 px-4 justify-content-between align-items-center br4">
                        <h5 class="mb-0">DOWNLOAD TEMPLATE DATA SISWA</h5>
                        <button class="btn-orange">Download</button>
                    </div>
                </div>
                <p class="pl-4 mt-4">Silahkan downloadn contoh format pengisian dan mengisi data.
                    Mohon tidak merubah format cell excel dari template.</p>
            </div>
        </div>
        <div class="frame1-2 d-flex flex-column flex-fill">
            <h5 class="bg-warning p-3 fc-main fw-700">IMPORT FOTO SISWA</h5>
            <div class="d-flex flex-row flex-fill align-items-center">
                <button class="btn-orange w-25 mr-4">Import</button>
                <div class="bar-default main-bg flex-fill">
                    <div class="bar-progress"></div>
                </div>
            </div>
        </div>
    </div>

    <div class="frame-2 d-flex flex-column flex-wrap bw10 br4">
        <div class="search d-flex flex-row align-items-center bg-warning py-3 px-4 ">
            <h5 class="fc-main fw-700 mr-5 mb-0">DATA SISWA DAN NILAI TIAP KRITERIA</h5>
            <input type="text" class="form-control" id="userid" placeholder="Cari siswa">
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
                <p>Pengaturan</p>
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
                    <p><?= $row['nilai_presensi']; ?></p>
                    <p><?= $row['nilai_pelanggaran']; ?></p>
                    <p><?= $row['nilai_pengetahuan']; ?></p>
                    <p><?= $row['nilai_keterampilan']; ?></p>
                    <p><?= $row['nilai_keaktifan']; ?></p>
                    <p>
                        <img class="mr-2" src="assets/icon/setting2.svg" alt="">
                        <img src="assets/icon/trash.svg" alt="">
                    </p>
                </div>
            <?php endforeach; ?>
        </div>
    </div>







    <div class="sp-master"></div>
</div>
<!-- end wrapper -->

<?= $this->endSection(); ?>