@extends('layouts.app')


@section('title')
<title>Manage Industry Profile</title>
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
                    <h4 class="pull-left page-title">Manage Industry Profile</h4>
                    <ol class="breadcrumb pull-right">
                         {{-- @if(@$data->isEmpty()) --}}
                        <li class="active"><a href="{{route('manage.industry.profile.addview')}}" class="btn btn-primary">+ Add Profile</a></li>
                        {{-- @endif --}}
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
                                        <table id="example" class="table table-striped table-bordered nowrap" style="width:100%">
                                            <thead>
                                                <tr>
                                                   <th>License No</th>
                                                   <th>Business Establishment Name</th>
                                                   <th>Main Activity</th>
                                                   <th>License Issue Date</th>
                                                   <th class="rm07" style="text-align:center;">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @if(@$data->isNotEmpty())
                                                @foreach(@$data as $value)
                                                <tr>
                                                   
                                                    <td>{{@$value->license_no}}</td>
                                                    <td>{{@$value->business_name}}</td>
                                                    <td>{{@$value->main_activity}}</td>
                                                    <td>{{@$value->license_issue_date}}</td>
                                                    
                                                    
                                                    

                                                    <td class="rm07">
                                                        <a href="javascript:void(0);" class="action-dots" id="action{{$value->id}}"><img src="{{ URL::to('public/admin/assets/images/action-dots.png')}}" alt=""></a>
                                                        <div class="show-actions" id="show-{{$value->id}}" style="display: none;">
                                                            <span class="angle custom_angle"><img src="{{ URL::to('public/admin/assets/images/angle.png')}}" alt=""></span>
                                                            <ul>
                                                                <li><a href="{{route('manage.industry.profile.edit',@$value->id)}}" >Edit </a></li>
                                                                
                                                               

                                                             </ul>
                                                        </div>
                                                    </td>
                                                </tr>
                                                @endforeach
                                                @endif
                                                
                                            </tbody>
                                        </table>
                                    </div>


                                    

                                    


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
@endsection
