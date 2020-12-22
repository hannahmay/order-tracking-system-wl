<!-- begin:: Header -->
<div id="kt_header" class="kt-header kt-grid__item  kt-header--fixed " data-ktheader-minimize="on">
    <div class="kt-header__top">
        <div class="kt-container kt-container--fluid">

            <!-- begin:: Brand -->
            <div class="kt-header__brand   kt-grid__item" id="kt_header_brand">
                <div class="kt-header__brand-logo">
                    <a href="{{ route('dashboard') }}">
                        <img alt="Logo" src="{{ asset('assets/media/logos/logo1.png') }}" class="kt-header__brand-logo-default" />
                    </a>
                </div>
                <div class="kt-header__brand-nav">
                    <div class="dropdown">
                        <button type="button" class="btn btn-pill btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                            Dashboard
                        </button>
                        <div class="dropdown-menu dropdown-menu-fit dropdown-menu-md">
                            <ul class="kt-nav kt-nav--bold kt-nav--md-space kt-margin-t-20 kt-margin-b-20">
                                <li class="kt-nav__item">
                                    <a class="kt-nav__link" href="#">
                                        <span class="kt-nav__link-icon"><i class="flaticon-feed"></i></span>
                                        <span class="kt-nav__link-text">Client</span>
                                    </a>
                                </li>
                                <li class="kt-nav__item">
                                    <a class="kt-nav__link" href="#">
                                        <span class="kt-nav__link-icon"><i class="flaticon2-settings"></i></span>
                                        <span class="kt-nav__link-text">Job</span>
                                    </a>
                                </li>
                                <li class="kt-nav__item">
                                    <a class="kt-nav__link" href="#">
                                        <span class="kt-nav__link-icon"><i class="flaticon-security"></i></span>
                                        <span class="kt-nav__link-text">Project Manager</span>
                                    </a>
                                </li>
                                <li class="kt-nav__item">
                                    <a class="kt-nav__link" href="#">
                                        <span class="kt-nav__link-icon"><i class="flaticon2-chart2"></i></span>
                                        <span class="kt-nav__link-text">Order</span>
                                    </a>
                                </li>
                                <li class="kt-nav__separator"></li>
                                <li class="kt-nav__item">
                                    <a class="kt-nav__link active" href="#">
                                        <span class="kt-nav__link-icon"><i class="flaticon2-user"></i></span>
                                        <span class="kt-nav__link-text">Admin</span>
                                    </a>
                                </li>
                                <li class="kt-nav__item">
                                    <a class="kt-nav__link" href="#">
                                        <span class="kt-nav__link-icon"><i class="flaticon-security"></i></span>
                                        <span class="kt-nav__link-text">User</span>
                                    </a>
                                </li>
                                <li class="kt-nav__item">
                                    <a class="kt-nav__link" href="#">
                                        <span class="kt-nav__link-icon"><i class="flaticon2-cup"></i></span>
                                        <span class="kt-nav__link-text">Administration</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- end:: Brand -->

            <!-- begin:: Header Topbar -->
            <div class="kt-header__topbar kt-grid__item kt-grid__item--fluid">

                <!--begin: Search -->
                <div class="kt-header__topbar-item kt-header__topbar-item--search dropdown" id="kt_quick_search_toggle">
                    <div class="kt-header__topbar-wrapper" data-toggle="dropdown" data-offset="10px,0px">
                        <span class="kt-header__topbar-icon kt-header__topbar-icon--brand"><i class="flaticon2-search-1"></i></span>
                    </div>
                    <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-anim dropdown-menu-lg">
                        <div class="kt-quick-search kt-quick-search--dropdown kt-quick-search--result-compact" id="kt_quick_search_dropdown">
                            <form method="get" class="kt-quick-search__form">
                                <div class="input-group">
                                    <div class="input-group-prepend"><span class="input-group-text"><i class="flaticon2-search-1"></i></span></div>
                                    <input type="text" class="form-control kt-quick-search__input" placeholder="Search...">
                                    <div class="input-group-append"><span class="input-group-text"><i class="la la-close kt-quick-search__close"></i></span></div>
                                </div>
                            </form>
                            <div class="kt-quick-search__wrapper kt-scroll" data-scroll="true" data-height="325" data-mobile-height="200">
                            </div>
                        </div>
                    </div>
                </div>

                <!--end: Search -->

                <!--begin: Language bar -->
                <div class="kt-header__topbar-item kt-header__topbar-item--langs">
                    <div class="kt-header__topbar-wrapper" data-toggle="dropdown" data-offset="10px,0px">
                        <span class="kt-header__topbar-icon kt-header__topbar-icon--info">
                            <img class="" src="{{ asset('assets/media/flags/192-philippines.svg') }}" alt="" />
                        </span>
                    </div>
                    <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-anim">
                        <ul class="kt-nav kt-margin-t-10 kt-margin-b-10">
                            <li class="kt-nav__item kt-nav__item--active">
                                <a href="#" class="kt-nav__link">
                                    <span class="kt-nav__link-icon"><img src="{{ asset('assets/media/flags/226-united-states.svg') }}" alt="" /></span>
                                    <span class="kt-nav__link-text">English</span>
                                </a>
                            </li>
                            <li class="kt-nav__item">
                                <a href="#" class="kt-nav__link">
                                    <span class="kt-nav__link-icon"><img src="{{ asset('assets/media/flags/094-south-korea.svg') }}" alt="" /></span>
                                    <span class="kt-nav__link-text">Korean</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <!--end: Language bar -->

                <!--begin: User bar -->
                <div class="kt-header__topbar-item kt-header__topbar-item--user">
                    <div class="kt-header__topbar-wrapper" data-toggle="dropdown" data-offset="10px,0px">
                        <span class="kt-hidden kt-header__topbar-welcome">{{ __('Hi') . ', ' }}</span>
                        <span class="kt-hidden kt-header__topbar-username">{{ auth()->user()->username }}!</span>
                        @if (auth()->user()->username == 'hannah')
                            <img class="kt-hidden-" alt="Pic" src="{{ asset('assets/media/users/707_error.jpg') }}" />
                        @else
                            <img class="kt-hidden-" alt="Pic" src="{{ asset('assets/media/users/default.jpg') }}" />
                        @endif
                        <span class="kt-header__topbar-icon kt-header__topbar-icon--brand kt-hidden"><b>S</b></span>
                    </div>
                    <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-anim dropdown-menu-xl">

                        <!--begin: Head -->
                        <div class="kt-user-card kt-user-card--skin-light kt-notification-item-padding-x">
                            <div class="kt-user-card__avatar">
                                @if (auth()->user()->username == 'hannah')
                                    <img class="kt-hidden-" alt="Pic" src="{{ asset('assets/media/users/707_error.jpg') }}" />
                                @else
                                    <img class="kt-hidden-" alt="Pic" src="{{ asset('assets/media/users/default.jpg') }}" />
                                @endif
                                <!--use below badge element instead the user avatar to display username's first letter(remove kt-hidden class to display it) -->
                                <span class="kt-badge kt-badge--username kt-badge--unified-success kt-badge--lg kt-badge--rounded kt-badge--bold kt-hidden">S</span>
                            </div>
                            <div class="kt-user-card__name">
                                 {{ __('Hello') .' '. auth()->user()->name }}!
                            </div>
                            <div class="kt-user-card__badge">
                                <span class="btn btn-label-primary btn-sm btn-bold btn-font-md">23 messages</span>
                            </div>
                        </div>

                        <!--end: Head -->

                        <!--begin: Navigation -->
                        <div class="kt-notification">
                            <a href="custom/apps/user/profile-1/personal-information.html" class="kt-notification__item">
                                <div class="kt-notification__item-icon">
                                    <i class="flaticon2-calendar-3 kt-font-success"></i>
                                </div>
                                <div class="kt-notification__item-details">
                                    <div class="kt-notification__item-title kt-font-bold">
                                        My Profile
                                    </div>
                                    <div class="kt-notification__item-time">
                                        Account settings and more
                                    </div>
                                </div>
                            </a>
                            <a href="custom/apps/user/profile-3.html" class="kt-notification__item">
                                <div class="kt-notification__item-icon">
                                    <i class="flaticon2-mail kt-font-warning"></i>
                                </div>
                                <div class="kt-notification__item-details">
                                    <div class="kt-notification__item-title kt-font-bold">
                                        My Messages
                                    </div>
                                    <div class="kt-notification__item-time">
                                        Inbox and tasks
                                    </div>
                                </div>
                            </a>
                            <a href="custom/apps/user/profile-2.html" class="kt-notification__item">
                                <div class="kt-notification__item-icon">
                                    <i class="flaticon2-rocket-1 kt-font-danger"></i>
                                </div>
                                <div class="kt-notification__item-details">
                                    <div class="kt-notification__item-title kt-font-bold">
                                        My Activities
                                    </div>
                                    <div class="kt-notification__item-time">
                                        Logs and notifications
                                    </div>
                                </div>
                            </a>
                            <a href="custom/apps/user/profile-3.html" class="kt-notification__item">
                                <div class="kt-notification__item-icon">
                                    <i class="flaticon2-hourglass kt-font-brand"></i>
                                </div>
                                <div class="kt-notification__item-details">
                                    <div class="kt-notification__item-title kt-font-bold">
                                        My Tasks
                                    </div>
                                    <div class="kt-notification__item-time">
                                        latest tasks and projects
                                    </div>
                                </div>
                            </a>
                            <a href="custom/apps/user/profile-1/overview.html" class="kt-notification__item">
                                <div class="kt-notification__item-icon">
                                    <i class="flaticon2-cardiogram kt-font-warning"></i>
                                </div>
                                <div class="kt-notification__item-details">
                                    <div class="kt-notification__item-title kt-font-bold">
                                        Billing
                                    </div>
                                    <div class="kt-notification__item-time">
                                        billing & statements <span class="kt-badge kt-badge--danger kt-badge--inline kt-badge--pill kt-badge--rounded">2 pending</span>
                                    </div>
                                </div>
                            </a>
                            <div class="kt-notification__custom kt-space-between">
                                <a href="{{ route('logout') }}" target="_blank" class="btn btn-label btn-label-brand btn-sm btn-bold" onclick="event.preventDefault(); document.getElementById('logout_form').submit()">Sign Out</a>
                                <form id="logout_form" action="{{ route('logout') }}" method="POST" style="display: none">
                                    {{ csrf_field() }}
                                </form>
                            </div>
                        </div>

                        <!--end: Navigation -->
                    </div>
                </div>

                <!--end: User bar -->
            </div>

            <!-- end:: Header Topbar -->
        </div>
    </div>
    <div class="kt-header__bottom">
        <div class="kt-container kt-container--fluid">

            <!-- begin: Header Menu -->
            <button class="kt-header-menu-wrapper-close" id="kt_header_menu_mobile_close_btn"><i class="la la-close"></i></button>
            <div class="kt-header-menu-wrapper" id="kt_header_menu_wrapper">
                <div id="kt_header_menu" class="kt-header-menu kt-header-menu-mobile ">
                    <ul class="kt-menu__nav ">
                        <li class="kt-menu__item {{ @activeIfInRouteGroup('dashboard') }} kt-menu__item--submenu kt-menu__item--rel" data-ktmenu-submenu-toggle="hover" aria-haspopup="true">
                            <a href="{{ route('dashboard') }}" class="kt-menu__link"><span class="kt-menu__link-text">Dashboard</span><i class="kt-menu__ver-arrow la la-angle-right"></i></a>
                        </li>
                        <li class="kt-menu__item {{ @activeIfInRouteGroup('clients.*') }} kt-menu__item--submenu kt-menu__item--rel" data-ktmenu-submenu-toggle="hover" aria-haspopup="true">
                            <a href="{{ route('clients.index') }}" class="kt-menu__link"><span class="kt-menu__link-text">Client</span><i class="kt-menu__ver-arrow la la-angle-right"></i></a>
                        </li>
{{--                        <li class="kt-menu__item  kt-menu__item--submenu kt-menu__item--rel" data-ktmenu-submenu-toggle="click" aria-haspopup="true">--}}
{{--                            <a href="{{ route('dashboard') }}" class="kt-menu__link"><span class="kt-menu__link-text">Job</span><i class="kt-menu__ver-arrow la la-angle-right"></i></a>--}}
{{--                        </li>--}}
                        <li class="kt-menu__item {{ @activeIfInRouteGroup('project_managers.*') }} kt-menu__item--submenu kt-menu__item--rel" data-ktmenu-submenu-toggle="click" aria-haspopup="true">
                            <a href="{{ route('project_managers.index') }}" class="kt-menu__link"><span class="kt-menu__link-text">Project Manager</span><i class="kt-menu__ver-arrow la la-angle-right"></i></a>
                        </li>
                        <li class="kt-menu__item  {{ @activeIfInRouteGroup('orders.*') }} kt-menu__item--submenu kt-menu__item--rel" data-ktmenu-submenu-toggle="click" aria-haspopup="true">
                            <a href="{{ route('orders.index') }}" class="kt-menu__link"><span class="kt-menu__link-text">Orders</span><i class="kt-menu__ver-arrow la la-angle-right"></i></a>
                        </li>
                        <li class="kt-menu__item {{ @activeIfInRouteGroup('users.*') }} kt-menu__item--submenu kt-menu__item--rel" data-ktmenu-submenu-toggle="click" aria-haspopup="true">
                            <a href="{{ route('users.index') }}" class="kt-menu__link"><span class="kt-menu__link-text">Users</span><i class="kt-menu__ver-arrow la la-angle-right"></i></a>
                        </li>
                        <li class="kt-menu__item {{ @activeIfInRouteGroup('activity.*') }} kt-menu__item--submenu kt-menu__item--rel" data-ktmenu-submenu-toggle="click" aria-haspopup="true">
                        <a href="javascript:;" class="kt-menu__link kt-menu__toggle"><span class="kt-menu__link-text">Activity</span><i class="kt-menu__ver-arrow la la-angle-right"></i></a>
                            <div class="kt-menu__submenu kt-menu__submenu--classic kt-menu__submenu--left">
                                <ul class="kt-menu__subnav">
                                    <li class="kt-menu__item " aria-haspopup="true">
                                        <a href="{{ route('activity.login') }}" class="kt-menu__link"><span class="kt-menu__link-text">Login</span><i class="kt-menu__ver-arrow la la-angle-right"></i></a>
                                    </li>
                                    <li class="kt-menu__item " aria-haspopup="true">
                                        <a href="{{ route('activity.logs') }}" class="kt-menu__link"><span class="kt-menu__link-text">Logs</span><i class="kt-menu__ver-arrow la la-angle-right"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- end: Header Menu -->
        </div>
    </div>
</div>
<!-- end:: Header -->