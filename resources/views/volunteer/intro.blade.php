@extends('layouts.front')
@section('PageTitle','Volunteer')

@section('content')
<section class="l-section l-section--hero l-section-- l-section--blue" id="hero">
    <div class="c-section-pattern u-animate u-animate--play c-section-pattern--curved"></div>
    <div id="js-hero" class="c-hero c-hero--double-sided ">
        <div class="l-container l-container--lg u-flex">
            <div class="c-hero__side">
                <div class="c-hero__body">
                    <div class="c-hero__heading u-animate--slideUp">
                        <span
                            class="c-hero__label u-font--bold u-animate__ease--custom-1 u-animate__delay--200 u-animate__duration--500 u-animate--fade-in">Young World
                            For Climate Change Volunteers</span>
                        <h1 class="u-animate u-animate__delay--300 u-animate--glide-up">Make a difference</h2>
                            <p
                                class="u-text-summary u-animate u-animate__delay--300 u-animate__duration--600 u-animate--glide-up">
                                "We are a team comprised of generous, determined people, passionate about the world we live in."</p>
                    </div>
                    <div
                        class="c-hero__cta u-animate u-animate__ease--custom-1 u-animate__delay--400 u-animate__duration--1000 u-animate--fade-in">
                <a href="{{route('volunteer.sign')}}"
                            class="c-button--lg c-button c-button--primary" data-track data-track-section="Hero">
                            Sign up as volunteer
                        </a>
                        <!--<a href="contact/sales" class="c-button c-button--primary c-button--demo c-button--link"
                            data-track data-track-section="Hero">
                            <span class="c-button__text">
                                Or Contact Sales
                            </span>
                        </a>-->
                    </div>

                </div>
            </div>
            <div class="c-hero__side">
                <div class="c-hero__media"
                    style="background-image: url({{ asset('assets/img/home/18.jpg')}}); width:95%;" >
                </div>
            </div>
        </div>
        <!--<div id="js-hero-footer" class="c-hero__footer c-hero__footer-- u-animate--fade-in">
            <div class="l-container l-container--lg u-flex-center">
                <div class="c-hero__logos">
                    <p>Trusted by 40,000+ businesses</p>
                    <div class="c-logo ">
                        <img class="u-lazyload"
                            data-src="https://assets.paystack.com/assets/img/logos/merchants/Betway-Plain.svg"
                            alt="Betway logo">
                    </div>
                    <div class="c-logo ">
                        <img class="u-lazyload"
                            data-src="https://assets.paystack.com/assets/img/logos/merchants/carbon-dark.svg"
                            alt="Carbon logo">
                    </div>
                    <div class="c-logo ">
                        <img class="u-lazyload"
                            data-src="https://assets.paystack.com/assets/img/logos/merchants/Axa-mansard-_-Plain.svg"
                            alt="AXA Mansard logo">
                    </div>
                    <div class="c-logo u-hidden--mobile">
                        <img class="u-lazyload"
                            data-src="https://assets.paystack.com/assets/img/logos/merchants/Cowrywise-dark.svg"
                            alt="Cowrywise logo">
                    </div>
                </div>
            </div>
        </div>-->
    </div>


</section>



