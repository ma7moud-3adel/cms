<ul class="nav nav-bordered mb-4">
    <li class="nav-item">
        <a class="nav-link @if (request()->routeIs('project_categories.index')) active @endif " aria-current="page"
            href="{{ route('project_categories.index') }}">{{ trans('main.categories') }}</a>
    </li>
    <li class="nav-item">
        <a class="nav-link @if (request()->routeIs('projects.index')) active @endif "
            href="{{ route('projects.index') }}">{{ trans('main.projects') }}</a>
    </li>
</ul>
