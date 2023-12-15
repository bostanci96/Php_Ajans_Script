<?php $blok = $db->query("SELECT * FROM dil_bloklar{$blokLehce}")->fetch(PDO::FETCH_ASSOC); ?>
<!DOCTYPE html>
<html lang="tr-TR">
<head>
 <title><?php echo $blok["baslik39"];?> - <?php echo $ayar[$lehce."site_title"];?></title>
 <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
 <meta name="description" itemprop="description" content="<?php echo $ayar[$lehce."site_desc"];?>" />
 <meta name="keywords" itemprop="keywords" content="<?php echo $ayar[$lehce."site_keyw"];?>" />
 <meta name="Abstract" content="<?php echo $ayar["main_tablo"];?>" />
 <meta name="classification" content="<?php echo $blok["baslik39"];?> - <?php echo $ayar[$lehce."site_title"];?>" />
 <meta http-equiv="content-language" content="tr" />
 <meta name="distribution" content="Global" />
 <meta name="author" content="Ömer Utku Bostancı | Yazılım Uzmanı | Freelancer | İstanbul Web Tasarım ve Web Yazılım">
 <meta name="robots" content="all" />
 <meta name="robots" content="index, follow" />
 <meta name="revisit-after" content="7 days" />
 <meta name="country" content="Türkiye" />
  <link rel="canonical" href="<?php echo "https://".$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI']; ?>" />
   <meta property="og:title" content="<?php echo $blok["baslik39"];?> - <?php echo $ayar[$lehce."site_title"];?>" />
 <meta property="og:locale" content="tr_TR" />
 <meta property="og:type" content="website" />
 <meta property="og:description" content="<?php echo $ayar[$lehce."site_desc"];?>" />
 <meta property="og:url" content="<?php echo LURL;?>" />
 <meta property="og:site_name" content="<?php echo $blok["baslik39"];?> - <?php echo $ayar[$lehce."site_title"];?>" />
 <meta content="telephone=no" name="format-detection">


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
<!--loader end-->
<?php require_once(TEMA_INC.'inc/head.php');?>


<div class="main">


    <!--header section start-->
    <section class="hero-section ptb-100 gradient-overlay"  style="background: url('<?php echo TEMA_URL;?>ast/img/header-bg-5.jpg')no-repeat center center / cover;padding-bottom: 40px;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-7">
                    <div class="page-header-content text-white text-center pt-sm-5 pt-md-5 pt-lg-0">
                        <h1 class="text-white mb-0"><?php echo $blokRowdil["baslik39"]; ?></h1>
                        <div class="custom-breadcrumb">
                            <ol class="breadcrumb d-inline-block bg-transparent list-inline py-0">
                                <li class="list-inline-item breadcrumb-item"><a href="<?php echo LURL; ?>"><?php echo $blokRowdil["baslik5"]; ?></a></li>
                                <li class="list-inline-item breadcrumb-item active"><?php echo $blokRowdil["baslik39"]; ?></li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--header section end-->



    <!--blog section start-->
    <section class="our-blog-section ptb-100 gray-light-bg">
        <div class="container">

            <div class="row">


    <?php

                                    $kelime = $_POST["searh"];

                                    $split = explode("?page=", $_SERVER['REQUEST_URI']);

                                    if($split[count($split)-1]>1){

                                        $_GET['page']=$split[count($split)-1];
                                    }

                                    $limit = 6;
                                    $query = "SELECT * FROM urunler INNER JOIN  urunresim   ON urun_id=resim_urun_id WHERE urun_adi LIKE '%$kelime%' or urun_icerik LIKE '%$kelime%' or urun_tam_icerik LIKE '%$kelime%' GROUP BY (urun_id) ORDER BY urun_id  DESC";

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
                                    $show = "SELECT * FROM urunler INNER JOIN urunresim   ON urun_id=resim_urun_id WHERE urun_adi LIKE '%$kelime%' or urun_icerik LIKE '%$kelime%' or urun_tam_icerik LIKE '%$kelime%' GROUP BY (urun_id) ORDER BY urun_id DESC  LIMIT $starting_limit, $limit";

                                    $r = $db->prepare($show);
                                    $r->execute();

                                    while($res = $r->fetch(PDO::FETCH_ASSOC)):
                                        $haberUrl = LURL."urun-detay/".$res["urun_url"]."/";
                                        ?>


                    <div class="col-md-6 col-lg-4">
                        <div class="single-blog-card card border-0 shadow-sm">
                            <div class="blog-img">
                                <!--    <a href="<?php echo $haberUrl;?>"><span class="category position-absolute"></span></a>-->
                                <a href="<?php echo $haberUrl;?>"><img src="<?php echo URL;?>images/urunler/big/<?php echo $res["urun_img"];?>" class="card-img-top position-relative img-fluid" ></a>
                            </div>
                            <div class="card-body">
                                <h3 class="h5 mb-2 card-title"><a href="<?php echo $haberUrl;?>"><?php echo $res[$lehce."urun_adi"];?></a></h3>
                                <p class="card-text"><b>₺</b> <?php echo $res[$lehce."urun_fiyat"];?></p>
                            </div>
                            
                </div>
            </div>


        <?php endwhile; ?>








    </div>


    <!--pagination start-->
    <div class="row">
        <div class="col-md-12">
            <nav class="custom-pagination-nav mt-4">
                <ul class="pagination justify-content-center">





                    <?php if($page>1){ ?>
                        <li class="page-item"><a class="page-link" href="?page=<?php echo $page-1;?>"><span class="ti-angle-left"></span></a></li>
                    <?php } for ($i=$page; $i <=$total_pages ; $i++){ ?>
                        <?php if($i==$page){ ?>
                           
                            <li class="page-item active"><a class="page-link" href="javascript:void(0);"><?php echo $i;?></a></li>
                        <?php }else{ ?>
                         <li class="page-item"><a class="page-link" href='?page=<?php echo $i;?>'><?php echo $i;?></a></li>
                     <?php   } } if ($total_pages>$page) { ?>
                         <li class="page-item"><a class="page-link" href="?page=<?php echo $page+1;?>"><span class="ti-angle-right"></span></a></li>
                     <?php } ?>


                 </ul>
             </nav>
         </div>
     </div>
     <!--pagination end-->

 </div>
</section>
<!--blog section end-->






















</div>



<?php require_once(TEMA_INC.'inc/footer.php');?>
<?php require_once(TEMA_INC.'inc/alt.php');?>
</body>
</html>
