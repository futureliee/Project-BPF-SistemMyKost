<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href=<?= base_url() . "assets/css/login.css" ?>>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<style>
    body {
        color: #ffffff;
        background: #86a3eb;
        background-image: url('assets/img/bgLogin.jpg');
        /* Sesuaikan dengan kebutuhan */
    }

    .login-form form {
        color: #7a7a7a;
        border-radius: 10px;
        margin-bottom: 15px;
        font-size: 13px;
        background: #f3f6f4;
        box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.3);
        padding: 30px;
        padding-top: 10px;
        position: relative;
    }

    .login-form .btn {
        font-size: 16px;
        font-weight: bold;
        background: #6fa8dc;
        border: none;
        margin-bottom: 20px;
    }

    .login-form .btn:hover,
    .login-form .btn:focus {
        background: #16537e;
        outline: none !important;
    }
</style>

<body>
    <div class="login-form">

        <form action="<?php echo base_url('login_controller/index') ?>" method="post">
            <h2 class="text-center">Selamat Datang di Aplikasi MyKost</h2>
            <center>
                <h5>Silahkan login untuk melanjutkan</h5>
            </center>

            <?php echo $this->session->flashdata('pesan') ?>
            <div class="form-group">
                <input type="text" class="form-control" name="email" placeholder="Email">
                <?= form_error("email", "<h6 class='text-danger'>", "</h6>") ?>
            </div>
            <div class="form-group">
                <input type="password" class="form-control" name="password" placeholder="Password">
                <?= form_error("password", "<h6 class='text-danger'>", "</h6>") ?>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-lg btn-block">Sign in</button>
            </div>
            <center>
                <h5>Belum punya akun? <a href=<?= base_url() . "registration/user_registration" ?>
                        style="color:#702edb">daftar sekarang</a></h5>
            </center>
        </form>
    </div>
</body>

</html>