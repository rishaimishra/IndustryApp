@extends('layouts.app')


@section('title')
<title>Manage Issues & Challenges (Yearly)</title>
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
                    <h4 class="pull-left page-title">Manage Issues & Challenges (Yearly)</h4>
                    <ol class="breadcrumb pull-right">
                         
                        <li class="active"><a href="{{route('manage.issues.add.ml-pam-fdi.yearly')}}" class="btn btn-primary">+ Add Data</a></li>
                        
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
                                        <form method="POST" action="{{route('manage.issues.save.save.next.ml-pam-fdi.yearly')}}"  id="indus">
                                            @csrf
                                            <input type="hidden" name="type_submission" id="type_submission">
                                            <input type="hidden" name="year" id="year" value="{{@$year->year}}">
                                        <table id="example" class="table table-striped table-bordered nowrap" style="width:100%">
                                            <thead>
                                                <tr>
                                                   <th>Year</th>
                                                   {{-- <th>Reporting Month</th> --}}
                                                   <th>Issues and Challenges Faced</th>
                                                   <th>Support Required</th>
                                                   <th>Remarks</th>
                                                   
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
                                                    <td>{{@$value->issue}}</td>
                                                    <td>{{@$value->support}}</td>
                                                    <td>{{@$value->remark}}</td>
                                                    @else

                                                    <td><input type="text"    name="addmore[{{$key}}][issue]" class="form-control issue"  value="{{@$value->issue}}" ></td>
                                                    
                                                     <td><input type="text"    name="addmore[{{$key}}][support]" class="form-control support"  value="{{@$value->support}}" ></td>
                                                   
                                                    <td><input type="text"  name="addmore[{{$key}}][remark]" class="form-control remark"   value="{{@$value->remark}}"></td>

                                                    @endif
                                                    
                                                    
                                                    <td class="rm07">
                                                        <a href="javascript:void(0);" class="action-dots" id="action{{$value->id}}"><img src="{{ URL::to('public/admin/assets/images/action-dots.png')}}" alt=""></a>
                                                        <div class="show-actions" id="show-{{$value->id}}" style="display: none;">
                                                            <span class="angle custom_angle"><img src="{{ URL::to('public/admin/assets/images/angle.png')}}" alt=""></span>
                                                            <ul>
                                                                @if(@$value->year==@$year->year && @$value->status!="IP" && @$value->type=="Y")
                                                                <li><a href="{{route('manage.issues.edit.ml-pam-fdi.yearly',@$value->id)}}" >Edit </a></li>
                                                                @endif
                                                                
                                                                <li><a href ="{{route('manage.issues.delete.ml-pam-fdi.yearly',['id'=>@$value->id])}}"data-bs-toggle="modal" data-bs-target="#exampleModal">Delete </a></li>


                                                                 
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

                                        <li class="active"><button id="save_next"  class="btn btn-primary">Save & Next Data</button></li>

                                        <li class="active"><a href="{{route('manage.production.manufacture.add')}}" class="btn btn-primary">Cancel</a></li>
                                        
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
    jQuery.validator.addClassRules('name', {
        required: true,
    });
    jQuery.validator.addClassRules('provider', {
        required: true,
    });
    jQuery.validator.addClassRules('number_employee', {
        required: true,
    });

    $('#indus').validate();

</script>

@endsection
