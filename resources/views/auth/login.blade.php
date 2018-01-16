<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{env('APP_NAME')}} | Log in</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="{{asset('admin_lte/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="{{asset('admin_lte/dist/css/AdminLTE.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin_lte/plugins/iCheck/square/blue.css')}}">
    <link rel="stylesheet" href="{{asset('admin_lte/plugins/pace/pace.min.css')}}">
    <link href="{{asset('growl/stylesheets/jquery.growl.css')}}" rel="stylesheet" type="text/css" />

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body class="hold-transition login-page">
<div class="login-box">
    <div class="login-logo">
        <a href="{{route('/')}}"><b>{{env('APP_NAME')}}</b></a>
    </div>
    <div class="login-box-body">
        <p class="login-box-msg">Sign in to start your session</p>

        <form action="{{url('post_login')}}" method="post">
            <div class="form-group has-feedback">
                <input type="email" class="form-control" placeholder="Email">
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
                <input type="password" class="form-control" placeholder="Password">
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            </div>
            <div class="row">
                <div class="col-xs-8">
                    <div class="checkbox icheck">
                        <label>
                            <input type="checkbox"> Remember Me
                        </label>
                    </div>
                </div>
                <div class="col-xs-4">
                    <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
                </div>
            </div>
        </form>

        <a href="#">I forgot my password</a><br>
        <a href="{{url('register')}}" class="text-center">Register a new membership</a>

    </div>
</div>

<script src="{{asset('admin_lte/plugins/jQuery/jquery-2.2.3.min.js')}}"></script>
<script src="{{asset('admin_lte/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{asset('admin_lte/plugins/iCheck/icheck.min.js')}}"></script>
<script src="{{asset('admin_lte/plugins/pace/pace.min.js')}}"></script>
<script src="{{asset('growl/javascripts/jquery.growl.js')}}" type="text/javascript"></script>
<script>
    $(function () {
        $('input').iCheck({
            checkboxClass: 'icheckbox_square-blue',
            radioClass: 'iradio_square-blue',
            increaseArea: '20%' // optional
        });
    });

    $.growl({ title: "Growl", message: "The kitten is awake!" });
    $.growl.error({ message: "The kitten is attacking!" });
    $.growl.notice({ message: "The kitten is cute!" });
    $.growl.warning({ message: "The kitten is ugly!" });
</script>
</body>
</html>
