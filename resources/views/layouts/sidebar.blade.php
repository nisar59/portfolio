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


                @canany(['regions.view', 'areas.view','branches.view'])              
                <li class="menu-title">Network</li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="fas fa-network-wired"></i>
                        <span>Network</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{url('regions')}}">Region</a></li>
                        <li><a href="{{url('areas')}}">Area</a></li>
                        <li><a href="{{url('branches')}}">Branches</a></li>
                    </ul>
                </li>
                @endcan
                @can('feedback-questions')
                <li class="menu-title">Feedback Questions</li>
                <li>
                    <a href="{{url('feedback-questions')}}" class="waves-effect">
                        <i class="fas fa-question-circle"></i>
                        <span>Feedback Questions</span>
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