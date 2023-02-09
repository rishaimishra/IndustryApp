<!DOCTYPE html>
<html>

<head>
    <title>Forgot Password Email</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <style type="text/css">
        .linkk:hover {
            background: #01b02e !important;
        }
    </style>
    <div style="max-width:640px; margin:0 auto;">
        <div
            style="/*width:620px;*/background:#F9F9F9; /*padding: 0px 10px;*/ border:1px solid #d9d8d8; border-bottom: none;height: 100px; margin: -9px 0px -13px 0px;">
            <div
                style="float: none; text-align: center; margin-top: 20px; background:url('{{ URL::to('#') }}') repeat center center">
                <img src="{{asset('public/admin/assets/images/logo.png')}}" width="135" alt="">
            </div>
        </div>
        <div style="max-width:620px; border:1px solid #d9d8d8; margin:0 0; padding:15px; ">

            <div style="display:block; overflow:hidden; width:100%;">

                Hello {{$data['name']}},
                <p>
                    Your change password  link
                    @if(@$data['type'])
                    <a href=" {{route('admin.forget.password.email.verify',['id'=>$data['id'],'vcode'=>$data['email_vcode']])}}">Click here to change your password</a>
                    @else
                    <a href=" {{route('user.forget.passoword.email.verify',['id'=>$data['id'],'vcode'=>$data['email_vcode']])}}">Click here to change your password</a>
                    @endif
                </p>

            </div>

            

        </div>
    </div>
</body>

</html>
