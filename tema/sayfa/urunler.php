<?php $blok = $db->query("SELECT * FROM dil_bloklar{$blokLehce}")->fetch(PDO::FETCH_ASSOC); ?>
<?php
if(isset($_GET["kategori"])){
  $urunGet = $_GET["kategori"];

  $kategori = explode ("/",$urunGet);
  $kategoriid=$kategori[0];
  $kategoriurl=$kategori[1];

  $kategoriControl = $db->prepare("SELECT * FROM kategoriler WHERE kategori_url=:url and kategori_id=:id AND kategori_durum=:durum AND kat_secenek=:secenek");
  $kategoriControl ->bindParam("url",$kategoriurl,PDO::PARAM_STR);
  $kategoriControl ->bindParam("id",$kategoriid,PDO::PARAM_INT);
  $kategoriControl ->bindValue("durum",1,PDO::PARAM_INT);
  $kategoriControl ->bindValue("secenek",1,PDO::PARAM_INT);
  $kategoriControl ->execute();
  if( $kategoriControl->rowCount() ){
    $kategoriRow = $kategoriControl->fetch(PDO::FETCH_ASSOC);
    $title     = $kategoriRow[$lehce."kategori_adi"];
    $description = $kategoriRow[$lehce."kategori_desc"];
    $checked   = true;
    $kategori_id = $kategoriRow["kategori_id"];
    $kategori_ust_id = $kategoriRow["kategori_ust_id"];
    require(TEMA_INC.'urun/broadcrumb.php');
  }else{
    $broadCrumb = '<li class="list-inline-item breadcrumb-item"><a href="'.LURL.'"  title="'. $blok["baslik5"].'"> '. $blok["baslik5"].' </a></li>';
    $broadCrumb .= '<li class="list-inline-item breadcrumb-item active">'.$blok["baslik24"].'</li>';
    $title = $blok["baslik24"]." - ".$ayar["site_title"];
    $description = $ayar[$lehce."site_desc"];
    $kategoriRow[$lehce."kategori_adi"] = $blok["baslik24"];
    
  }
}else{
  $broadCrumb = '<li class="list-inline-item breadcrumb-item"><a href="'.LURL.'"  title="'. $blok["baslik5"].'"> '. $blok["baslik5"].' </a></li>';
  $broadCrumb .= '<li class="list-inline-item breadcrumb-item active">'.$blok["baslik24"].'</li>';
  $title = $blok["baslik24"];
  $description = $ayar[$lehce."site_desc"];
  $kategoriRow[$lehce."kategori_adi"] = $blok["baslik24"];
    $kategoriRow[$lehce."kategori_desc"] =  $blok["desc24"];
    $kategoriRow[$lehce."kategori_aciklama"] = $blok["baslik25"];
}
?>

<!DOCTYPE html>
<html lang="tr-TR">

