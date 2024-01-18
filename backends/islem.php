<?php
ob_start();
session_start();

include 'baglan.php';

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


print_r($_POST);


if (isset($_POST['kullanici_register'])) {
    echo $kullanici_adsoyad = htmlspecialchars($_POST['kullanici_adsoyad']);
    echo "<br>";
    echo $kullanici_mail = htmlspecialchars($_POST['kullanici_mail']);
    echo $isletme_key = $_POST['isletme_key'];
    echo "<br>";
    echo $kullanici_ad = htmlspecialchars($_POST['kullanici_ad']);
    echo "<br>";
    echo $kullanici_passwordone = trim($_POST['kullanici_password']);
    echo "<br>";
    echo $kullanici_passwordtwo = trim($_POST['kullanici_password_tekrar']);
    echo $mail_key = rand(1000, 9999);
    echo "<br>";
    if ($isletme_key == 216948) {
        $kullanici_yetki = 4;
    } else {
        $kullanici_yetki = 0;
    }
    if ($kullanici_passwordone == $kullanici_passwordtwo) {
        if (strlen($kullanici_passwordone) >= 6) {
            $kullanicisor = $db->prepare("select * from kullanici where kullanici_mail=:mail");
            $kullanicisor->execute(array(
                'mail' => $kullanici_mail
            ));
            $say = $kullanicisor->rowCount();
            if ($say == 0) {
                $password = md5($kullanici_passwordone);

                $kullanicikaydet = $db->prepare("INSERT INTO kullanici SET
						kullanici_adsoyad=:kullanici_adsoyad,
						kullanici_mail=:kullanici_mail,
						kullanici_password=:kullanici_password,
						kullanici_mail_key=:kullanici_mail_key,
						kullanici_ad=:kullanici_ad,
						kullanici_yetki=:kullanici_yetki
						");
                $insert = $kullanicikaydet->execute(array(
                    'kullanici_adsoyad' => $kullanici_adsoyad,
                    'kullanici_mail' => $kullanici_mail,
                    'kullanici_password' => $password,
                    'kullanici_mail_key' => $mail_key,
                    'kullanici_ad' => $_POST['kullanici_ad'],
                    'kullanici_yetki' => $kullanici_yetki
                ));
                if ($insert) {
                    /* echo 'anan ';
					sendMail($kullanici_adsoyad , $kullanici_mail , $mail_key); */
                    if (isset($_POST['updatePolicyId'])) {
                        $pwsor = $db->prepare("SELECT * FROM kullanici where kullanici_mail=:mail and kullanici_adsoyad=:kullanici_adsoyad");
                        $pwsor->execute(array(
                            'mail' => $_POST['kullanici_mail'],
                            'kullanici_adsoyad' => $kullanici_adsoyad
                        ));
                        $pwcek = $pwsor->fetch(PDO::FETCH_ASSOC);



                        $duzenle = $db->prepare("UPDATE policy_list SET

						policy_sender=:policy_sender
						WHERE policy_id={$_POST['updatePolicyId']}");
                        $update = $duzenle->execute(array('policy_sender' => $pwcek['kullanici_id']));
                    }
                    $_SESSION['mail_key'] = $mail_key;
                    $_SESSION['created_kullanici_mail'] = $kullanici_mail;
                    header("Location:./authMail.php?mail=$kullanici_mail&name=$kullanici_adsoyad&code=$mail_key");
                } else {
                    header("Location:../auth-register.php?durum=basarisiz");
                }
            } else {
                header("Location:../auth-register.php?durum=mukerrerkayit");
            }
        } else {
            header("Location:../auth-register.php?durum=eksiksifre");
        }
    } else {
        header("Location:../auth-register.php?durum=farklisifre");
    }
}



if (isset($_POST['resetPW'])) {
    echo $kullanici_mail = htmlspecialchars($_POST['kullanici_mail']);
    $passwordRes = $db->prepare("select * from kullanici where kullanici_mail=:mail");
    $passwordRes->execute(array(
        'mail' => $kullanici_mail
    ));
    $say = $passwordRes->rowCount();
    $passwordRescek = $passwordRes->fetch(PDO::FETCH_ASSOC);
    $name = $passwordRescek['kullanici_adsoyad'];
    $password = $passwordRescek['kullanici_password'];
    if ($say != 0) {
        header("Location:./resetMail.php?mail=$kullanici_mail&name=$name&password=$password");
    } else {
        header("Location:../auth-recoverpw.php?durum=mailyanlis");
    }
}


if (isset($_POST['definePw'])) {

    echo $kullanici_passwordone = trim($_POST['kullanici_password']);
    echo "<br>";
    echo $kullanici_passwordtwo = trim($_POST['kullanici_password_tekrar']);

    if ($kullanici_passwordone == $kullanici_passwordtwo) {
        $updatedSifre = md5($kullanici_passwordtwo);



        $pwsor = $db->prepare("SELECT * FROM kullanici where kullanici_mail=:mail and kullanici_password=:password1");
        $pwsor->execute(array(
            'mail' => $_POST['kullanici_mail'],
            'password1' => $_POST['pw']
        ));
        $pwcek = $pwsor->fetch(PDO::FETCH_ASSOC);

        $duzenle = $db->prepare("UPDATE kullanici SET

		kullanici_password=:kullanici_password
		WHERE kullanici_id={$pwcek['kullanici_id']}");
        $update = $duzenle->execute(array('kullanici_password' => $updatedSifre));



        if ($update) {

            Header("Location:../auth-login.php?durum=ok");
        } else {

            header("Location:../auth-resetPw.php?mail={$_POST['kullanici_mail']}&password={$_POST['pw']}&durum=no");
        }
    } else {
        header("Location:../auth-resetPw.php?mail={$_POST['kullanici_mail']}&password={$_POST['pw']}&durum=sifreYanlis");
    }
}


if (isset($_POST['sliderkaydet'])) {


    $uploads_dir = '../../dimg/slider';
    @$tmp_name = $_FILES['slider_resimyol']["tmp_name"];
    @$name = $_FILES['slider_resimyol']["name"];
    //resmin isminin benzersiz olması
    $benzersizsayi1 = rand(20000, 32000);
    $benzersizsayi2 = rand(20000, 32000);
    $benzersizsayi3 = rand(20000, 32000);
    $benzersizsayi4 = rand(20000, 32000);
    $benzersizad = $benzersizsayi1 . $benzersizsayi2 . $benzersizsayi3 . $benzersizsayi4;
    $refimgyol = substr($uploads_dir, 6) . "/" . $benzersizad . $name;
    @move_uploaded_file($tmp_name, "$uploads_dir/$benzersizad$name");



    $kaydet = $db->prepare("INSERT INTO slider SET
		slider_ad=:slider_ad,
		slider_sira=:slider_sira,
		slider_link=:slider_link,
		slider_resimyol=:slider_resimyol
		");
    $insert = $kaydet->execute(array(
        'slider_ad' => $_POST['slider_ad'],
        'slider_sira' => $_POST['slider_sira'],
        'slider_link' => $_POST['slider_link'],
        'slider_resimyol' => $refimgyol
    ));

    if ($insert) {

        Header("Location:../production/slider.php?durum=ok");
    } else {

        Header("Location:../production/slider.php?durum=no");
    }
}



if (isset($_POST['contactkayıt'])) {
    $kayit = 0;
    if ($_POST['custom-radio-1']) {
        $kayit = 1;
    } else {
        $kayit = 0;
    }



    $kaydet = $db->prepare("INSERT INTO contact SET
		contact_name=:contact_name,
		contact_email=:contact_email,
		contact_phone=:contact_phone,
		contact_mesaj=:contact_mesaj,
		contact_which=:contact_which

		");
    $insert = $kaydet->execute(array(
        'contact_name' => $_POST['contact_name'],
        'contact_email' => $_POST['contact_email'],
        'contact_phone' => $_POST['contact_phone'],
        'contact_mesaj' => $_POST['contact_mesaj'],
        'contact_which' => $kayit

    ));

    if ($insert) {

        Header("Location:../pages_contact_us.php?durum=ok");
    } else {

        Header("Location:../pages_contact_us.php?durum=no");
    }
}


if (isset($_POST['photo_kaydet'])) {


    $uploads_dir = '../dimg/slider';

    @$tmp_name = $_FILES['photos_imgs']["tmp_name"];
    @$name = $_FILES['photos_imgs']["name"];

    $benzersizsayi4 = rand(20000, 32000);
    $refimgyol = substr($uploads_dir, 2) . "/" . $benzersizsayi4 . $name;

    @move_uploaded_file($tmp_name, "$uploads_dir/$benzersizsayi4$name");




    $kaydet = $db->prepare("INSERT INTO photos SET
		photos_title=:photos_title,
		photos_sendby=:photos_sendby,
		photos_imgs=:photos_imgs
		");
    $insert = $kaydet->execute(array(
        'photos_title' => $_POST['photos_title'],
        'photos_sendby' => $_POST['photos_sendby'],
        'photos_imgs' => $refimgyol
    ));

    if ($insert) {

        Header("Location:../component_lightbox.php?durum=ok");
    } else {

        Header("Location:../component_lightbox.php?durum=no");
    }
}








if (isset($_POST['todo_ekle'])) {


    $kaydet = $db->prepare("INSERT INTO todo SET
		todo_title=:todo_title,
		todo_content=:todo_content,
		todo_deadline=:todo_deadline,
		todo_user=:todo_user,
		todo_teamMember=:member,
		todo_important=:todo_important

		");
    $insert = $kaydet->execute(array(
        'todo_title' => $_POST['todo_title'],
        'todo_content' => $_POST['todo_content'],
        'todo_deadline' => $_POST['todo_deadline'],
        'todo_user' => $_POST['todo_user'],
        'member' => $_POST['member'],
        'todo_important' => $_POST['todo_important']

    ));

    if ($insert) {

        Header("Location:../tasks-create.php?durum=ok");
    } else {

        Header("Location:../tasks-create.php?durum=no");
    }
}



if ($_GET['changeState'] == "ok") {

    $duzenle = $db->prepare("UPDATE todo SET

		todo_state=:todo_state
		WHERE todo_id={$_GET['id']}");
    $update = $duzenle->execute(array(

        'todo_state' => $_GET['state']

    ));



    if ($duzenle) {

        $resimsilunlink = $_GET['slider_resimyol'];
        unlink("../../$resimsilunlink");

        Header("Location:../tasks-list.php?durum=ok");
    } else {

        Header("Location:../tasks-list.php?durum=no");
    }
}













if (isset($_POST['sss_kaydet'])) {






    $kaydet = $db->prepare("INSERT INTO sss SET
			sss_title=:sss_title,
			sss_content=:sss_content
	
			");
    $insert = $kaydet->execute(array(
        'sss_title' => $_POST['sss_title'],
        'sss_content' => $_POST['sss_content']

    ));







    if ($insert) {

        Header("Location:../pages_faq.php?durum=ok");
    } else {

        Header("Location:../pages_faq.php?durum=no");
    }
}




// Slider Düzenleme Başla


if (isset($_POST['sliderduzenle'])) {


    if ($_FILES['slider_resimyol']["size"] > 0) {


        $uploads_dir = '../../dimg/slider';
        @$tmp_name = $_FILES['slider_resimyol']["tmp_name"];
        @$name = $_FILES['slider_resimyol']["name"];
        $benzersizsayi1 = rand(20000, 32000);
        $benzersizsayi2 = rand(20000, 32000);
        $benzersizsayi3 = rand(20000, 32000);
        $benzersizsayi4 = rand(20000, 32000);
        $benzersizad = $benzersizsayi1 . $benzersizsayi2 . $benzersizsayi3 . $benzersizsayi4;
        $refimgyol = substr($uploads_dir, 6) . "/" . $benzersizad . $name;
        @move_uploaded_file($tmp_name, "$uploads_dir/$benzersizad$name");

        $duzenle = $db->prepare("UPDATE slider SET
			slider_ad=:ad,
			slider_link=:link,
			slider_sira=:sira,
			slider_durum=:durum,
			slider_resimyol=:resimyol	
			WHERE slider_id={$_POST['slider_id']}");
        $update = $duzenle->execute(array(
            'ad' => $_POST['slider_ad'],
            'link' => $_POST['slider_link'],
            'sira' => $_POST['slider_sira'],
            'durum' => $_POST['slider_durum'],
            'resimyol' => $refimgyol,
        ));


        $slider_id = $_POST['slider_id'];

        if ($update) {

            $resimsilunlink = $_POST['slider_resimyol'];
            unlink("../../$resimsilunlink");

            Header("Location:../production/slider-duzenle.php?slider_id=$slider_id&durum=ok");
        } else {

            Header("Location:../production/slider-duzenle.php?durum=no");
        }
    } else {

        $duzenle = $db->prepare("UPDATE slider SET
			slider_ad=:ad,
			slider_link=:link,
			slider_sira=:sira,
			slider_durum=:durum		
			WHERE slider_id={$_POST['slider_id']}");
        $update = $duzenle->execute(array(
            'ad' => $_POST['slider_ad'],
            'link' => $_POST['slider_link'],
            'sira' => $_POST['slider_sira'],
            'durum' => $_POST['slider_durum']
        ));

        $slider_id = $_POST['slider_id'];

        if ($update) {

            Header("Location:../production/slider-duzenle.php?slider_id=$slider_id&durum=ok");
        } else {

            Header("Location:../production/slider-duzenle.php?durum=no");
        }
    }
}



if ($_GET['todo_important'] == "ok") {

    $duzenle = $db->prepare("UPDATE todo SET

		todo_important=:todo_important
		WHERE todo_id={$_GET['todo_id']}");
    $update = $duzenle->execute(array(

        'todo_important' => 1

    ));



    if ($duzenle) {

        $resimsilunlink = $_GET['slider_resimyol'];
        unlink("../../$resimsilunlink");

        Header("Location:../apps_todoList.php?durum=ok");
    } else {

        Header("Location:../apps_todoList.php?durum=no");
    }
}



if ($_GET['yetkilendir'] == "ok") {

    $duzenle = $db->prepare("UPDATE kullanici SET

		kullanici_yetki=:kullanici_yetki
		WHERE kullanici_id={$_GET['kullanici_id']}");
    $update = $duzenle->execute(array(

        'kullanici_yetki' => 5

    ));



    if ($duzenle) {

        $resimsilunlink = $_GET['slider_resimyol'];
        unlink("../../$resimsilunlink");

        Header("Location:../table_dt_html5.php?durum=ok");
    } else {

        Header("Location:../table_dt_html5.php?durum=no");
    }
}



if ($_GET['addlike'] == "ok") {

    $art = intval($_GET['sss_like']) + 1;

    $duzenle = $db->prepare("UPDATE sss SET

		sss_like=:sss_like
		WHERE sss_id={$_GET['sss_id']}");
    $update = $duzenle->execute(array(

        'sss_like' => $art

    ));



    if ($duzenle) {

        $resimsilunlink = $_GET['slider_resimyol'];
        unlink("../../$resimsilunlink");

        Header("Location:../pages_faq.php?durum=ok");
    } else {

        Header("Location:../pages_faq.php?durum=no");
    }
}



if ($_GET['note_privacy'] == "ok") {

    $duzenle = $db->prepare("UPDATE notes SET

		note_priv=:note_priv
		WHERE note_id={$_GET['note_id']}");
    $update = $duzenle->execute(array(

        'note_priv' => $_GET['note_priv']

    ));



    if ($duzenle) {

        $resimsilunlink = $_GET['slider_resimyol'];
        unlink("../../$resimsilunlink");

        Header("Location:../apps_notes.php?durum=ok");
    } else {

        Header("Location:../apps_notes.php?durum=no");
    }
}


if ($_GET['note_fav'] == "ok") {

    $duzenle = $db->prepare("UPDATE notes SET

		note_important=:note_important
		WHERE note_id={$_GET['note_id']}");
    $update = $duzenle->execute(array(

        'note_important' => $_GET['note_important']

    ));



    if ($duzenle) {

        $resimsilunlink = $_GET['slider_resimyol'];
        unlink("../../$resimsilunlink");

        Header("Location:../apps_notes.php?durum=ok");
    } else {

        Header("Location:../apps_notes.php?durum=no");
    }
}


if ($_GET['note_delete'] == "ok") {

    $duzenle = $db->prepare("UPDATE notes SET

		note_deleted=:note_deleted
		WHERE note_id={$_GET['note_id']}");
    $update = $duzenle->execute(array(

        'note_deleted' => 1

    ));



    if ($duzenle) {

        $resimsilunlink = $_GET['slider_resimyol'];
        unlink("../../$resimsilunlink");

        Header("Location:../apps_notes.php?durum=ok");
    } else {

        Header("Location:../apps_notes.php?durum=no");
    }
}



if ($_GET['todo_important'] == "unok") {

    $duzenle = $db->prepare("UPDATE todo SET

		todo_important=:todo_important	
		WHERE todo_id={$_GET['todo_id']}");
    $update = $duzenle->execute(array(

        'todo_important' => 0

    ));



    if ($duzenle) {

        $resimsilunlink = $_GET['slider_resimyol'];
        unlink("../../$resimsilunlink");

        Header("Location:../apps_todoList.php?durum=ok");
    } else {

        Header("Location:../apps_todoList.php?durum=no");
    }
}


if ($_GET['todo_delete'] == "ok") {

    $duzenle = $db->prepare("UPDATE todo SET

	todo_deleted=:todo_deleted	
		WHERE todo_id={$_GET['todo_id']}");
    $update = $duzenle->execute(array(

        'todo_deleted' => 1

    ));



    if ($duzenle) {


        Header("Location:../apps_todoList.php?durum=ok");
    } else {

        Header("Location:../apps_todoList.php?durum=no");
    }
}
if ($_GET['todo_delete'] == "unok") {

    $duzenle = $db->prepare("UPDATE todo SET

	todo_deleted=:todo_deleted	
		WHERE todo_id={$_GET['todo_id']}");
    $update = $duzenle->execute(array(

        'todo_deleted' => 0

    ));



    if ($duzenle) {


        Header("Location:../apps_todoList.php?durum=ok");
    } else {

        Header("Location:../apps_todoList.php?durum=no");
    }
}






// Slider Düzenleme Bitiş

if ($_GET['kullanici_sil'] == "ok") {

    $sil = $db->prepare("DELETE from kullanici where kullanici_id=:kullanici_id");
    $kontrol = $sil->execute(array(
        'kullanici_id' => $_GET['kullanici_id']
    ));

    if ($kontrol) {

        $resimsilunlink = $_GET['slider_resimyol'];
        unlink("../../$resimsilunlink");

        Header("Location:../table_dt_html5.php?durum=ok");
    } else {

        Header("Location:../table_dt_html5.php?durum=no");
    }
}

if ($_GET['reklamsil'] == "ok") {

    $sil = $db->prepare("DELETE from siparis where siparis_id=:siparis_id");
    $kontrol = $sil->execute(array(
        'siparis_id' => $_GET['siparis_id']
    ));

    if ($kontrol) {



        Header("Location:../production/reklam.php?durum=ok");
    } else {

        Header("Location:../production/reklam.php?durum=no");
    }
}

if ($_GET['fatura_sil'] == "ok") {

    $sil = $db->prepare("DELETE from payment_system where payment_id=:payment_id");
    $kontrol = $sil->execute(array(
        'payment_id' => $_GET['payment_id']
    ));

    if ($kontrol) {



        Header("Location:../apps_invoice-list.php?durum=ok");
    } else {

        Header("Location:../apps_invoice-list.php?durum=no");
    }
}



if (isset($_POST['baskasinagonder'])) {

    $kullanicisor = $db->prepare("SELECT * FROM kullanici where kullanici_mail=:mail");
    $kullanicisor->execute(array(
        'mail' => $_POST['mailadres']
    ));
    $kullanicicek = $kullanicisor->fetch(PDO::FETCH_ASSOC);





    $kaydet = $db->prepare("INSERT INTO scrumboard SET
		scrumb_title=:scrumb_title,
		scrumb_content=:scrumb_content,
		scrumb_category=:scrumb_category


		");
    $insert = $kaydet->execute(array(
        'scrumb_title' => $_POST['scrumb_title'],
        'scrumb_content' => $_POST['scrumb_content'],
        'scrumb_category' => 10

    ));







    if ($insert) {

        Header("Location:../apps_scrumboard.php?durum=ok");
    } else {

        Header("Location:../apps_scrumboard.php?durum=no");
    }
}



if (isset($_POST['general_kayit'])) {



    $uploads_dir = '../dimg/slider';

    @$tmp_name = $_FILES['kullanici_resim']["tmp_name"];
    @$name = $_FILES['kullanici_resim']["name"];

    $benzersizsayi4 = rand(20000, 32000);
    $refimgyol = substr($uploads_dir, 2) . "/" . $benzersizsayi4 . $name;

    @move_uploaded_file($tmp_name, "$uploads_dir/$benzersizsayi4$name");


    $duzenle = $db->prepare("UPDATE kullanici SET
		kullanici_resim=:logo,
		kullanici_ad=:kullanici_ad,
		user_day=:user_day,
		user_month=:user_month,
		user_year=:user_year,
		user_job=:user_job
		WHERE kullanici_id={$_POST['kullanici_id']}");
    $update = $duzenle->execute(array(
        'logo' => $refimgyol,
        'kullanici_ad' => $_POST['kullanici_ad'],
        'user_day' => $_POST['user_day'],
        'user_month' => $_POST['user_month'],
        'user_year' => $_POST['user_year'],
        'user_job' => $_POST['user_job']

    ));



    if ($update) {

        $resimsilunlink = $_POST['eski_yol'];
        unlink("../../$resimsilunlink");

        Header("Location:../user_account_setting.php?durum=ok");
    } else {

        Header("Location:../user_account_setting.php?durum=no");
    }
}


if (isset($_POST['aciklamakayit'])) {





    $duzenle = $db->prepare("UPDATE kullanici SET
	
		kullanici_aciklama=:kullanici_aciklama
		WHERE kullanici_id={$_POST['kullanici_id']}");
    $update = $duzenle->execute(array(

        'kullanici_aciklama' => $_POST['kullanici_aciklama']

    ));



    if ($update) {


        Header("Location:../user_account_setting.php?durum=ok");
    } else {

        Header("Location:../user_account_setting.php?durum=no");
    }
}


if (isset($_POST['iletisim_kayit'])) {





    $duzenle = $db->prepare("UPDATE kullanici SET
	
	user_website=:user_website,
		kullanici_gsm=:kullanici_gsm,
		kullanici_adres=:kullanici_adres,
		user_country=:user_country
		WHERE kullanici_id={$_POST['kullanici_id']}");
    $update = $duzenle->execute(array(

        'user_website' => $_POST['user_website'],
        'kullanici_gsm' => $_POST['kullanici_gsm'],
        'kullanici_adres' => $_POST['kullanici_adres'],
        'user_country' => $_POST['user_country']

    ));



    if ($update) {


        Header("Location:../user_account_setting.php?durum=ok");
    } else {

        Header("Location:../user_account_setting.php?durum=no");
    }
}


if (isset($_POST['sosyalkayit'])) {





    $duzenle = $db->prepare("UPDATE kullanici SET
	
	kullanici_insta=:kullanici_insta,
	kullanici_youtube=:kullanici_youtube,
	kullanici_twitch=:kullanici_twitch,
	kullanici_twitter=:kullanici_twitter
		WHERE kullanici_id={$_POST['kullanici_id']}");
    $update = $duzenle->execute(array(

        'kullanici_insta' => $_POST['kullanici_insta'],
        'kullanici_youtube' => $_POST['kullanici_youtube'],
        'kullanici_twitch' => $_POST['kullanici_twitch'],
        'kullanici_twitter' => $_POST['kullanici_twitter']

    ));



    if ($update) {


        Header("Location:../user_account_setting.php?durum=ok");
    } else {

        Header("Location:../user_account_setting.php?durum=no");
    }
}





if (isset($_POST['fotoekleme'])) {



    $uploads_dir = '../../dimg';

    @$tmp_name = $_FILES['bank_img1']["tmp_name"];
    @$name = $_FILES['bank_img1']["name"];

    @$tmp_name1 = $_FILES['bank_img2']["tmp_name"];
    @$name1 = $_FILES['bank_img2']["name"];

    @$tmp_name2 = $_FILES['bank_img3']["tmp_name"];
    @$name2 = $_FILES['bank_img3']["name"];

    $benzersizsayi4 = rand(20000, 32000);
    $benzersizsayi5 = rand(20000, 32000);
    $benzersizsayi6 = rand(20000, 32000);
    $refimgyol = substr($uploads_dir, 6) . "/" . $benzersizsayi4 . $name;
    $refimgyol2 = substr($uploads_dir, 6) . "/" . $benzersizsayi5 . $name;
    $refimgyol3 = substr($uploads_dir, 6) . "/" . $benzersizsayi6 . $name;

    @move_uploaded_file($tmp_name, "$uploads_dir/$benzersizsayi4$name");
    @move_uploaded_file($tmp_name1, "$uploads_dir/$benzersizsayi5$name");
    @move_uploaded_file($tmp_name2, "$uploads_dir/$benzersizsayi6$name");


    $duzenle = $db->prepare("UPDATE banka SET
		bank_img1=:bank_img1,
		bank_img2=:bank_img2,
		bank_img3=:bank_img3
		WHERE banka_id={$_POST['banka_id']}");
    $update = $duzenle->execute(array(
        'bank_img1' => $refimgyol,
        'bank_img2' => $refimgyol2,
        'bank_img3' => $refimgyol3
    ));



    if ($update) {

        Header("Location:../production/banka.php?durum=ok");
    } else {

        Header("Location:../production/banka.php?durum=no");
    }
}




if (isset($_POST['admingiris'])) {

    $kullanici_mail = $_POST['kullanici_mail'];
    $kullanici_password = md5($_POST['kullanici_password']);

    $kullanicisor = $db->prepare("SELECT * FROM kullanici where kullanici_mail=:mail and kullanici_password=:password");
    $kullanicisor->execute(array(
        'mail' => $kullanici_mail,
        'password' => $kullanici_password
    ));

    echo $say = $kullanicisor->rowCount();

    if ($say == 1) {

        $_SESSION['kullanici_mail'] = $kullanici_mail;

        header("Location:../index.php");
        exit;
    } else {

        header("Location:../auth-login.php?durum=no");
        exit;
    }
}




if (isset($_POST['kullanicigiris'])) {



    echo $kullanici_mail = htmlspecialchars($_POST['kullanici_mail']);
    echo $kullanici_password = md5($_POST['kullanici_password']);

    $gelen_url = $_POST['gelen_url'];

    $kullanicisor = $db->prepare("select * from kullanici where kullanici_mail=:mail and kullanici_password=:password");
    $kullanicisor->execute(array(
        'mail' => $kullanici_mail,

        'password' => $kullanici_password

    ));


    $say = $kullanicisor->rowCount();



    if ($say == 1) {

        echo $_SESSION['kullanici_mail'] = $kullanici_mail;

        header("Location:../index.php");
        exit;
    } else {


        header("Location:../../index.php");
    }
}






if (isset($_POST['changeuser'])) {

    //Tablo güncelleme işlemi kodları...
    $ayarkaydet = $db->prepare("UPDATE kullanici SET
		kullanici_adsoyad=:kullanici_adsoyad,
		kullanici_gsm=:kullanici_gsm,
		kullanici_adres=:kullanici_adres,
		kullanici_aciklama=:kullanici_aciklama,
		kullanici_face=:kullanici_face,
		kullanici_twitter=:kullanici_twitter,
		kullanici_insta=:kullanici_insta,
		kullanici_youtube=:kullanici_youtube,
		kullanici_durum=:kullanici_durum
		WHERE kullanici_id={$_POST['kullanici_id']}");

    $update = $ayarkaydet->execute(array(
        'kullanici_adsoyad' => $_POST['kullanici_adsoyad'],
        'kullanici_gsm' => $_POST['kullanici_gsm'],
        'kullanici_adres' => $_POST['kullanici_adres'],
        'kullanici_aciklama' => $_POST['kullanici_aciklama'],
        'kullanici_face' => $_POST['kullanici_face'],
        'kullanici_twitter' => $_POST['kullanici_twitter'],
        'kullanici_insta' => $_POST['kullanici_insta'],
        'kullanici_youtube' => $_POST['kullanici_youtube'],
        'kullanici_durum' => $_POST['kullanici_durum']
    ));



    if ($update) {

        header("Location:../production/genel-ayar.php?durum=ok");
    } else {

        header("Location:../production/genel-ayar.php?durum=no");
    }
}


if (isset($_POST['videoduzenle'])) {

    //Tablo güncelleme işlemi kodları...
    $ayarkaydet = $db->prepare("UPDATE video SET

		video_place=:video_place
		WHERE video_id={$_POST['video_id']}");

    $update = $ayarkaydet->execute(array(

        'video_place' => $_POST['video_place']
    ));



    if ($update) {

        header("Location:../production/menu.php?durum=ok");
    } else {

        header("Location:../production/menu.php?durum=no");
    }
}



if (isset($_POST['iletisimayarkaydet'])) {

    //Tablo güncelleme işlemi kodları...
    $ayarkaydet = $db->prepare("UPDATE ayar SET
		ayar_tel=:ayar_tel,
		ayar_gsm=:ayar_gsm,
		ayar_faks=:ayar_faks,
		ayar_mail=:ayar_mail,
		ayar_ilce=:ayar_ilce,
		ayar_il=:ayar_il,
		ayar_adres=:ayar_adres,
		ayar_mesai=:ayar_mesai
		WHERE ayar_id=0");

    $update = $ayarkaydet->execute(array(
        'ayar_tel' => $_POST['ayar_tel'],
        'ayar_gsm' => $_POST['ayar_gsm'],
        'ayar_faks' => $_POST['ayar_faks'],
        'ayar_mail' => $_POST['ayar_mail'],
        'ayar_ilce' => $_POST['ayar_ilce'],
        'ayar_il' => $_POST['ayar_il'],
        'ayar_adres' => $_POST['ayar_adres'],
        'ayar_mesai' => $_POST['ayar_mesai']
    ));


    if ($update) {

        header("Location:../production/iletisim-ayarlar.php?durum=ok");
    } else {

        header("Location:../production/iletisim-ayarlar.php?durum=no");
    }
}




if (isset($_POST['hakkimizdakaydet'])) {

    //Tablo güncelleme işlemi kodları...

    /*

	copy paste işlemlerinde tablo ve işaretli satır isminin değiştirildiğinden emin olun!!!

	*/
    $ayarkaydet = $db->prepare("UPDATE hakkimizda SET
		hakkimizda_baslik=:hakkimizda_baslik,
		hakkimizda_icerik=:hakkimizda_icerik,
		hakkimizda_video=:hakkimizda_video,
		hakkimizda_vizyon=:hakkimizda_vizyon,
		hakkimizda_misyon=:hakkimizda_misyon
		WHERE hakkimizda_id=0");

    $update = $ayarkaydet->execute(array(
        'hakkimizda_baslik' => $_POST['hakkimizda_baslik'],
        'hakkimizda_icerik' => $_POST['hakkimizda_icerik'],
        'hakkimizda_video' => $_POST['hakkimizda_video'],
        'hakkimizda_vizyon' => $_POST['hakkimizda_vizyon'],
        'hakkimizda_misyon' => $_POST['hakkimizda_misyon']
    ));


    if ($update) {

        header("Location:../production/hakkimizda.php?durum=ok");
    } else {

        header("Location:../production/hakkimizda.php?durum=no");
    }
}



if (isset($_POST['kullaniciduzenle'])) {

    $kullanici_id = $_POST['kullanici_id'];

    $ayarkaydet = $db->prepare("UPDATE kullanici SET
		kullanici_gsm=:kullanici_gsm,
		kullanici_adsoyad=:kullanici_adsoyad,
		kullanici_aciklama=:kullanici_aciklama,
		kullanici_face=:kullanici_face,
		kullanici_twitter=:kullanici_twitter,
		kullanici_insta=:kullanici_insta,
		kullanici_youtube=:kullanici_youtube,
		kullanici_adres=:kullanici_adres
		WHERE kullanici_id={$_POST['kullanici_id']}");

    $update = $ayarkaydet->execute(array(
        'kullanici_gsm' => $_POST['kullanici_gsm'],
        'kullanici_adsoyad' => $_POST['kullanici_adsoyad'],
        'kullanici_aciklama' => $_POST['kullanici_aciklama'],
        'kullanici_face' => $_POST['kullanici_face'],
        'kullanici_twitter' => $_POST['kullanici_twitter'],
        'kullanici_insta' => $_POST['kullanici_insta'],
        'kullanici_youtube' => $_POST['kullanici_youtube'],
        'kullanici_adres' => $_POST['kullanici_adres']
    ));


    if ($update) {

        Header("Location:../production/genel-ayar.php?kullanici_id=$kullanici_id&durum=ok");
    } else {

        Header("Location:../production/genel-ayar.php?kullanici_id=$kullanici_id&durum=no");
    }
}


if (isset($_POST['kullanicibilgiguncelle'])) {

    $kullanici_id = $_POST['kullanici_id'];

    $ayarkaydet = $db->prepare("UPDATE kullanici SET
		kullanici_adsoyad=:kullanici_adsoyad,
		kullanici_il=:kullanici_il,
		kullanici_ilce=:kullanici_ilce
		WHERE kullanici_id={$_POST['kullanici_id']}");

    $update = $ayarkaydet->execute(array(
        'kullanici_adsoyad' => $_POST['kullanici_adsoyad'],
        'kullanici_il' => $_POST['kullanici_il'],
        'kullanici_ilce' => $_POST['kullanici_ilce']
    ));


    if ($update) {

        Header("Location:../../hesabim?durum=ok");
    } else {

        Header("Location:../../hesabim?durum=no");
    }
}
if (isset($_POST['giveperm'])) {

    $kullanici_id = $_POST['kullanici_id'];

    $ayarkaydet = $db->prepare("UPDATE kullanici SET

		kullanici_yetki=:kullanici_yetki
		WHERE kullanici_id={$_POST['kullanici_id']}");

    $update = $ayarkaydet->execute(array(

        'kullanici_yetki' => $_POST['kullanici_yetki']
    ));


    if ($update) {

        Header("Location:../production/kullanici.php?durum=ok");
    } else {

        Header("Location:../production/kullanici.php?durum=no");
    }
}


if ($_GET['kullanicisil'] == "ok") {

    $sil = $db->prepare("DELETE from kullanici where kullanici_id=:id");
    $kontrol = $sil->execute(array(
        'id' => $_GET['kullanici_id']
    ));


    if ($kontrol) {


        header("location:../production/kullanici.php?sil=ok");
    } else {

        header("location:../production/kullanici.php?sil=no");
    }
}





if ($_GET['iletisimsil'] == "ok") {

    $sil = $db->prepare("DELETE from menu where menu_id=:id");
    $kontrol = $sil->execute(array(
        'id' => $_GET['menu_id']
    ));


    if ($kontrol) {


        header("location:../production/iletişim.php?sil=ok");
    } else {

        header("location:../production/iletişim.php?sil=no");
    }
}
if ($_GET['videosil'] == "ok") {

    $sil = $db->prepare("DELETE from video where video_id=:id");
    $kontrol = $sil->execute(array(
        'id' => $_GET['menu_id']
    ));


    if ($kontrol) {


        header("location:../production/menu.php?sil=ok");
    } else {

        header("location:../production/menu.php?sil=no");
    }
}



if (isset($_POST['videoekle'])) {

    $uploads_dir = '../../dimg/slider';
    @$tmp_name = $_FILES['video_foto']["tmp_name"];
    @$name = $_FILES['video_foto']["name"];
    //resmin isminin benzersiz olması
    $benzersizsayi1 = rand(20000, 32000);
    $benzersizsayi2 = rand(20000, 32000);
    $benzersizsayi3 = rand(20000, 32000);
    $benzersizsayi4 = rand(20000, 32000);
    $benzersizad = $benzersizsayi1 . $benzersizsayi2 . $benzersizsayi3 . $benzersizsayi4;
    $refimgyol = substr($uploads_dir, 6) . "/" . $benzersizad . $name;
    @move_uploaded_file($tmp_name, "$uploads_dir/$benzersizad$name");




    $ayarekle = $db->prepare("INSERT INTO video SET
		video_sendby=:video_sendby,
		video_foto=:video_foto,
		video_username=:video_username,
		video_title=:video_title,
		video_sub=:video_sub,
		video_text=:video_text,
		video_link=:video_link
		");

    $insert = $ayarekle->execute(array(
        'video_sendby' => $_POST['video_sendby'],
        'video_username' => $_POST['video_username'],
        'video_title' => $_POST['video_title'],
        'video_sub' => $_POST['video_sub'],
        'video_text' => $_POST['video_text'],
        'video_foto' => $refimgyol,
        'video_link' => $_POST['video_link']
    ));


    if ($insert) {

        Header("Location:../production/menu.php?durum=ok");
    } else {

        Header("Location:../production/menu.php?durum=no");
    }
}



if (isset($_POST['creation'])) {

    $str = 'assets/imgs/vertical_project/' . rand(1, 6) . '.jpg';


    $ayarekle = $db->prepare("INSERT INTO policy_list SET
		policy_Title_policy=:policy_Title_policy,
		policy_desc=:policy_desc,
		policy_Institution_Name=:policy_Institution_Name,
		policy_Document_Type=:policy_Document_Type,
		policy_Format=:policy_Format,
		policy_Country=:policy_Country,
		policy_PolicyisFor=:policy_PolicyisFor,
		policy_Link=:policy_Link,
		policy_sender=:policy_sender,
		policy_key1=:policy_key1,
		policy_Language=:policy_Language
		");

    $insert = $ayarekle->execute(array(
        'policy_Title_policy' => $_POST['policy_Title_policy'],
        'policy_desc' => $_POST['policy_desc'],
        'policy_Institution_Name' => $_POST['policy_Institution_Name'],
        'policy_Document_Type' => $_POST['policy_Document_Type'],
        'policy_Format' => $_POST['policy_Format'],
        'policy_Country' => $_POST['policy_Country'],
        'policy_PolicyisFor' => $_POST['policy_PolicyisFor'],
        'policy_Link' => $_POST['policy_Link'],
        'policy_sender' => $_POST['policy_sender'],
        'policy_key1' => $str,
        'policy_Language' => $_POST['policy_Language']
    ));


    if ($insert) {

        $policySor = $db->prepare("SELECT * FROM policy_list where policy_Title_policy=:policy_Title_policy and policy_Institution_Name=:policy_Institution_Name and policy_sender=:policy_sender ORDER BY policy_id DESC");
        $policySor->execute(array(
            'policy_Title_policy' => $_POST['policy_Title_policy'],
            'policy_Institution_Name' => $_POST['policy_Institution_Name'],
            'policy_sender' => $_POST['policy_sender']
        ));

        $policyCek = $policySor->fetch(PDO::FETCH_ASSOC);
        $policyID = $policyCek['policy_id'];

        Header("Location:../projects-create.php?part=2&policy_id=$policyID");
    } else {

        Header("Location:../projects-create.php?part=1");
    }
}





if (isset($_POST['addAttechment'])) {

    print_r($_FILES);
    $cont = 0;

    $dosyaSayisi = count($_FILES['dosya']['name']);

    for ($i = 0; $i < $dosyaSayisi; $i++) {
        $dosyaAdi = $_FILES['dosya']['name'][$i];
        $dosyaType = $_FILES['dosya']['type'][$i];
        $geciciKonum = $_FILES['dosya']['tmp_name'][$i];
        $benzersizsayi1 = rand(10000, 99000);
        // dosyayı yükle
        move_uploaded_file($geciciKonum, "../../files/policies/" . $benzersizsayi1 . $dosyaAdi);

        echo "Dosya adı: " . $dosyaAdi . "<br>";
        $contentUrl =  "policies/" . $benzersizsayi1 . $dosyaAdi;

        $ayarekle = $db->prepare("INSERT INTO policy_Attechments SET
		policy_Attechments_type=:policy_Attechments_type,
		policy_Attechments_url=:policy_Attechments_url,
		attechment_ContentName=:attechment_ContentName,
		attechment_ContentId=:attechment_ContentId
		");

        $insert = $ayarekle->execute(array(
            'policy_Attechments_type' => $dosyaType,
            'attechment_ContentId' => $_POST['attechment_ContentId'],
            'attechment_ContentName' => $dosyaAdi,
            'policy_Attechments_url' => $contentUrl
        ));
        if ($insert) {
        } else {
            $cont++;
        }
    }

    if ($cont == 0) {
        $policyID = $_POST['attechment_ContentId'];
        Header("Location:../projects-create.php?part=3&policy_id=$policyID");
    } else {
        Header("Location:../projects-create.php?part=2");
    }
}



if (isset($_POST['creationWithout'])) {

    $str = 'assets/imgs/vertical_project/' . rand(1, 6) . '.jpg';


    $ayarekle = $db->prepare("INSERT INTO policy_list SET
		policy_Title_policy=:policy_Title_policy,
		policy_desc=:policy_desc,
		policy_Institution_Name=:policy_Institution_Name,
		policy_Document_Type=:policy_Document_Type,
		policy_Format=:policy_Format,
		policy_Country=:policy_Country,
		policy_PolicyisFor=:policy_PolicyisFor,
		policy_Link=:policy_Link,
		policy_sender=:policy_sender,
		policy_key1=:policy_key1,
		policy_Language=:policy_Language
		");

    $insert = $ayarekle->execute(array(
        'policy_Title_policy' => $_POST['policy_Title_policy'],
        'policy_desc' => $_POST['policy_desc'],
        'policy_Institution_Name' => $_POST['policy_Institution_Name'],
        'policy_Document_Type' => $_POST['policy_Document_Type'],
        'policy_Format' => $_POST['policy_Format'],
        'policy_Country' => $_POST['policy_Country'],
        'policy_PolicyisFor' => $_POST['policy_PolicyisFor'],
        'policy_Link' => $_POST['policy_Link'],
        'policy_sender' => $_POST['policy_sender'],
        'policy_key1' => $str,
        'policy_Language' => $_POST['policy_Language']
    ));


    if ($insert) {

        $policySor = $db->prepare("SELECT * FROM policy_list where policy_Title_policy=:policy_Title_policy and policy_Institution_Name=:policy_Institution_Name and policy_sender=:policy_sender ORDER BY policy_id DESC");
        $policySor->execute(array(
            'policy_Title_policy' => $_POST['policy_Title_policy'],
            'policy_Institution_Name' => $_POST['policy_Institution_Name'],
            'policy_sender' => $_POST['policy_sender']
        ));

        $policyCek = $policySor->fetch(PDO::FETCH_ASSOC);
        $policyID = $policyCek['policy_id'];

        Header("Location:../withoutSendPolicy.php?part=2&policy_id=$policyID");
    } else {

        Header("Location:../withoutSendPolicy.php?part=1");
    }
}





if (isset($_POST['addAttechmentWithout'])) {

    print_r($_FILES);
    $cont = 0;

    $dosyaSayisi = count($_FILES['dosya']['name']);

    for ($i = 0; $i < $dosyaSayisi; $i++) {
        $dosyaAdi = $_FILES['dosya']['name'][$i];
        $dosyaType = $_FILES['dosya']['type'][$i];
        $geciciKonum = $_FILES['dosya']['tmp_name'][$i];
        $benzersizsayi1 = rand(10000, 99000);
        // dosyayı yükle
        move_uploaded_file($geciciKonum, "../../files/policies/" . $benzersizsayi1 . $dosyaAdi);

        echo "Dosya adı: " . $dosyaAdi . "<br>";
        $contentUrl =  "policies/" . $benzersizsayi1 . $dosyaAdi;

        $ayarekle = $db->prepare("INSERT INTO policy_Attechments SET
		policy_Attechments_type=:policy_Attechments_type,
		policy_Attechments_url=:policy_Attechments_url,
		attechment_ContentName=:attechment_ContentName,
		attechment_ContentId=:attechment_ContentId
		");

        $insert = $ayarekle->execute(array(
            'policy_Attechments_type' => $dosyaType,
            'attechment_ContentId' => $_POST['attechment_ContentId'],
            'attechment_ContentName' => $dosyaAdi,
            'policy_Attechments_url' => $contentUrl
        ));
        if ($insert) {
        } else {
            $cont++;
        }
    }

    if ($cont == 0) {
        $policyID = $_POST['attechment_ContentId'];
        Header("Location:../withoutSendPolicy.php?part=3&policy_id=$policyID");
    } else {
        Header("Location:../withoutSendPolicy.php?part=2");
    }
}





if (isset($_POST['updateDraft'])) {




    $ayarekle = $db->prepare("UPDATE policy_list SET
		policy_Draft=:policy_Draft
		
		WHERE policy_id={$_POST['policy_id']}");


    $insert = $ayarekle->execute(array(
        'policy_Draft' => $_POST['policy_Draft'],


    ));


    if ($insert) {

        Header("Location:../projects-overview.php?policy_id={$_POST['policy_id']}&updateState=ok");
    } else {

        Header("Location:../projects-overview.php?policy_id={$_POST['policy_id']}&updateState=no");
    }
}


if (isset($_POST['updatePolicy'])) {



    $cont = 0;

    if ($_FILES != null) {
        $dosyaSayisi = count($_FILES['dosya']['name']);

        for ($i = 0; $i < $dosyaSayisi; $i++) {
            $dosyaAdi = $_FILES['dosya']['name'][$i];
            $dosyaType = $_FILES['dosya']['type'][$i];
            $geciciKonum = $_FILES['dosya']['tmp_name'][$i];
            $benzersizsayi1 = rand(10000, 99000);
            // dosyayı yükle
            move_uploaded_file($geciciKonum, "../../files/policies/" . $benzersizsayi1 . $dosyaAdi);

            echo "Dosya adı: " . $dosyaAdi . "<br>";
            $contentUrl =  "policies/" . $benzersizsayi1 . $dosyaAdi;

            $ayarekle = $db->prepare("INSERT INTO policy_Attechments SET
		policy_Attechments_type=:policy_Attechments_type,
		policy_Attechments_url=:policy_Attechments_url,
		attechment_ContentName=:attechment_ContentName,
		attechment_ContentId=:attechment_ContentId
		");

            $insert = $ayarekle->execute(array(
                'policy_Attechments_type' => $dosyaType,
                'attechment_ContentId' => $_POST['policy_id'],
                'attechment_ContentName' => $dosyaAdi,
                'policy_Attechments_url' => $contentUrl
            ));
            if ($insert) {
            } else {
                $cont++;
            }
        }
    }





    $ayarekle = $db->prepare("UPDATE policy_list SET
		policy_Title_policy=:policy_Title_policy,
		policy_desc=:policy_desc,
		policy_Draft=:policy_Draft,
		policy_Link=:policy_Link,
		policy_Document_Type=:policy_Document_Type,
		policy_Format=:policy_Format,
		policy_Country=:policy_Country,
		policy_Language=:policy_Language,
		policy_PolicyisFor=:policy_PolicyisFor
		WHERE policy_id={$_POST['policy_id']}");


    $insert = $ayarekle->execute(array(
        'policy_Title_policy' => $_POST['policy_Title_policy'],
        'policy_desc' => $_POST['policy_desc'],
        'policy_Draft' => 0,
        'policy_Link' => $_POST['policy_Link'],
        'policy_Document_Type' => $_POST['policy_Document_Type'],
        'policy_Format' => $_POST['policy_Format'],
        'policy_Country' => $_POST['policy_Country'],
        'policy_Language' => $_POST['policy_Language'],
        'policy_PolicyisFor' => $_POST['policy_PolicyisFor']
    ));


    if ($insert) {

        Header("Location:../projects-overview.php?policy_id={$_POST['policy_id']}&updatedAll=ok");
    } else {

        Header("Location:../projects-overview.php?policy_id={$_POST['policy_id']}&updatedAll=no");
    }
}





if (isset($_POST['fatura_change'])) {




    $dosyaAdi = $_FILES['dosya']['name'][$i];
    $dosyaType = $_FILES['dosya']['type'][$i];
    $geciciKonum = $_FILES['dosya']['tmp_name'][$i];
    $benzersizsayi1 = rand(10000, 99000);
    // dosyayı yükle
    move_uploaded_file($geciciKonum, "../../files/policies/" . $benzersizsayi1 . $dosyaAdi);





    $ayarekle = $db->prepare("UPDATE payment_system SET
		payment_fromname=:payment_fromname,
		payment_fromemail=:payment_fromemail,
		payment_fromadres=:payment_fromadres,
		payment_fromphone=:payment_fromphone,
		payment_toname=:payment_toname,
		payment_toemail=:payment_toemail,
		payment_toadres=:payment_toadres,
		payment_tophone=:payment_tophone,
		payment_date=:payment_date,
		payment_duedate=:payment_duedate,
		payment_item1desc=:payment_item1desc,
		payment_item1details=:payment_item1details,
		payment_item1price=:payment_item1price,
		payment_item1qua=:payment_item1qua,
		payment_account=:payment_account,
		payment_cardmonth=:payment_cardmonth,
		payment_cardyear=:payment_cardyear,
		payment_cardname=:payment_cardname,
		payment_swift=:payment_swift,
		payment_country=:payment_country,
		payment_notes=:payment_notes,
		payment_logo=:payment_logo
		WHERE payment_id={$_POST['payment_id']}");


    $insert = $ayarekle->execute(array(
        'payment_fromname' => $_POST['payment_fromname'],
        'payment_fromemail' => $_POST['payment_fromemail'],
        'payment_fromadres' => $_POST['payment_fromadres'],
        'payment_fromphone' => $_POST['payment_fromphone'],
        'payment_toname' => $_POST['payment_toname'],
        'payment_toemail' => $_POST['payment_toemail'],
        'payment_toadres' => $_POST['payment_toadres'],
        'payment_tophone' => $_POST['payment_tophone'],
        'payment_date' => $_POST['payment_date'],
        'payment_duedate' => $_POST['payment_duedate'],
        'payment_item1desc' => $_POST['payment_item1desc'],
        'payment_item1details' => $_POST['payment_item1details'],
        'payment_item1price' => $_POST['payment_item1price'],
        'payment_item1qua' => $_POST['payment_item1qua'],
        'payment_account' => $_POST['payment_account'],
        'payment_cardmonth' => $_POST['payment_cardmonth'],
        'payment_cardyear' => $_POST['payment_cardyear'],
        'payment_cardname' => $_POST['payment_cardname'],
        'payment_swift' => $_POST['payment_swift'],
        'payment_country' => $_POST['payment_country'],
        'payment_toname' => $_POST['payment_toname'],
        'payment_notes' => $_POST['payment_notes'],

        'payment_logo' => $refimgyol

    ));


    if ($insert) {

        Header("Location:../apps_invoice-edit.php?durum=ok");
    } else {

        Header("Location:../apps_invoice-edit.php?durum=no");
    }
}


if (isset($_POST['blogCreate'])) {

    $uploads_dir = '../../files/blog/';
    @$tmp_name = $_FILES['blog_news_thumbnail']["tmp_name"];
    @$name = $_FILES['blog_news_thumbnail']["name"];
    //resmin isminin benzersiz olması
    $benzersizsayi1 = rand(20000, 32000);

    $benzersizad = $benzersizsayi1 . $benzersizsayi2 . $benzersizsayi3 . $benzersizsayi4;
    $refimgyol = substr($uploads_dir, 12) . "/" . $benzersizad . $name;
    @move_uploaded_file($tmp_name, "$uploads_dir/$benzersizad$name");

    $kaydet = $db->prepare("INSERT INTO blog_news SET

		blog_news_place=:blog_news_place,
		blog_news_title=:blog_news_title,
		blog_news_thumbnail=:blog_news_thumbnail,
		blog_news_sendBy=:blog_news_sendBy,

		blog_news_content=:blog_news_content
		");
    $insert = $kaydet->execute(array(

        'blog_news_place' => $_POST['blog_news_place'],
        'blog_news_title' => $_POST['blog_news_title'],
        'blog_news_thumbnail' => $refimgyol,
        'blog_news_sendBy' => $_POST['blog_news_sendBy'],

        'blog_news_content' => $_POST['blog_news_content']
    ));

    if ($insert) {

        Header("Location:../blog-grid.php?durum=ok");
    } else {

        Header("Location:../blog-grid.php?durum=no");
    }
}


if (isset($_POST['serviceCreate'])) {



    $kaydet = $db->prepare("INSERT INTO services SET

		services_title=:services_title,	

		services_content=:services_content
		");
    $insert = $kaydet->execute(array(

        'services_title' => $_POST['services_title'],

        'services_content' => $_POST['services_content']
    ));

    if ($insert) {

        Header("Location:../services.php?durum=ok");
    } else {

        Header("Location:../services.php?durum=no");
    }
}


if (isset($_POST['sliderUpdate'])) {

    $uploads_dir = '../../files/slider/';
    @$tmp_name = $_FILES['homePage_slider_thumbnail']["tmp_name"];
    @$name = $_FILES['homePage_slider_thumbnail']["name"];
    //resmin isminin benzersiz olması
    $benzersizsayi1 = rand(20000, 32000);

    $benzersizad = $benzersizsayi1 . $benzersizsayi2 . $benzersizsayi3 . $benzersizsayi4;
    $refimgyol = substr($uploads_dir, 12) . "/" . $benzersizad . $name;
    @move_uploaded_file($tmp_name, "$uploads_dir/$benzersizad$name");

    $ayarekle = $db->prepare("UPDATE homePage_sliders SET
		homePage_slider_title=:homePage_slider_title,
		homePage_slider_thumbnail=:homePage_slider_thumbnail,
		homePage_slider_subText=:homePage_slider_subText
		
		WHERE homePage_slider_id={$_POST['homePage_slider_id']}");


    $insert = $ayarekle->execute(array(
        'homePage_slider_thumbnail' => $refimgyol,
        'homePage_slider_title' => $_POST['homePage_slider_title'],
        'homePage_slider_subText' => $_POST['homePage_slider_subText']


    ));


    if ($insert) {

        Header("Location:../home_sliders.php?durum=ok");
    } else {

        Header("Location:../home_sliders.php?durum=no");
    }
}


if (isset($_POST['sliderCreate'])) {

    $uploads_dir = '../../files/slider/';
    @$tmp_name = $_FILES['homePage_slider_thumbnail']["tmp_name"];
    @$name = $_FILES['homePage_slider_thumbnail']["name"];
    //resmin isminin benzersiz olması
    $benzersizsayi1 = rand(20000, 32000);

    $benzersizad = $benzersizsayi1 . $benzersizsayi2 . $benzersizsayi3 . $benzersizsayi4;
    $refimgyol = substr($uploads_dir, 12) . "/" . $benzersizad . $name;
    @move_uploaded_file($tmp_name, "$uploads_dir/$benzersizad$name");

    $kaydet = $db->prepare("INSERT INTO homePage_sliders SET

		homePage_slider_title=:homePage_slider_title,
		homePage_slider_thumbnail=:homePage_slider_thumbnail,
		homePage_slider_subText=:homePage_slider_subText
		");
    $insert = $kaydet->execute(array(

        'homePage_slider_thumbnail' => $refimgyol,
        'homePage_slider_title' => $_POST['homePage_slider_title'],
        'homePage_slider_subText' => $_POST['homePage_slider_subText']
    ));

    if ($insert) {
        Header("Location:../home_sliders.php?durum=ok");
    } else {
        Header("Location:../home_sliders.php?durum=no");
    }
}

if ($_GET['deleteSlider'] == "ok") {

    $sil = $db->prepare("DELETE from homePage_sliders where homePage_slider_id=:homePage_slider_id");
    $kontrol = $sil->execute(array(
        'homePage_slider_id' => $_GET['homePage_slider_id']
    ));

    if ($kontrol) {
        Header("Location:../home_sliders.php?durum=ok");
    } else {
        Header("Location:../home_sliders.php?durum=no");
    }
}

if (isset($_POST['serviceUpdate'])) {


    $ayarekle = $db->prepare("UPDATE services SET
		services_title=:services_title,
		services_content=:services_content
		
		WHERE services_id={$_POST['services_id']}");


    $insert = $ayarekle->execute(array(
        'services_title' => $_POST['services_title'],
        'services_content' => $_POST['services_content']


    ));


    if ($insert) {

        Header("Location:../services.php?durum=ok");
    } else {

        Header("Location:../services.php?durum=no");
    }
}

if ($_GET['deleteService'] == "ok") {

    $sil = $db->prepare("DELETE from services where services_id=:services_id");
    $kontrol = $sil->execute(array(
        'services_id' => $_GET['service_id']
    ));

    if ($kontrol) {

        Header("Location:../services.php?durum=ok");
    } else {

        Header("Location:../services.php?durum=no");
    }
}


if ($_GET['deleteBlog'] == "ok") {

    $sil = $db->prepare("DELETE from blog_news where blog_news_id=:blog_news_id");
    $kontrol = $sil->execute(array(
        'blog_news_id' => $_GET['blogId']
    ));

    if ($kontrol) {

        Header("Location:../blog-grid.php?durum=ok");
    } else {

        Header("Location:../blog-grid.php?durum=no");
    }
}



if ($_GET['policysil'] == "ok") {

    $sil = $db->prepare("DELETE from policy_list where policy_id=:policy_id");
    $kontrol = $sil->execute(array(
        'policy_id' => $_GET['policy_id']
    ));

    if ($kontrol) {

        Header("Location:../projects-grid.php?durum=ok");
    } else {

        Header("Location:../projects-grid.php?durum=no");
    }
}


if ($_GET['deletePolicyAttechment'] == "ok") {

    $sil = $db->prepare("DELETE from policy_Attechments where policy_Attechments_id=:policy_Attechments_id");
    $kontrol = $sil->execute(array(
        'policy_Attechments_id' => $_GET['policy_Attechments_id']
    ));

    if ($kontrol) {

        Header("Location:../projects-create.php?part=3&policy_id={$_GET['policy_id']}&durum=ok");
    } else {

        Header("Location:../projects-create.php?part=3&policy_id={$_GET['policy_id']}&durum=no");
    }
}


if ($_GET['kategorisil'] == "ok") {

    $sil = $db->prepare("DELETE from kategori where kategori_id=:kategori_id");
    $kontrol = $sil->execute(array(
        'kategori_id' => $_GET['kategori_id']
    ));

    if ($kontrol) {

        Header("Location:../production/kategori.php?durum=ok");
    } else {

        Header("Location:../production/kategori.php?durum=no");
    }
}

if ($_GET['urunsil'] == "ok") {

    $sil = $db->prepare("DELETE from urun where urun_id=:urun_id");
    $kontrol = $sil->execute(array(
        'urun_id' => $_GET['urun_id']
    ));

    if ($kontrol) {

        Header("Location:../production/urun.php?durum=ok");
    } else {

        Header("Location:../production/urun.php?durum=no");
    }
}

if ($_GET['scrumbsil'] == "ok") {

    $sil = $db->prepare("DELETE from scrumboard where scrumb_id=:scrumb_id");
    $kontrol = $sil->execute(array(
        'scrumb_id' => $_GET['scrumb_id']
    ));

    if ($kontrol) {

        Header("Location:../apps_scrumboard.php?durum=ok");
    } else {

        Header("Location:../apps_scrumboard.php?durum=no");
    }
}

if ($_GET['categorysil'] == "ok") {

    $sil = $db->prepare("DELETE from scrumb_category where scrumb_id=:scrumb_id");
    $kontrol = $sil->execute(array(
        'scrumb_id' => $_GET['scrumb_id']
    ));

    if ($kontrol) {

        Header("Location:../apps_scrumboard.php?durum=ok");
    } else {

        Header("Location:../apps_scrumboard.php?durum=no");
    }
}




if (isset($_POST['yorumkaydet'])) {

    $comsayisi = (int)($_POST['banka_comment']) + 1;
    $kaydet = $db->prepare("UPDATE banka SET

		banka_comment=:seourl		
		WHERE banka_id={$_POST['urun_id']}");
    $update = $kaydet->execute(array(

        'seourl' => $comsayisi

    ));




    $gelen_url = $_POST['gelen_url'];

    $ayarekle = $db->prepare("INSERT INTO yorumlar SET
		yorum_detay=:yorum_detay,
		kullanici_id=:kullanici_id,
		urun_id=:urun_id	
		
		");

    $insert = $ayarekle->execute(array(
        'yorum_detay' => $_POST['yorum_detay'],
        'kullanici_id' => $_POST['kullanici_id'],
        'urun_id' => $_POST['urun_id']

    ));


    if ($insert) {

        Header("Location:$gelen_url");
    } else {

        Header("Location:$gelen_url");
    }
}


if (isset($_POST['sepetekle'])) {


    $ayarekle = $db->prepare("INSERT INTO sepet SET
		urun_adet=:urun_adet,
		kullanici_id=:kullanici_id,
		urun_id=:urun_id	
		
		");

    $insert = $ayarekle->execute(array(
        'urun_adet' => $_POST['urun_adet'],
        'kullanici_id' => $_POST['kullanici_id'],
        'urun_id' => $_POST['urun_id']

    ));


    if ($insert) {

        Header("Location:../../sepet?durum=ok");
    } else {

        Header("Location:../../sepet?durum=no");
    }
}


if ($_GET['urun_onecikar'] == "ok") {




    $duzenle = $db->prepare("UPDATE urun SET
		
		urun_onecikar=:urun_onecikar
		
		WHERE urun_id={$_GET['urun_id']}");

    $update = $duzenle->execute(array(


        'urun_onecikar' => $_GET['urun_one']
    ));



    if ($update) {



        Header("Location:../production/urun.php?durum=ok");
    } else {

        Header("Location:../production/urun.php?durum=no");
    }
}

if ($_GET['yorum_onay'] == "ok") {


    $duzenle = $db->prepare("UPDATE yorumlar SET
		
		yorum_onay=:yorum_onay
		
		WHERE yorum_id={$_GET['yorum_id']}");

    $update = $duzenle->execute(array(

        'yorum_onay' => $_GET['yorum_one']
    ));



    if ($update) {



        Header("Location:../production/yorum.php?durum=ok");
    } else {

        Header("Location:../production/yorum.php?durum=no");
    }
}



if ($_GET['yorumsil'] == "ok") {

    $sil = $db->prepare("DELETE from yorumlar where yorum_id=:yorum_id");
    $kontrol = $sil->execute(array(
        'yorum_id' => $_GET['yorum_id']
    ));

    if ($kontrol) {


        Header("Location:../production/yorum.php?durum=ok");
    } else {

        Header("Location:../production/yorum.php?durum=no");
    }
}




if ($_GET['seepost'] == "ok") {

    $banka_id = $_GET['banka_id'];
    $banka_gorunen = (int)($_GET['banka_gorunen']);
    $banka_gorunen = $banka_gorunen + 1;
    $duzenle = $db->prepare("UPDATE banka SET
		
		banka_gorunen=:banka_gorunen
		
		WHERE banka_id={$_GET['banka_id']}");

    $update = $duzenle->execute(array(

        'banka_gorunen' => $banka_gorunen
    ));



    if ($update) {


        Header("Location:../../2016/10/03/top-tips-to-stay-hydrated/index.php?banka_id=$banka_id");
    } else {

        Header("Location:../../2016/10/03/top-tips-to-stay-hydrated/index.php?banka_id=$banka_id");
    }
}


if (isset($_POST['bankaekle'])) {



    $kaydet = $db->prepare("INSERT INTO banka SET
		banka_ad=:ad,
		banka_kisa=:banka_kisa,
		banka_hesapadsoyad=:banka_hesapadsoyad,
		banka_tags=:banka_tags,
		banka_konu=:banka_konu,
		banka_usage=:banka_usage,
		banka_usages=:banka_usages,
		banka_sendby=:banka_sendby,
		banka_iban=:banka_iban
		");
    $insert = $kaydet->execute(array(
        'ad' => $_POST['banka_ad'],
        'banka_kisa' => $_POST['banka_kisa'],
        'banka_hesapadsoyad' => $_POST['banka_hesapadsoyad'],
        'banka_tags' => $_POST['banka_tags'],
        'banka_konu' => $_POST['banka_konu'],
        'banka_usage' => $_POST['banka_usage'],
        'banka_usages' => $_POST['banka_usages'],
        'banka_sendby' => $_POST['banka_sendby'],
        'banka_iban' => $_POST['banka_iban']
    ));

    if ($insert) {

        Header("Location:../production/banka.php?durum=ok");
    } else {

        Header("Location:../production/banka.php?durum=no");
    }
}


if (isset($_POST['userUpdate'])) {



    $kaydet = $db->prepare("UPDATE kullanici SET


		kullanici_yetki=:kullanici_yetki,
		kullanici_durum=:kullanici_durum,
		kullanici_dil=:kullanici_dil,	
		kullanici_adres=:kullanici_adres,	
		kullanici_Institue=:kullanici_Institue,	
		kullanici_adsoyad=:kullanici_adsoyad,	
		kullanici_gsm=:kullanici_gsm,
		kullanici_aciklama=:kullanici_aciklama

		WHERE kullanici_id={$_POST['kullanici_id']}");
    $update = $kaydet->execute(array(

        'kullanici_yetki' => $_POST['kullanici_yetki'],
        'kullanici_dil' => $_POST['kullanici_dil'],
        'kullanici_adres' => $_POST['kullanici_adres'],
        'kullanici_Institue' => $_POST['kullanici_Institue'],
        'kullanici_adsoyad' => $_POST['kullanici_adsoyad'],
        'kullanici_gsm' => $_POST['kullanici_gsm'],
        'kullanici_durum' => 1,
        'kullanici_aciklama' => $_POST['kullanici_aciklama']

    ));

    if ($update) {

        Header("Location:../contacts-profile.php?id={$_POST['kullanici_id']}&durum=ok");
    } else {

        Header("Location:../contacts-profile.php?id={$_POST['kullanici_id']}&durum=no");
    }
}



if (isset($_POST['postguncelle'])) {

    $banka_id = $_POST['banka_id'];
    $banka_place = $_POST['banka_place'];
    $banka_durum = 0;
    if ($banka_place != 0) {
        $banka_durum = 1;
    }

    $kaydet = $db->prepare("UPDATE banka SET


		post_yetkili=:post_yetkili,	
		banka_durum=:banka_durum,
		banka_place=:banka_place

		WHERE banka_id={$_POST['banka_id']}");
    $update = $kaydet->execute(array(

        'post_yetkili' => $_POST['post_yetkili'],
        'banka_durum' => $banka_durum,
        'banka_place' => $_POST['banka_place']

    ));

    if ($update) {

        Header("Location:../production/postdetay.php?banka_id=$banka_id&durum=ok");
    } else {

        Header("Location:../production/postdetay.php?banka_id=$banka_id&durum=no");
    }
}


if ($_GET['bankasil'] == "ok") {

    $sil = $db->prepare("DELETE from banka where banka_id=:banka_id");
    $kontrol = $sil->execute(array(
        'banka_id' => $_GET['banka_id']
    ));

    if ($kontrol) {


        Header("Location:../production/banka.php?durum=ok");
    } else {

        Header("Location:../production/banka.php?durum=no");
    }
}



if (isset($_POST['kullanicisifreguncelle'])) {

    echo $kullanici_eskipassword = trim($_POST['kullanici_eskipassword']);
    echo "<br>";
    echo $kullanici_passwordone = trim($_POST['kullanici_passwordone']);
    echo "<br>";
    echo $kullanici_passwordtwo = trim($_POST['kullanici_passwordtwo']);
    echo "<br>";

    $kullanici_password = md5($kullanici_eskipassword);


    $kullanicisor = $db->prepare("select * from kullanici where kullanici_password=:password");
    $kullanicisor->execute(array(
        'password' => $kullanici_password
    ));

    //dönen satır sayısını belirtir
    $say = $kullanicisor->rowCount();



    if ($say == 0) {

        header("Location:../../sifre-guncelle?durum=eskisifrehata");
    } else {



        //eski şifre doğruysa başla


        if ($kullanici_passwordone == $kullanici_passwordtwo) {


            if (strlen($kullanici_passwordone) >= 6) {


                //md5 fonksiyonu şifreyi md5 şifreli hale getirir.
                $password = md5($kullanici_passwordone);

                $kullanici_yetki = 1;

                $kullanicikaydet = $db->prepare("UPDATE kullanici SET
					kullanici_password=:kullanici_password
					WHERE kullanici_id={$_POST['kullanici_id']}");


                $insert = $kullanicikaydet->execute(array(
                    'kullanici_password' => $password
                ));

                if ($insert) {


                    header("Location:../../sifre-guncelle.php?durum=sifredegisti");


                    //Header("Location:../production/genel-ayarlar.php?durum=ok");

                } else {


                    header("Location:../../sifre-guncelle.php?durum=no");
                }





                // Bitiş



            } else {


                header("Location:../../sifre-guncelle.php?durum=eksiksifre");
            }
        } else {

            header("Location:../../sifre-guncelle?durum=sifreleruyusmuyor");

            exit;
        }
    }

    exit;

    if ($update) {

        header("Location:../../sifre-guncelle?durum=ok");
    } else {

        header("Location:../../sifre-guncelle?durum=no");
    }
}


//Sipariş İşlemleri

if (isset($_POST['bankasiparisekle'])) {


    $siparis_tip = "Banka Havalesi";


    $kaydet = $db->prepare("INSERT INTO siparis SET
		kullanici_id=:kullanici_id,
		siparis_tip=:siparis_tip,	
		siparis_banka=:siparis_banka,
		siparis_toplam=:siparis_toplam
		");
    $insert = $kaydet->execute(array(
        'kullanici_id' => $_POST['kullanici_id'],
        'siparis_tip' => $siparis_tip,
        'siparis_banka' => $_POST['siparis_banka'],
        'siparis_toplam' => $_POST['siparis_toplam']
    ));

    if ($insert) {

        //Sipariş başarılı kaydedilirse...

        echo $siparis_id = $db->lastInsertId();

        echo "<hr>";


        $kullanici_id = $_POST['kullanici_id'];
        $sepetsor = $db->prepare("SELECT * FROM sepet where kullanici_id=:id");
        $sepetsor->execute(array(
            'id' => $kullanici_id
        ));

        while ($sepetcek = $sepetsor->fetch(PDO::FETCH_ASSOC)) {

            $urun_id = $sepetcek['urun_id'];
            $urun_adet = $sepetcek['urun_adet'];

            $urunsor = $db->prepare("SELECT * FROM urun where urun_id=:id");
            $urunsor->execute(array(
                'id' => $urun_id
            ));

            $uruncek = $urunsor->fetch(PDO::FETCH_ASSOC);

            echo $urun_fiyat = $uruncek['urun_fiyat'];



            $kaydet = $db->prepare("INSERT INTO siparis_detay SET
				
				siparis_id=:siparis_id,
				urun_id=:urun_id,	
				urun_fiyat=:urun_fiyat,
				urun_adet=:urun_adet
				");
            $insert = $kaydet->execute(array(
                'siparis_id' => $siparis_id,
                'urun_id' => $urun_id,
                'urun_fiyat' => $urun_fiyat,
                'urun_adet' => $urun_adet

            ));
        }

        if ($insert) {



            //Sipariş detay kayıtta başarıysa sepeti boşalt

            $sil = $db->prepare("DELETE from sepet where kullanici_id=:kullanici_id");
            $kontrol = $sil->execute(array(
                'kullanici_id' => $kullanici_id
            ));


            Header("Location:../../siparislerim?durum=ok");
            exit;
        }
    } else {

        echo "başarısız";

        //Header("Location:../production/siparis.php?durum=no");
    }
}


if (isset($_POST['urunfotosil'])) {

    $urun_id = $_POST['urun_id'];


    echo $checklist = $_POST['urunfotosec'];


    foreach ($checklist as $list) {

        $sil = $db->prepare("DELETE from urunfoto where urunfoto_id=:urunfoto_id");
        $kontrol = $sil->execute(array(
            'urunfoto_id' => $list
        ));
    }

    if ($kontrol) {

        Header("Location:../production/urun-galeri.php?urun_id=$urun_id&durum=ok");
    } else {

        Header("Location:../production/urun-galeri.php?urun_id=$urun_id&durum=no");
    }
}


if (isset($_POST['mailayarkaydet'])) {

    $ayarkaydet = $db->prepare("UPDATE ayar SET
		ayar_smtphost=:smtphost,
		ayar_smtpuser=:smtpuser,
		ayar_smtppassword=:smtppassword,
		ayar_smtpport=:smtpport
		WHERE ayar_id=0");
    $update = $ayarkaydet->execute(array(
        'smtphost' => $_POST['ayar_smtphost'],
        'smtpuser' => $_POST['ayar_smtpuser'],
        'smtppassword' => $_POST['ayar_smtppassword'],
        'smtpport' => $_POST['ayar_smtpport']
    ));

    if ($update) {

        Header("Location:../production/mail-ayar.php?durum=ok");
    } else {

        Header("Location:../production/mail-ayar.php?durum=no");
    }
}



if (isset($_POST['iletisimekle'])) {

    $ayarkaydet = $db->prepare("INSERT INTO menu SET
		menu_ust=:menu_ust,
		menu_url=:menu_url,
		menu_ad=:menu_ad,
		menu_detay=:menu_detay
		");
    $update = $ayarkaydet->execute(array(
        'menu_ust' => $_POST['menu_ust'],
        'menu_url' => $_POST['menu_url'],
        'menu_ad' => $_POST['menu_ad'],
        'menu_detay' => $_POST['menu_detay']
    ));

    if ($update) {

        Header("Location:../../community-guidelines/index.php?page=5&durum=ok");
    } else {

        Header("Location:../../community-guidelines/index.php?page=5&durum=no");
    }
}
if (isset($_POST['reklamekle'])) {

    $ayarkaydet = $db->prepare("INSERT INTO siparis SET
		kullanici_name=:kullanici_name,
		siparis_konu=:siparis_konu,
		siparis_mail=:siparis_mail,
		siparis_content=:siparis_content
		");
    $update = $ayarkaydet->execute(array(
        'kullanici_name' => $_POST['kullanici_name'],
        'siparis_konu' => $_POST['siparis_konu'],
        'siparis_mail' => $_POST['siparis_mail'],
        'siparis_content' => $_POST['siparis_content']
    ));

    if ($update) {

        Header("Location:../../community-guidelines/index.php?page=8&durum=ok");
    } else {

        Header("Location:../../community-guidelines/index.php?page=8&durum=no");
    }
}

if (isset($_POST['aboneliksubmit'])) {
    $gelenurl = $_POST['gelen_url'];
    if (strlen($_POST['kullanici_id'])) {
        $ayarkaydet = $db->prepare("INSERT INTO slider SET

		kullanici_id=:kullanici_id
		");
        $update = $ayarkaydet->execute(array(

            'kullanici_id' => $_POST['kullanici_id']
        ));
    } else {

        $ayarkaydet = $db->prepare("INSERT INTO slider SET

		abonelik_mail=:abonelik_mail
		");
        $update = $ayarkaydet->execute(array(

            'abonelik_mail' => $_POST['abonelik_mail']
        ));
    }

    if ($update) {

        Header("Location:$gelenurl?durum=ok");
    } else {

        Header("Location:$gelenurl?durum=no");
    }
}





if (isset($_POST['note_add'])) {




    $ayarkaydet = $db->prepare("INSERT INTO notes SET

			note_content=:note_content,
			note_title=:note_title,
			note_user=:note_user
			");
    $update = $ayarkaydet->execute(array(

        'note_content' => $_POST['note_content'],
        'note_title' => $_POST['note_title'],
        'note_user' => $_POST['note_user']
    ));




    if ($update) {

        Header("Location:../apps_notes.php?durum=ok");
    } else {

        Header("Location:../apps_notes.php?durum=no");
    }
}








if (isset($_POST['mail_gonder'])) {


    $kullanicisor = $db->prepare("SELECT * FROM kullanici where kullanici_mail=:mail");
    $kullanicisor->execute(array(
        'mail' => $_POST['mail_adres']
    ));

    $kullanicicek = $kullanicisor->fetch(PDO::FETCH_ASSOC);

    if ($kullanicicek['kullanici_id'] != '') {
        $ayarkaydet = $db->prepare("INSERT INTO mailing SET

	mail_sendby=:mail_sendby,
	mail_adres=:mail_adres,
	mail_title=:mail_title,
	mail_content=:mail_content,
	mail_come=:mail_come
	");
        $update = $ayarkaydet->execute(array(

            'mail_sendby' => $_POST['mail_sendby'],
            'mail_adres' => $_POST['mail_adres'],
            'mail_title' => $_POST['mail_title'],
            'mail_content' => $_POST['mail_content'],
            'mail_come' => $kullanicicek['kullanici_id']
        ));
    } else {
        $ayarkaydet = $db->prepare("INSERT INTO mailing SET

	mail_sendby=:mail_sendby,
	mail_adres=:mail_adres,
	mail_title=:mail_title,
	mail_content=:mail_content,
	mail_come=:mail_come
	");
        $update = $ayarkaydet->execute(array(

            'mail_sendby' => $_POST['mail_sendby'],
            'mail_adres' => $_POST['mail_adres'],
            'mail_title' => $_POST['mail_title'],
            'mail_content' => $_POST['mail_content'],
            'mail_come' => 0
        ));
    }


    if ($update) {

        Header("Location:../apps_mailbox.php?durum=ok");
    } else {

        Header("Location:../apps_mailbox.php?durum=no");
    }
}



if (isset($_POST['calenderkayit'])) {



    $ayarkaydet = $db->prepare("INSERT INTO kalender SET
	
		calender_title=:calender_title,
		calender_begin=:calender_begin,
		calender_end=:calender_end,
		calender_content=:calender_content,
		calender_user=:calender_user,
		calender_class=:calender_class
		");
    $update = $ayarkaydet->execute(array(

        'calender_title' => $_POST['calender_title'],
        'calender_begin' => $_POST['calender_begin'],
        'calender_end' => $_POST['calender_end'],
        'calender_content' => $_POST['calender_content'],
        'calender_user' => $_POST['calender_user'],
        'calender_class' => $_POST['calender_class']
    ));



    if ($update) {

        Header("Location:../apps_calendar.php?durum=ok");
    } else {

        Header("Location:../apps_calendar.php?durum=no");
    }
}






if (isset($_POST['resultUpdate'])) {

    $ayarekle = $db->prepare("UPDATE project_result SET
		project_result_title=:project_result_title,
		project_result_desc=:project_result_desc
		
		WHERE project_result_id={$_POST['project_result_id']}");


    $insert = $ayarekle->execute(array(
        'project_result_title' => $_POST['project_result_title'],
        'project_result_desc' => $_POST['project_result_desc']
    ));


    if ($insert) {

        Header("Location:../project-result.php?durum=ok");
    } else {

        Header("Location:../project-result.php?durum=no");
    }
}


if (isset($_POST['resultCreate'])) {


    $kaydet = $db->prepare("INSERT INTO project_result SET
		project_result_title=:project_result_title,
		project_result_desc=:project_result_desc
		");
    $insert = $kaydet->execute(array(
        'project_result_title' => $_POST['project_result_title'],
        'project_result_desc' => $_POST['project_result_desc']
    ));

    if ($insert) {

        Header("Location:../project-result.php?durum=ok");
    } else {

        Header("Location:../project-result.php?durum=no");
    }
}

if ($_GET['deleteResult'] == "ok") {

    $sil = $db->prepare("DELETE from project_result where project_result_id=:project_result_id");
    $kontrol = $sil->execute(array(
        'project_result_id' => $_GET['project_result_id']
    ));

    if ($kontrol) {
        Header("Location:../project-result.php?durum=ok");
    } else {

        Header("Location:../project-result.php?durum=no");
    }
}



if (isset($_POST['PartnerUpdate'])) {

    if ($_FILES['partner_thumbnail']["tmp_name"] != null) {
        $uploads_dir = '../../files/slider/';
        @$tmp_name = $_FILES['partner_thumbnail']["tmp_name"];
        @$name = $_FILES['partner_thumbnail']["name"];
        //resmin isminin benzersiz olması
        $benzersizsayi1 = rand(20000, 32000);

        $benzersizad = $benzersizsayi1 . $benzersizsayi2 . $benzersizsayi3 . $benzersizsayi4;
        $refimgyol = substr($uploads_dir, 12) . "/" . $benzersizad . $name;
        @move_uploaded_file($tmp_name, "$uploads_dir/$benzersizad$name");

        $ayarekle = $db->prepare("UPDATE partners SET
		partner_title=:partner_title,
		partner_thumbnail=:partner_thumbnail,
		partner_desc=:partner_desc,
		partner_person=:partner_person,
		partner_mail=:partner_mail
		
		WHERE partner_id={$_POST['partner_id']}");


        $insert = $ayarekle->execute(array(
            'partner_thumbnail' => $refimgyol,
            'partner_title' => $_POST['partner_title'],
            'partner_desc' => $_POST['partner_desc'],
            'partner_person' => $_POST['member'],
            'partner_mail' => $_POST['partner_mail']
        ));
    } else {


        $ayarekle = $db->prepare("UPDATE partners SET
		partner_title=:partner_title,

		partner_desc=:partner_desc,
		partner_person=:partner_person,
		partner_mail=:partner_mail
		
		WHERE partner_id={$_POST['partner_id']}");


        $insert = $ayarekle->execute(array(

            'partner_title' => $_POST['partner_title'],
            'partner_desc' => $_POST['partner_desc'],
            'partner_person' => $_POST['member'],
            'partner_mail' => $_POST['partner_mail']
        ));
    }







    if ($insert) {

        Header("Location:../partners.php?durum=ok");
    } else {

        Header("Location:../partners.php?durum=no");
    }
}


if (isset($_POST['PartnerCreate'])) {

    $uploads_dir = '../../files/slider/';
    @$tmp_name = $_FILES['partner_thumbnail']["tmp_name"];
    @$name = $_FILES['partner_thumbnail']["name"];
    //resmin isminin benzersiz olması
    $benzersizsayi1 = rand(20000, 32000);

    $benzersizad = $benzersizsayi1 . $benzersizsayi2 . $benzersizsayi3 . $benzersizsayi4;
    $refimgyol = substr($uploads_dir, 12) . "/" . $benzersizad . $name;
    @move_uploaded_file($tmp_name, "$uploads_dir/$benzersizad$name");

    $kaydet = $db->prepare("INSERT INTO partners SET

		partner_title=:partner_title,
		partner_thumbnail=:partner_thumbnail,
		partner_desc=:partner_desc,
		partner_person=:partner_person,
		partner_mail=:partner_mail
		");
    $insert = $kaydet->execute(array(

        'partner_thumbnail' => $refimgyol,
        'partner_title' => $_POST['partner_title'],
        'partner_desc' => $_POST['partner_desc'],
        'partner_person' => $_POST['member'],
        'partner_mail' => $_POST['partner_mail']
    ));

    if ($insert) {
        Header("Location:../partners.php?durum=ok");
    } else {

        Header("Location:../partners.php?durum=no");
    }
}

if ($_GET['deletePartner'] == "ok") {

    $sil = $db->prepare("DELETE from partners where partner_id=:partner_id");
    $kontrol = $sil->execute(array(
        'partner_id' => $_GET['partner_id']
    ));

    if ($kontrol) {
        Header("Location:../partners.php?durum=ok");
    } else {

        Header("Location:../partners.php?durum=no");
    }
}
