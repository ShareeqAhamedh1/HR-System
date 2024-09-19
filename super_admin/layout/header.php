<?php
include "../backend/conn.php";
if(!isset($_SESSION['h_s_a_id'])){
	header('location:login.php');
	exit();
}

    ?>

<!DOCTYPE html>
<php lang="en" dir="ltr" data-nav-layout="vertical" data-theme-mode="light" data-header-styles="light" data-menu-styles="light" data-toggled="close">

<head>

    <!-- Meta Data -->
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=no'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> Zanex - Bootstrap 5 Premium Admin & Dashboard Template </title>
    <meta name="Description" content="Bootstrap Responsive Admin Web Dashboard php5 Template">
    <meta name="Author" content="Spruko Technologies Private Limited">
	<meta name="keywords" content="bootstrap template, template dashboard bootstrap, admin template, php admin panel template, bootstrap admin template, php and css templates, bootstrap, bootstrap php template, php admin dashboard template, bootstrap dashboard, admin panel php template">
    
    <!-- Favicon -->
    <link rel="icon" href="assets/images/brand-logos/favicon.ico" type="image/x-icon">
    
    <!-- Choices JS -->
    <script src="assets/libs/choices.js/public/assets/scripts/choices.min.js"></script>

    <!-- Main Theme Js -->
    <script src="assets/js/main.js"></script>
    
    <!-- Bootstrap Css -->
    <link id="style" href="assets/libs/bootstrap/css/bootstrap.min.css" rel="stylesheet" >

    <!-- Style Css -->
    <link href="assets/css/styles.min.css" rel="stylesheet" >

    <!-- Icons Css -->
    <link href="assets/css/icons.css" rel="stylesheet" >

    <!-- Node Waves Css -->
    <link href=assets/libs/node-waves/waves.min.css" rel="stylesheet" > 

    <!-- Simplebar Css -->
    <link href="assets/libs/simplebar/simplebar.min.css" rel="stylesheet" >
    
    <!-- Color Picker Css -->
    <link rel="stylesheet" href="assets/libs/flatpickr/flatpickr.min.css">
    <link rel="stylesheet" href="assets/libs/@simonwep/pickr/themes/nano.min.css">

    <!-- Choices Css -->
    <link rel="stylesheet" href="assets/libs/choices.js/public/assets/styles/choices.min.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">


<link rel="stylesheet" href="assets/libs/apexcharts/apexcharts.css">

</head>

