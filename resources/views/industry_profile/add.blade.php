@extends('layouts.app')


@section('title')
<title>Admin | Manage Industry Profile Add</title>
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
					<h4 class="pull-left page-title">Manage Industry Profile Add</h4>
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
								<form role="form" action="{{route('manage.industry.profile.insert')}}" id="frm" method="post" enctype="multipart/form-data">
									@csrf

									<div class="form-group rm03">
										<label for="title">License No./CRC No.</label>
										<input type="text"  class="form-control"  placeholder="Enter License No./CRC No."  name="license_no"  required>
									</div>


									<div class="form-group rm03">
										<label for="title">Tpn</label>
										<input type="text"  class="form-control"  placeholder="Enter tpn"  name="tpn"  required>
									</div>

									<div class="form-group rm03">
										<label for="title">Business Establishment Name</label>
										<input type="text"  class="form-control"  placeholder="Enter business name"  name="business_name"  required>
									</div>

									<div class="form-group rm03">
										<label for="title">Main Activity</label>
										<input type="text"  class="form-control"  placeholder="Enter main activity"  name="main_activity"  required>
									</div>

									<div class="form-group rm03">
										<label for="title">Activity Details</label>
										<textarea class="form-control" name="activity_details" required></textarea>
									</div>

									<div class="form-group rm03">
										<label for="title">Classification</label>
										<input type="text"  class="form-control"  placeholder="Enter Classification"  name="classification"  required>
									</div>

									<div class="form-group rm03">
										<label for="title">Sub Classification</label>
										<input type="text"  class="form-control"  placeholder="Enter Sub Classification"  name="sub_classification"  required>
									</div>

									

									<div class="form-group rm03">
										<label for="title">Dzongkhag</label>
										<input type="text"  class="form-control"  placeholder="Enter Dzongkhag"  name="dzongkhag"  required>
									</div>


									<div class="form-group rm03">
										<label for="title">Gewog</label>
										<input type="text"  class="form-control"  placeholder="Enter Gewog"  name="gewog" > 
									</div>

									<div class="form-group rm03">
										<label for="title">Village</label>
										<input type="text"  class="form-control"  placeholder="Enter Village"  name="village"  required>
									</div>

									<div class="form-group rm03">
										<label for="title">Exact Locaton</label>
										<textarea class="form-control" name="exact_location" required></textarea>
									</div>

									<div class="form-group rm03">
										<label for="title">Scale of Investment</label>
										<input type="text"  class="form-control"  placeholder="Enter Scale of Investment."  name="scale_investment"  required>
									</div>

									<div class="form-group rm03">
										<label for="title">Investment Amount</label>
										<input type="text"  class="form-control"  placeholder="Enter Investment Amount."  name="investment_amount"  required>
									</div>

									<div class="form-group rm03">
										<label for="title">License Issue Date</label>
										<input type="date"  class="form-control"  placeholder="Enter Investment Amount."  name="license_issue_date" >
									</div>

									<div class="form-group rm03">
										<label for="title">License Validity Date</label>
										<input type="date"  class="form-control"  name="license_validity_date"  required>
									</div>

									<div class="form-group rm03">
										<label for="title">Ownership Type</label>
										<input type="text"  class="form-control"  placeholder="Enter Ownership Type."  name="ownership_type"  required>
									</div>


									<div class="form-group rm03">
										<label for="title">Email</label>
										<input type="text"   class="form-control"  placeholder="Enter email."  name="email" required>
									</div>

									<div class="form-group rm03">
										<label for="title">Mobile</label>
										<input type="text"  class="form-control" required  placeholder="Enter mobile."  name="mobile" >
									</div>

									<div class="form-group rm03">
										<label for="title">Fixed Line</label>
										<input type="text"  class="form-control" required id="mydiv" placeholder="Enter fixed line."  name="fixed_line" >
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