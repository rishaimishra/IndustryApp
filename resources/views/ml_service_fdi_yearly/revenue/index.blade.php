@extends('layouts.app')


@section('title')
<title>Manage Revenue (Yearly)</title>
@endsection

@section('style')
@include('includes.style')
<style type="text/css">
    td{
        width: 500px !important;
    }
    .table-responsive {
    min-height: .01%;
    /* overflow-x: auto; */
    overflow-x: auto;
    white-space: nowrap;
}
</style>
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
                    <h4 class="pull-left page-title">Manage Revenue (Yearly)</h4>
                    <ol class="breadcrumb pull-right">
                         
                        {{-- <li class="active"><a href="{{route('manage.revenue.add.ml-pam-fdi-yearly')}}" class="btn btn-primary">+ Add Data</a></li> --}}
                        
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
                                        <form method="POST" action="{{route('manage.revenue.insert.manage-revenue-ml-services-fdi-yearly')}}"  id="indus">
                                            @csrf
                                            <input type="hidden" name="type_submission" id="type_submission">
                                            <input type="hidden" name="year" id="year" value="{{@$get_time_data->year}}">
                                        <table id="example" class="table table-striped table-bordered nowrap" style="width:100%">
                                            <thead>
                                                <tr>
                                                   <th>Year</th>
                                                   {{-- <th>Reporting Month</th> --}}
                                                   <th>CIT / BIT</th>
                                                   <th>Imports / Customs Duty</th>
                                                   <th>Sales Tax</th>
                                                   <th>Salary Tax</th>
                                                   <th>Land Lease Rent</th>
                                                   <th>Shed Lease Rent</th>
                                                   <th>Dividend to Government</th>
                                                   <th>Others</th>
                                                   <th>Total</th>
                                                   
                                                   <th class="rm07" style="text-align:center;">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                               
                                                <td>{{@$get_time_data->year}}</td>
                                                    @if(@$data[0]->id)
                                                    <td>{{@$data[0]->cit_bit}}</td>
                                                    <td>{{@$data[0]->import}}</td>
                                                    <td>{{@$data[0]->sales_tax}}</td>
                                                    <td>{{@$data[0]->salary_tax}}</td>
                                                    <td>{{@$data[0]->land_rent}}</td>
                                                    <td>{{@$data[0]->shed_rent}}</td>
                                                    <td>{{@$data[0]->dividend}}</td>
                                                    <td>{{@$data[0]->others}}</td>
                                                    <td>{{@$data[0]->total}}</td>
                                                    @else

                                                    <td><input type="text"    name="addmore[{{1}}][cit_bit]" class="form-control cit_bit"></td>
                                                   
                                                    <td><input type="text"  name="addmore[{{1}}][import]" class="form-control import"></td>

                                                    <td><input type="text"  name="addmore[{{1}}][sales_tax]" class="form-control sales_tax"></td>

                                                    <td><input type="text"  name="addmore[{{1}}][salary_tax]" class="form-control salary_tax"></td>

                                                    <td><input type="text"  name="addmore[{{1}}][land_rent]" class="form-control land_rent"></td>

                                                    <td><input type="text"  name="addmore[{{1}}][shed_rent]" class="form-control shed_rent"></td>

                                                    <td><input type="text"  name="addmore[{{1}}][dividend]" class="form-control dividend"></td>

                                                    <td><input type="text"  name="addmore[{{1}}][others]" class="form-control others" style="width: 100px;"></td>

                                                    <td><input type="text"  name="addmore[{{1}}][total]" style="width: 100px;" class="form-control total"></td>

                                                    @endif
                                                    
                                                    
                                                    <td class="rm07">
                                                                @if(@$data[0]->id)    
                                                                <a href="{{route('manage.revenue.edit.manage-revenue-ml-services-fdi-yearly',@$data[0]->id)}}" >Edit </a>
                                                                @endif
                                                                
                                                                {{-- <li><a href ="{{route('manage.finance.delete.ml-pam-fdi-yearly',['id'=>@$value->id])}}"data-bs-toggle="modal" data-bs-target="#exampleModal">Delete </a></li> --}}

                                                    </td>
                                                </tr>
                                                
                                                
                                            </tbody>
                                        </table>
                                    </div>


                                    <div class="panel-body">
                                        <div class="row">
                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                <ol class="breadcrumb pull-right">
                                     
                                                    <li class="active"><button id="save"  class="btn btn-primary">Save Data</button></li>

                                                    <li class="active"><button id="save_next"  class="btn btn-primary">Save & Next Data</button></li>

                                                    <li class="active"><a href="{{route('manage.revenue.manage-revenue-ml-services-fdi-yearly')}}" class="btn btn-primary">Cancel</a></li>
                                                    
                                                </ol>

                                            </div>
                                        

                                        </div>
                                    </div>
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
    $('#save').on('click',function(){
        $('#type_submission').val('S');
        $('#indus').submit();
    });
</script>

<script type="text/javascript">
    jQuery.validator.addClassRules('import', {
        required: true,
    });
    jQuery.validator.addClassRules('sales_tax', {
        required: true,
    });
    jQuery.validator.addClassRules('salary_tax', {
        required: true,
    });

    jQuery.validator.addClassRules('land_rent', {
        required: true,
    });

    jQuery.validator.addClassRules('shed_rent', {
        required: true,
    });

    jQuery.validator.addClassRules('dividend', {
        required: true,
    });

    jQuery.validator.addClassRules('others', {
        required: true,
    });
    jQuery.validator.addClassRules('total', {
        required: true,
    });

    jQuery.validator.addClassRules('cit_bit', {
        required: true,
    });
    $('#indus').validate();

</script>




@endsection
