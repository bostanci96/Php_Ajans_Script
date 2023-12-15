

 <section class="brand-client section-margin" data-dsn-animate="section"
                        data-dsn-title="<?php echo $blokRowdil["baslik16"]; ?>">

                        <div class="container mb-70 d-flex text-center flex-column  align-items-center">
                            <p class="sub-heading line-shap line-shap-before mb-15">
                                <span class="line-bg-right">
                                 <?php echo $blokRowdil["baslik16"]; ?>
                                </span>

                            </p>
                            <h2 class="section-title  title-cap">
                               <?php echo $blokRowdil["desc16"]; ?>
                            </h2>

                        </div>
                        <div class="container">
                            <div class="wrapper-client dsn-up">


                                   <?php
                    $cozumQuery = $db->query("SELECT * FROM fotograflar WHERE fotograf_bolum=58 && fotograf_durum=1");
                    if($cozumQuery->rowCount()){
                        $sayac = 0;
                        foreach($cozumQuery as $cozumRow){
                            $sayac++;

                            ?>
                                <div class="logo-box">
                                    <div class="logo-box-inner">
                                        <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                        data-dsn-src="<?php echo URL.'images/photos/big/'.$cozumRow["fotograf_src"];?>" alt="<?php echo $cozumRow[$lehce."fotograf_shortDesc"];?>">
                                    </div>
                                </div>
      <?php
                        }
                    }
                    ?>


                            </div>
                        </div>
                    </section>