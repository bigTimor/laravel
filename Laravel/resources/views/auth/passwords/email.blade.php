@extends('layouts.login')

@section('title')
    <div class="info text-muted text-center">
        <span>嘿！快回来！</span>
    </div>
@endsection

<!-- Main Content -->
@section('content')
    <form class="login-form" action="{{ url('/password/email') }}" method="POST">
        {!! csrf_field() !!}
        <div class="form-group">
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-envelope-o"></i></span>
                <input type="text" class="form-control" placeholder="填写要找回的邮箱账号" name="email" value="{{ old('email') }}">
            </div>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block submit ajax-post" target-form="login-form">发送邮件至邮箱找回密码</button>
            <a href="{{ url('/login') }}">返回登陆</a>
        </div>
    </form>
<!--
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Reset Password</div>
                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/password/email') }}">
                        {!! csrf_field() !!}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input type="email" class="form-control" name="email" value="{{ old('email') }}">

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-envelope"></i>Send Password Reset Link
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
-->
@endsection
