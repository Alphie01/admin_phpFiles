<?php

include './backends/includes.php';

?>
<!doctype html>
<html lang="tr">

<head>

    <meta charset="utf-8" />
    <title>Responsive Table |Admin Panel</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Desc" name="description" />
    <meta content="AlpSelcuk" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- Responsive Table css -->
    <link href="assets/libs/admin-resources/rwd-table/rwd-table.min.css" rel="stylesheet" type="text/css" />

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

        include './backends/header.php'

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
                                <h4 class="mb-sm-0 font-size-18">Home Page Sliders</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Home Page Sliders</a></li>
                                    </ol>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- end page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">

                                    <h4 class="card-title">Result List <a href="./result-create.php" class="
                                    btn btn-primary" style="margin-left: 15px;">Add New</a></h4>
                                    <p class="card-title-desc">In this section, you can find the Result in the Main Corporate Page.</p>

                                    <div class="table-rep-plugin">
                                        <div class="table-responsive mb-0" data-pattern="priority-columns">
                                            <table id="tech-companies-1" class="table table-striped">
                                                <thead>
                                                    <tr>
                                                        <th>Result Id</th>
                                                        <th data-priority="1">Result Title</th>
                                                        <th data-priority="3">Result Description</th>

                                                        <th data-priority="3">Action</th>

                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php

                                                    $slidersor = $db->prepare("SELECT * FROM project_result ORDER BY project_result_id DESC");
                                                    $slidersor->execute(array());
                                                    $say = $slidersor->rowCount();
                                                    while ($slidercek = $slidersor->fetch(PDO::FETCH_ASSOC)) {
                                                    ?>
                                                        <tr>
                                                            <th><span class="co-name">#<?=$slidercek['project_result_id'] ?></span></th>
                                                            <td><?=$slidercek['project_result_title'] ?></td>
                                                            <td><?=$slidercek['project_result_desc'] ?></td>

                                                            <td>
                                                                <a href="./result-create.php?project_result_id=<?=$slidercek['project_result_id'] ?>"> <i class="fas fa-search" style="padding-right: 15px;"></i></a>
                                                                <a href="./backends/islem.php?deleteResult=ok&project_result_id=<?=$slidercek['project_result_id'] ?>"><i class="fas fa-trash"></i></a>
                                                            </td>

                                                        </tr>
                                                    <?php } ?>


                                                </tbody>
                                            </table>
                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div> <!-- end col -->
                    </div> <!-- end row -->

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
    <!-- Responsive Table js -->
    <script src="assets/libs/admin-resources/rwd-table/rwd-table.min.js"></script>

    <!-- Init js -->
    <script src="assets/js/pages/table-responsive.init.js"></script>

    <script src="assets/js/app.js"></script>

</body>

</html>