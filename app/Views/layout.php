<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home|SPK Nuhifa</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.css') ?>">

    <!-- google font barlow regular,medium,semibold,bold -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="preconnect" href="<?= base_url('assets/css/global.css') ?>">
    <link rel="preconnect" href="<?= $this->renderSection('cssLink') ?>">
</head>

<body class="main-bg">

    <!-- navbar -->
    <div class="navbarr position-relative mb-5">
        <div class="navbarr-list d-flex justify-content-arround align-items-center">
            <div class="left-group d-flex flex-fill align-items-center">
                <div class="navbarr-img d-flex align-items-center mr-5"><img class="mr-2" src="assets/img/logo-smk-sm.png" alt="">SMK NUHIFA</div>

                <a href="#" class="mr-5 d-flex align-items-center"><img class="mr-2" src="assets/icon/home.svg" alt=""> Home</a>

                <a href="#" class="mr-5 d-flex align-items-center"><img class="mr-2" src="assets/icon/master.svg" alt=""> Data Master</a>

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
    <!-- end navbar -->


    <?= $this->renderSection('content'); ?>

    <script src="js/global.js"></script>
</body>

</html>