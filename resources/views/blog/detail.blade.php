<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <meta name="description"
        content="We are a conservation organization that works through partnering and collaborating with youths to innovate and implement creative solutions against climate change and environmental degradation.">
    <meta name="robots" content="all">
    <meta name="keywords" content="climate change, environment, climate action, environmental degradation, youths,waste management, conservation, preservation, volunteer, waste, disposal">
    <meta content="en_US">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/favicon/1.png')}}" />
    <title>Post | YW4CA</title>

    <link rel="stylesheet" href="{{ asset('assets/css/global.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/main.min.css')}}">
    <script src="{{ asset('assets/js/global.min.js')}}"></script>
</head>

<body>

    <nav class="nav-wrap" id="nav">
        <div class="nav">
            <div class="nav__left">
            <a href="{{route('home')}}">
                <img src="{{asset('assets/img/logo/7.png')}}" alt="YW4CA Blog" style="height: 40%; width: 40%;">
                        
                </a>
            </div>
            <div class="nav__right">
                <a class="button button--green" href="{{route('volunteer.main')}}">
                    <span class="button__text">Register as <span class="u-no-mobile">YW4CC </span>Volunteer</span>
                </a>
            </div>
        </div>
    </nav>



<article class="post">
    <div class="container">
        <div class="post__header">
            <div class="post__category">
                <!--<span class="post__category"><a href="https://paystack.com/blog/category/product">Product
                        Updates</a></span>-->

                <span class="post__read-time">·
                {{$blogDetail->created_at}}</span>
            </div>
        <h1 class="post__title">{{$blogDetail->title}}</h1>
        <p class="post__sub-title">{{$blogDetail->desc}}</p>
        </div>


        <figure class="post__image-wrap">
            <div class="post__image--feature">
                <div class="post__image">
                    <img class="lazyload"
                data-original="{{asset('storage/'.$blogDetail->img)}}"
                        data-action="zoom"
                        data-src="{{asset('storage/'.$blogDetail->img)}}"
                alt="{{$blogDetail->title}}">
                </div>
            </div>
        </figure>

        <main class="grid grid--with-gutters">
            <!--<aside class="grid__column grid__column--3" style="text-align: center">
                <div class="post__meta--bio">
                    <div class="post__author">
                        <div class="author__image">
                            <img src="https://s3-eu-west-1.amazonaws.com/pstk-blog-staging/images/authors/Lukman-Bello-Avi.jpg"
                                width="70px" height="70px" alt="Author's avatar" class="author__avatar lazyload">
                        </div>
                        <div class="author__info">
                            <div class="author__name">Lukman Bello</div>
                            <div class="author__role">Technical Product Specialist,
                                Paystack</div>
                        </div>
                    </div>
                </div>

                <nav class="post__nav">
                    <p>On this page</p>
                    <ul>
                        <template>
                            <li>
                                <a href="#section-number">Section title</a>
                            </li>
                        </template>
                    </ul>
                </nav>
            </aside>-->

            <div class="post__body grid__column grid__column--offset-1 grid__column--8">
                <!--<p>As a developer, your most powerful tools - such as basic bash commands, version control and
                    deployment tools - sit on your terminal. This is why we’re excited to announce the
                    <strong>Paystack CLI</strong> to make it easier to set up, test, and manage your Paystack
                    integrations right from your terminal.</p>-->
                <p>{!! Michelf\Markdown::defaultTransform($blogDetail->content) !!}</p>

                
                <figure class="post__image-wrap">
                    <div class="post__image--feature">
                        <div class="post__image">
                            <img class="lazyload"
                        data-original="{{asset('storage/'.$blogDetail->alt_img)}}"
                                data-action="zoom"
                                data-src="{{asset('storage/'.$blogDetail->alt_img)}}"
                        alt="{{$blogDetail->title}}">
                        </div>
                    </div>
                </figure>

               
                <!--<div class="shareable-takeaway-wrap shareable-takeaway-wrap--blue">
                    <div class="shareable-takeaway">
                        <div class="shareable-takeaway__header">
                            <div class="shareable-takeaway__title">Shareable Takeaway</div>
                        </div>
                        <div class="shareable-takeaway__text">Check out the Paystack CLI, which lets you set up,
                            test and manage your Paystack integrations right from your terminal.</div>
                        <div class="shareable-takeaway__footer">
                            <a href="whatsapp://send?text=Check%20this%20out:%0A&ldquo;Check out the Paystack CLI, which lets you set up, test and manage your Paystack integrations right from your terminal.&rdquo;%20via%20The%20Paystack%20Blog%20https://paystack.com/blog/product/cli"
                                data-action="share/whatsapp/share"
                                class="button button--has-icon button--large button--whatsapp">
                                <i class="whatsapp-icon"></i>
                                Share on WhatsApp
                            </a>
                            <a href="https://www.facebook.com/sharer.php?u=https://paystack.com/blog/product/cli"
                                target="_blank" class="button button--has-icon button--large button--facebook">
                                <i class="facebook-icon"></i>
                                Share on Facebook
                            </a>
                            <a class="button button--has-icon button--large button--twitter" target="_blank"
                                href="https://twitter.com/intent/tweet?text=Check out the Paystack CLI, which lets you set up, test and manage your Paystack integrations right from your terminal.%20via%20@paystack%20https://paystack.com/blog/product/cli"
                                class="button button--has-icon button--large button--twitter">
                                <i class="twitter-icon"></i>
                                Share on Twitter
                            </a>
                        </div>
                    </div>
                </div>-->

                {{--<h2>Managing Webhooks</h2>
                <p>Whenever actions are carried out on your Paystack account, we trigger events which your
                    application can listen and respond to. Before now, to implement webhook routes like these, you
                    had to:</p>
                <ol>
                    <li>Deploy your code to a publicly available URL</li>
                    <li>Login to your Paystack Dashboard and set the webhook URL</li>
                    <li>Make a test payment</li>
                    <li>Review logs</li>
                </ol>
                <p>With the Paystack CLI, all these steps are reduced to running a single command:</p>
                <pre>$ webhook listen localhost:8080/webhook<br /></pre>
                <p>The CLI tunnels your test events to your local server running on port 8080, making it possible
                    for you to run end-to-end tests on your Paystack integration while in development mode. You can
                    also run health checks on your webhook URL by sending different sample event objects to your
                    server. Simply run:</p>
                <pre>$ webhook ping --event transfer.success --domain test</pre>
                <p>This sends a sample <code>transfer.success</code> event to your test webhook URL and returns the
                    response.</p>
                <h2>Using the API</h2>
                <p>All Paystack endpoints are accessible via the Paystack CLI. To test the API, all request
                    parameters should be passed as flags as shown below.</p>
                <h3>Initializing a transaction</h3>
                <p><strong>To initialize a transaction, run:</strong></p>
                <pre>$ transaction initialize --amount 1000 --email <a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="a6c5d3d5d2c9cbc3d4e6c3cbc7cfca88c5c9cb">[email&#160;protected]</a></pre>
                <p><strong>Output</strong></p>
                <figure class="post__image-wrap">
                    <div class="post__image post__image--md">
                        <img class="lazyload"
                            src="https://s3-eu-west-1.amazonaws.com/pstk-blog-staging/images/articles/Untitled-27.jpg"
                            data-action="zoom"
                            data-original="https://s3-eu-west-1.amazonaws.com/pstk-blog-staging/images/articles/Untitled-27.jpg"
                            alt="CLI - initialising">
                    </div>
                    <figcaption class="image-caption image-caption--centered">

                    </figcaption>
                </figure>

                <h2>Verifying a transaction</h2>
                <p><strong>To verify a transaction, run:</strong></p>
                <pre><code>$ transaction verify --reference T394541625653843 --domain live</code></pre>
                <p><strong>Output</strong></p>
                <figure class="post__image-wrap">
                    <div class="post__image post__image--md">
                        <img class="lazyload"
                            src="https://s3-eu-west-1.amazonaws.com/pstk-blog-staging/images/articles/Untitled-28.jpg"
                            data-action="zoom"
                            data-original="https://s3-eu-west-1.amazonaws.com/pstk-blog-staging/images/articles/Untitled-28.jpg"
                            alt="CLI - verify">
                    </div>
                    <figcaption class="image-caption image-caption--centered">

                    </figcaption>
                </figure>

                <h2>Got Questions?</h2>
                <p>The Paystack CLI is easy to use and built to help you save time and be more productive while
                    integrating to Paystack. To see more of what you can do from your CLI, run:
                    <code>paystack --help</code></p>
                <figure class="post__image-wrap">
                    <div class="post__image post__image--md">
                        <img class="lazyload"
                            src="https://s3-eu-west-1.amazonaws.com/pstk-blog-staging/images/articles/Screenshot_2020-05-14_at_13.11.25.jpg"
                            data-action="zoom"
                            data-original="https://s3-eu-west-1.amazonaws.com/pstk-blog-staging/images/articles/Screenshot_2020-05-14_at_13.11.25.jpg"
                            alt="CLI -  help">
                    </div>
                    <figcaption class="image-caption image-caption--centered">

                    </figcaption>
                </figure>--}}

                <p>If you have any suggestion or question at all, don't hesitate to <a
                href="{{route('contact')}}" target="_blank" rel="noreferrer noopener">reach
                        out to us here</a>. We're happy to help!</p>
            </div>
        </main>
    </div>
</article>   







    <footer class="footer">
        <div class="footer__top">
            <div class="container">
                <div class="footer__left">
                    <!--                 <div class="footer__primary-title">Start accepting payments online</div> -->
                    <div class="footer__secondary-title">We are a conservation organization that works through partnering and collaborating with youths to innovate and implement creative solutions against climate change and environmental degradation.</div>
                </div>
                <div class="footer__right footer__left--xs">
                    <a target="_blank" rel="noopener" href="{{route('register')}}"
                        class="button button--green button--large">Create your free YW4CA account</a>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="footer__bottom">
                <div class="footer__left">
                    &copy; Young World for Climate Action 2020
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
    </footer>



    <script>
        lazyload()
    </script>
    <script type="application/ld+json">
        {"@context":"http://schema.org","@graph":[{"@type":"Blog","author":{"@id":"http://paystack.com#identity"},"copyrightHolder":{"@id":"http://paystack.com#identity"},"copyrightYear":"2017","creator":{"@id":"http://paystack.com#creator"},"dateModified":"2020-03-11T17:45:15+01:00","datePublished":"2017-12-12T19:52:07+01:00","description":"Learn how to run an online business in Nigeria from founders on the front line. Original lessons, data, and guides you won’t find anywhere else.","headline":"The Paystack Blog","image":{"@type":"ImageObject","url":"https://s3-eu-west-1.amazonaws.com/pstk-blog-staging/images/articles/_1200x630_crop_center-center_82_none/The-Paystack-Blog.png?mtime=1520797522"},"inLanguage":"en-us","mainEntityOfPage":"https://paystack.com/blog/","name":"The Paystack Blog","publisher":{"@id":"http://paystack.com#creator"},"url":"https://paystack.com/blog/"},{"@id":"http://paystack.com#identity","@type":"LocalBusiness","address":{"@type":"PostalAddress","addressCountry":"Nigeria","addressLocality":"Ikeja","addressRegion":"Lagos","streetAddress":"126 Joel Ogunnaike"},"email":"hello@paystack.com","founder":"Shola Akinlade","foundingLocation":"Lagos, Nigeria","image":{"@type":"ImageObject","height":"2245","url":"https://s3-eu-west-1.amazonaws.com/pstk-blog-staging/images/articles/Paystack-mark.png","width":"2286"},"logo":{"@type":"ImageObject","height":"60","url":"https://s3-eu-west-1.amazonaws.com/pstk-blog-staging/images/articles/_600x60_fit_center-center_82_none/Paystack-mark.png?mtime=1520797301","width":"61"},"name":"Paystack","priceRange":"$","url":"http://paystack.com"},{"@id":"#creator","@type":"LocalBusiness","name":"Paystack","priceRange":"$"},{"@type":"BreadcrumbList","description":"Breadcrumbs list","itemListElement":[{"@type":"ListItem","item":"https://172.31.65.134/blog/","name":"The Paystack Blog","position":1}],"name":"Breadcrumbs"}]}
    </script>

</body>

</html>