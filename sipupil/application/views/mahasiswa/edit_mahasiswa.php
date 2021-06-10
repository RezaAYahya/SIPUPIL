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
                                <input type="text" class="form-control" id="nim" name="nim" disabled value="<?php echo $data_m['NIM'] ?>">
                            </div>
                        </div>

                        <div class="form-group-row">
                            <label for="name" class="col-sm col-form-label">Nama Mahasiswa</label>
                            <div class="col-sm">
                                <input type="text"  class="form-control" id="name" name="name" disabled value="<?php echo $data_m['Name'] ?>">
                            </div>
                        </div>

                        <div class="form-group-row">
                            <label for="email" class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm">
                                <input type="text" class="form-control" id="email" name="email" placeholder="email" value="<?php echo $data_m['email']?>">
                            </div>
                        </div>

                        <div class="form-group-row">
                            <label for="ttl" class="col-sm-6 col-form-label">Tempat Tanggal Lahir</label>
                            <div class="col-sm">
                                <input type="text" class="form-control" id="ttl" name="ttl" placeholder="ttl" value="<?php echo $data_m['TTL']?>">
                            </div>
                        </div>

                        <div class="form-group-row">
                            <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                            <div class="col-sm">
                                <input type="text" class="form-control" id="alamat" name="alamat" placeholder="alamat" value="<?php echo $data_m['alamat']?>">
                            </div>
                        </div>

                        <div class="form-group-row">
                            <label for="notelp" class="col-sm-4 col-form-label">Nomor Telpon</label>
                            <div class="col-sm">
                                <input type="text" class="form-control" id="notelp" name="notelp" value="<?php echo $data_m['nomortelfon']?>">
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
    <script src="<?php echo base_url().'assets/js/main.js' ?>"></script>
</body>

</html>