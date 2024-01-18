<?php

include './backends/includes.php';

?>

<!doctype html>
<html lang="tr">

<head>

    <meta charset="utf-8" />
    <title>Blog Grid |Admin Panel</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Desc" name="description" />
    <meta content="AlpSelcuk" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- Bootstrap Css -->
    <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <link href="assets/libs/tui-calendar/tui-calendar.min.css" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link rel="stylesheet" type="text/css" href="assets/libs/tui-time-picker/tui-time-picker.min.css">
    <link rel="stylesheet" type="text/css" href="assets/libs/tui-date-picker/tui-date-picker.min.css">
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />
</head>

<body data-sidebar="dark">
    <!-- Begin page -->
    <div id="layout-wrapper">

        <?php include './backends/header.php' ?>
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
                                <h4 class="mb-sm-0 font-size-18">Blog Grid</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Blog</a></li>
                                        <li class="breadcrumb-item active">Blog Grid</li>
                                    </ol>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- end page title -->
                    <div class="row">
                        <?php

                        include './eventTop.php';

                        ?>
                        <div class="col-xl-12 col-lg-12">
                            <div class="card">
                                <!-- Nav tabs -->Conferences
                                <ul class="nav nav-tabs nav-tabs-custom justify-content-center pt-2" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" data-bs-toggle="tab" href="#all-post" role="tab">
                                            All Post
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#Conferences" role="tab">
                                            Conferences
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#Seminars" role="tab">
                                            Seminars
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#Webinar" role="tab">
                                            Webinar
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#Meetings" role="tab">
                                            Meetings
                                        </a>
                                    </li>
                                </ul>

                                <!-- Tab panes -->
                                <div class="tab-content p-4">
                                    <div class="tab-pane active" id="all-post" role="tabpanel">
                                        <div>
                                            <div class="row justify-content-center">
                                                <div class="col-xl-8">
                                                    <div>
                                                        <div class="row align-items-center">
                                                            <div class="col-4">
                                                                <div>
                                                                    <h5 class="mb-0">All Posts</h5>
                                                                </div>
                                                            </div>


                                                        </div>
                                                        <!-- end row -->

                                                        <hr class="mb-4">

                                                        <div class="row">

                                                            <?php

                                                            $allpostsor = $db->prepare("SELECT * FROM calender_event ORDER BY calender_event_id DESC");
                                                            $allpostsor->execute(array());
                                                            $say = $allpostsor->rowCount();
                                                            if ($say > 0) {
                                                                while ($allpostcek = $allpostsor->fetch(PDO::FETCH_ASSOC)) {
                                                                    # code...


                                                            ?>
                                                                    <div class="col-sm-6">
                                                                        <div class="card p-1 border shadow-none">
                                                                            <div class="p-3">
                                                                                <h5><a href="event-details.php?calender_event_id=<?= $allpostcek['calender_event_id']  ?>" class="text-dark"><?= $allpostcek['calender_event_title'] ?></a></h5>
                                                                                <p class="text-muted mb-0"><?= $allpostcek['calender_event_timestamp'] ?></p>
                                                                            </div>

                                                                            <div class="position-relative">
                                                                                <img src="../files/<?= $allpostcek['calender_event_thumbnail'] ?>" alt="" class="img-thumbnail">
                                                                            </div>

                                                                            <div class="p-3">

                                                                                <p style="overflow: hidden;display: -webkit-box;-webkit-line-clamp: 2; /* number of lines to show */line-clamp: 2; -webkit-box-orient: vertical;"><?= $allpostcek['calender_event_body'] ?></p>

                                                                                <div>
                                                                                    <a href="#" class="text-primary">Read more <i class="mdi mdi-arrow-right"></i></a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                <?php }
                                                            } else {
                                                                ?>

                                                                <div class="col-sm-12">
                                                                    <div class="card p-1 border shadow-none">
                                                                        <div class="p-3">
                                                                            <h5>There Isn't Any Post! <a href="" class="btn btn-primary">Add New...</a></h5>

                                                                        </div>


                                                                    </div>
                                                                </div>
                                                            <?php
                                                            }

                                                            ?>


                                                        </div>


                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="tab-pane" id="Conferences" role="tabpanel">
                                        <div>
                                            <div class="row justify-content-center">
                                                <div class="col-xl-8">
                                                    <div>
                                                        <div class="row align-items-center">
                                                            <div class="col-4">
                                                                <div>
                                                                    <h5 class="mb-0">News List</h5>
                                                                </div>
                                                            </div>


                                                        </div>
                                                        <!-- end row -->

                                                        <hr class="mb-4">

                                                        <div class="row">

                                                            <?php

                                                            $allpostsor = $db->prepare("SELECT * FROM calender_event where calender_event_type=0 ORDER BY calender_event_id DESC");
                                                            $allpostsor->execute(array());
                                                            $say = $allpostsor->rowCount();
                                                            if ($say > 0) {
                                                                while ($allpostcek = $allpostsor->fetch(PDO::FETCH_ASSOC)) {
                                                                    # code...


                                                            ?>
                                                                    <div class="col-sm-6">
                                                                        <div class="card p-1 border shadow-none">
                                                                            <div class="p-3">
                                                                                <h5><a href="event-details.php?calender_event_id=<?= $allpostcek['calender_event_id']  ?>" class="text-dark"><?= $allpostcek['calender_event_title'] ?></a></h5>
                                                                                <p class="text-muted mb-0"><?= $allpostcek['calender_event_timestamp'] ?></p>
                                                                            </div>

                                                                            <div class="position-relative">
                                                                                <img src="../files/<?= $allpostcek['calender_event_thumbnail'] ?>" alt="" class="img-thumbnail">
                                                                            </div>

                                                                            <div class="p-3">

                                                                                <p style="overflow: hidden;display: -webkit-box;-webkit-line-clamp: 2; /* number of lines to show */line-clamp: 2; -webkit-box-orient: vertical;"><?= $allpostcek['calender_event_body'] ?></p>

                                                                                <div>
                                                                                    <a href="#" class="text-primary">Read more <i class="mdi mdi-arrow-right"></i></a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                <?php }
                                                            } else {
                                                                ?>

                                                                <div class="col-sm-12">
                                                                    <div class="card p-1 border shadow-none">
                                                                        <div class="p-3">
                                                                            <h5>There Isn't Any Post! <a href="" class="btn btn-primary">Add New...</a></h5>

                                                                        </div>


                                                                    </div>
                                                                </div>
                                                            <?php
                                                            }

                                                            ?>


                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="tab-pane" id="Seminars" role="tabpanel">
                                        <div>
                                            <div class="row justify-content-center">
                                                <div class="col-xl-8">
                                                    <div>
                                                        <div class="row align-items-center">
                                                            <div class="col-4">
                                                                <div>
                                                                    <h5 class="mb-0">Reports List</h5>
                                                                </div>
                                                            </div>


                                                        </div>
                                                        <!-- end row -->

                                                        <hr class="mb-4">

                                                        <div class="row">

                                                            <?php

                                                            $allpostsor = $db->prepare("SELECT * FROM calender_event where calender_event_type=1 ORDER BY calender_event_id DESC");
                                                            $allpostsor->execute(array());
                                                            $say = $allpostsor->rowCount();
                                                            if ($say > 0) {
                                                                while ($allpostcek = $allpostsor->fetch(PDO::FETCH_ASSOC)) {
                                                                    # code...


                                                            ?>
                                                                    <div class="col-sm-6">
                                                                        <div class="card p-1 border shadow-none">
                                                                            <div class="p-3">
                                                                                <h5><a href="event-details.php?calender_event_id=<?= $allpostcek['calender_event_id']  ?>" class="text-dark"><?= $allpostcek['calender_event_title'] ?></a></h5>
                                                                                <p class="text-muted mb-0"><?= $allpostcek['calender_event_timestamp'] ?></p>
                                                                            </div>

                                                                            <div class="position-relative">
                                                                                <img src="../files/<?= $allpostcek['calender_event_thumbnail'] ?>" alt="" class="img-thumbnail">
                                                                            </div>

                                                                            <div class="p-3">

                                                                                <p style="overflow: hidden;display: -webkit-box;-webkit-line-clamp: 2; /* number of lines to show */line-clamp: 2; -webkit-box-orient: vertical;"><?= $allpostcek['calender_event_body'] ?></p>

                                                                                <div>
                                                                                    <a href="#" class="text-primary">Read more <i class="mdi mdi-arrow-right"></i></a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                <?php }
                                                            } else {
                                                                ?>

                                                                <div class="col-sm-12">
                                                                    <div class="card p-1 border shadow-none">
                                                                        <div class="p-3">
                                                                            <h5>There Isn't Any Post! <a href="" class="btn btn-primary">Add New...</a></h5>

                                                                        </div>


                                                                    </div>
                                                                </div>
                                                            <?php
                                                            }

                                                            ?>


                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="tab-pane" id="Webinar" role="tabpanel">
                                        <div>
                                            <div class="row justify-content-center">
                                                <div class="col-xl-8">
                                                    <div>
                                                        <div class="row align-items-center">
                                                            <div class="col-4">
                                                                <div>
                                                                    <h5 class="mb-0">Research List</h5>
                                                                </div>
                                                            </div>


                                                        </div>
                                                        <!-- end row -->

                                                        <hr class="mb-4">

                                                        <div class="row">

                                                            <?php

                                                            $allpostsor = $db->prepare("SELECT * FROM calender_event where calender_event_type=2 ORDER BY calender_event_id DESC");
                                                            $allpostsor->execute(array());
                                                            $say = $allpostsor->rowCount();
                                                            if ($say > 0) {
                                                                while ($allpostcek = $allpostsor->fetch(PDO::FETCH_ASSOC)) {
                                                                    # code...


                                                            ?>
                                                                    <div class="col-sm-6">
                                                                        <div class="card p-1 border shadow-none">
                                                                            <div class="p-3">
                                                                                <h5><a href="event-details.php?calender_event_id=<?= $allpostcek['calender_event_id']  ?>" class="text-dark"><?= $allpostcek['calender_event_title'] ?></a></h5>
                                                                                <p class="text-muted mb-0"><?= $allpostcek['calender_event_timestamp'] ?></p>
                                                                            </div>

                                                                            <div class="position-relative">
                                                                                <img src="../files/<?= $allpostcek['calender_event_thumbnail'] ?>" alt="" class="img-thumbnail">
                                                                            </div>

                                                                            <div class="p-3">

                                                                                <p style="overflow: hidden;display: -webkit-box;-webkit-line-clamp: 2; /* number of lines to show */line-clamp: 2; -webkit-box-orient: vertical;"><?= $allpostcek['calender_event_body'] ?></p>

                                                                                <div>
                                                                                    <a href="#" class="text-primary">Read more <i class="mdi mdi-arrow-right"></i></a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                <?php }
                                                            } else {
                                                                ?>

                                                                <div class="col-sm-12">
                                                                    <div class="card p-1 border shadow-none">
                                                                        <div class="p-3">
                                                                            <h5>There Isn't Any Post! <a href="" class="btn btn-primary">Add New...</a></h5>

                                                                        </div>


                                                                    </div>
                                                                </div>
                                                            <?php
                                                            }

                                                            ?>


                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="tab-pane" id="Meetings" role="tabpanel">
                                        <div>
                                            <div class="row justify-content-center">
                                                <div class="col-xl-8">
                                                    <div>
                                                        <div class="row align-items-center">
                                                            <div class="col-4">
                                                                <div>
                                                                    <h5 class="mb-0">Blog List</h5>
                                                                </div>
                                                            </div>


                                                        </div>
                                                        <!-- end row -->

                                                        <hr class="mb-4">

                                                        <div class="row">

                                                            <?php

                                                            $allpostsor = $db->prepare("SELECT * FROM calender_event where calender_event_type=3 ORDER BY calender_event_id DESC");
                                                            $allpostsor->execute(array());
                                                            $say = $allpostsor->rowCount();
                                                            if ($say > 0) {
                                                                while ($allpostcek = $allpostsor->fetch(PDO::FETCH_ASSOC)) {
                                                                    # code...


                                                            ?>
                                                                    <div class="col-sm-6">
                                                                        <div class="card p-1 border shadow-none">
                                                                            <div class="p-3">
                                                                                <h5><a href="event-details.php?calender_event_id=<?= $allpostcek['calender_event_id']  ?>" class="text-dark"><?= $allpostcek['calender_event_title'] ?></a></h5>
                                                                                <p class="text-muted mb-0"><?= $allpostcek['calender_event_timestamp'] ?></p>
                                                                            </div>

                                                                            <div class="position-relative">
                                                                                <img src="../files/<?= $allpostcek['calender_event_thumbnail'] ?>" alt="" class="img-thumbnail">
                                                                            </div>

                                                                            <div class="p-3">

                                                                                <p style="overflow: hidden;display: -webkit-box;-webkit-line-clamp: 2; /* number of lines to show */line-clamp: 2; -webkit-box-orient: vertical;"><?= $allpostcek['calender_event_body'] ?></p>

                                                                                <div>
                                                                                    <a href="#" class="text-primary">Read more <i class="mdi mdi-arrow-right"></i></a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                <?php }
                                                            } else {
                                                                ?>

                                                                <div class="col-sm-12">
                                                                    <div class="card p-1 border shadow-none">
                                                                        <div class="p-3">
                                                                            <h5>There Isn't Any Post! <a href="" class="btn btn-primary">Add New...</a></h5>

                                                                        </div>


                                                                    </div>
                                                                </div>
                                                            <?php
                                                            }

                                                            ?>


                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>


                    </div>
                    <!-- end row -->

                </div> <!-- container-fluid -->
            </div>
            <!-- End Page-content -->


            <?php 
            include './backends/footer.php'
            ?>
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