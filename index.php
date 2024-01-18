<?php



include './backends/includes.php';


$arr = [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0];

$blogsor = $db->prepare("SELECT * FROM blog_news");
$blogsor->execute(array());
$blogCount = $blogsor->rowCount();

if ($kullanicicek['kullanici_yetki'] > 4) {
    $pagecontentsor = $db->prepare("SELECT * FROM policyViewport ORDER BY viewPort_id ASC");
    $pagecontentsor->execute(array());
    $PageContentsay = $pagecontentsor->rowCount();
} else {
    $pagecontentsor = $db->prepare("SELECT * FROM policyViewport where viewPort_userId=:viewPort_userId ORDER BY viewPort_id ASC");
    $pagecontentsor->execute(array(
        'viewPort_userId' => $kullanicicek['kullanici_id']
    ));
    $PageContentsay = $pagecontentsor->rowCount();
}

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
    <title>Saas Dashboard |Admin Panel</title>
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

        include 'backends/header.php';

        ?>

        <div class="main-content">

            <div class="page-content">
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <h4 class="mb-sm-0 font-size-18">Control Panel</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>

                                    </ol>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- end page title -->
                    <!-- end row -->

                    <div class="row">
                        <div class="col-xl-4">
                            <div class="card bg-primary bg-soft">
                                <div>
                                    <div class="row">
                                        <div class="col-7">
                                            <div class="text-primary p-3">
                                                <h5 class="text-primary">Welcome Back!</h5>
                                                <p>Faith Project Sharing Platform! </p>

                                                <ul class="ps-3 mb-0">
                                                    <li class="py-1"><b><?= $kullanicicek['kullanici_adsoyad'] ?></b> <br>
                                                        <?php

                                                        if ($kullanicicek['kullanici_yetki'] == 0) {
                                                            echo 'User';
                                                        } else if ($kullanicicek['kullanici_yetki'] == 1) {
                                                            echo 'Approoved User';
                                                        } else if ($kullanicicek['kullanici_yetki'] == 2) {
                                                            echo 'Assistan';
                                                        } else if ($kullanicicek['kullanici_yetki'] == 3) {
                                                            echo 'Admin - Site Owner';
                                                        } else if ($kullanicicek['kullanici_yetki'] == 4) {
                                                            echo 'Developer';
                                                        } else if ($kullanicicek['kullanici_yetki'] == 5) {
                                                            echo 'Admin - Site Owner';
                                                        }



                                                        ?>
                                                    </li>

                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-5 align-self-end">
                                            <img src="assets/images/profile-img.png" alt="" class="img-fluid">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-8">
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="d-flex align-items-center mb-3">
                                                <div class="avatar-xs me-3">
                                                    <span class="avatar-title rounded-circle bg-primary bg-soft text-primary font-size-18">
                                                        <i class="bx bx-copy-alt"></i>
                                                    </span>
                                                </div>
                                                <h5 class="font-size-14 mb-0">Drafted Project</h5>
                                            </div>
                                            <div class="text-muted mt-4">
                                                <h4>350 <i class="mdi mdi-chevron-up ms-1 text-success"></i></h4>
                                                <div class="d-flex">
                                                    <span class="badge badge-soft-success font-size-12"> + 0.2% </span> <span class="ms-2 text-truncate">By Last Period</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="d-flex align-items-center mb-3">
                                                <div class="avatar-xs me-3">
                                                    <span class="avatar-title rounded-circle bg-primary bg-soft text-primary font-size-18">
                                                        <i class="bx bx-archive-in"></i>
                                                    </span>
                                                </div>
                                                <h5 class="font-size-14 mb-0">Review</h5>
                                            </div>
                                            <div class="text-muted mt-4">
                                                <h4> <?= $PageContentsay ?> <i class="mdi mdi-chevron-up ms-1 text-success"></i></h4>
                                                <div class="d-flex">
                                                    <span class="badge badge-soft-success font-size-12"> + 0.2% </span> <span class="ms-2 text-truncate">By Last Period</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="d-flex align-items-center mb-3">
                                                <div class="avatar-xs me-3">
                                                    <span class="avatar-title rounded-circle bg-primary bg-soft text-primary font-size-18">
                                                        <i class="bx bx-purchase-tag-alt"></i>
                                                    </span>
                                                </div>
                                                <h5 class="font-size-14 mb-0">Drafted Blog</h5>
                                            </div>
                                            <div class="text-muted mt-4">
                                                <h4><?= $blogCount ?> <i class="mdi mdi-chevron-up ms-1 text-success"></i></h4>

                                                <div class="d-flex">
                                                    <span class="badge badge-soft-warning font-size-12"> 0% </span> <span class="ms-2 text-truncate">By Last Period</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end row -->
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xl-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="clearfix">
                                        <div class="float-end">

                                        </div>
                                        <h4 class="card-title mb-4">Reviews</h4>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="text-muted">
                                                <div class="mb-4">
                                                    <p>This Month</p>
                                                    <h4><?= $arr[intval(date('m') - 1)] ?> Review</h4>
                                                    <div><span class="badge badge-soft-success font-size-12 me-1"> + 0.2% </span> In 1 Month Period </div>
                                                </div>



                                                <div class="mt-4">
                                                    <p class="mb-2">Last Month</p>
                                                    <h5><?= $arr[intval(date('m') - 2)] ?> Review</h5>
                                                </div>
                                                <div class="mt-4">
                                                    <p class="mb-2">Avr. Review For This Year</p>
                                                    <h5><?php
                                                        $avrCOunt = 0;
                                                        for ($i = 0; $i < count($arr); $i++) {
                                                            $avrCOunt += $arr[$i];
                                                        }
                                                        echo $avrCOunt / 12;
                                                        ?> Review</h5>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-8">
                                            <div id="line-chart" class="apex-charts" dir="ltr"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end row -->

                    <?php

                    if ($kullanicicek['kullanici_yetki'] == 5) {
                        # code...


                    ?>

                        <div class="row">


                            <div class="col-xl-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title mb-4">Todo List</h4>

                                        <ul class="nav nav-tabs nav-pills bg-light rounded pt-2" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link active" data-bs-toggle="tab" href="#all-post" role="tab">
                                                    All Todos
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" data-bs-toggle="tab" href="#Waiting" role="tab">
                                                    Waiting
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" data-bs-toggle="tab" href="#Ongoing" role="tab">
                                                    Ongoing
                                                </a>
                                            </li>

                                            <li class="nav-item">
                                                <a class="nav-link" data-bs-toggle="tab" href="#Done" role="tab">
                                                    Done
                                                </a>
                                            </li>


                                        </ul>

                                        <div class="mt-4">
                                            <div class="tab-content">
                                                <div class="tab-pane active" id="all-post" role="tabpanel">
                                                    <div data-simplebar style="max-height: 250px;">

                                                        <div class="table-responsive">
                                                            <table class="table table-nowrap align-middle table-hover mb-0">
                                                                <tbody>

                                                                    <?php

                                                                    $todosor = $db->prepare("SELECT * FROM todo WHERE todo_user=:todo_user ORDER BY todo_id DESC");
                                                                    $todosor->execute(array(
                                                                        'todo_user' => $kullanicicek['kullanici_id']
                                                                    ));
                                                                    $say = $todosor->rowCount();
                                                                    if ($say > 0) {
                                                                        while ($todocek = $todosor->fetch(PDO::FETCH_ASSOC)) {

                                                                    ?>
                                                                            <tr>
                                                                                <td style="width: 50px;">

                                                                                    <?php
                                                                                    if ($todocek['todo_state'] == 0) {
                                                                                        echo 'Waiting';
                                                                                    }
                                                                                    if ($todocek['todo_state'] == 1) {
                                                                                        echo 'Ongoing';
                                                                                    }
                                                                                    if ($todocek['todo_state'] == 2) {
                                                                                        echo 'Done';
                                                                                    }
                                                                                    ?>

                                                                                </td>
                                                                                <td>
                                                                                    <div class="text-truncate font-size-14 mb-1"><a class="text-dark" style="width:250px; overflow: hidden;display: -webkit-box;-webkit-line-clamp: 2; /* number of lines to show */line-clamp: 2; -webkit-box-orient: vertical;"><?= $todocek['todo_title']  ?></a></div>
                                                                                    <div class="text-muted mb-0" style="width:250px; overflow: hidden;display: -webkit-box;-webkit-line-clamp: 2; /* number of lines to show */line-clamp: 2; -webkit-box-orient: vertical;"><?= $todocek['todo_content']  ?></div>
                                                                                </td>
                                                                                <td style="width: 90px;">
                                                                                    <div>
                                                                                        <ul class="list-inline mb-0 font-size-16">
                                                                                            <li class="list-inline-item">
                                                                                                <a href="#" class="text-success p-1"><i class="bx bxs-edit-alt"></i></a>
                                                                                            </li>
                                                                                            <li class="list-inline-item">
                                                                                                <a href="#" class="text-danger p-1"><i class="bx bxs-trash"></i></a>
                                                                                            </li>
                                                                                        </ul>
                                                                                    </div>
                                                                                </td>
                                                                            </tr>

                                                                    <?php }
                                                                    } ?>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="tab-pane" id="Waiting" role="tabpanel">
                                                    <div data-simplebar style="max-height: 250px;">

                                                        <div class="table-responsive">
                                                            <table class="table table-nowrap align-middle table-hover mb-0">
                                                                <tbody>

                                                                    <?php

                                                                    $todosor = $db->prepare("SELECT * FROM todo WHERE todo_user=:todo_user and todo_state=0 ORDER BY todo_id DESC");
                                                                    $todosor->execute(array(
                                                                        'todo_user' => $kullanicicek['kullanici_id']
                                                                    ));
                                                                    $say = $todosor->rowCount();
                                                                    if ($say > 0) {
                                                                        while ($todocek = $todosor->fetch(PDO::FETCH_ASSOC)) {

                                                                    ?>
                                                                            <tr>
                                                                                <td style="width: 50px;">

                                                                                    <?php
                                                                                    if ($todocek['todo_state'] == 0) {
                                                                                        echo 'Waiting';
                                                                                    }
                                                                                    if ($todocek['todo_state'] == 1) {
                                                                                        echo 'Ongoing';
                                                                                    }
                                                                                    if ($todocek['todo_state'] == 2) {
                                                                                        echo 'Done';
                                                                                    }
                                                                                    ?>

                                                                                </td>
                                                                                <td>
                                                                                    <div class="text-truncate font-size-14 mb-1"><a class="text-dark" style="width:250px; overflow: hidden;display: -webkit-box;-webkit-line-clamp: 2; /* number of lines to show */line-clamp: 2; -webkit-box-orient: vertical;"><?= $todocek['todo_title']  ?></a></div>
                                                                                    <div class="text-muted mb-0" style="width:250px; overflow: hidden;display: -webkit-box;-webkit-line-clamp: 2; /* number of lines to show */line-clamp: 2; -webkit-box-orient: vertical;"><?= $todocek['todo_content']  ?></div>
                                                                                </td>
                                                                                <td style="width: 90px;">
                                                                                    <div>
                                                                                        <ul class="list-inline mb-0 font-size-16">
                                                                                            <li class="list-inline-item">
                                                                                                <a href="#" class="text-success p-1"><i class="bx bxs-edit-alt"></i></a>
                                                                                            </li>
                                                                                            <li class="list-inline-item">
                                                                                                <a href="#" class="text-danger p-1"><i class="bx bxs-trash"></i></a>
                                                                                            </li>
                                                                                        </ul>
                                                                                    </div>
                                                                                </td>
                                                                            </tr>

                                                                    <?php }
                                                                    } ?>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="tab-pane" id="Ongoing" role="tabpanel">
                                                    <div data-simplebar style="max-height: 250px;">

                                                        <div class="table-responsive">
                                                            <table class="table table-nowrap align-middle table-hover mb-0">
                                                                <tbody>

                                                                    <?php

                                                                    $todosor = $db->prepare("SELECT * FROM todo WHERE todo_user=:todo_user and todo_state=1 ORDER BY todo_id DESC");
                                                                    $todosor->execute(array(
                                                                        'todo_user' => $kullanicicek['kullanici_id']
                                                                    ));
                                                                    $say = $todosor->rowCount();
                                                                    if ($say > 0) {
                                                                        while ($todocek = $todosor->fetch(PDO::FETCH_ASSOC)) {

                                                                    ?>
                                                                            <tr>
                                                                                <td style="width: 50px;">

                                                                                    <?php
                                                                                    if ($todocek['todo_state'] == 0) {
                                                                                        echo 'Waiting';
                                                                                    }
                                                                                    if ($todocek['todo_state'] == 1) {
                                                                                        echo 'Ongoing';
                                                                                    }
                                                                                    if ($todocek['todo_state'] == 2) {
                                                                                        echo 'Done';
                                                                                    }
                                                                                    ?>

                                                                                </td>
                                                                                <td>
                                                                                    <div class="text-truncate font-size-14 mb-1"><a class="text-dark" style="width:250px; overflow: hidden;display: -webkit-box;-webkit-line-clamp: 2; /* number of lines to show */line-clamp: 2; -webkit-box-orient: vertical;"><?= $todocek['todo_title']  ?></a></div>
                                                                                    <div class="text-muted mb-0" style="width:250px; overflow: hidden;display: -webkit-box;-webkit-line-clamp: 2; /* number of lines to show */line-clamp: 2; -webkit-box-orient: vertical;"><?= $todocek['todo_content']  ?></div>
                                                                                </td>
                                                                                <td style="width: 90px;">
                                                                                    <div>
                                                                                        <ul class="list-inline mb-0 font-size-16">
                                                                                            <li class="list-inline-item">
                                                                                                <a href="#" class="text-success p-1"><i class="bx bxs-edit-alt"></i></a>
                                                                                            </li>
                                                                                            <li class="list-inline-item">
                                                                                                <a href="#" class="text-danger p-1"><i class="bx bxs-trash"></i></a>
                                                                                            </li>
                                                                                        </ul>
                                                                                    </div>
                                                                                </td>
                                                                            </tr>

                                                                    <?php }
                                                                    } ?>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="tab-pane" id="Done" role="tabpanel">
                                                    <div data-simplebar style="max-height: 250px;">

                                                        <div class="table-responsive">
                                                            <table class="table table-nowrap align-middle table-hover mb-0">
                                                                <tbody>

                                                                    <?php

                                                                    $todosor = $db->prepare("SELECT * FROM todo WHERE todo_user=:todo_user and todo_state=2 ORDER BY todo_id DESC");
                                                                    $todosor->execute(array(
                                                                        'todo_user' => $kullanicicek['kullanici_id']
                                                                    ));
                                                                    $say = $todosor->rowCount();
                                                                    if ($say > 0) {
                                                                        while ($todocek = $todosor->fetch(PDO::FETCH_ASSOC)) {

                                                                    ?>
                                                                            <tr>
                                                                                <td style="width: 50px;">

                                                                                    <?php
                                                                                    if ($todocek['todo_state'] == 0) {
                                                                                        echo 'Waiting';
                                                                                    }
                                                                                    if ($todocek['todo_state'] == 1) {
                                                                                        echo 'Ongoing';
                                                                                    }
                                                                                    if ($todocek['todo_state'] == 2) {
                                                                                        echo 'Done';
                                                                                    }
                                                                                    ?>

                                                                                </td>
                                                                                <td>
                                                                                    <div class="text-truncate font-size-14 mb-1"><a class="text-dark" style="width:250px; overflow: hidden;display: -webkit-box;-webkit-line-clamp: 2; /* number of lines to show */line-clamp: 2; -webkit-box-orient: vertical;"><?= $todocek['todo_title']  ?></a></div>
                                                                                    <div class="text-muted mb-0" style="width:250px; overflow: hidden;display: -webkit-box;-webkit-line-clamp: 2; /* number of lines to show */line-clamp: 2; -webkit-box-orient: vertical;"><?= $todocek['todo_content']  ?></div>
                                                                                </td>
                                                                                <td style="width: 90px;">
                                                                                    <div>
                                                                                        <ul class="list-inline mb-0 font-size-16">
                                                                                            <li class="list-inline-item">
                                                                                                <a href="#" class="text-success p-1"><i class="bx bxs-edit-alt"></i></a>
                                                                                            </li>
                                                                                            <li class="list-inline-item">
                                                                                                <a href="#" class="text-danger p-1"><i class="bx bxs-trash"></i></a>
                                                                                            </li>
                                                                                        </ul>
                                                                                    </div>
                                                                                </td>
                                                                            </tr>

                                                                    <?php }
                                                                    } ?>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>

                                        </div>
                                    </div>

                                    <div class="card-footer bg-transparent border-top">
                                        <div class="text-center">
                                            <a href="tasks-list.php" class="btn btn-primary waves-effect waves-light"> View More </a>
                                        </div>
                                    </div>
                                </div>
                            </div>



                        </div>


                        
                    <?php

                    }

                    ?>
                    <!-- end row -->
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


                                        $projectSor = $db->prepare("SELECT * FROM policy_list ORDER BY policy_id DESC LIMIT 20");
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

                                        <div class="clearfix">
                                            <div class="col-12">
                                                <div class="card-footer bg-transparent border-top">
                                                    <div class="text-center">
                                                        <a href="projects-grid.php" class="btn btn-primary waves-effect waves-light"> View More... </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
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

    <!-- Saas dashboard init -->
    <script src="assets/js/pages/saas-dashboard.init.js"></script>

    <script src="assets/js/app.js"></script>

</body>

</html>