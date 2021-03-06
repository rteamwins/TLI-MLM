<?php $page='Become A Member Today'; include('./config/db.php');

if (!(isset($_SESSION['user_email']))) {
  header('location:sign-in');
  
}


 ?>
<!doctype html>
<html lang="en">
<!-- Copied from https://dashkit.goodthemes.co/account-members.html by Cyotek WebCopy 1.8.0.652, Wednesday, 17 June 2020, 1:15:23 pm -->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
    <!-- Libs CSS -->
    <link rel="stylesheet" href="assets/fonts/feather/feather.css">
    <link rel="stylesheet" href="assets/libs/flatpickr/dist/flatpickr.min.css">
    <link rel="stylesheet" href="assets/libs/quill/dist/quill.core.css">
    <link rel="stylesheet" href="assets/libs/highlightjs/styles/vs2015.css">
    <!-- Theme CSS -->
    <link rel="stylesheet" href="assets/sweetalert/sweetalert2.min.css">
    <link rel="stylesheet" href="assets/css/theme.min.css" id="stylesheetLight">
    <link rel="stylesheet" href="assets/css/theme-dark.min.css" id="stylesheetDark">
    <style>
        body {
        display: none;

      }

      .videoWrapper {
    position: relative;
    padding-bottom: 56.25%; /* 16:9 */
    padding-top: 25px;
    height: 0;
}
.videoWrapper iframe {
    position: absolute;
    top: 10px;
    left: 0px;
    width: 100%;
    height: 100%;
}

    </style>
    <!-- Title -->
    <title>Dashkit</title>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async="" src="gtag/js.js?id=UA-156446909-1"></script>
    <script>window.dataLayer = window.dataLayer || [];function gtag(){dataLayer.push(arguments);}gtag("js", new Date());gtag("config", "UA-156446909-1");</script>
</head>

