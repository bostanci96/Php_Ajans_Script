<?php
if(isset($_GET["url"])){
	$urlSef = g("url");
	$sayfaControl = $db->prepare("SELECT * FROM sayfalar WHERE sayfa_url=:url AND sayfa_durum=:durum");
	$sayfaControl ->bindParam("url",$urlSef,PDO::PARAM_STR,50);
	$sayfaControl ->bindValue("durum",1,PDO::PARAM_INT);
	$sayfaControl -> execute();
	if($sayfaControl->rowCount()){
		$sayfaRow = $sayfaControl->fetch(PDO::FETCH_ASSOC);

		$id=$sayfaRow["sayfa_id"];
	}else{
		header("Location:".LURL."404");exit();
	}
}else{
	header("Location:".LURL."404");exit();
}
?>
<html lang="tr-TR">
<head>
<title><?php if($sayfaRow["sayfa_goster1"]){ echo $sayfaRow["sayfa_goster1"]; }else{ echo $sayfaRow["sayfa_adi"]; } ?> - <?php echo $ayar[$lehce."site_title"];?></title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport">
	<meta name="description" itemprop="description" content="<?php if($sayfaRow["sayfa_goster2"]){ echo $sayfaRow["sayfa_goster2"]; }else{ echo $sayfaRow["sayfa_desc"]; } ?>" />
	<meta name="keywords" itemprop="keywords" content="<?php echo $sayfaRow[$lehce."sayfa_keyw"];?>" />
	<meta name="Abstract" content="<?php echo $ayar["main_tablo"];?>" />
	<meta name="classification" content="<?php if($sayfaRow["sayfa_goster1"]){ echo $sayfaRow["sayfa_goster1"]; }else{ echo $sayfaRow["sayfa_adi"]; } ?> - <?php echo $ayar[$lehce."site_title"];?>" />
	<meta http-equiv="content-language" content="tr" />
	<meta name="distribution" content="Global" />
	<meta name="robots" content="all" />
	<meta name="robots" content="index, follow" />
	<meta name="revisit-after" content="7 days" />
	<meta name="country" content="Türkiye" />
	  <link rel="canonical" href="<?php echo "https://".$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI']; ?>" />
	<meta property="og:title" content="<?php if($sayfaRow["sayfa_goster1"]){ echo $sayfaRow["sayfa_goster1"]; }else{ echo $sayfaRow["sayfa_adi"]; } ?> - <?php echo $ayar[$lehce."site_title"];?>" />
	<meta property="og:locale" content="tr_TR" />
	<meta property="og:type" content="website" />
	<meta property="og:description" content="<?php if($sayfaRow["sayfa_goster2"]){ echo $sayfaRow["sayfa_goster2"]; }else{ echo $sayfaRow["sayfa_desc"]; } ?>" />
	<meta property="og:url" content="<?php echo LURL;?>" />
	<meta property="og:site_name" content="<?php if($sayfaRow["sayfa_goster1"]){ echo $sayfaRow["sayfa_goster1"]; }else{ echo $sayfaRow["sayfa_adi"]; } ?> - <?php echo $ayar[$lehce."site_title"];?>" />
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

