<ul class="nav nav-bordered mb-4">
    <li class="nav-item">
        <a class="nav-link @if (request()->routeIs('product-category.index')) active @endif " aria-current="page"
            href="{{ route('product-category.index') }}">{{trans('main.categories')}}</a>
    </li>
    <li class="nav-item">
        <a class="nav-link @if (request()->routeIs('product.index')) active @endif "
            href="{{ route('product.index') }}">{{trans('main.products')}}</a>
    </li>
</ul>
