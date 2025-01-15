@extends('frontend.layouts.master')
@section('content')
    <section class="page-title relative mt-122">
        <div class="container w_1890">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-title-inner hidden">
                        <div class="bg-page-title-inner">
                            <img class="parallax"
                                src="{{ asset('public/frontend/assets/images/backgroup/page-title_3.jpg') }}"
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
                            <h1 class="title center">Meet The Teams</h1>
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
                                    <span>Meet The Teams</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="pt-130 mb-50">
        <div class="container w_1650">
            <div class="row">
                <div class="col-md-12">
                    <div class="relative gradient content-box-style wow fadeIn" data-wow-delay=".3s">
                        <h5>
                            Book a table for your special events or family dining, we are
                            the best choice, As well known and we are very busy all days
                            advice you.
                        </h5>
                        <img class="absolute l-0 b-0"
                            src="{{ asset('public/frontend/assets/images/backgroup/bg-section-10.png') }}" alt="" />
                        <img class="absolute r-0 b-0"
                            src="{{ asset('public/frontend/assets/images/backgroup/bg-section-11.png') }}" alt="" />
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container w_1890 relative flex flex-column justify-center">
            <div class="swiper-btn btn-next-team r-65">
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
            <div class="swiper-btn reverse btn-prev-team l-65">
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
                <div class="col-md-12 wow fadeIn" data-wow-delay=".2s">
                    <div class="swiper-container team-slider visible">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="image">
                                    <img class="radius-20"
                                        src="{{ asset('public/frontend/assets/images/common/team_1.jpg') }}"
                                        alt="" />
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="image">
                                    <img class="radius-20"
                                        src="{{ asset('public/frontend/assets/images/common/team_2.jpg') }}"
                                        alt="" />
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="image">
                                    <img class="radius-20"
                                        src="{{ asset('public/frontend/assets/images/common/team_3.jpg') }}"
                                        alt="" />
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="image">
                                    <img class="radius-20"
                                        src="{{ asset('public/frontend/assets/images/common/team_4.jpg') }}"
                                        alt="" />
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="image">
                                    <img class="radius-20"
                                        src="{{ asset('public/frontend/assets/images/common/team_1.jpg') }}"
                                        alt="" />
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="image">
                                    <img class="radius-20"
                                        src="{{ asset('public/frontend/assets/images/common/team_2.jpg') }}"
                                        alt="" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="tf-section pb-130">
        <div class="container w_1650">
            <div class="row">
                <div class="col-md-12">
                    <div class="tf-title center pb-30 mb-76 wow fadeInUp" data-wow-delay=".2s">
                        <p class="sub-title">important people behind basilico</p>
                        <h2 class="mb-16">Our Leaders</h2>
                        <p class="fz-17">
                            Id pri consul aeterno petentium. Vivendo abhorreant et vim, et
                            quot persecuti mel. <br class="show-desktop" />
                            Libris hendrerit ex sea. Duo legere evertitur an
                        </p>
                    </div>
                </div>
                <div class="col-md-12 testimonial-wrapper wow fadeIn" data-wow-delay=".3s">
                    <div class="testimonial-slider">
                        <div class="testimonial-list style2 mb-50">
                            <ul>
                                <li class="testimonial-list-item">
                                    <a class="active" href="#0" data-slide-index="0">
                                        <img src="{{ asset('public/frontend/assets/images/common/avt_6.png') }}"
                                            alt="" />
                                    </a>
                                </li>
                                <li class="testimonial-list-item">
                                    <a href="#0" data-slide-index="1">
                                        <img src="{{ asset('public/frontend/assets/images/common/avt_7.png') }}"
                                            alt="" />
                                    </a>
                                </li>
                                <li class="testimonial-list-item">
                                    <a href="#0" data-slide-index="2">
                                        <img src="{{ asset('public/frontend/assets/images/common/avt_8.png') }}"
                                            alt="" />
                                    </a>
                                </li>
                                <li class="testimonial-list-item">
                                    <a href="#0" data-slide-index="3">
                                        <img src="{{ asset('public/frontend/assets/images/common/avt_9.png') }}"
                                            alt="" />
                                    </a>
                                </li>
                                <li class="testimonial-list-item">
                                    <a href="#0" data-slide-index="4">
                                        <img src="{{ asset('public/frontend/assets/images/common/avt_10.png') }}"
                                            alt="" />
                                    </a>
                                </li>
                                <li class="testimonial-list-item">
                                    <a href="#0" data-slide-index="5">
                                        <img src="{{ asset('public/frontend/assets/images/common/avt_11.png') }}"
                                            alt="" />
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="swiper-container sl-testimonial">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="testimonial-item-style2">
                                        <img class="img-bg"
                                            src="{{ asset('public/frontend/assets/images/backgroup/layer_4.png') }}"
                                            alt="" />
                                        <h5 class="name">- Dennis Cantrell -</h5>
                                        <p class="mb-24">Manager Basilico Store</p>
                                        <p class="desc">
                                            Dennis Cantrell became Chief Executive Officer of
                                            Basilico Division in January 2022 and reports directly
                                            to the Yum! Brands CEO. In this role, Dennis Cantrell
                                            has global responsibility for driving the brand
                                            strategy and performance of Basilico.
                                        </p>
                                        <p>
                                            He previously served in a dual role as KFC Division
                                            Chief Operating Officer and Managing Director of KFC
                                            Asia, a role in which he led the global operations
                                            team and drove the KFC global operations agenda while
                                            overseeing Thailand, India, Asia Central and Greater
                                            Asia. Prior to this, Sami was Managing Director for
                                            KFC Middle East, North Africa, Pakistan and Turkey
                                            markets.
                                        </p>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="testimonial-item-style2">
                                        <img class="img-bg"
                                            src="{{ asset('public/frontend/assets/images/backgroup/layer_4.png') }}"
                                            alt="" />
                                        <h5 class="name">- Dennis Cantrell -</h5>
                                        <p class="mb-24">Manager Basilico Store</p>
                                        <p class="desc">
                                            Dennis Cantrell became Chief Executive Officer of
                                            Basilico Division in January 2022 and reports directly
                                            to the Yum! Brands CEO. In this role, Dennis Cantrell
                                            has global responsibility for driving the brand
                                            strategy and performance of Basilico.
                                        </p>
                                        <p>
                                            He previously served in a dual role as KFC Division
                                            Chief Operating Officer and Managing Director of KFC
                                            Asia, a role in which he led the global operations
                                            team and drove the KFC global operations agenda while
                                            overseeing Thailand, India, Asia Central and Greater
                                            Asia. Prior to this, Sami was Managing Director for
                                            KFC Middle East, North Africa, Pakistan and Turkey
                                            markets.
                                        </p>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="testimonial-item-style2">
                                        <img class="img-bg"
                                            src="{{ asset('public/frontend/assets/images/backgroup/layer_4.png') }}"
                                            alt="" />
                                        <h5 class="name">- Dennis Cantrell -</h5>
                                        <p class="mb-24">Manager Basilico Store</p>
                                        <p class="desc">
                                            Dennis Cantrell became Chief Executive Officer of
                                            Basilico Division in January 2022 and reports directly
                                            to the Yum! Brands CEO. In this role, Dennis Cantrell
                                            has global responsibility for driving the brand
                                            strategy and performance of Basilico.
                                        </p>
                                        <p>
                                            He previously served in a dual role as KFC Division
                                            Chief Operating Officer and Managing Director of KFC
                                            Asia, a role in which he led the global operations
                                            team and drove the KFC global operations agenda while
                                            overseeing Thailand, India, Asia Central and Greater
                                            Asia. Prior to this, Sami was Managing Director for
                                            KFC Middle East, North Africa, Pakistan and Turkey
                                            markets.
                                        </p>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="testimonial-item-style2">
                                        <img class="img-bg"
                                            src="{{ asset('public/frontend/assets/images/backgroup/layer_4.png') }}"
                                            alt="" />
                                        <h5 class="name">- Dennis Cantrell -</h5>
                                        <p class="mb-24">Manager Basilico Store</p>
                                        <p class="desc">
                                            Dennis Cantrell became Chief Executive Officer of
                                            Basilico Division in January 2022 and reports directly
                                            to the Yum! Brands CEO. In this role, Dennis Cantrell
                                            has global responsibility for driving the brand
                                            strategy and performance of Basilico.
                                        </p>
                                        <p>
                                            He previously served in a dual role as KFC Division
                                            Chief Operating Officer and Managing Director of KFC
                                            Asia, a role in which he led the global operations
                                            team and drove the KFC global operations agenda while
                                            overseeing Thailand, India, Asia Central and Greater
                                            Asia. Prior to this, Sami was Managing Director for
                                            KFC Middle East, North Africa, Pakistan and Turkey
                                            markets.
                                        </p>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="testimonial-item-style2">
                                        <img class="img-bg"
                                            src="{{ asset('public/frontend/assets/images/backgroup/layer_4.png') }}"
                                            alt="" />
                                        <h5 class="name">- Dennis Cantrell -</h5>
                                        <p class="mb-24">Manager Basilico Store</p>
                                        <p class="desc">
                                            Dennis Cantrell became Chief Executive Officer of
                                            Basilico Division in January 2022 and reports directly
                                            to the Yum! Brands CEO. In this role, Dennis Cantrell
                                            has global responsibility for driving the brand
                                            strategy and performance of Basilico.
                                        </p>
                                        <p>
                                            He previously served in a dual role as KFC Division
                                            Chief Operating Officer and Managing Director of KFC
                                            Asia, a role in which he led the global operations
                                            team and drove the KFC global operations agenda while
                                            overseeing Thailand, India, Asia Central and Greater
                                            Asia. Prior to this, Sami was Managing Director for
                                            KFC Middle East, North Africa, Pakistan and Turkey
                                            markets.
                                        </p>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="testimonial-item-style2">
                                        <img class="img-bg"
                                            src="{{ asset('public/frontend/assets/images/backgroup/layer_4.png') }}"
                                            alt="" />
                                        <h5 class="name">- Dennis Cantrell -</h5>
                                        <p class="mb-24">Manager Basilico Store</p>
                                        <p class="desc">
                                            Dennis Cantrell became Chief Executive Officer of
                                            Basilico Division in January 2022 and reports directly
                                            to the Yum! Brands CEO. In this role, Dennis Cantrell
                                            has global responsibility for driving the brand
                                            strategy and performance of Basilico.
                                        </p>
                                        <p>
                                            He previously served in a dual role as KFC Division
                                            Chief Operating Officer and Managing Director of KFC
                                            Asia, a role in which he led the global operations
                                            team and drove the KFC global operations agenda while
                                            overseeing Thailand, India, Asia Central and Greater
                                            Asia. Prior to this, Sami was Managing Director for
                                            KFC Middle East, North Africa, Pakistan and Turkey
                                            markets.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="pb-130">
        <div class="container w_1650">
            <div class="row">
                <div class="col-md-12 wow fadeIn" data-wow-delay=".3s">
                    <div class="image mb-40">
                        <img class="radius-35 min-height-200"
                            src="{{ asset('public/frontend/assets/images/backgroup/bg-team.jpg') }}" alt="" />
                    </div>
                    <div class="center max-width-1010 ml-auto mr-auto">
                        <h2 class="color-3 mb-30 text-spacing-1">
                            Become Part Of Our Family
                        </h2>
                        <p class="fz-17 color-3 mb-40 font-1 text-spacing-0_2">
                            Maecenas convallis varius sem, vitae consequat lorem
                            pellentesque ultrices. Phasellus tempor mauris felis,
                            convallis cursus lorem elementum non. Nulla a nulla eget odio
                            tristique condimentum sagittis sit amet nisl. Quisque ac arcu
                            pretium, dapibus ipsum at, sagittis orci. Nunc eget lacinia
                            lectus, blandit pharetra sapien.
                        </p>
                        <div class="flex justify-center">
                            <a href="contact.html" class="tf-button">join now today</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
