<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{env('APP_NAME')}} | Blank Page</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="{{asset('admin_lte/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="{{asset('admin_lte/dist/css/AdminLTE.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin_lte/plugins/pace/pace.min.css')}}">
    <link rel="stylesheet" href="{{asset('icofont/css/icofont.css')}}">
    <!-- change this to your custom theme to reduce load -->
    <link rel="stylesheet" href="{{asset('admin_lte/dist/css/skins/_all-skins.min.css')}}">
    <link href="{{asset('growl/stylesheets/jquery.growl.css')}}" rel="stylesheet" type="text/css" />
    @yield('css')
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

    <header class="main-header">
        <a href="{{route('/')}}" class="logo">
            <span class="logo-mini"><b>{{env('APP_NAME')[0]}}</b></span>
            <span class="logo-lg">{{env('APP_NAME')}}</span>
        </a>
        <nav class="navbar navbar-static-top">
            <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>

            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                    <li class="dropdown notifications-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-bell-o"></i>
                            <span class="label label-warning">10</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="header">You have 10 notifications</li>
                            <li>
                                <!-- inner menu: contains the actual data -->
                                <ul class="menu">
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-users text-aqua"></i> 5 new members joined today
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="footer"><a href="#">View all</a></li>
                        </ul>
                    </li>
                    <li class="dropdown user user-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <img src="{{asset('images/user.jpg')}}" class="user-image" alt="User Image">
                            <span class="hidden-xs">Amin Budiarto</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="user-header">
                                <img src="{{asset('images/user.jpg')}}" class="img-circle" alt="User Image">
                                <p>
                                    Amin Budiarto - Consultan
                                </p>
                            </li>
                            <li class="user-footer">
                                <div class="pull-left">
                                    <a href="{{route('profile.index')}}" class="btn btn-default btn-flat">Profile</a>
                                </div>
                                <div class="pull-right">
                                    <a href="#" class="btn btn-default btn-flat">Sign out</a>
                                </div>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <aside class="main-sidebar">
        <section class="sidebar">
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="{{asset('images/user.jpg')}}" class="img-circle" alt="User Image">
                </div>
                <div class="pull-left info">
                    <p>Amin Budiarto</p>
                    <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                </div>
            </div>
            <form action="#" method="get" class="sidebar-form">
                <div class="input-group">
                    <input type="text" name="q" class="form-control" placeholder="Search...">
                    <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
                </div>
            </form>
            @include('layouts.menu')
        </section>
    </aside>
    <div class="content-wrapper">
        <section class="content-header">
            <h1>
                @yield('title')
                <small>@yield('sub_title')</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                @yield('bc')
            </ol>
        </section>
        <section class="content">
            @yield('content')
        </section>
    </div>
    <footer class="main-footer">
        <div class="pull-right hidden-xs">
            <b>Versi</b> {{env('APP_VERSION')}}
        </div>
        <strong>Copyright &copy;  {{date('Y')}} <a href="#">{{env('APP_NAME')}}</a>.</strong> All rights
        reserved.
    </footer>
</div>
<script src="{{asset('admin_lte/plugins/jQuery/jquery-2.2.3.min.js')}}"></script>
<script src="{{asset('admin_lte/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{asset('admin_lte/plugins/slimScroll/jquery.slimscroll.min.js')}}"></script>
<script src="{{asset('admin_lte/plugins/fastclick/fastclick.js')}}"></script>
<script src="{{asset('admin_lte/plugins/pace/pace.min.js')}}"></script>
<script src="{{asset('admin_lte/dist/js/app.min.js')}}"></script>
<script src="{{asset('growl/javascripts/jquery.growl.js')}}" type="text/javascript"></script>
<script>
    $(document).ajaxStart(function() { Pace.restart(); });

    $.growl({ title: "Growl", message: "The kitten is awake!" });
    $.growl.error({ message: "The kitten is attacking!" });
    $.growl.notice({ message: "The kitten is cute!" });
    $.growl.warning({ message: "The kitten is ugly!" });
</script>
@yield('js')

</body>
</html>
