<!DOCTYPE html>
<html lang="en">
<head>
    @include('layout.partials.head')
</head>
<body class="kt-page-content-white kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-subheader--enabled kt-subheader--transparent kt-page--loading">
    <!-- begin:: Page -->
    <div id="app">
        <!-- begin:: Header Mobile -->
        <div id="kt_header_mobile" class="kt-header-mobile  kt-header-mobile--fixed ">
            <div class="kt-header-mobile__logo">
                <a href="{{ route('dashboard') }}">
                    <img alt="Logo" src="{{ asset('assets/media/logos/logo1.png') }}" />
                </a>
            </div>
            <div class="kt-header-mobile__toolbar">
                <button class="kt-header-mobile__toolbar-toggler" id="kt_header_mobile_toggler"><span></span></button>
                <button class="kt-header-mobile__toolbar-topbar-toggler" id="kt_header_mobile_topbar_toggler"><i class="flaticon-more-1"></i></button>
            </div>
        </div>
        <!-- end:: Header Mobile -->

        <div class="kt-grid kt-grid--hor kt-grid--root">
            <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--ver kt-page">
                <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-wrapper " id="kt_wrapper">
                    @include('layout.partials.header')
                    <div class="kt-container kt-container--fluid kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-grid--stretch">
                        <div class="kt-body kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-grid--stretch" id="kt_body">
                            <div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">

                                <!-- begin:: Content Head -->
                                <div class="kt-subheader   kt-grid__item" id="kt_subheader">
                                    <div class="kt-container kt-container--fluid">
                                        <div class="kt-subheader__main">
{{--                                            <h3 class="kt-subheader__title">{{ ucwords(@getRouteName()) }}</h3>--}}
{{--                                            <span class="kt-subheader__separator kt-subheader__separator--v"></span>--}}
{{--                                            <a href="#" class="btn btn-label-primary btn-bold btn-icon-h kt-margin-l-10">--}}
{{--                                                Add New--}}
{{--                                            </a>--}}
                                        </div>
                                        <div class="kt-subheader__toolbar">
                                            <div class="kt-subheader__wrapper">
                                                <div class="dropdown dropdown-inline" data-toggle="kt-tooltip" title="Quick actions" data-placement="left">
                                                    <div class="dropdown-menu dropdown-menu-fit dropdown-menu-md dropdown-menu-right">
                                                        <!--begin::Nav-->
                                                        <ul class="kt-nav">
                                                            <li class="kt-nav__head">
                                                                Export Options:
                                                                <i class="flaticon2-correct kt-font-warning" data-toggle="kt-tooltip" data-placement="right" title="Click to learn more..."></i>
                                                            </li>
                                                            <li class="kt-nav__separator"></li>
                                                            <li class="kt-nav__item">
                                                                <a href="#" class="kt-nav__link">
                                                                    <i class="kt-nav__link-icon flaticon2-drop"></i>
                                                                    <span class="kt-nav__link-text">Orders</span>
                                                                </a>
                                                            </li>
                                                            <li class="kt-nav__item">
                                                                <a href="#" class="kt-nav__link">
                                                                    <i class="kt-nav__link-icon flaticon2-new-email"></i>
                                                                    <span class="kt-nav__link-text">Members</span>
                                                                    <span class="kt-nav__link-badge">
																		<span class="kt-badge kt-badge--brand kt-badge--rounded">15</span>
																	</span>
                                                                </a>
                                                            </li>
                                                            <li class="kt-nav__item">
                                                                <a href="#" class="kt-nav__link">
                                                                    <i class="kt-nav__link-icon flaticon2-calendar-8"></i>
                                                                    <span class="kt-nav__link-text">Reports</span>
                                                                </a>
                                                            </li>
                                                            <li class="kt-nav__item">
                                                                <a href="#" class="kt-nav__link">
                                                                    <i class="kt-nav__link-icon flaticon2-link"></i>
                                                                    <span class="kt-nav__link-text">Finance</span>
                                                                </a>
                                                            </li>
                                                            <li class="kt-nav__separator"></li>
                                                            <li class="kt-nav__foot">
                                                                <a class="btn btn-label-brand btn-bold btn-sm" href="#">More options</a>
                                                                <a class="btn btn-clean btn-bold btn-sm kt-hidden" href="#" data-toggle="kt-tooltip" data-placement="right" title="Click to learn more...">Learn more</a>
                                                            </li>
                                                        </ul>

                                                        <!--end::Nav-->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end:: Content Head -->

                                <!-- begin:: Content -->
                                <div class="kt-container kt-container--fluid kt-grid__item kt-grid__item--fluid">
                                    @yield('content')
                                </div>
                                <!-- end:: Content -->

                                <!-- begin:: Modals -->
                                @yield('modal')
                                <!-- end:: Modals -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end:: Page -->
    @include('layout.partials.footer')
    @include('layout.partials.footer-scripts')
    @yield('script')
</body>
</html>