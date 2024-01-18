<?php

include './backends/includes.php';



?>
<!doctype html>
<html lang="tr">

<head>

  <meta charset="utf-8" />
  <title>Task List |Admin Panel</title>
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
  <style>
    .avatar-group-item p {
      color: black;
      opacity: 0;
      position: absolute;
      top: 35px;
      transition: .5s;
    }

    .avatar-group-item:hover p {
      transition: .5s;

      opacity: 1;
    }

    .state .try {
      background-color: rgba(0, 0, 0, .3);
      display: flex;
      flex-direction: column;
      opacity: 0;
      position: absolute;
      top: 35px;
      transition: .5s;
    }

    .state .try span {
      padding: 15px;
    }

    .state:hover .try,
    .state .try:hover {
      transition: .5s;

      opacity: 1;
    }

    .stateCheck:hover {
      cursor: pointer;
      color: green;
    }
  </style>
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
                <h4 class="mb-sm-0 font-size-18">Task List</h4>

                <div class="page-title-right">
                  <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Tasks</a></li>
                    <li class="breadcrumb-item active">Task List</li>
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
                  <h4 class="card-title mb-4">Future To-Do List</h4>
                  <div class="table-responsive">
                    <table class="table table-nowrap align-middle mb-0">
                      <tbody>


                        <?php

                        $todosor = $db->prepare("SELECT * FROM todo WHERE todo_user=:todo_user AND todo_state=0 ORDER BY todo_id DESC");
                        $todosor->execute(array(
                          'todo_user' => $kullanicicek['kullanici_id']
                        ));
                        $say = $todosor->rowCount();
                        while ($todocek = $todosor->fetch(PDO::FETCH_ASSOC)) {

                        ?>


                          <div class="row">
                            <div class="col-lg-1">
                              <div class="stateCheck font-size-12" style="display:flex; align-items:center; justify-content:center;">
                                <a href="./backends/islem.php?changeState=ok&state=1&id=<?= $todocek['todo_id'] ?>">
                                  <i class="fas fa-play"></i> <span style="margin-left: 5px; margin-right:10px;">Start</span>
                                </a>
                              </div>
                            </div>
                            <div class="col-lg-7">
                              <h5 class="text-truncate font-size-14 m-0"><a href="#" class="text-dark"><?= $todocek['todo_title'] ?></a></h5>
                              <p><?= $todocek['todo_content'] ?></p>
                            </div>
                            <div class="col-lg-2">
                              <div class="avatar-group">
                                <?php

                                $list_User = explode(',', $todocek['todo_teamMember']);

                                for ($i = 0; $i < count($list_User); $i++) {
                                  # code..
                                  $todolistsor = $db->prepare("SELECT * FROM kullanici WHERE kullanici_id=:kullanici_id ");
                                  $todolistsor->execute(array(
                                    'kullanici_id' => $list_User[$i]
                                  ));
                                  $todolistcek = $todolistsor->fetch(PDO::FETCH_ASSOC);
                                  if ($todolistcek['kullanici_resim'] == null) {
                                    # code...


                                ?>

                                    <div class="avatar-group-item">
                                      <a href="javascript: void(0);" title="<?= $todolistcek['kullanici_adsoyad'] ?>" class="d-inline-block">
                                        <p><?= $todolistcek['kullanici_adsoyad'] ?></p>
                                        <img src="./user.png" alt="" class="rounded-circle avatar-xs">
                                      </a>
                                    </div>

                                  <?php } else { ?>

                                    <div class="avatar-group-item">
                                      <a href="javascript: void(0);" title="<?= $todolistcek['kullanici_adsoyad'] ?>" class="d-inline-block">
                                        <p><?= $todolistcek['kullanici_id'] ?></p>
                                        <img src="./<?= $todolistcek['kullanici_resim'] ?>" alt="" class="rounded-circle avatar-xs">
                                      </a>
                                    </div>
                                <?php }
                                } ?>

                              </div>
                            </div>
                            <div class="col-lg-2 state">
                              <div class="text-center">

                                <?php if ($todocek['todo_important'] == 1) {
                                  # code...
                                ?>
                                  <span class="badge rounded-pill badge-soft-success font-size-11">Less Important</span>
                                <?php } else if ($todocek['todo_important']  == 3) {
                                  # code...
                                ?>
                                  <span class="badge rounded-pill badge-soft-danger font-size-11">More Important</span>
                                <?php } else if ($todocek['todo_important']  == 2) {
                                  # code...
                                ?>
                                  <span class="badge rounded-pill badge-soft-warning font-size-11">Important</span>
                                <?php } ?>

                              </div>
                            </div>
                          </div>


                        <?php

                        }

                        ?>

                      </tbody>
                    </table>
                  </div>
                </div>
              </div>

              <div class="card">
                <div class="card-body">
                  <h4 class="card-title mb-4">In Progress</h4>
                  <div class="table-responsive">
                    <table class="table table-nowrap align-middle mb-0">
                      <tbody>


                        <?php

                        $todosor = $db->prepare("SELECT * FROM todo WHERE todo_user=:todo_user AND todo_state=1 ORDER BY todo_id DESC ");
                        $todosor->execute(array(
                          'todo_user' => $kullanicicek['kullanici_id']
                        ));
                        $say = $todosor->rowCount();
                        while ($todocek = $todosor->fetch(PDO::FETCH_ASSOC)) {

                        ?>


                          <div class="row">
                            <div class="col-lg-1">
                              <div class="stateCheck font-size-12" style="display:flex; align-items:center; justify-content:center;">
                                <a href="./backends/islem.php?changeState=ok&state=2&id=<?= $todocek['todo_id'] ?>">
                                  <i class="fas fa-check"></i> <span style="margin-left: 5px; margin-right:10px;">Done</span>
                                </a>
                              </div>
                            </div>
                            <div class="col-lg-7">
                              <h5 class="text-truncate font-size-14 m-0"><a href="#" class="text-dark"><?= $todocek['todo_title'] ?></a></h5>
                              <p><?= $todocek['todo_content'] ?></p>
                            </div>
                            <div class="col-lg-2">
                              <div class="avatar-group">
                                <?php

                                $list_User = explode(',', $todocek['todo_teamMember']);

                                for ($i = 0; $i < count($list_User); $i++) {
                                  # code..
                                  $todolistsor = $db->prepare("SELECT * FROM kullanici WHERE kullanici_id=:kullanici_id ");
                                  $todolistsor->execute(array(
                                    'kullanici_id' => $list_User[$i]
                                  ));
                                  $todolistcek = $todolistsor->fetch(PDO::FETCH_ASSOC);
                                  if ($todolistcek['kullanici_resim'] == null) {
                                    # code...


                                ?>

                                    <div class="avatar-group-item">
                                      <a href="javascript: void(0);" title="<?= $todolistcek['kullanici_adsoyad'] ?>" class="d-inline-block">
                                        <p><?= $todolistcek['kullanici_adsoyad'] ?></p>
                                        <img src="./user.png" alt="" class="rounded-circle avatar-xs">
                                      </a>
                                    </div>

                                  <?php } else { ?>

                                    <div class="avatar-group-item">
                                      <a href="javascript: void(0);" title="<?= $todolistcek['kullanici_adsoyad'] ?>" class="d-inline-block">
                                        <p><?= $todolistcek['kullanici_id'] ?></p>
                                        <img src="./<?= $todolistcek['kullanici_resim'] ?>" alt="" class="rounded-circle avatar-xs">
                                      </a>
                                    </div>
                                <?php }
                                } ?>

                              </div>
                            </div>
                            <div class="col-lg-2 state">
                              <div class="text-center">

                                <?php if ($todocek['todo_important'] == 1) {
                                  # code...
                                ?>
                                  <span class="badge rounded-pill badge-soft-success font-size-11">Less Important</span>
                                <?php } else if ($todocek['todo_important']  == 3) {
                                  # code...
                                ?>
                                  <span class="badge rounded-pill badge-soft-danger font-size-11">More Important</span>
                                <?php } else if ($todocek['todo_important']  == 2) {
                                  # code...
                                ?>
                                  <span class="badge rounded-pill badge-soft-warning font-size-11">Important</span>
                                <?php } ?>

                              </div>
                            </div>
                          </div>


                        <?php

                        }

                        ?>

                      </tbody>
                    </table>
                  </div>
                </div>
              </div>

              <div class="card">
                <div class="card-body">
                  <h4 class="card-title mb-4">In Done</h4>
                  <div class="table-responsive">
                    <table class="table table-nowrap align-middle mb-0">
                      <tbody>


                        <?php

                        $todosor = $db->prepare("SELECT * FROM todo WHERE todo_user=:todo_user AND todo_state=2 ORDER BY todo_id DESC ");
                        $todosor->execute(array(
                          'todo_user' => $kullanicicek['kullanici_id']
                        ));
                        $say = $todosor->rowCount();
                        while ($todocek = $todosor->fetch(PDO::FETCH_ASSOC)) {

                        ?>


                          <div class="row">
                            <div class="col-lg-1">
                              <div class="stateCheck font-size-12" style="display:flex; align-items:center; justify-content:center;">
                                <i class="fas fa-cross"></i> <span style="margin-left: 5px; margin-right:10px;">Delete</span>
                              </div>
                            </div>
                            <div class="col-lg-7">
                              <h5 class="text-truncate font-size-14 m-0"><a href="#" class="text-dark"><?= $todocek['todo_title'] ?></a></h5>
                              <p><?= $todocek['todo_content'] ?></p>
                            </div>
                            <div class="col-lg-2">
                              <div class="avatar-group">
                                <?php

                                $list_User = explode(',', $todocek['todo_teamMember']);

                                for ($i = 0; $i < count($list_User); $i++) {
                                  # code..
                                  $todolistsor = $db->prepare("SELECT * FROM kullanici WHERE kullanici_id=:kullanici_id ");
                                  $todolistsor->execute(array(
                                    'kullanici_id' => $list_User[$i]
                                  ));
                                  $todolistcek = $todolistsor->fetch(PDO::FETCH_ASSOC);
                                  if ($todolistcek['kullanici_resim'] == null) {
                                    # code...


                                ?>

                                    <div class="avatar-group-item">
                                      <a href="javascript: void(0);" title="<?= $todolistcek['kullanici_adsoyad'] ?>" class="d-inline-block">
                                        <p><?= $todolistcek['kullanici_adsoyad'] ?></p>
                                        <img src="./user.png" alt="" class="rounded-circle avatar-xs">
                                      </a>
                                    </div>

                                  <?php } else { ?>

                                    <div class="avatar-group-item">
                                      <a href="javascript: void(0);" title="<?= $todolistcek['kullanici_adsoyad'] ?>" class="d-inline-block">
                                        <p><?= $todolistcek['kullanici_id'] ?></p>
                                        <img src="./<?= $todolistcek['kullanici_resim'] ?>" alt="" class="rounded-circle avatar-xs">
                                      </a>
                                    </div>
                                <?php }
                                } ?>

                              </div>
                            </div>
                            <div class="col-lg-2 state">
                              <div class="text-center">

                                <?php if ($todocek['todo_important'] == 1) {
                                  # code...
                                ?>
                                  <span class="badge rounded-pill badge-soft-success font-size-11">Less Important</span>
                                <?php } else if ($todocek['todo_important']  == 3) {
                                  # code...
                                ?>
                                  <span class="badge rounded-pill badge-soft-danger font-size-11">More Important</span>
                                <?php } else if ($todocek['todo_important']  == 2) {
                                  # code...
                                ?>
                                  <span class="badge rounded-pill badge-soft-warning font-size-11">Important</span>
                                <?php } ?>

                              </div>
                            </div>
                          </div>


                        <?php

                        }

                        ?>

                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            <!-- end col -->


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

  <script src="assets/js/pages/tasklist.init.js"></script>

  <script src="assets/js/app.js"></script>

</body>

</html>