<!DOCTYPE html>

<html dir="rtl">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ isset($title) ? 'این‌کاره - ' . $title : 'این‌کاره' }}</title>

    <!-- External stylesheets -->
    <link href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet" type="text/css">

    <link rel="icon" href="{{ $assetsUrl }}/img/favicon.png" type="image/x-icon"/>

    <!-- Core stylesheets -->
    <link href="{{ $assetsUrl }}/css/bootstrap.rtl.css?v=1" rel="stylesheet" type="text/css">
    <link href="{{ $assetsUrl }}/css/pixeladmin.rtl.css?v=1" rel="stylesheet" type="text/css">
    <link href="{{ $assetsUrl }}/css/widgets.rtl.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{ $assetsUrl }}/font-awesome/css/font-awesome.min.css"
          type="text/css"/><!-- Font Awesome -->
    <link href="{{ $assetsUrl }}/css/multiple-select.css" rel="stylesheet" type="text/css">
    <!-- Theme -->
    <link href="{{ $assetsUrl }}/css/themes/clean.rtl.css" rel="stylesheet" type="text/css">
    <script src="{{ $assetsUrl }}/js/jquery-3.1.1.min.js"></script>

    <link href="{{ $assetsUrl }}/css/jquery.bootgrid.min.css" rel="stylesheet"/>
    <script type="text/javascript" src="{{ $assetsUrl }}/js/jquery.bootgrid.min.js"></script>

    <script type="text/javascript" src="{{ $assetsUrl }}/js/numeral.min.js"></script>
    <link type="text/css" href="{{ $assetsUrl }}/css/js-persian-cal.css" rel="stylesheet"/>
    <script type="text/javascript" src="{{ $assetsUrl }}/js/js-persian-cal.min.js"></script>
    <script type="text/javascript" src="{{ $assetsUrl }}/js/jquery.form.js"></script>
    <script type="text/javascript" src="{{ $assetsUrl }}/js/multiple-select.js"></script>

    <style type="text/css">
        .blue {
            color: rgb(65, 161, 255);
            font-size: medium;
        }

        .bordered {
            border: solid 2px #484848;
            border-radius: 5px;
            padding: 5px;
            background: #ffffff;
            background: -moz-linear-gradient(top, #ffffff 0%, #f6f6f6 47%, #ededed 100%);
            background: -webkit-linear-gradient(top, #ffffff 0%, #f6f6f6 47%, #ededed 100%);
            background: linear-gradient(to bottom, #ffffff 0%, #f6f6f6 47%, #ededed 100%);
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffffff', endColorstr='#ededed', GradientType=0);
        }

        input[type="file"] {
            display: none;
        }

        .custom-image-upload {
            border: 1px solid #ccc;
            display: inline-block;
            padding: 6px 12px;
            cursor: pointer;
        }

        .search {
            width: 120px !important;
        }

        .grid-responsive {

        }

        .grid-res-show {
            display: none;
        }

        .tran {
            background-color: #f8f8f8;
            border: solid 1px #afafaf;
            border-radius: 5px;
            padding: 5px;
        }

        .tran span {
            display: block;
        }

        .tran span.title {
            text-align: right;
        }

        .tran span.info {
            text-align: left;
            color: #922a2a;
        }

        @media (max-width: 700px) {
            .grid-responsive {
                display: none;
            }

            .grid-res-show {
                display: block;
            }
        }

        .widget-messages-alt-item {
            margin: 5px;
            background-color: #566986;
            border: solid 1px #7888a0;
            border-radius: 4px;

        }

        .readed {
            background: #3d4a5d;
        }

        .notread {
            transition: all .3s;
        }

        .notread:hover {
            background: #3d4a5d;
        }

        .widget-messages-alt-avatar {
            margin-top: 8px;
            width: 48px;
            height: 48px;
        }

        .widget-messages-alt-subject {
            height: 19px;
        }

        .widget-messages-alt-item {
            margin: 0px !important;
            padding: 4px 62px 4px 5px !important;
        }

        #navbar-messages {
            width: 400px !important;
            max-width: 100%;
        }

        pre {
            white-space: pre-wrap; /* CSS3 browsers  */
            white-space: -moz-pre-wrap !important; /* 1999+ Mozilla  */
            white-space: -pre-wrap; /* Opera 4 thru 6 */
            white-space: -o-pre-wrap; /* Opera 7 and up */
            word-wrap: break-word;
            width: 100%;
        }

        /* jquery-sortable styles */
        body.dragging, body.dragging * {
            cursor: move !important;
        }

        .dragged {
            position: absolute;
            opacity: 0.5;
            z-index: 2000;
        }

        ol.example li.placeholder {
            position: relative;
            /** More li styles **/
        }

        ol.example li.placeholder:before {
            position: absolute;
            /** Define arrowhead **/
        }

        /* myown styles */
        #child > li,
        #foo > li {
            margin-bottom: 10px;
            cursor: move;
        }

        #child > li {
            margin-bottom: 5px;
            background-color: white;
        }

        .form-builder-question-list {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .form-builder-question-list > li {
            padding: 4px 0;
            border: 1px solid gray;
            overflow: hidden;
        }

        .form-builder-question-list > li > .question-step {
            float: right;
            width: 30px;
            text-align: center;
        }

        .form-builder-question-list > li.active {
            background-color: #e6e6e6;
        }

        ul#form-builder-step-list {
            float: right;
            width: 20px;
            list-style: none;
        }

        ul#form-builder-step-list li {

            width: 20px;
        }
    </style>

    <?php
    // Grocery CRUD scripts
    if (!empty($crud_data)) {
        foreach ($crud_data->css_files as $file)
            echo link_tag($file) . PHP_EOL;

        foreach ($crud_data->js_files as $file)
            //            if (strpos($file, 'jquery-1.10.2.min.js') === FALSE)
            echo "<script src='$file'></script>" . PHP_EOL;
    }
    ?>

    <link href="/css/style.css" type="text/css" rel="stylesheet"/>

    <script type="text/javascript">
        //var siteURL = 'http://club.acccard.com/filemanager/';
        var siteURL = 'http://club.acccard.com/filemanager/index.html';
    </script>
