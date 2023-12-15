<?php $blok = $db->query("SELECT * FROM dil_bloklar{$blokLehce}")->fetch(PDO::FETCH_ASSOC); ?>
<!DOCTYPE html>
<html lang="tr-TR">
<head>
  <title><?php echo $blok["desc31"];?> - <?php echo $ayar[$lehce."site_title"];?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <meta name="description" itemprop="description" content="<?php echo $ayar[$lehce."site_desc"];?>" />
  <meta name="keywords" itemprop="keywords" content="<?php echo $ayar[$lehce."site_keyw"];?>" />
  <meta name="Abstract" content="<?php echo $ayar["main_tablo"];?>" />
  <meta name="classification" content="<?php echo $blok["desc31"];?> - <?php echo $ayar[$lehce."site_title"];?>" />
  <meta http-equiv="content-language" content="tr" />
  <meta name="distribution" content="Global" />
  <meta name="author" content="Ömer Utku Bostancı | Yazılım Uzmanı | Freelancer | İstanbul Web Tasarım ve Web Yazılım">
  <meta name="robots" content="all" />
  <meta name="robots" content="index, follow" />
  <meta name="revisit-after" content="7 days" />
  <meta name="country" content="Türkiye" />
  <link rel="canonical" href="<?php echo "https://".$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI']; ?>" />
  <meta property="og:title" content="<?php echo $blok["desc31"];?> - <?php echo $ayar[$lehce."site_title"];?>" />
  <meta property="og:locale" content="tr_TR" />
  <meta property="og:type" content="website" />
  <meta property="og:description" content="<?php echo $ayar[$lehce."site_desc"];?>" />
  <meta property="og:url" content="<?php echo LURL;?>" />
  <meta property="og:site_name" content="<?php echo $blok["desc31"];?> - <?php echo $ayar[$lehce."site_title"];?>" />

  <?php require_once(TEMA_INC.'inc/ust.php');?>
</head>
<body>
 <!--loader start-->
 <div id="preloader">
  <div class="loader1">
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
  </div>
</div>

<!--body content wrap start-->
<div class="main">

    <!--hero section start-->
    <section class="hero-section ptb-100 gradient-overlay full-screen"
             style="background: url('<?php echo TEMA_URL;?>ast/img/slider-img-2.jpg')no-repeat center center / cover">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-md-9 col-lg-7">
                    <div class="error-content text-center text-white">
                        <div class="notfound-404"><h1 class="text-white">404</h1></div>
                        <h2 class="text-white"><?php echo $blok["baslik32"]; ?></h2>
                        <p class="lead"><?php echo $blok["desc32"]; ?></p><a class="btn outline-white-btn" href="<?php echo LURL; ?>"><?php echo $blok["baslik33"]; ?></a></div>
                </div>
            </div>
        </div>
    </section>
    <!--hero section end-->

</div>

<?php require_once(TEMA_INC.'inc/alt.php');?>
</body>
</html>