<body>
    <!-- NAVIGATION
    ================================================== -->
    <?php include ('include/header.php'); ?>
    <nav class="navbar navbar-vertical navbar-vertical-sm fixed-left navbar-expand-md " id="sidebarSmall">
        <div class="container-fluid">
            <!-- Toggler -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidebarSmallCollapse" aria-controls="sidebarSmallCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- Brand -->
            <a class="navbar-brand" href="index.html">
                <img src="assets/img/logo.svg" class="navbar-brand-img 
          mx-auto" alt="...">
            </a>
            <!-- User (xs) -->
            <div class="navbar-user d-md-none">
                <!-- Dropdown -->
                <div class="dropdown">
                    <!-- Toggle -->
                    <a href="#" id="sidebarSmallIcon" class="dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <div class="avatar avatar-sm avatar-online">
                            <img src="assets/img/avatars/profiles/avatar-1.jpg" class="avatar-img rounded-circle" alt="...">
                        </div>
                    </a>
                    <!-- Menu -->
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="sidebarSmallIcon">
                        <a href="profile-posts.html" class="dropdown-item">Profile</a>
                        <hr class="dropdown-divider">
                        <a href="sign-in.html" class="dropdown-item">Logout</a>
                    </div>
                </div>
            </div>
            <!-- Collapse -->
            <div class="collapse navbar-collapse" id="sidebarSmallCollapse">
                <!-- Form -->
                <form class="mt-4 mb-3 d-md-none">
                    <div class="input-group input-group-rounded input-group-merge">
                        <input type="search" class="form-control form-control-rounded form-control-prepended" placeholder="Search" aria-label="Search">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <span class="fe fe-search"></span>
                            </div>
                        </div>
                    </div>
                </form>
                <!-- Divider -->
                <hr class="navbar-divider d-none d-md-block mt-0 mb-3">
                <!-- Navigation -->
                <ul class="navbar-nav">
                    <li class="nav-item dropright">
                        <a class="nav-link dropdown-toggle active" id="sidebarSmallDashboards" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" title="Dashboards">
                            <i class="fe fe-home"></i> <span class="d-md-none">Dashboards</span>
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="sidebarSmallDashboards">
                            <li class="dropdown-header d-none d-md-block">
                                <h6 class="text-uppercase mb-0">Dashboards</h6>
                            </li>
                            <li>
                                <a href="index.html" class="dropdown-item active">
                                    Default
                                </a>
                            </li>
                            <li>
                                <a href="dashboard-project-management.html" class="dropdown-item ">
                                    Project Management
                                </a>
                            </li>
                            <li>
                                <a href="dashboard-ecommerce.html" class="dropdown-item ">
                                    E-Commerce
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item dropright">
                        <a class="nav-link dropdown-toggle " id="sidebarSmallPages" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                            <i class="fe fe-file"></i> <span class="d-md-none">Pages</span>
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="sidebarSmallPages">
                            <li class="dropdown-header d-none d-md-block">
                                <h6 class="text-uppercase mb-0">Pages</h6>
                            </li>
                            <li class="dropright">
                                <a class="dropdown-item dropdown-toggle " href="#" id="sidebarSmallProfile" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Profile
                                </a>
                                <div class="dropdown-menu" aria-labelledby="sidebarSmallProfile">
                                    <a class="dropdown-item " href="profile-posts.html">
                                        Posts
                                    </a>
                                    <a class="dropdown-item " href="profile-groups.html">
                                        Groups
                                    </a>
                                    <a class="dropdown-item " href="profile-projects.html">
                                        Projects
                                    </a>
                                    <a class="dropdown-item " href="profile-files.html">
                                        Files
                                    </a>
                                    <a class="dropdown-item " href="profile-subscribers.html">
                                        Subscribers
                                    </a>
                                </div>
                            </li>
                            <li class="dropright">
                                <a class="dropdown-item dropdown-toggle " href="#" id="sidebarSmallProject" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Project
                                </a>
                                <div class="dropdown-menu" aria-labelledby="sidebarSmallProject">
                                    <a class="dropdown-item " href="project-overview.html">
                                        Overview
                                    </a>
                                    <a class="dropdown-item " href="project-files.html">
                                        Files
                                    </a>
                                    <a class="dropdown-item " href="project-reports.html">
                                        Reports
                                    </a>
                                    <a class="dropdown-item " href="project-new.html">
                                        New project
                                    </a>
                                </div>
                            </li>
                            <li class="dropright">
                                <a class="dropdown-item dropdown-toggle " href="#" id="sidebarSmallTeam" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Team
                                </a>
                                <div class="dropdown-menu" aria-labelledby="sidebarSmallTeam">
                                    <a class="dropdown-item " href="team-overview.html">
                                        Overview
                                    </a>
                                    <a class="dropdown-item " href="team-projects.html">
                                        Projects
                                    </a>
                                    <a class="dropdown-item " href="team-members.html">
                                        Members
                                    </a>
                                    <a class="dropdown-item " href="team-new.html">
                                        New team
                                    </a>
                                </div>
                            </li>
                            <li class="dropright">
                                <a class="dropdown-item dropdown-toggle " href="#" id="sidebarSmallFeed" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Feed
                                </a>
                                <div class="dropdown-menu" aria-labelledby="sidebarSmallFeed">
                                    <a class="dropdown-item " href="feed.html">
                                        Platform
                                    </a>
                                    <a class="dropdown-item " href="social-feed.html">
                                        Social
                                    </a>
                                </div>
                            </li>
                            <li class="dropright">
                                <a class="dropdown-item dropdown-toggle " href="#" id="sidebarSmallAccount" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Account
                                </a>
                                <div class="dropdown-menu" aria-labelledby="sidebarSmallAccount">
                                    <a class="dropdown-item " href="account-general.html">
                                        General
                                    </a>
                                    <a class="dropdown-item " href="account-billing.html">
                                        Billing
                                    </a>
                                    <a class="dropdown-item " href="account-members.html">
                                        Members
                                    </a>
                                    <a class="dropdown-item " href="account-security.html">
                                        Security
                                    </a>
                                    <a class="dropdown-item " href="account-notifications.html">
                                        Notifications
                                    </a>
                                </div>
                            </li>
                            <li class="dropright">
                                <a class="dropdown-item dropdown-toggle " href="#" id="sidebarSmallCrm" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    CRM
                                </a>
                                <div class="dropdown-menu" aria-labelledby="sidebarSmallCrm">
                                    <a class="dropdown-item " href="crm-contacts.html">
                                        Contacts
                                    </a>
                                    <a class="dropdown-item " href="crm-companies.html">
                                        Companies
                                    </a>
                                    <a class="dropdown-item " href="crm-deals.html">
                                        Deals
                                    </a>
                                </div>
                            </li>
                            <li>
                                <a class="dropdown-item " href="wizard.html">
                                    Wizard
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item " href="kanban.html">
                                    Kanban
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item " href="orders.html">
                                    Orders
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item " href="invoice.html">
                                    Invoice
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item " href="pricing.html">
                                    Pricing
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item" data-toggle="tooltip" data-placement="right" data-template='<div class="tooltip d-none d-md-block" role="tooltip"><div class="arrow"></div><div class="tooltip-inner"></div></div>' title="Widgets">
                        <a class="nav-link " href="widgets.html">
                            <i class="fe fe-grid"></i> <span class="d-md-none">Widgets</span>
                        </a>
                    </li>
                    <li class="nav-item dropright">
                        <a class="nav-link dropdown-toggle" id="sidebarSmallAuth" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                            <i class="fe fe-user"></i> <span class="d-md-none">Auth</span>
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="sidebarSmallAuth">
                            <li class="dropdown-header d-none d-md-block">
                                <h6 class="text-uppercase mb-0">Authentication</h6>
                            </li>
                            <li class="dropright">
                                <a class="dropdown-item dropdown-toggle" href="#" id="sidebarSmallSignIn" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Sign in
                                </a>
                                <div class="dropdown-menu" aria-labelledby="sidebarSmallSignIn">
                                    <a class="dropdown-item" href="sign-in-cover.html">
                                        Cover
                                    </a>
                                    <a class="dropdown-item" href="sign-in-illustration.html">
                                        Illustration
                                    </a>
                                    <a class="dropdown-item" href="./sign-in-basics.html">
                                        Basic
                                    </a>
                                </div>
                            </li>
                            <li class="dropright">
                                <a class="dropdown-item dropdown-toggle" href="#" id="sidebarSmallSignUp" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Sign up
                                </a>
                                <div class="dropdown-menu" aria-labelledby="sidebarSmallSignUp">
                                    <a class="dropdown-item" href="sign-up-cover.html">
                                        Cover
                                    </a>
                                    <a class="dropdown-item" href="sign-up-illustration.html">
                                        Illustration
                                    </a>
                                    <a class="dropdown-item" href="sign-up.html">
                                        Basic
                                    </a>
                                </div>
                            </li>
                            <li class="dropright">
                                <a class="dropdown-item dropdown-toggle" href="#" id="sidebarSmallPassword" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Password reset
                                </a>
                                <div class="dropdown-menu" aria-labelledby="sidebarSmallPassword">
                                    <a class="dropdown-item" href="password-reset-cover.html">
                                        Cover
                                    </a>
                                    <a class="dropdown-item" href="password-reset-illustration.html">
                                        Illustration
                                    </a>
                                    <a class="dropdown-item" href="password-reset.html">
                                        Basic
                                    </a>
                                </div>
                            </li>
                            <li class="dropright">
                                <a class="dropdown-item dropdown-toggle" href="#" id="sidebarSmallError" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Error
                                </a>
                                <div class="dropdown-menu" aria-labelledby="sidebarSmallError">
                                    <a class="dropdown-item" href="error-illustration.html">
                                        Illustration
                                    </a>
                                    <a class="dropdown-item" href="error.html">
                                        Basic
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item d-md-none">
                        <a class="nav-link" href="#sidebarModalActivity" data-toggle="modal">
                            <span class="fe fe-bell"></span> Notifications
                        </a>
                    </li>
                </ul>
                <!-- Divider -->
                <hr class="navbar-divider my-3">
                <!-- Navigation -->
                <ul class="navbar-nav mb-md-4">
                    <li class="nav-item dropright">
                        <a class="nav-link dropdown-toggle " id="sidebarSmallBasics" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" title="Basics">
                            <i class="fe fe-clipboard"></i> <span class="d-md-none">Basics</span>
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="sidebarSmallBasics">
                            <li class="dropdown-header d-none d-md-block">
                                <h6 class="text-uppercase mb-0">Basics</h6>
                            </li>
                            <li>
                                <a href="docs/getting-started.html" class="dropdown-item ">
                                    Getting Started
                                </a>
                            </li>
                            <li>
                                <a href="docs/design-file.html" class="dropdown-item ">
                                    Design File
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="docs/components.html" data-toggle="tooltip" data-placement="right" data-template='<div class="tooltip d-none d-md-block" role="tooltip"><div class="arrow"></div><div class="tooltip-inner"></div></div>' title="Components">
                            <i class="fe fe-book-open"></i> <span class="d-md-none">Components</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="docs/changelog.html" data-toggle="tooltip" data-placement="right" data-template='<div class="tooltip d-none d-md-block" role="tooltip"><div class="arrow"></div><div class="tooltip-inner"></div></div>' title="Changelog">
                            <i class="fe fe-git-branch"></i> <span class="d-md-none">Changelog</span> <span class="badge badge-primary ml-auto d-md-none">v1.6.0</span>
                        </a>
                    </li>
                </ul>
                <!-- Push content down -->
                <div class="mt-auto"></div>
                <!-- Customize -->
                <div class="mb-4" data-toggle="tooltip" data-placement="right" data-template='<div class="tooltip d-none d-md-block" role="tooltip"><div class="arrow"></div><div class="tooltip-inner"></div></div>' title="Customize">
                    <a href="#modalDemo" class="btn btn-block btn-primary" data-toggle="modal">
                        <i class="fe fe-sliders"></i> <span class="d-md-none ml-2">Customize</span>
                    </a>
                </div>
                <!-- User (md) -->
                <div class="navbar-user d-none d-md-flex flex-column" id="sidebarSmallUser">
                    <!-- Icon -->
                    <a href="#sidebarModalSearch" class="navbar-user-link mb-3" data-toggle="modal">
                        <span class="icon">
                            <i class="fe fe-search"></i>
                        </span>
                    </a>
                    <!-- Icon -->
                    <a href="#sidebarModalActivity" class="navbar-user-link mb-3" data-toggle="modal">
                        <span class="icon">
                            <i class="fe fe-bell"></i>
                        </span>
                    </a>
                    <!-- Dropup -->
                    <div class="dropright">
                        <!-- Toggle -->
                        <a href="#" id="sidebarSmallIconCopy" class="dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <div class="avatar avatar-sm avatar-online">
                                <img src="assets/img/avatars/profiles/avatar-1.jpg" class="avatar-img rounded-circle" alt="...">
                            </div>
                        </a>
                        <!-- Menu -->
                        <div class="dropdown-menu" aria-labelledby="sidebarSmallIconCopy">
                            <a href="profile-posts.html" class="dropdown-item">Profile</a>
                            <hr class="dropdown-divider">
                            <a href="sign-in.html" class="dropdown-item">Logout</a>
                        </div>
                    </div>
                </div>
            </div> <!-- / .navbar-collapse -->
        </div>
    </nav>
    <nav class="navbar navbar-expand-lg " id="topnav">
        <div class="container">
            <!-- Toggler -->
            <button class="navbar-toggler mr-auto" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- Brand -->
            <a class="navbar-brand mr-auto" href="index.html">
                <img src="assets/img/logo.svg" alt="..." class="navbar-brand-img">
            </a>
            <!-- Form -->
            <form class="form-inline mr-4 d-none d-lg-flex">
                <div class="input-group input-group-rounded input-group-merge" data-list='{"valueNames": ["name"]}'>
                    <!-- Input -->
                    <input type="search" class="form-control form-control-prepended  dropdown-toggle list-search" data-toggle="dropdown" placeholder="Search" aria-label="Search">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <i class="fe fe-search"></i>
                        </div>
                    </div>
                    <!-- Menu -->
                    <div class="dropdown-menu dropdown-menu-card">
                        <div class="card-body">
                            <!-- List group -->
                            <div class="list-group list-group-flush list-group-focus list my-n3">
                                <a class="list-group-item" href="team-overview.html">
                                    <div class="row align-items-center">
                                        <div class="col-auto">
                                            <!-- Avatar -->
                                            <div class="avatar">
                                                <img src="assets/img/avatars/teams/team-logo-1.jpg" alt="..." class="avatar-img rounded">
                                            </div>
                                        </div>
                                        <div class="col ml-n2">
                                            <!-- Title -->
                                            <h4 class="text-body text-focus mb-1 name">
                                                Airbnb
                                            </h4>
                                            <!-- Time -->
                                            <p class="small text-muted mb-0">
                                                <span class="fe fe-clock"></span> <time datetime="2018-05-24">Updated 2hr ago</time>
                                            </p>
                                        </div>
                                    </div> <!-- / .row -->
                                </a>
                                <a class="list-group-item" href="team-overview.html">
                                    <div class="row align-items-center">
                                        <div class="col-auto">
                                            <!-- Avatar -->
                                            <div class="avatar">
                                                <img src="assets/img/avatars/teams/team-logo-2.jpg" alt="..." class="avatar-img rounded">
                                            </div>
                                        </div>
                                        <div class="col ml-n2">
                                            <!-- Title -->
                                            <h4 class="text-body text-focus mb-1 name">
                                                Medium Corporation
                                            </h4>
                                            <!-- Time -->
                                            <p class="small text-muted mb-0">
                                                <span class="fe fe-clock"></span> <time datetime="2018-05-24">Updated 2hr ago</time>
                                            </p>
                                        </div>
                                    </div> <!-- / .row -->
                                </a>
                                <a class="list-group-item" href="project-overview.html">
                                    <div class="row align-items-center">
                                        <div class="col-auto">
                                            <!-- Avatar -->
                                            <div class="avatar avatar-4by3">
                                                <img src="assets/img/avatars/projects/project-1.jpg" alt="..." class="avatar-img rounded">
                                            </div>
                                        </div>
                                        <div class="col ml-n2">
                                            <!-- Title -->
                                            <h4 class="text-body text-focus mb-1 name">
                                                Homepage Redesign
                                            </h4>
                                            <!-- Time -->
                                            <p class="small text-muted mb-0">
                                                <span class="fe fe-clock"></span> <time datetime="2018-05-24">Updated 4hr ago</time>
                                            </p>
                                        </div>
                                    </div> <!-- / .row -->
                                </a>
                                <a class="list-group-item" href="project-overview.html">
                                    <div class="row align-items-center">
                                        <div class="col-auto">
                                            <!-- Avatar -->
                                            <div class="avatar avatar-4by3">
                                                <img src="assets/img/avatars/projects/project-2.jpg" alt="..." class="avatar-img rounded">
                                            </div>
                                        </div>
                                        <div class="col ml-n2">
                                            <!-- Title -->
                                            <h4 class="text-body text-focus mb-1 name">
                                                Travels & Time
                                            </h4>
                                            <!-- Time -->
                                            <p class="small text-muted mb-0">
                                                <span class="fe fe-clock"></span> <time datetime="2018-05-24">Updated 4hr ago</time>
                                            </p>
                                        </div>
                                    </div> <!-- / .row -->
                                </a>
                                <a class="list-group-item" href="project-overview.html">
                                    <div class="row align-items-center">
                                        <div class="col-auto">
                                            <!-- Avatar -->
                                            <div class="avatar avatar-4by3">
                                                <img src="assets/img/avatars/projects/project-3.jpg" alt="..." class="avatar-img rounded">
                                            </div>
                                        </div>
                                        <div class="col ml-n2">
                                            <!-- Title -->
                                            <h4 class="text-body text-focus mb-1 name">
                                                Safari Exploration
                                            </h4>
                                            <!-- Time -->
                                            <p class="small text-muted mb-0">
                                                <span class="fe fe-clock"></span> <time datetime="2018-05-24">Updated 4hr ago</time>
                                            </p>
                                        </div>
                                    </div> <!-- / .row -->
                                </a>
                                <a class="list-group-item" href="profile-posts.html">
                                    <div class="row align-items-center">
                                        <div class="col-auto">
                                            <!-- Avatar -->
                                            <div class="avatar">
                                                <img src="assets/img/avatars/profiles/avatar-1.jpg" alt="..." class="avatar-img rounded-circle">
                                            </div>
                                        </div>
                                        <div class="col ml-n2">
                                            <!-- Title -->
                                            <h4 class="text-body text-focus mb-1 name">
                                                Dianna Smiley
                                            </h4>
                                            <!-- Status -->
                                            <p class="text-body small mb-0">
                                                <span class="text-success">●</span> Online
                                            </p>
                                        </div>
                                    </div> <!-- / .row -->
                                </a>
                                <a class="list-group-item" href="profile-posts.html">
                                    <div class="row align-items-center">
                                        <div class="col-auto">
                                            <!-- Avatar -->
                                            <div class="avatar">
                                                <img src="assets/img/avatars/profiles/avatar-2.jpg" alt="..." class="avatar-img rounded-circle">
                                            </div>
                                        </div>
                                        <div class="col ml-n2">
                                            <!-- Title -->
                                            <h4 class="text-body text-focus mb-1 name">
                                                Ab Hadley
                                            </h4>
                                            <!-- Status -->
                                            <p class="text-body small mb-0">
                                                <span class="text-danger">●</span> Offline
                                            </p>
                                        </div>
                                    </div> <!-- / .row -->
                                </a>
                            </div>
                        </div>
                    </div> <!-- / .dropdown-menu -->
                </div>
            </form>
            <!-- User -->
            <div class="navbar-user">
                <!-- Dropdown -->
                <div class="dropdown mr-4 d-none d-lg-flex">
                    <!-- Toggle -->
                    <a href="#" class="navbar-user-link" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="icon active">
                            <i class="fe fe-bell"></i>
                        </span>
                    </a>
                    <!-- Menu -->
                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-card">
                        <div class="card-header">
                            <!-- Title -->
                            <h5 class="card-header-title">
                                Notifications
                            </h5>
                            <!-- Link -->
                            <a href="#!" class="small">
                                View all
                            </a>
                        </div> <!-- / .card-header -->
                        <div class="card-body">
                            <!-- List group -->
                            <div class="list-group list-group-flush list-group-activity my-n3">
                                <a class="list-group-item text-reset" href="#!">
                                    <div class="row">
                                        <div class="col-auto">
                                            <!-- Avatar -->
                                            <div class="avatar avatar-sm">
                                                <img src="assets/img/avatars/profiles/avatar-1.jpg" alt="..." class="avatar-img rounded-circle">
                                            </div>
                                        </div>
                                        <div class="col ml-n2">
                                            <!-- Content -->
                                            <div class="small">
                                                <strong>Dianna Smiley</strong> shared your post with Ab Hadley, Adolfo Hess, and 3 others.
                                            </div>
                                            <!-- Time -->
                                            <small class="text-muted">
                                                2m ago
                                            </small>
                                        </div>
                                    </div> <!-- / .row -->
                                </a>
                                <a class="list-group-item text-reset" href="#!">
                                    <div class="row">
                                        <div class="col-auto">
                                            <!-- Avatar -->
                                            <div class="avatar avatar-sm">
                                                <img src="assets/img/avatars/profiles/avatar-2.jpg" alt="..." class="avatar-img rounded-circle">
                                            </div>
                                        </div>
                                        <div class="col ml-n2">
                                            <!-- Content -->
                                            <div class="small">
                                                <strong>Ab Hadley</strong> reacted to your post with a 😍
                                            </div>
                                            <!-- Time -->
                                            <small class="text-muted">
                                                2m ago
                                            </small>
                                        </div>
                                    </div> <!-- / .row -->
                                </a>
                                <a class="list-group-item text-reset" href="#!">
                                    <div class="row">
                                        <div class="col-auto">
                                            <!-- Avatar -->
                                            <div class="avatar avatar-sm">
                                                <img src="assets/img/avatars/profiles/avatar-3.jpg" alt="..." class="avatar-img rounded-circle">
                                            </div>
                                        </div>
                                        <div class="col ml-n2">
                                            <!-- Content -->
                                            <div class="small">
                                                <strong>Adolfo Hess</strong> commented <blockquote class="mb-0">“I don’t think this really makes sense to do without approval from Johnathan since he’s the one...” </blockquote>
                                            </div>
                                            <!-- Time -->
                                            <small class="text-muted">
                                                2m ago
                                            </small>
                                        </div>
                                    </div> <!-- / .row -->
                                </a>
                                <a class="list-group-item text-reset" href="#!">
                                    <div class="row">
                                        <div class="col-auto">
                                            <!-- Avatar -->
                                            <div class="avatar avatar-sm">
                                                <img src="assets/img/avatars/profiles/avatar-4.jpg" alt="..." class="avatar-img rounded-circle">
                                            </div>
                                        </div>
                                        <div class="col ml-n2">
                                            <!-- Content -->
                                            <div class="small">
                                                <strong>Daniela Dewitt</strong> subscribed to you.
                                            </div>
                                            <!-- Time -->
                                            <small class="text-muted">
                                                2m ago
                                            </small>
                                        </div>
                                    </div> <!-- / .row -->
                                </a>
                                <a class="list-group-item text-reset" href="#!">
                                    <div class="row">
                                        <div class="col-auto">
                                            <!-- Avatar -->
                                            <div class="avatar avatar-sm">
                                                <img src="assets/img/avatars/profiles/avatar-5.jpg" alt="..." class="avatar-img rounded-circle">
                                            </div>
                                        </div>
                                        <div class="col ml-n2">
                                            <!-- Content -->
                                            <div class="small">
                                                <strong>Miyah Myles</strong> shared your post with Ryu Duke, Glen Rouse, and 3 others.
                                            </div>
                                            <!-- Time -->
                                            <small class="text-muted">
                                                2m ago
                                            </small>
                                        </div>
                                    </div> <!-- / .row -->
                                </a>
                                <a class="list-group-item text-reset" href="#!">
                                    <div class="row">
                                        <div class="col-auto">
                                            <!-- Avatar -->
                                            <div class="avatar avatar-sm">
                                                <img src="assets/img/avatars/profiles/avatar-6.jpg" alt="..." class="avatar-img rounded-circle">
                                            </div>
                                        </div>
                                        <div class="col ml-n2">
                                            <!-- Content -->
                                            <div class="small">
                                                <strong>Ryu Duke</strong> reacted to your post with a 😍
                                            </div>
                                            <!-- Time -->
                                            <small class="text-muted">
                                                2m ago
                                            </small>
                                        </div>
                                    </div> <!-- / .row -->
                                </a>
                                <a class="list-group-item text-reset" href="#!">
                                    <div class="row">
                                        <div class="col-auto">
                                            <!-- Avatar -->
                                            <div class="avatar avatar-sm">
                                                <img src="assets/img/avatars/profiles/avatar-7.jpg" alt="..." class="avatar-img rounded-circle">
                                            </div>
                                        </div>
                                        <div class="col ml-n2">
                                            <!-- Content -->
                                            <div class="small">
                                                <strong>Glen Rouse</strong> commented <blockquote class="mb-0">“I don’t think this really makes sense to do without approval from Johnathan since he’s the one...” </blockquote>
                                            </div>
                                            <!-- Time -->
                                            <small class="text-muted">
                                                2m ago
                                            </small>
                                        </div>
                                    </div> <!-- / .row -->
                                </a>
                                <a class="list-group-item text-reset" href="#!">
                                    <div class="row">
                                        <div class="col-auto">
                                            <!-- Avatar -->
                                            <div class="avatar avatar-sm">
                                                <img src="assets/img/avatars/profiles/avatar-8.jpg" alt="..." class="avatar-img rounded-circle">
                                            </div>
                                        </div>
                                        <div class="col ml-n2">
                                            <!-- Content -->
                                            <div class="small">
                                                <strong>Grace Gross</strong> subscribed to you.
                                            </div>
                                            <!-- Time -->
                                            <small class="text-muted">
                                                2m ago
                                            </small>
                                        </div>
                                    </div> <!-- / .row -->
                                </a>
                            </div>
                        </div>
                    </div> <!-- / .dropdown-menu -->
                </div>
                <!-- Dropdown -->
                <div class="dropdown">
                    <!-- Toggle -->
                    <a href="#" class="avatar avatar-sm avatar-online dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img src="assets/img/avatars/profiles/avatar-1.jpg" alt="..." class="avatar-img rounded-circle">
                    </a>
                    <!-- Menu -->
                    <div class="dropdown-menu dropdown-menu-right">
                        <a href="profile-posts.html" class="dropdown-item">Profile</a>
                        <a href="account-general.html" class="dropdown-item">Settings</a>
                        <hr class="dropdown-divider">
                        <a href="sign-in.html" class="dropdown-item">Logout</a>
                    </div>
                </div>
            </div>
            <!-- Collapse -->
            <div class="collapse navbar-collapse mr-lg-auto order-lg-first" id="navbar">
                <!-- Form -->
                <form class="mt-4 mb-3 d-md-none">
                    <input type="search" class="form-control form-control-rounded" placeholder="Search" aria-label="Search">
                </form>
                <!-- Navigation -->
                <ul class="navbar-nav mr-lg-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle active" href="#" id="topnavDashboards" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Dashboards
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="topnavDashboards">
                            <li>
                                <a class="dropdown-item active" href="index.html">
                                    Default
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item " href="dashboard-project-management.html">
                                    Project Management
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item " href="dashboard-ecommerce.html">
                                    E-Commerce
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle " href="#" id="topnavPages" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Pages
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="topnavPages">
                            <li class="dropright">
                                <a class="dropdown-item dropdown-toggle " href="#" id="topnavProfile" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Profile
                                </a>
                                <div class="dropdown-menu" aria-labelledby="topnavProfile">
                                    <a class="dropdown-item " href="profile-posts.html">
                                        Posts
                                    </a>
                                    <a class="dropdown-item " href="profile-groups.html">
                                        Groups
                                    </a>
                                    <a class="dropdown-item " href="profile-projects.html">
                                        Projects
                                    </a>
                                    <a class="dropdown-item " href="profile-files.html">
                                        Files
                                    </a>
                                    <a class="dropdown-item " href="profile-subscribers.html">
                                        Subscribers
                                    </a>
                                </div>
                            </li>
                            <li class="dropright">
                                <a class="dropdown-item dropdown-toggle " href="#" id="topnavProject" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Project
                                </a>
                                <div class="dropdown-menu" aria-labelledby="topnavProject">
                                    <a class="dropdown-item " href="project-overview.html">
                                        Overview
                                    </a>
                                    <a class="dropdown-item " href="project-files.html">
                                        Files
                                    </a>
                                    <a class="dropdown-item " href="project-reports.html">
                                        Reports
                                    </a>
                                    <a class="dropdown-item " href="project-new.html">
                                        New project
                                    </a>
                                </div>
                            </li>
                            <li class="dropright">
                                <a class="dropdown-item dropdown-toggle " href="#" id="topnavTeam" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Team
                                </a>
                                <div class="dropdown-menu" aria-labelledby="topnavTeam">
                                    <a class="dropdown-item " href="team-overview.html">
                                        Overview
                                    </a>
                                    <a class="dropdown-item " href="team-projects.html">
                                        Projects
                                    </a>
                                    <a class="dropdown-item " href="team-members.html">
                                        Members
                                    </a>
                                    <a class="dropdown-item " href="team-new.html">
                                        New team
                                    </a>
                                </div>
                            </li>
                            <li class="dropright">
                                <a class="dropdown-item dropdown-toggle " href="#" id="topnavFeed" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Feed
                                </a>
                                <div class="dropdown-menu" aria-labelledby="topnavFeed">
                                    <a class="dropdown-item " href="feed.html">
                                        Platform
                                    </a>
                                    <a class="dropdown-item " href="social-feed.html">
                                        Social
                                    </a>
                                </div>
                            </li>
                            <li class="dropright">
                                <a class="dropdown-item dropdown-toggle " href="#" id="topnavAccount" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Account
                                </a>
                                <div class="dropdown-menu" aria-labelledby="topnavAccount">
                                    <a class="dropdown-item " href="account-general.html">
                                        General
                                    </a>
                                    <a class="dropdown-item " href="account-billing.html">
                                        Billing
                                    </a>
                                    <a class="dropdown-item " href="account-members.html">
                                        Members
                                    </a>
                                    <a class="dropdown-item " href="account-security.html">
                                        Security
                                    </a>
                                    <a class="dropdown-item " href="account-notifications.html">
                                        Notifications
                                    </a>
                                </div>
                            </li>
                            <li class="dropright">
                                <a class="dropdown-item dropdown-toggle " href="#" id="topnavCrm" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    CRM
                                </a>
                                <div class="dropdown-menu" aria-labelledby="topnavCrm">
                                    <a class="dropdown-item " href="crm-contacts.html">
                                        Contacts
                                    </a>
                                    <a class="dropdown-item " href="crm-companies.html">
                                        Companies
                                    </a>
                                    <a class="dropdown-item " href="crm-deals.html">
                                        Deals
                                    </a>
                                </div>
                            </li>
                            <li>
                                <a class="dropdown-item " href="wizard.html">
                                    Wizard
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item " href="kanban.html">
                                    Kanban
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item " href="orders.html">
                                    Orders
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item " href="invoice.html">
                                    Invoice
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item " href="pricing.html">
                                    Pricing
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item " href="widgets.html">
                                    Widgets
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="topnavAuth" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Auth
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="topnavAuth">
                            <li class="dropright">
                                <a class="dropdown-item dropdown-toggle" href="#" id="topnavSignIn" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Sign in
                                </a>
                                <div class="dropdown-menu" aria-labelledby="topnavSignIn">
                                    <a class="dropdown-item" href="sign-in-cover.html">
                                        Cover
                                    </a>
                                    <a class="dropdown-item" href="sign-in-illustration.html">
                                        Illustration
                                    </a>
                                    <a class="dropdown-item" href="./sign-in-basics.html">
                                        Basic
                                    </a>
                                </div>
                            </li>
                            <li class="dropright">
                                <a class="dropdown-item dropdown-toggle" href="#" id="topnavSignUp" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Sign up
                                </a>
                                <div class="dropdown-menu" aria-labelledby="topnavSignUp">
                                    <a class="dropdown-item" href="sign-up-cover.html">
                                        Cover
                                    </a>
                                    <a class="dropdown-item" href="sign-up-illustration.html">
                                        Illustration
                                    </a>
                                    <a class="dropdown-item" href="sign-up.html">
                                        Basic
                                    </a>
                                </div>
                            </li>
                            <li class="dropright">
                                <a class="dropdown-item dropdown-toggle" href="#" id="topnavPassword" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Password reset
                                </a>
                                <div class="dropdown-menu" aria-labelledby="topnavPassword">
                                    <a class="dropdown-item" href="password-reset-cover.html">
                                        Cover
                                    </a>
                                    <a class="dropdown-item" href="password-reset-illustration.html">
                                        Illustration
                                    </a>
                                    <a class="dropdown-item" href="password-reset.html">
                                        Basic
                                    </a>
                                </div>
                            </li>
                            <li class="dropright">
                                <a class="dropdown-item dropdown-toggle" href="#" id="topnavError" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Error
                                </a>
                                <div class="dropdown-menu" aria-labelledby="topnavError">
                                    <a class="dropdown-item" href="error-illustration.html">
                                        Illustration
                                    </a>
                                    <a class="dropdown-item" href="error.html">
                                        Basic
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle " href="#" id="topnavDocumentation" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Docs
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="topnavDocumentation">
                            <li class="dropright">
                                <a class="dropdown-item dropdown-toggle " href="#" id="topnavBasics" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Basics
                                </a>
                                <div class="dropdown-menu" aria-labelledby="topnavBasics">
                                    <a class="dropdown-item " href="docs/getting-started.html">
                                        Getting Started
                                    </a>
                                    <a class="dropdown-item " href="docs/design-file.html">
                                        Design File
                                    </a>
                                </div>
                            </li>
                            <li>
                                <a class="dropdown-item " href="docs/components.html">
                                    Components
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item " href="docs/changelog.html">
                                    Changelog
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#modalDemo" data-toggle="modal">
                            Customize
                        </a>
                    </li>
                </ul>
            </div>
        </div> <!-- / .container -->
    </nav>
    <!-- MAIN CONTENT
    ================================================== -->
    <div class="main-content">
        <nav class="navbar navbar-expand-md navbar-light d-none d-md-flex" id="topbar">
            <div class="container-fluid">
                <!-- Form -->
                <form class="form-inline mr-4 d-none d-md-flex">
                    <div class="input-group input-group-flush input-group-merge" data-list='{"valueNames": ["name"]}'>
                        <!-- Input -->
                        <input type="search" class="form-control form-control-prepended dropdown-toggle list-search" data-toggle="dropdown" placeholder="Search" aria-label="Search">
                        <!-- Prepend -->
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="fe fe-search"></i>
                            </div>
                        </div>
                        <!-- Menu -->
                        <div class="dropdown-menu dropdown-menu-card">
                            <div class="card-body">
                                <!-- List group -->
                                <div class="list-group list-group-flush list-group-focus list my-n3">
                                    <a class="list-group-item" href="team-overview.html">
                                        <div class="row align-items-center">
                                            <div class="col-auto">
                                                <!-- Avatar -->
                                                <div class="avatar">
                                                    <img src="assets/img/avatars/teams/team-logo-1.jpg" alt="..." class="avatar-img rounded">
                                                </div>
                                            </div>
                                            <div class="col ml-n2">
                                                <!-- Title -->
                                                <h4 class="text-body text-focus mb-1 name">
                                                    Airbnb
                                                </h4>
                                                <!-- Time -->
                                                <p class="small text-muted mb-0">
                                                    <span class="fe fe-clock"></span>
                                                    <time datetime="2018-05-24">Updated 2hr ago</time>
                                                </p>
                                            </div>
                                        </div> <!-- / .row -->
                                    </a>
                                    <a class="list-group-item" href="team-overview.html">
                                        <div class="row align-items-center">
                                            <div class="col-auto">
                                                <!-- Avatar -->
                                                <div class="avatar">
                                                    <img src="assets/img/avatars/teams/team-logo-2.jpg" alt="..." class="avatar-img rounded">
                                                </div>
                                            </div>
                                            <div class="col ml-n2">
                                                <!-- Title -->
                                                <h4 class="text-body text-focus mb-1 name">
                                                    Medium Corporation
                                                </h4>
                                                <!-- Time -->
                                                <p class="small text-muted mb-0">
                                                    <span class="fe fe-clock"></span>
                                                    <time datetime="2018-05-24">Updated 2hr ago</time>
                                                </p>
                                            </div>
                                        </div> <!-- / .row -->
                                    </a>
                                    <a class="list-group-item" href="project-overview.html">
                                        <div class="row align-items-center">
                                            <div class="col-auto">
                                                <!-- Avatar -->
                                                <div class="avatar avatar-4by3">
                                                    <img src="assets/img/avatars/projects/project-1.jpg" alt="..." class="avatar-img rounded">
                                                </div>
                                            </div>
                                            <div class="col ml-n2">
                                                <!-- Title -->
                                                <h4 class="text-body text-focus mb-1 name">
                                                    Homepage Redesign
                                                </h4>
                                                <!-- Time -->
                                                <p class="small text-muted mb-0">
                                                    <span class="fe fe-clock"></span>
                                                    <time datetime="2018-05-24">Updated 4hr ago</time>
                                                </p>
                                            </div>
                                        </div> <!-- / .row -->
                                    </a>
                                    <a class="list-group-item" href="project-overview.html">
                                        <div class="row align-items-center">
                                            <div class="col-auto">
                                                <!-- Avatar -->
                                                <div class="avatar avatar-4by3">
                                                    <img src="assets/img/avatars/projects/project-2.jpg" alt="..." class="avatar-img rounded">
                                                </div>
                                            </div>
                                            <div class="col ml-n2">
                                                <!-- Title -->
                                                <h4 class="text-body text-focus mb-1 name">
                                                    Travels & Time
                                                </h4>
                                                <!-- Time -->
                                                <p class="small text-muted mb-0">
                                                    <span class="fe fe-clock"></span>
                                                    <time datetime="2018-05-24">Updated 4hr ago</time>
                                                </p>
                                            </div>
                                        </div> <!-- / .row -->
                                    </a>
                                    <a class="list-group-item" href="project-overview.html">
                                        <div class="row align-items-center">
                                            <div class="col-auto">
                                                <!-- Avatar -->
                                                <div class="avatar avatar-4by3">
                                                    <img src="assets/img/avatars/projects/project-3.jpg" alt="..." class="avatar-img rounded">
                                                </div>
                                            </div>
                                            <div class="col ml-n2">
                                                <!-- Title -->
                                                <h4 class="text-body text-focus mb-1 name">
                                                    Safari Exploration
                                                </h4>
                                                <!-- Time -->
                                                <p class="small text-muted mb-0">
                                                    <span class="fe fe-clock"></span>
                                                    <time datetime="2018-05-24">Updated 4hr ago</time>
                                                </p>
                                            </div>
                                        </div> <!-- / .row -->
                                    </a>
                                    <a class="list-group-item" href="profile-posts.html">
                                        <div class="row align-items-center">
                                            <div class="col-auto">
                                                <!-- Avatar -->
                                                <div class="avatar">
                                                    <img src="assets/img/avatars/profiles/avatar-1.jpg" alt="..." class="avatar-img rounded-circle">
                                                </div>
                                            </div>
                                            <div class="col ml-n2">
                                                <!-- Title -->
                                                <h4 class="text-body text-focus mb-1 name">
                                                    Dianna Smiley
                                                </h4>
                                                <!-- Status -->
                                                <p class="text-body small mb-0"><span class="text-success">●</span> Online</p>
                                            </div>
                                        </div> <!-- / .row -->
                                    </a>
                                    <a class="list-group-item" href="profile-posts.html">
                                        <div class="row align-items-center">
                                            <div class="col-auto">
                                                <!-- Avatar -->
                                                <div class="avatar">
                                                    <img src="assets/img/avatars/profiles/avatar-2.jpg" alt="..." class="avatar-img rounded-circle">
                                                </div>
                                            </div>
                                            <div class="col ml-n2">
                                                <!-- Title -->
                                                <h4 class="text-body text-focus mb-1 name">
                                                    Ab Hadley
                                                </h4>
                                                <!-- Status -->
                                                <p class="text-body small mb-0"><span class="text-danger">●</span> Offline</p>
                                            </div>
                                        </div> <!-- / .row -->
                                    </a>
                                </div>
                            </div>
                        </div> <!-- / .dropdown-menu -->
                    </div>
                </form>
                <!-- User -->
                <div class="navbar-user">
                    <!-- Dropdown -->
                    <div class="dropdown mr-4 d-none d-md-flex">
                        <!-- Toggle -->
                        <a href="#" class="navbar-user-link" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="icon active">
                                <i class="fe fe-bell"></i>
                            </span>
                        </a>
                        <!-- Menu -->
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-card">
                            <div class="card-header">
                                <!-- Title -->
                                <h5 class="card-header-title">
                                    Notifications
                                </h5>
                                <!-- Link -->
                                <a href="#!" class="small">
                                    View all
                                </a>
                            </div> <!-- / .card-header -->
                            <div class="card-body">
                                <!-- List group -->
                                <div class="list-group list-group-flush list-group-activity my-n3">
                                    <a class="list-group-item text-reset" href="#!">
                                        <div class="row">
                                            <div class="col-auto">
                                                <!-- Avatar -->
                                                <div class="avatar avatar-sm">
                                                    <img src="assets/img/avatars/profiles/avatar-1.jpg" alt="..." class="avatar-img rounded-circle">
                                                </div>
                                            </div>
                                            <div class="col ml-n2">
                                                <!-- Content -->
                                                <div class="small">
                                                    <strong>Dianna Smiley</strong> shared your post with Ab Hadley, Adolfo Hess,
                                                    and 3 others.
                                                </div>
                                                <!-- Time -->
                                                <small class="text-muted">
                                                    2m ago
                                                </small>
                                            </div>
                                        </div> <!-- / .row -->
                                    </a>
                                    <a class="list-group-item text-reset" href="#!">
                                        <div class="row">
                                            <div class="col-auto">
                                                <!-- Avatar -->
                                                <div class="avatar avatar-sm">
                                                    <img src="assets/img/avatars/profiles/avatar-2.jpg" alt="..." class="avatar-img rounded-circle">
                                                </div>
                                            </div>
                                            <div class="col ml-n2">
                                                <!-- Content -->
                                                <div class="small">
                                                    <strong>Ab Hadley</strong> reacted to your post with a 😍
                                                </div>
                                                <!-- Time -->
                                                <small class="text-muted">
                                                    2m ago
                                                </small>
                                            </div>
                                        </div> <!-- / .row -->
                                    </a>
                                    <a class="list-group-item text-reset" href="#!">
                                        <div class="row">
                                            <div class="col-auto">
                                                <!-- Avatar -->
                                                <div class="avatar avatar-sm">
                                                    <img src="assets/img/avatars/profiles/avatar-3.jpg" alt="..." class="avatar-img rounded-circle">
                                                </div>
                                            </div>
                                            <div class="col ml-n2">
                                                <!-- Content -->
                                                <div class="small">
                                                    <strong>Adolfo Hess</strong> commented
                                                    <blockquote class="mb-0">
                                                        “I don’t think this really makes sense to do without approval from Johnathan
                                                        since he’s the one...”
                                                    </blockquote>
                                                </div>
                                                <!-- Time -->
                                                <small class="text-muted">
                                                    2m ago
                                                </small>
                                            </div>
                                        </div> <!-- / .row -->
                                    </a>
                                    <a class="list-group-item text-reset" href="#!">
                                        <div class="row">
                                            <div class="col-auto">
                                                <!-- Avatar -->
                                                <div class="avatar avatar-sm">
                                                    <img src="assets/img/avatars/profiles/avatar-4.jpg" alt="..." class="avatar-img rounded-circle">
                                                </div>
                                            </div>
                                            <div class="col ml-n2">
                                                <!-- Content -->
                                                <div class="small"><strong>Daniela Dewitt</strong> subscribed to you.</div>
                                                <!-- Time -->
                                                <small class="text-muted">
                                                    2m ago
                                                </small>
                                            </div>
                                        </div> <!-- / .row -->
                                    </a>
                                    <a class="list-group-item text-reset" href="#!">
                                        <div class="row">
                                            <div class="col-auto">
                                                <!-- Avatar -->
                                                <div class="avatar avatar-sm">
                                                    <img src="assets/img/avatars/profiles/avatar-5.jpg" alt="..." class="avatar-img rounded-circle">
                                                </div>
                                            </div>
                                            <div class="col ml-n2">
                                                <!-- Content -->
                                                <div class="small">
                                                    <strong>Miyah Myles</strong> shared your post with Ryu Duke, Glen Rouse, and 3 others.
                                                </div>
                                                <!-- Time -->
                                                <small class="text-muted">
                                                    2m ago
                                                </small>
                                            </div>
                                        </div> <!-- / .row -->
                                    </a>
                                    <a class="list-group-item text-reset" href="#!">
                                        <div class="row">
                                            <div class="col-auto">
                                                <!-- Avatar -->
                                                <div class="avatar avatar-sm">
                                                    <img src="assets/img/avatars/profiles/avatar-6.jpg" alt="..." class="avatar-img rounded-circle">
                                                </div>
                                            </div>
                                            <div class="col ml-n2">
                                                <!-- Content -->
                                                <div class="small">
                                                    <strong>Ryu Duke</strong> reacted to your post with a 😍
                                                </div>
                                                <!-- Time -->
                                                <small class="text-muted">
                                                    2m ago
                                                </small>
                                            </div>
                                        </div> <!-- / .row -->
                                    </a>
                                    <a class="list-group-item text-reset" href="#!">
                                        <div class="row">
                                            <div class="col-auto">
                                                <!-- Avatar -->
                                                <div class="avatar avatar-sm">
                                                    <img src="assets/img/avatars/profiles/avatar-7.jpg" alt="..." class="avatar-img rounded-circle">
                                                </div>
                                            </div>
                                            <div class="col ml-n2">
                                                <!-- Content -->
                                                <div class="small">
                                                    <strong>Glen Rouse</strong> commented
                                                    <blockquote class="mb-0">
                                                        “I don’t think this really makes sense to do without approval from Johnathan
                                                        since he’s the one...”
                                                    </blockquote>
                                                </div>
                                                <!-- Time -->
                                                <small class="text-muted">
                                                    2m ago
                                                </small>
                                            </div>
                                        </div> <!-- / .row -->
                                    </a>
                                    <a class="list-group-item text-reset" href="#!">
                                        <div class="row">
                                            <div class="col-auto">
                                                <!-- Avatar -->
                                                <div class="avatar avatar-sm">
                                                    <img src="assets/img/avatars/profiles/avatar-8.jpg" alt="..." class="avatar-img rounded-circle">
                                                </div>
                                            </div>
                                            <div class="col ml-n2">
                                                <!-- Content -->
                                                <div class="small"><strong>Grace Gross</strong> subscribed to you.</div>
                                                <!-- Time -->
                                                <small class="text-muted">
                                                    2m ago
                                                </small>
                                            </div>
                                        </div> <!-- / .row -->
                                    </a>
                                </div>
                            </div>
                        </div> <!-- / .dropdown-menu -->
                    </div>
                    <!-- Dropdown -->
                    <div class="dropdown">
                        <!-- Toggle -->
                        <a href="#" class="avatar avatar-sm avatar-online dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img src="assets/img/avatars/profiles/avatar-1.jpg" alt="..." class="avatar-img rounded-circle">
                        </a>
                        <!-- Menu -->
                        <div class="dropdown-menu dropdown-menu-right">
                            <a href="profile-posts.html" class="dropdown-item">Profile</a>
                            <a href="account-general.html" class="dropdown-item">Settings</a>
                            <hr class="dropdown-divider">
                            <a href="sign-in.html" class="dropdown-item">Logout</a>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-10 col-xl-8">
                    <!-- Header -->
                    <div class="header mt-md-5">
                        <div class="header-body">
                            <div class="row align-items-center">
                                <div class="col">
                                    <!-- Pretitle -->
                                    <h6 class="header-pretitle">
                                        Overview
                                    </h6>
                                    <!-- Title -->
                                    <h1 class="header-title">
                                        Videos
                                    </h1>
                                </div>
                                <div class="col-auto">
                                    <!-- Button -->
                                    <a href="#!" class="btn btn-primary lift">
                                        <?php if (isset($_SESSION['user_email'])) {
                  $user=$_SESSION['user_email'];

                $sql = "SELECT * FROM customers where email ='".$user."'";
            $result = $con->query($sql);
                while($row=$result->fetch_assoc()){
                $fname = $row['fname'];
              
                echo "Welcome <b>$fname</b>";
                  }
                  }
                ?>
                                    </a>
                                </div>
                            </div> <!-- / .row -->
                            <div class="container-lg">
                                <div class="row justify-content-center">
                                    <div class="col-12 col-lg-10 col-xl-12">
                                        <!-- Form -->
                                        <form class="tab-content py-6" id="wizardSteps" method="POST" action="">
                                            <div class="tab-pane fade show active" id="wizardStepOne" role="tabpanel" aria-labelledby="wizardTabOne">
                                                <!-- Header -->
                                                <div class="row justify-content-center">
                                                    <div class="col-12 col-md-10 col-lg-8 col-xl-6 text-center">
                                                        <!-- Pretitle -->
                                                        <h6 class="mb-2 text-uppercase text-muted">
                                                            Video 1 of 10
                                                        </h6>
                                                        <!-- Title -->
                                                        <h1 class="mb-1">
                                                            Let’s start with the basics.
                                                        </h1>
                                                        <!-- Subtitle -->
                                                        <p class="mb-1 text-muted">
                                                            Understanding the type of team you're creating help us to ask all.
                                                        </p>
                                                    </div>
                                                </div> <!-- / .row -->
                                                <div class="row">
                                                    <div class="col-12 col-lg-10 col-xl-12 ">
                                                        <div class="videoWrapper">
                                                            <iframe width="453" height="345" src="https://www.youtube.com/embed/tgbNymZ7vqY?autoplay=0">
                                                            </iframe>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Divider -->
                                                <hr class="my-5">
                                                <!-- Footer -->
                                                <div class="row align-items-center">
                                                    <div class="col-auto">
                                                        <!-- Button -->
                                                        <button class="btn btn-lg btn-white" type="reset">Cancel</button>
                                                    </div>
                                                    <div class="col text-center">
                                                        <!-- Step -->
                                                        <h6 class="text-uppercase text-muted mb-0">Video 1 of 10</h6>
                                                    </div>
                                                    <div class="col-auto">
                                                        <!-- Button -->
                                                        <a class="btn btn-lg btn-primary" data-toggle="wizard" href="#wizardStepTwo">Continue</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="wizardStepTwo" role="tabpanel" aria-labelledby="wizardTabTwo">
                                                <!-- Header -->
                                                <div class="row justify-content-center">
                                                    <div class="col-12 col-md-10 col-lg-8 col-xl-6 text-center">
                                                        <!-- Pretitle -->
                                                        <h6 class="mb-4 text-uppercase text-muted">
                                                            Video 2 of 10
                                                        </h6>
                                                        <!--  -->
                                                    </div>
                                                </div> <!-- / .row -->
                                                <!-- Divider -->
                                                <hr class="mt-2 mb-1">
                                                <!-- Starting files -->
                                                <div class="row">
                                                    <div class="col-12 col-lg-10 col-xl-12 ">
                                                        <div class="videoWrapper">
                                                            <iframe width="453" height="345" src="https://www.youtube.com/embed/tgbNymZ7vqY?autoplay=0">
                                                            </iframe>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Divider -->
                                                <hr class="my-5">
                                                <!-- Footer -->
                                                <div class="row align-items-center">
                                                    <div class="col-auto">
                                                        <!-- Button -->
                                                        <a class="btn btn-lg btn-white" data-toggle="wizard" href="#wizardStepOne">Back</a>
                                                    </div>
                                                    <div class="col text-center">
                                                        <!-- Step -->
                                                        <h6 class="text-uppercase text-muted mb-0">Video 2 of 10</h6>
                                                    </div>
                                                    <div class="col-auto">
                                                        <!-- Button -->
                                                        <a class="btn btn-lg btn-primary" data-toggle="wizard" href="#wizardStepThree">Continue</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="wizardStepThree" role="tabpanel" aria-labelledby="wizardTabThree">
                                                <!-- Header -->
                                                <div class="row justify-content-center">
                                                    <div class="col-12 col-md-10 col-lg-8 col-xl-6 text-center">
                                                        <!-- Pretitle -->
                                                        <h6 class="mb-4 text-uppercase text-muted">
                                                            Video 3 of 10
                                                        </h6>
                                                    </div>
                                                </div> <!-- / .row -->
                                                <!-- Divider -->
                                                <hr class="mt-2 mb-1">
                                                <!-- Starting files -->
                                                <div class="row">
                                                    <div class="col-12 col-lg-10 col-xl-12 ">
                                                        <div class="videoWrapper">
                                                            <iframe width="453" height="345" src="https://www.youtube.com/embed/tgbNymZ7vqY?autoplay=0">
                                                            </iframe>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Divider -->
                                                <hr class="my-5">
                                                <!-- Footer -->
                                                <div class="row align-items-center">
                                                    <div class="col-auto">
                                                        <!-- Button -->
                                                        <a class="btn btn-lg btn-white" data-toggle="wizard" href="#wizardStepTwo">Back</a>
                                                    </div>
                                                    <div class="col text-center">
                                                        <!-- Step -->
                                                        <h6 class="text-uppercase text-muted mb-0">Video 3 of 10</h6>
                                                    </div>
                                                    <div class="col-auto">
                                                        <!-- Button -->
                                                        <a class="btn btn-lg btn-primary" data-toggle="wizard" href="#wizardStepFour">Continue</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="wizardStepFour" role="tabpanel" aria-labelledby="wizardTabFour">
                                                <!-- Header -->
                                                <div class="row justify-content-center">
                                                    <div class="col-12 col-md-10 col-lg-8 col-xl-6 text-center">
                                                        <!-- Pretitle -->
                                                        <h6 class="mb-4 text-uppercase text-muted">
                                                            Video 4 of 10
                                                        </h6>
                                                    </div>
                                                </div> <!-- / .row -->
                                                <!-- Divider -->
                                                <hr class="mt-2 mb-1">
                                                <!-- Starting files -->
                                                <div class="row">
                                                    <div class="col-12 col-lg-10 col-xl-12 ">
                                                        <div class="videoWrapper">
                                                            <iframe width="453" height="345" src="https://www.youtube.com/embed/tgbNymZ7vqY?autoplay=0">
                                                            </iframe>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Divider -->
                                                <hr class="my-5">
                                                <!-- Footer -->
                                                <div class="row align-items-center">
                                                    <div class="col-auto">
                                                        <!-- Button -->
                                                        <a class="btn btn-lg btn-white" data-toggle="wizard" href="#wizardStepThree">Back</a>
                                                    </div>
                                                    <div class="col text-center">
                                                        <!-- Step -->
                                                        <h6 class="text-uppercase text-muted mb-0">Video 4 of 10</h6>
                                                    </div>
                                                    <div class="col-auto">
                                                        <!-- Button -->
                                                        <a class="btn btn-lg btn-primary" data-toggle="wizard" href="#wizardStepFive">Continue</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="wizardStepFive" role="tabpanel" aria-labelledby="wizardTabFive">
                                                <!-- Header -->
                                                <div class="row justify-content-center">
                                                    <div class="col-12 col-md-10 col-lg-8 col-xl-6 text-center">
                                                        <!-- Pretitle -->
                                                        <h6 class="mb-4 text-uppercase text-muted">
                                                            Video 5 of 10
                                                        </h6>
                                                    </div>
                                                </div> <!-- / .row -->
                                                <!-- Divider -->
                                                <hr class="mt-2 mb-1">
                                                <!-- Starting files -->
                                                <div class="row">
                                                    <div class="col-12 col-lg-10 col-xl-12 ">
                                                        <div class="videoWrapper">
                                                            <iframe width="453" height="345" src="https://www.youtube.com/embed/tgbNymZ7vqY?autoplay=0">
                                                            </iframe>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Divider -->
                                                <hr class="my-5">
                                                <!-- Footer -->
                                                <div class="row align-items-center">
                                                    <div class="col-auto">
                                                        <!-- Button -->
                                                        <a class="btn btn-lg btn-white" data-toggle="wizard" href="#wizardStepFour">Back</a>
                                                    </div>
                                                    <div class="col text-center">
                                                        <!-- Step -->
                                                        <h6 class="text-uppercase text-muted mb-0">Video 5 of 10</h6>
                                                    </div>
                                                    <div class="col-auto">
                                                        <!-- Button -->
                                                        <a class="btn btn-lg btn-primary" data-toggle="wizard" href="#wizardStepSix">Continue</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="wizardStepSix" role="tabpanel" aria-labelledby="wizardTabSix">
                                                <!-- Header -->
                                                <div class="row justify-content-center">
                                                    <div class="col-12 col-md-10 col-lg-8 col-xl-6 text-center">
                                                        <!-- Pretitle -->
                                                        <h6 class="mb-4 text-uppercase text-muted">
                                                            Video 6 of 10
                                                        </h6>
                                                    </div>
                                                </div> <!-- / .row -->
                                                <!-- Divider -->
                                                <hr class="mt-2 mb-1">
                                                <!-- Starting files -->
                                                <div class="row">
                                                    <div class="col-12 col-lg-10 col-xl-12 ">
                                                        <div class="videoWrapper">
                                                            <iframe width="453" height="345" src="https://www.youtube.com/embed/tgbNymZ7vqY?autoplay=0">
                                                            </iframe>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Divider -->
                                                <hr class="my-5">
                                                <!-- Footer -->
                                                <div class="row align-items-center">
                                                    <div class="col-auto">
                                                        <!-- Button -->
                                                        <a class="btn btn-lg btn-white" data-toggle="wizard" href="#wizardStepFive">Back</a>
                                                    </div>
                                                    <div class="col text-center">
                                                        <!-- Step -->
                                                        <h6 class="text-uppercase text-muted mb-0">Video 6 of 10</h6>
                                                    </div>
                                                    <div class="col-auto">
                                                        <!-- Button -->
                                                        <a class="btn btn-lg btn-primary" data-toggle="wizard" href="#wizardStepSeven">Continue</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="wizardStepSeven" role="tabpanel" aria-labelledby="wizardTabSeven">
                                                <!-- Header -->
                                                <div class="row justify-content-center">
                                                    <div class="col-12 col-md-10 col-lg-8 col-xl-6 text-center">
                                                        <!-- Pretitle -->
                                                        <h6 class="mb-4 text-uppercase text-muted">
                                                            Video 7 of 10
                                                        </h6>
                                                    </div>
                                                </div> <!-- / .row -->
                                                <!-- Divider -->
                                                <hr class="mt-2 mb-1">
                                                <!-- Starting files -->
                                                <div class="row">
                                                    <div class="col-12 col-lg-10 col-xl-12 ">
                                                        <div class="videoWrapper">
                                                            <iframe width="453" height="345" src="https://www.youtube.com/embed/tgbNymZ7vqY?autoplay=0">
                                                            </iframe>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Divider -->
                                                <hr class="my-5">
                                                <!-- Footer -->
                                                <div class="row align-items-center">
                                                    <div class="col-auto">
                                                        <!-- Button -->
                                                        <a class="btn btn-lg btn-white" data-toggle="wizard" href="#wizardStepSix">Back</a>
                                                    </div>
                                                    <div class="col text-center">
                                                        <!-- Step -->
                                                        <h6 class="text-uppercase text-muted mb-0">Video 7 of 10</h6>
                                                    </div>
                                                    <div class="col-auto">
                                                        <!-- Button -->
                                                        <a class="btn btn-lg btn-primary" data-toggle="wizard" href="#wizardStepEight">Continue</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="wizardStepEight" role="tabpanel" aria-labelledby="wizardTabEight">
                                                <!-- Header -->
                                                <div class="row justify-content-center">
                                                    <div class="col-12 col-md-10 col-lg-8 col-xl-6 text-center">
                                                        <!-- Pretitle -->
                                                        <h6 class="mb-4 text-uppercase text-muted">
                                                            Video 8 of 10
                                                        </h6>
                                                    </div>
                                                </div> <!-- / .row -->
                                                <!-- Divider -->
                                                <hr class="mt-2 mb-1">
                                                <!-- Starting files -->
                                                <div class="row">
                                                    <div class="col-12 col-lg-10 col-xl-12 ">
                                                        <div class="videoWrapper">
                                                            <iframe width="453" height="345" src="https://www.youtube.com/embed/tgbNymZ7vqY?autoplay=0">
                                                            </iframe>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Divider -->
                                                <hr class="my-5">
                                                <!-- Footer -->
                                                <div class="row align-items-center">
                                                    <div class="col-auto">
                                                        <!-- Button -->
                                                        <a class="btn btn-lg btn-white" data-toggle="wizard" href="#wizardStepSeven">Back</a>
                                                    </div>
                                                    <div class="col text-center">
                                                        <!-- Step -->
                                                        <h6 class="text-uppercase text-muted mb-0">Video 8 of 10</h6>
                                                    </div>
                                                    <div class="col-auto">
                                                        <!-- Button -->
                                                        <a class="btn btn-lg btn-primary" data-toggle="wizard" href="#wizardStepNine">Continue</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="wizardStepNine" role="tabpanel" aria-labelledby="wizardTabNine">
                                                <!-- Header -->
                                                <div class="row justify-content-center">
                                                    <div class="col-12 col-md-10 col-lg-8 col-xl-6 text-center">
                                                        <!-- Pretitle -->
                                                        <h6 class="mb-4 text-uppercase text-muted">
                                                            Video 9 of 10
                                                        </h6>
                                                    </div>
                                                </div> <!-- / .row -->
                                                <!-- Divider -->
                                                <hr class="mt-2 mb-1">
                                                <!-- Starting files -->
                                                <div class="row">
                                                    <div class="col-12 col-lg-10 col-xl-12 ">
                                                        <div class="videoWrapper">
                                                            <iframe width="453" height="345" src="https://www.youtube.com/embed/tgbNymZ7vqY?autoplay=0">
                                                            </iframe>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Divider -->
                                                <hr class="my-5">
                                                <!-- Footer -->
                                                <div class="row align-items-center">
                                                    <div class="col-auto">
                                                        <!-- Button -->
                                                        <a class="btn btn-lg btn-white" data-toggle="wizard" href="#wizardStepEight">Back</a>
                                                    </div>
                                                    <div class="col text-center">
                                                        <!-- Step -->
                                                        <h6 class="text-uppercase text-muted mb-0">Video 9 of 10</h6>
                                                    </div>
                                                    <div class="col-auto">
                                                        <!-- Button -->
                                                        <a class="btn btn-lg btn-primary" data-toggle="wizard" href="#wizardStepTen">Continue</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="wizardStepTen" role="tabpanel" aria-labelledby="wizardTabTen">
                                                <!-- Header -->
                                                <div class="row justify-content-center">
                                                    <div class="col-12 col-md-10 col-lg-8 col-xl-6 text-center">
                                                        <!-- Pretitle -->
                                                        <h6 class="mb-4 text-uppercase text-muted">
                                                            Video 10 of 10
                                                        </h6>
                                                    </div>
                                                </div> <!-- / .row -->
                                                <!-- Divider -->
                                                <hr class="mt-2 mb-1">
                                                <!-- Starting files -->
                                                <div class="row">
                                                    <div class="col-12 col-lg-10 col-xl-12 ">
                                                        <div class="videoWrapper">
                                                            <iframe width="453" height="345" src="https://www.youtube.com/embed/tgbNymZ7vqY?autoplay=0">
                                                            </iframe>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Divider -->
                                                <hr class="my-5">
                                                <!-- Footer -->
                                                <div class="row align-items-center">
                                                    <div class="col-auto">
                                                        <!-- Button -->
                                                        <a class="btn btn-lg btn-white" data-toggle="wizard" href="#wizardStepNine">Back</a>
                                                    </div>
                                                    <div class="col text-center">
                                                        <!-- Step -->
                                                        <h6 class="text-uppercase text-muted mb-0">Video 10 of 10</h6>
                                                    </div>
                                                    <div class="col-auto">
                                                        <!-- Button -->
                                                        <a class="btn btn-lg btn-primary" data-toggle="wizard" href="#wizardStepEleven">Write test</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="wizardStepEleven" role="tabpanel" aria-labelledby="wizardTabEleven">
                                                <!-- Header -->
                                                <div class="col-12 col-md-10 col-lg-12 col-xl-12">
                                                    <!-- Card -->
                                                    <!-- Test Question start -->
                                                    <div class="card">
                                                        <div class="card-header card-header-flush">
                                                            <!-- Title -->
                                                            <h2 class="card-header-title text-center">
                                                                Training questions
                                                            </h2>
                                                        </div>
                                                        <div class="card-body">
                                                            <!-- Category -->
                                                            <div class="">
                                                                <!-- Card -->
                                                                <div class="">
                                                                    <div class='card card-sm mb-3'>
                                                                        <div class='card-body'>
                                                                            <p class='mb-0'>
                                                                                <?php

                            $stage=1;

                            $questions=mysqli_query($con, "SELECT * FROM `training_questions` WHERE stage_id='$stage' ");
                                        while ($row=mysqli_fetch_array($questions)) {
                                            $id= $row['id'];
                                            echo "<p class='mb-1'>$row[question]</p>";
                                             $options=mysqli_query($con, "SELECT * FROM `training_questions_options` WHERE que_id='$id' ");
                                        while ($row=mysqli_fetch_array($options)) {
                                            $option_id=$row['option_id'];
                                             echo "<div class='form-check m-2'>
                                          <input class='form-check-input' type='radio' name='radioOption[][$id]' id='exampleRadios' value='$option_id' required>
                                          <label class='form-check-label' for='exampleRadios2'>
                                            $row[options]
                                          </label>
                                        </div>";
                                        echo "";
                                        }

                                        }
                                       

                                       
                             ?>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <a class="btn btn-lg btn-white float-left" data-toggle="wizard" href="#wizardStepTen">Back</a>
                                                                <button class="btn btn-primary float-right" name="submit">Submit</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Test question end -->
                                                </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                </div>
            </div> <!-- / .row -->
        </div>
    </div> <!-- / .main-content -->
    <!-- JAVASCRIPT
    ================================================== -->
    <?php include('include/footer.php');
      


    if (isset($_POST['submit'])) {

            // Attempt to retrieve answers
            $answers = isset($_POST['radio']) ? $_POST['radio'] : array();
            // Iterate through each answer
            foreach($answers as $id => $answer) {
                echo "Q{$id}: {$answer}<br />";
            }

        
        $stage= 1;
   
    if (isset($_SESSION['user_email'])) {
        $get_user=mysqli_query($con, "SELECT * FROM `customers` WHERE email='$_SESSION[user_email]' ");
      $row_user=mysqli_fetch_array($get_user);
      }

        foreach ($_POST['radioOption'] as $key => $val ) {
            $QID=implode('', array_values(array_keys($_POST['radioOption'][$key])));
            $ANS=implode('',$val);

            //insert into user option
            mysqli_query($con, "INSERT INTO `user_option_answers`(`uoa_id`, `user_id`, `question_id`, `option_id`) VALUES (NULL,'$row_user[id]','$QID','$ANS')");

            //get the correct answer
            $answer=mysqli_query($con, "SELECT * FROM `correct_answer` WHERE que_id='$QID'");
            foreach ($answer as $key => $value) {
                $row_answer[]=$value['answer'];
            }

            //get user answer
            $options=mysqli_query($con, "SELECT * FROM `training_questions_options` WHERE option_id=$ANS ");
            foreach ($options as $key => $value) {
                $row_options[]=$value['options'];
            }
            
        }

     
        if ($row_answer === $row_options) {    
            
            echo "<script>window.open('congrat','_self')</script>";
        }else{
            echo "<script> Swal.fire({
                    type: 'warning',
                    title: 'Opps! You failed the test',
                    text: 'Please go through the videos again',
                    AllowEscapeKey: false,
                    AllowOutsideClick: false,
                    AllowConfirmButton: true
                })</script>";
        }


        


       

        
    
      

        
    }

     ?>
</body>
<!-- Copied from https://dashkit.goodthemes.co/account-members.html by Cyotek WebCopy 1.8.0.652, Wednesday, 17 June 2020, 1:15:23 pm -->

</html>