@extends('layouts.app')

@section('title')
<title>Reset Password</title>
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
                @include('includes.message')
                <h3 style="text-align:center;">Reset Password</h3>
                  <form class="signin-form" id="frm" action="{{route('user.forget.passoword.new.password')}}" method="post">
                    @csrf
                    <input type="hidden" name="id" value="{{@$data->id}}">
                      
                    
                     <div class="form-group">
                        <label>Password</label>
                        <input type="text" class="form-control h-45" name="password">
                      </div>

                      <div class="form-group">
                        <label>Confirm Password</label>
                        <input type="text" class="form-control h-45" name="confirm_password">
                      </div>
                      
                     <div class="form-group">
                        <button type="submit" class="mt-3 border-btn btn-block btn btn-primary submit px-3">SUBMIT</button>
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

    <script type="text/javascript">
              $(function(){
                $('#frm').validate({
                    rules:{
                        password:{
                            required:true,
                            
                        },
                        confirm_password : {
                          required:true,
                          equalTo : '[name="password"]'
                     }
                    },
                    messages:{
                      password:{
                        required:'Please enter your new password',
                    },
                    confirm_password:{
                       required:'Please enter your confirm password',
                    }
                    }
                    
                })
              })
          </script>

@endsection