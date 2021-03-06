<?php echo $editMhs['Name']; ?>
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
                            <input type="text" class="form-control" id="name" name="name" value="<?=$editMhs['name']?>">
                        </div>
                    </div>

                    <div class="form-group-row">
                        <label for="email" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm">
                            <input type="text" class="form-control" id="email" name="email" value="<?=$editMhs['email']?>" />
                        </div>
                    </div>

                    <div class="form-group-row">
                        <label for="ttl" class="col-form-label">Tempat Tanggal Lahir</label>
                        <div class="col-sm">
                            <input type="text" class="form-control" id="ttl" name="ttl" value="<?=$editMhs['ttl']?>" />
                        </div>
                    </div>

                    <div class="form-group-row">
                        <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                        <div class="col-sm">
                            <input type="text" class="form-control" id="alamat" name="alamat" value="<?=$editMhs['ttl']?>" />
                        </div>
                    </div>

                    <div class="form-group-row">
                        <label for="notelp" class="col-form-label">Nomor Telpon</label>
                        <div class="col-sm">
                            <input type="text" class="form-control" id="nomortelefon" name="nomortelefon" value="<?=$editMhs['nomortelefon']?>" />
                        </div>
                    </div>

                    <!-- Button -->
                    <div class="form-group-row">
                        <button type="submit" class="btn btn-primary center-block">Submit</button>
                        <button type="delete" class="btn btn-primary center-block">Reset</button>
                    </div>

                </form>

            </div>
        </div>
    </div>

</body>
