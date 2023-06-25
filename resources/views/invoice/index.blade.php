@extends('dashboard.layouts.master')
@section('title') Invoice @stop
@section('css')

@stop
@section('content')
   <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body">


            <!-- users list start -->
            <section class="app-user-list">
                <!-- users filter start -->
                <!-- users filter end -->
                <div class="dt-buttons btn-group flex-wrap">
                    <a href="{{ route('invoices.create') }}"
                        class="btn add-new btn-primary mt-50 mb-2">Add New Invoice</a>
                </div>
                <!-- list section start -->
                <div class="card">

                    <div class="container">

                        <div class="card-datatable table-responsive p-2">
                            <table class="user-list-table table">
                                <thead class="thead-light">
                                    <tr>

                                        <th></th>
                                        <th>date of invoce</th>
                                        <th>user name</th>
                                        <th>action</th>

                                    </tr>
                                </thead>
                            </table>
                        </div>
                    </div>

                </div>
                <!-- list section end -->
            </section>
            <!-- users list ends -->

        </div>
    </div>
@endsection
    @section('js')
        {{-- <script
            src="{{ asset('app-assets/vendors/js/vendors.min.js') }}">
        </script> --}}
        <!-- BEGIN Vendor JS-->

        <!-- BEGIN: Page Vendor JS-->
        <script
            src="{{ asset('app-assets/vendors/js/tables/datatable/jquery.dataTables.min.js') }}">
        </script>
        <script
            src="{{ asset('app-assets/vendors/js/tables/datatable/datatables.bootstrap4.min.js') }}">
        </script>
        <script
            src="{{ asset('app-assets/vendors/js/tables/datatable/dataTables.responsive.min.js') }}">
        </script>
        <script
            src="{{ asset('app-assets/vendors/js/tables/datatable/responsive.bootstrap4.js') }}">
        </script>
        <script
            src="{{ asset('app-assets/vendors/js/tables/datatable/datatables.buttons.min.js') }}">
        </script>
        <script
            src="{{ asset('app-assets/vendors/js/tables/datatable/buttons.bootstrap4.min.js') }}">
        </script>
        <script
            src="{{ asset('app-assets/vendors/js/forms/validation/jquery.validate.min.js') }}">
        </script>
                  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script type="text/javascript">
            $(function () {
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                // ################## Index #################################

                var table = $('.user-list-table').DataTable({
                    processing: true,
                    serverSide: true,
                    ajax: "{{ route('invoices.index') }}",
                    /* "language": {
                        "url": "{{ asset('datatableLang/'.app()->getLocale() . '.json') }}"
                    }, */
                    columns: [{
                            data: 'DT_RowIndex',
                            name: 'DT_RowIndex'
                        },
                        /* {data: 'id', name: 'id'}, */
                        {
                            data: 'date_of_invoce',
                            name: 'date_of_invoce'
                        },

                        {
                            data: 'user_name',
                            name: 'user_name',
                            orderable: true,
                            searchable: true
                        },

                        // {data: 'status', name: 'status'},
                        // {data: 'phone', name: 'phone'},
                        {
                            data: 'action',
                            name: 'action',
                            orderable: false,
                            searchable: false
                        },
                    ],

                    responsive: {
                        details: {
                            display: $.fn.dataTable.Responsive.display.modal({
                                header: function (row) {
                                    var data = row.data();
                                    return 'Details of ' + data['id'];
                                }
                            }),
                            type: 'column',
                            renderer: $.fn.dataTable.Responsive.renderer.tableAll({
                                tableClass: 'table',
                                columnDefs: [{
                                        targets: 2,
                                        visible: false
                                    },
                                    {
                                        targets: 3,
                                        visible: false
                                    }
                                ]
                            })
                        }
                    },

                });

                // ################## Delete ####################################

                $('body').on('click', '.deleteTender', function () {

                    var tender_id = $(this).data("id");
                    Swal.fire({
                        title: '{{ __('messages.are you sure?') }}',
                        text: "{{ __('messages.you will not be able to revert this!') }}",
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: '{{ __('messages.yes, delete it!') }}'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            $.ajax({
                                type: "DELETE",
                                url: "{{ route('invoices.store') }}" +
                                    '/' + tender_id,
                                success: function (data) {
                                    table.draw();
                                },
                                error: function (data) {
                                    console.log('Error:', data);
                                }
                            });
                            Swal.fire(
                                '{{ __('messages.deleted!') }}',
                                '{{ __('messages.deleted successfully') }}',
                                '{{ __('messages.success') }}'
                            )
                        }
                    });
                });


            });

        </script>

        <script>
            $(window).on('load', function () {
                if (feather) {
                    feather.replace({
                        width: 14,
                        height: 14
                    });
                }
            })

        </script>
    @endsection
@section('js')
    <script src="{{asset('app-assets/vendors/js/vendors.min.js')}}"></script>
@endsection
