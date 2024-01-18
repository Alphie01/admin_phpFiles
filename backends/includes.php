<?php


ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

ob_start();
session_start();
error_reporting(0);

include 'baglan.php';


///

$kullanicisor = $db->prepare("SELECT * FROM kullanici where kullanici_mail=:mail");
$kullanicisor->execute(array(
  'mail' => $_SESSION['kullanici_mail']
));
$say = $kullanicisor->rowCount();
$kullanicicek = $kullanicisor->fetch(PDO::FETCH_ASSOC);


if ($say == 0) {

  if($_SERVER['PHP_SELF']!='admin/withoutSendPolicy.php'){
      Header("Location:./auth-login.php?durum=izinsiz");
      exit;
  }
}

if ($kullanicicek['kullanici_durum'] == 0 and $_SERVER['PHP_SELF'] != '/admin/user-update.php') {
  Header("Location:./user-update.php");
  exit;
}

$dev = 0;




if (!isset($_SESSION['kullanici_mail'])) {
  Header("Location:./auth-login.php");
}
