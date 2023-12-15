<?php
#Logout 
if($_GET["p"]=="logout"){
	session_destroy();
	go(ADMIN_URL."login.php");
}
##Login
if($_GET["p"]=="login"){
	$eposta   = p("username");
	$md5    = md5(p("password"));
	if(!$eposta || $eposta=="username" || !$md5 || $md5=="password"){
		echo '<div class="alert alert-danger"><strong>Boş Geçmeyin !</strong> Tüm alanların doldurulması zorunludur !</div>';
	}else{
		$query = $db->prepare("SELECT * FROM uyeler WHERE uye_eposta=:eposta && uye_sifre=:sifre");
		$query -> execute(array(
			"eposta"      => $eposta,
			"sifre"     => $md5
		));
		$query->rowCount();
		$row = $query->fetch(PDO::FETCH_ASSOC);
		if($query->rowCount()){
			
			$session = array(
				"login"     => true,
				"uye_id"    => $row["uye_id"],
				"uye_eposta"  => $row["uye_eposta"],
				"uye_adsoyad"	=> $row["uye_ad"]." ".$row["uye_soyad"]
			);
			session_olustur($session);
			echo '<div class="alert alert-success">
			<strong>Başarılı Giriş !</strong> Yönetim Panelinize Yönlendiriliyorsunuz !</div>';
			echo '<script type="text/javascript">window.location.reload();</script>';
		}else{
			$query = $db->prepare("SELECT * FROM uyeler WHERE uye_eposta=:eposta ");
			$query -> execute(array(
				"eposta"      => $eposta
			));
			$query->rowCount();
			$row = $query->fetch(PDO::FETCH_ASSOC);
			if($query->rowCount()){

				echo '<div class="alert alert-warning"><strong>Giriş Yapılamadı !</strong> Lütfen şifreyi doğru giriniz !</div>';
			}else{
				echo '<div class="alert alert-warning"><strong>Giriş Yapılamadı !</strong> Geçersiz Kullanıcı Adı !</div>';
			}
		}
	}
}else{
	if(empty($_SESSION["login"])){die("Erisim izniniz yok;");}
}
?>