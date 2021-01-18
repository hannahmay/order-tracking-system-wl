<!DOCTYPE html>

<!--
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 4 & Angular 8
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
Renew Support: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<html lang="en">

<!-- begin::Head -->
<head>
    @include('layout.partials.head')
    <link href="{{ asset('css/pages/login-4.css') }}" rel="stylesheet" type="text/css" >
</head>

<!-- end::Head -->

<!-- begin::Body -->
<body class="kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-subheader--enabled kt-subheader--fixed kt-subheader--solid kt-aside--enabled kt-aside--fixed kt-page--loading">

<!-- begin:: Page -->
<div class="kt-grid kt-grid--ver kt-grid--root">
    <div class="kt-grid kt-grid--hor kt-grid--root  kt-login kt-login--v4 kt-login--signin" id="kt_login">
        <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" style="background-image: url(./assets/media/bg/bg-2.jpg);">
            <div class="kt-grid__item kt-grid__item--fluid kt-login__wrapper">
                <div class="kt-login__container">
                    <div class="kt-login__logo">
                        <a href="#">
                            <img src="{{ asset('assets/media/logos/wl.png') }}">
                        </a>
                    </div>
                    <div class="kt-login__signin">
                        <div class="kt-login__head">
                            <h3 class="kt-login__title">Sign In To Admin</h3>
                        </div>
                        <form class="kt-form" method="POST" action="{{ route('login') }}">
                            {{ csrf_field() }}

                            <div class="input-group">
                                <input class="form-control {{ $errors->has('username') ? 'is-invalid' : ''}}" type="text" placeholder="{{ __('Username') }}" name="username" value="{{ old('username') }}" autocomplete="off" required>

                                @if($errors->has('username'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('username') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="input-group">
                                <input class="form-control {{ $errors->has('password') ? 'is-invalid' : ''}}" type="password" placeholder="{{ __('Password') }}" name="password" required>

                                @if($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="row kt-login__extra">
                                <div class="col">
                                    <label class="kt-checkbox">
                                        <input type="checkbox" name="remember"> {{ __('Remember me') }}
                                        <span></span>
                                    </label>
                                </div>
                                <div class="col kt-align-right">
                                    <a href="javascript:;" id="kt_login_forgot" class="kt-login__link">{{ __('Forget Password ?') }}</a>
                                </div>
                            </div>
                            <div class="row kt-login__extra">
                                <div class="col">
                                    {{ __('Not yet registered?') }}
                                </div>
                                <div class="col kt-align-right">
                                    <a href="{{ route('register') }}" class="btn btn-label btn-label-brand btn-sm btn-bold">{{ __('Register') }}</a>
                                </div>
                            </div>
                            <div class="kt-login__actions">
                                <button id="kt_login_signin_submit" class="btn btn-brand btn-elevate kt-login__btn-primary">{{ __('Sign In') }}</button>
                            </div>
                        </form>
                    </div>
                    <div class="kt-login__forgot">
                        <div class="kt-login__head">
                            <h3 class="kt-login__title">Forgotten Password ?</h3>
                            <div class="kt-login__desc">Enter your email to reset your password:</div>
                        </div>
                        <form class="kt-form" action="">
                            <div class="input-group">
                                <input class="form-control" type="text" placeholder="Email" name="email" id="kt_email" autocomplete="off">
                            </div>
                            <div class="kt-login__actions">
                                <button id="kt_login_forgot_cancel" class="btn btn-secondary btn-pill kt-login__btn-secondary">Cancel</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end:: Page -->
@include('layout.partials.footer')
@include('layout.partials.footer-scripts')
<!--begin::Page Scripts(used by this page) -->
{{-- TODO:: Update this JS file to control form --}}
{{--<script src="{{ asset('js/pages/login-general.js') }}" type="text/javascript"></script>--}}
<!--end::Page Scripts -->
</body>
<!-- end::Body -->
</html>
