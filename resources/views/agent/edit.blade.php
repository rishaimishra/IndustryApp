@extends('layouts.app')


@section('title')
<title>Admin | Manage User Edit</title>
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
<!-- Start right Content here -->
<!-- ============================================================== -->
<div class="content-page">
	<!-- Start content -->
	<div class="content">
		<div class="wraper container-fluid">
			<div class="row">
				<div class="col-sm-12">
					<h4 class="pull-left page-title">Manage User Edit</h4>
					<ol class="breadcrumb pull-right">
                        <li class="active"><a href="{{route('manage.agent')}}"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</a></li>
                    </ol>
				</div>
			</div>
			@include('includes.message')
			
			<div class="row">
				<div class="col-lg-12">
					<div>
						<!-- Personal-Information -->
						<div class="panel panel-default panel-fill">
							
							<div class="panel-body rm02 rm04">
								<form role="form" action="{{route('manage.agent.update')}}" id="frm" method="post" enctype="multipart/form-data">
									@csrf
									<input type="hidden" name="id" value="{{@$data->id}}">
									<div class="form-group rm03">
										<label for="title">CID</label>
										<input type="text"  class="form-control" value="{{@$data->cid}}" placeholder="Enter eid"  name="cid" >
									</div>


									<div class="form-group rm03">
										<label for="title">Name</label>
										<input type="text"  class="form-control" value="{{@$data->name}}" placeholder="Enter name"  name="name" >
									</div>

									<div class="form-group rm03">
										<label for="title">Email</label>
										<input type="text"  class="form-control"  value="{{@$data->email}}" placeholder="Enter email"  name="email" id="email" >
									</div>

									<div class="form-group rm03">
										<label for="title">Phone</label>
										<input type="text"  class="form-control" value="{{@$data->phone}}"  placeholder="Enter phone"  name="phone" >
									</div>

									<div class="form-group rm03">
										<label for="title">Designation</label>
										<input type="text"  class="form-control" value="{{@$data->designation}}" placeholder="Enter designation"  name="designation" >
									</div>


									<div class="form-group rm03">
										<label for="title">Role</label>
										<select class="form-control" name="role" id="role_id">
										<option value="">Select Role</option>
										<option value="D" @if(@$data->role=="D") selected @endif>Director</option>
										<option value="S" @if(@$data->role=="S") selected @endif>Secretory</option>
										<option value="C" @if(@$data->role=="C") selected @endif>Chief</option>
										<option value="F" @if(@$data->role=="F") selected @endif>Focal Officer</option>
										</select>
									</div>


									<div class="form-group rm03" id="division_div" @if(@$data->role=="F" || @$data->role=="C") style="display: block;" @else style="display:none;" @endif>
										<label for="title">Division</label>
										<input type="text"  class="form-control" value="{{@$data->division}}" placeholder="Enter division"  name="division" >
									</div>







									


										

									

									
									
									<div class="clearfix"></div>
							
									
									<div class="clearfix"></div>
									<div class="col-lg-12" style="margin-top: 10px;">
										<button class="btn btn-primary waves-effect waves-light w-md" type="submit">Update</button>
									</div>
								</form>
							</div>
						</div>
						<!-- Personal-Information -->
					</div>
				</div>
			</div>
		</div>
	
	</div>
	<!-- content -->
	
</div>
<!-- ============================================================== -->
<!-- End Right content here -->
@section('footer')
@include('includes.footer')
@endsection
@endsection
{{-- end content --}}
@section('script')
@include('includes.script')
{{-- <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script> --}} {{-- for datepicker --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.min.js" integrity="sha512-UdIMMlVx0HEynClOIFSyOrPggomfhBKJE28LKl8yR3ghkgugPnG6iLfRfHwushZl1MOPSY6TsuBDGPK2X4zYKg==" crossorigin="anonymous"></script>
<script>
$(document).ready(function(){
	
$('#frm').validate({
rules:{

eid:{
required:true,
},	
name:{
required:true,
},
email:{
required:true,
remote: {
                       url:  '{{route('manage.profile.checkemail')}}',
                       type: "get",
                       data: {
                       email: function(){
                              return $( "#email" ).val();
                        },
                        id:'{{@$data->id}}'
                        
                          }
                        },
},
password:{
required:true,
},
confirm_password : {
required:true,
equalTo : '[name="password"]'
},

phone:{
required:true,
},
designation:{
required:true,
},
role:{
required:true,	
}
},
messages:{
 email:{
    remote:" Email Already Used.Please Try Another One",
  
}
}
});
});
</script>

<script>
        function fun1(){
        var i=document.getElementById('icon').files[0];
        var b=URL.createObjectURL(i);
        $("#img2").attr("src",b);
    }
</script>

<script type="text/javascript">
	$('#role_id').on('change',function(e){
		var role = $('#role_id').val();
		if(role=="F" || role=="C")
		{
		   $('#division_div').show();	
		}else{
		   $('#division_div').hide();		
		}
	})
</script> 

@endsection