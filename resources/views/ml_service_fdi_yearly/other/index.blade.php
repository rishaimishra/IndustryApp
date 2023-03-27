@extends('layouts.app')


@section('title')
<title>Manage Other Information (Yearly)</title>
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
                    <h4 class="pull-left page-title">Manage Other Information (Yearly)</h4>
                    <ol class="breadcrumb pull-right">
                         
                        {{-- <li class="active"><a href="{{route('manage.other.add')}}" class="btn btn-primary">+ Add Data</a></li> --}}
                        
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
                                        <form method="POST" action="{{route('manage.other.insert-ml-services-fdi-yearly')}}"  id="indus">
                                            @csrf
                                            <input type="hidden" name="type_submission" id="type_submission">
                                            <input type="hidden" name="year" id="year" value="{{@$get_time_data->year}}">
                                        <table id="example" class="table table-striped table-bordered nowrap" style="width:100%">
                                            <thead>
                                                <tr>
                                                   <th>Year</th>
                                                   <th>Total Assets (Nu. Milion)</th>
                                                   <th>Total Loan (Nu. Million)</th>
                                                   <th>Authorized Shares (Nos.)</th>
                                                   <th>Authorized Capital (Nu. Million)</th>
                                                   <th>Paid Up shares (Nos)</th>
                                                   <th>Paid Up Capital (Nu. Million)</th>
                                                   <th>Reserve and Surplus (Nu. Million)</th>
                                                   <th class="rm07" style="text-align:center;">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                {{-- @if(@$data->isNotEmpty())
                                                @foreach(@$data as $value) --}}
                                                <tr>
                                                    
                                                    <td>{{@$get_time_data->year}}</td>
                                                    @if(@$data[0]->asset)
                                                    <td>{{@$data[0]->asset}}</td>
                                                    <td>{{@$data[0]->loan}}</td>
                                                    <td>{{@$data[0]->a_share}}</td>
                                                    <td>{{@$data[0]->a_capital}}</td>
                                                    <td>{{@$data[0]->p_share}}</td>
                                                    <td>{{@$data[0]->p_capital}}</td>
                                                    <td>{{@$data[0]->surplus}}</td>
                                                    @else

                                                    <td><input type="text"    name="addmore[{{1}}][asset]" class="form-control asset"></td>
                                                   
                                                    <td><input type="text"  name="addmore[{{1}}][loan]" class="form-control loan"></td>

                                                    <td><input type="text"  name="addmore[{{1}}][a_share]" class="form-control a_share"></td>

                                                    <td><input type="text"  name="addmore[{{1}}][a_capital]" class="form-control a_capital"></td>

                                                    <td><input type="text"  name="addmore[{{1}}][p_share]" class="form-control p_share"></td>

                                                    <td><input type="text"  name="addmore[{{1}}][p_capital]" class="form-control p_capital"></td>

                                                    <td><input type="text"  name="addmore[{{1}}][surplus]" class="form-control surplus"></td>

                                                    @endif
                                                    
                                                    
                                                    <td class="rm07">
                                                                @if(@$data[0]->id)    

                                                                <a href="{{route('manage.other.edit-ml-services-fdi-yearly',@$data[0]->id)}}" >Edit </a>
                                                                @endif
                                                                
                                                                {{-- <li><a href ="{{route('manage.finance.delete.ml-pam-fdi-yearly',['id'=>@$value->id])}}"data-bs-toggle="modal" data-bs-target="#exampleModal">Delete </a></li> --}}

                                                    </td>
                                                </tr>
                                                {{-- @endforeach
                                                @endif --}}
                                                
                                            </tbody>
                                        </table>
                                    </div>


                    <div class="panel-body">
                                        <div class="row">
                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                <ol class="breadcrumb pull-right">
                                     
                                                    <li class="active"><button id="save"  class="btn btn-primary">Save Data</button></li>

                                                    <li class="active"><button id="save_next"  class="btn btn-primary">Save & Next Data</button></li>

                                                    <li class="active"><a  href="{{route('manage.yearly.submission')}}" class="btn btn-primary">Skip</a ></li>

                                                    <li class="active"><a href="{{route('manage.other-ml-services-fdi-yearly')}}" class="btn btn-primary">Cancel</a></li>
                                                    
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
    jQuery.validator.addClassRules('asset', {
        required: true,
    });
    jQuery.validator.addClassRules('total_expenditure', {
        required: true,
    });
    jQuery.validator.addClassRules('loan', {
        required: true,
    });

    jQuery.validator.addClassRules('a_share', {
        required: true,
    });

    jQuery.validator.addClassRules('a_capital', {
        required: true,
    });
    jQuery.validator.addClassRules('p_share', {
        required: true,
    });
    jQuery.validator.addClassRules('p_capital', {
        required: true,
    });
    jQuery.validator.addClassRules('surplus', {
        required: true,
    });

    $('#indus').validate();

</script>



@endsection
