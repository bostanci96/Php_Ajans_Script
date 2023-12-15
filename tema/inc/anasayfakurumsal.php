<?php $anasayfayazi3 = $db->query("SELECT * FROM sayfalar WHERE sayfa_id=4")->fetch(PDO::FETCH_ASSOC); ?>

 <section class="about-section p-relative section-margin " data-dsn-title="How We Are"
                        data-dsn-animate-multi data-dsn-animate="section">
                        <div class="container">
                            <div class="row fill-right-container">
                                <div class="col-lg-6">
                                    <div class="box-info pt-60 pb-60">
                                        <div class="title-move z-index-1 " data-dsn-grid="move-section"
                                            data-dsn-move="-70" data-dsn-duration="100%" data-dsn-opacity="1.2"
                                            data-dsn-responsive="tablet">
                                            <h2 class="section-title mb-30 dsn-text-shadow text-transform-upper">
                                              <?php echo $anasayfayazi3[$lehce."sayfa_adi"];?> <br /><?php echo $anasayfayazi3[$lehce."sayfa_desc"];?>
                                            </h2>
                                        </div>
                                        <h6 class="mt-80 pb-30 mb-30 border-bottom title-block"><?php echo $anasayfayazi3["sayfa_keyw"];?>
                                        </h6>
                                        <p class="max-w570 dsn-up mb-10 ">
                                          <?php echo $anasayfayazi3[$lehce."sayfa_icerik"];?>
                                        </p>
                                     

                                        <div class="d-flex flex-column align-items-start ">
                                            <div class="section-title">
                                                <h6 class="dsn-up line-shap line-shap-after">
                                                  <?php echo $anasayfayazi3[$lehce."sayfa_goster1"];?>
                                                </h6>
                                                <p class="sub-heading line-bg-left mt-20 dsn-up">
                                                 <?php echo $anasayfayazi3[$lehce."sayfa_goster2"];?>
                                                </p>
                                            </div>
                                        </div>


                                        <div class="box-awards d-grid grid-md-2  mt-30">
                                            <div class="box-awards-item has-border dsn-up ">
                                                <h5 class="number background-section p-10">
                                                    <span class="has-animate-number title">  <?php echo $blokRowdil["desc20"]; ?></span>
                                                    <span class="sm-title-block">  <?php echo $blokRowdil["baslik21"]; ?></span>
                                                </h5>
                                            </div>

                                            <div class="box-awards-item has-border dsn-up">
                                                <h5 class="number background-section p-10">
                                                    <span class="has-animate-number title">  <?php echo $blokRowdil["desc21"]; ?></span>
                                                    <span class="sm-title-block">  <?php echo $blokRowdil["baslik22"]; ?></span>
                                                </h5>
                                            </div>


                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="background-mask p-20 p-absolute h-100 w-100">
                                        <div class="line line-top"></div>
                                        <div class="line line-bottom"></div>
                                        <div class="line line-left"></div>
                                        <div class="line line-right"></div>

                                        <div class="img-box h-100">
                                            <div class="img-container h-100 before-z-index" data-dsn-grid="move-up"
                                                data-overlay="3">
                                                <img class="cover-bg-img " src="<?php echo URL.'images/sayfalar/big/'.$anasayfayazi3["sayfa_resim"];?>"
                                                data-dsn-src="<?php echo URL.'images/sayfalar/big/'.$anasayfayazi3["sayfa_resim"];?>" alt="">
                                            </div>
                                        </div>


                                        <div
                                            class="box-awards-item has-border big-number p-absolute left-0 bottom-0 ml-40 mb-40 dsn-up v-dark-head">
                                            <h5 class="number  p-10">
                                                <span class="has-animate-number title">  <?php echo $blokRowdil["desc22"]; ?></span>
                                                <span class="sm-title-block d-block">
                                                    <?php echo $blokRowdil["baslik23"]; ?>
                                                </span>
                                            </h5>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </section>