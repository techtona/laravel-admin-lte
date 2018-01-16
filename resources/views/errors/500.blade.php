<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{env('APP_NAME')}} | 500 Internal Server Error</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="{{url('/')}}/admin_lte/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{url('/')}}/admin_lte/dist/css/AdminLTE.min.css">
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body class="hold-transition">
<section class="content">
    <br>
    <br>
    <div class="error-page">
        <h2 class="headline text-red"> 500</h2>
        <div class="error-content">
            <br>
            <h3><i class="fa fa-warning text-yellow"></i> Oops! Internal Server Error.</h3>
            <p>Terdapat kesalahan internal pada server.
                Silahkan coba <a href="{{route('/')}}">Kembali ke Halaman Home atau Kontak Pengembang Software</a>.
            </p>
        </div>
    </div>
</section>
</body>
</html>
