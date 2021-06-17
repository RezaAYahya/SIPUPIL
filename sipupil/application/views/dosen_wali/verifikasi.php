<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- ===== CSS ===== -->
    <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <link rel="stylesheet" href="assets/vendor/sb-admin/sb-admin-2.min.css">
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

            <a href="#" class="header__logo">Dosen Wali</a>

            <div class="header__search">
                <input type="search" placeholder="Search" class="header__input">
                <i class='bx bx-search header__icon'></i>
            </div>

            <div class="header__toggle">
                <i class='bx bx-menu' id="header-toggle"></i>
            </div>
        </div>
    </header>

    <div class="l-navbar" id="navbar">
        <nav class="nav">
            <div>
                <div class="nav__brand">
                    <ion-icon name="menu-outline" class="nav__toggle" id="nav-toggle"></ion-icon>
                    <a href="#" class="nav__logo">SIPUPIL</a>
                </div>
                <div class="nav__list">
                    <a href="#" class="nav__link">
                        <ion-icon name="home-outline" class="nav__icon"></ion-icon>
                        <span class="nav__name">Dashboard</span>
                    </a>

                    <a href="editprofile_mhs.html" class="nav__link">
                        <ion-icon name="person-outline" class="nav__icon"></ion-icon>
                        <span class="nav__name">Profile</span>
                    </a>

                    <a href="#" class="nav__link">
                        <ion-icon name="chatbubbles-outline" class="nav__icon"></ion-icon>
                        <span class="nav__name">Forum</span>
                    </a>

                    <a href="#" class="nav__link active">
                        <ion-icon name="folder-outline" class="nav__icon"></ion-icon>
                        <span class="nav__name">Verifikasi</span>
                    </a>

                    <div class="nav__link collapse__nav">
                        <ion-icon name="time-outline" class="nav__icon"></ion-icon>
                        <span class="nav__name">Jadwal</span>

                        <ion-icon name="chevron-down-outline" class="collapse__link"></ion-icon>

                        <ul class="collapse__menu">
                            <a href="#" class="collapse__sublink">Kelas</a>
                            <a href="#" class="collapse__sublink">Ujian</a>
                        </ul>
                    </div>

                </div>
            </div>

            <a href="#" class="nav__link">
                <ion-icon name="log-out-outline" class="nav__icon"></ion-icon>
                <span class="nav__name">Log Out</span>
            </a>
        </nav>
    </div>

    <!--========== CONTENTS ==========-->
    <main>
        <section>
            <!-- TABLE LIST MATKUL YG DITAWARKAN -->
            <div class="container-fluid">
                <div class="card shadow mb-4">

                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Mata Kuliah yang Diambil</h6>
                    </div>

                    <div class="card-body">

                        <div class="form-group-row">
                            <label for="nim" class="col-sm-6 col-form-label">NIM</label>
                            <div class="col-sm">
                                <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                                    <option selected>Choose...</option>
                                    <option value="1301180001">1301180001</option>
                                    <option value="1301180455">1301180455</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group-row">
                            <label for="name" class="col-sm col-form-label">Nama Mahasiswa</label>
                            <div class="col-sm">
                                <input type="text" class="form-control" id="name" name="name" disabled>
                            </div>
                        </div>

                        <div class="form-group-row">
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
                    </div>
                    <div class="card-footer py-3">
                        <div class="text-center">
                            <button type="button" class="btn btn-primary center-block" id="acc">Accept</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END TABLE LIST MATKUL YG DITAWARKAN -->
        </section>
    </main>

    <!-- ===== IONICONS ===== -->
    <script src="https://unpkg.com/ionicons@5.1.2/dist/ionicons.js"></script>

    <!-- ===== MAIN JS ===== -->
    <script src="assets/js/main.js"></script>

    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="assets/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="assets/vendor/sb-admin/sb-admin-2.min.js"></script>
</body>

</html>