@extends('dashboard.layout.app')
@section('content')
    <div class="page-body">
        <div class="container-xl">
            @include('dashboard.course.course_nav')
            <div class="row row-deck row-cards">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">{{ trans('main.all_courses') }}</h3>
                            <div class="card-actions">
                                <a href="{{ route('course.create') }}" class="btn btn-primary">
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


                        <div class="table-responsive">
                            <table id="course-table" class="table card-table table-vcenter text-nowrap datatable text-center">
                                <thead>
                                    <tr>
                                        <th>{{ __('main.id') }}</th>
                                        <th>{{ trans('main.name') }} ({{ trans('main.en') }})</th>
                                        <th>{{ trans('main.name') }} ({{ trans('main.ar') }})</th>
                                        <th>{{ trans('main.price') }}</th>
                                        <th>{{ trans('main.course_category') }}</th>
                                        <th>{{ trans('main.photo') }}</th>
                                        <th>{{ trans('main.actions') }}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {{-- @foreach ($courses as $course)
                                        <tr>
                                            <td>{{ $course->id }}</td>
                                            <td>{{ $course->name_en }}</td>
                                            <td>{{ $course->name_ar }}</td>
                                            <td>{{ $course->price }}</td>
                                            <td>
                                                <img src="{{ asset('storage/' . $course->photo) }}" height="130"
                                                    width="200px" alt="{{ $course->photo }}">
                                            </td>
                                            <td>{{ $course->courseCategory->name_en }}</td>
                                            <td>

                                                <div class="row">
                                                    <a href="{{ route('course.edit', $course->id) }}"
                                                        class="btn btn-outline-primary col">
                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                            class="icon icon-tabler icon-tabler-user-edit" width="24"
                                                            height="24" viewBox="0 0 24 24" stroke-width="2"
                                                            stroke="currentColor" fill="none" stroke-linecap="round"
                                                            stroke-linejoin="round">
                                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                            <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0"></path>
                                                            <path d="M6 21v-2a4 4 0 0 1 4 -4h3.5"></path>
                                                            <path
                                                                d="M18.42 15.61a2.1 2.1 0 0 1 2.97 2.97l-3.39 3.42h-3v-3l3.42 -3.39z">
                                                            </path>
                                                        </svg>
                                                        {{ trans('main.edit') }}
                                                    </a>
                                                    <form action="{{ route('course.destroy', $course->id) }}"
                                                        method="post" class="col">
                                                        @csrf
                                                        @method('delete')
                                                        <button type="submit"
                                                            href="{{ route('course.destroy', $course->id) }}"
                                                            data-bs-toggle="modal" class="btn btn-outline-danger">
                                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon"
                                                                width="16" height="16" viewBox="0 0 24 24"
                                                                stroke-width="2" stroke="currentColor" fill="none"
                                                                stroke-linecap="round" stroke-linejoin="round">
                                                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                                <line x1="4" y1="7" x2="20"
                                                                    y2="7" />
                                                                <line x1="10" y1="11" x2="10"
                                                                    y2="17" />
                                                                <line x1="14" y1="11" x2="14"
                                                                    y2="17" />
                                                                <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" />
                                                                <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" />
                                                            </svg>
                                                            {{ trans('main.delete') }}
                                                        </button>
                                                    </form>
                                                </div>
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
@section('js')
    <script>
        $(document).ready(function() {
            $('#course-table').DataTable({
                "lengthMenu": [
                    [10, 25, 50, -1],
                    [10, 25, 50, "All"]
                ],
                "processing": true,
                "serverSide": true,
                "ajax": {
                    "url": "{{ route('course.index-datatable') }}",
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
                        data: 'course_category_id',
                        name: 'course_category_id'
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


