@extends('layouts.master')

@section('content')
    <div
        class="group-data-[sidebar-size=lg]:ltr:md:ml-vertical-menu group-data-[sidebar-size=lg]:rtl:md:mr-vertical-menu group-data-[sidebar-size=md]:ltr:ml-vertical-menu-md group-data-[sidebar-size=md]:rtl:mr-vertical-menu-md group-data-[sidebar-size=sm]:ltr:ml-vertical-menu-sm group-data-[sidebar-size=sm]:rtl:mr-vertical-menu-sm pt-[calc(theme('spacing.header')_*_1)] pb-[calc(theme('spacing.header')_*_0.8)] px-4 group-data-[navbar=bordered]:pt-[calc(theme('spacing.header')_*_1.3)] group-data-[navbar=hidden]:pt-0 group-data-[layout=horizontal]:mx-auto group-data-[layout=horizontal]:max-w-screen-2xl group-data-[layout=horizontal]:px-0 group-data-[layout=horizontal]:group-data-[sidebar-size=lg]:ltr:md:ml-auto group-data-[layout=horizontal]:group-data-[sidebar-size=lg]:rtl:md:mr-auto group-data-[layout=horizontal]:md:pt-[calc(theme('spacing.header')_*_1.6)] group-data-[layout=horizontal]:px-3 group-data-[layout=horizontal]:group-data-[navbar=hidden]:pt-[calc(theme('spacing.header')_*_0.9)]">
        <div class="container-fluid group-data-[content=boxed]:max-w-boxed mx-auto">

            <div class="flex flex-col gap-2 py-4 md:flex-row md:items-center print:hidden">
                <div class="grow">
                    <h5 class="text-16">Edit Special Offer's</h5>
                </div>
                <ul class="flex items-center gap-2 text-sm font-normal shrink-0">
                    <li
                        class="relative before:content-['\ea54'] before:font-remix ltr:before:-right-1 rtl:before:-left-1  before:absolute before:text-[18px] before:-top-[3px] ltr:pr-4 rtl:pl-4 before:text-slate-400 dark:text-zink-200">
                        <a href="{{ route('home') }}" class="text-slate-400 dark:text-zink-200">Dashboard</a>
                    </li>
                    <li class="text-slate-700 dark:text-zink-100">
                        Special Offers Form
                    </li>
                </ul>
            </div>

            <div class="card">
                <div class="card-body">
                    <div class="container">

                        <form action="{{ route('special-offers.update', $specialOffer->id ) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="grid grid-cols-1 gap-x-5 md:grid-cols-2 xl:grid-cols-6">
                                <!-- Menu Item Dropdown -->
                                <div class="col-12">
                                    <label for="menu_item_id" class="inline-block mb-2 text-base font-medium">Menu Item
                                        <span class="text-red-500">*</span></label>
                                    <select id="menu_item_id" name="menu_item_id"
                                        class="form-input @error('menu_item_id') is-invalid @enderror border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                                        required>
                                        <option value="" disabled>Select Menu Item</option>
                                        @foreach ($menuItems as $menuItem)
                                            <option value="{{ $menuItem->id }}" {{ $specialOffer->menu_item_id == $menuItem->id ? 'selected' : '' }}>
                                                {{ $menuItem->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                    @error('menu_item_id')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                        
                                <!-- Offer Name -->
                                <div class="col-12">
                                    <label for="offer_name" class="inline-block mb-2 text-base font-medium">Offer Name
                                        <span class="text-red-500">*</span></label>
                                    <input type="text" id="offer_name" name="offer_name"
                                        class="form-input @error('offer_name') is-invalid @enderror border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                                        placeholder="Enter Offer Name" required value="{{ old('offer_name', $specialOffer->offer_name) }}">
                                    @error('offer_name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                        
                                <!-- Price In Type -->
                                <div class="col-12">
                                    <label for="price_in_type" class="inline-block mb-2 text-base font-medium">Price (Percentage or Number)
                                        <span class="text-red-500">*</span></label>
                                    <select id="price_in_type" name="price_in_type"
                                        class="form-input @error('price_in_type') is-invalid @enderror border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                                        required>
                                        <option value="number" {{ $specialOffer->price_in_type == 'number' ? 'selected' : '' }}>Number</option>
                                        <option value="percentage" {{ $specialOffer->price_in_type == 'percentage' ? 'selected' : '' }}>Percentage</option>
                                    </select>
                                    @error('price_in_type')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                        
                                <!-- Discount Percentage -->
                                <div class="col-12">
                                    <label for="discount_percentage"
                                        class="inline-block mb-2 text-base font-medium">Discount Percentage
                                        <span class="text-red-500">*</span></label>
                                    <input type="number" id="discount_percentage" name="discount_percentage" step="0.01" min="0"
                                        class="form-input @error('discount_percentage') is-invalid @enderror border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                                        placeholder="Enter Discount Percentage" required value="{{ old('discount_percentage', $specialOffer->discount_percentage) }}">
                                    @error('discount_percentage')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                        
                                <!-- Valid From Date -->
                                <div class="col-12">
                                    <label for="valid_from" class="inline-block mb-2 text-base font-medium">Valid From
                                        <span class="text-red-500">*</span></label>
                                    <input type="datetime-local" id="valid_from" name="valid_from"
                                        class="form-input @error('valid_from') is-invalid @enderror border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                                        required value="{{ old('valid_from', $specialOffer->valid_from ? $specialOffer->valid_from->format('Y-m-d\TH:i') : '') }}">
                                    @error('valid_from')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                        
                                <!-- Valid To Date -->
                                <div class="col-12">
                                    <label for="valid_to" class="inline-block mb-2 text-base font-medium">Valid To
                                        <span class="text-red-500">*</span></label>
                                    <input type="datetime-local" id="valid_to" name="valid_to"
                                        class="form-input @error('valid_to') is-invalid @enderror border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                                        required value="{{ old('valid_to', $specialOffer->valid_to ? $specialOffer->valid_to->format('Y-m-d\TH:i') : '') }}">
                                    @error('valid_to')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                        
                                <!-- Coupon Code -->
                                <div class="col-12">
                                    <label for="coupon_code" class="inline-block mb-2 text-base font-medium">Coupon Code
                                        <span class="text-red-500">*</span></label>
                                    <input type="text" id="coupon_code" name="coupon_code"
                                        class="form-input @error('coupon_code') is-invalid @enderror border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                                        placeholder="Enter Coupon Code" required value="{{ $specialOffer->coupon_code }}">
                                    @error('coupon_code')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                        
                                <!-- Limit -->
                                <div class="col-12">
                                    <label for="limit" class="inline-block mb-2 text-base font-medium">Limit
                                        <span class="text-red-500">*</span></label>
                                    <input type="number" id="limit" name="limit" min="1"
                                        class="form-input @error('limit') is-invalid @enderror border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                                        placeholder="Enter Limit" required value="{{ old('limit', $specialOffer->limit) }}">
                                    @error('limit')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        
                            <div class="flex justify-end gap-2 mt-2">
                                <button type="button" onclick="window.history.back()"
                                    class="text-blue-500 bg-white btn hover:text-blue-500 hover:bg-blue-100 focus:text-blue-500 focus:bg-blue-100 active:text-blue-500 active:bg-blue-100 dark:bg-zink-700 dark:hover:bg-blue-500/10 dark:focus:bg-blue-500/10 dark:active:bg-blue-500/10">
                                    <i data-lucide="arrow-left" class="inline-block size-4"></i>
                                    <span class="align-middle">Back</span>
                                </button>
                                <button type="submit"
                                    class="text-white transition-all duration-200 ease-linear btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:ring focus:ring-custom-500/50 focus:ring-offset-0 dark:bg-custom-800 dark:border-custom-800 dark:hover:bg-custom-700 dark:hover:border-custom-700 dark:focus:ring-custom-700/50">
                                    <i data-lucide="save" class="inline-block size-4"></i>
                                    <span class="align-middle">Save Changes</span>
                                </button>
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
    <script>
        document.getElementById('price').addEventListener('input', function(e) {
            let value = e.target.value;
            if (value.includes('.')) {
                let parts = value.split('.');
                if (parts[1].length > 2) {
                    e.target.value = parseFloat(value).toFixed(2);
                }
            }
        });
    </script>
@endsection
