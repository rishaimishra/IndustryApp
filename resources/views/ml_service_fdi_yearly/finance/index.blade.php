@extends('layouts.app')


@section('title')
<title>Manage Finance Information (Yearly)</title>
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
                    <h4 class="pull-left page-title">Manage Finance Information (Yearly)</h4>
                    <ol class="breadcrumb pull-right">
                         
                        {{-- <li class="active"><a href="{{route('manage.finance.add')}}" class="btn btn-primary">+ Add Data</a></li> --}}
                        
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
                                        <form method="POST" action="{{route('manage.finance.insert.csi.pammanage-financial-information-ml-services-fdi-yearly')}}"  id="indus">
                                            @csrf
                                            <input type="hidden" name="type_submission" id="type_submission">
                                            <input type="hidden" name="year" id="year" value="{{@$get_time_data->year}}">
                                        <table id="example" class="table table-striped table-bordered nowrap" style="width:100%">
                                            <thead>
                                                <tr>
                                                   <th>Year</th>
                                                   {{-- <th>Reporting Month</th> --}}
                                                   <th>Total Income</th>
                                                   <th>Total Expenditure</th>
                                                   <th>Profit / Loss</th>
                                                   <th>CIT / BIT Paid</th>
                                                   <th>Previous Year Dividend Declared %, if any</th>
                                                   
                                                   <th class="rm07" style="text-align:center;">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                {{-- @if(@$data->isNotEmpty())
                                                @foreach(@$data as $value) --}}
                                                <tr>
                                                    
                                                    <td>{{@$get_time_data->year}}</td>
                                                    @if(@$data[0]->total_income)
                                                    <td>{{@$data[0]->total_income}}</td>
                                                    <td>{{@$data[0]->total_expenditure}}</td>
                                                    <td>{{@$data[0]->profit_loss}}</td>
                                                    <td>{{@$data[0]->cit_bit}}</td>
                                                    <td>{{@$data[0]->dd}}</td>
                                                    @else

                                                    <td><input type="text"    name="addmore[{{1}}][total_income]" class="form-control total_income"></td>
                                                   
                                                    <td><input type="text"  name="addmore[{{1}}][total_expenditure]" class="form-control total_expenditure"></td>

                                                    <td><input type="text"  name="addmore[{{1}}][profit_loss]" class="form-control profit_loss"></td>

                                                    <td><input type="text"  name="addmore[{{1}}][cit_bit]" class="form-control cit_bit"></td>

                                                    <td><input type="text"  name="addmore[{{1}}][dd]" class="form-control dd"></td>

                                                    @endif
                                                    
                                                    
                                                    <td class="rm07">
                                                                @if(@$data[0]->id)    
                                                                <a href="{{route('manage.finance.editmanage-financial-information-ml-services-fdi-yearly',@$data[0]->id)}}" >Edit </a>
                                                                @endif
                                                                
                                                                {{-- <li><a href ="{{route('manage.finance.delete.ml-pam-fdi-yearly',['id'=>@$value->id])}}"data-bs-toggle="modal" data-bs-target="#exampleModal">Delete </a></li> --}}

                                                    </td>
                                                </tr>
                                                {{-- @endforeach
                                                @endif --}}
                                                
                                            </tbody>
                                        </table>
                                    </div>


                                    <<div class="panel-body">
                                        <div class="row">
                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                <ol class="breadcrumb pull-right">
                                     
                                                    <li class="active"><button id="save"  class="btn btn-primary">Save Data</button></li>

                                                    <li class="active"><button id="save_next"  class="btn btn-primary">Save & Next Data</button></li>

                                                    <li class="active"><a href="{{route('manage.financemanage-financial-information-ml-services-fdi-yearly')}}" class="btn btn-primary">Cancel</a></li>
                                                    
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
    jQuery.validator.addClassRules('total_income', {
        required: true,
    });
    jQuery.validator.addClassRules('total_expenditure', {
        required: true,
    });
    jQuery.validator.addClassRules('profit_loss', {
        required: true,
    });

    jQuery.validator.addClassRules('cit_bit', {
        required: true,
    });

    jQuery.validator.addClassRules('dd', {
        required: true,
    });
    $('#indus').validate();

</script>



@endsection
