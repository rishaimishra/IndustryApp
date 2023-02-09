@extends('layouts.app')


@section('title')
<title>Change Profile</title>
@endsection

@section('style')
@include('includes.style')

@endsection

@section('content')
<!-- Top Bar Start -->
@include('includes.header')
<!-- Top Bar End -->


<!-- ========== Left Sidebar Start ========== -->
@include('includes.sidebar')
<!-- Left Sidebar End -->



<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->
<div class="content-page">
    <!-- Start content -->
    <div class="content">
        <div class="container">

            <!-- Page-Title -->
            <div class="row">
                <div class="col-sm-12">
                    <h4 class="pull-left page-title">Change Profile</h4>
                    <ol class="breadcrumb pull-right">
                        {{-- <li class="active"><a href="{{route('admin.dashboard')}}"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</a></li> --}}
                    </ol>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                     @include('includes.message')  
                    <div>

                        <!-- Personal-Information -->
                        <div class="panel panel-default panel-fill">
                            <div class="panel-heading">
                                <h3 class="panel-title">Change Profile</h3>
                            </div>
                            <div class="panel-body rm02 rm04">
                                <form role="form"  method="POST" action="{{route('manage.profile.update')}}" id="profile_form" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label for="category_name">Name</label>
                                        <input type="text" placeholder="Name" id="oldpassword" class="form-control" name="name" required value="{{auth()->user()->name}}">
                                        <div id="err_category"></div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="Email">Email</label>
                                        <input type="text" placeholder="Email" id="email" class="form-control" name="email" required value="{{auth()->user()->email}}">
                                    </div>

                                    <div class="form-group">
                                        <label for="Email">Profile Image</label>
                                        
                                            
                                            <input type="file" name="image" class="form-control" id="icon" onchange="fun()">
                                    </div>


                                <div class="form-group">
                                  
                                  <img src="{{ URL::to('storage/app/public/image')}}/{{auth()->user()->image}}" alt="" id="img2" style="height: 150px;width: 150px;">
                                  
                                </div>  
                                            


                                    <div class="clearfix"></div>
                                    <div class="col-lg-12"> <button class="btn btn-primary waves-effect waves-light w-md" type="submit">Save</button></div>
                                </form>
                

                            </div>
                        </div>
                        <!-- Personal-Information -->

                    </div>
                </div>
            </div>
            <!-- End row -->

        </div>
        <!-- container -->

    </div>
    <!-- content -->

    @include('includes.footer')
</div>
<!-- ============================================================== -->
<!-- End Right content here -->
<!-- ============================================================== -->

@endsection

@section('script')
@include('includes.script')



<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/additional-methods.min.js"></script>
 <script>
        function fun(){
        var i=document.getElementById('icon').files[0];
        //console.log(i);
        var b=URL.createObjectURL(i);
        $("#img2").attr("src",b);
    }
</script>         
             <script type="text/javascript">
                 $(function(){
                  jQuery.validator.addMethod("validate_email", function(value, element) {
            if (/^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/.test(value)) {
                return true;
            } else {
                return false;
            }
        }, "{{__('Please enter your email properly')}}");
                  $('#profile_form').validate({
                  rules:{
                    name:{
                      required:true
                    },
                     email : {
                      required:true,
                      validate_email:true,
                      email:true,
                      remote: {
                       url:  '{{route('manage.profile.checkemail')}}',
                       type: "get",
                       data: {
                       email: function(){
                              return $( "#email" ).val();
                        },
                        id:'{{auth()->user()->id}}'
                          }
                        },
                    },
                    
                  },
                  messages:{
                    name:{
                      required:'Please enter your name'
                    },
                    email:{
                      required:'Please enter your email',
                      email:'Please enter your email properly',
                      remote:'Email already exits.Try another.'
                    },
                  }
                })
              })
             </script> 
@endsection
