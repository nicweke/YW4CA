<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/favicon/1.png')}}" />
    <title>Blog | YW4CA</title>

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
        <div class="nav__right">
        <a class="button button--green" href="{{route('volunteer.main')}}">
                <span class="button__text">Register as <span class="u-no-mobile">YW4CA </span>Volunteer</span>
            </a>
        </div>
    </div>
</nav>

<section class="hero-section hero-section--lg hero-section--blue">
    <div class="hero-section__background"></div>
    <div class="container">
        <div class="hero-section__subscribe">
            <div class="grid">
                <div class="grid__column grid__column--6">
                    <h1 class="hero-section__primary-title">Young World 4 Climate Action Blog</h1>
                    <p class="hero-section__secondary-title">For all your climate-related information</p>
                    <!--<div class="hero-section__call-to-action">
                        <form action="#" class="signup-form form--inline">
                            <div class="form__group">
                                <input type="email" placeholder="Enter email" class="form__input form__input--large">
                            </div>
                            <button type="submit" class="button button--green button--large">
                                <span class="loading-icon">
                                    <i class="ion ion-load-d"></i>
                                </span>
                                <span class="button__text">Subscribe</span>
                            </button>
                        </form>
                        <div class="hero-section__congrats">
                            <div class="congrats-msg">
                                Thanks for subscribing!
                            </div>
                        </div>
                    </div>-->
                </div>
            </div>
        </div>
</section>
<!--<nav class="nav-categories" id="nav-categories">
    <div class="container">
        <ul>
            <li class="nav-categories__item nav-categories__item--is-active">
                <a href="https://paystack.com/blog/">All</a>
            </li>
            <li class="nav-categories__item ">
                <a href="https://paystack.com/blog/category/product">
                    Product Updates
                </a>
            </li>
            <li class="nav-categories__item ">
                <a href="https://paystack.com/blog/category/marketing">
                    Marketing
                </a>
            </li>
            <li class="nav-categories__item ">
                <a href="https://paystack.com/blog/category/operations">
                    Operations &amp; Finance
                </a>
            </li>
            <li class="nav-categories__item ">
                <a href="https://paystack.com/blog/category/company-news">
                    Company News
                </a>
            </li>
        </ul>
    </div>
</nav>-->
<main class="page__content">
    <section class="home-section home-section--posts">
        <div class="container u-mobile-no-padder">
            <div class="post__list">
                
                @foreach ($blog as $b)

                    <div class="post__list-item">

                        <a class="post__list-item-image-wrap">

                            <div class="post__list-item-image">
                                <img class="lazyload"
                                    src="{{asset('storage/'.$b->img)}}"
                                    data-srcset="{{asset('storage/'.$b->img)}}"
                                    data-sizes="100vw" alt="Blog post feature Image">
                            </div>
                        </a>
                        <div class="post__list-item__crate">
                            <div class="post__category">
                                <!--<span class="post__category"><a href="https://paystack.com/blog/category/product">Product
                                        Updates</a></span>-->

                                <span class="post__read-time"> · {{$b->created_at}}</span>
                            </div>
                        <a href="{{url('blog/'.$b->id)}}" class="post__title">{{$b->title}}</a>
                            <div class="post__snippet">
                                {{$b->desc}}
                            </div>
                        </div>
                    </div>
                    
                @endforeach

            </div>

        </div>
    </section>
</main>

<nav class="pagination">
    <div class="container">
        <div class="u-width-660">

            {{$blog->links()}}

            <!--<span class="pagination__link-item pagination__link-item--current-page">1</span>

            <a class="pagination__link-item" href="https://paystack.com/blog/page/2">2</a>
            <a class="pagination__link-item" href="https://paystack.com/blog/page/3">3</a>

            <a class="pagination__link-item" rel="next" href="https://paystack.com/blog/page/2">Next</a>

            <a class="pagination__link-item" href="https://paystack.com/blog/page/12">Last</a>-->

        </div>
    </div>
</nav>

<footer class="footer">
    <div class="footer__top">
        <div class="container">
            <div class="footer__left">
