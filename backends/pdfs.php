<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Google API istemci kütüphanesini yükle
require_once __DIR__ . '/vendor/autoload.php';


// İndirmek istediğimiz PDF dosyasının dosya ID'sini girin
$fileId = '1Yiv2RNLHWi9tBSiA1pWcJI-CarIJYdxJ';

// Google Drive API erişimi için kimlik doğrulaması yapın
$client = new Google_Client();
$client->setApplicationName('Google Drive API PHP Örneği');
$client->setAccessToken('AIzaSyBN6zk-MmhNmlFyP8lk1uOwxkeOM_Rnz9o');
$client->setScopes(Google_Service_Drive::DRIVE_READONLY);
$client->setAuthConfig('credentials.json');
$client->setAccessType('offline');

// API istemcisini oluşturun ve dosya içeriğini indirin
$service = new Google_Service_Drive($client);
$content = $service->files->get($fileId, array('alt' => 'media'))->getBody()->getContents();

// İndirilen içeriği bir dosyaya yazın
$filename = 'indirilen.pdf';
$file = fopen($filename, 'w');
fwrite($file, $content);
fclose($file);
