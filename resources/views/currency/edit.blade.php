@extends('layouts.app')


@section('title')
<title>Admin | Manage convetible-currency Edit</title>
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
					<h4 class="pull-left page-title">Manage convetible-currency Edit</h4>
					<ol class="breadcrumb pull-right">
                        <li class="active"><a href="{{route('manage.currency')}}"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</a></li>
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
								<form role="form" action="{{route('manage.currency.update')}}" id="frm" method="post" enctype="multipart/form-data">
									@csrf

									<input type="hidden" name="id" value="{{@$data->id}}">

									<div class="form-group rm03">
										<label for="title">Year</label>
										<input type="number"  class="form-control"  placeholder="Enter year" value="{{@$data->year}}" name="year" readonly>
									</div>


									{{-- <div class="form-group ">
										<label for="title">Report From Month</label>
										<select class="form-control" name="from_month" id="from_month">
										<option value="">Select month</option>
										<option value="Jan" @if(@$data->from_month=="Jan") selected @endif>Jan</option>
										<option value="Feb" @if(@$data->from_month=="Feb") selected @endif>Feb</option>
										<option value="Mar" @if(@$data->from_month=="Mar") selected @endif>Mar</option>
										<option value="Apl" @if(@$data->from_month=="Apl") selected @endif>Apl</option>
										<option value="May" @if(@$data->from_month=="May") selected @endif>May</option>
										<option value="Jun" @if(@$data->from_month=="Jun") selected @endif>Jun</option>
										<option value="Jul" @if(@$data->from_month=="Jul") selected @endif>Jul</option>
										<option value="Aug" @if(@$data->from_month=="Aug") selected @endif>Aug</option>
										<option value="Sept" @if(@$data->from_month=="Sept") selected @endif>Sept</option>
										<option value="Oct" @if(@$data->from_month=="Oct") selected @endif>Oct</option>
										<option value="Nov" @if(@$data->from_month=="Nov") selected @endif>Nov</option>
										<option value="Dec" @if(@$data->from_month=="Dec") selected @endif>Dec</option>
										</select>
									</div>

									<div class="form-group">
										<label for="title">Report End Month</label>
										<select class="form-control" name="end_month" id="end_month">
										<option value="">Select month</option>
										<option value="Jan" @if(@$data->end_month=="Jan") selected @endif>Jan</option>
										<option value="Feb" @if(@$data->end_month=="Feb") selected @endif>Feb</option>
										<option value="Mar" @if(@$data->end_month=="Mar") selected @endif>Mar</option>
										<option value="Apl" @if(@$data->end_month=="Apl") selected @endif>Apl</option>
										<option value="May" @if(@$data->end_month=="May") selected @endif>May</option>
										<option value="Jun" @if(@$data->end_month=="Jun") selected @endif>Jun</option>
										<option value="Jul" @if(@$data->end_month=="Jul") selected @endif>Jul</option>
										<option value="Aug" @if(@$data->end_month=="Aug") selected @endif>Aug</option>
										<option value="Sept" @if(@$data->end_month=="Sept") selected @endif>Sept</option>
										<option value="Oct" @if(@$data->end_month=="Oct") selected @endif>Oct</option>
										<option value="Nov" @if(@$data->end_month=="Nov") selected @endif>Nov</option>
										<option value="Dec" @if(@$data->end_month=="Dec") selected @endif>Dec</option>
										</select>
									</div> --}}

									

									<div class="form-group rm03" >
										<label for="title">Purpose</label>
										<textarea class="form-control" name="purpose">{{@$data->purpose}}</textarea>
									</div>


									


									







									<div class="form-group rm03" >
										<label for="title">Convertible Currency</label>
										<select class="form-control" name="currency" id="currency">
										<option value="">Select</option>
										<option value="USD" @if(@$data->currency=="USD") selected @endif>USD</option>
										<option value="EURO" @if(@$data->currency=="EURO") selected @endif>EURO</option>
										</select>
									</div>

									

									<div class="form-group rm03">
										<label for="title">Amount</label>
										<input type="number"  class="form-control" value="{{@$data->amount}}" placeholder="Enter Amount"  name="amount" >
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