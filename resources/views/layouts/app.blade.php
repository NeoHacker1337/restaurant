<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="light scroll-smooth group" data-layout="vertical"
    data-sidebar="light" data-sidebar-size="lg" data-mode="light" data-topbar="light" data-skin="default" data-navbar="sticky"
    data-content="fluid" dir="ltr">

<head>
    <meta charset="utf-8">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta content="Minimal Admin & Dashboard Template" name="description">
    <meta content="Themesdesign" name="author">
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('public/assets/images/favicon.ico') }}">
    <!-- Layout config Js -->
    <script src="{{ asset('public/assets/js/layout.js') }}"></script>
    <!-- Icons CSS -->

    <!-- Tailwind CSS -->
    <link rel="stylesheet" href="{{ asset('public/assets/css/tailwind2.css') }}">
</head>

<body
    class="flex items-center justify-center min-h-screen py-16 lg:py-10 bg-slate-50 dark:bg-zink-800 dark:text-zink-100 font-public">


    <main class="py-4">
        @yield('content')
    </main>

    <script src='{{ asset('public/assets/libs/choices.js/public/assets/scripts/choices.min.js') }}'></script>
    <script src="{{ asset('public/assets/libs/%40popperjs/core/umd/popper.min.js') }}"></script>
    <script src="{{ asset('public/assets/libs/tippy.js/tippy-bundle.umd.min.js') }}"></script>
    <script src="{{ asset('public/assets/libs/simplebar/simplebar.min.js') }}"></script>
    <script src="{{ asset('public/assets/libs/prismjs/prism.js') }}"></script>
    <script src="{{ asset('public/assets/libs/lucide/umd/lucide.js') }}"></script>
    <script src="{{ asset('public/assets/js/tailwick.bundle.js') }}"></script>
     

</body>

</html>
