<?php echo !defined("SITE") ? die('error') : null;?>
<?php
if(isset($_GET["url"])){
    $urunGet = $_GET["url"];
    $urunControl = $db->prepare("SELECT * FROM urunler INNER JOIN kategoriler ON kategori_id=urun_kategori INNER JOIN urunresim ON urun_id=resim_urun_id WHERE urun_url=:url or en_urun_url=:url2 AND urun_durum=:durum");
    $urunControl -> bindParam("url",$urunGet,PDO::PARAM_STR);
    $urunControl -> bindParam("url2",$urunGet,PDO::PARAM_STR);
    $urunControl -> bindValue("durum",1,PDO::PARAM_INT);
    $urunControl -> execute();
    if($urunControl->rowCount()){
        $urunRow = $urunControl->fetch(PDO::FETCH_ASSOC);
        $urun_id = $urunRow["urun_id"];
        $oncekiRow = $db->query("SELECT * FROM urunler WHERE urun_id<{$urun_id} AND urun_kategori={$urunRow['urun_kategori']} ORDER BY urun_id DESC LIMIT 0,1")->fetch();
        if(isset($oncekiRow["urun_url"][2])){
            $oncekiUrl  = LURL."urun-detay/".$oncekiRow["urun_url"]."/";
        }else{
            $oncekiUrl ="javascript:;";
        }
        $sonrakiRow = $db->query("SELECT * FROM urunler WHERE urun_id>{$urun_id} AND urun_kategori={$urunRow['urun_kategori']} ORDER BY urun_id ASC LIMIT 0,1")->fetch();
        if(isset($sonrakiRow["urun_url"][2])){
            $sonrakiUrl   = LURL."urun-detay/".$sonrakiRow["urun_url"]."/";
        }else{
            $sonrakiUrl ="javascript:;";
        }
    }else{
//
    }
}else{
//
}
?>
<html lang="tr-TR">
<head>
     <meta http-equiv="Content-Type" content="text/html" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="UTF-8">
    <title><?php echo $urunRow[$lehce."urun_adi"];?> - <?php echo $ayar[$lehce."site_title"];?></title>
    <link rel="stylesheet" href="<?php echo TEMA_URL;?>ast/iziToast.min.css" type="text/css">
    <script src="<?php echo TEMA_URL;?>ast/iziToast.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="description" itemprop="description" content="<?php echo $urunRow[$lehce."urun_icerik"];?>" />
    <meta name="keywords" itemprop="keywords" content="<?php echo $ayar[$lehce."site_keyw"];?>" />
    <meta name="Abstract" content="<?php echo $ayar["main_tablo"];?>" />
    <meta name="classification" content="<?php echo $urunRow[$lehce."urun_adi"];?> - <?php echo $ayar[$lehce."site_title"];?>" />
    <meta http-equiv="content-language" content="tr" />
    <meta name="distribution" content="Global" />
    <meta name="author" content="Ömer Utku Bostancı | Yazılım Uzmanı | Freelancer | İstanbul Web Tasarım ve Web Yazılım">
    <meta name="robots" content="all" />
    <meta name="robots" content="index, follow" />
    <meta name="revisit-after" content="7 days" />
    <meta name="country" content="Türkiye" />
  <link rel="canonical" href="<?php echo "https://".$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI']; ?>" />
    <meta property="og:title" content="<?php echo $urunRow[$lehce."urun_adi"];?> - <?php echo $ayar[$lehce."site_title"];?>" />
    <meta property="og:locale" content="tr_TR" />
    <meta property="og:type" content="website" />
    <meta property="og:description" content="<?php echo $urunRow[$lehce."urun_icerik"];?>" />
    <meta property="og:url" content="<?php echo LURL;?>" />
    <meta property="og:site_name" content="<?php echo $urunRow[$lehce."urun_adi"];?> - <?php echo $ayar[$lehce."site_title"];?>" />
    <meta content="telephone=no" name="format-detection">
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
                    class="header-page over-hidden p-relative header-padding-top header-padding-bottom border-bottom dsn-header-animation">
                    <div class="bg-circle-dotted"></div>
                    <div class="container">
                        <div class="content-hero p-relative d-flex flex-column h-auto dsn-hero-parallax-title">
                            <div class="metas metas-blog d-flex align-items-center letter-s1 fz-16 p-relative">
                                <a href="javascript:void(0);" >
<?php echo $urunRow[$lehce."urun_icerik"];?>

                                    </a>
                            </div>
                            <h1 class="title mt-30 dsn-load-animate text-transform-upper max-w750"><?php echo $urunRow[$lehce."urun_adi"];?></h1>
                        </div>
                    </div>
                </header>
                <!-- ========== End Header Normal ========== -->

                <div class="wrapper">
                    <div class="root-blog ">
                    
                        <div class="container ">
                            <div class="dsn-posts">
                                <div class="image-head p-relative full-width">
                                    <div class="before-z-index" data-dsn-grid="move-up" data-overlay="5">
                                        <img class="cover-bg-img has-bigger-scale"
                                            src="<?php echo URL.'images/urunler/big/'.$urunRow["urun_img"];?>"
                                            data-dsn-src="<?php echo URL.'images/urunler/big/'.$urunRow["urun_img"];?>" alt="<?php echo $urunRow[$lehce."urun_adi"];?>">
                                    </div>
                                </div>

                                <div class="news-content mt-auto">
                                    <div class="news-content-inner">

                                        <div class="post-content">
                                            <p>
                                             <?php echo $urunRow[$lehce."urun_tam_icerik"];?>
                                            </p>

                                        </div>
                                    </div>

                                </div>
                                   <div class="section-margin has-popup over-hidden p-relative">
                        <div class="container">
                            <div class="d-grid grid-md-4  over-hidden">



                                                        <?php
                                                         $urunID = $urunRow["urun_id"];
                                                        $imgQuery = $db->query("SELECT * FROM urunresim WHERE resim_urun_id='$urunID'");
                                                        if($imgQuery->rowCount()){
                                                            foreach($imgQuery as $imgRow){
                                                                ?>
                                                

       

                                <a href="<?php echo URL;?>images/urunler/big/<?php echo $imgRow["urun_img"];?>"
                                    class="p-relative over-hidden d-flex ">
                                    <img src="<?php echo URL;?>images/urunler/big/<?php echo $imgRow["urun_img"];?>"
                                        data-dsn-src="<?php echo URL;?>images/urunler/big/<?php echo $imgRow["urun_img"];?>"
                                        data-dsn-srcset="<?php echo URL;?>images/urunler/big/<?php echo $imgRow["urun_img"];?>" 1800w"
                                        alt="" class="cover-bg-img">
                                </a>
               
                                            <?php
                                                        }
                                                    }
                                                    ?>
                              </div>



                            </div>
                        </div>
                    </div>
                            </div>
                        </div>







                  
   <!-- ========== team Section ========== -->
                    <?php require_once(TEMA_INC.'inc/formiletisim.php');?>
                    <!-- ========== End team Section ========== -->

                      <!-- ========== testimonial Section ========== -->
                    <?php require_once(TEMA_INC.'inc/musteriyorumlari.php');?>
                    <!-- ========== End testimonial Section ========== -->

                    <!-- ========== End brand-client Section ========== -->
                    <?php require_once(TEMA_INC.'inc/cozumortaklari.php');?>
                    <!-- ========== End brand-client Section ========== -->








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