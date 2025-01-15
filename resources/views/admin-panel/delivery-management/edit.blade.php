@extends('layouts.master')
@section('content')
    <div
        class="group-data-[sidebar-size=lg]:ltr:md:ml-vertical-menu group-data-[sidebar-size=lg]:rtl:md:mr-vertical-menu group-data-[sidebar-size=md]:ltr:ml-vertical-menu-md group-data-[sidebar-size=md]:rtl:mr-vertical-menu-md group-data-[sidebar-size=sm]:ltr:ml-vertical-menu-sm group-data-[sidebar-size=sm]:rtl:mr-vertical-menu-sm pt-[calc(theme('spacing.header')_*_1)] pb-[calc(theme('spacing.header')_*_0.8)] px-4 group-data-[navbar=bordered]:pt-[calc(theme('spacing.header')_*_1.3)] group-data-[navbar=hidden]:pt-0 group-data-[layout=horizontal]:mx-auto group-data-[layout=horizontal]:max-w-screen-2xl group-data-[layout=horizontal]:px-0 group-data-[layout=horizontal]:group-data-[sidebar-size=lg]:ltr:md:ml-auto group-data-[layout=horizontal]:group-data-[sidebar-size=lg]:rtl:md:mr-auto group-data-[layout=horizontal]:md:pt-[calc(theme('spacing.header')_*_1.6)] group-data-[layout=horizontal]:px-3 group-data-[layout=horizontal]:group-data-[navbar=hidden]:pt-[calc(theme('spacing.header')_*_0.9)]">
        <div class="container-fluid group-data-[content=boxed]:max-w-boxed mx-auto">

            <div class="flex flex-col gap-2 py-4 md:flex-row md:items-center print:hidden">
                <div class="grow">
                    <h5 class="text-16">Edit Customer</h5>
                </div>
                <ul class="flex items-center gap-2 text-sm font-normal shrink-0">
                    <li
                    class="relative before:content-['\ea54'] before:font-remix ltr:before:-right-1 rtl:before:-left-1  before:absolute before:text-[18px] before:-top-[3px] ltr:pr-4 rtl:pl-4 before:text-slate-400 dark:text-zink-200">
                    <a href="{{ route('home')}}" class="text-slate-400 dark:text-zink-200">Dashboard</a>
                </li>
                    <li class="text-slate-700 dark:text-zink-100">
                        Edit Forms
                    </li>
                </ul>
            </div>
            <form action="{{ route('delivery-management.update', $user->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT') 
                <div class="card">
                    <div class="card-body">


                        <div class="grid grid-cols-1 gap-x-5 md:grid-cols-2 xl:grid-cols-6">
                            <div class="mb-6">
                                <label for="customer-name" class="inline-block mb-2 text-base font-medium">Customer Name
                                    <span class="text-red-500">*</span></label>
                                <input type="text" id="customer-name" name="name"
                                    class="form-input @error('name') is-invalid @enderror  border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                                    placeholder="Enter Full Name" value="{{ $user->name }}" required>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="mb-6">
                                <label for="email" class="inline-block mb-2 text-base font-medium">Email<span
                                        class="text-red-500">*</span></label>
                                <input type="email" id="email" name="email"
                                    class="form-input @error('email') is-invalid @enderror border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                                    placeholder="Enter Customer Email" value="{{ $user->email }}" required>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="mb-6">
                                <label for="password" class="inline-block mb-2 text-base font-medium">Password <span
                                        class="text-red-500">(Leave Blank If You Don't Want To Change
                                        Password)</span></label>
                                <input type="password" id="password" name="password"
                                    class="form-input @error('password') is-invalid @enderror border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                                    placeholder="*********">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="mb-6">
                                <label for="password_confirmation" class="inline-block mb-2 text-base font-medium">Confirm
                                    Password <span class="text-red-500">*</span></label>
                                <input type="password" id="password_confirmation" name="password_confirmation"
                                    class="form-input @error('password_confirmation') is-invalid @enderror border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                                    placeholder="*********">
                                @error('password_confirmation')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>



                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <h6 class="mb-4 text-15">Customer Profile</h6>


                        <div class="grid grid-cols-1 gap-x-5 xl:grid-cols-2">
                            <!-- Phone Field -->
                            <div class="mb-4">
                                <label for="phone" class="inline-block mb-2 text-base font-medium">Phone
                                    <span class="text-red-500">*</span></label>
                                <input type="text" id="phone" name="phone"
                                    class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                                    placeholder="Enter phone number" value="{{ $profile->phone ?? old('phone') }}">
                                <p class="mt-1 text-sm text-red-500">{{ $errors->first('phone') }}</p>


                            </div>

                            <!-- Address Field -->
                            <div class="mb-4">
                                <label for="address" class="inline-block mb-2 text-base font-medium">Address
                                    <span class="text-red-500">*</span></label>
                                <input type="text" id="address" name="address"
                                    class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                                    placeholder="Enter address" value="{{ $profile->address ?? old('address') }}">
                                <p class="mt-1 text-sm text-red-500">{{ $errors->first('address') }}</p>
                            </div>
                        </div><!--end grid-->

                        <div class="grid grid-cols-1 gap-x-5 xl:grid-cols-2">
                            <!-- City Field -->
                            <div class="mb-4">
                                <label for="city" class="inline-block mb-2 text-base font-medium">City
                                    <span class="text-red-500">*</span></label>
                                <input type="text" id="city" name="city"
                                    class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                                    placeholder="Enter city" value="{{ $profile->city ?? old('city') }}">
                                <p class="mt-1 text-sm text-red-500">{{ $errors->first('city') }}</p>
                            </div>

                            <!-- State Field -->
                            <div class="mb-4">
                                <label for="state" class="inline-block mb-2 text-base font-medium">State
                                    <span class="text-red-500">*</span></label>
                                <input type="text" id="state" name="state"
                                    class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                                    placeholder="Enter state" value="{{ $profile->state ?? old('state') }}">
                                <p class="mt-1 text-sm text-red-500">{{ $errors->first('state') }}</p>
                            </div>
                        </div><!--end grid-->

                        <div class="grid grid-cols-1 gap-x-5 xl:grid-cols-2">
                            <!-- Country Field -->
                            <div class="mb-4">
                                <label for="country" class="inline-block mb-2 text-base font-medium">Country
                                    <span class="text-red-500">*</span></label>
                                <input type="text" id="country" name="country"
                                    class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                                    placeholder="Enter country" value="{{ $profile->country ?? old('country') }}">
                                <p class="mt-1 text-sm text-red-500">{{ $errors->first('country') }}</p>
                            </div>

                            <!-- Postal Code Field -->
                            <div class="mb-4">
                                <label for="postal_code" class="inline-block mb-2 text-base font-medium">Postal Code
                                    <span class="text-red-500">*</span></label>
                                <input type="text" id="postal_code" name="postal_code"
                                    class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                                    placeholder="Enter postal code"
                                    value="{{ $profile->postal_code ?? old('postal_code') }}">
                                <p class="mt-1 text-sm text-red-500">{{ $errors->first('postal_code') }}</p>
                            </div>
                        </div><!--end grid-->

                        <div class="grid grid-cols-1 gap-x-5 xl:grid-cols-2">
                            <!-- Date of Birth Field -->
                            <div class="mb-4">
                                <label for="date_of_birth" class="inline-block mb-2 text-base font-medium">Date of Birth
                                    <span class="text-red-500">*</span></label>
                                <input type="date" id="date_of_birth" name="date_of_birth"
                                    class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                                    placeholder="Enter date of birth"
                                    value="{{ $profile->date_of_birth ?? old('date_of_birth') }}">
                                <p class="mt-1 text-sm text-red-500">{{ $errors->first('date_of_birth') }}</p>
                            </div>

                            <!-- Profile Image Field -->
                            <div class="mb-4">
                                <label for="profile_image" class="inline-block mb-2 text-base font-medium">Profile
                                    Image</label>
                                <input type="file" id="profile_image" name="profile_image"
                                    class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200">
                                <p class="mt-1 text-sm text-red-500">{{ $errors->first('profile_image') }}</p>
                            </div>
                        </div><!--end grid-->
                        <div class="mb-4">
                            <label for="bio" class="inline-block mb-2 text-base font-medium">Previous Image</label>

                           @if ($profile && $profile->profile_image)
    <img src="{{ asset('storage/' . $profile->profile_image) }}" alt="Profile Image" class="rounded-full w-32 h-32">
