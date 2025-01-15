@extends('layouts.master')

@section('content')
    <div
        class="group-data-[sidebar-size=lg]:ltr:md:ml-vertical-menu group-data-[sidebar-size=lg]:rtl:md:mr-vertical-menu group-data-[sidebar-size=md]:ltr:ml-vertical-menu-md group-data-[sidebar-size=md]:rtl:mr-vertical-menu-md group-data-[sidebar-size=sm]:ltr:ml-vertical-menu-sm group-data-[sidebar-size=sm]:rtl:mr-vertical-menu-sm pt-[calc(theme('spacing.header')_*_1)] pb-[calc(theme('spacing.header')_*_0.8)] px-4 group-data-[navbar=bordered]:pt-[calc(theme('spacing.header')_*_1.3)] group-data-[navbar=hidden]:pt-0 group-data-[layout=horizontal]:mx-auto group-data-[layout=horizontal]:max-w-screen-2xl group-data-[layout=horizontal]:px-0 group-data-[layout=horizontal]:group-data-[sidebar-size=lg]:ltr:md:ml-auto group-data-[layout=horizontal]:group-data-[sidebar-size=lg]:rtl:md:mr-auto group-data-[layout=horizontal]:md:pt-[calc(theme('spacing.header')_*_1.6)] group-data-[layout=horizontal]:px-3 group-data-[layout=horizontal]:group-data-[navbar=hidden]:pt-[calc(theme('spacing.header')_*_0.9)]">
        <div class="container-fluid group-data-[content=boxed]:max-w-boxed mx-auto">

            <div class="flex flex-col gap-2 py-4 md:flex-row md:items-center print:hidden">
                <div class="grow">
                    <h5 class="text-16">Add Resturant</h5>
                </div>
                <ul class="flex items-center gap-2 text-sm font-normal shrink-0">
                    <li
                        class="relative before:content-['\ea54'] before:font-remix ltr:before:-right-1 rtl:before:-left-1  before:absolute before:text-[18px] before:-top-[3px] ltr:pr-4 rtl:pl-4 before:text-slate-400 dark:text-zink-200">
                        <a href="{{ route('home')}}" class="text-slate-400 dark:text-zink-200">Dashboard</a>
                    </li>
                    <li class="text-slate-700 dark:text-zink-100">
                        Form View
                    </li>
                </ul>
            </div>


            <form action="{{ route('restaurant-management.update', $user->id) }}" method="POST"
                enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div class="mb-3">
                        <label for="restaurant_name" class="inline-block mb-2 text-base font-medium">Restaurant Name <span
                                class="text-red-500">*</span></label>
                        <input type="text" name="restaurant_name" id="restaurant_name"
                            value="{{ old('restaurant_name', $restaurantProfile->restaurant_name) }}"
                            class="form-input @error('restaurant_name') is-invalid @enderror border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                            required>

                        @error('restaurant_name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="restaurant_logo" class="inline-block mb-2 text-base font-medium">Restaurant Logo</label>
                        <input type="file" name="restaurant_logo" id="restaurant_logo"
                            class="cursor-pointer form-file form-file-sm border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500">
                        @if ($restaurantProfile->restaurant_logo)
                            <img src="{{ asset('storage/' . $restaurantProfile->restaurant_logo) }}" alt="Logo"
                                class="mt-2 w-32 h-32 object-cover">
                        @endif
                    </div>

                    <div class="mb-3">
                        <label for="restaurant_phone" class="inline-block mb-2 text-base font-medium">Phone</label>
                        <input type="text" name="restaurant_phone" id="restaurant_phone"
                            class="form-input @error('restaurant_phone') is-invalid @enderror border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                            value="{{ old('restaurant_phone', $restaurantProfile->restaurant_phone) }}">

                        @error('restaurant_phone')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="restaurant_email" class="inline-block mb-2 text-base font-medium">Email Address <span
                                class="text-red-500">*</span></label>
                        <input type="email" name="restaurant_email" id="restaurant_email"
                            value="{{ old('restaurant_email', $restaurantProfile->restaurant_email ?? $user->email) }}"
                            class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200
                            @error('restaurant_email') is-invalid @enderror"
                            required>

                        @error('restaurant_email')
                            <span class="invalid-feedback text-red-500" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>


                    <div class="mb-3">
                        <label for="password" class="inline-block mb-2 text-base font-medium">Password <span
                                class="text-red-500">*</span></label>
                        <input type="password" name="password" id="password"
                            class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="password_confirmation" class="inline-block mb-2 text-base font-medium">Confirm Password
                            <span class="text-red-500">*</span></label>
                        <input type="password" name="password_confirmation" id="password_confirmation"
                            class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200
                            @error('password_confirmation') is-invalid @enderror">

                        @error('password_confirmation')
                            <span class="invalid-feedback text-red-500" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>


                    <div class="mb-3">
                        <label for="restaurant_address" class="inline-block mb-2 text-base font-medium">Address</label>
                        <input type="text" name="restaurant_address" id="restaurant_address"
                            value="{{ old('restaurant_address', $restaurantProfile->restaurant_address) }}"
                            class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200
                            @error('restaurant_address') is-invalid @enderror">

                        @error('restaurant_address')
                            <span class="invalid-feedback text-red-500" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>


                    <div class="mb-3">
                        <label for="restaurant_city" class="inline-block mb-2 text-base font-medium">City</label>
                        <input type="text" name="restaurant_city" id="restaurant_city"
                            value="{{ old('restaurant_city', $restaurantProfile->restaurant_city) }}"
                            class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200
                            @error('restaurant_city') is-invalid @enderror">

                        @error('restaurant_city')
                            <span class="invalid-feedback text-red-500" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>


                    <div class="mb-3">
                        <label for="restaurant_state" class="inline-block mb-2 text-base font-medium">State</label>
                        <input type="text" name="restaurant_state" id="restaurant_state"
                            value="{{ old('restaurant_state', $restaurantProfile->restaurant_state) }}"
                            class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200
                            @error('restaurant_state') is-invalid @enderror">

                        @error('restaurant_state')
                            <span class="invalid-feedback text-red-500" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="restaurant_country" class="inline-block mb-2 text-base font-medium">Country</label>
                        <input type="text" name="restaurant_country" id="restaurant_country"
                            value="{{ old('restaurant_country', $restaurantProfile->restaurant_country) }}"
                            class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200
                            @error('restaurant_country') is-invalid @enderror">

                        @error('restaurant_country')
                            <span class="invalid-feedback text-red-500" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>


                    <div class="mb-3">
                        <label for="restaurant_postal_code" class="inline-block mb-2 text-base font-medium">Postal
                            Code</label>
                        <input type="text" name="restaurant_postal_code" id="restaurant_postal_code"
                            value="{{ old('restaurant_postal_code', $restaurantProfile->restaurant_postal_code) }}"
                            class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200
                            @error('restaurant_postal_code') is-invalid @enderror">

                        @error('restaurant_postal_code')
                            <span class="invalid-feedback text-red-500" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="opening_time" class="inline-block mb-2 text-base font-medium">Opening Time</label>
                        <input type="time" name="opening_time" id="opening_time"
                            class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200
                            @error('opening_time') is-invalid @enderror"
                            value="{{ old('opening_time', $restaurantProfile->opening_time) }}">

                        @error('opening_time')
                            <span class="invalid-feedback text-red-500" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="closing_time" class="inline-block mb-2 text-base font-medium">Closing Time</label>
                        <input type="time" name="closing_time" id="closing_time"
                            class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200
                            @error('closing_time') is-invalid @enderror"
                            value="{{ old('closing_time', $restaurantProfile->closing_time) }}">

                        @error('closing_time')
                            <span class="invalid-feedback text-red-500" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>



                    <!-- Opening Days -->
                    <div class="mb-3">
                        <label for="opening_days" class="inline-block mb-2 text-base font-medium">Opening Days</label>
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

                        @error('opening_days')
                            <span class="invalid-feedback text-red-500" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>



                    <div class="mb-3">
                        <label for="cuisine_type" class="inline-block mb-2 text-base font-medium">Cuisine Types</label>
                        <select
                            class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200 @error('cuisine_type') is-invalid @enderror"
                            id="choices-multiple-remove-button" data-choices data-choices-removeItem name="cuisine_type[]"
                            multiple>
                    
                            @foreach ($cuisines as $item)
                                <option value="{{ $item->id }}"
                                    {{ in_array($item->id, (array) old('cuisine_type', json_decode($restaurantProfile->cuisine_type ?? '[]'))) ? 'selected' : '' }}>
                                    {{ $item->cuisines_name }}
                                </option>
                            @endforeach
                        </select>
                    
                        @error('cuisine_type')
                            <span class="invalid-feedback text-red-500" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    


                    <div class="mb-3">
                        <label for="seating_capacity" class="inline-block mb-2 text-base font-medium">Seating
                            Capacity</label>
                        <input type="number" name="seating_capacity" id="seating_capacity"
                            class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200 @error('seating_capacity') is-invalid @enderror"
                            value="{{ old('seating_capacity', $restaurantProfile->seating_capacity ?? '') }}">

                        @error('seating_capacity')
                            <span class="invalid-feedback text-red-500" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>


                    <div class="mb-3">
                        <label for="is_vegetarian" class="block text-sm font-medium">Vegetarian?</label>
                        <input type="checkbox" name="is_vegetarian" id="is_vegetarian" value="1"
                            {{ old('is_vegetarian', $restaurantProfile->is_vegetarian ?? false) ? 'checked' : '' }}
                            class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500">

                        @error('is_vegetarian')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="accepts_online_orders" class="block text-sm font-medium">Accepts Online
                            Orders?</label>
                        <input type="checkbox" name="accepts_online_orders" id="accepts_online_orders" value="1"
                            {{ old('accepts_online_orders', $restaurantProfile->accepts_online_orders ?? true) ? 'checked' : '' }}
                            class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500">

                        @error('accepts_online_orders')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="offers_takeaway" class="block text-sm font-medium">Offers Takeaway?</label>
                        <input type="checkbox" name="offers_takeaway" id="offers_takeaway" value="1"
                            {{ old('offers_takeaway', $restaurantProfile->offers_takeaway ?? true) ? 'checked' : '' }}
                            class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500">

                        @error('offers_takeaway')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="has_parking" class="block text-sm font-medium">Has Parking?</label>
                        <input type="checkbox" name="has_parking" id="has_parking" value="1"
                            {{ old('has_parking', $restaurantProfile->has_parking ?? false) ? 'checked' : '' }}
                            class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500">

                        @error('has_parking')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="restaurant_description"
                            class="inline-block mb-2 text-base font-medium">Description</label>
                        <textarea name="restaurant_description" id="restaurant_description" rows="4"
                            class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200 w-full">{{ old('restaurant_description', $restaurantProfile->restaurant_description ?? '') }}</textarea>

                        @error('restaurant_description')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>

                </div>
                <div class="mt-6">
                    <div class="flex justify-end gap-2">
                        <button type="button"
                            class="text-red-500 bg-white btn hover:text-red-500 hover:bg-red-100 focus:text-red-500 focus:bg-red-100 active:text-red-500 active:bg-red-100 dark:bg-zink-700 dark:hover:bg-red-500/10 dark:focus:bg-red-500/10 dark:active:bg-red-500/10"><svg
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" data-lucide="x" class="lucide lucide-x inline-block size-4">
                                <path d="M18 6 6 18"></path>
                                <path d="m6 6 12 12"></path>
                            </svg> <span class="align-middle">Cancel</span></button>
                        <button type="submit"
                            class="text-white transition-all duration-200 ease-linear btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100">Update
                            Restaurant</button>
                    </div>
                </div>

            </form>

        </div>
        <!-- container-fluid -->
    </div>
    <!-- End Page-content -->
@endsection