</head>
<body>
<!-- Nav -->
<nav class="px-nav px-nav-left">

    <button type="button" class="px-nav-toggle" data-toggle="px-nav">
        <span class="px-nav-toggle-arrow"></span>
        <span class="navbar-toggle-icon"></span>
        <span class="px-nav-toggle-label font-size-11">مخفی کردن منو</span>
		<span class="badge badge-primary hidden-lg hidden-md hidden-sm"
              style="margin-top: -20px; margin-right: 0px; float: right; z-index: 999999999;"></span>
    </button>

    <ul class="px-nav-content">
        <li class="px-nav-box p-a-3 b-b-1" id="demo-px-nav-box">
            <img src="" alt=""
                 class="pull-xs-left m-r-2 border-round" id="imgProfileRight"
                 style="width: 54px; height: 54px; cursor: pointer;" data-toggle="modal"
                 data-target="#modal-change-photo">

            <div class="font-size-16"><span
                        class="font-weight-light"><strong></strong><br> خوش آمدید! </span></div>
        </li>

        @unless (empty($panelMenus))
            @foreach ($panelMenus as $panelMenu)
                <li class="px-nav-item @if (isset($panelMenu['submenu']) && count($panelMenu['submenu']) > 0) px-nav-dropdown @endif">
                    <a href="@if (!isset($panelMenu['submenu'])) {{ $panelMenu['url'] }} @else {{ '#' }} @endif">
                        <i class="px-nav-icon {{ $panelMenu['icon'] }}"></i>
                        <span class="px-nav-label">{{ $panelMenu['title'] }}</span>
                    </a>

                    @if (isset($panelMenu['submenu']) && count($panelMenu['submenu']) > 0)
                        <ul class="px-nav-dropdown-menu">
                            @foreach ($panelMenu['submenu'] as $submenu)
                                <li class="px-nav-item">
                                    <a href="{{ $submenu['url'] }}">
                                        <i class="px-nav-icon {{ $submenu['icon'] }}"></i>
                                        <span class="px-nav-label">{{ $submenu['title'] }}</span>
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    @endif
                </li>
            @endforeach
        @endunless

    </ul>


</nav>

