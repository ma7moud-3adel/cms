<ul class="nav nav-bordered mb-4">
    <li class="nav-item">
        <a class="nav-link @if (request()->routeIs('clientCategory.index')) active @endif " aria-current="page"
            href="{{ route('clientCategory.index') }}">{{ trans('main.categories') }}</a>
    </li>
    <li class="nav-item">
        <a class="nav-link @if (request()->routeIs('client.index')) active @endif "
            href="{{ route('client.index') }}">{{ trans('main.Clients') }}</a>
    </li>
</ul>
