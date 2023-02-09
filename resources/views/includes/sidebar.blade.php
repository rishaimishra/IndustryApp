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
    overflow-y: scroll">
                <div class="sidebar-inner slimscrollleft">
                    
                    <!--- Divider -->
                    
                            <div id="sidebar-menu" style="margin-top:15px">
                                <ul class="sidebar-nav nav">

                                    
                                    <li><a href="{{route('manage.agent')}}" class="waves-effect @if(Request::segment(1)=="manage-agent") active @endif"><i class="fa fa-user-plus" aria-hidden="true" style="font-size: 13px;"></i><span style="font-size: 10px;">Agent Management</span></a></li>

                                    <li><a href="{{route('manage.industry')}}" class="waves-effect @if(Request::segment(1)=="manage-industry") active @endif"><i class="fa fa-users" aria-hidden="true" style="font-size: 13px;"></i><span style="font-size: 10px;">Industry Management</span></a></li>

                                    <li><a href="{{route('manage.industry.profile')}}" class="waves-effect @if(Request::segment(1)=="manage-industry-profile") active @endif"><i class="fa fa-user-plus" aria-hidden="true" style="font-size: 13px;"></i><span style="font-size: 10px;">Industry Profile</span></a></li>

                        


                         <li data-id = "csi-half" class="dropdown  dropdown_lef @if(request()->segment(1)=="manage-production-manufactureing" || request()->segment(1)=="manage-sales-domestic" || request()->segment(1)=="manage-sales-export" || request()->segment(1)=="manage-raw-material" || request()->segment(1)=="manage-convetible-currency" || request()->segment(1)=="manage-power-consumption" || request()->segment(1)=="manage-employment-record" || request()->segment(1)=="manage-training-record" || request()->segment(1)=="manage-issues-challenges" ) open @endif ">

                                <a href="#" class="waves-effect dropdown-toggle @if(request()->segment(1)=="manage-production-manufactureing" || request()->segment(1)=="manage-sales-domestic" || request()->segment(1)=="manage-sales-export" || request()->segment(1)=="manage-raw-material" || request()->segment(1)=="manage-convetible-currency" || request()->segment(1)=="manage-power-consumption" || request()->segment(1)=="manage-employment-record" || request()->segment(1)=="manage-training-record" || request()->segment(1)=="manage-issues-challenges" ) subdrop @endif" data-toggle="dropdown">
                                <i class="fa fa-bar-chart" aria-hidden="true"></i><span> Csi Pam (Half Yearly) </span><span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu sub_menu" @if(request()->segment(1)=="manage-production-manufactureing" || request()->segment(1)=="manage-sales-domestic" || request()->segment(1)=="manage-sales-export" || request()->segment(1)=="manage-raw-material" || request()->segment(1)=="manage-convetible-currency" || request()->segment(1)=="manage-power-consumption" || request()->segment(1)=="manage-employment-record" || request()->segment(1)=="manage-training-record" || request()->segment(1)=="manage-issues-challenges" ) style="display:block" @endif  id="d_csi-half">


                                 <li><a href="{{route('manage.production.manufacture')}}" class="waves-effect @if(Request::segment(1)=="manage-production-manufactureing") active @endif"><i class="fa fa-product-hunt" aria-hidden="true" style="font-size: 13px;"></i></i><span style="font-size: 10px;">Production And Manufacture</span></a></li>

                                    <li><a href="{{route('manage.sales.domestic')}}" class="waves-effect @if(Request::segment(1)=="manage-sales-domestic") active @endif"><i class="fa fa-balance-scale" aria-hidden="true" style="font-size: 13px;"></i><span style="font-size: 10px;">Sales Made And Markets (Domestic)</span></a></li>

                                    <li><a href="{{route('manage.sales.export')}}" class="waves-effect @if(Request::segment(1)=="manage-sales-export") active @endif"><i class="fa fa-cart-arrow-down" aria-hidden="true" style="font-size: 13px;"></i><span style="font-size: 10px;">Sales Made And Markets (Export)</span></a></li>

                                    <li><a href="{{route('manage.raw.material')}}" class="waves-effect @if(Request::segment(1)=="manage-raw-material") active @endif"><i class="fa fa-maxcdn" aria-hidden="true" style="font-size: 13px;"></i><span style="font-size: 10px;">Manage Raw Material</span></a></li>

                                    <li><a href="{{route('manage.currency')}}" class="waves-effect @if(Request::segment(1)=="manage-convetible-currency") active @endif"><i class="fa fa-usd" aria-hidden="true" style="font-size: 13px;"></i><span style="font-size: 10px;">Manage Convertible Currency</span></a></li>

                                    <li><a href="{{route('manage.power')}}" class="waves-effect @if(Request::segment(1)=="manage-power-consumption") active @endif"><i class="fa fa-power-off" aria-hidden="true" style="font-size: 13px;"></i><span style="font-size: 10px;">Manage Power Consumption</span></a></li>


                                    <li><a href="{{route('manage.employe')}}" class="waves-effect @if(Request::segment(1)=="manage-employment-record") active @endif"><i class="fa fa-user-circle" aria-hidden="true" style="font-size: 13px;"></i><span style="font-size: 10px;">Manage Employment</span></a></li>

                                    <li><a href="{{route('manage.training')}}" class="waves-effect @if(Request::segment(1)=="manage-training-record") active @endif"><i class="fa fa-globe" aria-hidden="true" style="font-size: 13px;"></i><span style="font-size: 10px;">Manage Training Record</span></a></li>

                                    <li><a href="{{route('manage.issues')}}" class="waves-effect @if(Request::segment(1)=="manage-issues-challenges") active @endif"><i class="fa fa-lock" aria-hidden="true" style="font-size: 13px;"></i><span style="font-size: 10px;">Issue And Challenges</span></a></li>

                        </ul>
            </li>






             <li data-id = "csi-full" class="dropdown  dropdown_lef @if(request()->segment(1)=="manage-production-manufactureing-yearly" || request()->segment(1)=="manage-sales-domestic-yearly" || request()->segment(1)=="manage-sales-export-yearly" || request()->segment(1)=="manage-raw-material-yearly" || request()->segment(1)=="manage-financial-information" || request()->segment(1)=="manage-other-information") open @endif ">

                                <a href="#" class="waves-effect dropdown-toggle @if(request()->segment(1)=="manage-production-manufactureing-yearly" || request()->segment(1)=="manage-sales-domestic-yearly" || request()->segment(1)=="manage-sales-export-yearly" || request()->segment(1)=="manage-raw-material-yearly" || request()->segment(1)=="manage-financial-information" || request()->segment(1)=="manage-other-information") subdrop @endif" data-toggle="dropdown">
                                <i class="fa fa-balance-scale" aria-hidden="true"></i><span> Csi Pam (Yearly) </span><span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu sub_menu" @if(request()->segment(1)=="manage-production-manufactureing-yearly" || request()->segment(1)=="manage-sales-domestic-yearly" || request()->segment(1)=="manage-sales-export-yearly" || request()->segment(1)=="manage-raw-material-yearly" || request()->segment(1)=="manage-financial-information" || request()->segment(1)=="manage-other-information") style="display:block" @endif   id="d_csi-full">


                                 <li><a href="{{route('manage.production.manufacture.yearly')}}" class="waves-effect @if(Request::segment(1)=="manage-production-manufactureing-yearly") active @endif"><i class="fa fa-product-hunt" aria-hidden="true" style="font-size: 13px;"></i></i><span style="font-size: 10px;">Production And Manufacture</span></a></li>

                                    <li><a href="{{route('manage.sales.domestic.yearly')}}" class="waves-effect @if(Request::segment(1)=="manage-sales-domestic-yearly") active @endif"><i class="fa fa-balance-scale" aria-hidden="true" style="font-size: 13px;"></i><span style="font-size: 10px;">Sales Made And Markets (Domestic)</span></a></li>

                                    <li><a href="{{route('manage.sales.export.yearly')}}" class="waves-effect @if(Request::segment(1)=="manage-sales-export-yearly") active @endif"><i class="fa fa-cart-arrow-down" aria-hidden="true" style="font-size: 13px;"></i><span style="font-size: 10px;">Sales Made And Markets (Export)</span></a></li>

                                    <li><a href="{{route('manage.raw.material.yearly')}}" class="waves-effect @if(Request::segment(1)=="manage-raw-material-yearly") active @endif"><i class="fa fa-maxcdn" aria-hidden="true" style="font-size: 13px;"></i><span style="font-size: 10px;">Manage Raw Material</span></a></li>

                                    

                                    <li><a href="{{route('manage.finance')}}" class="waves-effect @if(Request::segment(1)=="manage-financial-information") active @endif"><i class="fa fa-money" aria-hidden="true" style="font-size: 13px;"></i><span style="font-size: 10px;">Financial Information</span></a></li>

                                    <li><a href="{{route('manage.other')}}" class="waves-effect @if(Request::segment(1)=="manage-other-information") active @endif"><i class="fa fa-window-restore" aria-hidden="true" style="font-size: 13px;"></i><span style="font-size: 10px;">Other Information</span></a></li>

                        </ul>
            </li>











                                    
                                    

                            
                                

                                

                                </ul>
                                <div class="clearfix"></div>
                            </div>
                        

                
                    <div class="clearfix"></div>
                </div>
            </div>
    </nav>
</div>


