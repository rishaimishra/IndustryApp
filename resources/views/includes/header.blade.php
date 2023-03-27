<div class="topbar">
    <!-- LOGO -->
    <div class="topbar-left">
        <div class="text-center">
            {{-- <a href="#" class="logo"><img src="{{asset('public/admin/assets/images/logo.png')}}" style="height: 73px;width: 100%;"></a> --}}
        </div>
    </div>
    <a id="menu-toggle" href="#" class="btn-menu toggle">
        <i class="fa fa-bars"></i>
    </a>
    <!-- Button mobile view to collapse sidebar menu -->
    <div class="navbar navbar-default" role="navigation">
        <div class="container">
            <div class="">
                <div class="pull-left">
                    <button class="button-menu-mobile open-left">
                        {{-- <i class="fa fa-bars"></i> --}}
                    </button>
                        <p style="text-align:center;margin-left: 400px; font-weight: 800;">Ministry Of Industry,Commerce and Employment</p>
                        <p style="text-align:center;margin-left: 400px; font-weight: 800;">Department Of Industry</p>
                        <p style="text-align:center;margin-left: 400px; font-weight: 800;">Industrial Information System</p>
                    <span class="clearfix"></span>
                </div>
                <!--<form class="navbar-form pull-left" role="search">
                                <div class="form-group">
                                    <input type="text" class="form-control search-bar" placeholder="Type here for search...">
                                </div>
                                <button type="submit" class="btn btn-search"><i class="fa fa-search"></i></button>
                            </form>-->

                <ul class="nav navbar-nav navbar-right pull-right">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle profile" data-toggle="dropdown" aria-expanded="true">
                             @if(auth()->user()->image=="")
                <img src="{{ URL::to('public/admin/assets/images/users/avatar-1.jpg')}}" alt="" class="img-circle">
                @else
                <img src="{{ URL::to('storage/app/public/image')}}/{{auth()->user()->image}}" alt="" class=" img-circle">
                @endif<span style="font-weight: bold;color: white">Hi, {{auth()->user()->name}}</span>
                            </a>
                        <ul class="dropdown-menu">
                            <li><a href="{{route('profile')}}"><i class="fas fa-user-circle"></i> Profile</a></li>
                            <li><a href="{{route('change.password')}}"><i class="fas fa-cog"></i> Change Password</a></li>
                            
                            <li><a href="{{route('logout')}}"><i class="fas fa-power-off"></i> Logout</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <!--/.nav-collapse -->
        </div>
    </div>
</div>
