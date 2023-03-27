@extends('layouts.app')


@section('title')
<title>Admin | Manage convetible-currency Add (Yearly)</title>
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
					<h4 class="pull-left page-title">Manage convetible-currency Add (Yearly)</h4>
					<ol class="breadcrumb pull-right">
                        <li class="active"><a href="{{route('manage.currency.yearly')}}"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</a></li>
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
								<form role="form" action="{{route('manage.currency.insert.yearly')}}" id="frm" method="post" enctype="multipart/form-data">
									@csrf

									<div class="form-group rm03">
										<label for="title">Year</label>
										<input type="number"  class="form-control"  placeholder="Enter year"  name="year" value="{{@$get_time_data->year}}" readonly>
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
									</div> --}}

									

									<div class="form-group rm03" >
										<label for="title">Purpose</label>
										<textarea class="form-control" name="purpose"></textarea>
									</div>


									


									







									<div class="form-group rm03" >
										<label for="title">Convertible Currency</label>
										<select class="form-control" name="currency" id="currency">
										<option value="">Select</option>
										<option value="USD">USD</option>
										<option value="EURO">EURO</option>
										</select>
									</div>

									

									<div class="form-group rm03">
										<label for="title">Amount</label>
										<input type="number"  class="form-control"  placeholder="Enter Amount"  name="amount" >
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
amount:{
required:true,
},
purpose:{
required:true,
},
currency:{
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