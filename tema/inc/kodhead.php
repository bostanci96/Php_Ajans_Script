<?php $anasayfayazi2 = $db->query("SELECT * FROM sayfalar WHERE sayfa_id=3")->fetch(PDO::FETCH_ASSOC); ?>


   <div class="box-seat box-seat-parallax section-margin">

                        <div class="inner-img h-100-v" data-dsn-grid="move-up" data-overlay="2">
                            <img class="transform-3d has-bigger-scale" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                            data-dsn-src="<?php echo URL.'images/sayfalar/big/'.$anasayfayazi2["sayfa_resim"];?>" alt="">
                        </div>
                        <div class="pro-text background-section box-padding" data-dsn-grid="move-section"
                            data-dsn-responsive="tablet">
                            <div class="mb-30 d-flex text-left flex-column align-items-start">
                                <p class="sub-heading line-shap line-shap-after mb-15">
                                    <span class="line-bg-right"><?php echo $anasayfayazi2[$lehce."sayfa_desc"];?></span>
                                </p>
                                <h2 class="section-title"><?php echo $anasayfayazi2[$lehce."sayfa_adi"];?></h2>

                            </div>


                            <p class="mb-10">
                            <?php echo  $anasayfayazi2[$lehce."sayfa_icerik"]; ?> </p>

                            <a href=" <?php echo  $anasayfayazi2["sayfa_goster2"]; ?>" class="mt-30 dsn-button image-zoom" data-dsn="parallax">
                                <span class="dsn-border border-color-reverse-color"></span>
                             <?php echo  $anasayfayazi2["sayfa_goster1"]; ?>    <span>⟶</span>
                            </a>

                            <p class="sm-p mt-15 theme-color">
                                <?php echo $anasayfayazi2[$lehce."sayfa_keyw"];?>
                            </p>
                        </div>

                    </div>