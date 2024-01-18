<?php

include './backends/includes.php';

$policySor = $db->prepare("SELECT * FROM policy_list where policy_id=:policy_id");
$policySor->execute(array(
    'policy_id' => $_GET['policy_id']
));

$policyCek = $policySor->fetch(PDO::FETCH_ASSOC);


if ($_GET['user_id'] != null) {
    $id = $_GET['user_id'];
} else {
    $id = $kullanicicek['kullanici_id'];
}


$selectedUsersor = $db->prepare("SELECT * FROM kullanici where kullanici_id=:kullanici_id");
$selectedUsersor->execute(array(
    'kullanici_id' => $id
));
$selectedUsercek = $selectedUsersor->fetch(PDO::FETCH_ASSOC);

?>
<!doctype html>
<html lang="tr">

<head>

    <meta charset="utf-8" />
    <title>Create New Project |Admin Panel</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Desc" name="description" />
    <meta content="AlpSelcuk" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <link href="assets/libs/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet">

    <!-- dropzone css -->
    <link href="assets/libs/dropzone/min/dropzone.min.css" rel="stylesheet" type="text/css" />

    <!-- Bootstrap Css -->
    <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />
</head>

<body data-sidebar="dark">
    <!-- Begin page -->
    <div id="layout-wrapper">

        <?php

        include './backends/header.php';

        ?>
        <!-- Left Sidebar End -->
        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">

            <div class="page-content">
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <h4 class="mb-sm-0 font-size-18">Create New</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Projects</a></li>
                                        <li class="breadcrumb-item active">Create New</li>
                                    </ol>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- end page title -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="" style="display: flex; align-items:center; justify-content:space-between">
                                        <h4 class="card-title mb-4">Create New Project</h4>
                                        <?php  ?>
                                    </div>
                                    <form action="./backends/islem.php" method="post" id="myForm">
                                        <div class="row mb-4">
                                            <label for="policy_Title_policy" class="col-form-label col-lg-2">Your Mail</label>
                                            <div class="col-lg-10">
                                                <input id="projectname" name="kullanici_mail" value="<?= $selectedUsercek['kullanici_mail'] ?>" disabled type="text" class="form-control" placeholder="Enter Project Name...">
                                            </div>
                                        </div>
                                        <div class="row mb-4">
                                            <label for="policy_Title_policy" class="col-form-label col-lg-2">Username</label>
                                            <div class="col-lg-10">
                                                <input id="projectname" name="kullanici_ad" value="<?= $selectedUsercek['kullanici_ad'] ?>" disabled type="text" class="form-control" placeholder="Enter Project Name...">
                                            </div>
                                        </div>
                                        <div class="row mb-4">
                                            <label for="policy_Title_policy" class="col-form-label col-lg-2">Name And Surname</label>
                                            <div class="col-lg-10">
                                                <input id="projectname" name="kullanici_adsoyad" value="<?= $selectedUsercek['kullanici_adsoyad'] ?>" type="text" class="form-control" placeholder="Enter Project Name...">
                                            </div>
                                        </div>
                                        <div class="row mb-4">
                                            <label for="policy_desc" class="col-form-label col-lg-2">About You</label>
                                            <div class="col-lg-10">
                                                <textarea class="form-control" name="kullanici_aciklama" id="kullanici_aciklama" rows="3" placeholder="Enter Project Description..."><?= $selectedUsercek['kullanici_aciklama'] ?></textarea>
                                            </div>
                                        </div>
                                        <div class="row mb-4">
                                            <label for="policy_Link" class="col-form-label col-lg-2">Phone Number</label>
                                            <div class="col-lg-10">

                                                <input id="policy_Link" name="kullanici_gsm" value="<?= $selectedUsercek['kullanici_gsm'] ?>" type="number" class="form-control" placeholder="Enter Project Link...">
                                            </div>
                                        </div>
                                        <div class="row mb-4">
                                            <label for="policy_Institution_Name" class="col-form-label col-lg-2">Institution Name</label>
                                            <div class="col-md-10">
                                                <input class="form-control" name="kullanici_Institue" value="<?= $selectedUsercek['kullanici_Institue'] ?>" list="kullanici_Institue" id="exampleDataList" placeholder="Type to search...">
                                                <datalist id="kullanici_Institue">
                                                    <?php

                                                    $policy_document_types_sor = $db->prepare("SELECT * FROM universityList ORDER BY university_id ASC");
                                                    $policy_document_types_sor->execute(array());
                                                    while ($policy_document_types_cek = $policy_document_types_sor->fetch(PDO::FETCH_ASSOC)) {
                                                    ?>
                                                        <option value="<?= $policy_document_types_cek['university_name'] ?>">
                                                        <?php } ?>

                                                </datalist>
                                            </div>
                                        </div>


                                        <div class="row mb-4">
                                            <label for="exampleDataList" class="col-md-2 col-form-label">Country</label>
                                            <div class="col-md-10">
                                                <input class="form-control" name="kullanici_adres" value="<?= $selectedUsercek['kullanici_adres'] ?>" list="kullanici_adres" id="exampleDataList" placeholder="Type to search...">
                                                <datalist id="kullanici_adres">
                                                    <?php

                                                    $policy_document_types_sor = $db->prepare("SELECT * FROM policy_country ORDER BY policy_country_id ASC");
                                                    $policy_document_types_sor->execute(array());
                                                    while ($policy_document_types_cek = $policy_document_types_sor->fetch(PDO::FETCH_ASSOC)) {
                                                    ?>
                                                        <option value="<?= $policy_document_types_cek['policy_country_name'] ?>">
                                                        <?php } ?>

                                                </datalist>
                                            </div>
                                        </div>

                                        <div class="row mb-4">
                                            <label for="exampleDataList" class="col-md-2 col-form-label">Language</label>
                                            <div class="col-md-10">
                                                <input class="form-control" name="kullanici_dil" value="<?= $selectedUsercek['kullanici_dil'] ?>" list="kullanici_dil" id="exampleDataList" placeholder="Type to search...">
                                                <datalist id="kullanici_dil">
                                                    <?php

                                                    $policy_document_types_sor = $db->prepare("SELECT * FROM policy_language ORDER BY policy_language_id ASC");
                                                    $policy_document_types_sor->execute(array());
                                                    while ($policy_document_types_cek = $policy_document_types_sor->fetch(PDO::FETCH_ASSOC)) {

                                                    ?>
                                                        <option value="<?= $policy_document_types_cek['policy_language_name'] ?>">
                                                        <?php } ?>

                                                </datalist>
                                            </div>
                                        </div>
                                        <input type="hidden" name="kullanici_id" value="<?= $selectedUsercek['kullanici_id'] ?>">
                                        <div class="mb-3 row">
                                            <label class="col-md-2 col-form-label">User Permision</label>
                                            <div class="col-md-10">
                                                <select class="form-select" name="kullanici_yetki" <?php if ($kullanicicek['kullanici_yetki'] < 4) {
                                                                                                        echo 'disabled';
                                                                                                    } ?>>

                                                    <option value="0" <?php if ($selectedUsercek['kullanici_yetki'] == 0) {
                                                                            echo 'selected';
                                                                        } ?>>User</option>
                                                    <option value="1" <?php if ($selectedUsercek['kullanici_yetki'] == 1) {
                                                                            echo 'selected';
                                                                        } ?>>Approved User</option>
                                                    <option value="2" <?php if ($selectedUsercek['kullanici_yetki'] == 2) {
                                                                            echo 'selected';
                                                                        } ?>>Asistan</option>
                                                    <option value="4" <?php if ($selectedUsercek['kullanici_yetki'] == 4) {
                                                                            echo 'selected';
                                                                        } ?>>Developer</option>
                                                    <option value="5" <?php if ($selectedUsercek['kullanici_yetki'] == 5) {
                                                                            echo 'selected';
                                                                        } ?>>Admin - Site Owner</option>
                                                </select>
                                            </div>
                                        </div>


                                        <div class="row justify-content-end">
                                            <div class="col-lg-10">
                                                <button type="submit" name="userUpdate" class="btn btn-primary">Submit And Next</button>
                                            </div>
                                        </div>
                                    </form>




                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end row -->

                </div> <!-- container-fluid -->
            </div>
            <!-- End Page-content -->


            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6">
                            <script>
                                document.write(new Date().getFullYear())
                            </script> © Skote.
                        </div>
                        <div class="col-sm-6">
                            <div class="text-sm-end d-none d-sm-block">
                                Design & Develop by Themesbrand
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->

    <!-- Right Sidebar -->
    <!-- /Right-bar -->

    <!-- Right bar overlay-->
    <div class="rightbar-overlay"></div>
    <!-- JAVASCRIPT -->

    <script src="assets/libs/jquery/jquery.min.js"></script>
    <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/libs/metismenu/metisMenu.min.js"></script>
    <script src="assets/libs/simplebar/simplebar.min.js"></script>
    <script src="assets/libs/node-waves/waves.min.js"></script>
    <!-- bootstrap datepicker -->
    <script src="assets/libs/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>

    <!-- dropzone plugin -->
    <script src="assets/libs/dropzone/min/dropzone.min.js"></script>

    <script src="assets/js/app.js"></script>

</body>

</html>