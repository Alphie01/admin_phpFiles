<?php

include './baglan.php';
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
$arr = array();
$calender = $db->prepare("SELECT * FROM calender_event");
$calender->execute(array());
$say = $calender->rowCount();
while ($calendercek = $calender->fetch(PDO::FETCH_ASSOC)) {
    $pusher = array();
    $pusher['event'] = $calendercek;
    $calendercreator = $db->prepare("SELECT * FROM kullanici where kullanici_id=:kullanici_id");
    $calendercreator->execute(array(
        'kullanici_id' => $calendercek['calender_event_creator']
    ));
    $say = $calendercreator->rowCount();
    $calendercreatorcek = $calendercreator->fetch(PDO::FETCH_ASSOC);
    $pusher['creator'] = $calendercreatorcek;
    array_push($arr, $pusher);
}


header('Content-Type: application/json');
echo json_encode($arr);
