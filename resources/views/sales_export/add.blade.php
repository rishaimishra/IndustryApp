@extends('layouts.app')


@section('title')
<title>Admin | Manage Production Sales Export Add</title>
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
					<h4 class="pull-left page-title">Manage Production Sales Export Add</h4>
					<ol class="breadcrumb pull-right">
                        <li class="active"><a href="{{route('manage.sales.export')}}"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</a></li>
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
								<form role="form" action="{{route('manage.sales.export.insert')}}" id="frm" method="post" enctype="multipart/form-data">
									@csrf

									<div class="form-group rm03">
										<label for="title">Year</label>
										<input type="number"  class="form-control"  placeholder="Enter year"  name="year" >
									</div>


									<div class="form-group ">
										<label for="title">Report From Month</label>
										<input type="date"  class="form-control"  placeholder="Enter name"  name="from_month" >
									</div>

									<div class="form-group">
										<label for="title">Report End Month</label>
										<input type="date"  class="form-control"  placeholder="Enter email"  name="end_month"  >
									</div>

									

									<div class="form-group rm03" >
										<label for="title">Name of Product Sold</label>
										<select class="form-control" name="product_id" id="product_id">
										<option value="">Select product</option>
										@foreach(@$data as $value)
										<option value="{{@$value->id}}">{{@$value->product}}</option>
										@endforeach
										</select>
									</div>


									


									<div class="form-group rm03" >
										<label for="title">Quantity Sold</label>
										<input type="number"  class="form-control"  placeholder="Enter Quantity Sold"  name="quantity" >
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
										<label for="title">Price Per Unit (Nu.)</label>
										<input type="number"  class="form-control"  placeholder="Enter Price Per Unit (Nu.)"  name="price" >
									</div>

									<div class="form-group rm03">
										<label for="title">Value of Sales</label>
										<input type="text"  class="form-control"  placeholder="Enter Value of Sales"  name="value_of_sale" >
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