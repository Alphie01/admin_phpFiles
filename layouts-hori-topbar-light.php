<!doctype html>
<html lang="tr">

<head>

    <meta charset="utf-8" />
<title>Horizontal Topbar Light |Admin Panel</title>
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

<body data-topbar="light" data-layout="horizontal">

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

            <button type="button" class="btn btn-sm px-3 font-size-16 d-lg-none header-item waves-effect waves-light" data-bs-toggle="collapse" data-bs-target="#topnav-menu-content">
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
                                            <a href="javascript:void(0);" key="t-calendar">Calendars</a>
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
                <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-search-dropdown"
                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="mdi mdi-magnify"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                    aria-labelledby="page-header-search-dropdown">
        
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
                <button type="button" class="btn header-item waves-effect"
                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img src="assets/images/flags/us.jpg" alt="Header Language" height="16">                </button>
                <div class="dropdown-menu dropdown-menu-end">

                    <!-- item-->
                                            <a href="http://localhost:8080/lang/en" class="dropdown-item notify-item language" data-lang="en">
                            <img src="assets/images/flags/us.jpg" alt="user-image" class="me-1" height="12"> <span class="align-middle">English</span>
                        </a>
                                        <!-- item-->
                                            <a href="http://localhost:8080/lang/es" class="dropdown-item notify-item language" data-lang="sp">
                            <img src="assets/images/flags/spain.jpg" alt="user-image" class="me-1" height="12"> <span class="align-middle">Spanish</span>
                        </a>
                    
                    <!-- item-->
                                            <a href="http://localhost:8080/lang/de" class="dropdown-item notify-item language" data-lang="gr">
                            <img src="assets/images/flags/germany.jpg" alt="user-image" class="me-1" height="12"> <span class="align-middle">German</span>
                        </a>
                    
                    <!-- item-->
                                            <a href="http://localhost:8080/lang/it" class="dropdown-item notify-item language" data-lang="it">
                            <img src="assets/images/flags/italy.jpg" alt="user-image" class="me-1" height="12"> <span class="align-middle">Italian</span>
                        </a>
                    
                    <!-- item-->
                                            <a href="http://localhost:8080/lang/ru" class="dropdown-item notify-item language" data-lang="ru">
                            <img src="assets/images/flags/russia.jpg" alt="user-image" class="me-1" height="12"> <span class="align-middle">Russian</span>
                        </a>
                                    </div>
            </div>

            <div class="dropdown d-none d-lg-inline-block ms-1">
                <button type="button" class="btn header-item noti-icon waves-effect"
                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
                <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-notifications-dropdown"
                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="bx bx-bell bx-tada"></i>
                    <span class="badge bg-danger rounded-pill">3</span>
                </button>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                    aria-labelledby="page-header-notifications-dropdown">
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
                                <img src="assets/images/users/avatar-3.jpg"
                                    class="me-3 rounded-circle avatar-xs" alt="user-pic">
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
                                <img src="assets/images/users/avatar-4.jpg"
                                    class="me-3 rounded-circle avatar-xs" alt="user-pic">
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
                <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img class="rounded-circle header-profile-user" src="assets/images/users/avatar-1.jpg"
                        alt="Header Avatar">
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
    
