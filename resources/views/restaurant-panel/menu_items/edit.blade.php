@extends('layouts.master')

@section('content')
    <div
        class="group-data-[sidebar-size=lg]:ltr:md:ml-vertical-menu group-data-[sidebar-size=lg]:rtl:md:mr-vertical-menu group-data-[sidebar-size=md]:ltr:ml-vertical-menu-md group-data-[sidebar-size=md]:rtl:mr-vertical-menu-md group-data-[sidebar-size=sm]:ltr:ml-vertical-menu-sm group-data-[sidebar-size=sm]:rtl:mr-vertical-menu-sm pt-[calc(theme('spacing.header')_*_1)] pb-[calc(theme('spacing.header')_*_0.8)] px-4 group-data-[navbar=bordered]:pt-[calc(theme('spacing.header')_*_1.3)] group-data-[navbar=hidden]:pt-0 group-data-[layout=horizontal]:mx-auto group-data-[layout=horizontal]:max-w-screen-2xl group-data-[layout=horizontal]:px-0 group-data-[layout=horizontal]:group-data-[sidebar-size=lg]:ltr:md:ml-auto group-data-[layout=horizontal]:group-data-[sidebar-size=lg]:rtl:md:mr-auto group-data-[layout=horizontal]:md:pt-[calc(theme('spacing.header')_*_1.6)] group-data-[layout=horizontal]:px-3 group-data-[layout=horizontal]:group-data-[navbar=hidden]:pt-[calc(theme('spacing.header')_*_0.9)]">
        <div class="container-fluid group-data-[content=boxed]:max-w-boxed mx-auto">

            <div class="flex flex-col gap-2 py-4 md:flex-row md:items-center print:hidden">
                <div class="grow">
                    <h5 class="text-16">Edit Menu Items</h5>
                </div>
                <ul class="flex items-center gap-2 text-sm font-normal shrink-0">
                    <li
                        class="relative before:content-['\ea54'] before:font-remix ltr:before:-right-1 rtl:before:-left-1  before:absolute before:text-[18px] before:-top-[3px] ltr:pr-4 rtl:pl-4 before:text-slate-400 dark:text-zink-200">
                        <a href="{{ route('home') }}" class="text-slate-400 dark:text-zink-200">Dashboard</a>
                    </li>
                    <li class="text-slate-700 dark:text-zink-100">
                        Menu Items Form
                    </li>
                </ul>
            </div>

            <div class="card">
                <div class="card-body">
                    <div class="container">

                        <form action="{{ route('menu-items.update', $menuItem->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="grid grid-cols-1 gap-x-5 md:grid-cols-2 xl:grid-cols-3">
                                <!-- Name -->
                                <div class="col-12">
                                    <label for="name" class="inline-block mb-2 text-base font-medium">Item Name
                                        <span class="text-red-500">*</span></label>
                                    <input type="text" id="name" name="name"
                                        class="form-input @error('name') is-invalid @enderror"
                                        placeholder="Enter Item Name" value="{{ old('name', $menuItem->name) }}" required>
                                    @error('name')
                                        <span class="text-red-500 text-sm">{{ $message }}</span>
                                    @enderror
                                </div>
                        
                                <!-- Price -->
                                <div class="col-12">
                                    <label for="price" class="inline-block mb-2 text-base font-medium">Price (₹)
                                        <span class="text-red-500">*</span></label>
                                    <input type="number" id="price" name="price" step="0.01" min="0"
                                        class="form-input @error('price') is-invalid @enderror"
                                        placeholder="Enter Price" value="{{ old('price', $menuItem->price) }}" required>
                                    @error('price')
                                        <span class="text-red-500 text-sm">{{ $message }}</span>
                                    @enderror
                                </div>
                        
                                <!-- Image Upload -->
                                <div class="col-12">
                                    <label for="image" class="inline-block mb-2 text-base font-medium">Item Image</label>
                                    <input type="file" id="image" name="image"
                                        class="form-input">
                                    @error('image')
                                        <span class="text-red-500 text-sm">{{ $message }}</span>
                                    @enderror
                                </div>
                        
                                <!-- Category -->
                                <div class="col-12">
                                    <label for="category_id" class="inline-block mb-2 text-base font-medium">Category
                                        <span class="text-red-500">*</span></label>
                                    <select id="category_id" name="category_id"
                                        class="form-input" required>
                                        <option value="">Select Category</option>
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}"
                                                {{ $menuItem->category_id == $category->id ? 'selected' : '' }}>
                                                {{ $category->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                    @error('category_id')
                                        <span class="text-red-500 text-sm">{{ $message }}</span>
                                    @enderror
                                </div>
                        
                                <!-- Menu Type -->
                                <div class="col-12">
                                    <label for="menu_type_id" class="inline-block mb-2 text-base font-medium">Menu Type
                                        <span class="text-red-500">*</span></label>
                                    <select id="menu_type_id" name="menu_type_id"
                                        class="form-input" required>
                                        <option value="">Select Menu Type</option>
                                        @foreach ($menuTypes as $menuType)
                                            <option value="{{ $menuType->id }}"
                                                {{ $menuItem->menu_type_id == $menuType->id ? 'selected' : '' }}>
                                                {{ $menuType->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                    @error('menu_type_id')
                                        <span class="text-red-500 text-sm">{{ $message }}</span>
                                    @enderror
                                </div>
                        
                                <!-- Availability Status -->
                                <div class="col-12">
                                    <label class="inline-block mb-2 text-base font-medium">Availability</label>
                                    <div class="flex items-center space-x-4">
                                        <label class="flex items-center space-x-2">
                                            <input type="radio" name="availability_status" value="1" {{ $menuItem->availability_status == 1 ? 'checked' : '' }}>
                                            <span>Available</span>
                                        </label>
                                        <label class="flex items-center space-x-2">
                                            <input type="radio" name="availability_status" value="0" {{ $menuItem->availability_status == 0 ? 'checked' : '' }}>
                                            <span>Unavailable</span>
                                        </label>
                                    </div>
                                    @error('availability_status')
                                        <span class="text-red-500 text-sm">{{ $message }}</span>
                                    @enderror
                                </div>
                        
                                <!-- Veg / Non-Veg -->
                                <div class="col-12">
                                    <label class="inline-block mb-2 text-base font-medium">Veg / Non-Veg</label>
                                    <div class="flex items-center space-x-4">
                                        <label class="flex items-center space-x-2">
                                            <input type="radio" name="veg_non_veg" value="veg" {{ $menuItem->veg_non_veg == 'veg' ? 'checked' : '' }}>
                                            <span class="text-green-600 font-bold">Veg</span>
                                        </label>
                                        <label class="flex items-center space-x-2">
                                            <input type="radio" name="veg_non_veg" value="non-veg" {{ $menuItem->veg_non_veg == 'non-veg' ? 'checked' : '' }}>
                                            <span class="text-red-600 font-bold">Non-Veg</span>
                                        </label>
                                    </div>
                                    @error('veg_non_veg')
                                        <span class="text-red-500 text-sm">{{ $message }}</span>
                                    @enderror
                                </div>
                        
                                <!-- Description -->
                                <div class="col-span-2">
                                    <label for="description" class="inline-block mb-2 text-base font-medium">Description</label>
                                    <textarea id="description" name="description"
                                        class="form-input" placeholder="Enter description">{{ old('description', $menuItem->description) }}</textarea>
                                    @error('description')
                                        <span class="text-red-500 text-sm">{{ $message }}</span>
                                    @enderror
                                </div>
                        
                                <!-- Action Buttons -->
                           
                            </div>
                            <div class="flex justify-end gap-2 mt-4">
                                <button type="button" onclick="window.history.back()"
                                    class="text-blue-500 bg-white btn hover:text-blue-500 hover:bg-blue-100">
                                    <i data-lucide="arrow-left" class="inline-block size-4"></i>
                                    <span class="align-middle">Back</span>
                                </button>
                                <button type="submit"
                                    class="text-white btn bg-custom-500 border-custom-500 hover:bg-custom-600">
                                    Submit
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
