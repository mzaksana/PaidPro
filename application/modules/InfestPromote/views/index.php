<!--

=========================================================
* Argon Dashboard - v1.1.0
=========================================================

* Product Page: https://www.creative-tim.com/product/argon-dashboard
* Copyright 2019 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://github.com/creativetimofficial/argon-dashboard/blob/master/LICENSE.md)

* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software. -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>
        Paid Promote Monitor
    </title>
    <!-- Favicon -->
    <link href="<?php echo base_url(); ?>assets/theme/vendor/argon/assets/img/brand/favicon.png"
        rel="icon"
        type="image/png">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700"
        rel="stylesheet">
    <!-- Icons -->

    <link href="<?php echo base_url(); ?>assets/theme/vendor/argon/assets/js/plugins/nucleo/css/nucleo.css"
        rel="stylesheet" />
    <link
        href="<?php echo base_url(); ?>assets/theme/vendor/argon/assets/js/plugins/@fortawesome/fontawesome-free/css/all.min.css"
        rel="stylesheet" />
    <!-- CSS Files -->
    <link href="<?php echo base_url(); ?>assets/theme/vendor/argon/assets/css/argon-dashboard.css?v=1.1.0"
        rel="stylesheet" />
    <link href="<?php echo base_url(); ?>assets/apps/InfestPromote/style/app.css" rel="stylesheet" />
    
    <script>
        var BASE_URL = '<?php echo base_url(); ?>index.php/';
        var BASE_PATH = '<?php echo base_url(); ?>';
        var MODULE_URL = '<?php echo base_url();?>application/modules/InfestPromote';
    </script>
    <script src='<?php echo base_url();?>core/InfestPromote/js/api.js' type="text/javascript"></script>
</head>

<body class="">
    <nav class="navbar navbar-vertical fixed-left navbar-expand-md navbar-light bg-white"
        id="sidenav-main">
        <div class="container-fluid">
            <!-- Toggler -->
            <button class="navbar-toggler"
                type="button"
                data-toggle="collapse"
                data-target="#sidenav-collapse-main"
                aria-controls="sidenav-main"
                aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- Brand -->
            <a class="navbar-brand pt-0 font-brand"
                href="./index.html">
                <img src="<?php echo base_url(); ?>assets/apps/InfestPromote/ic/lg.svg"
                    class="navbar-brand-img"
                    alt="..."> INF-V2
            </a>
          
            <!-- Collapse -->
            <div class="collapse navbar-collapse"
                id="sidenav-collapse-main">
                <!-- Collapse header -->
                <div class="navbar-collapse-header d-md-none">
                    <div class="row">
                        <div class="col-6 collapse-brand">
                            <a href="./index.html">
                                <img src="<?php echo base_url(); ?>assets/apps/InfestPromote/ic/lg.svg">
                            </a>
                        </div>
                        <div class="col-6 collapse-close">
                            <button type="button"
                                class="navbar-toggler"
                                data-toggle="collapse"
                                data-target="#sidenav-collapse-main"
                                aria-controls="sidenav-main"
                                aria-expanded="false"
                                aria-label="Toggle sidenav">
                                <span></span>
                                <span></span>
                            </button>
                        </div>
                    </div>
                </div>
                <!-- Form -->
                <form class="mt-4 mb-3 d-md-none">
                    <div class="input-group input-group-rounded input-group-merge">
                        <input type="search"
                            class="form-control form-control-rounded form-control-prepended"
                            placeholder="Search"
                            aria-label="Search">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <span class="fa fa-search"></span>
                            </div>
                        </div>
                    </div>
                </form>
                <!-- Navigation -->
                <ul id="menu" class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link active" href="#" data-menu="monitor" onclick="menu(this)">
                            <i class="ni ni-tv-2 text-primary"></i> Monitor
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-menu="hashtag" onclick="menu(this)">
                            <i class="fas fa-hashtag text-blue"></i> Hashtag
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link "
                            href="./examples/maps.html">
                            <i class="ni ni-pin-3 text-orange"></i> Maps
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link "
                            href="./examples/profile.html">
                            <i class="ni ni-single-02 text-yellow"></i> User profile
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link "
                            href="./examples/tables.html">
                            <i class="ni ni-bullet-list-67 text-red"></i> Tables
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link"
                            href="./examples/login.html">
                            <i class="ni ni-key-25 text-info"></i> Login
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link"
                            href="./examples/register.html">
                            <i class="ni ni-circle-08 text-pink"></i> Register
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="main-content">
        <div class="container-fluid mt--7">
            <div id="container">

            </div>
            <!-- <footer class="footer">
                <div class="row align-items-center justify-content-xl-between">
                    <div class="col-xl-6">
                        <div class="copyright text-center text-xl-left text-muted">
                            &copy; 2018 <a href="https://www.creative-tim.com"
                                class="font-weight-bold ml-1"
                                target="_blank">Creative Tim</a>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <ul class="nav nav-footer justify-content-center justify-content-xl-end">
                            <li class="nav-item">
                                <a href="https://www.creative-tim.com"
                                    class="nav-link"
                                    target="_blank">Creative Tim</a>
                            </li>
                            <li class="nav-item">
                                <a href="https://www.creative-tim.com/presentation"
                                    class="nav-link"
                                    target="_blank">About Us</a>
                            </li>
                            <li class="nav-item">
                                <a href="http://blog.creative-tim.com"
                                    class="nav-link"
                                    target="_blank">Blog</a>
                            </li>
                            <li class="nav-item">
                                <a href="https://github.com/creativetimofficial/argon-dashboard/blob/master/LICENSE.md"
                                    class="nav-link"
                                    target="_blank">MIT License</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </footer> -->
        </div>
    </div>
    <!--   Core   -->
    <script src="<?php echo base_url(); ?>assets/theme/vendor/argon/assets/js/plugins/jquery/dist/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/theme/vendor/argon/assets/js/plugins/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  
    <script src="<?php echo base_url(); ?>assets/apps/InfestPromote/js/app.js" type="text/javascript"></script>

</body>

</html>