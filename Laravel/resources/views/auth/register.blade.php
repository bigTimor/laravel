@extends('layouts.login')
@section('title')
    <div class="info text-muted text-center">
        <span>我要收你做好朋友！</span>
    </div>
@endsection
@section('content')
    <form class="login-form" action="{{ url('/register') }}" onsubmit="return validate_form_register()" method="POST">
        {!! csrf_field() !!}
        <div class="form-group">
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                <input type="text" class="form-control" placeholder="用户名" name="name" onblur="validate_name(this)" value="{{ old('name') }}">
            </div>
        </div>
        <div class="form-group">
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-envelope-o"></i></span>
                <input type="text" class="form-control" placeholder="邮箱账号" name="email" onblur="validate_email(this)" value="{{ old('email') }}">
            </div>
        </div>
        <div class="form-group">
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                <input type="password" class="form-control" placeholder="密码" name="password" onblur="validate_password(this)">
            </div>
        </div>
        <div class="form-group">
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-eye"></i></span>
                <input type="text" class="form-control" name="verify" placeholder="验证码" onblur="validate_verify(this)">
                            <span class="input-group-addon verifyimg-box">
                                <img class="verifyimg reload-verify" alt="验证码" src="{:U('verify')}" title="点击刷新">
                            </span>
            </div>
        </div>
        <div class="form-group">
            <button id="submit" type="submit" class="btn btn-primary btn-block submit ajax-post" target-form="login-form">立即注册</button>
            <a href="{{ url('/login') }}">返回登陆</a>
        </div>
    </form>
@endsection
