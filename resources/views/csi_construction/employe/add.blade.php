@extends('layouts.app')


@section('title')
<title>Admin | Manage Employement Add</title>
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
					<h4 class="pull-left page-title">Manage Employement Add</h4>
					<ol class="breadcrumb pull-right">
                        <li class="active"><a href="{{route('manage.employe.manage-employment-record-csi-construction')}}"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</a></li>
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
								<form role="form" action="{{route('manage.employe.insert.manage-employment-record-csi-construction')}}" id="frm" method="post" enctype="multipart/form-data">
									@csrf

									<div class="form-group rm03">
										<label for="title">Year</label>
										<input type="number"  class="form-control"  placeholder="Enter year" readonly name="year" value="{{@$get_time_data->year}}">
									</div>


									{{-- <div class="form-group ">
										<label for="title">Report From Month</label>
										<select class="form-control" name="from_month" id="from_month">
										<option value="">Select month</option>
										<option value="Jan">Jan</option>
										<option value="Feb">Feb</option>
										<option value="Mar">Mar</option>
										<option value="Apl">Apl</option>
										<option value="May">May</option>
										<option value="Jun">Jun</option>
										<option value="Jul">Jul</option>
										<option value="Aug">Aug</option>
										<option value="Sept">Sept</option>
										<option value="Oct">Oct</option>
										<option value="Nov">Nov</option>
										<option value="Dec">Dec</option>
										</select>
									</div>

									<div class="form-group">
										<label for="title">Report End Month</label>
										<select class="form-control" name="end_month" id="end_month">
										<option value="">Select month</option>
										<option value="Jan">Jan</option>
										<option value="Feb">Feb</option>
										<option value="Mar">Mar</option>
										<option value="Apl">Apl</option>
										<option value="May">May</option>
										<option value="Jun">Jun</option>
										<option value="Jul">Jul</option>
										<option value="Aug">Aug</option>
										<option value="Sept">Sept</option>
										<option value="Oct">Oct</option>
										<option value="Nov">Nov</option>
										<option value="Dec">Dec</option>
										</select>
									</div>
 --}}
									

									







									<div class="form-group rm03" >
										<label for="title">Nation</label>
										<select class="form-control" name="nationality" id="nationality">
										<option value="">Select country</option>
										@foreach(@$country as $value)
										<option value="{{@$value->country_name}}">{{@$value->country_name}}</option>
										@endforeach
										</select>
									</div>


									<div class="form-group rm03">
										<label for="title">CID / Work Permit No.</label>
										<input type="text"  class="form-control"  placeholder="Enter CID / Work Permit No."  name="cid" required>
									</div>


									


									<div class="form-group rm03" >
										<label for="title">Name</label>
										<input type="text"  class="form-control"  placeholder="Enter Name"  name="name" required>
									</div>

									<div class="form-group rm03">
										<label for="title">Contact No.</label>
										<input type="text"  class="form-control"  placeholder="Enter Contact No."  name="contact" required>
									</div>

									<div class="form-group rm03">
										<label for="title">Email</label>
										<input type="text"  class="form-control"  placeholder="Enter Email"  name="email" required>
									</div>

									<div class="form-group rm03">
										<label for="title">Gender</label>
										<select class="form-control" name="gender" id="gender">
										<option value="">Select gender</option>
										<option value="Male">Male</option>
										<option value="Female">Female</option>
										</select>
									</div>

									<div class="form-group rm03">
										<label for="title">Qualification</label>
										<select class="form-control" name="qualification" id="qualification">
										<option value="">Select qualification</option>
										<option value="Below X">Below X</option>
										<option value="X-XII">X-XII</option>
										<option value="Above XII">Above XII</option>
										</select>
									</div>

									<div class="form-group rm03">
										<label for="title">Nature Of Employement</label>
										<select class="form-control" name="nature_employe" id="nature_employe">
										<option value="">Select</option>
										<option value="Regular">Regular</option>
										<option value="Contract">Contract</option>
										<option value="Causal">Causal</option>
										<option value="Self Employed">Self Employed</option>
										</select>
										

									</div>

									<div class="form-group rm03">
										<label for="title">Placement Dzongkhag</label>
										<select class="form-control" name="placement" id="placement">
										<option value="">Select</option>
										<option value="Thimpu">Thimpu</option>
										<option value="Chukkha">Chukkha</option>
									</select>
										
									</div>


									<div class="form-group rm03" >
										<label for="title">Placement Location</label>
										<input type="text"  class="form-control"  placeholder="Enter Placement Location"  name="location" required>
									</div>
									


										

									

									
									
									<div class="clearfix"></div>
							
									
									<div class="clearfix"></div>
									<div class="col-lg-12" style="margin-top: 10px;">
										<button class="btn btn-primary waves-effect waves-light w-md" type="submit">Add</button>
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

year:{
required:true,
},	
gender:{
required:true,
},
qualification:{
required:true,
},
location:{
required:true,
},
placement : {
required:true,

},

nature_employe:{
required:true,
},
nationality:{
required:true,
},
from_month:{
required:true,
},
end_month:{
required:true,	
}
},
messages:{

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