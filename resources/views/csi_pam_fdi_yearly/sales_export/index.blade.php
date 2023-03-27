@extends('layouts.app')


@section('title')
<title>Manage Production Sales In Export (Yearly)</title>
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
                    <h4 class="pull-left page-title">Manage Production Sales In Export (Yearly)</h4>
                    <ol class="breadcrumb pull-right">
                         
                        {{-- <li class="active"><a href="{{route('manage.sales.export.add')}}" class="btn btn-primary">+ Add Data</a></li> --}}
                        
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
                                        <form method="POST" action="{{route('manage.sales.export.save.save.next.csi-fdi-pam.yearly')}}"  id="indus">
                                            @csrf
                                            <input type="hidden" name="type_submission" id="type_submission">
                                            <input type="hidden" name="year" id="year" value="{{@$year->year}}">
                                        <table id="example" class="table table-striped table-bordered nowrap" style="width:100%">
                                            <thead>
                                                <tr>
                                                   <th>Year</th>
                                                   <th>Name of  Product Sold</th>
                                                   <th>Units</th>
                                                   <th>Country</th>
                                                   <th>Quantity</th>
                                                   <th>Price Per Unit</th>
                                                   <th>Value Of Sales</th>
                                                   <th class="rm07" style="text-align:center;">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @if(@$data->isNotEmpty())
                                                @foreach(@$data as $key=> $value)
                                                <tr>
                                                   
                                                    <td>{{@$value->year}}</td>
                                                    <td>{{@$value->product_name->product}}</td>
                                                    <td>{{@$value->product_name->unit}}</td>
                                                    @if(@$value->status!="IP")
                                                    <td>{{@$value->country}}</td>
                                                    <td>{{@$value->quantity}}</td>
                                                    <td>{{@$value->price}}</td>
                                                    <td>{{@$value->value_of_sale}}</td>
                                                    @else
                                                    <input type="hidden"    name="addmore[{{$key}}][product_id]" class="form-control product_id" value="{{@$value->product_id}}">

                                                    <td>
                                                        <select name="addmore[{{$key}}][country]" class="form-control country" style="width: 200px;">
                                                            <option value="">Select Country</option>
                                                            @foreach(@$country as $ctr)
                                                            <option value="{{@$ctr->country_name}}"  @if(@$value->country==@$ctr->country_name) selected @endif>{{@$ctr->country_name}}</option>
                                                            @endforeach
                                                            
                                                        </select>
                                                    </td>

                                                    <td> <input type="text"    name="addmore[{{$key}}][quantity]" class="form-control quantity"></td>

                                                    <td><input type="text"  name="addmore[{{$key}}][price]" class="form-control prices"></td>

                                                    <td><input type="text"    name="addmore[{{$key}}][value_of_sale]" class="form-control value_of_sale"></td>
                                                    @endif

                                                    
                                                    
                                                    

                                                    <td class="rm07">
                                                        <a href="javascript:void(0);" class="action-dots" id="action{{$value->id}}"><img src="{{ URL::to('public/admin/assets/images/action-dots.png')}}" alt=""></a>
                                                        <div class="show-actions" id="show-{{$value->id}}" style="display: none;">
                                                            <span class="angle custom_angle"><img src="{{ URL::to('public/admin/assets/images/angle.png')}}" alt=""></span>
                                                            <ul>

                                                                @if(@$value->year==@$year->year && @$value->status!="IP")
                                                                <li><a href="{{route('manage.sales.export.edit.csi-fdi-pam.yearly',@$value->id)}}" >Edit </a></li>
                                                                @endif
                                                                
                                                                


                                                                 
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

                                        <li class="active"><button id="save_next"  class="btn btn-primary">Save Data & Next</button></li>

                                        <li class="active"><a href="{{route('manage.sales.export.csi-fdi-pam.yearly')}}" class="btn btn-primary">Cancel</a></li>
                                        
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
    jQuery.validator.addClassRules('value_of_sale', {
        required: true,
    });
    $('#indus').validate();

</script>



@endsection