@else
    <img src="{{ asset('public/assets/images/avatar-1.png') }}" alt="Default Avatar" class="rounded-full w-32 h-32">
@endif




                        </div>
                        <!-- Bio Field -->
                        <div class="mb-4">
                            <label for="bio" class="inline-block mb-2 text-base font-medium">Bio</label>
                            <textarea id="bio" name="bio"
                                class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                                placeholder="Enter bio">{{ old('bio') }}</textarea>
                            <p class="mt-1 text-sm text-red-500">{{ $errors->first('bio') }}</p>
                        </div>

                        <!-- Submit Button -->
                        <div class="flex justify-end gap-2">
                            <button type="button"
                                class="text-red-500 bg-white btn hover:text-red-500 hover:bg-red-100 focus:text-red-500 focus:bg-red-100 active:text-red-500 active:bg-red-100 dark:bg-zink-700 dark:hover:bg-red-500/10 dark:focus:bg-red-500/10 dark:active:bg-red-500/10"><i
                                    data-lucide="x" class="inline-block size-4"></i> <span
                                    class="align-middle">Cancel</span></button>
                            <button type="submit"
                                class="text-white transition-all duration-200 ease-linear btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100">Submit</button>
                        </div>


                    </div>
                </div><!--end card-->
            </form>
        </div>
        <!-- container-fluid -->
    </div>
@endsection
