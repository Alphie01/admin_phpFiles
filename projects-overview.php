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


$arr = [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0];

$pagecontentsor = $db->prepare("SELECT * FROM policyViewport where viewPort_contentId=:viewPort_contentId ORDER BY viewPort_id ASC");
$pagecontentsor->execute(array(
    'viewPort_contentId' => $policyCek['policy_id']
));
$PageContentsay = $pagecontentsor->rowCount();
while ($pagecontentcek = $pagecontentsor->fetch(PDO::FETCH_ASSOC)) {
    $time = $pagecontentcek['viewPort_time'];
    $exp = explode('-', $time);
    if ($exp[0] == date('Y')) {
        for ($k = 1; $k < 13; $k++) {
            if ($exp[1] == '0' . $k) {
                $arr[$k - 1]++;
            }
        }
    }
}

$inputdate = implode(',', $arr);

$policyAuthorSor = $db->prepare("SELECT * FROM kullanici where kullanici_id=:policy_sender");
$policyAuthorSor->execute(array(
    'policy_sender' => $policyCek['policy_sender']
));

$policyAuthorCek = $policyAuthorSor->fetch(PDO::FETCH_ASSOC);

?>

<!doctype html>
<html lang="tr">

<head>

    <meta charset="utf-8" />
    <title>Projects Overview | Admin Panel</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Desc" name="description" />
    <meta content="AlpSelcuk" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">
    <input type="hidden" id="tableContent" value="<?= $inputdate ?>">

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
                                <h4 class="mb-sm-0 font-size-18">
                                    Policy Overview</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Policies</a></li>
                                        <li class="breadcrumb-item active">Policy Overview</li>
                                    </ol>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- end page title -->
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex">
                                        <img src="assets/images/companies/img-1.png" alt="" class="avatar-sm me-4">

                                        <div class="flex-grow-1 overflow-hidden">
                                            <h5 class="text-truncate font-size-15">Policy Title</h5>
                                            <p class="text-muted">
                                                <?= $policyCek['policy_Title_policy'] ?>
                                            </p>
                                        </div>
                                    </div>

                                    <h5 class="font-size-15 mt-4">Project Description :</h5>

                                    <p class="text-muted"><?= $policyCek['policy_desca'] ?></p>

                                    <?php if ($PageAttechmentsay != 0) {
                                        for ($i = 0; $i < $PageAttechmentsay; $i++) {
                                            if ($policyAttechmentCek[$i]['policy_Attechments_type'] == 'application/pdf') {
                                                # code...

                                    ?>


                                                <div class="text-muted mt-4">
                                                    <iframe style="float: right" src="../files/<?= $policyAttechmentCek[$i]['policy_Attechments_url'] ?>" width="100%" height="720" allowfullscreen webkitallowfullscreen></iframe>
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
                                    <div class="">
                                        <h5 class="font-size-15 mt-4">Country :</h5>

                                        <p class="text-muted"><?= $policyCek['policy_Country'] ?></p>

                                    </div>

                                    <div class="">
                                        <h5 class="font-size-15 mt-4">Language :</h5>

                                        <p class="text-muted"><?= $policyCek['policy_Language'] ?></p>

                                    </div>

                                    <div class="">
                                        <h5 class="font-size-15 mt-4">Institution Name :</h5>

                                        <p class="text-muted"><?= $policyCek['policy_Institution_Name'] ?></p>

                                    </div>
                                    <div class="">
                                        <h5 class="font-size-15 mt-4">Document Type :</h5>

                                        <p class="text-muted"><?= $policyCek['policy_Document_Type'] ?></p>

                                    </div>

                                    <div class="">
                                        <h5 class="font-size-15 mt-4">Format :</h5>

                                        <p class="text-muted"><?= $policyCek['policy_Format'] ?></p>

                                    </div>

                                    <div class="">
                                        <h5 class="font-size-15 mt-4">Policy Is For :</h5>

                                        <p class="text-muted"><?= $policyCek['policy_PolicyisFor'] ?></p>

                                    </div>
                                </div>
                            </div>



                            <?php

                            if ($kullanicicek['kullanici_yetki'] > 0 or $policyCek['policy_sender'] == $kullanicicek['kullanici_id']) {
                                # code...


                            ?>


                                <div class="card">
                                    <form action="./backends/islem.php" method="post">
                                        <div class="card-body">
                                            <h4 class="card-title mb-4">Quick Control <?php if ($_GET['updateState'] == 'ok') {
                                                                                            echo '<p style="color:green;">State Updated</p>';
                                                                                        }
                                                                                        if ($_GET['updateState'] == 'no') {
                                                                                            echo '<p style="color:red;">State Couldn\'t Updated</p>';
                                                                                        } ?></h4>
                                            <div class="">
                                                <h5 class="font-size-15 mt-4">Drafted :</h5>

                                                <div class="">
                                                    <select class="form-select" name="policy_Draft" <?php if ($kullanicicek['kullanici_yetki'] == 0) {
                                                                                                        echo 'disabled';
                                                                                                    } ?>>
                                                        <option value="1" <?php if ($policyCek['policy_Draft'] == 1) {
                                                                                echo 'Selected';
                                                                            } ?>>Approve</option>
                                                        <option value="0" <?php if ($policyCek['policy_Draft'] == 0) {
                                                                                echo 'Selected';
                                                                            } ?>>Waiting For Draft</option>
                                                    </select>
                                                </div>

                                            </div>
                                            <input type="hidden" name="policy_id" value="<?= $_GET['policy_id'] ?>">

                                            <div class="row" style="margin-bottom: 20px; margin-top:20px;">
                                                <?php if ($kullanicicek['kullanici_yetki'] > 0) {
                                                ?>
                                                    <div class="col-4 text-center "><button type="submit" name="updateDraft" class="btn btn-primary waves-effect waves-light">Update</button></div>
                                                <?php
                                                } ?>

                                                <div class="col-4 text-center "><a href="./backends/islem.php?policysil=ok&policy_id=<?= $policyCek['policy_id'] ?>" class="btn btn-primary waves-effect waves-light" style="background-color: red;">Delete Policy</a></div>
                                                <div class="col-4 text-center "><a href="./projects-create.php?part=3&policy_id=<?= $_GET['policy_id'] ?>" class="btn btn-primary waves-effect waves-light">Update All</a></div>


                                            </div>
                                        </div>

                                    </form>
                                </div>
                            <?php } ?>








                            <?php if ($PageAttechmentsay != 0) {
                            ?>
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title mb-4">Attached Files</h4>
                                        <div class="table-responsive">
                                            <table class="table table-nowrap align-middle table-hover mb-0">
                                                <tbody>


                                                    <?php for ($i = 0; $i < $PageAttechmentsay; $i++) {

                                                        # code...

                                                    ?>
                                                        <tr>
                                                            <td style="width: 45px;">
                                                                <div class="avatar-sm">
                                                                    <span class="avatar-title rounded-circle bg-primary bg-soft text-primary font-size-24">
                                                                        <i class="bx bxs-file-doc"></i>
                                                                    </span>
                                                                </div>
                                                            </td>

                                                            <td>
                                                                <h5 class="font-size-14 mb-1"><a href="#" class="text-dark"><?= $policyAttechmentCek[$i]['attechment_ContentName'] ?></a></h5>
                                                                <small>Size : - MB</small>
                                                            </td>
                                                            <td>
                                                                <div class="text-center">
                                                                    <a href="../files/<?= $policyAttechmentCek[$i]['policy_Attechments_url'] ?>" download class="text-dark"><i class="bx bx-download h3 m-0"></i></a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    <?php
                                                    } ?>





                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            <?php
                            } ?>

                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title mb-4">Author</h4>

                                    <div class="table-responsive">
                                        <?php

                                        if ($policyAuthorCek['kullanici_resim'] != null) {
                                            # code...


                                        ?>
                                            <div class="row">
                                                <div class="col-12">
                                                    <img src="./user.png" alt="" class="rounded-circle avatar-xs">
                                                </div>
                                                <div class="col-12">
                                                    <h4><?= $policyAuthorCek['kullanici_adsoyad'] ?></h4>
                                                    <p>@<?= $policyAuthorCek['kullanici_ad'] ?></p>
                                                </div>
                                            </div>
                                        <?php } else {
                                            # code...
                                        ?>
                                            <div class="row align-items-center">
                                                <div class="col-12 align-items-center" style="display: flex; align-items:center; width:100%; justify-content:center;">
                                                    <img src="./user.png" alt="" class="rounded-circle avatar-xl">
                                                </div>
                                                <div class="col-12 align-items-center mt-25" style="display: flex; margin-top:25px; flex-direction:column; align-items:center; width:100%; justify-content:center;">
                                                    <h4><?= $policyAuthorCek['kullanici_adsoyad'] ?></h4>
                                                    <p>@<?= $policyAuthorCek['kullanici_ad'] ?></p>
                                                </div>
                                            </div>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end row -->

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title mb-4">Overview</h4>

                                    <div id="overview-chart" class="apex-charts" dir="ltr"></div>
                                </div>
                            </div>
                        </div>
                        <!-- end col -->


                        <!-- end col -->


                        <!-- end col -->
                    </div>
                    <!-- end row -->
                    <div class="row">

                        <!-- end col -->

                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title mb-4">Policies</h4>
                                    <div class="row">
                                        <?php

                                        if ($kullanicicek['kullanici_yetki'] == 5) {
                                            $SubProjectSor = $db->prepare("SELECT * FROM policy_list where policy_Document_Type=:policy_Document_Type and not policy_id=:policy_id ORDER BY policy_id DESC LIMIT 20");
                                            $SubProjectSor->execute(array(
                                                'policy_Document_Type' => $policyCek['policy_Document_Type'],
                                                'policy_id' => $policyCek['policy_id']
                                            ));
                                            $say = $SubProjectSor->rowCount();
                                        } else {
                                            $SubProjectSor = $db->prepare("SELECT * FROM policy_list where policy_sender=:policy_sender and policy_Document_Type=:policy_Document_Type and not policy_id=:policy_id ORDER BY policy_id DESC LIMIT 20");
                                            $SubProjectSor->execute(array(
                                                'policy_sender' => $kullanicicek['kullanici_id'],
                                                'policy_Document_Type' => $policyCek['policy_Document_Type'],
                                                'policy_id' => $policyCek['policy_id']
                                            ));
                                            $say = $SubProjectSor->rowCount();
                                        }

                                        while ($SubProjectCek = $SubProjectSor->fetch(PDO::FETCH_ASSOC)) {
                                            $senderkullanicisor = $db->prepare("SELECT * FROM kullanici where kullanici_id=:id");
                                            $senderkullanicisor->execute(array(
                                                'id' => $SubProjectCek['policy_sender']
                                            ));
                                            $say = $senderkullanicisor->rowCount();
                                            $senderkullanicicek = $senderkullanicisor->fetch(PDO::FETCH_ASSOC);

                                        ?>

                                            <div class="col-xl-4 col-sm-6">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <div class="d-flex">
                                                            <div class="flex-grow-1 overflow-hidden">
                                                                <h5 class="text-truncate font-size-15"><a href="./projects-overview.php?policy_id=<?= $SubProjectCek['policy_id'] ?>" class="text-dark" style="overflow: hidden;display: -webkit-box;-webkit-line-clamp: 2; /* number of lines to show */line-clamp: 2; -webkit-box-orient: vertical;"><?= $SubProjectCek['policy_Title_policy'] ?></a></h5>
                                                                <p class="text-muted mb-4" style="overflow: hidden;display: -webkit-box;-webkit-line-clamp: 2; /* number of lines to show */line-clamp: 2; -webkit-box-orient: vertical;"><?= $SubProjectCek['policy_desc'] ?></p>
                                                                <p style=""><?= $senderkullanicicek['kullanici_ad'] ?></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="px-4 py-3 border-top">
                                                        <ul class="list-inline mb-0">
                                                            <li class="list-inline-item me-3">
                                                                <?php if ($SubProjectCek['policy_Draft'] == 0) {
                                                                    # code...
                                                                ?>
                                                                    <span class="badge bg-warning">Pending</span>
                                                                <?php }
                                                                if ($SubProjectCek['policy_Draft'] == 1) { ?>
                                                                    <span class="badge bg-success">Completed</span>
                                                                <?php } ?>
                                                                <?php  ?>
                                                                <?php  ?>
                                                            </li>
                                                            <li class="list-inline-item me-3">
                                                                <i class="bx bx-calendar me-1"></i> <?= $SubProjectCek['policy_timestamp'] ?>
                                                            </li>
                                                            <li class="list-inline-item me-3">
                                                                <i class="bx bx-comment-dots me-1"></i> <?= $SubProjectCek['project_seen'] ?>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>

                                        <?php } ?>

                                        <div class="clearfix">
                                            <div class="col-12">
                                                <div class="card-footer bg-transparent border-top">
                                                    <div class="text-center">
                                                        <a href="javascript: void(0);" class="btn btn-primary waves-effect waves-light"> View More... </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end col -->

                        <!-- end col -->
                    </div>
                </div> <!-- container-fluid -->
            </div>
            <!-- End Page-content -->


            <?php include './backends/footer.php' ?>
        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->

    <!-- Right Sidebar -->
    <div class="right-bar">
        <div data-simplebar class="h-100">
            <div class="rightbar-title d-flex align-items-center px-3 py-4">

                <h5 class="m-0 me-2">Settings</h5>

                <a href="javascript:void(0);" class="right-bar-toggle ms-auto">
                    <i class="mdi mdi-close noti-icon"></i>
                </a>
            </div>

            <!-- Settings -->
            <hr class="mt-0" />
            <h6 class="text-center mb-0">Choose Layouts</h6>

            <div class="p-4">
                <div class="mb-2">
                    <img src="assets/images/layouts/layout-1.jpg" class="img-fluid img-thumbnail" alt="">
                </div>

                <div class="form-check form-switch mb-3">
                    <input class="form-check-input theme-choice" type="checkbox" id="light-mode-switch" checked>
                    <label class="form-check-label" for="light-mode-switch">Light Mode</label>
                </div>

                <div class="mb-2">
                    <img src="assets/images/layouts/layout-2.jpg" class="img-fluid img-thumbnail" alt="">
                </div>
                <div class="form-check form-switch mb-3">
                    <input class="form-check-input theme-choice" type="checkbox" id="dark-mode-switch" data-bsStyle="assets/css/bootstrap-dark.min.css" data-appStyle="assets/css/app-dark.min.css">
                    <label class="form-check-label" for="dark-mode-switch">Dark Mode</label>
                </div>

                <div class="mb-2">
                    <img src="assets/images/layouts/layout-3.jpg" class="img-fluid img-thumbnail" alt="">
                </div>
                <div class="form-check form-switch mb-5">
                    <input class="form-check-input theme-choice" type="checkbox" id="rtl-mode-switch" data-appStyle="assets/css/app-rtl.min.css">
                    <label class="form-check-label" for="rtl-mode-switch">RTL Mode</label>
                </div>

                <div class="mb-2">
                    <img src="assets/images/layouts/layout-4.jpg" class="img-thumbnail" alt="layout images">
                </div>
                <div class="form-check form-switch mb-5">
                    <input class="form-check-input theme-choice" type="checkbox" id="dark-rtl-mode-switch">
                    <label class="form-check-label" for="dark-rtl-mode-switch">Dark RTL Mode</label>
                </div>

            </div>

        </div> <!-- end slimscroll-menu-->
    </div>
    <!-- /Right-bar -->

    <!-- Right bar overlay-->
    <div class="rightbar-overlay"></div>
    <!-- JAVASCRIPT -->
    <script src="assets/libs/jquery/jquery.min.js"></script>
    <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/libs/metismenu/metisMenu.min.js"></script>
    <script src="assets/libs/simplebar/simplebar.min.js"></script>
    <script src="assets/libs/node-waves/waves.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/viewerjs/1.11.3/viewer.min.js" integrity="sha512-f8kZwYACKF8unHuRV7j/5ILZfflRncxHp1f6y/PKuuRpCVgpORNZMne1jrghNzTVlXabUXIg1iJ5PvhuAaau6Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- apexcharts -->
    <script src="assets/libs/apexcharts/apexcharts.min.js"></script>

    <script src="assets/js/pages/project-overview.init.js"></script>

    <script src="assets/js/app.js"></script>

</body>

</html>