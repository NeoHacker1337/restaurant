<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>{{ config('app.name') }}</title>
    <link rel="stylesheet" href="{{ asset('public/frontend/app/bootstrap/css/bootstrap.css') }}" />
    <link rel="stylesheet" href="{{ asset('public/frontend/app/swiper/swiper-bundle.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('public/frontend/app/dist/app.css') }}" />
    <link rel="stylesheet" href="{{ asset('public/frontend/assets/font/font-awesome.css') }}" />
    <!-- Favicon and Touch Icons  -->
    <link rel="shortcut icon" href="{{ asset('public/frontend/assets/images/favicon.png') }}" />
    <link rel="apple-touch-icon-precomposed" href="{{ asset('public/frontend/assets/images/favicon.png') }}" />
</head>

<body class="body header-fixed main home2">
    <!-- preloade -->
    <div class="preload preload-container">
        <div class="preload-logo"></div>
    </div>
    <!-- preload -->
    <div id="wrapper">
        <!-- Header -->
        @include('frontend.layouts.header')
        <!-- end Header -->

        @yield('content')


        @include('frontend.layouts.footer')
    </div>

    <a id="scroll-top"></a>
    <script src="{{ asset('public/frontend/app/js/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/frontend/app/js/jquery.cookie.min.js') }}"></script>
    <script src="{{ asset('public/frontend/app/js/plugin.js') }}"></script>
    <script src="{{ asset('public/frontend/app/js/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('public/frontend/app/js/swiper.js') }}"></script>
    <script src="{{ asset('public/frontend/app/js/jquery-validate.js') }}"></script>
    <script src="{{ asset('public/frontend/app/js/countto.js') }}"></script>
    <script src="{{ asset('public/frontend/app/js/jquery.easing.js') }}"></script>
    <script src="{{ asset('public/frontend/app/js/wow.min.js') }}"></script>
    <script src="{{ asset('public/frontend/app/js/app.js') }}"></script>
    <script src="{{ asset('public/frontend/app/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('public/frontend/app/js/simpleParallax.min.js') }}"></script>
    <script src="{{ asset('public/frontend/app/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('public/frontend/app/js/gallery.js') }}"></script>
    <script>
        var image = document.getElementsByClassName("thumbnail");
        new simpleParallax(image);
    </script>

    <script>
        var swiper = new Swiper(".sl-testimonial", {
            direction: "horizontal",
            loop: false,
            navigation: {
                nextEl: ".swiper-next-testimonial",
                prevEl: ".swiper-prev-testimonial",
            },
        });

        var testimonialLinks = document.querySelectorAll(
            ".testimonial-list-item a"
        );
        testimonialLinks.forEach(function(link) {
            link.addEventListener("click", function(e) {
                e.preventDefault();
                var slideIndex = parseInt(link.getAttribute("data-slide-index"));
                swiper.slideTo(slideIndex, 500);
                testimonialLinks[slideIndex].classList.add("active");
                // Xóa lớp 'active' khỏi tất cả các link
                testimonialLinks.forEach(function(link) {
                    link.classList.remove("active");
                });

                // Thêm lớp 'active' cho link được click
                link.classList.add("active");
            });
        });
        let hamburger = document.querySelector(".hamburger");
        let icon_hamburger = hamburger.querySelector(".icon_hamburger");
        let close_hamburger = hamburger.querySelector(".close_hamburger");
        icon_hamburger.addEventListener("click", function() {
            hamburger.classList.toggle("toggle");
        });
        close_hamburger.addEventListener("click", function() {
            hamburger.classList.toggle("toggle");
        });
    </script>
    <script>
        let cart = document.querySelector(".cart");
        let icon_cart = cart.querySelector(".icon_cart");
        let close_cart = cart.querySelector(".close_cart");
        icon_cart.addEventListener("click", function() {
            cart.classList.toggle("toggle");
        });
        close_cart.addEventListener("click", function() {
            cart.classList.toggle("toggle");
        });
    </script>
</body>

</html>
