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
    <!-- END HEADER -->

    <!-- NAVBAR -->
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

                    <a href="#" class="nav__link">
                        <ion-icon name="chatbubbles-outline" class="nav__icon"></ion-icon>
                        <span class="nav__name">Forum</span>
                    </a>

                    <div class="nav__link collapse active">
                        <ion-icon name="folder-outline" class="nav__icon"></ion-icon>
                        <span class="nav__name">Registrasi</span>

                        <ion-icon name="chevron-down-outline" class="collapse__link"></ion-icon>

                        <ul class="collapse__menu">
                            <a href="registrasi.html" class="collapse__sublink">Registrasi</a>
                            <a href="#" class="collapse__sublink">Status</a>
                            <a href="#" class="collapse__sublink">KSM</a>
                        </ul>
                    </div>

                    <div class="nav__link collapse">
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
    <!-- END NAVBAR -->

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

    </main>
    <!-- END CONTENTS -->