<section class="l-section l-section--pad-top l-section--pad-bottom l-section--white">

    <div class="c-section-pattern c-section-pattern--circular c-section-pattern--circular-right"></div>



    <div class="l-container l-container--lg">







        <div class="c-feature ">
            <div class="c-feature__left">
                <div class="c-feature__media">

                    <figure class="c-feature__image">
                        <div js-animate-in-view data-offset="40">
                            <img class="u-lazyload"
                        src="{{ asset('assets/img/home/19.jpg')}}"
                                alt="YW4CC Volunteer 1">
                        </div>
                    </figure>
                </div>
            </div>
            <div class="c-feature__right">

                <div class="c-feature__body">
                    <div class="c-feature__text">
                        <h3>Our delight is creating a much more greener and cleaner world</h3>
                        <p>We partner with youths within communities to effect environmental impact to our socities</p>
                    </div>

                    <!--<div class="c-feature__benefits u-flex">
                        <ul class="u-list u-list--green u-flex-child">
                            <li>Card</li>
                            <li>Bank Account</li>
                            <li>Bank Transfer</li>
                            <li>USSD</li>
                        </ul>
                        <ul class="u-list u-list--green u-flex-child">
                            <li>Visa QR</li>
                            <li>Mobile Money</li>
                            <li>POS (Coming soon)</li>
                        </ul>
                    </div>-->

                </div>


            </div>
        </div>









        <div class="c-feature c-feature--reversed">
            <div class="c-feature__left">
                <div class="c-feature__media">

                    <figure class="c-feature__image">
                        <div js-animate-in-view data-offset="40">
                            <img class="u-lazyload"
                                data-src="{{asset('assets/img/home/21.jpg')}}"
                                data-sizes="100vw"
                        data-srcset="{{asset('assets/img/home/21.jpg')}}"
                                alt="Smile">
                        </div>
                    </figure>
                </div>
            </div>
            <div class="c-feature__right">

                <div class="c-feature__body">
                    <div class="c-feature__text">
                        <h3>A greener world, our satisfaction</h3>
                        <p>We get our satisfaction when we see individuals and communities enjoy the serenity that comes with a cleaner and greener environment. The smiles from faces is what drives us.</p>
                    </div>

                    <!--<div class="c-feature__cta">
                        <a href="/success-rates" class="c-button c-button--primary c-button--link">
                            <span class="c-button__icon">
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <rect width="16" height="16" fill="#3BB75E" fill-opacity="0"
                                        transform="translate(2 2)" />
                                    <circle cx="10" cy="10" r="8.72781" fill="#3BB75E" fill-opacity="0" stroke="#3BB75E"
                                        stroke-width="1.45563" />
                                    <path d="M9 6.37524L12.5355 9.91078L9 13.4463" stroke="#3BB75E" stroke-width="1.4"
                                        stroke-linecap="round" stroke-linejoin="round" /></svg>
                            </span>
                            <span class="c-button__text">
                                Find out how we achieve high success rates
                            </span>
                        </a>
                    </div>-->
                </div>


            </div>
        </div>









        <div class="c-feature ">
            <div class="c-feature__left">
                <div class="c-feature__media">

                    <figure class="c-feature__image">
                        <div js-animate-in-view data-offset="40">
                            <img class="u-lazyload"
                                data-src="{{asset('assets/img/home/22.jpg')}}"
                                data-sizes="100vw"
                        data-srcset="{{asset('assets/img/home/22.jpg')}}"
                                alt="Partner">
                        </div>
                    </figure>
                </div>
            </div>
            <div class="c-feature__right">

                <div class="c-feature__body">
                    <div class="c-feature__text">
                        <h3>Partner with Us</h3>
                        <p>We will be pleased to welcome you on board. Partner with us and lets make climate change a story of the past.</p>
                    </div>

                    <!--<div class="c-feature__benefits u-flex">
                        <ul class="u-list u-list--green ">
                            <li>Verify identity with a bank account number</li>
                            <li>Verify identity with a phone number</li>
                            <li>Verify identity with a Bank Verification Number (a unique identifier that everyone with
                                a Nigerian bank account must have)</li>
                        </ul>
                    </div>-->

                </div>


            </div>
        </div>









        <!--<div class="c-feature c-feature--reversed">
            <div class="c-feature__left">
                <div class="c-feature__media">

                    <div class="c-feature__video">
                        <video muted loop js-play>
                            <source class="u-lazyload"
                                src="https://assets.paystack.com/assets/video/content/Advanced-Fraud-Protection.mp4"
                                type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    </div>
                </div>
            </div>
            <div class="c-feature__right">

                <div class="c-feature__body">
                    <div class="c-feature__text">
                        <h3>Protect yourself and your customers with advanced fraud detection</h3>
                        <p>Paystack’s combination of automated and manual fraud systems protect you from fraudulent
                            transactions and associated chargeback claims.</p>
                    </div>

                    <div class="c-feature__benefits u-flex">
                        <ul class="u-list u-list--green ">
                            <li>PCI-DSS-certified systems</li>
                            <li>Automated fraud monitoring</li>
                            <li>When a fraud attempt is discovered with any Paystack merchant, ALL Paystack merchants
                                become protected from further attempts</li>
                        </ul>
                    </div>

                </div>


            </div>
        </div>-->


    </div>
