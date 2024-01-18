<?php

include './backends/includes.php';


$slidersor = $db->prepare("SELECT * FROM homePage_sliders where homePage_slider_id=:homePage_slider_id ORDER BY homePage_slider_id DESC");
$slidersor->execute(array(
    'homePage_slider_id' => $_GET['serviceId']
));
$slidercek = $slidersor->fetch(PDO::FETCH_ASSOC);

?>
<!doctype html>
<html lang="tr">

<head>

    <meta charset="utf-8" />
    <title>Service Create |Admin Panel</title>
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
                                <h4 class="mb-sm-0 font-size-18">Slider Create</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Slider</a></li>
                                        <li class="breadcrumb-item active">Slider Create</li>
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
                                                <form action="./backends/islem.php" method="post" enctype="multipart/form-data">
                                                    <div>

                                                        <div class="my-4">
                                                            <h4>Title :</h4>
                                                        </div>
                                                        <textarea name="homePage_slider_title" class="editor" id="" cols="30" rows="10"><?= $slidercek['homePage_slider_title'] ?></textarea>



                                                        <hr>

                                                        <div class="mb-4">
                                                            <h4>Description :</h4>
                                                        </div>
                                                        <div class="mt-4">
                                                            <div class="text-muted font-size-14">
                                                                <textarea name="homePage_slider_subText" style="height:700px;" class="editor" id="" cols="30" rows="10">
                                                                <?= $slidercek['homePage_slider_subText'] ?></textarea>

                                                            </div>

                                                            <hr>

                                                        </div>
                                                        <div class="mb-4">
                                                            <h4>Thumbnail :</h4>
                                                        </div>
                                                        <div class="my-5">
                                                            <input type="file" name="homePage_slider_thumbnail" accept="image/png, image/jpeg">
                                                        </div>
                                                        <input type="hidden" name="homePage_slider_id" value="<?= $_GET['serviceId'] ?>">
                                                        <button class="btn btn-primary" type="submit" name="<?php if ($_GET['serviceId'] == null) {
                                                                                                                echo 'sliderCreate';
                                                                                                            } else {
                                                                                                                echo 'sliderUpdate';
                                                                                                                # code...
                                                                                                            }
                                                                                                            ?>"><?php if ($_GET['serviceId'] == null) {
                                                                                                                    echo 'Create';
                                                                                                                } else {
                                                                                                                    echo 'Update';
                                                                                                                    # code...
                                                                                                                }
                                                                                                                ?></button>
                                                    </div>
                                                </form>
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
    <script src="https://cdn.ckeditor.com/ckeditor5/37.0.1/classic/ckeditor.js"></script>
    <script>
        var allEditors = document.querySelectorAll('.editor');
        for (var i = 0; i < allEditors.length; ++i) {
            ClassicEditor.create(allEditors[i]);
        }
    </script>
    <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/libs/metismenu/metisMenu.min.js"></script>
    <script src="assets/libs/simplebar/simplebar.min.js"></script>
    <script src="assets/libs/node-waves/waves.min.js"></script>
    <script src="assets/js/app.js"></script>

</body>

</html>