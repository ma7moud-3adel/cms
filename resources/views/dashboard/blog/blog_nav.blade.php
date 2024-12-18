<ul class="nav nav-bordered mb-4">
    <li class="nav-item">
        <a class="nav-link @if (request()->routeIs('sections.index')) active @endif " aria-current="page"
            href="{{ route('sections.index') }}">{{ trans('main.categories') }}</a>
    </li>
    <li class="nav-item">
        <a class="nav-link @if (request()->routeIs('blogs.index')) active @endif "
            href="{{ route('blogs.index') }}">{{ trans('main.Blog') }}</a>
    </li>
    <li class="nav-item">
        <a class="nav-link @if (request()->routeIs('comments.index')) active @endif "
            href="{{ route('comments.index') }}">{{ trans('main.Comments') }}</a>
    </li>
</ul>
