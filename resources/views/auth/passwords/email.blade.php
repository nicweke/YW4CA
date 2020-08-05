{{--@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Reset Password') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Send Password Reset Link') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection--}}







<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Authentication forms">
    <meta name="author" content="Arasari Studio">

    <title>Forny</title>
    <link href="{{asset('assets/css/register/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/register/common.css')}}" rel="stylesheet">


    <!--<link href="https://fonts.googleapis.com/css?family=Rubik:400,600,700&display=swap" rel="stylesheet">-->
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="{{asset('assets/css/register/theme-05.css')}}" rel="stylesheet">


</head>

<body>
    <div class="forny-container">
        
<div class="forny-inner">
    <div class="forny-two-pane">
        <div>
            <div class="forny-form">
                @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
                <div class="reset-form d-block">
    
    <form method="POST" class="reset-password-form" action="{{ route('password.email') }}">
            @csrf
    <h4 class="mb-5">Reset Your password</h4>
    <p class="mb-10">
        Please enter your email address and we will send you a password password link.
    </p>
    <div class="form-group">
    <div class="input-group">
        <div class="input-group-prepend">
            <span class="input-group-text">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="16" viewBox="0 0 24 16">
    <g transform="translate(0)">
        <path d="M23.983,101.792a1.3,1.3,0,0,0-1.229-1.347h0l-21.525.032a1.169,1.169,0,0,0-.869.4,1.41,1.41,0,0,0-.359.954L.017,115.1a1.408,1.408,0,0,0,.361.953,1.169,1.169,0,0,0,.868.394h0l21.525-.032A1.3,1.3,0,0,0,24,115.062Zm-2.58,0L12,108.967,2.58,101.824Zm-5.427,8.525,5.577,4.745-19.124.029,5.611-4.774a.719.719,0,0,0,.109-.946.579.579,0,0,0-.862-.12L1.245,114.4,1.23,102.44l10.422,7.9a.57.57,0,0,0,.7,0l10.4-7.934.016,11.986-6.04-5.139a.579.579,0,0,0-.862.12A.719.719,0,0,0,15.977,110.321Z" transform="translate(0 -100.445)"/>
    </g>
</svg>
            </span>
        </div>
        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email Address">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
    </div>
</div> 
    <div class="row">
        <div class="col-md-12">
            <button type="submit" class="btn btn-primary btn-block">Send Password Reset Link</button>
        </div>
    </div>
</form>
</div>
<div class="reset-confirmation d-none">
    <h4 class="mb-5">Link was sent</h4>
<div>
    Please, check your inbox for a password reset link.
