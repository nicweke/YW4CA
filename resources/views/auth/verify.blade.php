{{--@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Verify Your Email Address') }}</div>

<div class="card-body">
    @if (session('resent'))
    <div class="alert alert-success" role="alert">
        {{ __('A fresh verification link has been sent to your email address.') }}
    </div>
    @endif

    {{ __('Before proceeding, please check your email for a verification link.') }}
    {{ __('If you did not receive the email') }},
    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
        @csrf
        <button type="submit"
            class="btn btn-link p-0 m-0 align-baseline">{{ __('click here to request another') }}</button>.
    </form>
</div>
</div>
</div>
</div>
</div>
@endsection--}}

























<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/favicon/1.png')}}" />
    <title>Verify Email | YW4CA</title>

    <link rel="stylesheet" href="{{ asset('assets/css/global.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/main.min.css')}}">
    <script src="{{ asset('assets/js/global.min.js')}}"></script>
</head>

<body>

    <nav class="nav-wrap" id="nav">
        <div class="nav">
            <div class="nav__left">
                <a href="{{route('home')}}">
                    <img src="{{asset('assets/img/logo/7.png')}}" alt="" style="height: 40%; width: 40%;">
                </a>
            </div>
           {{-- <div class="nav__right">
                <a class="button button--green" href="{{route('volunteer.main')}}">
                    <span class="button__text">Register as <span class="u-no-mobile">YW4CA </span>Volunteer</span>
                </a>
            </div>--}}
        </div>
    </nav>



    <section class="hero-section hero-section--lg hero-section--blue">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"><h1>{{ __('Verify Your Email Address') }}</h1></div>

                    <div class="card-body">
                        @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('A fresh verification link has been sent to your email address.') }}
                        </div>
                        @endif

                        {{ __('Before proceeding, please check your email for a verification link.') }}
                        {{ __('If you did not receive the email') }},
                        <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                            @csrf
                            <button type="submit"
                                class="btn btn-link p-0 m-0 align-baseline">{{ __('Click here to request another') }}</button>.
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </section>








    <!--<footer class="footer">
       
        <div class="container">
            <div class="footer__bottom">
                <div class="footer__left">
                    &copy; Young World 4 Climate Action 2020
                </div>
                <div class="footer__right">
                    <a target="_blank" rel="noopener" href="{{route('home')}}">Young World for Climate Action
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100">
                            <path
                                d="M87 18.5c0-3-2.5-5.5-5.5-5.5H18.7c-3.5 0-6.7 3.4-5.5 7.2.8 2.3 3.1 3.8 5.5 3.8H64c1.6 0 2.3 1.9 1.2 3L18.7 73.5c-2.2 2.2-2.3 5.9 0 8.1 2.2 2.1 5.6 1.8 7.8-.3L73 34.8c1.1-1.1 3-.3 3 1.2v45.3c0 3.3 2.8 6.1 6.1 5.7 2.8-.3 4.9-2.9 4.9-5.7V18.5c0-3 0 .6 0 0 0-3 0 .6 0 0 0-3 0 .6 0 0 0-3 0 .6 0 0 0-3 0 .6 0 0z" />
                        </svg></a>
                </div>
            </div>
        </div>
    </footer>-->



    <script>
        lazyload()
    </script>
    <script type="application/ld+json">
        {"@context":"http://schema.org","@graph":[{"@type":"Blog","author":{"@id":"http://paystack.com#identity"},"copyrightHolder":{"@id":"http://paystack.com#identity"},"copyrightYear":"2017","creator":{"@id":"http://paystack.com#creator"},"dateModified":"2020-03-11T17:45:15+01:00","datePublished":"2017-12-12T19:52:07+01:00","description":"Learn how to run an online business in Nigeria from founders on the front line. Original lessons, data, and guides you won’t find anywhere else.","headline":"The Paystack Blog","image":{"@type":"ImageObject","url":"https://s3-eu-west-1.amazonaws.com/pstk-blog-staging/images/articles/_1200x630_crop_center-center_82_none/The-Paystack-Blog.png?mtime=1520797522"},"inLanguage":"en-us","mainEntityOfPage":"https://paystack.com/blog/","name":"The Paystack Blog","publisher":{"@id":"http://paystack.com#creator"},"url":"https://paystack.com/blog/"},{"@id":"http://paystack.com#identity","@type":"LocalBusiness","address":{"@type":"PostalAddress","addressCountry":"Nigeria","addressLocality":"Ikeja","addressRegion":"Lagos","streetAddress":"126 Joel Ogunnaike"},"email":"hello@paystack.com","founder":"Shola Akinlade","foundingLocation":"Lagos, Nigeria","image":{"@type":"ImageObject","height":"2245","url":"https://s3-eu-west-1.amazonaws.com/pstk-blog-staging/images/articles/Paystack-mark.png","width":"2286"},"logo":{"@type":"ImageObject","height":"60","url":"https://s3-eu-west-1.amazonaws.com/pstk-blog-staging/images/articles/_600x60_fit_center-center_82_none/Paystack-mark.png?mtime=1520797301","width":"61"},"name":"Paystack","priceRange":"$","url":"http://paystack.com"},{"@id":"#creator","@type":"LocalBusiness","name":"Paystack","priceRange":"$"},{"@type":"BreadcrumbList","description":"Breadcrumbs list","itemListElement":[{"@type":"ListItem","item":"https://172.31.65.134/blog/","name":"The Paystack Blog","position":1}],"name":"Breadcrumbs"}]}
    </script>

</body>

</html>