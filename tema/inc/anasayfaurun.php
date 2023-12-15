<div class="contact-btn">
            <div class="contact-btn-txt"><?php echo $blokRowdil["baslik7"]; ?></div>
        </div>
        <div class="contact-modal background-section">
            <div class="contact-container h-100 w-100  border-right">
                <div class="box-contact-inner section-padding ">
                    <div class="row align-items-center">
                        <div class="col-lg-7">
                            <div class="form-box">
                                <div class="line line-top"></div>
                                <div class="line line-bottom"></div>
                                <div class="line line-left"></div>
                                <div class="line line-right"></div>

                               <?php require_once(TEMA_INC.'inc/formalani.php');?>
                            </div>
                        </div>

                        <div class="col-lg-5">
                            <div class="box-info-contact">
                                <ul>
                                    <li>
                                        <h5 class="title-block mb-15"><?php echo $blokRowdil["baslik7"]; ?></h5>
                                        <p class="text-p"><?php echo $ayar["telefon"];?></p>
                                        <div class="over-hidden mt-5">
                                            <a class="link-hover" data-hover-text="<?php echo $ayar["email"];?>"
                                               href="mailto:<?php echo $ayar["email"];?>"><?php echo $ayar["email"];?></a>
                                        </div>

                                    </li>
                                    <li>
                                        <h5 class="title-block mb-15"><?php echo $blokRowdil["desc6"]; ?></h5>
                                        <p class="text-p"><?php echo $ayar["adres"];?></p>
                                    </li>
                                    <li>
                                        <h5 class="title-block mb-15"><?php echo $blokRowdil["desc7"]; ?></h5>
                                        <div class="social-item over-hidden">
                                            <a class="link-hover" data-hover-text="<?php echo $blokRowdil["baslik8"];?>" href="<?php echo $ayar["facebook_url"]; ?>" target="_blank"
                                                rel="nofollow"><?php echo $blokRowdil["baslik8"];?></a>
                                        </div>
                                        <div class="social-item over-hidden">
                                            <a class="link-hover" data-hover-text="<?php echo $blokRowdil["desc8"];?>" href="<?php echo $ayar["twitter_url"]; ?>" target="_blank"
                                                rel="nofollow"><?php echo $blokRowdil["desc8"];?></a>
                                        </div>
                                        <div class="social-item over-hidden">
                                            <a class="link-hover" data-hover-text="<?php echo $blokRowdil["baslik9"];?>" href="<?php echo $ayar["instagram_url"]; ?>" target="_blank"
                                                rel="nofollow"><?php echo $blokRowdil["baslik9"];?></a>
                                        </div>
                                          <div class="social-item over-hidden">
                                            <a class="link-hover" data-hover-text="<?php echo $blokRowdil["desc9"];?>" href="<?php echo $ayar["google_url"]; ?>" target="_blank"
                                                rel="nofollow"><?php echo $blokRowdil["desc9"];?></a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>