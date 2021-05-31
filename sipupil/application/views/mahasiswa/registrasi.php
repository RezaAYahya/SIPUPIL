<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- ===== MAIN CSS ===== -->
    <link rel="stylesheet" href="assets/vendor/sb-admin/sb-admin-2.css">
    <link rel="stylesheet" href="assets/css/styles.css">

    <!-- ICON -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">

    <!-- DATATABLES -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/select/1.3.1/css/select.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.7.0/css/buttons.dataTables.min.css">

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
                    <a href="index.html" class="nav__link">
                        <ion-icon name="home-outline" class="nav__icon"></ion-icon>
                        <span class="nav__name">Dashboard</span>
                    </a>

                    <a href="editprofile_mhs.html" class="nav__link">
                        <ion-icon name="person-outline" class="nav__icon"></ion-icon>
                        <span class="nav__name">Profile</span>
                    </a>

                    <a href="forum_mahasiswa.html" class="nav__link">
                        <ion-icon name="chatbubbles-outline" class="nav__icon"></ion-icon>
                        <span class="nav__name">Forum</span>
                    </a>

                    <div class="nav__link collapse__nav active">
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

        <!-- TABLE LIST MATKUL YG DITAWARKAN -->
        <div class="container-fluid">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Mata Kuliah yang Ditawarkan</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="matkul" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>Mata Kuliah</th>
                                    <th>SKS</th>
                                    <th>Kelas</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td></td>
                                    <td>Kalkulus 1B</td>
                                    <td>3</td>
                                    <td>IF-42-01</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>Kalkulus 1B</td>
                                    <td>3</td>
                                    <td>IF-42-02</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>Kalkulus 1B</td>
                                    <td>3</td>
                                    <td>IF-42-03</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>Kalkulus 1B</td>
                                    <td>3</td>
                                    <td>IF-42-04</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="card-footer py-3">
                    <div class="text-center">
                        <button type="button" class="btn btn-primary center-block" id="ambil">Ambil</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- END TABLE LIST MATKUL YG DITAWARKAN -->

        <!-- TABLE MATKUL YG AKAN DIAMBIL -->
        <div class="container-fluid">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Mata Kuliah yang Diambil</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="matkul_regis" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>Mata Kuliah</th>
                                    <th>SKS</th>
                                    <th>Kelas</th>
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="card-footer py-3">
                    <div class="text-center">
                        <button class="btn btn-primary center-block" type="button" id="drop">
                            Drop
                        </button>
                        <button class="btn btn-info center-block" type="button">
                            Preview Jadwal
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <!-- END TABLE MATKUL YG AKAN DIAMBIL -->

        <!-- VERIFIKASI -->
        <div class="container-fluid">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Siap Acc ke Dosen Wali</h6>
                </div>
                <div class="card-body">
                    <p>
                        Mahasiswa harap memperhatikan aturan dalam registrasi mata kuliah ini:
                    <nav>
                        <ol>
                            <li>Maksimal pengambilan mata kuliah sebanyak 24 sks.</li>
                            <li>Jadwal tidak ada yang bentrok.</li>
                            <li>Tidak mengambil mata kuliah yang sama tetapi berbeda keas.</li>
                        </ol>
                    </nav>
                    </p>
                    <div class="text-center">
                        <button class="btn btn-primary center-block" type="button">
                            Verifikasi
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <!-- END VERIFIKASI -->

    </main>
    <!--========== END CONTENTS ==========-->

    <!-- JQUERY -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>

    <!-- ===== IONICONS ===== -->
    <script src="https://unpkg.com/ionicons@5.1.2/dist/ionicons.js"></script>

    <!-- ===== MAIN JS ===== -->
    <script src="assets/js/main.js"></script>
    <script src="assets/js/matkul.js"></script>

    <!-- DATATABLES JS -->
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/select/1.3.3/js/dataTables.select.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.7.0/js/dataTables.buttons.min.js"></script>

</body>

</html>