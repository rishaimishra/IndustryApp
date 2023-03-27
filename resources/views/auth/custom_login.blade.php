@extends('layouts.app')

@section('title')
<title>Login</title>
@endsection

@section('style')
@include('includes.style')
@endsection



@section('body')
<div class="panel panel-color panel-primary panel-pages">
    <div class="panel-heading rm08">
        {{-- <img src="{{ URL::to('public/admin/assets/images/Logo-1.png')}}" alt=""> --}}
        
    </div>


    <div class="panel-body">
         @include('includes.message')
          <h3 style="text-align:center;">Login</h3>
        <form class="form-horizontal m-t-20" action="{{route('custom.login')}}" method="POST" id="login_form">
            @csrf

            <div class="form-group">
                <div class="col-xs-12">
                    <input class="form-control input-lg" type="text" placeholder="Email (Username)" name="username" value="{{ @Cookie::get('activarmor_admin_user_email') == null ? old('email'): @Cookie::get('activarmor_admin_user_email')}}">
                    @if ($errors->has('email'))
                    <span class="invalid-feedback error" role="alert">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                    @endif
                </div>
            </div>

            <div class="form-group">
                <div class="col-xs-12">
                    <input class="form-control input-lg" type="password" placeholder="Password" name="password" value="{{ @Cookie::get('activarmor_admin_user_password') }}">
                </div>
            </div>

           

            <div class="form-group text-center m-t-40">
                <div class="col-xs-12">
                    <a href="index.html"> <button class="btn btn-primary btn-lg w-lg waves-effect waves-light rm01" type="submit">Log In</button></a>
                </div>
            </div>

            <div class="form-group m-t-30">
                
                <!--<div class="col-sm-5 text-right">
                            <a href="register.html">Create an account</a>
                        </div>-->
            </div>

            <div class="form-group m-t-30">
                <div class="col-sm-6">
                    <a href="{{route('user.forget.passoword')}}" class="rm01"><i class="fa fa-lock m-r-5"></i> Forgot your password?</a>
                </div>

                <div class="col-sm-6">
                    <a href="{{route('register')}}" class="rm01"><i class="fa fa-user m-r-5"></i> Create an account</a>
                </div>
                <!--<div class="col-sm-5 text-right">
                            <a href="register.html">Create an account</a>
                        </div>-->
            </div>
        </form>
    </div>
</div>
@endsection

@section('script')
@include('includes.script')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/additional-methods.min.js"></script>

<script>
    $(document).ready(function(){
        $("#login_form").validate({
            rules: {
                password:{
                    required: true,
                },
                email:{
                    required: true,
                }
            },
            messages:{
                password:{
                    required:'Please eneter password',
                },
                email:{
                    required:'Please enter username',
                },
            }
        });
    });
</script>
@endsection
