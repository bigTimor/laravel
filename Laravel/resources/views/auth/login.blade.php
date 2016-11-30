@extends('layouts.login')

@section('title')
    <div class="info text-muted text-center">
        <span>今天是充满希望的一天</span>
    </div>
@endsection

@section('content')
    <form class="login-form" action="{{ url('/login') }}" method="POST" onsubmit=" return validate_form_login()">
        {!! csrf_field() !!}
        <div class="form-group">
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-envelope-o"></i></span>
                <input type="text" class="form-control" placeholder="邮箱账号" onblur="validate_email(this)" name="email" value="{{ old('email') }}">
            </div>
        </div>
        <div class="form-group">
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-key"></i></span>
                <input type="password" class="form-control" placeholder="请输入密码" onblur="validate_password(this)" name="password">
            </div>
            <div class="checkbox">
                <label>
                    <input type="checkbox" name="remember" checked="checked"> <span style="color: #777">记住密码</span>
                </label>
            </div>
        </div>
        <div class="form-group">
            <button id="submit" type="submit" class="btn btn-primary btn-block submit ajax-post" target-form="login-form">立即登录</button>
            <p> </p>
            <a href="{{ url('/password/reset') }}">忘记密码</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="{{ url('/register') }}">点击注册</a>
        </div>
    </form>
@endsection
