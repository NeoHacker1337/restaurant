@extends('frontend.layouts.master')
@section('content')
    <section class="page-title relative mt-122">
        <div class="container w_1890">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-title-inner hidden">
                        <div class="bg-page-title-inner">
                            <img class="parallax" src="{{ asset('public/frontend/assets/images/backgroup/page-title_7.jpg') }}" alt="" />
                        </div>
                        <img class="icon_1 wow fadeInLeft" data-wow-delay=".2s"
                            src="{{ asset('public/frontend/assets/images/backgroup/icon_page-title.png') }}" alt="" />
                        <img class="icon_2 wow fadeInRight" data-wow-delay=".2s"
                            src="{{ asset('public/frontend/assets/images/backgroup/icon_2_page-title.png') }}" alt="" />
                        <div class="overlay"></div>
                        <div class="breadcrumb flex flex-column items-center wow fadeIn" data-wow-delay=".2s">
                            <h1 class="title center">Speical Offers</h1>
                            <ul>
                                <li><a href="{{ url('/')}}">Home</a></li>
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
                                    <span>Speical Offers</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="tf-section pt-118 tf-banner pb-0">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="tf-title left pb-30 wow fadeInUp" data-wow-delay=".3s">
                        <h2 class="mb-20">Today's Special Offer</h2>
                        <p>
                            Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet.
                            Aenean sollicitudin, loremendum nisi elit.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="tf-section pt-75 pb-0">
        <div class="container w_1890 relative flex flex-column justify-center">
            <div class="swiper-btn btn-next-team btn-next-product-5 r-30">
                <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"
                    width="512" height="512" x="0" y="0" viewBox="0 0 24 24" style="enable-background: new 0 0 512 512"
                    xml:space="preserve">
                    <g>
                        <path fill="#0c0c0c" fill-rule="evenodd"
                            d="M12.346 7.507a.75.75 0 0 1 1.059-.072l4.588 4a.75.75 0 0 1 0 1.13l-4.588 4a.75.75 0 1 1-.986-1.13l3.08-2.685H6.5a.75.75 0 0 1 0-1.5h8.998l-3.08-2.685a.75.75 0 0 1-.072-1.058z"
                            clip-rule="evenodd" data-original="#000000" class="" opacity="1"></path>
                    </g>
                </svg>
            </div>
            <div class="swiper-btn reverse btn-prev-team l-30">
                <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"
                    width="512" height="512" x="0" y="0" viewBox="0 0 24 24" style="enable-background: new 0 0 512 512"
                    xml:space="preserve">
                    <g>
                        <path fill="#0c0c0c" fill-rule="evenodd"
                            d="M12.346 7.507a.75.75 0 0 1 1.059-.072l4.588 4a.75.75 0 0 1 0 1.13l-4.588 4a.75.75 0 1 1-.986-1.13l3.08-2.685H6.5a.75.75 0 0 1 0-1.5h8.998l-3.08-2.685a.75.75 0 0 1-.072-1.058z"
                            clip-rule="evenodd" data-original="#000000" class="" opacity="1"></path>
                    </g>
                </svg>
            </div>
            <div class="row">
                <div class="col-md-12 wow fadeIn" data-wow-delay=".3s">
                    <div class="sl-product-wrapper style2">
                        <div class="swiper-container team-slider">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="image">
                                        <img class="radius-20" src="{{ asset('public/frontend/assets/images/common/item_47.jpg') }}" alt="" />
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="image">
                                        <img class="radius-20" src="{{ asset('public/frontend/assets/images/common/item_48.jpg') }}" alt="" />
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="image">
                                        <img class="radius-20" src="{{ asset('public/frontend/assets/images/common/item_49.jpg') }}" alt="" />
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="image">
                                        <img class="radius-20" src="{{ asset('public/frontend/assets/images/common/item_50.jpg') }}" alt="" />
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="image">
                                        <img class="radius-20" src="{{ asset('public/frontend/assets/images/common/item_47.jpg') }}" alt="" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="tf-section pt-118 tf-banner pb-0">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="tf-title left mb-75 pb-30 wow fadeInUp" data-wow-delay=".3s">
                        <h2 class="mb-20">Offers For Online Orders</h2>
                        <p>
                            Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet.
                            Aenean sollicitudin, loremendum nisi elit.
                        </p>
                    </div>
                </div>
                <div class="col-lg-5 col-md-12 mb-50 wow fadeInUp" data-wow-delay=".3s">
                    <div class="image h-full">
                        <img class="radius-20 h-full w-full" src="{{ asset('public/frontend/assets/images/common/item_51.jpg') }}" alt="" />
                    </div>
                </div>
                <div class="col-lg-7 col-md-12 wow fadeInUp" data-wow-delay=".5s">
                    <div class="content-offer hidden radius-20 mb-50">
                        <img class="absolute r-0 b-0" src="{{ asset('public/frontend/assets/images/backgroup/layer_5.png') }}" alt="" />
                        <div class="relative">
                            <h4 class="color-3 mb-23 text-spacing-1">
                                Free delivery every Monday
                            </h4>
                            <ul class="ic-list">
                                <li class="mr-50">
                                    <span class="icon"><svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="512" height="512"
                                            x="0" y="0" viewBox="0 0 512 512" style="enable-background: new 0 0 512 512"
                                            xml:space="preserve">
                                            <g>
                                                <path
                                                    d="M256 0c-74.439 0-135 60.561-135 135s60.561 135 135 135 135-60.561 135-135S330.439 0 256 0zM423.966 358.195C387.006 320.667 338.009 300 286 300h-60c-52.008 0-101.006 20.667-137.966 58.195C51.255 395.539 31 444.833 31 497c0 8.284 6.716 15 15 15h420c8.284 0 15-6.716 15-15 0-52.167-20.255-101.461-57.034-138.805z"
                                                    fill="#000000" opacity="1" data-original="#000000"
                                                    class=""></path>
                                            </g>
                                        </svg></span>
                                    <span class="color-3">Participants: All Customers</span>
                                </li>
                                <li>
                                    <span class="icon"><svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="512" height="512"
                                            x="0" y="0" viewBox="0 0 512 512" style="enable-background: new 0 0 512 512"
                                            xml:space="preserve">
                                            <g>
                                                <path
                                                    d="M446 40h-46V16c0-8.836-7.163-16-16-16s-16 7.164-16 16v24H144V16c0-8.836-7.163-16-16-16s-16 7.164-16 16v24H66C29.607 40 0 69.607 0 106v340c0 36.393 29.607 66 66 66h380c36.393 0 66-29.607 66-66V106c0-36.393-29.607-66-66-66zM66 72h46v16c0 8.836 7.163 16 16 16s16-7.164 16-16V72h224v16c0 8.836 7.163 16 16 16s16-7.164 16-16V72h46c18.748 0 34 15.252 34 34v38H32v-38c0-18.748 15.252-34 34-34zm380 408H66c-18.748 0-34-15.252-34-34V176h448v270c0 18.748-15.252 34-34 34z"
                                                    fill="#ffffff" opacity="1" data-original="#000000"
                                                    class=""></path>
                                            </g>
                                        </svg></span>
                                    <span class="color-3">Time: Every Monday</span>
                                </li>
                            </ul>
                            <p class="mb-43">
                                We are lucky to live in a glorious age that gives us
                                everything we could ask for as a human race. What more could
                                you need when you have meat covered in cheese nestled
                                between bread. rom smashed patties at.
                            </p>
                            <div class="flex">
                                <a href="#" class="tf-button mr-10">READ MORE</a>
                                <a href="{{ route('order.page') }}" class="tf-button style2">order now</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-7 col-md-12 wow fadeInUp" data-wow-delay=".3s">
                    <div class="content-offer hidden radius-20 mb-50">
                        <div class="relative">
                            <h4 class="color-3 mb-23 text-spacing-1">
                                10% discount on total bill
                            </h4>
                            <ul class="ic-list">
                                <li class="mr-50">
                                    <span class="icon"><svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="512" height="512"
                                            x="0" y="0" viewBox="0 0 512 512" style="enable-background: new 0 0 512 512"
                                            xml:space="preserve">
                                            <g>
                                                <path
                                                    d="M256 0c-74.439 0-135 60.561-135 135s60.561 135 135 135 135-60.561 135-135S330.439 0 256 0zM423.966 358.195C387.006 320.667 338.009 300 286 300h-60c-52.008 0-101.006 20.667-137.966 58.195C51.255 395.539 31 444.833 31 497c0 8.284 6.716 15 15 15h420c8.284 0 15-6.716 15-15 0-52.167-20.255-101.461-57.034-138.805z"
                                                    fill="#000000" opacity="1" data-original="#000000"
                                                    class=""></path>
                                            </g>
                                        </svg></span>
                                    <span class="color-3">Participants: All Customers</span>
                                </li>
                                <li>
                                    <span class="icon"><svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="512" height="512"
                                            x="0" y="0" viewBox="0 0 512 512" style="enable-background: new 0 0 512 512"
                                            xml:space="preserve">
                                            <g>
                                                <path
                                                    d="M446 40h-46V16c0-8.836-7.163-16-16-16s-16 7.164-16 16v24H144V16c0-8.836-7.163-16-16-16s-16 7.164-16 16v24H66C29.607 40 0 69.607 0 106v340c0 36.393 29.607 66 66 66h380c36.393 0 66-29.607 66-66V106c0-36.393-29.607-66-66-66zM66 72h46v16c0 8.836 7.163 16 16 16s16-7.164 16-16V72h224v16c0 8.836 7.163 16 16 16s16-7.164 16-16V72h46c18.748 0 34 15.252 34 34v38H32v-38c0-18.748 15.252-34 34-34zm380 408H66c-18.748 0-34-15.252-34-34V176h448v270c0 18.748-15.252 34-34 34z"
                                                    fill="#ffffff" opacity="1" data-original="#000000"
                                                    class=""></path>
                                            </g>
                                        </svg></span>
                                    <span class="color-3">Time: Every Monday</span>
                                </li>
                            </ul>
                            <p class="mb-43">
                                We are lucky to live in a glorious age that gives us
                                everything we could ask for as a human race. What more could
                                you need when you have meat covered in cheese nestled
                                between bread. rom smashed patties at.
                            </p>
                            <div class="flex">
                                <a href="#" class="tf-button mr-10">READ MORE</a>
                                <a href="{{ route('order.page') }}" class="tf-button style2">order now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-12 mb-50 wow fadeInUp" data-wow-delay=".5s">
                    <div class="image h-full">
                        <img class="radius-20 h-full w-full" src="{{ asset('public/frontend/assets/images/common/item_53.jpg') }}" alt="" />
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="tf-section tf-banner pt-67 pb-75">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="tf-title left mb-75 pb-30 wow fadeInUp" data-wow-delay=".3s">
                        <h2 class="mb-20">Offers For Meals At Restaurants</h2>
                        <p>
                            Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet.
                            Aenean sollicitudin, loremendum nisi elit.
                        </p>
                    </div>
                </div>
                <div class="col-lg-5 col-md-12 mb-50 wow fadeInUp" data-wow-delay=".3s">
                    <div class="image h-full">
                        <img class="radius-20 h-full w-full" src="{{ asset('public/frontend/assets/images/common/item_54.jpg') }}" alt="" />
                    </div>
                </div>
                <div class="col-lg-7 col-md-12 wow fadeInUp" data-wow-delay=".5s">
                    <div class="content-offer hidden radius-20 mb-50">
                        <img class="absolute r-0 b-0" src="{{ asset('public/frontend/assets/images/backgroup/layer_5.png') }}" alt="" />
                        <div class="relative">
                            <h4 class="color-3 mb-23 text-spacing-1">Super Combo $54</h4>
                            <ul class="ic-list">
                                <li class="mr-50">
                                    <span class="icon"><svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="512" height="512"
                                            x="0" y="0" viewBox="0 0 512 512" style="enable-background: new 0 0 512 512"
                                            xml:space="preserve">
                                            <g>
                                                <path
                                                    d="M256 0c-74.439 0-135 60.561-135 135s60.561 135 135 135 135-60.561 135-135S330.439 0 256 0zM423.966 358.195C387.006 320.667 338.009 300 286 300h-60c-52.008 0-101.006 20.667-137.966 58.195C51.255 395.539 31 444.833 31 497c0 8.284 6.716 15 15 15h420c8.284 0 15-6.716 15-15 0-52.167-20.255-101.461-57.034-138.805z"
                                                    fill="#000000" opacity="1" data-original="#000000"
                                                    class=""></path>
                                            </g>
                                        </svg></span>
                                    <span class="color-3">Participants: All Customers</span>
                                </li>
                                <li>
                                    <span class="icon"><svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="512" height="512"
                                            x="0" y="0" viewBox="0 0 512 512" style="enable-background: new 0 0 512 512"
                                            xml:space="preserve">
                                            <g>
                                                <path
                                                    d="M446 40h-46V16c0-8.836-7.163-16-16-16s-16 7.164-16 16v24H144V16c0-8.836-7.163-16-16-16s-16 7.164-16 16v24H66C29.607 40 0 69.607 0 106v340c0 36.393 29.607 66 66 66h380c36.393 0 66-29.607 66-66V106c0-36.393-29.607-66-66-66zM66 72h46v16c0 8.836 7.163 16 16 16s16-7.164 16-16V72h224v16c0 8.836 7.163 16 16 16s16-7.164 16-16V72h46c18.748 0 34 15.252 34 34v38H32v-38c0-18.748 15.252-34 34-34zm380 408H66c-18.748 0-34-15.252-34-34V176h448v270c0 18.748-15.252 34-34 34z"
                                                    fill="#ffffff" opacity="1" data-original="#000000"
                                                    class=""></path>
                                            </g>
                                        </svg></span>
                                    <span class="color-3">Time: Every Monday</span>
                                </li>
                            </ul>
                            <p class="mb-16">
                                We are lucky to live in a glorious age that gives us
                                everything we could ask for as a human race. What more could
                                you need when you have meat covered in cheese nestled
                                between bread. rom smashed patties at.
                            </p>
                            <ul class="list">
                                <li>1. Large Pizza</li>
                                <li>1. Spaghetti with Steak</li>
                                <li>1. Spicy chicken salad</li>
                                <li>1. Fried squid with french fries</li>
                                <li>1. Garlic bread</li>
                                <li>1. Burger Beef</li>
                            </ul>
                            <div class="flex">
                                <a href="#" class="tf-button mr-10">READ MORE</a>
                                <a href="{{ route('order.page') }}" class="tf-button style2">order now</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-7 col-md-12 wow fadeInUp" data-wow-delay=".3s">
                    <div class="content-offer hidden radius-20 mb-50">
                        <div class="relative">
                            <h4 class="color-3 mb-23 text-spacing-1">Super Combo $60</h4>
                            <ul class="ic-list">
                                <li class="mr-50">
                                    <span class="icon"><svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="512" height="512"
                                            x="0" y="0" viewBox="0 0 512 512" style="enable-background: new 0 0 512 512"
                                            xml:space="preserve">
                                            <g>
                                                <path
                                                    d="M256 0c-74.439 0-135 60.561-135 135s60.561 135 135 135 135-60.561 135-135S330.439 0 256 0zM423.966 358.195C387.006 320.667 338.009 300 286 300h-60c-52.008 0-101.006 20.667-137.966 58.195C51.255 395.539 31 444.833 31 497c0 8.284 6.716 15 15 15h420c8.284 0 15-6.716 15-15 0-52.167-20.255-101.461-57.034-138.805z"
                                                    fill="#000000" opacity="1" data-original="#000000"
                                                    class=""></path>
                                            </g>
                                        </svg></span>
                                    <span class="color-3">Participants: All Customers</span>
                                </li>
                                <li>
                                    <span class="icon"><svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="512" height="512"
                                            x="0" y="0" viewBox="0 0 512 512" style="enable-background: new 0 0 512 512"
                                            xml:space="preserve">
                                            <g>
                                                <path
                                                    d="M446 40h-46V16c0-8.836-7.163-16-16-16s-16 7.164-16 16v24H144V16c0-8.836-7.163-16-16-16s-16 7.164-16 16v24H66C29.607 40 0 69.607 0 106v340c0 36.393 29.607 66 66 66h380c36.393 0 66-29.607 66-66V106c0-36.393-29.607-66-66-66zM66 72h46v16c0 8.836 7.163 16 16 16s16-7.164 16-16V72h224v16c0 8.836 7.163 16 16 16s16-7.164 16-16V72h46c18.748 0 34 15.252 34 34v38H32v-38c0-18.748 15.252-34 34-34zm380 408H66c-18.748 0-34-15.252-34-34V176h448v270c0 18.748-15.252 34-34 34z"
                                                    fill="#ffffff" opacity="1" data-original="#000000"
                                                    class=""></path>
                                            </g>
                                        </svg></span>
                                    <span class="color-3">Time: Every Monday</span>
                                </li>
                            </ul>
                            <p class="mb-16">
                                We are lucky to live in a glorious age that gives us
                                everything we could ask for as a human race. What more could
                                you need when you have meat covered in cheese nestled
                                between bread. rom smashed patties at.
                            </p>
                            <ul class="list">
                                <li>1. Large Pizza</li>
                                <li>1. Spaghetti with Steak</li>
                                <li>1. Spicy chicken salad</li>
                                <li>1. Fried squid with french fries</li>
                                <li>1. Garlic bread</li>
                                <li>1. Burger Beef</li>
                            </ul>
                            <div class="flex">
                                <a href="#" class="tf-button mr-10">READ MORE</a>
                                <a href="{{ route('order.page') }}" class="tf-button style2">order now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-12 mb-50 wow fadeInUp" data-wow-delay=".5s">
                    <div class="image h-full">
                        <img class="radius-20 h-full w-full" src="{{ asset('public/frontend/assets/images/common/item_52.jpg') }}" alt="" />
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
