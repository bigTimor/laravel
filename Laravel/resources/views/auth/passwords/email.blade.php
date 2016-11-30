@extends('layouts.login')

@section('title')
    <div class="info text-muted text-center">
        <span>嘿！快回来！</span>
    </div>
@endsection

<!-- Main Content -->
@section('content')
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif
    <form class="login-form" action="{{ url('/password/email') }}"onsubmit="return validate_form_email()" method="POST">
        {!! csrf_field() !!}
        <div class="form-group">
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-envelope-o"></i></span>
                <input type="text" class="form-control" placeholder="填写要找回的邮箱账号" name="email" onblur="validate_email(this)" value="{{ old('email') }}">
            </div>
        </div>
        <div class="form-group">
            <button type="submit" id="submit" class="btn btn-primary btn-block submit ajax-post" target-form="login-form">发送邮件至邮箱找回密码</button>
            <a href="{{ url('/login') }}">返回登陆</a>
        </div>
    </form>
@endsection
