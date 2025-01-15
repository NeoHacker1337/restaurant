@extends('frontend.layouts.master')
@section('content')
    <section class="page-title relative mt-122">
        <div class="container w_1890">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-title-inner hidden">
                        <div class="bg-page-title-inner">
                            <img class="parallax"
                                src="{{ asset('public/frontend/assets/images/backgroup/page-title_4.jpg') }}"
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
                            <h1 class="title center">Recruitment</h1>
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
                                    <span>Recruitment</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="tf-section pt-118 pb-75">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-12 wow fadeIn" data-wow-delay=".2s">
                    <div>
                        <h2 class="mb-22 color-3 text-spacing-1">
                            Join Basilico - Smile! <br class="show-desktop" />
                            We Always Welcome You.
                        </h2>
                        <p class="font-1 font-style text-spacing-0_5 pr-40 mb-16">
                            At Basilico, whether in Store Block, Office Block or Factory,
                            the bee community is always friendly, open and professional.
                            The value created and the success of Basilico is due to your
                            passion for the work.
                        </p>
                        <p class="mb-45 pr-40">
                            Nullam mauris neque, mollis at pretium sed, aliquam vel
                            sapien. Integer consequat nisl placerat, bibendum libero sit
                            amet, tempor mi. Curabitur vitae orci sed dolor viverra
                            viverra at sed quam.
                        </p>
                        <div class="flex">
                            <a href="contact.html" class="tf-button">Join us now today</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-12 flex items-center wow fadeIn" data-wow-delay=".4s">
                    <ul class="icon-list style2">
                        <li>
                            <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                xmlns:xlink="http://www.w3.org/1999/xlink" width="512" height="512" x="0" y="0"
                                viewBox="0 0 408.576 408.576" style="enable-background: new 0 0 512 512"
                                xml:space="preserve">
                                <g>
                                    <path
                                        d="M204.288 0C91.648 0 0 91.648 0 204.288s91.648 204.288 204.288 204.288 204.288-91.648 204.288-204.288S316.928 0 204.288 0zm114.176 150.528-130.56 129.536c-7.68 7.68-19.968 8.192-28.16.512L90.624 217.6c-8.192-7.68-8.704-20.48-1.536-28.672 7.68-8.192 20.48-8.704 28.672-1.024l54.784 50.176L289.28 121.344c8.192-8.192 20.992-8.192 29.184 0s8.192 20.992 0 29.184z"
                                        fill="#bb0001" data-original="#000000" class="" opacity="1"></path>
                                </g>
                            </svg>
                            <span>We communicate with transparency & respect. </span>
                        </li>
                        <li>
                            <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                xmlns:xlink="http://www.w3.org/1999/xlink" width="512" height="512" x="0" y="0"
                                viewBox="0 0 408.576 408.576" style="enable-background: new 0 0 512 512"
                                xml:space="preserve">
                                <g>
                                    <path
                                        d="M204.288 0C91.648 0 0 91.648 0 204.288s91.648 204.288 204.288 204.288 204.288-91.648 204.288-204.288S316.928 0 204.288 0zm114.176 150.528-130.56 129.536c-7.68 7.68-19.968 8.192-28.16.512L90.624 217.6c-8.192-7.68-8.704-20.48-1.536-28.672 7.68-8.192 20.48-8.704 28.672-1.024l54.784 50.176L289.28 121.344c8.192-8.192 20.992-8.192 29.184 0s8.192 20.992 0 29.184z"
                                        fill="#bb0001" data-original="#000000" class="" opacity="1"></path>
                                </g>
                            </svg>
                            <span> We create positive energy and have fun.</span>
                        </li>
                        <li>
                            <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                xmlns:xlink="http://www.w3.org/1999/xlink" width="512" height="512" x="0" y="0"
                                viewBox="0 0 408.576 408.576" style="enable-background: new 0 0 512 512"
                                xml:space="preserve">
                                <g>
                                    <path
                                        d="M204.288 0C91.648 0 0 91.648 0 204.288s91.648 204.288 204.288 204.288 204.288-91.648 204.288-204.288S316.928 0 204.288 0zm114.176 150.528-130.56 129.536c-7.68 7.68-19.968 8.192-28.16.512L90.624 217.6c-8.192-7.68-8.704-20.48-1.536-28.672 7.68-8.192 20.48-8.704 28.672-1.024l54.784 50.176L289.28 121.344c8.192-8.192 20.992-8.192 29.184 0s8.192 20.992 0 29.184z"
                                        fill="#bb0001" data-original="#000000" class="" opacity="1"></path>
                                </g>
                            </svg>
                            <span>We are inclusive & equitable. We honor each
                                individual.</span>
                        </li>
                        <li>
                            <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                xmlns:xlink="http://www.w3.org/1999/xlink" width="512" height="512" x="0" y="0"
                                viewBox="0 0 408.576 408.576" style="enable-background: new 0 0 512 512"
                                xml:space="preserve">
                                <g>
                                    <path
                                        d="M204.288 0C91.648 0 0 91.648 0 204.288s91.648 204.288 204.288 204.288 204.288-91.648 204.288-204.288S316.928 0 204.288 0zm114.176 150.528-130.56 129.536c-7.68 7.68-19.968 8.192-28.16.512L90.624 217.6c-8.192-7.68-8.704-20.48-1.536-28.672 7.68-8.192 20.48-8.704 28.672-1.024l54.784 50.176L289.28 121.344c8.192-8.192 20.992-8.192 29.184 0s8.192 20.992 0 29.184z"
                                        fill="#bb0001" data-original="#000000" class="" opacity="1"></path>
                                </g>
                            </svg>
                            <span>We practice balance in work and life.</span>
                        </li>
                        <li>
                            <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                xmlns:xlink="http://www.w3.org/1999/xlink" width="512" height="512" x="0" y="0"
                                viewBox="0 0 408.576 408.576" style="enable-background: new 0 0 512 512"
                                xml:space="preserve">
                                <g>
                                    <path
                                        d="M204.288 0C91.648 0 0 91.648 0 204.288s91.648 204.288 204.288 204.288 204.288-91.648 204.288-204.288S316.928 0 204.288 0zm114.176 150.528-130.56 129.536c-7.68 7.68-19.968 8.192-28.16.512L90.624 217.6c-8.192-7.68-8.704-20.48-1.536-28.672 7.68-8.192 20.48-8.704 28.672-1.024l54.784 50.176L289.28 121.344c8.192-8.192 20.992-8.192 29.184 0s8.192 20.992 0 29.184z"
                                        fill="#bb0001" data-original="#000000" class="" opacity="1"></path>
                                </g>
                            </svg>
                            <span>We work as a team.</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="pb-75">
        <div class="container w_1890 relative flex flex-column justify-center">
            <div class="swiper-btn btn-next-team r-50">
                <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"
                    width="512" height="512" x="0" y="0" viewBox="0 0 24 24"
                    style="enable-background: new 0 0 512 512" xml:space="preserve">
                    <g>
                        <path fill="#0c0c0c" fill-rule="evenodd"
                            d="M12.346 7.507a.75.75 0 0 1 1.059-.072l4.588 4a.75.75 0 0 1 0 1.13l-4.588 4a.75.75 0 1 1-.986-1.13l3.08-2.685H6.5a.75.75 0 0 1 0-1.5h8.998l-3.08-2.685a.75.75 0 0 1-.072-1.058z"
                            clip-rule="evenodd" data-original="#000000" class="" opacity="1"></path>
                    </g>
                </svg>
            </div>
            <div class="swiper-btn reverse btn-prev-team l-50">
                <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"
                    width="512" height="512" x="0" y="0" viewBox="0 0 24 24"
                    style="enable-background: new 0 0 512 512" xml:space="preserve">
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

    <section>
        <div class="container w_1650">
            <div class="row">
                <div class="col-md-12">
                    <div class="gradient about-inner style1 radius-30 wow fadeIn" data-wow-delay=".2s">
                        <div class="icon-bg icon_1 wow fadeInLeft" data-wow-delay=".3s">
                            <img src="{{ asset('public/frontend/assets/images/icon/chips.png') }}" alt="" />
                        </div>
                        <div class="icon-bg icon_2 wow fadeInRight" data-wow-delay=".3s">
                            <img src="{{ asset('public/frontend/assets/images/icon/hamburger-2.png') }}"
                                alt="" />
                        </div>
                        <div class="flex justify-between w-full flex-wrap">
                            <div class="swiper-container mySwiper2 w-full h-full">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="box">
                                            <div class="inner">
                                                <div class="icon mb-28">
                                                    <img src="{{ asset('public/frontend/assets/images/icon/icon_1.png') }}"
                                                        alt="" />
                                                </div>
                                                <h5 class="mb-0">Fair Pay With Tip</h5>
                                            </div>
                                            <div class="hover-effect">
                                                <h5 class="mb-20">Fair Pay With Tip</h5>
                                                <p class="color-5">
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing
                                                    elit. Ut elit tellus, luctus nec ullamcorper
                                                    mattis.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="box">
                                            <div class="inner">
                                                <div class="icon mb-28">
                                                    <img src="{{ asset('public/frontend/assets/images/icon/icon_2.png') }}"
                                                        alt="" />
                                                </div>
                                                <h5 class="mb-0">Healthcare Benefits</h5>
                                            </div>
                                            <div class="hover-effect">
                                                <h5 class="mb-20">Healthcare Benefits</h5>
                                                <p class="color-5">
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing
                                                    elit. Ut elit tellus, luctus nec ullamcorper
                                                    mattis.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="box">
                                            <div class="inner">
                                                <div class="icon mb-28">
                                                    <img src="{{ asset('public/frontend/assets/images/icon/icon_3.png') }}"
                                                        alt="" />
                                                </div>
                                                <h5 class="mb-0">401K</h5>
                                            </div>
                                            <div class="hover-effect">
                                                <h5 class="mb-20">401K</h5>
                                                <p class="color-5">
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing
                                                    elit. Ut elit tellus, luctus nec ullamcorper
                                                    mattis.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="box">
                                            <div class="inner">
                                                <div class="icon mb-28">
                                                    <img src="{{ asset('public/frontend/assets/images/icon/icon_4.png') }}"
                                                        alt="" />
                                                </div>
                                                <h5 class="mb-0">Unity Culture</h5>
                                            </div>
                                            <div class="hover-effect">
                                                <h5 class="mb-20">Unity Culture</h5>
                                                <p class="color-5">
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing
                                                    elit. Ut elit tellus, luctus nec ullamcorper
                                                    mattis.
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

    <section class="tf-section pb-130">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="tf-title center pb-30 mb-76 wow fadeInUp" data-wow-delay=".2s">
                        <p class="sub-title">The right job for you</p>
                        <h2 class="mb-16">Features Jobs</h2>
                        <p class="fz-17">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed
                            molestie tellus non leo aliquam, <br class="show-desktop" />
                            quis mattis dui ullamcorper. Maecenas vehicula dolor neque.
                        </p>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="job-box wow fadeInUp" data-wow-delay=".2s">
                        <div class="content">
                            <h5 class="title color-3">
                                Part-time Employee New Store Basilico
                            </h5>
                            <ul class="flex mobile-mb30">
                                <li><span>Time:</span> 12/05/2023</li>
                                <li><span>Work: </span> Part Time</li>
                                <li>
                                    <span>Status: </span> Recruitment till date 30/05/2023
                                </li>
                            </ul>
                        </div>
                        <div class="flex justify-end mobile-flex-start">
                            <a href="teams.html" class="tf-button">read more</a>
                        </div>
                    </div>

                    <div class="job-box wow fadeInUp" data-wow-delay=".2s">
                        <div class="content">
                            <h5 class="title color-3">
                                Hiring For a Full-time Manager Position at a Restaurant
                            </h5>
                            <ul class="flex mobile-mb30">
                                <li><span>Time:</span> 12/05/2023</li>
                                <li><span>Work: </span> Part Time</li>
                                <li>
                                    <span>Status: </span> Recruitment till date 30/05/2023
                                </li>
                            </ul>
                        </div>
                        <div class="flex justify-end mobile-flex-start">
                            <a href="teams.html" class="tf-button">read more</a>
                        </div>
                    </div>

                    <div class="job-box wow fadeInUp" data-wow-delay=".2s">
                        <div class="content">
                            <h5 class="title color-3">Delivery Staff Recruitment</h5>
                            <ul class="flex mobile-mb30">
                                <li><span>Time:</span> 12/05/2023</li>
                                <li><span>Work: </span> Part Time</li>
                                <li>
                                    <span>Status: </span> Recruitment till date 30/05/2023
                                </li>
                            </ul>
                        </div>
                        <div class="flex justify-end mobile-flex-start">
                            <a href="teams.html" class="tf-button">read more</a>
                        </div>
                    </div>

                    <div class="job-box wow fadeInUp" data-wow-delay=".2s">
                        <div class="content">
                            <h5 class="title color-3">
                                Services Full-time Staff Recruitment
                            </h5>
                            <ul class="flex mobile-mb30">
                                <li><span>Time:</span> 12/05/2023</li>
                                <li><span>Work: </span> Part Time</li>
                                <li>
                                    <span>Status: </span> Recruitment till date 30/05/2023
                                </li>
                            </ul>
                        </div>
                        <div class="flex justify-end mobile-flex-start">
                            <a href="teams.html" class="tf-button">read more</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
