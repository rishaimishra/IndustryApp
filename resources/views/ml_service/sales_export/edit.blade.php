@extends('layouts.app')


@section('title')
<title>Admin | Manage Production Sales Export Edit</title>
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
					<h4 class="pull-left page-title">Manage Production Sales Export Edit</h4>
					<ol class="breadcrumb pull-right">
                        <li class="active"><a href="{{route('manage.sales.export.ml-domestic-service')}}"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</a></li>
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
								<form role="form" action="{{route('manage.sales.export.update.ml-domestic-service')}}" id="frm" method="post" enctype="multipart/form-data">
									@csrf

									<input type="hidden" name="id" value="{{@$data->id}}">

									<div class="form-group rm03">
										<label for="title">Year</label>
										<input type="number"  class="form-control"  placeholder="Enter year" value="{{@$data->year}}" name="year" readonly>
									</div>


									{{-- <div class="form-group ">
										<label for="title">Report From Month</label>
										<input type="date"  class="form-control"  placeholder="Enter name" value="{{@$data->from_month}}"  name="from_month" >
									</div>

									<div class="form-group">
										<label for="title">Report End Month</label>
										<input type="date"  class="form-control"  placeholder="Enter email" value="{{@$data->end_month}}" name="end_month"  >
									</div> --}}

									

									<div class="form-group rm03" >
										<label for="title">Name of Product Sold</label>
										<select class="form-control" name="product_id" id="product_id" disabled>
										<option value="">Select product</option>
										@foreach(@$products as $value)
										<option value="{{@$value->id}}" @if(@$data->product_id==@$value->id) selected @endif>{{@$value->product}}</option>
										@endforeach
										</select>
									</div>


									<div class="form-group rm03" >
										<label for="title">Country</label>
										<select class="form-control" name="country" id="country">
										<option value="">Select Country</option>
										@foreach(@$country as $value)
										<option value="{{@$value->country_name}}" @if(@$data->country==@$value->country_name) selected @endif>{{@$value->country_name}}</option>
										@endforeach
										</select>
									</div>

									


									<div class="form-group rm03" >
										<label for="title">Quantity Sold</label>
										<input type="number"  class="form-control"  placeholder="Enter Quantity Sold"  name="quantity" value="{{@$data->quantity}}">
									</div>







									{{-- <div class="form-group rm03" >
										<label for="title">Unit</label>
										<select class="form-control" name="unit" id="role_id">
										<option value="">Select unit</option>
										<option value="Kilogram" @if(@$data->unit=="Kilogram") selected @endif>Kilogram</option>
										<option value="Nos" @if(@$data->unit=="Nos") selected @endif>Nos</option>
										</select>
									</div> --}}

									<div class="form-group rm03">
										<label for="title">Price Per Unit (Nu.)</label>
										<input type="number"  class="form-control"  placeholder="Enter Price Per Unit (Nu.)"  name="price" value="{{@$data->price}}">
									</div>

									<div class="form-group rm03">
										<label for="title">Value of Sales</label>
										<input type="text"  class="form-control"  placeholder="Enter Value of Sales"  name="value_of_sale" value="{{@$data->value_of_sale}}">
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

year:{
required:true,
},	
product_id:{
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

value_of_sale:{
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



@endsection