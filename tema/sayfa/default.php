<!DOCTYPE html>
<html lang="tr-TR">

<head>
  <title><?php echo $ayar[$lehce."site_title"];?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <meta name="description" itemprop="description" content="<?php echo $ayar[$lehce."site_desc"];?>" />
  <meta name="keywords" itemprop="keywords" content="<?php echo $ayar[$lehce."site_keyw"];?>" />
  <meta name="Abstract" content="<?php echo $ayar["main_tablo"];?>" />
  <meta name="classification" content="<?php echo $ayar[$lehce."site_title"];?>" />
  <meta http-equiv="content-language" content="tr" />
  <meta name="distribution" content="Global" />
  <meta name="author" content="Ömer Utku Bostancı | Yazılım Uzmanı | Freelancer | İstanbul Web Tasarım ve Web Yazılım">
  <meta name="robots" content="all" />
  <meta name="robots" content="index, follow" />
  <meta name="revisit-after" content="7 days" />
  <meta name="country" content="Türkiye" />
  <link rel="canonical" href="<?php echo "https://".$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI']; ?>" />
  <meta property="og:title" content="<?php echo $ayar[$lehce."site_title"];?>" />
  <meta property="og:locale" content="tr_TR" />
  <meta property="og:type" content="website" />
  <meta property="og:description" content="<?php echo $ayar[$lehce."site_desc"];?>" />
  <meta property="og:url" content="<?php echo LURL;?>" />
  <meta property="og:site_name" content="<?php echo $ayar[$lehce."site_title"];?>" />
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

    <main class="main-root">

        <div id="dsn-scrollbar">
            <div class="main-content">
                <div class="wrapper">
                    <!-- ========== Slider Parallax ========== -->
                    <?php require_once(TEMA_INC.'inc/slide.php');?>
                    <!-- ========== End Slider Parallax ========== -->
                    
                    <!-- ========== About Section ========== -->
                    <?php require_once(TEMA_INC.'inc/anasayfakurumsal.php');?>
                    <!-- ========== End About Section ========== -->


                    <!-- ========== Service Section ========== -->
                    <?php require_once(TEMA_INC.'inc/anasayfasabit.php');?>
                    <!-- ========== End Service Section ========== -->

                    <!-- ==========  box description move  ========== -->
                    <?php require_once(TEMA_INC.'inc/kodhead.php');?>
                    <!-- ========== End  box description move ========== -->


                    <!-- ========== Work Section ========== -->
                    <?php require_once(TEMA_INC.'inc/neleryaptik.php');?>
                    <!-- ========== End Work Section ========== -->


                    <!-- ========== testimonial Section ========== -->
                    <?php require_once(TEMA_INC.'inc/musteriyorumlari.php');?>
                    <!-- ========== End testimonial Section ========== -->


                    <!-- ========== box vertical Section ========== -->
                    <?php require_once(TEMA_INC.'inc/iletisimegec.php');?>
                    <!-- ========== End box vertical Section ========== -->


                    <!-- ========== blog Section ========== -->
                    <?php require_once(TEMA_INC.'inc/anasayfablog.php');?>
                    <!-- ========== End blog Section ========== -->

                    <!-- ========== team Section ========== -->
                    <?php require_once(TEMA_INC.'inc/formiletisim.php');?>
                    <!-- ========== End team Section ========== -->

                    <!-- ========== End brand-client Section ========== -->
                    <?php require_once(TEMA_INC.'inc/cozumortaklari.php');?>
                    <!-- ========== End brand-client Section ========== -->

                    <!-- ==========  next page  ========== -->
                    <?php require_once(TEMA_INC.'inc/iletisimegechizmet.php');?>
                    <!-- ========== End next page ========== -->

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
    <div class="line-border-style w-100 h-100"></div>


<?php require_once(TEMA_INC.'inc/alt.php');?>

</body>
</html>