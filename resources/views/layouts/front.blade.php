<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/favicon/1.png')}}" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('assets/css/global.min.css')}}">
    <script src="{{ asset('assets/js/critical.min.js')}}"></script>
    <!--[if lt IE 9]>
             <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
             <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
         <![endif]-->
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-105017042-8"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
                     function gtag(){dataLayer.push(arguments);}
                     gtag('js', new Date());
                     gtag('config', 'UA-105017042-8');
    </script>
    <script type="text/javascript">
        (function(e,t){var n=e.amplitude||{_q:[],_iq:{}};var r=t.createElement("script")
                     ;r.type="text/javascript"
                     ;r.integrity="sha384-d/yhnowERvm+7eCU79T/bYjOiMmq4F11ElWYLmt0ktvYEVgqLDazh4+gW9CKMpYW"
                     ;r.crossOrigin="anonymous";r.async=true
                     ;r.src="https://cdn.amplitude.com/libs/amplitude-5.2.2-min.gz.js"
                     ;r.onload=function(){if(!e.amplitude.runQueuedFunctions){
                     console.log("[Amplitude] Error: could not load SDK")}}
                     ;var i=t.getElementsByTagName("script")[0];i.parentNode.insertBefore(r,i)
                     ;function s(e,t){e.prototype[t]=function(){
                     this._q.push([t].concat(Array.prototype.slice.call(arguments,0)));return this}}
                     var o=function(){this._q=[];return this}
                     ;var a=["add","append","clearAll","prepend","set","setOnce","unset"]
                     ;for(var u=0;u<a.length;u++){s(o,a[u])}n.Identify=o;var c=function(){this._q=[]
                     ;return this}
                     ;var l=["setProductId","setQuantity","setPrice","setRevenueType","setEventProperties"]
                     ;for(var p=0;p<l.length;p++){s(c,l[p])}n.Revenue=c
                     ;var d=["init","logEvent","logRevenue","setUserId","setUserProperties","setOptOut","setVersionName","setDomain","setDeviceId","setGlobalUserProperties","identify","clearUserProperties","setGroup","logRevenueV2","regenerateDeviceId","groupIdentify","onInit","logEventWithTimestamp","logEventWithGroups","setSessionId","resetSessionId"]
                     ;function v(e){function t(t){e[t]=function(){
                     e._q.push([t].concat(Array.prototype.slice.call(arguments,0)))}}
                     for(var n=0;n<d.length;n++){t(d[n])}}v(n);n.getInstance=function(e){
                     e=(!e||e.length===0?"$default_instance":e).toLowerCase()
                     ;if(!n._iq.hasOwnProperty(e)){n._iq[e]={_q:[]};v(n._iq[e])}return n._iq[e]}
                     ;e.amplitude=n})(window,document);
 
                     amplitude.getInstance().init("24b854967c50b3602031a2c1c92b9bf8", null, {
                         includeReferrer: true,
                     });
    </script>
    <title>@yield('PageTitle') | {{config('app.name')}}</title>
    <meta name="generator" content="SEOmatic">
    <meta name="keywords"
        content="payments, africa, nigeria, ghana, fintech, tech in africa, ussd, mobile money, pos, paystack">
    <meta name="description"
        content="Over 60,000 businesses in Nigeria use Paystack to collect payments with a modern, secure payment gateway.">
    <meta name="referrer" content="no-referrer-when-downgrade">
    <meta name="robots" content="all">
    <meta content="1963073953927815" property="fb:profile_id">
    <meta content="en_US" property="og:locale">
    <meta content="en_GH" property="og:locale:alternate">
    <meta content="en_US" property="og:locale:alternate">
    <meta content="Paystack" property="og:site_name">
    <meta content="website" property="og:type">
    <meta content="https://paystack.com/" property="og:url">
    <meta content="Paystack - Modern online and offline payments for Africa" property="og:title">
    <meta
        content="Over 60,000 businesses in Nigeria use Paystack to collect payments with a modern, secure payment gateway."
        property="og:description">
    <meta
        content="https://assets.paystack.com/assets/img/hero/_1200x630_fit_center-center_82_none/paystack-opengraph.png?mtime=1535197556"
        property="og:image">
    <meta content="1200" property="og:image:width">
    <meta content="630" property="og:image:height">
    <meta
        content="An image of the Paystack logo - four blue stripes, 3 long and 1 short - in the shape of a P, against a dark blue (almost black) background"
        property="og:image:alt">
    <meta content="https://www.instagram.com/paystackhq/" property="og:see_also">
    <meta content="https://www.youtube.com/paystackhq" property="og:see_also">
    <meta content="https://www.linkedin.com/company/paystack/" property="og:see_also">
    <meta content="https://www.facebook.com/PaystackHQ/" property="og:see_also">
    <meta content="https://twitter.com/paystack" property="og:see_also">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@paystack">
    <meta name="twitter:creator" content="@paystack">
    <meta name="twitter:title" content="Paystack - Modern online and offline payments for Africa">
    <meta name="twitter:description"
        content="Over 60,000 businesses in Nigeria use Paystack to collect payments with a modern, secure payment gateway.">
    <meta name="twitter:image" content="https://assets.paystack.com/assets/img/hero/paystack-twitter-card.png">
    <meta name="twitter:image:width" content="1024">
    <meta name="twitter:image:height" content="512">
    <meta name="twitter:image:alt"
        content="An image of the Paystack logo - four blue stripes, 3 long and 1 short - in the shape of a P, against a dark blue (almost black) background">
    <link href="https://paystack.com/" rel="canonical">
    <link href="https://paystack.com/" rel="home">
    <link type="text/plain" href="https://paystack.com/humans.txt" rel="author">
    <link href="https://172.31.65.106/gh/" rel="alternate" hreflang="en-gh">
    <link href="https://paystack.com/" rel="alternate" hreflang="x-default">
    <link href="https://paystack.com/" rel="alternate" hreflang="en-us">
    <style>
        header {
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 100;
            transform: translateY(0);
            transition: transform 0.3s cubic-bezier(0.075, 0.82, 0.165, 1)
        }

        .c-nav {
            display: -ms-flexbox;
            display: flex;
            -ms-flex-pack: justify;
            justify-content: space-between;
            width: 100%;
            padding: 1.2rem 4.8rem;
            -ms-flex-flow: row wrap;
            flex-flow: row wrap;
            position: relative;
            transition: background linear 0.1s
        }

        @media screen and (max-width: 1240px) {
            .c-nav {
                padding: 1.2rem
            }
        }

        @media screen and (max-width: 1020px) {
            .c-nav {
                display: none
            }
        }

        .c-nav__logo {
            display: -ms-inline-flexbox;
            display: inline-flex;
            margin-right: 24px;
            position: relative;
            z-index: 200
        }

        .c-nav__logo svg {
            height: 22px
        }

        .c-nav--mobile {
            position: absolute
        }

        .c-nav--left,
        .c-nav--right {
            display: -ms-flexbox;
            display: flex;
            -ms-flex-align: center;
            align-items: center
        }

        .c-nav--center {
            display: -ms-flexbox;
            display: flex;
            -ms-flex-align: center;
            align-items: center;
            -ms-flex-pack: center;
            justify-content: center
        }

        .c-nav--blue {
            background: rgba(234, 246, 252, 0.95)
        }

        .c-nav--green {
            background: rgba(241, 254, 244, 0.95)
        }

        .c-nav--white {
            background: rgba(255, 255, 255, 0.95)
        }

        .c-nav--offwhite {
            background: rgba(249, 251, 252, 0.95)
        }

        .c-nav--dark-blue {
            background: #011b33
        }

        .c-nav--dark-blue .c-nav-menu__item a {
            color: white
        }

        @media screen and (max-width: 600px) {
            .c-nav {
                padding: 16px 0
            }
        }

        .c-nav-menu>li {
            margin-bottom: 0
        }

        .c-nav-menu--horizontal {
            display: -ms-flexbox;
            display: flex;
            -ms-flex-align: center;
            align-items: center
        }

        .c-nav-menu--vertical~.c-nav-menu--vertical {
            margin-top: 35px
        }

        .c-nav-menu__label {
            font-size: 1rem;
            color: #3d5e69;
            text-transform: uppercase;
            margin-bottom: 10px;
            display: block;
            letter-spacing: 0.5px;
            line-height: 1.2;
            font-weight: 500
        }

        .c-nav-menu__item a {
            font-size: 1.5rem;
            font-weight: 500;
            color: #011b33;
            line-height: 1.3;
            vertical-align: middle;
            letter-spacing: -0.01em
        }

        .c-nav-menu__item a .u-icon-arrow {
            margin-left: 4px;
            color: #011b33;
            transition: border linear 0.1s
        }

        .c-nav-menu__item a:hover {
            color: #0ba4db
        }

        .c-nav-menu__item a:hover .u-icon-arrow {
            border-color: #0ba4db transparent transparent transparent
        }

        .c-nav-menu__item[href="#"] .c-nav-menu__item a:hover {
            color: rgba(1, 27, 51, 0.5)
        }

        .c-nav-menu--horizontal>.c-nav-menu__item {
            display: -ms-flexbox;
            display: flex;
            -ms-flex-align: center;
            align-items: center;
            margin-bottom: 0;
            margin-right: 20px;
            height: 40px
        }

        .c-nav-menu--horizontal>.c-nav-menu__item:last-child {
            margin-right: 0
        }

        .c-nav-menu--horizontal>.c-nav-menu__item--countries {
            cursor: pointer;
            margin-left: 16px;
            position: relative;
            padding: 5px
        }

        .c-nav-menu--horizontal>.c-nav-menu__item--countries span:not(.u-flag-icon) {
            color: rgba(1, 27, 51, 0.7)
        }

        .c-nav-menu--horizontal>.c-nav-menu__item--countries .u-flag-icon {
            border-radius: 50%;
            width: 20px;
            border-radius: 4px;
            width: 16px
        }

        .c-nav-menu--horizontal>.c-nav-menu__item--countries .c-nav-menu__item .u-flag-icon {
            display: inline-block;
            margin-right: 10px
        }

        .c-nav-menu--horizontal>.c-nav-menu__item--countries li.c-nav-menu__item {
            margin-bottom: 5px
        }

        .c-nav-menu--vertical>.c-nav-menu__item {
            margin-bottom: 5px;
            width: 100%
        }

        .c-nav-menu--vertical>.c-nav-menu__item:last-child {
            margin-bottom: 0
        }

        .c-nav-menu__item--has-icon {
            margin-bottom: 15px
        }

        .c-nav-menu__item--has-icon a {
            display: -ms-flexbox;
            display: flex
        }

        .c-nav-menu__item--has-icon .c-nav-menu__icon {
            margin-right: 20px
        }

        .c-nav-menu__item--has-icon .c-nav-menu__text {
            -ms-flex: 1;
            flex: 1
        }

        .c-nav-menu--horizontal .c-nav-menu__item--has-icon,
        .c-nav-menu--vertical .c-nav-menu__item--has-icon {
            margin-bottom: 20px
        }

        .c-nav-menu--horizontal .c-nav-menu__item--has-icon:last-child,
        .c-nav-menu--vertical .c-nav-menu__item--has-icon:last-child {
            margin-bottom: 0
        }

        .c-nav-menu__icon {
            width: 60px;
            height: 60px;
            background: whitesmoke;
            border-radius: 50%;
            overflow: hidden
        }

        .c-nav-menu__icon--md {
            width: 50px;
            height: 50px
        }

        .c-nav-menu__icon img {
            width: 100%;
            transition: transform .3s
        }

        .c-nav-menu__item--has-icon:hover .c-nav-menu__icon img {
            transform: scale(1.2)
        }

        .c-nav-menu__text h4 {
            font-size: 1.6rem;
            font-weight: 500;
            margin: 0 0 5px
        }

        .c-nav-menu__item--has-icon:hover .c-nav-menu__text h4 {
            color: #0ba4db
        }

        .c-nav-menu__text p {
            font-size: 1.4rem;
            margin: 0;
            letter-spacing: 0;
            line-height: 1.5
        }

        .c-nav-menu__item--has-icon:hover .c-nav-menu__text p {
            color: #011b33
        }

        .c-nav.c-nav--mobile-only {
            display: none;
            padding: 0
        }

        @media screen and (max-width: 1020px) {
            .c-nav.c-nav--mobile-only {
                display: block;
                overflow-x: hidden
            }
        }

        .c-nav.c-nav--mobile-only .c-nav__body--parent {
            overflow-x: hidden;
            transition: all 0.3s cubic-bezier(0.23, 1, 0.32, 1);
            position: relative;
            display: none
        }

        .c-nav.c-nav--mobile-only .c-nav__body .c-header {
            margin-bottom: 10px
        }

        .c-nav.c-nav--mobile-only .c-nav__body .c-header .c-button {
            opacity: 0.7;
            transform: translateY(-8px)
        }

        .c-nav.c-nav--mobile-only .c-nav__body .c-header .c-button__text {
            color: #55717b
        }

        .c-nav.c-nav--mobile-only .c-nav__body .c-header .c-button__icon svg path {
            fill: #55717b
        }

        .c-nav.c-nav--mobile-only .c-nav__body .c-header .c-button__icon {
            display: -ms-flexbox;
            display: flex;
            -ms-flex-align: center;
            align-items: center;
            -ms-flex-pack: center;
            justify-content: center
        }

        .c-nav.c-nav--mobile-only.c-nav--is-opened .c-nav__body--parent {
            display: block
        }

        .c-nav.c-nav--mobile-only .c-nav__mask {
            width: 200%;
            transition: all 0.3s cubic-bezier(0.23, 1, 0.32, 1)
        }

        .c-nav.c-nav--mobile-only .c-nav__mask>div {
            width: 50%;
            float: left;
            padding: 16px
        }

        .c-nav.c-nav--mobile-only .c-nav__body--is-opened .c-nav__mask {
            transform: translateX(-50%)
        }

        .c-nav.c-nav--mobile-only .c-nav__header {
            padding: 16px;
            display: -ms-flexbox;
            display: flex;
            -ms-flex-pack: justify;
            justify-content: space-between;
            width: 100%;
            justify-content: space-between;
            border-bottom: 1px solid rgba(240, 242, 243, 0.6);
            position: relative;
            z-index: 999
        }

        .c-nav.c-nav--mobile-only .c-nav__header .c-nav--right .c-button {
            display: none
        }

        .c-nav.c-nav--mobile-only .c-nav__trigger {
            cursor: pointer;
            display: inline-block;
            position: relative;
            margin: 10px 5px;
            z-index: 20;
            margin-left: 15px
        }

        .c-nav.c-nav--mobile-only .c-nav__trigger--is-active span:nth-child(2) {
            opacity: 0
        }

        .c-nav.c-nav--mobile-only .c-nav__trigger--is-active span:first-child {
            top: 0.438em;
            transform: rotate(45deg)
        }

        .c-nav.c-nav--mobile-only .c-nav__trigger--is-active span:last-child {
            top: -0.313em;
            transform: rotate(-45deg)
        }

        .c-nav.c-nav--mobile-only .c-nav__trigger span {
            background-color: rgba(1, 27, 51, 0.95);
            display: block;
            height: 0.133em;
            margin-bottom: .250em;
            position: relative;
            top: 0;
            transition: all 0.3s ease-in-out;
            width: 1.25em
        }

        .c-nav.c-nav--mobile-only .c-nav__trigger span:last-child {
            margin-bottom: 0
        }

        .c-nav.c-nav--mobile-only .c-nav-menu__group {
            margin-bottom: 30px
        }

        .c-nav.c-nav--mobile-only .c-nav-menu__group:last-child {
            margin-bottom: 0
        }

        .c-nav.c-nav--mobile-only .c-nav-menu__item {
            margin-bottom: 16px;
            position: relative;
            transition: .3s all
        }

        .c-nav.c-nav--mobile-only .c-nav-menu__item:last-child {
            margin-bottom: 0;
            margin-top: 20px
        }

        .c-nav.c-nav--mobile-only .c-nav-menu__item a[href="#"]:before {
            content: "";
            position: absolute;
            right: 0;
            width: 0;
            height: 0;
            top: 50%;
            transform: translateY(-50%) rotate(0);
            border-style: solid;
            border-width: 3px 0 3px 5.2px;
            border-color: transparent transparent transparent #5c6a6e;
            transition: ease-in-out 0.1s transform
        }

        .c-nav.c-nav--mobile-only .c-nav-menu__item:hover {
            color: #000
        }

        .c-nav.c-nav--mobile-only .c-nav-menu__item--cta::before {
            content: none
        }

        .c-nav.c-nav--mobile-only .c-nav-menu__item--cta .u-text--secondary {
            color: #3bb75e
        }

        .c-nav.c-nav--mobile-only .c-nav-menu__item--cta .c-button {
            text-align: center;
            height: 40px;
            line-height: 40px;
            color: white
        }

        .c-nav.c-nav--mobile-only .c-nav-menu__group .c-nav-menu__item:last-child {
            margin-top: 0
        }
    </style>
    <style>
        .c-homepage-animation {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            overflow: hidden
        }

        .c-homepage-animation__curve {
            position: absolute;
            top: calc(50% - 200px);
            left: 0;
            width: 100%;
            height: 400px;
            background-size: auto 350px;
            display: none
        }

        .c-homepage-animation--play .c-homepage-animation__curve {
            -webkit-clip-path: polygon(0 0, 0 0, 0 100%, 0 100%);
            clip-path: polygon(0 0, 0 0, 0 100%, 0 100%);
            animation: moveCurve 4s;
            animation-iteration-count: 1
        }

        .c-homepage-animation__curve:before {
            content: '';
            position: absolute;
            left: 0;
            right: 0;
            top: 0;
            width: 100%;
            height: 100%;
            opacity: 0.2;
            background-size: inherit;
            background-image: url("/assets/img/patterns/curved-pattern.png");
            background-repeat: repeat-x
        }

        @keyframes moveCurve {
            0% {
                -webkit-clip-path: polygon(0 0, 0 0, 0 100%, 0 100%);
                clip-path: polygon(0 0, 0 0, 0 100%, 0 100%)
            }

            50% {
                -webkit-clip-path: polygon(0 0, 100% 0, 100% 100%, 0 100%);
                clip-path: polygon(0 0, 100% 0, 100% 100%, 0 100%)
            }

            100% {
                -webkit-clip-path: polygon(100% 0, 100% 0, 100% 100%, 100% 100%);
                clip-path: polygon(100% 0, 100% 0, 100% 100%, 100% 100%)
            }
        }

        .c-homepage-animation__worldmap {
            position: absolute;
            top: 0;
            left: 45%;
            height: 100%;
            width: 55%;
            overflow: hidden;
            border-radius: 50%;
            transition: .3s ease-in;
            z-index: 2
        }

        @media all and (max-width: 800px) {
            .c-homepage-animation__worldmap {
                left: 0;
                top: -50%;
                width: 100%
            }
        }

        .c-homepage-animation--play .c-homepage-animation__worldmap {
            opacity: 1
        }

        .c-homepage-animation__worldmap svg {
            position: absolute;
            transition: 2s cubic-bezier(0.075, 0.82, 0.165, 1);
            left: -30%;
            top: 0;
            height: 100%
        }

        @media all and (max-width: 800px) {
            .c-homepage-animation__worldmap svg {
                left: -600px;
                top: 100px
            }
        }

        .c-homepage-animation--americas .c-homepage-animation__worldmap svg {
            top: 10%;
            left: 0
        }

        .c-homepage-animation--africa .c-homepage-animation__worldmap svg {
            left: -35%;
            top: 5%
        }

        .c-homepage-animation--europe .c-homepage-animation__worldmap svg {
            left: -50%;
            top: 15%
        }

        .c-homepage-animation__worldmap svg .map-pointer {
            opacity: 0;
            transform: scale(0.5);
            transition: .2s ease-in;
            pointer-events: none
        }

        .c-homepage-animation__worldmap svg .map-pointer#united-states {
            transform-origin: 159px 212px
        }

        .c-homepage-animation__worldmap svg .map-pointer#canada {
            transform-origin: 229px 82px
        }

        .c-homepage-animation__worldmap svg .map-pointer#brazil {
            transform-origin: 375px 432px
        }

        .c-homepage-animation__worldmap svg .map-pointer#nigeria {
            transform-origin: 658px 334px
        }

        .c-homepage-animation__worldmap svg .map-pointer#egypt {
            transform-origin: 773px 260px
        }

        .c-homepage-animation__worldmap svg .map-pointer#south-africa {
            transform-origin: 744px 531px
        }

        .c-homepage-animation__worldmap svg .map-pointer#uk {
            transform-origin: 674px 161px
        }

        .c-homepage-animation__worldmap svg .map-pointer#china {
            transform-origin: 1084px 201px
        }

        .c-homepage-animation__worldmap svg .map-pointer#india {
            transform-origin: 1014px 271px
        }

        .c-homepage-animation__worldmap svg .map-pointer#norway {
            transform-origin: 754px 41px
        }

        .c-homepage-animation--europe .c-homepage-animation__worldmap svg .map-pointer#norway,
        .c-homepage-animation--europe .c-homepage-animation__worldmap svg .map-pointer#china,
        .c-homepage-animation--europe .c-homepage-animation__worldmap svg .map-pointer#uk,
        .c-homepage-animation--europe .c-homepage-animation__worldmap svg .map-pointer#india {
            opacity: 1;
            transform: scale(1)
        }

        .c-homepage-animation--europe .c-homepage-animation__worldmap svg .map-pointer#uk {
            transition-delay: .6s
        }

        .c-homepage-animation--europe .c-homepage-animation__worldmap svg .map-pointer#norway {
            transition-delay: 1s
        }

        .c-homepage-animation--europe .c-homepage-animation__worldmap svg .map-pointer#india {
            transition-delay: 1.5s
        }

        .c-homepage-animation--europe .c-homepage-animation__worldmap svg .map-pointer#china {
            transition-delay: 2.1s
        }

        .c-homepage-animation--americas .c-homepage-animation__worldmap svg .map-pointer#canada,
        .c-homepage-animation--americas .c-homepage-animation__worldmap svg .map-pointer#united-states,
        .c-homepage-animation--americas .c-homepage-animation__worldmap svg .map-pointer#brazil {
            opacity: 1;
            transform: scale(1)
        }

        .c-homepage-animation--americas .c-homepage-animation__worldmap svg .map-pointer#canada {
            transition-delay: .6s
        }

        .c-homepage-animation--americas .c-homepage-animation__worldmap svg .map-pointer#united-states {
            transition-delay: 1s
        }

        .c-homepage-animation--americas .c-homepage-animation__worldmap svg .map-pointer#brazil {
            transition-delay: 1.5s
        }

        .c-homepage-animation--africa .c-homepage-animation__worldmap svg .map-pointer {
            cursor: e-resize;
            pointer-events: all
        }

        .c-homepage-animation--africa .c-homepage-animation__worldmap svg .map-pointer#brazil,
        .c-homepage-animation--africa .c-homepage-animation__worldmap svg .map-pointer#nigeria,
        .c-homepage-animation--africa .c-homepage-animation__worldmap svg .map-pointer#south-africa,
        .c-homepage-animation--africa .c-homepage-animation__worldmap svg .map-pointer#egypt,
        .c-homepage-animation--africa .c-homepage-animation__worldmap svg .map-pointer#norway {
            opacity: 1;
            transform: scale(1) rotate(0)
        }

        .c-homepage-animation--africa .c-homepage-animation__worldmap svg .map-pointer#norway {
            transition-delay: .6s
        }

        .c-homepage-animation--africa .c-homepage-animation__worldmap svg .map-pointer#egypt {
            transition-delay: 1s
        }

        .c-homepage-animation--africa .c-homepage-animation__worldmap svg .map-pointer#south-africa {
            transition-delay: 1.5s
        }

        .c-homepage-animation--africa .c-homepage-animation__worldmap svg .map-pointer#nigeria {
            transition-delay: 2s
        }

        .c-homepage-animation--africa .c-homepage-animation__worldmap svg .map-pointer:hover {
            transform: scale(1.1)
        }

        .c-homepage-animation--africa .c-homepage-animation__worldmap svg .map-pointer--left {
            cursor: w-resize
        }

        .c-homepage-animation__tooltip {
            position: absolute;
            z-index: 20;
            background: #f1fdf4;
            max-width: 180px;
            transition: transform .3s, opacity .3s;
            opacity: 0;
            transform: translateY(-10px) rotate(-2deg)
        }

        .c-homepage-animation__tooltip--on-left {
            transform: translateY(-10px) rotate(2deg);
            text-align: right
        }

        .c-homepage-animation__tooltip--is-visible {
            opacity: 1;
            transform: translateY(0) rotate(0)
        }

        .c-homepage-animation__tooltip h5 {
            font-size: 1.2rem;
            line-height: 1;
            margin: 0
        }

        .c-homepage-animation__tooltip h5 b {
            color: #3bb75e
        }

        .c-homepage-animation__tooltip p {
            font-size: 1.2rem;
            line-height: 1.4;
            margin: 5px 0
        }
    </style>
    <style>
        .c-hero-video {
            width: 90%;
            max-width: 1024px;
            position: relative;
            z-index: 1000;
            transition: all .3s linear;
            opacity: 0
        }

        @media screen and (max-width: 600px) {
            .c-hero-video {
                width: 100%
            }
        }

        @keyframes video-in {
            to {
                opacity: 1
            }
        }

        @keyframes video-out {
            to {
                opacity: 0
            }
        }

        .u-overlay--is-entering .c-hero-video {
            animation: video-in .3s;
            animation-delay: .5s
        }

        .u-overlay--is-visible .c-hero-video {
            opacity: 1
        }

        .u-overlay--is-leaving .c-hero-video {
            animation: video-out .5s
        }

        .c-hero-video--is-visible {
            opacity: 1
        }

        .c-hero-video__iframe {
            height: 0;
            padding-bottom: 56.25%;
            position: relative;
            border-radius: 6px;
            overflow: hidden;
            box-shadow: 1px 8px 29px rgba(0, 0, 0, 0.4)
        }

        .c-hero-video__iframe iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%
        }

        .c-hero-video .c-button--close {
            width: 24px;
            height: 34px;
            position: absolute;
            right: -32px;
            border-radius: 60px;
            top: -2px;
            opacity: 0.6;
            transition: opacity linear 0.3s
        }

        .c-hero-video .c-button--close:hover {
            opacity: 0.8
        }

        @media screen and (max-width: 600px) {
            .c-hero-video .c-button--close {
                position: fixed;
                bottom: 40px;
                left: 50%;
                transform: translateX(-50%);
                opacity: 0.5;
                position: fixed;
                top: auto
            }

            .c-hero-video .c-button--close:before,
            .c-hero-video .c-button--close:after {
                content: none
            }
        }

        .c-hero-video .c-button--close span {
            padding: 0 25px;
            border-radius: 4px;
            background-color: #ffffff30;
            border: 1px solid #ffffff29;
            line-height: 2.6;
            color: white
        }
    </style>
    <style>
        .c-logo-row {
            display: -ms-flexbox;
            display: flex;
            min-height: 100px;
            -ms-flex-pack: justify;
            justify-content: space-between;
            -ms-flex-align: center;
            align-items: center;
            position: relative;
            z-index: 2
        }

        @media screen and (max-width: 750px) {
            .c-logo-row {
                -ms-flex-wrap: wrap;
                flex-wrap: wrap
            }
        }

        @media screen and (max-width: 600px) {
            .c-logo-row {
                -ms-flex-pack: start;
                justify-content: flex-start
            }
        }

        .c-logo-row--has-grid {
            margin-bottom: 5px
        }

        .c-logo-row--has-grid:last-child {
            margin-bottom: 0
        }

        @media screen and (max-width: 600px) {
            .c-logo-row--has-grid {
                display: -ms-flexbox;
                display: flex
            }

            .c-logo-row--has-grid~.c-logo-row--has-grid {
                display: none
            }
        }

        .c-logo-row--has-grid .c-logo {
            width: 100%;
            max-width: 150px;
            line-height: 0;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            position: relative
        }

        .c-logo-row--has-grid .c-logo:first-child {
            -ms-flex-pack: start;
            justify-content: flex-start
        }

        .c-logo-row--has-grid .c-logo:last-child {
            -ms-flex-pack: end;
            justify-content: flex-end
        }

        @media screen and (max-width: 600px) {
            .c-logo-row--has-grid .c-logo:last-child {
                -ms-flex-pack: start;
                justify-content: flex-start
            }
        }

        .c-logo {
            display: -ms-flexbox;
            display: flex;
            position: relative;
            height: 28px;
            -ms-flex-pack: center;
            justify-content: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none
        }

        .c-logo:first-child {
            padding-left: 0
        }

        .c-logo:last-child {
            padding-right: 0
        }

        @media screen and (max-width: 750px) {
            .c-logo {
                -ms-flex: 0 1 50%;
                flex: 0 1 50%
            }

            .c-logo:first-child {
                padding-left: 35px
            }

            .c-logo:last-child {
                padding-right: 35px
            }
        }

        @media screen and (max-width: 600px) {
            .c-logo {
                margin: 15px 0;
                height: 18px;
                -ms-flex-pack: start;
                justify-content: flex-start
            }

            .c-logo:first-child {
                padding-left: 0
            }

            .c-logo:last-child {
                padding-right: 0
            }
        }

        .c-logo>img {
            max-height: 100%
        }

        @media screen and (max-width: 600px) {
            .c-logo.u-hidden--mobile {
                display: none
            }
        }
    </style>
    <style>
        .js-scaling-overlay {
            position: fixed;
            height: 200px;
            width: 200px;
            border-radius: 50%;
            transform: scale(0.1);
            margin: -100px 0 0 -100px;
            z-index: 100;
            opacity: 0;
            background-color: #0ba4db;
            pointer-events: none;
            transition: transform .6s ease-in-out, background-color .6s ease-in-out
        }

        .js-scaling-overlay--expanded {
            transform: scale(32);
            background-color: rgba(0, 0, 0, 0.75)
        }

        .c-hero {
            display: -ms-flexbox;
            display: flex;
            position: relative
        }

        @media screen and (max-width: 600px) {
            .c-hero {
                display: block
            }
        }

        .c-hero__body {
            max-width: 64rem;
            width: 100%;
            opacity: 1;
            transition: opacity ease-in-out 0.3s
        }

        .c-hero__side {
            -ms-flex: 1;
            flex: 1
        }

        .c-hero__cta {
            margin-top: 28px
        }

        .c-hero__cta .c-button {
            margin-right: 20px
        }

        .c-hero__cta .c-button:last-child {
            margin-right: 0
        }

        @keyframes promptContinue {

            0%,
            70%,
            90% {
                transform: translateY(0)
            }

            80% {
                transform: translateY(12px)
            }
        }

        .c-hero__continue {
            position: absolute;
            top: 100%;
            left: 0;
            right: 0;
            margin: 50px auto;
            text-align: center;
            color: #011b33;
            animation: promptContinue infinite ease-in-out 3s;
            font-family: sans-serif;
            z-index: 2
        }

        .c-hero--404 h1 {
            font-size: 16rem
        }

        .c-hero--404 .c-hero__heading {
            margin-bottom: 30px
        }

        .c-hero--central {
            text-align: center
        }

        .c-hero--central .c-hero__body {
            padding: 200px 0 150px
        }

        @media screen and (max-width: 600px) {
            .c-hero--central .c-hero__body {
                padding-bottom: 100px
            }
        }

        .c-hero--central-no-float:before {
            content: none
        }

        .c-hero--has-overflow:before {
            content: '';
            position: absolute;
            left: -48px;
            right: -48px;
            bottom: -80px;
            height: 120px;
            border-radius: 6px 6px 0 0;
            background: white;
            box-shadow: 2px 0px 1px rgba(0, 0, 0, 0.02), -2px -2px 1px rgba(0, 0, 0, 0.02);
            z-index: 1
        }

        .c-hero--central,
        .c-hero--pricing,
        .c-hero--form {
            -ms-flex-pack: center;
            justify-content: center;
            -ms-flex-align: center;
            align-items: center
        }

        .c-hero--central .c-hero__body,
        .c-hero--pricing .c-hero__body,
        .c-hero--form .c-hero__body {
            margin: 0 auto
        }

        .c-hero--has-video .c-hero__body {
            transition-delay: 0.3s
        }

        .c-hero--has-video+.u-overlay {
            background-color: transparent
        }

        .c-hero--pricing {
            display: block;
            padding-bottom: 0
        }

        .c-hero--pricing .c-hero__body {
            margin: 0 auto;
            padding: 200px 0 0;
            max-width: none
        }

        .c-hero--pricing .c-hero__heading {
            max-width: 64rem;
            margin: 0 auto;
            text-align: center
        }

        .c-hero--pricing .c-pricing-cards {
            margin: 0 auto;
            transform: translateY(80px)
        }

        .c-hero__pricing-switch {
            display: -ms-flexbox;
            display: flex;
            -ms-flex-pack: center;
            justify-content: center;
            -ms-flex-align: center;
            align-items: center
        }

        .c-hero__pricing-switch--select {
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            cursor: pointer;
            padding: 3px 6px;
            padding-right: 16px;
            margin-left: 3px;
            font-family: inherit;
            color: inherit;
            background-color: #E9FCED;
            border-color: #E4F6E7;
            font-weight: 500;
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 7 4'%3E%3Cdefs/%3E%3Cpath fill='%23011B33' d='M3.5 4L.5.2h6L3.5 4z'/%3E%3C/svg%3E");
            background-repeat: no-repeat;
            background-size: 7px;
            background-position: right 6px center
        }

        .c-hero__pricing-switch--select:focus,
        .c-hero__pricing-switch--select:hover {
            outline: none;
            border-color: #3bb75e
        }

        .c-hero__pricing-switch--select-is-blue {
            background-color: #e2f3fa;
            border-color: #d8eaf5
        }

        .c-hero__pricing-switch--select-is-blue:focus,
        .c-hero__pricing-switch--select-is-blue:hover {
            outline: none;
            border-color: #A0B5C5
        }

        .c-hero--demo {
            display: block;
            padding-bottom: 0;
            margin-bottom: 50px
        }

        .c-hero--demo .c-hero__body {
            margin: 0 auto;
            padding: 200px 0 0;
            max-width: none
        }

        .c-hero--demo .c-hero__heading {
            max-width: 64rem;
            margin: 0 auto;
            text-align: center
        }

        .c-hero--demo .c-hero__body {
            margin-bottom: 60px
        }

        .c-hero--contact {
            margin-bottom: 100px
        }

        .c-hero--contact .c-hero__body {
            margin: 0 auto;
            padding: 200px 0 0;
            max-width: none
        }

        .c-hero--contact .c-hero__heading {
            max-width: 64rem;
            margin: 0 auto;
            text-align: center
        }

        .c-hero--contact .c-contact-cards {
            margin: 0 auto;
            transform: translateY(80px)
        }

        .c-hero--double-sided {
            min-height: 690px;
            padding-bottom: 80px
        }

        @media screen and (max-width: 600px) {
            .c-hero--double-sided {
                padding-bottom: 0
            }
        }

        .c-hero--double-sided .c-hero__heading {
            text-align: left
        }

        .c-hero--double-sided .c-hero__side:first-child {
            display: -ms-flexbox;
            display: flex;
            -ms-flex-align: end;
            align-items: flex-end
        }

        .c-hero--double-sided .c-hero__body {
            padding: 240px 0 180px;
            max-width: 56rem;
            position: relative;
            z-index: 4
        }

        @media screen and (max-width: 600px) {
            .c-hero--double-sided .c-hero__body {
                padding: 160px 0 100px
            }
        }

        .c-hero--central-video {
            display: block;
            padding-bottom: 0;
            z-index: 10
        }

        .c-hero--central-video .c-hero__body {
            margin: 0 auto;
            padding: 150px 0 0;
            max-width: none
        }

        .c-hero--central-video .c-hero__heading {
            max-width: 64rem;
            margin: 0 auto;
            text-align: center
        }

        .c-hero--central-video .c-hero-video {
            margin: 0 auto;
            transform: translateY(80px);
            opacity: 1;
            width: 100%
        }

        @media screen and (max-width: 600px) {
            .c-hero--central-video .c-hero-video {
                transform: translateY(40px)
            }
        }

        .c-hero--form {
            display: block;
            padding-bottom: 0
        }

        .c-hero--form .c-hero__body {
            margin: 0 auto;
            max-width: none
        }

        .c-hero--form .c-hero__heading {
            max-width: 64rem;
            padding: 200px 0 70px;
            margin: 0 auto;
            text-align: center
        }

        .c-hero--form .c-card--form {
            margin-bottom: 150px
        }

        @media screen and (max-width: 600px) {
            .c-hero--form .c-card--form {
                margin-bottom: 100px
            }
        }

        .c-hero--support {
            display: block;
            padding-bottom: 0;
            z-index: 10
        }

        .c-hero--support .c-hero__body {
            margin: 0 auto;
            padding: 200px 0 150px;
            max-width: none
        }

        @media screen and (max-width: 600px) {
            .c-hero--support .c-hero__body {
                padding-bottom: 100px
            }
        }

        .c-hero--support .c-hero__heading {
            max-width: 64rem;
            margin: 0 auto;
            text-align: center;
            margin-bottom: 60px
        }

        .c-hero__footer {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            display: -ms-flexbox;
            display: flex;
            padding: 0 0 48px;
            transition: 0.6s ease-in;
            z-index: 3
        }

        .c-hero__footer--blue {
            background-color: #eaf6fc
        }

        .c-hero__footer--offwhite {
            background: #F9FBFC
        }

        .c-hero__footer--green {
            background-color: #F1FEF4
        }

        @media screen and (max-width: 600px) {
            .c-hero__footer {
                display: block;
                position: relative
            }

            .c-hero__footer .l-container {
                display: block
            }
        }

        .c-hero__video-summary {
            text-align: right;
            display: -ms-flexbox;
            display: flex;
            width: 450px;
            -ms-flex-align: center;
            align-items: center;
            cursor: pointer;
            transition: opacity 0.5s ease-in
        }

        @media screen and (max-width: 600px) {
            .c-hero__video-summary {
                opacity: 1;
                width: 100%;
                border-top: 1px solid rgba(0, 0, 0, 0.05);
                padding-top: 30px;
                margin-top: 30px;
                display: block;
                text-align: left
            }
        }

        .c-hero__video-summary:hover .c-button {
            transform: scale(1.1);
            box-shadow: -2px 1px 5px 0px rgba(0, 0, 0, 0.05), -1px 2px 2px rgba(0, 0, 0, 0.08)
        }

        .c-hero__video-summary p {
            font-weight: 500;
            margin: 0
        }

        .c-hero__video-summary .c-button {
            width: 35px;
            height: 35px;
            border-radius: 50%;
            background: #0ba4db;
            margin: 0 0 0 10px;
            padding: 0;
            -webkit-appearance: none;
            transition: all 0.25s cubic-bezier(0.17, 0.635, 0.54, 1.435);
            will-change: box-shadow;
            display: -ms-flexbox;
            display: flex;
            -ms-flex-align: center;
            align-items: center;
            -ms-flex-pack: center;
            justify-content: center;
            pointer-events: none
        }

        .c-hero__video-summary .c-button svg {
            padding-left: 0.6px;
            pointer-events: none
        }

        .c-hero__video-summary .u-mobile-only .c-button--reset {
            padding: 0;
            outline: 0;
            height: auto;
            background: none;
            -webkit-appearance: none;
            line-height: 1;
            color: #0ba4db;
            margin-top: 10px;
            font-size: 1.6rem
        }

        .c-hero__video-summary .u-mobile-only .c-button--reset svg>path {
            fill: #0ba4db
        }

        @media screen and (max-width: 600px) {
            .c-hero__video-summary .u-mobile-only .c-button--reset {
                padding: 10px 0
            }
        }

        .c-hero__video-summary svg>path {
            fill: white
        }

        .c-hero__logos {
            -ms-flex: 1;
            flex: 1
        }

        @media screen and (max-width: 600px) {
            .c-hero__logos {
                display: inline-block;
                width: 100%
            }
        }

        .c-hero__logos p {
            font-size: 1.4rem;
            font-weight: 500;
            margin: 0 0 12px
        }

        .c-hero__logos .c-logo {
            width: auto;
            margin: 0 24px 0 0;
            float: left
        }

        @media screen and (max-width: 600px) {
            .c-hero__logos .c-logo {
                margin-right: 15px
            }
        }

        .c-hero__media {
            width: 100%;
            height: 80%;
            transform: translateX(50px) translateY(150px);
            border-radius: 6px;
            background-size: cover;
            background-repeat: no-repeat;
            transition: transform ease-in-out 0.5s;
            position: relative;
            z-index: 2
        }

        .c-hero__media:before {
            content: '';
            position: absolute;
            top: 10px;
            left: 10px;
            z-index: -1;
            width: 100%;
            height: 100%;
            border-radius: 6px;
            border: dashed 2px rgba(0, 0, 0, 0.1)
        }

        .c-hero__label {
            display: inline-block;
            display: inline-block;
            border-radius: 4px;
            font-size: 1.2rem;
            letter-spacing: 0.5px;
            margin-bottom: 20px;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            opacity: 0.5
        }

        .l-section--green .c-hero__label {
            color: rgba(1, 27, 51, 0.9)
        }

        .l-section--blue .c-hero__label {
            color: rgba(1, 27, 51, 0.9)
        }
    </style>
    <style>
        .c-section-pattern {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%
        }

        .c-section-pattern:before {
            content: '';
            position: absolute;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            opacity: 0.2;
            background-repeat: no-repeat
        }

        .c-hero--blue .c-section-pattern {
            opacity: 0.2
        }

        .c-hero--blue .c-section-pattern:before {
            -webkit-filter: hue-rotate(900deg) invert(0.5);
            filter: hue-rotate(900deg) invert(0.5)
        }

        .c-section-pattern--straight:before {
            background-image: url("/assets/img/patterns/straight-pattern.png");
            background-size: auto 200px;
            background-repeat: repeat-x
        }

        .c-section-pattern--curved {
            height: 400px;
            background-size: auto 350px
        }

        .c-section-pattern--curved:before {
            background-size: inherit;
            background-image: url("/assets/img/patterns/curved-pattern.png");
            background-position: 0 50px;
            background-repeat: repeat-x
        }

        .l-section--hero .c-section-pattern--curved {
            top: 25%
        }

        .l-section--blue .c-section-pattern--curved:before {
            background-image: url("/assets/img/patterns/curved-pattern-blue.png")
        }

        .c-section-pattern--curved.u-animate--play {
            animation: moveCurve linear 3s
        }

        @media screen and (max-width: 600px) {
            .c-section-pattern--curved.u-animate--play {
                animation: moveCurve linear 1s
            }
        }

        @keyframes moveCurve {

            0%,
            20% {
                -webkit-clip-path: polygon(100% 0, 0 0, 0 100%, 100% 100%);
                clip-path: polygon(100% 0, 0 0, 0 100%, 100% 100%)
            }

            50% {
                -webkit-clip-path: polygon(100% 0, 100% 0, 100% 100%, 100% 100%);
                clip-path: polygon(100% 0, 100% 0, 100% 100%, 100% 100%)
            }

            51%,
            60% {
                -webkit-clip-path: polygon(0 0, 0 0, 0 100%, 0 100%);
                clip-path: polygon(0 0, 0 0, 0 100%, 0 100%)
            }

            100% {
                -webkit-clip-path: polygon(0 0, 100% 0, 100% 100%, 0% 100%);
                clip-path: polygon(0 0, 100% 0, 100% 100%, 0% 100%)
            }
        }

        .c-section-pattern--circular:before {
            background-image: url("/assets/img/patterns/circular-pattern.png");
            background-size: 600px 600px;
            background-position: -300px 0
        }

        .l-section--blue .c-section-pattern--circular:before {
            background-image: url("/assets/img/patterns/circular-pattern-blue.png")
        }

        .l-section--white .c-section-pattern--circular:before,
        .l-section--offwhite .c-section-pattern--circular:before {
            -webkit-filter: hue-rotate(800deg) invert(0.4);
            filter: hue-rotate(800deg) invert(0.4);
            opacity: 0.1
        }

        .c-section-pattern--circular-right:before {
            top: -100px;
            background-size: 700px 700px;
            background-position: calc(100% + 200px)
        }

        .c-section-pattern--circular-bottom:before {
            background-size: 600px 600px;
            background-position: 50% calc(100% + 480px)
        }

        .l-section--blue .c-section-pattern--checked {
            opacity: 0.3
        }

        .c-section-pattern--checked:before {
            background-image: url("/assets/img/patterns/checked-pattern-blue.png");
            background-size: 100% 100%;
            background-repeat: no-repeat
        }

        @media screen and (max-width: 600px) {
            .c-section-pattern--checked:before {
                background-size: auto;
                background-repeat: repeat-y
            }
        }
    </style>
    <style>
        .c-section-header {
            position: relative;
            margin-bottom: 50px
        }

        .c-section-header--spaced-top {
            margin-top: 100px
        }

        @media screen and (max-width: 600px) {
            .c-section-header--spaced-top {
                margin-top: 50px
            }
        }

        .c-section-header--spaced-bottom {
            margin-bottom: 100px
        }

        @media screen and (max-width: 600px) {
            .c-section-header--spaced-bottom {
                margin-bottom: 50px
            }
        }

        @media screen and (max-width: 980px) {
            .c-section-header {
                display: block
            }
        }

        @media screen and (max-width: 600px) {
            .c-section-header {
                margin-bottom: 50px;
                display: block
            }
        }

        .c-section-header__body {
            max-width: 64rem;
            width: 60%
        }

        @media screen and (max-width: 600px) {
            .c-section-header__body {
                width: 100%
            }
        }

        .c-section-header--center .c-section-header__body {
            margin: 0 auto;
            text-align: center
        }

        .c-section-header--right .c-section-header__body {
            margin-left: auto;
            text-align: right
        }

        .c-section-header__cta {
            margin-top: 24px
        }

        .c-section-header--caption {
            margin: 0 100px 0 0
        }

        @media screen and (max-width: 600px) {
            .c-section-header--caption {
                margin-right: 0
            }
        }
    </style>
    <style>
        .c-feature {
            display: -ms-flexbox;
            display: flex;
            -ms-flex-pack: center;
            justify-content: center;
            margin-bottom: 150px
        }

        @media screen and (max-width: 600px) {
            .c-feature {
                display: block;
                margin-bottom: 50px
            }
        }

        .c-feature:last-child {
            margin-bottom: 0
        }

        .c-feature__left,
        .c-feature__right {
            -ms-flex: 1;
            flex: 1;
            display: -ms-flexbox;
            display: flex;
            -ms-flex-direction: column;
            flex-direction: column;
            -ms-flex-pack: center;
            justify-content: center
        }

        @media screen and (max-width: 600px) {

            .c-feature__left,
            .c-feature__right {
                display: block;
                width: 100%;
                margin-top: 50px
            }
        }

        .c-feature__left {
            margin-right: 50px;
            -ms-flex-align: center;
            align-items: center
        }

        .c-feature--reversed .c-feature__left {
            -ms-flex-order: 2;
            order: 2;
            margin-left: 50px;
            margin-right: 0
        }

        @media screen and (max-width: 600px) {
            .c-feature--reversed .c-feature__left {
                margin: 0
            }
        }

        .c-feature__right {
            -ms-flex-align: center;
            align-items: center
        }

        .c-feature--reversed .c-feature__right {
            -ms-flex-align: center;
            align-items: center
        }

        .c-feature__body {
            width: 100%;
            max-width: 500px
        }

        .c-feature__text {
            margin-bottom: 10px
        }

        .c-feature__text p {
            font-size: 1.9rem;
            line-height: 1.5;
            letter-spacing: -0.01em
        }

        @media screen and (max-width: 600px) {
            .c-feature__text p {
                font-size: 1.7rem
            }
        }

        .c-feature__benefits {
            margin: 30px 0
        }

        .c-feature__entry {
            margin-bottom: 50px
        }

        .c-feature__entry:last-of-type {
            margin-bottom: 0
        }

        .c-feature__media {
            position: relative;
            z-index: 2;
            transition: all 0.3s ease
        }

        .c-feature__media--small .c-feature__image,
        .c-feature__media--small .c-feature__video {
            transform: scale(0.4)
        }

        .c-feature__media--medium .c-feature__image,
        .c-feature__media--medium .c-feature__video {
            transform: scale(0.8)
        }

        .c-feature__media figcaption {
            position: absolute;
            width: 100%
        }

        .c-feature__image,
        .c-feature__video {
            position: relative
        }

        .c-feature__image figcaption,
        .c-feature__video figcaption {
            padding: 12px;
            padding-left: 2px;
            font-size: 1.2rem;
            color: rgba(87, 111, 127, 0.8);
            border-bottom-left-radius: 4px;
            border-bottom-right-radius: 4px;
            color: rgba(87, 111, 127, 0.95)
        }

        .c-feature--reversed .c-feature__image figcaption,
        .c-feature--reversed .c-feature__video figcaption {
            text-align: left
        }

        .c-feature__image img,
        .c-feature__image video,
        .c-feature__video img,
        .c-feature__video video {
            max-width: 100%;
            vertical-align: middle
        }

        .c-feature__image img,
        .c-feature__video img {
            border-radius: 4px;
            transition: all 0.5s
        }

        @media screen and (max-width: 600px) {

            .c-feature__image video,
            .c-feature__video video {
                display: none
            }
        }

        .c-feature__image--small-radius img,
        .c-feature__video--small-radius img {
            border-radius: 6px
        }

        .c-feature__image--dash:after,
        .c-feature__video--dash:after {
            content: "";
            position: absolute;
            left: 24px;
            top: 24px;
            height: 100%;
            border-radius: 6px;
            width: 100%;
            border: 1.2px dashed rgba(59, 183, 94, 0.5)
        }

        .c-feature__image--dash__group,
        .c-feature__video--dash__group {
            transform: translateX(24px) translateY(24px)
        }

        .c-feature__image--dash__group.u-animate-in-view--play,
        .c-feature__video--dash__group.u-animate-in-view--play {
            transform: translateX(0) translateY(0)
        }

        .c-feature--reversed .c-feature__image--dash__group.u-animate-in-view--play,
        .c-feature--reversed .c-feature__video--dash__group.u-animate-in-view--play {
            transform: translateX(48px) translateY(0)
        }

        .c-feature__image--ring:after,
        .c-feature__video--ring:after {
            content: "";
            position: absolute;
            left: 50px;
            top: -50px;
            width: 250px;
            height: 250px;
            background-image: url("/assets/img/patterns/ring-xs.png");
            background-repeat: no-repeat;
            background-size: 100% 100%;
            opacity: 0.1
        }

        .c-feature--reversed .c-feature__image--ring::after,
        .c-feature--reversed .c-feature__video--ring::after {
            left: auto;
            right: -50px
        }

        .c-feature__subscript {
            font-size: 2.8rem;
            font-weight: 700;
            font-family: "Boing", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
            color: rgba(1, 27, 51, 0.2);
            margin-bottom: 10px;
            letter-spacing: 1px
        }

        .c-feature__cta {
            margin-bottom: 24px
        }

        .c-feature__cta .c-button--link {
            font-size: 1.6rem
        }

        .c-feature-testimonial {
            margin-top: 15px
        }

        .c-feature-testimonial__message {
            padding: 6px 20px;
            background-color: #F9FBFC;
            border-radius: 4px;
            border: 1px solid rgba(1, 27, 51, 0.06);
            box-shadow: 0px 1px 2px rgba(1, 27, 51, 0.02);
            position: relative;
            margin-bottom: 24px;
            max-width: 450px
        }

        .c-feature-testimonial__message::before,
        .c-feature-testimonial__message::after {
            content: '';
            position: absolute;
            width: 0;
            height: 0;
            border-style: solid;
            border-color: transparent;
            border-bottom: 0
        }

        .c-feature-testimonial__message::before {
            bottom: -17px;
            left: 21px;
            border-top-color: rgba(1, 27, 51, 0.06);
            border-width: 16px
        }

        .c-feature-testimonial__message::after {
            bottom: -15px;
            left: 22px;
            border-top-color: #F9FBFC;
            border-width: 15px
        }

        .l-section--offwhite .c-feature-testimonial__message {
            background-color: white
        }

        .l-section--offwhite .c-feature-testimonial__message::after {
            border-top-color: white
        }

        .c-feature-testimonial__author {
            padding-left: 10px;
            display: -ms-inline-flexbox;
            display: inline-flex;
            -ms-flex-align: center;
            align-items: center
        }

        .c-feature-testimonial__author-name {
            font-family: "Boing", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
            line-height: 1.1;
            margin-bottom: 2px;
            font-size: 1.8rem
        }

        .c-feature-testimonial__author-role {
            font-size: 1.2rem
        }

        .c-feature-testimonial__author-image {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background-color: #F4F7F9;
            margin-right: 12px;
            -ms-flex-negative: 0;
            flex-shrink: 0;
            overflow: hidden;
            display: -ms-flexbox;
            display: flex
        }

        .c-feature-testimonial__author-image>img {
            -o-object-fit: cover;
            object-fit: cover;
            max-width: 100%
        }

        .c-feature-testimonial__author-image--sm {
            width: 48px;
            height: 48px
        }

        .c-feature-testimonial__meta {
            font-size: 1.4rem
        }
    </style>
    <style>
        .l-section--blue .c-testimonial,
        .l-section--green .c-testimonial {
            background: rgba(255, 255, 255, 0.85)
        }

        .c-testimonial .c-card__header {
            height: 16px;
            margin: 0 0 12px
        }

        .c-testimonial .c-card__body {
            margin: 0 0 12px;
            margin: 0;
            -ms-flex: 1;
            flex: 1;
            display: -ms-flexbox;
            display: flex;
            -ms-flex-direction: column;
            flex-direction: column;
            -ms-flex-pack: justify;
            justify-content: space-between
        }

        .c-testimonial__company {
            display: -ms-flexbox;
            display: flex;
            -ms-flex-align: center;
            align-items: center;
            display: flex
        }

        .c-testimonial__company .c-logo {
            -ms-flex-pack: start;
            justify-content: flex-start
        }

        .c-testimonial__text {
            margin: 32px 0 16px;
            margin: 32px 0
        }

        .c-testimonial__author {
            display: -ms-inline-flexbox;
            display: inline-flex;
            -ms-flex-align: center;
            align-items: center;
            margin-top: 10px
        }

        .c-testimonial__author-name {
            font-family: "Boing", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
            line-height: 1.1;
            margin-bottom: 4px;
            font-size: 1.8rem
        }

        .c-testimonial__author-role {
            font-size: 1.3rem
        }

        .c-testimonial__author-image {
            width: 58px;
            height: 58px;
            border-radius: 50%;
            background-color: #eaf6fc;
            margin-right: 12px;
            -ms-flex-negative: 0;
            flex-shrink: 0;
            overflow: hidden;
            display: -ms-flexbox;
            display: flex
        }

        .c-testimonial__author-image>img {
            -o-object-fit: cover;
            object-fit: cover;
            max-width: 100%
        }

        .c-testimonial__author-image--sm {
            width: 50px;
            height: 50px
        }

        .c-testimonial__meta {
            font-weight: normal;
            font-size: 1.4rem;
            color: #3d5e69
        }

        .c-testimonial__footnote {
            font-size: 1.4rem;
            color: #74848A;
            line-height: 1.5
        }

        .c-testimonial-block {
            margin-bottom: 30px
        }
    </style>
    <style>
        .c-card {
            overflow: hidden;
            height: 100%;
            border-radius: 6px;
            border: 1px solid #f0f2f3;
            display: -ms-flexbox;
            display: flex;
            -ms-flex-direction: column;
            flex-direction: column;
            -ms-flex-positive: 1;
            flex-grow: 1;
            padding: 48px 32px;
            box-shadow: 0px 1px 6px rgba(0, 0, 0, 0.02);
            background: white;
            position: relative;
            z-index: 2
        }

        @media screen and (max-width: 600px) {
            .c-card {
                padding: 32px 24px
            }

            .c-card:not(last-child) {
                margin-bottom: 20px
            }
        }

        .c-card--padded {
            padding: 72px 32px
        }

        .c-card--centered {
            text-align: center
        }

        .c-card:hover {
            box-shadow: 0px 1px 6px rgba(0, 0, 0, 0.05)
        }

        .c-card__icon {
            display: -ms-inline-flexbox;
            display: inline-flex;
            position: relative;
            height: 80px;
            margin-top: -10px;
            -ms-flex-align: center;
            align-items: center;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            margin-bottom: 30px;
            position: relative;
            transition: 0.3s all;
            width: 100%;
            width: -moz-available;
            width: -webkit-stretch;
            width: -webkit-fill-available;
            width: stretch
        }

        .c-card__icon>img {
            max-height: 100%
        }

        .c-card__footer {
            display: -ms-flexbox;
            display: flex;
            -ms-flex: 1;
            flex: 1;
            -ms-flex-direction: column;
            flex-direction: column;
            -ms-flex-pack: end;
            justify-content: flex-end;
            padding-top: 20px;
            transform: translateY(24px)
        }

        .c-card__link {
            font-size: 1.6rem;
            font-weight: 500;
            color: #3bb75e;
            display: -ms-inline-flexbox;
            display: inline-flex;
            -ms-flex-align: center;
            align-items: center
        }

        .c-card__body {
            display: -ms-flexbox;
            display: flex;
            -ms-flex-direction: column;
            flex-direction: column;
            -ms-flex: 1;
            flex: 1;
            -ms-flex-pack: justify;
            justify-content: space-between
        }

        .c-card--article .c-card__body>p {
            margin-top: 0;
            margin-bottom: auto
        }

        .c-card--article.c-card--engineering {
            padding: 32px;
            box-shadow: 0px 1px 6px rgba(0, 0, 0, 0.06)
        }

        .c-card--article.c-card--engineering .c-card__author {
            display: -ms-inline-flexbox;
            display: inline-flex;
            -ms-flex-align: center;
            align-items: center;
            margin-top: 24px;
            border-top: 1px solid rgba(189, 222, 244, 0.2);
            padding-top: 24px
        }

        .c-card--article.c-card--engineering .c-card__author-name {
            font-family: "Boing", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
            line-height: 1.1;
            margin-bottom: 2px;
            font-size: 1.8rem
        }

        .c-card--article.c-card--engineering .c-card__author-role {
            font-size: 1.3rem
        }

        .c-card--article.c-card--engineering .c-card__author-image {
            width: 58px;
            height: 58px;
            border-radius: 50%;
            background-color: #eaf6fc;
            margin-right: 12px;
            -ms-flex-negative: 0;
            flex-shrink: 0;
            overflow: hidden;
            display: -ms-flexbox;
            display: flex
        }

        .c-card--article.c-card--engineering .c-card__author-image>img {
            -o-object-fit: cover;
            object-fit: cover;
            max-width: 100%
        }

        .c-card--article.c-card--engineering .c-card__author-image--sm {
            width: 48px;
            height: 48px
        }

        .c-card--s {
            max-width: 700px;
            margin: 0 auto
        }

        .c-card--sm {
            max-width: 540px;
            margin: 0 auto;
            padding: 35 30
        }

        .c-card--sm header {
            margin-bottom: 3rem
        }

        .c-card--sm header h1 {
            font-size: 2.6rem;
            line-height: 3rem;
            margin-bottom: 0
        }

        .c-card--sm header p {
            margin-top: 10px;
            line-height: 2.4rem
        }

        .c-card-pattern {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            overflow: hidden
        }

        .c-card-pattern:before,
        .c-card-pattern:after {
            content: '';
            position: absolute;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            opacity: 0.3;
            background-repeat: no-repeat
        }

        .c-card-pattern--straight {
            height: 400px
        }

        .c-card-pattern--straight:before,
        .c-card-pattern--straight:after {
            background-image: url("/assets/img/patterns/straight-pattern.png");
            -webkit-filter: hue-rotate(900deg) invert(0.5);
            filter: hue-rotate(900deg) invert(0.5)
        }

        .c-card-pattern--curved {
            height: 800px
        }

        @media screen and (max-width: 600px) {
            .c-card-pattern--curved {
                height: 400px
            }
        }

        .c-card-pattern--curved:before,
        .c-card-pattern--curved:after {
            background-size: 90% auto;
            background-image: url("/assets/img/patterns/curved-pattern.png");
            background-position: 0 -50%;
            animation-duration: 1000s;
            animation-iteration-count: infinite;
            animation-timing-function: linear;
            -webkit-filter: hue-rotate(40deg) invert(0.2);
            filter: hue-rotate(40deg) invert(0.2)
        }

        .c-card-pattern--curved:before {
            animation-name: curved-pattern-animation-before;
            left: -100%
        }

        .c-card-pattern--curved:after {
            animation-name: curved-pattern-animation-after
        }

        @media screen and (max-width: 600px) {

            .c-card-pattern--curved:before,
            .c-card-pattern--curved:after {
                animation: none
            }
        }

        .c-card-pattern--circle {
            width: 600px;
            height: 600px;
            opacity: 0.2;
            left: -50%;
            top: -150%
        }

        .c-card-pattern--circle:before {
            background-image: url("/assets/img/patterns/circular-pattern.png");
            background-size: 100% auto;
            background-position: 0 100%;
            -webkit-filter: hue-rotate(900deg) invert(0.5);
            filter: hue-rotate(900deg) invert(0.5);
            animation: spin 300s infinite
        }
    </style>
    <style>
        .c-signup {
            display: -ms-flexbox;
            display: flex;
            padding: 100px 0 0
        }

        @media screen and (max-width: 600px) {
            .c-signup {
                display: block;
                padding: 0
            }
        }

        .c-signup__left {
            width: 100%;
            max-width: 600px
        }

        @media screen and (max-width: 600px) {
            .c-signup__left {
                text-align: center;
                margin-bottom: 50px
            }
        }

        .c-signup__left>p {
            margin-bottom: 20px
        }

        .c-signup__right {
            -ms-flex: 1;
            flex: 1;
            width: 300px;
            display: -ms-flexbox;
            display: flex;
            -ms-flex-pack: end;
            justify-content: flex-end;
            -ms-flex-align: center;
            align-items: center
        }

        @media screen and (max-width: 600px) {
            .c-signup__right {
                width: 100%;
                -ms-flex-pack: center;
                justify-content: center
            }
        }
    </style>
    <style>
        .c-footer__row {
            display: -ms-flexbox;
            display: flex;
            margin-bottom: 48px
        }

        @media screen and (max-width: 750px) {
            .c-footer__row {
                -ms-flex-wrap: wrap;
                flex-wrap: wrap;
                display: -ms-flexbox;
                display: flex;
                margin-bottom: 24px
            }
        }

        .c-footer__row--no-padder {
            padding: 0
        }

        .c-footer__row:last-child {
            padding-top: 48px;
            margin-bottom: 0;
            border-top: 1px solid rgba(240, 242, 243, 0.85)
        }

        @media screen and (max-width: 600px) {
            .c-footer__row:last-child {
                padding-top: 24px
            }

            .c-footer__row:last-child .c-footer-menu__group {
                display: block
            }

            .c-footer__row:last-child .c-footer__column {
                margin-bottom: 30px
            }

            .c-footer__row:last-child .c-footer__column:last-child {
                margin-bottom: 0
            }
        }

        .c-footer__column {
            -ms-flex: 0 1 33.33%;
            flex: 0 1 33.33%;
            padding: 0 16px;
            transition: 0.4s
        }

        @media screen and (max-width: 750px) {
            .c-footer__column:last-of-type {
                margin-bottom: 24px
            }
        }

        @media screen and (max-width: 600px) {
            .c-footer__column {
                -ms-flex: 0 1 100%;
                flex: 0 1 100%;
                display: -ms-flexbox;
                display: flex;
                -ms-flex-direction: column;
                flex-direction: column;
                padding: 0
            }

            .c-footer__column:last-of-type {
                margin-bottom: 0
            }
        }

        .c-footer__group {
            margin-bottom: 20px
        }

        @media screen and (max-width: 600px) {
            .c-footer__group {
                margin-bottom: 0
            }

            .c-footer__group .c-footer__header:before {
                display: block
            }

            .c-footer__group .c-footer-list {
                max-height: 0
            }
        }

        .c-footer__header {
            position: relative;
            color: #011b33;
            display: inline-block;
            font-size: 1.8rem
        }

        .c-footer__header--muted {
            color: #3d5e69;
            font-weight: 500
        }

        .c-footer__header:before {
            display: none;
            content: "";
            position: absolute;
            right: 0;
            width: 0;
            height: 0;
            top: 50%;
            transform: translateY(-50%) rotate(0);
            border-style: solid;
            border-width: 3px 0 3px 5.2px;
            border-color: transparent transparent transparent #011b33;
            transition: ease-in-out 0.1s transform
        }

        @media screen and (max-width: 600px) {
            .c-footer__header {
                margin-bottom: 16px;
                display: block
            }

            .c-footer__header--active:before {
                transform: translateY(-50%) rotate(90deg)
            }
        }

        .c-footer-list {
            margin-bottom: 48px
        }

        @media screen and (max-width: 600px) {
            .c-footer-list {
                overflow: hidden;
                padding-right: 16px;
                margin-bottom: 8px;
                transition: max-height 0.2s ease-out
            }
        }

        .c-footer-list:last-of-type {
            margin-bottom: 0
        }

        .c-footer-list__item {
            color: rgba(1, 27, 51, 0.9);
            margin-bottom: 6px;
            line-height: 1.6;
            text-transform: capitalize
        }

        @media screen and (max-width: 600px) {
            .c-footer-list__item {
                margin-bottom: 8px
            }

            .c-footer-list__item:last-child {
                margin-bottom: 16px
            }
        }

        .c-footer-list__item a:hover {
            color: #0ba4db
        }

        .c-footer-list__item--contact {
            color: #0ba4db;
            text-transform: none
        }

        .c-footer-list__item--contact a:hover {
            color: #0980aa
        }

        .c-footer-list__item--lowercase {
            text-transform: lowercase
        }

        .c-footer-list--social {
            display: -ms-flexbox;
            display: flex;
            -ms-flex-align: center;
            align-items: center
        }

        .c-footer-list--social .c-footer-list__item {
            padding-right: 20px;
            margin-bottom: 0
        }

        .c-footer-list--social .c-footer-list__item svg {
            max-width: 20px;
            display: -ms-flexbox;
            display: flex;
            vertical-align: middle;
            -o-object-fit: cover;
            object-fit: cover;
            opacity: 0.87;
            transition: 0.25s ease-in-out opacity
        }

        .c-footer-list--social .c-footer-list__item svg:hover {
            opacity: 1
        }

        .c-footer-list--social .c-footer-list__item:last-child {
            padding-right: 0
        }

        .c-footer-footnote {
            display: -ms-flexbox;
            display: flex;
            padding: 24px 16px;
            -ms-flex-align: center;
            align-items: center;
            -ms-flex-pack: justify;
            justify-content: space-between;
            font-size: 1.3rem;
            color: #3d5e69;
            box-shadow: inset 0 1px 1px rgba(240, 242, 243, 0.05)
        }

        .c-footer-footnote__item {
            position: relative
        }

        .c-footer-footnote__item select {
            font-size: 1.2rem;
            display: -ms-inline-flexbox;
            display: inline-flex;
            font-family: "Graphik", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
            height: 48px;
            background-color: transparent;
            border: 0;
            -ms-flex-align: center;
            align-items: center;
            padding: 12px;
            color: #3d5e69;
            text-transform: uppercase;
            letter-spacing: 0.4px;
            width: 100%;
            -moz-appearance: none;
            appearance: none;
            -webkit-appearance: none;
            font-weight: 500;
            outline: none
        }

        .c-footer-footnote__item--countries {
            display: -ms-inline-flexbox;
            display: inline-flex;
            -ms-flex-align: center;
            align-items: center;
            -ms-flex-pack: center;
            justify-content: center;
            cursor: pointer
        }

        .c-footer-footnote__item--countries .u-flag-icon {
            margin-right: 8px;
            border-radius: 2px
        }
    </style>
