<!doctype html>
<html lang="zxx">

<!-- Mirrored from baston.laborasyon.com/demos/default/profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 28 Jan 2021 01:56:07 GMT -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Website Komunitas</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('../../templete2/assets/media/image/favicon.png')}}"/>

    <!-- Main css -->
    <link rel="stylesheet" href="{{ asset('../../templete2/vendors/bundle.css')}}" type="text/css">

    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans:wght@400;500;600&amp;display=swap" rel="stylesheet">


<!-- App css -->
    <link rel="stylesheet" href="{{ asset('../../templete2/assets/css/app.min.css')}}" type="text/css">

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div class="preloader">
    <!-- <img class="logo" src="{{ asset('../../templete2/assets/media/image/logo/logo.png')}}" alt="logo"> -->
    <!-- <img class="dark-logo" src="{{ asset('../../templete2/assets/media/image/logo/dark-logo.png')}}" alt="logo dark"> -->
    <h1>Website Komunitas</h1>
    <div class="preloader-icon"></div>
</div>
<!-- ./ Preloader -->

<!-- Sidebar group -->
<div class="sidebar-group">
    <!-- Sidebar >>> Settings -->
    <div class="sidebar" id="settings">
        <div class="card">
            <div class="card-body">
                <h6 class="card-title">Settings</h6>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item pl-0 pr-0">
                        <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" id="customSwitch1" checked>
                            <label class="custom-control-label" for="customSwitch1">Allow notifications.</label>
                        </div>
                    </li>
                    <li class="list-group-item pl-0 pr-0">
                        <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" id="customSwitch2">
                            <label class="custom-control-label" for="customSwitch2">Hide user requests</label>
                        </div>
                    </li>
                    <li class="list-group-item pl-0 pr-0">
                        <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" id="customSwitch3" checked>
                            <label class="custom-control-label" for="customSwitch3">Speed up demands</label>
                        </div>
                    </li>
                    <li class="list-group-item pl-0 pr-0">
                        <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" id="customSwitch4" checked>
                            <label class="custom-control-label" for="customSwitch4">Hide menus</label>
                        </div>
                    </li>
                    <li class="list-group-item pl-0 pr-0">
                        <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" id="customSwitch5">
                            <label class="custom-control-label" for="customSwitch5">Remember next visits</label>
                        </div>
                    </li>
                    <li class="list-group-item pl-0 pr-0">
                        <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" id="customSwitch6">
                            <label class="custom-control-label" for="customSwitch6">Enable report
                                generation.</label>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- ./ Sidebar >>> Settings -->

    <!-- Sidebar >>> Chat list -->
    <div class="sidebar" id="chat-list">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between mb-4">
                    <h6 class="card-title mb-0">Chats</h6>
                    <a href="chat.html" class="btn btn-primary btn-sm">New Chat</a>
                </div>
                <div class="list-group list-group-flush">
                    <a href="chat.html" class="list-group-item d-flex px-0 align-items-center">
                        <div class="pr-3">
                            <span class="avatar avatar-state-danger">
                                <img src="../../assets/media/image/user/women_avatar3.jpg"
                                     class="rounded-circle"
                                     alt="image">
                            </span>
                        </div>
                        <div class="flex-grow- 1">
                            <h6 class="mb-1">Cass Queyeiro</h6>
                            <span class="text-muted">
                                <i class="fa fa-image mr-1"></i> Photo
                            </span>
                        </div>
                        <div class="text-right ml-auto d-flex flex-column">
                            <span class="small text-muted">Yesterday</span>
                        </div>
                    </a>
                    <a href="chat.html" class="list-group-item d-flex px-0 align-items-center">
                        <div class="pr-3">
                            <span class="avatar avatar-state-warning">
                                <img src="../../assets/media/image/user/man_avatar4.jpg"
                                     class="rounded-circle"
                                     alt="image">
                            </span>
                        </div>
                        <div class="flex-grow-1">
                            <h6 class="mb-1">Evered Asquith</h6>
                            <span class="text-muted">
                                <i class="fa fa-video-camera mr-1"></i> Video
                            </span>
                        </div>
                        <div class="text-right ml-auto d-flex flex-column">
                            <span class="small text-muted">Last week</span>
                        </div>
                    </a>
                    <a href="chat.html" class="list-group-item px-0 d-flex align-items-center">
                        <div class="pr-3">
                            <div class="avatar avatar-state-danger">
                                <span class="avatar-title bg-success rounded-circle">F</span>
                            </div>
                        </div>
                        <div>
                            <h6 class="mb-1">Francisco Ubsdale</h6>
                            <span class="text-muted">Hello how are you?</span>
                        </div>
                        <div class="text-right ml-auto d-flex flex-column">
                            <span class="small text-muted">2:32 PM</span>
                        </div>
                    </a>
                    <a href="chat.html" class="list-group-item px-0 d-flex align-items-center">
                        <div class="pr-3">
                            <div class="avatar avatar-state-success">
                                <img src="../../assets/media/image/user/women_avatar1.jpg"
                                     class="rounded-circle"
                                     alt="image">
                            </div>
                        </div>
                        <div>
                            <h6 class="mb-1">Natale Janu</h6>
                            <span class="text-muted">Hi!</span>
                        </div>
                        <div class="text-right ml-auto d-flex flex-column">
                            <span class="badge badge-primary badge-pill ml-auto mb-2">3</span>
                            <span class="small text-muted">08:27 PM</span>
                        </div>
                    </a>
                    <a href="chat.html" class="list-group-item d-flex px-0 align-items-center">
                        <div class="pr-3">
                            <span class="avatar avatar-state-warning">
                                <img src="../../assets/media/image/user/women_avatar2.jpg"
                                     class="rounded-circle"
                                     alt="image">
                            </span>
                        </div>
                        <div class="flex-grow- 1">
                            <h6 class="mb-1">Orelie Rockhall</h6>
                            <span class="text-muted">
                                <i class="fa fa-image mr-1"></i> Photo
                            </span>
                        </div>
                        <div class="text-right ml-auto d-flex flex-column">
                            <span class="small text-muted">Yesterday</span>
                        </div>
                    </a>
                    <a href="chat.html" class="list-group-item d-flex px-0 align-items-center">
                        <div class="pr-3">
                            <span class="avatar avatar-state-info">
                                <img src="../../assets/media/image/user/man_avatar1.jpg"
                                     class="rounded-circle"
                                     alt="image">
                            </span>
                        </div>
                        <div class="flex-grow-1">
                            <h6 class="mb-1">Barbette Bolf</h6>
                            <span class="text-muted">
                                <i class="fa fa-video-camera mr-1"></i> Video
                            </span>
                        </div>
                        <div class="text-right ml-auto d-flex flex-column">
                            <span class="small text-muted">Last week</span>
                        </div>
                    </a>
                    <a href="chat.html" class="list-group-item d-flex px-0 align-items-center">
                        <div class="pr-3">
                            <span class="avatar avatar-state-secondary">
                                <span class="avatar-title bg-warning rounded-circle">D</span>
                            </span>
                        </div>
                        <div>
                            <h6 class="mb-1">Dudley Laborde</h6>
                            <span class="text-muted">Hello how are you?</span>
                        </div>
                        <div class="text-right ml-auto d-flex flex-column">
                            <span class="small text-muted">2:32 PM</span>
                        </div>
                    </a>
                    <a href="chat.html" class="list-group-item d-flex px-0 align-items-center">
                        <div class="pr-3">
                            <span class="avatar avatar-state-success">
                                <img src="../../assets/media/image/user/man_avatar2.jpg"
                                     class="rounded-circle"
                                     alt="image">
                            </span>
                        </div>
                        <div>
                            <h6 class="mb-1">Barbaraanne Riby</h6>
                            <span class="text-muted">Hi!</span>
                        </div>
                        <div class="text-right ml-auto d-flex flex-column">
                            <span class="small text-muted">08:27 PM</span>
                        </div>
                    </a>
                    <a href="chat.html" class="list-group-item d-flex px-0 align-items-center">
                        <div class="pr-3">
                            <span class="avatar avatar-state-danger">
                                <img src="../../assets/media/image/user/women_avatar3.jpg"
                                     class="rounded-circle"
                                     alt="image">
                            </span>
                        </div>
                        <div class="flex-grow- 1">
                            <h6 class="mb-1">Mariana Ondrousek</h6>
                            <span class="text-muted">
                                <i class="fa fa-image mr-1"></i> Photo
                            </span>
                        </div>
                        <div class="text-right ml-auto d-flex flex-column">
                            <span class="small text-muted">Yesterday</span>
                        </div>
                    </a>
                    <a href="chat.html" class="list-group-item d-flex px-0 align-items-center">
                        <div class="pr-3">
                            <span class="avatar avatar-state-warning">
                                <img src="../../assets/media/image/user/man_avatar4.jpg"
                                     class="rounded-circle"
                                     alt="image">
                            </span>
                        </div>
                        <div class="flex-grow-1">
                            <h6 class="mb-1">Ruprecht Lait</h6>
                            <span class="text-muted">
                                <i class="fa fa-video-camera mr-1"></i> Video
                            </span>
                        </div>
                        <div class="text-right ml-auto d-flex flex-column">
                            <span class="small text-muted">Last week</span>
                        </div>
                    </a>
                    <a href="chat.html" class="list-group-item d-flex px-0 align-items-center">
                        <div class="pr-3">
                            <span class="avatar avatar-state-info">
                                <img src="../../assets/media/image/user/man_avatar1.jpg"
                                     class="rounded-circle"
                                     alt="image">
                            </span>
                        </div>
                        <div class="flex-grow-1">
                            <h6 class="mb-1">Cosme Hubbold</h6>
                            <span class="text-muted">
                                <i class="fa fa-video-camera mr-1"></i> Video
                            </span>
                        </div>
                        <div class="text-right ml-auto d-flex flex-column">
                            <span class="small text-muted">Last week</span>
                        </div>
                    </a>
                    <a href="chat.html" class="list-group-item d-flex px-0 align-items-center">
                        <div class="pr-3">
                            <span class="avatar avatar-state-secondary">
                                <span class="avatar-title bg-secondary rounded-circle">M</span>
                            </span>
                        </div>
                        <div>
                            <h6 class="mb-1">Mallory Darch</h6>
                            <span class="text-muted">Hello how are you?</span>
                        </div>
                        <div class="text-right ml-auto d-flex flex-column">
                            <span class="small text-muted">2:32 PM</span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- ./ Sidebar >>> Chat list -->
