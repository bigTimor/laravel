<!DOCTYPE html>
<html lang="zh-CN"><head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->

    <!--  网站搜索优化  -->
    <!--  <meta name="description" content="">  -->
    <!--  <meta name="author" content="">  -->
    <!--  end  -->

    <!-- 网站标识 -->
    <link rel="icon" href="{{ asset('Images/favicon.ico') }}">

    <title>个人博客--</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('/Css/bootstrap.css') }}" rel="stylesheet">
    <!-- 自定义css -->
    <link href="{{ asset('/Css/home/blood.css') }}" rel="stylesheet">

</head>

<body>
<div class="blog-masthead navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container">
        <nav class="blog-nav">
            <a class="blog-nav-item nav-first" href="{{ url('/') }}">首页</a>
            <a class="blog-nav-item" href="#">PHP</a>
            <a class="blog-nav-item" href="#">ThinkPHP</a>
            <a class="blog-nav-item" href="#">Laravel</a>
            <a class="blog-nav-item" href="#">关于我</a>
            <a class="blog-nav-item" href="#"></a>
            <a class="blog-nav-item" href="#"></a>
            <a class="blog-nav-item" href="#"></a>
            <a class="blog-nav-item" href="#"></a>
            <a class="blog-nav-item" href="#"></a>
            @if (Auth::guest())
                <a class="blog-nav-item nav-end" onclick="login()" >登录</a>
            @else
                <a href="#" class="blog-nav-item" >
                        {{ Auth::user()->name }}
                </a>
                <a class="blog-nav-item" href="{{ url('/logout') }}">退出</a></li>
            @endif
        </nav>
    </div>
</div>

<div class="container">
    <div class="blog-header">
        <h1 class="blog-title"><span style="color: #757d97">个人博客</span></h1>
        <br />
        <p class="lead blog-description">任何事情，现在开始去做，都不晚！</p>
    </div>
    <div class="row blog-content">

        <!--  页面内容  -->
        @yield('content')

    </div>
</div>

<div class="container comment">
    <p>评论：</p>
    <textarea class="textbox"></textarea>
</div>


<footer class="blog-footer">
    <p>友情链接：<a href="http://getbootstrap.com/">Bootstrap</a> by <a href="https://twitter.com/mdo">@mdo</a>.</p>
    <p>
        <a href="#">回到顶部</a>
    </p>
</footer>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- 这些js文件放在文档结尾，能使页面加载速度更快 -->
<script src="{{ asset('/Js/jquery.js') }}"></script>
<script src="{{ asset('/Js/bootstrap.js') }}"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="{{ asset('/Js/ie10-viewport-bug-workaround.js') }}"></script>
<script type="text/javascript" src="{{ asset('/layer/layer.js') }}"></script>
</body>
</html>