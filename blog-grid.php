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
    <!-- Icons Css -->
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
                        <div class="col-xl-12 col-lg-12">
                            <div class="card">
                                <!-- Nav tabs -->
                                <ul class="nav nav-tabs nav-tabs-custom justify-content-center pt-2" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" data-bs-toggle="tab" href="#all-post" role="tab">
                                            All Post
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#News" role="tab">
                                            News
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#Reports" role="tab">
                                            Reports
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#Research" role="tab">
                                            Research Papers
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#Blog" role="tab">
                                            Blog
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

                                                            $allpostsor = $db->prepare("SELECT * FROM blog_news ORDER BY blog_news_id DESC");
                                                            $allpostsor->execute(array());
                                                            $say = $allpostsor->rowCount();
                                                            if ($say > 0) {
                                                                while ($allpostcek = $allpostsor->fetch(PDO::FETCH_ASSOC)) {
                                                                    # code...


                                                            ?>
                                                                    <div class="col-sm-6">
                                                                        <div class="card p-1 border shadow-none">
                                                                            <div class="p-3">
                                                                                <h5><a href="blog-details.php?blog_id=<?= $allpostcek['blog_news_id']  ?>" class="text-dark"><?= $allpostcek['blog_news_title'] ?></a></h5>
                                                                                <p class="text-muted mb-0"><?= $allpostcek['blog_news_timestamp'] ?></p>
                                                                            </div>

                                                                            <div class="position-relative">
                                                                                <img src="../files/<?= $allpostcek['blog_news_thumbnail'] ?>" alt="" class="img-thumbnail">
                                                                            </div>

                                                                            <div class="p-3">

                                                                                <div style="overflow: hidden;display: -webkit-box;-webkit-line-clamp: 2; /* number of lines to show */line-clamp: 2; -webkit-box-orient: vertical;"><?= $allpostcek['blog_news_content'] ?></div>

                                                                                <div class="row">
                                                                                    <div class="col-6"><a href="./blog-details.php?blog_id=<?= $allpostcek['blog_news_id'] ?>" class="text-primary">Read more <i class="mdi mdi-arrow-right"></i></a></div>
                                                                                    <?php if ($kullanicicek['kullanici_yetki'] > 3) {
                                                                                        # code...
                                                                                    ?>
                                                                                        <div class="col-6"><a href="./backends/islem.php?deleteBlog=ok&blogId=<?= $allpostcek['blog_news_id'] ?>" style="color:red;">Delete <i class="mdi mdi-trash-can"></i></a></div>
                                                                                    <?php } ?>

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
                                                                            <h5>There Isn't Any Post!

                                                                                <?php if ($kullanicicek['kullanici_yetki'] > 3) {
                                                                                    # code...
                                                                                ?><a href="blog-create.php" class="btn btn-primary">Add New...</a>

                                                                                <?php } ?>
                                                                            </h5>

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

                                    <div class="tab-pane" id="News" role="tabpanel">
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

                                                            $allpostsor = $db->prepare("SELECT * FROM blog_news where blog_news_place=1 ORDER BY blog_news_id DESC");
                                                            $allpostsor->execute(array());
                                                            $say = $allpostsor->rowCount();
                                                            if ($say > 0) {
                                                                while ($allpostcek = $allpostsor->fetch(PDO::FETCH_ASSOC)) {
                                                                    # code...


                                                            ?>
                                                                    <div class="col-sm-6">
                                                                        <div class="card p-1 border shadow-none">
                                                                            <div class="p-3">
                                                                                <h5><a href="blog-details.php?blog_id=<?= $allpostcek['blog_news_id']  ?>" class="text-dark"><?= $allpostcek['blog_news_title'] ?></a></h5>
                                                                                <p class="text-muted mb-0"><?= $allpostcek['blog_news_timestamp'] ?></p>
                                                                            </div>

                                                                            <div class="position-relative">
                                                                                <img src="../files/<?= $allpostcek['blog_news_thumbnail'] ?>" alt="" class="img-thumbnail">
                                                                            </div>

                                                                            <div class="p-3">

                                                                                <div style="overflow: hidden;display: -webkit-box;-webkit-line-clamp: 2; /* number of lines to show */line-clamp: 2; -webkit-box-orient: vertical;"><?= $allpostcek['blog_news_content'] ?></div>

                                                                                <div class="row">
                                                                                    <div class="col-6"><a href="./blog-details.php?blog_id=<?= $allpostcek['blog_news_id'] ?>" class="text-primary">Read more <i class="mdi mdi-arrow-right"></i></a></div>
                                                                                    <?php if ($kullanicicek['kullanici_yetki'] > 3) {
                                                                                        # code...
                                                                                    ?>
                                                                                        <div class="col-6"><a href="./backends/islem.php?deleteBlog=ok&blogId=<?= $allpostcek['blog_news_id'] ?>" style="color:red;">Delete <i class="mdi mdi-trash-can"></i></a></div>
                                                                                    <?php } ?>
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
                                                                            <h5>There Isn't Any Post!
                                                                                <?php if ($kullanicicek['kullanici_yetki'] > 3) {
                                                                                    # code...
                                                                                ?><a href="blog-create.php" class="btn btn-primary">Add New...</a>

                                                                                <?php } ?>
                                                                            </h5>

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

                                    <div class="tab-pane" id="Reports" role="tabpanel">
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

                                                            $allpostsor = $db->prepare("SELECT * FROM blog_news where blog_news_place=2 ORDER BY blog_news_id DESC");
                                                            $allpostsor->execute(array());
                                                            $say = $allpostsor->rowCount();
                                                            if ($say > 0) {
                                                                while ($allpostcek = $allpostsor->fetch(PDO::FETCH_ASSOC)) {
                                                                    # code...


                                                            ?>
                                                                    <div class="col-sm-6">
                                                                        <div class="card p-1 border shadow-none">
                                                                            <div class="p-3">
                                                                                <h5><a href="blog-details.php?blog_id=<?= $allpostcek['blog_news_id']  ?>" class="text-dark"><?= $allpostcek['blog_news_title'] ?></a></h5>
                                                                                <p class="text-muted mb-0"><?= $allpostcek['blog_news_timestamp'] ?></p>
                                                                            </div>

                                                                            <div class="position-relative">
                                                                                <img src="../files/<?= $allpostcek['blog_news_thumbnail'] ?>" alt="" class="img-thumbnail">
                                                                            </div>

                                                                            <div class="p-3">

                                                                                <div style="overflow: hidden;display: -webkit-box;-webkit-line-clamp: 2; /* number of lines to show */line-clamp: 2; -webkit-box-orient: vertical;"><?= $allpostcek['blog_news_content'] ?></div>

                                                                                <div class="row">
                                                                                    <div class="col-6"><a href="./blog-details.php?blog_id=<?= $allpostcek['blog_news_id'] ?>" class="text-primary">Read more <i class="mdi mdi-arrow-right"></i></a></div>
                                                                                    <?php if ($kullanicicek['kullanici_yetki'] > 3) {
                                                                                        # code...
                                                                                    ?>
                                                                                        <div class="col-6"><a href="./backends/islem.php?deleteBlog=ok&blogId=<?= $allpostcek['blog_news_id'] ?>" style="color:red;">Delete <i class="mdi mdi-trash-can"></i></a></div>
                                                                                    <?php } ?>

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
                                                                            <h5>There Isn't Any Post!
                                                                                <?php if ($kullanicicek['kullanici_yetki'] > 3) {
                                                                                    # code...
                                                                                ?>

                                                                                    <a href="blog-create.php" class="btn btn-primary">Add New...</a>
                                                                                <?php } ?>
                                                                            </h5>

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


                                    <div class="tab-pane" id="Research" role="tabpanel">
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

                                                            $allpostsor = $db->prepare("SELECT * FROM blog_news where blog_news_place=3 ORDER BY blog_news_id DESC");
                                                            $allpostsor->execute(array());
                                                            $say = $allpostsor->rowCount();
                                                            if ($say > 0) {
                                                                while ($allpostcek = $allpostsor->fetch(PDO::FETCH_ASSOC)) {
                                                                    # code...


                                                            ?>
                                                                    <div class="col-sm-6">
                                                                        <div class="card p-1 border shadow-none">
                                                                            <div class="p-3">
                                                                                <h5><a href="blog-details.php?blog_id=<?= $allpostcek['blog_news_id']  ?>" class="text-dark"><?= $allpostcek['blog_news_title'] ?></a></h5>
                                                                                <p class="text-muted mb-0"><?= $allpostcek['blog_news_timestamp'] ?></p>
                                                                            </div>

                                                                            <div class="position-relative">
                                                                                <img src="../files/<?= $allpostcek['blog_news_thumbnail'] ?>" alt="" class="img-thumbnail">
                                                                            </div>

                                                                            <div class="p-3">

                                                                                <div style="overflow: hidden;display: -webkit-box;-webkit-line-clamp: 2; /* number of lines to show */line-clamp: 2; -webkit-box-orient: vertical;"><?= $allpostcek['blog_news_content'] ?></div>

                                                                                <div class="row">
                                                                                    <div class="col-6"><a href="./blog-details.php?blog_id=<?= $allpostcek['blog_news_id'] ?>" class="text-primary">Read more <i class="mdi mdi-arrow-right"></i></a></div>
                                                                                    <?php if ($kullanicicek['kullanici_yetki'] > 3) {
                                                                                        # code...
                                                                                    ?>
                                                                                        <div class="col-6"><a href="./backends/islem.php?deleteBlog=ok&blogId=<?= $allpostcek['blog_news_id'] ?>" style="color:red;">Delete <i class="mdi mdi-trash-can"></i></a></div>
                                                                                    <?php } ?>

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
                                                                            <h5>There Isn't Any Post!
                                                                                <?php if ($kullanicicek['kullanici_yetki'] > 3) {
                                                                                    # code...
                                                                                ?>

                                                                                    <a href="blog-create.php" class="btn btn-primary">Add New...</a>
                                                                                <?php } ?>
                                                                            </h5>

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


                                    <div class="tab-pane" id="Blog" role="tabpanel">
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

                                                            $allpostsor = $db->prepare("SELECT * FROM blog_news where blog_news_place=4 ORDER BY blog_news_id DESC");
                                                            $allpostsor->execute(array());
                                                            $say = $allpostsor->rowCount();
                                                            if ($say > 0) {
                                                                while ($allpostcek = $allpostsor->fetch(PDO::FETCH_ASSOC)) {
                                                                    # code...


                                                            ?>
                                                                    <div class="col-sm-6">
                                                                        <div class="card p-1 border shadow-none">
                                                                            <div class="p-3">
                                                                                <h5><a href="blog-details.php?blog_id=<?= $allpostcek['blog_news_id']  ?>" class="text-dark"><?= $allpostcek['blog_news_title'] ?></a></h5>
                                                                                <p class="text-muted mb-0"><?= $allpostcek['blog_news_timestamp'] ?></p>
                                                                            </div>

                                                                            <div class="position-relative">
                                                                                <img src="../files/<?= $allpostcek['blog_news_thumbnail'] ?>" alt="" class="img-thumbnail">
                                                                            </div>

                                                                            <div class="p-3">

                                                                                <div style="overflow: hidden;display: -webkit-box;-webkit-line-clamp: 2; /* number of lines to show */line-clamp: 2; -webkit-box-orient: vertical;"><?= $allpostcek['blog_news_content'] ?></div>

                                                                                <div class="row">
                                                                                    <div class="col-6"><a href="./blog-details.php?blog_id=<?= $allpostcek['blog_news_id'] ?>" class="text-primary">Read more <i class="mdi mdi-arrow-right"></i></a></div>
                                                                                    <?php if ($kullanicicek['kullanici_yetki'] > 3) {
                                                                                        # code...
                                                                                    ?>
                                                                                        <div class="col-6"><a href="./backends/islem.php?deleteBlog=ok&blogId=<?= $allpostcek['blog_news_id'] ?>" style="color:red;">Delete <i class="mdi mdi-trash-can"></i></a></div>
                                                                                    <?php } ?>

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
                                                                            <h5>There Isn't Any Post!
                                                                                <?php if ($kullanicicek['kullanici_yetki'] > 3) {
                                                                                    # code...
                                                                                ?>

                                                                                    <a href="blog-create.php" class="btn btn-primary">Add New...</a>
                                                                                <?php } ?>
                                                                            </h5>

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
    <script src="assets/js/app.js"></script>

</body>

</html>