</div>
<!-- ./ Sidebar group -->

<!-- Layout wrapper -->
<div class="layout-wrapper">
    <!-- Header -->
    <div class="header d-print-none">
        <div class="header-container">
            <div class="header-left">
                <ul class="navbar-nav">
                    <li class="nav-item navigation-toggler">
                        <a href="#" class="nav-link">
                            <i class="ti-menu"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <div class="header-search-form">
                            <form class="d-flex">
                                <button class="btn">
                                    <i class="ti-search"></i>
                                </button>
                                <input type="text" class="form-control" placeholder="Search">
                            </form>
                        </div>
                    </li>
                </ul>
            </div>

            <div class="header-right">
                <ul class="navbar-nav">
                    <li class="nav-item btn-mobile-search">
                        <a href="#" title="Search" class="nav-link">
                            <i data-feather="search"></i>
                        </a>
                    </li>

                    <li class="nav-item dropdown d-sm-inline d-none">
                        <a href="#" class="nav-link" title="Fullscreen" data-toggle="fullscreen">
                            <i class="maximize" data-feather="maximize"></i>
                            <i class="minimize" data-feather="minimize"></i>
                        </a>
                    </li>

                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link" title="Notifications" data-toggle="dropdown">
                            <span class="badge badge-danger nav-link-notify">1</span>
                            <i data-feather="bell"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-big">
                            <div
                                class="bg-primary px-3 py-3 text-center d-flex justify-content-between align-items-center">
                                <h6 class="mb-0">Notifications</h6>
                                <small class="opacity-7">1 unread notifications</small>
                            </div>
                            <div class="dropdown-scroll">
                                <ul class="list-group list-group-flush">
                                    <li>
                                        <a href="#"
                                           class="list-group-item px-3 d-flex align-items-center hide-show-toggler">
                                            <div>
                                                <figure class="avatar mr-2">
                                                    <span
                                                        class="avatar-title bg-success-bright text-success rounded-circle">
                                                        <i class="ti-file"></i>
                                                    </span>
                                                </figure>
                                            </div>
                                            <div class="flex-grow-1">
                                                <p class="mb-0 line-height-20 d-flex justify-content-between">
                                                    Your report is prepared
                                                    <i title="Mark as unread" data-toggle="tooltip"
                                                       class="hide-show-toggler-item fa fa-check font-size-11"></i>
                                                </p>
                                                <span class="text-muted small">20 min ago</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#"
                                           class="list-group-item bg-primary-bright px-3 d-flex align-items-center hide-show-toggler">
                                            <div>
                                                <figure class="avatar mr-2">
                                                <span
                                                    class="avatar-title bg-success-bright text-success rounded-circle">
                                                    <i class="ti-user"></i>
                                                </span>
                                                </figure>
                                            </div>
                                            <div class="flex-grow-1">
                                                <p class="mb-0 line-height-20 d-flex justify-content-between">
                                                    New customer registered
                                                    <i title="Mark as read" data-toggle="tooltip"
                                                       class="hide-show-toggler-item fa fa-circle-o font-size-11"></i>
                                                </p>
                                                <span class="text-muted small">20 min ago</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#"
                                           class="list-group-item px-3 d-flex align-items-center hide-show-toggler">
                                            <div>
                                                <figure class="avatar mr-2">
                                                <span
                                                    class="avatar-title bg-warning-bright text-warning rounded-circle">
                                                    <i class="ti-package"></i>
                                                </span>
                                                </figure>
                                            </div>
                                            <div class="flex-grow-1">
                                                <p class="mb-0 line-height-20 d-flex justify-content-between">
                                                    New Order Recieved
                                                    <i title="Mark as unread" data-toggle="tooltip"
                                                       class="hide-show-toggler-item fa fa-check font-size-11"></i>
                                                </p>
                                                <span class="text-muted small">45 sec ago</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#"
                                           class="list-group-item px-3 d-flex align-items-center hide-show-toggler">
                                            <div>
                                                <figure class="avatar mr-2">
                                                <span class="avatar-title bg-danger-bright text-danger rounded-circle">
                                                    <i class="ti-server"></i>
                                                </span>
                                                </figure>
                                            </div>
                                            <div class="flex-grow-1">
                                                <p class="mb-0 line-height-20 d-flex justify-content-between">
                                                    Server Limit Reached!
                                                    <i title="Mark as unread" data-toggle="tooltip"
                                                       class="hide-show-toggler-item fa fa-check font-size-11"></i>
                                                </p>
                                                <span class="text-muted small">55 sec ago</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#"
                                           class="list-group-item px-3 d-flex align-items-center hide-show-toggler">
                                            <div>
                                                <figure class="avatar mr-2">
                                                <span class="avatar-title bg-info-bright text-info rounded-circle">
                                                    <i class="ti-layers"></i>
                                                </span>
                                                </figure>
                                            </div>
                                            <div class="flex-grow-1">
                                                <p class="mb-0 line-height-20 d-flex justify-content-between">
                                                    Apps are ready for update
                                                    <i title="" data-toggle="tooltip"
                                                       class="hide-show-toggler-item fa fa-check font-size-11"
                                                       data-original-title="Mark as unread"></i>
                                                </p>
                                                <span class="text-muted small">Yesterday</span>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="px-3 py-2 text-right border-top">
                                <ul class="list-inline small">
                                    <li class="list-inline-item mb-0">
                                        <a href="#">Mark All Read</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a href="chat.html" title="Chat" class="nav-link">
                            <span class="badge badge-danger nav-link-notify">4</span>
                            <i data-feather="message-circle"></i>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="#" title="Cart" class="nav-link" data-toggle="dropdown">
                            <i data-feather="shopping-bag"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-big">
                            <div
                                class="bg-primary px-3 py-3 text-center d-flex justify-content-between align-items-center">
                                <h6 class="mb-0">Cart</h6>
                                <small class="opacity-7">4 products</small>
                            </div>
                            <div class="dropdown-scroll">
                                <div class="list-group list-group-flush">
                                    <a href="#" class="list-group-item px-3 d-flex">
                                        <div>
                                            <figure class="avatar mr-3">
                                                <img src="../../assets/media/image/products/product6.png" class="rounded"
                                                     alt="Flowerpot">
                                            </figure>
                                        </div>
                                        <div class="flex-grow-1">
                                            <p class="mb-0 line-height-20 d-flex justify-content-between">
                                                Flowerpot
                                                <i title="Close" data-toggle="tooltip"
                                                   class="hide-show-toggler-item ti-close"></i>
                                            </p>
                                            <span class="text-muted small">X $1,200</span>
                                        </div>
                                    </a>
                                    <a href="#" class="list-group-item px-3 d-flex">
                                        <div>
                                            <figure class="avatar mr-3">
                                                <img src="../../assets/media/image/products/product3.png" class="rounded"
                                                     alt="Plate">
                                            </figure>
                                        </div>
                                        <div class="flex-grow-1">
                                            <p class="mb-0 line-height-20 d-flex justify-content-between">
                                                Plate
                                                <i title="Close" data-toggle="tooltip"
                                                   class="hide-show-toggler-item ti-close"></i>
                                            </p>
                                            <span class="text-muted small">X $250</span>
                                        </div>
                                    </a>
                                    <a href="#" class="list-group-item px-3 d-flex">
                                        <div>
                                            <figure class="avatar mr-3">
                                                <img src="../../assets/media/image/products/product7.png"
                                                     class="rounded" alt="Wall Clock">
                                            </figure>
                                        </div>
                                        <div class="flex-grow-1">
                                            <p class="mb-0 line-height-20 d-flex justify-content-between">
                                                Wall Clock
                                                <i title="Close" data-toggle="tooltip"
                                                   class="hide-show-toggler-item ti-close"></i>
                                            </p>
                                            <span class="text-muted small">X $100</span>
                                        </div>
                                    </a>
                                    <a href="#" class="list-group-item px-3 d-flex">
                                        <div>
                                            <figure class="avatar mr-3">
                                                <img src="../../assets/media/image/products/product1.png" class="rounded"
                                                     alt="Vase">
                                            </figure>
                                        </div>
                                        <div class="flex-grow-1">
                                            <p class="mb-0 line-height-20 d-flex justify-content-between">
                                                Vase
                                                <i title="Close" data-toggle="tooltip"
                                                   class="hide-show-toggler-item ti-close"></i>
                                            </p>
                                            <span class="text-muted small">X $1,200</span>
                                        </div>
                                    </a>
                                    <a href="#" class="list-group-item px-3 d-flex">
                                        <div>
                                            <figure class="avatar mr-3">
                                                <img src="../../assets/media/image/products/product2.png" class="rounded"
                                                     alt="Glasses">
                                            </figure>
                                        </div>
                                        <div class="flex-grow-1">
                                            <p class="mb-0 line-height-20 d-flex justify-content-between">
                                                Glasses
                                                <i title="Close" data-toggle="tooltip"
                                                   class="hide-show-toggler-item ti-close"></i>
                                            </p>
                                            <span class="text-muted small">X $200</span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="px-3 py-2 border-top text-right">
                                <p class="d-flex justify-content-between align-items-center mb-1 small">
                                    <span>Sub Total</span>
                                    <span>$1,650</span>
                                </p>
                                <p class="d-flex justify-content-between align-items-center mb-1 small">
                                    <span>Taxes</span>
                                    <span>$15</span>
                                </p>
                                <p class="d-flex justify-content-between align-items-center mb-1 small font-weight-bold">
                                    <span>Total</span>
                                    <span>$1,675</span>
                                </p>
                                <button class="btn btn-primary btn-block mt-2">
                                    Order and Payment <i class="ti-arrow-right ml-2"></i>
                                </button>
                            </div>
                        </div>
                    </li>

                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link" title="Settings" data-sidebar-target="#settings">
                            <i data-feather="settings"></i>
                        </a>
                    </li>

                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" title="User menu" data-toggle="dropdown">
                            <span class="mr-2 d-sm-inline d-none">
                                Hi! <strong>Yusuf Islam</strong>
                            </span>
                            <figure class="avatar avatar-sm">
                                <img src="../../assets/media/image/user/man_avatar3.jpg"
                                     class="rounded-circle"
                                     alt="avatar">
                            </figure>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-big">
                            <div class="text-center py-4"
                                 data-background-image="../../assets/media/image/image1.jpg">
                                <figure class="avatar avatar-lg mb-3 border-0">
                                    <img src="../../assets/media/image/user/man_avatar3.jpg"
                                         class="rounded-circle" alt="image">
                                </figure>
                                <h5 class="mb-0">Yusuf Islam</h5>
                            </div>
                            <div class="list-group list-group-flush">
                                <a href="profile.html" class="list-group-item">Profile</a>
                                <a href="#" class="list-group-item" data-sidebar-target="#settings">Settings</a>
                                <a href="login.html" class="list-group-item text-danger">Sign Out!</a>
                            </div>
                            <div class="pb-0 p-4">
                                <div class="mb-4">
                                    <h6 class="d-flex justify-content-between">
                                        Completed Tasks
                                        <span class="float-right">%68</span>
                                    </h6>
                                    <div class="progress" style="height:5px;">
                                        <div class="progress-bar bg-secondary" role="progressbar"
                                             style="width: 68%;" aria-valuenow="68" aria-valuemin="0"
                                             aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <div>
                                    <h6 class="d-flex justify-content-between">
                                        Storage
                                        <span>%25</span>
                                    </h6>
                                    <div class="progress" style="height: 5px;">
                                        <div class="progress-bar bg-success" role="progressbar" style="width: 40%;"
                                             aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>

            <ul class="navbar-nav ml-auto">
                <li class="nav-item header-toggler">
                    <a href="#" class="nav-link">
                        <i class="ti-arrow-down"></i>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <!-- ./ Header -->

    <!-- Content wrapper -->
    <div class="content-wrapper">
        <!-- Navigation -->
        <div class="navigation">
            <!-- Logo -->
            <div class="navigation-header">
                <a class="navigation-logo" href=index-2.html>
                    <img class="logo" src="../../assets/media/image/logo/logo.png" alt="logo">
                    <img class="dark-logo" src="../../assets/media/image/logo/dark-logo.png" alt="dark logo">
                    <img class="small-logo" src="../../assets/media/image/logo/small-logo.png" alt="small logo">
                    <img class="small-dark-logo" src="../../assets/media/image/logo/small-dark-logo.png" alt="small dark logo">
                </a>
                <a href="#" class="small-navigation-toggler"></a>
                <a href="#" class="btn btn-danger mobile-navigation-toggler">
                    <i class="ti-close"></i>
                </a>
            </div>
            <!-- ./ Logo -->

            <!-- Menu wrapper -->
            <div class="navigation-menu-wrapper">
                <!-- Menu tab -->
                <div class="navigation-menu-tab">
                    <ul>
                        <li>
                            <a href="#" data-menu-target="#dashboards">
                                <span class="menu-tab-icon">
                                    <i data-feather="pie-chart"></i>
                                </span>
                                <span>Dashboards</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" data-menu-target="#apps">
                                <span class="menu-tab-icon">
                                    <i data-feather="globe"></i>
                                </span>
                                <span>Apps</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" data-menu-target="#components">
                                <span class="menu-tab-icon">
                                    <i data-feather="layers"></i>
                                </span>
                                <span>Components</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" data-menu-target="#forms">
                                <span class="menu-tab-icon">
                                    <i data-feather="mouse-pointer"></i>
                                </span>
                                <span>Forms</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" data-menu-target="#plugins">
                                <span class="menu-tab-icon">
                                    <i data-feather="gift"></i>
                                </span>
                                <span>Plugins</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" data-menu-target="#pages">
                                <span class="menu-tab-icon">
                                    <i data-feather="copy"></i>
                                </span>
                                <span>Pages</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" data-menu-target="#other">
                                <span class="menu-tab-icon">
                                    <i data-feather="arrow-up-right"></i>
                                </span>
                                <span>Other</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- ./ Menu tab -->

                <!-- Menu body -->
                <div class="navigation-menu-body">
                    <ul id="dashboards">
                        <li class="navigation-divider">Dashboards</li>
                        <li>
                            <a  href="ecommerce-dashboard.html">
                                <span class="nav-link-icon" data-feather="shopping-cart"></span>
                                <span>E-commerce</span>
                            </a>
                        </li>
                        <li>
                            <a  href="analytics-dashboard.html">
                                <span class="nav-link-icon" data-feather="bar-chart-2"></span>
                                <span>Analytics</span>
                                <span class="badge badge-success">New</span>
                            </a>
                        </li>
                        <li>
                            <a  href="helpdesk-dashboard.html">
                                <span class="nav-link-icon" data-feather="life-buoy"></span>
                                <span>Helpdesk</span>
                            </a>
                        </li>
                        <li class="navigation-divider">E-commerce Pages</li>
                        <li>
                            <a  href="orders.html">
                                <span class="nav-link-icon" data-feather="box"></span>
                                <span>Orders</span>
                            </a>
                        </li>
                        <li>
                            <a  href="product-list.html">
                                <span class="nav-link-icon" data-feather="list"></span>
                                <span>Product List</span>
                            </a>
                        </li>
                        <li>
                            <a  href="product-grid.html">
                                <span class="nav-link-icon" data-feather="grid"></span>
                                <span>Product Grid</span>
                            </a>
                        </li>
                        <li>
                            <a  href="product-detail.html">
                                <span class="nav-link-icon" data-feather="file-text"></span>
                                <span>Product Detail</span>
                            </a>
                        </li>
                    </ul>
                    <ul id="apps">
                        <li class="navigation-divider">Apps</li>
                        <li>
                            <a  href="chat.html">
                                <span class="nav-link-icon" data-feather="message-circle"></span>
                                <span>Chat</span>
                                <span class="badge badge-danger">5</span>
                            </a>
                        </li>
                        <li>
                            <a  href="mail.html">
                                <span class="nav-link-icon" data-feather="mail"></span>
                                <span>Mail</span>
                            </a>
                        </li>
                        <li>
                            <a  href="todo-list.html">
                                <span class="nav-link-icon" data-feather="check-circle"></span>
                                <span>Todo List</span>
                                <span class="badge badge-warning small-badge">2</span>
                            </a>
                        </li>
                        <li>
                            <a  href="file-manager.html">
                                <span class="nav-link-icon" data-feather="file"></span>
                                <span>File Manager</span>
                            </a>
                        </li>
                        <li>
                            <a  href="calendar.html">
                                <span class="nav-link-icon" data-feather="calendar"></span>
                                <span>Calendar</span>
                            </a>
                        </li>
                        <li>
                            <a  href="gallery.html">
                                <span class="nav-link-icon" data-feather="image"></span>
                                <span>Gallery</span>
                            </a>
                        </li>
                        <li>
                            <a  href="invoice.html">
                                <span class="nav-link-icon" data-feather="book"></span>
                                <span>Invoice</span>
                            </a>
                        </li>
                    </ul>
                    <ul id="components">
                        <li class="navigation-divider">Components</li>
                        <li>
                            <a href="#">
                                <span class="nav-link-icon">
                                    <i data-feather="layers"></i>
                                </span>
                                <span>Basic Components</span>
                            </a>
                            <ul>
                                <li>
                                    <a  href="alert.html">Alerts</a></li>
                                <li>
                                    <a  href="accordion.html">Accordion</a></li>
                                <li>
                                    <a  href="buttons.html">Buttons</a></li>
                                <li>
                                    <a  href="dropdown.html">Dropdown</a></li>
                                <li>
                                    <a  href="list-group.html">List Group</a></li>
                                <li>
                                    <a  href="pagination.html">Pagination</a></li>
                                <li>
                                    <a  href="typography.html">Typography</a></li>
                                <li>
                                    <a  href="media-object.html">Media Object</a>
                                </li>
                                <li>
                                    <a  href="progress.html">Progress</a></li>
                                <li>
                                    <a  href="modal.html">Modal</a></li>
                                <li>
                                    <a  href="spinners.html">Spinners</a></li>
                                <li>
                                    <a  href="navs.html">Navs</a></li>
                                <li>
                                    <a  href="tab.html">Tab</a></li>
                                <li>
                                    <a  href="tooltip.html">Tooltip</a></li>
                                <li>
                                    <a  href="popovers.html">Popovers</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">
                                <span class="nav-link-icon">
                                    <i data-feather="square"></i>
                                </span>
                                <span>Cards</span>
                            </a>
                            <ul>
                                <li>
                                    <a  href="basic-cards.html">Basic Cards </a></li>
                                <li>
                                    <a  href="image-cards.html">Image Cards </a></li>
                                <li>
                                    <a  href="scrollable-cards.html">Scrollable Cards</a></li>
                                <li>
                                    <a  href="other-cards.html">Others Cards</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">
                                <span class="nav-link-icon">
                                    <i data-feather="grid"></i>
                                </span>
                                <span>Tables</span>
                            </a>
                            <ul>
                                <li>
                                    <a  href="basic-tables.html">Basic Tables</a></li>
                                <li>
                                    <a  href="dataTable.html">Datatable</a></li>
                                <li>
                                    <a  href="responsive-tables.html">Responsive Tables</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a  href="avatar.html">
                                <span class="nav-link-icon">
                                    <i data-feather="aperture"></i>
                                </span>
                                <span>Avatar</span>
                            </a>
                        </li>
                        <li>
                            <a  href="icons.html">
                                <span class="nav-link-icon">
                                    <i data-feather="anchor"></i>
                                </span>
                                <span>Icons</span>
                            </a>
                        </li>
                        <li>
                            <a  href="colors.html">
                                <span class="nav-link-icon">
                                    <i data-feather="droplet"></i>
                                </span>
                                <span>Colors</span>
                            </a>
                        </li>
                        <li>
                            <a  href="divider.html">
                                <span class="nav-link-icon">
                                    <i data-feather="git-commit"></i>
                                </span>
                                <span>Divider</span>
                            </a>
                        </li>
                    </ul>
                    <ul id="forms">
                        <li class="navigation-divider">Forms</li>
                        <li>
                            <a  href="basic-forms.html">
                                <span class="nav-link-icon" data-feather="book"></span>
                                <span>Basic Forms</span>
                            </a>
                        </li>
                        <li>
                            <a  href="custom-forms.html">
                                <span class="nav-link-icon" data-feather="disc"></span>
                                <span>Custom Forms</span>
                            </a>
                        </li>
                        <li>
                            <a  href="advanced-forms.html">
                                <span class="nav-link-icon" data-feather="framer"></span>
                                <span>Advanced Forms</span>
                            </a>
                        </li>
                        <li>
                            <a  href="form-validation.html">
                                <span class="nav-link-icon" data-feather="toggle-left"></span>
                                <span>Form Validation</span>
                            </a>
                        </li>
                        <li>
                            <a  href="form-wizard.html">
                                <span class="nav-link-icon" data-feather="sliders"></span>
                                <span>Form Wizard</span>
                            </a>
                        </li>
                        <li>
                            <a  href="form-repeater.html">
                                <span class="nav-link-icon" data-feather="repeat"></span>
                                <span>Form Repeater</span>
                            </a>
                        </li>
                    </ul>
                    <ul id="plugins">
                        <li class="navigation-divider">Plugins</li>
                        <li>
                            <a  href="sweet-alert.html">
                                <span class="nav-link-icon" data-feather="alert-triangle"></span>
                                <span>Sweet Alert</span>
                            </a>
                        </li>
                        <li>
                            <a  href="lightbox.html">
                                <span class="nav-link-icon" data-feather="crop"></span>
                                <span>Lightbox</span>
                            </a>
                        </li>
                        <li>
                            <a  href="toast.html">
                                <span class="nav-link-icon" data-feather="clipboard"></span>
                                <span>Toast</span>
                            </a>
                        </li>
                        <li>
                            <a  href="tour.html">
                                <span class="nav-link-icon" data-feather="sliders"></span>
                                <span>Tour</span>
                            </a>
                        </li>
                        <li>
                            <a  href="slick-slide.html">
                                <span class="nav-link-icon" data-feather="layers"></span>
                                <span>Slick Slide</span>
                            </a>
                        </li>
                        <li>
                            <a  href="nestable.html">
                                <span class="nav-link-icon" data-feather="align-right"></span>
                                <span>Nestable</span>
                            </a>
                        </li>
                        <li>
                            <a  href="file-upload.html">
                                <span class="nav-link-icon" data-feather="upload-cloud"></span>
                                <span>File Upload</span>
                            </a>
                        </li>
                        <li>
                            <a  href="datepicker.html">
                                <span class="nav-link-icon" data-feather="calendar"></span>
                                <span>Datepicker</span>
                            </a>
                        </li>
                        <li>
                            <a  href="timepicker.html">
                                <span class="nav-link-icon" data-feather="clock"></span>
                                <span>Timepicker</span>
                            </a>
                        </li>
                        <li>
                            <a  href="colorpicker.html">
                                <span class="nav-link-icon" data-feather="eye"></span>
                                <span>Colorpicker</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="nav-link-icon" data-feather="activity"></span>
                                <span>Charts</span>
                            </a>
                            <ul>
                                <li>
                                    <a  href="apexchart.html">Apex Chart</a>
                                </li>
                                <li>
                                    <a  href="justgage.html">Justgage</a>
                                </li>
                                <li>
                                    <a  href="peity.html">Peity</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">
                                <span class="nav-link-icon">
                                    <i data-feather="map-pin"></i>
                                </span>
                                <span>Maps</span>
                            </a>
                            <ul>
                                <li>
                                    <a  href="google-map.html">Google Map</a>
                                </li>
                                <li>
                                    <a  href="vector-map.html">Vector Map</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <ul id="pages">
                        <li class="navigation-divider">Pages</li>
                        <li>
                            <a href="#">
                                <span class="nav-link-icon" data-feather="users"></span>
                                <span>User Pages</span>
                            </a>
                            <ul>
                                <li>
                                    <a  class="active"
                                        href="profile.html">Profile</a></li>
                                <li>
                                    <a  href="user-list.html">User List</a></li>
                                <li>
                                    <a  href="user-edit.html">User Edit</a></li>
                                <li><a href="login.html" target="_blank">Login</a></li>
                                <li><a href="register.html" target="_blank">Register</a></li>
                                <li><a href="recovery-password.html" target="_blank">Recovery Password</a>
                                </li>
                                <li><a href="lock-screen.html" target="_blank">Lock Screen</a></li>
                            </ul>
                        </li>
                        <li>
                            <a  href="timeline.html">
                                <span class="nav-link-icon" data-feather="hash"></span>
                                <span>Timeline</span>
                            </a>
                        </li>
                        <li>
                            <a  href="pricing-table.html">
                                <span class="nav-link-icon" data-feather="dollar-sign"></span>
                                <span>Pricing Table</span>
                            </a>
                        </li>
                        <li>
                            <a  href="pricing-table-2.html">
                                <span class="nav-link-icon" data-feather="dollar-sign"></span>
                                <span>Pricing Table</span>
                                2</a>
                        </li>
                        <li>
                            <a  href="search-result.html">
                                <span class="nav-link-icon" data-feather="search"></span>
                                <span>Search Result</span>
                            </a>
                        </li>
                        <li>
                            <a  href="blank-page.html">
                                <span class="nav-link-icon" data-feather="layout"></span>
                                <span>Blank Page</span>

                            </a>
                        </li>
                        <li>
                            <a href="404.html" target="_blank">
                                <span class="nav-link-icon" data-feather="frown"></span>
                                <span>404</span>
                            </a>
                        </li>
                        <li>
                            <a href="503.html" target="_blank">
                                <span class="nav-link-icon" data-feather="frown"></span>
                                <span>503</span>
                            </a>
                        </li>
                        <li>
                            <a href="mean-at-work.html" target="_blank">
                                <span class="nav-link-icon" data-feather="tool"></span>
                                <span>Mean at Work</span>
                            </a>
                        </li>
                    </ul>
                    <ul id="other">
                        <li class="navigation-divider">Other</li>
                        <li>
                            <a href="#">
                                <span class="nav-link-icon">
                                    <i data-feather="mail"></i>
                                </span>
                                <span>Email Templates</span>
                            </a>
                            <ul>
                                <li><a target="_blank" href="email-template-basic.html">Basic</a></li>
                                <li><a target="_blank" href="email-template-alert.html">Alert</a></li>
                                <li><a target="_blank" href="email-template-billing.html">Billing</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">
                                <span class="nav-link-icon">
                                    <i data-feather="menu"></i>
                                </span>
                                <span>Menu Level</span>
                            </a>
                            <ul>
                                <li>
                                    <a href="#">Menu Level</a>
                                    <ul>
                                        <li>
                                            <a href="#">Menu Level </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <!-- ./ Menu body -->
            </div>
            <!-- ./ Menu wrapper -->
        </div>
        <!-- ./ Navigation -->

        <!-- Content body -->
        <div class="content-body">
            <!-- Content -->
            <div class="content">
                
    <div class="row">
        <div class="col-md-12">

            <div class="profile-container" style="background: url(../../assets/media/image/image1.jpg)">
                <div class="profile-bar">
                    <div class="d-flex align-items-center">
                        <figure class="avatar mr-3">
                            <img src="../../assets/media/image/user/man_avatar3.jpg"
                                 class="rounded-circle" alt="...">
                        </figure>
                        <div>
                            <h4 class="mb-1">Yusuf Islam</h4>
                            <small class="opacity-7">Web Developer</small>
                        </div>
                    </div>
                    <div class="profile-menu">
                        <ul class="nav nav-pills flex-column flex-sm-row" id="myTab" role="tablist">
                            <li class="flex-sm-fill text-sm-center nav-item">
                                <a class="nav-link active" id="home-tab22" data-toggle="tab" href="#home"
                                   role="tab" aria-selected="true">Posts</a>
                            </li>
                            <li class="flex-sm-fill text-sm-center nav-item">
                                <a class="nav-link" id="timeline-tab" data-toggle="tab" href="#timeline"
                                   role="tab" aria-selected="true">Timeline</a>
                            </li>
                            <li class="flex-sm-fill text-sm-center nav-item">
                                <a class="nav-link" id="connections-tab1" data-toggle="tab" href="#connections"
                                   role="tab"
                                   aria-selected="false">
                                    Connections
                                </a>
                            </li>
                            <li class="flex-sm-fill text-sm-center nav-item">
                                <a class="nav-link" id="earnings-tab" data-toggle="tab" href="#earnings"
                                   role="tab"
                                   aria-selected="false">Earnings</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-8">

                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex mb-3">
                                        <div class="d-flex">
                                            <figure class="avatar mr-3">
                                                <img src="../../assets/media/image/user/man_avatar1.jpg"
                                                     class="rounded-circle" alt="...">
                                            </figure>
                                            <div class="d-inline-block">
                                                <div><strong>Martina Ash</strong> shared a link</div>
                                                <small class="text-muted">7 hours ago</small>
                                            </div>
                                        </div>
                                        <div class="dropdown ml-auto">
                                            <a href="#" class="btn btn-outline-light btn-sm btn-floating" data-toggle="dropdown">
                                                <i class="fa fa-ellipsis-h"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a href="#" class="dropdown-item">Share</a>
                                                <a href="#" class="dropdown-item">Edit</a>
                                                <a href="#" class="dropdown-item">Delete</a>
                                            </div>
                                        </div>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet dolor eos id
                                        ipsa
                                        nobis omnis, tenetur? Dolor officiis omnis quo?</p>
                                    <a href="#">
                                        <div class="row no-gutters border border-radius-1">
                                            <div class="col-3">
                                                <img src="../../assets/media/image/photo1.jpg"
                                                     class="img-fluid" alt="image/">
                                            </div>
                                            <div class="col-9 p-3">
                                                <h5>Algolia Integration</h5>
                                                <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing
                                                    elit. Cumque dolor, eos laudantium maxime perferendis
                                                    veritatis.</p>
                                                <small class="text-primary">https://themeforest.net/</small>
                                            </div>
                                        </div>
                                    </a>
                                    <div class="d-flex justify-content-between align-items-center mt-4">
                                        <div>
                                            <a href="#" title="Like" data-toggle="tooltip">
                                                <i data-feather="heart" class="width-17 height-17 mr-1"></i> 42
                                            </a>
                                        </div>
                                        <div>
                                            <a href="#" title="Comments" data-toggle="tooltip">
                                                <i data-feather="message-square"
                                                   class="width-17 height-17 mr-1"></i> 3
                                            </a>
                                            <a href="#" class="ml-3" title="Share" data-toggle="tooltip">
                                                <i data-feather="share-2" class="width-17 height-17 mr-1"></i> 1
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex mb-3">
                                        <div class="d-flex">
                                            <figure class="avatar mr-3">
                                                <img src="../../assets/media/image/user/man_avatar3.jpg"
                                                     class="rounded-circle" alt="...">
                                            </figure>
                                            <div class="d-inline-block">
                                                <div><strong>Martina Ash</strong> shared a link</div>
                                                <small class="text-muted">7 hours ago</small>
                                            </div>
                                        </div>
                                        <div class="dropdown ml-auto">
                                            <a href="#" class="btn btn-outline-light btn-floating btn-sm" data-toggle="dropdown">
                                                <i class="fa fa-ellipsis-h"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a href="#" class="dropdown-item">Share</a>
                                                <a href="#" class="dropdown-item">Edit</a>
                                                <a href="#" class="dropdown-item">Delete</a>
                                            </div>
                                        </div>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam doloremque
                                        eveniet illo minus nemo obcaecati, voluptatem? At corporis cum dolorem eos
                                        impedit in magni officiis quibusdam, ratione sequi totam voluptatum.</p>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet dolor eos id
                                        ipsa
                                        nobis omnis, tenetur? Dolor officiis omnis quo?</p>
                                    <div class="d-flex justify-content-between align-items-center mt-4">
                                        <div>
                                            <a href="#" title="Like" data-toggle="tooltip">
                                                <i data-feather="heart"
                                                   class="width-17 height-17 mr-1 text-danger"></i> 142
                                            </a>
                                        </div>
                                        <div>
                                            <a href="#" title="Comments" data-toggle="tooltip">
                                                <i data-feather="message-square"
                                                   class="width-17 height-17 mr-1"></i> 13
                                            </a>
                                            <a href="#" class="ml-3" title="Share" data-toggle="tooltip">
                                                <i data-feather="share-2" class="width-17 height-17 mr-1"></i> 4
                                            </a>
                                        </div>
                                    </div>
                                    <!-- People who wrote, liked, or shared a comment -->
                                    <div class="mt-4">
                                        <div class="card card-body border p-3">
                                            <div class="d-flex mb-3">
                                                <div class="d-flex align-items-center">
                                                    <figure class="avatar avatar-sm mr-3">
                                                        <img
                                                            src="../../assets/media/image/user/man_avatar4.jpg"
                                                            class="rounded-circle" alt="...">
                                                    </figure>
                                                    <div class="d-inline-block">
                                                        <div><strong>Martina Ash</strong> shared a link</div>
                                                        <small class="text-muted">7 hours ago</small>
                                                    </div>
                                                </div>
                                                <div class="dropdown ml-auto">
                                                    <a href="#" class="btn btn-outline-light btn-floating btn-sm" data-toggle="dropdown">
                                                        <i class="fa fa-ellipsis-h"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a href="#" class="dropdown-item">Share</a>
                                                        <a href="#" class="dropdown-item">Edit</a>
                                                        <a href="#" class="dropdown-item">Delete</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus,
                                                ducimus?</p>
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div>
                                                    <a href="#" title="Like" data-toggle="tooltip">
                                                        <i data-feather="heart" class="width-17 height-17 mr-1"></i>
                                                        3
                                                    </a>
                                                    <a href="#" class="ml-3">
                                                        Reply
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card card-body border p-3">
                                            <div class="d-flex mb-3">
                                                <div class="d-flex align-items-center">
                                                    <figure class="avatar avatar-sm mr-3">
                                                        <img
                                                            src="../../assets/media/image/user/man_avatar1.jpg"
                                                            class="rounded-circle" alt="...">
                                                    </figure>
                                                    <div class="d-inline-block">
                                                        <div><strong>Martina Ash</strong> shared a link</div>
                                                        <small class="text-muted">7 hours ago</small>
                                                    </div>
                                                </div>
                                                <div class="dropdown ml-auto">
                                                    <a href="#" class="btn btn-outline-light btn-floating btn-sm" data-toggle="dropdown">
                                                        <i class="fa fa-ellipsis-h"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a href="#" class="dropdown-item">Share</a>
                                                        <a href="#" class="dropdown-item">Edit</a>
                                                        <a href="#" class="dropdown-item">Delete</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A, ad,
                                                assumenda at atque corporis culpa earum id illum impedit laborum
                                                maxime
                                                minus nisi omnis quod sequi suscipit totam veritatis voluptatum.</p>
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div>
                                                    <a href="#" title="Like" data-toggle="tooltip">
                                                        <i data-feather="heart" class="width-17 height-17 mr-1"></i>
                                                        1
                                                    </a>
                                                    <a href="#" class="ml-3">
                                                        Reply
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <form class="d-flex">
                                            <div>
                                                <figure class="avatar mr-3">
                                                    <img
                                                        src="../../assets/media/image/user/women_avatar1.jpg"
                                                        class="rounded-circle" alt="...">
                                                </figure>
                                            </div>
                                            <div class="flex-grow-1">
                                                <div class="form-group">
                                                    <textarea rows="2" class="form-control"
                                                              placeholder="Post comment for @Martina"></textarea>
                                                </div>
                                                <button class="btn btn-primary">Submit</button>
                                            </div>
                                        </form>
                                    </div>
                                    <!-- ./ People who wrote, liked, or shared a comment -->
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex mb-3">
                                        <div class="d-flex">
                                            <figure class="avatar mr-3">
                                                <img src="../../assets/media/image/user/women_avatar2.jpg"
                                                     class="rounded-circle" alt="...">
                                            </figure>
                                            <div class="d-inline-block">
                                                <div>Anna Mull</div>
                                                <small class="text-muted">7 hours ago</small>
                                            </div>
                                        </div>
                                        <div class="dropdown ml-auto">
                                            <a href="#" class="btn btn-outline-light btn-floating btn-sm" data-toggle="dropdown">
                                                <i class="fa fa-ellipsis-h"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a href="#" class="dropdown-item">Share</a>
                                                <a href="#" class="dropdown-item">Edit</a>
                                                <a href="#" class="dropdown-item">Delete</a>
                                            </div>
                                        </div>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet dolor eos id
                                        ipsa
                                        nobis omnis, tenetur? Dolor officiis omnis quo?</p>
                                    <div class="row row-xs">
                                        <div class="col-6">
                                            <img src="../../assets/media/image/photo9.jpg"
                                                 class="w-100 border-radius-1"
                                                 alt="image/">
                                        </div>
                                        <div class="col-6">
                                            <img src="../../assets/media/image/photo10.jpg"
                                                 class="w-100 border-radius-1"
                                                 alt="image/">
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-between align-items-center mt-4">
                                        <div>
                                            <a href="#" title="Like" data-toggle="tooltip">
                                                <i data-feather="heart"
                                                   class="width-17 height-17 mr-1"></i> 311
                                            </a>
                                        </div>
                                        <div>
                                            <a href="#" title="Comments" data-toggle="tooltip">
                                                <i data-feather="message-square"
                                                   class="width-17 height-17 mr-1"></i> 33
                                            </a>
                                            <a href="#" class="ml-3" title="Share" data-toggle="tooltip">
                                                <i data-feather="share-2" class="width-17 height-17 mr-1"></i> 14
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade show" id="timeline" role="tabpanel">
                            <div class="card">
                                <div class="card-body">
                                    <h6 class="card-title">Timeline</h6>
                                    <div class="timeline">
                                        <div class="timeline-item">
                                            <div>
                                                <a href="#">
                                                    <figure class="avatar avatar-sm mr-3 bring-forward">
                                                        <img
                                                            src="../../assets/media/image/user/man_avatar2.jpg"
                                                            class="rounded-circle" alt="image/">
                                                    </figure>
                                                </a>
                                            </div>
                                            <div>
                                                <h6 class="d-flex justify-content-between mb-4">
                                            <span>
                                                <a href="#">Martina Ash</a> shared a link
                                            </span>
                                                    <span class="text-muted font-weight-normal">Tue 8:17pm</span>
                                                </h6>
                                                <a href="#">
                                                    <div class="mb-3 border border-radius-1">
                                                        <div class="row no-gutters">
                                                            <div class="col-2">
                                                                <img
                                                                    src="../../assets/media/image/photo1.jpg"
                                                                    class="w-100"
                                                                    alt="image/">
                                                            </div>
                                                            <div class="col-10 p-3">
                                                                <h5 class="line-height-16">Connection title</h5>
                                                                Lorem ipsum dolor sit amet, consectetur adipisicing
                                                                elit. Facilis, voluptatibus.
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="timeline-item">
                                            <div>
                                                <figure class="avatar avatar-sm mr-3 bring-forward">
                                                        <span
                                                            class="avatar-title bg-success-bright text-success rounded-circle">C</span>
                                                </figure>
                                            </div>
                                            <div>
                                                <h6 class="d-flex justify-content-between mb-4">
                                            <span>
                                                <a href="#">Jonny Richie</a> shared a post
                                            </span>
                                                    <span class="text-muted font-weight-normal">Tue 8:17pm</span>
                                                </h6>
                                                <a href="#">
                                                    <div class="mb-3 border p-3 border-radius-1">
                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab
                                                        aliquid aperiam commodi culpa debitis deserunt enim itaque
                                                        laborum minima neque nostrum pariatur perspiciatis, placeat
                                                        quidem, ratione recusandae reiciendis sapiente, ut veritatis
                                                        vitae. Beatae dolore hic odio! Esse officiis quidem
                                                        voluptate.
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="timeline-item">
                                            <div>
                                                <figure class="avatar avatar-sm mr-3 bring-forward">
                                                        <span
                                                            class="avatar-title bg-info-bright text-info rounded-circle">K</span>
                                                </figure>
                                            </div>
                                            <div>
                                                <h6 class="d-flex justify-content-between mb-4">
                                            <span>
                                                <a href="#">Jonny Richie</a> attached file
                                            </span>
                                                    <span class="text-muted font-weight-normal">Tue 8:17pm</span>
                                                </h6>
                                                <a href="#">
                                                    <div class="mb-3 border p-3 border-radius-1">
                                                        <i class="fa fa-file-pdf-o mr-2"></i> filename12334.pdf
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="timeline-item">
                                            <div>
                                                <figure class="avatar avatar-sm mr-3 bring-forward">
                                                    <span class="avatar-title bg-warning-bright text-warning rounded-circle">
                                                        <i class="ti-image/"></i>
                                                    </span>
                                                </figure>
                                            </div>
                                            <div>
                                                <h6 class="d-flex justify-content-between mb-4">
                                            <span>
                                                <a href="#">Jonny Richie</a> shared files
                                            </span>
                                                    <span class="text-muted font-weight-normal">Tue 8:17pm</span>
                                                </h6>
                                                <div class="row row-xs">
                                                    <div class="col-xl-3 col-lg-4 col-md-6">
                                                        <figure>
                                                            <img
                                                                src="../../assets/media/image/portfolio-five.jpg"
                                                                class="w-100 border-radius-1" alt="image/">
                                                        </figure>
                                                    </div>
                                                    <div class="col-xl-3 col-lg-4 col-md-6">
                                                        <figure>
                                                            <img
                                                                src="../../assets/media/image/portfolio-one.jpg"
                                                                class="w-100 border-radius-1" alt="image/">
                                                        </figure>
                                                    </div>
                                                    <div class="col-xl-3 col-lg-4 col-md-6">
                                                        <figure>
                                                            <img
                                                                src="../../assets/media/image/portfolio-three.jpg"
                                                                class="w-100 border-radius-1" alt="image/">
                                                        </figure>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="timeline-item">
                                            <div>
                                                <figure class="avatar avatar-sm mr-3 bring-forward">
                                                    <span class="avatar-title bg-youtube rounded-circle">Y</span>
                                                </figure>
                                            </div>
                                            <div>
                                                <h6 class="d-flex justify-content-between">
                                           <span>
                                               <a href="#">Jonny Richie</a> shared video
                                           </span>
                                                    <span class="text-muted font-weight-normal">Tue 8:17pm</span>
                                                </h6>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto,
                                                    placeat.</p>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div
                                                            class="embed-responsive embed-responsive-16by9 m-t-b-5">
                                                            <iframe class="embed-responsive-item"
                                                                    src="https://www.youtube.com/embed/l-epKcOA7RQ"
                                                                    allowfullscreen></iframe>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="connections" role="tabpanel">
                            <div class="card">
                                <div class="card-body">
                                    <h6 class="card-title">Connections</h6>
                                    <div class="row">
                                        <div class="col-lg-6 col-md-12">
                                            <div class="card border">
                                                <div class="card-body p-3">
                                                    <div class="d-flex align-items-center">
                                                        <div>
                                                            <figure class="avatar mr-3">
                                                                <img
                                                                    src="../../assets/media/image/user/women_avatar2.jpg"
                                                                    class="rounded-circle" alt="...">
                                                            </figure>
                                                        </div>
                                                        <div>
                                                            <p class="mb-0">Rosemary Krout</p>
                                                            <p class="small text-muted mb-0 line-height-15">
                                                                Team Leader
                                                            </p>
                                                        </div>
                                                        <a href="#" class="ml-auto" title="Message"
                                                           data-toggle="tooltip">
                                                            <i class="ti-comment"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-12">
                                            <div class="card border">
                                                <div class="card-body p-3">
                                                    <div class="d-flex align-items-center">
                                                        <div>
                                                            <figure class="avatar mr-3">
                                                                <img
                                                                    src="../../assets/media/image/user/women_avatar1.jpg"
                                                                    class="rounded-circle" alt="...">
                                                            </figure>
                                                        </div>
                                                        <div>
                                                            <p class="mb-0">Miller Edwins</p>
                                                            <p class="small text-muted mb-0 line-height-15">
                                                                Team Leader
                                                            </p>
                                                        </div>
                                                        <a href="#" class="ml-auto" title="Message"
                                                           data-toggle="tooltip">
                                                            <i class="ti-comment"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-12">
                                            <div class="card border">
                                                <div class="card-body p-3">
                                                    <div class="d-flex align-items-center">
                                                        <div>
                                                            <figure class="avatar mr-3">
                                                                <img
                                                                    src="../../assets/media/image/user/women_avatar3.jpg"
                                                                    class="rounded-circle" alt="...">
                                                            </figure>
                                                        </div>
                                                        <div>
                                                            <p class="mb-0">Cahra Smiz</p>
                                                            <p class="small text-muted mb-0 line-height-15">
                                                                Agent
                                                            </p>
                                                        </div>
                                                        <a href="#" class="ml-auto" title="Message"
                                                           data-toggle="tooltip">
                                                            <i class="ti-comment"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-12">
                                            <div class="card border">
                                                <div class="card-body p-3">
                                                    <div class="d-flex align-items-center">
                                                        <div>
                                                            <figure class="avatar mr-3">
                                                                <img
                                                                    src="../../assets/media/image/user/women_avatar4.jpg"
                                                                    class="rounded-circle" alt="...">
                                                            </figure>
                                                        </div>
                                                        <div>
                                                            <p class="mb-0">Burgess Attwool</p>
                                                            <p class="small text-muted mb-0 line-height-15">
                                                                Contact
                                                            </p>
                                                        </div>
                                                        <a href="#" class="ml-auto" title="Message"
                                                           data-toggle="tooltip">
                                                            <i class="ti-comment"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-12">
                                            <div class="card border">
                                                <div class="card-body p-3">
                                                    <div class="d-flex align-items-center">
                                                        <div>
                                                            <figure class="avatar mr-3">
                                                                <img
                                                                    src="../../assets/media/image/user/man_avatar2.jpg"
                                                                    class="rounded-circle" alt="...">
                                                            </figure>
                                                        </div>
                                                        <div>
                                                            <p class="mb-0">Allx Life</p>
                                                            <p class="small text-muted mb-0 line-height-15">
                                                                Agent
                                                            </p>
                                                        </div>
                                                        <a href="#" class="ml-auto" title="Message"
                                                           data-toggle="tooltip">
                                                            <i class="ti-comment"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-12">
                                            <div class="card border">
                                                <div class="card-body p-3">
                                                    <div class="d-flex align-items-center">
                                                        <div>
                                                            <figure class="avatar mr-3">
                                                                <img
                                                                    src="../../assets/media/image/user/man_avatar5.jpg"
                                                                    class="rounded-circle" alt="...">
                                                            </figure>
                                                        </div>
                                                        <div>
                                                            <p class="mb-0">Marti Sorbey</p>
                                                            <p class="small text-muted mb-0 line-height-15">
                                                                Contact
                                                            </p>
                                                        </div>
                                                        <a href="#" class="ml-auto" title="Message"
                                                           data-toggle="tooltip">
                                                            <i class="ti-comment"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="earnings" role="tabpanel">
                            <div class="card">
                                <div class="card-body">
                                    <h6 class="card-title mb-0">Earnings</h6>
                                </div>
                                <div class="table-responsive">
                                    <table class="table table-hover">
                                        <thead class="thead-light">
                                        <tr>
                                            <th>Date</th>
                                            <th>Item Sales Count</th>
                                            <th>Earnings</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>monday, 12</td>
                                            <td>
                                                3
                                            </td>
                                            <td>$400</td>
                                        </tr>
                                        <tr>
                                            <td>tuesday, 13</td>
                                            <td>
                                                2
                                            </td>
                                            <td>$400</td>
                                        </tr>
                                        <tr>
                                            <td>wednesday, 14</td>
                                            <td>
                                                3
                                            </td>
                                            <td>$420</td>
                                        </tr>
                                        <tr>
                                            <td>thursday, 15</td>
                                            <td>
                                                5
                                            </td>
                                            <td>$500</td>
                                        </tr>
                                        <tr>
                                            <td>friday, 15</td>
                                            <td>
                                                3
                                            </td>
                                            <td>$400</td>
                                        </tr>
                                        <tr>
                                            <td>saturday, 16</td>
                                            <td>
                                                3
                                            </td>
                                            <td>$400</td>
                                        </tr>
                                        <tr>
                                            <td>sunday, 17</td>
                                            <td>
                                                3
                                            </td>
                                            <td>$400</td>
                                        </tr>
                                        <tr>
                                            <td>monday, 18</td>
                                            <td>
                                                3
                                            </td>
                                            <td>$500</td>
                                        </tr>
                                        <tr>
                                            <td>tuesday, 19</td>
                                            <td>
                                                3
                                            </td>
                                            <td>$400</td>
                                        </tr>
                                        </tbody>
                                        <tfoot>
                                        <tr>
                                            <th></th>
                                            <th>28</th>
                                            <th>$3720</th>
                                        </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h6 class="card-title">About</h6>
                            <p>Quisque vel tellus sit amet quam efficitur sagittis. Fusce aliquam pulvinar
                                suscipit.</p>
                            <div>
                                <ul class="list-group list-group-flush mb-3">
                                    <li class="list-group-item px-0">Studied Mechanical Engineering at <br> <a class="link-1" href="#">Carnegie Mellon University</a></li>
                                    <li class="list-group-item px-0">Former manager at Stacks</li>
                                    <li class="list-group-item px-0">From Boston, Massachusetts</li>
                                    <li class="list-group-item px-0">Followed by 716 people</li>
                                </ul>
                            </div>
                            <button class="btn btn-primary mr-2">
                                <i class="ti-comment mr-2"></i> Send Message
                            </button>
                            <button class="btn btn-secondary">
                                <i class="ti-plus mr-2"></i> Follow
                            </button>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <h6 class="card-title d-flex justify-content-between align-items-center">
                                Photos
                                <a href="#" class="small">All</a>
                            </h6>
                            <div class="row row-xs">
                                <div class="col-lg-6 mb-3">
                                    <a href="#">
                                        <img class="img-fluid rounded"
                                             src="../../assets/media/image/portfolio-one.jpg"
                                             alt="image/">
                                    </a>
                                </div>
                                <div class="col-lg-6 mb-3">
                                    <a href="#">
                                        <img class="img-fluid rounded"
                                             src="../../assets/media/image/portfolio-two.jpg"
                                             alt="image/">
                                    </a>
                                </div>
                                <div class="col-lg-6 mb-3">
                                    <a href="#">
                                        <img class="img-fluid rounded"
                                             src="../../assets/media/image/portfolio-three.jpg"
                                             alt="image/">
                                    </a>
                                </div>
                                <div class="col-lg-6 mb-3">
                                    <a href="#">
                                        <img class="img-fluid rounded"
                                             src="../../assets/media/image/portfolio-four.jpg"
                                             alt="image/">
                                    </a>
                                </div>
                                <div class="col-lg-6 mb-3">
                                    <a href="#">
                                        <img class="img-fluid rounded"
                                             src="../../assets/media/image/portfolio-five.jpg"
                                             alt="image/">
                                    </a>
                                </div>
                                <div class="col-lg-6 mb-3">
                                    <a href="#">
                                        <img class="img-fluid rounded"
                                             src="../../assets/media/image/portfolio-six.jpg"
                                             alt="image/">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <h6 class="card-title d-flex justify-content-between align-items-center">
                                Followers
                                <a href="#" class="small">All</a>
                            </h6>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item d-flex align-items-center p-l-r-0">
                                    <figure class="avatar avatar-state-success m-r-15">
                                        <img src="../../assets/media/image/user/women_avatar5.jpg" class="rounded-circle" alt="image">
                                    </figure>
                                    <div>
                                        <h6 class="m-b-0">Valentine Maton</h6>
                                        <small class="text-muted">Engineer</small>
                                    </div>
                                </li>
                                <li class="list-group-item d-flex align-items-center p-l-r-0">
                                    <figure class="avatar avatar-state-success m-r-15">
                                        <img src="../../assets/media/image/user/man_avatar1.jpg" class="rounded-circle" alt="image">
                                    </figure>
                                    <div>
                                        <h6 class="m-b-0">Holmes Cherryman</h6>
                                        <small class="text-muted">Human resources</small>
                                    </div>
                                </li>
                                <li class="list-group-item d-flex align-items-center p-l-r-0">
                                    <figure class="avatar avatar-state-success m-r-15">
                                        <img src="../../assets/media/image/user/women_avatar1.jpg" class="rounded-circle" alt="image">
                                    </figure>
                                    <div>
                                        <h6 class="m-b-0">Malanie Hanvey</h6>
                                        <small class="text-muted">Real estate agent</small>
                                    </div>
                                </li>
                                <li class="list-group-item d-flex align-items-center p-l-r-0">
                                    <figure class="avatar avatar-state-success m-r-15">
                                        <img src="../../assets/media/image/user/women_avatar2.jpg" class="rounded-circle" alt="image">
                                    </figure>
                                    <div>
                                        <h6 class="m-b-0">Kenneth Hune</h6>
                                        <small class="text-muted">Engineer</small>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <h6 class="card-title d-flex justify-content-between align-items-center">
                                Mutual Friends
                                <a href="#" class="small">All</a>
                            </h6>
                            <div class="d-flex align-items-center">
                                <div class="avatar-group mr-2">
                                    <a href="#" class="avatar avatar-sm" data-toggle="tooltip" title="Valentine Maton">
                                        <img src="../../assets/media/image/user/women_avatar1.jpg" class="rounded-circle" alt="image">
                                    </a>
                                    <a href="#" class="avatar avatar-sm" data-toggle="tooltip" title="Holmes Cherryman">
                                        <img src="../../assets/media/image/user/man_avatar1.jpg" class="rounded-circle" alt="image">
                                    </a>
                                    <a href="#" class="avatar avatar-sm" data-toggle="tooltip" title="Malanie Hanvey">
                                        <img src="../../assets/media/image/user/man_avatar2.jpg" class="rounded-circle" alt="image">
                                    </a>
                                    <a href="#" class="avatar avatar-sm" data-toggle="tooltip" title="Kenneth Hune">
                                        <img src="../../assets/media/image/user/women_avatar2.jpg" class="rounded-circle" alt="image">
                                    </a>
                                    <a href="#" class="avatar avatar-sm" data-toggle="tooltip" title="Kenneth Hune">
                                        <img src="../../assets/media/image/user/women_avatar3.jpg" class="rounded-circle" alt="image">
                                    </a>
                                </div>
                                <span>+5 friends</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

            </div>
            <!-- ./ Content -->

            <!-- Footer -->
            <footer class="content-footer">
                <div>© 2021 Muslim Go Online - <a href="http://muslimgoonline.com/" target="_blank">muslimgoonline</a></div>
                <div>
                    <nav class="nav">
                        <a href="https://themeforest.net/licenses/standard" class="nav-link">Licenses</a>
                        <a href="#" class="nav-link">Change Log</a>
                        <a href="#" class="nav-link">Get Help</a>
                    </nav>
                </div>
            </footer>
            <!-- ./ Footer -->
        </div>
        <!-- ./ Content body -->
    </div>
    <!-- ./ Content wrapper -->
</div>
<!-- ./ Layout wrapper -->

<!-- Main scripts -->
<script src="{{ asset('../../templete2/vendors/bundle.js')}}"></script>


<!-- App scripts -->
<script src="{{ asset('../../templete2/assets/js/app.min.js')}}"></script>
</body>

<!-- Mirrored from baston.laborasyon.com/demos/default/profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 28 Jan 2021 01:56:45 GMT -->
</html>
