@extends('frontend.layouts.master')
@section('content')
    <section class="page-title relative mt-122">
        <div class="container w_1890">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-title-inner hidden">
                        <div class="bg-page-title-inner">
                            <img class="parallax" src="{{ asset('public/frontend/assets/images/backgroup/page-title_8.jpg') }}" alt="" />
                        </div>
                        <img class="icon_1 wow fadeInLeft" data-wow-delay=".2s"
                            src="{{ asset('public/frontend/assets/images/backgroup/icon_page-title.png') }}" alt="" />
                        <img class="icon_2 wow fadeInRight" data-wow-delay=".2s"
                            src="{{ asset('public/frontend/assets/images/backgroup/icon_2_page-title.png') }}" alt="" />
                        <div class="overlay"></div>
                        <div class="breadcrumb flex flex-column items-center wow fadeIn" data-wow-delay=".2s">
                            <h1 class="title center">Order Online</h1>
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
                                    <span>Order Online</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="tf-section pt-130 pb-0">
        <div class="container">
            <div class="row">
                <div class="col-md-6 wow fadeIn" data-wow-delay=".3s">
                    <div class="flat-tabs style4 mobile-mb30">
                        <div class="content-tab">
                            <div class="content-inner active">
                                <div class="image">
                                    <img src="{{ asset('public/frontend/assets/images/common/item_68.png') }}" alt="" />
                                </div>
                            </div>
                            <div class="content-inner">
                                <div class="image">
                                    <img src="{{ asset('public/frontend/assets/images/common/item_68.png') }}" alt="" />
                                </div>
                            </div>
                            <div class="content-inner">
                                <div class="image">
                                    <img src="{{ asset('public/frontend/assets/images/common/item_68.png') }}" alt="" />
                                </div>
                            </div>
                        </div>

                        <ul class="menu-tab">
                            <li class="active">
                                <img src="{{ asset('public/frontend/assets/images/common/item_67.png') }}" alt="" />
                            </li>
                            <li>
                                <img src="{{ asset('public/frontend/assets/images/common/item_67.png') }}" alt="" />
                            </li>
                            <li>
                                <img src="{{ asset('public/frontend/assets/images/common/item_67.png') }}" alt="" />
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 wow fadeIn" data-wow-delay=".3s">
                    <div class="info-details">
                        <div class="flex tag mb-26">
                            <span class="sale">Sale!</span>
                        </div>
                        <h4 class="color-3 text-spacing-0_5 mb-22">
                            BBQ Chicken Breast
                        </h4>
                        <div class="flex mb-28 boder-bottom pb-32">
                            <div class="price mr-30">$6.00<span>$8.00</span></div>
                            <ul class="rating rating_5">
                                <li>
                                    <span><i class="fas fa-star"></i></span>
                                </li>
                                <li>
                                    <span><i class="fas fa-star"></i></span>
                                </li>
                                <li>
                                    <span><i class="fas fa-star"></i></span>
                                </li>
                                <li>
                                    <span><i class="fas fa-star"></i></span>
                                </li>
                                <li>
                                    <span><i class="fas fa-star"></i></span>
                                </li>
                            </ul>
                        </div>
                        <p class="boder-bottom pb-25 mb-27">
                            Thing lesser replenish evening called void a sea blessed meat
                            fourth called moveth place Quarter Rack of Ribs served with
                            your choice of side Pulled Pork, Beer Braised Brisket.
                        </p>

                        <div class="boder-bottom mb-27">
                            <h6 class="color-3 mb-15 text-spacing-1">
                                Nutritional Value Per 100g:
                            </h6>
                            <ul class="info">
                                <li>Calories: <span>550kcal</span></li>
                                <li>Carbohydrates: <span>50g</span></li>
                                <li>Squirrels: <span>50g</span></li>
                                <li>Fats: <span>20g</span></li>
                            </ul>
                        </div>
                        <div class="boder-bottom pb-35 mb-26">
                            <h6 class="text-spacing-1 color-3 mb-20">
                                Choose Your Options:
                            </h6>
                            <div class="flex">
                                <a href="{{ route('order.page') }}" class="tf-button mr-12">select option</a>
                                <a href="#" class="mr-10 link"><img src="{{ asset('public/frontend/assets/images/icon/cart.png') }}"
                                        alt="" /></a>
                                <a href="#" class="link"><img src="{{ asset('public/frontend/assets/images/icon/hear.png') }}"
                                        alt="" /></a>
                            </div>
                        </div>
                        <div class="boder-bottom pb-28 mb-20">
                            <ul class="info-list">
                                <li><span>SKU:</span> 13750</li>
                                <li><span>Category:</span> Fresh Coffee</li>
                                <li><span>Tags:</span> Black, Casual, Classic</li>
                            </ul>
                        </div>
                        <div class="flex items-center">
                            <h6 class="mb-0 color-3 text-spacing-0_5 mr-20">Share:</h6>
                            <ul class="social flex">
                                <li>
                                    <a href="#" class=""><i class="fab fa-facebook-f"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fab fa-pinterest"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fab fa-skype"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 mt-43 wow fadeIn" data-wow-delay=".3s">
                    <div class="tab-style2">
                        <ul>
                            <li class="tabmenu active" data-tab="tab-1">Description</li>
                            <li class="tabmenu" data-tab="tab-2">
                                Additional information
                            </li>
                            <li class="tabmenu" data-tab="tab-3">Review (1)</li>
                        </ul>
                        <div id="tab-1" class="tabcontent active">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                sed do eiusmod tempor incididunt ut labore et dolore magna
                                aliqua. Ut elit tellus, luctus nec ullamcorper mattis.
                                Maecenas laoreet posuere ipsum, nec faucibus est. Sed
                                pretium vulputate ante ut venenatis. Nam in purus ut mauris
                                pharetra imperdiet eu vitae felis. Aenean iaculis risus mi,
                                non hendrerit est finibus lobortis. Quisque in euismod diam.
                                In facilisis odio lacus, at dignissim augue egestas porta.
                            </p>
                        </div>
                        <div id="tab-2" class="tabcontent">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                sed do eiusmod tempor incididunt ut labore et dolore magna
                                aliqua. Ut elit tellus, luctus nec ullamcorper mattis.
                                Maecenas laoreet posuere ipsum, nec faucibus est. Sed
                                pretium vulputate ante ut venenatis. Nam in purus ut mauris
                                pharetra imperdiet eu vitae felis. Aenean iaculis risus mi,
                                non hendrerit est finibus lobortis. Quisque in euismod diam.
                                In facilisis odio lacus, at dignissim augue egestas porta.
                            </p>
                        </div>
                        <div id="tab-3" class="tabcontent">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                sed do eiusmod tempor incididunt ut labore et dolore magna
                                aliqua. Ut elit tellus, luctus nec ullamcorper mattis.
                                Maecenas laoreet posuere ipsum, nec faucibus est. Sed
                                pretium vulputate ante ut venenatis. Nam in purus ut mauris
                                pharetra imperdiet eu vitae felis. Aenean iaculis risus mi,
                                non hendrerit est finibus lobortis. Quisque in euismod diam.
                                In facilisis odio lacus, at dignissim augue egestas porta.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="tf-section pt-118 pb-58">
        <div class="container w_1450">
            <div class="row">
                <div class="col-md-12">
                    <div class="tf-title center pb-33 mb-70 wow fadeInUp" data-wow-delay=".2s">
                        <p class="sub-title">discovery more</p>
                        <h2 class="mb-16">Related Products</h2>
                        <p>
                            Proin gravida nibh vel velit auctor aliquet. Aenean
                            sollicitudin, loremendum nisi elit sequat ipsum
                        </p>
                    </div>
                </div>
                <div class="col-md-12 relative flex items-center wow fadeIn" data-wow-delay=".3s">
                    <div class="swiper-btn btn-next-team btn-next-product-6 r-26 absolute">
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
                    <div class="swiper-btn reverse btn-prev-team btn-prev-product-6 l-26 absolute">
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
                    <div class="wrapper-product-6 relative">
                        <div class="swiper-container sl-product-6">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="product-4">
                                        <div class="image">
                                            <div class="flex info">
                                                <a href="#" class="seasonal">Seasonal</a>
                                                <a href="#" class="new">New</a>
                                            </div>
                                            <img src="{{ asset('public/frontend/assets/images/common/item_58.png') }}" alt="" />
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
                                            <a href="#" class="tf-button mr-12">select option</a>
                                            <a href="#" class="mr-10 action"><img src="{{ asset('public/frontend/assets/images/icon/cart.png') }}"
                                                    alt="" /></a>
                                            <a href="#" class="action"><img src="{{ asset('public/frontend/assets/images/icon/hear.png') }}"
                                                    alt="" /></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="product-4">
                                        <div class="image">
                                            <img src="{{ asset('public/frontend/assets/images/common/item_59.png') }}" alt="" />
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
                                            <a href="#" class="tf-button mr-12">select option</a>
                                            <a href="#" class="mr-10 action"><img src="{{ asset('public/frontend/assets/images/icon/cart.png') }}"
                                                    alt="" /></a>
                                            <a href="#" class="action"><img src="{{ asset('public/frontend/assets/images/icon/hear.png') }}"
                                                    alt="" /></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="product-4">
                                        <div class="image">
                                            <img src="{{ asset('public/frontend/assets/images/common/item_60.png') }}" alt="" />
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
                                            <a href="#" class="tf-button mr-12">select option</a>
                                            <a href="#" class="mr-10 action"><img src="{{ asset('public/frontend/assets/images/icon/cart.png') }}"
                                                    alt="" /></a>
                                            <a href="#" class="action"><img src="{{ asset('public/frontend/assets/images/icon/hear.png') }}"
                                                    alt="" /></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="product-4">
                                        <div class="image">
                                            <img src="{{ asset('public/frontend/assets/images/common/item_59.png') }}" alt="" />
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
                                            <a href="#" class="tf-button mr-12">select option</a>
                                            <a href="#" class="mr-10 action"><img src="{{ asset('public/frontend/assets/images/icon/cart.png') }}"
                                                    alt="" /></a>
                                            <a href="#" class="action"><img src="{{ asset('public/frontend/assets/images/icon/hear.png') }}"
                                                    alt="" /></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="product-4">
                                        <div class="image">
                                            <img src="{{ asset('public/frontend/assets/images/common/item_60.png') }}" alt="" />
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
                                            <a href="#" class="tf-button mr-12">select option</a>
                                            <a href="#" class="mr-10 action"><img src="{{ asset('public/frontend/assets/images/icon/cart.png') }}"
                                                    alt="" /></a>
                                            <a href="#" class="action"><img src="{{ asset('public/frontend/assets/images/icon/hear.png') }}"
                                                    alt="" /></a>
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
@endsection
