<?php



include './backends/includes.php';


$arr = [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0];

$pagecontentsor = $db->prepare("SELECT * FROM policyViewport ORDER BY viewPort_id ASC");
$pagecontentsor->execute(array());
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

?>

<!doctype html>
<html lang="tr">

<head>

    <meta charset="utf-8" />
    <title>Projects Grid |Admin Panel</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Desc" name="description" />
    <meta content="AlpSelcuk" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

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
                                <h4 class="mb-sm-0 font-size-18">Projects Grid</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Projects</a></li>
                                        <li class="breadcrumb-item active">Projects Grid</li>
                                    </ol>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- end page title -->
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="clearfix">
                                        <div class="float-end">

                                        </div>
                                        <h4 class="card-title mb-4">Policies</h4>
                                    </div>

                                    <div class="row">
                                        <?php


                                        $projectSor = $db->prepare("SELECT * FROM policy_list ORDER BY policy_id DESC");
                                        $projectSor->execute(array());
                                        $say = $projectSor->rowCount();


                                        while ($projectCek = $projectSor->fetch(PDO::FETCH_ASSOC)) {
                                            $senderkullanicisor = $db->prepare("SELECT * FROM kullanici where kullanici_id=:id");
                                            $senderkullanicisor->execute(array(
                                                'id' => $projectCek['policy_sender']
                                            ));
                                            $say = $senderkullanicisor->rowCount();
                                            $senderkullanicicek = $senderkullanicisor->fetch(PDO::FETCH_ASSOC);

                                        ?>

                                            <div class="col-xl-4 col-sm-6">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <div class="d-flex">
                                                            <div class="flex-grow-1 overflow-hidden">
                                                                <h5 class="text-truncate font-size-15"><a href="./projects-overview.php?policy_id=<?= $projectCek['policy_id'] ?>" class="text-dark" style="overflow: hidden;display: -webkit-box;-webkit-line-clamp: 2; /* number of lines to show */line-clamp: 2; -webkit-box-orient: vertical;"><?= $projectCek['policy_Title_policy'] ?></a></h5>
                                                                <p class="text-muted mb-4" style="overflow: hidden;display: -webkit-box;-webkit-line-clamp: 2; /* number of lines to show */line-clamp: 2; -webkit-box-orient: vertical;"><?= $projectCek['policy_desc'] ?></p>
                                                                <p style=""><?= $senderkullanicicek['kullanici_ad'] ?></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="px-4 py-3 border-top">
                                                        <ul class="list-inline mb-0">
                                                            <li class="list-inline-item me-3">
                                                                <?php if ($projectCek['policy_Draft'] == 0) {
                                                                    # code...
                                                                ?>
                                                                    <span class="badge bg-warning">Pending</span>
                                                                <?php }
                                                                if ($projectCek['policy_Draft'] == 1) { ?>
                                                                    <span class="badge bg-success">Completed</span>
                                                                <?php } ?>
                                                                <?php  ?>
                                                                <?php  ?>
                                                            </li>
                                                            <li class="list-inline-item me-3">
                                                                <i class="bx bx-calendar me-1"></i> <?= $projectCek['policy_timestamp'] ?>
                                                            </li>
                                                            <li class="list-inline-item me-3">
                                                                <i class="bx bx-comment-dots me-1"></i> <?= $projectCek['project_seen'] ?>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>

                                        <?php } ?>


                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end row -->


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
    <script src="assets/js/app.js"></script>

</body>

</html>