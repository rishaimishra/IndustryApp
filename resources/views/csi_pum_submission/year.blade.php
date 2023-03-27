@extends('layouts.app')


@section('title')
<title>Yearly Data Submission</title>
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
                    <h4 class="pull-left page-title">Yearly Data Submission</h4>
                    <ol class="breadcrumb pull-right">
                         
                        
                        
                    </ol>
                 </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="clearfix"></div>

                    




                    {{-- <div class="panel panel-default"> --}}
                        
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    @include('includes.message')
                                    
                                    <div class=" panel panel-default" style="padding: 15px;">
                                        @if(@$production>0)<i class="fa fa-check" aria-hidden="true" style="font-size:25px;color: green;"></i> @else <i class="fa fa-times" aria-hidden="true" style="font-size:25px;color: red;"></i> @endif  Manage Production Manufacturing   
                                    </div>

                                    {{-- <div class=" panel panel-default" style="padding: 15px;">
                                        @if(@$sales_domestic==0)<i class="fa fa-check" aria-hidden="true" style="font-size:25px;color: green;"></i> @else <i class="fa fa-times" aria-hidden="true" style="font-size:25px;color: red;"></i> @endif Manage Domestic Sales & Markets    
                                    </div> --}}

                                    <div class=" panel panel-default" style="padding: 15px;">
                                       @if(@$sales_export==0)<i class="fa fa-check" aria-hidden="true" style="font-size:25px;color: green;"></i> @else <i class="fa fa-times" aria-hidden="true" style="font-size:25px;color: red;"></i> @endif Manage Export Sales & Markets    
                                    </div>

                                    <div class=" panel panel-default" style="padding: 15px;">
                                       @if(@$raw_material>0)<i class="fa fa-check" aria-hidden="true" style="font-size:25px;color: green;"></i> @else <i class="fa fa-times" aria-hidden="true" style="font-size:25px;color: red;"></i> @endif Manage Raw Materials 
                                    </div>

                                    <div class=" panel panel-default" style="padding: 15px;">
                                       @if(@$currency>0)<i class="fa fa-check" aria-hidden="true" style="font-size:25px;color: green;"></i> @else <i class="fa fa-times" aria-hidden="true" style="font-size:25px;color: red;"></i> @endif Manage Cost Details
                                    </div>

                                    <div class=" panel panel-default" style="padding: 15px;">
                                       @if(@$power>0)<i class="fa fa-check" aria-hidden="true" style="font-size:25px;color: green;"></i> @else <i class="fa fa-times" aria-hidden="true" style="font-size:25px;color: red;"></i> @endif Manage Other Cost details
                                    </div>

                                    <div class=" panel panel-default" style="padding: 15px;">
                                      @if(@$employee>0)<i class="fa fa-check" aria-hidden="true" style="font-size:25px;color: green;"></i> @else <i class="fa fa-times" aria-hidden="true" style="font-size:25px;color: red;"></i> @endif  Manage Employees 
                                    </div>


                                    <div class=" panel panel-default" style="padding: 15px;">
                                        @if(@$production>0 && @$sales_export==0 && @$raw_material>0 && @$currency>0 && @$power>0 && @$employee>0)
                                        <a href="#" class="btn btn-primary">Submit All Data</a>
                                        @else
                                        <a href="#" class="btn btn-primary">Please Fix Issues Mentioned Above</a>
                                        @endif
                                    </div>



                                    
                                    


                                    

                                    


                                </div>
                            </div>
                        </div>
                    {{-- </div> --}}
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







@endsection
