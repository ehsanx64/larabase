<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="csrf-token" content="{{ csrf_token() }}">
    <title>داشبرد | کنترل پنل مدیریت</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="{{ $assets }}/dist/css/bootstrap-theme.css">
    <!-- Bootstrap rtl -->
    <link rel="stylesheet" href="{{ $assets }}/dist/css/rtl.css">
    <!-- persian Date Picker -->
    <link rel="stylesheet" href="{{ $assets }}/dist/css/persian-datepicker-0.4.5.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ $assets }}/bower_components/font-awesome/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="{{ $assets }}/bower_components/Ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="{{ $assets }}/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ $assets }}/dist/css/AdminLTE.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="{{ $assets }}/dist/css/skins/_all-skins.min.css">
    <!-- Morris chart -->
    <link rel="stylesheet" href="{{ $assets }}/bower_components/morris.js/morris.css">
    <!-- jvectormap -->
    <link rel="stylesheet" href="{{ $assets }}/bower_components/jvectormap/jquery-jvectormap.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{ $assets }}/bower_components/bootstrap-daterangepicker/daterangepicker.css">
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="{{ $assets }}/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

    <link rel="stylesheet" href="{{ $assets }}/dist/css/custom.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

    <header class="main-header">
        <!-- Logo -->
        <a href="{{ url('/') }}" class="logo">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini">پنل</span>
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg"><b>کنترل پنل مدیریت</b></span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                <span class="sr-only">Toggle navigation</span>
            </a>

            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                    <!-- User Account: style can be found in dropdown.less -->
                    <li class="dropdown user user-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <img src="{{ $assets }}/dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
                            <span class="hidden-xs">{{ Auth::user()->name }}</span>
                        </a>
                        <ul class="dropdown-menu">
                            <!-- User image -->
                            <li class="user-header">
                                <img src="{{ $assets }}/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                                <p>
                                    {{ Auth::user()->name }}
                                    <small>مدیریت کل سایت</small>
                                </p>
                            </li>
                            <!-- Menu Footer-->
                            <li class="user-footer">
                                <div class="pull-left">
                                    <a href={{ route('logout') }}" onClick=" event.preventDefault();document.getElementById(
                                    'logout-form').submit();" class="btn btn-default btn-flat">خروج</a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <!-- Control Sidebar Toggle Button -->
                </ul>
            </div>
        </nav>
    </header>
    <!-- right side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
            <!-- Sidebar user panel -->
            <div class="user-panel">
                <div class="pull-right image">
                    <img src="{{ $assets }}/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                </div>
                <div class="pull-right info">
                    <p>{{ Auth::user()->name }}</p>
                </div>
            </div>
            <!-- sidebar menu: : style can be found in sidebar.less -->
            <ul class="sidebar-menu" data-widget="tree">
                <li class="header">منو</li>
                <li class="{{ TH::handleActiveMenu('users') }}">
                    <a href="/index.php/users">
                        <i class="fa fa-users"></i> <span>کاربران</span>
                    </a>
                </li>
                <li class="{{ TH::handleActiveMenu('requests') }}">
                    <a href="/index.php/requests">
                        <i class="fa fa-file-text-o"></i> <span>درخواست‌ها</span>
                    </a>
                </li>
                <li class="{{ TH::handleActiveMenu('suggests') }}">
                    <a href="/index.php/suggests">
                        <i class="fa fa-commenting"></i> <span>پیشنهادات</span>
                    </a>
                </li>
                <li class="treeview {{ TH::handleActiveMenu('services') }}">
                    <a href="#">
                        <i class="fa fa-folder"></i> <span>خدمات</span>
                        <span class="pull-left-container">
                          <i class="fa fa-angle-right pull-left"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu">
                        <li>
                            <a href="/index.php/services"><i class="fa fa-th"></i>لیست خدمات</a>
                        </li>
                        <li>
                            <a href="/index.php/services/create"><i class="fa fa-circle-o"></i>خدمت جدید</a>
                        </li>
                    </ul>
                </li>
                <li class="{{ TH::handleActiveMenu('ads') }}">
                    <a href="/index.php/ads">
                        <i class="fa fa-eye"></i> <span>تبلیغات</span>
                    </a>
                </li>
                <li class="{{ TH::handleActiveMenu('receipts') }}">
                    <a href="/index.php/receipts">
                        <i class="fa fa-money"></i> <span>پرداخت‌ها</span>
                    </a>
                </li>
                <li class="treeview {{ TH::handleActiveMenu('units') }}">
                    <a href="#">
                        <i class="fa fa-folder"></i> <span>واحدها</span>
                        <span class="pull-left-container">
                          <i class="fa fa-angle-right pull-left"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu">
                        <li>
                            <a href="/index.php/units"><i class="fa fa-circle-o"></i>لیست واحدها</a>
                        </li>
                        <li>
                            <a href="/index.php/units/create"><i class="fa fa-circle-o"></i>واحد جدید</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </section>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                {{ $page_title }}
                <small>{{{ $subTitle or '' }}}</small>
            </h1>
            <ol class="breadcrumb">
                <li>
                    <a href="{{ url('/') }}"><i class="fa fa-dashboard"></i>پنل مدیریت</a>
                </li>
                <li class="active">
                    @if (isset($mainLink))
                        <a href="{{ $mainLink }}">{{ $page_title }}</a>
                    @else
                        {{ $page_title }}
                    @endif
                </li>
                @if (isset($subTitle))
                    <li>{{ $subTitle }}</li>
                @endif
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- Main row -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="box">
                            <div class="box-header">

                            </div>
                            <div class="box-body">
                                @yield('content')
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.row (main row) -->
            </div>
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer text-left">
        <strong style="display: block; text-align: center;">کلیه حقوق متعلق به برند ساختمانیار میباشد</strong>
    </footer>

    <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<div class="modal fade" id="main-modal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span></button>
                <h4 class="modal-title"></h4>
            </div>
            <div class="modal-body">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">خروج</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- jQuery 3 -->
<script src="{{ $assets }}/bower_components/jquery/dist/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{ $assets }}/bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="{{ $assets }}/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="{{ $assets }}/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="{{ $assets }}/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- Morris.js charts -->
{{--<script src="{{ $assets }}/bower_components/raphael/raphael.min.js"></script>--}}
{{--<script src="{{ $assets }}/bower_components/morris.js/morris.min.js"></script>--}}
<!-- Sparkline -->
<script src="{{ $assets }}/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="{{ $assets }}/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="{{ $assets }}/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="{{ $assets }}/bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="{{ $assets }}/bower_components/moment/min/moment.min.js"></script>
<script src="{{ $assets }}/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="{{ $assets }}/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="{{ $assets }}/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="{{ $assets }}/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="{{ $assets }}/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="{{ $assets }}/dist/js/adminlte.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{ $assets }}/dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ $assets }}/dist/js/demo.js"></script>
<script src="{{ $assets }}/js/scripts.js"></script>
</body>
</html>
