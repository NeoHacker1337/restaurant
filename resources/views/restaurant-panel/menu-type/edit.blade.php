@extends('layouts.master')

@section('content')
    <div
        class="group-data-[sidebar-size=lg]:ltr:md:ml-vertical-menu group-data-[sidebar-size=lg]:rtl:md:mr-vertical-menu group-data-[sidebar-size=md]:ltr:ml-vertical-menu-md group-data-[sidebar-size=md]:rtl:mr-vertical-menu-md group-data-[sidebar-size=sm]:ltr:ml-vertical-menu-sm group-data-[sidebar-size=sm]:rtl:mr-vertical-menu-sm pt-[calc(theme('spacing.header')_*_1)] pb-[calc(theme('spacing.header')_*_0.8)] px-4 group-data-[navbar=bordered]:pt-[calc(theme('spacing.header')_*_1.3)] group-data-[navbar=hidden]:pt-0 group-data-[layout=horizontal]:mx-auto group-data-[layout=horizontal]:max-w-screen-2xl group-data-[layout=horizontal]:px-0 group-data-[layout=horizontal]:group-data-[sidebar-size=lg]:ltr:md:ml-auto group-data-[layout=horizontal]:group-data-[sidebar-size=lg]:rtl:md:mr-auto group-data-[layout=horizontal]:md:pt-[calc(theme('spacing.header')_*_1.6)] group-data-[layout=horizontal]:px-3 group-data-[layout=horizontal]:group-data-[navbar=hidden]:pt-[calc(theme('spacing.header')_*_0.9)]">
        <div class="container-fluid group-data-[content=boxed]:max-w-boxed mx-auto">

            <div class="flex flex-col gap-2 py-4 md:flex-row md:items-center print:hidden">
                <div class="grow">
                    <h5 class="text-16">Edit Menu Types</h5>
                </div>
                <ul class="flex items-center gap-2 text-sm font-normal shrink-0">
                    <li
                        class="relative before:content-['\ea54'] before:font-remix ltr:before:-right-1 rtl:before:-left-1  before:absolute before:text-[18px] before:-top-[3px] ltr:pr-4 rtl:pl-4 before:text-slate-400 dark:text-zink-200">
                        <a href="{{ route('home') }}" class="text-slate-400 dark:text-zink-200">Dashboard</a>
                    </li>
                    <li class="text-slate-700 dark:text-zink-100">
                        Menu Types Edit Form
                    </li>
                </ul>
            </div>

            <div class="card">
                <div class="card-body">
                    <div class="container">

                        <form action="{{ route('menu-types.update', $menuType->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="grid grid-cols-1 gap-x-5 md:grid-cols-2 xl:grid-cols-6">
                                <div class="col-12">
                                    <label for="name" class="inline-block mb-2 text-base font-medium">Name
                                        <span class="text-red-500">*</span></label>
                                    <input type="text" id="name" name="name"
                                        class="form-input @error('name') is-invalid @enderror  border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                                        placeholder="Enter Category Name" value ="{{ $menuType->name }}"required>
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <!-- Start Time Input -->
                                <div class="col-12">
                                    <label for="start_time" class="inline-block mb-2 text-base font-medium">Start Time
                                        <span class="text-red-500">*</span></label>
                                    <input type="time" id="start_time" name="start_time"
                                        class="form-input @error('start_time') is-invalid @enderror border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                                        required  value="{{ \Carbon\Carbon::parse($menuType->start_time)->format('H:i') }}">
                                    @error('start_time')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <!-- End Time Input -->
                                <div class="col-12">
                                    <label for="end_time" class="inline-block mb-2 text-base font-medium">End Time
                                        <span class="text-red-500">*</span></label>
                                    <input type="time" id="end_time" name="end_time"
                                        class="form-input @error('end_time') is-invalid @enderror border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                                        required   value="{{ \Carbon\Carbon::parse($menuType->end_time)->format('H:i') }}">
                                    @error('end_time')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="flex justify-end gap-2">
                                <button type="button" onclick="window.history.back()"
                                    class="text-blue-500 bg-white btn hover:text-blue-500 hover:bg-blue-100 focus:text-blue-500 focus:bg-blue-100 active:text-blue-500 active:bg-blue-100 dark:bg-zink-700 dark:hover:bg-blue-500/10 dark:focus:bg-blue-500/10 dark:active:bg-blue-500/10">
                                    <i data-lucide="arrow-left" class="inline-block size-4"></i>
                                    <span class="align-middle">Back</span>
                                </button>
                                <button type="submit"
                                    class="text-white transition-all duration-200 ease-linear btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div><!--end card-->
        </div>
        <!-- container-fluid -->
    </div>
    <!-- End Page-content -->
@endsection

@section('extra_css')
    <!-- Add these in your layout -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.5/css/jquery.dataTables.min.css">
@endsection

@section('extra_js')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js"></script>
@endsection