</section>


<!--<section class="l-section l-section--pad-top l-section--pad-bottom l-section--blue">

    <div class="c-section-pattern "></div>



    <div class="l-container l-container--lg">


        <div class="c-section-header c-section-header--left c-section-header--spaced-bottom">
            <div class="c-section-header__body">
                <h2>Customer Testimonials</h2>
                <p class="u-text-summary">Over 40,000 businesses trust Paystack to power payments. Here's what some of
                    them have to say.</p>

            </div>
        </div>



        <div class="u-flex c-testimonial-block">
            <div class="u-flex-child">
                <div class="c-card c-testimonial">
                    <div class="c-card__header">
                        <div class="c-testimonial__company">
                            <div class="c-logo">
                                <img class="u-lazyload"
                                    data-src="https://assets.paystack.com/assets/img/logos/merchants/_200x76_crop_center-center_line/rsz_nairabet.jpg"
                                    data-sizes="100vw"
                                    data-srcset="https://assets.paystack.com/assets/img/logos/merchants/_200x76_crop_center-center_line/rsz_nairabet.jpg 200w"
                                    alt="Nairabet">

                            </div>
                        </div>
                    </div>
                    <div class="c-card__body">
                        <p class="c-testimonial__text">
                            We added Paystack as one of our payment options without announcing to our customers, and
                            within a month it shot up to the number one most used option.
                        </p>
                        <div class="c-testimonial__author">

                            <div class="c-testimonial__author-image c-testimonial__author-image--sm">
                                <img class="u-lazyload"
                                    data-src="https://assets.paystack.com/ assets/img/testimonial-authors/_72x65_crop_center-center_line/rsz_1aalabi.jpg"
                                    data-srcset="https://assets.paystack.com/ assets/img/testimonial-authors/_72x65_crop_center-center_line/rsz_1aalabi.jpg 72w"
                                    alt="Akin Alabi">
                            </div>
                            <div class="c-testimonial__author-info">
                                <div class="c-testimonial__author-name">Akin Alabi</div>
                                <div class="c-testimonial__author-role"><span>CEO</span><span>, Nairabet</span></div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
            <div class="u-flex-child">
                <div class="c-card c-testimonial">
                    <div class="c-card__header">
                        <div class="c-testimonial__company">
                            <div class="c-logo">
                                <img class="u-lazyload"
                                    data-src="https://assets.paystack.com/assets/img/logos/merchants/_281x121_crop_center-center_line/rsz_104d82e04-c847-40e9-9c3b-69bb27e0b66c_3-compressor.jpg"
                                    data-sizes="100vw"
                                    data-srcset="https://assets.paystack.com/assets/img/logos/merchants/_281x121_crop_center-center_line/rsz_104d82e04-c847-40e9-9c3b-69bb27e0b66c_3-compressor.jpg 281w"
                                    alt="Sportsbookcloud">

                            </div>
                        </div>
                    </div>
                    <div class="c-card__body">
                        <p class="c-testimonial__text">
                            Reliable payment logistics are key to our industry and Paystack has played a major role in
                            our expansion across Nigeria.
                        </p>
                        <div class="c-testimonial__author">

                            <div class="c-testimonial__author-image c-testimonial__author-image--sm">
                                <img class="u-lazyload"
                                    data-src="https://assets.paystack.com/ assets/img/testimonial-authors/_125x89_crop_center-center_line/rsz_15f61b49-7a23-47fe-bd23-33895f9ff705_2-compressor.jpg"
                                    data-srcset="https://assets.paystack.com/ assets/img/testimonial-authors/_125x89_crop_center-center_line/rsz_15f61b49-7a23-47fe-bd23-33895f9ff705_2-compressor.jpg 125w"
                                    alt="Daniel Grüderich">
                            </div>
                            <div class="c-testimonial__author-info">
                                <div class="c-testimonial__author-name">Daniel Grüderich</div>
                                <div class="c-testimonial__author-role"><span>CEO</span><span>, Sportsbookcloud</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
            <div class="u-flex-child">
                <div class="c-card c-testimonial">
                    <div class="c-card__header">
                        <div class="c-testimonial__company">
                            <div class="c-logo">
                                <img class="u-lazyload"
                                    data-src="https://assets.paystack.com/assets/img/logos/merchants/_234x68_crop_center-center_line/rsz_fortune2.jpg"
                                    data-sizes="100vw"
                                    data-srcset="https://assets.paystack.com/assets/img/logos/merchants/_234x68_crop_center-center_line/rsz_fortune2.jpg 234w"
                                    alt="Fortunebets">

                            </div>
                        </div>
                    </div>
                    <div class="c-card__body">
                        <p class="c-testimonial__text">
                            Simple and easy to use, yet very secure - it’s everything our customers want!
                        </p>
                        <div class="c-testimonial__author">

                            <div class="c-testimonial__author-image c-testimonial__author-image--sm">
                                <img class="u-lazyload"
                                    data-src="https://assets.paystack.com/ assets/img/testimonial-authors/_119x128_crop_center-center_line/rsz_imag0231.jpg"
                                    data-srcset="https://assets.paystack.com/ assets/img/testimonial-authors/_119x128_crop_center-center_line/rsz_imag0231.jpg 119w"
                                    alt="Ifeanyi Osode">
                            </div>
                            <div class="c-testimonial__author-info">
                                <div class="c-testimonial__author-name">Ifeanyi Osode</div>
                                <div class="c-testimonial__author-role"><span>Chief Operating Officer</span><span>,
                                        Fortunebets</span></div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>


    </div>
