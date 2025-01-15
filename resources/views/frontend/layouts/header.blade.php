<header id="header_main" class="header style2 gradient flex items-center topbar">
    <div class="container w_1650">
        <div id="site-header">
            <div class="site-header-inner w-full flex relative">
                <div class="header__logo mt3">
                    <a href="{{ route('home.page') }}">
                        <img src="{{ asset('public/frontend/assets/images/logo/logo2.png') }}" alt="" />
                    </a>
                </div>
                <div class="header__logo-mobile">
                    <a href="#"><img src="{{ asset('public/frontend/assets/images/logo/logo2.png') }}"
                            alt="" /></a>
                </div>
                <nav id="main-nav" class="main-nav">
                    <ul id="menu-primary-menu" class="menu">
                        <li class="menu-item current-menu-item">
                            <a href="{{ route('home.page') }}"> Home </a>

                        </li>
                        <li class="menu-item menu-item-has-children">
                            <a href="#"> Pages </a>
                            <ul class="sub-menu">
                                <li>
                                    <a class="menu-item" href="{{ route('about.page') }}">About Us</a>
                                    <a class="menu-item" href="{{ route('teams.page') }}">Teams</a>
                                    {{-- <a class="menu-item" href="book-table.html">Book Table</a> --}}
                                    <a class="menu-item" href="{{ route('recruitment.page') }}">Recruitment
                                        (Careers)</a>
                                    <a class="menu-item" href="{{ route('locations.page') }}">Locations</a>
                                    <a class="menu-item" href="{{ route('faq.page')}}">Faqs</a>                                    
                                </li>
                            </ul>
                        </li>

                        <li class="menu-item menu-item-has-children">
                            <a href="menu-restaurant.html"> Our Menu </a>
                            <ul class="sub-menu">
                                <li>
                                    <a class="menu-item" href="{{ route('menu-restaurant.page')}}">Menu Restaurant</a>
                                    <a class="menu-item" href="{{ route('order.page')}}">Order Online</a>
                                    <a class="menu-item" href="{{ route('shop.page')}}">Shop details
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="menu-item">
                            <a href="{{ route('offers.page')}}"> Offers </a>
                        </li>                        
                        <li class="menu-item">
                            <a href="{{ route('contact.page') }}"> Contact </a>
                        </li>
                    </ul>
                </nav>
                <div class="right ml-auto flex justify-end items-center">
                    <ul class="action bg-2">
                        <li>
                            @php
                                $dashboard = Auth::check()
                                    ? [
                                            'admin' => route('home'),
                                            'customer' => route('customer.dashboard'),
                                            'vendor' => route('vendor.dashboard'),
                                            'delivery' => route('delivery.dashboard'),
                                        ][Auth::user()->role] ?? route('login')
                                    : route('login');
                            @endphp
                            <a href="{{ $dashboard }}">
                                <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512"
                                    style="enable-background: new 0 0 512 512" xml:space="preserve" class="">
                                    <g>
                                        <path
                                            d="M256 0c-74.439 0-135 60.561-135 135s60.561 135 135 135 135-60.561 135-135S330.439 0 256 0zM423.966 358.195C387.006 320.667 338.009 300 286 300h-60c-52.008 0-101.006 20.667-137.966 58.195C51.255 395.539 31 444.833 31 497c0 8.284 6.716 15 15 15h420c8.284 0 15-6.716 15-15 0-52.167-20.255-101.461-57.034-138.805z"
                                            fill="#ffffff" data-original="#ffffff" class="" opacity="1">
                                        </path>
                                    </g>
                                </svg>
                            </a>

                        </li>
                        <li class="flat-show-search">
                            <a href="#" class="show-search">
                                <svg class="" xmlns="http://www.w3.org/2000/svg" version="1.1"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" width="512" height="512" x="0" y="0"
                                    viewBox="0 0 118.783 118.783" style="enable-background: new 0 0 512 512"
                                    xml:space="preserve" class="">
                                    <g>
                                        <path
                                            d="M115.97 101.597 88.661 74.286a47.75 47.75 0 0 0 7.333-25.488c0-26.509-21.49-47.996-47.998-47.996S0 22.289 0 48.798c0 26.51 21.487 47.995 47.996 47.995a47.776 47.776 0 0 0 27.414-8.605l26.984 26.986a9.574 9.574 0 0 0 6.788 2.806 9.58 9.58 0 0 0 6.791-2.806 9.602 9.602 0 0 0-.003-13.577zM47.996 81.243c-17.917 0-32.443-14.525-32.443-32.443s14.526-32.444 32.443-32.444c17.918 0 32.443 14.526 32.443 32.444S65.914 81.243 47.996 81.243z"
                                            fill="#000000" data-original="#000000" class=""></path>
                                    </g>
                                </svg>
                            </a>
                            <div class="top-search">
                                <form action="#" id="searchform-all" method="get">
                                    <div>
                                        <input type="text" id="s" class="sss" placeholder="Search..." />
                                        <button type="submit" id="searchsubmit">
                                            <svg class="" xmlns="http://www.w3.org/2000/svg" version="1.1"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" width="512" height="512"
                                                x="0" y="0" viewBox="0 0 118.783 118.783"
                                                style="enable-background: new 0 0 512 512" xml:space="preserve"
                                                class="">
                                                <g>
                                                    <path
                                                        d="M115.97 101.597 88.661 74.286a47.75 47.75 0 0 0 7.333-25.488c0-26.509-21.49-47.996-47.998-47.996S0 22.289 0 48.798c0 26.51 21.487 47.995 47.996 47.995a47.776 47.776 0 0 0 27.414-8.605l26.984 26.986a9.574 9.574 0 0 0 6.788 2.806 9.58 9.58 0 0 0 6.791-2.806 9.602 9.602 0 0 0-.003-13.577zM47.996 81.243c-17.917 0-32.443-14.525-32.443-32.443s14.526-32.444 32.443-32.444c17.918 0 32.443 14.526 32.443 32.444S65.914 81.243 47.996 81.243z"
                                                        fill="#000000" data-original="#000000" class=""></path>
                                                </g>
                                            </svg>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </li>
                        <li class="cart relative">
                            <a href="#" class="icon_cart active">
                                <span class="number">3</span>
                                <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" width="512" height="512" x="0"
                                    y="0" viewBox="0 0 24 24" style="enable-background: new 0 0 512 512"
                                    xml:space="preserve" class="">
                                    <g>
                                        <path
                                            d="M1 1a1 1 0 1 0 0 2h1.78a.694.694 35.784 0 1 .657.474l3.297 9.893c.147.44.165.912.053 1.362l-.271 1.087C6.117 17.41 7.358 19 9 19h12a1 1 0 1 0 0-2H9c-.39 0-.64-.32-.545-.697l.205-.818A.64.64 142.028 0 1 9.28 15H20a1 1 0 0 0 .95-.684l2.665-8A1 1 0 0 0 22.666 5H6.555a.694.694 35.783 0 1-.658-.474l-.948-2.842A1 1 0 0 0 4 1zm7 19a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm12 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4z"
                                            fill="#ffffff" data-original="#000000" class="" opacity="1">
                                        </path>
                                    </g>
                                </svg>
                            </a>
                            <div class="content">
                                <div class="ic close_cart cursor-pointer">x</div>
                                <div class="cart-item">
                                    <div class="img">
                                        <img src="{{ asset('public/frontend/assets/images/common/item_42.png') }}"
                                            alt="" />
                                    </div>
                                    <div class="inner">
                                        <p class="pricing">$15.22</p>
                                        <h6 class="color-3 mb-0">
                                            <a href="shop-details.html">Brekkie BBQ Burger</a>
                                        </h6>
                                    </div>
                                </div>
                                <div class="cart-item">
                                    <div class="img">
                                        <img src="{{ asset('public/frontend/assets/images/common/item_43.png') }}"
                                            alt="" />
                                    </div>
                                    <div class="inner">
                                        <p class="pricing">$15.22</p>
                                        <h6 class="color-3 mb-0">
                                            <a href="shop-details.html">Smoked Brisket Sandwich</a>
                                        </h6>
                                    </div>
                                </div>
                                <div class="cart-item">
                                    <div class="img">
                                        <img src="{{ asset('public/frontend/assets/images/common/item_44.png') }}"
                                            alt="" />
                                    </div>
                                    <div class="inner">
                                        <p class="pricing">$15.22</p>
                                        <h6 class="color-3 mb-0">
                                            <a href="shop-details.html">Canada Dry Ginger Ale</a>
                                        </h6>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <a href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" width="512" height="512" x="0"
                                    y="0" viewBox="0 0 512 512" style="enable-background: new 0 0 512 512"
                                    xml:space="preserve" class="">
                                    <g>
                                        <path
                                            d="M376 30c-27.783 0-53.255 8.804-75.707 26.168-21.525 16.647-35.856 37.85-44.293 53.268-8.437-15.419-22.768-36.621-44.293-53.268C189.255 38.804 163.783 30 136 30 58.468 30 0 93.417 0 177.514c0 90.854 72.943 153.015 183.369 247.118 18.752 15.981 40.007 34.095 62.099 53.414C248.38 480.596 252.12 482 256 482s7.62-1.404 10.532-3.953c22.094-19.322 43.348-37.435 62.111-53.425C439.057 330.529 512 268.368 512 177.514 512 93.417 453.532 30 376 30z"
                                            fill="#ffffff" data-original="#000000" class="" opacity="1">
                                        </path>
                                    </g>
                                </svg>
                            </a>
                        </li>
                    </ul>

                    <div class="hamburger">
                        <img src="{{ asset('public/frontend/assets/images/icon/hamburger.png') }}"
                            class="icon_hamburger cursor-pointer" alt="" />
                        <div class="content">
                            <div class="icon close_hamburger cursor-pointer">x</div>
                            <h5 class="mb-36 color-3 text-spacing-1">
                                Best Fast Food <br />
                                Delicious And Quality.
                            </h5>
                            <ul class="mb-42 list">
                                <li>
                                    <p class="text-spacing-1 uppercase text-500 mb-0 font-1 text-spacing-1">
                                        call to order
                                    </p>
                                    <p class="phone font-1 text-spacing-1">910-344-7520</p>
                                </li>
                                <li class="style">
                                    <p class="mb4 font2 color-3">
                                        62 Big Tree St, Livonia, New York 14487, USA
                                    </p>
                                    <p class="font2 color-3">themesflat@gmail.com</p>
                                </li>
                                <li>
                                    <p class="mb5 font2 color-3">
                                        <span>Monday – Thursday:</span> 8.00am – 21.00pm
                                    </p>
                                    <p class="mb5 font2 color-3">
                                        <span>Friday – Saturday : </span> 9.00am – 22.00pm
                                    </p>
                                    <p class="mb5 font2 color-3">
                                        <span>Sunday:</span> 8.00 – 23.00pm
                                    </p>
                                    <p class="mb5 font2 color-3">
                                        <span>Holiday: </span>
                                        <span class="color-2">Closed</span>
                                    </p>
                                </li>
                            </ul>
                            <ul class="social-style relative flex items-center justify-center">
                                <li>
                                    <a href="#" class="active"><i class="fab fa-facebook-f"></i></a>
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
                                                d="M448,209.91a210.06,210.06,0,0,1-122.77-39.25V349.38A162.55,162.55,0,1,1,185,188.31V278.2a74.62,74.62,0,1,0,52.23,71.18V0l88,0a121.18,121.18,0,0,0,1.86,22.17h0A122.18,122.18,0,0,0,381,102.39a121.43,121.43,0,0,0,67,20.14Z">
                                            </path>
                                        </svg>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- /#main-nav -->
            </div>
            <div class="mobile-button style2"><span></span></div>
        </div>
    </div>
</header>