</div> 
</div>
            </div>
        </div>
        <div class="right-pane">
                <div class="text-center" style="width: 300px">
                    <div class="mb-10 forny-logo">
                    <a href="{{route('home')}}">
                            <img src="{{asset('assets/img/logo/5.png')}}" alt="" style="height: 55%; width:55%;">
                        </a>
                    </div>
                    <!--<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="296" height="264" viewBox="0 0 296 264"><defs><style>.a{opacity:0.8;}.b{fill:url(#a);}.c,.e{fill:#3f9142;}.d,.h{fill:#fff;}.d,.m{opacity:0.1;}.e,.i{opacity:0.2;}.f{opacity:0.3;}.g{fill:url(#b);}.j{fill:#e0e0e0;}.k,.o,.q{opacity:0.5;}.l{fill:url(#c);}.n{opacity:0.05;}.o{fill:#4d8af0;}.p{fill:#47e6b1;}.q{fill:#f55f44;}</style><linearGradient id="a" x1="0.5" y1="1" x2="0.5" gradientUnits="objectBoundingBox"><stop offset="0" stop-color="gray" stop-opacity="0.251"/><stop offset="0.54" stop-color="gray" stop-opacity="0.122"/><stop offset="1" stop-color="gray" stop-opacity="0.102"/></linearGradient><linearGradient id="b" x1="-0.512" y1="7.758" x2="-0.512" y2="6.717" xlink:href="#a"/><linearGradient id="c" x1="-1.386" y1="7.85" x2="-1.386" y2="6.809" xlink:href="#a"/></defs><g class="a" transform="translate(98.3 6.928)"><ellipse class="b" cx="53.831" cy="41.702" rx="53.831" ry="41.702"/></g><ellipse class="c" cx="52.636" cy="40.776" rx="52.636" ry="40.776" transform="translate(99.498 7.854)"/><path class="d" d="M477.526,153.077c0-22.52,23.563-40.776,52.633-40.776a64.519,64.519,0,0,1,26.228,5.414c-9.251-6.248-21.354-10.045-34.6-10.045-29.069,0-52.636,18.256-52.636,40.776,0,15.121,10.626,28.319,26.412,35.362C484.51,176.331,477.526,165.338,477.526,153.077Z" transform="translate(-368.986 -99.915)"/><path class="e" d="M224.814,176.9l55.167,101.068,55.167,101.064H114.48l55.167-101.064Z" transform="translate(-72.403 -115.032)"/><g class="f" transform="translate(119.12 161.253)"><path class="g" d="M568.346,577.579l4.532-13.448a23.03,23.03,0,0,0-8.527-26.055l.037-.022a22.6,22.6,0,0,0-5.8-2.94h0l-.062-.022-.07-.022h0a22.624,22.624,0,0,0-6.212-1.169,21.788,21.788,0,0,0-2.246,0,22.908,22.908,0,0,0-3.856.533c-.368.081-.735.173-1.07.272s-.709.206-1.058.32c-.7.232-1.386.492-2.058.79-.338.147-.673.3-1,.467a22.6,22.6,0,0,0-2.849,1.676c-.305.21-.6.426-.9.647a22.788,22.788,0,0,0-7.807,10.879l-7.123,21.189a22.736,22.736,0,0,0-.985,10.335c.074.533.165,1.062.272,1.588s.239,1.044.368,1.558c.1.342.2.684.316,1.022.169.5.368,1.007.555,1.5.136.327.279.654.43.978.3.643.629,1.272.985,1.886a19.9,19.9,0,0,0,1.161,1.794c.309.434.636.86.974,1.272a19.2,19.2,0,0,0,1.441,1.591,22.719,22.719,0,0,0,7.718,5.105h0l.125.052a7.955,7.955,0,0,1,.515-.8A5,5,0,0,1,541,596.379c.132.029.265.07.4.11.926.327,1.838.911,2.731,1.2a2.447,2.447,0,0,0,2.062-.026c1.786-.952,1.125-3.955,2.657-5.271a2.384,2.384,0,0,1,.224-.169.7.7,0,0,1-.059-.085c1.183-.735,2.823-.246,4.186.228,1.47.518,3.389.867,4.411-.334.691-.823.64-2.077,1.3-2.94.765-.992,2.205-1.1,3.451-.926l.063.018a3.373,3.373,0,0,0,4.815-3.227A20.128,20.128,0,0,1,568.346,577.579Z" transform="translate(-521.084 -533.871)"/></g><path class="h" d="M538.341,599.544a4.777,4.777,0,0,1,4.679-2.1c1.764.4,3.437,2.08,5.006,1.239,2.146-1.147.625-5.362,4.109-5.675a4.572,4.572,0,0,1,2.121.368c1.47.6,3.771,1.275,4.9-.074.665-.794.617-2,1.253-2.826a3.475,3.475,0,0,1,3.33-.893l.059.018a3.254,3.254,0,0,0,4.646-3.113,19.223,19.223,0,0,1,1.047-7.1l4.366-12.978a22.193,22.193,0,0,0-13.912-28.04h0a22.193,22.193,0,0,0-28.033,13.915l-6.884,20.41a22.2,22.2,0,0,0,12.8,27.621,7.886,7.886,0,0,1,.511-.772Z" transform="translate(-403.743 -374.739)"/><circle class="i" cx="2.393" cy="2.393" r="2.393" transform="translate(140.448 174.147)"/><circle class="i" cx="2.393" cy="2.393" r="2.393" transform="translate(153.485 178.668)"/><ellipse class="j" cx="3.587" cy="2.393" rx="3.587" ry="2.393" transform="translate(143.033 190.412) rotate(-71.4)"/><circle class="h" cx="3.587" cy="3.587" r="3.587" transform="translate(191.066 173.47)"/><circle class="h" cx="1.794" cy="1.794" r="1.794" transform="translate(203.774 169.697)"/><g class="k" transform="translate(123.66 19.958)"><g class="f"><path class="l" d="M581.346,184.579l4.532-13.449a23.03,23.03,0,0,0-8.527-26.055l.037-.022a22.6,22.6,0,0,0-5.8-2.94h0l-.062-.022-.07-.022h0a22.623,22.623,0,0,0-6.212-1.169,21.788,21.788,0,0,0-2.246,0,22.9,22.9,0,0,0-3.856.533c-.368.081-.735.173-1.07.272s-.709.206-1.059.32c-.7.232-1.386.493-2.058.79-.338.147-.673.3-1,.467a22.6,22.6,0,0,0-2.849,1.676c-.305.21-.6.426-.9.647a22.788,22.788,0,0,0-7.807,10.879l-7.123,21.189a22.735,22.735,0,0,0-.985,10.335c.074.533.165,1.062.272,1.588s.239,1.044.368,1.558c.1.342.2.684.316,1.022.169.5.368,1.007.555,1.5.136.327.279.654.43.978.3.643.629,1.272.985,1.886a19.891,19.891,0,0,0,1.161,1.794c.309.434.636.86.974,1.272.456.551.934,1.084,1.441,1.591a22.718,22.718,0,0,0,7.718,5.105h0l.125.051a7.947,7.947,0,0,1,.515-.8A5,5,0,0,1,554,203.379c.132.029.265.07.4.11.926.327,1.838.912,2.731,1.2a2.448,2.448,0,0,0,2.062-.026c1.786-.952,1.125-3.955,2.657-5.271a2.394,2.394,0,0,1,.224-.169.691.691,0,0,1-.059-.085c1.183-.735,2.823-.246,4.186.228,1.47.518,3.389.867,4.411-.334.691-.823.64-2.077,1.3-2.94.765-.992,2.205-1.1,3.451-.926h.063a3.373,3.373,0,0,0,4.815-3.227A20.085,20.085,0,0,1,581.346,184.579Z" transform="translate(-534.084 -140.871)"/></g><path class="h" d="M551.341,206.544a4.777,4.777,0,0,1,4.679-2.1c1.764.4,3.437,2.08,5.006,1.239,2.146-1.147.625-5.363,4.109-5.675a4.572,4.572,0,0,1,2.121.368c1.47.6,3.771,1.275,4.9-.074.665-.794.617-2,1.253-2.826a3.475,3.475,0,0,1,3.33-.893l.059.018a3.254,3.254,0,0,0,4.646-3.113,19.223,19.223,0,0,1,1.047-7.1l4.366-12.978a22.192,22.192,0,0,0-13.912-28.04h0a22.192,22.192,0,0,0-28.033,13.915l-6.884,20.41a22.2,22.2,0,0,0,12.8,27.621A7.9,7.9,0,0,1,551.341,206.544Z" transform="translate(-535.858 -142.992)"/><circle class="i" cx="2.393" cy="2.393" r="2.393" transform="translate(21.228 11.86)"/><circle class="i" cx="2.393" cy="2.393" r="2.393" transform="translate(34.834 16.436)"/></g><path class="m" d="M574,186a32.167,32.167,0,0,1,1.026,8.086c0,22.52-23.563,40.776-52.633,40.776C498.6,234.847,478.5,222.622,472,205.848c4.83,18.66,26.1,32.712,51.607,32.712,29.069,0,52.636-18.256,52.636-40.776A32.4,32.4,0,0,0,574,186Z" transform="translate(-371.362 -149.455)"/><g class="a" transform="translate(42.181 37.956)"><ellipse class="b" cx="106.36" cy="28.452" rx="106.36" ry="28.452"/></g><path class="h" d="M430.853,192.4c-58.138,0-105.273,12.316-105.273,27.515H536.125C536.125,204.716,488.991,192.4,430.853,192.4Z" transform="translate(-284.812 -153.503)"/><path class="h" d="M430.853,294.771c58.138,0,105.273-12.316,105.273-27.511H325.58C325.58,282.454,372.714,294.771,430.853,294.771Z" transform="translate(-284.812 -201.722)"/><path class="n" d="M430.853,294.771c58.138,0,105.273-12.316,105.273-27.511H325.58C325.58,282.454,372.714,294.771,430.853,294.771Z" transform="translate(-284.812 -201.722)"/><rect class="n" width="100.487" height="14.356" rx="7.178" transform="translate(101.897 58.491)"/><path class="o" d="M306.118,140.074a1.353,1.353,0,0,1-.753-1.632.683.683,0,0,0,.029-.151h0a.676.676,0,0,0-1.217-.448h0a.668.668,0,0,0-.074.132,1.349,1.349,0,0,1-1.632.753.734.734,0,0,0-.151-.029h0a.676.676,0,0,0-.448,1.217h0a.6.6,0,0,0,.132.077,1.353,1.353,0,0,1,.753,1.632.694.694,0,0,0-.029.147h0a.676.676,0,0,0,1.217.452h0a.606.606,0,0,0,.074-.136,1.349,1.349,0,0,1,1.632-.735.734.734,0,0,0,.151.029h0a.676.676,0,0,0,.448-1.217h0A.6.6,0,0,0,306.118,140.074Z" transform="translate(-256.907 -118.827)"/><path class="o" d="M815.15,446.074a1.353,1.353,0,0,1-.735-1.632.685.685,0,0,0,.029-.151h0a.676.676,0,0,0-1.217-.448h0a.668.668,0,0,0-.074.132,1.349,1.349,0,0,1-1.632.753.737.737,0,0,0-.151-.029h0a.676.676,0,0,0-.448,1.217h0a.6.6,0,0,0,.132.077,1.353,1.353,0,0,1,.735,1.632.694.694,0,0,0-.029.147h0a.676.676,0,0,0,1.217.452h0a.6.6,0,0,0,.073-.136,1.349,1.349,0,0,1,1.632-.735.735.735,0,0,0,.151.029h0a.676.676,0,0,0,.448-1.217h0a.6.6,0,0,0-.132-.092Z" transform="translate(-588.576 -313.934)"/><path class="o" d="M253.118,588.074a1.353,1.353,0,0,1-.753-1.632.683.683,0,0,0,.029-.151h0a.676.676,0,0,0-1.217-.448h0a.668.668,0,0,0-.074.132,1.349,1.349,0,0,1-1.632.754.733.733,0,0,0-.151-.029h0a.676.676,0,0,0-.448,1.217h0a.594.594,0,0,0,.132.077,1.353,1.353,0,0,1,.753,1.632.694.694,0,0,0-.029.147h0a.676.676,0,0,0,1.217.452h0a.607.607,0,0,0,.074-.136,1.349,1.349,0,0,1,1.632-.735.733.733,0,0,0,.151.029h0a.676.676,0,0,0,.448-1.217h0A.6.6,0,0,0,253.118,588.074Z" transform="translate(-223.387 -404.369)"/><path class="o" d="M198.15,257.074a1.353,1.353,0,0,1-.735-1.632.682.682,0,0,0,.029-.151h0a.676.676,0,0,0-1.217-.448h0a.668.668,0,0,0-.074.132,1.349,1.349,0,0,1-1.632.753.736.736,0,0,0-.151-.029h0a.676.676,0,0,0-.448,1.217h0a.6.6,0,0,0,.132.077,1.353,1.353,0,0,1,.753,1.632.7.7,0,0,0-.029.147h0a.676.676,0,0,0,1.217.452h0a.606.606,0,0,0,.074-.136,1.349,1.349,0,0,1,1.632-.735.737.737,0,0,0,.151.029h0a.676.676,0,0,0,.448-1.217h0A.6.6,0,0,0,198.15,257.074Z" transform="translate(-188.634 -193.566)"/><path class="o" d="M804.986,89.074a1.353,1.353,0,0,1-.735-1.632.685.685,0,0,0,.029-.151h0a.676.676,0,0,0-1.217-.448h0a.666.666,0,0,0-.074.132,1.349,1.349,0,0,1-1.632.735.733.733,0,0,0-.151-.029h0a.676.676,0,0,0-.467,1.253h0a.6.6,0,0,0,.132.077,1.353,1.353,0,0,1,.735,1.632.694.694,0,0,0-.029.147h0a.676.676,0,0,0,1.242.434h0a.6.6,0,0,0,.074-.136,1.349,1.349,0,0,1,1.632-.735.734.734,0,0,0,.151.029h0a.676.676,0,0,0,.448-1.217h0A.6.6,0,0,0,804.986,89.074Z" transform="translate(-581.933 -86.571)"/><g class="k" transform="translate(37.857 93.627)"><rect class="p" width="1.103" height="6.248" transform="translate(2.573)"/><rect class="p" width="1.103" height="6.248" transform="translate(6.248 2.573) rotate(90)"/></g><g class="k" transform="translate(289.752 64.578)"><rect class="p" width="1.103" height="6.248" transform="translate(2.573)"/><rect class="p" width="1.103" height="6.248" transform="translate(6.248 2.573) rotate(90)"/></g><g class="k" transform="translate(252.997 165.885)"><rect class="p" width="1.103" height="6.248" transform="translate(2.573)"/><rect class="p" width="1.103" height="6.248" transform="translate(6.248 2.573) rotate(90)"/></g><circle class="q" cx="2.205" cy="2.205" r="2.205" transform="translate(250.792 27.878)"/><circle class="q" cx="2.205" cy="2.205" r="2.205" transform="translate(0 2.517)"/><circle class="q" cx="2.205" cy="2.205" r="2.205" transform="translate(63.389 127.77)"/><ellipse class="n" cx="12.497" cy="2.573" rx="12.497" ry="2.573" transform="translate(70.209 53.535)"/><ellipse class="n" cx="12.497" cy="2.573" rx="12.497" ry="2.573" transform="translate(70.209 72.781)"/><ellipse class="n" cx="12.497" cy="2.573" rx="12.497" ry="2.573" transform="translate(206.063 53.535)"/><ellipse class="n" cx="12.497" cy="2.573" rx="12.497" ry="2.573" transform="translate(206.063 72.781)"/><ellipse class="n" cx="12.497" cy="2.573" rx="12.497" ry="2.573" transform="translate(139.716 43.16)"/><ellipse class="n" cx="12.497" cy="2.573" rx="12.497" ry="2.573" transform="translate(148.492 16.33)"/><ellipse class="n" cx="12.497" cy="2.573" rx="12.497" ry="2.573" transform="translate(125.674 27.356)"/><ellipse class="n" cx="12.497" cy="2.573" rx="12.497" ry="2.573" transform="translate(169.555 32.134)"/><ellipse class="n" cx="12.497" cy="2.573" rx="12.497" ry="2.573" transform="translate(139.716 80.407)"/></svg>-->
                    <img src="{{ asset('assets/img/home/17.png')}}" alt="" style="width: 130%; position: relative; right:25px;">
                    <div class="mt-10">
                        <h4 class="mb-4">Welcome to Youth for Climate Change.</h4>
                        <p>
                            Let's make the earth green again
                        </p>
                    </div>
                </div>
            </div>
    </div>
</div>

    </div>

    <script src="{{asset('assets/js/register/jquery.min.js')}}"></script>
    <script src="{{asset('assets/js/register/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/js/register/main.js')}}"></script>
    <script src="{{asset('assets/js/register/demo.js')}}"></script>
    
</body>

</html>
