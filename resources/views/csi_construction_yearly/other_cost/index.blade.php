@extends('layouts.app')


@section('title')
<title>Manage Other Cost Details (Yearly)</title>
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
                    <h4 class="pull-left page-title">Manage Other Cost Details (Yearly)</h4>
                    <ol class="breadcrumb pull-right">
                         
                        {{-- <li class="active"><a href="{{route('manage.power.add')}}" class="btn btn-primary">+ Add Data</a></li> --}}
                        
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
                                        <form method="POST" action="{{route('manage.other.cost.other.save.save.next.csi-construction.yearly')}}"  id="indus">
                                            @csrf
                                            <input type="hidden" name="type_submission" id="type_submission">
                                            <input type="hidden" name="year" id="year" value="{{@$year->year}}">
                                        <table id="example" class="table table-striped table-bordered nowrap" style="width:100%">
                                            <thead>
                                                <tr>
                                                   <th>Year</th>
                                                   {{-- <th>Reporting Month</th> --}}
                                                   <th>POL Cost</th>
                                                   <th>General Administration Cost</th>
                                                   <th>RM Transportation Cost</th>
                                                   <th>Sales Transportation Cost</th>
                                                   <th>Other Sales Cost</th>
                                                   <th>Other Costs</th>
                                                   <th>Total</th>
                                                   <th class="rm07" style="text-align:center;">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                {{-- @if(@$data->isNotEmpty())
                                                @foreach(@$data as $key=> $value) --}}
                                                <tr>
                                                   
                                                    <td>{{@$year->year}}</td>
                                                    {{-- <td>{{@$value->from_month}} - {{@$value->end_month}}</td> --}}

                                                    @if(@$data[0]->id && @$data[0]->type=="Y")
                                                    <td>{{@$data[0]->pol}}</td>
                                                    <td>{{@$data[0]->general}}</td>
                                                    <td>{{@$data[0]->rm}}</td>
                                                    <td>{{@$data[0]->sales_transport}}</td>

                                                    <td>{{@$data[0]->other_sales}}</td>
                                                    <td>{{@$data[0]->other_costs}}</td>
                                                    <td>{{@$data[0]->total}}</td>
                                                    @else
                                                   
                                                    
                                                     <td><input type="text"    name="addmore[{{1}}][pol]" class="form-control pol" ></td>
                                                   
                                                    <td><input type="text"  name="addmore[{{1}}][general]" class="form-control general"    ></td>

                                                    <td><input type="text"  name="addmore[{{1}}][rm]" class="form-control rm"  ></td>

                                                    <td><input type="text"  name="addmore[{{1}}][sales_transport]" class="form-control sales_transport"  ></td>

                                                    <td><input type="text"  name="addmore[{{1}}][other_sales]" class="form-control other_sales"  ></td>

                                                    <td><input type="text"  name="addmore[{{1}}][other_costs]" class="form-control other_costs"  ></td>
                                                    
                                                    
                                                    <td><input type="text"  name="addmore[{{1}}][total]" class="form-control total"  style="width: 100px;"></td>

                                                    @endif
                                                    
                                                    <td class="rm07">
                                                        

                                                                @if(@$data[0]->id && @$data[0]->type=="Y")
                                                                <a href="{{route('manage.other.cost.other.edit.csi-construction.yearly',@$data[0]->id)}}" >Edit </a>
                                                                @endif
                                                               
                                                        </div>
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

                                                    <li class="active"><a href="{{route('manage.other.cost.other.csi-construction.yearly')}}" class="btn btn-primary">Cancel</a></li>
                                                    
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
  @foreach (@$data as $value)
    $("#action{{$value->id}}").click(function(){
        $('.show-actions:not(#show-{{$value->id}})').slideUp();
        $("#show-{{$value->id}}").slideToggle();
    });
 @endforeach
</script>

<script type="text/javascript">
    $('#save').on('click',function(){
        $('#type_submission').val('S');
        $('#indus').submit();
    });
</script>

<script type="text/javascript">
    $('#save_next').on('click',function(){
        $('#type_submission').val('SN');
        $('#indus').submit();
    });
</script>

<script type="text/javascript">
    jQuery.validator.addClassRules('pol', {
        required: true,
    });
    jQuery.validator.addClassRules('general', {
        required: true,
    });
    jQuery.validator.addClassRules('rm', {
        required: true,
    });

    jQuery.validator.addClassRules('sales_transport ', {
        required: true,
    });

    jQuery.validator.addClassRules('other_sales', {
        required: true,
    });
    jQuery.validator.addClassRules('other_costs', {
        required: true,
    });


    jQuery.validator.addClassRules('total', {
        required: true,
    });
    $('#indus').validate();

</script>



@endsection
