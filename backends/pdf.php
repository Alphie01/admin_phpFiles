<?php

include 'baglan.php';
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
/* $policysor = $db->prepare("SELECT * FROM policy_list ORDER BY policy_id DESC");
$policysor->execute(array(

));
$say = $policysor->rowCount();
while ($policycek = $policysor->fetch(PDO::FETCH_ASSOC)) {

    ?>  
    
    <a href="<?=$policycek['policy_PolicyDocumentLink'] ?>" target="_blank"><?=$policycek['policy_id'] ?></a> <br>
    
    <?php
    # code...
}
 */



$klasor = '../../files/policies';
$dosyalar = scandir($klasor);

// ". " ve ".." dosyalarını hariç tutmak için:
$dosyalar = array_diff($dosyalar, array('.', '..'));

// Dosyaları ekrana yazdırmak için:
foreach ($dosyalar as $dosya) {
    $exp = explode('.', $dosya);
    print_r($exp);
    if ($exp[1] == 'pdf') {
        $dosyaType = 'application/pdf';
    } elseif ($exp[0] == 'docx') {
        $dosyaType = 'application/vnd.openxmlformats-officedocument.wordprocessingml.document';
    }

    $contentUrl = 'policies/' . $dosya;

    $ayarekle = $db->prepare("INSERT INTO policy_Attechments SET
		policy_Attechments_type=:policy_Attechments_type,
		attechment_ContentName=:attechment_ContentName,
		policy_Attechments_url=:policy_Attechments_url,
		attechment_ContentId=:attechment_ContentId
		");

    $insert = $ayarekle->execute(array(
        'policy_Attechments_type' => $dosyaType,
        'attechment_ContentName' => $dosya,
        'attechment_ContentId' => $exp[0],
        'policy_Attechments_url' => $contentUrl
    ));
    if ($insert) {
        echo $dosya . ' ok<br>';
    } else {
        $cont++;
    }
}
