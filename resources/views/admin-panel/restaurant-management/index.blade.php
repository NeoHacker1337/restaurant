@extends('layouts.master')

@section('content')
    <div
        class="group-data-[sidebar-size=lg]:ltr:md:ml-vertical-menu group-data-[sidebar-size=lg]:rtl:md:mr-vertical-menu group-data-[sidebar-size=md]:ltr:ml-vertical-menu-md group-data-[sidebar-size=md]:rtl:mr-vertical-menu-md group-data-[sidebar-size=sm]:ltr:ml-vertical-menu-sm group-data-[sidebar-size=sm]:rtl:mr-vertical-menu-sm pt-[calc(theme('spacing.header')_*_1)] pb-[calc(theme('spacing.header')_*_0.8)] px-4 group-data-[navbar=bordered]:pt-[calc(theme('spacing.header')_*_1.3)] group-data-[navbar=hidden]:pt-0 group-data-[layout=horizontal]:mx-auto group-data-[layout=horizontal]:max-w-screen-2xl group-data-[layout=horizontal]:px-0 group-data-[layout=horizontal]:group-data-[sidebar-size=lg]:ltr:md:ml-auto group-data-[layout=horizontal]:group-data-[sidebar-size=lg]:rtl:md:mr-auto group-data-[layout=horizontal]:md:pt-[calc(theme('spacing.header')_*_1.6)] group-data-[layout=horizontal]:px-3 group-data-[layout=horizontal]:group-data-[navbar=hidden]:pt-[calc(theme('spacing.header')_*_0.9)]">
        <div class="container-fluid group-data-[content=boxed]:max-w-boxed mx-auto">

            <div class="flex flex-col gap-2 py-4 md:flex-row md:items-center print:hidden">
                <div class="grow">
                    <h5 class="text-16">Grid View</h5>
                </div>
                <ul class="flex items-center gap-2 text-sm font-normal shrink-0">
                    <li
                        class="relative before:content-['\ea54'] before:font-remix ltr:before:-right-1 rtl:before:-left-1  before:absolute before:text-[18px] before:-top-[3px] ltr:pr-4 rtl:pl-4 before:text-slate-400 dark:text-zink-200">
                        <a href="{{ route('home')}}" class="text-slate-400 dark:text-zink-200">Dashboard</a>
                    </li>
                    <li class="text-slate-700 dark:text-zink-100">
                        Grid View
                    </li>
                </ul>
            </div>
            <form action="{{ route('restaurant-management.index') }}" method="GET" class="mb-5">
                <div class="grid grid-cols-1 gap-5 lg:grid-cols-9">
                    <div class="relative lg:col-span-9 xl:col-span-9">
                        <input type="text" name="search" value="{{ request('search') }}" {{-- Persist search query --}}
                            class="ltr:pl-8 rtl:pr-8 search form-input w-full border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                            placeholder="Search for name or email..." autocomplete="off">
                        <i data-lucide="search"
                            class="inline-block size-4 absolute ltr:left-2.5 rtl:right-2.5 top-2.5 text-slate-500 dark:text-zink-200 fill-slate-100 dark:fill-zink-600"></i>
                    </div>
                    <div class="lg:col-span-3 lg:col-start-10">
                        <div class="flex gap-2 lg:justify-end">
                            <button type="submit"
                                class="text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20">
                                Search
                            </button>
                        </div>
                    </div>
                </div>
            </form>



            <div class="grid grid-cols-1 gap-x-5 md:grid-cols-2 xl:grid-cols-4">
                @foreach ($restaurants as $restaurant)
                    <div class="card">
                        <div class="card-body">
                            <div
                                class="relative flex items-center justify-center mx-auto text-lg rounded-full size-16 bg-slate-100 dark:bg-zink-600">
                                <img src="{{ asset('public/assets/images/restaurant.png') }}" alt=""
                                    class="rounded-full size-16">
                                <span
                                    class="absolute bg-green-400 border-2 border-white rounded-full size-3 dark:border-zink-700 bottom-1 ltr:right-1 rtl:left-1"></span>
                            </div>
                            <div class="mt-4 text-center">
                                <h5 class="mb-1 text-16"><a href="#">{{ $restaurant->name }}</a></h5>
                                <p class="mb-3 text-slate-500 dark:text-zink-200">{{ $restaurant->email }}</p>
                                <p class="text-slate-500 dark:text-zink-200">748 Luettgen Plain Suite South Winstonfort, NM
                                </p>
                            </div>
                            <div class="flex gap-2 mt-5">
                                <a href="{{ route('restaurant-management.show', ['restaurant_management' => $restaurant->id]) }}"
                                    class="bg-white text-custom-500 btn border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:bg-zink-700 dark:hover:bg-custom-500 dark:ring-custom-400/20 dark:focus:bg-custom-500 grow">
                                     <i data-lucide="messages-square" class="inline-block size-4 ltr:mr-1 rtl:ml-1"></i>
                                     <span class="align-middle">View Details</span>
                                 </a>
                                 

                                <div class="relative dropdown">
                                    <button type="button" id="userGridDropdown12" data-bs-toggle="dropdown"
                                        class="dropdown-toggle flex items-center justify-center size-[37.5px] p-0 text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20"><i
                                            data-lucide="more-horizontal" class="size-4"></i></button>
                                    <ul class="absolute z-50 hidden py-2 mt-1 ltr:text-left rtl:text-right list-none bg-white rounded-md shadow-md dropdown-menu min-w-[10rem] dark:bg-zink-600"
                                        aria-labelledby="userGridDropdown12">
                                        <li>
                                            <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200"
                                               href="{{ route('restaurant-management.show', ['restaurant_management' => $restaurant->id]) }}">
                                                <i data-lucide="eye" class="inline-block size-3 ltr:mr-1 rtl:ml-1"></i>
                                                <span class="align-middle">Overview</span>
                                            </a>
                                        </li>
                                        
                                        <li>
                                            <a data-modal-target="addUserModal"
                                            class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200"
                                            href="{{ route('restaurant-management.edit', ['restaurant_management' => $restaurant->id]) }}">
                                             <i data-lucide="file-edit" class="inline-block size-3 ltr:mr-1 rtl:ml-1"></i>
                                             <span class="align-middle">Edit</span>
                                         </a>
                                         
                                        </li>
                                        <li>
                                            <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200"
                                                href="javascript:void(0);"
                                                onclick="confirmDelete(event, '{{ route('restaurants.delete', $restaurant->id) }}')">
                                                <i data-lucide="trash-2" class="inline-block size-3 ltr:mr-1 rtl:ml-1"></i>
                                                <span class="align-middle">Delete</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div><!--end col & card-->
                @endforeach
            </div><!--end grid-->

            <div class="flex flex-col items-center mb-5 md:flex-row">
                <div class="mt-4">
                    {{ $restaurants->links() }}
                </div>
            </div>

        </div>
        <!-- container-fluid -->


    </div>
    <!-- End Page-content -->
@endsection

@section('extra_js')
<script>
    function confirmDelete(event, deleteRoute) {
        event.preventDefault(); // Prevent default link behavior

        if (confirm("Are you sure you want to delete this restaurant?")) {
            const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

            // Send POST request using Fetch API
            fetch(deleteRoute, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded', // Adjusted for Laravel
                    'X-CSRF-TOKEN': csrfToken
                },
                body: new URLSearchParams({
                    _method: 'POST' // Laravel method spoofing
                })
            })
            .then(response => {
                if (response.ok) {
                    alert('Restaurant deleted successfully.');
                    location.reload(); // Refresh the page or update the UI as needed
                } else {
                    alert('Failed to delete the restaurant. Please try again.');
                }
            })
            .catch(error => {
                console.error('Error:', error);
                alert('An error occurred. Please try again.');
            });
        }
    }
</script>

@endsection