<?php if ($sayfaRow["secenekHaber"]==2) { ?>
<?php $kategorix = $db->query("SELECT * FROM kategoriler INNER JOIN sayfalar ON kategori_id=portkat WHERE kat_secenek=2 AND sayfa_id='$id'")->fetch(PDO::FETCH_ASSOC);
$sanrakipageid = $kategorix["sayfa_id"];
 ?>

    <main class="main-root">
        <div id="dsn-scrollbar">
            <div class="main-content">
                <div class="content-inner">
                    <!--=== Header Project Full With & content bottom ===-->
                    <header class="header-project p-relative h-100-v over-hidden dsn-header-animation v-dark-head">
                        <div data-dsn-ajax="img" class="p-absolute dsn-hero-parallax-img w-100 h-100 over-hidden  "
                            data-overlay="6">
                            <img class="cover-bg-img" src="<?php echo URL.'images/sayfalar/big/'.$sayfaRow["sayfa_resim"];?>" alt="">
                        </div>
                        <div class="project-number p-absolute dsn-container d-flex">
                           <!-- <h6><?php echo $kategorix["kategori_adi"]; ?></h6>
                            <span class="curent">1</span>
                            <span class="full">6</span>-->
                        </div>
                        <div class="d-flex  dsn-hero-parallax-title align-items-end h-100 dsn-container pb-40 pt-80">
                            <div class="content p-relative w-100 padding-lr-section">
                                <div class="intro-project">
                                    <div id="dsn-hero-title" class="intro-title">
                                        <div class="metas d-inline-block mb-20">
                                            <span><?php echo $kategorix["kategori_adi"]; ?></span>
                                            
                                        </div>
                                        <h1 class="title" data-dsn-ajax="title">
                                         <?php echo $sayfaRow[$lehce."sayfa_adi"];?>
                                        </h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="scroll-d p-absolute dsn-container">
                            <img src="<?php echo TEMA_URL; ?>ast/img/scroll_down.svg" alt="">
                        </div>
                    </header>
                    <!--=== End Header Project Full With & content bottom ===-->
                    <div class="wrapper">
                        <!--=== Intro Project ===-->
                        <div class="intro-project p-relative section-margin">
                            <div class="container">
                                <div class="row">
                                <p>           <?php echo $sayfaRow[$lehce."sayfa_icerik"];?> </p>
                                </div>
                            </div>
                        </div>
                

                        <div class="section-margin has-popup over-hidden p-relative">
                            <div class="container">
                                <div class="d-grid grid-md-3  over-hidden">


      <?php
                                                                $imgQuery = $db->query("SELECT * FROM fotograflar WHERE fotograf_sayfa_id='$id'");
                                                                if($imgQuery->rowCount()){
                                                                    foreach($imgQuery as $imgRow){
                                                                        ?>

                                <a href="<?php echo URL;?>images/photos/big/<?php echo $imgRow["fotograf_src"];?>"
                                    class="p-relative over-hidden d-flex ">
                                    <img src="<?php echo URL;?>images/photos/big/<?php echo $imgRow["fotograf_src"];?>"
                                        data-dsn-src="<?php echo URL;?>images/photos/big/<?php echo $imgRow["fotograf_src"];?>"
                                        data-dsn-srcset="<?php echo URL;?>images/photos/big/<?php echo $imgRow["fotograf_src"];?> 1800w"
                                        alt="" class="cover-bg-img">
                                </a>

                                                                        <?php
                                                                    }
                                                                }
                                                                ?>



                                </div>
                            </div>
                        </div>


                      <!-- ========== testimonial Section ========== -->
                    <?php require_once(TEMA_INC.'inc/musteriyorumlari.php');?>
                    <!-- ========== End testimonial Section ========== -->

                    <!-- ========== End brand-client Section ========== -->
                    <?php require_once(TEMA_INC.'inc/cozumortaklari.php');?>
                    <!-- ========== End brand-client Section ========== -->
                    </div>


<?php 

$sonrakipage = $db->query("SELECT * FROM kategoriler 
    INNER JOIN sayfalar ON kategori_id=portkat WHERE kat_secenek=2 AND sayfa_id>'$sanrakipageid'")->fetch(PDO::FETCH_ASSOC);
  $haberUrl = LURL.'portfolyo/'.$sonrakipage["sayfa_url"].'/';
 ?>
<?php if($sonrakipage){ ?>
                    <div class="next-project v-dark-head p-relative h-v-100 over-hidden">
                        <div class="bg w-100 h-100 p-absolute over-hidden z-index-0 before-z-index" data-overlay="6">
                            <img src="<?php echo URL.'images/sayfalar/big/'.$sonrakipage["sayfa_resim"];?>" alt="" class="cover-bg-img">
                        </div>
                        <div
                            class="next-project-inner dsn-container p-relative w-100 h-100 d-flex flex-column justify-content-center">
                            <div class="project-number p-absolute d-flex">
                              <!--  <h6>Project</h6>
                                <span class="curent">2</span>
                                <span class="full">6</span>-->
                            </div>
                            <div class="metas d-inline-block mt-30 right-0 p-absolute top-0 dsn-container">
                                <span><?php echo $sonrakipage["kategori_adi"] ?> </span>
                            </div>
                            <a href="<?php echo $haberUrl ?>" class="effect-ajax border-top border-bottom" data-dsn-ajax="next">
                                <h2 class="title section-padding p-relative ">
                                    <span class="title-stroke"><?php echo $sonrakipage["sayfa_adi"] ?> </span>
                                    <span class="p-absolute section-padding d-none top-0 w-100 h-100 left-0"><?php echo $sonrakipage["sayfa_adi"] ?> </span>
                                </h2>
                            </a>
                            <div class="case">
                                <div class="p-absolute w-100 h-100 ">
                                    <img class="cover-bg-img" src="<?php echo TEMA_URL; ?>ast/img/case.svg" alt="">
                                </div>
                                <strong class="title-block heading-color number v-middle">
                                    100%
                                </strong>
                            </div>
                        </div>
                    </div>
<?php }else{ ?> 


 <?php require_once(TEMA_INC.'inc/footer.php');?>
    <!-- ========== Contact Form Model ========== -->
        <?php require_once(TEMA_INC.'inc/anasayfaurun.php');?>
        <!-- ========== End Contact Form Model ========== -->





<?php } ?>




                </div>
            </div>
        </div>
    </main>
<?php }else{ ?> 
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
                                <a href="javascript:void(0);" class="effect-ajax">


<?php if ($sayfaRow["secenekHaber"]==1) { ?>
  
                                    <?php echo tarih($sayfaRow["sayfa_tarih"]);?>
                                        
<?php }else{ ?>
<?php echo $sayfaRow[$lehce."sayfa_desc"];?>


<?php } ?>


                                    </a>
                            </div>
                            <h1 class="title mt-30 dsn-load-animate text-transform-upper max-w750"><?php echo $sayfaRow[$lehce."sayfa_adi"];?></h1>
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
                                            src="<?php echo URL.'images/sayfalar/big/'.$sayfaRow["sayfa_resim"];?>"
                                            data-dsn-src="<?php echo URL.'images/sayfalar/big/'.$sayfaRow["sayfa_resim"];?>" alt="<?php echo $sayfaRow[$lehce."resim_baslik"];?>">
                                    </div>
                                </div>

                                <div class="news-content mt-auto">
                                    <div class="news-content-inner">

                                        <div class="post-content">
                                            <p>
                                               <?php echo $sayfaRow[$lehce."sayfa_icerik"];?>
                                            </p>

                                        </div>
                                    </div>

                                </div>
                                   <div class="section-margin has-popup over-hidden p-relative">
                        <div class="container">
                            <div class="d-grid grid-md-4  over-hidden">



                                <?php
                                                                $imgQuery = $db->query("SELECT * FROM fotograflar WHERE fotograf_sayfa_id='$id'");
                                                                if($imgQuery->rowCount()){
                                                                    foreach($imgQuery as $imgRow){
                                                                        ?>

                                <a href="<?php echo URL;?>images/photos/big/<?php echo $imgRow["fotograf_src"];?>"
                                    class="p-relative over-hidden d-flex ">
                                    <img src="<?php echo URL;?>images/photos/big/<?php echo $imgRow["fotograf_src"];?>"
                                        data-dsn-src="<?php echo URL;?>images/photos/big/<?php echo $imgRow["fotograf_src"];?>"
                                        data-dsn-srcset="<?php echo URL;?>images/photos/big/<?php echo $imgRow["fotograf_src"];?> 1800w"
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











<?php if ($sayfaRow["sayfa_id"]==5) { ?>
  
                    <!-- ========== box vertical Section ========== -->
                    <?php require_once(TEMA_INC.'inc/iletisimegec2.php');?>
                    <!-- ========== End box vertical Section ========== -->
                                <!-- ========== About Section ========== -->
                    <?php require_once(TEMA_INC.'inc/anasayfakurumsal2.php');?>
                    <!-- ========== End About Section ========== -->

                  
   <!-- ========== team Section ========== -->
                    <?php require_once(TEMA_INC.'inc/formiletisim.php');?>
                    <!-- ========== End team Section ========== -->

                      <!-- ========== testimonial Section ========== -->
                    <?php require_once(TEMA_INC.'inc/musteriyorumlari.php');?>
                    <!-- ========== End testimonial Section ========== -->

                    <!-- ========== End brand-client Section ========== -->
                    <?php require_once(TEMA_INC.'inc/cozumortaklari.php');?>
                    <!-- ========== End brand-client Section ========== -->
<?php } ?>














               <?php require_once(TEMA_INC.'inc/footer.php');?>
            </div>
        </div>

        <!-- ========== Contact Form Model ========== -->
        <?php require_once(TEMA_INC.'inc/anasayfaurun.php');?>
        <!-- ========== End Contact Form Model ========== -->
    </main>

<?php } ?>
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