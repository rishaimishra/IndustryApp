@extends('layouts.app')


@section('title')
<title>Admin | Manage Industry Profile Update</title>
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
					<h4 class="pull-left page-title">Manage Industry Profile Update</h4>
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
								<form role="form" action="{{route('update.csi.csi_manufacturing')}}" id="frm" method="post" enctype="multipart/form-data">
									@csrf
									<input type="hidden" name="id" value="{{@$data->id}}">
					<div class="csi_manufacturing_div" id="csi_manufacturing_div">	
									

									<div class="form-group rm03">
										<label for="title">Business Status</label>
										<select class="form-control" name="csi_manufacturing_business_status" id="csi_manufacturing_business_status" class="csi_manufacturing_business_status">
										<option value="">Select Status</option>
										<option value="op" @if(@$data->business_status=="op") selected @endif>Operational</option>
										<option value="nop" @if(@$data->business_status=="nop") selected @endif>Non Operational</option>
										<option value="uc" @if(@$data->business_status=="uc") selected @endif>Under Construction</option>
										<option value="bnc" @if(@$data->business_status=="bnc") selected @endif>Business Not Commenced</option>
										</select>
									</div>




									<div class="csi_manufacturing_operational" @if(@$data->business_status=="op") style="display:block" @else style="display:none" @endif >
									

									<div class="form-group rm03">
										<label for="title">Date of Commercial Commencement</label>
										<input type="date"  class="form-control"  placeholder="Enter email."  name="csi_manufacturing_date_of_commercial" value="{{@$data->date_of_commercial}}" >
									</div>

									<div class="form-group rm03">
										<label for="title">Installed Production Capacity</label>
										<input type="text"  class="form-control"  placeholder="Enter Installed Production Capacity."  name="csi_manufacturing_installer_production_capacity" value="{{@$data->installer_production_capacity}}" >
									</div>

									<div class="form-group rm03">
										<label for="title">Total Investment Till Date (Nu in Millions)</label>
										<input type="text"  class="form-control"  placeholder="Enter Total Investment Till Date (Nu in Millions)."  name="csi_manufacturing_total_investment" value="{{@$data->total_investment}}"  >
									</div>
									
									</div>


									<div class="csi_manufacturing_non_operational" @if(@$data->business_status=="nop") style="display:block" @else style="display:none" @endif >
									

									<div class="form-group rm03">
										<label for="title">Date Since Not Operational</label>
										<input type="date"  class="form-control"  placeholder="Enter email."  name="csi_manufacturing_date_of_commercial" value="{{@$data->date_of_commercial}}" >
									</div>


									<div class="form-group rm03">
										<label for="title">Reason</label>
										<textarea class="form-control" name="csi_manufacturing_specify" >{{@$data->specify}}</textarea>
									</div>

									<div class="form-group rm03">
										<label for="title">Installed Production Capacity</label>
										<input type="text"  class="form-control"  placeholder="Enter Installed Production Capacity."  name="csi_manufacturing_installer_production_capacity" value="{{@$data->installer_production_capacity}}" >
									</div>

									<div class="form-group rm03">
										<label for="title">Total Investment Till Date (Nu in Millions)</label>
										<input type="text"  class="form-control"  placeholder="Enter Total Investment Till Date (Nu in Millions)."  name="csi_manufacturing_total_investment" value="{{@$data->total_investment}}" >
									</div>

								</div>



								<div class="csi_manufacturing_under_construction" @if(@$data->business_status=="uc") style="display:block" @else style="display:none" @endif >
									

									<div class="form-group rm03">
										<label for="title">Expected Date / year of Commercial Business Commencement</label>
										<input type="date"  class="form-control"  placeholder="Enter email."  name="csi_manufacturing_date_of_commercial" value="{{@$data->date_of_commercial}}" >
									</div>


									
									<div class="form-group rm03">
										<label for="title">Installed Production Capacity</label>
										<input type="text"  class="form-control"  placeholder="Enter Installed Production Capacity."  name="csi_manufacturing_installer_production_capacity" value="{{@$data->installer_production_capacity}}" >
									</div>

									<div class="form-group rm03">
										<label for="title">Total Investment Till Date (Nu in Millions)</label>
										<input type="text"  class="form-control"  placeholder="Enter Total Investment Till Date (Nu in Millions)."  name="csi_manufacturing_total_investment" value="{{@$data->total_investment}}" >
									</div>

								</div>


								<div class="csi_manufacturing_not_commenced" @if(@$data->business_status=="bnc") style="display:block" @else style="display:none" @endif >
									

									<div class="form-group rm03">
										<label for="title">Expected Date / year of Commercial Business Commencement</label>
										<input type="date"  class="form-control"  placeholder="Enter email."  name="csi_manufacturing_date_of_commercial" value="{{@$data->date_of_commercial}}" >
									</div>


									
									<div class="form-group rm03">
										<label for="title">Installed Production Capacity</label>
										<input type="text"  class="form-control"  placeholder="Enter Installed Production Capacity."  name="csi_manufacturing_installer_production_capacity" value="{{@$data->installer_production_capacity}}" >
									</div>

									<div class="form-group rm03">
										<label for="title">Total Investment Till Date (Nu in Millions)</label>
										<input type="text"  class="form-control"  placeholder="Enter Total Investment Till Date (Nu in Millions)."  name="csi_manufacturing_total_investment" value="{{@$data->total_investment}}" >
									</div>

								</div>
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
<script type="text/javascript">
	$(document).ready(function(){
		@if (@$data->business_status=="op")
		$('.csi_manufacturing_operational :input').prop("disabled", false);
					$('.csi_manufacturing_non_operational :input').prop("disabled", true);
					$('.csi_manufacturing_under_construction :input').prop("disabled", true);
					$('.csi_manufacturing_not_commenced :input').prop("disabled", true);
		@elseif(@$data->business_status=="nop")
		           $('.csi_manufacturing_non_operational :input').prop("disabled", false);
					$('.csi_manufacturing_operational :input').prop("disabled", true);
					$('.csi_manufacturing_under_construction :input').prop("disabled", true);
					$('.csi_manufacturing_not_commenced :input').prop("disabled", true);
		@elseif(@$data->business_status=="uc")	

					$('.csi_manufacturing_under_construction :input').prop("disabled", false);
					$('.csi_manufacturing_operational :input').prop("disabled", true);
					$('.csi_manufacturing_non_operational :input').prop("disabled", true);
					$('.csi_manufacturing_not_commenced :input').prop("disabled", true);
		
		@elseif(@$data->business_status=="bnc")
					$('.csi_manufacturing_not_commenced :input').prop("disabled", false);
					$('.csi_manufacturing_operational :input').prop("disabled", true);
					$('.csi_manufacturing_non_operational :input').prop("disabled", true);
					$('.csi_manufacturing_under_construction :input').prop("disabled", true);
		@endif
	});
