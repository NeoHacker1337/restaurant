@extends('layouts.master')

@section('content')
    <div
        class="group-data-[sidebar-size=lg]:ltr:md:ml-vertical-menu group-data-[sidebar-size=lg]:rtl:md:mr-vertical-menu group-data-[sidebar-size=md]:ltr:ml-vertical-menu-md group-data-[sidebar-size=md]:rtl:mr-vertical-menu-md group-data-[sidebar-size=sm]:ltr:ml-vertical-menu-sm group-data-[sidebar-size=sm]:rtl:mr-vertical-menu-sm pt-[calc(theme('spacing.header')_*_1)] pb-[calc(theme('spacing.header')_*_0.8)] px-4 group-data-[navbar=bordered]:pt-[calc(theme('spacing.header')_*_1.3)] group-data-[navbar=hidden]:pt-0 group-data-[layout=horizontal]:mx-auto group-data-[layout=horizontal]:max-w-screen-2xl group-data-[layout=horizontal]:px-0 group-data-[layout=horizontal]:group-data-[sidebar-size=lg]:ltr:md:ml-auto group-data-[layout=horizontal]:group-data-[sidebar-size=lg]:rtl:md:mr-auto group-data-[layout=horizontal]:md:pt-[calc(theme('spacing.header')_*_1.6)] group-data-[layout=horizontal]:px-3 group-data-[layout=horizontal]:group-data-[navbar=hidden]:pt-[calc(theme('spacing.header')_*_0.9)]">
        <div class="container-fluid group-data-[content=boxed]:max-w-boxed mx-auto">

            <div class="flex flex-col gap-2 py-4 md:flex-row md:items-center print:hidden">
                <div class="grow">
                    <h5 class="text-16">Delivery Management</h5>
                </div>
                <ul class="flex items-center gap-2 text-sm font-normal shrink-0">
                    <li
                        class="relative before:content-['\ea54'] before:font-remix ltr:before:-right-1 rtl:before:-left-1  before:absolute before:text-[18px] before:-top-[3px] ltr:pr-4 rtl:pl-4 before:text-slate-400 dark:text-zink-200">
                        <a href="{{ route('home')}}" class="text-slate-400 dark:text-zink-200">Dashboard</a>
                    </li>
                    <li class="text-slate-700 dark:text-zink-100">
                        Delivery View
                    </li>
                </ul>
            </div>



            <div class="card">
                <div class="card-body">
                    <h6 class="mb-4 text-15">Basic</h6>
                    <table id="users-table" class="display stripe group" style="width:100%">
                        <thead class="bg-slate-200 dark:bg-slate-800">
                            <tr>
                                <th class="px-4 py-2 border border-slate-300 dark:border-slate-700">ID</th>
                                <th class="px-4 py-2 border border-slate-300 dark:border-slate-700">Name</th>
                                <th class="px-4 py-2 border border-slate-300 dark:border-slate-700">Email</th>
                                <th class="px-4 py-2 border border-slate-300 dark:border-slate-700">Created At</th>
                                <th class="px-4 py-2 border border-slate-300 dark:border-slate-700">Actions</th>
                            </tr>
                        </thead>
                        <tbody>

                        </tbody>

                    </table>
                </div>
            </div><!--end card-->


            {{-- <div class="grid grid-cols-1 gap-x-5 md:grid-cols-2 xl:grid-cols-4">
                <div class="col-span-1 md:col-span-2 xl:col-span-4">
                    <table id="" class="table-auto w-full text-left border border-slate-300 dark:border-slate-700">
                       
                        <tbody>
                            <!-- DataTable will populate this -->
                        </tbody>
                    </table>
                </div>
            </div> --}}


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
        $(document).ready(function() {
            $('#users-table').DataTable({
                processing: true,
                serverSide: true,
                ajax: '{{ route('delivery-management.index') }}',
                columns: [{
                        data: null,
                        render: function(data, type, row, meta) {
                            // Calculate the row number based on page and rows per page
                            return meta.settings._iDisplayStart + meta.row + 1;
                        },
                        name: 'id',
                        orderable: false
                    },
                    {
                        data: 'name',
                        name: 'name'
                    },
                    {
                        data: 'email',
                        name: 'email'
                    },
                    {
                        data: 'created_at',
                        name: 'created_at'
                    },
                    {
                        data: 'actions',
                        name: 'actions',
                        orderable: false,
                        searchable: false
                    },
                ],
            });
        });
    </script>
    <script>
        function confirmDelete(event, id) {
            // Prevent form submission
            event.preventDefault();

            // Display the confirmation dialog
            if (confirm('Are you sure you want to delete this user?')) {
                // If confirmed, submit the form
                document.getElementById('delete-form-' + id).submit();
            }
        }
    </script>
@endsection
