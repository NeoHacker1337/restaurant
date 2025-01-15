@extends('layouts.master')

@section('content')
    <div
        class="group-data-[sidebar-size=lg]:ltr:md:ml-vertical-menu group-data-[sidebar-size=lg]:rtl:md:mr-vertical-menu group-data-[sidebar-size=md]:ltr:ml-vertical-menu-md group-data-[sidebar-size=md]:rtl:mr-vertical-menu-md group-data-[sidebar-size=sm]:ltr:ml-vertical-menu-sm group-data-[sidebar-size=sm]:rtl:mr-vertical-menu-sm pt-[calc(theme('spacing.header')_*_1)] pb-[calc(theme('spacing.header')_*_0.8)] px-4 group-data-[navbar=bordered]:pt-[calc(theme('spacing.header')_*_1.3)] group-data-[navbar=hidden]:pt-0 group-data-[layout=horizontal]:mx-auto group-data-[layout=horizontal]:max-w-screen-2xl group-data-[layout=horizontal]:px-0 group-data-[layout=horizontal]:group-data-[sidebar-size=lg]:ltr:md:ml-auto group-data-[layout=horizontal]:group-data-[sidebar-size=lg]:rtl:md:mr-auto group-data-[layout=horizontal]:md:pt-[calc(theme('spacing.header')_*_1.6)] group-data-[layout=horizontal]:px-3 group-data-[layout=horizontal]:group-data-[navbar=hidden]:pt-[calc(theme('spacing.header')_*_0.9)]">
        <div class="container-fluid group-data-[content=boxed]:max-w-boxed mx-auto">

            <div class="flex flex-col gap-2 py-4 md:flex-row md:items-center print:hidden">
                <div class="grow">
                    <h5 class="text-16">Cuisine</h5>
                </div>
                <ul class="flex items-center gap-2 text-sm font-normal shrink-0">
                    <li
                        class="relative before:content-['\ea54'] before:font-remix ltr:before:-right-1 rtl:before:-left-1  before:absolute before:text-[18px] before:-top-[3px] ltr:pr-4 rtl:pl-4 before:text-slate-400 dark:text-zink-200">
                        <a href="#!" class="text-slate-400 dark:text-zink-200">Home</a>
                    </li>
                    <li class="text-slate-700 dark:text-zink-100">
                        Table View
                    </li>
                </ul>
            </div>
            <h1><a href="{{ route('cuisines.create') }}">Add New Cuisine</a></h1>





            <div class="card">
                <div class="card-body">
                    <h6 class="mb-4 text-15">Basic</h6>
                    <table id="users-table" class="display stripe group" style="width:100%">
                        <thead class="bg-slate-200 dark:bg-slate-800">
                            <tr>
                                <th style="padding: 8px;">Cuisine Name</th>
                                <th style="padding: 8px;">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($cuisines as $cuisine)
                                <tr style="border: 1px solid black;">
                                    <td style="padding: 8px;">{{ $cuisine->cuisines_name }}</td>
                                    <td style="padding: 8px;">
                                        <!-- Edit Button with Larger Icon -->
                                        <a href="{{ route('cuisines.edit', $cuisine) }}" title="Edit">
                                            <i class="fas fa-edit fa-2x"></i>
                                            <!-- Font Awesome Edit Icon with larger size -->
                                        </a>

                                        <!-- Delete Button with Larger Icon -->
                                        <form action="{{ route('cuisines.destroy', $cuisine) }}" method="POST"
                                            style="display:inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" style="background: none; border: none; color: red;"
                                                title="Delete">
                                                <i class="fas fa-trash fa-2x"></i>
                                                <!-- Font Awesome Trash Icon with larger size -->
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>

                    </table>
                </div>
            </div><!--end card-->

        </div>
        <!-- container-fluid -->
    </div>
    <!-- End Page-content -->
@endsection


@section('extra_css')
    <style>
        table,
        th,
        td {
            border: 1px solid black;
        }
    </style>
@endsection

@section('extra_js')
    <script src="{{ asset('public/assets/js/datatables/data-tables.min.js') }}"></script>

    <script src="{{ asset('public/assets/js/datatables/datatables.init.js') }}"></script>
@endsection
