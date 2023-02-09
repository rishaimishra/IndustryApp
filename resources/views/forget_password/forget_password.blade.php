@extends('layouts.app')

@section('title')
<title>Forget Password</title>
@endsection

@section('style')
@include('includes.style')
@endsection



@section('body')

 <!---Content Section-->
            <div class="panel panel-color panel-primary panel-pages">
    <div class="panel-heading rm08">
        {{-- <img src="{{ URL::to('public/admin/assets/images/Logo-1.png')}}" alt=""> --}}
        
    </div>


    <div class="panel-body">
         @include('includes.message')
                  <form class="signin-form" id="frm" action="{{route('user.forget.password.send.mail')}}" method="post">
                    @csrf
                      <h1 class="log-heading">Did You Forget Your Password?</h1>
                     <p class="log-subheading f-16 mt-5">Just type in your email address & we'll email
                     your reset password link.</p>
                     <div class="form-group" style="margin-top:10px;">
                        <label>Email</label>
                        <input type="text" class="form-control h-45" name="email">
                      </div>
                      
                     <div class="form-group">
                        <button type="submit" class="mt-3 border-btn btn-block btn btn-primary submit px-3">FORGET PASSWORD</button>
                     </div>
                     
                  </form>
               </div>
            </div>
         </div>
      </div>
      <!--Content Section-->


@endsection

@section('script')
@include('includes.script')
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>

<script>
    $(document).ready(function(){
         
        $("#frm").validate({
            rules: {
                email:{
                    required: true,
                },
                
            },
            messages:{
            email: {
                required: 'Please enter your email',
           },
           
           },
        });
    });
</script>

@endsection