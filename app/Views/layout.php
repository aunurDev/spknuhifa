<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home|SPK Nuhifa</title>

    <!-- css -->
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/<?= $this->renderSection('cssLink'); ?>">
    <link rel="stylesheet" href="assets/css/global.css">

    <!-- google font barlow regular,medium,semibold,bold -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- jquery -->
    <script src="https://code.jquery.com/jquery-3.6.0.slim.js" integrity="sha256-HwWONEZrpuoh951cQD1ov2HUK5zA5DwJ1DNUXaM6FsY=" crossorigin="anonymous"></script>
</head>

<body class="main-bg">
    <!-- navbar -->
    <div class="navbarr position-relative mb-5">
        <div class="navbarr-list d-flex justify-content-arround align-items-center">
            <div class="left-group d-flex flex-fill align-items-center">
                <div class="navbarr-img d-flex align-items-center mr-5"><img class="mr-2" src="assets/img/logo-smk-sm.png" alt="">SMK NUHIFA</div>

                <a href="<?= base_url('home') ?>" class="mr-5 d-flex align-items-center"><img class="mr-2" src="assets/icon/home.svg" alt=""> Home</a>

                <a href="#" class="data-master mr-5 d-flex align-items-center"><img class="mr-2" src="assets/icon/master.svg" alt=""> Data Master</a>

                <a href="#" class="mr-5 d-flex align-items-center"><img class="mr-2" src="assets/icon/saw.svg" alt=""> Perhitungan</a>
            </div>
            <div class="right-group d-flex">
                <div class="item1 mr-4"><img class="adminpict mr-2" src="assets/img/profile-sm.png" alt=""> Mohamad Aunur Rosidin</div>
                <a href="#" class="d-flex align-items-center"><img class="mr-2" src="assets/icon/setting.svg" alt=""></a>
            </div>
        </div>
        <div class="main-breadcrumb position-absolute d-flex justify-content-between align-items-center bw10 px-5">
            <div class="main-bc"><?= $this->renderSection('mainBc'); ?></div>
            <div class="link-bc"><?= $this->renderSection('linkBc'); ?></div>
        </div>
    </div>
    <div class="drop-menu-master position-absolute">
        <div class="d-flex flex-column justify-content-center align-items-center">
            <a href="<?= base_url('masterFoto') ?>" class="mb-3">Master foto</a>
            <a href="<?= base_url('masterSiswa') ?>">Master siswa</a>
        </div>
    </div>
    <!-- /navbar -->

    <?= $this->renderSection('content'); ?>

    <!-- footer -->
    <div class="footer align-items-center d-flex justify-content-center main-bg">
        <p class="my-0">2021 &copy; SMK NUHIFA develope by <a href="https://github.com/aunurDev">aunurDev</a></p>
    </div>
    <!-- /footer -->

    <script src="assets/js/global.js"></script>
</body>

</html>