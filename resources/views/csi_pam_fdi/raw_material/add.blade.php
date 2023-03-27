@extends('layouts.app')


@section('title')
<title>Admin | Manage Raw Material Add</title>
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
					<h4 class="pull-left page-title">Manage Raw Material Add</h4>
					<ol class="breadcrumb pull-right">
                        <li class="active"><a href="{{route('manage.raw.material.csi-pam-fdi')}}"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</a></li>
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
								<form role="form" action="{{route('manage.raw.material.insert.csi-pam-fdi')}}" id="frm" method="post" enctype="multipart/form-data">
									@csrf

									<div class="form-group rm03">
										<label for="title">Year</label>
										<input type="number"  class="form-control"  placeholder="Enter year"  name="year" value="{{@$get_time_data->year}}" readonly>
									</div>


									

									

									<div class="form-group rm03" >
										<label for="title">Name of Raw Material</label>
										<input type="text"  class="form-control"  placeholder="Enter Name of Raw Material"  name="name" >
									</div>

									<div class="form-group rm03" >
										<label for="title">Type Of Raw</label>
										<select class="form-control" name="type_raw" id="type_raw">
										<option value="">Select Type Of Raw</option>
										@foreach(@$type_raw as $value)
										<option value="{{@$value->name}}">{{@$value->name}}</option>
										@endforeach
										</select>
									</div>


									


									<div class="form-group rm03" >
										<label for="title">Quantity Exported</label>
										<input type="number"  class="form-control"  placeholder="Enter Quantity Exported"  name="quantity" >
									</div>







									<div class="form-group rm03" >
										<label for="title">Unit</label>
										<select class="form-control" name="unit" id="role_id">
										<option value="">Select unit</option>
										<option value="Kilogram">Kilogram</option>
										<option value="Nos">Nos</option>
										</select>
									</div>

									<div class="form-group rm03" >
										<label for="title">Sourced From (Country)</label>
										<select class="form-control" name="country" id="country">
										<option value="">Select country</option>
										@foreach(@$country as $value)
										<option value="{{@$value->country_name}}">{{@$value->country_name}}</option>
										@endforeach
										</select>
									</div>

									<div class="form-group rm03">
										<label for="title">Price Per Unit (Nu.)</label>
										<input type="number"  class="form-control"  placeholder="Enter Price Per Unit (Nu.)"  name="price" >
									</div>

									<div class="form-group rm03">
										<label for="title">Value of Raw Materials</label>
										<input type="text"  class="form-control"  placeholder="Enter Value of Raw Materials"  name="value_raw" >
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
name:{
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

value_raw:{
required:true,
},
from_month:{
required:true,
},
end_month:{
required:true,	
},
country:{
required:true,	
}
},
messages:{

}
});
});
</script>



@endsection