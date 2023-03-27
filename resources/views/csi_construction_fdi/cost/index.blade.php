@extends('layouts.app')


@section('title')
<title>Manage Cost Details (Yearly)</title>
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
                    <h4 class="pull-left page-title">Manage Cost Details (Yearly)</h4>
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
                                        <form method="POST" action="{{route('manage.cost.save.save.next.csi-construction-fdi')}}"  id="indus">
                                            @csrf
                                            <input type="hidden" name="type_submission" id="type_submission">
                                            <input type="hidden" name="year" id="year" value="{{@$year->year}}">
                                        <table id="example" class="table table-striped table-bordered nowrap" style="width:100%">
                                            <thead>
                                                <tr>
                                                   <th>Year</th>
                                                   {{-- <th>Reporting Month</th> --}}
                                                   <th>Electricity</th>
                                                   <th>Water</th>
                                                   <th>Telephone, fax, mobile, internet</th>
                                                   <th>House Rent</th>
                                                   <th>Land Lease Rent</th>
                                                   <th>Shed lease Rent</th>
                                                   <th>Others</th>
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

                                                    @if(@$data[0]->id)
                                                    <td>{{@$data[0]->electricity}}</td>
                                                    <td>{{@$data[0]->water}}</td>
                                                    <td>{{@$data[0]->telephone}}</td>
                                                    <td>{{@$data[0]->house_rent}}</td>

                                                    <td>{{@$data[0]->land_lease}}</td>
                                                    <td>{{@$data[0]->shed_lease}}</td>
                                                    <td>{{@$data[0]->others}}</td>
                                                    <td>{{@$data[0]->total}}</td>
                                                    @else
                                                   
                                                    
                                                     <td><input type="text"    name="addmore[{{1}}][electricity]" class="form-control electricity" ></td>
                                                   
                                                    <td><input type="text"  name="addmore[{{1}}][water]" class="form-control water"    ></td>

                                                    <td><input type="text"  name="addmore[{{1}}][telephone]" class="form-control telephone"  ></td>

                                                    <td><input type="text"  name="addmore[{{1}}][house_rent]" class="form-control house_rent"  ></td>

                                                    <td><input type="text"  name="addmore[{{1}}][land_lease]" class="form-control land_lease"  ></td>

                                                    <td><input type="text"  name="addmore[{{1}}][shed_lease]" class="form-control shed_lease"  ></td>
                                                    
                                                    <td><input type="text"  name="addmore[{{1}}][others]" class="form-control others"  ></td>
                                                    
                                                    <td><input type="text"  name="addmore[{{1}}][total]" class="form-control total"  style="width: 100px;"></td>

                                                    @endif
                                                    
                                                    <td class="rm07">
                                                        

                                                                @if(@$data[0]->id)
                                                                <a href="{{route('manage.cost.edit.csi-construction-fdi',@$data[0]->id)}}" >Edit </a>
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

                                                    <li class="active"><a href="{{route('manage.cost.csi-construction-fdi')}}" class="btn btn-primary">Cancel</a></li>
                                                    
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
    jQuery.validator.addClassRules('electricity', {
        required: true,
    });
    jQuery.validator.addClassRules('water', {
        required: true,
    });
    jQuery.validator.addClassRules('telephone', {
        required: true,
    });

    jQuery.validator.addClassRules('house_rent', {
        required: true,
    });

    jQuery.validator.addClassRules('land_lease', {
        required: true,
    });
    jQuery.validator.addClassRules('shed_lease', {
        required: true,
    });

    jQuery.validator.addClassRules('others', {
        required: true,
    });

    jQuery.validator.addClassRules('total', {
        required: true,
    });
    $('#indus').validate();

</script>



@endsection
