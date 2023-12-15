<?php
require_once('../ajanspenna/host/a.php');
require_once('../ajanspenna/host/f.php');

if(isset($_POST["anasayfa"])){

}elseif(isset($_POST["contact_form"])){
	$name = p("name");
	$email = p("email");
	$message = p("message");
	$gelen_ip = GetIP();
	if(empty($name) || empty($email) || empty($message)){
	?>
		<script>

			alert("Lütfen Tüm Alanları Doldururuz !");
			window.location="/";
		</script>
	<?php 
	}else{
		$ileti ="Merhaba Yönetici; <br>İletişim Formundan Bir Yeni Mesaj Alıdın. Detaylar aşağıdaki gibidir;";
		$ileti .=  "<br><p><strong><h4><u>Gönderilen Mesaj Detayları</u></h4></strong></p>";
		$ileti .= "<b>Ad Soyad :</b> ".$name."<br>";
		$ileti .= "<b>E-Posta  :</b> ".$email."<br>";
		$ileti .= "<b>Mesaj :</b> ".$message."<br>";
		$ileti .= "<h5><u>Bu mesaj <b>".$gelen_ip."</b> numaralı ip adresinden gönderildi !</u></h5>";
		require 'class.phpmailer.php';
		$mail = new PHPMailer();
		require 'mail_functions_2.php';
		if($mail->Send()){
		?>
			<script>
				alert("Başarılı Bir Şekilde Mesajınız İletildi !");
				window.location="/";
			</script>
			<?php
			die();
		}else{
		?>
			<script>
				alert("Mesajıız İletilirken Bir Sorun Oluştu !");
				window.location="/";
			</script>
			<?php
		}
	}
}