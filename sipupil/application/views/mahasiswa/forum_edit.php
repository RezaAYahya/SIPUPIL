<main>
        <section>
            <div class="kotak-buatforum">
                <div class="kotak-buatforum">
                    <div class="card shadow mb-4">
                        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                            <h4 class="m-0 font-weight-bold text-primary">Buat Forum</h4>
                        </div>
                        <div class="card-body-forum">
                            <form action="<?echo base_url().'forum/editforum'?>" method="post">
                                <!-- <div class="form-group-row"> -->
                                    <!-- <label for="subject" class="col-sm col-form-label">Subject</label>
                                    <div class="col-sm">
                                        <input type="text" class="form-control" id="subject" name="ID_Matkul">
                                    </div>
                                </div> -->
                                <!-- <?php echo $forum_d['Isi_Forum']?> -->
                                <div class="form-group-row">
                                    <label for="message" class="col-sm col-form-label">Message</label>
                                    <div class="col-sm">
                                        <input type="text" class="form-control textboxclass" id="message" name="Isi_forum" placeholder="<?php echo $forum_d['Isi_Forum']?>">
                                    </div>
                                </div>

                            </div>

                            <div class="card-footer py-3">
                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary center-block" id="postForum">Post to
                                        Forum</button>
                                     <button onclick="window.location.href='<?php echo base_url().'forum/forummahasiswa'?>'" type="button" class="btn btn-secondary center-block" id="cancel">Cancel</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>