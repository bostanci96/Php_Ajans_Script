<?php
## Sayfa Ekle
if($_GET["p"]=="sayfa_ekle"){
	
	$sayfa_adi 			= p("sayfa_adi");
	$sayfa_urlcc = p("sayfa_url");
	if (!$sayfa_urlcc) {
		$sayfa_urls = $sayfa_adi;
	}else{
		$sayfa_urls = $sayfa_url;
	}
	$sayfa_url 			= sef_link($sayfa_urls);
	$sayfa_desc 		= p("sayfa_desc");
	$sayfa_icerik 		= p("sayfa_icerik");
	$secenekHaber 		= p("secenekHaber");
	$portkat 		= p("portkat");
	$sayfa_goster1 		= p("sayfa_goster1");
	$sayfa_goster2 		= p("sayfa_goster2");
	$resim_baslik 		= p("resim_baslik");
	$sayfa_keyw 		= p("sayfa_keyw");
	@$dosya 				= $_FILES["dosya"]["tmp_name"][0];
	if(!$sayfa_adi){
		echo 'bos-deger';
	}else{
		
		$insert =$db->query("INSERT INTO sayfalar SET 
			sayfa_adi 		= '$sayfa_adi',
			sayfa_url 		= '$sayfa_url',
			sayfa_desc 		= '$sayfa_desc',
			sayfa_icerik 	= '$sayfa_icerik',
			secenekHaber 	= '$secenekHaber',
			portkat 	= '$portkat',
			resim_baslik 	= '$resim_baslik',
			sayfa_goster1 	= '$sayfa_goster1',
			sayfa_goster2 	= '$sayfa_goster2',
			sayfa_keyw 	= '$sayfa_keyw',
			sayfa_durum 	= 1");
		if($insert->rowCount()){
			$last_insert_id = $db->lastInsertId();
			if($last_insert_id){
				require_once("app-upload/app.upload.php");
				require_once("app-upload/sayfa_resim_add.php");
			}
			echo 'basarili';
		}else{
			echo 'basarisiz';
		}
	}
}

## Sayfa Düzenle
if($_GET["p"]=="sayfa_edit"){
	$sayfa_id 			= p("sayfa_id");
	$sayfa_adi 			= p("sayfa_adi");
	$sayfa_urlcc = p("sayfa_url");
	if (!$sayfa_urlcc) {
		$sayfa_urls = $sayfa_adi;
	}else{
		$sayfa_urls = $sayfa_urlcc;
	}
	$sayfa_url 			= sef_link($sayfa_urls);
	$sayfa_desc 		= p("sayfa_desc");
	$sayfa_icerik 		= p("sayfa_icerik");
	$sayfa_goster1 		= p("sayfa_goster1");
	$sayfa_goster2 		= p("sayfa_goster2");

	$en_sayfa_adi 			= p("en_sayfa_adi");
	$en_sayfa_desc 			= p("en_sayfa_desc");
	$en_sayfa_icerik 		= p("en_sayfa_icerik");

	$ar_sayfa_adi 			= p("ar_sayfa_adi");
	$ar_sayfa_desc 			= p("ar_sayfa_desc");
	$ar_sayfa_icerik 		= p("ar_sayfa_icerik");

	$fa_sayfa_adi 			= p("fa_sayfa_adi");
	$fa_sayfa_desc 			= p("fa_sayfa_desc");
	$fa_sayfa_icerik 		= p("fa_sayfa_icerik");
	$sayfa_keyw 		= p("sayfa_keyw");
	$en_sayfa_keyw 		= p("en_sayfa_keyw");
	$ar_sayfa_keyw 		= p("ar_sayfa_keyw");
	$fa_sayfa_keyw 		= p("fa_sayfa_keyw");
	$secenekHaber 		= p("secenekHaber");
$portkat 		= p("portkat");
	$resim_baslik 		= p("resim_baslik");
	$en_resim_baslik 		= p("en_resim_baslik");
	$ar_resim_baslik 		= p("ar_resim_baslik");
	$fa_resim_baslik 		= p("fa_resim_baslik");
	$dosya 				= $_FILES["dosya"]["tmp_name"][0];
	$dosya2 				= $_FILES["dosya2"]["tmp_name"][0];
	$dosya3 				= $_FILES["dosya3"]["tmp_name"][0];

	if(!$sayfa_adi){
		echo 'bos-deger';
	}else{
		$update =$db->query("UPDATE sayfalar SET 
			sayfa_adi 		= '$sayfa_adi',
			sayfa_url 		= '$sayfa_url',
			sayfa_desc 		= '$sayfa_desc',
			sayfa_goster1 	= '$sayfa_goster1',
			sayfa_goster2 	= '$sayfa_goster2',
			sayfa_keyw 	= '$sayfa_keyw',
			en_sayfa_keyw 	= '$en_sayfa_keyw',
			ar_sayfa_keyw 	= '$ar_sayfa_keyw',
			fa_sayfa_keyw 	= '$fa_sayfa_keyw',
portkat 	= '$portkat',
			secenekHaber 	= '$secenekHaber',
			resim_baslik 	= '$resim_baslik',
			en_resim_baslik 	= '$en_resim_baslik',
			ar_resim_baslik 	= '$ar_resim_baslik',
			fa_resim_baslik 	= '$fa_resim_baslik',
			en_sayfa_adi    = '$en_sayfa_adi',
			fa_sayfa_adi    = '$fa_sayfa_adi',
			ar_sayfa_adi    = '$ar_sayfa_adi',
			en_sayfa_desc    = '$en_sayfa_desc',
			fa_sayfa_desc    = '$fa_sayfa_desc',
			ar_sayfa_desc    = '$ar_sayfa_desc',
			ar_sayfa_icerik    = '$ar_sayfa_icerik',
			fa_sayfa_icerik    = '$fa_sayfa_icerik',
			en_sayfa_icerik    = '$en_sayfa_icerik',
			sayfa_icerik 	= '$sayfa_icerik' WHERE sayfa_id='$sayfa_id'");
		require_once("app-upload/app.upload.php");
		if(strlen($dosya)>3){
			
			require_once("app-upload/sayfa_resim_edit.php");
		}
		if(strlen($dosya2)>3){
			require_once("app-upload/sayfa_foto_galeri.php");
		}
		if(strlen($dosya3)>3){
			
			require_once("app-upload/sayfa_resim_edit2.php");
		}
		if($update->rowCount() || $updateSuccess){
			echo 'basarili';
		}else{
			echo 'basarisiz';
		}

	}
}

#Sayfa Fotoğrafı Sil

if($_GET["p"]=="sayfa_foto_sil"){
	$id = p("id");
	$kontrol = $db->query("SELECT * FROM pageimages WHERE resim_id='$id'");
	if($kontrol->rowCount()){
		foreach($kontrol as $imgGetir){
			$buyukResim = "../images/sayfalar/big/".$imgGetir["img"];
			$kucukResim = "../images/sayfalar/thumb/".$imgGetir["img"];
			if(is_file($buyukResim)){unlink($buyukResim);}
			if(is_file($kucukResim)){unlink($kucukResim);}
		}
		$delete = $db->query("DELETE FROM pageimages WHERE resim_id='$id'");
		if($delete->rowCount()){
			echo 'basarili';
		}else{
			echo 'basarisiz';
		}
	}
}
#Toplu Sayfa Sil

if($_GET["p"]=="toplu_sayfa_sil"){
	@$sayfaPost = $_POST["id"];
	if(!$sayfaPost){
		echo 'bos-deger';
	}else{
		foreach($sayfaPost as $sayfaID){
			$kontrol = $db->query("SELECT * FROM sayfalar WHERE sayfa_id='$sayfaID'");
			if($kontrol->rowCount()){
				$imgKontrol = $db->query("SELECT * FROM pageimages WHERE pageId='$sayfaID'");
				if($imgKontrol->rowCount()){
					foreach($imgKontrol as $imgGetir){
						$imgID = $imgGetir["resim_id"];
						$buyukResim = "../images/sayfalar/big/".$imgGetir["img"];
						$kucukResim = "../images/sayfalar/thumb/".$imgGetir["img"];
						if(is_file($buyukResim)){unlink($buyukResim);}
						if(is_file($kucukResim)){unlink($kucukResim);}
						$deleteImg = $db->query("DELETE FROM pageimages WHERE resim_id='$imgID'");
					}
				}else{
					//
				}
				$delete = $db->query("DELETE FROM sayfalar WHERE sayfa_id='$sayfaID'");
			}else{

			}
		}
		echo 'basarili';
	}

}
#Tek Sayfa Sil 

if($_GET["p"]=="tek_sayfa_sil"){
	$id = p("id");
	$kontrol = $db->query("SELECT * FROM sayfalar WHERE sayfa_id='$id'");
	if($kontrol->rowCount()){
		$kontrolRow = $kontrol->fetch(PDO::FETCH_ASSOC);
		$buyukResim = "../images/sayfalar/big/".$kontrolRow["sayfa_resim"];
		$kucukResim = "../images/sayfalar/thumb/".$kontrolRow["sayfa_resim"];
		if(is_file($buyukResim)){unlink($buyukResim);}
		if(is_file($kucukResim)){unlink($kucukResim);}
		$delete = $db->query("DELETE FROM sayfalar WHERE sayfa_id='$id'");
		if($delete->rowCount()){
			echo 'basarili';
		}else{
			echo 'basarisiz';
		}
	}
}
if($_GET["p"]=="sayfaonay"){
	$id = p("id");
	$kontrol = $db->query("SELECT * FROM sayfalar WHERE sayfa_id='$id'");
	if($kontrol->rowCount()){
		$uyeRow = $kontrol->fetch(PDO::FETCH_ASSOC);
		$uyeDurum = $uyeRow["sayfa_durum"];
		if($uyeDurum==1){
			$update = $db->query("UPDATE sayfalar SET sayfa_durum=0 WHERE sayfa_id='$id'");
			if($update->rowCount()){
				echo 'yasaklama-basarili';exit();
			}
		}else{
			$update = $db->query("UPDATE sayfalar SET sayfa_durum=1 WHERE sayfa_id='$id'");
			if($update->rowCount()){
				echo 'yasak-kaldirildi';exit();
			}
		}
	}
}

?>