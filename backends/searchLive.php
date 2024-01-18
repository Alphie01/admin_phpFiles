<?php


/* ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL); */

ob_start();
session_start();
error_reporting(0);

include 'baglan.php';



$kullanicisor = $db->prepare("SELECT * FROM kullanici where kullanici_mail=:mail");
$kullanicisor->execute(array(
    'mail' => $_SESSION['kullanici_mail']
));
$say = $kullanicisor->rowCount();
$kullanicicek = $kullanicisor->fetch(PDO::FETCH_ASSOC); ?>
<!DOCTYPE html>
<html>

<head>

    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }

        table,
        td,
        th {
            border: 1px solid black;
            padding: 5px;
        }

        th {
            text-align: left;
        }

        .memberSelection.active img {
            transition: .5s;
            padding: 5px;
        }

        .memberSelection p {
            color: black;
        }

        .memberSelection.active p {
            color: green;
        }

        .memberSelection.active img {
            transition: .5s;
            padding: 5px;
            border: solid 2px green;
        }
    </style>
</head>

<body>

    <div>
        <div data-simplebar style="max-height: 230px;">
            <?php

            $q = $_GET['q'];
            $id = $_GET['id'];

            /*             ini_set('display_errors', 1);
            ini_set('display_startup_errors', 1);
            error_reporting(E_ALL);
 */
            $searchPolicysor = $db->prepare("SELECT * FROM policy_list WHERE policy_Title_policy LIKE '%$q%' limit 3");
            $searchPolicysor->execute(array());
            $say = $searchPolicysor->rowCount();

            if ($say > 0) {
                echo '<h5 style="margin-left:25px;">Polices</h5>';
                while ($searchPolicycek = $searchPolicysor->fetch(PDO::FETCH_ASSOC)) {
            ?>

                    <a href="projects-overview.php?policy_id=<?= $searchPolicycek['policy_id'] ?>" class="text-reset notification-item">
                        <div class="d-flex">
                            <div class="avatar-xs me-3">
                                <span class="avatar-title bg-primary rounded-circle font-size-16">
                                    <i class="bx bx-file"></i>
                                </span>
                            </div>
                            <div class="flex-grow-1">
                                <h6 class="mt-0 mb-1" key="t-your-order"><?= $searchPolicycek['policy_Title_policy'] ?></h6>
                                <div class="font-size-12 text-muted">
                                    <p class="mb-1" key="t-grammer"><?= $searchPolicycek['policy_Language'] . ' - ' . $searchPolicycek['policy_Format'] . ' - ' . $searchPolicycek['policy_Document_Type'] ?></p>
                                    <p class="mb-0"><i class="mdi mdi-clock-outline"></i> <span key="t-min-ago"><?= $searchPolicycek['policy_timestamp'] ?></span></p>
                                </div>
                            </div>
                        </div>
                    </a>


            <?php
                }
            }

            ?>


            <?php
            if ($kullanicicek['kullanici_yetki'] > 0) {
                $searchkullanicisor = $db->prepare("SELECT * FROM kullanici WHERE kullanici_adsoyad LIKE '%$q%' limit 3");
                $searchkullanicisor->execute(array());
                $searchsay = $searchkullanicisor->rowCount();

                if ($searchsay > 0) {
                    echo '<h5 style="margin-left:25px;">Users</h5>';
                    while ($searchkullanicicek = $searchkullanicisor->fetch(PDO::FETCH_ASSOC)) {
            ?>

                        <a href="contacts-profile.php?id=<?= $searchkullanicicek['kullanici_id'] ?>" class="text-reset notification-item">
                            <div class="d-flex">
                                <img src="user.png" class="me-3 rounded-circle avatar-xs" alt="user-pic">
                                <div class="flex-grow-1">
                                    <h6 class="mt-0 mb-1"><?= $searchkullanicicek['kullanici_adsoyad'] ?></h6>
                                    <div class="font-size-12 text-muted">
                                        <p class="mb-1" key="t-simplified">
                                            <?php

                                            if ($searchkullanicicek['kullanici_yetki'] == 0) {
                                                echo 'User';
                                            } else if ($searchkullanicicek['kullanici_yetki'] == 1) {
                                                echo 'Approoved User';
                                            } else if ($searchkullanicicek['kullanici_yetki'] == 2) {
                                                echo 'Assistan';
                                            } else if ($searchkullanicicek['kullanici_yetki'] == 3) {
                                                echo 'Admin - Site Owner';
                                            } else if ($searchkullanicicek['kullanici_yetki'] == 4) {
                                                echo 'Developer';
                                            } else if ($searchkullanicicek['kullanici_yetki'] == 5) {
                                                echo 'Admin - Site Owner';
                                            }

                                            ?>
                                        </p>

                                    </div>
                                </div>
                            </div>
                        </a>


            <?php
                    }
                }
            }

            ?>


            <?php
            if ($kullanicicek['kullanici_yetki'] > 0) {
                $searchAttechmentsor = $db->prepare("SELECT * FROM policy_Attechments WHERE attechment_ContentName LIKE '%$q%' limit 3");
                $searchAttechmentsor->execute(array());
                $searchsay = $searchAttechmentsor->rowCount();

                if ($searchsay > 0) {
                    echo '<h5 style="margin-left:25px;">Attechments</h5>';
                    while ($searchAttechmentcek = $searchAttechmentsor->fetch(PDO::FETCH_ASSOC)) {
            ?>

                        <a href="" class="text-reset notification-item">
                            <div class="d-flex">
                                <div class="avatar-xs me-3">
                                    <span class="avatar-title bg-success rounded-circle font-size-16">
                                        <i class="bx bx-badge-check"></i>
                                    </span>
                                </div>
                                <div class="flex-grow-1">
                                    <h6 class="mt-0 mb-1" key="t-shipped"><?= $searchAttechmentcek['attechment_ContentName'] ?></h6>
                                    <div class="font-size-12 text-muted">
                                        <p class="mb-1" key="t-grammer"><?= $searchAttechmentcek['policy_Attechments_type'] ?></p>
                                        <p class="mb-0"><i class="mdi mdi-clock-outline"></i> <span key="t-min-ago"><?= $searchAttechmentcek['policy_Attechments_url'] ?></span></p>
                                    </div>
                                </div>
                            </div>
                        </a>


            <?php
                    }
                }
            }

            ?>



        </div>

    </div>




</body>

</html>