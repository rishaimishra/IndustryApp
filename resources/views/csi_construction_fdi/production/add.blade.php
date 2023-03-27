@extends('layouts.app')


@section('title')
<title>Admin | Manage Service Add</title>
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
					<h4 class="pull-left page-title">Manage Service Add</h4>
					<ol class="breadcrumb pull-right">
                        <li class="active"><a href="{{route('manage.service.manufacture.csi-construction-fdi')}}"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</a></li>
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
								<form role="form" action="{{route('manage.service.manufacture.insert.csi-construction-fdi')}}" id="frm" method="post" enctype="multipart/form-data">
									@csrf

									<div class="form-group rm03">
										<label for="title">Year</label>
										<input type="number"  class="form-control"  placeholder="Enter year" value="{{@$get_time_data->year}}" name="year" readonly>
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
									

									<div class="form-group rm03">
										<label for="title">Name of Service</label>
										<input type="text"  class="form-control"  placeholder="Enter Name of Service"  name="product" >
									</div>


									


									<div class="form-group rm03" >
										<label for="title">Major Service Provided (Quantity)</label>
										<input type="number"  class="form-control"  placeholder="Enter Quantity Produced"  name="quantity" >
									</div>







									<div class="form-group rm03" >
										<label for="title">Unit</label>
										<select class="form-control" name="unit" id="role_id">
										<option value="">Select unit</option>
										<option value="Kilogram">Kilogram</option>
										<option value="Nos">Nos</option>
										</select>
									</div>

									<div class="form-group rm03">
										<label for="title">Price of Service (Nu)</label>
										<input type="number"  class="form-control"  placeholder="Enter Price of Service (Nu)"  name="price" >
									</div>

									<div class="form-group rm03">
										<label for="title">% Capacity Utilization</label>
										<input type="text"  class="form-control"  placeholder="Enter % Capacity Utilization"  name="capacity" >
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
product:{
required:true,
},
unit:{
required:true,
},
quantity:{
required:true,
},
price : {
required:true,

},

capacity:{
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