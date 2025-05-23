@extends('frontend.layouts.master')
@section('content')
    
<section class="mt-120">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="swiper-container sl-product-4">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <div class="item-box-2">
                  <div class="image mb-10">
                    <img src="{{ asset('public/frontend/assets/images/common/item_22.png') }}" alt="" />
                  </div>
                  <h6 class="center color-3 mb-0">
                    <a href="#">Burgers</a>
                  </h6>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="item-box-2">
                  <div class="image mb-10">
                    <img src="{{ asset('public/frontend/assets/images/common/item_23.png') }}" alt="" />
                  </div>
                  <h6 class="center color-3 mb-0">
                    <a href="#">Sandwich</a>
                  </h6>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="item-box-2">
                  <div class="image mb-10">
                    <img src="{{ asset('public/frontend/assets/images/common/item_24.png') }}" alt="" />
                  </div>
                  <h6 class="center color-3 mb-0">
                    <a href="#">Drinks</a>
                  </h6>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="item-box-2">
                  <div class="image mb-10">
                    <img src="{{ asset('public/frontend/assets/images/common/item_25.png') }}" alt="" />
                  </div>
                  <h6 class="center color-3 mb-0">
                    <a href="#">Appetizer</a>
                  </h6>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="item-box-2">
                  <div class="image mb-10">
                    <img src="{{ asset('public/frontend/assets/images/common/item_26.png') }}" alt="" />
                  </div>
                  <h6 class="center color-3 mb-0">
                    <a href="#">Fried Chicken</a>
                  </h6>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="item-box-2">
                  <div class="image mb-10">
                    <img src="{{ asset('public/frontend/assets/images/common/item_27.png') }}" alt="" />
                  </div>
                  <h6 class="center color-3 mb-0"><a href="#">Salad</a></h6>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="item-box-2">
                  <div class="image mb-10">
                    <img src="{{ asset('public/frontend/assets/images/common/item_22.png') }}" alt="" />
                  </div>
                  <h6 class="center color-3 mb-0">
                    <a href="#">Burgers</a>
                  </h6>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="relative wow fadeIn" data-wow-delay=".3s">
    <div class="container w_1920 pd0 banner-top">
      <div class="row">
        <div class="col-md-12">
          <div class="slider-page-style2">
            <div class="swiper-container mySwiper1 gradient-2">
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <div class="slide-inner t1">
                    <img
                      class="bg_slide"
                      src="{{ asset('public/frontend/assets/images/common/item_28-1.png') }}"
                      alt=""
                    />
                    <div class="content">
                      <h2 class="capitalize mb-0">
                        The Fastest Food, <br>
                        For Instant Hunger, <br>
                        Fun With Food.
                      </h2>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="slide-inner">
                    <img
                      class="bg_slide"
                      src="{{ asset('public/frontend/assets/images/common/item_28.png') }}"
                      alt=""
                    />
                    <div class="image">
                      <img
                        src="{{ asset('public/frontend/assets/images/common/item_29.png') }}"
                        alt=""
                      />
                    </div>
                    <div class="content pl-20 pb-16">
                      <h2 class="capitalize mb-0">
                        Burger. <br />
                        Fried Chicken. <br />
                        Spaghetti. <br />
                        Pizza,... <br />
                        It’s Ready!
                      </h2>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="right">
              <div class="box relative flex items-center">
                <img
                  class="bg_slide"
                  src="{{ asset('public/frontend/assets/images/backgroup/bg-section-4.jpg') }}"
                  alt=""
                />
                <div class="content">
                  <h5 class="mb-12">Call Us To Order</h5>
                  <h3 class="mb-12 text-spacing-1 italic">910-344-7520</h3>
                  <p class="white mb-34">
                    Call us to order today, or order online!
                  </p>
                  <div class="flex">
                    <a href="{{ route('order.page') }}" class="tf-button"
                      >order online now</a
                    >
                  </div>
                </div>
              </div>
              <div class="box style relative">
                <img
                  class="bg_slide"
                  src="{{ asset('public/frontend/assets/images/backgroup/bg-section-5.jpg') }}"
                  alt=""
                />
                <div class="content">
                  <h3 class="mb2">Basilico App Download Now!</h3>
                  <p class="white mb-32">
                    Super Fast Order! Super Delivery!
                  </p>
                  <div class="flex">
                    <a href="#" class="flex img-link mr-10"
                      ><img
                        src="{{ asset('public/frontend/assets/images/backgroup/button-1.png') }}"
                        alt=""
                    /></a>
                    <a href="#" class="flex img-link"
                      ><img
                        src="{{ asset('public/frontend/assets/images/backgroup/button-2.png') }}"
                        alt=""
                    /></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section>
    <div class="container w_1920 pd0">
      <div class="row margin-0">
        <div class="col-md-12 pd0">
          <div
            class="gradient-7 about-inner style2 wow fadeIn"
            data-wow-delay=".2s"
          >
            <div class="icon-bg icon_1 wow fadeInLeft" data-wow-delay=".3s">
              <img src="{{ asset('public/frontend/assets/images/icon/chips.png') }}" alt="" />
            </div>
            <div
              class="icon-bg icon_2 wow fadeInRight"
              data-wow-delay=".3s"
            >
              <img src="{{ asset('public/frontend/assets/images/icon/hamburger-2.png') }}" alt="" />
            </div>
            <div class="flex justify-between w-full flex-wrap">
              <div class="swiper-container mySwiper2 w-full h-full">
                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                    <div class="box">
                      <div class="inner">
                        <div class="icon mb-28">
                          <svg
                            version="1.1"
                            xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink"
                            x="0px"
                            y="0px"
                            viewBox="0 0 511.992 511.992"
                            style="
                              enable-background: new 0 0 511.992 511.992;
                            "
                            xml:space="preserve"
                          >
                            <g>
                              <path
                                d="M481.274,389.111H30.732c-16.936,0-30.719,13.783-30.719,30.719c0,28.22,22.957,51.198,51.198,51.198h409.584
                                c28.241,0,51.198-22.978,51.198-51.198C511.992,402.893,498.21,389.111,481.274,389.111z"
                              />
                              <path
                                d="M10.764,225.277h490.149c2.56,0,5.345-1.27,7.25-2.99c1.864-1.7,3.031-4.014,3.256-6.512
                                c3.318-32.971-8.335-65.226-33.729-93.324c-45.464-50.256-130.411-81.487-221.687-81.487
                                c-91.419,0-176.449,31.292-221.851,81.671C8.757,150.795-2.834,183.09,0.586,216.103C1.119,221.304,5.522,225.277,10.764,225.277
                                z M392.107,125.871c3.993-3.993,10.485-3.993,14.479,0l20.479,20.479c3.993,4.014,3.993,10.485,0,14.479
                                c-1.987,2.007-4.608,3.01-7.229,3.01s-5.243-1.003-7.25-3.01l-20.479-20.479C388.114,136.357,388.114,129.885,392.107,125.871z
                                M310.19,166.83l20.479-20.479c3.993-3.993,10.485-3.993,14.479,0c3.993,4.014,3.993,10.485,0,14.479l-20.479,20.479
                                c-1.987,2.007-4.608,3.01-7.229,3.01s-5.243-1.003-7.25-3.01C306.197,177.315,306.197,170.844,310.19,166.83z M248.753,84.913
                                c3.993-3.993,10.485-3.993,14.479,0l20.479,20.479c3.993,4.014,3.993,10.485,0,14.479c-1.986,2.007-4.608,3.01-7.229,3.01
                                s-5.243-1.003-7.25-3.01l-20.479-20.479C244.759,95.398,244.759,88.927,248.753,84.913z M166.836,125.871l20.479-20.479
                                c3.993-3.993,10.485-3.993,14.479,0c3.993,4.014,3.993,10.485,0,14.479l-20.479,20.479c-1.987,2.007-4.608,3.01-7.229,3.01
                                s-5.243-1.003-7.25-3.01C162.843,136.357,162.843,129.885,166.836,125.871z M84.919,146.351c3.993-3.993,10.485-3.993,14.479,0
                                l20.479,20.479c3.993,4.014,3.993,10.485,0,14.479c-1.987,2.007-4.608,3.01-7.229,3.01c-2.621,0-5.243-1.003-7.25-3.01
                                l-20.479-20.479C80.926,156.836,80.926,150.365,84.919,146.351z"
                              />
                              <path
                                d="M30.732,245.757c-5.673,0-10.24,4.587-10.24,10.24c0,5.652,4.567,10.24,10.24,10.24h161.396l120.725,60.352
                                c1.454,0.737,3.01,1.085,4.587,1.085c2.642,0,5.263-1.024,7.229-3.01l58.448-58.427h98.157c5.652,0,10.24-4.587,10.24-10.24
                                c0-5.652-4.587-10.24-10.24-10.24H30.732z"
                              />
                              <path
                                d="M40.971,368.632h430.063c24.862,0,44.583-22.24,40.385-47.88c-3.318-20.131-22.281-34.036-42.679-34.036h-62.666
                                l-70.121,70.121c-6.226,6.226-15.749,7.782-23.633,3.83l-147.921-73.95H43.244c-20.397,0-39.361,13.905-42.679,34.036
                                C-3.633,346.391,16.109,368.632,40.971,368.632z"
                              />
                            </g>
                          </svg>
                        </div>
                        <h5 class="mb-0">
                          <a href="about.html">Quality Product</a>
                        </h5>
                      </div>
                      <div class="hover-effect">
                        <h5 class="mb-20">
                          <a href="about.html">Quality Product</a>
                        </h5>
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
                          <svg
                            height="512"
                            viewBox="0 0 512 512"
                            width="512"
                            xmlns="http://www.w3.org/2000/svg"
                            data-name="Layer 1"
                          >
                            <path
                              d="m431.96 194.806h22.14c21.962.394 21.968 33.035 0 33.432h-22.214c-22.247-.709-22.228-32.831.074-33.432zm-91.16-67.385c20.457-1.668 32.232-21.029 33.061-40.341h-33.061zm-79.863 167.679c2.659.053 29.708-.1 31.648.075 10.154 1.047 18.084 10.162 17.384 20.207-1.708 9.881-7.28 17.979-14.635 23.923-4.11 35.376 35.875 63.716 67.83 48.217-11.887-7.727-18.351-19.317-17.385-32.615l4.384-70.728a24.134 24.134 0 0 0 -21.546-25.557l-106.686-11.217c-2.776 24.831 12.898 47.495 39.006 47.695zm-94.726-70.579h-48.291a14.859 14.859 0 0 0 -14.859 14.859v47.455h78.009v-47.453a14.859 14.859 0 0 0 -14.859-14.859zm-42.124 177.49 7.8-20.654c-20.343-8.137-22.842 19.375-7.8 20.654zm31.129 41.679a24.116 24.116 0 0 1 -22.586-32.615l25.409-67.831c.074 0 .074 0 .074.075a50.079 50.079 0 0 0 26.375 7.5h78.6a51.731 51.731 0 0 0 21.025-4.68c1.726 78.817 125.941 71.706 118.648-7.8l-10.845-113.816c4.926.3 10.493-.8 13.967-3.269a26.433 26.433 0 0 0 20.8 17.533l14.417 158.989a5.633 5.633 0 0 0 5.572 5.052 46.493 46.493 0 0 1 46.062 40.862zm33.284-31.575a5.613 5.613 0 0 0 5.572 5.572h59.435a5.613 5.613 0 0 0 5.572-5.572v-22.288a20.419 20.419 0 0 0 -20.43-20.431h-29.719a20.419 20.419 0 0 0 -20.43 20.431zm59.435-22.288a9.289 9.289 0 0 0 -9.286-9.287h-29.719a9.29 9.29 0 0 0 -9.287 9.287v16.716h48.291zm-98.662 64.412c6.07 44.521 69.669 45.4 76.82.6h-70.877a31.578 31.578 0 0 1 -5.944-.6zm335.882.6h-76.969c7.122 44.268 69.845 44.271 76.968-.005zm-155.5-319.761v-53.57a5.613 5.613 0 0 1 5.572-5.572h49.109c-5.422-28.826-28.676-41.085-50.667-40.416-23.477.668-47.548 16.418-48.588 49.851a50.22 50.22 0 0 0 44.576 49.702zm-261.883 137.736h-19.1a5.572 5.572 0 1 0 0 11.144h19.1c7.28-.032 7.29-11.112 0-11.144zm0-29.717h-31.84a5.572 5.572 0 1 0 0 11.144h31.84c7.276-.032 7.293-11.112 0-11.141zm0-29.718h-44.572c-7.273.03-7.3 11.111 0 11.144h44.572c7.272-.03 7.296-11.111 0-11.144zm-39-117.013c0-39.3 34.843-72.436 76.151-72.436 78.2 1.3 105.932 99.823 34.62 136.478a5.645 5.645 0 0 0 -3.045 4.977v20.134l-21.248-15.973a5.162 5.162 0 0 0 -3.938-1.041c-40.106 5.152-83.712-31.531-82.544-72.139zm26 16.568v9.435a13.065 13.065 0 0 0 13 13h74.294a13.064 13.064 0 0 0 13-13v-9.435c10.514 1.169 9.194-12.167 0-11.144 1.788-68.79-102.066-68.82-100.296 0-9.78-.959-9.776 12.771 0 11.144zm13 11.293h74.294a1.84 1.84 0 0 0 1.857-1.858v-12.184c-3.616-1.808-6.126-4.532-13-4.532-10.463 0-11.8 7.429-26.078 7.429a28.2 28.2 0 0 1 -15.75-4.457c-2.361-1.94-6.288-2.9-10.216-2.889-7.826.013-9.041 2.564-12.963 4.375v12.258a1.84 1.84 0 0 0 1.856 1.858zm26.894-25.26.013.008c2.463 2.024 6.927 2.963 10.165 2.963 3.355 0 7.859-1.008 10.24-2.964l.013-.008c5.461-4.787 22.257-5.861 28.6-1.634-.826-22.547-18.47-36.255-38.781-36.255-20.735 0-37.977 14.185-38.781 36.255 6.859-4.532 23.479-2.748 28.531 1.635zm307.428-11.887a5.572 5.572 0 1 0 0-11.144h-17.756v11.144zm-96.019 126.3h88.589c12.309-.453 12.31-18.165-.074-18.573h-81.436c6.438-17.11 17.785-36.511 2.09-51.709a60.515 60.515 0 0 1 -19.316-10.921c-25.283 20.923-67.728 56.428-73.328 99.923v.074c-.148 1.337-.3 2.749-.372 4.086l66.345 6.984c11.303-12.693 14.647-22.516 17.502-29.865zm-157.375 100.468h.013c-.7 7.607 14.317 25.832 35.778 25.832h78.6c14.9 0 32.853-10.3 35.81-25.7-.241-4.249-3.063-7.727-10.4-7.727h-107.431v-11.153h-89.153c-.138 4.5-.664 10.957 5.572 11.144h51.211z"
                            />
                          </svg>
                        </div>
                        <h5 class="mb-0">
                          <a href="about.html">Fast Delivery</a>
                        </h5>
                      </div>
                      <div class="hover-effect">
                        <h5 class="mb-20">
                          <a href="about.html">Fast Delivery</a>
                        </h5>
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
                          <svg
                            enable-background="new 0 0 512.009 512.009"
                            height="512"
                            viewBox="0 0 512.009 512.009"
                            width="512"
                            xmlns="http://www.w3.org/2000/svg"
                          >
                            <g>
                              <path
                                d="m250.317 89.973c2.929 2.929 6.768 4.394 10.606 4.394 3.839 0 7.678-1.464 10.607-4.394 5.858-5.858 5.858-15.355 0-21.213l-20.677-20.677c-5.857-5.858-15.355-5.858-21.213 0s-5.858 15.355 0 21.213z"
                              />
                              <path
                                d="m374.324 94.367c3.839 0 7.678-1.464 10.607-4.394l20.677-20.677c5.858-5.858 5.858-15.355 0-21.213-5.857-5.858-15.355-5.858-21.213 0l-20.678 20.677c-5.858 5.858-5.858 15.355 0 21.213 2.929 2.929 6.768 4.394 10.607 4.394z"
                              />
                              <path
                                d="m317.623 59.242c8.284 0 15-6.716 15-15v-29.242c0-8.284-6.716-15-15-15s-15 6.716-15 15v29.242c0 8.284 6.716 15 15 15z"
                              />
                              <path
                                d="m480.566 260.378h-168.323c-8.284 0-15-6.716-15-15s6.716-15 15-15h37.275l9.651-41.906c6.949-29.946-8.401-59.768-35.053-72.257-7.422-3.478-16.267-.173-19.776 7.234l-32.008 67.571c-11.325 23.908-28.824 44.362-50.69 59.251l-39.981 27.223v189.368l12.827 8.617c35.448 23.813 77.184 36.529 119.887 36.529h126.369l.487-.121c17.363 0 31.439-14.076 31.439-31.439s-14.076-31.439-31.439-31.439h17.01c17.363 0 31.439-14.076 31.439-31.439 0-17.363-14.076-31.439-31.439-31.439h11.694c17.363 0 31.439-14.076 31.439-31.439s-14.075-31.439-31.439-31.439h10.631c17.363 0 31.439-14.076 31.439-31.439-.001-17.361-14.076-31.436-31.439-31.436z"
                              />
                              <path
                                d="m123.492 258.272h-108.488c-8.284 0-15 6.716-15 15v223.737c0 8.284 6.716 15 15 15h108.488c15.557 0 28.169-12.612 28.169-28.169v-197.399c0-15.558-12.612-28.169-28.169-28.169zm-46.938 208.356c-11.193.103-18.598-12.236-13.23-22.06 5.814-11.104 22.364-10.29 27.08 1.32 4.156 9.66-3.335 20.878-13.85 20.74z"
                              />
                            </g>
                          </svg>
                        </div>
                        <h5 class="mb-0">
                          <a href="about.html">Friendly Services</a>
                        </h5>
                      </div>
                      <div class="hover-effect">
                        <h5 class="mb-20">
                          <a href="about.html">Friendly Services</a>
                        </h5>
                        <p class="color-5">
                          Lorem ipsum dolor sit amet, consectetur adipiscing
                          elit. Ut elit tellus, luctus nec ullamcorper
                          mattis.
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="box style">
                      <div class="inner">
                        <div class="icon mb-28">
                          <svg
                            enable-background="new 0 0 512 512"
                            height="512"
                            viewBox="0 0 512 512"
                            width="512"
                            xmlns="http://www.w3.org/2000/svg"
                          >
                            <path
                              clip-rule="evenodd"
                              d="m73.974 127.993h62.338v33.85c0 5.9 4.783 10.683 10.683 10.683s10.683-4.783 10.683-10.683v-33.85h111.888v33.85c0 5.9 4.783 10.683 10.683 10.683s10.683-4.783 10.683-10.683v-33.85h62.337c6.926 0 12.663 5.235 13.297 12.131l10.05 109.335c-4.754-.494-9.578-.751-14.463-.751-76.34 0-138.226 61.886-138.226 138.226 0 18.776 3.751 36.674 10.532 52.995h-172.674c-7.621 0-14.182-2.895-19.318-8.526-5.137-5.63-7.419-12.428-6.722-20.018l24.932-271.261c.634-6.896 6.371-12.131 13.297-12.131zm62.338-1.759v-38.084c0-21.271 8.694-40.601 22.701-54.608s33.337-22.701 54.608-22.701 40.601 8.694 54.608 22.701 22.701 33.338 22.701 54.608v38.084h-21.365v-38.084c0-15.373-6.297-29.358-16.442-39.502-10.145-10.145-24.128-16.442-39.502-16.442-15.373 0-29.357 6.297-39.502 16.442-10.145 10.144-16.442 24.128-16.442 39.502v38.084zm225.84 146.474c-63.085 0-114.226 51.141-114.226 114.226s51.141 114.226 114.226 114.226 114.226-51.141 114.226-114.226-51.141-114.226-114.226-114.226zm-55.834 120.988 34.174 31.385c4.789 4.406 12.201 4.172 16.704-.472l60.979-58.384c4.763-4.582 4.91-12.159.328-16.922s-12.159-4.91-16.922-.328l-53.144 50.883-25.9-23.786c-4.867-4.478-12.444-4.163-16.922.703-4.479 4.866-4.164 12.443.703 16.921z"
                              fill-rule="evenodd"
                            />
                          </svg>
                        </div>
                        <h5 class="mb-0">
                          <a href="about.html">Super Fast Order</a>
                        </h5>
                      </div>
                      <div class="hover-effect">
                        <h5 class="mb-20">
                          <a href="about.html">Super Fast Order</a>
                        </h5>
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
  <section>
    <div class="container w_1920 pd0">
      <div class="row">
        <div class="col-md-12 wow fadeIn" data-wow-delay=".3s">
          <div class="swiper-container sl-product-2">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <a
                  href="{{ asset('public/frontend/assets/images/common/item_7.jpg') }}"
                  class="gallery-img img flex"
                >
                  <img src="{{ asset('public/frontend/assets/images/common/item_7.jpg') }}" alt="" />
                </a>
              </div>
              <div class="swiper-slide">
                <a
                  href="{{ asset('public/frontend/assets/images/common/item_8.jpg') }}"
                  class="gallery-img img flex"
                >
                  <img src="{{ asset('public/frontend/assets/images/common/item_8.jpg') }}" alt="" />
                </a>
              </div>
              <div class="swiper-slide">
                <a
                  href="{{ asset('public/frontend/assets/images/common/item_9.jpg') }}"
                  class="gallery-img img flex"
                >
                  <img src="{{ asset('public/frontend/assets/images/common/item_9.jpg') }}" alt="" />
                </a>
              </div>
              <div class="swiper-slide">
                <a
                  href="{{ asset('public/frontend/assets/images/common/item_10.jpg') }}"
                  class="gallery-img img flex"
                >
                  <img src="{{ asset('public/frontend/assets/images/common/item_10.jpg') }}" alt="" />
                </a>
              </div>
              <div class="swiper-slide">
                <a
                  href="{{ asset('public/frontend/assets/images/common/item_8.jpg') }}"
                  class="gallery-img img flex"
                >
                  <img src="{{ asset('public/frontend/assets/images/common/item_8.jpg') }}" alt="" />
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="pt-60">
    <div class="container w_1920 pd0">
      <div class="row margin-0">
        <div class="col-lg-4 col-md-12 pd0 wow fadeIn" data-wow-delay=".3s">
          <div class="icon-box style2 gradient-3 mobile-mb30">
            <div class="top">
              <div class="left">
                <h4>
                  Gift Vouchers <br class="show-desktop" />
                  For Friends
                </h4>
                <p>
                  Give gift vouchers to your friends and relatives to enjoy
                  our fast food, Nunc id ullamcorper.
                </p>
                <a class="action" href="menu-restaurant.html"
                  >buy gift now
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    version="1.1"
                    xmlns:xlink="http://www.w3.org/1999/xlink"
                    width="512"
                    height="512"
                    x="0"
                    y="0"
                    viewBox="0 0 24 24"
                    style="enable-background: new 0 0 512 512"
                    xml:space="preserve"
                  >
                    <g>
                      <path
                        fill="#0c0c0c"
                        fill-rule="evenodd"
                        d="M12.346 7.507a.75.75 0 0 1 1.059-.072l4.588 4a.75.75 0 0 1 0 1.13l-4.588 4a.75.75 0 1 1-.986-1.13l3.08-2.685H6.5a.75.75 0 0 1 0-1.5h8.998l-3.08-2.685a.75.75 0 0 1-.072-1.058z"
                        clip-rule="evenodd"
                        data-original="#000000"
                        class=""
                        opacity="1"
                      ></path>
                    </g>
                  </svg>
                </a>
              </div>
              <div class="icon">
                <img src="{{ asset('public/frontend/assets/images/common/item_12.png') }}" alt="" />
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-12 pd0 wow fadeIn" data-wow-delay=".5s">
          <div class="icon-box style2 gradient-4 mobile-mb30">
            <div class="top">
              <div class="left">
                <h4>
                  First Order <br class="show-desktop" />
                  Frist Discount
                </h4>
                <p>
                  20% discount on first order, Nam ut augue pulvinar turpis
                  malesuada condimentum.
                </p>
                <a class="action" href="{{ route('order.page') }}"
                  >order now
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    version="1.1"
                    xmlns:xlink="http://www.w3.org/1999/xlink"
                    width="512"
                    height="512"
                    x="0"
                    y="0"
                    viewBox="0 0 24 24"
                    style="enable-background: new 0 0 512 512"
                    xml:space="preserve"
                  >
                    <g>
                      <path
                        fill="#0c0c0c"
                        fill-rule="evenodd"
                        d="M12.346 7.507a.75.75 0 0 1 1.059-.072l4.588 4a.75.75 0 0 1 0 1.13l-4.588 4a.75.75 0 1 1-.986-1.13l3.08-2.685H6.5a.75.75 0 0 1 0-1.5h8.998l-3.08-2.685a.75.75 0 0 1-.072-1.058z"
                        clip-rule="evenodd"
                        data-original="#000000"
                        class=""
                        opacity="1"
                      ></path>
                    </g>
                  </svg>
                </a>
              </div>
              <div class="icon">
                <img src="{{ asset('public/frontend/assets/images/common/item_13.png') }}" alt="" />
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-12 pd0 wow fadeIn" data-wow-delay=".7s">
          <div class="icon-box style2 gradient-5">
            <div class="top">
              <div class="left">
                <h4>
                  New Season <br class="show-desktop" />
                  New Food
                </h4>
                <p>
                  Discover new items at the store this summer, Aliquam
                  faucibus lacus et dolor iaculis!
                </p>
                <a class="action" href="menu-restaurant.html"
                  >discovery new food
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    version="1.1"
                    xmlns:xlink="http://www.w3.org/1999/xlink"
                    width="512"
                    height="512"
                    x="0"
                    y="0"
                    viewBox="0 0 24 24"
                    style="enable-background: new 0 0 512 512"
                    xml:space="preserve"
                  >
                    <g>
                      <path
                        fill="#0c0c0c"
                        fill-rule="evenodd"
                        d="M12.346 7.507a.75.75 0 0 1 1.059-.072l4.588 4a.75.75 0 0 1 0 1.13l-4.588 4a.75.75 0 1 1-.986-1.13l3.08-2.685H6.5a.75.75 0 0 1 0-1.5h8.998l-3.08-2.685a.75.75 0 0 1-.072-1.058z"
                        clip-rule="evenodd"
                        data-original="#000000"
                        class=""
                        opacity="1"
                      ></path>
                    </g>
                  </svg>
                </a>
              </div>
              <div class="icon">
                <img src="{{ asset('public/frontend/assets/images/common/item_14.png') }}" alt="" />
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section>
    <div class="container w_1920 pd0">
      <div class="row margin-0">
        <div class="col-md-6 pd0">
          <div class="video wow fadeIn h-full" data-wow-delay=".2s">
            <img
              class="img_video w-full h-full"
              src="{{ asset('public/frontend/assets/images/backgroup/video_1.jpg') }}"
              alt=""
            />
            <div class="wrap-video">
              <a
                href="https://www.youtube.com/watch?v=Celf7jSGtNc"
                class="popup-youtube pulse_three"
              >
                <img src="{{ asset('public/frontend/assets/images/icon/video.svg') }}" alt="" />
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-6 pd0">
          <div class="div flex items-center justify-center h-full content-box pl-84 pr17 pt-30 pb-30 mobile-block">
            <h2 class="color-3 mb-0 lh1-2 pb-10 text-spacing-1 pr-35">
              Welcome! <br class="show-desktop" />
              We are a fast food shop faster than the speed of light.
            </h2>
            <a href="menu-restaurant.html" class="button ml-15"
              ><svg
                xmlns="http://www.w3.org/2000/svg"
                version="1.1"
                xmlns:xlink="http://www.w3.org/1999/xlink"
                width="512"
                height="512"
                x="0"
                y="0"
                viewBox="0 0 24 24"
                style="enable-background: new 0 0 512 512"
                xml:space="preserve"
              >
                <g>
                  <path
                    fill="#0c0c0c"
                    fill-rule="evenodd"
                    d="M12.346 7.507a.75.75 0 0 1 1.059-.072l4.588 4a.75.75 0 0 1 0 1.13l-4.588 4a.75.75 0 1 1-.986-1.13l3.08-2.685H6.5a.75.75 0 0 1 0-1.5h8.998l-3.08-2.685a.75.75 0 0 1-.072-1.058z"
                    clip-rule="evenodd"
                    data-original="#000000"
                    class=""
                    opacity="1"
                  ></path>
                </g></svg></a>
          </div>
        </div>

        <div class="col-lg-6 col-md-12 pd0">
          <div
            class="div flex items-end justify-center h-full content-box pl-82 gradient pr-84 pt-40 pb-132 mobile-block"
          >
            <div class="inner pr-110 pb4">
              <h2 class="color-3 mb-20 white lh1-2 text-spacing-1">
                Do You Have An Event?
                <span class="color-main">Book A Table.</span>
              </h2>
              <p class="color-5 mb-20 pr-90">
                Make online reservations, read restaurant reviews from
                dinners, and earn points towards free meals. OpenTable is a
                real time online reservation.
              </p>
              <ul class="list flex-wrap">
                <li>
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    version="1.1"
                    xmlns:xlink="http://www.w3.org/1999/xlink"
                    width="512"
                    height="512"
                    x="0"
                    y="0"
                    viewBox="0 0 408.576 408.576"
                    style="enable-background: new 0 0 512 512"
                    xml:space="preserve">
                    <g>
                      <path
                        d="M204.288 0C91.648 0 0 91.648 0 204.288s91.648 204.288 204.288 204.288 204.288-91.648 204.288-204.288S316.928 0 204.288 0zm114.176 150.528-130.56 129.536c-7.68 7.68-19.968 8.192-28.16.512L90.624 217.6c-8.192-7.68-8.704-20.48-1.536-28.672 7.68-8.192 20.48-8.704 28.672-1.024l54.784 50.176L289.28 121.344c8.192-8.192 20.992-8.192 29.184 0s8.192 20.992 0 29.184z"
                        fill="#7cd367"
                        data-original="#000000"
                        class=""
                        opacity="1"></path>
                    </g>
                  </svg>
                  <span>receive party booking</span>
                </li>
                <li>
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    version="1.1"
                    xmlns:xlink="http://www.w3.org/1999/xlink"
                    width="512"
                    height="512"
                    x="0"
                    y="0"
                    viewBox="0 0 408.576 408.576"
                    style="enable-background: new 0 0 512 512"
                    xml:space="preserve">
                    <g>
                      <path
                        d="M204.288 0C91.648 0 0 91.648 0 204.288s91.648 204.288 204.288 204.288 204.288-91.648 204.288-204.288S316.928 0 204.288 0zm114.176 150.528-130.56 129.536c-7.68 7.68-19.968 8.192-28.16.512L90.624 217.6c-8.192-7.68-8.704-20.48-1.536-28.672 7.68-8.192 20.48-8.704 28.672-1.024l54.784 50.176L289.28 121.344c8.192-8.192 20.992-8.192 29.184 0s8.192 20.992 0 29.184z"
                        fill="#7cd367"
                        data-original="#000000"
                        class=""
                        opacity="1"
                      ></path>
                    </g>
                  </svg>
                  <span>activities for kids</span>
                </li>
              </ul>
            </div>
            <a href="book-table.html" class="button style2 ml-15"
              ><svg
                xmlns="http://www.w3.org/2000/svg"
                version="1.1"
                xmlns:xlink="http://www.w3.org/1999/xlink"
                width="512"
                height="512"
                x="0"
                y="0"
                viewBox="0 0 24 24"
                style="enable-background: new 0 0 512 512"
                xml:space="preserve"
              >
                <g>
                  <path
                    fill="#0c0c0c"
                    fill-rule="evenodd"
                    d="M12.346 7.507a.75.75 0 0 1 1.059-.072l4.588 4a.75.75 0 0 1 0 1.13l-4.588 4a.75.75 0 1 1-.986-1.13l3.08-2.685H6.5a.75.75 0 0 1 0-1.5h8.998l-3.08-2.685a.75.75 0 0 1-.072-1.058z"
                    clip-rule="evenodd"
                    data-original="#000000"
                    class=""
                    opacity="1"
                  ></path>
                </g></svg></a>
          </div>
        </div>
        <div class="col-lg-6 col-md-12 pd0">
          <div class="div relative flex items-center h-full">
            <img
              class="h-full w-full min-height-300"
              src="{{ asset('public/frontend/assets/images/backgroup/bg-section-6.jpg') }}"
              alt=""
            />
            <div class="content-box style2 absolute">
              <h2 class="color-3 mb-38 white style2 text-spacing-1">
                What Do We <br class="show-desktop" />
                Eat Today? <br class="show-desktop" />
                Order Now.
              </h2>
              <div class="flex">
                <a href="{{ route('order.page') }}" class="tf-button">order online</a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-6 col-md-12 pd0">
          <img
            class="h-full w-full"
            src="{{ asset('public/frontend/assets/images/backgroup/bg-section-7.jpg') }}"
            alt=""
          />
        </div>
        <div class="col-lg-6 col-md-12 pd0">
          <div class="image-wraper flex overflow-hidden">
            <div class="image">
              <img
                class="h-full w-full"
                src="{{ asset('public/frontend/assets/images/common/item_30.jpg') }}"
                alt=""
              />
            </div>
            <div class="image flex items-center mb--8">
              <img
                class="h-full w-full"
                src="{{ asset('public/frontend/assets/images/common/item_31.jpg') }}"
                alt=""
              />
              <div class="content-box style3 absolute">
                <h2 class="style color-main mb--5">20k</h2>
                <h2 class="color-3 white lh1-2 text-spacing-0_5">
                  Happy<br class="show-desktop" />
                  Customer <span class="pl-4">:D</span>
                </h2>
              </div>
            </div>
          </div>
        </div>

        <div class="col-xl-6 col-lg-12 pd0">
          <div class="image-wraper flex h-full mobile-h-auto">
            <div class="image relative flex items-center h-full">
              <img
                class="h-full w-full"
                src="{{ asset('public/frontend/assets/images/common/item_32.jpg') }}"
                alt=""
              />
              <div class="content-box style4 absolute">
                <h2 class="color-3 mb-36 white lh1-2 text-spacing-1">
                  What News Do We Have? Let Find Out
                </h2>
                <div class="flex">
                  <a href="blog.html" class="tf-button">view all blog</a>
                </div>
              </div>
            </div>
            <div class="image h-full">
              <img
                class="h-full w-full"
                src="{{ asset('public/frontend/assets/images/common/item_33.jpg') }}"
                alt=""
              />
            </div>
          </div>
        </div>
        <div class="col-xl-6 col-lg-12 pd0">
          <div
            class="subscribe style2 h-full justify-center flex w-full flex-column"
          >
            <div class="overlay">
              <img
                src="{{ asset('public/frontend/assets/images/backgroup/bg-section-9.jpg') }}"
                alt=""
              />
            </div>
            <div class="relative w-full pl-145">
              <div class="icon">
                <img
                  class="ring"
                  src="{{ asset('public/frontend/assets/images/icon/ring.png') }}"
                  alt=""
                />
              </div>
              <div class="content mb-45">
                <h2 class="mb-18 text-spacing-1 white">
                  Subscribe to Receive <br class="show-desktop" />
                  News & Offers From Us.
                </h2>
                <p class="white text-spacing-1">
                  We promise not to spam your inbox.
                </p>
              </div>
              <div class="form">
                <form action="#">
                  <input
                    type="text"
                    name="inp"
                    placeholder="Email adress..."
                    required
                  />
                  <button>
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      version="1.1"
                      xmlns:xlink="http://www.w3.org/1999/xlink"
                      width="512"
                      height="512"
                      x="0"
                      y="0"
                      viewBox="0 0 24 24"
                      style="enable-background: new 0 0 512 512"
                      xml:space="preserve"
                    >
                      <g>
                        <path
                          fill="#000000"
                          d="M22.101 10.562 2.753 1.123A1.219 1.219 0 0 0 1 2.22v.035a2 2 0 0 0 .06.485l1.856 7.424a.5.5 0 0 0 .43.375l8.157.907a.559.559 0 0 1 0 1.11l-8.157.907a.5.5 0 0 0-.43.375L1.06 21.261a2 2 0 0 0-.06.485v.035a1.219 1.219 0 0 0 1.753 1.096L22.1 13.438a1.6 1.6 0 0 0 0-2.876z"
                          data-original="#000000"
                        ></path>
                      </g>
                    </svg>
                  </button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection