<?php

include './backends/includes.php';


$profilekullanicisor = $db->prepare("SELECT * FROM kullanici WHERE kullanici_id=:kullanici_id");
$profilekullanicisor->execute(array(
    'kullanici_id' => $_GET['id']
));
$searchsay = $profilekullanicisor->rowCount();

if ($searchsay == 0) {
    header('Location:index.php');
}
$profilekullanicicek = $profilekullanicisor->fetch(PDO::FETCH_ASSOC);



$blogSendersor = $db->prepare("SELECT * FROM blog_news WHERE blog_news_sendBy=:blog_news_sendBy");
$blogSendersor->execute(array(
    'blog_news_sendBy' => $_GET['id']
));
$blogSendersay = $blogSendersor->rowCount();



$arr = [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0];

$pagecontentsor = $db->prepare("SELECT * FROM policy_list where policy_sender=:policy_sender and policy_Draft=1 ORDER BY policy_id ASC");
$pagecontentsor->execute(array(
    'policy_sender' => $_GET['id']
));
$PageContentsay = $pagecontentsor->rowCount();
while ($pagecontentcek = $pagecontentsor->fetch(PDO::FETCH_ASSOC)) {
    $time = $pagecontentcek['policy_timestamp'];
    $exp = explode('-', $time);
    if ($exp[0] == date('Y')) {
        for ($k = 1; $k < 13; $k++) {
            if ($exp[1] == '0' . $k) {
                $arr[$k - 1]++;
            }
        }
    }
}

$draftsor = $db->prepare("SELECT * FROM policy_list where policy_sender=:policy_sender and policy_Draft=0 ORDER BY policy_id ASC");
$draftsor->execute(array(
    'policy_sender' => $_GET['id']
));
$draftsay = $draftsor->rowCount();


$inputdate = implode(',', $arr);

?>

<!doctype html>
<html lang="tr">

