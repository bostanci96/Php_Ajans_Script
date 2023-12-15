    <section class="team section-margin p-relative" data-dsn-animate="section"
                        data-dsn-title="our team">

                        <div class="container mb-70 d-flex text-center flex-column  align-items-center">
                            <p class="sub-heading line-shap line-shap-before mb-15">
                                <span class="line-bg-right">
                            <?php echo $blokRowdil["baslik17"]; ?>
                                </span>

                            </p>
                            <h2 class="section-title  title-cap">
                              <?php echo $blokRowdil["desc17"]; ?>
                            </h2>

                        </div>
                        <div class="container">
                            <div class="d-grid grid-lg-3 grid-sm-2 dsn-up">



                                   <?php
                    $cozumQuery = $db->query("SELECT * FROM fotograflar WHERE fotograf_bolum=110699 && fotograf_durum=1");
                    if($cozumQuery->rowCount()){
                        $sayac = 0;
                        foreach($cozumQuery as $cozumRow){
                            $sayac++;

                            ?>

                                <div class="team-item">
                                    <div class="team-item-inner">
                                        <div class="team-item-wapper background-section">
                                            <div class="item-content d-flex a-item-center">
                                                <div class="box-img">
                                                    <img class="cover-bg-img" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-dsn-src="<?php echo URL.'images/photos/big/'.$cozumRow["fotograf_src"];?>" alt="<?php echo $cozumRow[$lehce."fotograf_shortDesc"];?>">
                                                </div>
                                                <div class="box-text">
                                                    <h4 class="sm-title-block mb-5"><?php echo $cozumRow[$lehce."fotograf_shortDesc"];?></h4>
                                                    <h5 class="theme-color"><?php echo $cozumRow[$lehce."fotograf_shortDesc2"];?></h5>

                                                    <!--<ul class="box-social mt-20">
                                                        <li data-dsn="parallax"><a href="#">FB</a></li>
                                                        <li data-dsn="parallax"><a href="#">TW</a></li>
                                                        <li data-dsn="parallax"><a href="#">LN</a></li>

                                                    </ul>-->
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>


      <?php
                        }
                    }
                    ?>





                            </div>
                        </div>
                    </section>