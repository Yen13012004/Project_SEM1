@extends('layouts.customer')

@section('title', 'Account')

@section('main')
<div class="banner-wrapper has_background">
    <img src="{{url('')}}/assets/images/banner-for-all2.jpg"
         class="img-responsive attachment-1920x447 size-1920x447" alt="img">
    <div class="banner-wrapper-inner">
        <h1 class="page-title">Login</h1>
        <div role="navigation" aria-label="Breadcrumbs" class="breadcrumb-trail breadcrumbs">
            <ul class="trail-items breadcrumb">
                <li class="trail-item trail-begin"><a href="#"><span>Home</span></a></li>
                <li class="trail-item trail-end active"><span>Login</span>
                </li>
            </ul>
        </div>
    </div>
</div>
<main class="site-main  main-container no-sidebar">
    <div class="container">
            <div class="main-content">
                <div class="page-main-content">
                    <div class="kaycee">
                        <div class="kaycee-notices-wrapper"></div>
                        <div class="u-columns col2-set" id="">
                            <div class="u-column1 col-1">
                                {{-- <h2>Login</h2> --}}
                                <form class="kaycee-form kaycee-form-login login" method="post">
                                    <p class="kaycee-form-row kaycee-form-row--wide form-row form-row-wide">
                                        <label for="username">Username or email address&nbsp;<span
                                                class="required">*</span></label>
                                        <input type="text" class="kaycee-Input kaycee-Input--text input-text"
                                               name="username" id="username" autocomplete="username" value=""></p>
                                    <p class="kaycee-form-row kaycee-form-row--wide form-row form-row-wide">
                                        <label for="password">Password&nbsp;<span class="required">*</span></label>
                                        <input class="kaycee-Input kaycee-Input--text input-text"
                                               type="password" name="password" id="password"
                                               autocomplete="current-password">
                                    </p>
                                    <p class="form-row">
                                        <input type="hidden" id="kaycee-login-nonce" name="kaycee-login-nonce"
                                               value="832993cb93"><input type="hidden" name="_wp_http_referer"
                                                                         value="/kaycee/my-account/">
                                        <button type="submit" class="kaycee-Button button" name="login"
                                                value="Log in">Log in
                                        </button>
                                        <label class="kaycee-form__label kaycee-form__label-for-checkbox inline">
                                            <input class="kaycee-form__input kaycee-form__input-checkbox"
                                                   name="rememberme" type="checkbox" id="rememberme" value="forever">
                                            <span>Remember me</span>
                                        </label>
                                    </p>
                                    <p class="kaycee-LostPassword lost_password">
                                        <a href="#">Lost your
                                            password?</a>
                                    </p>
                                    <div class="kaycee-social-login">
                                        <h6>Connect a social network</h6>
                                        <ul>
                                            <li>
                                                <a class="login-facebook" href="#" target="_blank">
                                                    <i class="fa fa-facebook"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a  class="login-google" href="#" target="_blank">
                                                    <i class="fa fa-google"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a  class="login-twitter" href="#" target="_blank">
                                                    <i class="fa fa-twitter"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
</main>
@endsection