<head>

    <meta charset="utf-8" />
    <title>Profile |Admin Panel</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Desc" name="description" />
    <meta content="AlpSelcuk" name="author" />
    <!-- App favicon -->
    <input type="hidden" id="lineContent" value="<?= $inputdate ?>">

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
                                <h4 class="mb-sm-0 font-size-18">Profile</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Contacts</a></li>
                                        <li class="breadcrumb-item active">Profile</li>
                                    </ol>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- end page title -->
                    <div class="row">
                        <div class="col-xl-4">
                            <div class="card overflow-hidden">
                                <div class="bg-primary bg-soft">
                                    <div class="row">
                                        <div class="col-7">
                                            <div class="text-primary p-3">
                                                <h5 class="text-primary">Welcome Back !</h5>
                                                <p>It will seem like simplified</p>
                                            </div>
                                        </div>
                                        <div class="col-5 align-self-end">
                                            <img src="assets/images/profile-img.png" alt="" class="img-fluid">
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body pt-0">
                                    <div class="row" style="display: flex; align-items:center">
                                        <div class="col-sm-9">
                                            <div class="avatar-md profile-user-wid mb-4">
                                                <img src="user.png" alt="" class="img-thumbnail rounded-circle">
                                            </div>
                                            <h5 class="font-size-15 text-truncate"><?= $profilekullanicicek['kullanici_ad'] ?></h5>
                                            <p class="text-muted mb-0 text-truncate">
                                                <?php

                                                

                                                if ($profilekullanicicek['kullanici_yetki'] == 0) {
                                                    echo 'User';
                                                } else if ($profilekullanicicek['kullanici_yetki'] == 1) {
                                                    echo 'Approoved User';
                                                } else if ($profilekullanicicek['kullanici_yetki'] == 2) {
                                                    echo 'Assistan';
                                                } else if ($profilekullanicicek['kullanici_yetki'] == 3) {
                                                    echo 'Admin - Site Owner';
                                                } else if ($profilekullanicicek['kullanici_yetki'] == 4) {
                                                    echo 'Developer';
                                                } else if ($profilekullanicicek['kullanici_yetki'] == 5) {
                                                    echo 'Admin - Site Owner';
                                                }

                                                ?>
                                            </p>
                                        </div>

                                        <?php if ($kullanicicek['kullanici_yetki'] == 5 or $profilekullanicicek['kullanici_id'] == $kullanicicek['kullanici_id']) {
                                            # code...
                                         ?>
                                        <div class="col-sm-3">
                                            <a class="btn btn-primary waves-effect waves-light" href="user-update.php?user_id=<?=$profilekullanicicek['kullanici_id'] ?>">Update</a>
                                        </div>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                            <!-- end card -->

                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title mb-4">Personal Information</h4>

                                    <p class="text-muted mb-4">
                                        <?= $profilekullanicicek['kullanici_aciklama'] ?>
                                    </p>
                                    <div class="table-responsive">
                                        <table class="table table-nowrap mb-0">
                                            <tbody>
                                                <tr>
                                                    <th scope="row">Full Name :</th>
                                                    <td><?= $profilekullanicicek['kullanici_adsoyad'] ?>e</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Mobile :</th>
                                                    <td><?= $profilekullanicicek['kullanici_gsm'] ?></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">E-mail :</th>
                                                    <td><?= $profilekullanicicek['kullanici_mail'] ?></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Location :</th>
                                                    <td><?= $profilekullanicicek['kullanici_adres'] ?></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Instutation Name :</th>
                                                    <td><?= $profilekullanicicek['kullanici_Institue'] ?></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!-- end card -->
                            <!-- end card -->
                        </div>

                        <div class="col-xl-8">

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="card mini-stats-wid">
                                        <div class="card-body">
                                            <div class="d-flex">
                                                <div class="flex-grow-1">
                                                    <p class="text-muted fw-medium mb-2">Shared Projects</p>
                                                    <h4 class="mb-0"><?= $PageContentsay ?></h4>
                                                </div>

                                                <div class="mini-stat-icon avatar-sm align-self-center rounded-circle bg-primary">
                                                    <span class="avatar-title">
                                                        <i class="bx bx-check-circle font-size-24"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card mini-stats-wid">
                                        <div class="card-body">
                                            <div class="d-flex">
                                                <div class="flex-grow-1">
                                                    <p class="text-muted fw-medium mb-2">Pending Projects</p>
                                                    <h4 class="mb-0"><?= $draftsay ?></h4>
                                                </div>

                                                <div class="avatar-sm align-self-center mini-stat-icon rounded-circle bg-primary">
                                                    <span class="avatar-title">
                                                        <i class="bx bx-hourglass font-size-24"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card mini-stats-wid">
                                        <div class="card-body">
                                            <div class="d-flex">
                                                <div class="flex-grow-1">
                                                    <p class="text-muted fw-medium mb-2">Blog Count</p>
                                                    <h4 class="mb-0"><?=$blogSendersay ?></h4>
                                                </div>

                                                <div class="avatar-sm align-self-center mini-stat-icon rounded-circle bg-primary">
                                                    <span class="avatar-title">
                                                        <i class="bx bx-package font-size-24"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title mb-4">Revenue</h4>
                                    <div id="revenue-chart" class="apex-charts" dir="ltr"></div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title mb-4">Last Publishs</h4>
                                    <div class="table-responsive">
                                        <table class="table table-nowrap table-hover mb-0">
                                            <thead>
                                                <tr>
                                                    <th scope="col">#</th>
                                                    <th scope="col">Projects</th>
                                                    <th scope="col">Publish Date</th>

                                                    <th scope="col">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                                <?php

                                                $tablesor = $db->prepare("SELECT * FROM policy_list where policy_sender=:policy_sender and policy_Draft=1 ORDER BY policy_id DESC LIMIT 10");
                                                $tablesor->execute(array(
                                                    'policy_sender' => $_GET['id']
                                                ));

                                                while ($tablecek = $tablesor->fetch(PDO::FETCH_ASSOC)) {

                                                ?>

                                                    <tr>
                                                        <th scope="row"><?= $tablecek['policy_id'] ?></th>
                                                        <td><?= $tablecek['policy_Title_policy'] ?></td>
                                                        <td><?= $tablecek['policy_timestamp'] ?></td>

                                                        <td><a href="./projects-overview.php?policy_id=<?= $tablecek['policy_id'] ?>" class="btn btn-primary waves-effect waves-light">View</a></td>
                                                    </tr>
                                                <?php } ?>


                                            </tbody>
                                        </table>
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
    <!-- apexcharts -->
    <script src="assets/libs/apexcharts/apexcharts.min.js"></script>

    <script src="assets/js/pages/profile.init.js"></script>

    <!-- App js -->
    <script src="assets/js/app.js"></script>

</body>

</html>