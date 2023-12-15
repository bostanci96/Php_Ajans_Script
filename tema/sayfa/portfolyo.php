<?php $blok = $db->query("SELECT * FROM dil_bloklar{$blokLehce}")->fetch(PDO::FETCH_ASSOC); ?>
<html lang="tr-TR">
<head>
  <title><?php echo $blok["desc25"];?> - <?php echo $ayar[$lehce."site_title"];?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <meta name="description" itemprop="description" content="<?php echo $ayar[$lehce."site_desc"];?>" />
  <meta name="keywords" itemprop="keywords" content="<?php echo $ayar[$lehce."site_keyw"];?>" />
  <meta name="Abstract" content="<?php echo $ayar["main_tablo"];?>" />
  <meta name="classification" content="<?php echo $blok["desc25"];?> - <?php echo $ayar[$lehce."site_title"];?>" />
  <meta http-equiv="content-language" content="tr" />
  <meta name="distribution" content="Global" />
  <meta name="author" content="Ömer Utku Bostancı | Yazılım Uzmanı | Freelancer | İstanbul Web Tasarım ve Web Yazılım">
  <meta name="robots" content="all" />
  <meta name="robots" content="index, follow" />
  <meta name="revisit-after" content="7 days" />
  <meta name="country" content="Türkiye" />
  <link rel="canonical" href="<?php echo "https://".$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI']; ?>" />
  <meta property="og:title" content="<?php echo $blok["desc25"];?> - <?php echo $ayar[$lehce."site_title"];?>" />
  <meta property="og:locale" content="tr_TR" />
  <meta property="og:type" content="website" />
  <meta property="og:description" content="<?php echo $ayar[$lehce."site_desc"];?>" />
  <meta property="og:url" content="<?php echo LURL;?>" />
  <meta property="og:site_name" content="<?php echo $blok["desc25"];?> - <?php echo $ayar[$lehce."site_title"];?>" />
  <?php require_once(TEMA_INC.'inc/ust.php');?>
</head>


<body class="v-dark dsn-effect-scroll dsn-cursor-effect dsn-ajax">



    <!-- ========== Loading Page ========== -->
    <div class="preloader">
        <span class="percent ">0</span>
        <span class="loading-text text-uppercase"><?php echo $blokRowdil["baslik1"]; ?></span>
        <div class="preloader-bar">
            <div class="preloader-progress"></div>
        </div>

        <h1 class="title v-middle">
            <span class="text-strok"><?php echo $blokRowdil["desc1"]; ?></span>
            <span class="text-fill"><?php echo $blokRowdil["baslik2"]; ?></span>
        </h1>
    </div>
    <!-- ========== End Loading Page ========== -->

