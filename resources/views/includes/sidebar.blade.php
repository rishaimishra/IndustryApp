<style type="text/css">

.navbar-default{
    margin-top: -25px;
}
</style>


<a id="menu-toggle" href="#" class="glyphicon glyphicon-align-justify btn-menu toggle">
    <i class="fa fa-bars"></i>
</a>
<div id="sidebar-wrapper">
    <nav id="spy" >
            <div class="left side-menu" style="    max-height: 100%;
    overflow-y: scroll;margin-top: 50px;">
                <div class="sidebar-inner slimscrollleft">
                    
                    <!--- Divider -->
                    
                            <div id="sidebar-menu" style="margin-top:15px">
                                <ul class="sidebar-nav nav">

                                    
                                    <li><a href="{{route('manage.agent')}}" class="waves-effect @if(Request::segment(1)=="manage-agent") active @endif"><i class="fa fa-user-plus" aria-hidden="true" style="font-size: 13px;"></i><span style="font-size: 10px;">Official Users</span></a></li>

                                    <li><a href="{{route('manage.industry')}}" class="waves-effect @if(Request::segment(1)=="manage-industry") active @endif"><i class="fa fa-users" aria-hidden="true" style="font-size: 13px;"></i><span style="font-size: 10px;">Industry Users</span></a></li>

                                    <li><a href="{{route('manage.industry.profile')}}" class="waves-effect @if(Request::segment(1)=="manage-industry-profile") active @endif"><i class="fa fa-user-plus" aria-hidden="true" style="font-size: 13px;"></i><span style="font-size: 10px;">Industry Profile</span></a></li>

                                    <li><a href="{{route('manage.select.profile')}}" class="waves-effect @if(Request::segment(1)=="select-profile") active @endif"><i class="fa fa-male" aria-hidden="true" style="font-size: 13px;"></i><span style="font-size: 10px;">Select Profile</span></a></li>

                                    <li><a href="{{route('manage.date')}}" class="waves-effect @if(Request::segment(1)=="manage-date") active @endif"><i class="fa fa-calendar-o" aria-hidden="true" style="font-size: 13px;"></i><span style="font-size: 10px;">Date Management</span></a></li>

                        

                        @if(auth()->user()->current_profile!="")            
                         <li data-id = "csi-half" class="dropdown  dropdown_lef @if(request()->segment(1)=="manage-production-manufactureing" || request()->segment(1)=="manage-sales-domestic" || request()->segment(1)=="manage-sales-export" || request()->segment(1)=="manage-raw-material" || request()->segment(1)=="manage-cost-details" || request()->segment(1)=="manage-other-cost-details" || request()->segment(1)=="manage-employment-record" || request()->segment(1)=="manage-training-record" || request()->segment(1)=="manage-issues-challenges" || request()->segment(1)=="manage-half-yearly-submission" ) open @endif ">

                                <a style="font-size:10px;" href="#" class="waves-effect dropdown-toggle @if(request()->segment(1)=="manage-production-manufactureing" || request()->segment(1)=="manage-sales-domestic" || request()->segment(1)=="manage-sales-export" || request()->segment(1)=="manage-raw-material" || request()->segment(1)=="manage-cost-details" || request()->segment(1)=="manage-other-cost-details" || request()->segment(1)=="manage-employment-record" || request()->segment(1)=="manage-training-record" || request()->segment(1)=="manage-issues-challenges" || request()->segment(1)=="manage-half-yearly-submission" ) subdrop @endif" data-toggle="dropdown">
                                <i class="fa fa-bar-chart" aria-hidden="true"></i><span> CSI Pam (Half Yearly) </span><span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu sub_menu" @if(request()->segment(1)=="manage-production-manufactureing" || request()->segment(1)=="manage-sales-domestic" || request()->segment(1)=="manage-sales-export" || request()->segment(1)=="manage-raw-material" || request()->segment(1)=="manage-cost-details" || request()->segment(1)=="manage-other-cost-details" || request()->segment(1)=="manage-employment-record" || request()->segment(1)=="manage-training-record" || request()->segment(1)=="manage-issues-challenges" || request()->segment(1)=="manage-half-yearly-submission" ) style="display:block" @endif  id="d_csi-half">


                                 <li><a href="{{route('manage.production.manufacture')}}" class="waves-effect @if(Request::segment(1)=="manage-production-manufactureing") active @endif"><i class="fa fa-product-hunt" aria-hidden="true" style="font-size: 13px;"></i></i><span style="font-size: 10px;">Production And Manufacture</span></a></li>

                                    {{-- <li><a href="{{route('manage.sales.domestic')}}" class="waves-effect @if(Request::segment(1)=="manage-sales-domestic") active @endif"><i class="fa fa-balance-scale" aria-hidden="true" style="font-size: 13px;"></i><span style="font-size: 10px;">Sales Made And Markets (Domestic)</span></a></li> --}}

                                    <li><a href="{{route('manage.sales.export')}}" class="waves-effect @if(Request::segment(1)=="manage-sales-export") active @endif"><i class="fa fa-cart-arrow-down" aria-hidden="true" style="font-size: 13px;"></i><span style="font-size: 10px;">Sales Made And Markets</span></a></li>

                                    <li><a href="{{route('manage.raw.material')}}" class="waves-effect @if(Request::segment(1)=="manage-raw-material") active @endif"><i class="fa fa-maxcdn" aria-hidden="true" style="font-size: 13px;"></i><span style="font-size: 10px;">Manage Raw Material</span></a></li>

                                    <li><a href="{{route('manage.cost')}}" class="waves-effect @if(Request::segment(1)=="manage-cost-details") active @endif"><i class="fa fa-usd" aria-hidden="true" style="font-size: 13px;"></i><span style="font-size: 10px;">Manage Cost Details</span></a></li>

                                    <li><a href="{{route('manage.other.cost.other')}}" class="waves-effect @if(Request::segment(1)=="manage-other-cost-details") active @endif"><i class="fa fa-power-off" aria-hidden="true" style="font-size: 13px;"></i><span style="font-size: 10px;">Manage Other Costs</span></a></li>


                                    <li><a href="{{route('manage.employe')}}" class="waves-effect @if(Request::segment(1)=="manage-employment-record") active @endif"><i class="fa fa-user-circle" aria-hidden="true" style="font-size: 13px;"></i><span style="font-size: 10px;">Manage Employment</span></a></li>

                                    <li><a href="{{route('manage.training')}}" class="waves-effect @if(Request::segment(1)=="manage-training-record") active @endif"><i class="fa fa-globe" aria-hidden="true" style="font-size: 13px;"></i><span style="font-size: 10px;">Manage Training Record</span></a></li>

                                    {{-- <li><a href="{{route('manage.issues')}}" class="waves-effect @if(Request::segment(1)=="manage-issues-challenges") active @endif"><i class="fa fa-lock" aria-hidden="true" style="font-size: 13px;"></i><span style="font-size: 10px;">Issue And Challenges</span></a></li> --}}

                                    <li><a href="{{route('manage.half.yearly.submission')}}" class="waves-effect @if(Request::segment(1)=="manage-half-yearly-submission") active @endif"><i class="fa fa-hand-o-right" aria-hidden="true" style="font-size: 13px;"></i><span style="font-size: 10px;">Submission Page</span></a></li>

                        </ul>
            </li>






             <li data-id = "csi-full" class="dropdown  dropdown_lef @if(request()->segment(1)=="manage-production-manufactureing-yearly" || request()->segment(1)=="manage-sales-domestic-yearly" || request()->segment(1)=="manage-sales-export-yearly" || request()->segment(1)=="manage-raw-material-yearly" || request()->segment(1)=="manage-financial-information" || request()->segment(1)=="manage-other-xsormation" || request()->segment(1)=="manage-cost-details-yearly" || request()->segment(1)=="manage-other-cost-details-yearly" || request()->segment(1)=="manage-employment-record-yearly" || request()->segment(1)=="manage-training-record-yearly" || request()->segment(1)=="manage-revenue-csi") open @endif ">

                                <a style="font-size:10px;" href="#" class="waves-effect dropdown-toggle @if(request()->segment(1)=="manage-production-manufactureing-yearly" || request()->segment(1)=="manage-sales-domestic-yearly" || request()->segment(1)=="manage-sales-export-yearly" || request()->segment(1)=="manage-raw-material-yearly" || request()->segment(1)=="manage-financial-information" || request()->segment(1)=="manage-other-information"|| request()->segment(1)=="manage-cost-details-yearly" || request()->segment(1)=="manage-other-cost-details-yearly" || request()->segment(1)=="manage-employment-record-yearly" || request()->segment(1)=="manage-training-record-yearly" || request()->segment(1)=="manage-revenue-csi") subdrop @endif" data-toggle="dropdown">
                                <i class="fa fa-balance-scale" aria-hidden="true"></i><span> CSI Pam (Yearly) </span><span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu sub_menu" @if(request()->segment(1)=="manage-production-manufactureing-yearly" || request()->segment(1)=="manage-sales-domestic-yearly" || request()->segment(1)=="manage-sales-export-yearly" || request()->segment(1)=="manage-raw-material-yearly" || request()->segment(1)=="manage-financial-information" || request()->segment(1)=="manage-other-information"|| request()->segment(1)=="manage-cost-details-yearly" || request()->segment(1)=="manage-other-cost-details-yearly" || request()->segment(1)=="manage-employment-record-yearly" || request()->segment(1)=="manage-training-record-yearly" || request()->segment(1)=="manage-revenue-csi") style="display:block" @endif   id="d_csi-full">


                                 <li><a href="{{route('manage.production.manufacture.yearly')}}" class="waves-effect @if(Request::segment(1)=="manage-production-manufactureing-yearly") active @endif"><i class="fa fa-product-hunt" aria-hidden="true" style="font-size: 13px;"></i></i><span style="font-size: 10px;">Production And Manufacture</span></a></li>

                                    {{-- <li><a href="{{route('manage.sales.domestic.yearly')}}" class="waves-effect @if(Request::segment(1)=="manage-sales-domestic-yearly") active @endif"><i class="fa fa-balance-scale" aria-hidden="true" style="font-size: 13px;"></i><span style="font-size: 10px;">Sales Made And Markets (Domestic)</span></a></li> --}}

                                    <li><a href="{{route('manage.sales.export.yearly')}}" class="waves-effect @if(Request::segment(1)=="manage-sales-export-yearly") active @endif"><i class="fa fa-cart-arrow-down" aria-hidden="true" style="font-size: 13px;"></i><span style="font-size: 10px;">Sales Made And Markets</span></a></li>

                                    <li><a href="{{route('manage.raw.material.yearly')}}" class="waves-effect @if(Request::segment(1)=="manage-raw-material-yearly") active @endif"><i class="fa fa-maxcdn" aria-hidden="true" style="font-size: 13px;"></i><span style="font-size: 10px;">Manage Raw Material</span></a></li>


                                    <li><a href="{{route('manage.cost.yearly')}}" class="waves-effect @if(Request::segment(1)=="manage-cost-details-yearly") active @endif"><i class="fa fa-usd" aria-hidden="true" style="font-size: 13px;"></i><span style="font-size: 10px;">Manage Cost Details</span></a></li>

                                    <li><a href="{{route('manage.other.cost.other.yearly')}}" class="waves-effect @if(Request::segment(1)=="manage-other-cost-details-yearly") active @endif"><i class="fa fa-power-off" aria-hidden="true" style="font-size: 13px;"></i><span style="font-size: 10px;">Manage Other Cost</span></a></li>


                                    <li><a href="{{route('manage.employe.yearly')}}" class="waves-effect @if(Request::segment(1)=="manage-employment-record-yearly") active @endif"><i class="fa fa-user-circle" aria-hidden="true" style="font-size: 13px;"></i><span style="font-size: 10px;">Manage Employment</span></a></li>

                                    <li><a href="{{route('manage.training.yearly')}}" class="waves-effect @if(Request::segment(1)=="manage-training-record-yearly") active @endif"><i class="fa fa-globe" aria-hidden="true" style="font-size: 13px;"></i><span style="font-size: 10px;">Manage Training Record</span></a></li>

                                    

                                    

                                    <li><a href="{{route('manage.finance')}}" class="waves-effect @if(Request::segment(1)=="manage-financial-information") active @endif"><i class="fa fa-money" aria-hidden="true" style="font-size: 13px;"></i><span style="font-size: 10px;">Financial Information</span></a></li>


                                    <li><a href="{{route('manage.revenue.csi-yearly')}}" class="waves-effect @if(Request::segment(1)=="manage-revenue-csi") active @endif"><i class="fa fa-lock" aria-hidden="true" style="font-size: 13px;"></i><span style="font-size: 10px;">Manage Revenue</span></a></li>

                                    <li><a href="{{route('manage.other')}}" class="waves-effect @if(Request::segment(1)=="manage-other-information") active @endif"><i class="fa fa-window-restore" aria-hidden="true" style="font-size: 13px;"></i><span style="font-size: 10px;">Other Information</span></a></li>

                                    <li><a href="{{route('manage.yearly.submission')}}" class="waves-effect @if(Request::segment(1)=="manage-yearly-submission") active @endif"><i class="fa fa-hand-o-right" aria-hidden="true" style="font-size: 13px;"></i><span style="font-size: 10px;">Submission Page</span></a></li>

                        </ul>
            </li>



            {{-- ml-domestic-pam --}}
            <li data-id = "ml-domestic-pam" class="dropdown  dropdown_lef @if(request()->segment(1)=="ml-domestic-pam-production-manufactureing" || request()->segment(1)=="ml-domestic-pam-manage-sales-domestic" || request()->segment(1)=="ml-domestic-pam-manage-sales-export" || request()->segment(1)=="ml-domestic-pam-manage-raw-material" || request()->segment(1)=="ml-domestic-pam-currency" || request()->segment(1)=="ml-domestic-pam-manage-power-consumption" || request()->segment(1)=="ml-domestic-pam-employment-record" || request()->segment(1)=="ml-domestic-pam-traing-record" || request()->segment(1)=="ml-domestic-pam-issues"  || request()->segment(1)=="ml-domestic-pam-manage-half-yearly-submission" ) open @endif ">

                                <a style="font-size:10px;" href="#" class="waves-effect dropdown-toggle @if(request()->segment(1)=="ml-domestic-pam-production-manufactureing" || request()->segment(1)=="ml-domestic-pam-manage-sales-domestic" || request()->segment(1)=="ml-domestic-pam-manage-sales-export" || request()->segment(1)=="ml-domestic-pam-manage-raw-material" || request()->segment(1)=="ml-domestic-pam-currency" || request()->segment(1)=="ml-domestic-pam-manage-power-consumption" || request()->segment(1)=="ml-domestic-pam-employment-record" || request()->segment(1)=="ml-domestic-pam-traing-record" || request()->segment(1)=="ml-domestic-pam-issues" || request()->segment(1)=="ml-domestic-pam-manage-half-yearly-submission"  ) subdrop @endif" data-toggle="dropdown">
                                <i class="fa fa-modx" aria-hidden="true"></i><span> M&L Domestic Pam(Half Yearly) </span><span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu sub_menu" @if(request()->segment(1)=="ml-domestic-pam-production-manufactureing" || request()->segment(1)=="ml-domestic-pam-manage-sales-domestic" || request()->segment(1)=="ml-domestic-pam-manage-sales-export" || request()->segment(1)=="ml-domestic-pam-manage-raw-material" || request()->segment(1)=="ml-domestic-pam-currency" || request()->segment(1)=="ml-domestic-pam-manage-power-consumption" || request()->segment(1)=="ml-domestic-pam-employment-record" || request()->segment(1)=="ml-domestic-pam-traing-record" || request()->segment(1)=="ml-domestic-pam-issues" || request()->segment(1)=="ml-domestic-pam-manage-half-yearly-submission"  ) style="display:block" @endif  id="d_ml-domestic-pam">


                                 <li><a href="{{route('manage.production.manufacture.ml-pam-domestic')}}" class="waves-effect @if(Request::segment(1)=="ml-domestic-pam-production-manufactureing") active @endif"><i class="fa fa-product-hunt" aria-hidden="true" style="font-size: 13px;"></i></i><span style="font-size: 10px;">Production And Manufacture</span></a></li>

                                    <li><a href="{{route('manage.sales.domestic.ml.pam.domestic')}}" class="waves-effect @if(Request::segment(1)=="ml-domestic-pam-manage-sales-domestic") active @endif"><i class="fa fa-balance-scale" aria-hidden="true" style="font-size: 13px;"></i><span style="font-size: 10px;">Sales Made And Markets (Domestic)</span></a></li>

                                    <li><a href="{{route('manage.sales.export.ml.pam.domestic')}}" class="waves-effect @if(Request::segment(1)=="ml-domestic-pam-manage-sales-export") active @endif"><i class="fa fa-cart-arrow-down" aria-hidden="true" style="font-size: 13px;"></i><span style="font-size: 10px;">Sales Made And Markets (Export)</span></a></li>

                                    <li><a href="{{route('manage.raw.material.ml.pam.domestic')}}" class="waves-effect @if(Request::segment(1)=="ml-domestic-pam-manage-raw-material") active @endif"><i class="fa fa-maxcdn" aria-hidden="true" style="font-size: 13px;"></i><span style="font-size: 10px;">Manage Raw Material</span></a></li>

                                    <li><a href="{{route('manage.currency.ml.pam.domestic')}}" class="waves-effect @if(Request::segment(1)=="ml-domestic-pam-currency") active @endif"><i class="fa fa-usd" aria-hidden="true" style="font-size: 13px;"></i><span style="font-size: 10px;">Manage Convertible Currency</span></a></li>

                                    <li><a href="{{route('manage.power.ml-domestic-pam')}}" class="waves-effect @if(Request::segment(1)=="ml-domestic-pam-manage-power-consumption") active @endif"><i class="fa fa-power-off" aria-hidden="true" style="font-size: 13px;"></i><span style="font-size: 10px;">Manage Power Consumption</span></a></li>


                                    <li><a href="{{route('manage.employeml.pam.domestic')}}" class="waves-effect @if(Request::segment(1)=="ml-domestic-pam-employment-record") active @endif"><i class="fa fa-user-circle" aria-hidden="true" style="font-size: 13px;"></i><span style="font-size: 10px;">Manage Employment</span></a></li>

                                    <li><a href="{{route('manage.training.pam.domestic')}}" class="waves-effect @if(Request::segment(1)=="ml-domestic-pam-traing-record") active @endif"><i class="fa fa-globe" aria-hidden="true" style="font-size: 13px;"></i><span style="font-size: 10px;">Manage Training Record</span></a></li>

                                    <li><a href="{{route('manage.issues.ml.pam.domestic')}}" class="waves-effect @if(Request::segment(1)=="ml-domestic-pam-issues") active @endif"><i class="fa fa-lock" aria-hidden="true" style="font-size: 13px;"></i><span style="font-size: 10px;">Issue And Challenges</span></a></li>

                                    <li><a href="{{route('manage.half.yearly.submission.ml.pam.domestic')}}" class="waves-effect @if(Request::segment(1)=="ml-domestic-pam-manage-half-yearly-submission") active @endif"><i class="fa fa-hand-o-right" aria-hidden="true" style="font-size: 13px;"></i><span style="font-size: 10px;">Submission Page</span></a></li>

                        </ul>
            </li>

           


                         <li data-id = "ml-domestic-pam-full" class="dropdown  dropdown_lef @if(request()->segment(1)=="ml-domestic-pam-production-manufactureing-yearly" || request()->segment(1)=="ml-domestic-pam-manage-sales-domestic-yearly" || request()->segment(1)=="ml-domestic-pam-manage-sales-export-yearly" || request()->segment(1)=="ml-domestic-pam-manage-raw-material-yearly" || request()->segment(1)=="ml-domestic-pam-manage-financial-information" || request()->segment(1)=="ml-domestic-pam-manage-other-information" || request()->segment(1)=="ml-domestic-pam-currency-yearly" || request()->segment(1)=="ml-domestic-pam-manage-power-consumption-yearly" || request()->segment(1)=="manage-employment-record-yearly" || request()->segment(1)=="ml-domestic-pam-traing-record-yearly" || request()->segment(1)=="ml-domestic-pam-issues-yearly" || request()->segment(1)=="ml-domestic-pam-manage-half-yearly-submission-yearly" || request()->segment(1)=="ml-domestic-pam-manage-revenue") open @endif ">

                                <a style="font-size:10px;" href="#" class="waves-effect dropdown-toggle @if(request()->segment(1)=="ml-domestic-pam-production-manufactureing-yearly" || request()->segment(1)=="ml-domestic-pam-manage-sales-domestic-yearly" || request()->segment(1)=="ml-domestic-pam-manage-sales-export-yearly" || request()->segment(1)=="ml-domestic-pam-manage-raw-material-yearly" || request()->segment(1)=="ml-domestic-pam-manage-financial-information" || request()->segment(1)=="ml-domestic-pam-manage-other-information"|| request()->segment(1)=="ml-domestic-pam-currency-yearly" || request()->segment(1)=="ml-domestic-pam-manage-power-consumption-yearly" || request()->segment(1)=="ml-domestic-pam-employment-record-yearly" || request()->segment(1)=="ml-domestic-pam-traing-record-yearly" || request()->segment(1)=="ml-domestic-pam-issues-yearly" || request()->segment(1)=="ml-domestic-pam-manage-half-yearly-submission-yearly" || request()->segment(1)=="ml-domestic-pam-manage-revenue") subdrop @endif" data-toggle="dropdown">
                                <i class="fa fa-map-signs" aria-hidden="true"></i><span> M&L Domestic Pam (Yearly) </span><span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu sub_menu" @if(request()->segment(1)=="ml-domestic-pam-production-manufactureing-yearly" || request()->segment(1)=="ml-domestic-pam-manage-sales-domestic-yearly" || request()->segment(1)=="ml-domestic-pam-manage-sales-export-yearly" || request()->segment(1)=="ml-domestic-pam-manage-raw-material-yearly" || request()->segment(1)=="ml-domestic-pam-manage-financial-information" || request()->segment(1)=="ml-domestic-pam-manage-other-information"|| request()->segment(1)=="ml-domestic-pam-currency-yearly" || request()->segment(1)=="ml-domestic-pam-manage-power-consumption-yearly" || request()->segment(1)=="ml-domestic-pam-employment-record-yearly" || request()->segment(1)=="ml-domestic-pam-traing-record-yearly" || request()->segment(1)=="ml-domestic-pam-issues-yearly" || request()->segment(1)=="ml-domestic-pam-manage-half-yearly-submission-yearly" || request()->segment(1)=="ml-domestic-pam-manage-revenue") style="display:block" @endif   id="d_ml-domestic-pam-full">


                                 <li><a href="{{route('manage.production.manufacture.ml-pam-domestic.yearly')}}" class="waves-effect @if(Request::segment(1)=="ml-domestic-pam-production-manufactureing-yearly") active @endif"><i class="fa fa-product-hunt" aria-hidden="true" style="font-size: 13px;"></i></i><span style="font-size: 10px;">Production And Manufacture</span></a></li>

                                    <li><a href="{{route('manage.sales.domestic.ml.pam.domestic.yearly')}}" class="waves-effect @if(Request::segment(1)=="ml-domestic-pam-manage-sales-domestic-yearly") active @endif"><i class="fa fa-balance-scale" aria-hidden="true" style="font-size: 13px;"></i><span style="font-size: 10px;">Sales Made And Markets (Domestic)</span></a></li>

                                    <li><a href="{{route('manage.sales.export.ml.pam.domestic.yearly')}}" class="waves-effect @if(Request::segment(1)=="ml-domestic-pam-manage-sales-export-yearly") active @endif"><i class="fa fa-cart-arrow-down" aria-hidden="true" style="font-size: 13px;"></i><span style="font-size: 10px;">Sales Made And Markets (Export)</span></a></li>

                                    <li><a href="{{route('manage.raw.material.ml.pam.domestic.yearly')}}" class="waves-effect @if(Request::segment(1)=="ml-domestic-pam-manage-raw-material-yearly") active @endif"><i class="fa fa-maxcdn" aria-hidden="true" style="font-size: 13px;"></i><span style="font-size: 10px;">Manage Raw Material</span></a></li>


                                    <li><a href="{{route('manage.currency.ml.pam.domestic.yearly')}}" class="waves-effect @if(Request::segment(1)=="ml-domestic-pam-currency-yearly") active @endif"><i class="fa fa-usd" aria-hidden="true" style="font-size: 13px;"></i><span style="font-size: 10px;">Manage Convertible Currency</span></a></li>

                                    <li><a href="{{route('manage.power.ml-domestic-pam.yearly')}}" class="waves-effect @if(Request::segment(1)=="ml-domestic-pam-manage-power-consumption-yearly") active @endif"><i class="fa fa-power-off" aria-hidden="true" style="font-size: 13px;"></i><span style="font-size: 10px;">Manage Power Consumption</span></a></li>


                                    <li><a href="{{route('manage.employeml.pam.domestic.yearly')}}" class="waves-effect @if(Request::segment(1)=="ml-domestic-pam-employment-record-yearly") active @endif"><i class="fa fa-user-circle" aria-hidden="true" style="font-size: 13px;"></i><span style="font-size: 10px;">Manage Employment</span></a></li>

                                    <li><a href="{{route('manage.training.pam.domestic.yearly')}}" class="waves-effect @if(Request::segment(1)=="ml-domestic-pam-traing-record-yearly") active @endif"><i class="fa fa-globe" aria-hidden="true" style="font-size: 13px;"></i><span style="font-size: 10px;">Manage Training Record</span></a></li>

                                    <li><a href="{{route('manage.issues.pam.domestic.yearly')}}" class="waves-effect @if(Request::segment(1)=="ml-domestic-pam-issues-yearly") active @endif"><i class="fa fa-lock" aria-hidden="true" style="font-size: 13px;"></i><span style="font-size: 10px;">Issue And Challenges</span></a></li>

                                    

                                    <li><a href="{{route('manage.finance.ml-domestic-pam-yearly')}}" class="waves-effect @if(Request::segment(1)=="ml-domestic-pam-manage-financial-information") active @endif"><i class="fa fa-money" aria-hidden="true" style="font-size: 13px;"></i><span style="font-size: 10px;">Financial Information</span></a></li>

                                    <li><a href="{{route('manage.revenue.ml-domestic-pam')}}" class="waves-effect @if(Request::segment(1)=="ml-domestic-pam-manage-revenue") active @endif"><i class="fa fa-lock" aria-hidden="true" style="font-size: 13px;"></i><span style="font-size: 10px;">Manage Revenue</span></a></li>

                                    <li><a href="{{route('manage.other.ml-domestic-pam')}}" class="waves-effect @if(Request::segment(1)=="ml-domestic-pam-manage-other-information") active @endif"><i class="fa fa-window-restore" aria-hidden="true" style="font-size: 13px;"></i><span style="font-size: 10px;">Other Information</span></a></li>

                                    <li><a href="{{route('manage.half.yearly.submission.ml.pam.domestic.yearly')}}" class="waves-effect @if(Request::segment(1)=="ml-domestic-pam-manage-half-yearly-submission-yearly") active @endif"><i class="fa fa-hand-o-right" aria-hidden="true" style="font-size: 13px;"></i><span style="font-size: 10px;">Submission Page</span></a></li>

                        </ul>
            </li>



            {{-- ml-pam-fdi --}}
             {{-- ml-domestic-pam --}}
            <li data-id = "ml-fdi-pam" class="dropdown  dropdown_lef @if(request()->segment(1)=="ml-pam-fdi-production-manufactureing" || request()->segment(1)=="ml-pam-fdi-manage-sales-domestic" || request()->segment(1)=="ml-pam-fdi-manage-sales-export" || request()->segment(1)=="ml-pam-fdi-manage-raw-material" || request()->segment(1)=="ml-pam-fdi-currency" || request()->segment(1)=="ml-pam-fdi-power" || request()->segment(1)=="ml-pam-fdi-employment-record" || request()->segment(1)=="ml-pam-fdi-traing-record" || request()->segment(1)=="ml-pam-fdi-issues"  || request()->segment(1)=="ml-domestic-pam-manage-half-yearly-submission" ) open @endif ">

                                <a style="font-size:10px;" href="#" class="waves-effect dropdown-toggle @if(request()->segment(1)=="ml-pam-fdi-production-manufactureing" || request()->segment(1)=="ml-pam-fdi-manage-sales-domestic" || request()->segment(1)=="ml-pam-fdi-manage-sales-export" || request()->segment(1)=="ml-pam-fdi-manage-raw-material" || request()->segment(1)=="ml-pam-fdi-currency" || request()->segment(1)=="ml-pam-fdi-power" || request()->segment(1)=="ml-pam-fdi-employment-record" || request()->segment(1)=="ml-pam-fdi-traing-record" || request()->segment(1)=="ml-pam-fdi-issues" || request()->segment(1)=="ml-domestic-pam-manage-half-yearly-submission"  ) subdrop @endif" data-toggle="dropdown">
                                <i class="fa fa-modx" aria-hidden="true"></i><span> M&L PAM FDI(Half Yearly) </span><span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu sub_menu" @if(request()->segment(1)=="ml-pam-fdi-production-manufactureing" || request()->segment(1)=="ml-pam-fdi-manage-sales-domestic" || request()->segment(1)=="ml-pam-fdi-manage-sales-export" || request()->segment(1)=="ml-pam-fdi-manage-raw-material" || request()->segment(1)=="ml-pam-fdi-currency" || request()->segment(1)=="ml-pam-fdi-power" || request()->segment(1)=="ml-pam-fdi-employment-record" || request()->segment(1)=="ml-pam-fdi-traing-record" || request()->segment(1)=="ml-pam-fdi-issues" || request()->segment(1)=="ml-domestic-pam-manage-half-yearly-submission"  ) style="display:block" @endif  id="d_ml-fdi-pam">


                                 <li><a href="{{route('manage.production.manufacture.ml-pam-fdi-production-manufactureing')}}" class="waves-effect @if(Request::segment(1)=="ml-pam-fdi-production-manufactureing") active @endif"><i class="fa fa-product-hunt" aria-hidden="true" style="font-size: 13px;"></i></i><span style="font-size: 10px;">Production And Manufacture</span></a></li>

                                    <li><a href="{{route('manage.sales.domestic.ml-pam-fdi')}}" class="waves-effect @if(Request::segment(1)=="ml-pam-fdi-manage-sales-domestic") active @endif"><i class="fa fa-balance-scale" aria-hidden="true" style="font-size: 13px;"></i><span style="font-size: 10px;">Sales Made And Markets (Domestic)</span></a></li>

                                    <li><a href="{{route('manage.sales.export.ml-pam-fdi')}}" class="waves-effect @if(Request::segment(1)=="ml-pam-fdi-manage-sales-export") active @endif"><i class="fa fa-cart-arrow-down" aria-hidden="true" style="font-size: 13px;"></i><span style="font-size: 10px;">Sales Made And Markets (Export)</span></a></li>

                                    <li><a href="{{route('manage.raw.material.ml-fdi-pam')}}" class="waves-effect @if(Request::segment(1)=="ml-pam-fdi-manage-raw-material") active @endif"><i class="fa fa-maxcdn" aria-hidden="true" style="font-size: 13px;"></i><span style="font-size: 10px;">Manage Raw Material</span></a></li>

                                    <li><a href="{{route('manage.currency.ml-pam-fdi')}}" class="waves-effect @if(Request::segment(1)=="ml-pam-fdi-currency") active @endif"><i class="fa fa-usd" aria-hidden="true" style="font-size: 13px;"></i><span style="font-size: 10px;">Manage Convertible Currency</span></a></li>

                                    <li><a href="{{route('manage.power.ml-pam-fdi')}}" class="waves-effect @if(Request::segment(1)=="ml-pam-fdi-power") active @endif"><i class="fa fa-power-off" aria-hidden="true" style="font-size: 13px;"></i><span style="font-size: 10px;">Manage Power Consumption</span></a></li>


                                    <li><a href="{{route('manage.employe.ml-pam-fdi')}}" class="waves-effect @if(Request::segment(1)=="ml-pam-fdi-employment-record") active @endif"><i class="fa fa-user-circle" aria-hidden="true" style="font-size: 13px;"></i><span style="font-size: 10px;">Manage Employment</span></a></li>

                                    <li><a href="{{route('manage.training.ml-pam-fdi')}}" class="waves-effect @if(Request::segment(1)=="ml-pam-fdi-traing-record") active @endif"><i class="fa fa-globe" aria-hidden="true" style="font-size: 13px;"></i><span style="font-size: 10px;">Manage Training Record</span></a></li>

                                    <li><a href="{{route('manage.issues.ml-pam-fdi')}}" class="waves-effect @if(Request::segment(1)=="ml-pam-fdi-issues") active @endif"><i class="fa fa-lock" aria-hidden="true" style="font-size: 13px;"></i><span style="font-size: 10px;">Issue And Challenges</span></a></li>

                                    {{-- <li><a href="{{route('manage.half.yearly.submission.ml.pam.domestic')}}" class="waves-effect @if(Request::segment(1)=="ml-domestic-pam-manage-half-yearly-submission") active @endif"><i class="fa fa-hand-o-right" aria-hidden="true" style="font-size: 13px;"></i><span style="font-size: 10px;">Submission Page</span></a></li> --}}

                        </ul>
            </li>






            <li data-id = "ml-fdi-pam-yearly" class="dropdown  dropdown_lef @if(request()->segment(1)=="ml-pam-fdi-production-manufactureing-yearly" || request()->segment(1)=="ml-pam-fdi-manage-sales-domestic-yearly" || request()->segment(1)=="ml-pam-fdi-manage-sales-export-yearly" || request()->segment(1)=="ml-pam-fdi-manage-raw-material-yearly" || request()->segment(1)=="ml-pam-fdi-manage-financial-information" || request()->segment(1)=="manage.other.ml-pam-fdi" || request()->segment(1)=="ml-pam-fdi-currency-yearly" || request()->segment(1)=="ml-pam-fdi-power-yearly" || request()->segment(1)=="ml-pam-fdi-employment-record-yearly" || request()->segment(1)=="ml-pam-fdi-traing-record-yearly" || request()->segment(1)=="ml-pam-fdi-issues-yearly" || request()->segment(1)=="ml-pam-fdi-manage-revenue" || request()->segment(1)=="ml-pam-fdi-manage-other-information") open @endif ">

                                <a style="font-size:10px;" href="#" class="waves-effect dropdown-toggle @if(request()->segment(1)=="ml-pam-fdi-production-manufactureing-yearly" || request()->segment(1)=="ml-pam-fdi-manage-sales-domestic-yearly" || request()->segment(1)=="ml-pam-fdi-manage-sales-export-yearly" || request()->segment(1)=="ml-pam-fdi-manage-raw-material-yearly" || request()->segment(1)=="ml-pam-fdi-manage-financial-information" || request()->segment(1)=="manage.other.ml-pam-fdi"|| request()->segment(1)=="ml-pam-fdi-currency-yearly" || request()->segment(1)=="ml-pam-fdi-power-yearly" || request()->segment(1)=="ml-pam-fdi-employment-record-yearly" || request()->segment(1)=="ml-pam-fdi-traing-record-yearly" || request()->segment(1)=="ml-pam-fdi-issues-yearly"|| request()->segment(1)=="ml-pam-fdi-manage-revenue"|| request()->segment(1)=="ml-pam-fdi-manage-other-information") subdrop @endif" data-toggle="dropdown">
                                <i class="fa fa-balance-scale" aria-hidden="true"></i><span> M&L FDI PAM (Yearly) </span><span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu sub_menu" @if(request()->segment(1)=="ml-pam-fdi-production-manufactureing-yearly" || request()->segment(1)=="ml-pam-fdi-manage-sales-domestic-yearly" || request()->segment(1)=="ml-pam-fdi-manage-sales-export-yearly" || request()->segment(1)=="ml-pam-fdi-manage-raw-material-yearly" || request()->segment(1)=="ml-pam-fdi-manage-financial-information" || request()->segment(1)=="manage.other.ml-pam-fdi"|| request()->segment(1)=="ml-pam-fdi-currency-yearly" || request()->segment(1)=="ml-pam-fdi-power-yearly" || request()->segment(1)=="ml-pam-fdi-employment-record-yearly" || request()->segment(1)=="ml-pam-fdi-traing-record-yearly" || request()->segment(1)=="ml-pam-fdi-issues-yearly"|| request()->segment(1)=="ml-pam-fdi-manage-revenue"|| request()->segment(1)=="ml-pam-fdi-manage-other-information") style="display:block" @endif   id="d_ml-fdi-pam-yearly">


                                 <li><a href="{{route('manage.production.manufacture.ml-pam-fdi-production-manufactureing.yearly')}}" class="waves-effect @if(Request::segment(1)=="ml-pam-fdi-production-manufactureing-yearly") active @endif"><i class="fa fa-product-hunt" aria-hidden="true" style="font-size: 13px;"></i></i><span style="font-size: 10px;">Production And Manufacture</span></a></li>

                                    <li><a href="{{route('manage.sales.domestic.ml-pam-fdi.yearly')}}" class="waves-effect @if(Request::segment(1)=="ml-pam-fdi-manage-sales-domestic-yearly") active @endif"><i class="fa fa-balance-scale" aria-hidden="true" style="font-size: 13px;"></i><span style="font-size: 10px;">Sales Made And Markets (Domestic)</span></a></li>

                                    <li><a href="{{route('manage.sales.export.ml-pam-fdi.yearly')}}" class="waves-effect @if(Request::segment(1)=="ml-pam-fdi-manage-sales-export-yearly") active @endif"><i class="fa fa-cart-arrow-down" aria-hidden="true" style="font-size: 13px;"></i><span style="font-size: 10px;">Sales Made And Markets (Export)</span></a></li>

                                    <li><a href="{{route('manage.raw.material.ml-fdi-pam.yearly')}}" class="waves-effect @if(Request::segment(1)=="ml-pam-fdi-manage-raw-material-yearly") active @endif"><i class="fa fa-maxcdn" aria-hidden="true" style="font-size: 13px;"></i><span style="font-size: 10px;">Manage Raw Material</span></a></li>


                                    <li><a href="{{route('manage.currency.ml-pam-fdi.yearly')}}" class="waves-effect @if(Request::segment(1)=="ml-pam-fdi-currency-yearly") active @endif"><i class="fa fa-usd" aria-hidden="true" style="font-size: 13px;"></i><span style="font-size: 10px;">Manage Convertible Currency</span></a></li>

                                    <li><a href="{{route('manage.power.ml-pam-fdi.yearly')}}" class="waves-effect @if(Request::segment(1)=="ml-pam-fdi-power-yearly") active @endif"><i class="fa fa-power-off" aria-hidden="true" style="font-size: 13px;"></i><span style="font-size: 10px;">Manage Power Consumption</span></a></li>


                                    <li><a href="{{route('manage.employe.ml-pam-fdi.yearly')}}" class="waves-effect @if(Request::segment(1)=="ml-pam-fdi-employment-record-yearly") active @endif"><i class="fa fa-user-circle" aria-hidden="true" style="font-size: 13px;"></i><span style="font-size: 10px;">Manage Employment</span></a></li>

                                    <li><a href="{{route('manage.training.ml-pam-fdi.yearly')}}" class="waves-effect @if(Request::segment(1)=="ml-pam-fdi-traing-record-yearly") active @endif"><i class="fa fa-globe" aria-hidden="true" style="font-size: 13px;"></i><span style="font-size: 10px;">Manage Training Record</span></a></li>

                                    
                                    <li><a href="{{route('manage.issues.ml-pam-fdi.yearly')}}" class="waves-effect @if(Request::segment(1)=="ml-pam-fdi-issues-yearly") active @endif"><i class="fa fa-lock" aria-hidden="true" style="font-size: 13px;"></i><span style="font-size: 10px;">Manage Issues</span></a></li>

                                    

                                    <li><a href="{{route('manage.finance.ml-pam-fdi-yearly')}}" class="waves-effect @if(Request::segment(1)=="ml-pam-fdi-manage-financial-information") active @endif"><i class="fa fa-money" aria-hidden="true" style="font-size: 13px;"></i><span style="font-size: 10px;">Financial Information</span></a></li>

                                    <li><a href="{{route('manage.revenue.ml-pam-fdi-yearly')}}" class="waves-effect @if(Request::segment(1)=="ml-pam-fdi-manage-revenue") active @endif"><i class="fa fa-lock" aria-hidden="true" style="font-size: 13px;"></i><span style="font-size: 10px;">Manage Revenue</span></a></li>

                                    

                                    <li><a href="{{route('manage.other.ml-pam-fdi')}}" class="waves-effect @if(Request::segment(1)=="ml-pam-fdi-manage-other-information") active @endif"><i class="fa fa-window-restore" aria-hidden="true" style="font-size: 13px;"></i><span style="font-size: 10px;">Other Information</span></a></li>

                                    {{-- <li><a href="{{route('manage.yearly.submission')}}" class="waves-effect @if(Request::segment(1)=="manage-yearly-submission") active @endif"><i class="fa fa-hand-o-right" aria-hidden="true" style="font-size: 13px;"></i><span style="font-size: 10px;">Submission Page</span></a></li> --}}

                        </ul>
            </li>








            <li data-id = "csi-pam-half" class="dropdown  dropdown_lef @if(request()->segment(1)=="manage-production-manufacture-csi-pam-fdi" || request()->segment(1)=="manage-sales-domestic" || request()->segment(1)=="sales-export-csi-pam-fdi" || request()->segment(1)=="raw-material-csi-pam-fdi" || request()->segment(1)=="manage-cost-details-csi-pam-fdi" || request()->segment(1)=="manage-other-cost-details-csi-pam-fdi" || request()->segment(1)=="manage-employment-record-csi-pam-fdi" || request()->segment(1)=="manage-training-record-csi-pam-fdi" ) open @endif ">

                                <a style="font-size:10px;" href="#" class="waves-effect dropdown-toggle @if(request()->segment(1)=="manage-production-manufacture-csi-pam-fdi" || request()->segment(1)=="manage-sales-domestic" || request()->segment(1)=="sales-export-csi-pam-fdi" || request()->segment(1)=="raw-material-csi-pam-fdi" || request()->segment(1)=="manage-cost-details-csi-pam-fdi" || request()->segment(1)=="manage-other-cost-details-csi-pam-fdi" || request()->segment(1)=="manage-employment-record-csi-pam-fdi" || request()->segment(1)=="manage-training-record-csi-pam-fdi" ) subdrop @endif" data-toggle="dropdown">
                                <i class="fa fa-bar-chart" aria-hidden="true"></i><span> CSI FDI Pam (Half Yearly) </span><span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu sub_menu" @if(request()->segment(1)=="manage-production-manufacture-csi-pam-fdi" || request()->segment(1)=="manage-sales-domestic" || request()->segment(1)=="sales-export-csi-pam-fdi" || request()->segment(1)=="raw-material-csi-pam-fdi" || request()->segment(1)=="manage-cost-details-csi-pam-fdi" || request()->segment(1)=="manage-other-cost-details-csi-pam-fdi" || request()->segment(1)=="manage-employment-record-csi-pam-fdi" || request()->segment(1)=="manage-training-record-csi-pam-fdi" ) style="display:block" @endif  id="d_csi-pam-half">


                                 <li><a href="{{route('manage.production.manufacture.csi-fdi-pam')}}" class="waves-effect @if(Request::segment(1)=="manage-production-manufacture-csi-pam-fdi") active @endif"><i class="fa fa-product-hunt" aria-hidden="true" style="font-size: 13px;"></i></i><span style="font-size: 10px;">Production And Manufacture</span></a></li>

                                    {{-- <li><a href="{{route('manage.sales.domestic')}}" class="waves-effect @if(Request::segment(1)=="manage-sales-domestic") active @endif"><i class="fa fa-balance-scale" aria-hidden="true" style="font-size: 13px;"></i><span style="font-size: 10px;">Sales Made And Markets (Domestic)</span></a></li> --}}

                                    <li><a href="{{route('manage.sales.export.csi-fdi-pam')}}" class="waves-effect @if(Request::segment(1)=="sales-export-csi-pam-fdi") active @endif"><i class="fa fa-cart-arrow-down" aria-hidden="true" style="font-size: 13px;"></i><span style="font-size: 10px;">Sales Made And Markets</span></a></li>

                                    <li><a href="{{route('manage.raw.material.csi-pam-fdi')}}" class="waves-effect @if(Request::segment(1)=="raw-material-csi-pam-fdi") active @endif"><i class="fa fa-maxcdn" aria-hidden="true" style="font-size: 13px;"></i><span style="font-size: 10px;">Manage Raw Material</span></a></li>

                                    <li><a href="{{route('manage.cost.csi-pam-fdi')}}" class="waves-effect @if(Request::segment(1)=="manage-cost-details-csi-pam-fdi") active @endif"><i class="fa fa-usd" aria-hidden="true" style="font-size: 13px;"></i><span style="font-size: 10px;">Manage Cost Details</span></a></li>

                                    <li><a href="{{route('manage.other.cost.other.-csi-pam-fdi')}}" class="waves-effect @if(Request::segment(1)=="manage-other-cost-details-csi-pam-fdi") active @endif"><i class="fa fa-power-off" aria-hidden="true" style="font-size: 13px;"></i><span style="font-size: 10px;">Manage Other Costs</span></a></li>


                                    <li><a href="{{route('manage.employe.manage-employment-record-csi-pam-fdi')}}" class="waves-effect @if(Request::segment(1)=="manage-employment-record-csi-pam-fdi") active @endif"><i class="fa fa-user-circle" aria-hidden="true" style="font-size: 13px;"></i><span style="font-size: 10px;">Manage Employment</span></a></li>

                                    <li><a href="{{route('manage.training-csi-pam-fdi')}}" class="waves-effect @if(Request::segment(1)=="manage-training-record-csi-pam-fdi") active @endif"><i class="fa fa-globe" aria-hidden="true" style="font-size: 13px;"></i><span style="font-size: 10px;">Manage Training Record</span></a></li>

                                    {{-- <li><a href="{{route('manage.issues')}}" class="waves-effect @if(Request::segment(1)=="manage-issues-challenges") active @endif"><i class="fa fa-lock" aria-hidden="true" style="font-size: 13px;"></i><span style="font-size: 10px;">Issue And Challenges</span></a></li> --}}

                                    {{-- <li><a href="{{route('manage.half.yearly.submission')}}" class="waves-effect @if(Request::segment(1)=="manage-half-yearly-submission") active @endif"><i class="fa fa-hand-o-right" aria-hidden="true" style="font-size: 13px;"></i><span style="font-size: 10px;">Submission Page</span></a></li> --}}

                        </ul>
            </li>




            <li data-id = "csi-pam-fdi-yearly" class="dropdown  dropdown_lef @if(request()->segment(1)=="manage-production-manufacture-csi-pam-fdi-yearly" || request()->segment(1)=="manage-sales-domestic-yearly" || request()->segment(1)=="sales-export-csi-pam-fdi-yearly" || request()->segment(1)=="raw-material-csi-pam-fdi-yearly" || request()->segment(1)=="manage-cost-details-csi-pam-fdi-yearly" || request()->segment(1)=="manage-other-cost-details-csi-pam-fdi-yearly" || request()->segment(1)=="manage-financial-information-csi-pam-fdi-yearly" || request()->segment(1)=="manage-other-information-csi-pam-fdi-yearly" || request()->segment(1)=="manage-employment-record-csi-pam-fdi-yearly" || request()->segment(1)=="manage-training-record-csi-pam-fdi-yearly" || request()->segment(1)=="manage-revenue-csi-pam-fdi-yearly") open @endif ">

                                <a style="font-size:10px;" href="#" class="waves-effect dropdown-toggle @if(request()->segment(1)=="manage-production-manufacture-csi-pam-fdi-yearly" || request()->segment(1)=="manage-sales-domestic-yearly" || request()->segment(1)=="sales-export-csi-pam-fdi-yearly" || request()->segment(1)=="raw-material-csi-pam-fdi-yearly" || request()->segment(1)=="manage-cost-details-csi-pam-fdi-yearly" || request()->segment(1)=="manage-other-cost-details-csi-pam-fdi-yearly"|| request()->segment(1)=="manage-financial-information-csi-pam-fdi-yearly" || request()->segment(1)=="manage-other-information-csi-pam-fdi-yearly" || request()->segment(1)=="manage-employment-record-csi-pam-fdi-yearly" || request()->segment(1)=="manage-training-record-csi-pam-fdi-yearly" || request()->segment(1)=="manage-revenue-csi-pam-fdi-yearly") subdrop @endif" data-toggle="dropdown">
                                <i class="fa fa-balance-scale" aria-hidden="true"></i><span> CSI FDI Pam (Yearly) </span><span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu sub_menu" @if(request()->segment(1)=="manage-production-manufacture-csi-pam-fdi-yearly" || request()->segment(1)=="manage-sales-domestic-yearly" || request()->segment(1)=="sales-export-csi-pam-fdi-yearly" || request()->segment(1)=="raw-material-csi-pam-fdi-yearly" || request()->segment(1)=="manage-cost-details-csi-pam-fdi-yearly" || request()->segment(1)=="manage-other-cost-details-csi-pam-fdi-yearly"|| request()->segment(1)=="manage-financial-information-csi-pam-fdi-yearly" || request()->segment(1)=="manage-other-information-csi-pam-fdi-yearly" || request()->segment(1)=="manage-employment-record-csi-pam-fdi-yearly" || request()->segment(1)=="manage-training-record-csi-pam-fdi-yearly" || request()->segment(1)=="manage-revenue-csi-pam-fdi-yearly") style="display:block" @endif   id="d_csi-pam-fdi-yearly">


                                 <li><a href="{{route('manage.production.manufacture.csi-fdi-pam.yearly')}}" class="waves-effect @if(Request::segment(1)=="manage-production-manufacture-csi-pam-fdi-yearly") active @endif"><i class="fa fa-product-hunt" aria-hidden="true" style="font-size: 13px;"></i></i><span style="font-size: 10px;">Production And Manufacture</span></a></li>

                                    {{-- <li><a href="{{route('manage.sales.domestic.yearly')}}" class="waves-effect @if(Request::segment(1)=="manage-sales-domestic-yearly") active @endif"><i class="fa fa-balance-scale" aria-hidden="true" style="font-size: 13px;"></i><span style="font-size: 10px;">Sales Made And Markets (Domestic)</span></a></li> --}}

                                    <li><a href="{{route('manage.sales.export.csi-fdi-pam.yearly')}}" class="waves-effect @if(Request::segment(1)=="sales-export-csi-pam-fdi-yearly") active @endif"><i class="fa fa-cart-arrow-down" aria-hidden="true" style="font-size: 13px;"></i><span style="font-size: 10px;">Sales Made And Markets</span></a></li>

                                    <li><a href="{{route('manage.raw.material.csi-pam-fdi.yearly')}}" class="waves-effect @if(Request::segment(1)=="raw-material-csi-pam-fdi-yearly") active @endif"><i class="fa fa-maxcdn" aria-hidden="true" style="font-size: 13px;"></i><span style="font-size: 10px;">Manage Raw Material</span></a></li>

                                     <li><a href="{{route('manage.cost.csi-pam-fdi.yearly')}}" class="waves-effect @if(Request::segment(1)=="manage-cost-details-csi-pam-fdi-yearly") active @endif"><i class="fa fa-money" aria-hidden="true" style="font-size: 13px;"></i><span style="font-size: 10px;">Manage Cost Details</span></a></li>


                                    

                                    <li><a href="{{route('manage.other.cost.other.-csi-pam-fdi.yearly')}}" class="waves-effect @if(Request::segment(1)=="manage-other-cost-details-csi-pam-fdi-yearly") active @endif"><i class="fa fa-power-off" aria-hidden="true" style="font-size: 13px;"></i><span style="font-size: 10px;">Manage Other Cost</span></a></li>


                                    <li><a href="{{route('manage.employe.manage-employment-record-csi-pam-fdi-yearly')}}" class="waves-effect @if(Request::segment(1)=="manage-employment-record-csi-pam-fdi-yearly") active @endif"><i class="fa fa-user-circle" aria-hidden="true" style="font-size: 13px;"></i><span style="font-size: 10px;">Manage Employment</span></a></li>

                                    <li><a href="{{route('manage.training-csi-pam-fdi.yearly')}}" class="waves-effect @if(Request::segment(1)=="manage-training-record-csi-pam-fdi-yearly") active @endif"><i class="fa fa-globe" aria-hidden="true" style="font-size: 13px;"></i><span style="font-size: 10px;">Manage Training Record</span></a></li>

                                    

                                    <li><a href="{{route('manage.financemanage-financial-information-csi-pam-fdi-yearly')}}" class="waves-effect @if(Request::segment(1)=="manage-financial-information-csi-pam-fdi-yearly") active @endif"><i class="fa fa-usd" aria-hidden="true" style="font-size: 13px;"></i><span style="font-size: 10px;">Manage Finance</span></a></li>

                                   


                                    <li><a href="{{route('manage.revenue.manage-revenue-csi-pam-fdi-yearly')}}" class="waves-effect @if(Request::segment(1)=="manage-revenue-csi-pam-fdi-yearly") active @endif"><i class="fa fa-lock" aria-hidden="true" style="font-size: 13px;"></i><span style="font-size: 10px;">Manage Revenue</span></a></li>

                                    <li><a href="{{route('manage.other-csi-pam-fdi-yearly')}}" class="waves-effect @if(Request::segment(1)=="manage-other-information-csi-pam-fdi-yearly") active @endif"><i class="fa fa-window-restore" aria-hidden="true" style="font-size: 13px;"></i><span style="font-size: 10px;">Other Information</span></a></li>

                                    {{-- <li><a href="{{route('manage.yearly.submission')}}" class="waves-effect @if(Request::segment(1)=="manage-yearly-submission") active @endif"><i class="fa fa-hand-o-right" aria-hidden="true" style="font-size: 13px;"></i><span style="font-size: 10px;">Submission Page</span></a></li> --}}

                        </ul>
            </li>


            



            <li data-id = "csi-service-half" class="dropdown  dropdown_lef @if(request()->segment(1)=="manage-service-csi-service" || request()->segment(1)=="manage-sales-domestic" || request()->segment(1)=="sales-market-csi-service" || request()->segment(1)=="raw-material-csi-service" || request()->segment(1)=="manage-cost-details-csi-service" || request()->segment(1)=="manage-other-cost-details-csi-service" || request()->segment(1)=="manage-employment-record-csi-service" || request()->segment(1)=="manage-training-record-csi-service" ) open @endif ">

                                <a style="font-size:10px;" href="#" class="waves-effect dropdown-toggle @if(request()->segment(1)=="manage-service-csi-service" || request()->segment(1)=="manage-sales-domestic" || request()->segment(1)=="sales-market-csi-service" || request()->segment(1)=="raw-material-csi-service" || request()->segment(1)=="manage-cost-details-csi-service" || request()->segment(1)=="manage-other-cost-details-csi-service" || request()->segment(1)=="manage-employment-record-csi-service" || request()->segment(1)=="manage-training-record-csi-service" ) subdrop @endif" data-toggle="dropdown">
                                <i class="fa fa-bar-chart" aria-hidden="true"></i><span> CSI Service (Half Yearly) </span><span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu sub_menu" @if(request()->segment(1)=="manage-service-csi-service" || request()->segment(1)=="manage-sales-domestic" || request()->segment(1)=="sales-market-csi-service" || request()->segment(1)=="raw-material-csi-service" || request()->segment(1)=="manage-cost-details-csi-service" || request()->segment(1)=="manage-other-cost-details-csi-service" || request()->segment(1)=="manage-employment-record-csi-service" || request()->segment(1)=="manage-training-record-csi-service" ) style="display:block" @endif  id="d_csi-service-half">


                                 <li><a href="{{route('manage.service.manufacture.csi-service')}}" class="waves-effect @if(Request::segment(1)=="manage-service-csi-service") active @endif"><i class="fa fa-product-hunt" aria-hidden="true" style="font-size: 13px;"></i></i><span style="font-size: 10px;">Services</span></a></li>

                                    

                                    <li><a href="{{route('manage.sales.export.csi-service')}}" class="waves-effect @if(Request::segment(1)=="sales-market-csi-service") active @endif"><i class="fa fa-cart-arrow-down" aria-hidden="true" style="font-size: 13px;"></i><span style="font-size: 10px;">Sales Made And Markets</span></a></li>

                                    <li><a href="{{route('manage.raw.material.csi-service')}}" class="waves-effect @if(Request::segment(1)=="raw-material-csi-service") active @endif"><i class="fa fa-maxcdn" aria-hidden="true" style="font-size: 13px;"></i><span style="font-size: 10px;">Manage Raw Material</span></a></li>

                                    <li><a href="{{route('manage.cost.csi-service')}}" class="waves-effect @if(Request::segment(1)=="manage-cost-details-csi-service") active @endif"><i class="fa fa-usd" aria-hidden="true" style="font-size: 13px;"></i><span style="font-size: 10px;">Manage Cost Details</span></a></li>

                                    <li><a href="{{route('manage.other.cost.other.csi-service')}}" class="waves-effect @if(Request::segment(1)=="manage-other-cost-details-csi-service") active @endif"><i class="fa fa-power-off" aria-hidden="true" style="font-size: 13px;"></i><span style="font-size: 10px;">Manage Other Costs</span></a></li>


                                    <li><a href="{{route('manage.employe.manage-employment-record-csi-service')}}" class="waves-effect @if(Request::segment(1)=="manage-employment-record-csi-service") active @endif"><i class="fa fa-user-circle" aria-hidden="true" style="font-size: 13px;"></i><span style="font-size: 10px;">Manage Employment</span></a></li>

                                    <li><a href="{{route('manage.training-csi-service')}}" class="waves-effect @if(Request::segment(1)=="manage-training-record-csi-service") active @endif"><i class="fa fa-globe" aria-hidden="true" style="font-size: 13px;"></i><span style="font-size: 10px;">Manage Training Record</span></a></li>

                                    {{-- <li><a href="{{route('manage.issues')}}" class="waves-effect @if(Request::segment(1)=="manage-issues-challenges") active @endif"><i class="fa fa-lock" aria-hidden="true" style="font-size: 13px;"></i><span style="font-size: 10px;">Issue And Challenges</span></a></li> --}}

                                    {{-- <li><a href="{{route('manage.half.yearly.submission')}}" class="waves-effect @if(Request::segment(1)=="manage-half-yearly-submission") active @endif"><i class="fa fa-hand-o-right" aria-hidden="true" style="font-size: 13px;"></i><span style="font-size: 10px;">Submission Page</span></a></li> --}}

                        </ul>
            </li>






            <li data-id = "csi-service-yearly" class="dropdown  dropdown_lef @if(request()->segment(1)=="manage-service-csi-service-yearly" || request()->segment(1)=="manage-sales-domestic-yearly" || request()->segment(1)=="sales-market-csi-yearly" || request()->segment(1)=="raw-material-csi-service-yearly" || request()->segment(1)=="manage-cost-details-csi-service-yearly" || request()->segment(1)=="manage-other-cost-details-csi-service-yearly" || request()->segment(1)=="manage-employment-record-csi-service-yearly" || request()->segment(1)=="manage-other-information-csi-service-yearly" || request()->segment(1)=="manage-financial-information-csi-service-yearly" || request()->segment(1)=="manage-training-record-csi-service-yearly" || request()->segment(1)=="manage-revenue-csi-service-yearly") open @endif ">

                                <a style="font-size:10px;" href="#" class="waves-effect dropdown-toggle @if(request()->segment(1)=="manage-service-csi-service-yearly" || request()->segment(1)=="manage-sales-domestic-yearly" || request()->segment(1)=="sales-market-csi-yearly" || request()->segment(1)=="raw-material-csi-service-yearly" || request()->segment(1)=="manage-cost-details-csi-service-yearly" || request()->segment(1)=="manage-other-cost-details-csi-service-yearly"|| request()->segment(1)=="manage-employment-record-csi-service-yearly" || request()->segment(1)=="manage-other-information-csi-service-yearly" || request()->segment(1)=="manage-financial-information-csi-service-yearly" || request()->segment(1)=="manage-training-record-csi-service-yearly" || request()->segment(1)=="manage-revenue-csi-service-yearly") subdrop @endif" data-toggle="dropdown">
                                <i class="fa fa-balance-scale" aria-hidden="true"></i><span> CSI Service (Yearly) </span><span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu sub_menu" @if(request()->segment(1)=="manage-service-csi-service-yearly" || request()->segment(1)=="manage-sales-domestic-yearly" || request()->segment(1)=="sales-market-csi-yearly" || request()->segment(1)=="raw-material-csi-service-yearly" || request()->segment(1)=="manage-cost-details-csi-service-yearly" || request()->segment(1)=="manage-other-cost-details-csi-service-yearly"|| request()->segment(1)=="manage-employment-record-csi-service-yearly" || request()->segment(1)=="manage-other-information-csi-service-yearly" || request()->segment(1)=="manage-financial-information-csi-service-yearly" || request()->segment(1)=="manage-training-record-csi-service-yearly" || request()->segment(1)=="manage-revenue-csi-service-yearly") style="display:block" @endif   id="d_csi-service-yearly">


                                 <li><a href="{{route('manage.service.manufacture.csi-service.yearly')}}" class="waves-effect @if(Request::segment(1)=="manage-service-csi-service-yearly") active @endif"><i class="fa fa-product-hunt" aria-hidden="true" style="font-size: 13px;"></i></i><span style="font-size: 10px;">Services</span></a></li>

                                    {{-- <li><a href="{{route('manage.sales.domestic.yearly')}}" class="waves-effect @if(Request::segment(1)=="manage-sales-domestic-yearly") active @endif"><i class="fa fa-balance-scale" aria-hidden="true" style="font-size: 13px;"></i><span style="font-size: 10px;">Sales Made And Markets (Domestic)</span></a></li> --}}

                                    <li><a href="{{route('manage.sales.export.csi-service.yearly')}}" class="waves-effect @if(Request::segment(1)=="sales-market-csi-yearly") active @endif"><i class="fa fa-cart-arrow-down" aria-hidden="true" style="font-size: 13px;"></i><span style="font-size: 10px;">Sales Made And Markets</span></a></li>

                                    <li><a href="{{route('manage.raw.material.csi-service.yearly')}}" class="waves-effect @if(Request::segment(1)=="raw-material-csi-service-yearly") active @endif"><i class="fa fa-maxcdn" aria-hidden="true" style="font-size: 13px;"></i><span style="font-size: 10px;">Manage Raw Material</span></a></li>

                                     <li><a href="{{route('manage.cost.csi-service.yearly')}}" class="waves-effect @if(Request::segment(1)=="manage-cost-details-csi-service-yearly") active @endif"><i class="fa fa-money" aria-hidden="true" style="font-size: 13px;"></i><span style="font-size: 10px;">Manage Cost Details</span></a></li>


                                    

                                    <li><a href="{{route('manage.other.cost.other.csi-service.yearly')}}" class="waves-effect @if(Request::segment(1)=="manage-other-cost-details-csi-service-yearly") active @endif"><i class="fa fa-power-off" aria-hidden="true" style="font-size: 13px;"></i><span style="font-size: 10px;">Manage Other Cost</span></a></li>


                                    <li><a href="{{route('manage.employe.manage-employment-record-csi-service-yearly')}}" class="waves-effect @if(Request::segment(1)=="manage-employment-record-csi-pam-fdi-yearly") active @endif"><i class="fa fa-user-circle" aria-hidden="true" style="font-size: 13px;"></i><span style="font-size: 10px;">Manage Employment</span></a></li>

                                    <li><a href="{{route('manage.training-csi-service.yearly')}}" class="waves-effect @if(Request::segment(1)=="manage-training-record-csi-service-yearly") active @endif"><i class="fa fa-globe" aria-hidden="true" style="font-size: 13px;"></i><span style="font-size: 10px;">Manage Training Record</span></a></li>

                                    

                                    <li><a href="{{route('manage.financemanage-financial-information-csi-service-yearly')}}" class="waves-effect @if(Request::segment(1)=="manage-financial-information-csi-service-yearly") active @endif"><i class="fa fa-usd" aria-hidden="true" style="font-size: 13px;"></i><span style="font-size: 10px;">Manage Finance</span></a></li>

                                   


                                    <li><a href="{{route('manage.other-csi-service-yearly')}}" class="waves-effect @if(Request::segment(1)=="manage-revenue-csi-service-yearly") active @endif"><i class="fa fa-lock" aria-hidden="true" style="font-size: 13px;"></i><span style="font-size: 10px;">Manage Revenue</span></a></li>

                                    <li><a href="{{route('manage.revenue.manage-revenue-csi-service-yearly')}}" class="waves-effect @if(Request::segment(1)=="manage-other-information-csi-service-yearly") active @endif"><i class="fa fa-window-restore" aria-hidden="true" style="font-size: 13px;"></i><span style="font-size: 10px;">Other Information</span></a></li>

                                    {{-- <li><a href="{{route('manage.yearly.submission')}}" class="waves-effect @if(Request::segment(1)=="manage-yearly-submission") active @endif"><i class="fa fa-hand-o-right" aria-hidden="true" style="font-size: 13px;"></i><span style="font-size: 10px;">Submission Page</span></a></li> --}}

                        </ul>
            </li>






            <li data-id = "ml_domestic_service" class="dropdown  dropdown_lef @if(request()->segment(1)=="manage-service-ml-domestic-service" || request()->segment(1)=="manage-sales-domestic" || request()->segment(1)=="sales-ml-domestic-service" || request()->segment(1)=="raw-material-ml-domestic-service" || request()->segment(1)=="manage-cost-details-ml-domestic-service" || request()->segment(1)=="manage-employment-record-ml-domestic-service" || request()->segment(1)=="manage-training-record-ml-domestic-service" ) open @endif ">

                                <a style="font-size:10px;" href="#" class="waves-effect dropdown-toggle @if(request()->segment(1)=="manage-service-ml-domestic-service" || request()->segment(1)=="manage-sales-domestic" || request()->segment(1)=="sales-ml-domestic-service" || request()->segment(1)=="raw-material-ml-domestic-service" || request()->segment(1)=="manage-cost-details-ml-domestic-service" || request()->segment(1)=="manage-other-cost-details-csi-service" || request()->segment(1)=="manage-employment-record-ml-domestic-service" || request()->segment(1)=="manage-training-record-ml-domestic-service") subdrop @endif" data-toggle="dropdown">
                                <i class="fa fa-bar-chart" aria-hidden="true"></i><span> ML Domestic Service (Half Yearly) </span><span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu sub_menu" @if(request()->segment(1)=="manage-service-ml-domestic-service" || request()->segment(1)=="manage-sales-domestic" || request()->segment(1)=="sales-ml-domestic-service" || request()->segment(1)=="raw-material-ml-domestic-service" || request()->segment(1)=="manage-cost-details-ml-domestic-service" || request()->segment(1)=="manage-other-cost-details-csi-service" || request()->segment(1)=="manage-employment-record-ml-domestic-service" || request()->segment(1)=="manage-training-record-ml-domestic-service") style="display:block" @endif  id="d_ml_domestic_service">


                                 <li><a href="{{route('manage.service.manufacture.ml-domestic-service')}}" class="waves-effect @if(Request::segment(1)=="manage-service-ml-domestic-service") active @endif"><i class="fa fa-product-hunt" aria-hidden="true" style="font-size: 13px;"></i></i><span style="font-size: 10px;">Services</span></a></li>

                                    

                                    <li><a href="{{route('manage.sales.export.ml-domestic-service')}}" class="waves-effect @if(Request::segment(1)=="sales-ml-domestic-service") active @endif"><i class="fa fa-cart-arrow-down" aria-hidden="true" style="font-size: 13px;"></i><span style="font-size: 10px;">Sales Made And Markets</span></a></li>

                                    <li><a href="{{route('manage.raw.material.ml-domestic-service')}}" class="waves-effect @if(Request::segment(1)=="raw-material-ml-domestic-service") active @endif"><i class="fa fa-maxcdn" aria-hidden="true" style="font-size: 13px;"></i><span style="font-size: 10px;">Manage Raw Material</span></a></li>

                                    <li><a href="{{route('manage.cost.ml-domestic-service')}}" class="waves-effect @if(Request::segment(1)=="manage-cost-details-ml-domestic-service") active @endif"><i class="fa fa-usd" aria-hidden="true" style="font-size: 13px;"></i><span style="font-size: 10px;">Manage Cost Details</span></a></li>

                                   


                                    <li><a href="{{route('manage.employe.manage-employment-record-ml-domestic-service')}}" class="waves-effect @if(Request::segment(1)=="manage-employment-record-ml-domestic-service") active @endif"><i class="fa fa-user-circle" aria-hidden="true" style="font-size: 13px;"></i><span style="font-size: 10px;">Manage Employment</span></a></li>

                                    <li><a href="{{route('manage.training-ml-domestic-service')}}" class="waves-effect @if(Request::segment(1)=="manage-training-record-ml-domestic-service") active @endif"><i class="fa fa-globe" aria-hidden="true" style="font-size: 13px;"></i><span style="font-size: 10px;">Manage Training Record</span></a></li>

                                    

                        </ul>
            </li>





            <li data-id = "ml-domestic-service-yearly" class="dropdown  dropdown_lef @if(request()->segment(1)=="manage-service-ml-domestic-service-yearly" || request()->segment(1)=="manage-sales-domestic-yearly" || request()->segment(1)=="sales-ml-domestic-service-yearly" || request()->segment(1)=="raw-material-ml-domestic-service-yearly" || request()->segment(1)=="manage-cost-details-ml-domestic-service-yearly"  || request()->segment(1)=="manage-employment-record-ml-domestic-service-yearly" || request()->segment(1)=="manage-training-record-ml-domestic-service-yearly" || request()->segment(1)=="manage-financial-information-ml-domestic-service-yearly" || request()->segment(1)=="manage-other-information-ml-domestic-service-yearly" || request()->segment(1)=="manage-revenue-ml-domestic-service-yearly") open @endif ">

                                <a style="font-size:10px;" href="#" class="waves-effect dropdown-toggle @if(request()->segment(1)=="manage-service-ml-domestic-service-yearly" || request()->segment(1)=="manage-sales-domestic-yearly" || request()->segment(1)=="sales-ml-domestic-service-yearly" || request()->segment(1)=="raw-material-ml-domestic-service-yearly"  || request()->segment(1)=="manage-employment-record-ml-domestic-service-yearly" || request()->segment(1)=="manage-training-record-ml-domestic-service-yearly" || request()->segment(1)=="manage-financial-information-ml-domestic-service-yearly" || request()->segment(1)=="manage-other-information-ml-domestic-service-yearly" || request()->segment(1)=="manage-revenue-ml-domestic-service-yearly") subdrop @endif" data-toggle="dropdown">
                                <i class="fa fa-balance-scale" aria-hidden="true"></i><span> ML Domestic Service (Yearly) </span><span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu sub_menu" @if(request()->segment(1)=="manage-service-ml-domestic-service-yearly" || request()->segment(1)=="manage-sales-domestic-yearly" || request()->segment(1)=="sales-ml-domestic-service-yearly" || request()->segment(1)=="raw-material-ml-domestic-service-yearly" || request()->segment(1)=="manage-cost-details-ml-domestic-service-yearly" || request()->segment(1)=="manage-employment-record-ml-domestic-service-yearly" || request()->segment(1)=="manage-training-record-ml-domestic-service-yearly" || request()->segment(1)=="manage-financial-information-ml-domestic-service-yearly" || request()->segment(1)=="manage-other-information-ml-domestic-service-yearly" || request()->segment(1)=="manage-revenue-ml-domestic-service-yearly") style="display:block" @endif   id="d_ml-domestic-service-yearly">


                                 <li><a href="{{route('manage.service.manufacture.ml-domestic-service.yearly')}}" class="waves-effect @if(Request::segment(1)=="manage-service-ml-domestic-service-yearly") active @endif"><i class="fa fa-product-hunt" aria-hidden="true" style="font-size: 13px;"></i></i><span style="font-size: 10px;">Services</span></a></li>

                                    {{-- <li><a href="{{route('manage.sales.domestic.yearly')}}" class="waves-effect @if(Request::segment(1)=="manage-sales-domestic-yearly") active @endif"><i class="fa fa-balance-scale" aria-hidden="true" style="font-size: 13px;"></i><span style="font-size: 10px;">Sales Made And Markets (Domestic)</span></a></li> --}}

                                    <li><a href="{{route('manage.sales.export.ml-domestic-service.yearly')}}" class="waves-effect @if(Request::segment(1)=="sales-ml-domestic-service-yearly") active @endif"><i class="fa fa-cart-arrow-down" aria-hidden="true" style="font-size: 13px;"></i><span style="font-size: 10px;">Sales Made And Markets</span></a></li>

                                    <li><a href="{{route('manage.raw.material.ml-domestic-service.yearly')}}" class="waves-effect @if(Request::segment(1)=="raw-material-ml-domestic-service-yearly") active @endif"><i class="fa fa-maxcdn" aria-hidden="true" style="font-size: 13px;"></i><span style="font-size: 10px;">Manage Raw Material</span></a></li>

                                     <li><a href="{{route('manage.cost.ml-domestic-service.yearly')}}" class="waves-effect @if(Request::segment(1)=="manage-cost-details-ml-domestic-service-yearly") active @endif"><i class="fa fa-money" aria-hidden="true" style="font-size: 13px;"></i><span style="font-size: 10px;">Manage Cost Details</span></a></li>


                                    <li><a href="{{route('manage.employe.manage-employment-record-ml-domestic-service-yearly')}}" class="waves-effect @if(Request::segment(1)=="manage-employment-record-ml-domestic-service-yearly") active @endif"><i class="fa fa-user-circle" aria-hidden="true" style="font-size: 13px;"></i><span style="font-size: 10px;">Manage Employment</span></a></li>

                                    <li><a href="{{route('manage.training-ml-domestic-service.yearly')}}" class="waves-effect @if(Request::segment(1)=="manage-training-record-ml-domestic-service-yearly") active @endif"><i class="fa fa-globe" aria-hidden="true" style="font-size: 13px;"></i><span style="font-size: 10px;">Manage Training Record</span></a></li>

                                    

                                    <li><a href="{{route('manage.financemanage-financial-information-ml-domestic-service-yearly')}}" class="waves-effect @if(Request::segment(1)=="manage-financial-information-ml-domestic-service-yearly") active @endif"><i class="fa fa-usd" aria-hidden="true" style="font-size: 13px;"></i><span style="font-size: 10px;">Manage Finance</span></a></li>

                                   


                                    <li><a href="{{route('manage.revenue.manage-revenue-ml-domestic-service-yearly')}}" class="waves-effect @if(Request::segment(1)=="manage-revenue-ml-domestic-service-yearly") active @endif"><i class="fa fa-lock" aria-hidden="true" style="font-size: 13px;"></i><span style="font-size: 10px;">Manage Revenue</span></a></li>

                                    <li><a href="{{route('manage.other-ml-domestic-service-yearly')}}" class="waves-effect @if(Request::segment(1)=="manage-other-information-ml-domestic-service-yearly") active @endif"><i class="fa fa-window-restore" aria-hidden="true" style="font-size: 13px;"></i><span style="font-size: 10px;">Other Information</span></a></li>

                                    {{-- <li><a href="{{route('manage.yearly.submission')}}" class="waves-effect @if(Request::segment(1)=="manage-yearly-submission") active @endif"><i class="fa fa-hand-o-right" aria-hidden="true" style="font-size: 13px;"></i><span style="font-size: 10px;">Submission Page</span></a></li> --}}

                        </ul>
            </li>


            {{-- csi-construction --}}
            <li data-id = "csi_construction" class="dropdown  dropdown_lef @if(request()->segment(1)=="manage-service-csi-construction" || request()->segment(1)=="manage-sales-domestic" || request()->segment(1)=="sales-market-csi-construction" || request()->segment(1)=="raw-material-csi-construction" || request()->segment(1)=="manage-cost-details-csi-construction" || request()->segment(1)=="manage-other-cost-details-csi-construction" || request()->segment(1)=="manage-employment-record-csi-construction" || request()->segment(1)=="manage-training-record-csi-construction"  ) open @endif ">

                                <a style="font-size:10px;" href="#" class="waves-effect dropdown-toggle @if(request()->segment(1)=="manage-service-csi-construction" || request()->segment(1)=="manage-sales-domestic" || request()->segment(1)=="sales-market-csi-construction" || request()->segment(1)=="raw-material-csi-construction" || request()->segment(1)=="manage-cost-details-csi-construction" || request()->segment(1)=="manage-other-cost-details-csi-construction" || request()->segment(1)=="manage-employment-record-csi-construction" || request()->segment(1)=="manage-training-record-csi-construction" ) subdrop @endif" data-toggle="dropdown">
                                <i class="fa fa-bar-chart" aria-hidden="true"></i><span> CSI Construction (Half Yearly) </span><span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu sub_menu" @if(request()->segment(1)=="manage-service-csi-construction" || request()->segment(1)=="manage-sales-domestic" || request()->segment(1)=="sales-market-csi-construction" || request()->segment(1)=="raw-material-csi-construction" || request()->segment(1)=="manage-cost-details-csi-construction" || request()->segment(1)=="manage-other-cost-details-csi-construction" || request()->segment(1)=="manage-employment-record-csi-construction" || request()->segment(1)=="manage-training-record-csi-construction" ) style="display:block" @endif  id="d_csi_construction">


                                 <li><a href="{{route('manage.service.manufacture.csi-construction')}}" class="waves-effect @if(Request::segment(1)=="manage-service-csi-construction") active @endif"><i class="fa fa-product-hunt" aria-hidden="true" style="font-size: 13px;"></i></i><span style="font-size: 10px;">Production And Manufacture</span></a></li>

                                    {{-- <li><a href="{{route('manage.sales.domestic')}}" class="waves-effect @if(Request::segment(1)=="manage-sales-domestic") active @endif"><i class="fa fa-balance-scale" aria-hidden="true" style="font-size: 13px;"></i><span style="font-size: 10px;">Sales Made And Markets (Domestic)</span></a></li> --}}

                                    <li><a href="{{route('manage.sales.export.csi-construction')}}" class="waves-effect @if(Request::segment(1)=="sales-market-csi-construction") active @endif"><i class="fa fa-cart-arrow-down" aria-hidden="true" style="font-size: 13px;"></i><span style="font-size: 10px;">Sales Made And Markets</span></a></li>

                                    <li><a href="{{route('manage.raw.material.csi-construction')}}" class="waves-effect @if(Request::segment(1)=="raw-material-csi-construction") active @endif"><i class="fa fa-maxcdn" aria-hidden="true" style="font-size: 13px;"></i><span style="font-size: 10px;">Manage Raw Material</span></a></li>

                                    <li><a href="{{route('manage.cost.csi-construction')}}" class="waves-effect @if(Request::segment(1)=="manage-cost-details-csi-construction") active @endif"><i class="fa fa-usd" aria-hidden="true" style="font-size: 13px;"></i><span style="font-size: 10px;">Manage Cost Details</span></a></li>

                                    <li><a href="{{route('manage.other.cost.other.csi-construction')}}" class="waves-effect @if(Request::segment(1)=="manage-other-cost-details-csi-construction") active @endif"><i class="fa fa-power-off" aria-hidden="true" style="font-size: 13px;"></i><span style="font-size: 10px;">Manage Other Costs</span></a></li>


                                    <li><a href="{{route('manage.employe.manage-employment-record-csi-construction')}}" class="waves-effect @if(Request::segment(1)=="manage-employment-record-csi-construction") active @endif"><i class="fa fa-user-circle" aria-hidden="true" style="font-size: 13px;"></i><span style="font-size: 10px;">Manage Employment</span></a></li>

                                    <li><a href="{{route('manage.training-csi-construction')}}" class="waves-effect @if(Request::segment(1)=="manage-training-record-csi-construction") active @endif"><i class="fa fa-globe" aria-hidden="true" style="font-size: 13px;"></i><span style="font-size: 10px;">Manage Training Record</span></a></li>

                                    {{-- <li><a href="{{route('manage.issues')}}" class="waves-effect @if(Request::segment(1)=="manage-issues-challenges") active @endif"><i class="fa fa-lock" aria-hidden="true" style="font-size: 13px;"></i><span style="font-size: 10px;">Issue And Challenges</span></a></li> --}}

                                    {{-- <li><a href="{{route('manage.half.yearly.submission')}}" class="waves-effect @if(Request::segment(1)=="manage-half-yearly-submission") active @endif"><i class="fa fa-hand-o-right" aria-hidden="true" style="font-size: 13px;"></i><span style="font-size: 10px;">Submission Page</span></a></li> --}}

                        </ul>
            </li>




            <li data-id = "csi_construction_yearly" class="dropdown  dropdown_lef @if(request()->segment(1)=="manage-service-csi-construction-yearly"  || request()->segment(1)=="sales-market-csi-construction-yearly" || request()->segment(1)=="raw-material-csi-construction-yearly" || request()->segment(1)=="manage-financial-information-csi-construction-yearly" || request()->segment(1)=="manage-other-information-csi-construction-yearly" || request()->segment(1)=="manage-cost-details-csi-construction-yearly" || request()->segment(1)=="manage-other-cost-details-csi-construction-yearly" || request()->segment(1)=="manage-employment-record-csi-construction-yearly" || request()->segment(1)=="manage-training-record-csi-construction-yearly" || request()->segment(1)=="manage-revenue-csi-construction-yearly") open @endif ">

                                <a style="font-size:10px;" href="#" class="waves-effect dropdown-toggle @if(request()->segment(1)=="manage-service-csi-construction-yearly"  || request()->segment(1)=="sales-market-csi-construction-yearly" || request()->segment(1)=="raw-material-csi-construction-yearly" || request()->segment(1)=="manage-financial-information-csi-construction-yearly" || request()->segment(1)=="manage-other-information-csi-construction-yearly"|| request()->segment(1)=="manage-cost-details-csi-construction-yearly" || request()->segment(1)=="manage-other-cost-details-csi-construction-yearly" || request()->segment(1)=="manage-employment-record-csi-construction-yearly" || request()->segment(1)=="manage-training-record-csi-construction-yearly" || request()->segment(1)=="manage-revenue-csi-construction-yearly") subdrop @endif" data-toggle="dropdown">
                                <i class="fa fa-balance-scale" aria-hidden="true"></i><span> CSI Construction (Yearly) </span><span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu sub_menu" @if(request()->segment(1)=="manage-service-csi-construction-yearly"  || request()->segment(1)=="sales-market-csi-construction-yearly" || request()->segment(1)=="raw-material-csi-construction-yearly" || request()->segment(1)=="manage-financial-information-csi-construction-yearly" || request()->segment(1)=="manage-other-information-csi-construction-yearly"|| request()->segment(1)=="manage-cost-details-csi-construction-yearly" || request()->segment(1)=="manage-other-cost-details-csi-construction-yearly" || request()->segment(1)=="manage-employment-record-csi-construction-yearly" || request()->segment(1)=="manage-training-record-csi-construction-yearly" || request()->segment(1)=="manage-revenue-csi-construction-yearly") style="display:block" @endif   id="d_csi_construction_yearly">


                                 <li><a href="{{route('manage.service.manufacture.csi-construction.yearly')}}" class="waves-effect @if(Request::segment(1)=="manage-service-csi-construction-yearly") active @endif"><i class="fa fa-product-hunt" aria-hidden="true" style="font-size: 13px;"></i></i><span style="font-size: 10px;">Production And Manufacture</span></a></li>

                                    {{-- <li><a href="{{route('manage.sales.domestic.yearly')}}" class="waves-effect @if(Request::segment(1)=="manage-sales-domestic-yearly") active @endif"><i class="fa fa-balance-scale" aria-hidden="true" style="font-size: 13px;"></i><span style="font-size: 10px;">Sales Made And Markets (Domestic)</span></a></li> --}}

                                    <li><a href="{{route('manage.sales.export.csi-construction.yearly')}}" class="waves-effect @if(Request::segment(1)=="sales-market-csi-construction-yearly") active @endif"><i class="fa fa-cart-arrow-down" aria-hidden="true" style="font-size: 13px;"></i><span style="font-size: 10px;">Sales Made And Markets</span></a></li>

                                    <li><a href="{{route('manage.raw.material.csi-construction.yearly')}}" class="waves-effect @if(Request::segment(1)=="raw-material-csi-construction-yearly") active @endif"><i class="fa fa-maxcdn" aria-hidden="true" style="font-size: 13px;"></i><span style="font-size: 10px;">Manage Raw Material</span></a></li>


                                    <li><a href="{{route('manage.cost.csi-construction.yearly')}}" class="waves-effect @if(Request::segment(1)=="manage-cost-details-csi-construction-yearly") active @endif"><i class="fa fa-usd" aria-hidden="true" style="font-size: 13px;"></i><span style="font-size: 10px;">Manage Cost Details</span></a></li>

                                    <li><a href="{{route('manage.other.cost.other.csi-construction.yearly')}}" class="waves-effect @if(Request::segment(1)=="manage-other-cost-details-csi-construction-yearly") active @endif"><i class="fa fa-power-off" aria-hidden="true" style="font-size: 13px;"></i><span style="font-size: 10px;">Manage Other Cost</span></a></li>


                                    <li><a href="{{route('manage.employe.manage-employment-record-csi-construction-yearly')}}" class="waves-effect @if(Request::segment(1)=="manage-employment-record-csi-construction-yearly") active @endif"><i class="fa fa-user-circle" aria-hidden="true" style="font-size: 13px;"></i><span style="font-size: 10px;">Manage Employment</span></a></li>

                                    <li><a href="{{route('manage.training-csi-construction.yearly')}}" class="waves-effect @if(Request::segment(1)=="manage-training-record-csi-construction-yearly") active @endif"><i class="fa fa-globe" aria-hidden="true" style="font-size: 13px;"></i><span style="font-size: 10px;">Manage Training Record</span></a></li>

                                    

                                    

                                    <li><a href="{{route('manage.financemanage-financial-information-csi-construction-yearly')}}" class="waves-effect @if(Request::segment(1)=="manage-financial-information-csi-construction-yearly") active @endif"><i class="fa fa-money" aria-hidden="true" style="font-size: 13px;"></i><span style="font-size: 10px;">Financial Information</span></a></li>


                                    <li><a href="{{route('manage.revenue.manage-revenue-csi-construction-yearly')}}" class="waves-effect @if(Request::segment(1)=="manage-revenue-csi-construction-yearly") active @endif"><i class="fa fa-lock" aria-hidden="true" style="font-size: 13px;"></i><span style="font-size: 10px;">Manage Revenue</span></a></li>

                                    <li><a href="{{route('manage.other-csi-construction-yearly')}}" class="waves-effect @if(Request::segment(1)=="manage-other-information-csi-construction-yearly") active @endif"><i class="fa fa-window-restore" aria-hidden="true" style="font-size: 13px;"></i><span style="font-size: 10px;">Other Information</span></a></li>

                                    {{-- <li><a href="{{route('manage.yearly.submission')}}" class="waves-effect @if(Request::segment(1)=="manage-yearly-submission") active @endif"><i class="fa fa-hand-o-right" aria-hidden="true" style="font-size: 13px;"></i><span style="font-size: 10px;">Submission Page</span></a></li> --}}

                        </ul>
            </li>




            <li data-id = "ml-domestic-construction" class="dropdown  dropdown_lef @if(request()->segment(1)=="manage-service-ml-domestic-construction"  || request()->segment(1)=="sales-ml-domestic-construction" || request()->segment(1)=="raw-material-ml-domestic-construction" || request()->segment(1)=="manage-cost-details-ml-domestic-construction"  || request()->segment(1)=="manage-employment-record-ml-domestic-construction" || request()->segment(1)=="manage-training-record-ml-domestic-construction") open @endif ">

                                <a style="font-size:10px;" href="#" class="waves-effect dropdown-toggle @if(request()->segment(1)=="manage-service-ml-domestic-construction"  || request()->segment(1)=="sales-ml-domestic-construction" || request()->segment(1)=="raw-material-ml-domestic-construction" || request()->segment(1)=="manage-cost-details-ml-domestic-construction"  || request()->segment(1)=="manage-employment-record-ml-domestic-construction") subdrop @endif" data-toggle="dropdown">
                                <i class="fa fa-modx" aria-hidden="true"></i><span> M&L Domestic Construction(Half Yearly) </span><span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu sub_menu" @if(request()->segment(1)=="manage-service-ml-domestic-construction"  || request()->segment(1)=="sales-ml-domestic-construction" || request()->segment(1)=="raw-material-ml-domestic-construction" || request()->segment(1)=="manage-cost-details-ml-domestic-construction"  || request()->segment(1)=="manage-employment-record-ml-domestic-construction" || request()->segment(1)=="manage-training-record-ml-domestic-construction") style="display:block" @endif  id="d_ml-domestic-construction">


                                 <li><a href="{{route('manage.service.manufacture.ml-domestic-construction')}}" class="waves-effect @if(Request::segment(1)=="manage-service-ml-domestic-construction") active @endif"><i class="fa fa-product-hunt" aria-hidden="true" style="font-size: 13px;"></i></i><span style="font-size: 10px;">Production And Manufacture</span></a></li>

                                    

                                    <li><a href="{{route('manage.sales.export.ml-domestic-construction')}}" class="waves-effect @if(Request::segment(1)=="sales-ml-domestic-construction") active @endif"><i class="fa fa-cart-arrow-down" aria-hidden="true" style="font-size: 13px;"></i><span style="font-size: 10px;">Sales Made And Markets (Export)</span></a></li>

                                    <li><a href="{{route('manage.raw.material.ml-domestic-construction')}}" class="waves-effect @if(Request::segment(1)=="raw-material-ml-domestic-construction") active @endif"><i class="fa fa-maxcdn" aria-hidden="true" style="font-size: 13px;"></i><span style="font-size: 10px;">Manage Raw Material</span></a></li>

                                    <li><a href="{{route('manage.cost.ml-domestic-construction')}}" class="waves-effect @if(Request::segment(1)=="manage-cost-details-ml-domestic-construction") active @endif"><i class="fa fa-usd" aria-hidden="true" style="font-size: 13px;"></i><span style="font-size: 10px;">Utility Cost</span></a></li>

                                    


                                    <li><a href="{{route('manage.employe.manage-employment-record-ml-domestic-construction')}}" class="waves-effect @if(Request::segment(1)=="manage-employment-record-ml-domestic-construction") active @endif"><i class="fa fa-user-circle" aria-hidden="true" style="font-size: 13px;"></i><span style="font-size: 10px;">Manage Employment</span></a></li>

                                    <li><a href="{{route('manage.training-ml-domestic-construction')}}" class="waves-effect @if(Request::segment(1)=="manage-training-record-ml-domestic-construction") active @endif"><i class="fa fa-globe" aria-hidden="true" style="font-size: 13px;"></i><span style="font-size: 10px;">Manage Training Record</span></a></li>

                                    

                        </ul>
            </li>



            <li data-id = "ml_domestic_construction_yearly" class="dropdown  dropdown_lef @if(request()->segment(1)=="manage-service-ml-domestic-construction-yearly"  || request()->segment(1)=="sales-ml-domestic-construction-yearly" || request()->segment(1)=="raw-material-ml-domestic-construction-yearly" || request()->segment(1)=="manage-financial-information-ml-domestic-construction-yearly" || request()->segment(1)=="manage-other-information-ml-domestic-construction-yearly" || request()->segment(1)=="manage-cost-details-ml-domestic-construction-yearly"  || request()->segment(1)=="manage-employment-record-ml-domestic-construction-yearly" || request()->segment(1)=="manage-training-record-ml-domestic-construction-yearly" || request()->segment(1)=="ml-pam-fdi-issues-yearly" || request()->segment(1)=="manage-revenue-ml-domestic-construction-yearly" ) open @endif ">

                                <a style="font-size:10px;" href="#" class="waves-effect dropdown-toggle @if(request()->segment(1)=="manage-service-ml-domestic-construction-yearly"  || request()->segment(1)=="sales-ml-domestic-construction-yearly" || request()->segment(1)=="raw-material-ml-domestic-construction-yearly" || request()->segment(1)=="manage-financial-information-ml-domestic-construction-yearly" || request()->segment(1)=="manage-other-information-ml-domestic-construction-yearly"|| request()->segment(1)=="manage-cost-details-ml-domestic-construction-yearly"  || request()->segment(1)=="manage-employment-record-ml-domestic-construction-yearly" || request()->segment(1)=="manage-training-record-ml-domestic-construction-yearly" || request()->segment(1)=="ml-pam-fdi-issues-yearly"|| request()->segment(1)=="manage-revenue-ml-domestic-construction-yearly") subdrop @endif" data-toggle="dropdown">
                                <i class="fa fa-balance-scale" aria-hidden="true"></i><span> M&L Domestic Construction (Yearly) </span><span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu sub_menu" @if(request()->segment(1)=="manage-service-ml-domestic-construction-yearly"  || request()->segment(1)=="sales-ml-domestic-construction-yearly" || request()->segment(1)=="raw-material-ml-domestic-construction-yearly" || request()->segment(1)=="manage-financial-information-ml-domestic-construction-yearly" || request()->segment(1)=="manage-other-information-ml-domestic-construction-yearly"|| request()->segment(1)=="manage-cost-details-ml-domestic-construction-yearly"  || request()->segment(1)=="manage-employment-record-ml-domestic-construction-yearly" || request()->segment(1)=="manage-training-record-ml-domestic-construction-yearly" || request()->segment(1)=="ml-pam-fdi-issues-yearly"|| request()->segment(1)=="manage-revenue-ml-domestic-construction-yearly") style="display:block" @endif   id="d_ml_domestic_construction_yearly">


                                 <li><a href="{{route('manage.service.manufacture.ml-domestic-construction.yearly')}}" class="waves-effect @if(Request::segment(1)=="manage-service-ml-domestic-construction-yearly") active @endif"><i class="fa fa-product-hunt" aria-hidden="true" style="font-size: 13px;"></i></i><span style="font-size: 10px;">Production And Manufacture</span></a></li>

                                    
                                    <li><a href="{{route('manage.sales.export.ml-domestic-construction.yearly')}}" class="waves-effect @if(Request::segment(1)=="sales-ml-domestic-construction-yearly") active @endif"><i class="fa fa-cart-arrow-down" aria-hidden="true" style="font-size: 13px;"></i><span style="font-size: 10px;">Sales Made And Markets (Export)</span></a></li>

                                    <li><a href="{{route('manage.raw.material.ml-domestic-construction.yearly')}}" class="waves-effect @if(Request::segment(1)=="raw-material-ml-domestic-construction-yearly") active @endif"><i class="fa fa-maxcdn" aria-hidden="true" style="font-size: 13px;"></i><span style="font-size: 10px;">Manage Raw Material</span></a></li>


                                    <li><a href="{{route('manage.cost.ml-domestic-construction.yearly')}}" class="waves-effect @if(Request::segment(1)=="manage-cost-details-ml-domestic-construction-yearly") active @endif"><i class="fa fa-usd" aria-hidden="true" style="font-size: 13px;"></i><span style="font-size: 10px;">Utility Cost</span></a></li>

                                    


                                    <li><a href="{{route('manage.employe.manage-employment-record-ml-domestic-construction-yearly')}}" class="waves-effect @if(Request::segment(1)=="manage-employment-record-ml-domestic-construction-yearly") active @endif"><i class="fa fa-user-circle" aria-hidden="true" style="font-size: 13px;"></i><span style="font-size: 10px;">Manage Employment</span></a></li>

                                    <li><a href="{{route('manage.training-ml-domestic-construction.yearly')}}" class="waves-effect @if(Request::segment(1)=="manage-training-record-ml-domestic-construction-yearly") active @endif"><i class="fa fa-globe" aria-hidden="true" style="font-size: 13px;"></i><span style="font-size: 10px;">Manage Training Record</span></a></li>

                                    
                                    

                                    

                                    <li><a href="{{route('manage.financemanage-financial-information-ml-domestic-construction-yearly')}}" class="waves-effect @if(Request::segment(1)=="manage-financial-information-ml-domestic-construction-yearly") active @endif"><i class="fa fa-money" aria-hidden="true" style="font-size: 13px;"></i><span style="font-size: 10px;">Financial Information</span></a></li>

                                    <li><a href="{{route('manage.revenue.manage-revenue-ml-domestic-construction-yearly')}}" class="waves-effect @if(Request::segment(1)=="manage-revenue-ml-domestic-construction-yearly") active @endif"><i class="fa fa-lock" aria-hidden="true" style="font-size: 13px;"></i><span style="font-size: 10px;">Manage Revenue</span></a></li>

                                    

                                    <li><a href="{{route('manage.other-ml-domestic-construction-yearly')}}" class="waves-effect @if(Request::segment(1)=="manage-other-information-ml-domestic-construction-yearly") active @endif"><i class="fa fa-window-restore" aria-hidden="true" style="font-size: 13px;"></i><span style="font-size: 10px;">Other Information</span></a></li>

                                    {{-- <li><a href="{{route('manage.yearly.submission')}}" class="waves-effect @if(Request::segment(1)=="manage-yearly-submission") active @endif"><i class="fa fa-hand-o-right" aria-hidden="true" style="font-size: 13px;"></i><span style="font-size: 10px;">Submission Page</span></a></li> --}}

                        </ul>
            </li>



            <li data-id = "csi_construction_fdi" class="dropdown  dropdown_lef @if(request()->segment(1)=="manage-service-csi-construction-fdi"  || request()->segment(1)=="sales-market-csi-construction-fdi" || request()->segment(1)=="raw-material-csi-construction-fdi" || request()->segment(1)=="manage-cost-details-csi-construction-fdi" || request()->segment(1)=="manage-other-cost-details-csi-construction-fdi" || request()->segment(1)=="manage-employment-record-csi-construction-fdi" || request()->segment(1)=="manage-training-record-csi-construction-fdi"  ) open @endif ">

                                <a style="font-size:10px;" href="#" class="waves-effect dropdown-toggle @if(request()->segment(1)=="manage-service-csi-construction-fdi"  || request()->segment(1)=="sales-market-csi-construction-fdi" || request()->segment(1)=="raw-material-csi-construction-fdi" || request()->segment(1)=="manage-cost-details-csi-construction-fdi" || request()->segment(1)=="manage-other-cost-details-csi-construction-fdi" || request()->segment(1)=="manage-employment-record-csi-construction-fdi" || request()->segment(1)=="manage-training-record-csi-construction-fdi" ) subdrop @endif" data-toggle="dropdown">
                                <i class="fa fa-bar-chart" aria-hidden="true"></i><span> CSI Construction Fdi (Half Yearly) </span><span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu sub_menu" @if(request()->segment(1)=="manage-service-csi-construction-fdi"  || request()->segment(1)=="sales-market-csi-construction-fdi" || request()->segment(1)=="raw-material-csi-construction-fdi" || request()->segment(1)=="manage-cost-details-csi-construction-fdi" || request()->segment(1)=="manage-other-cost-details-csi-construction-fdi" || request()->segment(1)=="manage-employment-record-csi-construction-fdi" || request()->segment(1)=="manage-training-record-csi-construction-fdi" ) style="display:block" @endif  id="d_csi_construction_fdi">


                                 <li><a href="{{route('manage.service.manufacture.csi-construction-fdi')}}" class="waves-effect @if(Request::segment(1)=="manage-service-csi-construction-fdi") active @endif"><i class="fa fa-product-hunt" aria-hidden="true" style="font-size: 13px;"></i></i><span style="font-size: 10px;">Production And Manufacture</span></a></li>

                                    {{-- <li><a href="{{route('manage.sales.domestic')}}" class="waves-effect @if(Request::segment(1)=="manage-sales-domestic") active @endif"><i class="fa fa-balance-scale" aria-hidden="true" style="font-size: 13px;"></i><span style="font-size: 10px;">Sales Made And Markets (Domestic)</span></a></li> --}}

                                    <li><a href="{{route('manage.sales.export.csi-construction-fdi')}}" class="waves-effect @if(Request::segment(1)=="sales-market-csi-construction-fdi") active @endif"><i class="fa fa-cart-arrow-down" aria-hidden="true" style="font-size: 13px;"></i><span style="font-size: 10px;">Sales Made And Markets</span></a></li>

                                    <li><a href="{{route('manage.raw.material.csi-construction-fdi')}}" class="waves-effect @if(Request::segment(1)=="raw-material-csi-construction-fdi") active @endif"><i class="fa fa-maxcdn" aria-hidden="true" style="font-size: 13px;"></i><span style="font-size: 10px;">Manage Raw Material</span></a></li>

                                    <li><a href="{{route('manage.cost.csi-construction-fdi')}}" class="waves-effect @if(Request::segment(1)=="manage-cost-details-csi-construction-fdi") active @endif"><i class="fa fa-usd" aria-hidden="true" style="font-size: 13px;"></i><span style="font-size: 10px;">Manage Cost Details</span></a></li>

                                    <li><a href="{{route('manage.other.cost.other.csi-construction-fdi')}}" class="waves-effect @if(Request::segment(1)=="manage-other-cost-details-csi-construction-fdi") active @endif"><i class="fa fa-power-off" aria-hidden="true" style="font-size: 13px;"></i><span style="font-size: 10px;">Manage Other Costs</span></a></li>


                                    <li><a href="{{route('manage.employe.manage-employment-record-csi-construction-fdi')}}" class="waves-effect @if(Request::segment(1)=="manage-employment-record-csi-construction-fdi") active @endif"><i class="fa fa-user-circle" aria-hidden="true" style="font-size: 13px;"></i><span style="font-size: 10px;">Manage Employment</span></a></li>

                                    <li><a href="{{route('manage.training-csi-construction-fdi')}}" class="waves-effect @if(Request::segment(1)=="manage-training-record-csi-construction-fdi") active @endif"><i class="fa fa-globe" aria-hidden="true" style="font-size: 13px;"></i><span style="font-size: 10px;">Manage Training Record</span></a></li>

                                    {{-- <li><a href="{{route('manage.issues')}}" class="waves-effect @if(Request::segment(1)=="manage-issues-challenges") active @endif"><i class="fa fa-lock" aria-hidden="true" style="font-size: 13px;"></i><span style="font-size: 10px;">Issue And Challenges</span></a></li> --}}

                                    {{-- <li><a href="{{route('manage.half.yearly.submission')}}" class="waves-effect @if(Request::segment(1)=="manage-half-yearly-submission") active @endif"><i class="fa fa-hand-o-right" aria-hidden="true" style="font-size: 13px;"></i><span style="font-size: 10px;">Submission Page</span></a></li> --}}

                        </ul>
            </li>



            <li data-id = "csi-construction-fdi-yearly" class="dropdown  dropdown_lef @if(request()->segment(1)=="manage-service-csi-construction-fdi-yearly"  || request()->segment(1)=="sales-market-csi-construction-fdi-yearly" || request()->segment(1)=="raw-material-csi-construction-fdi-yearly" || request()->segment(1)=="manage-cost-details-csi-construction-fdi-yearly" || request()->segment(1)=="manage-other-cost-details-csi-construction-fdi-yearly" || request()->segment(1)=="manage-financial-information-csi-construction-fdi-yearly" || request()->segment(1)=="manage-other-information-csi-construction-fdi-yearly" || request()->segment(1)=="manage-employment-record-csi-construction-fdi-yearly" || request()->segment(1)=="manage-training-record-csi-construction-fdi-yearly" || request()->segment(1)=="manage-revenue-csi-construction-fdi-yearly") open @endif ">

                                <a style="font-size:10px;" href="#" class="waves-effect dropdown-toggle @if(request()->segment(1)=="manage-service-csi-construction-fdi-yearly"  || request()->segment(1)=="sales-market-csi-construction-fdi-yearly" || request()->segment(1)=="raw-material-csi-construction-fdi-yearly" || request()->segment(1)=="manage-cost-details-csi-construction-fdi-yearly" || request()->segment(1)=="manage-other-cost-details-csi-construction-fdi-yearly"|| request()->segment(1)=="manage-financial-information-csi-construction-fdi-yearly" || request()->segment(1)=="manage-other-information-csi-construction-fdi-yearly" || request()->segment(1)=="manage-employment-record-csi-construction-fdi-yearly" || request()->segment(1)=="manage-training-record-csi-construction-fdi-yearly" || request()->segment(1)=="manage-revenue-csi-construction-fdi-yearly") subdrop @endif" data-toggle="dropdown">
                                <i class="fa fa-balance-scale" aria-hidden="true"></i><span> CSI Construction Fdi (Yearly) </span><span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu sub_menu" @if(request()->segment(1)=="manage-service-csi-construction-fdi-yearly"  || request()->segment(1)=="sales-market-csi-construction-fdi-yearly" || request()->segment(1)=="raw-material-csi-construction-fdi-yearly" || request()->segment(1)=="manage-cost-details-csi-construction-fdi-yearly" || request()->segment(1)=="manage-other-cost-details-csi-construction-fdi-yearly"|| request()->segment(1)=="manage-financial-information-csi-construction-fdi-yearly" || request()->segment(1)=="manage-other-information-csi-construction-fdi-yearly" || request()->segment(1)=="manage-employment-record-csi-construction-fdi-yearly" || request()->segment(1)=="manage-training-record-csi-construction-fdi-yearly" || request()->segment(1)=="manage-revenue-csi-construction-fdi-yearly") style="display:block" @endif   id="d_csi-construction-fdi-yearly">


                                 <li><a href="{{route('manage.service.manufacture.csi-construction-fdi.yearly')}}" class="waves-effect @if(Request::segment(1)=="manage-service-csi-construction-fdi-yearly") active @endif"><i class="fa fa-product-hunt" aria-hidden="true" style="font-size: 13px;"></i></i><span style="font-size: 10px;">Production And Manufacture</span></a></li>

                                    {{-- <li><a href="{{route('manage.sales.domestic.yearly')}}" class="waves-effect @if(Request::segment(1)=="manage-sales-domestic-yearly") active @endif"><i class="fa fa-balance-scale" aria-hidden="true" style="font-size: 13px;"></i><span style="font-size: 10px;">Sales Made And Markets (Domestic)</span></a></li> --}}

                                    <li><a href="{{route('manage.sales.export.csi-construction-fdi.yearly')}}" class="waves-effect @if(Request::segment(1)=="sales-market-csi-construction-fdi-yearly") active @endif"><i class="fa fa-cart-arrow-down" aria-hidden="true" style="font-size: 13px;"></i><span style="font-size: 10px;">Sales Made And Markets</span></a></li>

                                    <li><a href="{{route('manage.raw.material.csi-construction-fdi.yearly')}}" class="waves-effect @if(Request::segment(1)=="raw-material-csi-construction-fdi-yearly") active @endif"><i class="fa fa-maxcdn" aria-hidden="true" style="font-size: 13px;"></i><span style="font-size: 10px;">Manage Raw Material</span></a></li>

                                     <li><a href="{{route('manage.cost.csi-construction-fdi.yearly')}}" class="waves-effect @if(Request::segment(1)=="manage-cost-details-csi-construction-fdi-yearly") active @endif"><i class="fa fa-money" aria-hidden="true" style="font-size: 13px;"></i><span style="font-size: 10px;">Manage Cost Details</span></a></li>


                                    

                                    <li><a href="{{route('manage.other.cost.other.csi-construction-fdi.yearly')}}" class="waves-effect @if(Request::segment(1)=="manage-other-cost-details-csi-construction-fdi-yearly") active @endif"><i class="fa fa-power-off" aria-hidden="true" style="font-size: 13px;"></i><span style="font-size: 10px;">Manage Other Cost</span></a></li>


                                    <li><a href="{{route('manage.employe.manage-employment-record-csi-construction-fdi-yearly')}}" class="waves-effect @if(Request::segment(1)=="manage-employment-record-csi-construction-fdi-yearly") active @endif"><i class="fa fa-user-circle" aria-hidden="true" style="font-size: 13px;"></i><span style="font-size: 10px;">Manage Employment</span></a></li>

                                    <li><a href="{{route('manage.training-csi-construction-fdi.yearly')}}" class="waves-effect @if(Request::segment(1)=="manage-training-record-csi-construction-fdi-yearly") active @endif"><i class="fa fa-globe" aria-hidden="true" style="font-size: 13px;"></i><span style="font-size: 10px;">Manage Training Record</span></a></li>

                                    

                                    <li><a href="{{route('manage.financemanage-financial-information-csi-construction-fdi-yearly')}}" class="waves-effect @if(Request::segment(1)=="manage-financial-information-csi-construction-fdi-yearly") active @endif"><i class="fa fa-usd" aria-hidden="true" style="font-size: 13px;"></i><span style="font-size: 10px;">Manage Finance</span></a></li>

                                   


                                    <li><a href="{{route('manage.revenue.manage-revenue-csi-construction-fdi-yearly')}}" class="waves-effect @if(Request::segment(1)=="manage-revenue-csi-construction-fdi-yearly") active @endif"><i class="fa fa-lock" aria-hidden="true" style="font-size: 13px;"></i><span style="font-size: 10px;">Manage Revenue</span></a></li>

                                    <li><a href="{{route('manage.other-manage-other-information-csi-construction-fdi-yearly')}}" class="waves-effect @if(Request::segment(1)=="manage-other-information-csi-construction-fdi-yearly") active @endif"><i class="fa fa-window-restore" aria-hidden="true" style="font-size: 13px;"></i><span style="font-size: 10px;">Other Information</span></a></li>

                                    {{-- <li><a href="{{route('manage.yearly.submission')}}" class="waves-effect @if(Request::segment(1)=="manage-yearly-submission") active @endif"><i class="fa fa-hand-o-right" aria-hidden="true" style="font-size: 13px;"></i><span style="font-size: 10px;">Submission Page</span></a></li> --}}

                        </ul>
            </li>



            <li data-id = "ml-construction-fdi" class="dropdown  dropdown_lef @if(request()->segment(1)=="manage-service-ml-construction-fdi"  || request()->segment(1)=="sales-ml-construction-fdi" || request()->segment(1)=="raw-material-ml-construction-fdi" || request()->segment(1)=="manage-cost-details-ml-construction-fdi"  || request()->segment(1)=="manage-employment-record-ml-construction-fdi" || request()->segment(1)=="manage-training-record-ml-construction-fdi") open @endif ">

                                <a style="font-size:10px;" href="#" class="waves-effect dropdown-toggle @if(request()->segment(1)=="manage-service-ml-construction-fdi"  || request()->segment(1)=="sales-ml-construction-fdi" || request()->segment(1)=="raw-material-ml-construction-fdi" || request()->segment(1)=="manage-cost-details-ml-construction-fdi"  || request()->segment(1)=="manage-employment-record-ml-construction-fdi" || request()->segment(1)=="manage-training-record-ml-construction-fdi") subdrop @endif" data-toggle="dropdown">
                                <i class="fa fa-modx" aria-hidden="true"></i><span> M&L Construction Fdi(Half Yearly) </span><span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu sub_menu" @if(request()->segment(1)=="manage-service-ml-construction-fdi"  || request()->segment(1)=="sales-ml-construction-fdi" || request()->segment(1)=="raw-material-ml-construction-fdi" || request()->segment(1)=="manage-cost-details-ml-construction-fdi"  || request()->segment(1)=="manage-employment-record-ml-construction-fdi" || request()->segment(1)=="manage-training-record-ml-construction-fdi") style="display:block" @endif  id="d_ml-construction-fdi">


                                 <li><a href="{{route('manage.service.manufacture.ml-construction-fdi')}}" class="waves-effect @if(Request::segment(1)=="manage-service-ml-construction-fdi") active @endif"><i class="fa fa-product-hunt" aria-hidden="true" style="font-size: 13px;"></i></i><span style="font-size: 10px;">Production And Manufacture</span></a></li>

                                    

                                    <li><a href="{{route('manage.sales.export.ml-construction-fdi')}}" class="waves-effect @if(Request::segment(1)=="sales-ml-construction-fdi") active @endif"><i class="fa fa-cart-arrow-down" aria-hidden="true" style="font-size: 13px;"></i><span style="font-size: 10px;">Sales Made And Markets</span></a></li>

                                    <li><a href="{{route('manage.raw.material.ml-construction-fdi')}}" class="waves-effect @if(Request::segment(1)=="raw-material-ml-construction-fdi") active @endif"><i class="fa fa-maxcdn" aria-hidden="true" style="font-size: 13px;"></i><span style="font-size: 10px;">Manage Raw Material</span></a></li>

                                    <li><a href="{{route('manage.cost.ml-construction-fdi')}}" class="waves-effect @if(Request::segment(1)=="manage-cost-details-ml-construction-fdi") active @endif"><i class="fa fa-usd" aria-hidden="true" style="font-size: 13px;"></i><span style="font-size: 10px;">Utility Cost</span></a></li>

                                    


                                    <li><a href="{{route('manage.employe.manage-employment-record-ml-construction-fdi')}}" class="waves-effect @if(Request::segment(1)=="manage-employment-record-ml-construction-fdi") active @endif"><i class="fa fa-user-circle" aria-hidden="true" style="font-size: 13px;"></i><span style="font-size: 10px;">Manage Employment</span></a></li>

                                    <li><a href="{{route('manage.training-ml-construction-fdi')}}" class="waves-effect @if(Request::segment(1)=="manage-training-record-ml-construction-fdi") active @endif"><i class="fa fa-globe" aria-hidden="true" style="font-size: 13px;"></i><span style="font-size: 10px;">Manage Training Record</span></a></li>

                                    

                        </ul>
            </li>


            <li data-id = "ml-construction-fdi-yearly" class="dropdown  dropdown_lef @if(request()->segment(1)=="manage-service-ml-construction-fdi-yearly"  || request()->segment(1)=="sales-ml-construction-fdi-yearly" || request()->segment(1)=="raw-material-ml-construction-fdi-yearly" || request()->segment(1)=="manage-financial-information-ml-construction-fdi-yearly" || request()->segment(1)=="manage-other-information-ml-construction-fdi-yearly" || request()->segment(1)=="manage-cost-details-ml-construction-fdi-yearly" || request()->segment(1)=="ml-domestic-pam-manage-power-consumption-yearly" || request()->segment(1)=="manage-employment-record-ml-construction-fdi-yearly" || request()->segment(1)=="manage-training-record-ml-construction-fdi-yearly" || request()->segment(1)=="ml-domestic-pam-issues-yearly" || request()->segment(1)=="ml-domestic-pam-manage-half-yearly-submission-yearly" || request()->segment(1)=="manage-revenue-ml-construction-fdi-yearly") open @endif ">

                                <a style="font-size:10px;" href="#" class="waves-effect dropdown-toggle @if(request()->segment(1)=="manage-service-ml-construction-fdi-yearly"  || request()->segment(1)=="sales-ml-construction-fdi-yearly" || request()->segment(1)=="raw-material-ml-construction-fdi-yearly" || request()->segment(1)=="manage-financial-information-ml-construction-fdi-yearly" || request()->segment(1)=="manage-other-information-ml-construction-fdi-yearly"|| request()->segment(1)=="manage-cost-details-ml-construction-fdi-yearly" || request()->segment(1)=="ml-domestic-pam-manage-power-consumption-yearly" || request()->segment(1)=="manage-employment-record-ml-construction-fdi-yearly" || request()->segment(1)=="manage-training-record-ml-construction-fdi-yearly" || request()->segment(1)=="ml-domestic-pam-issues-yearly" || request()->segment(1)=="ml-domestic-pam-manage-half-yearly-submission-yearly" || request()->segment(1)=="manage-revenue-ml-construction-fdi-yearly") subdrop @endif" data-toggle="dropdown">
                                <i class="fa fa-map-signs" aria-hidden="true"></i><span> M&L Construction Fdi (Yearly) </span><span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu sub_menu" @if(request()->segment(1)=="manage-service-ml-construction-fdi-yearly"  || request()->segment(1)=="sales-ml-construction-fdi-yearly" || request()->segment(1)=="raw-material-ml-construction-fdi-yearly" || request()->segment(1)=="manage-financial-information-ml-construction-fdi-yearly" || request()->segment(1)=="manage-other-information-ml-construction-fdi-yearly"|| request()->segment(1)=="manage-cost-details-ml-construction-fdi-yearly" || request()->segment(1)=="ml-domestic-pam-manage-power-consumption-yearly" || request()->segment(1)=="manage-employment-record-ml-construction-fdi-yearly" || request()->segment(1)=="manage-training-record-ml-construction-fdi-yearly" || request()->segment(1)=="ml-domestic-pam-issues-yearly" || request()->segment(1)=="ml-domestic-pam-manage-half-yearly-submission-yearly" || request()->segment(1)=="manage-revenue-ml-construction-fdi-yearly") style="display:block" @endif   id="d_ml-construction-fdi-yearly">


                                 <li><a href="{{route('manage.service.manufacture.ml-construction-fdi.yearly')}}" class="waves-effect @if(Request::segment(1)=="manage-service-ml-construction-fdi-yearly") active @endif"><i class="fa fa-product-hunt" aria-hidden="true" style="font-size: 13px;"></i></i><span style="font-size: 10px;">Production And Manufacture</span></a></li>

                                    

                                    <li><a href="{{route('manage.sales.export.ml-construction-fdi.yearly')}}" class="waves-effect @if(Request::segment(1)=="sales-ml-construction-fdi-yearly") active @endif"><i class="fa fa-cart-arrow-down" aria-hidden="true" style="font-size: 13px;"></i><span style="font-size: 10px;">Sales Made And Markets</span></a></li>

                                    <li><a href="{{route('manage.raw.material.ml-construction-fdi.yearly')}}" class="waves-effect @if(Request::segment(1)=="raw-material-ml-construction-fdi-yearly") active @endif"><i class="fa fa-maxcdn" aria-hidden="true" style="font-size: 13px;"></i><span style="font-size: 10px;">Manage Raw Material</span></a></li>


                                    <li><a href="{{route('manage.cost.ml-construction-fdi.yearly')}}" class="waves-effect @if(Request::segment(1)=="manage-cost-details-ml-construction-fdi-yearly") active @endif"><i class="fa fa-usd" aria-hidden="true" style="font-size: 13px;"></i><span style="font-size: 10px;">Utility Cost</span></a></li>

                                    


                                    <li><a href="{{route('manage.employe.manage-employment-record-ml-construction-fdi-yearly')}}" class="waves-effect @if(Request::segment(1)=="manage-employment-record-ml-construction-fdi-yearly") active @endif"><i class="fa fa-user-circle" aria-hidden="true" style="font-size: 13px;"></i><span style="font-size: 10px;">Manage Employment</span></a></li>

                                    <li><a href="{{route('manage.training-ml-construction-fdi.yearly')}}" class="waves-effect @if(Request::segment(1)=="manage-training-record-ml-construction-fdi-yearly") active @endif"><i class="fa fa-globe" aria-hidden="true" style="font-size: 13px;"></i><span style="font-size: 10px;">Manage Training Record</span></a></li>

                                   

                                    

                                    <li><a href="{{route('manage.financemanage-financial-information-ml-construction-fdi-yearly')}}" class="waves-effect @if(Request::segment(1)=="manage-financial-information-ml-construction-fdi-yearly") active @endif"><i class="fa fa-money" aria-hidden="true" style="font-size: 13px;"></i><span style="font-size: 10px;">Financial Information</span></a></li>

                                    <li><a href="{{route('manage.revenue.manage-revenue-ml-construction-fdi-yearly')}}" class="waves-effect @if(Request::segment(1)=="manage-revenue-ml-construction-fdi-yearly") active @endif"><i class="fa fa-lock" aria-hidden="true" style="font-size: 13px;"></i><span style="font-size: 10px;">Manage Revenue</span></a></li>

                                    <li><a href="{{route('manage.other-ml-construction-fdi-yearly')}}" class="waves-effect @if(Request::segment(1)=="manage-other-information-ml-construction-fdi-yearly") active @endif"><i class="fa fa-window-restore" aria-hidden="true" style="font-size: 13px;"></i><span style="font-size: 10px;">Other Information</span></a></li>

                                    {{-- <li><a href="{{route('manage.half.yearly.submission.ml.pam.domestic.yearly')}}" class="waves-effect @if(Request::segment(1)=="ml-domestic-pam-manage-half-yearly-submission-yearly") active @endif"><i class="fa fa-hand-o-right" aria-hidden="true" style="font-size: 13px;"></i><span style="font-size: 10px;">Submission Page</span></a></li> --}}

                        </ul>
            </li>




            <li data-id = "ml-services-fdi" class="dropdown  dropdown_lef @if(request()->segment(1)=="manage-service-ml-services-fdi"  || request()->segment(1)=="sales-ml-services-fdi" || request()->segment(1)=="raw-material-ml-services-fdi" || request()->segment(1)=="manage-cost-details-ml-domestic-construction"  || request()->segment(1)=="manage-employment-record-ml-services-fdi" || request()->segment(1)=="manage-training-record-ml-services-fdi") open @endif ">

                                <a style="font-size:10px;" href="#" class="waves-effect dropdown-toggle @if(request()->segment(1)=="manage-service-ml-services-fdi"  || request()->segment(1)=="sales-ml-services-fdi" || request()->segment(1)=="raw-material-ml-services-fdi" || request()->segment(1)=="manage-cost-details-ml-domestic-construction"  || request()->segment(1)=="manage-employment-record-ml-services-fdi" || request()->segment(1)=="manage-training-record-ml-services-fdi") subdrop @endif" data-toggle="dropdown">
                                <i class="fa fa-modx" aria-hidden="true"></i><span> M&L Services Fdi (Half Yearly) </span><span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu sub_menu" @if(request()->segment(1)=="manage-service-ml-services-fdi"  || request()->segment(1)=="sales-ml-services-fdi" || request()->segment(1)=="raw-material-ml-services-fdi" || request()->segment(1)=="manage-cost-details-ml-domestic-construction"  || request()->segment(1)=="manage-employment-record-ml-services-fdi" || request()->segment(1)=="manage-training-record-ml-services-fdi") style="display:block" @endif  id="d_ml-services-fdi">


                                 <li><a href="{{route('manage.service.manufacture.ml-services-fdi')}}" class="waves-effect @if(Request::segment(1)=="manage-service-ml-services-fdi") active @endif"><i class="fa fa-product-hunt" aria-hidden="true" style="font-size: 13px;"></i></i><span style="font-size: 10px;">Production And Manufacture</span></a></li>

                                    

                                    <li><a href="{{route('manage.sales.export.ml-services-fdi')}}" class="waves-effect @if(Request::segment(1)=="sales-ml-services-fdi") active @endif"><i class="fa fa-cart-arrow-down" aria-hidden="true" style="font-size: 13px;"></i><span style="font-size: 10px;">Sales Made And Markets (Export)</span></a></li>

                                    <li><a href="{{route('manage.raw.material.ml-services-fdi')}}" class="waves-effect @if(Request::segment(1)=="raw-material-ml-services-fdi") active @endif"><i class="fa fa-maxcdn" aria-hidden="true" style="font-size: 13px;"></i><span style="font-size: 10px;">Manage Raw Material</span></a></li>

                                    <li><a href="{{route('manage.cost.ml-services-fdi')}}" class="waves-effect @if(Request::segment(1)=="manage-cost-details-ml-domestic-construction") active @endif"><i class="fa fa-usd" aria-hidden="true" style="font-size: 13px;"></i><span style="font-size: 10px;">Utility Cost</span></a></li>

                                    


                                    <li><a href="{{route('manage.employe.manage-employment-record-ml-services-fdi')}}" class="waves-effect @if(Request::segment(1)=="manage-employment-record-ml-services-fdi") active @endif"><i class="fa fa-user-circle" aria-hidden="true" style="font-size: 13px;"></i><span style="font-size: 10px;">Manage Employment</span></a></li>

                                    <li><a href="{{route('manage.training-ml-services-fdi')}}" class="waves-effect @if(Request::segment(1)=="manage-training-record-ml-services-fdi") active @endif"><i class="fa fa-globe" aria-hidden="true" style="font-size: 13px;"></i><span style="font-size: 10px;">Manage Training Record</span></a></li>

                                    

                        </ul>
            </li>



                        <li data-id = "ml_services_fdi_yearly" class="dropdown  dropdown_lef @if(request()->segment(1)=="manage-service-ml-services-fdi-yearly"  || request()->segment(1)=="sales-ml-services-fdi-yearly" || request()->segment(1)=="raw-material-ml-services-fdi-yearly" || request()->segment(1)=="manage-financial-information-ml-services-fdi-yearly" || request()->segment(1)=="manage-other-information-ml-services-fdi-yearly" || request()->segment(1)=="manage-cost-details-ml-services-fdi-yearly"  || request()->segment(1)=="manage-employment-record-ml-services-fdi-yearly" || request()->segment(1)=="manage-training-record-ml-services-fdi-yearly" || request()->segment(1)=="ml-pam-fdi-issues-yearly" || request()->segment(1)=="manage-revenue-ml-services-fdi-yearly" ) open @endif ">

                                <a style="font-size:10px;" href="#" class="waves-effect dropdown-toggle @if(request()->segment(1)=="manage-service-ml-services-fdi-yearly"  || request()->segment(1)=="sales-ml-services-fdi-yearly" || request()->segment(1)=="raw-material-ml-services-fdi-yearly" || request()->segment(1)=="manage-financial-information-ml-services-fdi-yearly" || request()->segment(1)=="manage-other-information-ml-services-fdi-yearly"|| request()->segment(1)=="manage-cost-details-ml-services-fdi-yearly"  || request()->segment(1)=="manage-employment-record-ml-services-fdi-yearly" || request()->segment(1)=="manage-training-record-ml-services-fdi-yearly" || request()->segment(1)=="ml-pam-fdi-issues-yearly"|| request()->segment(1)=="manage-revenue-ml-services-fdi-yearly") subdrop @endif" data-toggle="dropdown">
                                <i class="fa fa-balance-scale" aria-hidden="true"></i><span> M&L Services Fdi (Yearly) </span><span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu sub_menu" @if(request()->segment(1)=="manage-service-ml-services-fdi-yearly"  || request()->segment(1)=="sales-ml-services-fdi-yearly" || request()->segment(1)=="raw-material-ml-services-fdi-yearly" || request()->segment(1)=="manage-financial-information-ml-services-fdi-yearly" || request()->segment(1)=="manage-other-information-ml-services-fdi-yearly"|| request()->segment(1)=="manage-cost-details-ml-services-fdi-yearly"  || request()->segment(1)=="manage-employment-record-ml-services-fdi-yearly" || request()->segment(1)=="manage-training-record-ml-services-fdi-yearly" || request()->segment(1)=="ml-pam-fdi-issues-yearly"|| request()->segment(1)=="manage-revenue-ml-services-fdi-yearly") style="display:block" @endif   id="d_ml_services_fdi_yearly">


                                 <li><a href="{{route('manage.service.manufacture.ml-services-fdi.yearly')}}" class="waves-effect @if(Request::segment(1)=="manage-service-ml-services-fdi-yearly") active @endif"><i class="fa fa-product-hunt" aria-hidden="true" style="font-size: 13px;"></i></i><span style="font-size: 10px;">Production And Manufacture</span></a></li>

                                    
                                    <li><a href="{{route('manage.sales.export.ml-services-fdi.yearly')}}" class="waves-effect @if(Request::segment(1)=="sales-ml-services-fdi-yearly") active @endif"><i class="fa fa-cart-arrow-down" aria-hidden="true" style="font-size: 13px;"></i><span style="font-size: 10px;">Sales Made And Markets (Export)</span></a></li>

                                    <li><a href="{{route('manage.raw.material.ml-services-fdi.yearly')}}" class="waves-effect @if(Request::segment(1)=="raw-material-ml-services-fdi-yearly") active @endif"><i class="fa fa-maxcdn" aria-hidden="true" style="font-size: 13px;"></i><span style="font-size: 10px;">Manage Raw Material</span></a></li>


                                    <li><a href="{{route('manage.cost.ml-services-fdi.yearly')}}" class="waves-effect @if(Request::segment(1)=="manage-cost-details-ml-services-fdi-yearly") active @endif"><i class="fa fa-usd" aria-hidden="true" style="font-size: 13px;"></i><span style="font-size: 10px;">Utility Cost</span></a></li>

                                    


                                    <li><a href="{{route('manage.employe.manage-employment-record-ml-services-fdi-yearly')}}" class="waves-effect @if(Request::segment(1)=="manage-employment-record-ml-services-fdi-yearly") active @endif"><i class="fa fa-user-circle" aria-hidden="true" style="font-size: 13px;"></i><span style="font-size: 10px;">Manage Employment</span></a></li>

                                    <li><a href="{{route('manage.training-ml-services-fdi.yearly')}}" class="waves-effect @if(Request::segment(1)=="manage-training-record-ml-services-fdi-yearly") active @endif"><i class="fa fa-globe" aria-hidden="true" style="font-size: 13px;"></i><span style="font-size: 10px;">Manage Training Record</span></a></li>

                                    
                                    

                                    

                                    <li><a href="{{route('manage.financemanage-financial-information-ml-services-fdi-yearly')}}" class="waves-effect @if(Request::segment(1)=="manage-financial-information-ml-services-fdi-yearly") active @endif"><i class="fa fa-money" aria-hidden="true" style="font-size: 13px;"></i><span style="font-size: 10px;">Financial Information</span></a></li>

                                    <li><a href="{{route('manage.financemanage-financial-information-ml-services-fdi-yearly')}}" class="waves-effect @if(Request::segment(1)=="manage-revenue-ml-services-fdi-yearly") active @endif"><i class="fa fa-lock" aria-hidden="true" style="font-size: 13px;"></i><span style="font-size: 10px;">Manage Revenue</span></a></li>

                                    

                                    <li><a href="{{route('manage.other-ml-services-fdi-yearly')}}" class="waves-effect @if(Request::segment(1)=="manage-other-information-ml-services-fdi-yearly") active @endif"><i class="fa fa-window-restore" aria-hidden="true" style="font-size: 13px;"></i><span style="font-size: 10px;">Other Information</span></a></li>

                                    {{-- <li><a href="{{route('manage.yearly.submission')}}" class="waves-effect @if(Request::segment(1)=="manage-yearly-submission") active @endif"><i class="fa fa-hand-o-right" aria-hidden="true" style="font-size: 13px;"></i><span style="font-size: 10px;">Submission Page</span></a></li> --}}

                        </ul>
            </li>




            <li data-id = "csi-fdi-services" class="dropdown  dropdown_lef @if(request()->segment(1)=="manage-service-csi-service-fdi"  || request()->segment(1)=="sales-market-csi-service-fdi" || request()->segment(1)=="raw-material-csi-service-fdi" || request()->segment(1)=="manage-cost-details-csi-service-fdi" || request()->segment(1)=="manage-other-cost-details-csi-service-fdi" || request()->segment(1)=="manage-employment-record-csi-service-fdi" || request()->segment(1)=="manage-training-record-csi-service-fdi" ) open @endif ">

                                <a style="font-size:10px;" href="#" class="waves-effect dropdown-toggle @if(request()->segment(1)=="manage-service-csi-service-fdi"  || request()->segment(1)=="sales-market-csi-service-fdi" || request()->segment(1)=="raw-material-csi-service-fdi" || request()->segment(1)=="manage-cost-details-csi-service-fdi" || request()->segment(1)=="manage-other-cost-details-csi-service-fdi" || request()->segment(1)=="manage-employment-record-csi-service-fdi" || request()->segment(1)=="manage-training-record-csi-service-fdi" ) subdrop @endif" data-toggle="dropdown">
                                <i class="fa fa-bar-chart" aria-hidden="true"></i><span> CSI FDI Services(Half Yearly) </span><span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu sub_menu" @if(request()->segment(1)=="manage-service-csi-service-fdi"  || request()->segment(1)=="sales-market-csi-service-fdi" || request()->segment(1)=="raw-material-csi-service-fdi" || request()->segment(1)=="manage-cost-details-csi-service-fdi" || request()->segment(1)=="manage-other-cost-details-csi-service-fdi" || request()->segment(1)=="manage-employment-record-csi-service-fdi" || request()->segment(1)=="manage-training-record-csi-service-fdi" ) style="display:block" @endif  id="d_csi-fdi-services">


                                 <li><a href="{{route('manage.service.manufacture.csi-service-fdi')}}" class="waves-effect @if(Request::segment(1)=="manage-service-csi-service-fdi") active @endif"><i class="fa fa-product-hunt" aria-hidden="true" style="font-size: 13px;"></i></i><span style="font-size: 10px;">Production And Manufacture</span></a></li>

                                    {{-- <li><a href="{{route('manage.sales.domestic')}}" class="waves-effect @if(Request::segment(1)=="manage-sales-domestic") active @endif"><i class="fa fa-balance-scale" aria-hidden="true" style="font-size: 13px;"></i><span style="font-size: 10px;">Sales Made And Markets (Domestic)</span></a></li> --}}

                                    <li><a href="{{route('manage.sales.export.csi-service-fdi')}}" class="waves-effect @if(Request::segment(1)=="sales-market-csi-service-fdi") active @endif"><i class="fa fa-cart-arrow-down" aria-hidden="true" style="font-size: 13px;"></i><span style="font-size: 10px;">Sales Made And Markets</span></a></li>

                                    <li><a href="{{route('manage.raw.material.csi-service-fdi')}}" class="waves-effect @if(Request::segment(1)=="raw-material-csi-service-fdi") active @endif"><i class="fa fa-maxcdn" aria-hidden="true" style="font-size: 13px;"></i><span style="font-size: 10px;">Manage Raw Material</span></a></li>

                                    <li><a href="{{route('manage.cost.csi-service-fdi')}}" class="waves-effect @if(Request::segment(1)=="manage-cost-details-csi-service-fdi") active @endif"><i class="fa fa-usd" aria-hidden="true" style="font-size: 13px;"></i><span style="font-size: 10px;">Manage Cost Details</span></a></li>

                                    <li><a href="{{route('manage.other.cost.other.csi-service-fdi')}}" class="waves-effect @if(Request::segment(1)=="manage-other-cost-details-csi-service-fdi") active @endif"><i class="fa fa-power-off" aria-hidden="true" style="font-size: 13px;"></i><span style="font-size: 10px;">Manage Other Costs</span></a></li>


                                    <li><a href="{{route('manage.employe.manage-employment-record-csi-service-fdi')}}" class="waves-effect @if(Request::segment(1)=="manage-employment-record-csi-service-fdi") active @endif"><i class="fa fa-user-circle" aria-hidden="true" style="font-size: 13px;"></i><span style="font-size: 10px;">Manage Employment</span></a></li>

                                    <li><a href="{{route('manage.training-csi-service-fdi')}}" class="waves-effect @if(Request::segment(1)=="manage-training-record-csi-service-fdi") active @endif"><i class="fa fa-globe" aria-hidden="true" style="font-size: 13px;"></i><span style="font-size: 10px;">Manage Training Record</span></a></li>

                                    {{-- <li><a href="{{route('manage.issues')}}" class="waves-effect @if(Request::segment(1)=="manage-issues-challenges") active @endif"><i class="fa fa-lock" aria-hidden="true" style="font-size: 13px;"></i><span style="font-size: 10px;">Issue And Challenges</span></a></li> --}}

                                    {{-- <li><a href="{{route('manage.half.yearly.submission')}}" class="waves-effect @if(Request::segment(1)=="manage-half-yearly-submission") active @endif"><i class="fa fa-hand-o-right" aria-hidden="true" style="font-size: 13px;"></i><span style="font-size: 10px;">Submission Page</span></a></li> --}}

                        </ul>
            </li>



            <li data-id = "csi-fdi-services" class="dropdown  dropdown_lef @if(request()->segment(1)=="manage-service-csi-service-fdi-yearly"  || request()->segment(1)=="sales-market-csi-service-fdi-yearly" || request()->segment(1)=="raw-material-csi-service-fdi-yearly" || request()->segment(1)=="manage-cost-details-csi-service-fdi-yearly" || request()->segment(1)=="manage-other-cost-details-csi-service-fdi-yearly" || request()->segment(1)=="manage-financial-information-csi-service-fdi-yearly" || request()->segment(1)=="manage-other-information-csi-service-fdi-yearly" || request()->segment(1)=="manage-employment-record--csi-service-fdi-yearly" || request()->segment(1)=="manage-training-record-csi-service-fdi-yearly" || request()->segment(1)=="manage-revenue-csi-service-fdi-yearly") open @endif ">

                                <a style="font-size:10px;" href="#" class="waves-effect dropdown-toggle @if(request()->segment(1)=="manage-service-csi-service-fdi-yearly"  || request()->segment(1)=="sales-market-csi-service-fdi-yearly" || request()->segment(1)=="raw-material-csi-service-fdi-yearly" || request()->segment(1)=="manage-cost-details-csi-service-fdi-yearly" || request()->segment(1)=="manage-other-cost-details-csi-service-fdi-yearly"|| request()->segment(1)=="manage-financial-information-csi-service-fdi-yearly" || request()->segment(1)=="manage-other-information-csi-service-fdi-yearly" || request()->segment(1)=="manage-employment-record--csi-service-fdi-yearly" || request()->segment(1)=="manage-training-record-csi-service-fdi-yearly" || request()->segment(1)=="manage-revenue-csi-service-fdi-yearly") subdrop @endif" data-toggle="dropdown">
                                <i class="fa fa-balance-scale" aria-hidden="true"></i><span> CSI FDI Services (Yearly) </span><span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu sub_menu" @if(request()->segment(1)=="manage-service-csi-service-fdi-yearly"  || request()->segment(1)=="sales-market-csi-service-fdi-yearly" || request()->segment(1)=="raw-material-csi-service-fdi-yearly" || request()->segment(1)=="manage-cost-details-csi-service-fdi-yearly" || request()->segment(1)=="manage-other-cost-details-csi-service-fdi-yearly"|| request()->segment(1)=="manage-financial-information-csi-service-fdi-yearly" || request()->segment(1)=="manage-other-information-csi-service-fdi-yearly" || request()->segment(1)=="manage-employment-record--csi-service-fdi-yearly" || request()->segment(1)=="manage-training-record-csi-service-fdi-yearly" || request()->segment(1)=="manage-revenue-csi-service-fdi-yearly") style="display:block" @endif   id="d_csi-fdi-services">


                                 <li><a href="{{route('manage.service.manufacture.csi-service-fdi.yearly')}}" class="waves-effect @if(Request::segment(1)=="manage-service-csi-service-fdi-yearly") active @endif"><i class="fa fa-product-hunt" aria-hidden="true" style="font-size: 13px;"></i></i><span style="font-size: 10px;">Production And Manufacture</span></a></li>

                                    {{-- <li><a href="{{route('manage.sales.domestic.yearly')}}" class="waves-effect @if(Request::segment(1)=="manage-sales-domestic-yearly") active @endif"><i class="fa fa-balance-scale" aria-hidden="true" style="font-size: 13px;"></i><span style="font-size: 10px;">Sales Made And Markets (Domestic)</span></a></li> --}}

                                    <li><a href="{{route('manage.sales.export.csi-service-fdi.yearly')}}" class="waves-effect @if(Request::segment(1)=="sales-market-csi-service-fdi-yearly") active @endif"><i class="fa fa-cart-arrow-down" aria-hidden="true" style="font-size: 13px;"></i><span style="font-size: 10px;">Sales Made And Markets</span></a></li>

                                    <li><a href="{{route('manage.raw.material.csi-service-fdi.yearly')}}" class="waves-effect @if(Request::segment(1)=="raw-material-csi-service-fdi-yearly") active @endif"><i class="fa fa-maxcdn" aria-hidden="true" style="font-size: 13px;"></i><span style="font-size: 10px;">Manage Raw Material</span></a></li>

                                     <li><a href="{{route('manage.cost.csi-service-fdi.yearly')}}" class="waves-effect @if(Request::segment(1)=="manage-cost-details-csi-service-fdi-yearly") active @endif"><i class="fa fa-money" aria-hidden="true" style="font-size: 13px;"></i><span style="font-size: 10px;">Manage Cost Details</span></a></li>


                                    

                                    <li><a href="{{route('manage.other.cost.other.csi-service-fdi.yearly')}}" class="waves-effect @if(Request::segment(1)=="manage-other-cost-details-csi-service-fdi-yearly") active @endif"><i class="fa fa-power-off" aria-hidden="true" style="font-size: 13px;"></i><span style="font-size: 10px;">Manage Other Cost</span></a></li>


                                    <li><a href="{{route('manage.employe.manage-employment-record--csi-service-fdi-yearly')}}" class="waves-effect @if(Request::segment(1)=="manage-employment-record--csi-service-fdi-yearly") active @endif"><i class="fa fa-user-circle" aria-hidden="true" style="font-size: 13px;"></i><span style="font-size: 10px;">Manage Employment</span></a></li>

                                    <li><a href="{{route('manage.training-csi-service-fdi.yearly')}}" class="waves-effect @if(Request::segment(1)=="manage-training-record-csi-service-fdi-yearly") active @endif"><i class="fa fa-globe" aria-hidden="true" style="font-size: 13px;"></i><span style="font-size: 10px;">Manage Training Record</span></a></li>

                                    

                                    <li><a href="{{route('manage.financemanage-financial-information-csi-service-fdi-yearly')}}" class="waves-effect @if(Request::segment(1)=="manage-financial-information-csi-service-fdi-yearly") active @endif"><i class="fa fa-usd" aria-hidden="true" style="font-size: 13px;"></i><span style="font-size: 10px;">Manage Finance</span></a></li>

                                   


                                    <li><a href="{{route('manage.revenue.manage-revenue-csi-service-fdi-yearly')}}" class="waves-effect @if(Request::segment(1)=="manage-revenue-csi-service-fdi-yearly") active @endif"><i class="fa fa-lock" aria-hidden="true" style="font-size: 13px;"></i><span style="font-size: 10px;">Manage Revenue</span></a></li>

                                    <li><a href="{{route('manage.other-csi-service-fdi-yearly')}}" class="waves-effect @if(Request::segment(1)=="manage-other-information-csi-service-fdi-yearly") active @endif"><i class="fa fa-window-restore" aria-hidden="true" style="font-size: 13px;"></i><span style="font-size: 10px;">Other Information</span></a></li>

                                    {{-- <li><a href="{{route('manage.yearly.submission')}}" class="waves-effect @if(Request::segment(1)=="manage-yearly-submission") active @endif"><i class="fa fa-hand-o-right" aria-hidden="true" style="font-size: 13px;"></i><span style="font-size: 10px;">Submission Page</span></a></li> --}}

                        </ul>
            </li>

            @endif










                                    
                                    

                            
                                

                                

                                </ul>
                                <div class="clearfix"></div>
                            </div>
                        

                
                    <div class="clearfix"></div>
                </div>
            </div>
    </nav>
</div>


