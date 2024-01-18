<!doctype html>
<html lang="tr">

<head>

    <meta charset="utf-8" />
<title>Modals |Admin Panel</title>
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

    <header id="page-topbar">
    <div class="navbar-header">
        <div class="d-flex">
            <!-- LOGO -->
            <div class="navbar-brand-box">
                <a href="index.php" class="logo logo-dark">
                    <span class="logo-sm">
                        <img src="assets/images/logo.svg" alt="" height="22">
                    </span>
                    <span class="logo-lg">
                        <img src="assets/images/logo-dark.png" alt="" height="17">
                    </span>
                </a>

                <a href="index.php" class="logo logo-light">
                    <span class="logo-sm">
                        <img src="assets/images/logo-light.svg" alt="" height="22">
                    </span>
                    <span class="logo-lg">
                        <img src="assets/images/logo-light.png" alt="" height="19">
                    </span>
                </a>
            </div>

            <button type="button" class="btn btn-sm px-3 font-size-16 header-item waves-effect" id="vertical-menu-btn">
                <i class="fa fa-fw fa-bars"></i>
            </button>

            <!-- App Search-->
            <form class="app-search d-none d-lg-block">
                <div class="position-relative">
                    <input type="text" class="form-control" placeholder="Search...">
                    <span class="bx bx-search-alt"></span>
                </div>
            </form>

            <div class="dropdown dropdown-mega d-none d-lg-block ms-2">
                <button type="button" class="btn header-item waves-effect" data-bs-toggle="dropdown" aria-haspopup="false" aria-expanded="false">
                    <span key="t-megamenu">Mega Menu</span>
                    <i class="mdi mdi-chevron-down"></i>
                </button>
                <div class="dropdown-menu dropdown-megamenu">
                    <div class="row">
                        <div class="col-sm-8">

                            <div class="row">
                                <div class="col-md-4">
                                    <h5 class="font-size-14 mt-0" key="t-ui-components">UI Components</h5>
                                    <ul class="list-unstyled megamenu-list">
                                        <li>
                                            <a href="javascript:void(0);" key="t-lightbox">Lightbox</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" key="t-range-slider">Range Slider</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" key="t-sweet-alert">Sweet-Alert</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" key="t-rating">Rating</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" key="t-forms">Forms</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" key="t-tables">Tables</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" key="t-charts">Charts</a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="col-md-4">
                                    <h5 class="font-size-14 mt-0" key="t-applications">Applications</h5>
                                    <ul class="list-unstyled megamenu-list">
                                        <li>
                                            <a href="javascript:void(0);" key="t-ecommerce">Ecommerce</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" key="t-calendar">Files.Calendar</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" key="t-email">Email</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" key="t-projects">Projects</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" key="t-tasks">Tasks</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" key="t-contacts">Contacts</a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="col-md-4">
                                    <h5 class="font-size-14 mt-0" key="t-extra-pages">Extra Pages</h5>
                                    <ul class="list-unstyled megamenu-list">
                                        <li>
                                            <a href="javascript:void(0);" key="t-light-sidebar">Light Sidebar</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" key="t-compact-sidebar">Compact Sidebar</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" key="t-horizontal">Horizontal Layout</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" key="t-maintenance">Maintenance</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" key="t-coming-soon">Coming Soon</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" key="t-timeline">Timeline</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" key="t-faqs">FAQs</a>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="row">
                                <div class="col-sm-6">
                                    <h5 class="font-size-14 mt-0" key="t-ui-components">UI Components</h5>
                                    <ul class="list-unstyled megamenu-list">
                                        <li>
                                            <a href="javascript:void(0);" key="t-lightbox">Lightbox</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" key="t-range-slider">Range Slider</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" key="t-sweet-alert">Sweet-Alert</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" key="t-rating">Rating</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" key="t-forms">Forms</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" key="t-tables">Tables</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" key="t-charts">Charts</a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="col-sm-5">
                                    <div>
                                        <img src="assets/images/megamenu-img.png" alt="" class="img-fluid mx-auto d-block">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="d-flex">

            <div class="dropdown d-inline-block d-lg-none ms-2">
                <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-search-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="mdi mdi-magnify"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0" aria-labelledby="page-header-search-dropdown">

                    <form class="p-3">
                        <div class="form-group m-0">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search ..." aria-label="Recipient's username">
                                <div class="input-group-append">
                                    <button class="btn btn-primary" type="submit"><i class="mdi mdi-magnify"></i></button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="dropdown d-inline-block">
                <button type="button" class="btn header-item waves-effect" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img src="assets/images/flags/us.jpg" alt="Header Language" height="16">                </button>
                <div class="dropdown-menu dropdown-menu-end">

                    <!-- item-->

                    <a href="http://localhost:8080/lang/en" class="dropdown-item notify-item language" data-lang="en">
                        <img src="assets/images/flags/us.jpg" alt="user-image" class="me-1" height="12"> <span class="align-middle">English</span>
                    </a>

                    <a href="http://localhost:8080/lang/es" class="dropdown-item notify-item language" data-lang="sp">
                        <img src="assets/images/flags/spain.jpg" alt="user-image" class="me-1" height="12"> <span class="align-middle">Spanish</span>
                    </a>

                    <a href="http://localhost:8080/lang/de" class="dropdown-item notify-item language" data-lang="gr">
                        <img src="assets/images/flags/germany.jpg" alt="user-image" class="me-1" height="12"> <span class="align-middle">German</span>
                    </a>

                    <a href="http://localhost:8080/lang/it" class="dropdown-item notify-item language" data-lang="it">
                        <img src="assets/images/flags/italy.jpg" alt="user-image" class="me-1" height="12"> <span class="align-middle">Italian</span>
                    </a>

                    <a href="http://localhost:8080/lang/ru" class="dropdown-item notify-item language" data-lang="ru">
                        <img src="assets/images/flags/russia.jpg" alt="user-image" class="me-1" height="12"> <span class="align-middle">Russian</span>
                    </a>

                </div>
            </div>

            <div class="dropdown d-none d-lg-inline-block ms-1">
                <button type="button" class="btn header-item noti-icon waves-effect" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="bx bx-customize"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end">
                    <div class="px-lg-2">
                        <div class="row g-0">
                            <div class="col">
                                <a class="dropdown-icon-item" href="#">
                                    <img src="assets/images/brands/github.png" alt="Github">
                                    <span>GitHub</span>
                                </a>
                            </div>
                            <div class="col">
                                <a class="dropdown-icon-item" href="#">
                                    <img src="assets/images/brands/bitbucket.png" alt="bitbucket">
                                    <span>Bitbucket</span>
                                </a>
                            </div>
                            <div class="col">
                                <a class="dropdown-icon-item" href="#">
                                    <img src="assets/images/brands/dribbble.png" alt="dribbble">
                                    <span>Dribbble</span>
                                </a>
                            </div>
                        </div>

                        <div class="row g-0">
                            <div class="col">
                                <a class="dropdown-icon-item" href="#">
                                    <img src="assets/images/brands/dropbox.png" alt="dropbox">
                                    <span>Dropbox</span>
                                </a>
                            </div>
                            <div class="col">
                                <a class="dropdown-icon-item" href="#">
                                    <img src="assets/images/brands/mail_chimp.png" alt="mail_chimp">
                                    <span>Mail Chimp</span>
                                </a>
                            </div>
                            <div class="col">
                                <a class="dropdown-icon-item" href="#">
                                    <img src="assets/images/brands/slack.png" alt="slack">
                                    <span>Slack</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="dropdown d-none d-lg-inline-block ms-1">
                <button type="button" class="btn header-item noti-icon waves-effect" data-toggle="fullscreen">
                    <i class="bx bx-fullscreen"></i>
                </button>
            </div>

            <div class="dropdown d-inline-block">
                <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-notifications-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="bx bx-bell bx-tada"></i>
                    <span class="badge bg-danger rounded-pill">3</span>
                </button>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0" aria-labelledby="page-header-notifications-dropdown">
                    <div class="p-3">
                        <div class="row align-items-center">
                            <div class="col">
                                <h6 class="m-0" key="t-notifications"> Notifications </h6>
                            </div>
                            <div class="col-auto">
                                <a href="#!" class="small" key="t-view-all"> Files.View All </a>
                            </div>
                        </div>
                    </div>
                    <div data-simplebar style="max-height: 230px;">
                        <a href="" class="text-reset notification-item">
                            <div class="d-flex">
                                <div class="avatar-xs me-3">
                                    <span class="avatar-title bg-primary rounded-circle font-size-16">
                                        <i class="bx bx-cart"></i>
                                    </span>
                                </div>
                                <div class="flex-grow-1">
                                    <h6 class="mt-0 mb-1" key="t-your-order">Your order is placed</h6>
                                    <div class="font-size-12 text-muted">
                                        <p class="mb-1" key="t-grammer">If several languages coalesce the grammar</p>
                                        <p class="mb-0"><i class="mdi mdi-clock-outline"></i> <span key="t-min-ago">3 min ago</span></p>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="" class="text-reset notification-item">
                            <div class="d-flex">
                                <img src="assets/images/users/avatar-3.jpg" class="me-3 rounded-circle avatar-xs" alt="user-pic">
                                <div class="flex-grow-1">
                                    <h6 class="mt-0 mb-1">James Lemire</h6>
                                    <div class="font-size-12 text-muted">
                                        <p class="mb-1" key="t-simplified">It will seem like simplified English.</p>
                                        <p class="mb-0"><i class="mdi mdi-clock-outline"></i> <span key="t-hours-ago">1 hours ago</span></p>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="" class="text-reset notification-item">
                            <div class="d-flex">
                                <div class="avatar-xs me-3">
                                    <span class="avatar-title bg-success rounded-circle font-size-16">
                                        <i class="bx bx-badge-check"></i>
                                    </span>
                                </div>
                                <div class="flex-grow-1">
                                    <h6 class="mt-0 mb-1" key="t-shipped">Your item is shipped</h6>
                                    <div class="font-size-12 text-muted">
                                        <p class="mb-1" key="t-grammer">If several languages coalesce the grammar</p>
                                        <p class="mb-0"><i class="mdi mdi-clock-outline"></i> <span key="t-min-ago">3 min ago</span></p>
                                    </div>
                                </div>
                            </div>
                        </a>

                        <a href="" class="text-reset notification-item">
                            <div class="d-flex">
                                <img src="assets/images/users/avatar-4.jpg" class="me-3 rounded-circle avatar-xs" alt="user-pic">
                                <div class="flex-grow-1">
                                    <h6 class="mt-0 mb-1">Salena Layfield</h6>
                                    <div class="font-size-12 text-muted">
                                        <p class="mb-1" key="t-occidental">As a skeptical Cambridge friend of mine occidental.</p>
                                        <p class="mb-0"><i class="mdi mdi-clock-outline"></i> <span key="t-hours-ago">1 hours ago</span></p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="p-2 border-top d-grid">
                        <a class="btn btn-sm btn-link font-size-14 text-center" href="javascript:void(0)">
                            <i class="mdi mdi-arrow-right-circle me-1"></i> <span key="t-view-more">View More..</span>
                        </a>
                    </div>
                </div>
            </div>

            <div class="dropdown d-inline-block">
                <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img class="rounded-circle header-profile-user" src="assets/images/users/avatar-1.jpg" alt="Header Avatar">
                    <span class="d-none d-xl-inline-block ms-1" key="t-henry">Henry</span>
                    <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-end">
                    <!-- item-->
                    <a class="dropdown-item" href="#"><i class="bx bx-user font-size-16 align-middle me-1"></i> <span key="t-profile">Profile</span></a>
                    <a class="dropdown-item" href="#"><i class="bx bx-wallet font-size-16 align-middle me-1"></i> <span key="t-my-wallet">My Wallet</span></a>
                    <a class="dropdown-item d-block" href="#"><span class="badge bg-success float-end">11</span><i class="bx bx-wrench font-size-16 align-middle me-1"></i> <span key="t-settings">Settings</span></a>
                    <a class="dropdown-item" href="auth-lock-screen.php"><i class="bx bx-lock-open font-size-16 align-middle me-1"></i> <span key="t-lock-screen">Lock screen</span></a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item text-danger" href="auth-login.php"><i class="bx bx-power-off font-size-16 align-middle me-1 text-danger"></i> <span key="t-logout">Logout</span></a>
                </div>
            </div>

            <div class="dropdown d-inline-block">
                <button type="button" class="btn header-item noti-icon right-bar-toggle waves-effect">
                    <i class="bx bx-cog bx-spin"></i>
                </button>
            </div>

        </div>
    </div>
