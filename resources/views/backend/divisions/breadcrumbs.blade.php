<div class="page-heading">
    <h1 class="page-title">Division Management</h1>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('/dashboard') }}"><i
                        class="icon-home2 position-left"></i> Home</a>
            </li>
            @can('division-list')
            <li class="breadcrumb-item active" aria-current="page"><a href="{{ url('/divisions') }}">Division List</a></li>
        </li>
            @endcan

        </ol>
    </nav>
</div>
