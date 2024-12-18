@extends('dashboard.layout.app')
@section('content')
    <!-- Page header -->
    <div class="page-body">
        <div class="container-xl">
            @include('dashboard.product.product_nav')
            <div class="row row-deck row-cards">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">{{ trans('main.all_products') }}</h3>
                            <div class="card-actions">
                                <a href="{{ route('product.create') }}" class="btn btn-primary">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                        viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M12 5l0 14" />
                                        <path d="M5 12l14 0" />
                                    </svg>
                                    {{ trans('main.add_new') }}
                                </a>
                            </div>
                        </div>

                        <!-- card body -->
                        <div class="card-body">

                            <div class="table-responsive">
                                <table id='product-table' class="table table-striped text-center">
                                    <thead>
                                        <tr>
                                            <th>{{ __('main.id') }}</th>
                                            <th>{{ __('main.name_en') }} ({{ __('main.en') }})</th>
                                            <th>{{ __('main.name_ar') }} ({{ __('main.ar') }})</th>
                                            <th>{{ __('main.price') }}</th>
                                            <th>{{ __('main.product_category') }}</th>
                                            <th>{{ __('main.photo') }}</th>
                                            <th>{{ __('main.actions') }}</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('libs-js')
@endsection

@section('js')
    <script>
        $(document).ready(function() {
            $('#product-table').DataTable({
                "lengthMenu": [
                    [10, 25, 50, -1],
                    [10, 25, 50, "All"]
                ],
                "processing": true,
                "serverSide": true,
                "ajax": {
                    "url": "{{ route('product.index-datatable') }}",
                    "type": "GET"
                },
                "columns": [{
                        data: 'id',
                        name: 'id'
                    },
                    {
                        data: 'name_en',
                        name: 'name_en'
                    },
                    {
                        data: 'name_ar',
                        name: 'name_ar'
                    },
                    {
                        data: 'price',
                        name: 'price'
                    },
                    {
                        data: 'product_category',
                        name: 'product_category'
                    },
                    {
                        data: 'photo',
                        name: 'photo',
                        orderable: false,
                        searchable: false
                    },
                    {
                        data: 'action',
                        name: 'action',
                        orderable: false,
                        searchable: false
                    }
                ],
                "error": function(xhr, error, thrown) {
                    console.log('DataTables Ajax error:', xhr, error, thrown);
                },
                'language': {!! yajra_lang() !!}
            });
        });
    </script>
@endsection