<head>
  <meta http-equiv="Content-Type" content="text/html" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta charset="UTF-8">
  <title><?php echo $kategoriRow[$lehce."kategori_adi"];?> - <?php echo $ayar[$lehce."site_title"];?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <meta name="description" itemprop="description" content="<?php echo $description;?>" />
  <meta name="keywords" itemprop="keywords" content="<?php echo $ayar[$lehce."site_keyw"];?>" />
  <meta name="Abstract" content="<?php echo $ayar["main_tablo"];?>" />
  <meta name="classification" content="<?php echo $kategoriRow[$lehce."kategori_adi"];?> - <?php echo $ayar[$lehce."site_title"];?>" />
  <meta http-equiv="content-language" content="tr" />
  <meta name="distribution" content="Global" />
  <meta name="author" content="Ömer Utku Bostancı | Yazılım Uzmanı | Freelancer | İstanbul Web Tasarım ve Web Yazılım">
  <meta name="robots" content="all" />
  <meta name="robots" content="index, follow" />
  <meta name="revisit-after" content="7 days" />
  <meta name="country" content="Türkiye" />
   <link rel="canonical" href="<?php echo "https://".$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI']; ?>" />
  <meta property="og:title" content="<?php echo $kategoriRow[$lehce."kategori_adi"];?> - <?php echo $ayar[$lehce."site_title"];?>" />
  <meta property="og:locale" content="tr_TR" />
  <meta property="og:type" content="website" />
  <meta property="og:description" content="<?php echo $description;?>" />
  <meta property="og:url" content="<?php echo LURL;?>" />
  <meta property="og:site_name" content="<?php echo $kategoriRow[$lehce."kategori_adi"];?> - <?php echo $ayar[$lehce."site_title"];?>" />
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
.section-margin {
    margin-top:2.5rem!important;
    margin-bottom:2.5rem!important;
}
</style>

    <main class="main-root">

        <div id="dsn-scrollbar">
            <div class="main-content">
                <div class="wrapper">
                <!-- ========== Header Normal ========== -->

                    <header
                        class="header-page over-hidden p-relative header-padding-top header-padding-bottom background-section dsn-header-animation">
                        <div class="bg-circle-dotted"></div>
                        <div class="dsn-container">
                            <div
                                class="content-hero p-relative d-flex align-items-center text-center flex-column h-100 dsn-hero-parallax-title">
                                <p class="subtitle p-relative line-shap  ">
                                    <span class="pl-10 pr-10 background-main dsn-load-animate"><?php echo $kategoriRow[$lehce."kategori_adi"]; ?></span>
                                </p>
                                <h1 class="title mt-30  dsn-load-animate"><?php echo $kategoriRow[$lehce."kategori_desc"]; ?>
                                </h1>
                            </div>
                        </div>
                    </header>
                    <!-- ========== End Header Normal ========== -->

                    <!-- ========== About Section ========== -->
                    <section class="about-services-page p-relative section-margin">
                        <div class="container">
                            <div class="row">

                                <div class="col-lg-12">
                                    <div class="box-left">
                                        <div class="section-title">
                                            <p class="sub-heading line-bg-left mb-25"><?php echo $kategoriRow[$lehce."kategori_adi"]; ?></p>

                                            <h4><?php echo $kategoriRow[$lehce."kategori_aciklama"]; ?></h4>

                                        </div>
                                    </div>
                                </div>
                                

                            </div>
                        </div>
                    </section>
                    <!-- ========== End About Section ========== -->
 <!-- ========== team Section ========== -->
                    <section class="team tam-classic section-margin p-relative " data-dsn-animate="section">
                    

                        <div class="container ">
                            <div class="d-grid grid-lg-3 grid-sm-2">








  <?php 
          if(isset($checked)){
            $urunSorgu = $db->prepare("SELECT * FROM urunler 
              INNER JOIN kategoriler ON urun_kategori=kategori_id
              INNER JOIN urunresim   ON urun_id=resim_urun_id
              WHERE kategori_id=:id AND urun_durum=:durum
              GROUP BY (urun_id) ORDER BY urun_sira_no");
            $urunSorgu -> bindParam("id",$kategoriid,PDO::PARAM_STR);
            $urunSorgu -> bindValue("durum",1,PDO::PARAM_INT);
            $urunSorgu -> execute();
            if($urunSorgu->rowCount()){
              $sayac=0;
              foreach($urunSorgu as $urunRow){
                $sayac++;
                $link = LURL."hizmet-detay/".$urunRow["urun_url"]."/";
                require(TEMA_INC.'urun/urunlerUrunSingle.php');
              }
            }else{
              $altCatQuery = $db->prepare("SELECT * FROM kategoriler 
                WHERE kategori_ust_id=:ust_kategori AND kategori_durum=:durum AND kat_secenek=:secenek");
              $altCatQuery -> bindParam("ust_kategori",$kategori_id,PDO::PARAM_INT);
              $altCatQuery -> bindValue("durum",1,PDO::PARAM_INT);
               $altCatQuery -> bindValue("secenek",1,PDO::PARAM_INT);
              $altCatQuery -> execute();
              if($altCatQuery->rowCount()){
                $sayac=0;
                foreach($altCatQuery as $altCatRow){
                  $sayac++;
                  $link = LURL."hizmetler/".$altCatRow["kategori_id"]."/".$altCatRow["kategori_url"]."/";
                  require(TEMA_INC.'urun/urunlerKategoriSingle.php');
                }
              }else{
                echo 'Bu kategoride hizmet girişi yapılmamış..';
              }
            }
          }else{
            $altCatQuery = $db->prepare("SELECT * FROM kategoriler 
              WHERE kategori_ust_id=:ust_kategori AND kategori_durum=:durum AND kat_secenek=:secenek");
            $altCatQuery -> bindValue("ust_kategori",0,PDO::PARAM_INT);
            $altCatQuery -> bindValue("durum",1,PDO::PARAM_INT);
            $altCatQuery -> bindValue("secenek",1,PDO::PARAM_INT);
            $altCatQuery -> execute();
            if($altCatQuery->rowCount()){
              $sayac=0;
              foreach($altCatQuery as $altCatRow){
                $sayac++;
                $link = LURL."hizmetler/".$altCatRow["kategori_id"]."/".$altCatRow["kategori_url"]."/";
                require(TEMA_INC.'urun/urunlerKategoriSingle.php');
              }
            }else{
              echo 'Bu kategoride hizmet girişi yapılmamış..';
            }
          }
          ?>
                   
                        



                            </div>
                        </div>
                    </section>


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