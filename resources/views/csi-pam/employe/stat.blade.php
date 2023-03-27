@extends('layouts.app')


@section('title')
<title>Manage Employement Stat</title>
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
                    <h4 class="pull-left page-title">Manage Employement Stat</h4>
                    <ol class="breadcrumb pull-right">
                         
                        <li class="active"><a href="{{route('manage.employe.yearly')}}" class="btn btn-primary">back</a></li>
                        
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
                                                   <th>Nature of Employment</th>
                                                   <th>Bhutanese Male</th>
                                                   <th>Bhutanese Female</th>
                                                   <th>Bhutanese Total</th>
                                                   <th>Non Bhutanese Male</th>
                                                   <th>Non Bhutanese Female</th>
                                                   <th>Non Bhutanese Total</th>
                                                   <th>Total People</th>
                                                   
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        Regular
                                                    </td>
                                                    <td>
                                                        @php
                                                        $bm = DB::table('employe')->where('parent_delete_id','0')->where('nationality','Bhutan')->where('gender','Male')->where('type','Y')->where('year',@$year)->where('status','!=','D')->where('nature_employe','Regular')->where('profile_id',auth()->user()->current_profile)->where('user_id',auth()->user()->id)->count();
                                                        @endphp
                                                        {{@$bm}}
                                                    </td>

                                                    <td>
                                                        @php
                                                        $bf = DB::table('employe')->where('parent_delete_id','0')->where('nationality','Bhutan')->where('gender','Female')->where('nature_employe','Regular')->where('type','Y')->where('year',@$year)->where('status','!=','D')->where('profile_id',auth()->user()->current_profile)->where('user_id',auth()->user()->id)->count();
                                                        @endphp
                                                        {{@$bf}}
                                                    </td>

                                                    <td>
                                                        @php
                                                        $bt = DB::table('employe')->where('parent_delete_id','0')->where('nationality','Bhutan')->where('nature_employe','Regular')->where('type','Y')->where('year',@$year)->where('status','!=','D')->where('profile_id',auth()->user()->current_profile)->where('user_id',auth()->user()->id)->count();
                                                        @endphp
                                                        {{@$bt}}
                                                    </td>

                                                    <td>
                                                        @php
                                                        $nbm = DB::table('employe')->where('parent_delete_id','0')->where('nationality','!=','Bhutan')->where('gender','Male')->where('nature_employe','Regular')->where('type','Y')->where('year',@$year)->where('status','!=','D')->where('profile_id',auth()->user()->current_profile)->where('user_id',auth()->user()->id)->count();
                                                        // dd($nbm);
                                                        @endphp
                                                        {{@$nbm}}
                                                    </td>

                                                    <td>
                                                        @php
                                                        $nbf = DB::table('employe')->where('parent_delete_id','0')->where('nationality','!=','Bhutan')->where('gender','Female')->where('nature_employe','Regular')->where('type','Y')->where('year',@$year)->where('status','!=','D')->where('profile_id',auth()->user()->current_profile)->where('user_id',auth()->user()->id)->count();
                                                        @endphp
                                                        {{@$nbf}}
                                                    </td>

                                                    <td>
                                                        @php
                                                        $nbt = DB::table('employe')->where('parent_delete_id','0')->where('nationality','!=','Bhutan')->where('nature_employe','Regular')->where('type','Y')->where('year',@$year)->where('status','!=','D')->where('profile_id',auth()->user()->current_profile)->where('user_id',auth()->user()->id)->count();
                                                        @endphp
                                                        {{@$nbt}}
                                                    </td>

                                                    <td>
                                                        @php
                                                        $total = DB::table('employe')->where('parent_delete_id','0')->where('nature_employe','Regular')->where('type','Y')->where('year',@$year)->where('status','!=','D')->where('profile_id',auth()->user()->current_profile)->where('user_id',auth()->user()->id)->count();
                                                        @endphp
                                                        {{@$total}}
                                                    </td>
                                                </tr>


                                                {{-- contract --}}
                                                <tr>
                                                    <td>
                                                        Contract
                                                    </td>
                                                    <td>
                                                        @php
                                                        $bmc = DB::table('employe')->where('parent_delete_id','0')->where('nationality','Bhutan')->where('gender','Male')->where('type','Y')->where('year',@$year)->where('status','!=','D')->where('nature_employe','Contract')->where('profile_id',auth()->user()->current_profile)->where('user_id',auth()->user()->id)->count();
                                                        @endphp
                                                        {{@$bmc}}
                                                    </td>

                                                    <td>
                                                        @php
                                                        $bfc = DB::table('employe')->where('parent_delete_id','0')->where('nationality','Bhutan')->where('gender','Female')->where('nature_employe','Contract')->where('type','Y')->where('year',@$year)->where('status','!=','D')->where('profile_id',auth()->user()->current_profile)->where('user_id',auth()->user()->id)->count();
                                                        @endphp
                                                        {{@$bfc}}
                                                    </td>

                                                    <td>
                                                        @php
                                                        $btc = DB::table('employe')->where('parent_delete_id','0')->where('nationality','Bhutan')->where('nature_employe','Contract')->where('type','Y')->where('year',@$year)->where('status','!=','D')->where('profile_id',auth()->user()->current_profile)->where('user_id',auth()->user()->id)->count();
                                                        @endphp
                                                        {{@$btc}}
                                                    </td>

                                                    <td>
                                                        @php
                                                        $nbmc = DB::table('employe')->where('parent_delete_id','0')->where('nationality','!=','Bhutan')->where('gender','Male')->where('nature_employe','Contract')->where('type','Y')->where('year',@$year)->where('status','!=','D')->where('profile_id',auth()->user()->current_profile)->where('user_id',auth()->user()->id)->count();
                                                        // dd($nbm);
                                                        @endphp
                                                        {{@$nbmc}}
                                                    </td>

                                                    <td>
                                                        @php
                                                        $nbfc = DB::table('employe')->where('parent_delete_id','0')->where('nationality','!=','Bhutan')->where('gender','Female')->where('nature_employe','Contract')->where('type','Y')->where('year',@$year)->where('status','!=','D')->where('profile_id',auth()->user()->current_profile)->where('user_id',auth()->user()->id)->count();
                                                        @endphp
                                                        {{@$nbfc}}
                                                    </td>

                                                    <td>
                                                        @php
                                                        $nbtc = DB::table('employe')->where('parent_delete_id','0')->where('nationality','!=','Bhutan')->where('nature_employe','Contract')->where('type','Y')->where('year',@$year)->where('status','!=','D')->where('profile_id',auth()->user()->current_profile)->where('user_id',auth()->user()->id)->count();
                                                        @endphp
                                                        {{@$nbtc}}
                                                    </td>

                                                    <td>
                                                        @php
                                                        $totalc = DB::table('employe')->where('parent_delete_id','0')->where('nature_employe','Contract')->where('type','Y')->where('year',@$year)->where('status','!=','D')->where('profile_id',auth()->user()->current_profile)->where('user_id',auth()->user()->id)->count();
                                                        @endphp
                                                        {{@$totalc}}
                                                    </td>
                                                </tr>

                                                {{-- casual --}}

                                                <tr>
                                                    <td>
                                                        Casual
                                                    </td>
                                                    <td>
                                                        @php
                                                        $bmcc = DB::table('employe')->where('parent_delete_id','0')->where('nationality','Bhutan')->where('gender','Male')->where('type','Y')->where('year',@$year)->where('status','!=','D')->where('nature_employe','Casual')->where('profile_id',auth()->user()->current_profile)->where('user_id',auth()->user()->id)->count();
                                                        @endphp
                                                        {{@$bmcc}}
                                                    </td>

                                                    <td>
                                                        @php
                                                        $bfcc = DB::table('employe')->where('parent_delete_id','0')->where('nationality','Bhutan')->where('gender','Female')->where('nature_employe','Casual')->where('type','Y')->where('year',@$year)->where('status','!=','D')->where('profile_id',auth()->user()->current_profile)->where('user_id',auth()->user()->id)->count();
                                                        @endphp
                                                        {{@$bfcc}}
                                                    </td>

                                                    <td>
                                                        @php
                                                        $btcc = DB::table('employe')->where('parent_delete_id','0')->where('nationality','Bhutan')->where('nature_employe','Casual')->where('type','Y')->where('year',@$year)->where('status','!=','D')->where('profile_id',auth()->user()->current_profile)->where('user_id',auth()->user()->id)->count();
                                                        @endphp
                                                        {{@$btcc}}
                                                    </td>

                                                    <td>
                                                        @php
                                                        $nbmcc = DB::table('employe')->where('parent_delete_id','0')->where('nationality','!=','Bhutan')->where('gender','Male')->where('nature_employe','Casual')->where('type','Y')->where('year',@$year)->where('status','!=','D')->where('profile_id',auth()->user()->current_profile)->where('user_id',auth()->user()->id)->count();
                                                        // dd($nbm);
                                                        @endphp
                                                        {{@$nbmcc}}
                                                    </td>

                                                    <td>
                                                        @php
                                                        $nbfcc = DB::table('employe')->where('parent_delete_id','0')->where('nationality','!=','Bhutan')->where('gender','Female')->where('nature_employe','Casual')->where('type','Y')->where('year',@$year)->where('status','!=','D')->where('profile_id',auth()->user()->current_profile)->where('user_id',auth()->user()->id)->count();
                                                        @endphp
                                                        {{@$nbfcc}}
                                                    </td>

                                                    <td>
                                                        @php
                                                        $nbtcc = DB::table('employe')->where('parent_delete_id','0')->where('nationality','!=','Bhutan')->where('nature_employe','Casual')->where('type','Y')->where('year',@$year)->where('status','!=','D')->where('profile_id',auth()->user()->current_profile)->where('user_id',auth()->user()->id)->count();
                                                        @endphp
                                                        {{@$nbtcc}}
                                                    </td>

                                                    <td>
                                                        @php
                                                        $totalcc = DB::table('employe')->where('parent_delete_id','0')->where('nature_employe','Casual')->where('type','Y')->where('year',@$year)->where('status','!=','D')->where('profile_id',auth()->user()->current_profile)->where('user_id',auth()->user()->id)->count();
                                                        @endphp
                                                        {{@$totalcc}}
                                                    </td>
                                                </tr>



                                                {{-- Self Employed --}}

                                                <tr>
                                                    <td>
                                                        Self Employed
                                                    </td>
                                                    <td>
                                                        @php
                                                        $bmccs = DB::table('employe')->where('parent_delete_id','0')->where('nationality','Bhutan')->where('gender','Male')->where('type','Y')->where('year',@$year)->where('status','!=','D')->where('nature_employe','Self Employed')->where('profile_id',auth()->user()->current_profile)->where('user_id',auth()->user()->id)->count();
                                                        @endphp
                                                        {{@$bmccs}}
                                                    </td>

                                                    <td>
                                                        @php
                                                        $bfccs = DB::table('employe')->where('parent_delete_id','0')->where('nationality','Bhutan')->where('gender','Female')->where('nature_employe','Self Employed')->where('type','Y')->where('year',@$year)->where('status','!=','D')->where('profile_id',auth()->user()->current_profile)->where('user_id',auth()->user()->id)->count();
                                                        @endphp
                                                        {{@$bfccs}}
                                                    </td>

                                                    <td>
                                                        @php
                                                        $btccs = DB::table('employe')->where('parent_delete_id','0')->where('nationality','Bhutan')->where('nature_employe','Self Employed')->where('type','Y')->where('year',@$year)->where('status','!=','D')->where('profile_id',auth()->user()->current_profile)->where('user_id',auth()->user()->id)->count();
                                                        @endphp
                                                        {{@$btccs}}
                                                    </td>

                                                    <td>
                                                        @php
                                                        $nbmccs = DB::table('employe')->where('parent_delete_id','0')->where('nationality','!=','Bhutan')->where('gender','Male')->where('nature_employe','Self Employed')->where('type','Y')->where('year',@$year)->where('status','!=','D')->where('profile_id',auth()->user()->current_profile)->where('user_id',auth()->user()->id)->count();
                                                        // dd($nbm);
                                                        @endphp
                                                        {{@$nbmccs}}
                                                    </td>

                                                    <td>
                                                        @php
                                                        $nbfccs = DB::table('employe')->where('parent_delete_id','0')->where('nationality','!=','Bhutan')->where('gender','Female')->where('nature_employe','Self Employed')->where('type','Y')->where('year',@$year)->where('status','!=','D')->where('profile_id',auth()->user()->current_profile)->where('user_id',auth()->user()->id)->count();
                                                        @endphp
                                                        {{@$nbfccs}}
                                                    </td>

                                                    <td>
                                                        @php
                                                        $nbtccs = DB::table('employe')->where('parent_delete_id','0')->where('nationality','!=','Bhutan')->where('nature_employe','Self Employed')->where('type','Y')->where('year',@$year)->where('status','!=','D')->where('profile_id',auth()->user()->current_profile)->where('user_id',auth()->user()->id)->count();
                                                        @endphp
                                                        {{@$nbtccs}}
                                                    </td>

                                                    <td>
                                                        @php
                                                        $totalccs = DB::table('employe')->where('parent_delete_id','0')->where('nature_employe','Self Employed')->where('type','Y')->where('year',@$year)->where('status','!=','D')->where('profile_id',auth()->user()->current_profile)->where('user_id',auth()->user()->id)->count();
                                                        @endphp
                                                        {{@$totalccs}}
                                                    </td>
                                                </tr>


                                                <tr>
                                                    <td>
                                                       Total
                                                    </td>
                                                    <td>
                                                        @php
                                                        $bmccst = DB::table('employe')->where('parent_delete_id','0')->where('nationality','Bhutan')->where('gender','Male')->where('type','Y')->where('year',@$year)->where('status','!=','D')->where('profile_id',auth()->user()->current_profile)->where('user_id',auth()->user()->id)->count();
                                                        @endphp
                                                        {{@$bmccst}}
                                                    </td>

                                                    <td>
                                                        @php
                                                        $bfccst = DB::table('employe')->where('parent_delete_id','0')->where('nationality','Bhutan')->where('gender','Female')->where('type','Y')->where('year',@$year)->where('status','!=','D')->where('profile_id',auth()->user()->current_profile)->where('user_id',auth()->user()->id)->count();
                                                        @endphp
                                                        {{@$bfccst}}
                                                    </td>

                                                    <td>
                                                        @php
                                                        $btccst = DB::table('employe')->where('parent_delete_id','0')->where('nationality','Bhutan')->where('type','Y')->where('year',@$year)->where('status','!=','D')->where('profile_id',auth()->user()->current_profile)->where('user_id',auth()->user()->id)->count();
                                                        @endphp
                                                        {{@$btccst}}
                                                    </td>

                                                    <td>
                                                        @php
                                                        $nbmccst = DB::table('employe')->where('parent_delete_id','0')->where('nationality','!=','Bhutan')->where('gender','Male')->where('type','Y')->where('year',@$year)->where('status','!=','D')->where('profile_id',auth()->user()->current_profile)->where('user_id',auth()->user()->id)->count();
                                                        // dd($nbm);
                                                        @endphp
                                                        {{@$nbmccst}}
                                                    </td>

                                                    <td>
                                                        @php
                                                        $nbfccst = DB::table('employe')->where('parent_delete_id','0')->where('nationality','!=','Bhutan')->where('gender','Female')->where('type','Y')->where('year',@$year)->where('status','!=','D')->where('profile_id',auth()->user()->current_profile)->where('user_id',auth()->user()->id)->count();
                                                        @endphp
                                                        {{@$nbfccst}}
                                                    </td>

                                                    <td>
                                                        @php
                                                        $nbtccst = DB::table('employe')->where('parent_delete_id','0')->where('nationality','!=','Bhutan')->where('type','Y')->where('year',@$year)->where('status','!=','D')->where('profile_id',auth()->user()->current_profile)->where('user_id',auth()->user()->id)->count();
                                                        @endphp
                                                        {{@$nbtccst}}
                                                    </td>

                                                    <td>
                                                        @php
                                                        $totalccst = DB::table('employe')->where('parent_delete_id','0')->where('type','Y')->where('year',@$year)->where('status','!=','D')->where('profile_id',auth()->user()->current_profile)->where('user_id',auth()->user()->id)->count();
                                                        @endphp
                                                        {{@$totalccst}}
                                                    </td>
                                                </tr>
                                                
                                                
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






@endsection
