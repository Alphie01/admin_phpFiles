<?php

include 'baglan.php';

$json_file = "credentials.json";

// JSON dosyasındaki verileri oku universityList
$json_data = file_get_contents($json_file);
$data = json_decode($json_data, true);

/* print_r($data); */

/* 
for ($i = 0; $i < count($data); $i++) {
    
    $kaydet = $db->prepare("INSERT INTO universityList SET

        university_webSite=:university_webSite,
        university_name=:university_name,
        university_alpha_two_code=:university_alpha_two_code,
        university_domains=:university_domains,
        university_country=:university_country
		");
    $insert = $kaydet->execute(array(

        'university_webSite' => $data[$i]['web_pages'][0],
        'university_name' => $data[$i]['name'],
        'university_alpha_two_code' => $data[$i]['alpha_two_code'],
        'university_domains' => $data[$i]['domains'][0],
        'university_country' => $data[$i]['country']
    ));

    if ($insert) {
        echo $data[$i]['name'].'ok <br>';
    } else {
        echo $data[$i]['name'].'no <br>';
    }
}
 */