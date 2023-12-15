
       <!-- Optional JavaScript -->
    <script src="<?php echo TEMA_URL;?>ast/js/jquery-3.1.1.min.js"></script>
    <script src="<?php echo TEMA_URL;?>ast/js/plugins.min.js"></script>
    <script src="<?php echo TEMA_URL;?>ast/js/dsn-grid.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDUU5FZiF5WLFFfgIC1n64Zr0zfpQZjBBg&callback=initMap"></script>
    <script src="<?php echo TEMA_URL;?>ast/js/custom.js"></script>

            
 <style type="text/css">
    .asagiSabit {position:fixed;bottom:0px;left:0px;z-index:999}

.whatsappBlock a {outline: none;position:relative;display:inline-block;height:100px;width:100px;background:none;padding:25px;text-align:center}
.whatsappBlock a img {position:relative;z-index:8;height:55px;border:1px solid #666;width:55px;max-width: 55px;-webkit-border-radius: 50%;-moz-border-radius: 50%;border-radius: 50%;}
.whatsappBlock a:after {content:"";width:13.610px;height:13.610px;background: green;-webkit-border-radius: 50%;-moz-border-radius: 50%;border-radius: 50%;position:absolute;bottom:20px;left:20px;border:2px solid #fff;z-index:9}

.message {position: absolute;left: -200px;padding: 6px;text-align: center;background: #65BC54;color: #fff;width: 250px;top: 40px;opacity: 0;-webkit-border-radius: 4px;-moz-border-radius: 4px;border-radius: 4px;-webkit-transition: opacity .3s, right .4s;-moz-transition: opacity .3s, right .4s;-ms-transition: opacity .3s, right .4s;-o-transition: opacity .3s, right .4s;transition: opacity .3s, right .4s;}
.message:after {content:"";position: absolute;left: -6px;top: 8px;background: #65BC54;width:14px;height:14px;-ms-transform: rotate(45deg);-webkit-transform: rotate(45deg);transform: rotate(45deg);}
.asagiSabit:hover .message {left:85px;opacity: 1;}

/*** Online ***/
.whatsappBlock a.online .kutucuk {background: rgba(26,183,68,0.25);}
.whatsappBlock a.online:after {background: green}
a.online .message, a.online .message:after {background: #65BC54}

/*** Offline ***/
.whatsappBlock a.offline .kutucuk {background: rgba(153,153,153,0.25);}
.whatsappBlock a.offline:after {background: #999}
a.offline .message, a.offline .message:after {background: #999}

/*** Busy ***/
.whatsappBlock a.busy .kutucuk {background: rgba(255,165,0,0.25);}
.whatsappBlock a.busy:after {background: orange}
a.busy .message, a.busy .message:after {background: orange}

.kutucuklar {position: absolute;left: 25px;top:25px}
.kutucuk {background: rgba(26,183,68,0.25);width: 55px;height: 55px;border-radius: 50%;position: absolute;z-index: 4;transform: scale(1);-webkit-transform: scale(1);}
.animated{-webkit-animation-duration:.5s;animation-duration:.5s;-webkit-animation-fill-mode:both;animation-fill-mode:both}@keyframes zoomOut{from{opacity:0}50%{opacity:1;-webkit-transform:scale3d(0.33,0.33,0.33);transform:scale3d(0.33,0.33,0.33)}to{opacity:1;-webkit-transform:scale3d(0.33,0.33,0.33);transform:scale3d(0.33,0.33,0.33)}}
.animated .k1 {animation: 2000ms kutucukBir cubic-bezier(0.25,0.46,0.45,0.94);}
.animated .k2 {animation: 2500ms kutucukIki cubic-bezier(0.25,0.46,0.45,0.94);}
.animated .k3 {animation: 3000ms kutucukUc cubic-bezier(0.25,0.46,0.45,0.94);}
@keyframes kutucukBir{
    0{transform:scale(1);-webkit-transform:scale(1)}
    50%{transform:scale(2);-webkit-transform:scale(2)}
    100%{transform:scale(1);-webkit-transform:scale(1)}
}
@keyframes kutucukIki{
    0{transform:scale(1);-webkit-transform:scale(1)}
    25%{transform:scale(1);-webkit-transform:scale(1)}
    75%{transform:scale(2);-webkit-transform:scale(2)}
    100%{transform:scale(1);-webkit-transform:scale(1)}
}
@keyframes kutucukUc{
    0{transform:scale(1);-webkit-transform:scale(1)}
    33%{transform:scale(1);-webkit-transform:scale(1)}
    66%{transform:scale(2);-webkit-transform:scale(2)}
    100%{transform:scale(1);-webkit-transform:scale(1)}
}.back-to-top {
    display: block;
    border: 2px solid #de0202;
    padding: 3px;
    border-radius: 100%;
    text-align: center;
    color: #fff;
    float: right;
    background-color: transparent;
    cursor: pointer;
    -webkit-transition: .3s;
    -o-transition: .3s;
    transition: .3s;
    position: fixed;
    left: 30px;
    bottom: 85px!important;
    z-index: 999;
    top: auto!important;}

    h1, h2, h3, h4, h5, h6 {
    clear: both;
    font-family:'Roboto', sans-serif!important;
    margin: 0 0 20px;
    line-height: 1.2;
    padding: 0;
    font-weight: 900;
    text-transform: none!important;
}

 </style><!-- end FOOTER -->    
<div class="asagiSabit whatsappBlock ">
  <a href="https://api.whatsapp.com/send?phone=<?php $arr1 = array("+"," ", ")", "("); $arr2 = array("","", "", "");  echo str_replace($arr1, $arr2, $ayar["gsm"]);?>&text=Merhaba Detaylı bilgi verebilirmisiniz ?">
            <img src="<?php echo URL; ?>images/whatsapp.jpg" alt="" width="50px" height="50px"> 
                        <span id="kutu" class="kutucuklar animated">
                <div class="kutucuk k1"></div>
                <div class="kutucuk k2"></div>
                <div class="kutucuk k3"></div>
            </span>
                        <div class="message"><?php echo $blokRowdil["desc23"]; ?></div>
        </a>
    </div>