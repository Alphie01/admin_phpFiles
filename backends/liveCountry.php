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

        $policy_document_types_sor = $db->prepare("SELECT * FROM policy_country WHERE policy_country_name LIKE '%$q%' limit 16");
        $policy_document_types_sor->execute(array(
            'kullanici_id' => $id
        ));
        $say = $policy_document_types_sor->rowCount();
        while ($policy_document_types_cek = $policy_document_types_sor->fetch(PDO::FETCH_ASSOC)) {
        ?>

            <div class="col-lg-3">
                <div class="form-check mb-3">
                    <input class="form-check-input" type="radio" value="<?= $policy_document_types_cek['policy_country_name'] ?>" name="policy_Country" id="policy_Country<?= $policy_document_types_cek['policy_country_id'] ?>">
                    <label class="form-check-label" for="policy_Country<?= $policy_document_types_cek['policy_country_id'] ?>">
                        <?= $policy_document_types_cek['policy_country_name'] ?>
                    </label>
                </div>
            </div>


        <?php
        }

        ?>
    </div>
</body>

</html>