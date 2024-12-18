<ul class="nav nav-bordered mb-4">
    <li class="nav-item">
        <a class="nav-link @if (request()->routeIs('service-group.index')) active @endif " aria-current="page"
            href="{{ route('service-group.index') }}">{{ trans('main.service_group') }}</a>
    </li>
    <li class="nav-item">
        <a class="nav-link @if (request()->routeIs('service.index')) active @endif "
            href="{{ route('service.index') }}">{{ trans('main.services') }}</a>
    </li>
</ul>
