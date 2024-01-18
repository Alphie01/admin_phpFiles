<?php

include './backends/includes.php';

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
                                                    <input id="projectname" name="policy_Title_policy" type="text" class="form-control" placeholder="Enter Project Name...">
                                                </div>
                                            </div>
                                            <div class="row mb-4">
                                                <label for="policy_desc" class="col-form-label col-lg-2">Policy Description</label>
                                                <div class="col-lg-10">
                                                    <textarea class="form-control" name="policy_desc" id="policy_desc" rows="3" placeholder="Enter Project Description..."></textarea>
                                                </div>
                                            </div>
                                            <div class="row mb-4">
                                                <label for="policy_Link" class="col-form-label col-lg-2">Policy Link</label>
                                                <div class="col-lg-10">

                                                    <input id="policy_Link" name="policy_Link" type="text" class="form-control" placeholder="Enter Project Link...">
                                                </div>
                                            </div>
                                            <div class="row mb-4">
                                                <label for="policy_Institution_Name" class="col-form-label col-lg-2">Institution Name</label>
                                                
                                                <div class="col-md-10">
                                                    <input class="form-control" name="policy_Institution_Name" value="<?= $kullanicicek['kullanici_Institue'] ?>" list="kullanici_Institue" id="exampleDataList" placeholder="Type to search...">
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
                                                <label for="exampleDataList" class="col-md-2 col-form-label">Document Type</label>
                                                <div class="col-md-10">
                                                    <input class="form-control" name="policy_Document_Type" list="policy_Document_Type" id="exampleDataList" placeholder="Type to search...">
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
                                                <label for="exampleDataList" class="col-md-2 col-form-label">Format</label>
                                                <div class="col-md-10">
                                                    <input class="form-control" name="policy_Format" list="policy_Format" id="exampleDataList" placeholder="Type to search...">
                                                    <datalist id="policy_Format">
                                                        <option value="PDF">
                                                        <option value="WORD">
                                                        <option value="HTML">
                                                    </datalist>
                                                </div>
                                            </div>

                                            <div class="row mb-4">
                                                <label for="exampleDataList" class="col-md-2 col-form-label">Country</label>
                                                <div class="col-md-10">
                                                    <input class="form-control" name="policy_Country" value="<?=$kullanicicek['kullanici_adres'] ?>" list="policy_Country" id="exampleDataList" placeholder="Type to search...">
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
                                                <label for="exampleDataList" class="col-md-2 col-form-label">Language</label>
                                                <div class="col-md-10">
                                                    <input class="form-control" name="policy_Language" value="<?=$kullanicicek['kullanici_dil'] ?>" list="policy_Language" id="exampleDataList" placeholder="Type to search...">
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
                                                <label for="exampleDataList" class="col-md-2 col-form-label">Policy is for :</label>
                                                <div class="col-md-10">
                                                    <input class="form-control" name="policy_PolicyisFor" list="policy_PolicyisFor" id="exampleDataList" placeholder="Type to search...">
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


                                            <div class="row justify-content-end">
                                                <div class="col-lg-10">
                                                    <button type="submit" name="creation" class="btn btn-primary">Submit And Next</button>
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
                                                            <button type="submit" name="addAttechment" class="btn btn-primary">Finalize</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>


                                    <?php
                                    } ?>

                                    <?php if ($_GET['part'] == 3) {
                                    ?>

                                        <form action="./backends/islem.php" method="post" enctype="multipart/form-data">
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

                                                            <h5 class="font-size-15 mt-4">Project Description :</h5>

                                                            <p class="text-muted">
                                                                <textarea class="form-control" name="policy_desc" id="policy_desc" rows="3" placeholder="Enter Project Description..."><?= $policyCek['policy_desc'] ?></textarea>


                                                            </p>

                                                            <h5 class="font-size-15 mt-4">Project Link :</h5>

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

                                                    <div class="card">
                                                        <div class="card-body">
                                                            <h4 class="card-title mb-4">Update Policy</h4>
                                                            <div class="">
                                                                <button type="submit" name="updatePolicy" class="btn btn-primary">Submit</button>
                                                            </div>
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


            <?php include './backends/footer.php' ?>
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