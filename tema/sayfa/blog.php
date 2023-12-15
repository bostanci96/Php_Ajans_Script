<?php $blok = $db->query("SELECT * FROM dil_bloklar{$blokLehce}")->fetch(PDO::FETCH_ASSOC); ?>
<html lang="tr-TR">
<head>
  <title><?php echo $blok["baslik13"];?> - <?php echo $ayar[$lehce."site_title"];?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <meta name="description" itemprop="description" content="<?php echo $ayar[$lehce."site_desc"];?>" />
  <meta name="keywords" itemprop="keywords" content="<?php echo $ayar[$lehce."site_keyw"];?>" />
  <meta name="Abstract" content="<?php echo $ayar["main_tablo"];?>" />
  <meta name="classification" content="<?php echo $blok["baslik13"];?> - <?php echo $ayar[$lehce."site_title"];?>" />
  <meta http-equiv="content-language" content="tr" />
  <meta name="distribution" content="Global" />
  <meta name="author" content="Ömer Utku Bostancı | Yazılım Uzmanı | Freelancer | İstanbul Web Tasarım ve Web Yazılım">
  <meta name="robots" content="all" />
  <meta name="robots" content="index, follow" />
  <meta name="revisit-after" content="7 days" />
  <meta name="country" content="Türkiye" />
  <link rel="canonical" href="<?php echo "https://".$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI']; ?>" />
  <meta property="og:title" content="<?php echo $blok["baslik13"];?> - <?php echo $ayar[$lehce."site_title"];?>" />
  <meta property="og:locale" content="tr_TR" />
  <meta property="og:type" content="website" />
  <meta property="og:description" content="<?php echo $ayar[$lehce."site_desc"];?>" />
  <meta property="og:url" content="<?php echo LURL;?>" />
  <meta property="og:site_name" content="<?php echo $blok["baslik13"];?> - <?php echo $ayar[$lehce."site_title"];?>" />
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
                                <span class="pl-10 pr-10 background-main dsn-load-animate"><?php echo $blokRowdil["baslik27"]; ?></span>
                            </p>
                            <h1 class="title mt-30 dsn-load-animate text-transform-upper"><?php echo $blokRowdil["desc27"]; ?></h1>
                        </div>
                    </div>
                </header>
                <!-- ========== End Header Normal ========== -->


                <div class="wrapper">
                    <div class="root-blog section-margin ">
                        <div class="container ">
                            <div class="dsn-posts d-grid grid-lg-1">



                <?php

                $split = explode("?page=", $_SERVER['REQUEST_URI']);

                if($split[count($split)-1]>1){

                    $_GET['page']=$split[count($split)-1];
                }

                $limit = 5;
                $query = "SELECT * FROM sayfalar WHERE sayfa_durum=1 AND secenekHaber=1 ORDER BY sayfa_id DESC";

                $s = $db->prepare($query);
                $s->execute();
                $total_results = $s->rowCount();
                $total_pages = ceil($total_results/$limit);

                if (!isset($_GET['page'])) {
                    $page = 1;
                } else{
                    $page = $_GET['page'];
                }



                $starting_limit = ($page-1)*$limit;
                $show = "SELECT * FROM sayfalar WHERE sayfa_durum=1 AND secenekHaber=1   ORDER BY sayfa_id DESC LIMIT $starting_limit, $limit";

                $r = $db->prepare($show);
                $r->execute();

                while($res = $r->fetch(PDO::FETCH_ASSOC)):
                    $haberUrl = LURL.$res["sayfa_url"].'/'
                    ?>







                                <div class=" blog-item p-relative d-flex align-items-center h-100 w-100"
                                    data-swiper-parallax-scale="0.85">
                                    <div class="box-meta">
                                        <div class="entry-date">
                                            <a href="<?php echo $haberUrl;?>" class="effect-ajax"><?php echo tarih($res["sayfa_tarih"]);?></a>
                                        </div>
                                    </div>

                                    <div class="box-img over-hidden">
                                        <img class="cover-bg-img"
                                            src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                            data-dsn-src="<?php echo URL.'images/sayfalar/big/'.$res["sayfa_resim"];?>" alt="<?php echo $res[$lehce."resim_baslik"];?>">
                                    </div>
                                    <div class="box-content p-relative">

                                        <div class="box-content-body">
                                           <!-- <div class="metas">
                                                <span class="mb-5">Lifestyle</span>
                                            </div>-->
                                            <h4 class="title-block mb-20 ">
                                                <a href="<?php echo $haberUrl;?>" class="effect-ajax"><?php echo $res[$lehce."sayfa_adi"];?></a>
                                            </h4>
                                            <p><?php echo $res[$lehce."sayfa_desc"];?></p>
                                            <a href="<?php echo $haberUrl;?>" class="effect-ajax link-vist p-relative mt-20">

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

                 
        <?php endwhile; ?>
           

                  
                                <div
                                    class="dsn-paginations d-flex justify-content-center border-bottom border-top pt-30 pb-30">
                               <?php if($page>1){ ?>


                          <a class="next page-numbers d-flex align-items-center justify-content-center text-center"
                                        href="?page=<?php echo $page-1;?>">
                                        <span class="button-m d-flex justify-content-center align-items-center">
                                            <svg viewBox="0 0 52 52" xmlns="http://www.w3.org/2000/svg" width="100%"
                                                height="100%">
                                                <path
                                                    d="M3 26.7h39.5v3.5c0 .3.1.5.4.6.2.1.5.1.7-.1l5.9-4.2c.2-.1.3-.3.3-.5s-.1-.4-.3-.5l-5.9-4.2c-.1-.1-.3-.1-.4-.1-.1 0-.2 0-.3.1-.2.1-.4.3-.4.6v3.5H3c-.4 0-.7.3-.7.7 0 .3.3.6.7.6z">
                                                </path>
                                            </svg>
                                            <span><?php echo $blokRowdil["desc14"]; ?></span>
                                        </span>
                                    </a>
                    <?php } for ($i=$page; $i <=$total_pages ; $i++){ ?>
                        <?php if($i==$page){ ?>
                              <span
                                        class="page-numbers border d-flex align-items-center justify-content-center text-center current ">
                                        <span class="dsn-numbers">
                                            <span class="number"><?php echo $i;?></span></span>
                                    </span>
                        <?php }else{ ?>
                              <a class="page-numbers border d-flex align-items-center justify-content-center text-center"
                                        href="?page=<?php echo $i;?>">
                                        <span class="dsn-numbers">
                                            <span class="number"><?php echo $i;?></span>
                                        </span>
                                    </a>
                     <?php   } } if ($total_pages>$page) { ?>
                         
                             <a class="next page-numbers d-flex align-items-center justify-content-center text-center"
                                        href="?page=<?php echo $page+1;?>">
                                        <span class="button-m d-flex justify-content-center align-items-center">
                                            <svg viewBox="0 0 52 52" xmlns="http://www.w3.org/2000/svg" width="100%"
                                                height="100%">
                                                <path
                                                    d="M3 26.7h39.5v3.5c0 .3.1.5.4.6.2.1.5.1.7-.1l5.9-4.2c.2-.1.3-.3.3-.5s-.1-.4-.3-.5l-5.9-4.2c-.1-.1-.3-.1-.4-.1-.1 0-.2 0-.3.1-.2.1-.4.3-.4.6v3.5H3c-.4 0-.7.3-.7.7 0 .3.3.6.7.6z">
                                                </path>
                                            </svg>
                                            <span><?php echo $blokRowdil["baslik14"]; ?></span>
                                        </span>
                                    </a>
                     <?php } ?>
                                </div>

                            </div>
                        </div>

                    </div>
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