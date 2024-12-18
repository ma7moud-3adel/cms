@extends('dashboard.layout.app')
@section('content')
    <div class="page-body">
        <div class="container-xl">
            @include('dashboard.shared.client.client_nav')
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
                        <form method="POST" action="{{ route('client.store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-10">
                                        <h3 class="h1">{{ trans('main.add_client') }}</h3>
                                        <div class="row">
                                            <div class="markdown text-secondary col">
                                                <label class="form-label">{{ trans('main.client_title_en') }}</label>
                                                <input type="text" name="title_en" class="form-control"
                                                    placeholder="Enter client Title" autocomplete="off"
                                                    value="{{ old('title_en') }}">
                                            </div>
                                            <div class="markdown text-secondary col">
                                                <label class="form-label">{{ trans('main.client_title_ar') }}</label>
                                                <input type="text" name="title_ar" class="form-control"
                                                    placeholder="ادخل اسم العميل" autocomplete="off"
                                                    value="{{ old('title_ar') }}">
                                            </div>
                                            <div class="markdown text-secondary col">
                                                <label class="form-label">{{ trans('main.client_cat_id') }}</label>
                                                <select class="form-control" id="selectGovernment" name="clientCategory_id">
                                                    <option aria-placeholder="-- select category --" disabled>
                                                        -- {{ trans('main.select_cat') }} --
                                                    </option>
                                                    @if (isset($categories) && $categories->isNotEmpty())
                                                        @foreach ($categories as $cat)
                                                            <option value="{{ $cat->id }}">
                                                                {{ $cat->title_en }}-{{ $cat->title_ar }}
                                                            </option>
                                                        @endforeach
                                                    @else
                                                        <option>لا توجد فئات حالياً</option>
                                                    @endif
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="markdown text-secondary col">
                                                <label class="form-label">{{ trans('main.client_img') }}</label>
                                                <input type="file" name="image" class="form-control" autocomplete="off"
                                                    required>
                                            </div>
                                            <div class="markdown text-secondary col">
                                                <label class="form-label">{{ trans('main.client_link') }}</label>
                                                <input type="text" name="link" class="form-control"
                                                    placeholder="Enter Link .." autocomplete="off"
                                                    value="{{ old('link') }}">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer text-end mt-3">
                                <button class="btn btn-primary btn-xl text-uppercase col-2"
                                    type="submit">{{ trans('main.Save') }}</button>
                                <a href="" class="btn btn-secondary" role="button"
                                    aria-disabled="true">{{ trans('main.Canel') }}</a>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">{{ trans('main.client_table') }}</h3>
                        </div>
                        <div class="table-responsive">
                            <table class="table card-table table-vcenter text-nowrap datatable text-center"
                                id="client-table">
                                <thead>
                                    <tr>
                                        {{-- <th class="w-1">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="bi bi-slack" viewBox="0 0 16 16">
                                                <path
                                                    d="M3.362 10.11c0 .926-.756 1.681-1.681 1.681S0 11.036 0 10.111.756 8.43 1.68 8.43h1.682zm.846 0c0-.924.756-1.68 1.681-1.68s1.681.756 1.681 1.68v4.21c0 .924-.756 1.68-1.68 1.68a1.685 1.685 0 0 1-1.682-1.68zM5.89 3.362c-.926 0-1.682-.756-1.682-1.681S4.964 0 5.89 0s1.68.756 1.68 1.68v1.682zm0 .846c.924 0 1.68.756 1.68 1.681S6.814 7.57 5.89 7.57H1.68C.757 7.57 0 6.814 0 5.89c0-.926.756-1.682 1.68-1.682zm6.749 1.682c0-.926.755-1.682 1.68-1.682S16 4.964 16 5.889s-.756 1.681-1.68 1.681h-1.681zm-.848 0c0 .924-.755 1.68-1.68 1.68A1.685 1.685 0 0 1 8.43 5.89V1.68C8.43.757 9.186 0 10.11 0c.926 0 1.681.756 1.681 1.68zm-1.681 6.748c.926 0 1.682.756 1.682 1.681S11.036 16 10.11 16s-1.681-.756-1.681-1.68v-1.682h1.68zm0-.847c-.924 0-1.68-.755-1.68-1.68s.756-1.681 1.68-1.681h4.21c.924 0 1.68.756 1.68 1.68 0 .926-.756 1.681-1.68 1.681z" />
                                            </svg>
                                        </th> --}}
                                        <th class="w-1">{{ trans('main.No') }}</th>
                                        <th>{{ trans('main.client_title_en') }}</th>
                                        <th>{{ trans('main.client_title_ar') }}</th>
                                        <th>{{ trans('main.client_link') }}</th>
                                        <th>{{ trans('main.client_img') }}</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {{-- @foreach ($data as $item)
                                        <tr>
                                            <td>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-slack" viewBox="0 0 16 16">
                                                    <path
                                                        d="M3.362 10.11c0 .926-.756 1.681-1.681 1.681S0 11.036 0 10.111.756 8.43 1.68 8.43h1.682zm.846 0c0-.924.756-1.68 1.681-1.68s1.681.756 1.681 1.68v4.21c0 .924-.756 1.68-1.68 1.68a1.685 1.685 0 0 1-1.682-1.68zM5.89 3.362c-.926 0-1.682-.756-1.682-1.681S4.964 0 5.89 0s1.68.756 1.68 1.68v1.682zm0 .846c.924 0 1.68.756 1.68 1.681S6.814 7.57 5.89 7.57H1.68C.757 7.57 0 6.814 0 5.89c0-.926.756-1.682 1.68-1.682zm6.749 1.682c0-.926.755-1.682 1.68-1.682S16 4.964 16 5.889s-.756 1.681-1.68 1.681h-1.681zm-.848 0c0 .924-.755 1.68-1.68 1.68A1.685 1.685 0 0 1 8.43 5.89V1.68C8.43.757 9.186 0 10.11 0c.926 0 1.681.756 1.681 1.68zm-1.681 6.748c.926 0 1.682.756 1.682 1.681S11.036 16 10.11 16s-1.681-.756-1.681-1.68v-1.682h1.68zm0-.847c-.924 0-1.68-.755-1.68-1.68s.756-1.681 1.68-1.681h4.21c.924 0 1.68.756 1.68 1.68 0 .926-.756 1.681-1.68 1.681z" />
                                                </svg>
                                            </td>
                                            <td><span class="text-secondary">{{ $item->id }}</span></td>
                                            <td>{{ $item->title_en }}</td>
                                            <td>{{ $item->title_ar }}</td>
                                            <td>{{ $item->link }}</td>
                                            <td><img width="40" src="{{ asset('storage/' . $item->image) }}"></td>
                                            <td class="text-end">
                                                <a class="btn btn-outline-primary"
                                                    href="{{ route('client.edit', $item->id) }}"
                                                    role="button">{{ trans('main.Edit') }}</a>

                                                <form action="{{ route('client.destroy', $item->id) }}" method="POST"
                                                    style="display: inline;">
                                                    @csrf()
                                                    @method('DELETE')
                                                    <button class="btn btn-outline-danger" type="submit"
                                                        onclick="if (confirm('Delete selected item?')){return true;}else{event.stopPropagation(); event.preventDefault();};">{{ trans('main.Delete') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach --}}
                                </tbody>
                            </table>
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
            $('#client-table').DataTable({
                "lengthMenu": [
                    [10, 25, 50, -1],
                    [10, 25, 50, "All"]
                ],
                "processing": true,
                "serverSide": true,
                "ajax": {
                    "url": "{{ route('client.datatable') }}",
                    "type": "GET"
                },
                "columns": [{
                        data: 'id',
                        name: 'id'
                    },
                    {
                        data: 'title_en',
                        name: 'title_en'
                    },
                    {
                        data: 'title_ar',
                        name: 'title_ar'
                    },
                    {
                        data: 'link',
                        name: 'link'
                    },
                    {
                        data: 'image',
                        name: 'image',
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
