<?php



include './backends/includes.php';

function kb_to_gb($kb)
{
    $gb = $kb / 1000000;
    return $gb;
}

function percentage($gb)
{
    $percentage = $gb / 20 * 100;
    return $percentage;
}


?>
<!doctype html>
<html lang="tr">

<head>

    <meta charset="utf-8" />
    <title>File Manager |Admin Panel</title>
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
                                <h4 class="mb-sm-0 font-size-18">File Manager</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Apps</a></li>
                                        <li class="breadcrumb-item active">File Manager</li>
                                    </ol>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- end page title -->
                    <div class="d-xl-flex">
                        <div class="w-100">
                            <div class="d-md-flex">
                                <div class="w-100">
                                    <div class="card">
                                        <div class="card-body">




                                            <div class="mt-4">
                                                <div class="d-flex flex-wrap">
                                                    <h5 class="font-size-16 me-3">Recent Files</h5>

                                                    <div class="ms-auto">
                                                        <a href="javascript: void(0);" class="fw-medium text-reset">View All</a>
                                                    </div>
                                                </div>
                                                <hr class="mt-2">

                                                <div class="table-responsive">
                                                    <table class="table align-middle table-nowrap table-hover mb-0">
                                                        <thead>
                                                            <tr>
                                                                <th scope="col">Name</th>
                                                                <th scope="col">Added Policy</th>
                                                                <th scope="col" colspan="2">Size</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>

                                                            <?php
                                                            $totalKB = 0;
                                                            $pagecontentsor = $db->prepare("SELECT * FROM policy_Attechments ORDER BY policy_Attechments_id DESC");
                                                            $pagecontentsor->execute(array());
                                                            $PageContentsay = $pagecontentsor->rowCount();
                                                            while ($pagecontentcek = $pagecontentsor->fetch(PDO::FETCH_ASSOC)) {

                                                                $file_path = '../files/' . $pagecontentcek['policy_Attechments_url'];
                                                                $file_size = filesize($file_path); // dosya boyutunu bayt cinsinden al


                                                                $file_size_kb = round($file_size / 1024, 2); // dosya boyutunu KB cinsinden al

                                                                $totalKB += $file_size_kb;



                                                                $pagePolicysor = $db->prepare("SELECT * FROM policy_list where policy_id=:policy_id");
                                                                $pagePolicysor->execute(array(
                                                                    'policy_id' => $pagecontentcek['attechment_ContentId']
                                                                ));
                                                                $pagePolicycek = $pagePolicysor->fetch(PDO::FETCH_ASSOC);
                                                            ?>
                                                                <tr>
                                                                    <td><a href="javascript: void(0);" class="text-dark fw-medium"><i class="mdi mdi-file-document font-size-16 align-middle text-primary me-2"></i> <?= $pagecontentcek['attechment_ContentName'] ?> </a></td>
                                                                    <td><?= $pagePolicycek['policy_timestamp'] ?></td>
                                                                    <td><?= $file_size_kb . ' KB' ?></td>
                                                                    <td>
                                                                        <div class="dropdown">
                                                                            <a class="font-size-16 text-muted dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                                                                <i class="mdi mdi-dots-horizontal"></i>
                                                                            </a>

                                                                            <div class="dropdown-menu dropdown-menu-end">
                                                                                <a class="dropdown-item" target="_blank" href="../files/<?= $pagecontentcek['policy_Attechments_url'] ?>">Open</a>
                                                                                <a class="dropdown-item" target="_blank" href="./projects-overview.php?policy_id=<?= $pagecontentcek['attechment_ContentId'] ?>">Show Policy</a>
                                                                                <a class="dropdown-item" href="../files/<?= $pagecontentcek['policy_Attechments_url'] ?>" download="">Download</a>

                                                                                <div class="dropdown-divider"></div>
                                                                                <a class="dropdown-item" href="#">Remove</a>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            <?php } ?>

                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end card -->
                                </div>
                                <!-- end w-100 -->
                            </div>
                        </div>

                        <div class="card filemanager-sidebar ms-lg-2">
                            <div class="card-body">
                                <input type="hidden" id="tableContent" value="<?= number_format(percentage(kb_to_gb($totalKB)), 2) ?>">
                                <div class="text-center">
                                    <h5 class="font-size-15 mb-4">Storage</h5>
                                    <div class="apex-charts" id="radial-chart"></div>

                                    <p class="text-muted mt-4"><?= kb_to_gb($totalKB) ?> GB (<?= percentage(kb_to_gb($totalKB)) ?>%) of 20 GB used</p>
                                </div>

                                <div class="mt-4">
                                    <div class="card border shadow-none mb-2">
                                        <a href="javascript: void(0);" class="text-body">
                                            <div class="p-2">
                                                <div class="d-flex">
                                                    <div class="avatar-xs align-self-center me-2">
                                                        <div class="avatar-title rounded bg-transparent text-success font-size-20">
                                                            <i class="mdi mdi-image"></i>
                                                        </div>
                                                    </div>

                                                    <div class="overflow-hidden me-auto">
                                                        <h5 class="font-size-13 text-truncate mb-1">Images</h5>
                                                        <p class="text-muted text-truncate mb-0">176 Files</p>
                                                    </div>

                                                    <div class="ms-2">
                                                        <p class="text-muted">6 GB</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>

                                    <div class="card border shadow-none mb-2">
                                        <a href="javascript: void(0);" class="text-body">
                                            <div class="p-2">
                                                <div class="d-flex">
                                                    <div class="avatar-xs align-self-center me-2">
                                                        <div class="avatar-title rounded bg-transparent text-danger font-size-20">
                                                            <i class="mdi mdi-play-circle-outline"></i>
                                                        </div>
                                                    </div>

                                                    <div class="overflow-hidden me-auto">
                                                        <h5 class="font-size-13 text-truncate mb-1">Video</h5>
                                                        <p class="text-muted text-truncate mb-0">45 Files</p>
                                                    </div>

                                                    <div class="ms-2">
                                                        <p class="text-muted">4.1 GB</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>

                                    <div class="card border shadow-none mb-2">
                                        <a href="javascript: void(0);" class="text-body">
                                            <div class="p-2">
                                                <div class="d-flex">
                                                    <div class="avatar-xs align-self-center me-2">
                                                        <div class="avatar-title rounded bg-transparent text-info font-size-20">
                                                            <i class="mdi mdi-music"></i>
                                                        </div>
                                                    </div>

                                                    <div class="overflow-hidden me-auto">
                                                        <h5 class="font-size-13 text-truncate mb-1">Music</h5>
                                                        <p class="text-muted text-truncate mb-0">21 Files</p>
                                                    </div>

                                                    <div class="ms-2">
                                                        <p class="text-muted">3.2 GB</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>

                                    <div class="card border shadow-none mb-2">
                                        <a href="javascript: void(0);" class="text-body">
                                            <div class="p-2">
                                                <div class="d-flex">
                                                    <div class="avatar-xs align-self-center me-2">
                                                        <div class="avatar-title rounded bg-transparent text-primary font-size-20">
                                                            <i class="mdi mdi-file-document"></i>
                                                        </div>
                                                    </div>

                                                    <div class="overflow-hidden me-auto">
                                                        <h5 class="font-size-13 text-truncate mb-1">Document</h5>
                                                        <p class="text-muted text-truncate mb-0">21 Files</p>
                                                    </div>

                                                    <div class="ms-2">
                                                        <p class="text-muted">2 GB</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>

                                    <div class="card border shadow-none">
                                        <a href="javascript: void(0);" class="text-body">
                                            <div class="p-2">
                                                <div class="d-flex">
                                                    <div class="avatar-xs align-self-center me-2">
                                                        <div class="avatar-title rounded bg-transparent text-warning font-size-20">
                                                            <i class="mdi mdi-folder"></i>
                                                        </div>
                                                    </div>

                                                    <div class="overflow-hidden me-auto">
                                                        <h5 class="font-size-13 text-truncate mb-1">Others</h5>
                                                        <p class="text-muted text-truncate mb-0">20 Files</p>
                                                    </div>

                                                    <div class="ms-2">
                                                        <p class="text-muted">1.4 GB</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
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
        <!-- apexcharts -->
        <script src="assets/libs/apexcharts/apexcharts.min.js"></script>

        <!-- file-manager js -->
        <script src="assets/js/pages/file-manager.init.js"></script>

        <script src="assets/js/app.js"></script>

</body>

</html>