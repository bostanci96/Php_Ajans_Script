
  <section class="work-section p-relative section-margin dsn-swiper over-hidden"
                        data-dsn-title="our Portfolio" data-dsn-option='{"slidesPerView":1.5,"spaceBetween":50}'>
                        <div class="container mb-70 d-flex text-center flex-column align-items-center">

                            <p class="sub-heading line-shap line-shap-before mb-15">
                                <span class="line-bg-right">
                                    <?php echo $blokRowdil["baslik29"]; ?>
                                </span>

                            </p>
                            <h2 class="section-title  title-cap">
                              <?php echo $blokRowdil["desc29"]; ?>
                            </h2>

                        </div>

                        <div class="swiper-container">
                            <div class="swiper-wrapper v-dark-head">




      <?php
            $haberQuery2 = $db->query("SELECT * FROM sayfalar INNER JOIN kategoriler ON portkat=kategori_id WHERE kategori_durum=1 AND kat_secenek=2 AND secenekHaber=2 LIMIT 6");
            if( $haberQuery2->rowCount() ){
                foreach($haberQuery2 as $haberRow2){
                        $haberUrl = LURL."portfolyo/".$haberRow2["sayfa_url"].'/';
               
                   ?>



                                <div class="swiper-slide over-hidden work-item">
                                    <div class="box-img p-relative over-hidden before-z-index" data-overlay="5"
                                        data-swiper-parallax-scale="0.85">
                                        <img class="cover-bg-img" src="<?php echo URL.'images/sayfalar/big/'.$haberRow2["sayfa_resim"];?>"
                                        data-dsn-src="<?php echo URL.'images/sayfalar/big/'.$haberRow2["sayfa_resim"];?>" alt="">
                                    </div>

                                    <div class="box-content" data-swiper-parallax-opacity="0">
                                        <div class="metas d-inline-block mb-15">
                                            <span><?php echo $haberRow2["kategori_adi"]; ?></span> 
                                        </div>
                                        <h4 class="sec-title">
                                            <a class="effect-ajax" data-dsn-ajax="work" href="<?php echo $haberUrl;?>">
                                               <?php echo $haberRow2["sayfa_adi"]; ?>
                                            </a>
                                        </h4>
                                    </div>
                                </div>
                                

      <?php
        }
    }?>




                            </div>
                            <div class="dsn-pagination mt-30 dsn-container d-flex justify-content-between">
                                <div class="swiper-next">
                                    <div class="next-container">
                                        <div class="container-inner">
                                            <div class="triangle"></div>
                                            <svg class="circle" xmlns="http://www.w3.org/2000/svg" width="24"
                                                height="24" viewBox="0 0 24 24">
                                                <g class="circle-wrap" fill="none" stroke-width="1"
                                                    stroke-linejoin="round" stroke-miterlimit="10">
                                                    <circle cx="12" cy="12" r="10.5"></circle>
                                                </g>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-pagination"></div>
                                <div class="swiper-prev">
                                    <div class="prev-container">
                                        <div class="container-inner">
                                            <div class="triangle"></div>
                                            <svg class="circle" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                                <g class="circle-wrap" fill="none" stroke-width="1"
                                                    stroke-linejoin="round" stroke-miterlimit="10">
                                                    <circle cx="12" cy="12" r="10.5"></circle>
                                                </g>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>

                    </section>