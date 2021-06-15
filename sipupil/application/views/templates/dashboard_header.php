<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- ===== CSS ===== -->
    <link rel="stylesheet" href="<?= base_url() . 'assets/css/sb-admin-2.css' ?>">
    <link rel="stylesheet" href="<?php echo base_url() . 'assets/vendor/sb-admin/sb-admin-2.css' ?>">
    <link rel="stylesheet" href="<?php echo base_url() . 'assets/css/styles.css' ?>">

    <?php if ($css == 'editMhs') { ?>
        <link rel="stylesheet" href="<?php echo base_url() . 'assets/css/edit_profile.css' ?>">
    <?php } ?>

    <?php if ($css == 'forumMhs') { ?>
        <link rel="stylesheet" href="<?php echo base_url() . 'assets/css/forum_mhs.css' ?>">
    <?php } ?>

    <?php if ($css == 'registrasiMhs') { ?>
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.css">
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/select/1.3.1/css/select.dataTables.min.css">
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.7.0/css/buttons.dataTables.min.css">
    <?php } ?>
    <?php if ($css == 'forumMhs') { ?>
        <link rel="stylesheet" href="<?php echo base_url() . 'assets/css/forum_mhs.css' ?>">
    <?php } ?>



    <link href="<?php echo base_url() . 'assets/vendor/fontawesome-free/css/all.min.css' ?>" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <title>SIPUPIL</title>

</head>

<body id="body-pd">
    <!--========== HEADER ==========-->
    <header class="header">
        <div class="header__container">
            <img src="<?= base_url() ?>assets/img/perfil.jpg" alt="" class="header__img">
            <!-- Data mahasiswa diakses dengan variable $data_m karena pada controller diinisialisasi dengan user_d['data_m'] -->
            <a href="#" class="header__logo"><?php echo $this->session->userdata('Name'); ?></a>
            <div class="header__search">
                <input type="search" placeholder="Search" class="header__input">
                <i class='bx bx-search header__icon'></i>
            </div>

            <div class="header__toggle">
                <i class='bx bx-menu' id="header-toggle"></i>
            </div>
        </div>
    </header>
    <!--========== END HEADER ==========-->

    <!--========== NAVBAR ==========-->
    <div class="l-navbar" id="navbar">
        <nav class="nav">
            <div>
                <div class="nav__brand">
                    <ion-icon name="menu-outline" class="nav__toggle" id="nav-toggle"></ion-icon>
                    <a href="#" class="nav__logo">SIPUPIL</a>
                </div>
                <div class="nav__list">
                    <a href="<?php echo base_url() . 'mahasiswa' ?>" class="nav__link <?php if ($css == 'dashboardMhs')  echo 'active'; ?>">
                        <ion-icon name="home-outline" class="nav__icon"></ion-icon>
                        <span class="nav__name">Dashboard</span>
                    </a>

                    <a href="<?php echo base_url() . 'mahasiswa/editmahasiswa' ?>" class="nav__link <?php if ($css == 'editMhs')  echo 'active'; ?>">
                        <ion-icon name="person-outline" class="nav__icon"></ion-icon>
                        <span class="nav__name">Profile</span>
                    </a>

                    <!-- 1 = active 0 = tidak aktif -->
                    <a href="<?php echo base_url() . 'forum/forumMahasiswa' ?>" class="nav__link <?php if ($css == 'forumMhs')  echo 'active'; ?>">
                        <ion-icon name="chatbubbles-outline" class="nav__icon"></ion-icon>
                        <span class="nav__name">Forum</span>
                    </a>
<<<<<<< Updated upstream

                    <div class="nav__link collapse__nav <?php if ($css == 'registrasiMhs')  echo 'active'; ?>">
=======
                    
                    <div class="nav__link collapse__nav">
>>>>>>> Stashed changes
                        <ion-icon name="folder-outline" class="nav__icon"></ion-icon>
                        <span class="nav__name">Registrasi</span>

                        <ion-icon name="chevron-down-outline" class="collapse__link"></ion-icon>

                        <ul class="collapse__menu">
<<<<<<< Updated upstream
                            <a href="<?php echo base_url() . 'RegistrasiMK' ?>" class="collapse__sublink">Registrasi</a>
=======
                            <a href="<?php echo base_url().'RegistrasiMK' ?>" class="collapse__sublink">Registrasi</a>
>>>>>>> Stashed changes
                            <a href="#" class="collapse__sublink">Status</a>
                            <a href="#" class="collapse__sublink">KSM</a>
                        </ul>
                    </div>

<<<<<<< Updated upstream
                    <div class="nav__link collapse__nav <?php if ($css == 'jadwalMhs')  echo 'active'; ?>">
=======
                    <div class="nav__link collapse__nav">
>>>>>>> Stashed changes
                        <ion-icon name="time-outline" class="nav__icon"></ion-icon>
                        <span class="nav__name">Jadwal</span>

                        <ion-icon name="chevron-down-outline" class="collapse__link"></ion-icon>

                        <ul class="collapse__menu">
                            <a href="<?php echo base_url() . 'mahasiswa/viewJadwal' ?>" class="collapse__sublink">Kelas</a>
                            <a href="#" class="collapse__sublink">Ujian</a>
                        </ul>
                    </div>

<<<<<<< Updated upstream
                    <a href="#" class="nav__link <?php if ($css == 'prsMhs')  echo 'active'; ?>">
=======
                    <a href=" class="nav__link">
>>>>>>> Stashed changes
                        <ion-icon name="pie-chart-outline" class="nav__icon"></ion-icon>
                        <span class="nav__name">PRS</span>
                    </a>
                </div>
            </div>

            <a href="<?= base_url() . 'login/logout' ?>" class="nav__link">
                <ion-icon name="log-out-outline" class="nav__icon"></ion-icon>
                <span class="nav__name">Log Out</span>
            </a>
        </nav>
    </div>
    <!--========== END NAVBAR ==========-->