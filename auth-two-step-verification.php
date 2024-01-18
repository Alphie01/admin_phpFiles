<?php

ob_start();
session_start();
error_reporting(0);
include './backends/baglan.php';

if ($_POST['created'] == '1') {
    if ($_POST['fourth'] != null) {
        $code = $_POST['first'] . $_POST['second'] . $_POST['third'] . $_POST['fourth'];
        if ($_SESSION['mail_key'] == $code) {
            $_SESSION['kullanici_mail'] = $_SESSION['created_kullanici_mail'];
            header('Location:./user-update.php');
        } else {
            header('Location:./auth-two-step-verification.php?durum=yanliscode');
        }
    }
}

?>

<!doctype html>
<html lang="tr">

<head>

    <meta charset="utf-8" />
    <title>Two Step Verification 2 |Admin Panel</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Desc" name="description" />
    <meta content="AlpSelcuk" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- owl.carousel css -->
    <link rel="stylesheet" href="assets/libs/owl.carousel/assets/owl.carousel.min.css">

    <link rel="stylesheet" href="assets/libs/owl.carousel/assets/owl.theme.default.min.css">

    <!-- Bootstrap Css -->
    <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />
</head>

<body class="auth-body-bg">

    <div>
        <div class="container-fluid p-0">
            <div class="row g-0">

                <div class="col-xl-9">
                    <div class="auth-full-bg pt-lg-5 p-4">
                        <div class="w-100">
                            <div class="bg-overlay"></div>
                            <div class="d-flex h-100 flex-column">

                                <div class="p-4 mt-auto">
                                    <div class="row justify-content-center">
                                        <div class="col-lg-7">
                                            <div class="text-center">

                                                <h4 class="mb-3"><i class="bx bxs-quote-alt-left text-primary h1 align-middle me-3"></i><span class="text-primary">Erasmus+</span> Facing Academic Integrity Threats</h4>

                                                <div dir="ltr">
                                                    <div class="owl-carousel owl-theme auth-review-carousel" id="auth-review-carousel">
                                                        <?php

                                                        $slidersor = $db->prepare("SELECT * FROM services ORDER BY services_id DESC");
                                                        $slidersor->execute(array());
                                                        $say = $slidersor->rowCount();
                                                        while ($slidercek = $slidersor->fetch(PDO::FETCH_ASSOC)) {

                                                        ?>
                                                            <div class="item">
                                                                <div>
                                                                    <h4 class="font-size-16 text-primary"><?= $slidercek['services_title'] ?></h4>
                                                                </div>
                                                                <div class="py-3">
                                                                    <p class="font-size-16 mb-4">" <?= $slidercek['services_content'] ?> "</p>
                                                                </div>

                                                            </div>
                                                        <?php } ?>


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
                <!-- end col -->

                <div class="col-xl-3">
                    <div class="auth-full-page-content p-md-5 p-4">
                        <div class="w-100">

                            <div class="d-flex flex-column h-100">
                                <div class="mb-4 mb-md-5">
                                    <a href="index.php" class="d-block auth-logo">
                                        <img src="assets/images/logo-dark.png" alt="" height="18" class="auth-logo-dark">
                                        <img src="assets/images/logo-light.png" alt="" height="18" class="auth-logo-light">
                                    </a>
                                </div>
                                <div class="my-auto">
                                    <div class="text-center">

                                        <div class="avatar-md mx-auto">
                                            <div class="avatar-title rounded-circle bg-light">
                                                <i class="bx bxs-envelope h1 mb-0 text-primary"></i>
                                            </div>
                                        </div>
                                        <div class="p-2 mt-4">

                                            <h4>Verify Your Email</h4>
                                            <?php if ($_GET['durum'] == 'yanliscode') {
                                                # code...
                                            ?>
                                                <h5 style="color:red;">Verification Code Incorrect</h5>
                                            <?php } ?>
                                            <p class="mb-5"> We have sent a verification code to your <span class="fw-semibold"><?= $_SESSION['created_kullanici_mail'] ?></span> e-mail address. Verify your email to continue.</p>

                                            <form action="./auth-two-step-verification.php" method="POST">
                                                <div class="row">
                                                    <div class="col-3">
                                                        <div class="mb-3">
                                                            <label for="digit1-input" class="visually-hidden">Dight 1</label>
                                                            <input type="text" name="first" class="form-control form-control-lg text-center two-step" maxLength="1" data-value="1" id="digit1-input">
                                                        </div>
                                                    </div>

                                                    <div class="col-3">
                                                        <div class="mb-3">
                                                            <label for="digit2-input" class="visually-hidden">Dight 2</label>
                                                            <input type="text" name="second" class="form-control form-control-lg text-center two-step" maxLength="1" data-value="2" id="digit2-input">
                                                        </div>
                                                    </div>

                                                    <div class="col-3">
                                                        <div class="mb-3">
                                                            <label for="digit3-input" class="visually-hidden">Dight 3</label>
                                                            <input type="text" name="third" class="form-control form-control-lg text-center two-step" maxLength="1" data-value="3" id="digit3-input">
                                                        </div>
                                                    </div>

                                                    <div class="col-3">
                                                        <div class="mb-3">
                                                            <label for="digit4-input" class="visually-hidden">Dight 4</label>
                                                            <input type="text" name="fourth" class="form-control form-control-lg text-center two-step" maxLength="1" data-value="4" id="digit4-input">
                                                        </div>
                                                    </div>
                                                </div>
                                                <input type="hidden" name="created" value="1">
                                                <button name="dogrula" class="btn btn-success w-md">
                                                    Verify
                                                </button>
                                            </form>
                                        </div>

                                    </div>
                                </div>

                                <div class="mt-4 mt-md-5 text-center">
                                    <p class="mb-0">© <script>
                                            document.write(new Date().getFullYear())
                                        </script> Faith. <i class="mdi mdi-heart text-danger"></i> by AlpS</p>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container-fluid -->
    </div>

    <!-- JAVASCRIPT -->
    <script src="assets/libs/jquery/jquery.min.js"></script>
    <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/libs/metismenu/metisMenu.min.js"></script>
    <script src="assets/libs/simplebar/simplebar.min.js"></script>
    <script src="assets/libs/node-waves/waves.min.js"></script>
    <!-- owl.carousel js -->
    <script src="assets/libs/owl.carousel/owl.carousel.min.js"></script>

    <!-- auth-2-carousel init -->
    <script src="assets/js/pages/auth-2-carousel.init.js"></script>

    <!-- two-step-verification js -->
    <script src="assets/js/pages/two-step-verification.init.js"></script>

    <!-- App js -->
    <script src="assets/js/app.js"></script>

</body>

</html>