</head>

<body>
    <header>

        <nav>
            <div class="c-nav">
                <div class="c-nav--left">
                <a href="{{route('home')}}" class="c-nav__logo">
                        <!--<svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 157 28">
                            <defs />
                            <g clip-path="url(#clip0)">
                                <path
                                    d="M22.32 2.663H1.306C.594 2.663 0 3.263 0 3.985v2.37c0 .74.594 1.324 1.307 1.324h21.012c.73 0 1.307-.602 1.324-1.323V4.002c0-.738-.594-1.34-1.323-1.34zm0 13.192H1.306a1.3 1.3 0 00-.924.388 1.33 1.33 0 00-.383.935v2.37c0 .74.594 1.323 1.307 1.323h21.012c.73 0 1.307-.584 1.324-1.322v-2.371c0-.739-.594-1.323-1.323-1.323zm-9.183 6.58H1.307c-.347 0-.68.139-.924.387a1.33 1.33 0 00-.383.935v2.37c0 .74.594 1.323 1.307 1.323H13.12c.73 0 1.307-.6 1.307-1.322v-2.371a1.29 1.29 0 00-1.29-1.323zM23.643 9.258H1.307c-.347 0-.68.14-.924.387a1.33 1.33 0 00-.383.936v2.37c0 .739.594 1.323 1.307 1.323h22.32c.73 0 1.306-.601 1.306-1.323v-2.37a1.301 1.301 0 00-1.29-1.323z"
                                    fill="#00C3F7" />
                                <path
                                    d="M48.101 8.005a6.927 6.927 0 00-2.274-1.563 7.041 7.041 0 00-2.716-.55 5.767 5.767 0 00-2.63.567c-.55.263-1.046.63-1.46 1.082V7.13a.876.876 0 00-.22-.567.721.721 0 00-.56-.258h-2.937a.697.697 0 00-.56.258.796.796 0 00-.221.567v19.566c0 .206.085.412.22.566a.776.776 0 00.56.224h2.971c.204 0 .39-.086.543-.224a.7.7 0 00.238-.566v-6.683c.424.464.967.808 1.561 1.014.781.292 1.596.43 2.427.43.95 0 1.884-.173 2.75-.55a6.859 6.859 0 002.308-1.58 7.45 7.45 0 001.562-2.457 8.34 8.34 0 00.577-3.213 8.761 8.761 0 00-.577-3.229A7.775 7.775 0 0048.1 8.005zm-2.681 7.077a3.33 3.33 0 01-.696 1.117 3.177 3.177 0 01-2.36 1.013c-.458 0-.899-.086-1.306-.275a3.324 3.324 0 01-1.07-.738 3.673 3.673 0 01-.713-1.117 3.837 3.837 0 010-2.748c.153-.412.408-.79.713-1.1a3.576 3.576 0 011.07-.755 2.888 2.888 0 011.306-.275c.459 0 .9.086 1.324.274.39.19.747.43 1.053.74.305.326.526.686.696 1.099a3.976 3.976 0 01-.017 2.765zm20.808-8.778h-2.953a.728.728 0 00-.543.24.823.823 0 00-.237.585v.36a4.143 4.143 0 00-1.341-1.03 5.652 5.652 0 00-2.58-.567 7.222 7.222 0 00-5.075 2.096 7.733 7.733 0 00-1.63 2.456 8.036 8.036 0 00-.61 3.23 8.15 8.15 0 00.61 3.23 7.88 7.88 0 001.613 2.456 6.959 6.959 0 005.058 2.112c.9.018 1.782-.171 2.597-.567.509-.257.984-.6 1.358-1.03v.395c0 .206.084.412.237.567.153.137.34.223.543.223h2.953a.855.855 0 00.56-.223.768.768 0 00.221-.567V7.129a.796.796 0 00-.22-.567.697.697 0 00-.56-.258zm-3.988 8.761a3.33 3.33 0 01-.696 1.117 3.83 3.83 0 01-1.052.755c-.832.378-1.8.378-2.631 0a3.575 3.575 0 01-1.07-.755 3.326 3.326 0 01-.695-1.117 3.976 3.976 0 010-2.731c.152-.412.39-.773.696-1.1.305-.309.661-.566 1.069-.755a3.194 3.194 0 012.63 0c.391.189.748.429 1.053.738.289.327.526.687.696 1.1.34.893.34 1.872 0 2.748zm33.437-1.77a4.794 4.794 0 00-1.443-.875 10.054 10.054 0 00-1.731-.516l-2.258-.446c-.577-.103-.984-.258-1.205-.447a.712.712 0 01-.305-.567c0-.24.136-.446.424-.618.39-.206.815-.31 1.256-.275.577 0 1.154.12 1.68.343.51.224 1.019.482 1.477.79.662.413 1.222.344 1.612-.12l1.087-1.236c.203-.207.322-.481.34-.773a1.06 1.06 0 00-.408-.773c-.459-.395-1.188-.825-2.156-1.237-.967-.412-2.19-.636-3.632-.636a8.343 8.343 0 00-2.597.378 6.273 6.273 0 00-1.986 1.03 4.552 4.552 0 00-1.273 1.564 4.417 4.417 0 00-.441 1.907c0 1.22.373 2.216 1.103 2.954.73.739 1.698 1.22 2.903 1.46l2.342.516c.51.086 1.018.24 1.494.464.254.103.424.36.424.652 0 .258-.136.498-.424.705-.289.206-.764.343-1.375.343a4.051 4.051 0 01-1.85-.412 6.792 6.792 0 01-1.51-.996 2.037 2.037 0 00-.68-.378c-.271-.086-.594 0-.95.292l-1.29.979a1.147 1.147 0 00-.458 1.134c.067.43.424.858 1.086 1.357a9.543 9.543 0 005.516 1.632 8.993 8.993 0 002.699-.378 6.83 6.83 0 002.087-1.048c.56-.43 1.036-.98 1.358-1.615a4.543 4.543 0 00.475-2.01 4.168 4.168 0 00-.373-1.82 4.638 4.638 0 00-1.018-1.323zm12.899 3.574a.857.857 0 00-.645-.43c-.271 0-.543.086-.764.24a2.43 2.43 0 01-1.205.396c-.136 0-.288-.017-.424-.052a.777.777 0 01-.39-.206 1.43 1.43 0 01-.323-.446 2.092 2.092 0 01-.136-.79v-5.36h3.836a.86.86 0 00.594-.258.77.77 0 00.255-.567V7.13a.773.773 0 00-.255-.584.833.833 0 00-.577-.24h-3.836v-3.66a.736.736 0 00-.237-.584.814.814 0 00-.544-.223h-2.987a.817.817 0 00-.577.223.838.838 0 00-.254.584v3.66h-1.698a.697.697 0 00-.56.257.876.876 0 00-.22.567v2.267c0 .206.084.413.22.567a.65.65 0 00.56.258h1.698v6.373a5.14 5.14 0 00.441 2.199 4.575 4.575 0 001.137 1.477c.475.395 1.035.67 1.612.842a6.125 6.125 0 001.851.275 7.73 7.73 0 002.427-.396 4.802 4.802 0 001.918-1.202.999.999 0 00.101-1.271l-1.018-1.65zm16.175-10.565h-2.953a.728.728 0 00-.543.24.822.822 0 00-.238.585v.36a4.13 4.13 0 00-1.341-1.03 5.67 5.67 0 00-2.596-.567 7.152 7.152 0 00-5.058 2.096 7.468 7.468 0 00-1.63 2.456 8.017 8.017 0 00-.611 3.212 8.156 8.156 0 00.611 3.23c.374.91.934 1.752 1.613 2.456a7.006 7.006 0 005.041 2.13 5.884 5.884 0 002.596-.55c.51-.257.985-.6 1.358-1.03v.378c.002.21.084.41.23.557a.783.783 0 00.551.233h2.97a.78.78 0 00.781-.773V7.13a.795.795 0 00-.221-.567.696.696 0 00-.56-.258zm-3.988 8.761a3.34 3.34 0 01-.696 1.117 3.83 3.83 0 01-1.053.755 2.907 2.907 0 01-1.323.275c-.459 0-.9-.103-1.307-.275a3.576 3.576 0 01-1.07-.755 3.34 3.34 0 01-.696-1.117 3.982 3.982 0 010-2.731 3.27 3.27 0 01.696-1.1c.306-.309.662-.566 1.07-.755a3.077 3.077 0 011.307-.275c.458 0 .899.086 1.323.274.391.19.747.43 1.053.74.305.326.543.686.696 1.099a3.67 3.67 0 010 2.748zm20.198 1.615l-1.698-1.306c-.322-.257-.628-.326-.899-.223a1.82 1.82 0 00-.628.447 6.03 6.03 0 01-1.29 1.168c-.509.292-1.07.43-1.647.395a3.165 3.165 0 01-1.855-.575 3.224 3.224 0 01-1.183-1.555 4.046 4.046 0 01-.237-1.34c0-.464.067-.928.237-1.374.153-.413.374-.79.679-1.1.306-.309.662-.567 1.052-.739a3.175 3.175 0 011.324-.291 3.06 3.06 0 011.647.412 5.61 5.61 0 011.29 1.168c.169.189.373.343.611.447.271.103.577.034.882-.224l1.698-1.288c.203-.138.373-.344.441-.584a.923.923 0 00-.068-.79 7.35 7.35 0 00-2.614-2.457c-1.12-.635-2.461-.962-3.955-.962a8.163 8.163 0 00-3.072.601 7.65 7.65 0 00-2.495 1.65 7.357 7.357 0 00-1.663 2.473 8.154 8.154 0 000 6.133c.39.927.95 1.769 1.663 2.456a7.876 7.876 0 005.567 2.25c1.494 0 2.835-.326 3.955-.962a7.307 7.307 0 002.631-2.473.886.886 0 00.068-.773 1.167 1.167 0 00-.441-.584zm15.716 3.057l-4.667-6.854 3.989-5.273a.978.978 0 00.169-.86c-.068-.205-.254-.429-.746-.429h-3.157a1.39 1.39 0 00-.527.12 1.058 1.058 0 00-.458.447l-3.191 4.467h-.764V.79a.794.794 0 00-.22-.567.78.78 0 00-.56-.223h-2.954a.856.856 0 00-.56.223.72.72 0 00-.237.567v19.48c0 .223.084.43.237.567a.778.778 0 00.56.223h2.954a.856.856 0 00.56-.223.794.794 0 00.22-.567v-5.153h.849l3.479 5.342c.204.378.595.618 1.019.618h3.31c.509 0 .712-.24.797-.446a.933.933 0 00-.102-.894zM83.015 6.304h-3.31a.852.852 0 00-.662.258 1.178 1.178 0 00-.305.55l-2.445 9.104H75.7l-2.613-9.104a1.54 1.54 0 00-.255-.533.756.756 0 00-.594-.275h-3.429c-.44 0-.712.138-.831.43-.085.257-.085.55 0 .807l4.192 12.798c.068.189.17.378.323.515.17.155.39.24.627.223h1.766l-.153.413-.39 1.185c-.12.36-.34.687-.645.927a1.58 1.58 0 01-.985.327c-.305 0-.61-.069-.882-.19a3.618 3.618 0 01-.781-.463 1.29 1.29 0 00-.747-.24h-.034a.908.908 0 00-.747.463l-1.052 1.546c-.424.67-.187 1.1.085 1.34a5.36 5.36 0 001.952 1.151 7.679 7.679 0 002.495.412c1.51 0 2.783-.412 3.75-1.236a7.067 7.067 0 002.122-3.333l4.855-15.838c.102-.275.119-.567.017-.842-.085-.189-.272-.395-.73-.395z"
                                    fill="#011B33" />
                            </g>
                            <defs>
                                <clipPath id="clip0">
                                    <path fill="#fff" d="M0 0h157v28H0z" />
                                </clipPath>
                            </defs>
                        </svg>-->
                    <img src="{{asset('assets/img/logo/5.png')}}" alt="" style="height: 55%; width:55%;">
                   

                    </a>
                    <ul class="c-nav-menu c-nav-menu--horizontal" style="position: relative; right:50px;">
                        <li class="c-nav-menu__item u-has-dropdown u-has-dropdown--two-sides" >
                        <a href="{{route('about')}}">
                            About YW4CA
                                <!--<span class="u-icon-arrow"></span>-->
                            </a>
                        </li>
                        
                        
                        <li class="c-nav-menu__item">
                        <a href="{{route('volunteer.main')}}">Become a Volunteer</a>
                        </li>

                        <li class="c-nav-menu__item">
                            <a href="{{route('blog.all')}}">Blog</a>
                            </li>
                        <!--<li class="c-nav-menu__item u-has-dropdown u-has-dropdown--two-sides">
                            <a href="#">Learn
                                <span class="u-icon-arrow"></span>
                            </a>
                            <div class="c-dropdown c-dropdown--flip c-dropdown--has-two-sides">
                                <div class="c-dropdown__side c-dropdown__side--darker c-dropdown__side--flex">
                                    <ul class="c-nav-menu">
                                        <li class="c-nav-menu__item c-nav-menu__item--has-icon">
                                            <a target="_blank" rel="noopener" href="/blog">
                                                <div class="c-nav-menu__icon c-nav-menu__icon--md">
                                                    <img class="u-lazyload"
                                                        data-src="/assets/img/icon/navigation/learn/blog_db.svg"
                                                        alt="Blog icon">
                                                </div>
                                                <div class="c-nav-menu__text">
                                                    <h4>Blog</h4>
                                                    <p>Original lessons about making the internet work for your business
                                                    </p>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="c-nav-menu__item c-nav-menu__item--has-icon">
                                            <a href="/guides">
                                                <div class="c-nav-menu__icon c-nav-menu__icon--md">
                                                    <img class="u-lazyload"
                                                        data-src="/assets/img/icon/navigation/learn/guides_db.svg"
                                                        alt="Guides icon">
                                                </div>
                                                <div class="c-nav-menu__text">
                                                    <h4>Guides</h4>
                                                    <p>Big ideas in payments, explained in simple English</p>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="c-nav-menu__item c-nav-menu__item--has-icon">
                                            <a target="_blank" rel="noopener" href="/tutorials">
                                                <div class="c-nav-menu__icon c-nav-menu__icon--md">
                                                    <img class="u-lazyload"
                                                        data-src="/assets/img/icon/navigation/learn/tutorials_db.svg"
                                                        alt="Tutorial icon">
                                                </div>
                                                <div class="c-nav-menu__text">
                                                    <h4>Video Tutorials</h4>
                                                    <p>Quick video tutorials on how to use Paystack</p>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="c-nav-menu__item c-nav-menu__item--has-icon">
                                            <a target="_blank" rel="noopener" href="https://decodefintech.com">
                                                <div class="c-nav-menu__icon c-nav-menu__icon--md">
                                                    <img class="u-lazyload"
                                                        data-src="/assets/img/icon/navigation/learn/decode_fintech_db.svg"
                                                        alt="Tutorial icon">
                                                </div>
                                                <div class="c-nav-menu__text">
                                                    <h4>Decode Fintech</h4>
                                                    <p>The trade email newsletter and podcast for leaders in African
                                                        fintech</p>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="c-dropdown__side c-dropdown__side--light-grey">
                                    <ul class="c-nav-menu c-nav-menu--vertical">
                                        <div class="c-nav-menu__label">Company</div>
                                        <li class="c-nav-menu__item">
                                            <a href="/about">About Us</a>
                                        </li>
                                        <li class="c-nav-menu__item">
                                            <a href="/compliance">Compliance</a>
                                        </li>
                                        <li class="c-nav-menu__item">
                                            <a href="/careers">Careers</a>
                                        </li>
                                        <li class="c-nav-menu__item">
                                            <a href="/brand">Brand</a>
                                        </li>
                                        <li class="c-nav-menu__item">
                                            <a href="/media">Media Kit</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>-->
                    </ul>
                </div>
                <div class="c-nav--right">
                    <ul class="c-nav-menu c-nav-menu--horizontal">
                        <li class="c-nav-menu__item u-has-dropdown">
                        <a href="{{route('contact')}}">Contact Us
                                <!--<span class="u-icon-arrow"></span>-->
                            </a>
                            <!--<div class="c-dropdown c-dropdown--flip">
                                <ul class="c-nav-menu c-nav-menu--vertical">
                                    <li class="c-nav-menu__item">
                                        <a href="/developers">Overview</a>
                                    </li>
                                    <li class="c-nav-menu__item">
                                        <a href="https://developers.paystack.co/">Documentation</a>
                                    </li>
                                    <li class="c-nav-menu__item">
                                        <a href="/status">Status Page</a>
                                    </li>
                                </ul>
                            </div>-->
                        </li>
                        <!--<li class="c-nav-menu__item u-has-dropdown">
                            <a href="#">Support
                                <span class="u-icon-arrow"></span>
                            </a>
                            <div class="c-dropdown c-dropdown--flip">
                                <ul class="c-nav-menu c-nav-menu--vertical">
                                    <li class="c-nav-menu__item">
                                        <a target="_blank" rel="noopener" href="/help">Quick Help</a>
                                    </li>
                                    <li class="c-nav-menu__item">
                                        <a href="/contact">Contact Us</a>
                                    </li>
                                    <li class="c-nav-menu__item">
                                        <a target="_blank" rel="noopener" href="/lookup">Why was I debited?</a>
                                    </li>
                                </ul>
                            </div>
                        </li>-->
                        <!--<li class="c-nav-menu__item c-nav-menu__item--green">
                            <a href="https://dashboard.paystack.com/#/login">Login</a>
                        </li>-->
                      



                        @guest
                            <li class="c-nav-menu__item c-nav-menu__item--green">
                                <a href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="c-nav-menu__item c-nav-menu__item--green">
                                    <a href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="c-nav-menu__item c-nav-menu__item--green">
                                <a {{--id="navbarDropdown" class="nav-link dropdown-toggle"--}} href="#" {{--role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre--}}>
                                    Hello, {{ Auth::user()->name }} <span class="caret"></span>
                                </a>&nbsp;|&nbsp;

                                <div {{--class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown"--}}>
                                    <a  href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();" style="position: relative; bottom:2px;">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest

                        <!--<li class="c-nav-menu__item--cta">
                            <a href="https://dashboard.paystack.com/#/signup" data-track data-track-section="Nav"
                                class="c-button c-button c-button--primary">
                                Create free account
                            </a>
                        </li>-->
                        <!--<li class="c-nav-menu__item u-has-dropdown c-nav-menu__item--countries">
                            <a href="#">
                                <span class="u-flag-icon u-flag-icon--ng"></span>
                            </a>
                            <div class="c-dropdown c-dropdown--flip c-dropdown--reversed c-dropdown--sm">
                                <ul class="c-nav-menu u-text--left">
                                    <li class="c-nav-menu__item">
                                        <a href="/gh/?localeUpdate=true">
                                            <span class="u-flag-icon u-flag-icon--gh"></span><span>Ghana</span>
                                        </a>
                                    </li>
                                    <li class="c-nav-menu__item">
                                        <a href="/countries">
                                            <span class="u-flag-icon u-flag-icon--paystack"></span><span>Others</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>-->

                        {{--<li class="c-nav-menu__item--cta" style="margin-right:3px">
                            <a href="{{route('donate')}}" data-track data-track-section="Nav"
                                    class="c-button c-button c-button--primary">
                                    Donate
                                </a>
                            </li>--}}
                    </ul>
                </div>
            </div>
            <div class="c-nav c-nav--mobile-only">
                <div class="c-nav__header">
                    <div class="c-nav--left">
                    <a href="{{route('home')}}" class="c-nav__logo">
                            <!--<svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 157 28">
                                <defs />
                                <g clip-path="url(#clip0)">
                                    <path
                                        d="M22.32 2.663H1.306C.594 2.663 0 3.263 0 3.985v2.37c0 .74.594 1.324 1.307 1.324h21.012c.73 0 1.307-.602 1.324-1.323V4.002c0-.738-.594-1.34-1.323-1.34zm0 13.192H1.306a1.3 1.3 0 00-.924.388 1.33 1.33 0 00-.383.935v2.37c0 .74.594 1.323 1.307 1.323h21.012c.73 0 1.307-.584 1.324-1.322v-2.371c0-.739-.594-1.323-1.323-1.323zm-9.183 6.58H1.307c-.347 0-.68.139-.924.387a1.33 1.33 0 00-.383.935v2.37c0 .74.594 1.323 1.307 1.323H13.12c.73 0 1.307-.6 1.307-1.322v-2.371a1.29 1.29 0 00-1.29-1.323zM23.643 9.258H1.307c-.347 0-.68.14-.924.387a1.33 1.33 0 00-.383.936v2.37c0 .739.594 1.323 1.307 1.323h22.32c.73 0 1.306-.601 1.306-1.323v-2.37a1.301 1.301 0 00-1.29-1.323z"
                                        fill="#00C3F7" />
                                    <path
                                        d="M48.101 8.005a6.927 6.927 0 00-2.274-1.563 7.041 7.041 0 00-2.716-.55 5.767 5.767 0 00-2.63.567c-.55.263-1.046.63-1.46 1.082V7.13a.876.876 0 00-.22-.567.721.721 0 00-.56-.258h-2.937a.697.697 0 00-.56.258.796.796 0 00-.221.567v19.566c0 .206.085.412.22.566a.776.776 0 00.56.224h2.971c.204 0 .39-.086.543-.224a.7.7 0 00.238-.566v-6.683c.424.464.967.808 1.561 1.014.781.292 1.596.43 2.427.43.95 0 1.884-.173 2.75-.55a6.859 6.859 0 002.308-1.58 7.45 7.45 0 001.562-2.457 8.34 8.34 0 00.577-3.213 8.761 8.761 0 00-.577-3.229A7.775 7.775 0 0048.1 8.005zm-2.681 7.077a3.33 3.33 0 01-.696 1.117 3.177 3.177 0 01-2.36 1.013c-.458 0-.899-.086-1.306-.275a3.324 3.324 0 01-1.07-.738 3.673 3.673 0 01-.713-1.117 3.837 3.837 0 010-2.748c.153-.412.408-.79.713-1.1a3.576 3.576 0 011.07-.755 2.888 2.888 0 011.306-.275c.459 0 .9.086 1.324.274.39.19.747.43 1.053.74.305.326.526.686.696 1.099a3.976 3.976 0 01-.017 2.765zm20.808-8.778h-2.953a.728.728 0 00-.543.24.823.823 0 00-.237.585v.36a4.143 4.143 0 00-1.341-1.03 5.652 5.652 0 00-2.58-.567 7.222 7.222 0 00-5.075 2.096 7.733 7.733 0 00-1.63 2.456 8.036 8.036 0 00-.61 3.23 8.15 8.15 0 00.61 3.23 7.88 7.88 0 001.613 2.456 6.959 6.959 0 005.058 2.112c.9.018 1.782-.171 2.597-.567.509-.257.984-.6 1.358-1.03v.395c0 .206.084.412.237.567.153.137.34.223.543.223h2.953a.855.855 0 00.56-.223.768.768 0 00.221-.567V7.129a.796.796 0 00-.22-.567.697.697 0 00-.56-.258zm-3.988 8.761a3.33 3.33 0 01-.696 1.117 3.83 3.83 0 01-1.052.755c-.832.378-1.8.378-2.631 0a3.575 3.575 0 01-1.07-.755 3.326 3.326 0 01-.695-1.117 3.976 3.976 0 010-2.731c.152-.412.39-.773.696-1.1.305-.309.661-.566 1.069-.755a3.194 3.194 0 012.63 0c.391.189.748.429 1.053.738.289.327.526.687.696 1.1.34.893.34 1.872 0 2.748zm33.437-1.77a4.794 4.794 0 00-1.443-.875 10.054 10.054 0 00-1.731-.516l-2.258-.446c-.577-.103-.984-.258-1.205-.447a.712.712 0 01-.305-.567c0-.24.136-.446.424-.618.39-.206.815-.31 1.256-.275.577 0 1.154.12 1.68.343.51.224 1.019.482 1.477.79.662.413 1.222.344 1.612-.12l1.087-1.236c.203-.207.322-.481.34-.773a1.06 1.06 0 00-.408-.773c-.459-.395-1.188-.825-2.156-1.237-.967-.412-2.19-.636-3.632-.636a8.343 8.343 0 00-2.597.378 6.273 6.273 0 00-1.986 1.03 4.552 4.552 0 00-1.273 1.564 4.417 4.417 0 00-.441 1.907c0 1.22.373 2.216 1.103 2.954.73.739 1.698 1.22 2.903 1.46l2.342.516c.51.086 1.018.24 1.494.464.254.103.424.36.424.652 0 .258-.136.498-.424.705-.289.206-.764.343-1.375.343a4.051 4.051 0 01-1.85-.412 6.792 6.792 0 01-1.51-.996 2.037 2.037 0 00-.68-.378c-.271-.086-.594 0-.95.292l-1.29.979a1.147 1.147 0 00-.458 1.134c.067.43.424.858 1.086 1.357a9.543 9.543 0 005.516 1.632 8.993 8.993 0 002.699-.378 6.83 6.83 0 002.087-1.048c.56-.43 1.036-.98 1.358-1.615a4.543 4.543 0 00.475-2.01 4.168 4.168 0 00-.373-1.82 4.638 4.638 0 00-1.018-1.323zm12.899 3.574a.857.857 0 00-.645-.43c-.271 0-.543.086-.764.24a2.43 2.43 0 01-1.205.396c-.136 0-.288-.017-.424-.052a.777.777 0 01-.39-.206 1.43 1.43 0 01-.323-.446 2.092 2.092 0 01-.136-.79v-5.36h3.836a.86.86 0 00.594-.258.77.77 0 00.255-.567V7.13a.773.773 0 00-.255-.584.833.833 0 00-.577-.24h-3.836v-3.66a.736.736 0 00-.237-.584.814.814 0 00-.544-.223h-2.987a.817.817 0 00-.577.223.838.838 0 00-.254.584v3.66h-1.698a.697.697 0 00-.56.257.876.876 0 00-.22.567v2.267c0 .206.084.413.22.567a.65.65 0 00.56.258h1.698v6.373a5.14 5.14 0 00.441 2.199 4.575 4.575 0 001.137 1.477c.475.395 1.035.67 1.612.842a6.125 6.125 0 001.851.275 7.73 7.73 0 002.427-.396 4.802 4.802 0 001.918-1.202.999.999 0 00.101-1.271l-1.018-1.65zm16.175-10.565h-2.953a.728.728 0 00-.543.24.822.822 0 00-.238.585v.36a4.13 4.13 0 00-1.341-1.03 5.67 5.67 0 00-2.596-.567 7.152 7.152 0 00-5.058 2.096 7.468 7.468 0 00-1.63 2.456 8.017 8.017 0 00-.611 3.212 8.156 8.156 0 00.611 3.23c.374.91.934 1.752 1.613 2.456a7.006 7.006 0 005.041 2.13 5.884 5.884 0 002.596-.55c.51-.257.985-.6 1.358-1.03v.378c.002.21.084.41.23.557a.783.783 0 00.551.233h2.97a.78.78 0 00.781-.773V7.13a.795.795 0 00-.221-.567.696.696 0 00-.56-.258zm-3.988 8.761a3.34 3.34 0 01-.696 1.117 3.83 3.83 0 01-1.053.755 2.907 2.907 0 01-1.323.275c-.459 0-.9-.103-1.307-.275a3.576 3.576 0 01-1.07-.755 3.34 3.34 0 01-.696-1.117 3.982 3.982 0 010-2.731 3.27 3.27 0 01.696-1.1c.306-.309.662-.566 1.07-.755a3.077 3.077 0 011.307-.275c.458 0 .899.086 1.323.274.391.19.747.43 1.053.74.305.326.543.686.696 1.099a3.67 3.67 0 010 2.748zm20.198 1.615l-1.698-1.306c-.322-.257-.628-.326-.899-.223a1.82 1.82 0 00-.628.447 6.03 6.03 0 01-1.29 1.168c-.509.292-1.07.43-1.647.395a3.165 3.165 0 01-1.855-.575 3.224 3.224 0 01-1.183-1.555 4.046 4.046 0 01-.237-1.34c0-.464.067-.928.237-1.374.153-.413.374-.79.679-1.1.306-.309.662-.567 1.052-.739a3.175 3.175 0 011.324-.291 3.06 3.06 0 011.647.412 5.61 5.61 0 011.29 1.168c.169.189.373.343.611.447.271.103.577.034.882-.224l1.698-1.288c.203-.138.373-.344.441-.584a.923.923 0 00-.068-.79 7.35 7.35 0 00-2.614-2.457c-1.12-.635-2.461-.962-3.955-.962a8.163 8.163 0 00-3.072.601 7.65 7.65 0 00-2.495 1.65 7.357 7.357 0 00-1.663 2.473 8.154 8.154 0 000 6.133c.39.927.95 1.769 1.663 2.456a7.876 7.876 0 005.567 2.25c1.494 0 2.835-.326 3.955-.962a7.307 7.307 0 002.631-2.473.886.886 0 00.068-.773 1.167 1.167 0 00-.441-.584zm15.716 3.057l-4.667-6.854 3.989-5.273a.978.978 0 00.169-.86c-.068-.205-.254-.429-.746-.429h-3.157a1.39 1.39 0 00-.527.12 1.058 1.058 0 00-.458.447l-3.191 4.467h-.764V.79a.794.794 0 00-.22-.567.78.78 0 00-.56-.223h-2.954a.856.856 0 00-.56.223.72.72 0 00-.237.567v19.48c0 .223.084.43.237.567a.778.778 0 00.56.223h2.954a.856.856 0 00.56-.223.794.794 0 00.22-.567v-5.153h.849l3.479 5.342c.204.378.595.618 1.019.618h3.31c.509 0 .712-.24.797-.446a.933.933 0 00-.102-.894zM83.015 6.304h-3.31a.852.852 0 00-.662.258 1.178 1.178 0 00-.305.55l-2.445 9.104H75.7l-2.613-9.104a1.54 1.54 0 00-.255-.533.756.756 0 00-.594-.275h-3.429c-.44 0-.712.138-.831.43-.085.257-.085.55 0 .807l4.192 12.798c.068.189.17.378.323.515.17.155.39.24.627.223h1.766l-.153.413-.39 1.185c-.12.36-.34.687-.645.927a1.58 1.58 0 01-.985.327c-.305 0-.61-.069-.882-.19a3.618 3.618 0 01-.781-.463 1.29 1.29 0 00-.747-.24h-.034a.908.908 0 00-.747.463l-1.052 1.546c-.424.67-.187 1.1.085 1.34a5.36 5.36 0 001.952 1.151 7.679 7.679 0 002.495.412c1.51 0 2.783-.412 3.75-1.236a7.067 7.067 0 002.122-3.333l4.855-15.838c.102-.275.119-.567.017-.842-.085-.189-.272-.395-.73-.395z"
                                        fill="#011B33" />
                                </g>
                                <defs>
                                    <clipPath id="clip0">
                                        <path fill="#fff" d="M0 0h157v28H0z" />
                                    </clipPath>
                                </defs>
                            </svg>-->
                            <img src="{{asset('assets/img/logo/5.png')}}" alt="" style="height: 55%; width:55%;">

                        </a>
                    </div>
                    <div class="c-nav--right">
                        <div id="js-mobile-nav-trigger" class="c-nav__trigger">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </div>
                </div>
                <div class="c-nav__body c-nav__body--parent u-animate u-animate--fade-in">
                    <div class="c-nav__mask">
                        <div id="js-main-nav">
                            <ul class="c-nav-menu">
                                <li class="c-nav-menu__item js-nav-has-children" id="why-paystack">
                                <a href="{{route('about')}}">
                                        About YW4CA
                                    </a>
                                </li>
                                <li class="c-nav-menu__item">
                                <a href="{{route('volunteer.main')}}">
                                        Become a Volunteer
                                    </a>
                                </li>
                                <li class="c-nav-menu__item">
                                <a href="{{route('blog.all')}}">
                                        Blog
                                    </a>
                                </li>
                                <li class="c-nav-menu__item js-nav-has-children" id="learn">
                                <a href="{{route('contact')}}">
                                        Contact Us
                                    </a>
                                </li>
                                
                                <li class="c-nav-menu__item c-nav-menu__item--cta">
                                    @guest
                                    <li class="c-nav-menu__item c-nav-menu__item--green">
                                        <a href="{{ route('login') }}">{{ __('Login') }}</a>
                                    </li>
                                    @if (Route::has('register'))
                                        <li class="c-nav-menu__item c-nav-menu__item--green">
                                            <a href="{{ route('register') }}">{{ __('Register') }}</a>
                                        </li>
                                    @endif
                                @else
                                    <li class="c-nav-menu__item c-nav-menu__item--green">
                                        <a {{--id="navbarDropdown" class="nav-link dropdown-toggle"--}} href="#" {{--role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre--}}>
                                            Hello, {{ Auth::user()->name }} <span class="caret"></span>
                                        </a>&nbsp;|&nbsp;
        
                                        <div {{--class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown"--}}>
                                            <a  href="{{ route('logout') }}"
                                               onclick="event.preventDefault();
                                                             document.getElementById('logout-form').submit();" style="position: relative; bottom:2px;">
                                                {{ __('Logout') }}
                                            </a>
        
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                @csrf
                                            </form>
                                        </div>
                                    </li>
                                @endguest
                                    <!--<a class="u-text--secondary" href="https://dashboard.paystack.com/#/login">
                                        Login
                                    </a>
                                </li>
                                <li class="c-nav-menu__item c-nav-menu__item--cta">
                                    <a class="c-button c-button--primary u-text-center c-button--full-width c-button--lg"
                                        href="https://dashboard.paystack.com/#/signup" data-track
                                        data-track-section="Nav">
                                        Create free account
                                    </a>-->
                                </li>
                            </ul>
                        </div>
                        <div id="js-sub-nav">
                            <div class="c-header">
                                <button class="c-button c-button--link c-button" id="js-mobile-back-button">
                                    <span class="c-button__icon c-button__icon--back">
                                        <svg width="6" height="9" viewBox="0 0 6 9" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M5.41065 1.46931C5.66984 1.24252 5.69611 0.848545 5.46931 0.58935C5.24252 0.330155 4.84855 0.30389 4.58935 0.530686L5.41065 1.46931ZM4.58935 8.46931C4.84855 8.69611 5.24252 8.66984 5.46931 8.41065C5.69611 8.15145 5.66984 7.75748 5.41065 7.53069L4.58935 8.46931ZM1.26818 4.73466L1.67883 4.26534L1.26818 4.73466ZM5.41065 7.53069L1.67883 4.26534L0.857529 5.20397L4.58935 8.46931L5.41065 7.53069ZM1.67883 4.73466L5.41065 1.46931L4.58935 0.530686L0.85753 3.79603L1.67883 4.73466ZM1.67883 4.26534C1.8208 4.38957 1.8208 4.61043 1.67883 4.73466L0.85753 3.79603C0.431611 4.16871 0.431609 4.83129 0.857529 5.20397L1.67883 4.26534Z"
                                                fill="#011B33" />
                                        </svg>

                                    </span>
                                    <span class="c-button__text">Back</span>
                                </button>
                            </div>
                            <!--<div class="c-body">
                                <div class="c-nav-menu-links" data-menu-link-group="why-paystack">
                                    <ul class="c-nav-menu__group">
                                        <li class="c-nav-menu__item"><a href="/why-choose-paystack">Why Choose
                                                Paystack</a></li>
                                        <li class="c-nav-menu__item"><a href="/success-rates">Success Rates</a></li>
                                        <li class="c-nav-menu__item"><a href="/demo">Demo</a></li>
                                    </ul>
                                    <ul class="c-nav-menu__group">
                                        <div class="c-nav-menu__label">Your Growth Stage</div>
                                        <li class="c-nav-menu__item"><a href="/entrepreneurs">For Entrepreneurs</a></li>
                                        <li class="c-nav-menu__item"><a href="/corporates">For Corporates</a></li>
                                        <li class="c-nav-menu__item"><a href="/internationals">For Global Brands</a>
                                        </li>
                                    </ul>
                                    <ul class="c-nav-menu__group">
                                        <div class="c-nav-menu__label">Your Business Type</div>
                                        <li class="c-nav-menu__item"><a href="/fintech">For Fintechs</a></li>
                                        <li class="c-nav-menu__item"><a href="/schools">For Schools</a></li>
                                        <li class="c-nav-menu__item"><a href="/betting">For Betting</a></li>
                                    </ul>
                                </div>
                                <div class="c-nav-menu-links" data-menu-link-group="learn">
                                    <ul class="c-nav-menu__group">
                                        <li class="c-nav-menu__item"><a href="/blog">Blog</a></li>
                                        <li class="c-nav-menu__item"><a href="/guides">Guides</a></li>
                                        <li class="c-nav-menu__item"><a target="_blank" rel="noopener"
                                                href="/tutorials">Video Tutorials</a></li>
                                        <li class="c-nav-menu__item"><a target="_blank" rel="noopener"
                                                href="https://decodefintech.com">Decode Fintech</a></li>
                                    </ul>
                                    <ul class="c-nav-menu__group">
                                        <div class="c-nav-menu__label">Company</div>
                                        <li class="c-nav-menu__item"><a href="/about">About Us</a></li>
                                        <li class="c-nav-menu__item"><a href="/compliance">Compliance</a></li>
                                        <li class="c-nav-menu__item"><a href="/careers">Careers</a></li>
                                        <li class="c-nav-menu__item"><a href="/brand">Brand</a></li>
                                        <li class="c-nav-menu__item"><a href="/media">Media Kit</a></li>
                                        <li class="c-nav-menu__item"><a href="/terms">Privacy & Terms</a></li>
                                    </ul>
                                </div>
                                <div class="c-nav-menu-links" data-menu-link-group="developers">
                                    <ul class="c-nav-menu__group">
                                        <li class="c-nav-menu__item"><a href="/developers">Overview</a></li>
                                        <li class="c-nav-menu__item"><a
                                                href="https://developers.paystack.co/">Documentation</a></li>
                                        <li class="c-nav-menu__item"><a href="/status">Status</a></li>
                                    </ul>
                                </div>
                                <div class="c-nav-menu-links" data-menu-link-group="support">
                                    <ul class="c-nav-menu__group">
                                        <li class="c-nav-menu__item"><a target="_blank" rel="noopener"
                                                href="/help">Quick Help</a></li>
                                        <li class="c-nav-menu__item"><a href="/contact">Contact Us</a></li>
                                        <li class="c-nav-menu__item"><a href="/lookup">Why was I debited?</a></li>
                                    </ul>
                                </div>
                            </div>-->
                        </div>
                    </div>
                </div>
            </div>
        </nav>

    </header>





    <main>
        @yield('content')
    </main>


    <section class="l-section l-section--padded-xs l-section--md l-section--white">
        <div js-animate-in-view class="c-section-pattern c-section-pattern--curved"></div>
        <div class="l-container l-container--lg">
            <div class="c-signup">
                <div class="c-signup__left">
                    <p class="u-text-summary">Register as a Volunteer</p>
                    <div js-animate-in-view data-animation="slideUp" data-offset="80">
                        <h2>Take up the fight against Climate Change</h2>
                    </div>
                </div>
                <div class="c-signup__right">
                    <div class="c-signup__cta">
                    <a href="{{route('volunteer.main')}}"
                            class="c-button--lg c-button c-button--primary" data-track data-track-section="Footer">
                            Volunteer
                        </a>
                        <a href="" class="c-button c-button--primary c-button--demo c-button--link">

                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="l-section l-section--pad-bottom l-section--white">
        <div class="l-container l-container--lg">
            <!--<div class="c-footer__row">
                <div class="c-footer__column">
                    <div class="c-footer__group">
                        <h4 class="c-footer__header">Why Paystack</h4>
                        <ul class="c-footer-list">
                            <li class="c-footer-list__item"><a href="/why-choose-paystack">Why Choose Paystack</a></li>
                            <li class="c-footer-list__item"><a href="/success-rates">Success rates</a></li>
                        </ul>
                    </div>
                    <div class="c-footer__group">
                        <ul class="c-footer-list">
                            <li class="c-footer-list__item"><a href="/entrepreneurs">For Entrepreneurs</a></li>
                            <li class="c-footer-list__item"><a href="/corporates">For Corporates</a></li>
                            <li class="c-footer-list__item"><a href="/internationals">For International Companies</a>
                            </li>
                        </ul>
                    </div>
                    <div class="c-footer__group">
                        <ul class="c-footer-list">
                            <li class="c-footer-list__item"><a href="/fintech">For Fintechs</a></li>
                            <li class="c-footer-list__item"><a href="/schools">For Schools</a></li>
                            <li class="c-footer-list__item"><a href="/betting">For Betting</a></li>
                        </ul>
                    </div>
                </div>
                <div class="c-footer__column">
                    <div class="c-footer__group">
                        <h4 class="c-footer__header">Pricing</h4>
                        <ul class="c-footer-list">
                            <li class="c-footer-list__item"><a href="/pricing">Nigeria</a></li>
                        </ul>
                    </div>
                    <div class="c-footer__group">
                        <h4 class="c-footer__header">Customers</h4>
                        <ul class="c-footer-list">
                            <li class="c-footer-list__item"><a href="/wall-of-love">Testimonials</a></li>
                        </ul>
                    </div>
                    <div class="c-footer__group">
                        <h4 class="c-footer__header">Learn</h4>
                        <ul class="c-footer-list">
                            <li class="c-footer-list__item"><a href="/blog">Blog</a></li>
                            <li class="c-footer-list__item"><a href="/guides">Guides</a></li>
                            <li class="c-footer-list__item"><a target="_blank" rel="noopener" href="/tutorials">Video
                                    Tutorials</a></li>
                            <li class="c-footer-list__item"><a target="_blank" rel="noopener"
                                    href="https://decodefintech.com">Decode Fintech</a></li>
                        </ul>
                    </div>
                </div>
                <div class="c-footer__column">
                    <div class="c-footer__group">
                        <h4 class="c-footer__header">Developers</h4>
                        <ul class="c-footer-list">
                            <li class="c-footer-list__item"><a href="/developers">Overview</a></li>
                            <li class="c-footer-list__item"><a href="https://developers.paystack.co/" target="_blank"
                                    rel="noopener">Documentation</a></li>
                            <li class="c-footer-list__item"><a href="/status" target="_blank" rel="noopener">Status
                                    Page</a></li>
                        </ul>
                    </div>
                    <div class="c-footer__group">
                        <h4 class="c-footer__header">Community</h4>
                        <ul class="c-footer-list">
                            <li class="c-footer-list__item"><a target="_blank" rel="noopener"
                                    href="https://nigerialogos.com/">Nigeria Logos</a></li>
                        </ul>
                    </div>
                    <div class="c-footer__group">
                        <h4 class="c-footer__header">Support</h4>
                        <ul class="c-footer-list">
                            <li class="c-footer-list__item"><a href="https://paystack.com/help" target="_blank"
                                    rel="noopener">Help Desk</a></li>
                            <li class="c-footer-list__item"><a href="/contact">Contact Us</a></li>
                            <li class="c-footer-list__item"><a href="/lookup" target="_blank" rel="noopener">Why was I
                                    debited?</a></li>
                        </ul>
                    </div>
                </div>
                <div class="c-footer__column">
                    <div class="c-footer__group">
                        <h4 class="c-footer__header">About</h4>
                        <ul class="c-footer-list">
                            <li class="c-footer-list__item"><a href="/about">Company</a></li>
                            <li class="c-footer-list__item"><a href="/compliance">Compliance</a></li>
                            <li class="c-footer-list__item"><a href="/careers">Careers</a></li>
                            <li class="c-footer-list__item"><a href="/media">Media Kit</a></li>
                            <li class="c-footer-list__item"><a href="/terms">Privacy & Terms</a></li>
                        </ul>
                    </div>
                </div>
            </div>-->
            <div class="c-footer__row">
                <div class="c-footer__column">
                    <h4 class="c-footer__header">Contact</h4>
                    <ul class="c-footer-list">
                        <li
                            class="c-footer-list__item c-footer-list__item--contact {{--c-footer-list__item--lowercase--}} u-flex--m-b-sm">
                            <span style="color: #011b33;font-size:1.8rem;">Email: </span>
                            <span
                                    class="__cf_email__"
                                    data-cfemail="721a171e1e1d3202130b01061311195c111d1f">willisayot2@gmail.com</span>
                                    
                        </li>
                        <li
                            class="c-footer-list__item c-footer-list__item--contact {{--c-footer-list__item--lowercase--}} u-flex--m-b-sm">
                            <span style="color: #011b33;font-size:1.8rem;">Telephone: </span>
                            <span
                                    class="__cf_email__"
                                    >(+254)725-536-058</span>
                                    
                        </li>
                        <!--<li>
                            <ul class="c-footer-list c-footer-list--social">
                                <li class="c-footer-list__item">
                                    <a href="https://facebook.com/PaystackHQ" target="_blank" rel="noopener">
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <rect width="20" height="20" fill="white" />
                                            <path
                                                d="M18.8962 0H1.10375C0.49375 0 0 0.49375 0 1.10375V18.8962C0 19.5062 0.49375 20 1.10375 20H10.6825V12.255H8.075V9.2375H10.6825V7.00875C10.6825 4.42625 12.26 3.02125 14.565 3.02125C15.6688 3.02125 16.6175 3.10125 16.8938 3.13875V5.83875H15.2937C14.0437 5.83875 13.8 6.43875 13.8 7.31375V9.23875H16.7875L16.4 12.2637H13.8V20H18.8962C19.5062 20 20 19.5062 20 18.8962V1.10375C20 0.49375 19.5062 0 18.8962 0Z"
                                                fill="#3d5e69" />
                                        </svg>

                                    </a>
                                </li>
                                <li class="c-footer-list__item">
                                    <a href="https://twitter.com/paystack" target="_blank" rel="noopener">
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <g clip-path="url(#clip0)">
                                                <rect width="20" height="20" fill="white" />
                                                <path
                                                    d="M19.6819 1.93532C19.2375 2.13237 18.7763 2.28782 18.3029 2.40036C18.8245 1.90474 19.2166 1.28483 19.4379 0.592898C19.501 0.395363 19.2865 0.224549 19.1081 0.330314C18.4496 0.720898 17.7403 1.01391 16.9999 1.2013C16.9569 1.21218 16.9126 1.21769 16.8681 1.21769C16.7332 1.21769 16.6021 1.16761 16.499 1.07672C15.7112 0.382392 14.6979 5.50597e-08 13.646 5.50597e-08C13.1908 5.50597e-08 12.7312 0.0709489 12.28 0.210896C10.8819 0.644537 9.80311 1.79781 9.46465 3.22069C9.33768 3.75439 9.3033 4.28858 9.3624 4.80838C9.36918 4.86811 9.34094 4.9098 9.32353 4.92936C9.29296 4.96364 9.24961 4.98329 9.2046 4.98329C9.19958 4.98329 9.19441 4.98304 9.18929 4.98256C6.12889 4.69823 3.36915 3.22381 1.41842 0.830955C1.31895 0.708903 1.12819 0.723873 1.0489 0.85987C0.666902 1.51523 0.465027 2.2648 0.465027 3.02754C0.465027 4.19646 0.934654 5.29805 1.75039 6.10111C1.40735 6.01977 1.07533 5.89168 0.766913 5.72038C0.617701 5.63748 0.434112 5.74403 0.432015 5.91469C0.410657 7.65121 1.42735 9.19638 2.95038 9.89217C2.91971 9.8929 2.88904 9.89324 2.85832 9.89324C2.6169 9.89324 2.37245 9.86993 2.13186 9.82395C1.96383 9.79186 1.82266 9.95127 1.87484 10.1142C2.36919 11.6575 3.69805 12.7952 5.28828 13.0535C3.96848 13.9394 2.43155 14.4068 0.831913 14.4068L0.333223 14.4065C0.179574 14.4065 0.0496227 14.5066 0.0104668 14.6554C-0.028104 14.802 0.0429423 14.9566 0.173966 15.0329C1.9765 16.0819 4.03256 16.6363 6.12074 16.6363C7.94859 16.6363 9.65838 16.2736 11.2027 15.5582C12.6184 14.9024 13.8694 13.965 14.921 12.7719C15.9007 11.6605 16.6667 10.3775 17.1978 8.95866C17.7041 7.60615 17.9717 6.16299 17.9717 4.78517V4.71953C17.9717 4.4983 18.0717 4.29014 18.2463 4.14843C18.9087 3.61059 19.4856 2.97746 19.9608 2.26666C20.0863 2.07897 19.8884 1.84374 19.6819 1.93532Z"
                                                    transform="translate(0 1.68164)" fill="#3d5e69" />
                                            </g>
                                            <defs>
                                                <clipPath id="clip0">
                                                    <rect width="20" height="20" fill="white" />
                                                </clipPath>
                                            </defs>
                                        </svg>

                                    </a>
                                </li>
                                <li class="c-footer-list__item">
                                    <a href="https://instagram.com/paystackhq" target="_blank" rel="noopener">
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <g clip-path="url(#clip0)">
                                                <rect width="20" height="20" fill="white" />
                                                <path
                                                    d="M14.0419 0H5.95811C2.67279 0 0 2.67279 0 5.95811V14.0419C0 17.3272 2.67279 20 5.95811 20H14.0419C17.3272 20 20 17.3272 20 14.0419V5.95811C20 2.67279 17.3272 0 14.0419 0ZM17.988 14.0419C17.988 16.2212 16.2212 17.988 14.0419 17.988H5.95811C3.77875 17.988 2.012 16.2212 2.012 14.0419V5.95811C2.012 3.77871 3.77875 2.012 5.95811 2.012H14.0419C16.2212 2.012 17.988 3.77871 17.988 5.95811V14.0419Z"
                                                    fill="#3d5e69" />
                                                <path
                                                    d="M5.17271 0C2.32047 0 0 2.32047 0 5.17267C0 8.02488 2.32047 10.3454 5.17271 10.3454C8.02495 10.3454 10.3454 8.02491 10.3454 5.17267C10.3454 2.32044 8.02495 0 5.17271 0ZM5.17271 8.33342C3.42708 8.33342 2.012 6.91834 2.012 5.17271C2.012 3.42708 3.42712 2.012 5.17271 2.012C6.91834 2.012 8.33343 3.42708 8.33343 5.17271C8.33343 6.9183 6.9183 8.33342 5.17271 8.33342Z"
                                                    transform="translate(4.828 4.82812)" fill="#3d5e69" />
                                                <path
                                                    d="M1.23949 2.47898C1.92404 2.47898 2.47898 1.92404 2.47898 1.23949C2.47898 0.554938 1.92404 0 1.23949 0C0.554938 0 0 0.554938 0 1.23949C0 1.92404 0.554938 2.47898 1.23949 2.47898Z"
                                                    transform="translate(13.9432 3.62695)" fill="#3d5e69" />
                                            </g>
                                            <defs>
                                                <clipPath id="clip0">
                                                    <rect width="20" height="20" fill="white" />
                                                </clipPath>
                                            </defs>
                                        </svg>

                                    </a>
                                </li>
                                <li class="c-footer-list__item">
                                    <a href="https://www.linkedin.com/company/paystack/" target="_blank" rel="noopener">
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <rect width="20" height="20" fill="white" />
                                            <path
                                                d="M18.1908 0H1.80916C0.81 0 0 0.81 0 1.80916V18.1908C0 19.19 0.81 20 1.80916 20H18.1908C19.19 20 20 19.19 20 18.1908V1.80916C20 0.81 19.19 0 18.1908 0ZM6.18885 17.2693C6.18885 17.5601 5.95314 17.7958 5.66236 17.7958H3.4212C3.13042 17.7958 2.89471 17.5601 2.89471 17.2693V7.8745C2.89471 7.58372 3.13042 7.34801 3.4212 7.34801H5.66236C5.95314 7.34801 6.18885 7.58372 6.18885 7.8745V17.2693ZM4.54178 6.46241C3.36592 6.46241 2.41267 5.50916 2.41267 4.3333C2.41267 3.15743 3.36592 2.20419 4.54178 2.20419C5.71764 2.20419 6.67089 3.15743 6.67089 4.3333C6.67089 5.50916 5.7177 6.46241 4.54178 6.46241ZM17.901 17.3117C17.901 17.5791 17.6843 17.7958 17.417 17.7958H15.012C14.7447 17.7958 14.528 17.5791 14.528 17.3117V12.905C14.528 12.2476 14.7208 10.0243 12.81 10.0243C11.3279 10.0243 11.0272 11.5461 10.9669 12.2291V17.3117C10.9669 17.5791 10.7502 17.7958 10.4828 17.7958H8.15681C7.88948 17.7958 7.67272 17.5791 7.67272 17.3117V7.83209C7.67272 7.56476 7.88948 7.34801 8.15681 7.34801H10.4828C10.7501 7.34801 10.9669 7.56476 10.9669 7.83209V8.65173C11.5164 7.82696 12.3332 7.19037 14.0722 7.19037C17.9231 7.19037 17.901 10.7881 17.901 12.7648V17.3117Z"
                                                fill="#3d5e69" />
                                        </svg>

                                    </a>
                                </li>
                                <li class="c-footer-list__item">
                                    <a href="https://youtube.com/paystackhq" target="_blank" rel="noopener">
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <rect width="20" height="20" fill="white" />
                                            <path
                                                d="M25.4667 0H1.2C0.537258 0 0 0.537259 0 1.2V25.4667C0 26.1294 0.537259 26.6667 1.2 26.6667H25.4667C26.1294 26.6667 26.6667 26.1294 26.6667 25.4667V1.2C26.6667 0.537258 26.1294 0 25.4667 0Z"
                                                transform="scale(0.75)" fill="#3d5e69" />
                                            <path
                                                d="M6.73828 0C6.73828 0 2.52369 3.91006e-06 1.46589 0.27487C0.8995 0.433123 0.433125 0.899503 0.27487 1.47422C6.26246e-06 2.53203 0 4.72266 0 4.72266C0 4.72266 6.26246e-06 6.9216 0.27487 7.96276C0.433125 8.53747 0.89117 8.99552 1.46589 9.15378C2.53202 9.43697 6.73828 9.43698 6.73828 9.43698C6.73828 9.43698 10.9612 9.43697 12.019 9.16211C12.5937 9.00385 13.0518 8.55413 13.2017 7.97109C13.4849 6.92161 13.4849 4.73099 13.4849 4.73099C13.4849 4.73099 13.4932 2.53203 13.2017 1.47422C13.0518 0.899503 12.5937 0.441463 12.019 0.291536C10.9612 1.33197e-05 6.73828 0 6.73828 0ZM5.39727 2.6987L8.90391 4.72266L5.39727 6.73828V2.6987Z"
                                                transform="translate(3.25757 5.28174)" fill="white" />
                                        </svg>

                                    </a>
                                </li>
                            </ul>
                        </li>-->
                    </ul>
                </div>
                <div class="c-footer__column">
                    <h4 class="c-footer__header">Location</h4>
                    <ul class="c-footer-list">
                        <li class="c-footer-list__item">Muthaiga Suites 29 (Level-4),<br>Off Vuli Lane,<br>Thika Super Highwaya,
                            Nairobi.</li>
                    </ul>
                </div>
                <!--<div class="c-footer__column">
                    <h4 class="c-footer__header">Accra</h4>
                    <ul class="c-footer-list">
                        <li class="c-footer-list__item">Workshed Africa,<br>47 Nungua Link Road 2nd Floor,<br>Baatsona,
                            Spintex,<br>Accra, Ghana.</li>
                    </ul>
                </div>
                <div class="c-footer__column">
                    <h4 class="c-footer__header">San Francisco</h4>
                    <ul class="c-footer-list">
                        <li class="c-footer-list__item">201 Spear Street, Suite 1100,<br> PMB 3228, San Francisco,<br>CA
                            94105.</li>
                    </ul>
                </div>-->
            </div>
        </div>
    </section>




    <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="/assets/js/global.min.js"></script>
    <script type="application/ld+json">
        {"@context":"http://schema.org","@graph":[{"@type":"Corporation","description":"Over 60,000 businesses in Nigeria use Paystack to collect payments with a modern, secure payment gateway.","image":{"@type":"ImageObject","url":"https://assets.paystack.com/assets/img/hero/paystack-opengraph.png"},"mainEntityOfPage":"https://paystack.com/","name":"Paystack - Modern online and offline payments for Africa","url":"https://paystack.com/"},{"@id":"https://paystack.com#identity","@type":"Corporation","address":{"@type":"PostalAddress","addressCountry":"Nigeria","addressRegion":"Lagos","postalCode":"N/A","streetAddress":"3A Ladoke Akintola, Ikeja GRA"},"contactPoint":[{"@type":"ContactPoint","contactType":"customer support","telephone":"+234 1 631 6160"}],"description":"Over 17,000 businesses in Nigeria use Paystack to accept payments online quickly, and securely.","email":"hello@paystack.com","founder":"Shola Akinlade","foundingDate":"2015","foundingLocation":"Lagos, Nigeria","image":{"@type":"ImageObject","height":"800","url":"https://website-v3-assets.s3.amazonaws.com/assets/img/hero/Paystack-mark-white-twitter.png","width":"800"},"logo":{"@type":"ImageObject","height":"60","url":"https://assets.paystack.com/assets/img/hero/_600x60_fit_center-center_82_none/Paystack-mark-white-twitter.png?mtime=1535198005","width":"60"},"name":"Paystack","sameAs":["https://twitter.com/paystack","https://www.facebook.com/PaystackHQ/","https://www.linkedin.com/company/paystack/","https://www.youtube.com/paystackhq","https://www.instagram.com/paystackhq/"],"telephone":"+234 1 631 6160","url":"https://paystack.com"},{"@id":"#creator","@type":"Organization"},{"@type":"BreadcrumbList","description":"Breadcrumbs list","itemListElement":[{"@type":"ListItem","item":"https://paystack.com/","name":"Home","position":1}],"name":"Breadcrumbs"}]}
    </script>
    <script>
        !function(){function n(){var n=document.getElementById("js-mobile-nav-trigger"),e=document.querySelector(".c-nav.c-nav--mobile-only"),t=!1;n.addEventListener("click",function(){var i=t?"remove":"add";n.classList[i]("c-nav__trigger--is-active"),e.classList[i]("c-nav--is-opened"),t=!t})}function e(n,e,t){new Waypoint({element:n,handler:e,offset:t+"px"})}function t(){for(var n=["blue","green","offwhite","white"],t=document.getElementsByClassName("l-section"),i=65,r=function(r){var o=t[r];e(o,function(e){for(var t=document.getElementsByClassName("c-nav"),i=function(i){var r=t[i],a=n.find(function(n){return r.classList.contains("c-nav--"+n)}),c="up"===e?o.previousElementSibling:o,s=n.find(function(n){return c.classList.contains("l-section--"+n)});a&&r.classList.remove("c-nav--"+a),r.classList.add("c-nav--"+s)},r=0;r<t.length;r++)i(r)},i)},o=0;o<t.length;o++)r(o)}Array.prototype.find||Object.defineProperty(Array.prototype,"find",{value:function(n){if(null==this)throw new TypeError('"this" is null or not defined');var e=Object(this),t=e.length>>>0;if("function"!=typeof n)throw new TypeError("predicate must be a function");for(var i=arguments[1],r=0;r<t;){var o=e[r];if(n.call(i,o,r,e))return o;r++}},configurable:!0,writable:!0}),n(),t()}();
  !function(){for(var e=document.querySelectorAll(".js-nav-has-children"),n=document.querySelectorAll(".c-nav-menu-links"),a=document.querySelector(".c-nav__body"),t=0;t<e.length;t++)e[t].addEventListener("click",function(e){e.preventDefault(),a.classList.add("c-nav__body--is-opened");for(var t=0;t<n.length;t++)this.id===n[t].dataset.menuLinkGroup?(n[t].style.display="block",n[t].classList.add("u-animate--fade-in","u-animate","u-animate--play")):(n[t].style.display="none",n[t].classList.remove("u-animate--fade-in","u-animate","u-animate--play"))});var i=document.getElementById("js-mobile-back-button");i.addEventListener("click",function(){a.classList.remove("c-nav__body--is-opened")})}();
 !function(){document.getElementById("js-hero-video-summary").style.opacity=0,window.addEventListener("load",function(){function t(){l&&n.classList.remove(l),l="c-homepage-animation--"+a[s],n.classList.add(l),s+=1;var t=s===a.length;t&&(setTimeout(function(){document.getElementById("js-hero-video-summary").style.opacity=1},2e3),clearInterval(i),o())}function e(t){var e=document.getElementById("js-homepage-animation-tooltip"),o=document.getElementById("js-homepage-animation-tooltip-title"),n=document.getElementById("js-homepage-animation-tooltip-caption"),i=t.getAttribute("id");t.addEventListener("mouseenter",function(){var a=void 0!==window.pageYOffset?window.pageYOffset:(document.documentElement||document.body.parentNode||document.body).scrollTop,s=t.getBoundingClientRect(),l=r[i];o.innerHTML="Get paid from <b>"+l.title+"</b>",n.innerHTML=l.caption;var c=window.innerWidth-s.right<200,d=s.top+a;c?(t.classList.add("map-pointer--left"),e.classList.add("c-homepage-animation__tooltip--on-left"),e.style.top=d+"px",e.style.left=s.left-190+"px"):(e.classList.remove("c-homepage-animation__tooltip--on-left"),e.style.top=d+"px",e.style.left=s.left+50+"px"),e.classList.add("c-homepage-animation__tooltip--is-visible")}),t.addEventListener("mouseleave",function(){e.classList.remove("c-homepage-animation__tooltip--is-visible")})}function o(){for(var t=document.getElementsByClassName("map-pointer"),o=0;o<t.length;o++){var n=t[o];e(n)}}document.getElementById("js-hero-video-summary").style.opacity=0;var n=document.getElementById("js-homepage-animation"),i=null,a=["europe","americas","africa"],s=0,l=null,c=window.innerWidth||document.documentElement.clientWidth||document.body.clientWidth;c<800?document.getElementById("js-hero-video-summary").style.opacity=1:(document.getElementById("js-hero-video-summary").style.opacity=0,t(),i=setInterval(t,2500),n.classList.add("c-homepage-animation--play"));var r={nigeria:{title:"Lagos, Nigeria",caption:"Sell locally with four different payment methods"},"united-states":{title:"Texas, United States",caption:"Accept payments in any currency you want"},canada:{title:"Toronto, Canada",caption:"Use Paystack Go to follow your business wherever you go"},brazil:{title:"Rio, Brazil",caption:"Sell to customers all over the world"},egypt:{title:"Cairo, Egypt",caption:"Accept payments in any currency you want"},"south-africa":{title:"Johannesburg",caption:"Paystack grows with your business"},uk:{title:"London, UK",caption:"Scale international business"},china:{title:"Beijing, China",caption:"Sell to customers all over the world"},norway:{title:"Oslo, Norway",caption:"Use Paystack Go to follow your business wherever you go"},india:{title:"Jakarta, India",caption:"Paystack grows with your business"}}})}();
 window.onload = function(){
         document.getElementById('js-hero-iframe').src = '//www.youtube.com/embed/DKTg9RpTLMM';
     };
 !function(){var e=function(e){var t=e.elementType,n=e.className,o=void 0===n?null:n,i=document.createElement(t);return"string"==typeof o&&i.classList.add(o),document.body.appendChild(i)},t=function(e){var t=e.scalingOverlay,n=e.videoCaptionButton;t.style.left=n.getBoundingClientRect().left+n.getBoundingClientRect().width/2+"px",t.style.top=n.getBoundingClientRect().top+n.getBoundingClientRect().width/2+"px"};window.addEventListener("load",function(){var n=document.createElement("script");n.src="https://www.youtube.com/player_api";var o=document.getElementsByTagName("script")[0];o.parentNode.insertBefore(n,o);var i=void 0;window.onYouTubePlayerAPIReady=function(){i=new YT.Player("js-hero-iframe")};var a=document.querySelector(".c-hero__video-summary");if(a){var d=a.querySelector(".c-button"),c=e({elementType:"div",className:"js-scaling-overlay"});t({scalingOverlay:c,videoCaptionButton:d}),window.addEventListener("resize",function(){return t({scalingOverlay:c,videoCaptionButton:d})}),a.addEventListener("click",function(){setTimeout(function(){i.playVideo()},550),document.querySelector("body").classList.add("u-trapped"),c.classList.add("js-scaling-overlay--expanded"),c.style.opacity=1}),document.querySelector("[js-hide-overlay]").addEventListener("click",function(){i.pauseVideo(),setTimeout(function(){document.querySelector("body").classList.remove("u-trapped"),c.style.opacity=null},520),c.classList.remove("js-scaling-overlay--expanded")})}})}();
 !function(){for(var t=document.querySelectorAll(".l-section--hero .c-button"),e=function(t){var e=t.getAttribute("href"),o=document.querySelectorAll("[js-scroll-to]");if(e.match("^#")){event.preventDefault();for(var r=0;r<o.length;r++)"#"+o[r].dataset.scrollTo==e&&o[r].scrollIntoView({behavior:"smooth"})}},o=0;o<t.length;o++){var r=t[o];r.addEventListener("click",function(){e(r)})}}();
 !function(){var e,t=document.getElementsByClassName("c-footer__header");for(e=0;e<t.length;e++)t[e].addEventListener("click",function(){this.classList.toggle("c-footer__header--active");var e=this.nextElementSibling;e.style.maxHeight?e.style.maxHeight=null:e.style.maxHeight=e.scrollHeight+"px"})}();
    </script>

<script src="//code.tidio.co/anjhuj4kfrbjdauejmincxoagpyw56bl.js" async></script>
</body>

</html>