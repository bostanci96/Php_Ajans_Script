


<section class="our-blog section-margin p-relative dsn-swiper" data-dsn-animate="section"
                        data-dsn-option='{"slidesPerView":1.5  }' data-dsn-title="<?php echo $blokRowdil["baslik18"]; ?>">
                        <div class="container mb-70 d-flex text-center flex-column align-items-center">
                            <p class="sub-heading line-shap line-shap-before mb-15">
                                <span class="line-bg-right">
                                    <?php echo $blokRowdil["baslik18"]; ?>
                                </span>
                            </p>
                            <h2 class="section-title  title-cap">
                                <?php echo $blokRowdil["desc18"]; ?>
                            </h2>

                        </div>


                        <div class="dsn-container">
                            <div class="swiper-container">
                                <div class="swiper-wrapper">



            <?php
            $haberQuery = $db->query("SELECT * FROM sayfalar WHERE sayfa_durum=1 AND secenekHaber=1 ORDER BY sayfa_id DESC LIMIT 0,3");
            if( $haberQuery->rowCount() ){
                foreach($haberQuery as $haberRow){
                   $haberUrl = LURL.$haberRow["sayfa_url"].'/';
                   ?>




                                    <div class="swiper-slide blog-classic-item">
                                        <div class=" blog-item p-relative d-flex align-items-center h-100 w-100"
                                            data-swiper-parallax-scale="0.85">
                                            <div class="box-meta">
                                                <div class="entry-date">
                                                    <a href="<?php echo $haberUrl;?>"><?php echo tarih($haberRow["sayfa_tarih"]);?></a>
                                                </div>
                                            </div>

                                            <div class="box-img over-hidden">
                                                <img class="cover-bg-img" src="<?php echo URL.'images/sayfalar/big/'.$haberRow["sayfa_resim"];?>"
                                                data-dsn-src="<?php echo URL.'images/sayfalar/big/'.$haberRow["sayfa_resim"];?>" alt="<?php echo $haberRow["resim_baslik"];?>">
                                            </div>
                                            <div class="box-content p-relative">

                                                <div class="box-content-body">
                                               <!--     <div class="metas">
                                                        <span class="mb-5">Lifestyle</span>
                                                    </div>-->
                                                    <h4 class="title-block mb-20 ">
                                                        <a href="<?php echo $haberUrl;?>"><?php echo $haberRow[$lehce."sayfa_adi"];?></a>
                                                    </h4>
                                                    <p><?php echo $haberRow[$lehce."sayfa_desc"];?></p>
                                                    <a href="<?php echo $haberUrl;?>" class="link-vist p-relative mt-20">

                                                        <span class="link-vist-text"><?php echo $blokRowdil["desc13"]; ?></span>

                                                        <div class="link-vist-arrow">
                                                            <svg viewBox="0 0 80 80">
                                                                <polyline points="19.89 15.25 64.03 15.25 64.03 59.33">
                                                                </polyline>
                                                                <line x1="64.03" y1="15.25" x2="14.03" y2="65.18">
                                                                </line>
                                                            </svg>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
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
                    </section>