<?php 

//Çoklu Dil Mantığı if/else

//$_SESSION['tr'];
//veya
////$_SESSION['eng'];

try {

  $db=new PDO("mysql:host=localhost;dbname=faithproject_db;charset=utf8",'faithproject_dbadmin','147258369456Onder');
	//echo "veritabanı bağlantısı başarılı";
}catch (PDOException $e) {
    // Burada oluşan hataların yönetimi için kodlar yazılır
    echo "Hata kodu: " . $e->getCode() . "<br>";
    echo "Hata mesajı: " . $e->getMessage() . "<br>";
  }