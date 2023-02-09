@extends('layouts.app')


@section('title')
<title>Admin | Manage Production Manufacturing Edit</title>
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
					<h4 class="pull-left page-title">Manage Production Manufacturing Edit</h4>
					<ol class="breadcrumb pull-right">
                        <li class="active"><a href="{{route('manage.production.manufacture')}}"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</a></li>
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
								<form role="form" action="{{route('manage.production.manufacture.update')}}" id="frm" method="post" enctype="multipart/form-data">
									@csrf

									<input type="hidden" name="id" value="{{@$data->id}}">

									<div class="form-group rm03">
										<label for="title">Year</label>
										<input type="number"  class="form-control"  placeholder="Enter year" value="{{@$data->year}}" name="year" >
									</div>


									<div class="form-group ">
										<label for="title">Report From Month</label>
										<input type="date"  class="form-control"  placeholder="Enter name" value="{{@$data->from_month}}"  name="from_month" >
									</div>

									<div class="form-group">
										<label for="title">Report End Month</label>
										<input type="date"  class="form-control"  placeholder="Enter email" value="{{@$data->end_month}}" name="end_month"  >
									</div>

									

									<div class="form-group rm03">
										<label for="title">Name of Finished Product (s)</label>
										<input type="text"  class="form-control"  placeholder="Enter Name of Finished Product (s)"  name="product" value="{{@$data->product}}">
									</div>


									


									<div class="form-group rm03" >
										<label for="title">Quantity Produced</label>
										<input type="number"  class="form-control"  placeholder="Enter Quantity Produced"  name="quantity" value="{{@$data->quantity}}">
									</div>







									<div class="form-group rm03" >
										<label for="title">Unit</label>
										<select class="form-control" name="unit" id="role_id">
										<option value="">Select unit</option>
										<option value="Kilogram" @if(@$data->unit=="Kilogram") selected @endif>Kilogram</option>
										<option value="Nos" @if(@$data->unit=="Nos") selected @endif>Nos</option>
										</select>
									</div>

									<div class="form-group rm03">
										<label for="title">Ex-factory Price (Nu.)</label>
										<input type="number"  class="form-control"  placeholder="Enter Ex-factory Price (Nu.)"  name="price" value="{{@$data->price}}">
									</div>

									<div class="form-group rm03">
										<label for="title">% Capacity Utilization</label>
										<input type="text"  class="form-control"  placeholder="Enter % Capacity Utilization"  name="capacity" value="{{@$data->capacity}}">
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