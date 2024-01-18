<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include './baglan.php';
/* 	calender_event_title	calender_event_body	calender_event_start	calender_event_isAllday	calender_event_location	calender_event_type	 */
if ($_GET['calenderNewKayit'] == 'ok') {


  $say = $_GET['calender_event_type'] - 1;
  $kaydet = $db->prepare("INSERT INTO calender_event SET
		calender_event_title=:calender_event_title,
		calender_event_body=:calender_event_body,
		calender_event_start=:calender_event_start,
		calender_event_end=:calender_event_end,
		calender_event_isAllday=:calender_event_isAllday,
		calender_event_location=:calender_event_location,
		calender_event_creator=:calender_event_creator,
		calender_event_type=:calender_event_type
		");
  $insert = $kaydet->execute(array(
    'calender_event_title' => $_GET['calender_event_title'],
    'calender_event_body' => $_GET['calender_event_body'],
    'calender_event_start' => $_GET['calender_event_start'],
    'calender_event_end' => $_GET['calender_event_end'],
    'calender_event_isAllday' => $_GET['calender_event_isAllday'],
    'calender_event_location' => $_GET['calender_event_location'],
    'calender_event_creator' => $_GET['calender_event_creator'],
    'calender_event_type' => $say
  ));
}



if ($_GET['updateCalender'] == 'ok') {


  $say = $_GET['calender_event_type'] - 1;
  $kaydet = $db->prepare("UPDATE calender_event SET
		calender_event_title=:calender_event_title,
		calender_event_start=:calender_event_start,
		calender_event_end=:calender_event_end,
		calender_event_isAllday=:calender_event_isAllday,
		calender_event_location=:calender_event_location,
		calender_event_creator=:calender_event_creator,
		calender_event_type=:calender_event_type
    WHERE calender_event_id={$_GET['calender_event_id']}
		");
  $insert = $kaydet->execute(array(
    'calender_event_title' => $_GET['calender_event_title'],
    'calender_event_start' => $_GET['calender_event_start'],
    'calender_event_end' => $_GET['calender_event_end'],
    'calender_event_isAllday' => $_GET['calender_event_isAllday'],
    'calender_event_location' => $_GET['calender_event_location'],
    'calender_event_creator' => $_GET['calender_event_creator'],
    'calender_event_type' => $say
  ));
}
