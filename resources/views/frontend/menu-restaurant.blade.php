@extends('frontend.layouts.master')
@section('content')
    <section class="page-title relative mt-122">
        <div class="container w_1890">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-title-inner style4 hidden">
                        <div class="bg-page-title-inner">
                            <img class="parallax" src="{{ asset('public/frontend/assets/images/backgroup/page-title_4.jpg') }}" alt="" />
                        </div>
                        <img class="icon_1 wow fadeInLeft" data-wow-delay=".2s"
                            src="{{ asset('public/frontend/assets/images/backgroup/icon_page-title.png') }}" alt="" />
                        <img class="icon_2 wow fadeInRight" data-wow-delay=".2s"
                            src="{{ asset('public/frontend/assets/images/backgroup/icon_2_page-title.png') }}" alt="" />
                        <div class="overlay"></div>
                        <div class="breadcrumb flex flex-column items-center wow fadeIn" data-wow-delay=".2s">
                            <h1 class="title center">Our Menu Restaurant</h1>
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
                                    <span>Our Menu Restaurant</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="tf-section pt-105 pb-72">
        <div class="container w_1374 relative flex flex-column justify-center">
            <div class="swiper-btn btn-next-product-5 r-0">
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
            <div class="swiper-btn reverse btn-prev-product-5 l-0">
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
                    <div class="sl-product-wrapper">
                        <div class="swiper-container sl-product-5 visible">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="product-box">
                                        <div class="overlay">
                                            <img class="radius-20" src="{{ asset('public/frontend/assets/images/backgroup/bg-box-6.jpg') }}"
                                                alt="" />
                                        </div>
                                        <div class="content relative">
                                            <p class="uppercase color-main mb8 text-spacing-1_5">
                                                Speical food
                                            </p>
                                            <h2 class="text-spacing-1 mb-24">
                                                Burger Beef Cheese
                                            </h2>
                                            <p class="mb-34 white pr-55">
                                                100 % Grass-fed beef patty, cheddar cheese, special
                                                sauce, tomato, pickles, lettuce, sesame seed bun
                                            </p>
                                            <div class="flex">
                                                <ul class="flex items-center ml--20">
                                                    <li class="style white">220 Gr / 600 Cal</li>
                                                    <li class="color-main">$12.00</li>
                                                    <li>
                                                        <a href="#" class="icon"><i class="fal fa-plus"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="product-box">
                                        <div class="overlay">
                                            <img class="radius-20" src="{{ asset('public/frontend/assets/images/backgroup/bg-box-6.jpg') }}"
                                                alt="" />
                                        </div>
                                        <div class="content relative">
                                            <p class="uppercase color-main mb-20">Speical food</p>
                                            <h2 class="text-spacing-1 mb-25">
                                                Burger Beef Cheese
                                            </h2>
                                            <p class="mb-30 white">
                                                100 % Grass-fed beef patty, cheddar cheese, special
                                                sauce, tomato, pickles, lettuce, sesame seed bun
                                            </p>
                                            <div class="flex">
                                                <ul class="flex items-center">
                                                    <li class="style white">220 Gr / 600 Cal</li>
                                                    <li class="color-main">$12.00</li>
                                                    <li>
                                                        <a href="#" class="icon"><i class="fal fa-plus"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="product-box">
                                        <div class="overlay">
                                            <img class="radius-20" src="{{ asset('public/frontend/assets/images/backgroup/bg-box-6.jpg') }}"
                                                alt="" />
                                        </div>
                                        <div class="content relative">
                                            <p class="uppercase color-main mb-20">Speical food</p>
                                            <h2 class="text-spacing-1 mb-25">
                                                Burger Beef Cheese
                                            </h2>
                                            <p class="mb-30 white">
                                                100 % Grass-fed beef patty, cheddar cheese, special
                                                sauce, tomato, pickles, lettuce, sesame seed bun
                                            </p>
                                            <div class="flex">
                                                <ul class="flex items-center">
                                                    <li class="style white">220 Gr / 600 Cal</li>
                                                    <li class="color-main">$12.00</li>
                                                    <li>
                                                        <a href="#" class="icon"><i class="fal fa-plus"></i></a>
                                                    </li>
                                                </ul>
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

    <section class="pb-100">
        <div class="container">
            <div class="row">
                <div class="col-md-12 wow fadeIn" data-wow-delay=".3s">
                    <div class="flat-tabs">
                        <ul class="menu-tab flex w-full menu-item-box">
                            <li class="active">
                                <div class="item-box-2 style2">
                                    <div class="image mb-10">
                                        <img src="{{ asset('public/frontend/assets/images/common/item_22.png') }}" alt="" />
                                    </div>
                                    <h6 class="center color-3 mb-0">Burgers</h6>
                                </div>
                            </li>
                            <li>
                                <div class="item-box-2 style2">
                                    <div class="image mb-10">
                                        <img src="{{ asset('public/frontend/assets/images/common/item_23.png') }}" alt="" />
                                    </div>
                                    <h6 class="center color-3 mb-0">Sandwich</h6>
                                </div>
                            </li>
                            <li>
                                <div class="item-box-2 style2">
                                    <div class="image mb-10">
                                        <img src="{{ asset('public/frontend/assets/images/common/item_24.png') }}" alt="" />
                                    </div>
                                    <h6 class="center color-3 mb-0">Drinks</h6>
                                </div>
                            </li>
                            <li>
                                <div class="item-box-2 style2">
                                    <div class="image mb-10">
                                        <img src="{{ asset('public/frontend/assets/images/common/item_25.png') }}" alt="" />
                                    </div>
                                    <h6 class="center color-3 mb-0">Appetizer</h6>
                                </div>
                            </li>
                            <li>
                                <div class="item-box-2 style2">
                                    <div class="image mb-10">
                                        <img src="{{ asset('public/frontend/assets/images/common/item_26.png') }}" alt="" />
                                    </div>
                                    <h6 class="center color-3 mb-0">Fried Chicken</h6>
                                </div>
                            </li>
                            <li>
                                <div class="item-box-2 style2">
                                    <div class="image mb-10">
                                        <img src="{{ asset('public/frontend/assets/images/common/item_27.png') }}" alt="" />
                                    </div>
                                    <h6 class="center color-3 mb-0">Salad</h6>
                                </div>
                            </li>
                        </ul>
                        <div class="content-tab">
                            <div class="content-inner active">
                                <div class="product-item-style2 flex items-center">
                                    <div class="icon">
                                        <img src="{{ asset('public/frontend/assets/images/common/item_42.png') }}" alt="" />
                                    </div>
                                    <div class="content">
                                        <div class="top flex items-center mb-8">
                                            <h6 class="color-3 mb-0">Brekkie BBQ Burger</h6>
                                            <span class="pl4 dot">................................</span><span
                                                class="pl4 price">$15.22</span>
                                        </div>
                                        <p class="desc">
                                            Pulled Pork, Beer Braised Brisket, & Quarter Rack of
                                            Ribs served with your choice of side.
                                        </p>
                                        <div class="flex items-center justify-between min-height-31 flex-wrap">
                                            <p class="color-3 pr-15 mobile-mb-10">
                                                220 Gr / 600 Cal
                                            </p>
                                            <div class="flex">
                                                <a href="{{ route('shop.page') }}" class="link-item seasonal mr8">Seasonal</a>
                                                <a href="{{ route('shop.page') }}" class="link-item recommend">Recommended</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-item-style2 flex items-center">
                                    <div class="icon">
                                        <img src="{{ asset('public/frontend/assets/images/common/item_42.png') }}" alt="" />
                                    </div>
                                    <div class="content">
                                        <div class="top flex items-center mb-8">
                                            <h6 class="color-3 mb-0">Brekkie BBQ Burger</h6>
                                            <span class="pl4 dot">................................</span><span
                                                class="pl4 price">$15.22</span>
                                        </div>
                                        <p class="desc">
                                            Pulled Pork, Beer Braised Brisket, & Quarter Rack of
                                            Ribs served with your choice of side.
                                        </p>
                                        <div class="flex items-center justify-between min-height-31 flex-wrap">
                                            <p class="color-3 pr-15 mobile-mb-10">
                                                220 Gr / 600 Cal
                                            </p>
                                            <div class="flex">
                                                <a href="{{ route('shop.page') }}" class="link-item seasonal mr8">Seasonal</a>
                                                <a href="{{ route('shop.page') }}" class="link-item recommend">Recommended</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="product-item-style2 flex items-center">
                                    <div class="icon">
                                        <img src="{{ asset('public/frontend/assets/images/common/item_43.png') }}" alt="" />
                                    </div>
                                    <div class="content">
                                        <div class="top flex items-center mb-8">
                                            <h6 class="color-3 mb-0">Smoked Brisket Sandwich</h6>
                                            <span class="pl4 dot">................................</span><span
                                                class="pl4 price">$23.00</span>
                                        </div>
                                        <p class="desc">
                                            Pulled Pork, Beer Braised Brisket, & Quarter Rack of
                                            Ribs served with your choice of side.
                                        </p>
                                        <div class="flex items-center justify-between min-height-31 flex-wrap">
                                            <p class="color-3 pr-15 mobile-mb-10">
                                                220 Gr / 600 Cal
                                            </p>
                                            <div class="flex">
                                                <a href="#" class="link-item new mr-15">New</a>
                                                <a href="{{ route('shop.page') }}" class="link-item recommend">Recommended</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-item-style2 flex items-center">
                                    <div class="icon">
                                        <img src="{{ asset('public/frontend/assets/images/common/item_43.png') }}" alt="" />
                                    </div>
                                    <div class="content">
                                        <div class="top flex items-center mb-8">
                                            <h6 class="color-3 mb-0">Smoked Brisket Sandwich</h6>
                                            <span class="pl4 dot">................................</span><span
                                                class="pl4 price">$23.00</span>
                                        </div>
                                        <p class="desc">
                                            Pulled Pork, Beer Braised Brisket, & Quarter Rack of
                                            Ribs served with your choice of side.
                                        </p>
                                        <div class="flex items-center justify-between min-height-31 flex-wrap">
                                            <p class="color-3 pr-15 mobile-mb-10">
                                                220 Gr / 600 Cal
                                            </p>
                                            <div class="flex">
                                                <a href="#" class="link-item new mr-15">New</a>
                                                <a href="{{ route('shop.page') }}" class="link-item recommend">Recommended</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="product-item-style2 flex items-center">
                                    <div class="icon">
                                        <img src="{{ asset('public/frontend/assets/images/common/item_44.png') }}" alt="" />
                                    </div>
                                    <div class="content">
                                        <div class="top flex items-center mb-8">
                                            <h6 class="color-3 mb-0">
                                                Ocean Spray Cranberry Juice
                                            </h6>
                                            <span class="pl4 dot">................................</span><span
                                                class="pl4 price">$14.15</span>
                                        </div>
                                        <p class="desc">
                                            Pulled Pork, Beer Braised Brisket, & Quarter Rack of
                                            Ribs served with your choice of side.
                                        </p>
                                        <div class="flex items-center justify-between min-height-31 flex-wrap">
                                            <p class="color-3 pr-15 mobile-mb-10">
                                                220 Gr / 600 Cal
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-item-style2 flex items-center">
                                    <div class="icon">
                                        <img src="{{ asset('public/frontend/assets/images/common/item_44.png') }}" alt="" />
                                    </div>
                                    <div class="content">
                                        <div class="top flex items-center mb-8">
                                            <h6 class="color-3 mb-0 pr4">
                                                Ocean Spray Cranberry Juice
                                            </h6>
                                            <span class="pl4 dot">................................</span><span
                                                class="pl4 price">$14.15</span>
                                        </div>
                                        <p class="desc">
                                            Pulled Pork, Beer Braised Brisket, & Quarter Rack of
                                            Ribs served with your choice of side.
                                        </p>
                                        <div class="flex items-center justify-between min-height-31 flex-wrap">
                                            <p class="color-3 pr-15 mobile-mb-10">
                                                220 Gr / 600 Cal
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="product-item-style2 flex items-center">
                                    <div class="icon">
                                        <img src="{{ asset('public/frontend/assets/images/common/item_45.png') }}" alt="" />
                                    </div>
                                    <div class="content">
                                        <div class="top flex items-center mb-8">
                                            <h6 class="color-3 mb-0 pr4">
                                                Canada Dry Ginger Ale
                                            </h6>
                                            <span class="pl4 dot">................................</span><span
                                                class="pl4 price">$15.00</span>
                                        </div>
                                        <p class="desc">
                                            Pulled Pork, Beer Braised Brisket, & Quarter Rack of
                                            Ribs served with your choice of side.
                                        </p>
                                        <div class="flex items-center justify-between min-height-31 flex-wrap">
                                            <p class="color-3 pr-15 mobile-mb-10">
                                                220 Gr / 600 Cal
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-item-style2 flex items-center">
                                    <div class="icon">
                                        <img src="{{ asset('public/frontend/assets/images/common/item_45.png') }}" alt="" />
                                    </div>
                                    <div class="content">
                                        <div class="top flex items-center mb-8">
                                            <h6 class="color-3 mb-0 pr4">
                                                Canada Dry Ginger Ale
                                            </h6>
                                            <span class="pl4 dot">................................</span><span
                                                class="pl4 price">$15.00</span>
                                        </div>
                                        <p class="desc">
                                            Pulled Pork, Beer Braised Brisket, & Quarter Rack of
                                            Ribs served with your choice of side.
                                        </p>
                                        <div class="flex items-center justify-between min-height-31 flex-wrap">
                                            <p class="color-3 pr-15 mobile-mb-10">
                                                220 Gr / 600 Cal
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="product-item-style2 flex items-center">
                                    <div class="icon">
                                        <img src="{{ asset('public/frontend/assets/images/common/item_46.png') }}" alt="" />
                                    </div>
                                    <div class="content">
                                        <div class="top flex items-center mb-8">
                                            <h6 class="color-3 mb-0">Martinelli's Apple Juice</h6>
                                            <span class="pl4 dot">................................</span><span
                                                class="pl4 price">$16.00</span>
                                        </div>
                                        <p class="desc">
                                            Pulled Pork, Beer Braised Brisket, & Quarter Rack of
                                            Ribs served with your choice of side.
                                        </p>
                                        <div class="flex items-center justify-between min-height-31 flex-wrap">
                                            <p class="color-3 pr-15 mobile-mb-10">
                                                220 Gr / 600 Cal
                                            </p>
                                            <div class="flex">
                                                <a href="{{ route('shop.page') }}" class="link-item seasonal mr8">Seasonal</a>
                                                <a href="{{ route('shop.page') }}" class="link-item recommend">Recommended</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-item-style2 flex items-center">
                                    <div class="icon">
                                        <img src="{{ asset('public/frontend/assets/images/common/item_46.png') }}" alt="" />
                                    </div>
                                    <div class="content">
                                        <div class="top flex items-center mb-8">
                                            <h6 class="color-3 mb-0">Martinelli's Apple Juice</h6>
                                            <span class="pl4 dot">................................</span><span
                                                class="pl4 price">$16.00</span>
                                        </div>
                                        <p class="desc">
                                            Pulled Pork, Beer Braised Brisket, & Quarter Rack of
                                            Ribs served with your choice of side.
                                        </p>
                                        <div class="flex items-center justify-between min-height-31 flex-wrap">
                                            <p class="color-3 pr-15 mobile-mb-10">
                                                220 Gr / 600 Cal
                                            </p>
                                            <div class="flex">
                                                <a href="{{ route('shop.page') }}" class="link-item seasonal mr8">Seasonal</a>
                                                <a href="{{ route('shop.page') }}" class="link-item recommend">Recommended</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="content-inner">
                                <div class="product-item-style2 flex items-center">
                                    <div class="icon">
                                        <img src="{{ asset('public/frontend/assets/images/common/item_43.png') }}" alt="" />
                                    </div>
                                    <div class="content">
                                        <div class="top flex items-center mb-8">
                                            <h6 class="color-3 mb-0">Smoked Brisket Sandwich</h6>
                                            <span class="pl4 dot">................................</span><span
                                                class="pl4 price">$23.00</span>
                                        </div>
                                        <p class="desc">
                                            Pulled Pork, Beer Braised Brisket, & Quarter Rack of
                                            Ribs served with your choice of side.
                                        </p>
                                        <div class="flex items-center justify-between min-height-31 flex-wrap">
                                            <p class="color-3 pr-15 mobile-mb-10">
                                                220 Gr / 600 Cal
                                            </p>
                                            <div class="flex">
                                                <a href="#" class="link-item new mr-15">New</a>
                                                <a href="{{ route('shop.page') }}" class="link-item recommend">Recommended</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-item-style2 flex items-center">
                                    <div class="icon">
                                        <img src="{{ asset('public/frontend/assets/images/common/item_43.png') }}" alt="" />
                                    </div>
                                    <div class="content">
                                        <div class="top flex items-center mb-8">
                                            <h6 class="color-3 mb-0">Smoked Brisket Sandwich</h6>
                                            <span class="pl4 dot">................................</span><span
                                                class="pl4 price">$23.00</span>
                                        </div>
                                        <p class="desc">
                                            Pulled Pork, Beer Braised Brisket, & Quarter Rack of
                                            Ribs served with your choice of side.
                                        </p>
                                        <div class="flex items-center justify-between min-height-31 flex-wrap">
                                            <p class="color-3 pr-15 mobile-mb-10">
                                                220 Gr / 600 Cal
                                            </p>
                                            <div class="flex">
                                                <a href="#" class="link-item new mr-15">New</a>
                                                <a href="{{ route('shop.page') }}" class="link-item recommend">Recommended</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="product-item-style2 flex items-center">
                                    <div class="icon">
                                        <img src="{{ asset('public/frontend/assets/images/common/item_44.png') }}" alt="" />
                                    </div>
                                    <div class="content">
                                        <div class="top flex items-center mb-8">
                                            <h6 class="color-3 mb-0">
                                                Ocean Spray Cranberry Juice
                                            </h6>
                                            <span class="pl4 dot">................................</span><span
                                                class="pl4 price">$14.15</span>
                                        </div>
                                        <p class="desc">
                                            Pulled Pork, Beer Braised Brisket, & Quarter Rack of
                                            Ribs served with your choice of side.
                                        </p>
                                        <div class="flex items-center justify-between min-height-31 flex-wrap">
                                            <p class="color-3 pr-15 mobile-mb-10">
                                                220 Gr / 600 Cal
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-item-style2 flex items-center">
                                    <div class="icon">
                                        <img src="{{ asset('public/frontend/assets/images/common/item_44.png') }}" alt="" />
                                    </div>
                                    <div class="content">
                                        <div class="top flex items-center mb-8">
                                            <h6 class="color-3 mb-0 pr4">
                                                Ocean Spray Cranberry Juice
                                            </h6>
                                            <span class="pl4 dot">................................</span><span
                                                class="pl4 price">$14.15</span>
                                        </div>
                                        <p class="desc">
                                            Pulled Pork, Beer Braised Brisket, & Quarter Rack of
                                            Ribs served with your choice of side.
                                        </p>
                                        <div class="flex items-center justify-between min-height-31 flex-wrap">
                                            <p class="color-3 pr-15 mobile-mb-10">
                                                220 Gr / 600 Cal
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="product-item-style2 flex items-center">
                                    <div class="icon">
                                        <img src="{{ asset('public/frontend/assets/images/common/item_45.png') }}" alt="" />
                                    </div>
                                    <div class="content">
                                        <div class="top flex items-center mb-8">
                                            <h6 class="color-3 mb-0 pr4">
                                                Canada Dry Ginger Ale
                                            </h6>
                                            <span class="pl4 dot">................................</span><span
                                                class="pl4 price">$15.00</span>
                                        </div>
                                        <p class="desc">
                                            Pulled Pork, Beer Braised Brisket, & Quarter Rack of
                                            Ribs served with your choice of side.
                                        </p>
                                        <div class="flex items-center justify-between min-height-31 flex-wrap">
                                            <p class="color-3 pr-15 mobile-mb-10">
                                                220 Gr / 600 Cal
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-item-style2 flex items-center">
                                    <div class="icon">
                                        <img src="{{ asset('public/frontend/assets/images/common/item_45.png') }}" alt="" />
                                    </div>
                                    <div class="content">
                                        <div class="top flex items-center mb-8">
                                            <h6 class="color-3 mb-0 pr4">
                                                Canada Dry Ginger Ale
                                            </h6>
                                            <span class="pl4 dot">................................</span><span
                                                class="pl4 price">$15.00</span>
                                        </div>
                                        <p class="desc">
                                            Pulled Pork, Beer Braised Brisket, & Quarter Rack of
                                            Ribs served with your choice of side.
                                        </p>
                                        <div class="flex items-center justify-between min-height-31 flex-wrap">
                                            <p class="color-3 pr-15 mobile-mb-10">
                                                220 Gr / 600 Cal
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="product-item-style2 flex items-center">
                                    <div class="icon">
                                        <img src="{{ asset('public/frontend/assets/images/common/item_46.png') }}" alt="" />
                                    </div>
                                    <div class="content">
                                        <div class="top flex items-center mb-8">
                                            <h6 class="color-3 mb-0">Martinelli's Apple Juice</h6>
                                            <span class="pl4 dot">................................</span><span
                                                class="pl4 price">$16.00</span>
                                        </div>
                                        <p class="desc">
                                            Pulled Pork, Beer Braised Brisket, & Quarter Rack of
                                            Ribs served with your choice of side.
                                        </p>
                                        <div class="flex items-center justify-between min-height-31 flex-wrap">
                                            <p class="color-3 pr-15 mobile-mb-10">
                                                220 Gr / 600 Cal
                                            </p>
                                            <div class="flex">
                                                <a href="{{ route('shop.page') }}" class="link-item seasonal mr8">Seasonal</a>
                                                <a href="{{ route('shop.page') }}" class="link-item recommend">Recommended</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-item-style2 flex items-center">
                                    <div class="icon">
                                        <img src="{{ asset('public/frontend/assets/images/common/item_46.png') }}" alt="" />
                                    </div>
                                    <div class="content">
                                        <div class="top flex items-center mb-8">
                                            <h6 class="color-3 mb-0">Martinelli's Apple Juice</h6>
                                            <span class="pl4 dot">................................</span><span
                                                class="pl4 price">$16.00</span>
                                        </div>
                                        <p class="desc">
                                            Pulled Pork, Beer Braised Brisket, & Quarter Rack of
                                            Ribs served with your choice of side.
                                        </p>
                                        <div class="flex items-center justify-between min-height-31 flex-wrap">
                                            <p class="color-3 pr-15 mobile-mb-10">
                                                220 Gr / 600 Cal
                                            </p>
                                            <div class="flex">
                                                <a href="{{ route('shop.page') }}" class="link-item seasonal mr8">Seasonal</a>
                                                <a href="{{ route('shop.page') }}" class="link-item recommend">Recommended</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="content-inner">
                                <div class="product-item-style2 flex items-center">
                                    <div class="icon">
                                        <img src="{{ asset('public/frontend/assets/images/common/item_43.png') }}" alt="" />
                                    </div>
                                    <div class="content">
                                        <div class="top flex items-center mb-8">
                                            <h6 class="color-3 mb-0">Smoked Brisket Sandwich</h6>
                                            <span class="pl4 dot">................................</span><span
                                                class="pl4 price">$23.00</span>
                                        </div>
                                        <p class="desc">
                                            Pulled Pork, Beer Braised Brisket, & Quarter Rack of
                                            Ribs served with your choice of side.
                                        </p>
                                        <div class="flex items-center justify-between min-height-31 flex-wrap">
                                            <p class="color-3 pr-15 mobile-mb-10">
                                                220 Gr / 600 Cal
                                            </p>
                                            <div class="flex">
                                                <a href="#" class="link-item new mr-15">New</a>
                                                <a href="{{ route('shop.page') }}" class="link-item recommend">Recommended</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-item-style2 flex items-center">
                                    <div class="icon">
                                        <img src="{{ asset('public/frontend/assets/images/common/item_43.png') }}" alt="" />
                                    </div>
                                    <div class="content">
                                        <div class="top flex items-center mb-8">
                                            <h6 class="color-3 mb-0">Smoked Brisket Sandwich</h6>
                                            <span class="pl4 dot">................................</span><span
                                                class="pl4 price">$23.00</span>
                                        </div>
                                        <p class="desc">
                                            Pulled Pork, Beer Braised Brisket, & Quarter Rack of
                                            Ribs served with your choice of side.
                                        </p>
                                        <div class="flex items-center justify-between min-height-31 flex-wrap">
                                            <p class="color-3 pr-15 mobile-mb-10">
                                                220 Gr / 600 Cal
                                            </p>
                                            <div class="flex">
                                                <a href="#" class="link-item new mr-15">New</a>
                                                <a href="{{ route('shop.page') }}" class="link-item recommend">Recommended</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="product-item-style2 flex items-center">
                                    <div class="icon">
                                        <img src="{{ asset('public/frontend/assets/images/common/item_44.png') }}" alt="" />
                                    </div>
                                    <div class="content">
                                        <div class="top flex items-center mb-8">
                                            <h6 class="color-3 mb-0">
                                                Ocean Spray Cranberry Juice
                                            </h6>
                                            <span class="pl4 dot">................................</span><span
                                                class="pl4 price">$14.15</span>
                                        </div>
                                        <p class="desc">
                                            Pulled Pork, Beer Braised Brisket, & Quarter Rack of
                                            Ribs served with your choice of side.
                                        </p>
                                        <div class="flex items-center justify-between min-height-31 flex-wrap">
                                            <p class="color-3 pr-15 mobile-mb-10">
                                                220 Gr / 600 Cal
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-item-style2 flex items-center">
                                    <div class="icon">
                                        <img src="{{ asset('public/frontend/assets/images/common/item_44.png') }}" alt="" />
                                    </div>
                                    <div class="content">
                                        <div class="top flex items-center mb-8">
                                            <h6 class="color-3 mb-0 pr4">
                                                Ocean Spray Cranberry Juice
                                            </h6>
                                            <span class="pl4 dot">................................</span><span
                                                class="pl4 price">$14.15</span>
                                        </div>
                                        <p class="desc">
                                            Pulled Pork, Beer Braised Brisket, & Quarter Rack of
                                            Ribs served with your choice of side.
                                        </p>
                                        <div class="flex items-center justify-between min-height-31 flex-wrap">
                                            <p class="color-3 pr-15 mobile-mb-10">
                                                220 Gr / 600 Cal
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="product-item-style2 flex items-center">
                                    <div class="icon">
                                        <img src="{{ asset('public/frontend/assets/images/common/item_45.png') }}" alt="" />
                                    </div>
                                    <div class="content">
                                        <div class="top flex items-center mb-8">
                                            <h6 class="color-3 mb-0 pr4">
                                                Canada Dry Ginger Ale
                                            </h6>
                                            <span class="pl4 dot">................................</span><span
                                                class="pl4 price">$15.00</span>
                                        </div>
                                        <p class="desc">
                                            Pulled Pork, Beer Braised Brisket, & Quarter Rack of
                                            Ribs served with your choice of side.
                                        </p>
                                        <div class="flex items-center justify-between min-height-31 flex-wrap">
                                            <p class="color-3 pr-15 mobile-mb-10">
                                                220 Gr / 600 Cal
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-item-style2 flex items-center">
                                    <div class="icon">
                                        <img src="{{ asset('public/frontend/assets/images/common/item_45.png') }}" alt="" />
                                    </div>
                                    <div class="content">
                                        <div class="top flex items-center mb-8">
                                            <h6 class="color-3 mb-0 pr4">
                                                Canada Dry Ginger Ale
                                            </h6>
                                            <span class="pl4 dot">................................</span><span
                                                class="pl4 price">$15.00</span>
                                        </div>
                                        <p class="desc">
                                            Pulled Pork, Beer Braised Brisket, & Quarter Rack of
                                            Ribs served with your choice of side.
                                        </p>
                                        <div class="flex items-center justify-between min-height-31 flex-wrap">
                                            <p class="color-3 pr-15 mobile-mb-10">
                                                220 Gr / 600 Cal
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="content-inner">
                                <div class="product-item-style2 flex items-center">
                                    <div class="icon">
                                        <img src="{{ asset('public/frontend/assets/images/common/item_42.png') }}" alt="" />
                                    </div>
                                    <div class="content">
                                        <div class="top flex items-center mb-8">
                                            <h6 class="color-3 mb-0">Brekkie BBQ Burger</h6>
                                            <span class="pl4 dot">................................</span><span
                                                class="pl4 price">$15.22</span>
                                        </div>
                                        <p class="desc">
                                            Pulled Pork, Beer Braised Brisket, & Quarter Rack of
                                            Ribs served with your choice of side.
                                        </p>
                                        <div class="flex items-center justify-between min-height-31 flex-wrap">
                                            <p class="color-3 pr-15 mobile-mb-10">
                                                220 Gr / 600 Cal
                                            </p>
                                            <div class="flex">
                                                <a href="{{ route('shop.page') }}" class="link-item seasonal mr8">Seasonal</a>
                                                <a href="{{ route('shop.page') }}" class="link-item recommend">Recommended</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-item-style2 flex items-center">
                                    <div class="icon">
                                        <img src="{{ asset('public/frontend/assets/images/common/item_42.png') }}" alt="" />
                                    </div>
                                    <div class="content">
                                        <div class="top flex items-center mb-8">
                                            <h6 class="color-3 mb-0">Brekkie BBQ Burger</h6>
                                            <span class="pl4 dot">................................</span><span
                                                class="pl4 price">$15.22</span>
                                        </div>
                                        <p class="desc">
                                            Pulled Pork, Beer Braised Brisket, & Quarter Rack of
                                            Ribs served with your choice of side.
                                        </p>
                                        <div class="flex items-center justify-between min-height-31 flex-wrap">
                                            <p class="color-3 pr-15 mobile-mb-10">
                                                220 Gr / 600 Cal
                                            </p>
                                            <div class="flex">
                                                <a href="{{ route('shop.page') }}" class="link-item seasonal mr8">Seasonal</a>
                                                <a href="{{ route('shop.page') }}" class="link-item recommend">Recommended</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="product-item-style2 flex items-center">
                                    <div class="icon">
                                        <img src="{{ asset('public/frontend/assets/images/common/item_44.png') }}" alt="" />
                                    </div>
                                    <div class="content">
                                        <div class="top flex items-center mb-8">
                                            <h6 class="color-3 mb-0">
                                                Ocean Spray Cranberry Juice
                                            </h6>
                                            <span class="pl4 dot">................................</span><span
                                                class="pl4 price">$14.15</span>
                                        </div>
                                        <p class="desc">
                                            Pulled Pork, Beer Braised Brisket, & Quarter Rack of
                                            Ribs served with your choice of side.
                                        </p>
                                        <div class="flex items-center justify-between min-height-31 flex-wrap">
                                            <p class="color-3 pr-15 mobile-mb-10">
                                                220 Gr / 600 Cal
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-item-style2 flex items-center">
                                    <div class="icon">
                                        <img src="{{ asset('public/frontend/assets/images/common/item_44.png') }}" alt="" />
                                    </div>
                                    <div class="content">
                                        <div class="top flex items-center mb-8">
                                            <h6 class="color-3 mb-0 pr4">
                                                Ocean Spray Cranberry Juice
                                            </h6>
                                            <span class="pl4 dot">................................</span><span
                                                class="pl4 price">$14.15</span>
                                        </div>
                                        <p class="desc">
                                            Pulled Pork, Beer Braised Brisket, & Quarter Rack of
                                            Ribs served with your choice of side.
                                        </p>
                                        <div class="flex items-center justify-between min-height-31 flex-wrap">
                                            <p class="color-3 pr-15 mobile-mb-10">
                                                220 Gr / 600 Cal
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="product-item-style2 flex items-center">
                                    <div class="icon">
                                        <img src="{{ asset('public/frontend/assets/images/common/item_45.png') }}" alt="" />
                                    </div>
                                    <div class="content">
                                        <div class="top flex items-center mb-8">
                                            <h6 class="color-3 mb-0 pr4">
                                                Canada Dry Ginger Ale
                                            </h6>
                                            <span class="pl4 dot">................................</span><span
                                                class="pl4 price">$15.00</span>
                                        </div>
                                        <p class="desc">
                                            Pulled Pork, Beer Braised Brisket, & Quarter Rack of
                                            Ribs served with your choice of side.
                                        </p>
                                        <div class="flex items-center justify-between min-height-31 flex-wrap">
                                            <p class="color-3 pr-15 mobile-mb-10">
                                                220 Gr / 600 Cal
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-item-style2 flex items-center">
                                    <div class="icon">
                                        <img src="{{ asset('public/frontend/assets/images/common/item_45.png') }}" alt="" />
                                    </div>
                                    <div class="content">
                                        <div class="top flex items-center mb-8">
                                            <h6 class="color-3 mb-0 pr4">
                                                Canada Dry Ginger Ale
                                            </h6>
                                            <span class="pl4 dot">................................</span><span
                                                class="pl4 price">$15.00</span>
                                        </div>
                                        <p class="desc">
                                            Pulled Pork, Beer Braised Brisket, & Quarter Rack of
                                            Ribs served with your choice of side.
                                        </p>
                                        <div class="flex items-center justify-between min-height-31 flex-wrap">
                                            <p class="color-3 pr-15 mobile-mb-10">
                                                220 Gr / 600 Cal
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="product-item-style2 flex items-center">
                                    <div class="icon">
                                        <img src="{{ asset('public/frontend/assets/images/common/item_46.png') }}" alt="" />
                                    </div>
                                    <div class="content">
                                        <div class="top flex items-center mb-8">
                                            <h6 class="color-3 mb-0">Martinelli's Apple Juice</h6>
                                            <span class="pl4 dot">................................</span><span
                                                class="pl4 price">$16.00</span>
                                        </div>
                                        <p class="desc">
                                            Pulled Pork, Beer Braised Brisket, & Quarter Rack of
                                            Ribs served with your choice of side.
                                        </p>
                                        <div class="flex items-center justify-between min-height-31 flex-wrap">
                                            <p class="color-3 pr-15 mobile-mb-10">
                                                220 Gr / 600 Cal
                                            </p>
                                            <div class="flex">
                                                <a href="{{ route('shop.page') }}" class="link-item seasonal mr8">Seasonal</a>
                                                <a href="{{ route('shop.page') }}" class="link-item recommend">Recommended</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-item-style2 flex items-center">
                                    <div class="icon">
                                        <img src="{{ asset('public/frontend/assets/images/common/item_46.png') }}" alt="" />
                                    </div>
                                    <div class="content">
                                        <div class="top flex items-center mb-8">
                                            <h6 class="color-3 mb-0">Martinelli's Apple Juice</h6>
                                            <span class="pl4 dot">................................</span><span
                                                class="pl4 price">$16.00</span>
                                        </div>
                                        <p class="desc">
                                            Pulled Pork, Beer Braised Brisket, & Quarter Rack of
                                            Ribs served with your choice of side.
                                        </p>
                                        <div class="flex items-center justify-between min-height-31 flex-wrap">
                                            <p class="color-3 pr-15 mobile-mb-10">
                                                220 Gr / 600 Cal
                                            </p>
                                            <div class="flex">
                                                <a href="{{ route('shop.page') }}" class="link-item seasonal mr8">Seasonal</a>
                                                <a href="{{ route('shop.page') }}" class="link-item recommend">Recommended</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="content-inner">
                                <div class="product-item-style2 flex items-center">
                                    <div class="icon">
                                        <img src="{{ asset('public/frontend/assets/images/common/item_44.png') }}" alt="" />
                                    </div>
                                    <div class="content">
                                        <div class="top flex items-center mb-8">
                                            <h6 class="color-3 mb-0">
                                                Ocean Spray Cranberry Juice
                                            </h6>
                                            <span class="pl4 dot">................................</span><span
                                                class="pl4 price">$14.15</span>
                                        </div>
                                        <p class="desc">
                                            Pulled Pork, Beer Braised Brisket, & Quarter Rack of
                                            Ribs served with your choice of side.
                                        </p>
                                        <div class="flex items-center justify-between min-height-31 flex-wrap">
                                            <p class="color-3 pr-15 mobile-mb-10">
                                                220 Gr / 600 Cal
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-item-style2 flex items-center">
                                    <div class="icon">
                                        <img src="{{ asset('public/frontend/assets/images/common/item_44.png') }}" alt="" />
                                    </div>
                                    <div class="content">
                                        <div class="top flex items-center mb-8">
                                            <h6 class="color-3 mb-0 pr4">
                                                Ocean Spray Cranberry Juice
                                            </h6>
                                            <span class="pl4 dot">................................</span><span
                                                class="pl4 price">$14.15</span>
                                        </div>
                                        <p class="desc">
                                            Pulled Pork, Beer Braised Brisket, & Quarter Rack of
                                            Ribs served with your choice of side.
                                        </p>
                                        <div class="flex items-center justify-between min-height-31 flex-wrap">
                                            <p class="color-3 pr-15 mobile-mb-10">
                                                220 Gr / 600 Cal
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="product-item-style2 flex items-center">
                                    <div class="icon">
                                        <img src="{{ asset('public/frontend/assets/images/common/item_45.png') }}" alt="" />
                                    </div>
                                    <div class="content">
                                        <div class="top flex items-center mb-8">
                                            <h6 class="color-3 mb-0 pr4">
                                                Canada Dry Ginger Ale
                                            </h6>
                                            <span class="pl4 dot">................................</span><span
                                                class="pl4 price">$15.00</span>
                                        </div>
                                        <p class="desc">
                                            Pulled Pork, Beer Braised Brisket, & Quarter Rack of
                                            Ribs served with your choice of side.
                                        </p>
                                        <div class="flex items-center justify-between min-height-31 flex-wrap">
                                            <p class="color-3 pr-15 mobile-mb-10">
                                                220 Gr / 600 Cal
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-item-style2 flex items-center">
                                    <div class="icon">
                                        <img src="{{ asset('public/frontend/assets/images/common/item_45.png') }}" alt="" />
                                    </div>
                                    <div class="content">
                                        <div class="top flex items-center mb-8">
                                            <h6 class="color-3 mb-0 pr4">
                                                Canada Dry Ginger Ale
                                            </h6>
                                            <span class="pl4 dot">................................</span><span
                                                class="pl4 price">$15.00</span>
                                        </div>
                                        <p class="desc">
                                            Pulled Pork, Beer Braised Brisket, & Quarter Rack of
                                            Ribs served with your choice of side.
                                        </p>
                                        <div class="flex items-center justify-between min-height-31 flex-wrap">
                                            <p class="color-3 pr-15 mobile-mb-10">
                                                220 Gr / 600 Cal
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="product-item-style2 flex items-center">
                                    <div class="icon">
                                        <img src="{{ asset('public/frontend/assets/images/common/item_46.png') }}" alt="" />
                                    </div>
                                    <div class="content">
                                        <div class="top flex items-center mb-8">
                                            <h6 class="color-3 mb-0">Martinelli's Apple Juice</h6>
                                            <span class="pl4 dot">................................</span><span
                                                class="pl4 price">$16.00</span>
                                        </div>
                                        <p class="desc">
                                            Pulled Pork, Beer Braised Brisket, & Quarter Rack of
                                            Ribs served with your choice of side.
                                        </p>
                                        <div class="flex items-center justify-between min-height-31 flex-wrap">
                                            <p class="color-3 pr-15 mobile-mb-10">
                                                220 Gr / 600 Cal
                                            </p>
                                            <div class="flex">
                                                <a href="{{ route('shop.page') }}" class="link-item seasonal mr8">Seasonal</a>
                                                <a href="{{ route('shop.page') }}" class="link-item recommend">Recommended</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-item-style2 flex items-center">
                                    <div class="icon">
                                        <img src="{{ asset('public/frontend/assets/images/common/item_46.png') }}" alt="" />
                                    </div>
                                    <div class="content">
                                        <div class="top flex items-center mb-8">
                                            <h6 class="color-3 mb-0">Martinelli's Apple Juice</h6>
                                            <span class="pl4 dot">................................</span><span
                                                class="pl4 price">$16.00</span>
                                        </div>
                                        <p class="desc">
                                            Pulled Pork, Beer Braised Brisket, & Quarter Rack of
                                            Ribs served with your choice of side.
                                        </p>
                                        <div class="flex items-center justify-between min-height-31 flex-wrap">
                                            <p class="color-3 pr-15 mobile-mb-10">
                                                220 Gr / 600 Cal
                                            </p>
                                            <div class="flex">
                                                <a href="{{ route('shop.page') }}" class="link-item seasonal mr8">Seasonal</a>
                                                <a href="{{ route('shop.page') }}" class="link-item recommend">Recommended</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="content-inner">
                                <div class="product-item-style2 flex items-center">
                                    <div class="icon">
                                        <img src="{{ asset('public/frontend/assets/images/common/item_44.png')}}" alt="" />
                                    </div>
                                    <div class="content">
                                        <div class="top flex items-center mb-8">
                                            <h6 class="color-3 mb-0">
                                                Ocean Spray Cranberry Juice
                                            </h6>
                                            <span class="pl4 dot">................................</span><span
                                                class="pl4 price">$14.15</span>
                                        </div>
                                        <p class="desc">
                                            Pulled Pork, Beer Braised Brisket, & Quarter Rack of
                                            Ribs served with your choice of side.
                                        </p>
                                        <div class="flex items-center justify-between min-height-31 flex-wrap">
                                            <p class="color-3 pr-15 mobile-mb-10">
                                                220 Gr / 600 Cal
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-item-style2 flex items-center">
                                    <div class="icon">
                                        <img src="{{ asset('public/frontend/assets/images/common/item_44.png') }}" alt="" />
                                    </div>
                                    <div class="content">
                                        <div class="top flex items-center mb-8">
                                            <h6 class="color-3 mb-0 pr4">
                                                Ocean Spray Cranberry Juice
                                            </h6>
                                            <span class="pl4 dot">................................</span><span
                                                class="pl4 price">$14.15</span>
                                        </div>
                                        <p class="desc">
                                            Pulled Pork, Beer Braised Brisket, & Quarter Rack of
                                            Ribs served with your choice of side.
                                        </p>
                                        <div class="flex items-center justify-between min-height-31 flex-wrap">
                                            <p class="color-3 pr-15 mobile-mb-10">
                                                220 Gr / 600 Cal
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="product-item-style2 flex items-center">
                                    <div class="icon">
                                        <img src="{{ asset('public/frontend/assets/images/common/item_45.png') }}" alt="" />
                                    </div>
                                    <div class="content">
                                        <div class="top flex items-center mb-8">
                                            <h6 class="color-3 mb-0 pr4">
                                                Canada Dry Ginger Ale
                                            </h6>
                                            <span class="pl4 dot">................................</span><span
                                                class="pl4 price">$15.00</span>
                                        </div>
                                        <p class="desc">
                                            Pulled Pork, Beer Braised Brisket, & Quarter Rack of
                                            Ribs served with your choice of side.
                                        </p>
                                        <div class="flex items-center justify-between min-height-31 flex-wrap">
                                            <p class="color-3 pr-15 mobile-mb-10">
                                                220 Gr / 600 Cal
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-item-style2 flex items-center">
                                    <div class="icon">
                                        <img src="{{ asset('public/frontend/assets/images/common/item_45.png') }}" alt="" />
                                    </div>
                                    <div class="content">
                                        <div class="top flex items-center mb-8">
                                            <h6 class="color-3 mb-0 pr4">
                                                Canada Dry Ginger Ale
                                            </h6>
                                            <span class="pl4 dot">................................</span><span
                                                class="pl4 price">$15.00</span>
                                        </div>
                                        <p class="desc">
                                            Pulled Pork, Beer Braised Brisket, & Quarter Rack of
                                            Ribs served with your choice of side.
                                        </p>
                                        <div class="flex items-center justify-between min-height-31 flex-wrap">
                                            <p class="color-3 pr-15 mobile-mb-10">
                                                220 Gr / 600 Cal
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
    </section>

    <section class="tf-section restaurant-section-style2 hidden pt-118 pb-130">
        <div class="overlay absolute w-full h-full t-0 l-0"></div>
        <div class="img-bg absolute w-full h-full t-0 l-0">
            <img class="w-full h-full parallax" src="{{ asset('public/frontend/assets/images/backgroup/bg-section-15.jpg') }}" alt="" />
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="content center">
                        <h2 class="mb-20 text-spacing-1">
                            Are You Looking for Fast food? <br class="show-desktop" />
                            Book A Table or Order Online.
                        </h2>
                        <p class="white desc tex text-spacing-0_5">
                            enjoy great food and family moments with basilico, we always
                            welcome you.
                        </p>
                        <div class="flex justify-center">
                            <a href="#" class="tf-button">book a table</a>
                            <a href="{{ route('order.page')}}" class="tf-button style2 ml-15">order online</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
