<a id="menu-toggle" href="#" class="glyphicon glyphicon-align-justify btn-menu toggle">
    <i class="fa fa-bars"></i>
</a>
<div id="sidebar-wrapper">
    <nav id="spy">
            <div class="left side-menu">
                <div class="sidebar-inner slimscrollleft">
                    
                    <!--- Divider -->
                    
                            <div id="sidebar-menu" style="margin-top:15px">
                                <ul class="sidebar-nav nav">

                                    
                                    <li><a href="{{route('manage.agent')}}" class="waves-effect @if(Request::segment(1)=="manage-agent") active @endif"><i class="fa fa-user-plus" aria-hidden="true" style="font-size: 13px;"></i><span style="font-size: 10px;">Agent Management</span></a></li>

                                    <li><a href="{{route('manage.industry')}}" class="waves-effect @if(Request::segment(1)=="manage-industry") active @endif"><i class="fa fa-users" aria-hidden="true" style="font-size: 13px;"></i><span style="font-size: 10px;">Industry Management</span></a></li>

                                    <li><a href="{{route('manage.production.manufacture')}}" class="waves-effect @if(Request::segment(1)=="manage-production-manufactureing") active @endif"><i class="fa fa-product-hunt" aria-hidden="true" style="font-size: 13px;"></i></i><span style="font-size: 10px;">Production And Manufacture</span></a></li>

                                    <li><a href="{{route('manage.sales.domestic')}}" class="waves-effect @if(Request::segment(1)=="manage-sales-domestic") active @endif"><i class="fa fa-balance-scale" aria-hidden="true" style="font-size: 13px;"></i><span style="font-size: 10px;">Sales Made And Markets (Domestic)</span></a></li>

                                    <li><a href="{{route('manage.sales.export')}}" class="waves-effect @if(Request::segment(1)=="manage-sales-export") active @endif"><i class="fa fa-cart-arrow-down" aria-hidden="true" style="font-size: 13px;"></i><span style="font-size: 10px;">Sales Made And Markets (Export)</span></a></li>

                                    <li><a href="{{route('manage.raw.material')}}" class="waves-effect @if(Request::segment(1)=="manage-raw-material") active @endif"><i class="fa fa-maxcdn" aria-hidden="true" style="font-size: 13px;"></i><span style="font-size: 10px;">Manage Raw Material</span></a></li>

                                    <li><a href="{{route('manage.currency')}}" class="waves-effect @if(Request::segment(1)=="manage-convetible-currency") active @endif"><i class="fa fa-usd" aria-hidden="true" style="font-size: 13px;"></i><span style="font-size: 10px;">Manage Convertible Currency</span></a></li>
                                    

                            
                                

                                

                                </ul>
                                <div class="clearfix"></div>
                            </div>
                        

                
                    <div class="clearfix"></div>
                </div>
            </div>
    </nav>
</div>


