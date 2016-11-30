@extends('layouts.login')

@section('title')
    <div class="info text-muted text-center">
        <span>断剑重铸之日！其势归来之时！</span>
    </div>
@endsection

@section('content')
    <form class="login-form" action="{{ url('/password/reset') }}" onsubmit="return validate_form_reset()" method="POST">
        {!! csrf_field() !!}
        <input type="hidden" name="token" value="{{ $token }}">
        <div class="form-group">
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-envelope-o"></i></span>
                <input type="text" class="form-control" placeholder="邮箱账号" name="email" onblur="validate_email(this)" value="{{ $email or old('email') }}">
            </div>
        </div>
        <div class="form-group">
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                <input type="password" class="form-control" placeholder="新密码" onblur="validate_password(this)" name="password">
            </div>
        </div>
        <div class="form-group">
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-eye"></i></span>
                <input type="text" class="form-control" name="verify" onblur="validate_verify(this)" placeholder="请输入验证码">
                            <span class="input-group-addon verifyimg-box">
                                <img class="verifyimg reload-verify" alt="验证码" src="{:U('verify')}" title="点击刷新">
                            </span>
            </div>
        </div>
        <div class="form-group">
            <button type="submit" id="submit" class="btn btn-primary btn-block submit ajax-post" target-form="login-form">重置密码</button>
            <a href="{{ url('/login') }}">返回登陆</a>
        </div>
    </form>
@endsection
