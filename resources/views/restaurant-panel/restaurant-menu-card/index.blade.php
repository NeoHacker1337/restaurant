@extends('layouts.master')

@section('content')
    <div
        class="group-data-[sidebar-size=lg]:ltr:md:ml-vertical-menu group-data-[sidebar-size=lg]:rtl:md:mr-vertical-menu group-data-[sidebar-size=md]:ltr:ml-vertical-menu-md group-data-[sidebar-size=md]:rtl:mr-vertical-menu-md group-data-[sidebar-size=sm]:ltr:ml-vertical-menu-sm group-data-[sidebar-size=sm]:rtl:mr-vertical-menu-sm pt-[calc(theme('spacing.header')_*_1)] pb-[calc(theme('spacing.header')_*_0.8)] px-4 group-data-[navbar=bordered]:pt-[calc(theme('spacing.header')_*_1.3)] group-data-[navbar=hidden]:pt-0 group-data-[layout=horizontal]:mx-auto group-data-[layout=horizontal]:max-w-screen-2xl group-data-[layout=horizontal]:px-0 group-data-[layout=horizontal]:group-data-[sidebar-size=lg]:ltr:md:ml-auto group-data-[layout=horizontal]:group-data-[sidebar-size=lg]:rtl:md:mr-auto group-data-[layout=horizontal]:md:pt-[calc(theme('spacing.header')_*_1.6)] group-data-[layout=horizontal]:px-3 group-data-[layout=horizontal]:group-data-[navbar=hidden]:pt-[calc(theme('spacing.header')_*_0.9)]">
        <div class="container-fluid group-data-[content=boxed]:max-w-boxed mx-auto">

            <div class="flex flex-col gap-2 py-4 md:flex-row md:items-center print:hidden">
                <div class="grow">
                    <h5 class="text-16">Menu Card</h5>
                </div>
                <ul class="flex items-center gap-2 text-sm font-normal shrink-0">
                    <li
                        class="relative before:content-['\ea54'] before:font-remix ltr:before:-right-1 rtl:before:-left-1  before:absolute before:text-[18px] before:-top-[3px] ltr:pr-4 rtl:pl-4 before:text-slate-400 dark:text-zink-200">
                        <a href="{{ route('home') }}" class="text-slate-400 dark:text-zink-200">Dashboard</a>
                    </li>
                    <li class="text-slate-700 dark:text-zink-100">
                        Menu Card View
                    </li>
                </ul>
            </div>


            <div class="card">
                <div class="card-body">
                    <div class="border-top"></div>
                    <div class="menu-container">
                        <div class="header">{{ $restaurantName->restaurant_name ?? 'NO Name' }}</div>

                        @foreach ($menuItems as $menuItem)
                            <div class="section-title">{{ $menuItem->category->name ?? 'Uncategorized' }}</div>
                            <div class="menu-item">
                                <h3>{{ $menuItem->name }} <span class="price">{{ $menuItem->price }}. (₹)</span></h3>
                                <p>{{ $menuItem->description }}</p>
                                <p><strong>Type:</strong> {{ $menuItem->menuType->name ?? 'N/A' }}</p>
                            </div>
                        @endforeach
                    </div>
                    <div class="border-bottom"></div>
                </div>
            </div><!--end card-->

        </div>
        <!-- container-fluid -->
    </div>
    <!-- End Page-content -->
@endsection

@section('extra_css')
    <style>
        body {
            font-family: "Georgia", serif;
            margin: 0;
            padding: 0;
            /* text-align: center; */
            background-color: #fff;
        }

        .menu-container {
            width: 60%;
            margin: auto;
            padding: 20px;
        }

        .header {
            font-size: 36px;
            color: #b45f06;
            margin-bottom: 20px;
        }

        .section-title {
            font-size: 24px;
            color: #b45f06;
            font-style: italic;
            margin-top: 30px;
            text-align: left;
        }

        .menu-item {
            text-align: left;
            margin: 15px 0;
        }

        .menu-item h3 {
            font-size: 18px;
            margin: 5px 0;
        }

        .menu-item p {
            font-size: 16px;
            color: #333;
        }

        .price {
            float: right;
            font-weight: bold;
        }

        .border-top {
            width: 100%;
            height: 150px;
            background: url("https://pjanser.ch/lechatel.ch/img/pattern_botanic_top.png") no-repeat center top;
            background-size: cover;
        }

        .border-bottom {
            width: 100%;
            height: 150px;
            background: url("https://pjanser.ch/lechatel.ch/img/pattern_botanic_bottom.png") no-repeat center bottom;
            background-size: cover;
        }
    </style>
@endsection

@section('extra_js')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
@endsection
