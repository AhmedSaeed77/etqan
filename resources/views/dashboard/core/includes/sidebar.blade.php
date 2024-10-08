<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('/') }}" class="brand-link">
        {{--        <img src="{{asset("logo.png")}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8"> --}}
        <span class="brand-text font-weight-light">@lang('dashboard.Elryad')</span>
    </a>
    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ auth()->user()->image? asset(auth()->user()->image) :asset('img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">{{ auth()->user()->name }}</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <li class="nav-item  {{ in_array(request()->route()->getName(),['/'])? 'menu-open': '' }}">
                    <a href="{{ url('/') }}" class="nav-link">
                        <i class="nav-icon fas fa-circle"></i>
                        <p>
                            @lang('dashboard.Home')
                        </p>
                    </a>
                </li>
                <li class="nav-item  {{ in_array(request()->route()->getName(),['users.index', 'users.create', 'users.edit', 'users.show'])? 'menu-open': '' }}">
                    <a href="{{ route('users.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-circle"></i>
                        <p>
                            @lang('dashboard.users')
                        </p>
                    </a>
                </li>

                

                <li class="nav-item  {{ in_array(request()->route()->getName(),['members.index', 'members.create', 'members.edit', 'members.show'])? 'menu-open': '' }}">
                    <a href="{{ route('members.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-circle"></i>
                        <p>
                            @lang('dashboard.members')
                        </p>
                    </a>
                </li>

                <li class="nav-item  {{ in_array(request()->route()->getName(),['graduates.index', 'graduates.create', 'graduates.edit', 'graduates.show'])? 'menu-open': '' }}">
                    <a href="{{ route('graduates.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-circle"></i>
                        <p>
                            @lang('dashboard.graduates')
                        </p>
                    </a>
                </li>

                <li class="nav-item  {{ in_array(request()->route()->getName(),['advertisements.index', 'advertisements.create', 'advertisements.edit', 'advertisements.show'])? 'menu-open': '' }}">
                    <a href="{{ route('advertisements.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-circle"></i>
                        <p>
                            @lang('dashboard.advertisements')
                        </p>
                    </a>
                </li>

                <li class="nav-item  {{ in_array(request()->route()->getName(),['homedoctors.index', 'homedoctors.create', 'homedoctors.edit', 'homedoctors.show'])? 'menu-open': '' }}">
                    <a href="{{ route('homedoctors.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-circle"></i>
                        <p>
                            @lang('dashboard.doctors')
                        </p>
                    </a>
                </li>

                <li class="nav-item  {{ in_array(request()->route()->getName(),['programs.index', 'programs.create', 'programs.edit', 'programs.show'])? 'menu-open': '' }}">
                    <a href="{{ route('programs.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-circle"></i>
                        <p>
                            @lang('dashboard.programs')
                        </p>
                    </a>
                </li>

                <li class="nav-item  {{ in_array(request()->route()->getName(),['contactus.index', 'contactus.create', 'contactus.edit', 'contactus.show'])? 'menu-open': '' }}">
                    <a href="{{ route('contactus.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-circle"></i>
                        <p>
                            @lang('dashboard.contactus')
                        </p>
                    </a>
                </li>

                <li class="nav-item  {{ in_array(request()->route()->getName(),['infos.edit'])? 'menu-open': '' }} {{ Route::currentRouteName()=='infos.edit'?'activeNav':'' }}">
                    <a href="{{ route('infos.edit',auth('web')->user()->id) }}" class="nav-link">
                        <i class="nav-icon fas fa-circle"></i>
                        <p>
                            @lang('dashboard.infos')
                        </p>
                    </a>
                </li>

                <li
                    class="nav-item {{in_array(request()->route()->getName(),['about-us-content.index','privacy-terms.index'])?'menu-open':''}}">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-circle"></i>
                        <p>
                            @lang('dashboard.structure')
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('home-content.index') }}"
                               class="nav-link {{ in_array(request()->route()->getName(),['home-content.index'])? 'active': '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>@lang('dashboard.home_page')</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ route('contact-us-content.index') }}"
                               class="nav-link {{ in_array(request()->route()->getName(),['contact-us-content.index','contact-us-content.store'])? 'active': '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>
                                    @lang('dashboard.contact')
                                </p>
                            </a>
                        </li>

                    </ul>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
