<?php $blok = $db->query("SELECT * FROM dil_bloklar{$blokLehce}")->fetch(PDO::FETCH_ASSOC); ?>
<!DOCTYPE html>
<html lang="tr-TR">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <meta http-equiv="Content-Type" content="text/html" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="UTF-8">
    <title><?php echo $blok["baslik2"];?> - <?php echo $ayar[$lehce."site_title"];?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="description" itemprop="description" content="<?php echo $ayar[$lehce."site_desc"];?>" />
    <meta name="keywords" itemprop="keywords" content="<?php echo $ayar[$lehce."site_keyw"];?>" />
    <meta name="Abstract" content="<?php echo $ayar["main_tablo"];?>" />
    <meta name="classification" content="<?php echo $blok["baslik2"];?> - <?php echo $ayar[$lehce."site_title"];?>" />
    <meta http-equiv="content-language" content="tr" />
    <meta name="distribution" content="Global" />
    <meta name="author" content="Ömer Utku Bostancı | Yazılım Uzmanı | Freelancer | İstanbul Web Tasarım ve Web Yazılım">
    <meta name="robots" content="all" />
    <meta name="robots" content="index, follow" />
    <meta name="revisit-after" content="7 days" />
    <meta name="country" content="Türkiye" />
  <link rel="canonical" href="<?php echo "https://".$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI']; ?>" />
    <meta property="og:title" content="<?php echo $blok["baslik2"];?> - <?php echo $ayar[$lehce."site_title"];?>" />
    <meta property="og:locale" content="tr_TR" />
    <meta property="og:type" content="website" />
    <meta property="og:description" content="<?php echo $ayar[$lehce."site_desc"];?>" />
    <meta property="og:url" content="<?php echo LURL;?>" />
    <meta property="og:site_name" content="<?php echo $blok["baslik2"];?> - <?php echo $ayar[$lehce."site_title"];?>" />
    <meta content="telephone=no" name="format-detection">
    <link href="<?php echo TEMA_URL;?>ast/font/css/all.css" rel="stylesheet"> <!--load all styles -->
    <?php require_once(TEMA_INC.'inc/ust.php');?>
</head>
<body class="home page-template-default page page-id-9 yith-wcan-free jan-atc-behavior-slide wpb-js-composer js-comp-ver-5.4.7 vc_responsive" itemscope="itemscope">
    <div id="jas-wrapper">
       <?php require_once(TEMA_INC.'inc/head.php');?>
       <!-- #jas-header -->
       <div id="jas-content">
           <div class="page-head pr tc" style="background: url(<?php echo URL;?>images/galeri.jpg) no-repeat center center / cover;">

            <div class="jas-container pr">
                <h1 class="tu mb__10 cw" itemprop="headline"><?php echo $blokRowdil["baslik2"];?></h1>

                <ul class="jas-breadcrumb dib oh">
                    <li class="fl home"><a href="<?php echo LURL;?>" title="<?php echo $blokRowdil["desc3"]; ?>"><?php echo $blokRowdil["desc3"]; ?></a></li>
                    <li class="fl separator"> <i class="fa fa-angle-right"></i> </li>
                    <li class="fl current"><?php echo $blokRowdil["baslik2"];?></li>
                </ul>
            </div>
            
        </div>
        <div class="jas-container" style="margin-top: 3%;   margin-bottom: 3%;">
            <div class="jas-row jas-blog">
                <div class="popup-gallery">
                <?php 

                $galQuery = $db->query("SELECT * FROM fotograflar WHERE fotograf_bolum=3 AND fotograf_durum=1");
                if($galQuery->rowCount()){
                    foreach($galQuery as $galRow){
                        ?>

                        <div class="wpb_column  vc_col-sm-12 vc_col-md-4" style="margin-bottom: 15px;">
                            <a href="<?php echo URL.'images/photos/big/'.$galRow["fotograf_src"];?>" title="<?php echo $galRow["fotograf_shortDesc"];?>">
                                <img src="<?php echo URL.'images/photos/big/'.$galRow["fotograf_src"];?>" >
                            </a>
                        </div>

                    <?php }}?>
                </div>
                </div>
                <!-- .jas-row -->
            </div>
            <!-- .jas-row -->
        </div>
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
            <!-- #jas-content -->
            <?php require_once(TEMA_INC.'inc/footer.php');?>
            <!-- #jas-footer -->
        </div>
        <!-- #jas-wrapper -->
        <a id="jas-backtop" class="pf br__50"><span class="tc bgp br__50 db cw"><i class="pr pe-7s-angle-up"></i></span></a>
        <?php require_once(TEMA_INC.'inc/alt.php');?>
    </body>
    </html>