@extends('layouts.app')


@section('title')
<title>Manage Employement (Yearly)</title>
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
                    <h4 class="pull-left page-title">Manage Employement (Yearly)</h4>
                    <ol class="breadcrumb pull-right">
                         
                        <li class="active"><a href="{{route('manage.employe.add.manage-employment-record-ml-construction-fdi-yearly')}}" class="btn btn-primary">+ Add Data</a></li>

                        <li class="active"><a href="{{route('manage.employe.statistics.manage-employment-record-ml-construction-fdi-yearly')}}" class="btn btn-primary">View Statistics</a></li>
                        
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
                                        <form method="POST" action="{{route('manage.employe.save.save.next.manage-employment-record-ml-construction-fdi-yearly')}}"  id="indus">
                                            @csrf
                                            <input type="hidden" name="type_submission" id="type_submission">
                                            <input type="hidden" name="year" id="year" value="{{@$year->year}}">
                                        <table id="example" class="table table-striped table-bordered nowrap" style="width:100%;overflow-x: auto;
    white-space: nowrap;">
                                            <thead>
                                                <tr>
                                                   <th>Year</th>
                                                   {{-- <th>Reporting Month</th> --}}
                                                   <th>Nation</th>
                                                   <th>Cid</th>
                                                   <th>Name</th>
                                                   <th>Contact Number</th>
                                                   <th>Email</th>
                                                   <th>Gender</th>
                                                   <th>Qualification</th>
                                                   <th>Nature of Employment</th>
                                                   <th>Placement Dzongkhag</th>
                                                   <th>Placement Location</th>
                                                   <th class="rm07" style="text-align:center;">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @if(@$data->isNotEmpty())
                                                @foreach(@$data as $key=> $value)
                                                <tr>
                                                   
                                                    <td>{{@$year->year}}</td>
                                                    {{-- <td>{{@$value->from_month}} - {{@$value->end_month}}</td> --}}
                                                    @if(@$value->year==@$year->year && @$value->status!="IP" && @$value->type=="Y")
                                                    <td>{{@$value->nationality}}</td>
                                                    <td>{{@$value->cid}}</td>
                                                    <td>{{@$value->name}}</td>
                                                    <td>{{@$value->contact}}</td>
                                                    <td>{{@$value->email}}</td>

                                                    <td>{{@$value->gender}}</td>
                                                    <td>{{@$value->qualification}}</td>
                                                    <td>{{@$value->nature_employe}}</td>
                                                    <td>{{@$value->placement}}</td>
                                                    <td>{{@$value->location}}</td>
                                                    @else

                                                    <td>
                                                        <select name="addmore[{{$key}}][nationality]" class="form-control nationality" style="width: 200px;">
                                                            <option value="">Select Country</option>
                                                            @foreach(@$country as $ctr)
                                                            <option value="{{@$ctr->country_name}}"  @if(@$value->nationality==@$ctr->country_name) selected @endif>{{@$ctr->country_name}}</option>
                                                            @endforeach
                                                            
                                                        </select>
                                                    </td>

                                                    <td><input type="text"    name="addmore[{{$key}}][cid]" class="form-control cid"  value="{{@$value->cid}}" style="width: 200px;"></td>
                                                    
                                                     <td><input type="text"    name="addmore[{{$key}}][name]" class="form-control name"  value="{{@$value->name}}" style="width: 200px;"></td>
                                                   
                                                   <td><input type="text"    name="addmore[{{$key}}][contact]" class="form-control contact"  value="{{@$value->contact}}" style="width: 200px;"></td>

                                                   <td><input type="text"    name="addmore[{{$key}}][email]" class="form-control email"  value="{{@$value->email}}" style="width: 200px;"></td>


                                                    <td>
                                                        <select name="addmore[{{$key}}][gender]" class="form-control gender" style="width: 200px;">
                                                            <option value="Male" @if(@$value->gender=="Male") selected @endif>Male</option>
                                                            <option value="Female" @if(@$value->gender=="Female") selected @endif>Female</option>
                                                         </select>
                                                    </td>


                                                    <td>
                                                        <select name="addmore[{{$key}}][qualification]" class="form-control qualification" style="width: 200px;">
                                                            <option value="Below X" @if(@$value->qualification=="Below X") selected @endif>Below X</option>
                                                            <option value="X-XII" @if(@$value->qualification=="X-XII") selected @endif>X-XII</option>
                                                            <option value="Above XII" @if(@$value->qualification=="Above XII") selected @endif>Above XII</option>
                                                         </select>
                                                    </td>

                                                    <td>
                                                        <select name="addmore[{{$key}}][nature_employe]" class="form-control nature_employe" style="width: 200px;">
                                                            <option value="Regular" @if(@$value->nature_employe=="Regular") selected @endif>Regular</option>
                                                            <option value="Contract" @if(@$value->nature_employe=="Contract") selected @endif>Contract</option>
                                                            <option value="Casual" @if(@$value->nature_employe=="Casual") selected @endif>Casual</option>
                                                            <option value="Self Employed" @if(@$value->nature_employe=="Self Employed") selected @endif>Self Employed</option>
                                                            </select>
                                                    </td>

                                                    <td>
                                                        <select name="addmore[{{$key}}][placement]" class="form-control placement" style="width: 200px;">
                                                            <option value="Thimpu" @if(@$value->placement=="Thimpu") selected @endif>Thimpu</option>
                                                            <option value="Chukkha" @if(@$value->placement=="Chukkha") selected @endif>Chukkha</option>
                                                            </select>
                                                    </td>

                                                     <td><input type="text"    name="addmore[{{$key}}][location]" class="form-control location"  value="{{@$value->location}}" style="width: 200px;"></td>




                                                    @endif
                                                    
                                                    <td class="rm07">
                                                        <a href="javascript:void(0);" class="action-dots" id="action{{$value->id}}"><img src="{{ URL::to('public/admin/assets/images/action-dots.png')}}" alt=""></a>
                                                        <div class="show-actions" id="show-{{$value->id}}" style="display: none;">
                                                            <span class="angle custom_angle"><img src="{{ URL::to('public/admin/assets/images/angle.png')}}" alt=""></span>
                                                            <ul>
                                                                @if(@$value->year==@$year->year && @$value->status!="IP" && @$value->type=="Y")
                                                                <li><a href="{{route('manage.employe.edit.manage-employment-record-ml-construction-fdi-yearly',@$value->id)}}" >Edit </a></li>
                                                                @endif
                                                                
                                                                <li><a href ="{{route('manage.employe.delete.manage-employment-record-ml-construction-fdi-yearly',['id'=>@$value->id])}}"data-bs-toggle="modal" data-bs-target="#exampleModal">Delete </a></li>


                                                                 
                                                             </ul>
                                                        </div>
                                                    </td>
                                                </tr>
                                                @endforeach
                                                @endif
                                                
                                            </tbody>
                                        </table>
                                    </div>

                                    <div class="panel-body">
                                        <div class="row">
                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                <ol class="breadcrumb pull-right">
                                     
                                                    <li class="active"><button id="save"  class="btn btn-primary">Save Data</button></li>

                                                    <li class="active"><button id="save_next"  class="btn btn-primary">Save Data</button></li>

                                                    <li class="active"><a href="{{route('manage.employe.manage-employment-record-ml-construction-fdi-yearly')}}" class="btn btn-primary">Cancel</a></li>
                                                    
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
    jQuery.validator.addClassRules('quantity', {
        required: true,
    });
    jQuery.validator.addClassRules('prices', {
        required: true,
    });
    jQuery.validator.addClassRules('capacity', {
        required: true,
    });
    $('#indus').validate();

</script>



@endsection
