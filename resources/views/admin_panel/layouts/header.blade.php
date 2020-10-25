<!DOCTYPE html>
<html dir="rtl" lang="ar">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>لوحة تحكم برنامج (إسم البرنامج)</title>
    <!-- Favicon-->
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="{{ asset('AdminPanelAsset/plugins/bootstrap/css/bootstrap.css') }}" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="{{ asset('AdminPanelAsset/plugins/node-waves/waves.css') }}" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="{{ asset('AdminPanelAsset/plugins/animate-css/animate.css') }}" rel="stylesheet" />

    <!-- Sweetalert Css -->
        <link href="{{ asset('AdminPanelAsset/plugins/sweetalert/sweetalert.css') }}" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="{{ asset('AdminPanelAsset/css/style-ar.min.css') }}" rel="stylesheet">
    <link href="{{ asset('AdminPanelAsset/css/custom.css') }}" rel="stylesheet">

    <!-- Bootstrap Select Css -->
        <link href="{{ asset('AdminPanelAsset/plugins/bootstrap-select/css/bootstrap-select.css') }}" rel="stylesheet" />

    <!-- JQuery DataTable Css -->
        <link href="{{ asset('AdminPanelAsset/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css') }}" rel="stylesheet">

    
    <!-- file input -->
    <link href="{{ asset('AdminPanelAsset/plugins/bootstrap-fileinput/css/fileinput.css') }}" media="all" rel="stylesheet" type="text/css"/>
    
    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="{{ asset('AdminPanelAsset/css/themes/theme-dark-blue.css') }}" rel="stylesheet" />
</head>
<body class="theme-dark-blue">
        <!-- Page Loader -->
            <div class="page-loader-wrapper">
                <div class="loader">
                    <div class="preloader" dir="ltr">
                        <div class="spinner-layer pl-blue-grey">
                            <div class="circle-clipper left">
                                <div class="circle"></div>
                            </div>
                            <div class="circle-clipper right">
                                <div class="circle"></div>
                            </div>
                        </div>
                    </div>
                    <p>برجاء الإنتظار ....</p>
                </div>
            </div>
        <!-- #END# Page Loader -->
        <!-- Overlay For Sidebars -->
            <div class="overlay"></div>
        <!-- #END# Overlay For Sidebars -->
        <!-- Top Bar -->
            <nav class="navbar">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <a href="javascript:void(0);" class="bars"></a>
                    </div>
                    <div class="head-navbar" >
                        <ul class="nav navbar-nav navbar-left">
                            <!-- Notifications -->
                                <li class="dropdown" data-toggle="tooltip" data-placement="top" data-original-title="بيانات الأمان ">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button">
                                        <i class="material-icons">notifications</i>
                                        <span class="label-count">7</span>
                                    </a>
                                    <ul class="dropdown-menu notificate">
                                        <li class="header">إشعارات</li>
                                        <li class="body">
                                            <ul class="menu">
                                                <li>
                                                    <a href="javascript:void(0);">
                                                        <div class="icon-circle bg-light-green">
                                                            <i class="material-icons">notifications</i>
                                                        </div>
                                                        <div class="menu-info">
                                                            <h4>إشتراك جديد</h4>
                                                            <p>
                                                                <i class="material-icons">access_time</i> 14 mins ago
                                                            </p>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);">
                                                        <div class="icon-circle bg-light-green">
                                                            <i class="material-icons">notifications</i>
                                                        </div>
                                                        <div class="menu-info">
                                                            <h4>طلب جديد لترقية الحساب</h4>
                                                            <p>
                                                                <i class="material-icons">access_time</i> 22 mins ago
                                                            </p>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);">
                                                        <div class="icon-circle bg-light-green">
                                                            <i class="material-icons">notifications</i>
                                                        </div>
                                                        <div class="menu-info">
                                                            <h4>إشتراك جديد</h4>
                                                            <p>
                                                                <i class="material-icons">access_time</i> 14 mins ago
                                                            </p>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);">
                                                        <div class="icon-circle bg-light-green">
                                                            <i class="material-icons">notifications</i>
                                                        </div>
                                                        <div class="menu-info">
                                                            <h4>طلب جديد لترقية الحساب</h4>
                                                            <p>
                                                                <i class="material-icons">access_time</i> 22 mins ago
                                                            </p>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);">
                                                        <div class="icon-circle bg-light-green">
                                                            <i class="material-icons">notifications</i>
                                                        </div>
                                                        <div class="menu-info">
                                                            <h4>إشتراك جديد</h4>
                                                            <p>
                                                                <i class="material-icons">access_time</i> 14 mins ago
                                                            </p>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);">
                                                        <div class="icon-circle bg-light-green">
                                                            <i class="material-icons">notifications</i>
                                                        </div>
                                                        <div class="menu-info">
                                                            <h4>طلب جديد لترقية الحساب</h4>
                                                            <p>
                                                                <i class="material-icons">access_time</i> 22 mins ago
                                                            </p>
                                                        </div>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="footer">
                                            <a href="notifications.php">كل الإشعارات</a>
                                        </li>
                        
                                    </ul>
                                </li>
                            <!-- #END# Notifications -->
                            <!-- Messages -->
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button">
                                        <i class="material-icons">message</i>
                                        <span class="label-count">2</span>
                                    </a>
                                    <ul class="dropdown-menu notificate">
                                        <li class="header">الرسائل</li>
                                         <li class="body">
                                            <ul class="menu">
                                                <li>
                                                    <a href="javascript:void(0);">
                                                        <div class="icon-circle bg-cyan">
                                                            <i class="material-icons">message</i>
                                                        </div>
                                                        <div class="menu-info">
                                                            <h4>رسالة من نموذج اتصل بنا بالموقع</h4>
                                                            <p>
                                                                <i class="material-icons">access_time</i> 14 mins ago
                                                            </p>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);">
                                                        <div class="icon-circle bg-cyan">
                                                            <i class="material-icons">message</i>
                                                        </div>
                                                        <div class="menu-info">
                                                            <h4>تم الرد على رسالتك من العضو (إسم العضو)</h4>
                                                            <p>
                                                                <i class="material-icons">access_time</i> 22 mins ago
                                                            </p>
                                                        </div>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="footer">
                                            <a href="messages.php">كل الرسائل</a>
                                        </li>
                                    </ul>
                                </li>
                            <!-- #END# Messages -->
    
                            <li class="d-inline-block" data-toggle="tooltip" data-placement="top" data-original-title="تسجيل الخروج ">
                                <a href="javascript:void(0);" class=" waves-effect waves-block">
                                    <i class="material-icons">power_settings_new</i>
                                </a>
                            </li>
                           
                        </ul>
                    </div>
                </div>
            </nav>
        <!-- #Top Bar -->
        <!-- Left Sidebar -->
        @include('admin_panel.includes.left-sidebar')
        <!-- #END# Left Sidebar -->