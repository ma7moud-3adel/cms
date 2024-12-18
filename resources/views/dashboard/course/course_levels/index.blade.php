@extends('dashboard.layout.app')
@section('content')
    <div class="page-body">
        <div class="container-xl">
            @include('dashboard.course.course_nav')
            <div class="row row-deck row-cards">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">{{ trans('main.add_level') }}</h3>
                        </div>
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
                        <form action="{{ route('course-level.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-10">
                                        <h1 class=" mb-5">
                                            {{ trans('main.add_course_level') }}
                                        </h1>
                                        <div class=" row">
                                            <div class="mb-3 col">
                                                <label for="name_en" class="form-label required">{{ trans('main.name') }}
                                                    ({{ trans('main.en') }}
                                                    )</label>
                                                <input type="text" class="form-control" name="name_en"
                                                    autocomplete="off" />
                                            </div>
                                            <div class="mb-3 col">
                                                <label for="name_ar" class="form-label required">{{ trans('main.name') }}
                                                    ({{ trans('main.ar') }}
                                                    ) </label>
                                                <input type="text" class="form-control" name="name_ar"
                                                    autocomplete="off" />
                                            </div>
                                        </div>
                                        <div class="mb-2 row">
                                            <label for="course_id"
                                                class="form-label required">{{ trans('main.course') }}</label>
                                            <select name="course_id" class="form-control">
                                                @foreach ($courses as $course)
                                                    <option value="{{ $course->id }}">{{ $course->name_en }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="card-footer text-end">
                                <button class="btn btn-primary col-2" type="submit">{{ trans('main.submit') }}</button>
                                <a href="" class="btn btn-secondary" role="button"
                                    aria-disabled="true">{{ trans('main.Canel') }}</a>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="card m-4 mt-3">
        {{--                            <div class="d-flex align-items-center"> --}}

        <div class="card">
            <div class="card-header">
                <h3 class="card-title">{{ trans('main.all_levels') }}</h3>
                <div class="card-actions">
                    {{--                                <a href="{{ route('course.create') }}" class="btn btn-primary"> --}}
                    {{--                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" --}}
                    {{--                                         height="24" viewBox="0 0 24 24" stroke-width="2" --}}
                    {{--                                         stroke="currentColor" fill="none" stroke-linecap="round" --}}
                    {{--                                         stroke-linejoin="round"> --}}
                    {{--                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" /> --}}
                    {{--                                        <path d="M12 5l0 14" /> --}}
                    {{--                                        <path d="M5 12l14 0" /> --}}
                    {{--                                    </svg> --}}
                    {{--                                    {{ trans('main.add_new') }} --}}
                    {{--                                </a> --}}
                </div>
            </div>


            <div class="table-responsive">
                <table class="table card-table table-vcenter text-nowrap datatable">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>{{ trans('main.name') }} ({{ trans('main.en') }})</th>
                            <th>{{ trans('main.name') }} ({{ trans('main.ar') }})</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($courseLevels as $courseLevel)
                            <tr>
                                <td>{{ $courseLevel->id }}</td>
                                <td>{{ $courseLevel->name_en }}</td>
                                <td>{{ $courseLevel->name_ar }}</td>


                                {{--                                    <td>{{$course->courseCategory->name_en}}</td> --}}
                                {{--                                        <td> --}}
                                {{--                                            <a href="{{route('course.edit',$course->id)}}" class="btn btn-outline-primary"> --}}
                                {{--                                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user-edit" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"> --}}
                                {{--                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path> --}}
                                {{--                                                    <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0"></path> --}}
                                {{--                                                    <path d="M6 21v-2a4 4 0 0 1 4 -4h3.5"></path> --}}
                                {{--                                                    <path d="M18.42 15.61a2.1 2.1 0 0 1 2.97 2.97l-3.39 3.42h-3v-3l3.42 -3.39z"></path> --}}
                                {{--                                                </svg> --}}
                                {{--                                                {{trans("main.edit")}} --}}
                                {{--                                            </a> --}}
                                {{--                                            <a href="{{route('course.edit',$course->id)}}" class="btn btn-outline-primary"> --}}
                                {{--                                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user-edit" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"> --}}
                                {{--                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path> --}}
                                {{--                                                    <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0"></path> --}}
                                {{--                                                    <path d="M6 21v-2a4 4 0 0 1 4 -4h3.5"></path> --}}
                                {{--                                                    <path d="M18.42 15.61a2.1 2.1 0 0 1 2.97 2.97l-3.39 3.42h-3v-3l3.42 -3.39z"></path> --}}
                                {{--                                                </svg> --}}
                                {{--                                                {{trans("main.edit")}} --}}
                                {{--                                            </a> --}}
                                {{--                                            <form action="{{route('course.destroy',$course->id)}}" method="post"> --}}
                                {{--                                                @csrf --}}
                                {{--                                                @method('delete') --}}
                                {{--                                             <button type="submit" href="{{route('course.destroy',$course->id)}}" data-bs-toggle="modal"  class="btn btn-outline-danger"> --}}
                                {{--                                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="16" height="16" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"> --}}
                                {{--                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/> --}}
                                {{--                                                    <line x1="4" y1="7" x2="20" y2="7" /> --}}
                                {{--                                                    <line x1="10" y1="11" x2="10" y2="17" /> --}}
                                {{--                                                    <line x1="14" y1="11" x2="14" y2="17" /> --}}
                                {{--                                                    <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" /> --}}
                                {{--                                                    <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" /> --}}
                                {{--                                                </svg> --}}
                                {{--                                                 {{trans("main.delete")}} --}}
                                {{--                                            </button> --}}
                                {{--                                            </form> --}}
                                {{--                                        </td> --}}


                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
    </div>
@endsection
