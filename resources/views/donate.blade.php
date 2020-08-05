@extends('layouts.front')
@section('content')

<section class="l-section l-section--hero l-section--blue" id="hero">
    <div class="c-section-pattern u-animate u-animate--play c-section-pattern--curved"></div>
    <div class="c-hero c-hero--central c-hero--demo">
    <div class="l-container l-container--lg">
        <div class="c-hero__body">
            
            <div class="c-hero__heading">
                <h1 class="u-animate u-animate__ease--custom-1 u-animate__delay--300 u-animate--glide-up">Paystack Checkout Demo</h2>
                <p class="u-text-summary u-animate u-animate__ease--custom-1 u-animate__delay--400 u-animate__duration--600 u-animate--glide-up">The easiest way to try Paystack is to make a live payment. Choose a small amount that you can afford to give away. <b>Please note</b> that this is a <b>real transaction,</b> and that your account will be <b>debited.</b></p>
            </div>
        </div>
        <div class="l-container l-container--sm">
            <div class="l-grid">
                <div class="l-grid__column l-grid__column--9 l-grid__column--centered">
                    <div class="c-form__wrap c-card c-card--article c-card--form c-card--demo c-card--demo-checkout">
                        <form id="js-demo-form" class="c-form c-form--block u-animate u-animate--fade-in" action="#">
                            <div class="l-grid l-grid--has-gutters">
                                <div class="l-grid__column l-grid__column--12 l-grid__column--no-flex">
                                    <label for="demoEmial" class="sr-only">Email</label>
                                    <div class="c-form__group">
                                        <label for="demoEmial" class="c-form__label u-text--weight-bolder">Enter email to get your receipt</label>
                                        <input id="js-demo-email" placeholder="mail@mail.com" type="email" name="email" value="" class="c-form__control--input c-form__input" required>
                                    </div>
                                </div>
                            </div>
                            <div class="l-grid l-grid--has-gutters">
                                <div class="l-grid__column l-grid__column--6 l-grid__column--space-s u-text--left">
                                    <button class="c-button c-button--primary c-button--lg c-button--full-width" onclick="pay(10000)">
                                        <span class="u-loader-icon">
                                            <svg version="1.1" id="loader-1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
    width="40px" height="40px" viewBox="0 0 40 40" enable-background="new 0 0 40 40" xml:space="preserve">
    <path opacity="0.2" fill="#000" d="M20.201,5.169c-8.254,0-14.946,6.692-14.946,14.946c0,8.255,6.692,14.946,14.946,14.946
    s14.946-6.691,14.946-14.946C35.146,11.861,28.455,5.169,20.201,5.169z M20.201,31.749c-6.425,0-11.634-5.208-11.634-11.634
    c0-6.425,5.209-11.634,11.634-11.634c6.425,0,11.633,5.209,11.633,11.634C31.834,26.541,26.626,31.749,20.201,31.749z" />
    <path fill="#000" d="M26.013,10.047l1.654-2.866c-2.198-1.272-4.743-2.012-7.466-2.012h0v3.312h0
    C22.32,8.481,24.301,9.057,26.013,10.047z">
    <animateTransform attributeType="xml" attributeName="transform" type="rotate" from="0 20 20" to="360 20 20" dur="0.5s" repeatCount="indefinite"/>
    </path>
</svg>
                                        </span>
                                        <span class="c-button__text">Pay
                                            <b>NGN 100</b>
                                        </span>
                                    </button>
                                </div>
                                <div class="l-grid__column l-grid__column--6 u-text--right">
                                    <button class="c-button c-button--primary c-button--lg c-button--full-width" onclick="pay(100000)">
                                        <span class="u-loader-icon">
                                            <svg version="1.1" id="loader-1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
    width="40px" height="40px" viewBox="0 0 40 40" enable-background="new 0 0 40 40" xml:space="preserve">
    <path opacity="0.2" fill="#000" d="M20.201,5.169c-8.254,0-14.946,6.692-14.946,14.946c0,8.255,6.692,14.946,14.946,14.946
    s14.946-6.691,14.946-14.946C35.146,11.861,28.455,5.169,20.201,5.169z M20.201,31.749c-6.425,0-11.634-5.208-11.634-11.634
    c0-6.425,5.209-11.634,11.634-11.634c6.425,0,11.633,5.209,11.633,11.634C31.834,26.541,26.626,31.749,20.201,31.749z" />
    <path fill="#000" d="M26.013,10.047l1.654-2.866c-2.198-1.272-4.743-2.012-7.466-2.012h0v3.312h0
    C22.32,8.481,24.301,9.057,26.013,10.047z">
    <animateTransform attributeType="xml" attributeName="transform" type="rotate" from="0 20 20" to="360 20 20" dur="0.5s" repeatCount="indefinite"/>
    </path>
</svg>
                                        </span>
                                        <span class="c-button__text">Pay
                                            <b>NGN 1000</b>
                                        </span>
                                    </button>
                                </div>
                            </div>
                            <script src="https://js.paystack.co/v2/inline.js"></script>
                        </form>
                        <div id="js-demo-success" class="u-animate u-animate--fade-in" style="display: none">
                            <h4>Payment Successful!</h4>
                            <div id="js-drip-registration-form" style="display: none;">
                                <p>Thanks for taking Paystack for a spin! Would you like to learn more about all the cool things Paystack can do?</p>
                                <button class="c-button c-button--primary c-button--full-width" id="js-drip-subscription-button" onclick="addToDrip()">
                                    <span class="c-button__text" id="js-drip-subscription-button-text">
                                        Yup! Send me more info via email
                                    </span>
                                </button>
                            </div>
                            <div id="js-no-drip-registration-form" style="display: none">
                                <p>Thanks for taking Paystack for a spin!</p>
                            </div>
                            <div class="c-card--demo__reset">
                                <a href="#" onclick="reset()">Make another payment</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
 
 

    
@endsection