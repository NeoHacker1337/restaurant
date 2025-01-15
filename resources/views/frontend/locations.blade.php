@extends('frontend.layouts.master')
@section('content')
    <section class="page-title relative mt-122">
        <div class="container w_1890">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-title-inner hidden">
                        <div class="bg-page-title-inner">
                            <img class="parallax"
                                src="{{ asset('public/frontend/assets/images/backgroup/page-title_10.jpg') }}"
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
                            <h1 class="title center">Locations</h1>
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
                                    <span>Locations</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="pt-130 pb-80">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-12 mb-50 wow fadeIn" data-wow-delay=".2s">
                    <div class="location-box gradient">
                        <h4>
                            Basilico Fastfood <span class="color-main"> NewYork</span>
                        </h4>
                        <ul>
                            <li>
                                <span>Address: 1614 E. Bell Rd #104. Salerno, AZ 85022</span>
                            </li>
                            <li><span>Mail: themesflat@gmail.com</span></li>
                            <li><span>Phone: (989) 867-1010</span></li>
                            <li>
                                <span>Open Time: Mon - Fri: 10am - 11pm <br />
                                    Sat: 9am - 11pm, Holiday: Closes</span>
                            </li>
                        </ul>
                        <div class="flex">
                            <a href="contact.html" class="tf-button">get directions
                                <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" width="512" height="512" x="0" y="0"
                                    viewBox="0 0 24 24" style="enable-background: new 0 0 512 512" xml:space="preserve">
                                    <g>
                                        <path fill="#0c0c0c" fill-rule="evenodd"
                                            d="M12.346 7.507a.75.75 0 0 1 1.059-.072l4.588 4a.75.75 0 0 1 0 1.13l-4.588 4a.75.75 0 1 1-.986-1.13l3.08-2.685H6.5a.75.75 0 0 1 0-1.5h8.998l-3.08-2.685a.75.75 0 0 1-.072-1.058z"
                                            clip-rule="evenodd" data-original="#000000" class="" opacity="1">
                                        </path>
                                    </g>
                                </svg></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 mb-50 wow fadeIn" data-wow-delay=".4s">
                    <div class="widget-gg-map flex hidden radius-20 h-full min-height-400">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d97101.88872869895!2d-74.22688511715344!3d40.487336736141906!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1svi!2s!4v1689125037376!5m2!1svi!2s"
                            style="border: 0; width: 100%" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>

                <div class="col-lg-4 col-md-12 mb-50 wow fadeIn" data-wow-delay=".6s">
                    <div class="hidden radius-20 h-full">
                        <img class="h-full w-full" src="{{ asset('public/frontend/assets/images/common/item_39.jpg') }}"
                            alt="" />
                    </div>
                </div>

                <div class="col-lg-4 col-md-12 mb-50 wow fadeIn" data-wow-delay=".2s">
                    <div class="hidden radius-20 h-full">
                        <img class="h-full w-full" src="{{ asset('public/frontend/assets/images/common/item_40.jpg') }}"
                            alt="" />
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 mb-50 wow fadeIn" data-wow-delay=".4s">
                    <div class="widget-gg-map flex hidden radius-20 h-full min-height-400">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d97101.88872869895!2d-74.22688511715344!3d40.487336736141906!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1svi!2s!4v1689125037376!5m2!1svi!2s"
                            style="border: 0; width: 100%" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 mb-50 wow fadeIn" data-wow-delay=".6s">
                    <div class="location-box gradient">
                        <h4>
                            Basilico Fastfood <span class="color-main"> LonDon</span>
                        </h4>
                        <ul>
                            <li>
                                <span>Address: 1614 E. Bell Rd #104. Salerno, AZ 85022</span>
                            </li>
                            <li><span>Mail: themesflat@gmail.com</span></li>
                            <li><span>Phone: (989) 867-1010</span></li>
                            <li>
                                <span>Open Time: Mon - Fri: 10am - 11pm <br />
                                    Sat: 9am - 11pm, Holiday: Closes</span>
                            </li>
                        </ul>
                        <div class="flex">
                            <a href="contact.html" class="tf-button">get directions
                                <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" width="512" height="512" x="0" y="0"
                                    viewBox="0 0 24 24" style="enable-background: new 0 0 512 512" xml:space="preserve">
                                    <g>
                                        <path fill="#0c0c0c" fill-rule="evenodd"
                                            d="M12.346 7.507a.75.75 0 0 1 1.059-.072l4.588 4a.75.75 0 0 1 0 1.13l-4.588 4a.75.75 0 1 1-.986-1.13l3.08-2.685H6.5a.75.75 0 0 1 0-1.5h8.998l-3.08-2.685a.75.75 0 0 1-.072-1.058z"
                                            clip-rule="evenodd" data-original="#000000" class="" opacity="1">
                                        </path>
                                    </g>
                                </svg></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-12 mb-50 wow fadeIn" data-wow-delay=".2s">
                    <div class="location-box gradient">
                        <h4>
                            Basilico Fastfood <span class="color-main">NewYork</span>
                        </h4>
                        <ul>
                            <li>
                                <span>Address: 1614 E. Bell Rd #104. Salerno, AZ 85022</span>
                            </li>
                            <li><span>Mail: themesflat@gmail.com</span></li>
                            <li><span>Phone: (989) 867-1010</span></li>
                            <li>
                                <span>Open Time: Mon - Fri: 10am - 11pm <br />
                                    Sat: 9am - 11pm, Holiday: Closes</span>
                            </li>
                        </ul>
                        <div class="flex">
                            <a href="contact.html" class="tf-button">get directions
                                <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" width="512" height="512" x="0" y="0"
                                    viewBox="0 0 24 24" style="enable-background: new 0 0 512 512" xml:space="preserve">
                                    <g>
                                        <path fill="#0c0c0c" fill-rule="evenodd"
                                            d="M12.346 7.507a.75.75 0 0 1 1.059-.072l4.588 4a.75.75 0 0 1 0 1.13l-4.588 4a.75.75 0 1 1-.986-1.13l3.08-2.685H6.5a.75.75 0 0 1 0-1.5h8.998l-3.08-2.685a.75.75 0 0 1-.072-1.058z"
                                            clip-rule="evenodd" data-original="#000000" class="" opacity="1">
                                        </path>
                                    </g>
                                </svg></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 mb-50 wow fadeIn" data-wow-delay=".4s">
                    <div class="widget-gg-map flex hidden radius-20 h-full min-height-400">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d97101.88872869895!2d-74.22688511715344!3d40.487336736141906!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1svi!2s!4v1689125037376!5m2!1svi!2s"
                            style="border: 0; width: 100%" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>

                <div class="col-lg-4 col-md-12 mb-50 mobile-mb0 wow fadeIn" data-wow-delay=".6s">
                    <div class="hidden radius-20 h-full">
                        <img class="h-full w-full" src="{{ asset('public/frontend/assets/images/common/item_41.jpg') }}"
                            alt="" />
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="tf-section restaurant-section pt-118 pb-120">
        <div class="overlay"></div>
        <div class="img-bg">
            <img class="parallax" src="{{ asset('public/frontend/assets/images/backgroup/bg-section-14.jpg') }}"
                alt="" />
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="restaurant-form">
                        <form action="#">
                            <h2>Find a Restaurant</h2>
                            <p class="desc">
                                Search for our locations across the United States and
                                Canada.
                            </p>
                            <fieldset class="mb-30">
                                <input type="text" name="inp"
                                    placeholder="Enter by zip/postal code, city and state, or address" required />
                            </fieldset>
                            <div class="flex flex-wrap">
                                <button class="tf-button mr-12 mb-10" type="submit">
                                    use my location <i class="fas fa-map-marker-alt"></i>
                                </button>
                                <button class="tf-button mb-10 style" type="submit">
                                    search location
                                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" width="512" height="512" x="0"
                                        y="0" viewBox="0 0 118.783 118.783" style="enable-background: new 0 0 512 512"
                                        xml:space="preserve">
                                        <g>
                                            <path
                                                d="M115.97 101.597 88.661 74.286a47.75 47.75 0 0 0 7.333-25.488c0-26.509-21.49-47.996-47.998-47.996S0 22.289 0 48.798c0 26.51 21.487 47.995 47.996 47.995a47.776 47.776 0 0 0 27.414-8.605l26.984 26.986a9.574 9.574 0 0 0 6.788 2.806 9.58 9.58 0 0 0 6.791-2.806 9.602 9.602 0 0 0-.003-13.577zM47.996 81.243c-17.917 0-32.443-14.525-32.443-32.443s14.526-32.444 32.443-32.444c17.918 0 32.443 14.526 32.443 32.444S65.914 81.243 47.996 81.243z"
                                                fill="#ffffff" opacity="1" data-original="#000000" class="">
                                            </path>
                                        </g>
                                    </svg>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
