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
<!DOCTYPE html>
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
    <link rel="canonical" href="<?php echo LURL;?>" />
    <meta property="og:title" content="<?php echo $urunRow[$lehce."urun_adi"];?> - <?php echo $ayar[$lehce."site_title"];?>" />
    <meta property="og:locale" content="tr_TR" />
    <meta property="og:type" content="website" />
    <meta property="og:description" content="<?php echo $urunRow[$lehce."urun_icerik"];?>" />
    <meta property="og:url" content="<?php echo LURL;?>" />
    <meta property="og:site_name" content="<?php echo $urunRow[$lehce."urun_adi"];?> - <?php echo $ayar[$lehce."site_title"];?>" />
    <meta content="telephone=no" name="format-detection">
    <?php require_once(TEMA_INC.'inc/ust.php');?>
    <style>
        div.styc {
            position: -webkit-sticky;
            position: sticky;
            top: 85px;
        }
    </style>
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
    <!--loader end-->
    <?php require_once(TEMA_INC.'inc/head.php');?>
    <div class="main">
        <!--header section start-->
        <section class="hero-section ptb-100 gradient-overlay"
        style="background: url('<?php echo TEMA_URL;?>ast/img/header-bg-5.jpg')no-repeat center center / cover;padding-bottom: 40px;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-7">
                    <div class="page-header-content text-white text-center pt-sm-5 pt-md-5 pt-lg-0">
                        <h1 class="text-white mb-0"><?php echo $urunRow[$lehce."urun_adi"];?></h1>
                        <div class="custom-breadcrumb">
                            <ol class="breadcrumb d-inline-block bg-transparent list-inline py-0">
                                <li class="list-inline-item breadcrumb-item"><a href="<?php echo LURL; ?>"><?php echo $blokRowdil["baslik5"]; ?></a></li>
                                <li class="list-inline-item breadcrumb-item active"><?php echo $urunRow[$lehce."urun_adi"];?></li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--header section end-->
    <!--project details section start-->
    <section class="project-details-section ptb-100">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-md-12 col-lg-8">
                    <div class="img-wrap mb-md-4 mb-lg-0">
                      <div class="popup-gallery">


                        <?php
                        $urunID = $urunRow["urun_id"];
                        $imgQuery = $db->query("SELECT * FROM urunresim WHERE resim_urun_id='$urunID'");
                        if($imgQuery->rowCount()){
                            $imgArray   = array();
                            $count      = 0;
                            foreach($imgQuery as $imgRow){
                                $imgArray[$count] = $imgRow["urun_img"];
                                $count++; 
                                ?>

                            <?php   }
                        }
                        ?>
                        <?php
                        $s=0;
                        foreach($imgArray as $imgRow){
                            $s++;
                            if ($s==1) {
                                // code...
                           
                            ?>
                            <a href="<?php echo URL.'images/urunler/big/'.$imgRow;?>" >

                                <img src="<?php echo URL.'images/urunler/big/'.$imgRow;?>" alt="<?php echo $urunRow[$lehce."urun_adi"];?>" class="img-fluid rounded shadow-sm"/>
                         </a>



                         <?php }  }
                         foreach($imgArray as $imgRow){
                            ?>



                            <a href="<?php echo URL.'images/urunler/big/'.$imgRow;?>" >
                                <img src="<?php echo URL.'images/urunler/thumb/'.$imgRow;?>" style="width: 80px; margin-left: 15px;">
                            </a>
                            <?php
                        }


                        ?>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-lg-4 ">
                <!--all services list-->
                <?php
                $relatedQuery = $db->prepare("SELECT * FROM urunler INNER JOIN urunresim ON resim_urun_id=urun_id WHERE urun_kategori=:kategori AND urun_durum=:durum GROUP BY (urun_id) ORDER BY urun_id DESC LIMIT 0,4");
                $relatedQuery ->bindParam("kategori",$urunRow["urun_kategori"],PDO::PARAM_INT);
                $relatedQuery ->bindValue("durum",1,PDO::PARAM_INT);
                $relatedQuery ->execute();
                if($relatedQuery ->rowCount()){
                    ?>
                    <aside class="widget widget-categories styc">
                        <div class="widget-title ">
                            <h5><?php echo $blokRowdil["baslik23"]; ?></h5>
                        </div>
                        <ul class="all-service-list ">
                            <?php
                            foreach($relatedQuery as $relatedRow){
                                $link = LURL.'urun-detay/'.$relatedRow[$lehce."urun_url"].'/';
                                ?>
                                <li><a href="<?php echo $link?>"><?php echo $relatedRow[$lehce."urun_adi"];?></a></li>
                                <?php
                            }
                            ?>
                        </ul>
                    </aside>
                    <?php
                }
                ?>
            </div>
        </div>
        <!--project details row start-->
        <div class="row mt-5">
            <div class="col-md-12">
                <div class="project-details-content">
                    <h5><?php echo $urunRow[$lehce."urun_adi"];?></h5>
                    <p><?php echo $urunRow[$lehce."urun_tam_icerik"];?></p>
                </div>
            </div>
        </div>

        <!--project details row end-->
    </div>
</section>
<!--project details section end-->
<script type="text/javascript">
    $(document).ready(function() {
        $('.popup-gallery').magnificPopup({
            delegate: 'a',
            type: 'image',
            tLoading: 'Loading image #%curr%...',
            mainClass: 'mfp-img-mobile',
            gallery: {
                enabled: true,
                navigateByImgClick: true,
            preload: [0,1] // Will preload 0 - before current, and 1 after the current image
        },
        image: {
            tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
            titleSrc: function(item) {
                return item.el.attr('title') + '<small><?php echo $ayar[$lehce."site_title"]; ?></small>';
            }
        }
    });
    });
</script>
<?php require_once(TEMA_INC.'inc/iletisimegec.php');?>
</div>
<?php require_once(TEMA_INC.'inc/footer.php');?>
<?php require_once(TEMA_INC.'inc/alt.php');?>
</body>
</html>