<!--                 <div class="footer__primary-title">Start accepting payments online</div> -->
                <div class="footer__secondary-title">We are a conservation organization that works through partnering and collaborating with youths to innovate and implement creative solutions against climate change and environmental degradation.</div>
            </div>
            <div class="footer__right footer__left--xs">
            <a target="_blank" rel="noopener" href="{{route('register')}}" class="button button--green button--large">Create your free YW4CA account</a>   
            </div>
        </div>
    </div>
    <div class="container">
        <div class="footer__bottom">
            <div class="footer__left">
                    &copy; Young World 4 Climate Action 2020
            </div>
            <div class="footer__right">
            <a target="_blank" rel="noopener" href="{{route('home')}}">Young World for Climate Action
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100">
                        <path d="M87 18.5c0-3-2.5-5.5-5.5-5.5H18.7c-3.5 0-6.7 3.4-5.5 7.2.8 2.3 3.1 3.8 5.5 3.8H64c1.6 0 2.3 1.9 1.2 3L18.7 73.5c-2.2 2.2-2.3 5.9 0 8.1 2.2 2.1 5.6 1.8 7.8-.3L73 34.8c1.1-1.1 3-.3 3 1.2v45.3c0 3.3 2.8 6.1 6.1 5.7 2.8-.3 4.9-2.9 4.9-5.7V18.5c0-3 0 .6 0 0 0-3 0 .6 0 0 0-3 0 .6 0 0 0-3 0 .6 0 0 0-3 0 .6 0 0z"/>
                        </svg></a>
            </div>
        </div>
    </div>
</footer>



<script>lazyload()</script>
	   <script type="application/ld+json">{"@context":"http://schema.org","@graph":[{"@type":"Blog","author":{"@id":"http://paystack.com#identity"},"copyrightHolder":{"@id":"http://paystack.com#identity"},"copyrightYear":"2017","creator":{"@id":"http://paystack.com#creator"},"dateModified":"2020-03-11T17:45:15+01:00","datePublished":"2017-12-12T19:52:07+01:00","description":"Learn how to run an online business in Nigeria from founders on the front line. Original lessons, data, and guides you won’t find anywhere else.","headline":"The Paystack Blog","image":{"@type":"ImageObject","url":"https://s3-eu-west-1.amazonaws.com/pstk-blog-staging/images/articles/_1200x630_crop_center-center_82_none/The-Paystack-Blog.png?mtime=1520797522"},"inLanguage":"en-us","mainEntityOfPage":"https://paystack.com/blog/","name":"The Paystack Blog","publisher":{"@id":"http://paystack.com#creator"},"url":"https://paystack.com/blog/"},{"@id":"http://paystack.com#identity","@type":"LocalBusiness","address":{"@type":"PostalAddress","addressCountry":"Nigeria","addressLocality":"Ikeja","addressRegion":"Lagos","streetAddress":"126 Joel Ogunnaike"},"email":"hello@paystack.com","founder":"Shola Akinlade","foundingLocation":"Lagos, Nigeria","image":{"@type":"ImageObject","height":"2245","url":"https://s3-eu-west-1.amazonaws.com/pstk-blog-staging/images/articles/Paystack-mark.png","width":"2286"},"logo":{"@type":"ImageObject","height":"60","url":"https://s3-eu-west-1.amazonaws.com/pstk-blog-staging/images/articles/_600x60_fit_center-center_82_none/Paystack-mark.png?mtime=1520797301","width":"61"},"name":"Paystack","priceRange":"$","url":"http://paystack.com"},{"@id":"#creator","@type":"LocalBusiness","name":"Paystack","priceRange":"$"},{"@type":"BreadcrumbList","description":"Breadcrumbs list","itemListElement":[{"@type":"ListItem","item":"https://172.31.65.134/blog/","name":"The Paystack Blog","position":1}],"name":"Breadcrumbs"}]}</script>
    
</body>
</html>










