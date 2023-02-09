@extends('layouts.app')


@section('title')
<title>Admin | Manage Industry Profile Edit</title>
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
					<h4 class="pull-left page-title">Manage Industry Profile Edit </h4>
					<ol class="breadcrumb pull-right">
                        <li class="active"><a href="{{route('manage.industry.profile')}}"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</a></li>

                        <li class="active"><a href="{{route('manage.industry.profile.business.view',@$data->id)}}" class="btn btn-primary"><i class="fa fa-plus" aria-hidden="true"></i> Business Status</a></li>
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
								<form role="form" action="{{route('manage.industry.profile.update')}}" id="frm" method="post" enctype="multipart/form-data">
									@csrf
									<input type="hidden" name="id" value="{{@$data->id}}">
									<div class="form-group rm03">
										<label for="title">License No./CRC No.</label>
										<input type="text"  class="form-control"  placeholder="Enter License No./CRC No."  name="license_no" value="{{@$data->license_no}}" required>
									</div>


									<div class="form-group rm03">
										<label for="title">Tpn</label>
										<input type="text"  class="form-control" value="{{@$data->tpn}}" placeholder="Enter tpn"  name="tpn"  required>
									</div>

									<div class="form-group rm03">
										<label for="title">Business Establishment Name</label>
										<input type="text"  class="form-control" value="{{@$data->business_name}}" placeholder="Enter business name"  name="business_name"  required>
									</div>

									<div class="form-group rm03">
										<label for="title">Main Activity</label>
										<input type="text"  class="form-control" value="{{@$data->main_activity}}"  placeholder="Enter main activity"  name="main_activity"  required>
									</div>

									<div class="form-group rm03">
										<label for="title">Activity Details</label>
										<textarea class="form-control" name="activity_details" required>{{@$data->activity_details}}</textarea>
									</div>

									<div class="form-group rm03">
										<label for="title">Classification</label>
										<input type="text"  class="form-control" value="{{@$data->classification}}" placeholder="Enter Classification"  name="classification"  required>
									</div>

									<div class="form-group rm03">
										<label for="title">Sub Classification</label>
										<input type="text"  class="form-control" value="{{@$data->sub_classification}}" placeholder="Enter Sub Classification"  name="sub_classification"  required>
									</div>

									

									<div class="form-group rm03">
										<label for="title">Dzongkhag</label>
										<input type="text"  class="form-control" value="{{@$data->dzongkhag}}"  placeholder="Enter Dzongkhag"  name="dzongkhag"  required>
									</div>


									<div class="form-group rm03">
										<label for="title">Gewog</label>
										<input type="text"  class="form-control" value="{{@$data->gewog}}" placeholder="Enter Gewog"  name="gewog" > 
									</div>

									<div class="form-group rm03">
										<label for="title">Village</label>
										<input type="text"  class="form-control" value="{{@$data->village}}" placeholder="Enter Village"  name="village"  required>
									</div>

									<div class="form-group rm03">
										<label for="title">Exact Locaton</label>
										<textarea class="form-control" name="exact_location" required>{{@$data->exact_location}}</textarea>
									</div>

									<div class="form-group rm03">
										<label for="title">Scale of Investment</label>
										<input type="text"  class="form-control" value="{{@$data->scale_investment}}" placeholder="Enter Scale of Investment."  name="scale_investment"  required>
									</div>

									<div class="form-group rm03">
										<label for="title">Investment Amount</label>
										<input type="text"  class="form-control" value="{{@$data->investment_amount}}" placeholder="Enter Investment Amount."  name="investment_amount"  required>
									</div>

									<div class="form-group rm03">
										<label for="title">License Issue Date</label>
										<input type="date"  class="form-control" value="{{@$data->license_issue_date}}" placeholder="Enter Investment Amount."  name="license_issue_date" >
									</div>

									<div class="form-group rm03">
										<label for="title">License Validity Date</label>
										<input type="date"  class="form-control" value="{{@$data->license_validity_date}}" name="license_validity_date"  required>
									</div>

									<div class="form-group rm03">
										<label for="title">Ownership Type</label>
										<input type="text"  class="form-control" value="{{@$data->ownership_type}}" placeholder="Enter Ownership Type."  name="ownership_type"  required>
									</div>


									<div class="form-group rm03">
										<label for="title">Email</label>
										<input type="text"   class="form-control" value="{{@$data->email}}" placeholder="Enter email."  name="email" required>
									</div>

									<div class="form-group rm03">
										<label for="title">Mobile</label>
										<input type="text"  class="form-control" required value="{{@$data->mobile}}" placeholder="Enter mobile."  name="mobile" >
									</div>

									<div class="form-group rm03">
										<label for="title">Fixed Line</label>
										<input type="text"  class="form-control"  value="{{@$data->fixed_line}}" required id="mydiv" placeholder="Enter fixed line."  name="fixed_line" >
									</div>

									

									






						


									


										

									

									
									
									<div class="clearfix"></div>
							
									
									<div class="clearfix"></div>
									<div class="col-lg-12" style="margin-top: 10px;">
										<button class="btn btn-primary waves-effect waves-light w-md" type="submit">Update</button>

										<button class="btn btn-primary waves-effect waves-light w-md" type="submit"><a href="{{route('manage.industry.profile.business.view',@$data->id)}}" style="color: white;">Business Status</a></button>
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
})
});	










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