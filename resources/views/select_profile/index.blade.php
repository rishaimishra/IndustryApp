@extends('layouts.app')


@section('title')
<title>Select Profile</title>
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
<!-- Left Sidebar End -->



<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->
<div class="content-page">
    <!-- Start content -->
    <div class="content">
        <div class="container">

            <!-- Page-Title -->
            <div class="row">
                <div class="col-sm-12">
                    <h4 class="pull-left page-title">Select Profile</h4>
                    <ol class="breadcrumb pull-right">
                         
                        {{-- <li class="active"><a href="{{route('manage.sales.domestic.add')}}" class="btn btn-primary">+ Add Data</a></li> --}}
                        
                    </ol>
                 </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="clearfix"></div>

                    




                    <div class="panel panel-default">
                        
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    @include('includes.message')
                                    <div class="table-responsive">
                                        <form id="form_change" method="post" action="{{route('manage.select.profile.update')}}">
                                            @csrf
                                            <input type="hidden" name="id" value="" id="profile_id">
                                        @foreach(@$data as $value)    
                                        <div class="card">
                                            <h3>{{@$value->business_name}}</h3>
                                            <p>License No : {{@$value->license_no}}</p>
                                            <p>Main Activity : {{@$value->main_activity}}</p>
                                            <p>Select Profile : <p style="width:38px"><input type="radio" name="select_profile" class="form-control radio_change" id="{{@$value->id}}" value="{{@$value->id}}" @if(@$value->id==auth()->user()->current_profile) checked @endif></p></p>
                                         </div>
                                         @endforeach
                                         </form>

                                    

                                    


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End row -->



        </div>
        <!-- container -->

    </div>
    <!-- content -->

    @include('includes.footer')
</div>
<!-- ============================================================== -->
<!-- End Right content here -->
<!-- ============================================================== -->

@endsection

@section('script')
@include('includes.script')


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/additional-methods.min.js"></script>

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
<script type="text/javascript" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>


<script type="text/javascript">
         $(document).ready(function() {
         $('#example').DataTable({
            "ordering": false,
         });
         } );
</script>


<script type="text/javascript">
  @foreach (@$data as $value)
    $("#action{{$value->id}}").click(function(){
        $('.show-actions:not(#show-{{$value->id}})').slideUp();
        $("#show-{{$value->id}}").slideToggle();
    });
 @endforeach
</script>


<script type="text/javascript">
    $('.radio_change').on('change',function(e){
        var id = $(this).val();
        $('#profile_id').val(id);
        $('#form_change').submit();
    });
</script>



@endsection
