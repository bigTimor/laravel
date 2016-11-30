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
</body>
<script type="text/javascript" src="{{ asset('/Js/jquery.js') }}"></script>

<!--弹窗js-->
<script type="text/javascript" src="{{ asset('/layer/layer.js') }}"></script>

<!--特效js-->
<script src="{{ asset('/Js/particles.js') }}"></script>
<script src="{{ asset('/Js/admin.min.js') }}"></script>
<script>
    @if($errors->has('name'))
    layer.msg("  {{ $errors->first('name') }} (ง •̀_•́)ง", {icon: 5});
    @elseif($errors->has('email'))
    layer.msg("  {{ $errors->first('email') }} (ง •̀_•́)ง", {icon: 5});
    @elseif($errors->has('password'))
    layer.msg("  {{ $errors->first('password') }} (ง •̀_•́)ง", {icon: 5});
    @endif

    function validate_name(_this) {
        var name = $(_this).val();
        if(name.length < 2 || name.leng >20){
            $(_this).css('border','1px solid red');
            $('#submit').attr('disabled','false');
        }else{
            $(_this).css('border','1px solid #d7d7d7');
            if($('input[name=password]').val().length > 6 && $('input[name=verify]').val().length == 4){
                $('#submit').removeAttr('disabled');
            }
        }
    }

    function validate_email(_this){
        var email = $(_this).val();
        var rule =  /^([a-zA-Z0-9]+[_|\_|\.]?)*[a-zA-Z0-9]+@([a-zA-Z0-9]+[_|\_|\.]?)*[a-zA-Z0-9]+\.[a-zA-Z]{2,3}$/;
        if(!rule.test(email)){
            $(_this).css('border','1px solid red');
            $('#submit').attr('disabled','false');
        }else{
            $(_this).css('border','1px solid #d7d7d7');
            $('#submit').removeAttr('disabled');
        }
    }

    function validate_password(_this) {
        var password = $(_this).val();
        if(password.length < 6){
            $(_this).css('border','1px solid red');
            $('#submit').attr('disabled','false');
        }else{
            $(_this).css('border','1px solid #d7d7d7');
            $('#submit').removeAttr('disabled');
        }
    }

    function validate_verify(_this) {
        var verify = $(_this).val();
        if(verify.length == 4){
            $(_this).css('border','1px solid #d7d7d7');
            $('#submit').removeAttr('disabled');
        }else{
            $(_this).css('border','1px solid red');
            $('#submit').attr('disabled','false');
        }
    }

    function validate_form_register() {
        var name = $('input[name=name]').val();
        var email = $('input[name=email]').val();
        var password = $('input[name=password]').val();
        var verify = $('input[name=verify]').val();
        var rule =  /^([a-zA-Z0-9]+[_|\_|\.]?)*[a-zA-Z0-9]+@([a-zA-Z0-9]+[_|\_|\.]?)*[a-zA-Z0-9]+\.[a-zA-Z]{2,3}$/;
        if(name == '' || email == '' || password =='' || name.length < 2 || name.length > 20 || password.length < 6 || verify.length != 4 || !rule.test(email)){
            return false;
        }
    }

    function validate_form_login() {
        var email = $('input[name=email]').val();
        var password = $('input[name=password]').val();
        var rule =  /^([a-zA-Z0-9]+[_|\_|\.]?)*[a-zA-Z0-9]+@([a-zA-Z0-9]+[_|\_|\.]?)*[a-zA-Z0-9]+\.[a-zA-Z]{2,3}$/;
        if(email == '' || password =='' || password.length < 6 || !rule.test(email)){
            return false;
        }
    }

    function validate_form_email() {
        var email = $('input[name=email]').val();
        var rule =  /^([a-zA-Z0-9]+[_|\_|\.]?)*[a-zA-Z0-9]+@([a-zA-Z0-9]+[_|\_|\.]?)*[a-zA-Z0-9]+\.[a-zA-Z]{2,3}$/;
        if(email == '' || !rule.test(email)){
            return false;
        }
    }

    function validate_form_reset() {
        var email = $('input[name=email]').val();
        var password = $('input[name=password]').val();
        var verify = $('input[name=verify]').val();
        var rule =  /^([a-zA-Z0-9]+[_|\_|\.]?)*[a-zA-Z0-9]+@([a-zA-Z0-9]+[_|\_|\.]?)*[a-zA-Z0-9]+\.[a-zA-Z]{2,3}$/;
        if(email == '' || password =='' || password.length < 6 || verify.length != 4 || !rule.test(email)){
            return false;
        }
    }
</script>
</html>
