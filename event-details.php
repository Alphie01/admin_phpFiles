<?php

include './backends/includes.php';
$allpostsor = $db->prepare("SELECT * FROM calender_event where calender_event_id=:calender_event_id ORDER BY calender_event_id DESC");
$allpostsor->execute(array(
    'calender_event_id' => $_GET['calender_event_id']
));
$say = $allpostsor->rowCount();
if ($say == 0) {
    header('Location:index.php');
}
$allpostcek = $allpostsor->fetch(PDO::FETCH_ASSOC);

$postSendersor = $db->prepare("SELECT * FROM kullanici where kullanici_id=:kullanici_id");
$postSendersor->execute(array(
    'kullanici_id' => $allpostcek['calender_event_creator']
));

$postSendercek = $postSendersor->fetch(PDO::FETCH_ASSOC);

?>
<!doctype html>
<html lang="tr">

<head>

    <meta charset="utf-8" />
    <title>Blog Details |Admin Panel</title>
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
                                <h4 class="mb-sm-0 font-size-18">Event Details</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Event</a></li>
                                        <li class="breadcrumb-item active">Event Details</li>
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
                                    <div class="pt-3">
                                        <div class="row justify-content-center">
                                            <div class="col-xl-8">
                                                <div>
                                                    <?php if ($kullanicicek['kullanici_yetki'] != 5) {
                                                    ?>
                                                        <div class="text-center">

                                                            <h4><?= $allpostcek['calender_event_title'] ?></h4>

                                                        </div>
                                                    <?php
                                                    } else { ?>
                                                        <div class="row">
                                                            <div class="col-8">
                                                                <h4><?= $allpostcek['calender_event_title'] ?></h4>
                                                            </div>
                                                            <div class="col-4 float-right">
                                                                <a href="./event-create.php?calender_event_id=<?= $_GET['calender_event_id'] ?>" class="float-right">Update Event</a>
                                                            </div>
                                                        </div>
                                                    <?php } ?>


                                                    <hr>
                                                    <div class="text-center">
                                                        <div class="row">
                                                            <div class="col-sm-3">
                                                                <div>
                                                                    <p class="text-muted mb-2">Event Type</p>
                                                                    <h5 class="font-size-15">
                                                                        <?php
                                                                        if ($allpostcek['calender_event_type'] == 0) {
                                                                            echo 'News';
                                                                        } else if ($allpostcek['calender_event_type'] == 1) {
                                                                            echo 'Reports';
                                                                            # code...
                                                                        } else if ($allpostcek['calender_event_type'] == 2) {
                                                                            echo 'Research Papers';
                                                                            # code...
                                                                        } else if ($allpostcek['calender_event_type'] == 3) {
                                                                            echo 'Blog';
                                                                            # code...
                                                                        }

                                                                        ?>
                                                                    </h5>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-3">
                                                                <div class="mt-4 mt-sm-0">
                                                                    <p class="text-muted mb-2">Start Date</p>
                                                                    <h5 class="font-size-15"><?= $allpostcek['calender_event_start'] ?></h5>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-3">
                                                                <div class="mt-4 mt-sm-0">
                                                                    <p class="text-muted mb-2">Start Date</p>
                                                                    <h5 class="font-size-15"><?= $allpostcek['calender_event_end'] ?></h5>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-3">
                                                                <div class="mt-4 mt-sm-0">
                                                                    <p class="text-muted mb-2">Post by</p>
                                                                    <h5 class="font-size-15"><?= $postSendercek['kullanici_adsoyad'] ?></h5>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <hr>

                                                    <div class="my-5">
                                                        <img src="../files/<?= $allpostcek['calender_event_thumbnail'] ?>" alt="" class="img-thumbnail mx-auto d-block">
                                                    </div>

                                                    <hr>

                                                    <div class="mt-4">
                                                        <div class="text-muted font-size-14">

                                                            <?= $allpostcek['calender_event_body'] ?>
                                                        </div>

                                                        <hr>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end card body -->
                            </div>
                            <!-- end card -->
                        </div>
                        <!-- end col -->
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