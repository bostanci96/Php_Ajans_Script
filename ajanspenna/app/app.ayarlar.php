<?php
## Logolar 
if($_GET["p"]=="logolar"){
	
	$logo 	= $_FILES["logo"]["tmp_name"][0];
	$favicon 	= $_FILES["favicon"]["tmp_name"][0];
	$footerLogo 	= $_FILES["footer_logo"]["tmp_name"][0];
	if(empty($logo) && empty($footerLogo) && empty($favicon)){
		echo "bos-deger";
	}else{
		require_once("app-upload/app.upload.php");
		if(strlen($logo)>3){
			require_once("app-upload/logo_edit.php");
		}
		if(strlen($footerLogo)>3){
			require_once("app-upload/footer_logo_edit.php");
		}
		if(strlen($favicon)>3){
			require_once("app-upload/favicon.php");
		}
		if($updateSuccess || $updateSuccess2 || $updateSuccess3){
			echo "basarili";
		}else{
			echo "basarisiz";
		}
	}
}
if($_GET["p"]=="seo_ayarlari"){
	$ayar_id 		= p("ayar_id");
	$site_title 	= p("site_title");
	$site_desc 		= p("site_desc");
	$site_keyw 		= p("site_keyw");

	$en_site_title 	= p("en_site_title");
	$en_site_desc 		= p("en_site_desc");
	$en_site_keyw 		= p("en_site_keyw");

	$ar_site_title 	= p("ar_site_title");
	$ar_site_desc 		= p("ar_site_desc");
	$ar_site_keyw 		= p("ar_site_keyw");

	$fa_site_title 	= p("fa_site_title");
	$fa_site_desc 		= p("fa_site_desc");
	$fa_site_keyw 		= p("fa_site_keyw");

	$main_tablo 	= p("main_tablo");
	if(!$ayar_id  || !$site_title || !$site_desc || !$site_keyw){
		echo 'bos-deger';
	}else{

		$updateSeo = $db->query("UPDATE ayarlar SET 
			site_title	= '$site_title',
			site_desc 	= '$site_desc',
			en_site_title	= '$en_site_title',
			en_site_desc 	= '$en_site_desc',
			en_site_keyw 	= '$en_site_keyw',
			ar_site_title	= '$ar_site_title',
			ar_site_desc 	= '$ar_site_desc',
			ar_site_keyw 	= '$ar_site_keyw',
			fa_site_title	= '$fa_site_title',
			fa_site_desc 	= '$fa_site_desc',
			fa_site_keyw 	= '$fa_site_keyw',
			main_tablo  = '$main_tablo',
			site_keyw 	= '$site_keyw' WHERE ayar_id='$ayar_id'");

		if($updateSeo->rowCount()){
			echo 'basarili';
		}else{
			echo 'degisiklik-yok';
		}
	}
}
if($_GET["p"]=="anasayfa_ayarlari"){
	$baslik1 		= p("baslik1");
	$desc1 			= p("desc1");
	$baslik2 		= p("baslik2");
	$desc2 			= p("desc2");
	$baslik3 		= p("baslik3");
	$desc3 			= p("desc3");
	$baslik4 		= p("baslik4");
	$desc4 			= p("desc4");
	$baslik5 		= p("baslik5");
	$desc5 			= p("desc5");
	$baslik6 		= p("baslik6");
	$desc6 			= p("desc6");

	$update = $db->query("UPDATE bloklar SET
		baslik1 		= '$baslik1',
		desc1 		= '$desc1',
		baslik2 		= '$baslik2',
		desc2 		= '$desc2',
		baslik3 		= '$baslik3',
		desc3 		= '$desc3',
		baslik4 		= '$baslik4',
		desc4 		= '$desc4',
		baslik5 		= '$baslik5',
		desc5 		= '$desc5',
		baslik6 		= '$baslik6',
		desc6 		= '$desc6'
		WHERE blok_id='1'");
	if($update->rowCount()){
		echo 'basarili';
	}else{
		echo 'basarisiz';
	}
}
if($_GET["p"]=="en_anasayfa_ayarlari"){
	$baslik1 		= p("baslik1");
	$desc1 			= p("desc1");
	$baslik2 		= p("baslik2");
	$desc2 			= p("desc2");
	$baslik3 		= p("baslik3");
	$desc3 			= p("desc3");
	$baslik4 		= p("baslik4");
	$desc4 			= p("desc4");
	$baslik5 		= p("baslik5");
	$desc5 			= p("desc5");
	$baslik6 		= p("baslik6");
	$desc6 			= p("desc6");

	$update = $db->query("UPDATE bloklar_en SET
		baslik1 		= '$baslik1',
		desc1 		= '$desc1',
		baslik2 		= '$baslik2',
		desc2 		= '$desc2',
		baslik3 		= '$baslik3',
		desc3 		= '$desc3',
		baslik4 		= '$baslik4',
		desc4 		= '$desc4',
		baslik5 		= '$baslik5',
		desc5 		= '$desc5',
		baslik6 		= '$baslik6',
		desc6 		= '$desc6'
		WHERE blok_id='1'");
	if($update->rowCount()){
		echo 'basarili';
	}else{
		echo 'basarisiz';
	}
}
if($_GET["p"]=="ar_anasayfa_ayarlari"){
	$baslik1 		= p("baslik1");
	$desc1 			= p("desc1");
	$baslik2 		= p("baslik2");
	$desc2 			= p("desc2");
	$baslik3 		= p("baslik3");
	$desc3 			= p("desc3");
	$baslik4 		= p("baslik4");
	$desc4 			= p("desc4");
	$baslik5 		= p("baslik5");
	$desc5 			= p("desc5");
	$baslik6 		= p("baslik6");
	$desc6 			= p("desc6");

	$update = $db->query("UPDATE bloklar_ar SET
		baslik1 		= '$baslik1',
		desc1 		= '$desc1',
		baslik2 		= '$baslik2',
		desc2 		= '$desc2',
		baslik3 		= '$baslik3',
		desc3 		= '$desc3',
		baslik4 		= '$baslik4',
		desc4 		= '$desc4',
		baslik5 		= '$baslik5',
		desc5 		= '$desc5',
		baslik6 		= '$baslik6',
		desc6 		= '$desc6'
		WHERE blok_id='1'");
	if($update->rowCount()){
		echo 'basarili';
	}else{
		echo 'basarisiz';
	}
}

if($_GET["p"]=="fa_anasayfa_ayarlari"){
	$baslik1 		= p("baslik1");
	$desc1 			= p("desc1");
	$baslik2 		= p("baslik2");
	$desc2 			= p("desc2");
	$baslik3 		= p("baslik3");
	$desc3 			= p("desc3");
	$baslik4 		= p("baslik4");
	$desc4 			= p("desc4");
	$baslik5 		= p("baslik5");
	$desc5 			= p("desc5");
	$baslik6 		= p("baslik6");
	$desc6 			= p("desc6");
	$update = $db->query("UPDATE bloklar_fa SET
		baslik1 		= '$baslik1',
		desc1 		= '$desc1',
		baslik2 		= '$baslik2',
		desc2 		= '$desc2',
		baslik3 		= '$baslik3',
		desc3 		= '$desc3',
		baslik4 		= '$baslik4',
		desc4 		= '$desc4',
		baslik5 		= '$baslik5',
		desc5 		= '$desc5',
		baslik6 		= '$baslik6',
		desc6 		= '$desc6'
		WHERE blok_id='1'");
	if($update->rowCount()){
		echo 'basarili';
	}else{
		echo 'basarisiz';
	}
}




if($_GET["p"]=="dil_anasayfa_ayarlari"){
	$baslik1 		= p("baslik1");
	$desc1 			= p("desc1");
	$baslik2 		= p("baslik2");
	$desc2 			= p("desc2");
	$baslik3 		= p("baslik3");
	$desc3 			= p("desc3");
	$baslik4 		= p("baslik4");
	$desc4 			= p("desc4");
	$baslik5 		= p("baslik5");
	$desc5 			= p("desc5");
	$baslik6 		= p("baslik6");
	$desc6 			= p("desc6");
	$baslik7 		= p("baslik7");
	$desc7 			= p("desc7");
	$baslik8 		= p("baslik8");
	$desc8 			= p("desc8");
	$baslik9 		= p("baslik9");
	$desc9 			= p("desc9");
	$baslik10 		= p("baslik10");
	$desc10 			= p("desc10");
	$baslik11 		= p("baslik11");
	$desc11 			= p("desc11");
	$baslik12 		= p("baslik12");
	$desc12 			= p("desc12");
	$baslik13 		= p("baslik13");
	$desc13 			= p("desc13");
	$baslik14 		= p("baslik14");
	$desc14 			= p("desc14");
	$baslik15 		= p("baslik15");
	$desc15 			= p("desc15");
	$baslik16 		= p("baslik16");
	$desc16 			= p("desc16");
	$baslik17 		= p("baslik17");
	$desc17 			= p("desc17");
	$baslik18 		= p("baslik18");
	$desc18 			= p("desc18");
	$baslik19 		= p("baslik19");
	$desc19 			= p("desc19");
	$baslik20 		= p("baslik20");
	$desc20 			= p("desc20");
	$baslik21 		= p("baslik21");
	$desc21 			= p("desc21");
	$baslik22 		= p("baslik22");
	$desc22			= p("desc22");
	$baslik23 		= p("baslik23");
	$desc23 			= p("desc23");
	$baslik24 		= p("baslik24");
	$desc24 			= p("desc24");
	$baslik25 		= p("baslik25");
	$desc25 			= p("desc25");
	$baslik26		= p("baslik26");
	$desc26 			= p("desc26");
	$baslik27 		= p("baslik27");
	$desc27 			= p("desc27");
	$baslik28 		= p("baslik28");
	$desc28 			= p("desc28");
	$baslik29 		= p("baslik29");
	$desc29 			= p("desc29");
	$baslik30 		= p("baslik30");
	$desc30 			= p("desc30");
	$baslik31 		= p("baslik31");
	$desc31 			= p("desc31");
	$baslik32 		= p("baslik32");
	$desc32 			= p("desc32");
	$baslik33 		= p("baslik33");
	$desc33 			= p("desc33");
	$baslik34 		= p("baslik34");
	$desc34 			= p("desc34");
	$baslik35 		= p("baslik35");
	$desc35 			= p("desc35");
	$baslik36 		= p("baslik36");
	$desc36 			= p("desc36");
	$baslik37 		= p("baslik37");
	$desc37 			= p("desc37");
	$baslik38 		= p("baslik38");
	$desc38 			= p("desc38");
	$baslik39 		= p("baslik39");
	$desc39 			= p("desc39");
	$baslik40 		= p("baslik40");
	$desc40 			= p("desc40");
	$baslik41 		= p("baslik41");
	$desc41 			= p("desc41");
	$baslik42 		= p("baslik42");
	$desc42 			= p("desc42");
	$baslik43 		= p("baslik43");
	$desc43 			= p("desc43");
	$baslik44 		= p("baslik44");
	$desc44 			= p("desc44");
	$baslik45 		= p("baslik45");
	$desc45 			= p("desc45");
	$baslik46 		= p("baslik46");
	$desc46 			= p("desc46");
	$baslik47 		= p("baslik47");
	$desc47 			= p("desc47");
	$update = $db->query("UPDATE dil_bloklar SET
		baslik1 		= '$baslik1',
		desc1 		= '$desc1',
		baslik2 		= '$baslik2',
		desc2 		= '$desc2',
		baslik3 		= '$baslik3',
		desc3 		= '$desc3',
		baslik4 		= '$baslik4',
		desc4 		= '$desc4',
		baslik5 		= '$baslik5',
		desc5 		= '$desc5',
		baslik6 		= '$baslik6',
		desc6 		= '$desc6',
		baslik7 		= '$baslik7',
		desc7 		= '$desc7',
		baslik8 		= '$baslik8',
		desc8 		= '$desc8',
		baslik9 		= '$baslik9',
		desc9 		= '$desc9',
		baslik10 		= '$baslik10',
		desc10 		= '$desc10',
		baslik11 		= '$baslik11',
		desc11 		= '$desc11',
		baslik12 		= '$baslik12',
		desc12 		= '$desc12',
		baslik13 		= '$baslik13',
		desc13 		= '$desc13',
		baslik14 		= '$baslik14',
		desc14 		= '$desc14',
		baslik15 		= '$baslik15',
		desc15 		= '$desc15',
		baslik16 		= '$baslik16',
		desc16 		= '$desc16',
		baslik17 		= '$baslik17',
		desc17 		= '$desc17',
		baslik18 		= '$baslik18',
		desc18 		= '$desc18',
		baslik19 		= '$baslik19',
		desc19 		= '$desc19',
		baslik20 		= '$baslik20',
		desc20 		= '$desc20',
		baslik21 		= '$baslik21',
		desc21 		= '$desc21',
		baslik22 		= '$baslik22',
		desc22 		= '$desc22',
		baslik23 		= '$baslik23',
		desc23 		= '$desc23',
		baslik24 		= '$baslik24',
		desc24 		= '$desc24',
		baslik25 		= '$baslik25',
		desc25		= '$desc25',
		baslik26 		= '$baslik26',
		desc26		= '$desc26',
		baslik27 		= '$baslik27',
		desc27		= '$desc27',
		baslik28 		= '$baslik28',
		desc28 = '$desc28',
		baslik29 = '$baslik29',
		desc29 = '$desc29',
		baslik30 = '$baslik30',
		desc30 = '$desc30',
		baslik31 = '$baslik31',
		desc31 = '$desc31',
		baslik32 = '$baslik32',
		desc32 = '$desc32',
		baslik33 = '$baslik33',
		desc33 = '$desc33',
		baslik34 = '$baslik34',
		desc34 = '$desc34',
		baslik35 = '$baslik35',
		desc35 = '$desc35',
		baslik36 = '$baslik36',
		desc36 = '$desc36',
		baslik37 = '$baslik37',
		desc37 = '$desc37',
		baslik38 = '$baslik38',
		desc38 = '$desc38',
		baslik39 = '$baslik39',
		desc39 = '$desc39',
		baslik40 = '$baslik40',
		desc40 = '$desc40',
		baslik41 = '$baslik41',
		desc41 = '$desc41',
		baslik42 = '$baslik42',
		desc42 = '$desc42',
		baslik43 = '$baslik43',
		desc43 = '$desc43',
		baslik44 = '$baslik44',
		desc44 = '$desc44',
		baslik45 = '$baslik45',
		desc45 = '$desc45',
		baslik46 = '$baslik46',
		desc46 = '$desc46',
		baslik47 = '$baslik47',
		desc47 = '$desc47'
		WHERE blok_id='1'");
	if($update->rowCount()){
		echo 'basarili';
	}else{
		echo 'basarisiz';
	}
}
if($_GET["p"]=="dil_en_anasayfa_ayarlari"){
	$baslik1 		= p("baslik1");
	$desc1 			= p("desc1");
	$baslik2 		= p("baslik2");
	$desc2 			= p("desc2");
	$baslik3 		= p("baslik3");
	$desc3 			= p("desc3");
	$baslik4 		= p("baslik4");
	$desc4 			= p("desc4");
	$baslik5 		= p("baslik5");
	$desc5 			= p("desc5");
	$baslik6 		= p("baslik6");
	$desc6 			= p("desc6");
	$baslik7 		= p("baslik7");
	$desc7 			= p("desc7");
	$baslik8 		= p("baslik8");
	$desc8 			= p("desc8");
	$baslik9 		= p("baslik9");
	$desc9 			= p("desc9");
	$baslik10 		= p("baslik10");
	$desc10 			= p("desc10");
	$baslik11 		= p("baslik11");
	$desc11 			= p("desc11");
	$baslik12 		= p("baslik12");
	$desc12 			= p("desc12");
	$baslik13 		= p("baslik13");
	$desc13 			= p("desc13");
	$baslik14 		= p("baslik14");
	$desc14 			= p("desc14");
	$baslik15 		= p("baslik15");
	$desc15 			= p("desc15");
	$baslik16 		= p("baslik16");
	$desc16 			= p("desc16");
	$baslik17 		= p("baslik17");
	$desc17 			= p("desc17");
	$baslik18 		= p("baslik18");
	$desc18 			= p("desc18");
	$baslik19 		= p("baslik19");
	$desc19 			= p("desc19");
	$baslik20 		= p("baslik20");
	$desc20 			= p("desc20");
	$baslik21 		= p("baslik21");
	$desc21 			= p("desc21");
	$baslik22 		= p("baslik22");
	$desc22			= p("desc22");
	$baslik23 		= p("baslik23");
	$desc23 			= p("desc23");
	$baslik24 		= p("baslik24");
	$desc24 			= p("desc24");
	$baslik25 		= p("baslik25");
	$desc25 			= p("desc25");
	$baslik26		= p("baslik26");
	$desc26 			= p("desc26");
	$baslik27 		= p("baslik27");
	$desc27 			= p("desc27");
	$baslik28 		= p("baslik28");
	$desc28 			= p("desc28");
	$baslik29 		= p("baslik29");
	$desc29 			= p("desc29");
	$baslik30 		= p("baslik30");
	$desc30 			= p("desc30");
	$baslik31 		= p("baslik31");
	$desc31 			= p("desc31");
	$baslik32 		= p("baslik32");
	$desc32 			= p("desc32");
	$baslik33 		= p("baslik33");
	$desc33 			= p("desc33");
	$baslik34 		= p("baslik34");
	$desc34 			= p("desc34");
	$baslik35 		= p("baslik35");
	$desc35 			= p("desc35");
	$baslik36 		= p("baslik36");
	$desc36 			= p("desc36");
	$baslik37 		= p("baslik37");
	$desc37 			= p("desc37");
	$baslik38 		= p("baslik38");
	$desc38 			= p("desc38");
	$baslik39 		= p("baslik39");
	$desc39 			= p("desc39");
	$baslik40 		= p("baslik40");
	$desc40 			= p("desc40");
	$baslik41 		= p("baslik41");
	$desc41 			= p("desc41");
	$baslik42 		= p("baslik42");
	$desc42 			= p("desc42");
	$baslik43 		= p("baslik43");
	$desc43 			= p("desc43");
	$baslik44 		= p("baslik44");
	$desc44 			= p("desc44");
	$baslik45 		= p("baslik45");
	$desc45 			= p("desc45");
	$baslik46 		= p("baslik46");
	$desc46 			= p("desc46");
	$baslik47 		= p("baslik47");
	$desc47 			= p("desc47");
	$update = $db->query("UPDATE dil_bloklar_en SET
		baslik1 		= '$baslik1',
		desc1 		= '$desc1',
		baslik2 		= '$baslik2',
		desc2 		= '$desc2',
		baslik3 		= '$baslik3',
		desc3 		= '$desc3',
		baslik4 		= '$baslik4',
		desc4 		= '$desc4',
		baslik5 		= '$baslik5',
		desc5 		= '$desc5',
		baslik6 		= '$baslik6',
		desc6 		= '$desc6',
		baslik7 		= '$baslik7',
		desc7 		= '$desc7',
		baslik8 		= '$baslik8',
		desc8 		= '$desc8',
		baslik9 		= '$baslik9',
		desc9 		= '$desc9',
		baslik10 		= '$baslik10',
		desc10 		= '$desc10',
		baslik11 		= '$baslik11',
		desc11 		= '$desc11',
		baslik12 		= '$baslik12',
		desc12 		= '$desc12',
		baslik13 		= '$baslik13',
		desc13 		= '$desc13',
		baslik14 		= '$baslik14',
		desc14 		= '$desc14',
		baslik15 		= '$baslik15',
		desc15 		= '$desc15',
		baslik16 		= '$baslik16',
		desc16 		= '$desc16',
		baslik17 		= '$baslik17',
		desc17 		= '$desc17',
		baslik18 		= '$baslik18',
		desc18 		= '$desc18',
		baslik19 		= '$baslik19',
		desc19 		= '$desc19',
		baslik20 		= '$baslik20',
		desc20 		= '$desc20',
		baslik21 		= '$baslik21',
		desc21 		= '$desc21',
		baslik22 		= '$baslik22',
		desc22 		= '$desc22',
		baslik23 		= '$baslik23',
		desc23 		= '$desc23',
		baslik24 		= '$baslik24',
		desc24 		= '$desc24',
		baslik25 		= '$baslik25',
		desc25		= '$desc25',
		baslik26 		= '$baslik26',
		desc26		= '$desc26',
		baslik27 		= '$baslik27',
		desc27		= '$desc27',
		baslik28 		= '$baslik28',
		desc28 = '$desc28',
		baslik29 = '$baslik29',
		desc29 = '$desc29',
		baslik30 = '$baslik30',
		desc30 = '$desc30',
		baslik31 = '$baslik31',
		desc31 = '$desc31',
		baslik32 = '$baslik32',
		desc32 = '$desc32',
		baslik33 = '$baslik33',
		desc33 = '$desc33',
		baslik34 = '$baslik34',
		desc34 = '$desc34',
		baslik35 = '$baslik35',
		desc35 = '$desc35',
		baslik36 = '$baslik36',
		desc36 = '$desc36',
		baslik37 = '$baslik37',
		desc37 = '$desc37',
		baslik38 = '$baslik38',
		desc38 = '$desc38',
		baslik39 = '$baslik39',
		desc39 = '$desc39',
		baslik40 = '$baslik40',
		desc40 = '$desc40',
		baslik41 = '$baslik41',
		desc41 = '$desc41',
		baslik42 = '$baslik42',
		desc42 = '$desc42',
		baslik43 = '$baslik43',
		desc43 = '$desc43',
		baslik44 = '$baslik44',
		desc44 = '$desc44',
		baslik45 = '$baslik45',
		desc45 = '$desc45',
		baslik46 = '$baslik46',
		desc46 = '$desc46',
		baslik47 = '$baslik47',
		desc47 = '$desc47'

		WHERE blok_id='1'");
	if($update->rowCount()){
		echo 'basarili';
	}else{
		echo 'basarisiz';
	}
}
if($_GET["p"]=="dil_ar_anasayfa_ayarlari"){
	$baslik1 		= p("baslik1");
	$desc1 			= p("desc1");
	$baslik2 		= p("baslik2");
	$desc2 			= p("desc2");
	$baslik3 		= p("baslik3");
	$desc3 			= p("desc3");
	$baslik4 		= p("baslik4");
	$desc4 			= p("desc4");
	$baslik5 		= p("baslik5");
	$desc5 			= p("desc5");
	$baslik6 		= p("baslik6");
	$desc6 			= p("desc6");
	$baslik7 		= p("baslik7");
	$desc7 			= p("desc7");
	$baslik8 		= p("baslik8");
	$desc8 			= p("desc8");
	$baslik9 		= p("baslik9");
	$desc9 			= p("desc9");
	$baslik10 		= p("baslik10");
	$desc10 			= p("desc10");
	$baslik11 		= p("baslik11");
	$desc11 			= p("desc11");
	$baslik12 		= p("baslik12");
	$desc12 			= p("desc12");
	$baslik13 		= p("baslik13");
	$desc13 			= p("desc13");
	$baslik14 		= p("baslik14");
	$desc14 			= p("desc14");
	$baslik15 		= p("baslik15");
	$desc15 			= p("desc15");
	$baslik16 		= p("baslik16");
	$desc16 			= p("desc16");
	$baslik17 		= p("baslik17");
	$desc17 			= p("desc17");
	$baslik18 		= p("baslik18");
	$desc18 			= p("desc18");
	$baslik19 		= p("baslik19");
	$desc19 			= p("desc19");
	$baslik20 		= p("baslik20");
	$desc20 			= p("desc20");
	$baslik21 		= p("baslik21");
	$desc21 			= p("desc21");
	$baslik22 		= p("baslik22");
	$desc22			= p("desc22");
	$baslik23 		= p("baslik23");
	$desc23 			= p("desc23");
	$baslik24 		= p("baslik24");
	$desc24 			= p("desc24");
	$baslik25 		= p("baslik25");
	$desc25 			= p("desc25");
	$baslik26		= p("baslik26");
	$desc26 			= p("desc26");
	$baslik27 		= p("baslik27");
	$desc27 			= p("desc27");
	$baslik28 		= p("baslik28");
	$desc28 			= p("desc28");
	$baslik29 		= p("baslik29");
	$desc29 			= p("desc29");
	$baslik30 		= p("baslik30");
	$desc30 			= p("desc30");
	$baslik31 		= p("baslik31");
	$desc31 			= p("desc31");
	$baslik32 		= p("baslik32");
	$desc32 			= p("desc32");
	$baslik33 		= p("baslik33");
	$desc33 			= p("desc33");
	$baslik34 		= p("baslik34");
	$desc34 			= p("desc34");
	$baslik35 		= p("baslik35");
	$desc35 			= p("desc35");
	$baslik36 		= p("baslik36");
	$desc36 			= p("desc36");
	$baslik37 		= p("baslik37");
	$desc37 			= p("desc37");
	$baslik38 		= p("baslik38");
	$desc38 			= p("desc38");
	$baslik39 		= p("baslik39");
	$desc39 			= p("desc39");
	$baslik40 		= p("baslik40");
	$desc40 			= p("desc40");
	$baslik41 		= p("baslik41");
	$desc41 			= p("desc41");
	$baslik42 		= p("baslik42");
	$desc42 			= p("desc42");
	$baslik43 		= p("baslik43");
	$desc43 			= p("desc43");
	$baslik44 		= p("baslik44");
	$desc44 			= p("desc44");
	$baslik45 		= p("baslik45");
	$desc45 			= p("desc45");
	$baslik46 		= p("baslik46");
	$desc46 			= p("desc46");
	$baslik47 		= p("baslik47");
	$desc47 			= p("desc47");
	$update = $db->query("UPDATE dil_bloklar_ar SET
		baslik1 		= '$baslik1',
		desc1 		= '$desc1',
		baslik2 		= '$baslik2',
		desc2 		= '$desc2',
		baslik3 		= '$baslik3',
		desc3 		= '$desc3',
		baslik4 		= '$baslik4',
		desc4 		= '$desc4',
		baslik5 		= '$baslik5',
		desc5 		= '$desc5',
		baslik6 		= '$baslik6',
		desc6 		= '$desc6',
		baslik7 		= '$baslik7',
		desc7 		= '$desc7',
		baslik8 		= '$baslik8',
		desc8 		= '$desc8',
		baslik9 		= '$baslik9',
		desc9 		= '$desc9',
		baslik10 		= '$baslik10',
		desc10 		= '$desc10',
		baslik11 		= '$baslik11',
		desc11 		= '$desc11',
		baslik12 		= '$baslik12',
		desc12 		= '$desc12',
		baslik13 		= '$baslik13',
		desc13 		= '$desc13',
		baslik14 		= '$baslik14',
		desc14 		= '$desc14',
		baslik15 		= '$baslik15',
		desc15 		= '$desc15',
		baslik16 		= '$baslik16',
		desc16 		= '$desc16',
		baslik17 		= '$baslik17',
		desc17 		= '$desc17',
		baslik18 		= '$baslik18',
		desc18 		= '$desc18',
		baslik19 		= '$baslik19',
		desc19 		= '$desc19',
		baslik20 		= '$baslik20',
		desc20 		= '$desc20',
		baslik21 		= '$baslik21',
		desc21 		= '$desc21',
		baslik22 		= '$baslik22',
		desc22 		= '$desc22',
		baslik23 		= '$baslik23',
		desc23 		= '$desc23',
		baslik24 		= '$baslik24',
		desc24 		= '$desc24',
		baslik25 		= '$baslik25',
		desc25		= '$desc25',
		baslik26 		= '$baslik26',
		desc26		= '$desc26',
		baslik27 		= '$baslik27',
		desc27		= '$desc27',
		baslik28 		= '$baslik28',
		desc28 = '$desc28',
		baslik29 = '$baslik29',
		desc29 = '$desc29',
		baslik30 = '$baslik30',
		desc30 = '$desc30',
		baslik31 = '$baslik31',
		desc31 = '$desc31',
		baslik32 = '$baslik32',
		desc32 = '$desc32',
		baslik33 = '$baslik33',
		desc33 = '$desc33',
		baslik34 = '$baslik34',
		desc34 = '$desc34',
		baslik35 = '$baslik35',
		desc35 = '$desc35',
		baslik36 = '$baslik36',
		desc36 = '$desc36',
		baslik37 = '$baslik37',
		desc37 = '$desc37',
		baslik38 = '$baslik38',
		desc38 = '$desc38',
		baslik39 = '$baslik39',
		desc39 = '$desc39',
		baslik40 = '$baslik40',
		desc40 = '$desc40',
		baslik41 = '$baslik41',
		desc41 = '$desc41',
		baslik42 = '$baslik42',
		desc42 = '$desc42',
		baslik43 = '$baslik43',
		desc43 = '$desc43',
		baslik44 = '$baslik44',
		desc44 = '$desc44',
		baslik45 = '$baslik45',
		desc45 = '$desc45',
		baslik46 = '$baslik46',
		desc46 = '$desc46',
		baslik47 = '$baslik47',
		desc47 = '$desc47'
		WHERE blok_id='1'");
	if($update->rowCount()){
		echo 'basarili';
	}else{
		echo 'basarisiz';
	}
}

if($_GET["p"]=="dil_fa_anasayfa_ayarlari"){
	$baslik1 		= p("baslik1");
	$desc1 			= p("desc1");
	$baslik2 		= p("baslik2");
	$desc2 			= p("desc2");
	$baslik3 		= p("baslik3");
	$desc3 			= p("desc3");
	$baslik4 		= p("baslik4");
	$desc4 			= p("desc4");
	$baslik5 		= p("baslik5");
	$desc5 			= p("desc5");
	$baslik6 		= p("baslik6");
	$desc6 			= p("desc6");
	$baslik7 		= p("baslik7");
	$desc7 			= p("desc7");
	$baslik8 		= p("baslik8");
	$desc8 			= p("desc8");
	$baslik9 		= p("baslik9");
	$desc9 			= p("desc9");
	$baslik10 		= p("baslik10");
	$desc10 			= p("desc10");
	$baslik11 		= p("baslik11");
	$desc11 			= p("desc11");
	$baslik12 		= p("baslik12");
	$desc12 			= p("desc12");
	$baslik13 		= p("baslik13");
	$desc13 			= p("desc13");
	$baslik14 		= p("baslik14");
	$desc14 			= p("desc14");
	$baslik15 		= p("baslik15");
	$desc15 			= p("desc15");
	$baslik16 		= p("baslik16");
	$desc16 			= p("desc16");
	$baslik17 		= p("baslik17");
	$desc17 			= p("desc17");
	$baslik18 		= p("baslik18");
	$desc18 			= p("desc18");
	$baslik19 		= p("baslik19");
	$desc19 			= p("desc19");
	$baslik20 		= p("baslik20");
	$desc20 			= p("desc20");
	$baslik21 		= p("baslik21");
	$desc21 			= p("desc21");
	$baslik22 		= p("baslik22");
	$desc22			= p("desc22");
	$baslik23 		= p("baslik23");
	$desc23 			= p("desc23");
	$baslik24 		= p("baslik24");
	$desc24 			= p("desc24");
	$baslik25 		= p("baslik25");
	$desc25 			= p("desc25");
	$baslik26		= p("baslik26");
	$desc26 			= p("desc26");
	$baslik27 		= p("baslik27");
	$desc27 			= p("desc27");
	$baslik28 		= p("baslik28");
	$desc28 			= p("desc28");
	$baslik29 		= p("baslik29");
	$desc29 			= p("desc29");
	$baslik30 		= p("baslik30");
	$desc30 			= p("desc30");
	$baslik31 		= p("baslik31");
	$desc31 			= p("desc31");
	$baslik32 		= p("baslik32");
	$desc32 			= p("desc32");
	$baslik33 		= p("baslik33");
	$desc33 			= p("desc33");
	$baslik34 		= p("baslik34");
	$desc34 			= p("desc34");
	$baslik35 		= p("baslik35");
	$desc35 			= p("desc35");
	$baslik36 		= p("baslik36");
	$desc36 			= p("desc36");
	$baslik37 		= p("baslik37");
	$desc37 			= p("desc37");
	$baslik38 		= p("baslik38");
	$desc38 			= p("desc38");
	$baslik39 		= p("baslik39");
	$desc39 			= p("desc39");
	$baslik40 		= p("baslik40");
	$desc40 			= p("desc40");
	$baslik41 		= p("baslik41");
	$desc41 			= p("desc41");
	$baslik42 		= p("baslik42");
	$desc42 			= p("desc42");
	$baslik43 		= p("baslik43");
	$desc43 			= p("desc43");
	$baslik44 		= p("baslik44");
	$desc44 			= p("desc44");
	$baslik45 		= p("baslik45");
	$desc45 			= p("desc45");
	$baslik46 		= p("baslik46");
	$desc46 			= p("desc46");
	$baslik47 		= p("baslik47");
	$desc47 			= p("desc47");
	$update = $db->query("UPDATE dil_bloklar_fa SET
		baslik1 		= '$baslik1',
		desc1 		= '$desc1',
		baslik2 		= '$baslik2',
		desc2 		= '$desc2',
		baslik3 		= '$baslik3',
		desc3 		= '$desc3',
		baslik4 		= '$baslik4',
		desc4 		= '$desc4',
		baslik5 		= '$baslik5',
		desc5 		= '$desc5',
		baslik6 		= '$baslik6',
		desc6 		= '$desc6',
		baslik7 		= '$baslik7',
		desc7 		= '$desc7',
		baslik8 		= '$baslik8',
		desc8 		= '$desc8',
		baslik9 		= '$baslik9',
		desc9 		= '$desc9',
		baslik10 		= '$baslik10',
		desc10 		= '$desc10',
		baslik11 		= '$baslik11',
		desc11 		= '$desc11',
		baslik12 		= '$baslik12',
		desc12 		= '$desc12',
		baslik13 		= '$baslik13',
		desc13 		= '$desc13',
		baslik14 		= '$baslik14',
		desc14 		= '$desc14',
		baslik15 		= '$baslik15',
		desc15 		= '$desc15',
		baslik16 		= '$baslik16',
		desc16 		= '$desc16',
		baslik17 		= '$baslik17',
		desc17 		= '$desc17',
		baslik18 		= '$baslik18',
		desc18 		= '$desc18',
		baslik19 		= '$baslik19',
		desc19 		= '$desc19',
		baslik20 		= '$baslik20',
		desc20 		= '$desc20',
		baslik21 		= '$baslik21',
		desc21 		= '$desc21',
		baslik22 		= '$baslik22',
		desc22 		= '$desc22',
		baslik23 		= '$baslik23',
		desc23 		= '$desc23',
		baslik24 		= '$baslik24',
		desc24 		= '$desc24',
		baslik25 		= '$baslik25',
		desc25		= '$desc25',
		baslik26 		= '$baslik26',
		desc26		= '$desc26',
		baslik27 		= '$baslik27',
		desc27		= '$desc27',
		baslik28 		= '$baslik28',
		desc28 = '$desc28',
		baslik29 = '$baslik29',
		desc29 = '$desc29',
		baslik30 = '$baslik30',
		desc30 = '$desc30',
		baslik31 = '$baslik31',
		desc31 = '$desc31',
		baslik32 = '$baslik32',
		desc32 = '$desc32',
		baslik33 = '$baslik33',
		desc33 = '$desc33',
		baslik34 = '$baslik34',
		desc34 = '$desc34',
		baslik35 = '$baslik35',
		desc35 = '$desc35',
		baslik36 = '$baslik36',
		desc36 = '$desc36',
		baslik37 = '$baslik37',
		desc37 = '$desc37',
		baslik38 = '$baslik38',
		desc38 = '$desc38',
		baslik39 = '$baslik39',
		desc39 = '$desc39',
		baslik40 = '$baslik40',
		desc40 = '$desc40',
		baslik41 = '$baslik41',
		desc41 = '$desc41',
		baslik42 = '$baslik42',
		desc42 = '$desc42',
		baslik43 = '$baslik43',
		desc43 = '$desc43',
		baslik44 = '$baslik44',
		desc44 = '$desc44',
		baslik45 = '$baslik45',
		desc45 = '$desc45',
		baslik46 = '$baslik46',
		desc46 = '$desc46',
		baslik47 = '$baslik47',
		desc47 = '$desc47'
		WHERE blok_id='1'");
	if($update->rowCount()){
		echo 'basarili';
	}else{
		echo 'basarisiz';
	}
}

if($_GET["p"]=="iletisim_smtp"){
	$ayar_id 		= p("ayar_id");
	$gemail 			= p("gemail");
	$gsmtp 		= p("gsmtp");
	$gport 			= p("gport");
	$gmailkullanici 		= p("gmailkullanici");
	$gmailkullanicisifre	= p("gmailkullanicisifre");
	if(!$ayar_id || !$gemail || !$gsmtp || !$gport || !$gmailkullanici || !$gmailkullanicisifre){
		echo 'bos-deger';
	}else{
		$updateContact = $db->query("UPDATE ayarlar SET 
			gemail 		= '$gemail',
			gsmtp 	= '$gsmtp',
			gport 		= '$gport',
			gmailkullanici 	= '$gmailkullanici',
			gmailkullanicisifre 		= '$gmailkullanicisifre' WHERE ayar_id='$ayar_id'");
		if($updateContact->rowCount()){
			echo 'basarili';
		}else{
			echo 'degisiklik-yok';
		}
	}

}
if($_GET["p"]=="iletisim_bilgileri"){
	$ayar_id 		= p("ayar_id");
	$email 			= p("email");
	$telefon 		= p("telefon");
	$email2 			= p("email2");
	$telefon2 		= p("telefon2");
	$email3 			= p("email3");
	$telefon3 		= p("telefon3");
	$gsm 			= p("gsm");
	$faks 			= p("faks");
	$adres 			= p("adres");
	$adres2 			= p("adres2");
	$adres3 			= p("adres3");
	$google_maps 	= p("google_maps");
	$cdestek 	= p("cdestek");
	$ganaltyc 	= p("ganaltyc");
	$gconsol 	= p("gconsol");
	$footercop 	= p("footercop");
	if(!$ayar_id || !$email || !$telefon || !$gsm || !$faks || !$adres){
		echo 'bos-deger';
	}else{
		if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
			echo 'gecersiz-eposta';
		}else{
			$updateContact = $db->query("UPDATE ayarlar SET 
				email 		= '$email',
				telefon 	= '$telefon',
				email2 		= '$email2',
				telefon2 	= '$telefon2',
				email3 		= '$email3',
				telefon3 	= '$telefon3',
				gsm 		= '$gsm',
				cdestek 		= '$cdestek',
				ganaltyc 		= '$ganaltyc',
				gconsol 		= '$gconsol',
				footercop 		= '$footercop',
				google_maps = '$google_maps',
				faks 		= '$faks',
				adres 		= '$adres',
				adres2 		= '$adres2',
				adres3 		= '$adres3' WHERE ayar_id='$ayar_id'");
			if($updateContact->rowCount()){
				echo 'basarili';
			}else{
				echo 'degisiklik-yok';
			}
		}
	}
}
if($_GET["p"]=="sosyal_medya"){
	$ayar_id 		= p("ayar_id");
	$facebook_url 	= p("facebook_url");
	$twitter_url 	= p("twitter_url");
	$instagram_url 	= p("instagram_url");
	$google_url 	= p("google_url");
	$linkedin_url 	= p("linkedin_url");
	if(!$ayar_id || !$facebook_url || !$twitter_url || !$instagram_url || !$google_url || !$linkedin_url){
		echo 'bos-deger';
	}else{
		$updateSocial = $db->query("UPDATE ayarlar SET 
			facebook_url 	= '$facebook_url',
			twitter_url 	= '$twitter_url',
			instagram_url 	= '$instagram_url',
			google_url 		= '$google_url',
			linkedin_url 	= '$linkedin_url'
			WHERE ayar_id='$ayar_id'");
		if($updateSocial->rowCount()){
			echo 'basarili';
		}else{
			echo 'degisiklik-yok';
		}
	}
}


if($_GET["p"]=="bakimModu"){ 

	$bakim_mod      = p("mod");
	$bakim_yazi         = p("yazi");
	$bakim_tarih        = p("bitisdate");
	$bakim_saat         = p("bitistime");
	$bakim_cep      = p("ceptel");
	$bakim_harita       = p("harita");

	$bakim_id=1;


	if(!$bakim_id ){
		echo 'bos-deger';exit();
	}else{

		$bakim = $db->query("UPDATE bakim SET
			bakim_mod       = '$bakim_mod',
			bakim_yazi  = '$bakim_yazi',
			bakim_tarih     = '$bakim_tarih',
			bakim_saat      = '$bakim_saat',
			bakim_cep   = '$bakim_cep',
			bakim_harita    = '$bakim_harita'
			WHERE bakim_id='$bakim_id'");
		if($bakim->rowCount()){
			echo 'basarili';exit();
		}else{
			echo 'basarisiz';exit();
		}


	}

}

if($_GET["p"]=="karanlikmod"){
	$id = 1;
	$kontrol = $db->query("SELECT * FROM ayarlar WHERE ayar_id='$id'");
	if($kontrol->rowCount()){
		$uyeRow = $kontrol->fetch(PDO::FETCH_ASSOC);
		$uyeDurum = $uyeRow["site_tema"];
		if($uyeDurum==1){
			$update = $db->query("UPDATE ayarlar SET site_tema=0 WHERE ayar_id='$id'");
			if($update->rowCount()){
				echo 'acik';exit();
			}
		}else{
			$update = $db->query("UPDATE ayarlar SET site_tema=1 WHERE ayar_id='$id'");
			if($update->rowCount()){
				echo 'karanlik';exit();
			}
		}
	}

}








if($_GET["p"]=="dil2_anasayfa_ayarlari"){
	$baslik1 		= p("baslik1");
	$desc1 			= p("desc1");
	$baslik2 		= p("baslik2");
	$desc2 			= p("desc2");
	$baslik3 		= p("baslik3");
	$desc3 			= p("desc3");
	$baslik4 		= p("baslik4");
	$desc4 			= p("desc4");
	$baslik5 		= p("baslik5");
	$desc5 			= p("desc5");
	$baslik6 		= p("baslik6");
	$desc6 			= p("desc6");
	$baslik7 		= p("baslik7");
	$desc7 			= p("desc7");
	$baslik8 		= p("baslik8");
	$desc8 			= p("desc8");
	$baslik9 		= p("baslik9");
	$desc9 			= p("desc9");
	$baslik10 		= p("baslik10");
	$desc10 			= p("desc10");
	$baslik11 		= p("baslik11");
	$desc11 			= p("desc11");
	$baslik12 		= p("baslik12");
	$desc12 			= p("desc12");
	$baslik13 		= p("baslik13");
	$desc13 			= p("desc13");
	$baslik14 		= p("baslik14");
	$desc14 			= p("desc14");
	$baslik15 		= p("baslik15");
	$desc15 			= p("desc15");
	$baslik16 		= p("baslik16");
	$desc16 			= p("desc16");
	$baslik17 		= p("baslik17");
	$desc17 			= p("desc17");
	$baslik18 		= p("baslik18");
	$desc18 			= p("desc18");
	$baslik19 		= p("baslik19");
	$desc19 			= p("desc19");
	$baslik20 		= p("baslik20");
	$desc20 			= p("desc20");
	$baslik21 		= p("baslik21");
	$desc21 			= p("desc21");
	$baslik22 		= p("baslik22");
	$desc22			= p("desc22");
	$baslik23 		= p("baslik23");
	$desc23 			= p("desc23");
	$baslik24 		= p("baslik24");
	$desc24 			= p("desc24");
	$baslik25 		= p("baslik25");
	$desc25 			= p("desc25");
	$baslik26		= p("baslik26");
	$desc26 			= p("desc26");
	$baslik27 		= p("baslik27");
	$desc27 			= p("desc27");
	$baslik28 		= p("baslik28");
	$desc28 			= p("desc28");
	$baslik29 		= p("baslik29");
	$desc29 			= p("desc29");
	$baslik30 		= p("baslik30");
	$desc30 			= p("desc30");
	$baslik31 		= p("baslik31");
	$desc31 			= p("desc31");
	$baslik32 		= p("baslik32");
	$desc32 			= p("desc32");
	$baslik33 		= p("baslik33");
	$desc33 			= p("desc33");
	$baslik34 		= p("baslik34");
	$desc34 			= p("desc34");
	$baslik35 		= p("baslik35");
	$desc35 			= p("desc35");
	$baslik36 		= p("baslik36");
	$desc36 			= p("desc36");
	$baslik37 		= p("baslik37");
	$desc37 			= p("desc37");
	$baslik38 		= p("baslik38");
	$desc38 			= p("desc38");
	$baslik39 		= p("baslik39");
	$desc39 			= p("desc39");
	$baslik40 		= p("baslik40");
	$desc40 			= p("desc40");
	$baslik41 		= p("baslik41");
	$desc41 			= p("desc41");
	$baslik42 		= p("baslik42");
	$desc42 			= p("desc42");
	$baslik43 		= p("baslik43");
	$desc43 			= p("desc43");
	$baslik44 		= p("baslik44");
	$desc44 			= p("desc44");
	$baslik45 		= p("baslik45");
	$desc45 			= p("desc45");
	$baslik46 		= p("baslik46");
	$desc46 			= p("desc46");
	$baslik47 		= p("baslik47");
	$desc47 			= p("desc47");
	$update = $db->query("UPDATE dil2_bloklar SET
		baslik1 		= '$baslik1',
		desc1 		= '$desc1',
		baslik2 		= '$baslik2',
		desc2 		= '$desc2',
		baslik3 		= '$baslik3',
		desc3 		= '$desc3',
		baslik4 		= '$baslik4',
		desc4 		= '$desc4',
		baslik5 		= '$baslik5',
		desc5 		= '$desc5',
		baslik6 		= '$baslik6',
		desc6 		= '$desc6',
		baslik7 		= '$baslik7',
		desc7 		= '$desc7',
		baslik8 		= '$baslik8',
		desc8 		= '$desc8',
		baslik9 		= '$baslik9',
		desc9 		= '$desc9',
		baslik10 		= '$baslik10',
		desc10 		= '$desc10',
		baslik11 		= '$baslik11',
		desc11 		= '$desc11',
		baslik12 		= '$baslik12',
		desc12 		= '$desc12',
		baslik13 		= '$baslik13',
		desc13 		= '$desc13',
		baslik14 		= '$baslik14',
		desc14 		= '$desc14',
		baslik15 		= '$baslik15',
		desc15 		= '$desc15',
		baslik16 		= '$baslik16',
		desc16 		= '$desc16',
		baslik17 		= '$baslik17',
		desc17 		= '$desc17',
		baslik18 		= '$baslik18',
		desc18 		= '$desc18',
		baslik19 		= '$baslik19',
		desc19 		= '$desc19',
		baslik20 		= '$baslik20',
		desc20 		= '$desc20',
		baslik21 		= '$baslik21',
		desc21 		= '$desc21',
		baslik22 		= '$baslik22',
		desc22 		= '$desc22',
		baslik23 		= '$baslik23',
		desc23 		= '$desc23',
		baslik24 		= '$baslik24',
		desc24 		= '$desc24',
		baslik25 		= '$baslik25',
		desc25		= '$desc25',
		baslik26 		= '$baslik26',
		desc26		= '$desc26',
		baslik27 		= '$baslik27',
		desc27		= '$desc27',
		baslik28 		= '$baslik28',
		desc28 = '$desc28',
		baslik29 = '$baslik29',
		desc29 = '$desc29',
		baslik30 = '$baslik30',
		desc30 = '$desc30',
		baslik31 = '$baslik31',
		desc31 = '$desc31',
		baslik32 = '$baslik32',
		desc32 = '$desc32',
		baslik33 = '$baslik33',
		desc33 = '$desc33',
		baslik34 = '$baslik34',
		desc34 = '$desc34',
		baslik35 = '$baslik35',
		desc35 = '$desc35',
		baslik36 = '$baslik36',
		desc36 = '$desc36',
		baslik37 = '$baslik37',
		desc37 = '$desc37',
		baslik38 = '$baslik38',
		desc38 = '$desc38',
		baslik39 = '$baslik39',
		desc39 = '$desc39',
		baslik40 = '$baslik40',
		desc40 = '$desc40',
		baslik41 = '$baslik41',
		desc41 = '$desc41',
		baslik42 = '$baslik42',
		desc42 = '$desc42',
		baslik43 = '$baslik43',
		desc43 = '$desc43',
		baslik44 = '$baslik44',
		desc44 = '$desc44',
		baslik45 = '$baslik45',
		desc45 = '$desc45',
		baslik46 = '$baslik46',
		desc46 = '$desc46',
		baslik47 = '$baslik47',
		desc47 = '$desc47'
		WHERE blok_id='1'");
	if($update->rowCount()){
		echo 'basarili';
	}else{
		echo 'basarisiz';
	}
}
if($_GET["p"]=="dil2_en_anasayfa_ayarlari"){
	$baslik1 		= p("baslik1");
	$desc1 			= p("desc1");
	$baslik2 		= p("baslik2");
	$desc2 			= p("desc2");
	$baslik3 		= p("baslik3");
	$desc3 			= p("desc3");
	$baslik4 		= p("baslik4");
	$desc4 			= p("desc4");
	$baslik5 		= p("baslik5");
	$desc5 			= p("desc5");
	$baslik6 		= p("baslik6");
	$desc6 			= p("desc6");
	$baslik7 		= p("baslik7");
	$desc7 			= p("desc7");
	$baslik8 		= p("baslik8");
	$desc8 			= p("desc8");
	$baslik9 		= p("baslik9");
	$desc9 			= p("desc9");
	$baslik10 		= p("baslik10");
	$desc10 			= p("desc10");
	$baslik11 		= p("baslik11");
	$desc11 			= p("desc11");
	$baslik12 		= p("baslik12");
	$desc12 			= p("desc12");
	$baslik13 		= p("baslik13");
	$desc13 			= p("desc13");
	$baslik14 		= p("baslik14");
	$desc14 			= p("desc14");
	$baslik15 		= p("baslik15");
	$desc15 			= p("desc15");
	$baslik16 		= p("baslik16");
	$desc16 			= p("desc16");
	$baslik17 		= p("baslik17");
	$desc17 			= p("desc17");
	$baslik18 		= p("baslik18");
	$desc18 			= p("desc18");
	$baslik19 		= p("baslik19");
	$desc19 			= p("desc19");
	$baslik20 		= p("baslik20");
	$desc20 			= p("desc20");
	$baslik21 		= p("baslik21");
	$desc21 			= p("desc21");
	$baslik22 		= p("baslik22");
	$desc22			= p("desc22");
	$baslik23 		= p("baslik23");
	$desc23 			= p("desc23");
	$baslik24 		= p("baslik24");
	$desc24 			= p("desc24");
	$baslik25 		= p("baslik25");
	$desc25 			= p("desc25");
	$baslik26		= p("baslik26");
	$desc26 			= p("desc26");
	$baslik27 		= p("baslik27");
	$desc27 			= p("desc27");
	$baslik28 		= p("baslik28");
	$desc28 			= p("desc28");
	$baslik29 		= p("baslik29");
	$desc29 			= p("desc29");
	$baslik30 		= p("baslik30");
	$desc30 			= p("desc30");
	$baslik31 		= p("baslik31");
	$desc31 			= p("desc31");
	$baslik32 		= p("baslik32");
	$desc32 			= p("desc32");
	$baslik33 		= p("baslik33");
	$desc33 			= p("desc33");
	$baslik34 		= p("baslik34");
	$desc34 			= p("desc34");
	$baslik35 		= p("baslik35");
	$desc35 			= p("desc35");
	$baslik36 		= p("baslik36");
	$desc36 			= p("desc36");
	$baslik37 		= p("baslik37");
	$desc37 			= p("desc37");
	$baslik38 		= p("baslik38");
	$desc38 			= p("desc38");
	$baslik39 		= p("baslik39");
	$desc39 			= p("desc39");
	$baslik40 		= p("baslik40");
	$desc40 			= p("desc40");
	$baslik41 		= p("baslik41");
	$desc41 			= p("desc41");
	$baslik42 		= p("baslik42");
	$desc42 			= p("desc42");
	$baslik43 		= p("baslik43");
	$desc43 			= p("desc43");
	$baslik44 		= p("baslik44");
	$desc44 			= p("desc44");
	$baslik45 		= p("baslik45");
	$desc45 			= p("desc45");
	$baslik46 		= p("baslik46");
	$desc46 			= p("desc46");
	$baslik47 		= p("baslik47");
	$desc47 			= p("desc47");
	$update = $db->query("UPDATE dil2_bloklar_en SET
		baslik1 		= '$baslik1',
		desc1 		= '$desc1',
		baslik2 		= '$baslik2',
		desc2 		= '$desc2',
		baslik3 		= '$baslik3',
		desc3 		= '$desc3',
		baslik4 		= '$baslik4',
		desc4 		= '$desc4',
		baslik5 		= '$baslik5',
		desc5 		= '$desc5',
		baslik6 		= '$baslik6',
		desc6 		= '$desc6',
		baslik7 		= '$baslik7',
		desc7 		= '$desc7',
		baslik8 		= '$baslik8',
		desc8 		= '$desc8',
		baslik9 		= '$baslik9',
		desc9 		= '$desc9',
		baslik10 		= '$baslik10',
		desc10 		= '$desc10',
		baslik11 		= '$baslik11',
		desc11 		= '$desc11',
		baslik12 		= '$baslik12',
		desc12 		= '$desc12',
		baslik13 		= '$baslik13',
		desc13 		= '$desc13',
		baslik14 		= '$baslik14',
		desc14 		= '$desc14',
		baslik15 		= '$baslik15',
		desc15 		= '$desc15',
		baslik16 		= '$baslik16',
		desc16 		= '$desc16',
		baslik17 		= '$baslik17',
		desc17 		= '$desc17',
		baslik18 		= '$baslik18',
		desc18 		= '$desc18',
		baslik19 		= '$baslik19',
		desc19 		= '$desc19',
		baslik20 		= '$baslik20',
		desc20 		= '$desc20',
		baslik21 		= '$baslik21',
		desc21 		= '$desc21',
		baslik22 		= '$baslik22',
		desc22 		= '$desc22',
		baslik23 		= '$baslik23',
		desc23 		= '$desc23',
		baslik24 		= '$baslik24',
		desc24 		= '$desc24',
		baslik25 		= '$baslik25',
		desc25		= '$desc25',
		baslik26 		= '$baslik26',
		desc26		= '$desc26',
		baslik27 		= '$baslik27',
		desc27		= '$desc27',
		baslik28 		= '$baslik28',
		desc28 = '$desc28',
		baslik29 = '$baslik29',
		desc29 = '$desc29',
		baslik30 = '$baslik30',
		desc30 = '$desc30',
		baslik31 = '$baslik31',
		desc31 = '$desc31',
		baslik32 = '$baslik32',
		desc32 = '$desc32',
		baslik33 = '$baslik33',
		desc33 = '$desc33',
		baslik34 = '$baslik34',
		desc34 = '$desc34',
		baslik35 = '$baslik35',
		desc35 = '$desc35',
		baslik36 = '$baslik36',
		desc36 = '$desc36',
		baslik37 = '$baslik37',
		desc37 = '$desc37',
		baslik38 = '$baslik38',
		desc38 = '$desc38',
		baslik39 = '$baslik39',
		desc39 = '$desc39',
		baslik40 = '$baslik40',
		desc40 = '$desc40',
		baslik41 = '$baslik41',
		desc41 = '$desc41',
		baslik42 = '$baslik42',
		desc42 = '$desc42',
		baslik43 = '$baslik43',
		desc43 = '$desc43',
		baslik44 = '$baslik44',
		desc44 = '$desc44',
		baslik45 = '$baslik45',
		desc45 = '$desc45',
		baslik46 = '$baslik46',
		desc46 = '$desc46',
		baslik47 = '$baslik47',
		desc47 = '$desc47'

		WHERE blok_id='1'");
	if($update->rowCount()){
		echo 'basarili';
	}else{
		echo 'basarisiz';
	}
}
if($_GET["p"]=="dil2_ar_anasayfa_ayarlari"){
	$baslik1 		= p("baslik1");
	$desc1 			= p("desc1");
	$baslik2 		= p("baslik2");
	$desc2 			= p("desc2");
	$baslik3 		= p("baslik3");
	$desc3 			= p("desc3");
	$baslik4 		= p("baslik4");
	$desc4 			= p("desc4");
	$baslik5 		= p("baslik5");
	$desc5 			= p("desc5");
	$baslik6 		= p("baslik6");
	$desc6 			= p("desc6");
	$baslik7 		= p("baslik7");
	$desc7 			= p("desc7");
	$baslik8 		= p("baslik8");
	$desc8 			= p("desc8");
	$baslik9 		= p("baslik9");
	$desc9 			= p("desc9");
	$baslik10 		= p("baslik10");
	$desc10 			= p("desc10");
	$baslik11 		= p("baslik11");
	$desc11 			= p("desc11");
	$baslik12 		= p("baslik12");
	$desc12 			= p("desc12");
	$baslik13 		= p("baslik13");
	$desc13 			= p("desc13");
	$baslik14 		= p("baslik14");
	$desc14 			= p("desc14");
	$baslik15 		= p("baslik15");
	$desc15 			= p("desc15");
	$baslik16 		= p("baslik16");
	$desc16 			= p("desc16");
	$baslik17 		= p("baslik17");
	$desc17 			= p("desc17");
	$baslik18 		= p("baslik18");
	$desc18 			= p("desc18");
	$baslik19 		= p("baslik19");
	$desc19 			= p("desc19");
	$baslik20 		= p("baslik20");
	$desc20 			= p("desc20");
	$baslik21 		= p("baslik21");
	$desc21 			= p("desc21");
	$baslik22 		= p("baslik22");
	$desc22			= p("desc22");
	$baslik23 		= p("baslik23");
	$desc23 			= p("desc23");
	$baslik24 		= p("baslik24");
	$desc24 			= p("desc24");
	$baslik25 		= p("baslik25");
	$desc25 			= p("desc25");
	$baslik26		= p("baslik26");
	$desc26 			= p("desc26");
	$baslik27 		= p("baslik27");
	$desc27 			= p("desc27");
	$baslik28 		= p("baslik28");
	$desc28 			= p("desc28");
	$baslik29 		= p("baslik29");
	$desc29 			= p("desc29");
	$baslik30 		= p("baslik30");
	$desc30 			= p("desc30");
	$baslik31 		= p("baslik31");
	$desc31 			= p("desc31");
	$baslik32 		= p("baslik32");
	$desc32 			= p("desc32");
	$baslik33 		= p("baslik33");
	$desc33 			= p("desc33");
	$baslik34 		= p("baslik34");
	$desc34 			= p("desc34");
	$baslik35 		= p("baslik35");
	$desc35 			= p("desc35");
	$baslik36 		= p("baslik36");
	$desc36 			= p("desc36");
	$baslik37 		= p("baslik37");
	$desc37 			= p("desc37");
	$baslik38 		= p("baslik38");
	$desc38 			= p("desc38");
	$baslik39 		= p("baslik39");
	$desc39 			= p("desc39");
	$baslik40 		= p("baslik40");
	$desc40 			= p("desc40");
	$baslik41 		= p("baslik41");
	$desc41 			= p("desc41");
	$baslik42 		= p("baslik42");
	$desc42 			= p("desc42");
	$baslik43 		= p("baslik43");
	$desc43 			= p("desc43");
	$baslik44 		= p("baslik44");
	$desc44 			= p("desc44");
	$baslik45 		= p("baslik45");
	$desc45 			= p("desc45");
	$baslik46 		= p("baslik46");
	$desc46 			= p("desc46");
	$baslik47 		= p("baslik47");
	$desc47 			= p("desc47");
	$update = $db->query("UPDATE dil2_bloklar_ar SET
		baslik1 		= '$baslik1',
		desc1 		= '$desc1',
		baslik2 		= '$baslik2',
		desc2 		= '$desc2',
		baslik3 		= '$baslik3',
		desc3 		= '$desc3',
		baslik4 		= '$baslik4',
		desc4 		= '$desc4',
		baslik5 		= '$baslik5',
		desc5 		= '$desc5',
		baslik6 		= '$baslik6',
		desc6 		= '$desc6',
		baslik7 		= '$baslik7',
		desc7 		= '$desc7',
		baslik8 		= '$baslik8',
		desc8 		= '$desc8',
		baslik9 		= '$baslik9',
		desc9 		= '$desc9',
		baslik10 		= '$baslik10',
		desc10 		= '$desc10',
		baslik11 		= '$baslik11',
		desc11 		= '$desc11',
		baslik12 		= '$baslik12',
		desc12 		= '$desc12',
		baslik13 		= '$baslik13',
		desc13 		= '$desc13',
		baslik14 		= '$baslik14',
		desc14 		= '$desc14',
		baslik15 		= '$baslik15',
		desc15 		= '$desc15',
		baslik16 		= '$baslik16',
		desc16 		= '$desc16',
		baslik17 		= '$baslik17',
		desc17 		= '$desc17',
		baslik18 		= '$baslik18',
		desc18 		= '$desc18',
		baslik19 		= '$baslik19',
		desc19 		= '$desc19',
		baslik20 		= '$baslik20',
		desc20 		= '$desc20',
		baslik21 		= '$baslik21',
		desc21 		= '$desc21',
		baslik22 		= '$baslik22',
		desc22 		= '$desc22',
		baslik23 		= '$baslik23',
		desc23 		= '$desc23',
		baslik24 		= '$baslik24',
		desc24 		= '$desc24',
		baslik25 		= '$baslik25',
		desc25		= '$desc25',
		baslik26 		= '$baslik26',
		desc26		= '$desc26',
		baslik27 		= '$baslik27',
		desc27		= '$desc27',
		baslik28 		= '$baslik28',
		desc28 = '$desc28',
		baslik29 = '$baslik29',
		desc29 = '$desc29',
		baslik30 = '$baslik30',
		desc30 = '$desc30',
		baslik31 = '$baslik31',
		desc31 = '$desc31',
		baslik32 = '$baslik32',
		desc32 = '$desc32',
		baslik33 = '$baslik33',
		desc33 = '$desc33',
		baslik34 = '$baslik34',
		desc34 = '$desc34',
		baslik35 = '$baslik35',
		desc35 = '$desc35',
		baslik36 = '$baslik36',
		desc36 = '$desc36',
		baslik37 = '$baslik37',
		desc37 = '$desc37',
		baslik38 = '$baslik38',
		desc38 = '$desc38',
		baslik39 = '$baslik39',
		desc39 = '$desc39',
		baslik40 = '$baslik40',
		desc40 = '$desc40',
		baslik41 = '$baslik41',
		desc41 = '$desc41',
		baslik42 = '$baslik42',
		desc42 = '$desc42',
		baslik43 = '$baslik43',
		desc43 = '$desc43',
		baslik44 = '$baslik44',
		desc44 = '$desc44',
		baslik45 = '$baslik45',
		desc45 = '$desc45',
		baslik46 = '$baslik46',
		desc46 = '$desc46',
		baslik47 = '$baslik47',
		desc47 = '$desc47'
		WHERE blok_id='1'");
	if($update->rowCount()){
		echo 'basarili';
	}else{
		echo 'basarisiz';
	}
}

if($_GET["p"]=="dil2_fa_anasayfa_ayarlari"){
	$baslik1 		= p("baslik1");
	$desc1 			= p("desc1");
	$baslik2 		= p("baslik2");
	$desc2 			= p("desc2");
	$baslik3 		= p("baslik3");
	$desc3 			= p("desc3");
	$baslik4 		= p("baslik4");
	$desc4 			= p("desc4");
	$baslik5 		= p("baslik5");
	$desc5 			= p("desc5");
	$baslik6 		= p("baslik6");
	$desc6 			= p("desc6");
	$baslik7 		= p("baslik7");
	$desc7 			= p("desc7");
	$baslik8 		= p("baslik8");
	$desc8 			= p("desc8");
	$baslik9 		= p("baslik9");
	$desc9 			= p("desc9");
	$baslik10 		= p("baslik10");
	$desc10 			= p("desc10");
	$baslik11 		= p("baslik11");
	$desc11 			= p("desc11");
	$baslik12 		= p("baslik12");
	$desc12 			= p("desc12");
	$baslik13 		= p("baslik13");
	$desc13 			= p("desc13");
	$baslik14 		= p("baslik14");
	$desc14 			= p("desc14");
	$baslik15 		= p("baslik15");
	$desc15 			= p("desc15");
	$baslik16 		= p("baslik16");
	$desc16 			= p("desc16");
	$baslik17 		= p("baslik17");
	$desc17 			= p("desc17");
	$baslik18 		= p("baslik18");
	$desc18 			= p("desc18");
	$baslik19 		= p("baslik19");
	$desc19 			= p("desc19");
	$baslik20 		= p("baslik20");
	$desc20 			= p("desc20");
	$baslik21 		= p("baslik21");
	$desc21 			= p("desc21");
	$baslik22 		= p("baslik22");
	$desc22			= p("desc22");
	$baslik23 		= p("baslik23");
	$desc23 			= p("desc23");
	$baslik24 		= p("baslik24");
	$desc24 			= p("desc24");
	$baslik25 		= p("baslik25");
	$desc25 			= p("desc25");
	$baslik26		= p("baslik26");
	$desc26 			= p("desc26");
	$baslik27 		= p("baslik27");
	$desc27 			= p("desc27");
	$baslik28 		= p("baslik28");
	$desc28 			= p("desc28");
	$baslik29 		= p("baslik29");
	$desc29 			= p("desc29");
	$baslik30 		= p("baslik30");
	$desc30 			= p("desc30");
	$baslik31 		= p("baslik31");
	$desc31 			= p("desc31");
	$baslik32 		= p("baslik32");
	$desc32 			= p("desc32");
	$baslik33 		= p("baslik33");
	$desc33 			= p("desc33");
	$baslik34 		= p("baslik34");
	$desc34 			= p("desc34");
	$baslik35 		= p("baslik35");
	$desc35 			= p("desc35");
	$baslik36 		= p("baslik36");
	$desc36 			= p("desc36");
	$baslik37 		= p("baslik37");
	$desc37 			= p("desc37");
	$baslik38 		= p("baslik38");
	$desc38 			= p("desc38");
	$baslik39 		= p("baslik39");
	$desc39 			= p("desc39");
	$baslik40 		= p("baslik40");
	$desc40 			= p("desc40");
	$baslik41 		= p("baslik41");
	$desc41 			= p("desc41");
	$baslik42 		= p("baslik42");
	$desc42 			= p("desc42");
	$baslik43 		= p("baslik43");
	$desc43 			= p("desc43");
	$baslik44 		= p("baslik44");
	$desc44 			= p("desc44");
	$baslik45 		= p("baslik45");
	$desc45 			= p("desc45");
	$baslik46 		= p("baslik46");
	$desc46 			= p("desc46");
	$baslik47 		= p("baslik47");
	$desc47 			= p("desc47");
	$update = $db->query("UPDATE dil2_bloklar_fa SET
		baslik1 		= '$baslik1',
		desc1 		= '$desc1',
		baslik2 		= '$baslik2',
		desc2 		= '$desc2',
		baslik3 		= '$baslik3',
		desc3 		= '$desc3',
		baslik4 		= '$baslik4',
		desc4 		= '$desc4',
		baslik5 		= '$baslik5',
		desc5 		= '$desc5',
		baslik6 		= '$baslik6',
		desc6 		= '$desc6',
		baslik7 		= '$baslik7',
		desc7 		= '$desc7',
		baslik8 		= '$baslik8',
		desc8 		= '$desc8',
		baslik9 		= '$baslik9',
		desc9 		= '$desc9',
		baslik10 		= '$baslik10',
		desc10 		= '$desc10',
		baslik11 		= '$baslik11',
		desc11 		= '$desc11',
		baslik12 		= '$baslik12',
		desc12 		= '$desc12',
		baslik13 		= '$baslik13',
		desc13 		= '$desc13',
		baslik14 		= '$baslik14',
		desc14 		= '$desc14',
		baslik15 		= '$baslik15',
		desc15 		= '$desc15',
		baslik16 		= '$baslik16',
		desc16 		= '$desc16',
		baslik17 		= '$baslik17',
		desc17 		= '$desc17',
		baslik18 		= '$baslik18',
		desc18 		= '$desc18',
		baslik19 		= '$baslik19',
		desc19 		= '$desc19',
		baslik20 		= '$baslik20',
		desc20 		= '$desc20',
		baslik21 		= '$baslik21',
		desc21 		= '$desc21',
		baslik22 		= '$baslik22',
		desc22 		= '$desc22',
		baslik23 		= '$baslik23',
		desc23 		= '$desc23',
		baslik24 		= '$baslik24',
		desc24 		= '$desc24',
		baslik25 		= '$baslik25',
		desc25		= '$desc25',
		baslik26 		= '$baslik26',
		desc26		= '$desc26',
		baslik27 		= '$baslik27',
		desc27		= '$desc27',
		baslik28 		= '$baslik28',
		desc28 = '$desc28',
		baslik29 = '$baslik29',
		desc29 = '$desc29',
		baslik30 = '$baslik30',
		desc30 = '$desc30',
		baslik31 = '$baslik31',
		desc31 = '$desc31',
		baslik32 = '$baslik32',
		desc32 = '$desc32',
		baslik33 = '$baslik33',
		desc33 = '$desc33',
		baslik34 = '$baslik34',
		desc34 = '$desc34',
		baslik35 = '$baslik35',
		desc35 = '$desc35',
		baslik36 = '$baslik36',
		desc36 = '$desc36',
		baslik37 = '$baslik37',
		desc37 = '$desc37',
		baslik38 = '$baslik38',
		desc38 = '$desc38',
		baslik39 = '$baslik39',
		desc39 = '$desc39',
		baslik40 = '$baslik40',
		desc40 = '$desc40',
		baslik41 = '$baslik41',
		desc41 = '$desc41',
		baslik42 = '$baslik42',
		desc42 = '$desc42',
		baslik43 = '$baslik43',
		desc43 = '$desc43',
		baslik44 = '$baslik44',
		desc44 = '$desc44',
		baslik45 = '$baslik45',
		desc45 = '$desc45',
		baslik46 = '$baslik46',
		desc46 = '$desc46',
		baslik47 = '$baslik47',
		desc47 = '$desc47'
		WHERE blok_id='1'");
	if($update->rowCount()){
		echo 'basarili';
	}else{
		echo 'basarisiz';
	}
}






?>