<ul class="nav nav-bordered mb-4">
    <li class="nav-item">
        <a class="nav-link @if (request()->routeIs('course-category.index')) active @endif " aria-current="page"
            href="{{ route('course-category.index') }}">{{ trans('main.categories') }}</a>
    </li>
    <li class="nav-item">
        <a class="nav-link @if (request()->routeIs('course.index')) active @endif "
            href="{{ route('course.index') }}">{{ trans('main.courses') }}</a>
    </li>
    <li class="nav-item">
        <a class="nav-link @if (request()->routeIs('course-level.index')) active @endif "
            href="{{ route('course-level.index') }}">{{ trans('main.levels') }}</a>
    </li>
</ul>