</header>
<!-- ========== Left Sidebar Start ========== -->
<div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title" key="t-menu">Menu</li>

                <li>
                    <a href="javascript: void(0);" class="waves-effect">
                        <i class="bx bx-home-circle"></i><span class="badge rounded-pill bg-info float-end">04</span>
                        <span key="t-dashboards">Dashboards</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="index.php" key="t-default">Default</a></li>
                        <li><a href="dashboard-saas.php" key="t-saas">Saas</a></li>
                        <li><a href="dashboard-crypto.php" key="t-crypto">Crypto</a></li>
                        <li><a href="dashboard-blog.php" key="t-blog">Blog</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-layout"></i>
                        <span key="t-layouts">Layouts</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="true">
                        <li>
                            <a href="javascript: void(0);" class="has-arrow" key="t-vertical">Vertical</a>
                            <ul class="sub-menu" aria-expanded="true">
                                <li><a href="layouts-light-sidebar.php" key="t-light-sidebar">Light Sidebar</a></li>
                                <li><a href="layouts-compact-sidebar.php" key="t-compact-sidebar">Compact Sidebar</a></li>
                                <li><a href="layouts-icon-sidebar.php" key="t-icon-sidebar">Icon Sidebar</a></li>
                                <li><a href="layouts-boxed.php" key="t-boxed-width">Boxed Width</a></li>
                                <li><a href="layouts-preloader.php" key="t-preloader">Preloader</a></li>
                                <li><a href="layouts-colored-sidebar.php" key="t-colored-sidebar">Colored Sidebar</a></li>
                                <li><a href="layouts-scrollable.php" key="t-scrollable">Scrollable</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="javascript: void(0);" class="has-arrow" key="t-horizontal">Horizontal</a>
                            <ul class="sub-menu" aria-expanded="true">
                                <li><a href="layouts-horizontal.php" key="t-horizontal">Horizontal</a></li>
                                <li><a href="layouts-hori-topbar-light.php" key="t-topbar-light">Topbar Light</a></li>
                                <li><a href="layouts-hori-boxed-width.php" key="t-boxed-width">Boxed Width</a></li>
                                <li><a href="layouts-hori-preloader.php" key="t-preloader">Preloader</a></li>
                                <li><a href="layouts-hori-colored-header.php" key="t-colored-topbar">Colored Header</a></li>
                                <li><a href="layouts-hori-scrollable.php" key="t-scrollable">Scrollable</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>

                <li class="menu-title" key="t-apps">Apps</li>

                <li>
                    <a href="javascript: void(0);" class="waves-effect">
                        <i class="bx bx-calendar"></i><span class="badge rounded-pill bg-success float-end">New</span>
                        <span key="t-dashboards">Calendars</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="calendar.php" key="t-tui-calendar">TUI Calendar</a></li>
                        <li><a href="calendar-full.php" key="t-full-calendar">Full Calendar</a></li>
                    </ul>
                </li>

                <li>
                    <a href="chat.php" class="waves-effect">
                        <i class="bx bx-chat"></i>
                        <span key="t-chat">Chat</span>
                    </a>
                </li>

                <li>
                    <a href="apps-filemanager.php" class="waves-effect">
                        <i class="bx bx-file"></i>
                        <span class="badge rounded-pill bg-success float-end" key="t-new">New</span>
                        <span key="t-file-manager">File Manager</span>
                    </a>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-store"></i>
                        <span key="t-ecommerce"><span>Ecommerce</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="ecommerce-products.php" key="t-products">Products</a></li>
                        <li><a href="ecommerce-product-detail.php" key="t-product-detail">Product Detail</a></li>
                        <li><a href="ecommerce-orders.php" key="t-orders">Orders</a></li>
                        <li><a href="ecommerce-customers.php" key="t-customers">Customers</a></li>
                        <li><a href="ecommerce-cart.php" key="t-cart">Cart</a></li>
                        <li><a href="ecommerce-checkout.php" key="t-checkout">Checkout</a></li>
                        <li><a href="ecommerce-shops.php" key="t-shops">Shops</a></li>
                        <li><a href="ecommerce-add-product.php" key="t-add-product">Add Product</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-bitcoin"></i>
                        <span key="t-crypto">Crypto</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="crypto-wallet.php" key="t-wallet">Wallet</a></li>
                        <li><a href="crypto-buy-sell.php" key="t-buy">Buy/Sell</a></li>
                        <li><a href="crypto-exchange.php" key="t-exchange">Exchange</a></li>
                        <li><a href="crypto-lending.php" key="t-lending">Lending</a></li>
                        <li><a href="crypto-orders.php" key="t-orders">Orders</a></li>
                        <li><a href="crypto-kyc-application.php" key="t-kyc">KYC Application</a></li>
                        <li><a href="crypto-ico-landing.php" key="t-ico">ICO Landing</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-envelope"></i>
                        <span key="t-email">Email</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="email-inbox.php" key="t-inbox">Inbox</a></li>
                        <li><a href="email-read.php" key="t-read-email">Read Email</a></li>
                        <li>
                            <a href="javascript: void(0);">
                                <span class="badge rounded-pill badge-soft-success float-end" key="t-new">New</span>
                                <span key="t-email-templates">Templates</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="true">
                                <li><a href="email-template-basic.php" key="t-basic-action">Basic Action</a></li>
                                <li><a href="email-template-alert.php" key="t-alert-email">Alert Email</a></li>
                                <li><a href="email-template-billing.php" key="t-bill-email">Billing Email</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-receipt"></i>
                        <span key="t-invoices">Invoices</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="invoices-list.php" key="t-invoice-list">Invoice List</a></li>
                        <li><a href="invoices-detail.php" key="t-invoice-detail">Invoice Detail</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-briefcase-alt-2"></i>
                        <span key="t-projects">Projects</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="projects-grid.php" key="t-p-grid">Projects Grid</a></li>
                        <li><a href="projects-list.php" key="t-p-list">Projects List</a></li>
                        <li><a href="projects-overview.php" key="t-p-overview">Project Overview</a></li>
                        <li><a href="projects-create.php" key="t-create-new">Create New</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-task"></i>
                        <span key="t-tasks">Tasks</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="tasks-list.php" key="t-task-list">Task List</a></li>
                        <li><a href="tasks-kanban.php" key="t-kanban-board">Kanban Board</a></li>
                        <li><a href="tasks-create.php" key="t-create-task">Create Task</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bxs-user-detail"></i>
                        <span key="t-contacts">Contacts</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="contacts-grid.php" key="t-user-grid">User Grid</a></li>
                        <li><a href="contacts-list.php" key="t-user-list">User List</a></li>
                        <li><a href="contacts-profile.php" key="t-profile">Profile</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="waves-effect">
                        <span class="badge rounded-pill bg-success float-end" key="t-new">New</span>
                        <i class="bx bx-detail"></i>
                        <span key="t-blog">Blog</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="blog-list.php" key="t-blog-list">Blog List</a></li>
                        <li><a href="blog-grid.php" key="t-blog-grid">Blog Grid</a></li>
                        <li><a href="blog-details.php" key="t-blog-details">Blog Details</a></li>
                    </ul>
                </li>

                <li class="menu-title" key="t-pages">Pages</li>

                <li>
                    <a href="javascript: void(0);" class="waves-effect">
                        <span class="badge rounded-pill bg-success float-end" key="t-new">New</span>
                        <i class="bx bx-user-circle"></i>
                        <span key="t-authentication">Authentication</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="auth-login.php" key="t-login">Login</a></li>
                        <li><a href="auth-login-2.php" key="t-login-2">Login 2</a></li>
                        <li><a href="auth-register.php" key="t-register">Register</a></li>
                        <li><a href="auth-register-2.php" key="t-register-2">Register 2</a></li>
                        <li><a href="auth-recoverpw.php" key="t-recover-password">Recover Password</a></li>
                        <li><a href="auth-recoverpw-2.php" key="t-recover-password-2">Recover Password 2</a></li>
                        <li><a href="auth-lock-screen.php" key="t-lock-screen">Lock Screen</a></li>
                        <li><a href="auth-lock-screen-2.php" key="t-lock-screen-2">Lock Screen 2</a></li>
                        <li><a href="auth-confirm-mail.php" key="t-confirm-mail">Confirm Mail</a></li>
                        <li><a href="auth-confirm-mail-2.php" key="t-confirm-mail-2">Confirm Mail 2</a></li>
                        <li><a href="auth-email-verification.php" key="t-email-verification">Email Verification</a></li>
                        <li><a href="auth-email-verification-2.php" key="t-email-verification-2">Email Verification 2</a></li>
                        <li><a href="auth-two-step-verification.php" key="t-two-step-verification">Two Step Verification</a></li>
                        <li><a href="auth-two-step-verification-2.php" key="t-two-step-verification-2">Two Step Verification 2</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-file"></i>
                        <span key="t-utility">Utility</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="pages-starter.php" key="t-starter-page">Starter Page</a></li>
                        <li><a href="pages-maintenance.php" key="t-maintenance">Maintenance</a></li>
                        <li><a href="pages-comingsoon.php" key="t-coming-soon">Coming Soon</a></li>
                        <li><a href="pages-timeline.php" key="t-timeline">Timeline</a></li>
                        <li><a href="pages-faqs.php" key="t-faqs">FAQs</a></li>
                        <li><a href="pages-pricing.php" key="t-pricing">Pricing</a></li>
                        <li><a href="pages-404.php" key="t-error-404">Error 404</a></li>
                        <li><a href="pages-500.php" key="t-error-500">Error 500</a></li>
                    </ul>
                </li>

                <li class="menu-title" key="t-components">Components</li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-tone"></i>
                        <span key="t-ui-elements">UI Elements</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="ui-alerts.php" key="t-alerts">Alerts</a></li>
                        <li><a href="ui-buttons.php" key="t-buttons">Buttons</a></li>
                        <li><a href="ui-cards.php" key="t-cards">Cards</a></li>
                        <li><a href="ui-carousel.php" key="t-carousel">Carousel</a></li>
                        <li><a href="ui-dropdowns.php" key="t-dropdowns">Dropdowns</a></li>
                        <li><a href="ui-grid.php" key="t-grid">Grid</a></li>
                        <li><a href="ui-images.php" key="t-images">Images</a></li>
                        <li><a href="ui-lightbox.php" key="t-lightbox">Lightbox</a></li>
                        <li><a href="ui-modals.php" key="t-modals">Modals</a></li>
                        <li><a href="ui-offcanvas.php" key="t-offcanvas">Offcanvas</a></li>
                        <li><a href="ui-rangeslider.php" key="t-range-slider">Range Slider</a></li>
                        <li><a href="ui-session-timeout.php" key="t-session-timeout">Session Timeout</a></li>
                        <li><a href="ui-progressbars.php" key="t-progress-bars">Progress Bars</a></li>
                        <li><a href="ui-placeholders.php" key="t-placeholders">Placeholders</a></li>
                        <li><a href="ui-sweet-alert.php" key="t-sweet-alert">Sweet-Alert</a></li>
                        <li><a href="ui-tabs-accordions.php" key="t-tabs-accordions">Tabs & Accordions</a></li>
                        <li><a href="ui-typography.php" key="t-typography">Typography</a></li>
                        <li><a href="ui-toasts.php" key="t-toasts">Toasts</a></li>
                        <li><a href="ui-video.php" key="t-video">Video</a></li>
                        <li><a href="ui-general.php" key="t-general">General</a></li>
                        <li><a href="ui-colors.php" key="t-colors">Colors</a></li>
                        <li><a href="ui-rating.php" key="t-rating">Rating</a></li>
                        <li><a href="ui-notifications.php" key="t-notifications">Notifications</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="waves-effect">
                        <i class="bx bxs-eraser"></i>
                        <span class="badge rounded-pill bg-danger float-end">10</span>
                        <span key="t-forms">Forms</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="form-elements.php" key="t-form-elements">Form Elements</a></li>
                        <li><a href="form-layouts.php" key="t-form-layouts">Form Layouts</a></li>
                        <li><a href="form-validation.php" key="t-form-validation">Form Validation</a></li>
                        <li><a href="form-advanced.php" key="t-form-advanced">Form Advanced</a></li>
                        <li><a href="form-editors.php" key="t-form-editors">Form Editors</a></li>
                        <li><a href="form-uploads.php" key="t-form-upload">Form File Upload</a></li>
                        <li><a href="form-xeditable.php" key="t-form-xeditable">Form Xeditable</a></li>
                        <li><a href="form-repeater.php" key="t-form-repeater">Form Repeater</a></li>
                        <li><a href="form-wizard.php" key="t-form-wizard">Form Wizard</a></li>
                        <li><a href="form-mask.php" key="t-form-mask">Form Mask</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-list-ul"></i>
                        <span key="t-tables">Tables</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="tables-basic.php" key="t-basic-tables">Basic Tables</a></li>
                        <li><a href="tables-datatable.php" key="t-data-tables">Data Tables</a></li>
                        <li><a href="tables-responsive.php" key="t-responsive-table">Responsive Table</a></li>
                        <li><a href="tables-editable.php" key="t-editable-table">Editable Table</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bxs-bar-chart-alt-2"></i>
                        <span key="t-charts">Charts</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="charts-apex.php" key="t-apex-charts">Apex Charts</a></li>
                        <li><a href="charts-echart.php" key="t-e-charts">E Charts</a></li>
                        <li><a href="charts-chartjs.php" key="t-chartjs-charts">Chartjs Charts</a></li>
                        <li><a href="charts-flot.php" key="t-flot-charts">Flot Charts</a></li>
                        <li><a href="charts-tui.php" key="t-ui-charts">Toast UI Charts</a></li>
                        <li><a href="charts-knob.php" key="t-knob-charts">Jquery Knob Charts</a></li>
                        <li><a href="charts-sparkline.php" key="t-sparkline-charts">Sparkline Charts</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-aperture"></i>
                        <span key="t-icons">Icons</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="icons-boxicons.php" key="t-boxicons">Boxicons</a></li>
                        <li><a href="icons-materialdesign.php" key="t-material-design">Material Design</a></li>
                        <li><a href="icons-dripicons.php" key="t-dripicons">Dripicons</a></li>
                        <li><a href="icons-fontawesome.php" key="t-font-awesome">Font Awesome</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-map"></i>
                        <span key="t-maps">Maps</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="maps-google.php" key="t-g-maps">Google Maps</a></li>
                        <li><a href="maps-vector.php" key="t-v-maps">Vector Maps</a></li>
                        <li><a href="maps-leaflet.php" key="t-l-maps">Leaflet Maps</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-share-alt"></i>
                        <span key="t-multi-level">Multi Level</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="true">
                        <li><a href="javascript: void(0);" key="t-level-1-1">Level 1.1</a></li>
                        <li>
                            <a href="javascript: void(0);" class="has-arrow" key="t-level-1-2">Level 1.2</a>
                            <ul class="sub-menu" aria-expanded="true">
                                <li><a href="javascript: void(0);" key="t-level-2-1">Level 2.1</a></li>
                                <li><a href="javascript: void(0);" key="t-level-2-2">Level 2.2</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>

            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
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
            <h4 class="mb-sm-0 font-size-18">Modals</h4>

            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">UI Elements</a></li>
                    <li class="breadcrumb-item active">Modals</li>
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
        
                                        <h4 class="card-title">Modals Examples</h4>
                                        <p class="card-title-desc">Modals are streamlined, but flexible
                                            dialog prompts powered by JavaScript. They support a number of use cases
                                            from user notification to completely custom content and feature a
                                            handful of helpful subcomponents, sizes, and more.</p>

                                        <div class="modal bs-example-modal" tabindex="-1" role="dialog">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">Modal title</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <p>One fine body&hellip;</p>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-primary">Save changes</button>
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                    </div>
                                                </div><!-- /.modal-content -->
                                            </div><!-- /.modal-dialog -->
                                        </div><!-- /.modal -->

                                    </div>
                                </div>
                            </div>
                        </div><!-- end row -->

                        <div class="row">
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title">Default Modal</h4>
                                        <p class="card-title-desc">Toggle a working modal demo by clicking the button below. It will slide down and fade in from the top of the page.</p>

                                        <div>
                                            <button type="button" class="btn btn-primary waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#myModal">Standard modal</button>

                                            <!-- sample modal content -->
                                            <div id="myModal" class="modal fade" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="myModalLabel">Default Modal Heading</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <h5>Overflowing text to show scroll behavior</h5>
                                                            <p>Cras mattis consectetur purus sit amet fermentum.
                                                                Cras justo odio, dapibus ac facilisis in,
                                                                egestas eget quam. Morbi leo risus, porta ac
                                                                consectetur ac, vestibulum at eros.</p>
                                                            <p>Praesent commodo cursus magna, vel scelerisque
                                                                nisl consectetur et. Vivamus sagittis lacus vel
                                                                augue laoreet rutrum faucibus dolor auctor.</p>
                                                            <p>Aenean lacinia bibendum nulla sed consectetur.
                                                                Praesent commodo cursus magna, vel scelerisque
                                                                nisl consectetur et. Donec sed odio dui. Donec
                                                                ullamcorper nulla non metus auctor
                                                                fringilla.</p>
                                                            <p>Cras mattis consectetur purus sit amet fermentum.
                                                                Cras justo odio, dapibus ac facilisis in,
                                                                egestas eget quam. Morbi leo risus, porta ac
                                                                consectetur ac, vestibulum at eros.</p>
                                                            <p>Praesent commodo cursus magna, vel scelerisque
                                                                nisl consectetur et. Vivamus sagittis lacus vel
                                                                augue laoreet rutrum faucibus dolor auctor.</p>
                                                            <p>Aenean lacinia bibendum nulla sed consectetur.
                                                                Praesent commodo cursus magna, vel scelerisque
                                                                nisl consectetur et. Donec sed odio dui. Donec
                                                                ullamcorper nulla non metus auctor
                                                                fringilla.</p>
                                                            <p>Cras mattis consectetur purus sit amet fermentum.
                                                                Cras justo odio, dapibus ac facilisis in,
                                                                egestas eget quam. Morbi leo risus, porta ac
                                                                consectetur ac, vestibulum at eros.</p>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary waves-effect" data-bs-dismiss="modal">Close</button>
                                                            <button type="button" class="btn btn-primary waves-effect waves-light">Save changes</button>
                                                        </div>
                                                    </div><!-- /.modal-content -->
                                                </div><!-- /.modal-dialog -->
                                            </div><!-- /.modal -->
                                        </div> <!-- end preview-->

                                    </div>
                                    <!-- end card body -->
                                </div>
                                <!-- end card -->
                            </div>
                            <!-- end col -->

                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title">Fullscreen Modal</h4>
                                        <p class="card-title-desc">Another override is the option to pop up a modal that covers the user viewport, available via modifier classes that are placed on a <code>.modal-fullscreen</code>.</p>


                                        <div>
                                            <button type="button" class="btn btn-primary waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#exampleModalFullscreen">Fullscreen modal</button>

                                            <!-- sample modal content -->
                                            <div id="exampleModalFullscreen" class="modal fade" tabindex="-1" aria-labelledby="#exampleModalFullscreenLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-fullscreen">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalFullscreenLabel">Fullscreen Modal Heading</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <h5>Overflowing text to show scroll behavior</h5>
                                                            <p>Cras mattis consectetur purus sit amet fermentum.
                                                                Cras justo odio, dapibus ac facilisis in,
                                                                egestas eget quam. Morbi leo risus, porta ac
                                                                consectetur ac, vestibulum at eros.</p>
                                                            <p>Praesent commodo cursus magna, vel scelerisque
                                                                nisl consectetur et. Vivamus sagittis lacus vel
                                                                augue laoreet rutrum faucibus dolor auctor.</p>
                                                            <p>Aenean lacinia bibendum nulla sed consectetur.
                                                                Praesent commodo cursus magna, vel scelerisque
                                                                nisl consectetur et. Donec sed odio dui. Donec
                                                                ullamcorper nulla non metus auctor
                                                                fringilla.</p>
                                                            <p>Cras mattis consectetur purus sit amet fermentum.
                                                                Cras justo odio, dapibus ac facilisis in,
                                                                egestas eget quam. Morbi leo risus, porta ac
                                                                consectetur ac, vestibulum at eros.</p>
                                                            <p>Praesent commodo cursus magna, vel scelerisque
                                                                nisl consectetur et. Vivamus sagittis lacus vel
                                                                augue laoreet rutrum faucibus dolor auctor.</p>
                                                            <p>Aenean lacinia bibendum nulla sed consectetur.
                                                                Praesent commodo cursus magna, vel scelerisque
                                                                nisl consectetur et. Donec sed odio dui. Donec
                                                                ullamcorper nulla non metus auctor
                                                                fringilla.</p>
                                                            <p>Cras mattis consectetur purus sit amet fermentum.
                                                                Cras justo odio, dapibus ac facilisis in,
                                                                egestas eget quam. Morbi leo risus, porta ac
                                                                consectetur ac, vestibulum at eros.</p>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary waves-effect" data-bs-dismiss="modal">Close</button>
                                                            <button type="button" class="btn btn-primary waves-effect waves-light">Save changes</button>
                                                        </div>
                                                    </div><!-- /.modal-content -->
                                                </div><!-- /.modal-dialog -->
                                            </div><!-- /.modal -->
                                        </div> <!-- end preview-->

                                    </div>
                                    <!-- end card body -->
                                </div>
                                <!-- end card -->
                            </div>
                            <!-- end col -->
                        </div>
                        <!-- end row -->

                        <div class="row">
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title">Optional Sizes</h4>
                                        <p class="card-title-desc">Modals have three optional sizes, available via modifier classes to be placed on a <code>.modal-dialog</code>.</p>
                                        
                                        <div class="d-flex flex-wrap gap-2">
                                            <!-- Extra Large modal button -->
                                            <button type="button" class="btn btn-primary waves-effect waves-light" data-bs-toggle="modal" data-bs-target=".bs-example-modal-xl">Extra large modal</button>

                                            <!-- Large modal button -->
                                            <button type="button" class="btn btn-light waves-effect" data-bs-toggle="modal" data-bs-target=".bs-example-modal-lg">Large modal</button>

                                            <!-- Small modal button -->
                                            <button type="button" class="btn btn-success waves-effect waves-light" data-bs-toggle="modal" data-bs-target=".bs-example-modal-sm">Small modal</button>
                                        </div>

                                        <div>
                                            <!--  Extra Large modal example -->
                                            <div class="modal fade bs-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-xl">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="myExtraLargeModalLabel">Extra large modal</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <p>Cras mattis consectetur purus sit amet fermentum.
                                                                Cras justo odio, dapibus ac facilisis in,
                                                                egestas eget quam. Morbi leo risus, porta ac
                                                                consectetur ac, vestibulum at eros.</p>
                                                            <p>Praesent commodo cursus magna, vel scelerisque
                                                                nisl consectetur et. Vivamus sagittis lacus vel
                                                                augue laoreet rutrum faucibus dolor auctor.</p>
                                                            <p class="mb-0">Aenean lacinia bibendum nulla sed consectetur.
                                                                Praesent commodo cursus magna, vel scelerisque
                                                                nisl consectetur et. Donec sed odio dui. Donec
                                                                ullamcorper nulla non metus auctor
                                                                fringilla.</p>
                                                        </div>
                                                    </div><!-- /.modal-content -->
                                                </div><!-- /.modal-dialog -->
                                            </div><!-- /.modal -->
    
                                            <!--  Large modal example -->
                                            <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-lg">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="myLargeModalLabel">Large modal</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <p>Cras mattis consectetur purus sit amet fermentum.
                                                                Cras justo odio, dapibus ac facilisis in,
                                                                egestas eget quam. Morbi leo risus, porta ac
                                                                consectetur ac, vestibulum at eros.</p>
                                                            <p>Praesent commodo cursus magna, vel scelerisque
                                                                nisl consectetur et. Vivamus sagittis lacus vel
                                                                augue laoreet rutrum faucibus dolor auctor.</p>
                                                            <p class="mb-0">Aenean lacinia bibendum nulla sed consectetur.
                                                                Praesent commodo cursus magna, vel scelerisque
                                                                nisl consectetur et. Donec sed odio dui. Donec
                                                                ullamcorper nulla non metus auctor
                                                                fringilla.</p>
                                                        </div>
                                                    </div><!-- /.modal-content -->
                                                </div><!-- /.modal-dialog -->
                                            </div><!-- /.modal -->

                                            <!--  Small modal example -->
                                            <div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-sm">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="mySmallModalLabel">Small modal</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <p>Cras mattis consectetur purus sit amet fermentum.
                                                                Cras justo odio, dapibus ac facilisis in,
                                                                egestas eget quam. Morbi leo risus, porta ac
                                                                consectetur ac, vestibulum at eros.</p>
                                                            <p>Praesent commodo cursus magna, vel scelerisque
                                                                nisl consectetur et. Vivamus sagittis lacus vel
                                                                augue laoreet rutrum faucibus dolor auctor.</p>
                                                            <p class="mb-0">Aenean lacinia bibendum nulla sed consectetur.
                                                                Praesent commodo cursus magna, vel scelerisque
                                                                nisl consectetur et. Donec sed odio dui. Donec
                                                                ullamcorper nulla non metus auctor
                                                                fringilla.</p>
                                                        </div>
                                                    </div><!-- /.modal-content -->
                                                </div><!-- /.modal-dialog -->
                                            </div><!-- /.modal -->

                                        </div>

                                    </div>
                                    <!-- end card body -->
                                </div>
                                <!-- end card -->
                            </div>
                            <!-- end col -->

                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Vertically Centered</h5>
                                        <p class="card-title-desc">Add <code>.modal-dialog-centered</code> to <code>.modal-dialog</code> to vertically center the modal.</p>

                                        <div>
                                            <!-- center modal -->
                                            <button type="button" class="btn btn-primary waves-effect waves-light" data-bs-toggle="modal" data-bs-target=".bs-example-modal-center">Center modal</button>
                                            
                                            <div class="modal fade bs-example-modal-center" tabindex="-1" role="dialog" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title">Center modal</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <p>Cras mattis consectetur purus sit amet fermentum.
                                                                Cras justo odio, dapibus ac facilisis in,
                                                                egestas eget quam. Morbi leo risus, porta ac
                                                                consectetur ac, vestibulum at eros.</p>
                                                            <p>Praesent commodo cursus magna, vel scelerisque
                                                                nisl consectetur et. Vivamus sagittis lacus vel
                                                                augue laoreet rutrum faucibus dolor auctor.</p>
                                                            <p class="mb-0">Aenean lacinia bibendum nulla sed consectetur.
                                                                Praesent commodo cursus magna, vel scelerisque
                                                                nisl consectetur et. Donec sed odio dui. Donec
                                                                ullamcorper nulla non metus auctor
                                                                fringilla.</p>
                                                        </div>
                                                    </div><!-- /.modal-content -->
                                                </div><!-- /.modal-dialog -->
                                            </div><!-- /.modal -->
                                            
                                        </div>

                                    </div>
                                    <!-- end card body -->
                                </div>
                                <!-- end card -->
                            </div>
                            <!-- end col -->
                        </div>
                        <!-- end row -->

                        <div class="row">
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Scrollable Modal</h5>
                                        <p class="card-title-desc">You can also create a scrollable modal that allows scroll the modal body by adding <code>.modal-dialog-scrollable</code> to <code>.modal-dialog</code>.</p>
                                        
                                        <!-- Scrollable modal button -->
                                        <button type="button" class="btn btn-primary waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#exampleModalScrollable">Scrollable modal</button>

                                        <!-- Scrollable modal -->
                                        <div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-scrollable">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalScrollableTitle">Scrollable Modal</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                                                        <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                                                        <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                                                        <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                                                        <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                                                        <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                                                        <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                                                        <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                                                        <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                                                        <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                                                        <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                                                        <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                                                        <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                                                        <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                                                        <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                                                        <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                                                        <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                                                        <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                                                        <button type="button" class="btn btn-primary">Save changes</button>
                                                        </div>
                                                </div><!-- /.modal-content -->
                                            </div><!-- /.modal-dialog -->
                                        </div><!-- /.modal -->

                                    </div>
                                    <!-- end card body -->
                                </div>
                                <!-- end card -->
                            </div>
                            <!-- end col -->

                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Static Backdrop</h5>
                                        <p class="card-title-desc">When backdrop is set to static, the modal will not close when clicking outside it. Click the button below to try it.</p>
                                        <div>
                                            
                                            <!-- Static Backdrop modal Button -->
                                            <button type="button" class="btn btn-primary waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                                Static backdrop modal
                                            </button>
                                            
                                            
                                            <!-- Static Backdrop Modal -->
                                            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <p>I will not close if you click outside me. Don't even try to press escape key.</p>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                                                            <button type="button" class="btn btn-primary">Understood</button>
                                                        </div>
                                                    </div>
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

                        <div class="row">
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title">Toggle Between Modals</h4>
                                        <p class="card-title-desc">Toggle between multiple modals with some clever placement of the <code>data-bs-target</code> and <code>data-bs-toggle</code> attributes.</p>
                                        
                                        <div>
                                            <button type="button" class="btn btn-primary waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#firstmodal">Open First Modal</button>

                                            
                                            <!-- First modal dialog -->
                                            <div class="modal fade" id="firstmodal" aria-hidden="true" aria-labelledby="..." tabindex="-1">
                                                <div class="modal-dialog modal-dialog-centered">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title">Modal 1</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <p>Show a second modal and hide this one with the button below.</p>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <!-- Toogle to second dialog -->
                                                            <button class="btn btn-primary" data-bs-target="#secondmodal" data-bs-toggle="modal" data-bs-dismiss="modal">Open Second Modal</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Second modal dialog -->
                                            <div class="modal fade" id="secondmodal" aria-hidden="true" aria-labelledby="..." tabindex="-1">
                                                <div class="modal-dialog modal-dialog-centered">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title">Modal 2</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <p>Hide this modal and show the first with the button below.</p>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <!-- Toogle to first dialog, `data-bs-dismiss` attribute can be omitted - clicking on link will close dialog anyway -->
                                                            <button class="btn btn-primary" data-bs-target="#firstmodal" data-bs-toggle="modal" data-bs-dismiss="modal">Back to First</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> <!-- end preview-->

                                    </div>
                                    <!-- end card body -->
                                </div>
                                <!-- end card -->
                            </div>
                            <!-- end col -->

                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title">Varying Modal Content</h4>
                                        <p class="card-title-desc">Modal of buttons that all trigger the same modal with slightly different contents. Use <code>event.relatedTarget</code> and HTML <code>data-bs-target</code> attributes to vary the contents of the modal depending on which button was clicked.</p>
                                        
                                        <div>
                                            <div class="d-flex flex-wrap gap-3">
                                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"
                                                    data-bs-whatever="@mdo">Open modal for @mdo</button>
                                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"
                                                    data-bs-whatever="@fat">Open modal for @fat</button>
                                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"
                                                    data-bs-whatever="@getbootstrap">Open modal for @getbootstrap</button>
                                            </div>
                                        
                                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">New message</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form>
                                                                <div class="mb-3">
                                                                    <label for="recipient-name" class="col-form-label">Recipient:</label>
                                                                    <input type="text" class="form-control" id="recipient-name">
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label for="message-text" class="col-form-label">Message:</label>
                                                                    <textarea class="form-control" id="message-text"></textarea>
                                                                </div>
                                                            </form>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                            <button type="button" class="btn btn-primary">Send message</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> <!-- end preview-->

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


        <footer class="footer">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6">
                <script>document.write(new Date().getFullYear())</script> © Skote.
            </div>
            <div class="col-sm-6">
                <div class="text-sm-end d-none d-sm-block">
                    Design & Develop by Themesbrand
                </div>
            </div>
        </div>
    </div>
</footer>    </div>
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
<!-- App js -->
<script src="assets/js/app.js"></script>

</body>

</html>