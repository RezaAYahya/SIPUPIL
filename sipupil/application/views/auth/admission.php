<div class="container">
    <!-- Outer Row -->
    <div class="row justify-content-center">
        <div class="col-xl-10 col-lg-12 col-md-9">
            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <img src="<?= base_url() ?>assets/img/UPIL.png" class="col-lg-6 img-thumbnail">
                        <div class="col-lg-6">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h2 text-gray-900 mb-4">Aktivasi Akun SIPUPIL</h1>
                                </div>


                                <form class="user" method="POST" action="">
                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-user" id="token" placeholder="Enter Nomor Token" name="email" value="">

                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control form-control-user" id="password" placeholder="Password" name="password">

                                    </div>
                                    <button type="submit" class="btn btn-primary btn-user btn-block">
                                        Aktivasi
                                    </button>
                                    <hr>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

</div>