<!-- Navbar -->
<nav class="navbar px-navbar">

    <!-- Header -->
    <div class="navbar-header">
        <a class="navbar-brand px-demo-brand" href=""><span class="px-demo-logo"> <img
                        src="{{ $assetsUrl }}/img/logo.png" alt="Logo"
                        style="height: 32px;"/> </span> &nbsp;&nbsp;{{ $panelTitle }}</a>
    </div>

    <!-- Navbar togglers -->
    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#px-demo-navbar-collapse"
            aria-expanded="false"><i class="navbar-toggle-icon"></i>
		<span class="label label-danger hidden" style="position: absolute; left: 5px; top: 15px;"
              id="notifs1">1</span>
    </button>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="px-demo-navbar-collapse">
        <ul class="nav navbar-nav">

        </ul>

        <ul class="nav navbar-nav navbar-right">
            {{--
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                   aria-expanded="true">
                    <i class="px-navbar-icon fa fa-envelope font-size-14"></i>
                    <span class="px-navbar-icon-label">پیام های دریافتی</span>
                    <span class="px-navbar-label label label-danger" id="notifs">24</span>
                </a>

                <div class="dropdown-menu p-a-0" style="">
                    <div id="navbar-messages" style="height: 280px; position: relative;"
                         class="ps-container ps-theme-default" data-ps-id="2b58566a-76e1-c6ef-3e81-ba43e26c63a8">

                        <!-- message loop -->

                        <div class="ps-scrollbar-x-rail" style="left: 0px; bottom: 3px;">
                            <div class="ps-scrollbar-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                        </div>
                        <div class="ps-scrollbar-y-rail" style="top: 0px; right: 3px;">
                            <div class="ps-scrollbar-y" tabindex="0" style="top: 0px; height: 0px;"></div>
                        </div>
                    </div>
                    <a href="#" class="widget-more-link">لیست کامل پیام ها</a>
                </div> <!-- / .dropdown-menu -->
            </li>

            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                   aria-expanded="false">
                    <!-- User avatar -->
                    <img src="" alt="" id="imgProfileTop"
                         class="px-navbar-image">
                    <span class="hidden-md">Username</span>

                </a>
                <ul class="dropdown-menu">
                    <li style="display: none;"><a href=""><span class="label label-warning pull-xs-right"><i
                                        class="fa fa-asterisk"></i></span>ویرایش مشخصات</a></li>
                    <li><a href="javascript:" onclick="ChangePassword();">تغییر رمز عبور</a></li>
                    <li class="divider"></li>
                    <li><a href=""><i class="dropdown-icon fa fa-power-off"></i>&nbsp;&nbsp;خروج</a>
                    </li>
                </ul>
            </li>

            --}}


            <li>
                <a href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                    <i class="fa fa-power-off">&nbsp;</i>
                    خروج از سیستم
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
            </li>

        </ul>
    </div>


</nav>

<!-- Content -->
<div class="px-content">
    <h2>{{ $title }}</h2>

    @yield('content')
</div>

<!-- Footer -->
<footer class="px-footer px-footer-bottom">
    <div class="box m-a-0 bg-transparent">
    </div>

    <hr class="page-wide-block">

    <span class="text-muted hidden">Copyright © 2017 Fanap LLC. All rights reserved.</span>

</footer>


<div class="modal fade" id="modal-change-photo" tabindex="-1">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">×</button>
                <h4 class="modal-title">آپلود تصویر پروفایل</h4>
            </div>
            <div class="modal-body">

                <div class="row">
                    <center>
                        <img src="" alt="" id="imgProfile"
                             class="border-round"
                             style="width: 128px; height: 128px; cursor: pointer; text-align: center;">

                        <hr>

                        <form method="POST" id="photo-upload" enctype="multipart/form-data">
                            <br><br>
                            <label for="image" class="custom-image-upload">
                                <i class="fa fa-cloud-upload"></i> انتخاب تصویر
                            </label>
                            <input id="image" name="file" type="file" style="display: none !important;"/>
                            <br/><br/>
                            <input type="hidden" name="upload" value="1"/>
                        </form>

                        <hr>

                        <form id="verify_pic" style="display: none;">
                            <button class="btn btn-success">&nbsp;&nbsp;&nbsp;&nbsp;ثبت
                                پروفایل&nbsp;&nbsp;&nbsp;&nbsp;</button>
                        </form>

                    </center>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    var uploadData = null;
    document.getElementById("image").onchange = function () {
        $("#photo-upload").submit();
    };

    $('#photo-upload').submit(function () {
        var formData = new FormData(this);

        $.isLoading({text: "لطفا صبر کنید"});
        $.ajax({
            url: '',
            type: 'POST',
            data: formData,
            async: false,
            success: function (data) {
                if (!data.Path) {
                    showError('آپلود فایل بل خطل متوقف شد.');
                }
                else {
                    uploadData = data;
                    document.getElementById('imgProfile').src = data.Path;
                    $('#verify_pic').css('display', 'block');

                }
            },
            complete: function () {
                $.isLoading("hide");
            },
            dataType: 'json',
            cache: false,
            contentType: false,
            processData: false
        });

        return false;
    });


    $('#verify_pic').submit(function () {

        $.isLoading({text: "لطفا صبر کنید"});
        $.post('',
                {name: uploadData.Name},
                function (data) {
                    if (data == 'ok') {
                        $('#modal-change-photo').modal('hide');
                        document.getElementById('imgProfileRight').src = uploadData.Path;
                        document.getElementById('imgProfileTop').src = uploadData.Path;
                    }
                    else {
                        showError('عملیات با خطا متوقف شد.');
                    }
                }).fail(function () {
            showError('اتصال به سرور برقرار نشد.');
        }).always(function () {
            $.isLoading("hide");
        });


        return false;
    });

</script>

