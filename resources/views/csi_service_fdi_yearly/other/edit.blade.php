@extends('layouts.app')


@section('title')
<title>Admin | Manage Other Information (Yearly) Edit</title>
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
					<h4 class="pull-left page-title">Manage Other Information (Yearly) Edit</h4>
					<ol class="breadcrumb pull-right">
                        <li class="active"><a href="{{route('manage.other-csi-service-fdi-yearly')}}"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</a></li>
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
								<form role="form" action="{{route('manage.other.update-csi-service-fdi-yearly')}}" id="frm" method="post" enctype="multipart/form-data">
									@csrf

									<input type="hidden" name="id" value="{{@$data->id}}">

									<div class="form-group rm03">
										<label for="title">Year</label>
										<input type="number"  class="form-control"  placeholder="Enter year" value="{{@$data->year}}" name="year" >
									</div>


									


									<div class="form-group rm03">
										<label for="title">Total Assets (Nu. Million)</label>
										<input type="text"  class="form-control"  placeholder="Enter Total Assets (Nu. Million)"  name="asset" required value="{{@$data->asset}}">
									</div>

									<div class="form-group rm03">
										<label for="title">Total Loan (Nu. Million)</label>
										<input type="text"  class="form-control"  placeholder="Enter Total Loan (Nu. Million)"  name="loan" required value="{{@$data->loan}}">
									</div>


									<div class="form-group rm03">
										<label for="title">Authorized Shares</label>
										<input type="text"  class="form-control"  placeholder="Enter Authorized Shares"  name="a_share" required value="{{@$data->a_share}}">
									</div>

									<div class="form-group rm03">
										<label for="title">Authorized Capital</label>
										<input type="text"  class="form-control"  placeholder="Enter Authorized Capital"  name="a_capital" required value="{{@$data->a_capital}}">
									</div>

									<div class="form-group rm03">
										<label for="title">Paid Up Shares</label>
										<input type="text"  class="form-control"  placeholder="Enter Paid Up Shares"  name="p_share"  required value="{{@$data->p_share}}">
									</div>

									<div class="form-group rm03">
										<label for="title">Paid Up Capital</label>
										<input type="text"  class="form-control"  placeholder="Enter Paid Up Capital"  name="p_capital"  required value="{{@$data->p_capital}}">
									</div>


									<div class="form-group rm03">
										<label for="title">Reserves and Surplus</label>
										<input type="text"  class="form-control"  placeholder="Enter Reserves and Surplus"  name="surplus" required value="{{@$data->surplus}}">
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