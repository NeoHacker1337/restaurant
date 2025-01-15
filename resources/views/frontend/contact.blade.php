@extends('frontend.layouts.master')
@section('content')
    <section class="page-title relative mt-122 hidden">
        <div class="container w_1890">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-title-inner style2 hidden">
                        <div class="bg-page-title-inner">
                            <img class="parallax"
                                src="{{ asset('public/frontend/assets/images/backgroup/page-title_2.jpg') }}"
                                alt="" />
                        </div>
                        <img class="icon_1 wow fadeInLeft" data-wow-delay=".2s"
                            src="{{ asset('public/frontend/assets/images/backgroup/icon_page-title.png') }}"
                            alt="" />
                        <img class="icon_2 wow fadeInRight" data-wow-delay=".2s"
                            src="{{ asset('public/frontend/assets/images/backgroup/icon_2_page-title.png') }}"
                            alt="" />
                        <div class="overlay"></div>
                        <div class="breadcrumb flex flex-column items-center wow fadeIn" data-wow-delay=".2s">
                            <h1 class="title center">Contact Us</h1>
                            <ul>
                                <li><a href="{{ url('/') }}">Home</a></li>
                                <li>
                                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" width="512" height="512" x="0" y="0"
                                        viewBox="0 0 24 24" style="enable-background: new 0 0 512 512" xml:space="preserve">
                                        <g>
                                            <path fill="#0c0c0c" fill-rule="evenodd"
                                                d="M12.346 7.507a.75.75 0 0 1 1.059-.072l4.588 4a.75.75 0 0 1 0 1.13l-4.588 4a.75.75 0 1 1-.986-1.13l3.08-2.685H6.5a.75.75 0 0 1 0-1.5h8.998l-3.08-2.685a.75.75 0 0 1-.072-1.058z"
                                                clip-rule="evenodd" data-original="#000000" class="" opacity="1">
                                            </path>
                                        </g>
                                    </svg>
                                    <span>Contact Us</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="tf-section pt-130 pb-0">
        <div class="container w_1650">
            <div class="row">
                <div class="col-md-12">
                    <div class="gradient-7 about-inner style3 radius-30 wow fadeIn" data-wow-delay=".2s">
                        <div class="flex justify-between w-full flex-wrap">
                            <div class="swiper-container mySwiper2 w-full h-full">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="box">
                                            <div class="inner">
                                                <div class="icon mb-26">
                                                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink" width="512"
                                                        height="512" x="0" y="0" viewBox="0 0 512 512"
                                                        style="enable-background: new 0 0 512 512" xml:space="preserve">
                                                        <g>
                                                            <path
                                                                d="M256 0C153.755 0 70.573 83.182 70.573 185.426c0 126.888 165.939 313.167 173.004 321.035 6.636 7.391 18.222 7.378 24.846 0 7.065-7.868 173.004-194.147 173.004-321.035C441.425 83.182 358.244 0 256 0zm0 278.719c-51.442 0-93.292-41.851-93.292-93.293S204.559 92.134 256 92.134s93.291 41.851 93.291 93.293-41.85 93.292-93.291 93.292z"
                                                                fill="#fffefe" opacity="1" data-original="#000000"
                                                                class=""></path>
                                                        </g>
                                                    </svg>
                                                </div>
                                                <h5 class="mb-20">Address Restaurant</h5>
                                                <p class="color-5">
                                                    570 8th Ave, New York, NY 10018 United States
                                                </p>
                                            </div>
                                            <div class="hover-effect w-full">
                                                <h5 class="mb-20">Address Restaurant</h5>
                                                <p class="color-5">
                                                    570 8th Ave, New York, NY 10018 United States
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="box">
                                            <div class="inner">
                                                <div class="icon mb-26">
                                                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink" width="512"
                                                        height="512" x="0" y="0" viewBox="0 0 24 24"
                                                        style="enable-background: new 0 0 512 512" xml:space="preserve">
                                                        <g>
                                                            <path
                                                                d="M8.75 17.612v4.638a.751.751 0 0 0 1.354.444l2.713-3.692zM23.685.139a.75.75 0 0 0-.782-.054l-22.5 11.75a.752.752 0 0 0 .104 1.375l6.255 2.138 13.321-11.39L9.775 16.377l10.483 3.583a.753.753 0 0 0 .984-.599l2.75-18.5a.751.751 0 0 0-.307-.722z"
                                                                fill="#fffbfb" opacity="1" data-original="#000000"
                                                                class=""></path>
                                                        </g>
                                                    </svg>
                                                </div>
                                                <h5 class="mb-20">Email Address</h5>
                                                <p class="color-5">
                                                    Support: Basilfastfood@gmail.com <br />
                                                    Booking: Basilico22@gmail.com
                                                </p>
                                            </div>
                                            <div class="hover-effect w-full">
                                                <h5 class="mb-20">Email Address</h5>
                                                <p class="color-5">
                                                    Support: Basilfastfood@gmail.com <br />
                                                    Booking: Basilico22@gmail.com
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="box">
                                            <div class="inner">
                                                <div class="icon mb-26">
                                                    <img src="{{ asset('public/frontend/assets/images/icon/contact-us.png') }}" alt="" />
                                                </div>
                                                <h5 class="mb-20">Phone Number</h5>
                                                <p class="color-5">
                                                    Support: (+47)1221 09878 <br />
                                                    Order: (+53)1221 09877
                                                </p>
                                            </div>
                                            <div class="hover-effect w-full">
                                                <h5 class="mb-20">Phone Number</h5>
                                                <p class="color-5">
                                                    Support: (+47)1221 09878 <br />
                                                    Order: (+53)1221 09877
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="box">
                                            <div class="inner">
                                                <div class="icon mb-26">
                                                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink" width="512"
                                                        height="512" x="0" y="0" viewBox="0 0 477.849 477.849"
                                                        style="enable-background: new 0 0 512 512" xml:space="preserve">
                                                        <g>
                                                            <path
                                                                d="M374.099 385.518c71.737-74.859 69.207-193.698-5.652-265.435s-193.698-69.206-265.435 5.652c-69.586 72.615-69.586 187.168 0 259.783l-48.777 65.024c-5.655 7.541-4.127 18.238 3.413 23.893s18.238 4.127 23.893-3.413l47.275-63.044c65.4 47.651 154.078 47.651 219.477 0l47.275 63.044c5.655 7.541 16.353 9.069 23.893 3.413 7.541-5.655 9.069-16.353 3.413-23.893l-48.775-65.024zM255.623 255.982a17.07 17.07 0 0 1-3.413 10.24l-51.2 68.267c-5.655 7.541-16.353 9.069-23.893 3.413s-9.069-16.353-3.413-23.893l47.787-63.71v-96.717c0-9.426 7.641-17.067 17.067-17.067s17.067 7.641 17.067 17.067v102.4zM145.286 24.984C111.544-7.918 57.519-7.237 24.616 26.505c-32.314 33.139-32.318 85.997-.008 119.141 6.665 6.663 17.468 6.663 24.132 0l96.546-96.529c6.663-6.665 6.663-17.468 0-24.133zM452.486 24.984c-33.323-33.313-87.339-33.313-120.661 0-6.663 6.665-6.663 17.468 0 24.132l96.529 96.529c6.665 6.663 17.468 6.663 24.132 0 33.313-33.322 33.313-87.338 0-120.661z"
                                                                fill="#000000" opacity="1" data-original="#000000"
                                                                class=""></path>
                                                        </g>
                                                    </svg>
                                                </div>
                                                <h5 class="mb-20">Open Hour Time</h5>
                                                <p class="color-5">
                                                    Monday - Friday: 8.00am - 22.00pm <br />
                                                    Holiday: Closes
                                                </p>
                                            </div>
                                            <div class="hover-effect w-full">
                                                <h5 class="mb-20">Open Hour Time</h5>
                                                <p class="color-5">
                                                    Monday - Friday: 8.00am - 22.00pm <br />
                                                    Holiday: Closes
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="tf-section pb-130 pt-115 mobile-mb70">
        <img class="item-snack-bottom left t1" src="{{ asset('public/frontend/assets/images/common/item-07.png') }}" alt="">
        <img class="item-snack-bottom right t1" src="{{ asset('public/frontend/assets/images/common/item-07.png') }}" alt="">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="tf-title center pb-30 mb-50 wow fadeInUp" data-wow-delay=".2s">
                        <h2 class="mb-16">Drop A Line</h2>
                        <p class="fz-17">
                            If you have any questions or concerns, just write a question
                            and we will <br class="show-desktop" />
                            reply you within 24 hours, we are always welcome.
                        </p>
                    </div>
                </div>
                <div class="col-md-12 wow fadeIn" data-wow-delay=".2s">
                    <div class="form-comment style">
                        <form action="#" class="w-full">
                            <fieldset class="mb-22">
                                <input type="text" placeholder="Name*" required />
                            </fieldset>
                            <fieldset class="mb-22">
                                <input type="email" placeholder="Email*" required />
                            </fieldset>
                            <fieldset class="mb-22">
                                <input type="number" placeholder="Phone number*" required />
                            </fieldset>
                            <fieldset class="full mb-40">
                                <textarea placeholder="Write comment..." rows="7" tabindex="5" name="message" class="message"
                                    id="message" required></textarea>
                            </fieldset>
                            <div class="flex justify-center w-full">
                                <button class="tf-button">send a message</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="banner-1 style2">
        <div class="container w_1920 pd0">
            <div class="row">
                <div class="col-md-12">
                    <div class="widget-gg-map flex">
 
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d75234.8655812573!2d77.17670884533814!3d28.601618021774083!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390cfd5b347eb62d%3A0x52c2b7494e204dce!2sNew%20Delhi%2C%20Delhi!5e1!3m2!1sen!2sin!4v1736874201469!5m2!1sen!2sin"
                            height="533" style="border: 0; width: 100%" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
