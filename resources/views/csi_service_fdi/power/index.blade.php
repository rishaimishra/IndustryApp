@extends('layouts.app')


@section('title')
<title>Manage Power Consumption</title>
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
                    <h4 class="pull-left page-title">Manage Power Consumption</h4>
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
                                        <form method="POST" action="{{route('manage.power.save.save.next.ml-domestic-pam')}}"  id="indus">
                                            @csrf
                                            <input type="hidden" name="type_submission" id="type_submission">
                                            <input type="hidden" name="year" id="year" value="{{@$year->year}}">
                                        <table id="example" class="table table-striped table-bordered nowrap" style="width:100%">
                                            <thead>
                                                <tr>
                                                   <th>Year</th>
                                                   {{-- <th>Reporting Month</th> --}}
                                                   <th>Units</th>
                                                   <th>Approved Power Capacity</th>
                                                   <th>Energy Consumption</th>
                                                   <th>Energy Consumption Charges(Nu.Million)</th>
                                                   <th class="rm07" style="text-align:center;">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                {{-- @if(@$data->isNotEmpty())
                                                @foreach(@$data as $key=> $value) --}}
                                                <tr>
                                                   
                                                    <td>{{@$year->year}}</td>
                                                    {{-- <td>{{@$value->from_month}} - {{@$value->end_month}}</td> --}}

                                                    @if(@$data[0]->approved_power)
                                                    <td>{{@$data[0]->unit}}</td>
                                                    <td>{{@$data[0]->approved_power}}</td>
                                                    <td>{{@$data[0]->energy}}</td>
                                                    <td>{{@$data[0]->charges}}</td>
                                                    @else
                                                    <td>
                                                        <select name="addmore[{{1}}][unit]" class="form-control unit" style="width: 200px;">
                                                            <option value="">Select Unit</option>
                                                            <option value="KW">KW</option>
                                                            <option value="MW">MW</option>
                                                        </select>  
                                                    </td>
                                                    
                                                     <td><input type="text"    name="addmore[{{1}}][approved_power]" class="form-control approved_power" ></td>
                                                   
                                                    <td><input type="text"  name="addmore[{{1}}][energy]" class="form-control energy"    ></td>

                                                    <td><input type="text"  name="addmore[{{1}}][charges]" class="form-control charges"  ></td>
                                                    @endif
                                                    
                                                    <td class="rm07">
                                                        

                                                                @if(@$data[0]->approved_power)
                                                                <a href="{{route('manage.power.edit.ml-domestic-pam',@$data[0]->id)}}" >Edit </a>
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

                                                    <li class="active"><a href="{{route('manage.power.ml-domestic-pam')}}" class="btn btn-primary">Cancel</a></li>
                                                    
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
    jQuery.validator.addClassRules('unit', {
        required: true,
    });
    jQuery.validator.addClassRules('approved_power', {
        required: true,
    });
    jQuery.validator.addClassRules('energy', {
        required: true,
    });

    jQuery.validator.addClassRules('charges', {
        required: true,
    });
    $('#indus').validate();

</script>



@endsection
