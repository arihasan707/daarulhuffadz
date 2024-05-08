<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
    <link rel="shortcut icon" type="image/x-icon" href="<?= base_url(); ?>assets/frontend/favicon.png">
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/login/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/login/css/fontawesome-all.min.css">
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/login/css/iofrm-style.css">
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/login/css/iofrm-theme10.css">
</head>

<body>
    <!-- The video -->
    <video autoplay muted loop id="myVideo">
        <source src="<?=base_url()?>assets/login/live-wall/tes2.mp4" type="video/mp4">
    </video>
    <div class="form-body" class="container-fluid">
        <div class="row">
            <div class="form-holder">
                <div class="form-content">
                    <div class="form-items">
                        <div class="website-logo-inside">
                            <a href="index.html">
                                <div class="logo">
                                    <img class="logo-size" src="<?=base_url()?>assets/login/images/logo-putih.png">
                                </div>
                            </a>
                        </div>
                        <h3>Sistem Informasi Pondok</h3>
                        <p>masukan username & password untuk login.</p>
                        <?php if ($this->session->flashdata('alert')) :?>
                        <div class="alert alert-danger bg-danger text-light border-0 alert-dismissible fade show"
                            role="alert">
                            <?= $this->session->flashdata('alert');?>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <?php endif?>
                        <?php if ($this->session->flashdata('warn')) :?>
                        <div class="alert alert-warning bg-warning border-0 alert-dismissible fade show" role="alert">
                            <?= $this->session->flashdata('warn');?>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <?php endif?>

                        <form action="<?= base_url('auth/logproses')?>" method="post">
                            <select class="form-control mb-3" name="hk">
                                <option value="">-- Pilih Hak Akses --</option>
                                <option value="2">Admin 1 - Karantina Qur'an</option>
                                <option value="3">Admin 2 - Institute & Boarding</option>
                                <option value="4">Admin 3 - Program Online</option>
                                <option value="5">Staff / Karyawan DHI</option>
                                <option value="1">Administrator</option>
                            </select>
                            <input class="form-control" type="text" name="usernm" placeholder="Username" required>
                            <div class="input-group" id="eye">
                                <input class="form-control w-75" type="password" name="pass" placeholder="Password"
                                    required>
                                <span class="form-control">
                                    <i class="fa fa-eye"></i>
                                </span>
                            </div>
                            <div class="form-button">
                                <button id="submit" type="submit" class="ibtn">Login</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="<?=base_url()?>assets/login/js/jquery.min.js"></script>
    <script type="text/javascript" src="<?=base_url()?>assets/login/js/popper.min.js"></script>
    <script type="text/javascript" src="<?=base_url()?>assets/login/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?=base_url()?>assets/login/js/main.js"></script>
</body>

</html>