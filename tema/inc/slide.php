<div class="main-slider has-horizontal demo-2 content-left p-relative w-100 h-100-v  ">
    <div class="content-slider p-relative w-100 h-100 over-hidden ">
        <div class="bg-container  dsn-hero-parallax-img p-relative w-100 h-100">
            <div class="slide-inner  h-100">
                <div class="swiper-wrapper">
                    <?php
                    $slideQuery = $db->query("SELECT * FROM fotograflar WHERE fotograf_bolum=1 && fotograf_durum=1");
                    if($slideQuery->rowCount()){
                    $sayac = 0;
                    foreach($slideQuery as $slideRow){
                    $sayac++;
                    ?>
                    
                    <div class="slide-item swiper-slide over-hidden">
                        <div class="image-bg cover-bg w-100 h-100 " data-overlay="6"
                            data-swiper-parallax="85%" data-swiper-parallax-scale="1.1">
                            <img class="cover-bg-img" src="<?php echo URL.'images/photos/big/'.$slideRow["fotograf_src"];?>"
                            data-dsn-src="<?php echo URL.'images/photos/big/'.$slideRow["fotograf_src"];?>" alt="<?php echo $slideRow["resim_baslik"];?>">
                        </div>
                        <div class="slide-content p-absolute ">
                            <div class="content p-relative">
                                <div class="metas d-inline-block mb-30">
                                    <span><?php echo $slideRow[$lehce."fotograf_shortDesc2"];?></span>
                                </div>
                                <div class="d-block"></div>
                                <h1 class="title user-no-selection d-inline-block ">
                                <a href="<?php if(strlen($slideRow[$lehce."fotograf_href"])>3){ echo $slideRow[$lehce."fotograf_href"];}else{ echo "javascript:void(0);";}?>" class="effect-ajax"
                                data-dsn-ajax="slider"><?php echo $slideRow[$lehce."fotograf_shortDesc"];?></a>
                                </h1>
                                <p class="max-w570 mt-30 description "><?php echo $slideRow[$lehce."fotograf_longDesc"];?></p>
                            </div>
                        </div>
                    </div>
                    <?php
                    }
                    }
                    ?>
                </div>
            </div>
        </div>
        <div class="dsn-slider-content p-absolute h-100 w-100 ">
            <div class="dsn-container d-flex align-items-center "></div>
        </div>
    </div>
    <div class="control-nav p-absolute w-100 d-flex justify-content-end  dsn-container v-dark-head">
        <div class="prev-container">
            <div class="container-inner">
                <div class="triangle"></div>
                <svg class="circle" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                    <g class="circle-wrap" fill="none" stroke-width="1" stroke-linejoin="round"
                        stroke-miterlimit="10">
                        <circle cx="12" cy="12" r="10.5"></circle>
                    </g>
                </svg>
            </div>
        </div>
        <div class="slider-counter d-flex align-items-center">
            <span class="slider-current-index">01</span>
            <span class="slider-counter-delimiter"></span>
            <span class="slider-total-index"><?php echo $sayac; ?></span>
        </div>
        <div class="next-container">
            <div class="container-inner">
                <div class="triangle"></div>
                <svg class="circle" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                    viewBox="0 0 24 24">
                    <g class="circle-wrap" fill="none" stroke-width="1" stroke-linejoin="round"
                        stroke-miterlimit="10">
                        <circle cx="12" cy="12" r="10.5"></circle>
                    </g>
                </svg>
            </div>
        </div>
    </div>
</div>