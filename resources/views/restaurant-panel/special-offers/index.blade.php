 @extends('layouts.master')

 @section('content')
     <div
         class="group-data-[sidebar-size=lg]:ltr:md:ml-vertical-menu group-data-[sidebar-size=lg]:rtl:md:mr-vertical-menu group-data-[sidebar-size=md]:ltr:ml-vertical-menu-md group-data-[sidebar-size=md]:rtl:mr-vertical-menu-md group-data-[sidebar-size=sm]:ltr:ml-vertical-menu-sm group-data-[sidebar-size=sm]:rtl:mr-vertical-menu-sm pt-[calc(theme('spacing.header')_*_1)] pb-[calc(theme('spacing.header')_*_0.8)] px-4 group-data-[navbar=bordered]:pt-[calc(theme('spacing.header')_*_1.3)] group-data-[navbar=hidden]:pt-0 group-data-[layout=horizontal]:mx-auto group-data-[layout=horizontal]:max-w-screen-2xl group-data-[layout=horizontal]:px-0 group-data-[layout=horizontal]:group-data-[sidebar-size=lg]:ltr:md:ml-auto group-data-[layout=horizontal]:group-data-[sidebar-size=lg]:rtl:md:mr-auto group-data-[layout=horizontal]:md:pt-[calc(theme('spacing.header')_*_1.6)] group-data-[layout=horizontal]:px-3 group-data-[layout=horizontal]:group-data-[navbar=hidden]:pt-[calc(theme('spacing.header')_*_0.9)]">
         <div class="container-fluid group-data-[content=boxed]:max-w-boxed mx-auto">

             <div class="flex flex-col gap-2 py-4 md:flex-row md:items-center print:hidden">
                 <div class="grow">
                     <h5 class="text-16">Special Offers</h5>
                 </div>
                 <ul class="flex items-center gap-2 text-sm font-normal shrink-0">
                     <li
                         class="relative before:content-['\ea54'] before:font-remix ltr:before:-right-1 rtl:before:-left-1  before:absolute before:text-[18px] before:-top-[3px] ltr:pr-4 rtl:pl-4 before:text-slate-400 dark:text-zink-200">
                         <a href="{{ route('home') }}" class="text-slate-400 dark:text-zink-200">Dashboard</a>
                     </li>
                     <li class="text-slate-700 dark:text-zink-100">
                         Special Offers View
                     </li>
                 </ul>
             </div>



             @if (session('success'))
                 <div class="alert alert-success">{{ session('success') }}</div>
             @endif

             <div class="card">
                 <div class="card-body">
                     <h6 class="mb-4 text-15">Basic</h6>
                     <table id="special-offers-table" class="display stripe group" style="width:100%">
                         <thead class="bg-slate-200 dark:bg-slate-800">
                             <tr>
                                 <th class="px-4 py-2 border border-slate-300 dark:border-slate-700">ID</th>
                                 <th class="px-4 py-2 border border-slate-300 dark:border-slate-700">Menu Item Name</th>
                                 <th class="px-4 py-2 border border-slate-300 dark:border-slate-700">Offer Name</th>
                                 <th class="px-4 py-2 border border-slate-300 dark:border-slate-700">Coupon Code</th>
                                 <th class="px-4 py-2 border border-slate-300 dark:border-slate-700">Offer Type</th>
                                 <th class="px-4 py-2 border border-slate-300 dark:border-slate-700">Discount Percentage
                                 </th>

                                 <th class="px-4 py-2 border border-slate-300 dark:border-slate-700">Offer Start</th>
                                 <th class="px-4 py-2 border border-slate-300 dark:border-slate-700">Offer Expired</th>
                                 <th class="px-4 py-2 border border-slate-300 dark:border-slate-700">UsedLimit</th>
                                 <th class="px-4 py-2 border border-slate-300 dark:border-slate-700">Actions</th>
                             </tr>
                         </thead>
                         <tbody>

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
     <!-- Add these in your layout -->
     <link rel="stylesheet" href="https://cdn.datatables.net/1.13.5/css/jquery.dataTables.min.css">
 @endsection

 @section('extra_js')
     <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
     <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
     <script src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js"></script>
     <script>
         $(document).ready(function() {
             $('#special-offers-table').DataTable({
                 processing: true,
                 serverSide: true,
                 ajax: '{{ route('special-offers.index') }}',
                 columns: [{
                         data: 'DT_RowIndex',
                         name: 'DT_RowIndex',
                         orderable: false,
                         searchable: false
                     },
                     {
                         data: 'menu_item_name',
                         name: 'menu_item_name'
                     },
                     {
                         data: 'offer_name',
                         name: 'offer_name'
                     },
                     {
                         data: 'coupon_code',
                         name: 'coupon_code'
                     },
                     {
                         data: 'price_in_type',
                         name: 'price_in_type'
                     },
                     {
                         data: 'discount_percentage',
                         name: 'discount_percentage'
                     },

                     {
                         data: 'valid_from',
                         name: 'valid_from',

                     },
                     {
                         data: 'valid_to',
                         name: 'valid_to',

                     },
                     {
                         data: 'limit',
                         name: 'limit'
                     },

                     {
                         data: 'actions',
                         name: 'actions',
                         orderable: false,
                         searchable: false
                     }
                 ]
             });


             // Event delegation for delete confirmation
             $(document).on('submit', '.delete-form', function(e) {
                 e.preventDefault();
                 const form = this;

                 Swal.fire({
                     title: 'Are you sure?',
                     text: "You won't be able to revert this!",
                     icon: 'warning',
                     showCancelButton: true,
                     confirmButtonColor: '#3085d6',
                     cancelButtonColor: '#d33',
                     confirmButtonText: 'Yes, delete it!'
                 }).then((result) => {
                     if (result.isConfirmed) {
                         form.submit();
                     }
                 });
             });


         });
     </script>
 @endsection
