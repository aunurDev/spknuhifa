<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home|SPK Nuhifa</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">

    <!-- google font barlow regular,medium,semibold,bold -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="<?= base_url('assets/css/global.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/login.css') ?>">

    <!-- jquery -->
    <script src="https://code.jquery.com/jquery-3.6.0.slim.js" integrity="sha256-HwWONEZrpuoh951cQD1ov2HUK5zA5DwJ1DNUXaM6FsY=" crossorigin="anonymous"></script>
</head>

<body id="gradient-bg position-relative">

    <!-- alert gagal login -->
    <!-- catatan : ubah css dengan ajax class.display untuk trigger alert -->
    <div id="gagalLogin" class="gagal position-absolute display-none">
        <div class="card-alert d-flex flex-column">
            <div class="head-alert d-flex flex-row justify-content-between align-items-center">
                <h3>Alert</h3>
                <a class="icon-cross" href="#"></a>
            </div>
            <div class="notif text-center">
                User id dan password tidak sesuai.. <br>
                Silahkan masukkan ulang username dan password yang sesuai!
            </div>
        </div>
    </div>

    <div class="position-absolute wrap d-flex justify-content-between position-relative">

        <div class="text-login flex-fill d-flex flex-column justify-content-center text-center">
            <h1 class="mb-5">USER LOGIN</h1>
            <h3>SPK PERANGKINGAN SISWA BERPRESTASI</h3>
            <h3>SMK NURUL HIDAYAH AL-FALAH</h3>
        </div>
        <div class="form-login d-flex flex-column align-items-center">
            <div class="logo-text mb-5">
                <img src="assets/img/logo-smk-lg.png" alt="">
                <h3 class="text-center mt-3">SMK NUHIFA</h3>
            </div>
            <form action="/login" class="w-100 d-flex flex-column flex-fill justify-content-between">
                <div class="form12 d-flex flex-column">
                    <div class="mb-3">
                        <label for="userid" class="form-label">User ID</label>
                        <input id="username" type="text" class="form-control" id="userid" placeholder="Ketikkan user id">
                    </div>
                    <div class="mb-3">
                        <label for="pass" class="form-label">Password</label>
                        <input id="password" type="password" class="form-control" id="pass" placeholder="Ketikkan password">
                    </div>
                    <div class="form-check mb-5">
                        <label class="form-check-label" for="tetaplogin">
                            Biarkan saya tetap login
                        </label>
                        <input class="form-check-input" type="checkbox" value="" id="tetaplogin">
                    </div>
                </div>
                <a href="<?= base_url('home') ?>" id="btnLogin" type="button" class="btn-orange">Login</a>
            </form>
            <p class="mt-5 copyright text-center">2022 &copy; SMK NUHIFA develop by <a href="#">aunurdev</a></p>
        </div>
    </div>



    <script src="assets/js/global.js"></script>
</body>

</html>