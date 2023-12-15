

    <!-- ========== Menu ========== -->
    <div class="site-header dsn-container dsn-load-animate">
        <div class="extend-container d-flex w-100 align-items-baseline justify-content-between align-items-end">
            <div class="inner-header p-relative">
                <div class="main-logo">
                    <a href="<?php echo LURL; ?>" data-dsn="parallax">
                        <img class="light-logo"
                            src="<?php echo URL;?>images/<?php echo $ayar["logo"];?>"
                            data-dsn-src="<?php echo URL;?>images/<?php echo $ayar["logo"];?>" alt="<?php echo $ayar["site_title"];?>" />
                        <img class="dark-logo"
                            src="<?php echo URL;?>images/<?php echo $ayar["footer_logo"];?>"
                            data-dsn-src="<?php echo URL;?>images/<?php echo $ayar["footer_logo"];?>" alt="<?php echo $ayar["site_title"];?>" />
                    </a>
                </div>
            </div>
            <div class="menu-icon d-flex align-items-baseline">
                <div class="text-menu p-relative  font-heading text-transform-upper">
                    <div class="p-absolute text-button"><?php echo $blokRowdil["desc4"];?></div>
                    <div class="p-absolute text-open"><?php echo $blokRowdil["baslik5"];?></div>
                    <div class="p-absolute text-close"><?php echo $blokRowdil["desc5"];?></div>
                </div>
                <div class="icon-m" data-dsn="parallax" data-dsn-move="10">
                    <span class="menu-icon-line p-relative d-inline-block icon-top"></span>
                    <span class="menu-icon-line p-relative d-inline-block icon-center"></span>
                    <span class="menu-icon-line p-relative d-block icon-bottom"></span>
                </div>
            </div>
            <nav class="accent-menu dsn-container main-navigation p-absolute  w-100  d-flex align-items-baseline ">
                <div class="menu-cover-title"><?php echo $blokRowdil["baslik6"];?></div>
                <ul class="extend-container p-relative d-flex flex-column justify-content-center h-100">

                
                    
                


<?php
                  $url="https://".$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];
                  $menuQuery = $db->query("SELECT * FROM menuler WHERE menu_durum=1 and menu_ust=0 and menu_type=0 ORDER BY menu_sira ASC");
                  if($menuQuery->rowCount()){
                  $numb  = 1;
                  foreach($menuQuery as $menuRow){
                  if ($url==$menuRow[$lehce."menu_href"]) {$linkactive="dsn-active";}else{$linkactive=null;}
                  $menuId = $menuRow["menu_id"];
                  $altMenuQuery = $db->query("SELECT * FROM menuler WHERE menu_ust='$menuId' and menu_durum=1 and menu_type=0 ORDER BY menu_sira ASC");
                  $sayac=1;
                  if($altMenuQuery->rowCount()){
                  $sayac++;
                  echo '<li class="'.$linkactive.' dsn-drop-down">';
                    echo '<a href="javascript:void(0);" class="user-no-selection"><span class="dsn-title-menu">'.$menuRow[$lehce."menu_baslik"].'</span><span class="dsn-meta-menu">'.$numb.'</span><span class="dsn-bg-arrow"></span></a>';
                    echo '<ul>';
                      $saya=0;
                      foreach($altMenuQuery as $altMenuRow){
                      $saya++;
                      $menuIdone = $altMenuRow["menu_id"];
                      echo '<li class="dsn-back-menu">
                                <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                    data-dsn-src="'.TEMA_URL.'ast/img/left-chevron.svg" alt="">
                                <span class="dsn-title-menu">'.$menuRow[$lehce."menu_baslik"].'</span>
                            </li>';
                      echo '<li>';
                        echo '<a href="'.$altMenuRow[$lehce."menu_href"].'"><span class="dsn-title-menu">'.$altMenuRow[$lehce."menu_baslik"].'</span><span class="dsn-meta-menu">'.$saya.'</span></a>';
                      echo '</li>';
                      }
                    echo '</li></ul>';
                    }else{
                    echo '<li><a  class="user-no-selection '.$linkactive.'" href="'.$menuRow[$lehce."menu_href"].'"><span class="dsn-title-menu">'.$menuRow[$lehce."menu_baslik"].'</span><span class="dsn-meta-menu">'.$numb.'</span><span class="dsn-bg-arrow"></span></a></li>';
                    }
                    $numb++;
                    }
                    }
                    ?>



                    
                </ul>
                <div class="container-content  p-absolute h-100 left-60 d-flex flex-column justify-content-center">
                    <div class="nav__info">
                        <div class="nav-content">
                            <p class="title-line">
                                <?php echo $blokRowdil["desc6"];?></p>
                            <p><?php echo $ayar["adres"];?></p>
                        </div>
                        <div class="nav-content">
                            <p class="title-line">
                                <?php echo $blokRowdil["baslik7"];?></p>
                            <p class="links over-hidden">
                                <a href="tel:<?php echo $ayar["telefon"];?>" data-hover-text="<?php echo $ayar["telefon"];?>" class="link-hover"><?php echo $ayar["telefon"];?></a>
                            </p>
                            <p class="links  over-hidden">
                                <a href="mailto:<?php echo $ayar["email"];?>" data-hover-text="<?php echo $ayar["email"];?>" class="link-hover"><?php echo $ayar["email"];?></a>
                            </p>
                        </div>
                    </div>
                    <div class="nav-social nav-content">
                        <div class="nav-social-inner p-relative">
                            <p class="title-line">
                               <?php echo $blokRowdil["desc7"];?></p>
                            <ul>
                                <li>
                                    <a href="<?php echo $ayar["facebook_url"]; ?>" target="_blank" rel="nofollow">Dribbble.
                                        <div class="icon-circle"></div>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo $ayar["twitter_url"]; ?>" target="_blank" rel="nofollow">Behance.
                                        <div class="icon-circle"></div>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo $ayar["instagram_url"]; ?>" target="_blank" rel="nofollow">Linkedin.
                                        <div class="icon-circle">
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo $ayar["google_url"]; ?>" target="_blank" rel="nofollow">Twitter.
                                        <div class="icon-circle"></div>
                                    </a>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- ========== End Menu ========== -->
