@extends('frontend.layouts.master')
@section('content')
    <section class="page-title relative mt-122 mb-30">
        <div class="container w_1890">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-title-inner hidden">
                        <div class="bg-page-title-inner">
                            <img class="parallax"
                                src="{{ asset('public/frontend/assets/images/backgroup/page-title_8.jpg') }}"
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
                            <h1 class="title center">Order Online</h1>
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
                                    <span>Order Online</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container w_1890">
            <div class="row">
                <div class="col-md-12 wow fadeIn" data-wow-delay=".3s">
                    <div class="delivery-method gradient">
                        <div class="box">
                            <p class="icon style1 mr-16">
                                <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" width="512" height="512" x="0" y="0"
                                    viewBox="0 0 32 32" style="enable-background: new 0 0 512 512" xml:space="preserve">
                                    <g>
                                        <path
                                            d="M16 1A11 11 0 0 0 5 12c0 5.81 9.8 18.1 10.22 18.63a1 1 0 0 0 1.56 0C17.2 30.1 27 17.81 27 12A11 11 0 0 0 16 1zm0 14a4 4 0 1 1 4-4 4 4 0 0 1-4 4z"
                                            fill="#ffffff" opacity="1" data-original="#000000" class=""></path>
                                    </g>
                                </svg>
                            </p>
                            <p class="white">
                                <span class="color-main">Delivery</span> from: 570 8th Ave,
                                New York, NY 10018 United States
                            </p>
                        </div>

                        <div class="box">
                            <p class="icon style2 mr-15">
                                <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" width="512" height="512" x="0" y="0"
                                    viewBox="0 0 32 32" style="enable-background: new 0 0 512 512" xml:space="preserve">
                                    <g>
                                        <path fill="#ffffff"
                                            d="m28.91 4.417-11 24a1 1 0 0 1-1.907-.334l-.93-11.157-11.156-.93a1 1 0 0 1-.334-1.906l24-11a1 1 0 0 1 1.326 1.326z"
                                            opacity="1" data-original="#39c3fc" class=""></path>
                                    </g>
                                </svg>
                            </p>
                            <p class="white">
                                <span class="color-main">Delivery</span> to: 10311 68th Dr
                                #APT 2C Forest Hills, New York(NY), 11375
                            </p>
                        </div>

                        <div class="box">
                            <p class="icon style3 mr-15">
                                <img src="{{ asset('public/frontend/assets/images/icon/order-online.png') }}"
                                    alt="" />
                            </p>
                            <p class="white">
                                <span class="color-main">Estimated delivery time: 20 min - 30 min
                                </span>
                                <br />
                                Delivery time may be slower or faster than expected due
                                toexternal factors.
                            </p>
                        </div>

                        <div class="box justify-end">
                            <a href="{{ route('faq.page') }}" class="tf-button">change delivery method</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="tf-section pt-158 pb-62 mobile-pb-0">
        <div class="container">
            <div class="row">
                <div class="col-md-12 wow fadeIn" data-wow-delay=".3s">
                    <div class="flat-tabs style2 switch-tab">
                        <div class="switch-menu-tab">
                            <div class="btn-menu reverse menu-prev swiper-button-disabled" tabindex="-1" role="button"
                                aria-label="Previous slide" aria-disabled="true">
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
                            </div>
                            <div class="btn-menu menu-next swiper-button-disabled" tabindex="-1" role="button"
                                aria-label="Previous slide" aria-disabled="true">
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
                            </div>
                        </div>

                        <ul class="menu-tab">
                            <li class="active">Combo</li>
                            <li>Burger</li>
                            <li>Fried Chicken</li>
                            <li>Salad</li>
                            <li>Appetizer</li>
                            <li>Pizza</li>
                        </ul>

                        <div class="flex justify-center">
                            <div class="dropdown selector-drop" id="popularity">
                                <span class="down"><i class="fas fa-chevron-down"></i></span>
                                <a href="javascript:void(0);" class="btn-selector" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    sort by popularity
                                </a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li class="dropdown-item active">popularity 01</li>
                                    <li class="dropdown-item">popularity 02</li>
                                    <li class="dropdown-item">popularity 03</li>
                                </ul>
                            </div>
                        </div>

                        <div class="content-tab">
                            <div class="content-inner active">
                                <div class="product-4">
                                    <div class="image">
                                        <img src="{{ asset('public/frontend/assets/images/common/item_55.png') }}"
                                            alt="" />
                                        <p class="price">
                                            220gr / 600 cal <span class="pl-15">$4.25</span>
                                        </p>
                                    </div>
                                    <h5>Bacon Burger</h5>
                                    <p class="desc">
                                        Smoked brisket, tender ribs, smoked sausage, bacon &
                                        cheddar with lettuce, tomato, house BBQ. tomato sauce,
                                        eggplant, zucchini.
                                    </p>
                                    <div class="flex">
                                        <a href="{{ route('shop.page') }}" class="tf-button mr-12">select option</a>
                                        <a href="{{ route('shop.page') }}" class="mr-10 action"><img
                                                src="{{ asset('public/frontend/assets/images/icon/cart.png') }}"
                                                alt="" /></a>
                                        <a href="{{ route('shop.page') }}" class="action"><img
                                                src="{{ asset('public/frontend/assets/images/icon/hear.png') }}"
                                                alt="" /></a>
                                    </div>
                                </div>
                                <div class="product-4">
                                    <div class="image">
                                        <div class="flex info">
                                            <a href="{{ route('shop.page') }}" class="sale">Sale!</a>
                                        </div>
                                        <a href="#"></a>
                                        <img src="{{ asset('public/frontend/assets/images/common/item_56.png') }}"
                                            alt="" />
                                        <p class="price">
                                            220gr / 600 cal
                                            <span class="pl-15">$6 <span>$8.00</span></span>
                                        </p>
                                    </div>
                                    <h5>BBQ Chicken Breast</h5>
                                    <p class="desc">
                                        Smoked brisket, tender ribs, smoked sausage, bacon &
                                        cheddar with lettuce, tomato, house BBQ. tomato sauce,
                                        eggplant, zucchini.
                                    </p>
                                    <div class="flex">
                                        <a href="{{ route('shop.page') }}" class="tf-button mr-12">select option</a>
                                        <a href="{{ route('shop.page') }}" class="mr-10 action"><img
                                                src="{{ asset('public/frontend/assets/images/icon/cart.png') }}"
                                                alt="" /></a>
                                        <a href="{{ route('shop.page') }}" class="action"><img
                                                src="{{ asset('public/frontend/assets/images/icon/hear.png') }}"
                                                alt="" /></a>
                                    </div>
                                </div>
                                <div class="product-4">
                                    <div class="image">
                                        <div class="flex info">
                                            <a href="#" class="recommended">Recommended</a>
                                        </div>
                                        <img src="{{ asset('public/frontend/assets/images/common/item_57.png') }}"
                                            alt="" />
                                        <p class="price">
                                            220gr / 600 cal <span class="pl-15">$5.25</span>
                                        </p>
                                    </div>
                                    <h5>Fresh School Burger</h5>
                                    <p class="desc">
                                        Smoked brisket, tender ribs, smoked sausage, bacon &
                                        cheddar with lettuce, tomato, house BBQ. tomato sauce,
                                        eggplant, zucchini.
                                    </p>
                                    <div class="flex">
                                        <a href="{{ route('shop.page') }}" class="tf-button mr-12">select option</a>
                                        <a href="{{ route('shop.page') }}" class="mr-10 action"><img
                                                src="{{ asset('public/frontend/assets/images/icon/cart.png') }}"
                                                alt="" /></a>
                                        <a href="{{ route('shop.page') }}" class="action"><img
                                                src="{{ asset('public/frontend/assets/images/icon/hear.png') }}"
                                                alt="" /></a>
                                    </div>
                                </div>

                                <div class="product-4">
                                    <div class="image">
                                        <div class="flex info">
                                            <a href="{{ route('shop.page') }}" class="seasonal">Seasonal</a>
                                            <a href="{{ route('shop.page') }}" class="new">New</a>
                                        </div>
                                        <img src="{{ asset('public/frontend/assets/images/common/item_58.png') }}"
                                            alt="" />
                                        <p class="price">
                                            220gr / 600 cal <span class="pl-15">$4.25</span>
                                        </p>
                                    </div>
                                    <h5>Specialty of the House</h5>
                                    <p class="desc">
                                        Smoked brisket, tender ribs, smoked sausage, bacon &
                                        cheddar with lettuce, tomato, house BBQ. tomato sauce,
                                        eggplant, zucchini.
                                    </p>
                                    <div class="flex">
                                        <a href="{{ route('shop.page') }}" class="tf-button mr-12">select option</a>
                                        <a href="{{ route('shop.page') }}" class="mr-10 action"><img
                                                src="{{ asset('public/frontend/assets/images/icon/cart.png') }}"
                                                alt="" /></a>
                                        <a href="{{ route('shop.page') }}" class="action"><img
                                                src="{{ asset('public/frontend/assets/images/icon/hear.png') }}"
                                                alt="" /></a>
                                    </div>
                                </div>
                                <div class="product-4">
                                    <div class="image">
                                        <img src="{{ asset('public/frontend/assets/images/common/item_59.png') }}"
                                            alt="" />
                                        <p class="price">
                                            220gr / 600 cal <span class="pl-15">$6 </span>
                                        </p>
                                    </div>
                                    <h5>Burger Quattro Stagioni</h5>
                                    <p class="desc">
                                        Smoked brisket, tender ribs, smoked sausage, bacon &
                                        cheddar with lettuce, tomato, house BBQ. tomato sauce,
                                        eggplant, zucchini.
                                    </p>
                                    <div class="flex">
                                        <a href="{{ route('shop.page') }}" class="tf-button mr-12">select option</a>
                                        <a href="{{ route('shop.page') }}" class="mr-10 action"><img
                                                src="{{ asset('public/frontend/assets/images/icon/cart.png') }}"
                                                alt="" /></a>
                                        <a href="{{ route('shop.page') }}" class="action"><img
                                                src="{{ asset('public/frontend/assets/images/icon/hear.png') }}"
                                                alt="" /></a>
                                    </div>
                                </div>
                                <div class="product-4">
                                    <div class="image">
                                        <img src="{{ asset('public/frontend/assets/images/common/item_60.png') }}"
                                            alt="" />
                                        <p class="price">
                                            220gr / 600 cal <span class="pl-15">$5.25</span>
                                        </p>
                                    </div>
                                    <h5>Triple Cheeseburger</h5>
                                    <p class="desc">
                                        Smoked brisket, tender ribs, smoked sausage, bacon &
                                        cheddar with lettuce, tomato, house BBQ. tomato sauce,
                                        eggplant, zucchini.
                                    </p>
                                    <div class="flex">
                                        <a href="{{ route('shop.page') }}" class="tf-button mr-12">select option</a>
                                        <a href="{{ route('shop.page') }}" class="mr-10 action"><img
                                                src="{{ asset('public/frontend/assets/images/icon/cart.png') }}"
                                                alt="" /></a>
                                        <a href="{{ route('shop.page') }}" class="action"><img
                                                src="{{ asset('public/frontend/assets/images/icon/hear.png') }}"
                                                alt="" /></a>
                                    </div>
                                </div>
                            </div>
                            <div class="content-inner">
                                <div class="product-4">
                                    <div class="image">
                                        <img src="{{ asset('public/frontend/assets/images/common/item_55.png') }}"
                                            alt="" />
                                        <p class="price">
                                            220gr / 600 cal <span class="pl-15">$4.25</span>
                                        </p>
                                    </div>
                                    <h5>Bacon Burger</h5>
                                    <p class="desc">
                                        Smoked brisket, tender ribs, smoked sausage, bacon &
                                        cheddar with lettuce, tomato, house BBQ. tomato sauce,
                                        eggplant, zucchini.
                                    </p>
                                    <div class="flex">
                                        <a href="{{ route('shop.page') }}" class="tf-button mr-12">select option</a>
                                        <a href="{{ route('shop.page') }}" class="mr-10 action"><img
                                                src="{{ asset('public/frontend/assets/images/icon/cart.png') }}"
                                                alt="" /></a>
                                        <a href="{{ route('shop.page') }}" class="action"><img
                                                src="{{ asset('public/frontend/assets/images/icon/hear.png') }}"
                                                alt="" /></a>
                                    </div>
                                </div>
                                <div class="product-4">
                                    <div class="image">
                                        <div class="flex info">
                                            <a href="{{ route('shop.page') }}" class="sale">Sale!</a>
                                        </div>
                                        <a href="#"></a>
                                        <img src="{{ asset('public/frontend/assets/images/common/item_56.png') }}"
                                            alt="" />
                                        <p class="price">
                                            220gr / 600 cal
                                            <span class="pl-15">$6 <span>$8.00</span></span>
                                        </p>
                                    </div>
                                    <h5>BBQ Chicken Breast</h5>
                                    <p class="desc">
                                        Smoked brisket, tender ribs, smoked sausage, bacon &
                                        cheddar with lettuce, tomato, house BBQ. tomato sauce,
                                        eggplant, zucchini.
                                    </p>
                                    <div class="flex">
                                        <a href="{{ route('shop.page') }}" class="tf-button mr-12">select option</a>
                                        <a href="{{ route('shop.page') }}" class="mr-10 action"><img
                                                src="{{ asset('public/frontend/assets/images/icon/cart.png') }}"
                                                alt="" /></a>
                                        <a href="{{ route('shop.page') }}" class="action"><img
                                                src="{{ asset('public/frontend/assets/images/icon/hear.png') }}"
                                                alt="" /></a>
                                    </div>
                                </div>
                                <div class="product-4">
                                    <div class="image">
                                        <div class="flex info">
                                            <a href="#" class="recommended">Recommended</a>
                                        </div>
                                        <img src="{{ asset('public/frontend/assets/images/common/item_57.png') }}"
                                            alt="" />
                                        <p class="price">
                                            220gr / 600 cal <span class="pl-15">$5.25</span>
                                        </p>
                                    </div>
                                    <h5>Fresh School Burger</h5>
                                    <p class="desc">
                                        Smoked brisket, tender ribs, smoked sausage, bacon &
                                        cheddar with lettuce, tomato, house BBQ. tomato sauce,
                                        eggplant, zucchini.
                                    </p>
                                    <div class="flex">
                                        <a href="{{ route('shop.page') }}" class="tf-button mr-12">select option</a>
                                        <a href="{{ route('shop.page') }}" class="mr-10 action"><img
                                                src="{{ asset('public/frontend/assets/images/icon/cart.png') }}"
                                                alt="" /></a>
                                        <a href="{{ route('shop.page') }}" class="action"><img
                                                src="{{ asset('public/frontend/assets/images/icon/hear.png') }}"
                                                alt="" /></a>
                                    </div>
                                </div>

                                <div class="product-4">
                                    <div class="image">
                                        <div class="flex info">
                                            <a href="{{ route('shop.page') }}" class="seasonal">Seasonal</a>
                                            <a href="{{ route('shop.page') }}" class="new">New</a>
                                        </div>
                                        <img src="{{ asset('public/frontend/assets/images/common/item_58.png') }}"
                                            alt="" />
                                        <p class="price">
                                            220gr / 600 cal <span class="pl-15">$4.25</span>
                                        </p>
                                    </div>
                                    <h5>Specialty of the House</h5>
                                    <p class="desc">
                                        Smoked brisket, tender ribs, smoked sausage, bacon &
                                        cheddar with lettuce, tomato, house BBQ. tomato sauce,
                                        eggplant, zucchini.
                                    </p>
                                    <div class="flex">
                                        <a href="{{ route('shop.page') }}" class="tf-button mr-12">select option</a>
                                        <a href="{{ route('shop.page') }}" class="mr-10 action"><img
                                                src="{{ asset('public/frontend/assets/images/icon/cart.png') }}"
                                                alt="" /></a>
                                        <a href="{{ route('shop.page') }}" class="action"><img
                                                src="{{ asset('public/frontend/assets/images/icon/hear.png') }}"
                                                alt="" /></a>
                                    </div>
                                </div>
                                <div class="product-4">
                                    <div class="image">
                                        <img src="{{ asset('public/frontend/assets/images/common/item_59.png') }}"
                                            alt="" />
                                        <p class="price">
                                            220gr / 600 cal <span class="pl-15">$6 </span>
                                        </p>
                                    </div>
                                    <h5>Burger Quattro Stagioni</h5>
                                    <p class="desc">
                                        Smoked brisket, tender ribs, smoked sausage, bacon &
                                        cheddar with lettuce, tomato, house BBQ. tomato sauce,
                                        eggplant, zucchini.
                                    </p>
                                    <div class="flex">
                                        <a href="{{ route('shop.page') }}" class="tf-button mr-12">select option</a>
                                        <a href="{{ route('shop.page') }}" class="mr-10 action"><img
                                                src="{{ asset('public/frontend/assets/images/icon/cart.png') }}"
                                                alt="" /></a>
                                        <a href="{{ route('shop.page') }}" class="action"><img
                                                src="{{ asset('public/frontend/assets/images/icon/hear.png') }}"
                                                alt="" /></a>
                                    </div>
                                </div>
                                <div class="product-4">
                                    <div class="image">
                                        <img src="{{ asset('public/frontend/assets/images/common/item_60.png') }}"
                                            alt="" />
                                        <p class="price">
                                            220gr / 600 cal <span class="pl-15">$5.25</span>
                                        </p>
                                    </div>
                                    <h5>Triple Cheeseburger</h5>
                                    <p class="desc">
                                        Smoked brisket, tender ribs, smoked sausage, bacon &
                                        cheddar with lettuce, tomato, house BBQ. tomato sauce,
                                        eggplant, zucchini.
                                    </p>
                                    <div class="flex">
                                        <a href="{{ route('shop.page') }}" class="tf-button mr-12">select option</a>
                                        <a href="{{ route('shop.page') }}" class="mr-10 action"><img
                                                src="{{ asset('public/frontend/assets/images/icon/cart.png') }}"
                                                alt="" /></a>
                                        <a href="{{ route('shop.page') }}" class="action"><img
                                                src="{{ asset('public/frontend/assets/images/icon/hear.png') }}"
                                                alt="" /></a>
                                    </div>
                                </div>
                            </div>
                            <div class="content-inner">
                                <div class="product-4">
                                    <div class="image">
                                        <img src="{{ asset('public/frontend/assets/images/common/item_55.png') }}"
                                            alt="" />
                                        <p class="price">
                                            220gr / 600 cal <span class="pl-15">$4.25</span>
                                        </p>
                                    </div>
                                    <h5>Bacon Burger</h5>
                                    <p class="desc">
                                        Smoked brisket, tender ribs, smoked sausage, bacon &
                                        cheddar with lettuce, tomato, house BBQ. tomato sauce,
                                        eggplant, zucchini.
                                    </p>
                                    <div class="flex">
                                        <a href="{{ route('shop.page') }}" class="tf-button mr-12">select option</a>
                                        <a href="{{ route('shop.page') }}" class="mr-10 action"><img
                                                src="{{ asset('public/frontend/assets/images/icon/cart.png') }}"
                                                alt="" /></a>
                                        <a href="{{ route('shop.page') }}" class="action"><img
                                                src="{{ asset('public/frontend/assets/images/icon/hear.png') }}"
                                                alt="" /></a>
                                    </div>
                                </div>
                                <div class="product-4">
                                    <div class="image">
                                        <div class="flex info">
                                            <a href="{{ route('shop.page') }}" class="sale">Sale!</a>
                                        </div>
                                        <a href="#"></a>
                                        <img src="{{ asset('public/frontend/assets/images/common/item_56.png') }}"
                                            alt="" />
                                        <p class="price">
                                            220gr / 600 cal
                                            <span class="pl-15">$6 <span>$8.00</span></span>
                                        </p>
                                    </div>
                                    <h5>BBQ Chicken Breast</h5>
                                    <p class="desc">
                                        Smoked brisket, tender ribs, smoked sausage, bacon &
                                        cheddar with lettuce, tomato, house BBQ. tomato sauce,
                                        eggplant, zucchini.
                                    </p>
                                    <div class="flex">
                                        <a href="{{ route('shop.page') }}" class="tf-button mr-12">select option</a>
                                        <a href="{{ route('shop.page') }}" class="mr-10 action"><img
                                                src="{{ asset('public/frontend/assets/images/icon/cart.png') }}"
                                                alt="" /></a>
                                        <a href="{{ route('shop.page') }}" class="action"><img
                                                src="{{ asset('public/frontend/assets/images/icon/hear.png') }}"
                                                alt="" /></a>
                                    </div>
                                </div>
                                <div class="product-4">
                                    <div class="image">
                                        <div class="flex info">
                                            <a href="#" class="recommended">Recommended</a>
                                        </div>
                                        <img src="{{ asset('public/frontend/assets/images/common/item_57.png') }}"
                                            alt="" />
                                        <p class="price">
                                            220gr / 600 cal <span class="pl-15">$5.25</span>
                                        </p>
                                    </div>
                                    <h5>Fresh School Burger</h5>
                                    <p class="desc">
                                        Smoked brisket, tender ribs, smoked sausage, bacon &
                                        cheddar with lettuce, tomato, house BBQ. tomato sauce,
                                        eggplant, zucchini.
                                    </p>
                                    <div class="flex">
                                        <a href="{{ route('shop.page') }}" class="tf-button mr-12">select option</a>
                                        <a href="{{ route('shop.page') }}" class="mr-10 action"><img
                                                src="{{ asset('public/frontend/assets/images/icon/cart.png') }}"
                                                alt="" /></a>
                                        <a href="{{ route('shop.page') }}" class="action"><img
                                                src="{{ asset('public/frontend/assets/images/icon/hear.png') }}"
                                                alt="" /></a>
                                    </div>
                                </div>

                                <div class="product-4">
                                    <div class="image">
                                        <div class="flex info">
                                            <a href="{{ route('shop.page') }}" class="seasonal">Seasonal</a>
                                            <a href="{{ route('shop.page') }}" class="new">New</a>
                                        </div>
                                        <img src="{{ asset('public/frontend/assets/images/common/item_58.png') }}"
                                            alt="" />
                                        <p class="price">
                                            220gr / 600 cal <span class="pl-15">$4.25</span>
                                        </p>
                                    </div>
                                    <h5>Specialty of the House</h5>
                                    <p class="desc">
                                        Smoked brisket, tender ribs, smoked sausage, bacon &
                                        cheddar with lettuce, tomato, house BBQ. tomato sauce,
                                        eggplant, zucchini.
                                    </p>
                                    <div class="flex">
                                        <a href="{{ route('shop.page') }}" class="tf-button mr-12">select option</a>
                                        <a href="{{ route('shop.page') }}" class="mr-10 action"><img
                                                src="{{ asset('public/frontend/assets/images/icon/cart.png') }}"
                                                alt="" /></a>
                                        <a href="{{ route('shop.page') }}" class="action"><img
                                                src="{{ asset('public/frontend/assets/images/icon/hear.png') }}"
                                                alt="" /></a>
                                    </div>
                                </div>
                                <div class="product-4">
                                    <div class="image">
                                        <img src="{{ asset('public/frontend/assets/images/common/item_59.png') }}"
                                            alt="" />
                                        <p class="price">
                                            220gr / 600 cal <span class="pl-15">$6 </span>
                                        </p>
                                    </div>
                                    <h5>Burger Quattro Stagioni</h5>
                                    <p class="desc">
                                        Smoked brisket, tender ribs, smoked sausage, bacon &
                                        cheddar with lettuce, tomato, house BBQ. tomato sauce,
                                        eggplant, zucchini.
                                    </p>
                                    <div class="flex">
                                        <a href="{{ route('shop.page') }}" class="tf-button mr-12">select option</a>
                                        <a href="{{ route('shop.page') }}" class="mr-10 action"><img
                                                src="{{ asset('public/frontend/assets/images/icon/cart.png') }}"
                                                alt="" /></a>
                                        <a href="{{ route('shop.page') }}" class="action"><img
                                                src="{{ asset('public/frontend/assets/images/icon/hear.png') }}"
                                                alt="" /></a>
                                    </div>
                                </div>
                                <div class="product-4">
                                    <div class="image">
                                        <img src="{{ asset('public/frontend/assets/images/common/item_60.png') }}"
                                            alt="" />
                                        <p class="price">
                                            220gr / 600 cal <span class="pl-15">$5.25</span>
                                        </p>
                                    </div>
                                    <h5>Triple Cheeseburger</h5>
                                    <p class="desc">
                                        Smoked brisket, tender ribs, smoked sausage, bacon &
                                        cheddar with lettuce, tomato, house BBQ. tomato sauce,
                                        eggplant, zucchini.
                                    </p>
                                    <div class="flex">
                                        <a href="{{ route('shop.page') }}" class="tf-button mr-12">select option</a>
                                        <a href="{{ route('shop.page') }}" class="mr-10 action"><img
                                                src="{{ asset('public/frontend/assets/images/icon/cart.png') }}"
                                                alt="" /></a>
                                        <a href="{{ route('shop.page') }}" class="action"><img
                                                src="{{ asset('public/frontend/assets/images/icon/hear.png') }}"
                                                alt="" /></a>
                                    </div>
                                </div>
                            </div>
                            <div class="content-inner">
                                <div class="product-4">
                                    <div class="image">
                                        <img src="{{ asset('public/frontend/assets/images/common/item_55.png') }}"
                                            alt="" />
                                        <p class="price">
                                            220gr / 600 cal <span class="pl-15">$4.25</span>
                                        </p>
                                    </div>
                                    <h5>Bacon Burger</h5>
                                    <p class="desc">
                                        Smoked brisket, tender ribs, smoked sausage, bacon &
                                        cheddar with lettuce, tomato, house BBQ. tomato sauce,
                                        eggplant, zucchini.
                                    </p>
                                    <div class="flex">
                                        <a href="{{ route('shop.page') }}" class="tf-button mr-12">select option</a>
                                        <a href="{{ route('shop.page') }}" class="mr-10 action"><img
                                                src="{{ asset('public/frontend/assets/images/icon/cart.png') }}"
                                                alt="" /></a>
                                        <a href="{{ route('shop.page') }}" class="action"><img
                                                src="{{ asset('public/frontend/assets/images/icon/hear.png') }}"
                                                alt="" /></a>
                                    </div>
                                </div>
                                <div class="product-4">
                                    <div class="image">
                                        <div class="flex info">
                                            <a href="{{ route('shop.page') }}" class="sale">Sale!</a>
                                        </div>
                                        <a href="#"></a>
                                        <img src="{{ asset('public/frontend/assets/images/common/item_56.png') }}"
                                            alt="" />
                                        <p class="price">
                                            220gr / 600 cal
                                            <span class="pl-15">$6 <span>$8.00</span></span>
                                        </p>
                                    </div>
                                    <h5>BBQ Chicken Breast</h5>
                                    <p class="desc">
                                        Smoked brisket, tender ribs, smoked sausage, bacon &
                                        cheddar with lettuce, tomato, house BBQ. tomato sauce,
                                        eggplant, zucchini.
                                    </p>
                                    <div class="flex">
                                        <a href="{{ route('shop.page') }}" class="tf-button mr-12">select option</a>
                                        <a href="{{ route('shop.page') }}" class="mr-10 action"><img
                                                src="{{ asset('public/frontend/assets/images/icon/cart.png') }}"
                                                alt="" /></a>
                                        <a href="{{ route('shop.page') }}" class="action"><img
                                                src="{{ asset('public/frontend/assets/images/icon/hear.png') }}"
                                                alt="" /></a>
                                    </div>
                                </div>
                                <div class="product-4">
                                    <div class="image">
                                        <div class="flex info">
                                            <a href="#" class="recommended">Recommended</a>
                                        </div>
                                        <img src="{{ asset('public/frontend/assets/images/common/item_57.png') }}"
                                            alt="" />
                                        <p class="price">
                                            220gr / 600 cal <span class="pl-15">$5.25</span>
                                        </p>
                                    </div>
                                    <h5>Fresh School Burger</h5>
                                    <p class="desc">
                                        Smoked brisket, tender ribs, smoked sausage, bacon &
                                        cheddar with lettuce, tomato, house BBQ. tomato sauce,
                                        eggplant, zucchini.
                                    </p>
                                    <div class="flex">
                                        <a href="{{ route('shop.page') }}" class="tf-button mr-12">select option</a>
                                        <a href="{{ route('shop.page') }}" class="mr-10 action"><img
                                                src="{{ asset('public/frontend/assets/images/icon/cart.png') }}"
                                                alt="" /></a>
                                        <a href="{{ route('shop.page') }}" class="action"><img
                                                src="{{ asset('public/frontend/assets/images/icon/hear.png') }}"
                                                alt="" /></a>
                                    </div>
                                </div>

                                <div class="product-4">
                                    <div class="image">
                                        <div class="flex info">
                                            <a href="{{ route('shop.page') }}" class="seasonal">Seasonal</a>
                                            <a href="{{ route('shop.page') }}" class="new">New</a>
                                        </div>
                                        <img src="{{ asset('public/frontend/assets/images/common/item_58.png') }}"
                                            alt="" />
                                        <p class="price">
                                            220gr / 600 cal <span class="pl-15">$4.25</span>
                                        </p>
                                    </div>
                                    <h5>Specialty of the House</h5>
                                    <p class="desc">
                                        Smoked brisket, tender ribs, smoked sausage, bacon &
                                        cheddar with lettuce, tomato, house BBQ. tomato sauce,
                                        eggplant, zucchini.
                                    </p>
                                    <div class="flex">
                                        <a href="{{ route('shop.page') }}" class="tf-button mr-12">select option</a>
                                        <a href="{{ route('shop.page') }}" class="mr-10 action"><img
                                                src="{{ asset('public/frontend/assets/images/icon/cart.png') }}"
                                                alt="" /></a>
                                        <a href="{{ route('shop.page') }}" class="action"><img
                                                src="{{ asset('public/frontend/assets/images/icon/hear.png') }}"
                                                alt="" /></a>
                                    </div>
                                </div>
                                <div class="product-4">
                                    <div class="image">
                                        <img src="{{ asset('public/frontend/assets/images/common/item_59.png') }}"
                                            alt="" />
                                        <p class="price">
                                            220gr / 600 cal <span class="pl-15">$6 </span>
                                        </p>
                                    </div>
                                    <h5>Burger Quattro Stagioni</h5>
                                    <p class="desc">
                                        Smoked brisket, tender ribs, smoked sausage, bacon &
                                        cheddar with lettuce, tomato, house BBQ. tomato sauce,
                                        eggplant, zucchini.
                                    </p>
                                    <div class="flex">
                                        <a href="{{ route('shop.page') }}" class="tf-button mr-12">select option</a>
                                        <a href="{{ route('shop.page') }}" class="mr-10 action"><img
                                                src="{{ asset('public/frontend/assets/images/icon/cart.png') }}"
                                                alt="" /></a>
                                        <a href="{{ route('shop.page') }}" class="action"><img
                                                src="{{ asset('public/frontend/assets/images/icon/hear.png') }}"
                                                alt="" /></a>
                                    </div>
                                </div>
                                <div class="product-4">
                                    <div class="image">
                                        <img src="{{ asset('public/frontend/assets/images/common/item_60.png') }}"
                                            alt="" />
                                        <p class="price">
                                            220gr / 600 cal <span class="pl-15">$5.25</span>
                                        </p>
                                    </div>
                                    <h5>Triple Cheeseburger</h5>
                                    <p class="desc">
                                        Smoked brisket, tender ribs, smoked sausage, bacon &
                                        cheddar with lettuce, tomato, house BBQ. tomato sauce,
                                        eggplant, zucchini.
                                    </p>
                                    <div class="flex">
                                        <a href="{{ route('shop.page') }}" class="tf-button mr-12">select option</a>
                                        <a href="{{ route('shop.page') }}" class="mr-10 action"><img
                                                src="{{ asset('public/frontend/assets/images/icon/cart.png') }}"
                                                alt="" /></a>
                                        <a href="{{ route('shop.page') }}" class="action"><img
                                                src="{{ asset('public/frontend/assets/images/icon/hear.png') }}"
                                                alt="" /></a>
                                    </div>
                                </div>
                            </div>
                            <div class="content-inner">
                                <div class="product-4">
                                    <div class="image">
                                        <img src="{{ asset('public/frontend/assets/images/common/item_55.png') }}"
                                            alt="" />
                                        <p class="price">
                                            220gr / 600 cal <span class="pl-15">$4.25</span>
                                        </p>
                                    </div>
                                    <h5>Bacon Burger</h5>
                                    <p class="desc">
                                        Smoked brisket, tender ribs, smoked sausage, bacon &
                                        cheddar with lettuce, tomato, house BBQ. tomato sauce,
                                        eggplant, zucchini.
                                    </p>
                                    <div class="flex">
                                        <a href="{{ route('shop.page') }}" class="tf-button mr-12">select option</a>
                                        <a href="{{ route('shop.page') }}" class="mr-10 action"><img
                                                src="{{ asset('public/frontend/assets/images/icon/cart.png') }}"
                                                alt="" /></a>
                                        <a href="{{ route('shop.page') }}" class="action"><img
                                                src="{{ asset('public/frontend/assets/images/icon/hear.png') }}"
                                                alt="" /></a>
                                    </div>
                                </div>
                                <div class="product-4">
                                    <div class="image">
                                        <div class="flex info">
                                            <a href="{{ route('shop.page') }}" class="sale">Sale!</a>
                                        </div>
                                        <a href="#"></a>
                                        <img src="{{ asset('public/frontend/assets/images/common/item_56.png') }}"
                                            alt="" />
                                        <p class="price">
                                            220gr / 600 cal
                                            <span class="pl-15">$6 <span>$8.00</span></span>
                                        </p>
                                    </div>
                                    <h5>BBQ Chicken Breast</h5>
                                    <p class="desc">
                                        Smoked brisket, tender ribs, smoked sausage, bacon &
                                        cheddar with lettuce, tomato, house BBQ. tomato sauce,
                                        eggplant, zucchini.
                                    </p>
                                    <div class="flex">
                                        <a href="{{ route('shop.page') }}" class="tf-button mr-12">select option</a>
                                        <a href="{{ route('shop.page') }}" class="mr-10 action"><img
                                                src="{{ asset('public/frontend/assets/images/icon/cart.png') }}"
                                                alt="" /></a>
                                        <a href="{{ route('shop.page') }}" class="action"><img
                                                src="{{ asset('public/frontend/assets/images/icon/hear.png') }}"
                                                alt="" /></a>
                                    </div>
                                </div>
                                <div class="product-4">
                                    <div class="image">
                                        <div class="flex info">
                                            <a href="#" class="recommended">Recommended</a>
                                        </div>
                                        <img src="{{ asset('public/frontend/assets/images/common/item_57.png') }}"
                                            alt="" />
                                        <p class="price">
                                            220gr / 600 cal <span class="pl-15">$5.25</span>
                                        </p>
                                    </div>
                                    <h5>Fresh School Burger</h5>
                                    <p class="desc">
                                        Smoked brisket, tender ribs, smoked sausage, bacon &
                                        cheddar with lettuce, tomato, house BBQ. tomato sauce,
                                        eggplant, zucchini.
                                    </p>
                                    <div class="flex">
                                        <a href="{{ route('shop.page') }}" class="tf-button mr-12">select option</a>
                                        <a href="{{ route('shop.page') }}" class="mr-10 action"><img
                                                src="{{ asset('public/frontend/assets/images/icon/cart.png') }}"
                                                alt="" /></a>
                                        <a href="{{ route('shop.page') }}" class="action"><img
                                                src="{{ asset('public/frontend/assets/images/icon/hear.png') }}"
                                                alt="" /></a>
                                    </div>
                                </div>

                                <div class="product-4">
                                    <div class="image">
                                        <div class="flex info">
                                            <a href="{{ route('shop.page') }}" class="seasonal">Seasonal</a>
                                            <a href="{{ route('shop.page') }}" class="new">New</a>
                                        </div>
                                        <img src="{{ asset('public/frontend/assets/images/common/item_58.png') }}"
                                            alt="" />
                                        <p class="price">
                                            220gr / 600 cal <span class="pl-15">$4.25</span>
                                        </p>
                                    </div>
                                    <h5>Specialty of the House</h5>
                                    <p class="desc">
                                        Smoked brisket, tender ribs, smoked sausage, bacon &
                                        cheddar with lettuce, tomato, house BBQ. tomato sauce,
                                        eggplant, zucchini.
                                    </p>
                                    <div class="flex">
                                        <a href="{{ route('shop.page') }}" class="tf-button mr-12">select option</a>
                                        <a href="{{ route('shop.page') }}" class="mr-10 action"><img
                                                src="{{ asset('public/frontend/assets/images/icon/cart.png') }}"
                                                alt="" /></a>
                                        <a href="{{ route('shop.page') }}" class="action"><img
                                                src="{{ asset('public/frontend/assets/images/icon/hear.png') }}"
                                                alt="" /></a>
                                    </div>
                                </div>
                                <div class="product-4">
                                    <div class="image">
                                        <img src="{{ asset('public/frontend/assets/images/common/item_59.png') }}"
                                            alt="" />
                                        <p class="price">
                                            220gr / 600 cal <span class="pl-15">$6 </span>
                                        </p>
                                    </div>
                                    <h5>Burger Quattro Stagioni</h5>
                                    <p class="desc">
                                        Smoked brisket, tender ribs, smoked sausage, bacon &
                                        cheddar with lettuce, tomato, house BBQ. tomato sauce,
                                        eggplant, zucchini.
                                    </p>
                                    <div class="flex">
                                        <a href="{{ route('shop.page') }}" class="tf-button mr-12">select option</a>
                                        <a href="{{ route('shop.page') }}" class="mr-10 action"><img
                                                src="{{ asset('public/frontend/assets/images/icon/cart.png') }}"
                                                alt="" /></a>
                                        <a href="{{ route('shop.page') }}" class="action"><img
                                                src="{{ asset('public/frontend/assets/images/icon/hear.png') }}"
                                                alt="" /></a>
                                    </div>
                                </div>
                                <div class="product-4">
                                    <div class="image">
                                        <img src="{{ asset('public/frontend/assets/images/common/item_60.png') }}"
                                            alt="" />
                                        <p class="price">
                                            220gr / 600 cal <span class="pl-15">$5.25</span>
                                        </p>
                                    </div>
                                    <h5>Triple Cheeseburger</h5>
                                    <p class="desc">
                                        Smoked brisket, tender ribs, smoked sausage, bacon &
                                        cheddar with lettuce, tomato, house BBQ. tomato sauce,
                                        eggplant, zucchini.
                                    </p>
                                    <div class="flex">
                                        <a href="{{ route('shop.page') }}" class="tf-button mr-12">select option</a>
                                        <a href="{{ route('shop.page') }}" class="mr-10 action"><img
                                                src="{{ asset('public/frontend/assets/images/icon/cart.png') }}"
                                                alt="" /></a>
                                        <a href="{{ route('shop.page') }}" class="action"><img
                                                src="{{ asset('public/frontend/assets/images/icon/hear.png') }}"
                                                alt="" /></a>
                                    </div>
                                </div>
                            </div>
                            <div class="content-inner">
                                <div class="product-4">
                                    <div class="image">
                                        <img src="{{ asset('public/frontend/assets/images/common/item_55.png') }}"
                                            alt="" />
                                        <p class="price">
                                            220gr / 600 cal <span class="pl-15">$4.25</span>
                                        </p>
                                    </div>
                                    <h5>Bacon Burger</h5>
                                    <p class="desc">
                                        Smoked brisket, tender ribs, smoked sausage, bacon &
                                        cheddar with lettuce, tomato, house BBQ. tomato sauce,
                                        eggplant, zucchini.
                                    </p>
                                    <div class="flex">
                                        <a href="{{ route('shop.page') }}" class="tf-button mr-12">select option</a>
                                        <a href="{{ route('shop.page') }}" class="mr-10 action"><img
                                                src="{{ asset('public/frontend/assets/images/icon/cart.png') }}"
                                                alt="" /></a>
                                        <a href="{{ route('shop.page') }}" class="action"><img
                                                src="{{ asset('public/frontend/assets/images/icon/hear.png') }}"
                                                alt="" /></a>
                                    </div>
                                </div>
                                <div class="product-4">
                                    <div class="image">
                                        <div class="flex info">
                                            <a href="{{ route('shop.page') }}" class="sale">Sale!</a>
                                        </div>
                                        <a href="#"></a>
                                        <img src="{{ asset('public/frontend/assets/images/common/item_56.png') }}"
                                            alt="" />
                                        <p class="price">
                                            220gr / 600 cal
                                            <span class="pl-15">$6 <span>$8.00</span></span>
                                        </p>
                                    </div>
                                    <h5>BBQ Chicken Breast</h5>
                                    <p class="desc">
                                        Smoked brisket, tender ribs, smoked sausage, bacon &
                                        cheddar with lettuce, tomato, house BBQ. tomato sauce,
                                        eggplant, zucchini.
                                    </p>
                                    <div class="flex">
                                        <a href="{{ route('shop.page') }}" class="tf-button mr-12">select option</a>
                                        <a href="{{ route('shop.page') }}" class="mr-10 action"><img
                                                src="{{ asset('public/frontend/assets/images/icon/cart.png') }}"
                                                alt="" /></a>
                                        <a href="{{ route('shop.page') }}" class="action"><img
                                                src="{{ asset('public/frontend/assets/images/icon/hear.png') }}"
                                                alt="" /></a>
                                    </div>
                                </div>
                                <div class="product-4">
                                    <div class="image">
                                        <div class="flex info">
                                            <a href="#" class="recommended">Recommended</a>
                                        </div>
                                        <img src="{{ asset('public/frontend/assets/images/common/item_57.png') }}"
                                            alt="" />
                                        <p class="price">
                                            220gr / 600 cal <span class="pl-15">$5.25</span>
                                        </p>
                                    </div>
                                    <h5>Fresh School Burger</h5>
                                    <p class="desc">
                                        Smoked brisket, tender ribs, smoked sausage, bacon &
                                        cheddar with lettuce, tomato, house BBQ. tomato sauce,
                                        eggplant, zucchini.
                                    </p>
                                    <div class="flex">
                                        <a href="{{ route('shop.page') }}" class="tf-button mr-12">select option</a>
                                        <a href="{{ route('shop.page') }}" class="mr-10 action"><img
                                                src="{{ asset('public/frontend/assets/images/icon/cart.png') }}"
                                                alt="" /></a>
                                        <a href="{{ route('shop.page') }}" class="action"><img
                                                src="{{ asset('public/frontend/assets/images/icon/hear.png') }}"
                                                alt="" /></a>
                                    </div>
                                </div>

                                <div class="product-4">
                                    <div class="image">
                                        <div class="flex info">
                                            <a href="{{ route('shop.page') }}" class="seasonal">Seasonal</a>
                                            <a href="{{ route('shop.page') }}" class="new">New</a>
                                        </div>
                                        <img src="{{ asset('public/frontend/assets/images/common/item_58.png') }}"
                                            alt="" />
                                        <p class="price">
                                            220gr / 600 cal <span class="pl-15">$4.25</span>
                                        </p>
                                    </div>
                                    <h5>Specialty of the House</h5>
                                    <p class="desc">
                                        Smoked brisket, tender ribs, smoked sausage, bacon &
                                        cheddar with lettuce, tomato, house BBQ. tomato sauce,
                                        eggplant, zucchini.
                                    </p>
                                    <div class="flex">
                                        <a href="{{ route('shop.page') }}" class="tf-button mr-12">select option</a>
                                        <a href="{{ route('shop.page') }}" class="mr-10 action"><img
                                                src="{{ asset('public/frontend/assets/images/icon/cart.png') }}"
                                                alt="" /></a>
                                        <a href="{{ route('shop.page') }}" class="action"><img
                                                src="{{ asset('public/frontend/assets/images/icon/hear.png') }}"
                                                alt="" /></a>
                                    </div>
                                </div>
                                <div class="product-4">
                                    <div class="image">
                                        <img src="{{ asset('public/frontend/assets/images/common/item_59.png') }}"
                                            alt="" />
                                        <p class="price">
                                            220gr / 600 cal <span class="pl-15">$6 </span>
                                        </p>
                                    </div>
                                    <h5>Burger Quattro Stagioni</h5>
                                    <p class="desc">
                                        Smoked brisket, tender ribs, smoked sausage, bacon &
                                        cheddar with lettuce, tomato, house BBQ. tomato sauce,
                                        eggplant, zucchini.
                                    </p>
                                    <div class="flex">
                                        <a href="{{ route('shop.page') }}" class="tf-button mr-12">select option</a>
                                        <a href="{{ route('shop.page') }}" class="mr-10 action"><img
                                                src="{{ asset('public/frontend/assets/images/icon/cart.png') }}"
                                                alt="" /></a>
                                        <a href="{{ route('shop.page') }}" class="action"><img
                                                src="{{ asset('public/frontend/assets/images/icon/hear.png') }}"
                                                alt="" /></a>
                                    </div>
                                </div>
                                <div class="product-4">
                                    <div class="image">
                                        <img src="{{ asset('public/frontend/assets/images/common/item_60.png') }}"
                                            alt="" />
                                        <p class="price">
                                            220gr / 600 cal <span class="pl-15">$5.25</span>
                                        </p>
                                    </div>
                                    <h5>Triple Cheeseburger</h5>
                                    <p class="desc">
                                        Smoked brisket, tender ribs, smoked sausage, bacon &
                                        cheddar with lettuce, tomato, house BBQ. tomato sauce,
                                        eggplant, zucchini.
                                    </p>
                                    <div class="flex">
                                        <a href="{{ route('shop.page') }}" class="tf-button mr-12">select option</a>
                                        <a href="{{ route('shop.page') }}" class="mr-10 action"><img
                                                src="{{ asset('public/frontend/assets/images/icon/cart.png') }}"
                                                alt="" /></a>
                                        <a href="{{ route('shop.page') }}" class="action"><img
                                                src="{{ asset('public/frontend/assets/images/icon/hear.png') }}"
                                                alt="" /></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
