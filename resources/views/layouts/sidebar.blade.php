@php
$pref = Request()->route()->getPrefix();
$type = Request()->type;
@endphp

<div class="vertical-menu">
    <div data-simplebar class="h-100">
        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title">Main</li>
                <li @if ($pref == '') class="mm-active" @endif>
                    <a href="{{url('/')}}" class="waves-effect">
                        <i class="ti-home"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                @canany(['users.view','permissions.view'])
                <li class="menu-title">Users</li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="fas fa-users"></i>
                        <span>Users</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        @can('users.view')
                        <li><a href="{{url('users')}}">Users</a></li>
                        @endcan
                        @can('permissions.view')
                        <li><a href="{{url('roles')}}">Role & Permissions</a></li>
                        @endcan
                    </ul>
                </li>
                @endcan
                <!-- Education -->
                @can('education.view')
                <li class="menu-title">Education</li>
                <li>
                    <a href="{{url('education')}}" class="waves-effect">
                        <i class='fas fa-graduation-cap'></i>
                        <span>Education</span>
                    </a>
                </li>
                @endcan
                <!-- Experience -->
                 @can('experience.view')
                <li class="menu-title">Experience</li>
                <li>
                    <a href="{{url('experience')}}" class="waves-effect">
                       <i class="fas fa-history"></i>
                        <span>Experience</span>
                    </a>
                </li>
                @endcan
                <!-- Services -->
                 @can('services.view')
                <li class="menu-title">Services</li>
                <li>
                    <a href="{{url('services')}}" class="waves-effect">
                       <i class="fa fa-wrench" aria-hidden="true"></i>
                        <span>Services</span>
                    </a>
                </li>
                @endcan

                <!-- PortFolio -->
                @can('portfolio.view')
                <li class="menu-title">Portfolio </li>
                <li>
                    <a href="{{url('portfolio')}}" class="waves-effect">
                       <i class="fas fa-briefcase"></i>
                        <span>Portfolio</span>
                    </a>
                </li>
                @endcan
                <!-- Portfolio Categories -->
                @can('portfolio-categories.view')
                <li class="menu-title">Portfolio Categories</li>
                <li>
                    <a href="{{url('portfolio-categories')}}" class="waves-effect">
                       <i class="fa fa-list-alt" aria-hidden="true"></i>
                        <span>Portfolio Categories</span>
                    </a>
                </li>
                @endcan

                @can('settings')
                <li class="menu-title">Penal Settings</li>
                <li>
                    <a href="{{url('settings')}}" class="waves-effect">
                        <i class="fas fa-cogs"></i>
                        <span>Penal Settings</span>
                    </a>
                </li> 
                @endcan           
            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>