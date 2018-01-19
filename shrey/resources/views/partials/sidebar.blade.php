@inject('request', 'Illuminate\Http\Request')
<!-- Left side column. contains the sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <ul class="sidebar-menu">

             

            <li class="{{ $request->segment(1) == 'home' ? 'active' : '' }}">
                <a href="{{ url('/') }}">
                    <i class="fa fa-wrench"></i>
                    <span class="title">@lang('quickadmin.qa_dashboard')</span>
                </a>
            </li>

            
            @can('user_management_access')
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-users"></i>
                    <span class="title">@lang('quickadmin.user-management.title')</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                
                @can('role_access')
                <li class="{{ $request->segment(2) == 'roles' ? 'active active-sub' : '' }}">
                        <a href="{{ route('admin.roles.index') }}">
                            <i class="fa fa-briefcase"></i>
                            <span class="title">
                                @lang('quickadmin.roles.title')
                            </span>
                        </a>
                    </li>
                @endcan
                @can('user_access')
                <li class="{{ $request->segment(2) == 'users' ? 'active active-sub' : '' }}">
                        <a href="{{ route('admin.users.index') }}">
                            <i class="fa fa-user"></i>
                            <span class="title">
                                @lang('quickadmin.users.title')
                            </span>
                        </a>
                    </li>
                @endcan
                </ul>
            </li>
            @endcan
            @can('client_access')
            <li class="{{ $request->segment(2) == 'clients' ? 'active' : '' }}">
                <a href="{{ route('admin.clients.index') }}">
                    <i class="fa fa-user"></i>
                    <span class="title">@lang('quickadmin.clients.title')</span>
                </a>
            </li>
            @endcan
            
            @can('employee_access')
            <li class="{{ $request->segment(2) == 'employees' ? 'active' : '' }}">
                <a href="{{ route('admin.employees.index') }}">
                    <i class="fa fa-suitcase"></i>
                    <span class="title">@lang('quickadmin.employees.title')</span>
                </a>
            </li>
            @endcan
            
            @can('working_hour_access')
            <li class="{{ $request->segment(2) == 'working_hours' ? 'active' : '' }}">
                <a href="{{ route('admin.working_hours.index') }}">
                    <i class="fa fa-hourglass"></i>
                    <span class="title">@lang('quickadmin.working-hours.title')</span>
                </a>
            </li>
            @endcan
            
            @can('appointment_access')
            <li class="{{ $request->segment(2) == 'appointments' ? 'active' : '' }}">
                <a href="{{ route('admin.appointments.index') }}">
                    <i class="fa fa-gears"></i>
                    <span class="title">@lang('quickadmin.appointments.title')</span>
                </a>
            </li>
            @endcan
            

            

            



            <li class="{{ $request->segment(1) == 'change_password' ? 'active' : '' }}">
                <a href="{{ route('auth.change_password') }}">
                    <i class="fa fa-key"></i>
                    <span class="title">@lang('quickadmin.qa_change_password')</span>
                </a>
            </li>

            <li>
                <a href="#logout" onclick="$('#logout').submit();">
                    <i class="fa fa-arrow-left"></i>
                    <span class="title">@lang('quickadmin.qa_logout')</span>
                </a>
            </li>
        </ul>
    </section>
</aside>