<div class="topnav">
    <div class="container-fluid">
        <nav class="navbar navbar-light navbar-expand-lg topnav-menu">

            <div class="collapse navbar-collapse" id="topnav-menu-content">
                <ul class="navbar-nav">

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-dashboard" role="button"
                        >
                            <i class="bx bx-home-circle me-2"></i><span key="t-dashboards">Dashboards</span> <div class="arrow-down"></div>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="topnav-dashboard">

                            <a href="index.php" class="dropdown-item" key="t-default">Default</a>
                            <a href="dashboard-saas.php" class="dropdown-item" key="t-saas">Saas</a>
                            <a href="dashboard-crypto.php" class="dropdown-item" key="t-crypto">Crypto</a>
                            <a href="dashboard-blog.php" class="dropdown-item" key="t-blog">Blog</a>
                        </div>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-uielement" role="button"
                        >
                            <i class="bx bx-tone me-2"></i>
                            <span key="t-ui-elements"> UI Elements</span> 
                            <div class="arrow-down"></div>
                        </a>

                        <div class="dropdown-menu mega-dropdown-menu px-2 dropdown-mega-menu-xl"
                            aria-labelledby="topnav-uielement">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div>
                                        <a href="ui-alerts.php" class="dropdown-item" key="t-alerts">Alerts</a>
                                        <a href="ui-buttons.php" class="dropdown-item" key="t-buttons">Buttons</a>
                                        <a href="ui-cards.php" class="dropdown-item" key="t-cards">Cards</a>
                                        <a href="ui-carousel.php" class="dropdown-item" key="t-carousel">Carousel</a>
                                        <a href="ui-dropdowns.php" class="dropdown-item" key="t-dropdowns">Dropdowns</a>
                                        <a href="ui-grid.php" class="dropdown-item" key="t-grid">Grid</a>
                                        <a href="ui-images.php" class="dropdown-item" key="t-images">Images</a>
                                        <a href="ui-lightbox.php" class="dropdown-item" key="t-lightbox">Lightbox</a>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div>
                                        <a href="ui-modals.php" class="dropdown-item" key="t-modals">Modals</a>
                                        <a href="ui-offcanvas.php" class="dropdown-item" key="t-offcanvas">Offcanvas</a>
                                        <a href="ui-rangeslider.php" class="dropdown-item" key="t-range-slider">Range Slider</a>
                                        <a href="ui-session-timeout.php" class="dropdown-item" key="t-session-timeout">Session Timeout</a>
                                        <a href="ui-progressbars.php" class="dropdown-item" key="t-progress-bars">Progress Bars</a>
                                        <a href="ui-placeholders.php" class="dropdown-item" key="t-Placeholders">Placeholders</a>
                                        <a href="ui-sweet-alert.php" class="dropdown-item" key="t-sweet-alert">Sweet-Alert</a>
                                        <a href="ui-tabs-accordions.php" class="dropdown-item" key="t-tabs-accordions">Tabs & Accordions</a>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div>
                                        <a href="ui-typography.php" class="dropdown-item" key="t-typography">Typography</a>
                                        <a href="ui-toasts.php" class="dropdown-item" key="t-toasts">Toasts</a>
                                        <a href="ui-video.php" class="dropdown-item" key="t-video">Video</a>
                                        <a href="ui-general.php" class="dropdown-item" key="t-general">General</a>
                                        <a href="ui-colors.php" class="dropdown-item" key="t-colors">Colors</a>
                                        <a href="ui-rating.php" class="dropdown-item" key="t-rating">Rating</a>
                                        <a href="ui-notifications.php" class="dropdown-item" key="t-notifications">Notifications</a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-pages" role="button"
                        >
                            <i class="bx bx-customize me-2"></i><span key="t-apps">Apps</span> <div class="arrow-down"></div>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="topnav-pages">

                            <div class="dropdown">
                                <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-email"
                                    role="button">
                                    <span key="t-calendar">Calendars</span> <div class="arrow-down"></div>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="topnav-email">
                                    <a href="calendar.php" class="dropdown-item" key="t-tui-calendar">TUI Calendar</a>
                                    <a href="calendar-full.php" class="dropdown-item" key="t-full-calender">Full Calendar</a>
                                </div>
                            </div>

                            <a href="chat.php" class="dropdown-item" key="t-chat">Chat</a>
                            <a href="apps-filemanager.php" class="dropdown-item" key="t-file-manager">File Manager</a>
                            <div class="dropdown">
                                <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-email"
                                    role="button">
                                    <span key="t-email">Email</span> <div class="arrow-down"></div>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="topnav-email">
                                    <a href="email-inbox.php" class="dropdown-item" key="t-inbox">Inbox</a>
                                    <a href="email-read.php" class="dropdown-item" key="t-read-email">Read Email</a>

                                    <div class="dropdown">
                                        <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-blog"
                                            role="button">
                                            <span key="t-email-templates">Templates</span> <div class="arrow-down"></div>
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="topnav-blog">
                                            <a href="email-template-basic.php" class="dropdown-item" key="t-basic-action">Basic Action</a>
                                            <a href="email-template-alert.php" class="dropdown-item" key="t-alert-email">Alert Email</a>
                                            <a href="email-template-billing.php" class="dropdown-item" key="t-bill-email">Billing Email</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="dropdown">
                                <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-ecommerce"
                                    role="button">
                                    <span key="t-ecommerce">Ecommerce</span> <div class="arrow-down"></div>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="topnav-ecommerce">
                                    <a href="ecommerce-products.php" class="dropdown-item" key="t-products">Products </a>
                                    <a href="ecommerce-product-detail.php" class="dropdown-item" key="t-product-detail">Product Detail</a>
                                    <a href="ecommerce-orders.php" class="dropdown-item" key="t-orders">Orders</a>
                                    <a href="ecommerce-customers.php" class="dropdown-item" key="t-customers">Customers</a>
                                    <a href="ecommerce-cart.php" class="dropdown-item" key="t-cart">Cart</a>
                                    <a href="ecommerce-checkout.php" class="dropdown-item" key="t-checkout">Checkout</a>
                                    <a href="ecommerce-shops.php" class="dropdown-item" key="t-shops">Shops</a>
                                    <a href="ecommerce-add-product.php" class="dropdown-item" key="t-add-product">Add Product</a>
                                </div>
                            </div>

                            <div class="dropdown">
                                <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-crypto"
                                    role="button">
                                    <span key="t-crypto">Crypto</span> <div class="arrow-down"></div>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="topnav-crypto">
                                    <a href="crypto-wallet.php" class="dropdown-item" key="t-wallet">Wallet</a>
                                    <a href="crypto-buy-sell.php" class="dropdown-item" key="t-buy">Buy/Sell</a>
                                    <a href="crypto-exchange.php" class="dropdown-item" key="t-exchange">Exchange</a>
                                    <a href="crypto-lending.php" class="dropdown-item" key="t-lending">Lending</a>
                                    <a href="crypto-orders.php" class="dropdown-item" key="t-orders">Orders</a>
                                    <a href="crypto-kyc-application.php" class="dropdown-item" key="t-kyc">KYC Application</a>
                                    <a href="crypto-ico-landing.php" class="dropdown-item" key="t-ico">ICO Landing</a>
                                </div>
                            </div>
                            
                            <div class="dropdown">
                                <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-project"
                                    role="button">
                                    <span key="t-projects">Projects</span> <div class="arrow-down"></div>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="topnav-project">
                                    <a href="projects-grid.php" class="dropdown-item" key="t-p-grid">Projects Grid</a>
                                    <a href="projects-list.php" class="dropdown-item" key="t-p-list">Projects List</a>
                                    <a href="projects-overview.php" class="dropdown-item" key="t-p-overview">Project Overview</a>
                                    <a href="projects-create.php" class="dropdown-item" key="t-create-new">Create New</a>
                                </div>
                            </div>
                            <div class="dropdown">
                                <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-task"
                                    role="button">
                                    <span key="t-tasks">Tasks</span> <div class="arrow-down"></div>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="topnav-task">
                                    <a href="tasks-list.php" class="dropdown-item" key="t-task-list">Task List</a>
                                    <a href="tasks-kanban.php" class="dropdown-item" key="t-kanban-board">Kanban Board</a>
                                    <a href="tasks-create.php" class="dropdown-item" key="t-create-task">Create Task</a>
                                </div>
                            </div>
                            <div class="dropdown">
                                <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-contact"
                                    role="button">
                                    <span key="t-contacts">Contacts</span> <div class="arrow-down"></div>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="topnav-contact">
                                    <a href="contacts-grid.php" class="dropdown-item" key="t-user-grid">User Grid</a>
                                    <a href="contacts-list.php" class="dropdown-item" key="t-user-list">User List</a>
                                    <a href="contacts-profile.php" class="dropdown-item" key="t-profile">Profile</a>
                                </div>
                            </div>

                            <div class="dropdown">
                                <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-blog"
                                    role="button">
                                    <span key="t-blog">Blog</span> <div class="arrow-down"></div>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="topnav-blog">
                                    <a href="blog-list.php" class="dropdown-item" key="t-blog-list">Blog List</a>
                                    <a href="blog-grid.php" class="dropdown-item" key="t-blog-grid">Blog Grid</a>
                                    <a href="blog-details.php" class="dropdown-item" key="t-blog-details">Blog Details</a>
                                </div>
                            </div>
                        </div>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-components" role="button"
                        >
                            <i class="bx bx-collection me-2"></i><span key="t-components">Components</span> <div class="arrow-down"></div>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="topnav-components">
                            <div class="dropdown">
                                <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-form"
                                    role="button">
                                    <span key="t-forms">Forms</span> <div class="arrow-down"></div>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="topnav-form">
                                    <a href="form-elements.php" class="dropdown-item" key="t-form-elements">Form Elements</a>
                                    <a href="form-layouts.php" class="dropdown-item" key="t-form-layouts">Form Layouts</a>
                                    <a href="form-validation.php" class="dropdown-item" key="t-form-validation">Form Validation</a>
                                    <a href="form-advanced.php" class="dropdown-item" key="t-form-advanced">Form Advanced</a>
                                    <a href="form-editors.php" class="dropdown-item" key="t-form-editors">Form Editors</a>
                                    <a href="form-uploads.php" class="dropdown-item" key="t-form-upload">Form File Upload</a>
                                    <a href="form-xeditable.php" class="dropdown-item" key="t-form-xeditable">Form Xeditable</a>
                                    <a href="form-repeater.php" class="dropdown-item" key="t-form-repeater">Form Repeater</a>
                                    <a href="form-wizard.php" class="dropdown-item" key="t-form-wizard">Form Wizard</a>
                                    <a href="form-mask.php" class="dropdown-item" key="t-form-mask">Form Mask</a>
                                </div>
                            </div>
                            <div class="dropdown">
                                <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-table"
                                    role="button">
                                    <span key="t-tables">Tables</span> <div class="arrow-down"></div>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="topnav-table">
                                    <a href="tables-basic.php" class="dropdown-item" key="t-basic-tables">Basic Tables</a>
                                    <a href="tables-datatable.php" class="dropdown-item" key="t-data-tables">Data Tables</a>
                                    <a href="tables-responsive.php" class="dropdown-item" key="t-responsive-table">Responsive Table</a>
                                    <a href="tables-editable.php" class="dropdown-item" key="t-editable-table">Editable Table</a>
                                </div>
                            </div>
                            <div class="dropdown">
                                <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-charts"
                                    role="button">
                                    <span key="t-charts">Charts</span> <div class="arrow-down"></div>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="topnav-charts">
                                    <a href="charts-apex.php" class="dropdown-item" key="t-apex-charts">Apex Charts</a>
                                    <a href="charts-echart.php" class="dropdown-item" key="t-e-charts">E Charts</a>
                                    <a href="charts-chartjs.php" class="dropdown-item" key="t-chartjs-charts">Chartjs Chart</a>
                                    <a href="charts-flot.php" class="dropdown-item" key="t-flot-charts">Flot Chart</a>
                                    <a href="charts-tui.php" class="dropdown-item" key="t-ui-charts">Toast UI Chart</a>
                                    <a href="charts-knob.php" class="dropdown-item" key="t-knob-charts">Jquery Knob Chart</a>
                                    <a href="charts-sparkline.php" class="dropdown-item" key="t-sparkline-charts">Sparkline Chart</a>
                                </div>
                            </div>
                            <div class="dropdown">
                                <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-icons"
                                    role="button">
                                    <span key="t-icons">Icons</span> <div class="arrow-down"></div>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="topnav-icons">
                                    <a href="icons-boxicons.php" class="dropdown-item" key="t-boxicons">Boxicons</a>
                                    <a href="icons-materialdesign.php" class="dropdown-item" key="t-material-design">Material Design</a>
                                    <a href="icons-dripicons.php" class="dropdown-item" key="t-dripicons">Dripicons</a>
                                    <a href="icons-fontawesome.php" class="dropdown-item" key="t-font-awesome">Font Awesome</a>
                                </div>
                            </div>
                            <div class="dropdown">
                                <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-map"
                                    role="button">
                                    <span key="t-maps">Maps</span> <div class="arrow-down"></div>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="topnav-map">
                                    <a href="maps-google.php" class="dropdown-item" key="t-g-maps">Google Maps</a>
                                    <a href="maps-vector.php" class="dropdown-item" key="t-v-maps">Vector Maps</a>
                                    <a href="maps-leaflet.php" class="dropdown-item" key="t-l-maps">Leaflet Maps</a>
                                </div>
                            </div>
                        </div>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-more" role="button"
                        >
                            <i class="bx bx-file me-2"></i><span key="t-extra-pages">Extra Pages</span> <div class="arrow-down"></div>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="topnav-more">
                            <div class="dropdown">
                                <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-invoice"
                                    role="button">
                                    <span key="t-invoices">Invoices</span> <div class="arrow-down"></div>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="topnav-invoice">
                                    <a href="invoices-list.php" class="dropdown-item" key="t-invoice-list">Invoice List</a>
                                    <a href="invoices-detail.php" class="dropdown-item" key="t-invoice-detail">Invoice Detail</a>
                                </div>
                            </div>
                            <div class="dropdown">
                                <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-auth"
                                    role="button">
                                    <span key="t-authentication">Authentication</span> <div class="arrow-down"></div>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="topnav-auth">
                                    <a href="auth-login.php" class="dropdown-item" key="t-login">Login</a>
                                    <a href="auth-login-2.php" class="dropdown-item" key="t-login-2">Login 2</a>
                                    <a href="auth-register.php" class="dropdown-item" key="t-register">Register</a>
                                    <a href="auth-register-2.php" class="dropdown-item" key="t-register-2">Register 2</a>
                                    <a href="auth-recoverpw.php" class="dropdown-item" key="t-recover-password">Recover Password</a>
                                    <a href="auth-recoverpw-2.php" class="dropdown-item" key="t-recover-password-2">Recover Password 2</a>
                                    <a href="auth-lock-screen.php" class="dropdown-item" key="t-lock-screen">Lock Screen</a>
                                    <a href="auth-lock-screen-2.php" class="dropdown-item" key="t-lock-screen-2">Lock Screen 2</a>
                                    <a href="auth-confirm-mail.php" class="dropdown-item" key="t-confirm-mail">Confirm Mail</a>
                                    <a href="auth-confirm-mail-2.php" class="dropdown-item" key="t-confirm-mail-2">Confirm Mail 2</a>
                                    <a href="auth-email-verification.php" class="dropdown-item" key="t-email-verification">Email Verification</a>
                                    <a href="auth-email-verification-2.php" class="dropdown-item" key="t-email-verification-2">Email Verification 2</a>
                                    <a href="auth-two-step-verification.php" class="dropdown-item" key="t-two-step-verification">Two Step Verification</a>
                                    <a href="auth-two-step-verification-2.php" class="dropdown-item" key="t-two-step-verification-2">Two Step Verification 2</a>
                                </div>
                            </div>
                            <div class="dropdown">
                                <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-utility"
                                    role="button">
                                    <span key="t-utility">Utility</span> <div class="arrow-down"></div>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="topnav-utility">
                                    <a href="pages-starter.php" class="dropdown-item" key="t-starter-page">Starter Page</a>
                                    <a href="pages-maintenance.php" class="dropdown-item" key="t-maintenance">Maintenance</a>
                                    <a href="pages-comingsoon.php" class="dropdown-item" key="t-coming-soon">Coming Soon</a>
                                    <a href="pages-timeline.php" class="dropdown-item" key="t-timeline">Timeline</a>
                                    <a href="pages-faqs.php" class="dropdown-item" key="t-faqs">FAQs</a>
                                    <a href="pages-pricing.php" class="dropdown-item" key="t-pricing">Pricing</a>
                                    <a href="pages-404.php" class="dropdown-item" key="t-error-404">Error 404</a>
                                    <a href="pages-500.php" class="dropdown-item" key="t-error-500">Error 500</a>
                                    <a href="layouts-light-sidebar.php" class="dropdown-item" key="t-light-sidebar">Light Sidebar</a>
                                </div>
                            </div>
                        </div>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-layout" role="button"
                        >
                            <i class="bx bx-layout me-2"></i><span key="t-layouts">Layouts</span> <div class="arrow-down"></div>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="topnav-layout">
                            <div class="dropdown">
                                <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-layout-verti"
                                    role="button">
                                    <span key="t-vertical">Vertical</span> <div class="arrow-down"></div>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="topnav-layout-verti">
                                    <a href="layouts-compact-sidebar.php" class="dropdown-item" key="t-compact-sidebar">Compact Sidebar</a>
                                    <a href="layouts-icon-sidebar.php" class="dropdown-item" key="t-icon-sidebar">Icon Sidebar</a>
                                    <a href="layouts-boxed.php" class="dropdown-item" key="t-boxed-width">Boxed Width</a>
                                    <a href="layouts-preloader.php" class="dropdown-item" key="t-preloader">Preloader</a>
                                    <a href="layouts-colored-sidebar.php" class="dropdown-item" key="t-colored-sidebar">Colored Sidebar</a>
                                    <a href="layouts-scrollable.php" class="dropdown-item" key="t-scrollable">Scrollable</a>
                                </div>
                            </div>

                            <div class="dropdown">
                                <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-layout-hori"
                                    role="button">
                                    <span key="t-horizontal">Horizontal</span> <div class="arrow-down"></div>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="topnav-layout-hori">
                                    <a href="layouts-horizontal.php" class="dropdown-item" key="t-horizontal">Horizontal</a>
                                    <a href="layouts-hori-topbar-light.php" class="dropdown-item" key="t-topbar-light">Topbar Light</a>
                                    <a href="layouts-hori-boxed-width.php" class="dropdown-item" key="t-boxed-width">Boxed Width</a>
                                    <a href="layouts-hori-preloader.php" class="dropdown-item" key="t-preloader">Preloader</a>
                                    <a href="layouts-hori-colored-header.php" class="dropdown-item" key="t-colored-topbar">Colored Header</a>
                                    <a href="layouts-hori-scrollable.php" class="dropdown-item" key="t-scrollable">Scrollable</a>
                                </div>
                            </div>
                        </div>
                    </li>

                </ul>
            </div>
        </nav>
    </div>
