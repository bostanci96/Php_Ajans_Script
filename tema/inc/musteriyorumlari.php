
   <section class="testimonials testimonials-half section-margin" data-dsn-title="testimonials">
                        <div class="container">
                            <div class="testimonials-box box-padding p-relative w-100 background-section">
                                <div class="row">
                                    <div class="col-lg-4 ">
                                        <div class="text-left">
                                            <h2 class="section-title" data-dsn-grid="move-section" data-dsn-move="-60"
                                                data-dsn-duration="100%" data-dsn-opacity="1"
                                                data-dsn-responsive="tablet"><?php echo $blokRowdil["baslik19"]; ?></h2>
                                        </div>
                                    </div>

                                    <div class="col-lg-8">
                                        <div class="testimonials-inner p-relative text-left dsn-swiper "
                                            data-dsn-controller=".testimonial-content"
                                            data-dsn-option='{"slidesPerView":2,"spaceBetween":50,"centeredSlides":false }'>
                                            <div class="testimonial-nav">
                                                <div class="testimonial-nav-inner">
                                                    <div class="swiper-container">
                                                        <div class="swiper-wrapper">


   <?php
    $mQuery = $db->query("SELECT * FROM fotograflar WHERE fotograf_bolum=6 AND fotograf_durum=1");
    if($mQuery->rowCount()){
      foreach($mQuery as $mRow){
        ?>



                                                            <div class="swiper-slide d-flex align-items-center">
                                                                <div class="box-img mr-15"
                                                                    data-swiper-parallax-scale="0.7">
                                                                    <img  src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-dsn-src="<?php echo URL.'images/photos/big/'.$mRow["fotograf_src"];?>" alt="">
                                                                </div>
                                                                <div class="box-text" data-swiper-parallax="30%"
                                                                    data-swiper-parallax-opacity="0">
                                                                    <h4 class="title-block mb-10"><?php echo $mRow[$lehce."fotograf_shortDesc"];?></h4>
                                                                    <h5 class="sm-title-block"><?php echo $mRow[$lehce."fotograf_shortDesc2"];?></h5>
                                                                </div>
                                                            </div>


     <?php
      }
    }
    ?>



                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="testimonial-content ">
                                                <div class="swiper-container">
                                                    <div class="swiper-wrapper">

   <?php
    $mQuery2 = $db->query("SELECT * FROM fotograflar WHERE fotograf_bolum=6 AND fotograf_durum=1");
    if($mQuery2->rowCount()){
      foreach($mQuery2 as $mRow2){
        ?>




                                                        <div class="swiper-slide">
                                                            <p>              <?php echo $mRow2[$lehce."fotograf_longDesc"];?></p>
                                                        </div>

                                                      


     <?php
      }
    }
    ?>


                                                    </div>
                                                </div>
                                            </div>

                                            <div
                                                class="dsn-pagination mt-30 dsn-container d-flex justify-content-between">
                                                <div class="swiper-next">
                                                    <div class="next-container">
                                                        <div class="container-inner">
                                                            <div class="triangle"></div>
                                                            <svg class="circle" xmlns="http://www.w3.org/2000/svg"
                                                                width="24" height="24" viewBox="0 0 24 24">
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
                                                            <svg class="circle" xmlns="http://www.w3.org/2000/svg"
                                                                viewBox="0 0 24 24">
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
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>