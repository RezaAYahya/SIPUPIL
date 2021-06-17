<!--========== CONTENTS ==========-->
<main>
        <section>
            <!-- CARD FORUM -->
            <div class="kotak-forum">
                <div class="kotak-forum">
                    <div class="card shadow mb-4">
                        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                            <h4 class="m-0 font-weight-bold text-primary">Forum Mahasiswa</h4>
                        </div>

                        <!-- FORUM PER MATKU CARD START -->
                        <?php foreach ($matkul as $mk){?>
                        <div class="card-body-forum">
                            <div class="card">
                                <!-- Card Header - Accordion -->
                                <a href="#collapseCardExample" class="d-block card-header py-3" data-toggle="collapse"
                                    role="button" aria-expanded="true" aria-controls="collapseCardExample">
                                    <h5 class="m-0 font-weight-bold text-primary"><?php echo $mk['Mata_Kuliah'] ?></h5>
                                </a>
                                <!-- END Card Header - Accordion -->

                                <!-- Card Content - Collapse -->
                                <div class="collapse" id="collapseCardExample">
                                    <div class="card-body-forum">
                                    <?php foreach($forum as $fr) {?>
                                        <?php if ($fr['ID_Matkul'] == $mk['ID_Matkul']){?>
                                        <!-- mencari semua mahasiswa yang nimnya sama dengan fr[i]['nim'] -->
                                            <?php foreach($siswa as $ss) {?>
                                                <?php if ($fr['NIM'] == $ss['NIM']) {?>
                                                <!-- CARD START -->
                                                
                                                <div class="card">
                                                    <!-- Card Header - Dropdown -->
                                                    <div
                                                        class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                                        <h6 class="m-0 font-weight-bold text-primary"><?php echo $ss['Name'] ?></h6>
                                                        <div class="dropdown no-arrow">
                                                        <?php if ($ss['NIM'] == $data_m['NIM']){ ?>
                                                            <a class="dropdown-toggle" href="#" role="button"
                                                                id="dropdownMenuLink" data-toggle="dropdown"
                                                                aria-haspopup="true" aria-expanded="false">
                                                                <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                                                            </a>
                                                            
                                                            <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                                                                aria-labelledby="dropdownMenuLink">
                                                                <div class="dropdown-header">Options</div>
                                                                    <a class="dropdown-item" href="<?php echo base_url().'forum/editforum/'.$fr['ID_Forum']?>">Edit</a>
                                                                    <a class="dropdown-item" href="<?php echo base_url().'forum/deleteForum/'.$fr['ID_Forum']?>">Delete</a>
                                                                </div>
                                                        <?php } ?>
                                                            </div>
                                                    </div>
                                                    <!-- END Card Header - Dropdown -->

                                                    <!-- Card Body -->
                                                    <div class="card-body">
                                                        <?php echo $fr['Isi_Forum'] ?>
                                                    </div>
                                                    <!-- END Card Body -->
                                                </div>
                                                <!-- END CARD -->
                                                <?php } ?>
                                            <?php } ?>
                                        <?php } ?>
                                    <?php }?>
                                    <br>

                                    </div>
                                </div>
                                <!-- END Card Content - Collapse -->
                            </div>
                        </div>
                        <!-- END FORUM MACHINE LEARNING -->
                        <?php } ?>
                    </div>
                </div>
            </div>
            <!-- END CARD FORUM -->
        </section>
    </main>
    <!--========== END CONTENTS ==========-->