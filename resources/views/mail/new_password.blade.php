<!DOCTYPE html>
<html>

<head>
    <title>Verification Email</title>
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
                <img src="{{asset('public/frontend/images/logo.png')}}" width="135" alt="">
            </div>
        </div>
        <div style="max-width:620px; border:1px solid #d9d8d8; margin:0 0; padding:15px; ">

           

            <div style="display:block; overflow:hidden; width:100%;">

                Dear {{@$data['name']}},
                <p>
                   Your password has been changed by admin successfully.Please find your new password below.
                   <p>Username : {{@$data['email']}}</p>
                   <p>Password : {{@$data['password']}}</p>
                </p>

            </div>

            

        </div>
    </div>
</body>

</html>
