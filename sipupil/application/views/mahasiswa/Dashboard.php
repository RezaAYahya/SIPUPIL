<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- ===== CSS ===== -->
    <link rel="stylesheet" href="<?= base_url() . 'assets/vendor/sb-admin/sb-admin-2.css' ?>">
    <link rel="stylesheet" href="<?= base_url() . 'assets/css/styles.css' ?>">
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
                    <a href="#" class="nav__link active">
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
        <section>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Incidunt vel illum fuga unde cum, voluptates
                magni molestias eveniet culpa autem ut, totam veniam, suscipit tempore ullam pariatur est at asperiores?
            </p>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Incidunt vel illum fuga unde cum, voluptates
                magni molestias eveniet culpa autem ut, totam veniam, suscipit tempore ullam pariatur est at asperiores?
            </p>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Incidunt vel illum fuga unde cum, voluptates
                magni molestias eveniet culpa autem ut, totam veniam, suscipit tempore ullam pariatur est at asperiores?
            </p>
        </section>
    </main>
    <!--========== CONTENTS ==========-->

    <!-- ===== IONICONS ===== -->
    <script src="https://unpkg.com/ionicons@5.1.2/dist/ionicons.js"></script>

    <!-- ===== MAIN JS ===== -->
    <script src="assets/js/main.js"></script>
</body>

</html>