<div class="modal fade" id="modal-show-notification" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">×</button>
                <h4 class="modal-title" id="modal-title-notification">تغییر رمز عبور</h4>
            </div>
            <div class="modal-body">

                <div class="row">
                    <div class="col-md-12">
                <pre id="modal-body-notification" style="font-family: 'YEKAN'; font-size: small;">
                </pre>
                    </div>
                    <div class="col-md-12 hidden" id="modal-date-notification"
                         style="background-color: #efefef; color: #656565; text-align: left; margin-top: 30px !important; direction: ltr;">

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    function ShowNotification(id) {
        $.post('',
                {id: id},
                function (data) {
                    try {
                        var count = parseInt(data);

                        if (!isNaN(count)) {
                            $('#notifs').html(count);
                            $('#notifs1').html(count);

                            if (count == 0)
                                $('#notifs').addClass('hidden');
                            $('#notifs1').addClass('hidden');
                        }
                    }
                    catch (Err) {
                    }
                });

        $('#modal-title-notification').html($('#mtitle' + id).html() + '<span style="font-size: x-small;"> (' + $('#mdate' + id).html() + ')</span>');
        $('#modal-body-notification').html($('#mcontent' + id).html());
        $('#modal-date-notification').html($('#mdate' + id).html());
        $('#modal-show-notification').modal('show');

    }
</script>

<div class="modal fade" id="modal-change-password" tabindex="-1">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">×</button>
                <h4 class="modal-title">تغییر رمز عبور</h4>
            </div>
            <div class="modal-body">

                <div class="row">
                    <div class="col-md-12">
                        <form id="fChangePassword">
                            <span>رمز عبور فعلی</span>
                            <input type="password" type="password" id="currentPassword" class="form-control"/>
                            <br>
                            <span>رمز عبور جدید</span>
                            <input type="password" type="password" id="newPassword" class="form-control"/><br>
                            <span>تکرار رمز عبور جدید</span>
                            <input type="password" type="password" id="renewPassword" class="form-control"/><br>

                            <hr>
                            <center>
                                <button type="submit" class="btn btn-success">تغییر رمز</button>
                            </center>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    function ChangePassword() {
        $('#currentPassword').val('');
        $('#newPassword').val('');
        $('#renewPassword').val('');
        $('#modal-change-password').modal('show');
    }

    $(document).ready(function () {
        $('#fChangePassword').submit(function () {
            try {
                var pass = $('#currentPassword').val();
                var newpass = $('#newPassword').val();
                var renewpass = $('#renewPassword').val();

                if (pass == '' || newpass == '' || renewpass == '') {
                    showError('لطفا اطلاعات را به صورت کامل وارد نمایید');
                    return false;
                }

                if (newpass != renewpass) {
                    showError('رمز عبور و تکرار آن مطابقت ندارند.');
                    return false;
                }

                $.isLoading({text: "لطفا صبر کنید"});
                $.post('',
                        {p: pass, np: newpass},
                        function (data) {
                            if (data == 'ok') {
                                $('#modal-change-password').modal('hide');
                                showSuccess('تغییر رمز با موفقیت انجام شد.');
                            }
                            else {
                                showError(data);
                            }
                        }).fail(function () {
                    showError('اتصال به سرور برقرار نشد.');
                }).always(function () {
                    $.isLoading("hide");
                });

            }
            catch (err) {
            }

            return false;
        });
    });
</script>

<!-- ==============================================================================
|
|  SCRIPTS
|
=============================================================================== -->

<!-- Load jQuery -->

<!-- Core scripts -->
<script src="{{ $assetsUrl }}/js/bootstrap.js"></script>
<script src="{{ $assetsUrl }}/js/pixeladmin.js"></script>
<script type="text/javascript" src="{{ $assetsUrl }}/js/jquery.isloading.min.js"></script>


<script type="text/javascript">
    // -------------------------------------------------------------------------
    // Initialize DEMO
    function replaceAll(find, replace, str) {
        return str.replace(new RegExp(find, 'g'), replace);
    }

    function showError(err) {
        toastr["error"](err, "پیغام خطا");
    }

    function showSuccess(err) {
        toastr["success"](err, "پیغام");
    }


    $(function () {
        var file = String(document.location).split('/').pop();

        // Remove unnecessary file parts
        file = file.replace(/(\.html).*/i, '$1');

        if (!/.html$/i.test(file)) {
            file = 'index.html';
        }

        // Activate current nav item
        $("body > .px-nav")
                .find('.px-nav-item > a[href="' + file + '"]')
                .parent()
                .addClass('active');

         $("body > .px-nav").pxNav();
         $('body > .px-footer').pxFooter();

         $('#navbar-notifications').perfectScrollbar();
         $('#navbar-messages').perfectScrollbar();
    });
</script>
@yield('footer-content')
<script type="text/javascript" src="{{ $assetsUrl }}/js/scripts.js"></script>
</body>
</html>