<body>

    <!-- Start Switcher -->
    <!-- <div class="offcanvas offcanvas-end" tabindex="-1" id="switcher-canvas" aria-labelledby="offcanvasRightLabel">
        <div class="offcanvas-header border-bottom">
            <h5 class="offcanvas-title text-default" id="offcanvasRightLabel">Switcher</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <nav class="border-bottom border-block-end-dashed">
                <div class="nav nav-tabs nav-justified" id="switcher-main-tab" role="tablist">
                    <button class="nav-link active" id="switcher-home-tab" data-bs-toggle="tab" data-bs-target="#switcher-home"
                        type="button" role="tab" aria-controls="switcher-home" aria-selected="true">Theme Styles</button>
                    <button class="nav-link" id="switcher-profile-tab" data-bs-toggle="tab" data-bs-target="#switcher-profile"
                        type="button" role="tab" aria-controls="switcher-profile" aria-selected="false">Theme Colors</button>
                </div>
            </nav>
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active border-0" id="switcher-home" role="tabpanel" aria-labelledby="switcher-home-tab"
                    tabindex="0">
                    <div class="">
                        <p class="switcher-style-head">Theme Color Mode:</p>
                        <div class="row switcher-style gx-0">
                            <div class="col-4">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-light-theme">
                                        Light
                                    </label>
                                    <input class="form-check-input" type="radio" name="theme-style" id="switcher-light-theme"
                                        checked>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-dark-theme">
                                        Dark
                                    </label>
                                    <input class="form-check-input" type="radio" name="theme-style" id="switcher-dark-theme">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <p class="switcher-style-head">Directions:</p>
                        <div class="row switcher-style gx-0">
                            <div class="col-4">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-ltr">
                                        LTR
                                    </label>
                                    <input class="form-check-input" type="radio" name="direction" id="switcher-ltr" checked>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-rtl">
                                        RTL
                                    </label>
                                    <input class="form-check-input" type="radio" name="direction" id="switcher-rtl">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <p class="switcher-style-head">Navigation Styles:</p>
                        <div class="row switcher-style gx-0">
                            <div class="col-4">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-vertical">
                                        Vertical
                                    </label>
                                    <input class="form-check-input" type="radio" name="navigation-style" id="switcher-vertical" checked>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-horizontal">
                                        Horizontal
                                    </label>
                                    <input class="form-check-input" type="radio" name="navigation-style"
                                        id="switcher-horizontal"
                                        >
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="navigation-menu-styles">
                        <p class="switcher-style-head">Vertical & Horizontal Menu Styles:</p>
                        <div class="row switcher-style gx-0 pb-2 gy-2">
                            <div class="col-4">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-menu-click">
                                        Menu Click
                                    </label>
                                    <input class="form-check-input" type="radio" name="navigation-menu-styles"
                                        id="switcher-menu-click">
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-menu-hover">
                                        Menu Hover
                                    </label>
                                    <input class="form-check-input" type="radio" name="navigation-menu-styles"
                                        id="switcher-menu-hover">
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-icon-click">
                                        Icon Click
                                    </label>
                                    <input class="form-check-input" type="radio" name="navigation-menu-styles"
                                        id="switcher-icon-click">
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-icon-hover">
                                        Icon Hover
                                    </label>
                                    <input class="form-check-input" type="radio" name="navigation-menu-styles"
                                        id="switcher-icon-hover">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="sidemenu-layout-styles">
                        <p class="switcher-style-head">Sidemenu Layout Styles:</p>
                        <div class="row switcher-style gx-0 pb-2 gy-2">
                            <div class="col-sm-6">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-default-menu">
                                        Default Menu
                                    </label>
                                    <input class="form-check-input" type="radio" name="sidemenu-layout-styles"
                                        id="switcher-default-menu" checked>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-closed-menu">
                                        Closed Menu
                                    </label>
                                    <input class="form-check-input" type="radio" name="sidemenu-layout-styles"
                                        id="switcher-closed-menu">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-icontext-menu">
                                        Icon Text
                                    </label>
                                    <input class="form-check-input" type="radio" name="sidemenu-layout-styles"
                                        id="switcher-icontext-menu">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-icon-overlay">
                                        Icon Overlay
                                    </label>
                                    <input class="form-check-input" type="radio" name="sidemenu-layout-styles"
                                        id="switcher-icon-overlay">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-detached">
                                        Detached
                                    </label>
                                    <input class="form-check-input" type="radio" name="sidemenu-layout-styles"
                                        id="switcher-detached">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-double-menu">
                                        Double Menu
                                    </label>
                                    <input class="form-check-input" type="radio" name="sidemenu-layout-styles"
                                        id="switcher-double-menu">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <p class="switcher-style-head">Page Styles:</p>
                        <div class="row switcher-style gx-0">
                            <div class="col-4">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-regular">
                                        Regular
                                    </label>
                                    <input class="form-check-input" type="radio" name="page-styles" id="switcher-regular"
                                        checked>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-classic">
                                        Classic
                                    </label>
                                    <input class="form-check-input" type="radio" name="page-styles" id="switcher-classic">
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-modern">
                                        Modern
                                    </label>
                                    <input class="form-check-input" type="radio" name="page-styles" id="switcher-modern">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <p class="switcher-style-head">Layout Width Styles:</p>
                        <div class="row switcher-style gx-0">
                            <div class="col-4">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-full-width">
                                        Full Width
                                    </label>
                                    <input class="form-check-input" type="radio" name="layout-width" id="switcher-full-width"
                                        checked>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-boxed">
                                        Boxed
                                    </label>
                                    <input class="form-check-input" type="radio" name="layout-width" id="switcher-boxed">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <p class="switcher-style-head">Menu Positions:</p>
                        <div class="row switcher-style gx-0">
                            <div class="col-4">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-menu-fixed">
                                        Fixed
                                    </label>
                                    <input class="form-check-input" type="radio" name="menu-positions" id="switcher-menu-fixed"
                                        checked>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-menu-scroll">
                                        Scrollable
                                    </label>
                                    <input class="form-check-input" type="radio" name="menu-positions" id="switcher-menu-scroll">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <p class="switcher-style-head">Header Positions:</p>
                        <div class="row switcher-style gx-0">
                            <div class="col-4">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-header-fixed">
                                        Fixed
                                    </label>
                                    <input class="form-check-input" type="radio" name="header-positions"
                                        id="switcher-header-fixed" checked>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-header-scroll">
                                        Scrollable
                                    </label>
                                    <input class="form-check-input" type="radio" name="header-positions"
                                        id="switcher-header-scroll">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <p class="switcher-style-head">Loader:</p>
                        <div class="row switcher-style gx-0">
                            <div class="col-4">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-loader-enable">
                                        Enable
                                    </label>
                                    <input class="form-check-input" type="radio" name="page-loader"
                                        id="switcher-loader-enable" checked>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-loader-disable">
                                        Disable
                                    </label>
                                    <input class="form-check-input" type="radio" name="page-loader"
                                        id="switcher-loader-disable" checked>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade border-0" id="switcher-profile" role="tabpanel" aria-labelledby="switcher-profile-tab" tabindex="0">
                    <div>
                        <div class="theme-colors">
                            <p class="switcher-style-head">Menu Colors:</p>
                            <div class="d-flex switcher-style pb-2">
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-white" data-bs-toggle="tooltip"
                                        data-bs-placement="top" title="Light Menu" type="radio" name="menu-colors"
                                        id="switcher-menu-light" checked>
                                </div>
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-dark" data-bs-toggle="tooltip"
                                        data-bs-placement="top" title="Dark Menu" type="radio" name="menu-colors"
                                        id="switcher-menu-dark">
                                </div>
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-primary" data-bs-toggle="tooltip"
                                        data-bs-placement="top" title="Color Menu" type="radio" name="menu-colors"
                                        id="switcher-menu-primary">
                                </div>
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-gradient" data-bs-toggle="tooltip"
                                        data-bs-placement="top" title="Gradient Menu" type="radio" name="menu-colors"
                                        id="switcher-menu-gradient">
                                </div>
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-transparent"
                                        data-bs-toggle="tooltip" data-bs-placement="top" title="Transparent Menu"
                                        type="radio" name="menu-colors" id="switcher-menu-transparent">
                                </div>
                            </div>
                            <div class="px-4 pb-3 text-muted fs-11">Note:If you want to change color Menu dynamically change from below Theme Primary color picker</div>
                        </div>
                        <div class="theme-colors">
                            <p class="switcher-style-head">Header Colors:</p>
                            <div class="d-flex switcher-style pb-2">
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-white" data-bs-toggle="tooltip"
                                        data-bs-placement="top" title="Light Header" type="radio" name="header-colors"
                                        id="switcher-header-light" checked>
                                </div>
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-dark" data-bs-toggle="tooltip"
                                        data-bs-placement="top" title="Dark Header" type="radio" name="header-colors"
                                        id="switcher-header-dark">
                                </div>
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-primary" data-bs-toggle="tooltip"
                                        data-bs-placement="top" title="Color Header" type="radio" name="header-colors"
                                        id="switcher-header-primary">
                                </div>
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-gradient" data-bs-toggle="tooltip"
                                        data-bs-placement="top" title="Gradient Header" type="radio" name="header-colors"
                                        id="switcher-header-gradient">
                                </div>
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-transparent" data-bs-toggle="tooltip"
                                        data-bs-placement="top" title="Transparent Header" type="radio" name="header-colors"
                                        id="switcher-header-transparent">
                                </div>
                            </div>
                            <div class="px-4 pb-3 text-muted fs-11">Note:If you want to change color Header dynamically change from below Theme Primary color picker</div>
                        </div>
                        <div class="theme-colors">
                            <p class="switcher-style-head">Theme Primary:</p>
                            <div class="d-flex flex-wrap align-items-center switcher-style">
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-primary-1" type="radio"
                                        name="theme-primary" id="switcher-primary">
                                </div>
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-primary-2" type="radio"
                                        name="theme-primary" id="switcher-primary1">
                                </div>
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-primary-3" type="radio" name="theme-primary"
                                        id="switcher-primary2">
                                </div>
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-primary-4" type="radio" name="theme-primary"
                                        id="switcher-primary3">
                                </div>
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-primary-5" type="radio" name="theme-primary"
                                        id="switcher-primary4">
                                </div>
                                <div class="form-check switch-select ps-0 mt-1 color-primary-light">
                                    <div class="theme-container-primary"></div>
                                    <div class="pickr-container-primary"></div>
                                </div>
                            </div>
                        </div>
                        <div class="theme-colors">
                            <p class="switcher-style-head">Theme Background:</p>
                            <div class="d-flex flex-wrap align-items-center switcher-style">
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-bg-1" type="radio"
                                        name="theme-background" id="switcher-background">
                                </div>
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-bg-2" type="radio"
                                        name="theme-background" id="switcher-background1">
                                </div>
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-bg-3" type="radio" name="theme-background"
                                        id="switcher-background2">
                                </div>
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-bg-4" type="radio"
                                        name="theme-background" id="switcher-background3">
                                </div>
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-bg-5" type="radio"
                                        name="theme-background" id="switcher-background4">
                                </div>
                                <div class="form-check switch-select ps-0 mt-1 tooltip-static-demo color-bg-transparent">
                                    <div class="theme-container-background"></div>
                                    <div class="pickr-container-background"></div>
                                </div>
                            </div>
                        </div>
                        <div class="menu-image mb-3">
                            <p class="switcher-style-head">Menu With Background Image:</p>
                            <div class="d-flex flex-wrap align-items-center switcher-style">
                                <div class="form-check switch-select m-2">
                                    <input class="form-check-input bgimage-input bg-img1" type="radio"
                                        name="theme-background" id="switcher-bg-img">
                                </div>
                                <div class="form-check switch-select m-2">
                                    <input class="form-check-input bgimage-input bg-img2" type="radio"
                                        name="theme-background" id="switcher-bg-img1">
                                </div>
                                <div class="form-check switch-select m-2">
                                    <input class="form-check-input bgimage-input bg-img3" type="radio" name="theme-background"
                                        id="switcher-bg-img2">
                                </div>
                                <div class="form-check switch-select m-2">
                                    <input class="form-check-input bgimage-input bg-img4" type="radio"
                                        name="theme-background" id="switcher-bg-img3">
                                </div>
                                <div class="form-check switch-select m-2">
                                    <input class="form-check-input bgimage-input bg-img5" type="radio"
                                        name="theme-background" id="switcher-bg-img4">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-grid canvas-footer"> 
                    <a href="javascript:void(0);" id="reset-all" class="btn btn-danger btn-block m-1">Reset</a> 
                </div>
            </div>
        </div>
    </div> -->
    <!-- End Switcher -->


    <!-- Loader -->
    <div id="loader" >
        <img src="assets/images/media/loader.svg" alt="">
    </div>
    <!-- Loader -->

    <div class="page">
        <!-- app-header -->
        <header class="app-header">

            <!-- Start::main-header-container -->
            <div class="main-header-container container-fluid">

                <!-- Start::header-content-left -->
                <div class="header-content-left">

                    <!-- Start::header-element -->
                    <div class="header-element">
                        <div class="horizontal-logo">
                            <a href="index.php" class="header-logo">
                                <img src="assets/images/brand-logos/desktop-logo.png" alt="logo" class="desktop-logo">
                                <img src="assets/images/brand-logos/toggle-logo.png" alt="logo" class="toggle-logo">
                                <img src="assets/images/brand-logos/desktop-white.png" alt="logo" class="desktop-dark">
                                <img src="assets/images/brand-logos/toggle-dark.png" alt="logo" class="toggle-dark">
                                <img src="assets/images/brand-logos/desktop-white.png" alt="logo" class="desktop-white">
                                <img src="assets/images/brand-logos/toggle-white.png" alt="logo" class="toggle-white">
                            </a>
                        </div>
                    </div>
                    <!-- End::header-element -->

                    <!-- Start::header-element -->
                    <div class="header-element">
                        <!-- Start::header-link -->
                        <a aria-label="Hide Sidebar"
                            class="sidemenu-toggle header-link animated-arrow hor-toggle horizontal-navtoggle mx-0 my-auto"
                            data-bs-toggle="sidebar" href="javascript:void(0);"><span></span></a>
                        <!-- End::header-link -->
                    </div>
                    <!-- End::header-element -->
                    <!-- Start::header-element -->
                    <div class="header-element header-search">
                        <!-- Start::header-link -->
                        <!-- <a href="javascript:void(0);" class="header-link" data-bs-toggle="modal" data-bs-target="#searchModal">
                            <i class="bx bx-search-alt-2 header-link-icon"></i>
                        </a> -->
                        <div class="main-header-search ms-3 d-none d-lg-block my-auto">
                            <input class="form-control" placeholder="Search for anything..." type="search"> <button
                                class="btn"><i class="fe fe-search" aria-hidden="true"></i></button>
                        </div>
                        <!-- End::header-link -->
                    </div>
                    <!-- End::header-element -->

                </div>
                <!-- End::header-content-left -->

                <!-- Start::header-content-right -->
                <div class="header-content-right">

                    

                     <!-- Start::header-element -->
                     <div class="header-element header-search d-block d-lg-none">
                        <!-- Start::header-link -->
                        <a href="javascript:void(0);" class="header-link" data-bs-toggle="modal" data-bs-target="#searchModal">
                            <i class="ti ti-search header-link-icon"></i>
                        </a>
                        <!-- End::header-link -->
                    </div>
                    <!-- End::header-element -->

                  

                    <!-- Start::header-element -->
                    <div class="header-element header-fullscreen">
                        <!-- Start::header-link -->
                        <!-- <a onclick="openFullscreen();" href="#" class="header-link">
                            <i class="fe fe-maximize full-screen-open header-link-icon"></i>
                            <i class="fe fe-minimize full-screen-close header-link-icon d-none"></i>
                        </a> -->
                        <!-- End::header-link -->
                    </div>
                    <!-- End::header-element -->

                    <!-- Start::header-element -->
                    
                    <!-- End::header-element -->

                    <!-- Start::header-element -->
                    <div class="header-element meassage-dropdown d-none d-xl-block">
                        <!-- Start::header-link|dropdown-toggle -->
                        <a href="javascript:void(0);" class="header-link dropdown-toggle" data-bs-auto-close="outside"
                            data-bs-toggle="dropdown">
                            <i class="fe fe-message-square header-link-icon"></i>
                            <span class="pulse-danger"></span>
                        </a>
                        <!-- End::header-link|dropdown-toggle -->
                        <!-- Start::main-header-dropdown -->
                        <div class="main-header-dropdown dropdown-menu dropdown-menu-end" data-popper-placement="none">
                            <div class="p-3">
                                <div class="d-flex align-items-center justify-content-between">
                                    <p class="mb-0 fs-17 fw-semibold">You have Messages</p>
                                    <span class="badge bg-success fw-normal" id="message-data">5 Unread</span>
                                </div>
                            </div>
                            <div class="dropdown-divider"></div>
                            <ul class="list-unstyled mb-0" id="header-notification-scroll1">
                                <li class="dropdown-item">
                                    <div class="d-flex align-items-start">
                                        <div class="pe-2">
                                            <img src="assets/images/faces/1.jpg" alt="img" class="rounded-circle avatar">
                                        </div>
                                        <div class="flex-grow-1 d-flex align-items-center justify-content-between">
                                            <div>
                                                <p class="mb-0 fw-semibold"><a href="default-chat.php">Madeleine<span
                                                            class="text-muted fs-12 fw-normal ps-1 d-inline-block"> 3 hours ago </span></a>
                                                </p>
                                                <span class="text-muted fw-normal fs-12 header-notification-text">Hey! there I'
                                                    am available....</span>
                                            </div>
                                            <div>
                                                <a href="javascript:void(0);"
                                                    class="min-w-fit-content text-muted me-1 dropdown-item-close3"><i
                                                        class="ti ti-x fs-16"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="dropdown-item">
                                    <div class="d-flex align-items-start">
                                        <div class="pe-2">
                                            <img src="assets/images/faces/2.jpg" alt="img" class="rounded-circle avatar">
                                        </div>
                                        <div class="flex-grow-1 d-flex align-items-center justify-content-between">
                                            <div>
                                                <p class="mb-0 fw-semibold"><a href="default-chat.php">Anthony<span
                                                            class="text-muted fs-12 fw-normal ps-1 d-inline-block"> 5 hours ago </span></a>
                                                </p>
                                                <span class="text-muted fw-normal fs-12 header-notification-text">New product
                                                    Launching...</span>
                                            </div>
                                            <div>
                                                <a href="javascript:void(0);"
                                                    class="min-w-fit-content text-muted me-1 dropdown-item-close3"><i
                                                        class="ti ti-x fs-16"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="dropdown-item">
                                    <div class="d-flex align-items-start">
                                        <div class="pe-2">
                                            <img src="assets/images/faces/3.jpg" alt="img" class="rounded-circle avatar">
                                        </div>
                                        <div class="flex-grow-1 d-flex align-items-center justify-content-between">
                                            <div>
                                                <p class="mb-0 fw-semibold"><a href="default-chat.php">Olivia<span
                                                            class="text-muted fs-12 fw-normal ps-1 d-inline-block">45 mintues ago </span></a>
                                                </p>
                                                <span class="text-muted fw-normal fs-12 header-notification-text">New Schedule
                                                    release......</span>
                                            </div>
                                            <div>
                                                <a href="javascript:void(0);"
                                                    class="min-w-fit-content text-muted me-1 dropdown-item-close3"><i
                                                        class="ti ti-x fs-16"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="dropdown-item">
                                    <div class="d-flex align-items-start">
                                        <div class="pe-2">
                                            <img src="assets/images/faces/4.jpg" alt="img" class="rounded-circle avatar">
                                        </div>
                                        <div class="flex-grow-1 d-flex align-items-center justify-content-between">
                                            <div>
                                                <p class="mb-0 fw-semibold"><a href="default-chat.php">Sanderson<span
                                                            class="text-muted fs-12 fw-normal ps-1 d-inline-block">20 mintues ago </span></a>
                                                </p>
                                                <span class="text-muted fw-normal fs-12 header-notification-text">New Schedule
                                                    release......</span>
                                            </div>
                                            <div>
                                                <a href="javascript:void(0);"
                                                    class="min-w-fit-content text-muted me-1 dropdown-item-close3"><i
                                                        class="ti ti-x fs-16"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="dropdown-item">
                                    <div class="d-flex align-items-start">
                                        <div class="pe-2">
                                            <img src="assets/images/faces/2.jpg" alt="img" class="rounded-circle avatar">
                                        </div>
                                        <div class="flex-grow-1 d-flex align-items-center justify-content-between">
                                            <div>
                                                <p class="mb-0 fw-semibold"><a href="default-chat.php">Senrio<span
                                                            class="text-muted fs-12 fw-normal ps-1 d-inline-block"> 10 hours ago </span></a>
                                                </p>
                                                <span class="text-muted fw-normal fs-12 header-notification-text">New product
                                                    Launching...</span>
                                            </div>
                                            <div>
                                                <a href="javascript:void(0);"
                                                    class="min-w-fit-content text-muted me-1 dropdown-item-close3"><i
                                                        class="ti ti-x fs-16"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <div class="p-3 empty-header-item1 border-top">
                                <div class="d-grid">
                                    <a href="default-chat.php" class="btn text-muted p-0 border-0">See all Messages</a>
                                </div>
                            </div>
                            <div class="p-5 empty-item1 d-none">
                                <div class="text-center">
                                    <span class="avatar avatar-xl avatar-rounded bg-secondary-transparent">
                                        <i class="ri-notification-off-line fs-2"></i>
                                    </span>
                                    <h6 class="fw-semibold mt-3">No New Notifications</h6>
                                </div>
                            </div>
                        </div>
                        <!-- End::main-header-dropdown -->
                    </div>
                    <!-- End::header-element -->

                    <!-- Start::header-element -->
                    <div class="header-element cart-dropdown">
                        <!-- Start::header-link|dropdown-toggle -->
                        <a href="javascript:void(0);" class="header-link dropdown-toggle" data-bs-auto-close="outside"
                            data-bs-toggle="dropdown">
                            <i class="fe fe-shopping-cart header-link-icon"></i>
                            <span class="badge rounded-pill bg-success cart-badge fw-normal" id="cart-icon-badge">5</span>
                        </a>
                        <!-- End::header-link|dropdown-toggle -->
                        <!-- Start::main-header-dropdown -->
                        <div class="main-header-dropdown dropdown-menu dropdown-menu-end" data-popper-placement="none">
                            <div class="p-3">
                                <div class="d-flex align-items-center justify-content-between">
                                    <p class="mb-0 fs-17 fw-semibold">Cart Items</p>
                                    <span class="badge bg-success fw-normal" id="cart-data">5 Items</span>
                                </div>
                            </div>
                            <div>
                                <hr class="dropdown-divider">
                            </div>
                            <ul class="list-unstyled mb-0" id="header-cart-items-scroll">
                                <li class="dropdown-item">
                                    <div class="d-flex align-items-start cart-dropdown-item">
                                        <img src="assets/images/pngs/1.png" alt="img"
                                            class="avatar avatar-sm avatar-rounded br-5 me-3">
                                        <div class="flex-grow-1">
                                            <div class="d-flex align-items-start justify-content-between mb-0">
                                                <div class="mb-0 fs-13 text-dark fw-semibold">
                                                    <a href="cart.php">Cup Set</a>
                                                </div>
                                                <div>
                                                    <span class="text-black mb-1">$1,299.00</span>
                                                    <a href="javascript:void(0);"
                                                        class="header-cart-remove float-end dropdown-item-close"><i
                                                            class="ti ti-trash"></i></a>
                                                </div>
                                            </div>
                                            <div class="min-w-fit-content d-flex align-items-start justify-content-between">
                                                <ul class="header-product-item d-flex">
                                                    <li>White Set</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="dropdown-item">
                                    <div class="d-flex align-items-start cart-dropdown-item">
                                        <img src="assets/images/pngs/3.png" alt="img"
                                            class="avatar avatar-sm avatar-rounded br-5 me-3">
                                        <div class="flex-grow-1">
                                            <div class="d-flex align-items-start justify-content-between mb-0">
                                                <div class="mb-0 fs-13 text-dark fw-semibold">
                                                    <a href="cart.php">Wired headset</a>
                                                </div>
                                                <div>
                                                    <span class="text-black mb-1">$179.29</span>
                                                    <a href="javascript:void(0);"
                                                        class="header-cart-remove float-end dropdown-item-close"><i
                                                            class="ti ti-trash"></i></a>
                                                </div>
                                            </div>
                                            <div class="min-w-fit-content d-flex align-items-start justify-content-between">
                                                <ul class="header-product-item">
                                                    <li>Analog</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="dropdown-item">
                                    <div class="d-flex align-items-start cart-dropdown-item">
                                        <img src="assets/images/pngs/5.png" alt="img"
                                            class="avatar avatar-sm avatar-rounded br-5 me-3">
                                        <div class="flex-grow-1">
                                            <div class="d-flex align-items-start justify-content-between mb-0">
                                                <div class="mb-0 fs-13 text-dark fw-semibold">
                                                    <a href="cart.php">modern Chair</a>
                                                </div>
                                                <div>
                                                    <span class="text-black mb-1">$29.00</span>
                                                    <a href="javascript:void(0);"
                                                        class="header-cart-remove float-end dropdown-item-close"><i
                                                            class="ti ti-trash"></i></a>
                                                </div>
                                            </div>
                                            <div class="min-w-fit-content d-flex align-items-start justify-content-between">
                                                <ul class="header-product-item d-flex">
                                                    <li>Decorative</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="dropdown-item">
                                    <div class="d-flex align-items-start cart-dropdown-item">
                                        <img src="assets/images/pngs/4.png" alt="img"
                                            class="avatar avatar-sm avatar-rounded br-5 me-3">
                                        <div class="flex-grow-1">
                                            <div class="d-flex align-items-start justify-content-between mb-0">
                                                <div class="mb-0 fs-13 text-dark fw-semibold">
                                                    <a href="cart.php">Flower Vase</a>
                                                </div>
                                                <div>
                                                    <span class="text-black mb-1">$4,999.00</span>
                                                    <a href="javascript:void(0);"
                                                        class="header-cart-remove float-end dropdown-item-close"><i
                                                            class="ti ti-trash"></i></a>
                                                </div>
                                            </div>
                                            <div class="min-w-fit-content d-flex align-items-start justify-content-between">
                                                <ul class="header-product-item d-flex">
                                                    <li>Decorative</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="dropdown-item">
                                    <div class="d-flex align-items-start cart-dropdown-item">
                                        <img src="assets/images/pngs/6.png" alt="img"
                                            class="avatar avatar-sm avatar-rounded br-5 me-3">
                                        <div class="flex-grow-1">
                                            <div class="d-flex align-items-start justify-content-between mb-0">
                                                <div class="mb-0 fs-13 text-dark fw-semibold">
                                                    <a href="cart.php">Sun Glasses</a>
                                                </div>
                                                <div>
                                                    <span class="text-black mb-1">$129.00</span>
                                                    <a href="javascript:void(0);"
                                                        class="header-cart-remove float-end dropdown-item-close"><i
                                                            class="ti ti-trash"></i></a>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-start justify-content-between">
                                                <ul class="header-product-item d-flex">
                                                    <li>Brown</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <div class="p-3 empty-header-item border-top">
                                <div class="d-grid">
                                    <a href="checkout.php" class="btn text-muted p-0 border-0">Proceed to checkout</a>
                                </div>
                            </div>
                            <div class="p-5 empty-item d-none">
                                <div class="text-center">
                                    <span class="avatar avatar-xl avatar-rounded bg-warning-transparent">
                                        <i class="ri-shopping-cart-2-line fs-2"></i>
                                    </span>
                                    <h6 class="fw-bold mb-1 mt-3">Your Cart is Empty</h6>
                                    <span class="mb-3 fw-normal fs-13 d-block">Add some items to make me happy :)</span>
                                    <a href="shop.php" class="btn btn-primary btn-wave btn-sm m-1" data-abc="true">continue
                                        shopping <i class="bi bi-arrow-right ms-1"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- End::main-header-dropdown -->
                    </div>
                    <!-- End::header-element -->

                    <!-- Start::header-element -->
                    <div class="header-element profile-1">
                        <!-- Start::header-link|dropdown-toggle -->
                        <a href="#" class=" dropdown-toggle leading-none d-flex px-1" id="mainHeaderProfile"
                            data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
                            <div class="d-flex align-items-center">
                                <div class="">
                                    <img src="assets/images/faces/9.jpg" alt="img"
                                        class="rounded-circle avatar  profile-user brround cover-image">
                                </div>
                            </div>
                        </a>
                        <!-- End::header-link|dropdown-toggle -->
                        <ul class="main-header-dropdown dropdown-menu pt-0 overflow-hidden header-profile-dropdown dropdown-menu-end"
                            aria-labelledby="mainHeaderProfile">
                            <li><a class="dropdown-item d-flex" href="profile.php"><i
                                        class="ti ti-user-circle fs-18 me-2 op-7"></i>Hotel Details</a></li>
                            <li><a class="dropdown-item d-flex" href="email.php"><i
                                        class="ti ti-inbox fs-18 me-2 op-7"></i>Inbox <span
                                        class="badge bg-success-transparent ms-auto">25</span></a></li>
                            <li><a class="dropdown-item d-flex border-block-end" href="Timeline.php"><i
                                        class="ti ti-clipboard-check fs-18 me-2 op-7"></i>Task Manager</a></li>
                            <li><a class="dropdown-item d-flex" href="emailservices.php"><i
                                        class="ti ti-adjustments-horizontal fs-18 me-2 op-7"></i>Settings</a></li>
                            <li><a class="dropdown-item d-flex" href="Faq.php"><i
                                        class="ti ti-headset fs-18 me-2 op-7"></i>Support</a></li>
                            <li><a class="dropdown-item d-flex" href="login.php"><i
                                        class="ti ti-logout fs-18 me-2 op-7"></i>Log Out</a></li>
                        </ul>
                    </div>
                    <!-- End::header-element -->

                    <!-- Start::header-element -->
                    <div class="header-element d-none d-sm-block">
                        <!-- Start::header-link|switcher-icon -->
                        <a href="#" class="header-link" data-bs-toggle="offcanvas" data-bs-target="#offcanvassidebar">
                            <i class="fe fe-menu header-link-icon"></i>
                        </a>
                        <!-- End::header-link|switcher-icon -->
                    </div>
                    <!-- End::header-element -->

                    <!-- Start::header-element -->
                    <div class="header-element">
                        <!-- Start::header-link|switcher-icon -->
                        <!-- <a href="#" class="header-link switcher-icon" data-bs-toggle="offcanvas"
                            data-bs-target="#switcher-canvas">
                            <i class="fe fe-settings header-link-icon"></i>
                        </a> -->
                        <!-- End::header-link|switcher-icon -->
                    </div>
                    <!-- End::header-element -->

                </div>
                <!-- End::header-content-right -->

            </div>
            <!-- End::main-header-container -->

        </header>

                <!-- /app-header -->
        <!-- Start::app-sidebar -->
        <aside class="app-sidebar sticky" id="sidebar">

            <!-- Start::main-sidebar-header -->
            <div class="main-sidebar-header">
                <a href="index.php" class="header-logo">
                    <img src="assets/images/brand-logos/desktop-logo.png" alt="logo" class="desktop-logo">
                    <img src="assets/images/brand-logos/toggle-logo.png" alt="logo" class="toggle-logo">
                    <img src="assets/images/brand-logos/desktop-white.png" alt="logo" class="desktop-dark">
                    <img src="assets/images/brand-logos/toggle-dark.png" alt="logo" class="toggle-dark">
                    <img src="assets/images/brand-logos/desktop-white.png" alt="logo" class="desktop-white">
                    <img src="assets/images/brand-logos/toggle-white.png" alt="logo" class="toggle-white">
                </a>
            </div>
            <!-- End::main-sidebar-header -->

            <!-- Start::main-sidebar -->
            <div class="main-sidebar" id="sidebar-scroll">

                <!-- Start::nav -->
                <nav class="main-menu-container nav nav-pills flex-column sub-open">
                    <div class="slide-left" id="slide-left">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24" viewBox="0 0 24 24">
                            <path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z"></path>
                        </svg>
                    </div>
                    <ul class="main-menu">
                        <!-- Start::slide__category -->
                        <li class="slide__category"><span class="category-name">Main</span></li>
                        <!-- End::slide__category -->

                        <!-- Start::slide -->
                        <li class="slide">
                            <a href="index.php" class="side-menu__item">
                                <i class="fe fe-home side-menu__icon"></i>
                                <span class="side-menu__label">Dashboard</span>
                            </a>
                        </li>
                        <li class="slide">
                            <a href="hoteldetails.php" class="side-menu__item">
                                <i class="ri-hotel-line side-menu__icon"></i>
                                <!-- <i class="ri-hotel-line"></i> -->
                                <span class="side-menu__label">Hotel Details</span>
                                <!-- <a href="profile.php" class="side-menu__item"> Profile</a>  -->
                            </a>
                        </li>
                       
                        </li>
                        <li class="slide">
                            <a href="tickets.php" class="side-menu__item">
                                <i class="ri-bill-line side-menu__icon"></i>
                                <span class=" side-menu__label">Tickets</span>
                                <!-- <a href="invoice.php" class="side-menu__item"> Invoice</a> -->
                            </a>
                        </li>
                      
                        <li class="slide">
                            <a href="invoice.php" class="side-menu__item">
                                <i class="ri-bill-line side-menu__icon"></i>
                                <span class=" side-menu__label">Invoice</span>
                                <!-- <a href="invoice.php" class="side-menu__item"> Invoice</a> -->
                            </a>
                        </li>
                        
                    

                    
                
                        <!-- Start::slide -->
                        <!-- <li class="slide has-sub">
                            <a href="javascript:void(0);" class="side-menu__item">
                                <i class="fe fe-pie-chart side-menu__icon"></i>
                                <span class="side-menu__label">Charts</span>
                                <i class="fe fe-chevron-right side-menu__angle"></i>
                            </a>
                            <ul class="slide-menu child1">
                                <li class="slide side-menu__label1">
                                    <a href="javascript:void(0)">Charts</a>
                                </li>
                                <li class="slide has-sub">
                                    <a href="javascript:void(0);" class="side-menu__item">Apex Charts
                                        <i class="fe fe-chevron-right side-menu__angle"></i></a>
                                    <ul class="slide-menu child2">
                                        <li class="slide">
                                            <a href="apex-line-charts.php" class="side-menu__item">Line Charts</a>
                                        </li>
                                        <li class="slide">
                                            <a href="apex-area-charts.php" class="side-menu__item">Area Charts</a>
                                        </li>
                                        <li class="slide">
                                            <a href="apex-column-charts.php" class="side-menu__item">Column Charts</a>
                                        </li>
                                        <li class="slide">
                                            <a href="apex-bar-charts.php" class="side-menu__item">Bar Charts</a>
                                        </li>
                                        <li class="slide">
                                            <a href="apex-mixed-charts.php" class="side-menu__item">Mixed Charts</a>
                                        </li>
                                        <li class="slide">
                                            <a href="apex-rangearea-charts.php" class="side-menu__item">Range Area Charts</a>
                                        </li>
                                        <li class="slide">
                                            <a href="apex-timeline-charts.php" class="side-menu__item">Timeline Charts</a>
                                        </li>
                                        <li class="slide">
                                            <a href="apex-candlestick-charts.php" class="side-menu__item">CandleStick
                                                Charts</a>
                                        </li>
                                        <li class="slide">
                                            <a href="apex-boxplot-charts.php" class="side-menu__item">Boxplot Charts</a>
                                        </li>
                                        <li class="slide">
                                            <a href="apex-bubble-charts.php" class="side-menu__item">Bubble Charts</a>
                                        </li>
                                        <li class="slide">
                                            <a href="apex-scatter-charts.php" class="side-menu__item">Scatter Charts</a>
                                        </li>
                                        <li class="slide">
                                            <a href="apex-heatmap-charts.php" class="side-menu__item">Heatmap Charts</a>
                                        </li>
                                        <li class="slide">
                                            <a href="apex-treemap-charts.php" class="side-menu__item">Treemap Charts</a>
                                        </li>
                                        <li class="slide">
                                            <a href="apex-pie-charts.php" class="side-menu__item">Pie Charts</a>
                                        </li>
                                        <li class="slide">
                                            <a href="apex-radialbar-charts.php" class="side-menu__item">Radialbar Charts</a>
                                        </li>
                                        <li class="slide">
                                            <a href="apex-radar-charts.php" class="side-menu__item">Radar Charts</a>
                                        </li>
                                        <li class="slide">
                                            <a href="apex-polararea-charts.php" class="side-menu__item">Polararea Charts</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="slide">
                                    <a href="chartjs-charts.php" class="side-menu__item">Chartjs Charts</a>
                                </li>
                                <li class="slide">
                                    <a href="echarts.php" class="side-menu__item">Echart Charts</a>
                                </li>
                            </ul>
                        </li> -->
                        <!-- End::slide -->

                       

                      
                       
                        <!-- Start::slide -->
                        <!-- <li class="slide has-sub">
                            <a href="javascript:void(0);" class="side-menu__item">
                                <i class="fe fe-layers side-menu__icon"></i>
                                <span class="side-menu__label">Pages</span>
                                <i class="fe fe-chevron-right side-menu__angle"></i>
                            </a>
                            <ul class="slide-menu child1">
                                <li class="slide side-menu__label1">
                                    <a href="javascript:void(0)">Pages</a>
                                </li>
                                <li class="slide">
                                    <a href="profile.php" class="side-menu__item"> Profile</a>
                                </li>
                                <li class="slide">
                                    <a href="editprofile.php" class="side-menu__item"> Edit Profile</a>
                                </li>
                                <li class="slide">
                                    <a href="email.php" class="side-menu__item"> Mail-Inbox</a>
                                </li>
                                
                                    <a href="invoice.php" class="side-menu__item"> Invoice</a>
                                </li>
                                <li class="slide">
                                    <a href="pricing.php" class="side-menu__item"> Pricing Tables</a>
                                </li>
                               
                                <li class="slide has-sub">
                                    <a href="javascript:void(0);" class="side-menu__item">E-Commerce
                                        <i class="fe fe-chevron-right side-menu__angle"></i></a>
                                    <ul class="slide-menu child2">
                                        <li class="slide">
                                            <a href="shop.php" class="side-menu__item">Shop</a>
                                        </li>
                                        <li class="slide">
                                            <a href="shop-description.php" class="side-menu__item">Shopping Details</a>
                                        </li>
                                        <li class="slide">
                                            <a href="cart.php" class="side-menu__item">Shopping Cart</a>
                                        </li>
                                        <li class="slide">
                                            <a href="wishlist.php" class="side-menu__item">Wishlist</a>
                                        </li>
                                        <li class="slide">
                                            <a href="checkout.php" class="side-menu__item">Checkout</a>
                                        </li>
                                    </ul>
                                </li>
                                
                            </ul>
                        </li> -->
                        <!-- End::slide -->

                       

                     
                        <!-- End::slide -->
                        <!-- Start::slide -->
                        <li class="slide has-sub">
                            
                            <ul class="slide-menu child1">
                                
                                <li class="slide">
                                    <a href="login.php" class="side-menu__item"> Login</a>
                                </li>
                                <li class="slide">
                                    <a href="register.php" class="side-menu__item"> Register</a>
                                </li>
                                <li class="slide">
                                    <a href="forgot-password.php" class="side-menu__item"> Forgot Password</a>
                                </li>
                                <li class="slide">
                                    <a href="lockscreen.php" class="side-menu__item"> Lock screen</a>
                                </li>
                                <li class="slide">
                                    <a href="construction.php" class="side-menu__item"> Under Construction</a>
                                </li>
                                
                            </ul>
                        </li>
                        <!-- End::slide -->



                        
                    </ul>
                    <div class="slide-right" id="slide-right"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24"
                            height="24" viewBox="0 0 24 24">
                            <path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z"></path>
                        </svg></div>
                </nav>
                <!-- End::nav -->

            </div>
            <!-- End::main-sidebar -->

        </aside>
        <!-- End::app-sidebar -->

