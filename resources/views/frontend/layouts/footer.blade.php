<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-12 flex items-center wow fadeIn" data-wow-delay=".3s">
                <div class="line mr-30"></div>
                <a class="flex justify-center footer-logo">
                    <img src="{{ asset('public/frontend/assets/images/logo/logo2.png') }}" alt="" />
                </a>
                <div class="line ml-30"></div>
            </div>
            <div class="col-md-12 wow fadeIn" data-wow-delay=".3s">
                <ul class="mt-35 footer-link flex justify-center">
                    <li><a href="{{ route('about.page') }}">About Us</a></li>
                    <li><a href="{{ route('order.page') }}">Order Food</a></li>
                    <li><a href="{{ route('recruitment.page') }}">Careers</a></li>
                    <li><a href="{{ route('offers.page') }}">Offers</a></li>
                    <li><a href="{{ route('contact.page') }}">Contact</a></li>
                    <li><a href="{{ route('offers.page') }}">Gift Voucher</a></li>
                    <li><a href="{{ route('faq.page') }}">FAQs</a></li>
                </ul>
            </div>

            <div class="col-md-4 border-right mobile-mb30 wow fadeIn" data-wow-delay=".3s">
                <h5 class="white uppercase mb-22 center text-spacing-1">
                    Information
                </h5>
                <ul class="list center">
                    <li>
                        <span>62 Big Tree St, Livonia, New York 14487, USA</span>
                    </li>
                    <li><span>themesflat@gmail.com</span></li>
                    <li><span>Terms and Conditions</span></li>
                    <li><span>Warranty and Services</span></li>
                </ul>
            </div>
            <div class="col-md-4 border-right mobile-mb30 wow fadeIn" data-wow-delay=".4s">
                <h5 class="white uppercase mb-22 center text-spacing-1">
                    contact & order
                </h5>
                <ul class="list center mb-30">
                    <li class="mb-10">
                        <span>Call Us To Order or Order Online</span>
                    </li>
                    <li><a class="call" href="tel:9103447520">910-344-7520</a></li>
                </ul>
                <div class="flex justify-center">
                    <a href="{{ route('order.page') }}" class="tf-button">order online now</a>
                </div>
            </div>

            <div class="col-md-4 wow fadeIn" data-wow-delay=".5s">
                <h5 class="white uppercase mb-22 center text-spacing-1">
                    Hour time open
                </h5>
                <ul class="list center mb-30">
                    <li>
                        <span>Monday – Thursday: <span>8.00am – 21.00pm</span></span>
                    </li>
                    <li>
                        <span>Friday – Saturday : <span>9.00am – 22.00pm</span></span>
                    </li>
                    <li>
                        <span>Sunday: <span>8.00 – 23.00pm</span></span>
                    </li>
                    <li>
                        <span>Holiday: <span class="color-main">Closed</span></span>
                    </li>
                </ul>
            </div>

            <div class="col-md-12 wow fadeIn" data-wow-delay=".3s">
                <div class="footer-social flex items-center justify-center">
                    <ul class="social flex items-center justify-center">
                        <li>
                            <a href="#"><i class="fab fa-facebook"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fab fa-skype"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fab fa-facebook-messenger"></i></a>
                        </li>
                        <li>
                            <a href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512">
                                    <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                    <path
                                        d="M448,209.91a210.06,210.06,0,0,1-122.77-39.25V349.38A162.55,162.55,0,1,1,185,188.31V278.2a74.62,74.62,0,1,0,52.23,71.18V0l88,0a121.18,121.18,0,0,0,1.86,22.17h0A122.18,122.18,0,0,0,381,102.39a121.43,121.43,0,0,0,67,20.14Z" />
                                </svg>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-md-12">
                <div class="footer-bottom flex items-center">
                    <p class="copyright">
                        © Copyright <a href="https://leetshield.com/">LeetShield</a> {{ date('Y') }}. All Rights
                        Reserved.
                    </p>
                    <div class="payment-methods">
                        <a class="flex image" href="#"><img
                                src="{{ asset('public/frontend/assets/images/common/payment-methods.png') }}"
                                alt="" /></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