</section>-->


<!--<section class="l-section l-section--pad-top l-section--pad-bottom l-section--white">

    <div class="c-section-pattern "></div>



    <div class="l-container l-container--lg">







        <div class="c-feature ">
            <div class="c-feature__left">
                <div class="c-feature__media">

                    <figure class="c-feature__image">
                        <div js-animate-in-view data-offset="40">
                            <img class="u-lazyload"
                                data-src="https://assets.paystack.com/assets/img/content/_400x266_crop_center-center_82_line/Farmcrowdy_Paystack.jpg"
                                data-sizes="100vw"
                                data-srcset="https://assets.paystack.com/assets/img/content/_400x266_crop_center-center_82_line/Farmcrowdy_Paystack.jpg 400w, https://assets.paystack.com/assets/img/content/_800x533_crop_center-center_82_line/Farmcrowdy_Paystack.jpg 800w, https://assets.paystack.com/assets/img/content/_300x200_crop_center-center_60_line/Farmcrowdy_Paystack.jpg 300w, https://assets.paystack.com/assets/img/content/_600x400_crop_center-center_60_line/Farmcrowdy_Paystack.jpg 600w, https://assets.paystack.com/assets/img/content/_768x512_crop_center-center_60_line/Farmcrowdy_Paystack.jpg 768w, https://assets.paystack.com/assets/img/content/_1536x1024_crop_center-center_60_line/Farmcrowdy_Paystack.jpg 1536w"
                                alt="Farmcrowdy Paystack">
                            <figcaption>Farmcrowdy uses Paystack to send fast, instant transfers to investors
                            </figcaption>
                        </div>
                    </figure>
                </div>
            </div>
            <div class="c-feature__right">

                <div class="c-feature__body">
                    <div class="c-feature__text">
                        <h3>Send fast money transfers to customers</h3>
                        <p>Paystack's powerful Transfers features make it easy to disburse money to any bank account.
                            Whether via the API or manually via the Paystack dashboard, your customers will receive
                            their money quickly and securely.</p>
                    </div>

                    <div class="c-feature__benefits u-flex">
                        <ul class="u-list u-list--green ">
                            <li>Single and Bulk Transfers</li>
                            <li>Smart alerts to prevent you from transferring to the wrong bank account, or sending
                                duplicate transfers</li>
                            <li>Have one colleague start a transfer, and another colleague approve (coming soon) </li>
                        </ul>
                    </div>

                </div>


            </div>
        </div>









        <div class="c-feature c-feature--reversed">
            <div class="c-feature__left">
                <div class="c-feature__media">

                    <figure class="c-feature__image">
                        <div js-animate-in-view data-offset="40">
                            <img class="u-lazyload"
                                data-src="https://assets.paystack.com/assets/img/content/_400x266_crop_center-center_82_line/slash-costs-compressor.jpg"
                                data-sizes="100vw"
                                data-srcset="https://assets.paystack.com/assets/img/content/_400x266_crop_center-center_82_line/slash-costs-compressor.jpg 400w, https://assets.paystack.com/assets/img/content/_800x533_crop_center-center_82_line/slash-costs-compressor.jpg 800w, https://assets.paystack.com/assets/img/content/_300x200_crop_center-center_60_line/slash-costs-compressor.jpg 300w, https://assets.paystack.com/assets/img/content/_600x400_crop_center-center_60_line/slash-costs-compressor.jpg 600w, https://assets.paystack.com/assets/img/content/_768x512_crop_center-center_60_line/slash-costs-compressor.jpg 768w"
                                alt="Slash Costs Compressor">
                        </div>
                    </figure>
                </div>
            </div>
            <div class="c-feature__right">

                <div class="c-feature__body">
                    <div class="c-feature__text">
                        <h3>Slash revenue loss to chargebacks and refunds</h3>
                        <p>The traditional chargeback process can be slow and expensive. Paystack is the only payment
                            gateway that lets you manage chargebacks efficiently from your Dashboard.</p>
                    </div>

                    <div class="c-feature__benefits u-flex">
                        <ul class="u-list u-list--green ">
                            <li>Chargebacks automatically reflect on the Paystack Dashboard</li>
                            <li>Reject chargebacks and upload supporting evidence quickly</li>
                            <li>Issue partial or full refunds right from your Paystack Dashboard</li>
                            <li>Your Dashboard maintains an exportable record of transaction disputes and refunds</li>
                        </ul>
                    </div>

                </div>


            </div>
        </div>









        <div class="c-feature ">
            <div class="c-feature__left">
                <div class="c-feature__media">

                    <div class="c-feature__video">
                        <video muted loop js-play>
                            <source class="u-lazyload"
                                src="https://assets.paystack.com/assets/video/content/Get-your-money-in-your-account-within-24-hours.mp4"
                                type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    </div>
                </div>
            </div>
            <div class="c-feature__right">

                <div class="c-feature__body">
                    <div class="c-feature__text">
                        <h3>Get settled within 24 hours</h3>
                        <p>Receive payments automatically in your corporate bank account within 24 hours.</p>
                    </div>

                    <div class="c-feature__benefits u-flex">
                        <ul class="u-list u-list--green ">
                            <li>We settle all merchants before 10 AM, every morning</li>
                            <li>Split payments into different bank accounts</li>
                        </ul>
                    </div>

                </div>


            </div>
        </div>









        <div class="c-feature c-feature--reversed">
            <div class="c-feature__left">
                <div class="c-feature__media">

                    <figure class="c-feature__image">
                        <div js-animate-in-view data-offset="40">
                            <img class="u-lazyload"
                                data-src="https://assets.paystack.com/assets/img/content/_400x445_crop_center-center_82_line/Insights-compressed.jpg"
                                data-sizes="100vw"
                                data-srcset="https://assets.paystack.com/assets/img/content/_400x445_crop_center-center_82_line/Insights-compressed.jpg 400w, https://assets.paystack.com/assets/img/content/_800x891_crop_center-center_82_line/Insights-compressed.jpg 800w, https://assets.paystack.com/assets/img/content/_300x334_crop_center-center_60_line/Insights-compressed.jpg 300w, https://assets.paystack.com/assets/img/content/_600x668_crop_center-center_60_line/Insights-compressed.jpg 600w, https://assets.paystack.com/assets/img/content/_768x855_crop_center-center_60_line/Insights-compressed.jpg 768w"
                                alt="Insights">
                        </div>
                    </figure>
                </div>
            </div>
            <div class="c-feature__right">

                <div class="c-feature__body">
                    <div class="c-feature__text">
                        <h3>Understand exactly how your business is performing</h3>
                        <p>Paystack provides detailed reporting, alerts, and exports, so you and your team are always on
                            top of business.</p>
                    </div>

                    <div class="c-feature__benefits u-flex">
                        <ul class="u-list u-list--green ">
                            <li>Super easy reconciliation</li>
                            <li>Detailed reports on successful, abandoned, and failed transactions</li>
                            <li>Granular user permissions lets you control the info each member of your team has access
                                to</li>
                            <li>Automated chargeback alerts </li>
                            <li>Searchable Customer Directory</li>
                            <li>Analyze customer purchase patterns with Customer Insights</li>
                        </ul>
                    </div>

                </div>


            </div>
        </div>









        <div class="c-feature ">
            <div class="c-feature__left">
                <div class="c-feature__media">

                    <figure class="c-feature__image">
                        <div js-animate-in-view data-offset="40">
                            <img class="u-lazyload"
                                data-src="https://assets.paystack.com/assets/img/content/_400x262_crop_center-center_82_line/Customer-Success-at-Work-compressed.jpg"
                                data-sizes="100vw"
                                data-srcset="https://assets.paystack.com/assets/img/content/_400x262_crop_center-center_82_line/Customer-Success-at-Work-compressed.jpg 400w, https://assets.paystack.com/assets/img/content/_800x525_crop_center-center_82_line/Customer-Success-at-Work-compressed.jpg 800w, https://assets.paystack.com/assets/img/content/_300x197_crop_center-center_60_line/Customer-Success-at-Work-compressed.jpg 300w, https://assets.paystack.com/assets/img/content/_600x394_crop_center-center_60_line/Customer-Success-at-Work-compressed.jpg 600w, https://assets.paystack.com/assets/img/content/_768x504_crop_center-center_60_line/Customer-Success-at-Work-compressed.jpg 768w, https://assets.paystack.com/assets/img/content/_1536x1009_crop_center-center_60_line/Customer-Success-at-Work-compressed.jpg 1536w"
                                alt="Customer Success At Work Compressed">
                        </div>
                    </figure>
                </div>
            </div>
            <div class="c-feature__right">

                <div class="c-feature__body">
                    <div class="c-feature__text">
                        <h3>World-class support from a dedicated Relationship Manager</h3>
                        <p>Large volume merchants receive a dedicated Relationship Manager able to support in a vast
                            range of ways. Your Relationship Manager will:</p>
                    </div>

                    <div class="c-feature__benefits u-flex">
                        <ul class="u-list u-list--green ">
                            <li>Monitor transactions to ensure minimal downtime</li>
                            <li>Share insight and seek input into the Paystack Product Roadmap</li>
                            <li>Ensure prompt resolution of issues well within SLA</li>
                            <li>Provide strategic guidance concerning industry trends</li>
                        </ul>
                    </div>

                </div>


            </div>
        </div>


    </div>
