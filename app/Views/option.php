<div class="container">
    <h3>
        Options
    </h3>
    <?php if(session()->alert): ?>
        <div class="alert alert-<?php echo session()->alert['type']; ?>">
            <?php echo session()->alert['message']; ?>
        </div>
    <?php endif; ?>
    <article class="">
        <form method="post" action="<?php echo base_url(); ?>/option/save" enctype="multipart/form-data">
            <div class="row">

                <div class="col-lg-6 form-group">
                    <h6 class="mb-2">
                        Banner Popup
                        <?php
                        if($bannerWelcome)
                        {
                            echo '&nbsp;<a href="'.$bannerWelcome['image'].'" data-magnify="gallery">';
                            echo '<i class="bi bi-image"></i>';
                            echo '</a>';
                        }
                        ?>
                    </h6>
                    <input type="file" name="fileBannerWelcome" class="form-control form-control-sm" accept=".jpg,.jpeg,.png">
                    <p class="m-0 fst-italic text-secondary">upload gambar baru jika ingin diubah</p>
                </div>

                <div class="col-lg-6 form-group">
                    <h6 class="mb-2">
                        Banner Pengumuman
                        <?php
                        if($bannerPengumuman)
                        {
                            echo '&nbsp;<a href="'.$bannerPengumuman['image'].'" data-magnify="gallery">';
                            echo '<i class="bi bi-image"></i>';
                            echo '</a>';
                        }
                        ?>
                    </h6>
                    <input type="file" name="fileBannerPengumuman" class="form-control form-control-sm" accept=".jpg,.jpeg,.png">
                    <p class="m-0 fst-italic text-secondary">upload gambar baru jika ingin diubah</p>
                </div>

                <div class="col-12 px-3"><hr class="border-1"></div>

                <h6 class="mb-2"><i class="bi bi-card-list"></i> Layanan Inovasi</h6>
                <?php for($i=0; $i<count($layananInovasi); $i++): ?>
                <div class="col-lg-6 mb-2">
                    <div class="form-group mb-2">
                        <input type="hidden" name="modalToolsId[<?php echo $i; ?>]" value="<?php echo $layananInovasi[$i]->id; ?>">
                        <input type="hidden" name="modalToolsIcon[<?php echo $i; ?>]" value="<?php echo $layananInovasi[$i]->icon; ?>">
                        <div class="input-group input-group-sm mb-1">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon<?php echo $i; ?>" style="border-top-right-radius: 0; border-bottom-right-radius: 0;">Judul</span>
                            </div>
                            <input type="text" name="modalToolsTitle[<?php echo $i; ?>]" class="form-control form-control-sm" placeholder="Judul ..." value="<?php echo $layananInovasi[$i]->title; ?>" aria-label="Judul" aria-describedby="basic-addon<?php echo $i; ?>">
                        </div>
                        <textarea id="<?php echo $layananInovasi[$i]->id; ?>" name="modalToolsContent[<?php echo $i; ?>]" class="form-control form-control-sm" rows="5"><?php echo str_replace('<', '&lt;', $layananInovasi[$i]->content); ?></textarea>
                    </div>
                </div>
                <?php endfor; ?>

                <div class="col-12 mb-1 px-3"><hr class="border-1"></div>

                <h6 class="mb-2"><i class="bi bi-tools"></i> Icon Tools Informasi Lain</h6>
                <?php for($i=0; $i<count($icon); $i++): ?>
                <?php for($j=0; $j<count($icon[$i]); $j++): ?>
                <div class="col-lg-2 col-md-4 col-sm-6 col-6 mb-2">
                    <div class="d-flex justify-content-center align-items-center bg-light rounded-top" style="height: 150px;">
                        <img src="<?php echo base_url('assets/icon-tool/'.$icon[$i][$j][0]); ?>" style="width: 75px; height: auto;">
                    </div>
                    <div class="form-group">
                        <input type="file" name="iconToolImage[<?php echo $i;?>][<?php echo $j;?>]" class="form-control form-control-sm">
                        <input type="text" name="iconToolTitle[<?php echo $i;?>][<?php echo $j;?>]" class="form-control form-control-sm" value="<?php echo $icon[$i][$j][1]; ?>" placeholder="Judul ...">
                        <input type="text" name="iconToolUrl[<?php echo $i;?>][<?php echo $j;?>]" class="form-control form-control-sm fst-italic" value="<?php echo $icon[$i][$j][2]; ?>" placeholder="URL ...">
                    </div>
                </div>
                <?php endfor; ?>
                <?php endfor; ?>

                <div class="col-12 mb-1 px-3"><hr class="border-1"></div>

                <div class="col-lg-6 col-md-6 col-sm-12 col-12 mb-2">
                    <h6 class="mb-2"><i class="bi bi-youtube text-danger"></i> Social &dash; Youtube</h6>
                    <div class="form-group">
                        <input type="text" name="socialYoutube" value="<?php echo $socials['youtube']; ?>" class="form-control form-control-sm mb-1 fst-italic">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-12 mb-2">
                    <h6 class="mb-2"><i class="bi bi-instagram text-dark"></i> Social &dash; Instagram</h6>
                    <div class="form-group">
                        <input type="text" name="socialInstagram" value="<?php echo $socials['instagram']; ?>" class="form-control form-control-sm mb-1 fst-italic">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-12 mb-2">
                    <h6 class="mb-2"><i class="bi bi-facebook text-primary"></i> Social &dash; Facebook</h6>
                    <div class="form-group">
                        <input type="text" name="socialFacebook" value="<?php echo $socials['facebook']; ?>" class="form-control form-control-sm mb-1 fst-italic">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-12 mb-2">
                    <h6 class="mb-2"><i class="bi bi-twitter text-info"></i> Social &dash; Twitter</h6>
                    <div class="form-group">
                        <input type="text" name="socialTwitter" value="<?php echo $socials['twitter']; ?>" class="form-control form-control-sm mb-1 fst-italic">
                    </div>
                </div>

                <div class="col-12 mb-1 px-3"><hr class="border-1"></div>

                <h6 class="mb-2">Link Tautan Terkait &nbsp;<a href="#" id="tambahLink" class="a-normal">+</a> </h6>
                <?php for($i=0; $i<count($externalLink); $i++): ?>
                <div class="col-lg-4 col-md-4 col-sm-6 col-12 mb-2 external-link">
                    <div class="form-group">
                        <input type="text" name="exLinkTitle[]" value="<?php echo $externalLink[$i]['title']; ?>" class="form-control form-control-sm mb-1">
                        <input type="text" name="exLinkUrl[]" value="<?php echo $externalLink[$i]['url']; ?>" class="form-control form-control-sm fst-italic">
                    </div>
                </div>
                <?php endfor; ?>

                <div id="siteIdentity" class="col-12 mb-1 px-3"><hr class="border-1"></div>

                <div class="col-lg-6 col-md-6 col-sm-12 col-12 mb-2">
                    <h6 class="mb-2"><i class="bi bi-pin-map-fill"></i> Kontak &dash; Alamat</h6>
                    <div class="form-group">
                        <input type="text" name="contactAddress" value="<?php echo $contactUs['address']; ?>" class="form-control form-control-sm mb-1">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-12 mb-2">
                    <h6 class="mb-2"><i class="bi bi-telephone-outbound-fill"></i> Kontak &dash; Telepon</h6>
                    <div class="form-group">
                        <input type="text" name="contactPhone" value="<?php echo $contactUs['phone']; ?>" class="form-control form-control-sm mb-1">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-12 mb-2">
                    <h6 class="mb-2"><i class="bi bi-envelope-fill"></i> Kontak &dash; Email</h6>
                    <div class="form-group">
                        <input type="text" name="contactEmail" value="<?php echo $contactUs['email']; ?>" class="form-control form-control-sm mb-1">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-12 mb-2">
                    <h6 class="mb-2"><i class="bi bi-globe"></i> Kontak &dash; Website</h6>
                    <div class="form-group">
                        <input type="text" name="contactWebsite" value="<?php echo $contactUs['website']; ?>" class="form-control form-control-sm mb-1">
                    </div>
                </div>

            </div>
            <button type="submit" class="btn btn-primary mt-3">Simpan</button>
        </form>
    </article>

</div>