</div>
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
            <h4 class="mb-sm-0 font-size-18">Horizontal Topbar Light</h4>

            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Layouts</a></li>
                    <li class="breadcrumb-item active">Horizontal Topbar Light</li>
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
                                                <p>Skote Dashboard</p>
                                            </div>
                                        </div>
                                        <div class="col-5 align-self-end">
                                            <img src="assets/images/profile-img.png" alt="" class="img-fluid">
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body pt-0">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="avatar-md profile-user-wid mb-4">
                                                <img src="assets/images/users/avatar-1.jpg" alt="" class="img-thumbnail rounded-circle">
                                            </div>
                                            <h5 class="font-size-15 text-truncate">Henry Price</h5>
                                            <p class="text-muted mb-0 text-truncate">UI/UX Designer</p>
                                        </div>

                                        <div class="col-sm-8">
                                            <div class="pt-4">

                                                <div class="row">
                                                    <div class="col-6">
                                                        <h5 class="font-size-15">125</h5>
                                                        <p class="text-muted mb-0">Projects</p>
                                                    </div>
                                                    <div class="col-6">
                                                        <h5 class="font-size-15">$1245</h5>
                                                        <p class="text-muted mb-0">Revenue</p>
                                                    </div>
                                                </div>
                                                <div class="mt-4">
                                                    <a href="" class="btn btn-primary waves-effect waves-light btn-sm">View Profile <i class="mdi mdi-arrow-right ms-1"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title mb-4">Monthly Earning</h4>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <p class="text-muted">This month</p>
                                            <h3>$34,252</h3>
                                            <p class="text-muted"><span class="text-success me-2"> 12% <i class="mdi mdi-arrow-up"></i> </span> From previous period</p>

                                            <div class="mt-4">
                                                <a href="" class="btn btn-primary waves-effect waves-light btn-sm">View More <i class="mdi mdi-arrow-right ms-1"></i></a>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="mt-4 mt-sm-0">
                                                <div id="radialBar-chart" class="apex-charts"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="text-muted mb-0">We craft digital, graphic and dimensional thinking.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-8">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="card mini-stats-wid">
                                        <div class="card-body">
                                            <div class="d-flex">
                                                <div class="flex-grow-1">
                                                    <p class="text-muted fw-medium">Orders</p>
                                                    <h4 class="mb-0">1,235</h4>
                                                </div>

                                                <div class="mini-stat-icon avatar-sm rounded-circle bg-primary align-self-center">
                                                    <span class="avatar-title">
                                                        <i class="bx bx-copy-alt font-size-24"></i>
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
                                                    <p class="text-muted fw-medium">Revenue</p>
                                                    <h4 class="mb-0">$35, 723</h4>
                                                </div>

                                                <div class="avatar-sm rounded-circle bg-primary align-self-center mini-stat-icon">
                                                    <span class="avatar-title rounded-circle bg-primary">
                                                        <i class="bx bx-archive-in font-size-24"></i>
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
                                                    <p class="text-muted fw-medium">Average Price</p>
                                                    <h4 class="mb-0">$16.2</h4>
                                                </div>

                                                <div class="avatar-sm rounded-circle bg-primary align-self-center mini-stat-icon">
                                                    <span class="avatar-title rounded-circle bg-primary">
                                                        <i class="bx bx-purchase-tag-alt font-size-24"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end row -->

                            <div class="card">
                                <div class="card-body">
                                    <div class="d-sm-flex flex-wrap">
                                        <h4 class="card-title mb-4">Email Sent</h4>
                                        <div class="ms-auto">
                                            <ul class="nav nav-pills">
                                                <li class="nav-item">
                                                    <a class="nav-link" href="#">Week</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="#">Month</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link active" href="#">Year</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div id="stacked-column-chart" class="apex-charts" dir="ltr"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end row -->

                    <div class="row">
                        <div class="col-xl-4">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title mb-4">Social Source</h4>
                                    <div class="text-center">
                                        <div class="avatar-sm mx-auto mb-4">
                                            <span class="avatar-title rounded-circle bg-primary bg-soft font-size-24">
                                                <i class="mdi mdi-facebook text-primary"></i>
                                            </span>
                                        </div>
                                        <p class="font-16 text-muted mb-2"></p>
                                        <h5><a href="#" class="text-dark">Facebook - <span class="text-muted font-16">125 sales</span> </a></h5>
                                        <p class="text-muted">Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus tincidunt.</p>
                                        <a href="#" class="text-primary font-16">Learn more <i class="mdi mdi-chevron-right"></i></a>
                                    </div>
                                    <div class="row mt-4">
                                        <div class="col-4">
                                            <div class="social-source text-center mt-3">
                                                <div class="avatar-xs mx-auto mb-3">
                                                    <span class="avatar-title rounded-circle bg-primary font-size-16">
                                                        <i class="mdi mdi-facebook text-white"></i>
                                                    </span>
                                                </div>
                                                <h5 class="font-size-15">Facebook</h5>
                                                <p class="text-muted mb-0">125 sales</p>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="social-source text-center mt-3">
                                                <div class="avatar-xs mx-auto mb-3">
                                                    <span class="avatar-title rounded-circle bg-info font-size-16">
                                                        <i class="mdi mdi-twitter text-white"></i>
                                                    </span>
                                                </div>
                                                <h5 class="font-size-15">Twitter</h5>
                                                <p class="text-muted mb-0">112 sales</p>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="social-source text-center mt-3">
                                                <div class="avatar-xs mx-auto mb-3">
                                                    <span class="avatar-title rounded-circle bg-pink font-size-16">
                                                        <i class="mdi mdi-instagram text-white"></i>
                                                    </span>
                                                </div>
                                                <h5 class="font-size-15">Instagram</h5>
                                                <p class="text-muted mb-0">104 sales</p>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title mb-5">Activity</h4>
                                    <ul class="verti-timeline list-unstyled">
                                        <li class="event-list">
                                            <div class="event-timeline-dot">
                                                <i class="bx bx-right-arrow-circle font-size-18"></i>
                                            </div>
                                            <div class="d-flex">
                                                <div class="flex-shrink-0 me-3">
                                                    <h5 class="font-size-14">22 Nov <i class="bx bx-right-arrow-alt font-size-16 text-primary align-middle ms-2"></i></h5>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <div>
                                                        Responded to need “Volunteer Activities
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="event-list">
                                            <div class="event-timeline-dot">
                                                <i class="bx bx-right-arrow-circle font-size-18"></i>
                                            </div>
                                            <div class="d-flex">
                                                <div class="flex-shrink-0 me-3">
                                                    <h5 class="font-size-14">17 Nov <i class="bx bx-right-arrow-alt font-size-16 text-primary align-middle ms-2"></i></h5>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <div>
                                                        Everyone realizes why a new common language would be desirable... <a href="#">Read more</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="event-list active">
                                            <div class="event-timeline-dot">
                                                <i class="bx bxs-right-arrow-circle font-size-18 bx-fade-right"></i>
                                            </div>
                                            <div class="d-flex">
                                                <div class="flex-shrink-0 me-3">
                                                    <h5 class="font-size-14">15 Nov <i class="bx bx-right-arrow-alt font-size-16 text-primary align-middle ms-2"></i></h5>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <div>
                                                        Joined the group “Boardsmanship Forum”
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="event-list">
                                            <div class="event-timeline-dot">
                                                <i class="bx bx-right-arrow-circle font-size-18"></i>
                                            </div>
                                            <div class="d-flex">
                                                <div class="flex-shrink-0 me-3">
                                                    <h5 class="font-size-14">12 Nov <i class="bx bx-right-arrow-alt font-size-16 text-primary align-middle ms-2"></i></h5>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <div>
                                                        Responded to need “In-Kind Opportunity”
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="text-center mt-4"><a href="" class="btn btn-primary waves-effect waves-light btn-sm">View More <i class="mdi mdi-arrow-right ms-1"></i></a></div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-4">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title mb-4">Top Cities Selling Product</h4>

                                    <div class="text-center">
                                        <div class="mb-4">
                                            <i class="bx bx-map-pin text-primary display-4"></i>
                                        </div>
                                        <h3>1,456</h3>
                                        <p>San Francisco</p>
                                    </div>

                                    <div class="table-responsive mt-4">
                                        <table class="table align-middle table-nowrap">
                                            <tbody>
                                                <tr>
                                                    <td style="width: 30%">
                                                        <p class="mb-0">San Francisco</p>
                                                    </td>
                                                    <td style="width: 25%">
                                                        <h5 class="mb-0">1,456</h5>
                                                    </td>
                                                    <td>
                                                        <div class="progress bg-transparent progress-sm">
                                                            <div class="progress-bar bg-primary rounded" role="progressbar" style="width: 94%" aria-valuenow="94" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <p class="mb-0">Los Angeles</p>
                                                    </td>
                                                    <td>
                                                        <h5 class="mb-0">1,123</h5>
                                                    </td>
                                                    <td>
                                                        <div class="progress bg-transparent progress-sm">
                                                            <div class="progress-bar bg-success rounded" role="progressbar" style="width: 82%" aria-valuenow="82" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <p class="mb-0">San Diego</p>
                                                    </td>
                                                    <td>
                                                        <h5 class="mb-0">1,026</h5>
                                                    </td>
                                                    <td>
                                                        <div class="progress bg-transparent progress-sm">
                                                            <div class="progress-bar bg-warning rounded" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end row -->

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title mb-4">Latest Transaction</h4>
                                    <div class="table-responsive">
                                        <table class="table align-middle table-nowrap mb-0">
                                            <thead class="table-light">
                                                <tr>
                                                    <th style="width: 20px;">
                                                        <div class="form-check font-size-16 align-middle">
                                                            <input class="form-check-input" type="checkbox" id="transactionCheck01">
                                                            <label class="form-check-label" for="transactionCheck01"></label>
                                                        </div>
                                                    </th>
                                                    <th class="align-middle">Order ID</th>
                                                    <th class="align-middle">Billing Name</th>
                                                    <th class="align-middle">Date</th>
                                                    <th class="align-middle">Total</th>
                                                    <th class="align-middle">Payment Status</th>
                                                    <th class="align-middle">Payment Method</th>
                                                    <th class="align-middle">View Details</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <div class="form-check font-size-16">
                                                            <input class="form-check-input" type="checkbox" id="transactionCheck02">
                                                            <label class="form-check-label" for="transactionCheck02"></label>
                                                        </div>
                                                    </td>
                                                    <td><a href="javascript: void(0);" class="text-body fw-bold">#SK2540</a> </td>
                                                    <td>Neal Matthews</td>
                                                    <td>
                                                        07 Oct, 2019
                                                    </td>
                                                    <td>
                                                        $400
                                                    </td>
                                                    <td>
                                                        <span class="badge badge-pill badge-soft-success font-size-11">Paid</span>
                                                    </td>
                                                    <td>
                                                        <i class="fab fa-cc-mastercard me-1"></i> Mastercard
                                                    </td>
                                                    <td>
                                                        <!-- Button trigger modal -->
                                                        <button type="button" class="btn btn-primary btn-sm btn-rounded waves-effect waves-light" data-bs-toggle="modal" data-bs-target=".transaction-detailModal">
                                                            View Details
                                                        </button>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <div class="form-check font-size-16">
                                                            <input class="form-check-input" type="checkbox" id="transactionCheck03">
                                                            <label class="form-check-label" for="transactionCheck03"></label>
                                                        </div>
                                                    </td>
                                                    <td><a href="javascript: void(0);" class="text-body fw-bold">#SK2541</a> </td>
                                                    <td>Jamal Burnett</td>
                                                    <td>
                                                        07 Oct, 2019
                                                    </td>
                                                    <td>
                                                        $380
                                                    </td>
                                                    <td>
                                                        <span class="badge badge-pill badge-soft-danger font-size-11">Chargeback</span>
                                                    </td>
                                                    <td>
                                                        <i class="fab fa-cc-visa me-1"></i> Visa
                                                    </td>
                                                    <td>
                                                        <!-- Button trigger modal -->
                                                        <button type="button" class="btn btn-primary btn-sm btn-rounded waves-effect waves-light" data-bs-toggle="modal" data-bs-target=".transaction-detailModal">
                                                            View Details
                                                        </button>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <div class="form-check font-size-16">
                                                            <input class="form-check-input" type="checkbox" id="transactionCheck04">
                                                            <label class="form-check-label" for="transactionCheck04"></label>
                                                        </div>
                                                    </td>
                                                    <td><a href="javascript: void(0);" class="text-body fw-bold">#SK2542</a> </td>
                                                    <td>Juan Mitchell</td>
                                                    <td>
                                                        06 Oct, 2019
                                                    </td>
                                                    <td>
                                                        $384
                                                    </td>
                                                    <td>
                                                        <span class="badge badge-pill badge-soft-success font-size-11">Paid</span>
                                                    </td>
                                                    <td>
                                                        <i class="fab fa-cc-paypal me-1"></i> Paypal
                                                    </td>
                                                    <td>
                                                        <!-- Button trigger modal -->
                                                        <button type="button" class="btn btn-primary btn-sm btn-rounded waves-effect waves-light" data-bs-toggle="modal" data-bs-target=".transaction-detailModal">
                                                            View Details
                                                        </button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="form-check font-size-16">
                                                            <input class="form-check-input" type="checkbox" id="transactionCheck05">
                                                            <label class="form-check-label" for="transactionCheck05"></label>
                                                        </div>
                                                    </td>
                                                    <td><a href="javascript: void(0);" class="text-body fw-bold">#SK2543</a> </td>
                                                    <td>Barry Dick</td>
                                                    <td>
                                                        05 Oct, 2019
                                                    </td>
                                                    <td>
                                                        $412
                                                    </td>
                                                    <td>
                                                        <span class="badge badge-pill badge-soft-success font-size-11">Paid</span>
                                                    </td>
                                                    <td>
                                                        <i class="fab fa-cc-mastercard me-1"></i> Mastercard
                                                    </td>
                                                    <td>
                                                        <!-- Button trigger modal -->
                                                        <button type="button" class="btn btn-primary btn-sm btn-rounded waves-effect waves-light" data-bs-toggle="modal" data-bs-target=".transaction-detailModal">
                                                            View Details
                                                        </button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="form-check font-size-16">
                                                            <input class="form-check-input" type="checkbox" id="transactionCheck06">
                                                            <label class="form-check-label" for="transactionCheck06"></label>
                                                        </div>
                                                    </td>
                                                    <td><a href="javascript: void(0);" class="text-body fw-bold">#SK2544</a> </td>
                                                    <td>Ronald Taylor</td>
                                                    <td>
                                                        04 Oct, 2019
                                                    </td>
                                                    <td>
                                                        $404
                                                    </td>
                                                    <td>
                                                        <span class="badge badge-pill badge-soft-warning font-size-11">Refund</span>
                                                    </td>
                                                    <td>
                                                        <i class="fab fa-cc-visa me-1"></i> Visa
                                                    </td>
                                                    <td>
                                                        <!-- Button trigger modal -->
                                                        <button type="button" class="btn btn-primary btn-sm btn-rounded waves-effect waves-light" data-bs-toggle="modal" data-bs-target=".transaction-detailModal">
                                                            View Details
                                                        </button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="form-check font-size-16">
                                                            <input class="form-check-input" type="checkbox" id="transactionCheck07">
                                                            <label class="form-check-label" for="transactionCheck07"></label>
                                                        </div>
                                                    </td>
                                                    <td><a href="javascript: void(0);" class="text-body fw-bold">#SK2545</a> </td>
                                                    <td>Jacob Hunter</td>
                                                    <td>
                                                        04 Oct, 2019
                                                    </td>
                                                    <td>
                                                        $392
                                                    </td>
                                                    <td>
                                                        <span class="badge badge-pill badge-soft-success font-size-11">Paid</span>
                                                    </td>
                                                    <td>
                                                        <i class="fab fa-cc-paypal me-1"></i> Paypal
                                                    </td>
                                                    <td>
                                                        <!-- Button trigger modal -->
                                                        <button type="button" class="btn btn-primary btn-sm btn-rounded waves-effect waves-light" data-bs-toggle="modal" data-bs-target=".transaction-detailModal">
                                                            View Details
                                                        </button>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- end table-responsive -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end row -->

                </div> <!-- container-fluid -->
            </div>
            <!-- End Page-content -->

            <!-- Transaction Modal -->
            <div class="modal fade transaction-detailModal" tabindex="-1" role="dialog" aria-labelledby="transaction-detailModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="transaction-detailModalLabel">Order Details</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <p class="mb-2">Product id: <span class="text-primary">#SK2540</span></p>
                            <p class="mb-4">Billing Name: <span class="text-primary">Neal Matthews</span></p>

                            <div class="table-responsive">
                                <table class="table align-middle table-nowrap">
                                    <thead>
                                        <tr>
                                            <th scope="col">Product</th>
                                            <th scope="col">Product Name</th>
                                            <th scope="col">Price</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">
                                                <div>
                                                    <img src="assets/images/product/img-7.png" alt="" class="avatar-sm">
                                                </div>
                                            </th>
                                            <td>
                                                <div>
                                                    <h5 class="text-truncate font-size-14">Wireless Headphone (Black)</h5>
                                                    <p class="text-muted mb-0">$ 225 x 1</p>
                                                </div>
                                            </td>
                                            <td>$ 255</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">
                                                <div>
                                                    <img src="assets/images/product/img-4.png" alt="" class="avatar-sm">
                                                </div>
                                            </th>
                                            <td>
                                                <div>
                                                    <h5 class="text-truncate font-size-14">Phone patterned cases</h5>
                                                    <p class="text-muted mb-0">$ 145 x 1</p>
                                                </div>
                                            </td>
                                            <td>$ 145</td>
                                        </tr>
                                        <tr>
                                            <td colspan="2">
                                                <h6 class="m-0 text-right">Sub Total:</h6>
                                            </td>
                                            <td>
                                                $ 400
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="2">
                                                <h6 class="m-0 text-right">Shipping:</h6>
                                            </td>
                                            <td>
                                                Free
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="2">
                                                <h6 class="m-0 text-right">Total:</h6>
                                            </td>
                                            <td>
                                                $ 400
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end modal -->

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
</footer>        </div>
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

    <!-- dashboard init -->
    <script src="assets/js/pages/dashboard.init.js"></script>

    <script src="assets/js/app.js"></script>
</body>

</html>