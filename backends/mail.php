<?php

// cPanel API'leri için gerekli değişkenler
$cpuser = "skolakademi";
$cppass = "p5DXvp5nBFhB";
$domain = "skolakademi.com";
$email_user = "email_username";
$email_pass = "p5DXvp5nBFhB";
$email_quota = "50"; // E-posta kotası MB cinsinden

// E-posta hesabı oluşturma isteği yapılıyor
$create_email = json_decode(file_get_contents("https://c002.ist.gny.name.tr:2083/json-api/cpanel?cpanel_jsonapi_user=$cpuser&cpanel_jsonapi_apiversion=2&cpanel_jsonapi_module=Email&cpanel_jsonapi_func=addpop&email=$email_user&password=$email_pass&quota=$email_quota&domain=$domain"), true);

// İşlem sonucunun kontrolü
if ($create_email['cpanelresult']['error']) {
    echo "Hata: " . $create_email['cpanelresult']['error'];
} else {
    echo "E-posta hesabı başarıyla oluşturuldu!" . $create_email;
}


/* 
 // cPanel hesap bilgileri
$cpanel_user = "skolakademi";
$cpanel_pass = "p5DXvp5nBFhB";

// cPanel JSON API URL
$json_api_url = "https://c002.ist.gny.name.tr:2083/json-api/cpanel";

// Oturum açmak için istek gönderin
$curl = curl_init();
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($curl, CURLOPT_HTTPHEADER, array('Authorization: cpanel '.$cpanel_user.':'.$cpanel_pass));
curl_setopt($curl, CURLOPT_URL, $json_api_url);
$result = curl_exec($curl);
curl_close($curl);

// Sonuçları görüntüleyin
print_r(json_decode($result));
 */