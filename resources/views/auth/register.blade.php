@extends('layouts.app')

@section('title')
<title>Industry Registration</title>
@endsection

@section('style')
@include('includes.style')
@endsection



@section('body')
<div class="panel panel-color panel-primary panel-pages">
   

    <div class="panel-body">
         @include('includes.message')
          <h3 style="text-align:center;">Industry Registration</h3>
        <form class="form-horizontal m-t-20" action="{{route('register.industry')}}" method="POST" id="login_form">
            @csrf

            <div class="form-group">
                <label for="title">Cid</label>
                    <input class="form-control input-lg" type="text" placeholder="cid" name="cid">
            </div>

            <div class="form-group">
                <label for="title">Name</label>
                    <input class="form-control input-lg" type="text" placeholder="name" name="name">
            </div>
            
            <div class="form-group">
                    <label for="title">Date Of Birth</label>
                    <input class="form-control input-lg" type="date" placeholder="date of birth" name="dob">
            </div>
            
            <div class="form-group">
                <label for="title">Email</label>
                    <input class="form-control input-lg" type="text" placeholder="email" name="email" id="email">
            </div>

            <div class="form-group">
                <label for="title">Password</label>
                    <input class="form-control input-lg" type="password" placeholder="password" name="password">
            </div>

            <div class="form-group">
                <label for="title">Phone</label>
                    <input class="form-control input-lg" type="text" placeholder="phone" name="phone">
            </div>

            <div class="form-group">
                <label for="title">Designation</label>
                    <input class="form-control input-lg" type="text" placeholder="designation" name="designation">
            </div>


            

            

           

            <div class="form-group text-center m-t-40">
                <div class="col-xs-12">
                    <a href="index.html"> <button class="btn btn-primary btn-lg w-lg waves-effect waves-light rm01" type="submit">Register</button></a>
                </div>
            </div>

            <div class="form-group m-t-30">
                
                <!--<div class="col-sm-5 text-right">
                            <a href="register.html">Create an account</a>
                        </div>-->
            </div>

            <div class="form-group m-t-30">
                
                    <div class="col-sm-12">
                    <a href="{{route('login')}}" class="rm01"><i class="fa fa-user m-r-5"></i> Already Have An Account ?</a>
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
                     remote: {
                       url:  '{{route('manage.register.checkemail')}}',
                       type: "get",
                       data: {
                       email: function(){
                              return $( "#email" ).val();
                        },
                        
                      }
                    },
                },
                cid:{
                    required: true,
                },
                name:{
                    required: true,
                },
                dob:{
                    required: true,
                },
                phone:{
                    required: true,
                },
                designation:{
                    required: true,
                }
            },
            messages:{
                password:{
                    required:'Please eneter password',
                },
                email:{
                    required:'Please enter username',
                    remote:'Email Already Added.Please Try Another One.',
                },
            }
        });
    });
</script>
@endsection
