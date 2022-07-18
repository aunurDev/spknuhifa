<?= $this->extend('layout'); ?>
<?= $this->section('title'); ?>Home<?= $this->endSection(); ?>
<?= $this->section('mainBc'); ?>Halaman utama<?= $this->endSection(); ?>
<?= $this->section('linkBc'); ?>Halaman utama<?= $this->endSection(); ?>
<?= $this->section('cssLink'); ?>home.css<?= $this->endSection(); ?>


<?= $this->section('content'); ?>
<!-- wrapper -->
<div class="wrapper d-flex flex-column">
    <div class="frame1 d-flex flex-row justify-content-between  mb-4">
        <div class="frame1-1 flex-fill text-brown">
            <h5 class="bg-warning text-center py-3 m-0">FILTER</h5>
            <div class="d-flex flex-row justify-content-between p-2 flex-fill">
                <div class="d-flex flex-column flex-fill align-items-center">
                    <h5>KELAS</h5>
                    <button class="btn-white flex-fill w-280">Kelas 11 <img class="ml-3" src="assets/icon/union.svg" alt="" srcset=""></button>
                </div>
                <div class="d-flex flex-column flex-fill align-items-center">
                    <h5>ROMBEL</h5>
                    <button class="btn-white flex-fill w-280">MM-XII-A <img class="ml-3" src="assets/icon/union.svg" alt="" srcset=""></button>
                </div>
            </div>
        </div>
        <div class="frame1-2 flex-fill d-flex justify-content-between">
            <div class="item d-flex flex-fill flex-column align-items-center justify-content-between py-3 mr-4">
                <h1><?= $totalAlterKrit; ?></h1>
                <p>Jumlah siswa</p>
            </div>
            <div class="item d-flex flex-fill flex-column align-items-center justify-content-between py-3 mr-4">
                <h1>1</h1>
                <p>Jumlah rombel</p>
            </div>
            <button class="btn d-flex flex-fill flex-column align-items-center justify-content-between pb-3 pt-4">
                <img src="assets/icon/dumbell.svg" alt="">
                <span class="text">Atur bobot</span>
            </button>
        </div>
    </div>

    <div class="frame2 d-flex flex-row justify-content-between">
        <div class="frame2-1 d-flex flex-column">

            <div class="frame2-1-1 d-flex flex-column mb-4">
                <div class="header py-3 px-4 bg-warning d-flex flex-row justify-content-between align-items-center">
                    <h5 class="m-0">LIST PERHITUNGAN PERANGKINGAN</h5>
                    <button type="button" class="btn-orange">Tambah perangkingan</button>
                </div>

                <div class="d-flex flex-column p-4">
                    <div class="head-jenis-perhitungan d-flex flex-row flex-fill justify-content-between mb-4">
                        <p>No</p>
                        <p class="flex-fill">Nama Jenis Perangkingan</p>
                        <p>Aktif</p>
                        <p class="text-center">Pengaturan</p>
                    </div>
                    <!-- data master -->
                    <?php $no = 1;
                    foreach ($master as $row) : ?>
                        <div class="list-jenis-perhitungan d-flex flex-row justify-content-between align-items-center mb-3">
                            <p><?= $no++; ?></p>
                            <p class="flex-fill"><?= $row['nama_spk']; ?></p>
                            <p class="text-center"><?= $row['is_active']; ?></p>
                            <div class="icon d-flex flex-row justify-content-around align-items-center">
                                <img src="assets/icon/setting2.svg" alt="<?= $row['id_spk'] ?>">
                                <img src="assets/icon/trash.svg" alt="<?= $row['id_spk'] ?>">
                            </div>
                        </div>
                    <?php endforeach; ?>
                    <!-- /data master -->
                </div>
            </div>

            <!-- prestasi 1 -->
            <div class="frame2-1-2 d-flex flex-row justify-content-between mb-4">
                <div class="prestasi-profile py-4 d-flex flex-column justify-content-between align-items-lg-center">
                    <img class="mb-2" src="assets/img/prestasi1.png" alt="">
                    <div class="frame-foto">
                        <img src="assets/img/profile-lg.png" alt="">
                    </div>
                    <div class="text text-center d-flex flex-column justify-content-between flex-fill align-items-center mt-4">
                        <P>MOHAMAD AUNUR ROSIDIN</P>
                        <P>Total poin</P>
                        <P>0,9284950512</P>
                    </div>
                </div>
                <div class="prestasi-deskripsi d-flex flex-column align-items-center">
                    <div class="header bg-warning d-flex flex-row px-4 py-2 align-items-center justify-content-around">
                        <div class="head-info d-flex flex-column align-items-center justify-content-between text-center">
                            <p>Kelas</p>
                            <p>10</p>
                        </div>
                        <div class="head-info d-flex flex-column align-items-center justify-content-between text-center">
                            <p>Rombel</p>
                            <p>X-A</p>
                        </div>
                        <div class="head-info d-flex flex-column align-items-center justify-content-between text-center">
                            <p>Angkatan</p>
                            <p>2022</p>
                        </div>
                    </div>
                    <!-- end header -->

                    <!-- deskripsi -->
                    <div class="box-info py-3 d-flex flex-row justify-content-between">

                        <div class="d-flex flex-column box-info-deskripsi justify-content-between flex-fill">

                            <div class="box-info-deskripsi-detail d-flex flex-row flex-fill align-items-center">
                                <p class="mr-3">Presensi</p>
                                <p>0,9615384615</p>
                            </div>
                            <div class="box-info-deskripsi-detail d-flex flex-row flex-fill align-items-center">
                                <p class="mr-3">Pelanggarans</p>
                                <p>1</p>
                            </div>
                            <div class="box-info-deskripsi-detail d-flex flex-row flex-fill align-items-center">
                                <p class="mr-3">Pengetahuan</p>
                                <p>0,9615384628</p>
                            </div>
                            <div class="box-info-deskripsi-detail d-flex flex-row flex-fill align-items-center">
                                <p class="mr-3">Keterampilan</p>
                                <p>0,944444444</p>
                            </div>
                            <div class="box-info-deskripsi-detail d-flex flex-row flex-fill align-items-center">
                                <p class="mr-3">Keaktifan</p>
                                <p>0,625</p>
                            </div>
                        </div>
                        <div class="box-info-icon d-flex flex-column justify-content-end">
                            <img height="25px" src="assets/icon/print.svg" alt="">
                            <img class="mt-3" height="25px" src="assets/icon/setting2.svg" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <!-- end prestasi 1 -->

            <!-- prestasi 2 -->
            <div class="frame2-1-2 d-flex flex-row justify-content-between mb-4">
                <div class="prestasi-profile py-4 d-flex flex-column justify-content-between align-items-lg-center">
                    <img class="mb-2" src="assets/img/prestasi2.png" alt="">
                    <div class="frame-foto">
                        <img src="assets/img/profile-lg.png" alt="">
                    </div>
                    <div class="text text-center d-flex flex-column justify-content-between flex-fill align-items-center mt-4">
                        <P>MOHAMAD AUNUR ROSIDIN</P>
                        <P>Total poin</P>
                        <P>0,9284950512</P>
                    </div>
                </div>
                <div class="prestasi-deskripsi d-flex flex-column align-items-center">
                    <div class="header bg-warning d-flex flex-row px-4 py-2 align-items-center justify-content-around">
                        <div class="head-info d-flex flex-column align-items-center justify-content-between text-center">
                            <p>Kelas</p>
                            <p>10</p>
                        </div>
                        <div class="head-info d-flex flex-column align-items-center justify-content-between text-center">
                            <p>Rombel</p>
                            <p>X-A</p>
                        </div>
                        <div class="head-info d-flex flex-column align-items-center justify-content-between text-center">
                            <p>Angkatan</p>
                            <p>2022</p>
                        </div>
                    </div>
                    <!-- end header -->

                    <!-- deskripsi -->
                    <div class="box-info py-3 d-flex flex-row justify-content-between">

                        <div class="d-flex flex-column box-info-deskripsi justify-content-between flex-fill">

                            <div class="box-info-deskripsi-detail d-flex flex-row flex-fill align-items-center">
                                <p class="mr-3">Presensi</p>
                                <p>0,9615384615</p>
                            </div>
                            <div class="box-info-deskripsi-detail d-flex flex-row flex-fill align-items-center">
                                <p class="mr-3">Pelanggarans</p>
                                <p>1</p>
                            </div>
                            <div class="box-info-deskripsi-detail d-flex flex-row flex-fill align-items-center">
                                <p class="mr-3">Pengetahuan</p>
                                <p>0,9615384628</p>
                            </div>
                            <div class="box-info-deskripsi-detail d-flex flex-row flex-fill align-items-center">
                                <p class="mr-3">Keterampilan</p>
                                <p>0,944444444</p>
                            </div>
                            <div class="box-info-deskripsi-detail d-flex flex-row flex-fill align-items-center">
                                <p class="mr-3">Keaktifan</p>
                                <p>0,625</p>
                            </div>
                        </div>
                        <div class="box-info-icon d-flex flex-column justify-content-end">
                            <img height="25px" src="assets/icon/print.svg" alt="">
                            <img class="mt-3" height="25px" src="assets/icon/setting2.svg" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <!-- end prestasi 2 -->

            <!-- prestasi 3 -->
            <div class="frame2-1-2 d-flex flex-row justify-content-between mb-4">
                <div class="prestasi-profile py-4 d-flex flex-column justify-content-between align-items-lg-center">
                    <img class="mb-2" src="assets/img/prestasi3.png" alt="">
                    <div class="frame-foto">
                        <img src="assets/img/profile-lg.png" alt="">
                    </div>
                    <div class="text text-center d-flex flex-column justify-content-between flex-fill align-items-center mt-4">
                        <P>MOHAMAD AUNUR ROSIDIN</P>
                        <P>Total poin</P>
                        <P>0,9284950512</P>
                    </div>
                </div>
                <div class="prestasi-deskripsi d-flex flex-column align-items-center">
                    <div class="header bg-warning d-flex flex-row px-4 py-2 align-items-center justify-content-around">
                        <div class="head-info d-flex flex-column align-items-center justify-content-between text-center">
                            <p>Kelas</p>
                            <p>10</p>
                        </div>
                        <div class="head-info d-flex flex-column align-items-center justify-content-between text-center">
                            <p>Rombel</p>
                            <p>X-A</p>
                        </div>
                        <div class="head-info d-flex flex-column align-items-center justify-content-between text-center">
                            <p>Angkatan</p>
                            <p>2022</p>
                        </div>
                    </div>
                    <!-- end header -->

                    <!-- deskripsi -->
                    <div class="box-info py-3 d-flex flex-row justify-content-between">

                        <div class="d-flex flex-column box-info-deskripsi justify-content-between flex-fill">

                            <div class="box-info-deskripsi-detail d-flex flex-row flex-fill align-items-center">
                                <p class="mr-3">Presensi</p>
                                <p>0,9615384615</p>
                            </div>
                            <div class="box-info-deskripsi-detail d-flex flex-row flex-fill align-items-center">
                                <p class="mr-3">Pelanggarans</p>
                                <p>1</p>
                            </div>
                            <div class="box-info-deskripsi-detail d-flex flex-row flex-fill align-items-center">
                                <p class="mr-3">Pengetahuan</p>
                                <p>0,9615384628</p>
                            </div>
                            <div class="box-info-deskripsi-detail d-flex flex-row flex-fill align-items-center">
                                <p class="mr-3">Keterampilan</p>
                                <p>0,944444444</p>
                            </div>
                            <div class="box-info-deskripsi-detail d-flex flex-row flex-fill align-items-center">
                                <p class="mr-3">Keaktifan</p>
                                <p>0,625</p>
                            </div>
                        </div>
                        <div class="box-info-icon d-flex flex-column justify-content-end">
                            <img height="25px" src="assets/icon/print.svg" alt="">
                            <img class="mt-3" height="25px" src="assets/icon/setting2.svg" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <!-- end prestasi 3 -->
        </div>
        <!-- end frame 2-1 -->

        <div class="frame2-2 bw10 d-flex flex-column">

            <div class="frame2-2-1 d-flex flex-column mb-4">
                <div class="header py-3 px-4 bg-warning d-flex flex-column justify-content-between">
                    <div class="d-flex flex-row align-items-center justify-content-between mb-3">
                        <h5 class="m-0">LIST PERINGKAT LANJUTAN</h5>
                        <button type="button" class="btn-excel d-flex flex-row justify-content-between align-items-center">Download excel <img src="assets/icon/excel.svg" alt=""></button>
                    </div>
                    <input type="text" class="form-control" id="userid" placeholder="Cari siswa">
                </div>

                <div class="d-flex flex-column justify-content-around py-3 px-1">
                    <div class="head-jenis-ranking d-flex flex-row flex-fill justify-content-between mb-4">
                        <p class="my-0 fw-600">No</p>
                        <p class="my-0 fw-600">Foto</p>
                        <p class="my-0 fw-600 flex-fill">Nama siswa</p>
                        <p class="my-0 fw-600">Total poin</p>
                        <p class="my-0 fw-600 icon">Pengaturan</p>
                    </div>
                    <!-- end head -->

                    <?php $no = 1;
                    foreach ($alterKrit as $row) : ?>
                        <div class="list-jenis-ranking d-flex flex-row justify-content-between align-items-center mb-3">
                            <p class="my-0"><?= $no++; ?></p>
                            <div class="img">
                                <img style="border-radius:100px;" height="40px" class="my-0" src="assets/img/siswa/<?= $row['foto'] ?>" alt="">
                            </div>
                            <p class="flex-fill ml-3 my-0"><?= $row['nama']; ?> </p>
                            <p class="my-0">
                                <?=
                                (($row['nilai_presensi'] / $pembagi['c1']) * $normBobot['c1']) +
                                    (($pembagi['c2'] / $row['nilai_pelanggaran']) * $normBobot['c2']) +
                                    (($row['nilai_pengetahuan'] / $pembagi['c3']) * $normBobot['c3']) +
                                    (($row['nilai_keterampilan'] / $pembagi['c4']) * $normBobot['c4']) +
                                    (($row['nilai_keaktifan'] / $pembagi['c5']) * $normBobot['c5']);
                                ?>
                            </p>
                            <div class="icon">
                                <img class="my-0" src="assets/icon/setting2.svg" alt="">
                            </div>
                        </div>
                    <?php endforeach; ?>

                    <!-- end list ranking -->
                </div>
            </div>
        </div>
    </div>
    <div class="sp-home"></div>
</div>
<!-- end wrapper -->

<?= $this->endSection(); ?>