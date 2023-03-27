@extends('layouts.app')


@section('title')
<title>Admin | Manage Training (Half Yearly) Edit</title>
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
					<h4 class="pull-left page-title">Manage Training (Half Yearly) Edit</h4>
					<ol class="breadcrumb pull-right">
                        <li class="active"><a href="{{route('manage.training-csi-service-fdi')}}"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</a></li>
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
								<form role="form" action="{{route('manage.training.update-csi-service-fdi')}}" id="frm" method="post" enctype="multipart/form-data">
									@csrf

									<input type="hidden" name="id" value="{{@$data->id}}">

									<div class="form-group rm03">
										<label for="title">Year</label>
										<input type="number"  class="form-control"  placeholder="Enter year" value="{{@$data->year}}" name="year" readonly>
									</div>


									

									

									<div class="form-group rm03">
										<label for="title">Name Of The Training</label>
										<input type="text"  class="form-control"  placeholder="Enter Name Of The Training"  name="name" required value="{{@$data->name}}">
									</div>

									

									<div class="form-group rm03">
										<label for="title">Number of Employees Trained</label>
										<input type="text"  class="form-control"  placeholder="Enter Number of Employees Trained"  name="number_employee" required value="{{@$data->number_employee}}">
									</div>


									<div class="form-group rm03">
										<label for="title">Start Date</label>
										<input type="date"  class="form-control"  placeholder="Enter Number of Employees Trained"  name="start_date" value="{{@$data->start_date}}" required>
									</div>

									<div class="form-group rm03">
										<label for="title">End Date</label>
										<input type="date"  class="form-control"  placeholder="Enter Number of Employees Trained"  name="end_date" value="{{@$data->end_date}}" required>
									</div>

									<div class="form-group rm03">
										<label for="title">Supported by RGoB</label>
										<input type="text"  class="form-control"  placeholder="Enter Supported by RGoB"  name="rgob" value="{{@$data->rgob}}" required>
									</div>

									<div class="form-group rm03">
										<label for="title">Supported by Self Financing</label>
										<input type="text"  class="form-control"  placeholder="Enter Supported by Self Financing" value="{{@$data->self}}"  name="self" required>
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
purpose:{
required:true,
},
currency:{
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