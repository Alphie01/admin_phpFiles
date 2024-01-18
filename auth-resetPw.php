<?php

include './backends/baglan.php';

$pwsor = $db->prepare("SELECT * FROM kullanici where kullanici_mail=:mail and kullanici_password=:password1");
$pwsor->execute(array(
    'mail' => $_GET['kullanici_mail'],
    'password1' => $_GET['password']
));
$say = $pwsor->rowCount();

if ($say == 0) {
    header('./auth-login.php');
}

?>

<!doctype html>
<html lang="tr">

<head>

    <meta charset="utf-8" />
    <title>Recover Password 2 |Admin Panel</title>
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

                                    <div>
                                        <h5 class="text-primary"> Reset Password</h5>
                                        <p class="text-muted">Re-Password with Faith.</p>
                                    </div>

                                    <div class="mt-4">

                                        <form action="./backends/islem.php" method="POST">

                                            <div class="mb-3">
                                                <label for="userpassword" class="form-label">Password</label>
                                                <input type="password" class="form-control" id="userpassword" name="kullanici_password" placeholder="Enter Password...">
                                                <div class="invalid-feedback">
                                                    Enter Password...
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <label for="userpassword" class="form-label">Password</label>
                                                <input type="password" class="form-control" id="userpassword" name="kullanici_password_tekrar" placeholder="Enter Password...">
                                                <div class="invalid-feedback">
                                                    Enter Password...
                                                </div>
                                            </div>
                                            <input type="hidden" name="kullanici_mail" value=<?=$_GET['mail'] ?>>
                                            <input type="hidden" name="pw" value=<?=$_GET['password'] ?>>
                                            <div class="text-end">
                                                <button name="definePw" class="btn btn-primary w-md waves-effect waves-light" type="submit">Reset</button>
                                            </div>

                                        </form>
                                        <div class="mt-5 text-center">
                                            <p>Remember It ? <a href="auth-login.php" class="fw-medium text-primary"> Sign In here</a> </p>
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

    <!-- App js -->
    <script src="assets/js/app.js"></script>

</body>

</html>