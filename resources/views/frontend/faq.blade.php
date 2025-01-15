@extends('frontend.layouts.master')
@section('content')
    <section class="page-title relative mt-122 hidden">
        <div class="container w_1890">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-title-inner hidden">
                        <div class="bg-page-title-inner">
                            <img class="parallax" src="{{ asset('public/frontend/assets/images/backgroup/page-title_11.jpg') }}" alt="" />
                        </div>
                        <img class="icon_1 wow fadeInLeft" data-wow-delay=".2s"
                            src="{{ asset('public/frontend/assets/images/backgroup/icon_page-title.png') }}" alt="" />
                        <img class="icon_2 wow fadeInRight" data-wow-delay=".2s"
                            src="{{ asset('public/frontend/assets/images/backgroup/icon_2_page-title.png') }}" alt="" />
                        <div class="overlay"></div>
                        <div class="breadcrumb flex flex-column items-center wow fadeIn" data-wow-delay=".2s">
                            <h1 class="title center">FAQs</h1>
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
                                    <span>FAQs</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="tf-section pt-130 pb-124">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-12">
                    <div class="side-bar tablet-mb-30">
                        <div class="gradient radius-30 py-14 px-35 mb6">
                            <h6 class="mb-0 text-spacing-0_5">Search Questions</h6>
                        </div>

                        <div class="widget-search mb-40">
                            <form action="#" class="form-search">
                                <input type="search" placeholder="Write content..." required />
                                <button class="" type="submit">
                                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" width="512" height="512" x="0" y="0"
                                        viewBox="0 0 118.783 118.783" style="enable-background: new 0 0 512 512"
                                        xml:space="preserve">
                                        <g>
                                            <path
                                                d="M115.97 101.597 88.661 74.286a47.75 47.75 0 0 0 7.333-25.488c0-26.509-21.49-47.996-47.998-47.996S0 22.289 0 48.798c0 26.51 21.487 47.995 47.996 47.995a47.776 47.776 0 0 0 27.414-8.605l26.984 26.986a9.574 9.574 0 0 0 6.788 2.806 9.58 9.58 0 0 0 6.791-2.806 9.602 9.602 0 0 0-.003-13.577zM47.996 81.243c-17.917 0-32.443-14.525-32.443-32.443s14.526-32.444 32.443-32.444c17.918 0 32.443 14.526 32.443 32.444S65.914 81.243 47.996 81.243z"
                                                fill="#ffffff" opacity="1" data-original="#000000" class=""></path>
                                        </g>
                                    </svg>
                                </button>
                            </form>
                        </div>

                        <ul class="widget-link mb-42">
                            <li>
                                <a href="#"><svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" width="512" height="512" x="0" y="0"
                                        viewBox="0 0 24 24" style="enable-background: new 0 0 512 512" xml:space="preserve">
                                        <g>
                                            <path fill="#0c0c0c" fill-rule="evenodd"
                                                d="M12.346 7.507a.75.75 0 0 1 1.059-.072l4.588 4a.75.75 0 0 1 0 1.13l-4.588 4a.75.75 0 1 1-.986-1.13l3.08-2.685H6.5a.75.75 0 0 1 0-1.5h8.998l-3.08-2.685a.75.75 0 0 1-.072-1.058z"
                                                clip-rule="evenodd" data-original="#000000" class="" opacity="1">
                                            </path>
                                        </g>
                                    </svg>Company policies and procedures</a>
                            </li>
                            <li>
                                <a href="#"><svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" width="512" height="512" x="0" y="0"
                                        viewBox="0 0 24 24" style="enable-background: new 0 0 512 512" xml:space="preserve">
                                        <g>
                                            <path fill="#0c0c0c" fill-rule="evenodd"
                                                d="M12.346 7.507a.75.75 0 0 1 1.059-.072l4.588 4a.75.75 0 0 1 0 1.13l-4.588 4a.75.75 0 1 1-.986-1.13l3.08-2.685H6.5a.75.75 0 0 1 0-1.5h8.998l-3.08-2.685a.75.75 0 0 1-.072-1.058z"
                                                clip-rule="evenodd" data-original="#000000" class="" opacity="1">
                                            </path>
                                        </g>
                                    </svg>Payment options</a>
                            </li>
                            <li>
                                <a href="#"><svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" width="512" height="512" x="0" y="0"
                                        viewBox="0 0 24 24" style="enable-background: new 0 0 512 512"
                                        xml:space="preserve">
                                        <g>
                                            <path fill="#0c0c0c" fill-rule="evenodd"
                                                d="M12.346 7.507a.75.75 0 0 1 1.059-.072l4.588 4a.75.75 0 0 1 0 1.13l-4.588 4a.75.75 0 1 1-.986-1.13l3.08-2.685H6.5a.75.75 0 0 1 0-1.5h8.998l-3.08-2.685a.75.75 0 0 1-.072-1.058z"
                                                clip-rule="evenodd" data-original="#000000" class=""
                                                opacity="1"></path>
                                        </g>
                                    </svg>Terms and conditions</a>
                            </li>
                            <li>
                                <a href="#"><svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" width="512" height="512" x="0"
                                        y="0" viewBox="0 0 24 24" style="enable-background: new 0 0 512 512"
                                        xml:space="preserve">
                                        <g>
                                            <path fill="#0c0c0c" fill-rule="evenodd"
                                                d="M12.346 7.507a.75.75 0 0 1 1.059-.072l4.588 4a.75.75 0 0 1 0 1.13l-4.588 4a.75.75 0 1 1-.986-1.13l3.08-2.685H6.5a.75.75 0 0 1 0-1.5h8.998l-3.08-2.685a.75.75 0 0 1-.072-1.058z"
                                                clip-rule="evenodd" data-original="#000000" class=""
                                                opacity="1"></path>
                                        </g>
                                    </svg>How do I log in</a>
                            </li>
                            <li>
                                <a href="#"><svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" width="512" height="512" x="0"
                                        y="0" viewBox="0 0 24 24" style="enable-background: new 0 0 512 512"
                                        xml:space="preserve">
                                        <g>
                                            <path fill="#0c0c0c" fill-rule="evenodd"
                                                d="M12.346 7.507a.75.75 0 0 1 1.059-.072l4.588 4a.75.75 0 0 1 0 1.13l-4.588 4a.75.75 0 1 1-.986-1.13l3.08-2.685H6.5a.75.75 0 0 1 0-1.5h8.998l-3.08-2.685a.75.75 0 0 1-.072-1.058z"
                                                clip-rule="evenodd" data-original="#000000" class=""
                                                opacity="1"></path>
                                        </g>
                                    </svg>How delivery works in Europe</a>
                            </li>
                        </ul>
                        <div class="image">
                            <img class="radius-20 w-full" src="{{ asset('public/frontend/assets/images/backgroup/bg-box-5.jpg') }}" alt="" />
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-md-12">
                    <div class="article faqs">
                        <div class="box mb-50">
                            <div class="icon">
                                <img src="{{ asset('public/frontend/assets/images/icon/icon_faq.png') }}" alt="" />
                            </div>
                            <h5 class="color-3 pr-100 mb-0">
                                Do you have a few questions? Check out our popular
                                questions.
                            </h5>
                        </div>

                        <div class="flat-accordion wow fadeIn mb-126" data-wow-delay=".3s">
                            <div class="flat-toggle active">
                                <div class="toggle-title active">
                                    <h5 class="title">
                                        Can I purchase more than one of each item in the merch
                                        drops?
                                    </h5>
                                    <span class="icon">
                                        <i class="fas fa-chevron-down"></i>
                                    </span>
                                </div>
                                <div class="toggle-content">
                                    <p>
                                        During the first merch drop of the Retro Grimace Pool
                                        Float, fans are limited to one per person. For the Free
                                        & Easy, Ma®ket, innisfree and Kid Cudi merch drops,
                                        there are no purchase limits.
                                    </p>
                                </div>
                            </div>

                            <div class="flat-toggle">
                                <div class="toggle-title">
                                    <h5 class="title">
                                        I'm doing a paper. Can you answer some questions about
                                        Basilico for me?
                                    </h5>
                                    <span class="icon">
                                        <i class="fas fa-chevron-down"></i>
                                    </span>
                                </div>
                                <div class="toggle-content">
                                    <p>
                                        During the first merch drop of the Retro Grimace Pool
                                        Float, fans are limited to one per person. For the Free
                                        & Easy, Ma®ket, innisfree and Kid Cudi merch drops,
                                        there are no purchase limits.
                                    </p>
                                </div>
                            </div>

                            <div class="flat-toggle">
                                <div class="toggle-title">
                                    <h5 class="title">
                                        How do I apply for employment at Basilico?
                                    </h5>
                                    <span class="icon">
                                        <i class="fas fa-chevron-down"></i>
                                    </span>
                                </div>
                                <div class="toggle-content">
                                    <p>
                                        During the first merch drop of the Retro Grimace Pool
                                        Float, fans are limited to one per person. For the Free
                                        & Easy, Ma®ket, innisfree and Kid Cudi merch drops,
                                        there are no purchase limits.
                                    </p>
                                </div>
                            </div>

                            <div class="flat-toggle">
                                <div class="toggle-title">
                                    <h5 class="title">
                                        Where can I buy Basilico t-shirts/hats/gear?
                                    </h5>
                                    <span class="icon">
                                        <i class="fas fa-chevron-down"></i>
                                    </span>
                                </div>
                                <div class="toggle-content">
                                    <p>
                                        During the first merch drop of the Retro Grimace Pool
                                        Float, fans are limited to one per person. For the Free
                                        & Easy, Ma®ket, innisfree and Kid Cudi merch drops,
                                        there are no purchase limits.
                                    </p>
                                </div>
                            </div>

                            <div class="flat-toggle">
                                <div class="toggle-title">
                                    <h5 class="title">
                                        I was double charged at Basilico today. How do I get my
                                        money?
                                    </h5>
                                    <span class="icon">
                                        <i class="fas fa-chevron-down"></i>
                                    </span>
                                </div>
                                <div class="toggle-content">
                                    <p>
                                        During the first merch drop of the Retro Grimace Pool
                                        Float, fans are limited to one per person. For the Free
                                        & Easy, Ma®ket, innisfree and Kid Cudi merch drops,
                                        there are no purchase limits.
                                    </p>
                                </div>
                            </div>

                            <div class="flat-toggle">
                                <div class="toggle-title">
                                    <h5 class="title">
                                        Have a specific question about Basilico food?
                                    </h5>
                                    <span class="icon">
                                        <i class="fas fa-chevron-down"></i>
                                    </span>
                                </div>
                                <div class="toggle-content">
                                    <p>
                                        During the first merch drop of the Retro Grimace Pool
                                        Float, fans are limited to one per person. For the Free
                                        & Easy, Ma®ket, innisfree and Kid Cudi merch drops,
                                        there are no purchase limits.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="question">
                            <div class="content">
                                <p>Did not find the question satisfactory?</p>
                                <h3>Ask Us A Question.</h3>
                                <div class="flex">
                                    <a href="contact.html" class="tf-button">contact us now</a>
                                </div>
                            </div>
                            <img class="bg" src="{{ asset('public/frontend/assets/images/common/question.png') }}" alt="" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
