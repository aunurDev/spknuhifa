<?= $this->extend('layout'); ?>
<?= $this->section('title'); ?>Master<?= $this->endSection(); ?>
<?= $this->section('mainBc'); ?>Master<?= $this->endSection(); ?>
<?= $this->section('linkBc'); ?>Master foto siswa<?= $this->endSection(); ?>
<?= $this->section('cssLink'); ?>master.css<?= $this->endSection(); ?>


<?= $this->section('content'); ?>
<!-- wrapper -->
<div class="wrapper d-flex flex-column">
    <div class="frame1-saw d-flex flex-row justify-content-between align-items-end mb-4 p-4">
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

    <div class="frame-2 d-flex flex-column flex-wrap bw10 br4">
        <div class="search d-flex flex-row align-items-center bg-warning py-3 px-4 ">
            <h5 class="fc-main fw-700 mr-5 mb-0">DATA SISWA DAN NILAI TIAP KRITERIA</h5>
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
            <div class="data-list-siswa d-flex flex-row justify-content-between align-items-center py-2">
                <p>1</p>
                <div class="img">
                    <img class="my-0" src="assets/img/profile-sm.png" alt="">
                </div>
                <p class="flex-fill m-0">Mohamad Aunur Rosidin</p>
                <p>10</p>
                <p>MM-XI-A</p>
                <p>0,9583333333</p>
                <p>0,9583333333</p>
                <p>0,9583333333</p>
                <p>0,9583333333</p>
                <p>0,9583333333</p>
                <p>
                    <img class="mr-2" src="assets/icon/setting2.svg" alt="">
                    <img src="assets/icon/trash.svg" alt="">
                </p>
            </div>
            <div class="data-list-siswa d-flex flex-row justify-content-between align-items-center py-2">
                <p>1</p>
                <div class="img">
                    <img class="my-0" src="assets/img/profile-sm.png" alt="">
                </div>
                <p class="flex-fill m-0">Mohamad Aunur Rosidin</p>
                <p>10</p>
                <p>MM-XI-A</p>
                <p>0,9583333333</p>
                <p>0,9583333333</p>
                <p>0,9583333333</p>
                <p>0,9583333333</p>
                <p>0,9583333333</p>
                <p>
                    <img class="mr-2" src="assets/icon/setting2.svg" alt="">
                    <img src="assets/icon/trash.svg" alt="">
                </p>
            </div>
            <div class="data-list-siswa d-flex flex-row justify-content-between align-items-center py-2">
                <p>1</p>
                <div class="img">
                    <img class="my-0" src="assets/img/profile-sm.png" alt="">
                </div>
                <p class="flex-fill m-0">Mohamad Aunur Rosidin</p>
                <p>10</p>
                <p>MM-XI-A</p>
                <p>0,9583333333</p>
                <p>0,9583333333</p>
                <p>0,9583333333</p>
                <p>0,9583333333</p>
                <p>0,9583333333</p>
                <p>
                    <img class="mr-2" src="assets/icon/setting2.svg" alt="">
                    <img src="assets/icon/trash.svg" alt="">
                </p>
            </div>
            <div class="data-list-siswa d-flex flex-row justify-content-between align-items-center py-2">
                <p>1</p>
                <div class="img">
                    <img class="my-0" src="assets/img/profile-sm.png" alt="">
                </div>
                <p class="flex-fill m-0">Mohamad Aunur Rosidin</p>
                <p>10</p>
                <p>MM-XI-A</p>
                <p>0,9583333333</p>
                <p>0,9583333333</p>
                <p>0,9583333333</p>
                <p>0,9583333333</p>
                <p>0,9583333333</p>
                <p>
                    <img class="mr-2" src="assets/icon/setting2.svg" alt="">
                    <img src="assets/icon/trash.svg" alt="">
                </p>
            </div>
            <div class="data-list-siswa d-flex flex-row justify-content-between align-items-center py-2">
                <p>1</p>
                <div class="img">
                    <img class="my-0" src="assets/img/profile-sm.png" alt="">
                </div>
                <p class="flex-fill m-0">Mohamad Aunur Rosidin</p>
                <p>10</p>
                <p>MM-XI-A</p>
                <p>0,9583333333</p>
                <p>0,9583333333</p>
                <p>0,9583333333</p>
                <p>0,9583333333</p>
                <p>0,9583333333</p>
                <p>
                    <img class="mr-2" src="assets/icon/setting2.svg" alt="">
                    <img src="assets/icon/trash.svg" alt="">
                </p>
            </div>
            <div class="data-list-siswa d-flex flex-row justify-content-between align-items-center py-2">
                <p>1</p>
                <div class="img">
                    <img class="my-0" src="assets/img/profile-sm.png" alt="">
                </div>
                <p class="flex-fill m-0">Mohamad Aunur Rosidin</p>
                <p>10</p>
                <p>MM-XI-A</p>
                <p>0,9583333333</p>
                <p>0,9583333333</p>
                <p>0,9583333333</p>
                <p>0,9583333333</p>
                <p>0,9583333333</p>
                <p>
                    <img class="mr-2" src="assets/icon/setting2.svg" alt="">
                    <img src="assets/icon/trash.svg" alt="">
                </p>
            </div>
            <div class="data-list-siswa d-flex flex-row justify-content-between align-items-center py-2">
                <p>1</p>
                <div class="img">
                    <img class="my-0" src="assets/img/profile-sm.png" alt="">
                </div>
                <p class="flex-fill m-0">Mohamad Aunur Rosidin</p>
                <p>10</p>
                <p>MM-XI-A</p>
                <p>0,9583333333</p>
                <p>0,9583333333</p>
                <p>0,9583333333</p>
                <p>0,9583333333</p>
                <p>0,9583333333</p>
                <p>
                    <img class="mr-2" src="assets/icon/setting2.svg" alt="">
                    <img src="assets/icon/trash.svg" alt="">
                </p>
            </div>
            <div class="data-list-siswa d-flex flex-row justify-content-between align-items-center py-2">
                <p>1</p>
                <div class="img">
                    <img class="my-0" src="assets/img/profile-sm.png" alt="">
                </div>
                <p class="flex-fill m-0">Mohamad Aunur Rosidin</p>
                <p>10</p>
                <p>MM-XI-A</p>
                <p>0,9583333333</p>
                <p>0,9583333333</p>
                <p>0,9583333333</p>
                <p>0,9583333333</p>
                <p>0,9583333333</p>
                <p>
                    <img class="mr-2" src="assets/icon/setting2.svg" alt="">
                    <img src="assets/icon/trash.svg" alt="">
                </p>
            </div>
            <div class="data-list-siswa d-flex flex-row justify-content-between align-items-center py-2">
                <p>1</p>
                <div class="img">
                    <img class="my-0" src="assets/img/profile-sm.png" alt="">
                </div>
                <p class="flex-fill m-0">Mohamad Aunur Rosidin</p>
                <p>10</p>
                <p>MM-XI-A</p>
                <p>0,9583333333</p>
                <p>0,9583333333</p>
                <p>0,9583333333</p>
                <p>0,9583333333</p>
                <p>0,9583333333</p>
                <p>
                    <img class="mr-2" src="assets/icon/setting2.svg" alt="">
                    <img src="assets/icon/trash.svg" alt="">
                </p>
            </div>

        </div>
    </div>




    <div class="sp-master"></div>
</div>
<!-- end wrapper -->

<?= $this->endSection(); ?>