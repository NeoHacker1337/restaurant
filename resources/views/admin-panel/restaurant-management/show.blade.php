@extends('layouts.master')

@section('content')
    <div class="relative min-h-screen group-data-[sidebar-size=sm]:min-h-sm">

        <div
            class="group-data-[sidebar-size=lg]:ltr:md:ml-vertical-menu group-data-[sidebar-size=lg]:rtl:md:mr-vertical-menu group-data-[sidebar-size=md]:ltr:ml-vertical-menu-md group-data-[sidebar-size=md]:rtl:mr-vertical-menu-md group-data-[sidebar-size=sm]:ltr:ml-vertical-menu-sm group-data-[sidebar-size=sm]:rtl:mr-vertical-menu-sm pt-[calc(theme('spacing.header')_*_1)] pb-[calc(theme('spacing.header')_*_0.8)] px-4 group-data-[navbar=bordered]:pt-[calc(theme('spacing.header')_*_1.3)] group-data-[navbar=hidden]:pt-0 group-data-[layout=horizontal]:mx-auto group-data-[layout=horizontal]:max-w-screen-2xl group-data-[layout=horizontal]:px-0 group-data-[layout=horizontal]:group-data-[sidebar-size=lg]:ltr:md:ml-auto group-data-[layout=horizontal]:group-data-[sidebar-size=lg]:rtl:md:mr-auto group-data-[layout=horizontal]:md:pt-[calc(theme('spacing.header')_*_1.6)] group-data-[layout=horizontal]:px-3 group-data-[layout=horizontal]:group-data-[navbar=hidden]:pt-[calc(theme('spacing.header')_*_0.9)]">
            <div class="container-fluid group-data-[content=boxed]:max-w-boxed mx-auto">

                <div class="flex flex-col gap-2 py-4 md:flex-row md:items-center print:hidden">
                    <div class="grow">
                        <h5 class="text-16">Account Settings</h5>
                    </div>
                    <ul class="flex items-center gap-2 text-sm font-normal shrink-0">
                        <li
                        class="relative before:content-['\ea54'] before:font-remix ltr:before:-right-1 rtl:before:-left-1  before:absolute before:text-[18px] before:-top-[3px] ltr:pr-4 rtl:pl-4 before:text-slate-400 dark:text-zink-200">
                        <a href="{{ route('home')}}" class="text-slate-400 dark:text-zink-200">Dashboard</a>
                    </li>
                        <li class="text-slate-700 dark:text-zink-100">
                            Account Settings
                        </li>
                    </ul>
                </div>
                <div class="card">
                    <div class="card-body">
                        <div class="grid grid-cols-1 gap-5 lg:grid-cols-12 2xl:grid-cols-12">
                            <div class="lg:col-span-2 2xl:col-span-1">
                                <div
                                    class="relative inline-block rounded-full shadow-md size-20 bg-slate-100 profile-user xl:size-28">
                                    <img src="assets/images/avatar-1.png" alt=""
                                        class="object-cover border-0 rounded-full img-thumbnail user-profile-image">
                                    <div
                                        class="absolute bottom-0 flex items-center justify-center rounded-full size-8 ltr:right-0 rtl:left-0 profile-photo-edit">
                                        <input id="profile-img-file-input" type="file"
                                            class="hidden profile-img-file-input">
                                        <label for="profile-img-file-input"
                                            class="flex items-center justify-center bg-white rounded-full shadow-lg cursor-pointer size-8 dark:bg-zink-600 profile-photo-edit">
                                            <i data-lucide="image-plus"
                                                class="size-4 text-slate-500 dark:text-zink-200 fill-slate-100 dark:fill-zink-500"></i>
                                        </label>
                                    </div>
                                </div>
                            </div><!--end col-->
                            <div class="lg:col-span-10 2xl:col-span-9">
                                <h5 class="mb-1"> {{ $user->name }} <i data-lucide="badge-check"
                                        class="inline-block size-4 text-sky-500 fill-sky-100 dark:fill-custom-500/20"></i>
                                </h5>
                                <div class="flex gap-3 mb-4">
                                    <p class="text-slate-500 dark:text-zink-200"> <i data-lucide="user-circle"
                                            class="inline-block size-4 ltr:mr-1 rtl:ml-1 text-slate-500 dark:text-zink-200 fill-slate-100 dark:fill-zink-500"></i>
                                        {{ $user->role }}</p>
                                    <p class="text-slate-500 dark:text-zink-200"><i data-lucide="map-pin"
                                            class="inline-block size-4 ltr:mr-1 rtl:ml-1 text-slate-500 dark:text-zink-200 fill-slate-100 dark:fill-zink-500"></i>
                                        {{ $restaurantProfile->restaurant_address ?? ''}}</p>
                                </div>

                                <p class="mt-4 text-slate-500 dark:text-zink-200">
                                    {{ $restaurantProfile->restaurant_description ?? ''}}</p>

                            </div>

                        </div><!--end grid-->
                    </div>
                    <div class="card-body !py-0">
                        <ul class="flex flex-wrap w-full text-sm font-medium text-center nav-tabs">
                            <li class="group active">
                                <a href="javascript:void(0);" data-tab-toggle data-target="personalTabs"
                                    class="inline-block px-4 py-2 text-base transition-all duration-300 ease-linear rounded-t-md text-slate-500 dark:text-zink-200 border-b border-transparent group-[.active]:text-custom-500 dark:group-[.active]:text-custom-500 group-[.active]:border-b-custom-500 hover:text-custom-500 dark:hover:text-custom-500 active:text-custom-500 dark:active:text-custom-500 -mb-[1px]">Personal
                                    Info</a>
                            </li>

                            <li class="group">
                                <a href="javascript:void(0);" data-tab-toggle data-target="changePasswordTabs"
                                    class="inline-block px-4 py-2 text-base transition-all duration-300 ease-linear rounded-t-md text-slate-500 dark:text-zink-200 border-b border-transparent group-[.active]:text-custom-500 dark:group-[.active]:text-custom-500 group-[.active]:border-b-custom-500 hover:text-custom-500 dark:hover:text-custom-500 active:text-custom-500 dark:active:text-custom-500 -mb-[1px]">Change
                                    Password</a>
                            </li>
                            <li class="group">
                                <a href="javascript:void(0);" data-tab-toggle data-target="privacyPolicyTabs"
                                    class="inline-block px-4 py-2 text-base transition-all duration-300 ease-linear rounded-t-md text-slate-500 dark:text-zink-200 border-b border-transparent group-[.active]:text-custom-500 dark:group-[.active]:text-custom-500 group-[.active]:border-b-custom-500 hover:text-custom-500 dark:hover:text-custom-500 active:text-custom-500 dark:active:text-custom-500 -mb-[1px]">
                                    Restaurant Menu</a>
                            </li>
                        </ul>
                    </div>
                </div><!--end card-->

                <div class="tab-content">
                    <div class="block tab-pane" id="personalTabs">
                        <div class="card">
                            <div class="card-body">
                                <h6 class="mb-1 text-15">Personal Information</h6>
                                <p class="mb-4 text-slate-500 dark:text-zink-200">Update your photo and personal details
                                    here easily.</p>
                                <form action="#!">
                                    <div class="grid grid-cols-1 gap-5 xl:grid-cols-12">
                                        <div class="xl:col-span-6">
                                            <label for="inputValue" class="inline-block mb-2 text-base font-medium">Full
                                                Name</label>
                                            <input type="text" id="inputValue"
                                                class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                                                placeholder="Enter your value" value="{{ $user->name }}" readonly>
                                        </div><!--end col-->

                                        <div class="xl:col-span-6">
                                            <label for="inputValue" class="inline-block mb-2 text-base font-medium">Phone
                                                Number</label>
                                            <input type="text" id="inputValue"
                                                class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                                                placeholder="+214 8456 8459 23"
                                                value="{{ $restaurantProfile->restaurant_phone ?? ''}}">
                                        </div><!--end col-->
                                        <div class="xl:col-span-6">
                                            <label for="inputValue" class="inline-block mb-2 text-base font-medium">Email
                                                Address</label>
                                            <input type="email" id="inputValue"
                                                class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                                                placeholder="Enter your email address"
                                                value="{{ $restaurantProfile->restaurant_email ?? $user->email }}">
                                        </div><!--end col-->

                                        <div class="xl:col-span-6">
                                            <label for="joiningDateInput"
                                                class="inline-block mb-2 text-base font-medium">Joining Date</label>
                                            <input type="text" id="joiningDateInput"
                                                class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                                                placeholder="Select date" data-provider="flatpickr"
                                                data-date-format="d M, Y" data-default-date="30 Nov, 2023"
                                                value="{{ $restaurantProfile->created_at ?? $user->created_at }}">
                                        </div><!--end col-->
                                        <div class="xl:col-span-12">
                                            <label for="inputValue" class="inline-block mb-2 text-base font-medium">Cuisine
                                                Type</label>
                                            <select
                                                class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200 @error('cuisine_type') is-invalid @enderror"
                                                id="choices-multiple-remove-button" data-choices data-choices-removeItem
                                                name="cuisine_type[]" multiple>

                                                @foreach ($cuisines as $item)
                                                    <option value="{{ $item->id }}"
                                                        {{ in_array($item->id, (array) old('cuisine_type', json_decode($restaurantProfile->cuisine_type ?? '[]'))) ? 'selected' : '' }}>
                                                        {{ $item->cuisines_name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div><!--end col-->

                                        <div class="xl:col-span-4">
                                            <label for="inputValue"
                                                class="inline-block mb-2 text-base font-medium">City</label>
                                            <input type="text" id="joiningDateInput"
                                                class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                                                placeholder="Select date" data-provider="flatpickr"
                                                data-date-format="d M, Y" data-default-date="30 Nov, 2023"
                                                value="{{ $restaurantProfile->restaurant_city ?? '' }}">
                                        </div><!--end col-->
                                        <div class="xl:col-span-4">
                                            <label for="inputValue"
                                                class="inline-block mb-2 text-base font-medium">Country</label>

                                            <input type="text" id="joiningDateInput"
                                                class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                                                placeholder="Select date" data-provider="flatpickr"
                                                data-date-format="d M, Y" data-default-date="30 Nov, 2023"
                                                value="{{ $restaurantProfile->restaurant_country ?? '' }}">

                                        </div><!--end col-->
                                        <div class="xl:col-span-4">
                                            <label for="inputValue" class="inline-block mb-2 text-base font-medium">Zip
                                                Code</label>
                                            <input type="text" id="joiningDateInput"
                                                class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                                                placeholder="Select date" data-provider="flatpickr"
                                                data-date-format="d M, Y" data-default-date="30 Nov, 2023"
                                                value="{{ $restaurantProfile->restaurant_postal_code ?? ''}}">
                                        </div><!--end col-->

                                        <div class="xl:col-span-6">
                                            <label for="inputValue"
                                                class="inline-block mb-2 text-base font-medium">Restaurant Address</label>
                                            <input type="text" id="inputValue"
                                                class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                                                placeholder="Enter your value"
                                                value=" {{ $restaurantProfile->restaurant_address ?? '' }}">
                                        </div><!--end col-->
                                        <div class="xl:col-span-6">
                                            <label for="inputValue"
                                                class="inline-block mb-2 text-base font-medium">Opening Days</label>
                                            <select name="opening_days[]" id="opening_days" multiple
                                                class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500
                                                @error('opening_days') is-invalid @enderror">
                                                <option value="Sunday"
                                                    {{ in_array('Sunday', json_decode($restaurantProfile->opening_days ?? '[]')) ? 'selected' : '' }}>
                                                    Sunday</option>
                                                <option value="Monday"
                                                    {{ in_array('Monday', json_decode($restaurantProfile->opening_days ?? '[]')) ? 'selected' : '' }}>
                                                    Monday</option>
                                                <option value="Tuesday"
                                                    {{ in_array('Tuesday', json_decode($restaurantProfile->opening_days ?? '[]')) ? 'selected' : '' }}>
                                                    Tuesday</option>
                                                <option value="Wednesday"
                                                    {{ in_array('Wednesday', json_decode($restaurantProfile->opening_days ?? '[]')) ? 'selected' : '' }}>
                                                    Wednesday</option>
                                                <option value="Thursday"
                                                    {{ in_array('Thursday', json_decode($restaurantProfile->opening_days ?? '[]')) ? 'selected' : '' }}>
                                                    Thursday</option>
                                                <option value="Friday"
                                                    {{ in_array('Friday', json_decode($restaurantProfile->opening_days ?? '[]')) ? 'selected' : '' }}>
                                                    Friday</option>
                                                <option value="Saturday"
                                                    {{ in_array('Saturday', json_decode($restaurantProfile->opening_days ?? '[]')) ? 'selected' : '' }}>
                                                    Saturday</option>
                                            </select>
                                        </div><!--end col-->
                                        <div class="xl:col-span-12">
                                            <label for="inputValue"
                                                class="block mb-2 text-base font-medium">Description</label>
                                            <textarea
                                                class="w-full form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                                                id="exampleFormControlTextarea" placeholder="Enter your description" rows="5">{{ $restaurantProfile->restaurant_description ?? ''}}</textarea>
                                            </select>
                                        </div><!--end col-->



                                        <div class="xl:col-span-12">
                                            <label for="seating_capacity"
                                                class="inline-block mb-2 text-base font-medium">Seating
                                                Capacity</label>
                                            <input type="number" name="seating_capacity" id="seating_capacity"
                                                class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200 @error('seating_capacity') is-invalid @enderror"
                                                value="{{ old('seating_capacity', $restaurantProfile->seating_capacity ?? '') }}">

                                        </div>


                                        <div class="xl:col-span-6">
                                            <label for="is_vegetarian"
                                                class="block text-sm font-medium">Vegetarian?</label>
                                            <input type="checkbox" name="is_vegetarian" id="is_vegetarian"
                                                value="1"
                                                {{ old('is_vegetarian', $restaurantProfile->is_vegetarian ?? false) ? 'checked' : '' }}
                                                class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500">

                                        </div>
                                        <div class="xl:col-span-6">
                                            <label for="accepts_online_orders" class="block text-sm font-medium">Accepts
                                                Online
                                                Orders?</label>
                                            <input type="checkbox" name="accepts_online_orders"
                                                id="accepts_online_orders" value="1"
                                                {{ old('accepts_online_orders', $restaurantProfile->accepts_online_orders ?? true) ? 'checked' : '' }}
                                                class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500">

                                        </div>

                                        <div class="xl:col-span-6">
                                            <label for="offers_takeaway" class="block text-sm font-medium">Offers
                                                Takeaway?</label>
                                            <input type="checkbox" name="offers_takeaway" id="offers_takeaway"
                                                value="1"
                                                {{ old('offers_takeaway', $restaurantProfile->offers_takeaway ?? true) ? 'checked' : '' }}
                                                class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500">

                                        </div>

                                        <div class="xl:col-span-6">
                                            <label for="has_parking" class="block text-sm font-medium">Has
                                                Parking?</label>
                                            <input type="checkbox" name="has_parking" id="has_parking" value="1"
                                                {{ old('has_parking', $restaurantProfile->has_parking ?? false) ? 'checked' : '' }}
                                                class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500">

                                        </div>

                                    </div><!--end grid-->

                                </form><!--end form-->
                            </div>
                        </div>
                    </div>

                    <div class="hidden tab-pane" id="changePasswordTabs">
                        <div class="card">
                            <div class="card-body">
                                <h6 class="mb-4 text-15">Changes Password</h6>
                                <form action="{{ route('change-password.submit') }}" method="POST">
                                    @csrf
                                    <div class="grid grid-cols-1 gap-5 xl:grid-cols-12">
                                        <div class="xl:col-span-4">
                                            <label for="inputValue" class="inline-block mb-2 text-base font-medium">Old
                                                Password*</label>
                                            <div class="relative">
                                                <input type="password"
                                                    class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                                                    id="oldpasswordInput" placeholder="Enter current password">
                                                <button class="absolute top-2 ltr:right-4 rtl:left-4 " type="button"><i
                                                        class="align-middle ri-eye-fill text-slate-500 dark:text-zink-200"></i></button>
                                            </div>
                                        </div><!--end col-->
                                        <div class="xl:col-span-4">
                                            <label for="inputValue" class="inline-block mb-2 text-base font-medium">New
                                                Password*</label>
                                            <div class="relative">
                                                <input type="password"
                                                    class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                                                    id="oldpasswordInput" placeholder="Enter new password">
                                                <button class="absolute top-2 ltr:right-4 rtl:left-4 " type="button"><i
                                                        class="align-middle ri-eye-fill text-slate-500 dark:text-zink-200"></i></button>
                                            </div>
                                        </div><!--end col-->
                                        <div class="xl:col-span-4">
                                            <label for="inputValue"
                                                class="inline-block mb-2 text-base font-medium">Confirm Password*</label>
                                            <div class="relative">
                                                <input type="password"
                                                    class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                                                    id="oldpasswordInput" placeholder="Confirm password">
                                                <button class="absolute top-2 ltr:right-4 rtl:left-4 " type="button"><i
                                                        class="align-middle ri-eye-fill text-slate-500 dark:text-zink-200"></i></button>
                                            </div>
                                        </div><!--end col-->
                                        
                                        <div class="flex justify-end xl:col-span-6">
                                            <button type="button"
                                                class="text-white bg-green-500 border-green-500 btn hover:text-white hover:bg-green-600 hover:border-green-600 focus:text-white focus:bg-green-600 focus:border-green-600 focus:ring focus:ring-green-100 active:text-white active:bg-green-600 active:border-green-600 active:ring active:ring-green-100 dark:ring-green-400/10">Change
                                                Password</button>
                                        </div>
                                    </div><!--end grid-->
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="hidden tab-pane" id="privacyPolicyTabs">
                        <div class="card">
                            <div class="card-body">
                                <h6 class="mb-4 text-15">Restaurant Menu</h6>
                                <div class="space-y-6">
                                    <div class="flex flex-col justify-between gap-2 md:flex-row">
                                        <div>
                                            <h4 class="text-15">Two-factor Authentication</h4>
                                            <p class="mt-1 text-slate-500 dark:text-zink-200">Two-factor authentication is
                                                an enhanced security. Once enabled, you'll be required to give two types of
                                                identification when you log into Google Authentication and SMS are
                                                Supported.</p>
                                        </div>
                                        <div class="shrink-0">
                                            <button type="button"
                                                class="py-1 text-xs px-1.5 text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20">Enable
                                                Two-factor Authentication</button>
                                        </div>
                                    </div>
                                    <div class="flex flex-col justify-between gap-2 md:flex-row">
                                        <div>
                                            <h4 class="text-15">Secondary Verification</h4>
                                            <p class="mt-1 text-slate-500 dark:text-zink-200">The first factor is a
                                                password and the second commonly includes a text with a code sent to your
                                                smartphone, or biometrics using your fingerprint, face, or retina.</p>
                                        </div>
                                        <div class="shrink-0">
                                            <button type="button"
                                                class="py-1 text-xs px-1.5 text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20">Set
                                                up secondary method</button>
                                        </div>
                                    </div>
                                    <div class="flex flex-col justify-between gap-2 md:flex-row">
                                        <div>
                                            <h4 class="text-15">Backup Codes</h4>
                                            <p class="mt-1 text-slate-500 dark:text-zink-200">A backup code is
                                                automatically generated for you when you turn on two-factor authentication
                                                through your iOS or Android Twitter app. You can also generate a backup code
                                                on twitter.com.</p>
                                        </div>
                                        <div class="shrink-0">
                                            <button type="button"
                                                class="py-1 text-xs px-1.5 text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20">Generate
                                                backup codes</button>
                                        </div>
                                    </div>
                                </div>
                                <h6 class="inline-block mt-6 mb-4 underline text-15">Application Notifications:</h6>
                                <div class="space-y-6">
                                    <div class="flex justify-between gap-2">
                                        <div>
                                            <h4 class="text-15">Direct messages</h4>
                                            <p class="mt-1 text-slate-500 dark:text-zink-200">Messages from people you
                                                follow</p>
                                        </div>
                                        <div class="shrink-0">
                                            <div
                                                class="relative inline-block w-10 align-middle transition duration-200 ease-in ltr:mr-2 rtl:ml-2">
                                                <input type="checkbox" name="directMessage" id="directMessage"
                                                    class="absolute block transition duration-300 ease-linear border-2 rounded-full appearance-none cursor-pointer size-5 border-slate-200 dark:border-zink-600 bg-white/80 dark:bg-zink-400 peer/published checked:bg-custom-500 dark:checked:bg-custom-500 ltr:checked:right-0 rtl:checked:left-0 checked:border-custom-100 dark:checked:border-custom-900 arrow-none checked:bg-none"
                                                    checked="">
                                                <label for="directMessage"
                                                    class="block h-5 overflow-hidden duration-300 ease-linear border rounded-full cursor-pointer cursor-pointertransition border-slate-200 dark:border-zink-500 bg-slate-200 dark:bg-zink-600 peer-checked/published:bg-custom-100 dark:peer-checked/published:bg-custom-900 peer-checked/published:border-custom-100 dark:peer-checked/published:border-custom-900"></label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex justify-between gap-2">
                                        <div>
                                            <h4 class="text-15">Show email notifications</h4>
                                            <p class="mt-1 text-slate-500 dark:text-zink-200">Under Settings, choose
                                                Notifications. Under Select an account, choose the account to enable
                                                notifications for.</p>
                                        </div>
                                        <div class="shrink-0">
                                            <div
                                                class="relative inline-block w-10 align-middle transition duration-200 ease-in ltr:mr-2 rtl:ml-2">
                                                <input type="checkbox" name="emailNotification" id="emailNotification"
                                                    class="absolute block transition duration-300 ease-linear border-2 rounded-full appearance-none cursor-pointer size-5 border-slate-200 dark:border-zink-600 bg-white/80 dark:bg-zink-400 peer/published checked:bg-custom-500 dark:checked:bg-custom-500 ltr:checked:right-0 rtl:checked:left-0 checked:border-custom-100 dark:checked:border-custom-900 arrow-none checked:bg-none"
                                                    checked="">
                                                <label for="emailNotification"
                                                    class="block h-5 overflow-hidden duration-300 ease-linear border rounded-full cursor-pointer cursor-pointertransition border-slate-200 dark:border-zink-500 bg-slate-200 dark:bg-zink-600 peer-checked/published:bg-custom-100 dark:peer-checked/published:bg-custom-900 peer-checked/published:border-custom-100 dark:peer-checked/published:border-custom-900"></label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex justify-between gap-2">
                                        <div>
                                            <h4 class="text-15">Show chat notifications</h4>
                                            <p class="mt-1 text-slate-500 dark:text-zink-200">Messages from people you
                                                follow</p>
                                        </div>
                                        <div class="shrink-0">
                                            <div
                                                class="relative inline-block w-10 align-middle transition duration-200 ease-in ltr:mr-2 rtl:ml-2">
                                                <input type="checkbox" name="chatNotification" id="chatNotification"
                                                    class="absolute block transition duration-300 ease-linear border-2 rounded-full appearance-none cursor-pointer size-5 border-slate-200 dark:border-zink-600 bg-white/80 dark:bg-zink-400 peer/published checked:bg-custom-500 dark:checked:bg-custom-500 ltr:checked:right-0 rtl:checked:left-0 checked:border-custom-100 dark:checked:border-custom-900 arrow-none checked:bg-none"
                                                    checked="">
                                                <label for="chatNotification"
                                                    class="block h-5 overflow-hidden duration-300 ease-linear border rounded-full cursor-pointer cursor-pointertransition border-slate-200 dark:border-zink-500 bg-slate-200 dark:bg-zink-600 peer-checked/published:bg-custom-100 dark:peer-checked/published:bg-custom-900 peer-checked/published:border-custom-100 dark:peer-checked/published:border-custom-900"></label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex justify-between gap-2">
                                        <div>
                                            <h4 class="text-15">Show purchase notifications</h4>
                                            <p class="mt-1 text-slate-500 dark:text-zink-200">Get real-time purchase alerts
                                                to protect yourself from fraudulent charges.</p>
                                        </div>
                                        <div class="shrink-0">
                                            <div
                                                class="relative inline-block w-10 align-middle transition duration-200 ease-in ltr:mr-2 rtl:ml-2">
                                                <input type="checkbox" name="showPurchase" id="showPurchase"
                                                    class="absolute block transition duration-300 ease-linear border-2 rounded-full appearance-none cursor-pointer size-5 border-slate-200 dark:border-zink-600 bg-white/80 dark:bg-zink-400 peer/published checked:bg-custom-500 dark:checked:bg-custom-500 ltr:checked:right-0 rtl:checked:left-0 checked:border-custom-100 dark:checked:border-custom-900 arrow-none checked:bg-none"
                                                    checked="">
                                                <label for="customSoftSwitch"
                                                    class="block h-5 overflow-hidden duration-300 ease-linear border rounded-full cursor-pointer cursor-pointertransition border-slate-200 dark:border-zink-500 bg-slate-200 dark:bg-zink-600 peer-checked/published:bg-custom-100 dark:peer-checked/published:bg-custom-900 peer-checked/published:border-custom-100 dark:peer-checked/published:border-custom-900"></label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <h6 class="inline-block mt-6 mb-4 underline text-15">Delete This Account:</h6>
                                <p class="mt-1 text-slate-500 dark:text-zink-200">Go to the Data & Privacy section of your
                                    profile Account. Scroll to "Your data & privacy options." Delete your Profile Account.
                                    Follow the instructions to delete your account :</p>
                                <form action="#">
                                    <div class="max-w-xs mt-4">
                                        <div>
                                            <input type="password"
                                                class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                                                id="oldpasswordInput" placeholder="Enter password">
                                        </div>
                                        <div class="flex mt-4 gap-x-2">
                                            <button type="button"
                                                class="text-red-500 bg-red-100 btn hover:text-white hover:bg-red-600 focus:text-white focus:bg-red-600 focus:ring focus:ring-red-100 active:text-white active:bg-red-600 active:ring active:ring-red-100 dark:bg-red-500/20 dark:text-red-500 dark:hover:bg-red-500 dark:hover:text-white dark:focus:bg-red-500 dark:focus:text-white dark:active:bg-red-500 dark:active:text-white dark:ring-red-400/20">Close
                                                & delete this Account</button>
                                            <button type="button"
                                                class="text-slate-500 btn bg-slate-200 border-slate-200 hover:text-slate-600 hover:bg-slate-300 hover:border-slate-300 focus:text-slate-600 focus:bg-slate-300 focus:border-slate-300 focus:ring focus:ring-slate-100 active:text-slate-600 active:bg-slate-300 active:border-slate-300 active:ring active:ring-slate-100 dark:bg-zink-600 dark:hover:bg-zink-500 dark:border-zink-600 dark:hover:border-zink-500 dark:text-zink-200 dark:ring-zink-400/50">Cancel</button>
                                        </div>
                                    </div><!--end col-->
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- container-fluid -->
        </div>
        <!-- End Page-content -->

    </div>
@endsection
