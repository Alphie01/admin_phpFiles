<?php


ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

ob_start();
session_start();
error_reporting(0);

include './backends/baglan.php';





$policySor = $db->prepare("SELECT * FROM policy_list where policy_id=:policy_id");
$policySor->execute(array(
    'policy_id' => $_GET['policy_id']
));

$policyCek = $policySor->fetch(PDO::FETCH_ASSOC);


$policyAttechmentSor = $db->prepare("SELECT * FROM policy_Attechments where attechment_ContentId=:attechment_ContentId");
$policyAttechmentSor->execute(array(
    'attechment_ContentId' => $_GET['policy_id']
));
$PageAttechmentsay = $policyAttechmentSor->rowCount();
$policyAttechmentCek = $policyAttechmentSor->fetchAll(PDO::FETCH_ASSOC);

?>
<!doctype html>
<html lang="tr">

<head>
    <meta charset="utf-8" />
    <title>Create New Policy |Admin Panel</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Desc" name="description" />
    <meta content="AlpSelcuk" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

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


        <!-- Left Sidebar End -->
        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content" style="margin-left: 0;">

            <div class="page-content">
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <h4 class="mb-sm-0 font-size-18">Create New</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Policy</a></li>
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
                                        <h4 class="card-title mb-4">Create New Policy</h4>
                                        <?php if ($_GET['part'] == 1) {
                                            # code...
                                        ?>
                                            <div class="" style="display: flex; flex-direction:row;">
                                                <div class="" style="display: flex; flex-direction:column; align-items:center;">
                                                    <div class="" style="width: 15px; height:15px; border-radius:15px; background-color:green; margin:15px 30px;"></div>
                                                    <p>Creation</p>
                                                </div>
                                                <div class="" style="display: flex; flex-direction:column; align-items:center;">
                                                    <div class="" style="width: 15px; height:15px; border-radius:15px; border:1px solid black; margin:15px 30px;"></div>
                                                    <p>Add Content</p>
                                                </div>
                                                <div class="" style="display: flex; flex-direction:column; align-items:center;">
                                                    <div class="" style="width: 15px; height:15px; border-radius:15px; border:1px solid black; margin:15px 30px;"></div>
                                                    <p>Finalize</p>
                                                </div>
                                            </div>
                                        <?php }
                                        if ($_GET['part'] == 2) {
                                            # code...
                                        ?>
                                            <div class="" style="display: flex; flex-direction:row;">
                                                <div class="" style="display: flex; flex-direction:column; align-items:center;">
                                                    <div class="" style="width: 15px; height:15px; border-radius:15px; background-color:green; margin:15px 30px;"></div>
                                                    <p>Creation</p>
                                                </div>
                                                <div class="" style="display: flex; flex-direction:column; align-items:center;">
                                                    <div class="" style="width: 15px; height:15px; border-radius:15px; background-color:green; margin:15px 30px;"></div>
                                                    <p>Add Content</p>
                                                </div>
                                                <div class="" style="display: flex; flex-direction:column; align-items:center;">
                                                    <div class="" style="width: 15px; height:15px; border-radius:15px; border:1px solid black; margin:15px 30px;"></div>
                                                    <p>Finalize</p>
                                                </div>
                                            </div>
                                        <?php }
                                        if ($_GET['part'] == 3) {
                                            # code...
                                        ?>
                                            <div class="" style="display: flex; flex-direction:row;">
                                                <div class="" style="display: flex; flex-direction:column; align-items:center;">
                                                    <div class="" style="width: 15px; height:15px; border-radius:15px; background-color:green; margin:15px 30px;"></div>
                                                    <p>Creation</p>
                                                </div>
                                                <div class="" style="display: flex; flex-direction:column; align-items:center;">
                                                    <div class="" style="width: 15px; height:15px; border-radius:15px; background-color:green; margin:15px 30px;"></div>
                                                    <p>Add Content</p>
                                                </div>
                                                <div class="" style="display: flex; flex-direction:column; align-items:center;">
                                                    <div class="" style="width: 15px; height:15px; border-radius:15px; background-color:green; margin:15px 30px;"></div>
                                                    <p>Finalize</p>
                                                </div>
                                            </div>
                                        <?php } ?>
                                        <?php  ?>
                                    </div>
                                    <?php if ($_GET['part'] == 1) { ?>
                                        <form action="./backends/islem.php" method="post" id="myForm">
                                            <div class="row mb-4">
                                                <label for="policy_Title_policy" class="col-form-label col-lg-2">Policy Title</label>
                                                <div class="col-lg-10">
                                                    <input id="Policyname" name="policy_Title_policy" type="text" class="form-control" placeholder="Enter Policy Name...">
                                                </div>
                                            </div>
                                            <div class="row mb-4">
                                                <label for="policy_desc" class="col-form-label col-lg-2">Policy Description</label>
                                                <div class="col-lg-10">
                                                    <textarea class="form-control" name="policy_desc" id="policy_desc" rows="3" placeholder="Enter Policy Description..."></textarea>
                                                </div>
                                            </div>
                                            <div class="row mb-4">
                                                <label for="policy_Link" class="col-form-label col-lg-2">Policy Link</label>
                                                <div class="col-lg-10">

                                                    <input id="policy_Link" name="policy_Link" type="text" class="form-control" placeholder="Enter Policy Link...">
                                                </div>
                                            </div>
                                            <div class="row mb-4">
                                                <label for="policy_Institution_Name" class="col-form-label col-lg-2">Institution Name</label>

                                                <div class="col-md-9">
                                                    <input class="form-control" name="policy_Institution_Name" onkeyup="showRemoveInstitution(this.value)" value="<?= $kullanicicek['kullanici_Institue'] ?>" list="kullanici_Institue" id="exampleInstitutionInput" placeholder="Type to search...">
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
                                                <div class="col-md-1" id="removeInstitution" onclick="removeInstitution()" style="display:none;">
                                                    <div class="btn btn-danger">X Remove</div>
                                                </div>
                                            </div>

                                            <div class="row mb-4">
                                                <label for="exampleDataList" class="col-md-2 col-form-label">Document Type</label>
                                                <div class="col-md-9">
                                                    <input class="form-control" name="policy_Document_Type" list="policy_Document_Type" onkeyup="showRemovedocument(this.value)" id="exampledocumentInput" placeholder="Type to search...">
                                                    <datalist id="policy_Document_Type">
                                                        <?php

                                                        $policy_document_types_sor = $db->prepare("SELECT * FROM policy_document_types ORDER BY policy_document_types_id ASC");
                                                        $policy_document_types_sor->execute(array());
                                                        while ($policy_document_types_cek = $policy_document_types_sor->fetch(PDO::FETCH_ASSOC)) {

                                                        ?>
                                                            <option value="<?= $policy_document_types_cek['policy_document_types_name'] ?>">

                                                            <?php } ?>

                                                    </datalist>
                                                </div>
                                                <div class="col-md-1" id="removedocument" onclick="removedocument()" style="display:none;">
                                                    <div class="btn btn-danger">X Remove</div>
                                                </div>
                                            </div>
                                            <div class="row mb-4">
                                                <label for="exampleDataList" class="col-md-2 col-form-label">Format</label>
                                                <div class="col-md-9">
                                                    <input class="form-control" name="policy_Format" onkeyup="showRemoveFormat(this.value)" list="policy_Format" id="exampleFormatInput" placeholder="Type to search...">
                                                    <datalist id="policy_Format">
                                                        <option value="PDF">
                                                        <option value="WORD">
                                                        <option value="HTML">
                                                    </datalist>
                                                </div>
                                                <div class="col-md-1" id="removeFormat" onclick="removeFormat()" style="display:none;">
                                                    <div class="btn btn-danger">X Remove</div>
                                                </div>
                                            </div>

                                            <div class="row mb-4">
                                                <label for="exampleDataList" class="col-md-2 col-form-label">Country</label>
                                                <div class="col-md-9">
                                                    <input class="form-control" name="policy_Country" value="<?= $kullanicicek['kullanici_adres'] ?>" list="policy_Country" onkeyup="showRemoveCountry(this.value)" id="exampleCountryInput" placeholder="Type to search...">
                                                    <datalist id="policy_Country">
                                                        <?php

                                                        $policy_document_types_sor = $db->prepare("SELECT * FROM policy_country ORDER BY policy_country_id ASC");
                                                        $policy_document_types_sor->execute(array());
                                                        while ($policy_document_types_cek = $policy_document_types_sor->fetch(PDO::FETCH_ASSOC)) {
                                                        ?>
                                                            <option value="<?= $policy_document_types_cek['policy_country_name'] ?>">
                                                            <?php } ?>

                                                    </datalist>

                                                </div>
                                                <div class="col-md-1" id="removeCountry" onclick="removeCountry()" style="display:none;">
                                                    <div class="btn btn-danger">X Remove</div>
                                                </div>
                                            </div>

                                            <div class="row mb-4">
                                                <label for="exampleDataList" class="col-md-2 col-form-label">Language</label>
                                                <div class="col-md-9">
                                                    <input class="form-control" name="policy_Language" value="<?= $kullanicicek['kullanici_dil'] ?>" list="policy_Language" onkeyup="showRemoveLanguage(this.value)" id="exampleLanguageInput" placeholder="Type to search...">
                                                    <datalist id="policy_Language">
                                                        <?php

                                                        $policy_document_types_sor = $db->prepare("SELECT * FROM policy_language ORDER BY policy_language_id ASC");
                                                        $policy_document_types_sor->execute(array());
                                                        while ($policy_document_types_cek = $policy_document_types_sor->fetch(PDO::FETCH_ASSOC)) {

                                                        ?>
                                                            <option value="<?= $policy_document_types_cek['policy_language_name'] ?>">
                                                            <?php } ?>

                                                    </datalist>
                                                </div>
                                                <div class="col-md-1" id="removeLanguage" onclick="removeLanguage()" style="display:none;">
                                                    <div class="btn btn-danger">X Remove</div>
                                                </div>
                                            </div>
                                            <input type="hidden" name="policy_sender" value="<?= $kullanicicek['kullanici_id'] ?>">
                                            <div class="row mb-4">
                                                <label for="exampleDataList" class="col-md-2 col-form-label">Policy is for :</label>
                                                <div class="col-md-9">
                                                    <input class="form-control" name="policy_PolicyisFor" list="policy_PolicyisFor" onkeyup="showRemoveisFor(this.value)" id="exampleisForInput" placeholder="Type to search...">
                                                    <datalist id="policy_PolicyisFor">
                                                        <?php

                                                        $policy_document_types_sor = $db->prepare("SELECT * FROM policy_isFor_types ORDER BY policy_isFor_types_id ASC");
                                                        $policy_document_types_sor->execute(array());
                                                        while ($policy_document_types_cek = $policy_document_types_sor->fetch(PDO::FETCH_ASSOC)) {

                                                        ?>
                                                            <option value="<?= $policy_document_types_cek['policy_isFor_types_name'] ?>">
                                                            <?php } ?>

                                                    </datalist>

                                                </div>
                                                <div class="col-md-1" id="removeisFor" onclick="removeisFor()" style="display:none;">
                                                    <div class="btn btn-danger">X Remove</div>
                                                </div>
                                            </div>

                                            <div class="g-recaptcha" data-sitekey="6LfBtwMnAAAAAFME11R89n7bVc82qOx7t7owbpRG" data-callback='onSubmit' data-action='submit'></div>
                                            <!-- <button class="g-recaptcha" data-sitekey="6LfBtwMnAAAAAFME11R89n7bVc82qOx7t7owbpRG" data-callback='onSubmit' data-action='submit'>Submit</button> -->
                                            <div class="row justify-content-end mt-5" id="repSubmit" style="display:none;">
                                                <div class="col-lg-10">
                                                    <button type="submit" name="creationWithout" class="btn btn-primary">Submit And Next</button>
                                                </div>
                                            </div>
                                        </form>
                                    <?php }
                                    if ($_GET['part'] == 2) {
                                    ?>

                                        <div class="row mb-4">
                                            <label class="col-form-label col-lg-2">Attached Files</label>
                                            <div class="col-lg-10">
                                                <form action="./backends/islem.php" method="post" enctype="multipart/form-data">
                                                    <div class="fallback" style="margin-bottom:25px;">
                                                        <input name="dosya[]" type="file" multiple require />
                                                    </div>
                                                    <input type="hidden" name="attechment_ContentId" value="<?= $_GET['policy_id'] ?>">

                                                    <div class="row justify-content-end">
                                                        <div class="col-lg-10">
                                                            <button type="submit" name="addAttechmentWithout" class="btn btn-primary">Next</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>


                                    <?php
                                    } ?>

                                    <?php if ($_GET['part'] == 3) {
                                    ?>

                                        <form action="./backends/islem.php" method="post" id="lastForm" enctype="multipart/form-data">
                                            <div class="row">
                                                <div class="col-lg-8">
                                                    <div class="card">
                                                        <div class="card-body">
                                                            <div class="d-flex">
                                                                <img src="assets/images/companies/img-1.png" alt="" class="avatar-sm me-4">

                                                                <div class="flex-grow-1 overflow-hidden">
                                                                    <h5 class="text-truncate font-size-15">Policy Title</h5>
                                                                    <p class="text-muted">
                                                                        <input type="text" name="policy_Title_policy" style="width: 100%;" value="<?= $policyCek['policy_Title_policy'] ?>">
                                                                    </p>
                                                                </div>
                                                            </div>

                                                            <h5 class="font-size-15 mt-4">Policy Description :</h5>

                                                            <p class="text-muted">
                                                                <textarea class="form-control" name="policy_desc" id="policy_desc" rows="3" placeholder="Enter Policy Description..."><?= $policyCek['policy_desc'] ?></textarea>


                                                            </p>

                                                            <h5 class="font-size-15 mt-4">Policy Link :</h5>

                                                            <p class="text-muted">
                                                                <input type="text" name="policy_Link" style="width: 100%;" value="<?= $policyCek['policy_Link'] ?>">


                                                            </p>

                                                            <input type="hidden" name="policy_id" value="<?= $_GET['policy_id'] ?>">
                                                            <?php if ($PageAttechmentsay != 0) {
                                                                for ($i = 0; $i < $PageAttechmentsay; $i++) {
                                                                    if ($policyAttechmentCek[$i]['policy_Attechments_type'] == 'application/pdf') {
                                                                        # code...

                                                            ?>


                                                                        <div class="text-muted mt-4" style="margin-bottom: 760px;">
                                                                            <div class="" style="display: flex; align-items:center; justify-content:space-between">
                                                                                <h4><?= $i + 1 ?>. Content</h4>
                                                                                <h4 style="color: red;"><a href="./backends/islem.php?deletePolicyAttechment=ok&policy_Attechments_id=<?= $policyAttechmentCek[$i]['policy_Attechments_id'] ?>&policy_id=<?= $_GET['policy_id'] ?>">Delete X</a></h4>
                                                                            </div>
                                                                            <iframe style="float: right" src="../files/<?= $policyAttechmentCek[$i]['policy_Attechments_url'] ?>" width="100%" height="720" style="margin-top:25px;" allowfullscreen webkitallowfullscreen></iframe>
                                                                        </div>

                                                            <?php }
                                                                }
                                                            } ?>

                                                            <div class="row task-dates">
                                                                <div class="col-sm-4 col-6">
                                                                    <div class="mt-4">
                                                                        <h5 class="font-size-14"><i class="bx bx-calendar me-1 text-primary"></i> Published Date</h5>
                                                                        <p class="text-muted mb-0"><?= $policyCek['policy_timestamp'] ?></p>
                                                                    </div>
                                                                </div>


                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end col -->





                                                <div class="col-lg-4">
                                                    <div class="card">
                                                        <div class="card-body">
                                                            <h4 class="card-title mb-4">Meta Informations</h4>
                                                            <div class="">
                                                                <h5 class="font-size-15 mt-4">Drafted :</h5>

                                                                <p class="text-muted"> <?php if ($policyCek['policy_Draft'] == 0) {
                                                                                            # code...
                                                                                        ?>
                                                                        <span class="badge bg-warning">Pending</span>
                                                                    <?php }
                                                                                        if ($policyCek['policy_Draft'] == 1) { ?>
                                                                        <span class="badge bg-success">Completed</span>
                                                                    <?php } ?>
                                                                </p>

                                                            </div>
                                                            <div class="row mb-4">
                                                                <label for="exampleDataList" class="col-md-12 col-form-label">Document Type</label>
                                                                <div class="col-md-12">
                                                                    <input class="form-control" value="<?= $policyCek['policy_Document_Type'] ?>" name="policy_Document_Type" list="policy_Document_Type" id="exampleDataList" placeholder="Type to search...">
                                                                    <datalist id="policy_Document_Type">
                                                                        <?php

                                                                        $policy_document_types_sor = $db->prepare("SELECT * FROM policy_document_types ORDER BY policy_document_types_id ASC");
                                                                        $policy_document_types_sor->execute(array());
                                                                        while ($policy_document_types_cek = $policy_document_types_sor->fetch(PDO::FETCH_ASSOC)) {

                                                                        ?>
                                                                            <option value="<?= $policy_document_types_cek['policy_document_types_name'] ?>">

                                                                            <?php } ?>

                                                                    </datalist>
                                                                </div>
                                                            </div>
                                                            <div class="row mb-4">
                                                                <label for="exampleDataList" class="col-md-12 col-form-label">Format</label>
                                                                <div class="col-md-12">
                                                                    <input class="form-control" value="<?= $policyCek['policy_Format'] ?>" name="policy_Format" list="policy_Format" id="exampleDataList" placeholder="Type to search...">
                                                                    <datalist id="policy_Format">
                                                                        <option value="PDF">
                                                                        <option value="WORD">
                                                                        <option value="HTML">
                                                                    </datalist>
                                                                </div>
                                                            </div>

                                                            <div class="row mb-4">
                                                                <label for="exampleDataList" class="col-md-12 col-form-label">Country</label>
                                                                <div class="col-md-12">
                                                                    <input class="form-control" value="<?= $policyCek['policy_Country'] ?>" name="policy_Country" list="policy_Country" id="exampleDataList" placeholder="Type to search...">
                                                                    <datalist id="policy_Country">
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
                                                                <label for="exampleDataList" class="col-md-12 col-form-label">Language</label>
                                                                <div class="col-md-12">
                                                                    <input class="form-control" value="<?= $policyCek['policy_Language'] ?>" name="policy_Language" list="policy_Language" id="exampleDataList" placeholder="Type to search...">
                                                                    <datalist id="policy_Language">
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
                                                            <input type="hidden" name="policy_sender" value="<?= $kullanicicek['kullanici_id'] ?>">
                                                            <div class="row mb-4">
                                                                <label for="exampleDataList" class="col-md-12 col-form-label">Policy is for :</label>
                                                                <div class="col-md-12">
                                                                    <input class="form-control" value="<?= $policyCek['policy_PolicyisFor'] ?>" name="policy_PolicyisFor" list="policy_PolicyisFor" id="exampleDataList" placeholder="Type to search...">
                                                                    <datalist id="policy_PolicyisFor">
                                                                        <?php

                                                                        $policy_document_types_sor = $db->prepare("SELECT * FROM policy_isFor_types ORDER BY policy_isFor_types_id ASC");
                                                                        $policy_document_types_sor->execute(array());
                                                                        while ($policy_document_types_cek = $policy_document_types_sor->fetch(PDO::FETCH_ASSOC)) {

                                                                        ?>
                                                                            <option value="<?= $policy_document_types_cek['policy_isFor_types_name'] ?>">
                                                                            <?php } ?>

                                                                    </datalist>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="card">
                                                        <div class="card-body">
                                                            <h4 class="card-title mb-4">Add New Content</h4>
                                                            <div class="">
                                                                <div class="fallback" style="margin-bottom:25px;">
                                                                    <input name="dosya[]" type="file" multiple />
                                                                </div>

                                                            </div>

                                                        </div>
                                                    </div>
                                                    <input type="hidden" name="updatePolicy">
                                                    <div class="card">
                                                        <div class="card-body">
                                                            <div>
                                                                <button type="button" class="btn btn-primary waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#myModal">Submit</button>

                                                                <!-- sample modal content -->
                                                                <div id="myModal" class="modal fade" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
                                                                    <div class="modal-dialog">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h5 class="modal-title" id="myModalLabel">Login Or Register Now</h5>
                                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                            </div>
                                                                            <div class="modal-body">
                                                                                <p><b>Dear User,</b></p>

                                                                                <p>Thank you for submitting a policy to the FAITH Academic Integrity Policy Corpus. To ensure you can track and edit your policy in the future, we encourage you to log in or register. If you prefer not to do so, you can still submit your policy without registering.</p>






                                                                                <p>Thank you for your contribution to our corpus.</p>



                                                                                <p>Best regards,</p>

                                                                                <p>FaithPolicy Team</p>

                                                                            </div>
                                                                            <div class="modal-footer">
                                                                                <button type="button" onclick="submitForm()" class="btn btn-secondary waves-effect" name="updatePolicy">Submit Anyway</button>
                                                                                <a href="./auth-register.php?updatePolicy=<?= $_GET['policy_id'] ?>" class="btn btn-primary waves-effect waves-light">Login or Register</a>
                                                                            </div>
                                                                        </div><!-- /.modal-content -->
                                                                    </div><!-- /.modal-dialog -->
                                                                </div><!-- /.modal -->
                                                            </div>
                                                            <!-- <h4 class="card-title mb-4">Update Policy</h4>
                                                            <div class="">
                                                                <button type="submit" name="updatePolicy" class="btn btn-primary">Submit</button>
                                                            </div> -->
                                                        </div>
                                                    </div>
                                                    <!-- end col -->
                                                </div>
                                        </form>


                                    <?php
                                    } ?>



                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end row -->

                </div> <!-- container-fluid -->
            </div>
            <!-- End Page-content -->



        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->

    <!-- Right Sidebar -->
    <!-- /Right-bar -->

    <!-- Right bar overlay-->
    <div class="rightbar-overlay"></div>
    <!-- JAVASCRIPT -->

    <script src="https://www.google.com/recaptcha/api.js?render=6LdQnwMnAAAAABhoOKWQ1bJwrLaOuA1cDVF0gkcg"></script>

    <script>
        function showRemoveCountry(str) {
            var removeCountry = document.getElementById('removeCountry');
            if (str.length > 0) {
                removeCountry.style.display = 'inline';
            } else {
                removeCountry.style.display = 'none';
            }
        }

        function removeCountry(params) {
            var exampleCountryInput = document.getElementById('exampleCountryInput');
            exampleCountryInput.value = '';
            showRemoveCountry(exampleCountryInput.value);
        }


        function showRemoveInstitution(str) {
            var removeInstitution = document.getElementById('removeInstitution');
            if (str.length > 0) {
                removeInstitution.style.display = 'inline';
            } else {
                removeInstitution.style.display = 'none';
            }
        }

        function removeInstitution(params) {
            var exampleInstitutionInput = document.getElementById('exampleInstitutionInput');
            exampleInstitutionInput.value = '';
            showRemoveInstitution(exampleInstitutionInput.value);
        }


        function showRemovedocument(str) {
            var removedocument = document.getElementById('removedocument');
            if (str.length > 0) {
                removedocument.style.display = 'inline';
            } else {
                removedocument.style.display = 'none';
            }
        }

        function removedocument(params) {
            var exampledocumentInput = document.getElementById('exampledocumentInput');
            exampledocumentInput.value = '';
            showRemovedocument(exampledocumentInput.value);
        }


        function showRemoveFormat(str) {
            var removeFormat = document.getElementById('removeFormat');
            if (str.length>0) {
                removeFormat.style.display='inline';
            }else{
                removeFormat.style.display='none';
            }
        }
        function removeFormat(params) {
            var exampleFormatInput = document.getElementById('exampleFormatInput');
            exampleFormatInput.value = '';
            showRemoveFormat(exampleFormatInput.value);
        }
        

        function showRemoveLanguage(str) {
            var removeLanguage = document.getElementById('removeLanguage');
            if (str.length>0) {
                removeLanguage.style.display='inline';
            }else{
                removeLanguage.style.display='none';
            }
        }
        function removeLanguage(params) {
            var exampleLanguageInput = document.getElementById('exampleLanguageInput');
            exampleLanguageInput.value = '';
            showRemoveLanguage(exampleLanguageInput.value);
        }
        

        function showRemoveisFor(str) {
            var removeisFor = document.getElementById('removeisFor');
            if (str.length>0) {
                removeisFor.style.display='inline';
            }else{
                removeisFor.style.display='none';
            }
        }
        function removeisFor(params) {
            var exampleisForInput = document.getElementById('exampleisForInput');
            exampleisForInput.value = '';
            showRemoveisFor(exampleisForInput.value);
        }
        


        function onSubmit(token) {
            var submitButtpon = document.getElementById('repSubmit');
            submitButtpon.style.display = 'inline';
        }

        function submitForm() {
            document.getElementById('lastForm').submit();
        }
    </script>

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