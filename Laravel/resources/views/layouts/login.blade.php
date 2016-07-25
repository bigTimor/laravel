<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="renderer" content="webkit">
    <title>后台管理</title>

    <link rel="stylesheet" type="text/css" href="{{ asset('/Css/admin.min.css') }}">
</head>

<body id="body-public-login" class="body-public body-public-login">

<div id="particles-js" class="background"></div>

<div class="container">
    <div class="panel panel-default login-panel col-xs-12 col-md-4 col-md-offset-4">
        <div class="panel-heading">
            <h3 class="panel-title text-center">
                <!--log图片-->
                <img class="logo" src="{{ asset('/Images/logo.png') }}">
            </h3>
            @yield('title')
        </div>
        <div class="panel-body">
            @yield('content')
        </div>
    </div>
</div>

<div class="bottom navbar-fixed-bottom text-center">
    <script type="text/javascript" src="{{ asset('/Js/jquery.js') }}"></script>

    <!--弹窗js-->
    <script type="text/javascript" src="{{ asset('/layer/layer.js') }}"></script>

    <!--特效js-->
    <script src="{{ asset('/Js/particles.js') }}"></script>
    <script src="{{ asset('/Js/admin.min.js') }}"></script>
</div>
</body>
</html>