{{--@extends('layouts.front')

@section('content')

<!--<nav class="nav-wrap" id="nav">
    <div class="nav">
        <div class="nav__left">
            <a href="https://paystack.com">
                <img src="https://paystack.com/blog/public/assets/images/logo/paystack-logo.svg" alt="Paystack logo">
            </a>
        </div>
        <div class="nav__right">
            <a class="button button--green" href="https://paystack.com/blog/ask">
                <span class="button__text">Ask the <span class="u-no-mobile">Paystack </span>Blog</span>
            </a>
        </div>
    </div>
</nav>-->

<section class="hero-section hero-section--lg hero-section--blue">
    <div class="hero-section__background"></div>
    <div class="container">
        <div class="hero-section__subscribe">
            <div class="grid">
                <div class="grid__column grid__column--6">
                    <h1 class="hero-section__primary-title">Young World 4 Climate Action Blog</h1>
                    <p class="hero-section__secondary-title">For all your climate-related information</p>
                    <!--<div class="hero-section__call-to-action">
                        <form action="#" class="signup-form form--inline">
                            <div class="form__group">
                                <input type="email" placeholder="Enter email" class="form__input form__input--large">
                            </div>
                            <button type="submit" class="button button--green button--large">
                                <span class="loading-icon">
                                    <i class="ion ion-load-d"></i>
                                </span>
                                <span class="button__text">Subscribe</span>
                            </button>
                        </form>
                        <div class="hero-section__congrats">
                            <div class="congrats-msg">
                                Thanks for subscribing!
                            </div>
                        </div>
                    </div>-->
                </div>
            </div>
        </div>
</section>
<!--<nav class="nav-categories" id="nav-categories">
    <div class="container">
        <ul>
            <li class="nav-categories__item nav-categories__item--is-active">
                <a href="https://paystack.com/blog/">All</a>
            </li>
            <li class="nav-categories__item ">
                <a href="https://paystack.com/blog/category/product">
                    Product Updates
                </a>
            </li>
            <li class="nav-categories__item ">
                <a href="https://paystack.com/blog/category/marketing">
                    Marketing
                </a>
            </li>
            <li class="nav-categories__item ">
                <a href="https://paystack.com/blog/category/operations">
                    Operations &amp; Finance
                </a>
            </li>
            <li class="nav-categories__item ">
                <a href="https://paystack.com/blog/category/company-news">
                    Company News
                </a>
            </li>
        </ul>
    </div>
</nav>-->
<main class="page__content">
    <section class="home-section home-section--posts">
        <div class="container u-mobile-no-padder">
            <div class="post__list">
                
                @foreach ($blog as $b)

                    <div class="post__list-item">

                        <a class="post__list-item-image-wrap">

                            <div class="post__list-item-image">
                                <img class="lazyload"
                                    src="{{asset('storage/'.$b->img)}}"
                                    data-srcset="{{asset('storage/'.$b->img)}}"
                                    data-sizes="100vw" alt="Blog post feature Image">
                            </div>
                        </a>
                        <div class="post__list-item__crate">
                            <div class="post__category">
                                <span class="post__category"><a href="https://paystack.com/blog/category/product">Product
                                        Updates</a></span>

                                <span class="post__read-time"> · {{$b->created_at}}</span>
                            </div>
                        <a href="https://paystack.com/blog/product/pay-with-transfer" class="post__title">{{$b->title}}</a>
                            <div class="post__snippet">
                                {{$b->desc}}
                            </div>
                        </div>
                    </div>
                    
                @endforeach

                   



                <!--<div class="post__list-item">

                    <a class="post__list-item-image-wrap">

                        <div class="post__list-item-image">
                            <img class="lazyload"
                                src="https://s3-eu-west-1.amazonaws.com/pstk-blog-staging/images/articles/_400x210_crop_center-center_82_line/Blog-Post-Cover-1.jpg"
                                data-srcset="https://s3-eu-west-1.amazonaws.com/pstk-blog-staging/images/articles/_400x210_crop_center-center_82_line/Blog-Post-Cover-1.jpg 400w, https://s3-eu-west-1.amazonaws.com/pstk-blog-staging/images/articles/_800x420_crop_center-center_82_line/Blog-Post-Cover-1.jpg 800w, https://s3-eu-west-1.amazonaws.com/pstk-blog-staging/images/articles/_300x157_crop_center-center_82_line/Blog-Post-Cover-1.jpg 300w, https://s3-eu-west-1.amazonaws.com/pstk-blog-staging/images/articles/_600x315_crop_center-center_82_line/Blog-Post-Cover-1.jpg 600w, https://s3-eu-west-1.amazonaws.com/pstk-blog-staging/images/articles/_768x403_crop_center-center_82_line/Blog-Post-Cover-1.jpg 768w"
                                data-sizes="100vw" alt="Blog post feature Image">
                        </div>
                    </a>
                    <div class="post__list-item__crate">
                        <div class="post__category">
                            <span class="post__category"><a href="https://paystack.com/blog/category/product">Product
                                    Updates</a></span>

                            <span class="post__read-time"> · Jul 07, 2020</span>
                        </div>
                        <a href="https://paystack.com/blog/product/cli" class="post__title">Introducing the Paystack
                            CLI</a>
                        <div class="post__snippet">
                            Set up, test, and manage your Paystack integration directly from the terminal.
                        </div>
                    </div>
                </div>



                <div class="post__list-item">

                    <a class="post__list-item-image-wrap">

                        <div class="post__list-item-image">
                            <img class="lazyload"
                                src="https://s3-eu-west-1.amazonaws.com/pstk-blog-staging/images/articles/_400x210_crop_center-center_82_line/Blog_Post_Announcement_7-1.png"
                                data-srcset="https://s3-eu-west-1.amazonaws.com/pstk-blog-staging/images/articles/_400x210_crop_center-center_82_line/Blog_Post_Announcement_7-1.png 400w, https://s3-eu-west-1.amazonaws.com/pstk-blog-staging/images/articles/_800x420_crop_center-center_82_line/Blog_Post_Announcement_7-1.png 800w, https://s3-eu-west-1.amazonaws.com/pstk-blog-staging/images/articles/_300x157_crop_center-center_82_line/Blog_Post_Announcement_7-1.png 300w, https://s3-eu-west-1.amazonaws.com/pstk-blog-staging/images/articles/_600x315_crop_center-center_82_line/Blog_Post_Announcement_7-1.png 600w, https://s3-eu-west-1.amazonaws.com/pstk-blog-staging/images/articles/_768x403_crop_center-center_82_line/Blog_Post_Announcement_7-1.png 768w"
                                data-sizes="100vw" alt="Blog post feature Image">
                        </div>
                    </a>
                    <div class="post__list-item__crate">
                        <div class="post__category">
                            <span class="post__category"><a href="https://paystack.com/blog/category/product">Product
                                    Updates</a></span>

                            <span class="post__read-time"> · Jul 02, 2020</span>
                        </div>
                        <a href="https://paystack.com/blog/product/docs" class="post__title">Introducing the new
                            Paystack Developer Documentation</a>
                        <div class="post__snippet">
                            Say hello to new interactive walkthroughs, code snippets, faster search, guides, and lots
                            more!
                        </div>
                    </div>
                </div>



                <div class="post__list-item">

                    <a class="post__list-item-image-wrap">

                        <div class="post__list-item-image">
                            <img class="lazyload"
                                src="https://s3-eu-west-1.amazonaws.com/pstk-blog-staging/images/articles/_400x210_crop_center-center_82_line/BPA-CCMSG-2.jpg"
                                data-srcset="https://s3-eu-west-1.amazonaws.com/pstk-blog-staging/images/articles/_400x210_crop_center-center_82_line/BPA-CCMSG-2.jpg 400w, https://s3-eu-west-1.amazonaws.com/pstk-blog-staging/images/articles/_800x420_crop_center-center_82_line/BPA-CCMSG-2.jpg 800w, https://s3-eu-west-1.amazonaws.com/pstk-blog-staging/images/articles/_300x157_crop_center-center_82_line/BPA-CCMSG-2.jpg 300w, https://s3-eu-west-1.amazonaws.com/pstk-blog-staging/images/articles/_600x315_crop_center-center_82_line/BPA-CCMSG-2.jpg 600w, https://s3-eu-west-1.amazonaws.com/pstk-blog-staging/images/articles/_768x403_crop_center-center_82_line/BPA-CCMSG-2.jpg 768w"
                                data-sizes="100vw" alt="Blog post feature Image">
                        </div>
                    </a>
                    <div class="post__list-item__crate">
                        <div class="post__category">
                            <span class="post__category"><a href="https://paystack.com/blog/category/product">Product
                                    Updates</a></span>

                            <span class="post__read-time"> · Jun 26, 2020</span>
                        </div>
                        <a href="https://paystack.com/blog/product/craftcms" class="post__title">Introducing Direct
                            Paystack integration with Craft Commerce for Craft CMS</a>
                        <div class="post__snippet">
                            African creators can now build custom ecommerce experiences with Paystack and Craft CMS
                        </div>
                    </div>
                </div>



                <section class="home-section--subscribe">
                    <div class="container container--md">
                        <div class="subscribe-section subscribe-section--lg">
                            <div class="subscribe-section__cta">
                                <div class="subscribe-section__title">Get more stories like this</div>
                                <div class="subscribe-section__sub-title u-width-660">Enter your email to get original
                                    guides about running an online business in Nigeria.</div>
                                <div class="subscribe-section__form">
                                    <form data-form-location="storyList" method="post"
                                        class="form--inline form--centered form">
                                        <div class="form__group">
                                            <input type="email" placeholder="Email Address"
                                                aria-placeholder="Enter Email Address"
                                                class="form__input form__input--large">
                                        </div>
                                        <button class="button button--green button--large">
                                            <span class="loading-icon">
                                                <i class="ion ion-load-d"></i>
                                            </span>
                                            <span class="button__text">Subscribe</span>
                                        </button>
                                    </form>
                                </div>
                            </div>
                            <div class="subscribe-section__congrats">
                                <div class="subscribe-section__title"></div>
                                <div class="subscribe-section__sub-title">You&#039;re awesome ❤️</div>
                            </div>
                        </div>
                    </div>
                </section>


                <div class="post__list-item">

                    <a class="post__list-item-image-wrap">

                        <div class="post__list-item-image">
                            <img class="lazyload"
                                src="https://s3-eu-west-1.amazonaws.com/pstk-blog-staging/images/articles/_400x210_crop_center-center_82_line/BPA-WG-2.jpg"
                                data-srcset="https://s3-eu-west-1.amazonaws.com/pstk-blog-staging/images/articles/_400x210_crop_center-center_82_line/BPA-WG-2.jpg 400w, https://s3-eu-west-1.amazonaws.com/pstk-blog-staging/images/articles/_800x420_crop_center-center_82_line/BPA-WG-2.jpg 800w, https://s3-eu-west-1.amazonaws.com/pstk-blog-staging/images/articles/_300x157_crop_center-center_82_line/BPA-WG-2.jpg 300w, https://s3-eu-west-1.amazonaws.com/pstk-blog-staging/images/articles/_600x315_crop_center-center_82_line/BPA-WG-2.jpg 600w, https://s3-eu-west-1.amazonaws.com/pstk-blog-staging/images/articles/_768x403_crop_center-center_82_line/BPA-WG-2.jpg 768w"
                                data-sizes="100vw" alt="Blog post feature Image">
                        </div>
                    </a>
                    <div class="post__list-item__crate">
                        <div class="post__category">
                            <span class="post__category"><a href="https://paystack.com/blog/category/product">Product
                                    Updates</a></span>

                            <span class="post__read-time"> · Jun 25, 2020</span>
                        </div>
                        <a href="https://paystack.com/blog/product/wix" class="post__title">Introducing direct Paystack
                            integration with Wix</a>
                        <div class="post__snippet">
                            Sell more with one of the world&#039;s best platforms for building professional websites
                        </div>
                    </div>
                </div>



                <div class="post__list-item">

                    <a class="post__list-item-image-wrap">

                        <div class="post__list-item-image">
                            <img class="lazyload"
                                src="https://s3-eu-west-1.amazonaws.com/pstk-blog-staging/images/articles/_400x210_crop_center-center_82_line/Introducing_Paystack_Commerce.jpg"
                                data-srcset="https://s3-eu-west-1.amazonaws.com/pstk-blog-staging/images/articles/_400x210_crop_center-center_82_line/Introducing_Paystack_Commerce.jpg 400w, https://s3-eu-west-1.amazonaws.com/pstk-blog-staging/images/articles/_800x420_crop_center-center_82_line/Introducing_Paystack_Commerce.jpg 800w, https://s3-eu-west-1.amazonaws.com/pstk-blog-staging/images/articles/_300x157_crop_center-center_82_line/Introducing_Paystack_Commerce.jpg 300w, https://s3-eu-west-1.amazonaws.com/pstk-blog-staging/images/articles/_600x315_crop_center-center_82_line/Introducing_Paystack_Commerce.jpg 600w, https://s3-eu-west-1.amazonaws.com/pstk-blog-staging/images/articles/_768x403_crop_center-center_82_line/Introducing_Paystack_Commerce.jpg 768w"
                                data-sizes="100vw" alt="Blog post feature Image">
                        </div>
                    </a>
                    <div class="post__list-item__crate">
                        <div class="post__category">
                            <span class="post__category"><a href="https://paystack.com/blog/category/product">Product
                                    Updates</a></span>

                            <span class="post__read-time"> · Jun 23, 2020</span>
                        </div>
                        <a href="https://paystack.com/blog/product/commerce" class="post__title">Introducing Paystack
                            Commerce</a>
                        <div class="post__snippet">
                            Paystack Commerce is a toolkit that helps African creators bring ideas to market,
                            beautifully.
                        </div>
                    </div>
                </div>-->


            </div>

        </div>
    </section>
</main>

<nav class="pagination">
    <div class="container">
        <div class="u-width-660">

            {{$blog->links()}}

            <!--<span class="pagination__link-item pagination__link-item--current-page">1</span>

            <a class="pagination__link-item" href="https://paystack.com/blog/page/2">2</a>
            <a class="pagination__link-item" href="https://paystack.com/blog/page/3">3</a>

            <a class="pagination__link-item" rel="next" href="https://paystack.com/blog/page/2">Next</a>

            <a class="pagination__link-item" href="https://paystack.com/blog/page/12">Last</a>-->

        </div>
    </div>
</nav>
    
@endsection--}}