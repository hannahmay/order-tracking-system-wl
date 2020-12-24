<!DOCTYPE html>
<html lang="en">
    <head>
        @include('layout.partials.head')
    </head>
    <body class="kt-page-content-white kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-subheader--enabled kt-subheader--transparent kt-aside--enabled kt-aside--fixed kt-page--loading">
        <!-- begin:: Page -->

        @include('layout.partials.header-mobile')

        <div class="kt-grid kt-grid--hor kt-grid--root">
            <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--ver kt-page">
                <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-wrapper" id="kt_wrapper">
                    @include('layout.partials.header')
                    <div class="kt-body kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-grid--stretch" id="kt_body">
                        <div class="kt-container  kt-container--fluid  kt-grid kt-grid--ver">

                            @include('layout.partials.menu-side')

                            <div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">

                                @include('layout.partials.header-sub')

                                <!-- begin:: Content -->
                                <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
                                    @yield('content')
                                </div>

                                <!-- end:: Content -->
                            </div>
                        </div>
                    </div>
                    @include('layout.partials.footer')
                </div>
            </div>
        </div>
        <!-- end:: Page -->
        @include('layout.partials.footer-scripts')
        @yield('script')
    </body>
</html>
