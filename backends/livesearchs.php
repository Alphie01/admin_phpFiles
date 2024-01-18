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

    <div class="row mt-3">
        <?php
        $q = $_GET['q'];
        $id = $_GET['id'];
        include './baglan.php';

        $kullanicisor = $db->prepare("SELECT * FROM kullanici WHERE NOT kullanici_id=:kullanici_id and kullanici_adsoyad LIKE '%$q%' limit 6");
        $kullanicisor->execute(array(
            'kullanici_id' => $id
        ));
        $say = $kullanicisor->rowCount();
        while ($kullanicicek = $kullanicisor->fetch(PDO::FETCH_ASSOC)) {
        ?>

            <div class="col-4 memberSelection" onclick="selectPerson(<?=$kullanicicek['kullanici_id'] ?>)" id="memberSelection<?=$kullanicicek['kullanici_id'] ?>" style="display: flex; flex-direction:column; align-items:center; justify-content:center;">
                <div>
                    <img src="<?php  
                    
                    if ($kullanicicek['kullanici_resim']== null) {
                        echo './user.png';
                    }else {
                        echo $kullanicicek['kullanici_resim'];
                    }
                    
                    
                    ?>" alt="" style="height: 50px; width:50px; border-radius:100%;" srcset="">
                </div>
                <input type="hidden" id="member_id" value="<?= $kullanicicek['kullanici_id'] ?>">
                <div class="">
                    <p> <?= $kullanicicek['kullanici_adsoyad'] ?></p>
                </div>
                <div class="">
                    <p><?= $kullanicicek['kullanici_mail'] ?></p>
                </div>
            </div>
            

        <?php
        }

        ?>
    </div>
</body>

</html>