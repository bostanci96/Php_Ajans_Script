
<?php $anasayfayazi = $db->query("SELECT * FROM sayfalar WHERE sayfa_id=6")->fetch(PDO::FETCH_ASSOC); ?>
     <div class="box-gallery-vertical box-gallery-content section-margin " data-dsn-animate="section"
                        data-dsn-duration="100%">
                        <div class="container">
                            <div class="row dsn-z-index-2">
                                <div class="col-lg-6  dsn-z-index-2 pr-0 mb-lg-section">
                                    <div class="box-im h-100 p-absolute">
                                        <div class="img-container h-100 before-z-index" data-dsn-grid="move-up"
                                            data-overlay="3">
                                            <img class="cover-bg-img " src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                            data-dsn-src="<?php echo URL.'images/sayfalar/big/'.$anasayfayazi["sayfa_resim"];?>" alt="">
                                        </div>

                                    </div>
                                </div>

                                <div class="col-lg-6 pl-0 mt-lg-section">

                                    <div class="box-info h-100 box-padding background-section ">
                                        <div class="box-info-inner">
                                            <div class="title-cover" data-dsn-grid="move-section" data-dsn-opacity="0.1"
                                                data-dsn-duration="170%" data-dsn-move="0%">
                                              <?php echo $anasayfayazi[$lehce."sayfa_keyw"];?>
                                            </div>

                                            <div class="mb-50 d-flex text-left flex-column align-items-start">
                                                <p class="sub-heading line-shap line-shap-after mb-15">
                                                    <span class="line-bg-right"><?php echo $anasayfayazi[$lehce."sayfa_adi"];?></span>
                                                </p>
                                                <h2 class="section-title text-transform-upper"><?php echo $anasayfayazi[$lehce."sayfa_desc"];?></h2>

                                            </div>
                                            <div class="dsn-accordion accordion">
                                                <div class="accordion__wrapper">


<?php 
                                                                $metin = $anasayfayazi[$lehce."sayfa_icerik"];

                                                                $dizi = explode ('<div style="page-break-after: always"><span style="display:none">&nbsp;</span></div>',$metin);

$adet=count($dizi); 
for($i=0; $i<$adet; $i++){
 $newdizi = explode ("<hr />",$dizi[$i]); ?>







                                                    <div class="accordion__item dsn-up">
                                                        <div
                                                            class="accordion__question <?php if($i==0){ echo "expanded"; } ?> d-flex align-items-center p-relative">
                                                            <span class="number"><?php echo $i+1; ?></span>
                                                            <h4 class="sm-title-block"> <?php echo $newdizi[0]; ?></h4>
                                                        </div>
                                                        <div class="accordion__answer <?php if($i==0){ echo "active"; } ?>">
                                                            <p> <?php echo $newdizi[1]; ?></p>
                                                        </div>
                                                    </div>

 <?php 
                                                                }
                                                               


                                                                ?>






                                               

                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>