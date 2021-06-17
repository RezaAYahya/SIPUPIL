<main>
        <section>
            <div class="kotak-buatforum">
                <div class="kotak-buatforum">
                    <div class="card shadow mb-4">
                        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                            <h4 class="m-0 font-weight-bold text-primary">Buat Forum</h4>
                        </div>
                        <div class="card-body-forum">
                            <form action="<?base_url().'forum/editmahasiswa'?>" method="post">
                                <!-- <div class="form-group-row"> -->
                                <div class="form-group">
                                    <label for="formcontrol">subject</label>
                                    <br>
                                    <?php foreach($idmatkul as $mk) {?>
                                    <?php echo $mk['ID_Matkul'] ?>
                                    <select multiple class="form-control" name="ID_Matkul">
                                        <option value="<?php echo $mk['ID_Matkul'] ?>"><?php echo $mk['Mata_Kuliah'] ?></option>
                                    </select>
                                    <?php } ?>
                                </div>
                                    <!-- <label for="subject" class="col-sm col-form-label">Subject</label>
                                    <div class="col-sm">
                                        <input type="text" class="form-control" id="subject" name="ID_Matkul">
                                    </div>
                                </div> -->

                                <div class="form-group-row">
                                    <label for="message" class="col-sm col-form-label">Message</label>
                                    <div class="col-sm">
                                        <input type="text" class="form-control textboxclass" id="message" name="Isi_forum">
                                    </div>
                                </div>

                            </div>

                            <div class="card-footer py-3">
                                <div class="text-center">
                                    <button type="button" class="btn btn-primary center-block" id="postForum">Post to
                                        Forum</button>
                                    <button type="button" class="btn btn-secondary center-block" id="cancel">Cancel</button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </section>
    </main>