</section>-->


<!--<section class="l-section l-section--pad-top l-section--pad-bottom l-section--offwhite">

    <div class="c-section-pattern "></div>



    <div class="l-container l-container--lg">


        <div class="c-in-the-news">
            <div js-animate-in-view data-animation="card-glide" class="c-press-card">
                <div class="c-press-card__body">
                    <div class="c-logo">
                        <img class="u-lazyload"
                            data-src="https://assets.paystack.com/assets/img/press/logo/reuters-logo-edge.png"
                            alt="Reuters Logo">
                    </div>
                    <p class="u-text-summary">[Nairabet] added Paystack as one of [their] payment options without any
                        fanfare, without announcing to [their] customers, and within a month it shot up to the number
                        one most used payment option on the website.</p>
                </div>
                <div class="c-press-card__footer">
                    <div class="c-press-card__cta c-press-card__cta--centered ">
                        <a href="https://www.reuters.com/article/us-soccer-worldcup-nigeria-gambling/online-betting-firms-gamble-on-soccer-mad-nigeria-idUSKBN1JL18Z"
                            target="_blank" class="c-button c-button--secondary c-button--link">
                            <span class="c-button__icon"><svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <rect width="16" height="16" fill="#3BB75E" fill-opacity="0"
                                        transform="translate(2 2)" />
                                    <circle cx="10" cy="10" r="8.72781" fill="#3BB75E" fill-opacity="0" stroke="#3BB75E"
                                        stroke-width="1.45563" />
                                    <path d="M9 6.37524L12.5355 9.91078L9 13.4463" stroke="#3BB75E" stroke-width="1.4"
                                        stroke-linecap="round" stroke-linejoin="round" /></svg></span>
                            <span class="c-button__text">Online betting firms gamble on soccer-mad Nigeria</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>


    </div>
</section>-->
    
@endsection