<?php require_once(TEMA_INC.'inc/head.php');?>
<style type="text/css">
  .header-padding-bottom {
    padding-bottom: 70px;
}
.header-padding-top {
    padding-top: 70px;
}
</style>
    <main class="main-root">

        <div id="dsn-scrollbar">
            <div class="main-content">

 <!-- ========== Header Normal ========== -->
                <header
                    class="header-page over-hidden background-section p-relative header-padding-top header-padding-bottom border-bottom dsn-header-animation">
                    <div class="bg-circle-dotted"></div>
                    <div class="container">
                        <div class="content-hero p-relative d-flex flex-column h-auto dsn-hero-parallax-title">
                            <p class="subtitle p-relative line-shap  line-shap-after">
                                <span class="pl-10 pr-10 background-main dsn-load-animate"><?php echo $blokRowdil["baslik26"]; ?></span>
                            </p>
                            <h1 class="title mt-30 dsn-load-animate text-transform-upper"><?php echo $blokRowdil["desc26"]; ?></h1>
                        </div>
                    </div>
                </header>
                <!-- ========== End Header Normal ========== -->


                <div class="wrapper">
   
                    <!-- ========== Work Section ========== -->
                    <section class="work-section not-filter p-relative section-margin dsn-filter dsn-load-animate">

                        <div class="dsn-container ">
                            <div class="filtering-t mb-50 ">
                                <div class="filtering-wrap d-flex align-items-center">
                                    <span class="filter-title"><?php echo $blokRowdil["baslik28"]; ?></span>
                                    <div class="filtering">
                                        <button type="button" data-filter="*" class="active">
                                            <?php echo $blokRowdil["desc28"]; ?>
                                        </button>


            <?php
            $haberQuery = $db->query("SELECT * FROM kategoriler WHERE kategori_durum=1 AND kat_secenek=2");
            if( $haberQuery->rowCount() ){
                foreach($haberQuery as $haberRow){
               
                   ?>



                                        <button type="button" data-filter=".<?php echo $haberRow["kategori_id"].$haberRow["kategori_url"]; ?>"><?php echo $haberRow["kategori_adi"]; ?></button>
                               

       <?php
        }
    }?>
                                    </div>
                                </div>
                            </div>

                            <div class="d-grid grid-md-2  grid-lg-3 dsn-item-filter dsn-isotope v-dark-head"
                                data-dsn-item=".work-item">
   <?php
            $haberQuery2 = $db->query("SELECT * FROM sayfalar INNER JOIN kategoriler ON portkat=kategori_id WHERE kategori_durum=1 AND kat_secenek=2 AND secenekHaber=2");
            if( $haberQuery2->rowCount() ){
                foreach($haberQuery2 as $haberRow2){
                        $haberUrl = LURL."portfolyo/".$haberRow2["sayfa_url"].'/';
               
                   ?>

                                <div class="work-item  <?php echo $haberRow2["kategori_id"].$haberRow2["kategori_url"]; ?>">
                                    <div class="box-img before-z-index z-index-0 p-relative over-hidden"
                                        data-overlay="6">
                                        <img class="cover-bg-img" src="<?php echo URL.'images/sayfalar/big/'.$haberRow2["sayfa_resim"];?>" data-dsn-src="<?php echo URL.'images/sayfalar/big/'.$haberRow2["sayfa_resim"];?>" alt="">
                                    </div>

                                    <div class="box-content" data-swiper-parallaxs="60%"
                                        data-swiper-parallax-opacity="0">
                                        <div class="metas d-inline-block mb-15">
                                            <span> <?php echo $haberRow2["kategori_adi"]; ?></span>
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
                        </div>

                    </section>
                    <!-- ========== End Work Section ========== -->


                </div>
               <?php require_once(TEMA_INC.'inc/footer.php');?>
            </div>
        </div>

        <!-- ========== Contact Form Model ========== -->
        <?php require_once(TEMA_INC.'inc/anasayfaurun.php');?>
        <!-- ========== End Contact Form Model ========== -->
    </main>


    <!-- ========== Scroll Right Page To Top Page ========== -->
    <div class="scroll-to-top">
        <img src="<?php echo TEMA_URL;?>ast/img/scroll_top.svg" alt="">
        <div class="box-numper">
            <span>10%</span>
        </div>
    </div>
    <!-- ========== End Scroll Right Page To Top Page ========== -->


    <!-- ========== Cursor Page ========== -->
    <div class="cursor">

        <div class="cursor-helper">
            <span class="cursor-drag"><?php echo $blokRowdil["desc2"]; ?></span>
            <span class="cursor-view"><?php echo $blokRowdil["baslik3"]; ?></span>
            <span class="cursor-open"><i class="fas fa-plus"></i></span>
            <span class="cursor-close"><?php echo $blokRowdil["desc3"]; ?></span>
            <span class="cursor-play"><?php echo $blokRowdil["baslik4"]; ?></span>
            <span class="cursor-next"><i class="fas fa-chevron-right"></i></span>
            <span class="cursor-prev"><i class="fas fa-chevron-left"></i></span>
        </div>

    </div>
    <!-- ========== End Cursor Page ========== -->

    <!-- ========== paginate-right-page ========== -->
    <div class="dsn-paginate-right-page"></div>

    <!-- ========== Line left & right with creative page ========== -->
    <div class="line-border-style w-100 h-auto"></div>


<?php require_once(TEMA_INC.'inc/alt.php');?>

</body>
</html>