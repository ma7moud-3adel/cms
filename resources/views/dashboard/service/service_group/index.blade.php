@extends('dashboard.layout.app')
@section('content')
    <div class="page-body">
        <div class="container-xl">
            @include('dashboard.service.service_nav')
            <div class="row row-deck row-cards">
                <div class="col-12">
                    <div class="card card-md">
                        <div class="card-stamp card-stamp-lg">
                            <div class="card-stamp-icon bg-primary">
                                <!-- Download SVG icon from http://tabler-icons.io/i/ghost -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                    viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path
                                        d="M5 11a7 7 0 0 1 14 0v7a1.78 1.78 0 0 1 -3.1 1.4a1.65 1.65 0 0 0 -2.6 0a1.65 1.65 0 0 1 -2.6 0a1.65 1.65 0 0 0 -2.6 0a1.78 1.78 0 0 1 -3.1 -1.4v-7" />
                                    <path d="M10 10l.01 0" />
                                    <path d="M14 10l.01 0" />
                                    <path d="M10 14a3.5 3.5 0 0 0 4 0" />
                                </svg>
                            </div>
                        </div>
                        <form action="{{ route('service-group.store') }}" method="POST">
                            @csrf
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-10">
                                        <h1 class=" mb-5">
                                            {{ trans('main.add_service_group') }}
                                        </h1>
                                        <div class=" row">
                                            <div class="mb-3 col">
                                                <label for="name_en" class="form-label required">{{ trans('main.name') }}
                                                    ({{ trans('main.en') }}
                                                    )</label>
                                                <input type="text" class="form-control" name="name_en" autocomplete="off"
                                                    value="{{ old('name_en') }}" />
                                            </div>
                                            <div class="mb-3 col">
                                                <label for="name_ar" class="form-label required">{{ trans('main.name') }}
                                                    ({{ trans('main.ar') }}
                                                    ) </label>
                                                <input type="text" class="form-control" name="name_ar" autocomplete="off"
                                                    value="{{ old('name_ar') }}" />
                                            </div>
                                        </div>
                                        <div class=" row">
                                            <div class="mb-5 col-12">
                                                <label for="description_en"
                                                    class="form-label required">{{ trans('main.description') }}
                                                    ({{ trans('main.en') }}) </label>
                                                <textarea id="text_area_1" name="description_en" class="form-control" autocomplete="off">{{ old('description_en') }}</textarea>
                                            </div>
                                            <div class="mb-5 col-12">
                                                <label for="description_ar"
                                                    class="form-label required">{{ trans('main.description') }}
                                                    ({{ trans('main.ar') }}) </label>
                                                <textarea id="text_area_2" name="description_ar" class="form-control" autocomplete="off">{{ old('description_ar') }}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer text-end">
                                <button class="btn btn-primary col-2" type="submit">
                                    {{ trans('main.save') }}
                                </button>
                                <a href="" class="btn btn-secondary" role="button"
                                    aria-disabled="true">{{ trans('main.Canel') }}</a>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-12">
                    <div class="card card-md  mt-2">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">{{ trans('main.all_service_groups') }}</h3>
                            </div>
                            <div class="table-responsive">
                                <table id="service-group-table"
                                    class="table card-table table-vcenter text-nowrap datatable text-center">
                                    <thead>
                                        <tr>
                                            <th>{{ __('main.id') }} </th>
                                            <th>{{ __('main.name_en') }} ({{ __('main.en') }})</th>
                                            <th>{{ __('main.name_ar') }} ({{ __('main.ar') }})</th>
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

@section('js')
    <script>
        $(document).ready(function() {
            $('#service-group-table').DataTable({
                "lengthMenu": [
                    [10, 25, 50, -1],
                    [10, 25, 50, "All"]
                ],
                "processing": true,
                "serverSide": true,
                "ajax": {
                    "url": "{{ route('service-group.index-datatable') }}",
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
                        data: 'actions',
                        name: 'actions',
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
