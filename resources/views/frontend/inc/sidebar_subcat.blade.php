<ul class="submenu">
    @foreach ($subcategories as $subcategory)
        <li>
            <a href="{{ route('category', ['slug' => $subcategory->slug]) }}" class="text-truncate text-dark px-4 fs-14 d-block hov-column-gap-1">
                <img class="cat-image lazyload mr-2 opacity-60"
                    src="{{ asset('/asset/frontend/assets/img/placeholder.jpg') }}"
                    data-src="{{ asset($subcategory->image) }}" width="16" alt="{{ $subcategory->title }}"
                    onerror="this.onerror=null;this.src='{{ asset('/asset/frontend/assets/img/placeholder.jpg') }}';">
                <span class="cat-name has-transition">{{ $subcategory->title }}</span>

                @if ($subcategory->subcategories->count() > 0)
                    <span class="float-right"> <i class="fa fa-angle-right text-secondary"></i> </span>
                @endif
            </a>

            @if ($subcategory->subcategories->count() > 0)
                @include('frontend.inc.sidebar_subcat', ['subcategories' => $subcategory->subcategories])
            @endif
        </li>
    @endforeach
</ul>
