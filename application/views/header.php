<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>KSR-PMI-USK</title>
    <meta name="description" content="Web Admin KSR PMI Unsyiah">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="apple-touch-icon" href="https://i.imgur.com/QRAUqs9.png"> -->
    <!-- <link rel="shortcut icon" href="https://i.imgur.com/QRAUqs9.png"> -->

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.0/normalize.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.2.0/css/flag-icon.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/theme/css/cs-skin-elastic.css">

    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/theme/css/style.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/theme/css/app.css">
    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->
    <link href="https://cdn.jsdelivr.net/npm/chartist@0.11.0/dist/chartist.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/jqvmap@1.5.1/dist/jqvmap.min.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/weathericons@2.1.0/css/weather-icons.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/fullcalendar@3.9.0/dist/fullcalendar.min.css" rel="stylesheet" />

    <script>
        var BASE_URL = '<?php echo base_url(); ?>index.php/';
        var FLAG_INIT_CHAT=0;
        var FLAG_INIT_NOTIF=0;
    </script>

</head>

<body>
    <!-- Left Panel -->
    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">
            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">

                    <li>
                        <a href="#" class="menu-app" data-val="searchDashboard"> <i class="menu-icon fa fa-search"></i>Search</a>
                    </li>

                    <li>
                        <a href="#" class="menu-app" data-val="donorDashboard"> <i class="menu-icon fa fa-tint"></i>Donor</a>
                    </li>

                    <li>
                        <a href="#" class="menu-app" data-val="articleDashboard/activities"> <i class="menu-icon fa fa-file-text"></i>Activities
                        </a>
                        <!-- <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="menu-icon fa fa-file-text"></i>Article</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-map-o"></i><a href="#" class="menu-app" data-val="articleDashboard/activities">Activities</a></li>
                            <li><i class="menu-icon fa fa-street-view"></i><a href="#" class="menu-app" data-val="articleDashboard/news">News</a></li>
                        </ul> -->
                    </li>

                    <li>
                        <a href="#" class="menu-app" data-val="galleryDashboard"> <i class="menu-icon fa fa-picture-o"></i>Gallery
                        </a>
                    </li>

                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="menu-icon fa fa-bar-chart"></i>Statistics</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-line-chart"></i><a href="#" class="menu-app" data-val="statisticsDashboard/allTheTime">All
                                    the time</a></li>
                            <li><i class="menu-icon fa fa-area-chart"></i><a href="#" class="menu-app" data-val="statisticsDashboard/annual">Annual</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="#" class="menu-app" data-val="aboutDashboard"> <i class="menu-icon fa fa-question-circle"></i>About
                        </a>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside>
    <!-- /#left-panel -->

    <!-- Right Panel -->
    <div id="right-panel" class="right-panel">
        <!-- Header-->
        <header id="header" class="header">
            <div class="top-left">
                <div class="navbar-header">
                    <a class="navbar-brand" href="<?php echo base_url(); ?>"><img src="<?php echo base_url(); ?>assets/theme/images/logo.png"
                            alt="Logo"></a>
                    <a class="navbar-brand hidden" href="<?php echo base_url(); ?>"><img src="<?php echo base_url(); ?>assets/theme/images/logo2.png"
                            alt="Logo"></a>
                    <a id="menuToggle" class="menutoggle"><i class="fa fa-bars"></i></a>
                </div>
            </div>
            <div class="top-right">
                <div class="breadcrumbs-inner">

                    <div class="page-header float-left">
                        <div class="page-title">
                            <input id="pos" type="hidden" value="searchDashboard">
                            <ol id=nav-text class="breadcrumb text-right">

                            </ol>
                        </div>
                    </div>

                </div>

                <div class="header-menu">
                    <div class="user-area dropdown float-right">
                        <a href="#" class="" data-toggle="dropdown" aria-expanded="false">
                            <i class="fa fa fa-user" style="font-size: 16pt"></i>
                        </a>

                        <div class="user-menu dropdown-menu">

                        <!--    <a class="nav-link" href="#"><i class="fa fa-cog"></i>Settings</a> -->

                            <a class="nav-link" href="<?php echo base_url(); ?>"><i class="fa fa-power-off"></i>Logout</a>
                        </div>
                    </div>

                </div>
            </div>
        </header>
        <!-- /#header -->