</script>


<script type="text/javascript">
			    $('#csi_manufacturing_business_status').on('change',function(){
				$('#csi_manufacturing_div').find("input").val('');
				var business_status= $('#csi_manufacturing_business_status').val();

				if(business_status=="op"){
					$('.csi_manufacturing_operational').css('display','block');
					$('.csi_manufacturing_non_operational').css('display','none');
					$('.csi_manufacturing_under_construction').css('display','none');
					$('.csi_manufacturing_not_commenced').css('display','none');


					$('.csi_manufacturing_operational :input').prop("disabled", false);
					$('.csi_manufacturing_non_operational :input').prop("disabled", true);
					$('.csi_manufacturing_under_construction :input').prop("disabled", true);
					$('.csi_manufacturing_not_commenced :input').prop("disabled", true);

				}

				if(business_status=="nop"){
					$('.csi_manufacturing_operational').css('display','none');
					$('.csi_manufacturing_non_operational').css('display','block');
					$('.csi_manufacturing_under_construction').css('display','none');
					$('.csi_manufacturing_not_commenced').css('display','none');

					$('.csi_manufacturing_non_operational :input').prop("disabled", false);
					$('.csi_manufacturing_operational :input').prop("disabled", true);
					$('.csi_manufacturing_under_construction :input').prop("disabled", true);
					$('.csi_manufacturing_not_commenced :input').prop("disabled", true);

				}

				if(business_status=="uc"){
					$('.csi_manufacturing_operational').css('display','none');
					$('.csi_manufacturing_non_operational').css('display','none');
					$('.csi_manufacturing_under_construction').css('display','block');
					$('.csi_manufacturing_not_commenced').css('display','none');

					$('.csi_manufacturing_under_construction :input').prop("disabled", false);
					$('.csi_manufacturing_operational :input').prop("disabled", true);
					$('.csi_manufacturing_non_operational :input').prop("disabled", true);
					$('.csi_manufacturing_not_commenced :input').prop("disabled", true);

				}

				if(business_status=="bnc"){
					$('.csi_manufacturing_operational').css('display','none');
					$('.csi_manufacturing_non_operational').css('display','none');
					$('.csi_manufacturing_under_construction').css('display','none');
					$('.csi_manufacturing_not_commenced').css('display','block');

					$('.csi_manufacturing_not_commenced :input').prop("disabled", false);
					$('.csi_manufacturing_operational :input').prop("disabled", true);
					$('.csi_manufacturing_non_operational :input').prop("disabled", true);
					$('.csi_manufacturing_under_construction :input').prop("disabled", true);

				}

				if(business_status==""){
					$('.csi_manufacturing_operational').css('display','none');
					$('.csi_manufacturing_non_operational').css('display','none');
					$('.csi_manufacturing_under_construction').css('display','none');
					$('.csi_manufacturing_not_commenced').css('display','none');

					$('.csi_manufacturing_not_commenced :input').prop("disabled", false);
					$('.csi_manufacturing_operational :input').prop("disabled", true);
					$('.csi_manufacturing_non_operational :input').prop("disabled", true);
					$('.csi_manufacturing_under_construction :input').prop("disabled", true);

				}

			})
</script>


<script>
$(document).ready(function(){
	
$('#frm').validate({
rules:{
csi_manufacturing_business_status:{
	required:true,
},
csi_manufacturing_date_of_commercial:{
required:true,
},	
csi_manufacturing_total_investment:{
	required:true,
},
csi_manufacturing_installer_production_capacity:{
	required:true,
},
csi_manufacturing_specify:{
	required:true,
},


},
messages:{

}
});
});
</script>













@endsection