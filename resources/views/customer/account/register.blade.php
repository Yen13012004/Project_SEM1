@extends('layouts.customer')

@section('title', 'Account')

@section('main')
<div class="banner-wrapper has_background">
    <img src="{{url('')}}/assets/images/banner-for-all2.jpg"
         class="img-responsive attachment-1920x447 size-1920x447" alt="img">
    <div class="banner-wrapper-inner">
        <h1 class="page-title">Register</h1>
        <div role="navigation" aria-label="Breadcrumbs" class="breadcrumb-trail breadcrumbs">
            <ul class="trail-items breadcrumb">
                <li class="trail-item trail-begin"><a href="#"><span>Home</span></a></li>
                <li class="trail-item trail-end active"><span>Register</span>
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
                            <div class="u-column2 col-2">
                                {{-- <h2 class="text-center">Register</h2> --}}
                                <form method="post" class="kaycee-form kaycee-form-register register">
                                    <p class="kaycee-form-row kaycee-form-row--wide form-row form-row-wide">
                                        <label for="reg_email">Email address&nbsp;<span
                                                class="required">*</span></label>
                                        <input type="email" class="kaycee-Input kaycee-Input--text input-text"
                                               name="email" id="reg_email" autocomplete="email" value=""></p>
                                    <div class="kaycee-privacy-policy-text"><p>Your personal data will be used to
                                        support your experience throughout this website, to manage access to your
                                        account, and for other purposes described in our <a
                                                href="#" class="kaycee-privacy-policy-link"
                                                target="_blank">privacy policy</a>.</p>
                                    </div>
                                    <p class="kaycee-FormRow form-row">
                                        <input type="hidden" id="kaycee-register-nonce"
                                               name="kaycee-register-nonce" value="45fae70a87"><input type="hidden"
                                                                                                           name="_wp_http_referer"
                                                                                                           value="/kaycee/my-account/">
                                        <button type="submit" class="kaycee-Button button" name="register"
                                                value="Register">Register
                                        </button>
                                    </p>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
</main>
@endsection
