<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- ===== CSS ===== -->
    <link rel="stylesheet" href="assets/vendor/sb-admin/sb-admin-2.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/edit_profile.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">

    <title>SIPUPIL</title>
</head>

<body id="body-pd">
    <!--========== HEADER ==========-->
    <header class="header">
        <div class="header__container">
            <img src="assets/img/perfil.jpg" alt="" class="header__img">

            <a href="#" class="header__logo">Mahasiswa</a>

            <div class="header__search">
                <input type="search" placeholder="Search" class="header__input">
                <i class='bx bx-search header__icon'></i>
            </div>

            <div class="header__toggle">
                <i class='bx bx-menu' id="header-toggle"></i>
            </div>
        </div>
    </header>
    <!--==========END HEADER ==========-->

    <!--========== NAVBAR ==========-->
    <div class="l-navbar" id="navbar">
        <nav class="nav">
            <div>
                <div class="nav__brand">
                    <ion-icon name="menu-outline" class="nav__toggle" id="nav-toggle"></ion-icon>
                    <a href="#" class="nav__logo">SIPUPIL</a>
                </div>
                <div class="nav__list">
                    <a href="index.html" class="nav__link">
                        <ion-icon name="home-outline" class="nav__icon"></ion-icon>
                        <span class="nav__name">Dashboard</span>
                    </a>

                    <a href="editprofile_mhs.html" class="nav__link active">
                        <ion-icon name="person-outline" class="nav__icon"></ion-icon>
                        <span class="nav__name">Profile</span>
                    </a>

                    <a href="forum_mahasiswa.html" class="nav__link">
                        <ion-icon name="chatbubbles-outline" class="nav__icon"></ion-icon>
                        <span class="nav__name">Forum</span>
                    </a>

                    <div class="nav__link collapse__nav">
                        <ion-icon name="folder-outline" class="nav__icon"></ion-icon>
                        <span class="nav__name">Registrasi</span>

                        <ion-icon name="chevron-down-outline" class="collapse__link"></ion-icon>

                        <ul class="collapse__menu">
                            <a href="registrasi.html" class="collapse__sublink">Registrasi</a>
                            <a href="#" class="collapse__sublink">Status</a>
                            <a href="#" class="collapse__sublink">KSM</a>
                        </ul>
                    </div>

                    <div class="nav__link collapse__nav">
                        <ion-icon name="time-outline" class="nav__icon"></ion-icon>
                        <span class="nav__name">Jadwal</span>

                        <ion-icon name="chevron-down-outline" class="collapse__link"></ion-icon>

                        <ul class="collapse__menu">
                            <a href="#" class="collapse__sublink">Kelas</a>
                            <a href="#" class="collapse__sublink">Ujian</a>
                        </ul>
                    </div>


                    <a href="#" class="nav__link">
                        <ion-icon name="pie-chart-outline" class="nav__icon"></ion-icon>
                        <span class="nav__name">PRS</span>
                    </a>
                </div>
            </div>

            <a href="#" class="nav__link">
                <ion-icon name="log-out-outline" class="nav__icon"></ion-icon>
                <span class="nav__name">Log Out</span>
            </a>
        </nav>
    </div>
    <!--========== END NAVBAR ==========-->

    <!--========== CONTENTS ==========-->
    <main>
        <!--========== FORM EDIT ==========-->
        <div class="kotak-edit">
            <h1>Edit Profile Mahasiswa</h1>
            <div class="row">
                <div class="col-lg">
                    <form>
                        <div class="form-group-row">
                            <label for="nim" class="col-sm col-form-label">NIM</label>
                            <div class="col-sm">
                                <input type="text" class="form-control" id="nim" name="nim" disabled>
                            </div>
                        </div>

                        <div class="form-group-row">
                            <label for="name" class="col-sm col-form-label">Nama Mahasiswa</label>
                            <div class="col-sm">
                                <input type="text" class="form-control" id="name" name="name" disabled>
                            </div>
                        </div>

                        <div class="form-group-row">
                            <label for="email" class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm">
                                <input type="text" class="form-control" id="email" name="email">
                            </div>
                        </div>

                        <div class="form-group-row">
                            <label for="ttl" class="col-sm-6 col-form-label">Tempat Tanggal Lahir</label>
                            <div class="col-sm">
                                <input type="text" class="form-control" id="ttl" name="ttl">
                            </div>
                        </div>

                        <div class="form-group-row">
                            <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                            <div class="col-sm">
                                <input type="text" class="form-control" id="alamat" name="alamat">
                            </div>
                        </div>

                        <div class="form-group-row">
                            <label for="notelp" class="col-sm-4 col-form-label">Nomor Telpon</label>
                            <div class="col-sm">
                                <input type="text" class="form-control" id="notelp" name="notelp">
                            </div>
                        </div>

                        <div class="form-group-row">
                            <label for="ortu" class="col-sm-4 col-form-label">Nama Orang Tua</label>
                            <div class="col-sm">
                                <input type="text" class="form-control" id="ortu" name="ortu">
                            </div>
                        </div>

                        <div class="form-group-row">
                            <label for="noortu" class="col-sm-6 col-form-label">Nomor Telpon Orang Tua</label>
                            <div class="col-sm">
                                <input type="text" class="form-control" id="noortu" name="noortu">
                            </div>
                        </div>

                        <!-- Button -->
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary center-block">Submit</button>
                            <button type="delete" class="btn btn-primary center-block">Reset</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!--========== END FORM EDIT ==========-->

    </main>
    <!--========== END CONTENTS ==========-->

    <!-- ===== IONICONS ===== -->
    <script src="https://unpkg.com/ionicons@5.1.2/dist/ionicons.js"></script>

    <!-- ===== MAIN JS ===== -->
    <script src="assets/js/main.js"></script>
</body>

</html>