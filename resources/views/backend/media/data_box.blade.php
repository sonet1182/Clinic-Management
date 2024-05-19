<div class="row">
    @foreach ($media as $item)
        <div class="product-images col-md-2 col-3 id-{{ $item->id }}" style="background: #f2f2f2;">
            <a href="{{ asset($item->file_directory . $item->filename)}}"
                data-toggle="lightbox" data-title="{{ $item->filename }}" data-gallery="gallery">
                @if ($item->file_extension == 'pdf')
                    <div class="document danger">
                        <div class="document-body">
                            <i class="fa fa-file-pdf text-danger"></i>
                        </div>
                    </div>
                    <span class="p-3">
                        {{ $item->filename }}
                    </span>
                @else
                    <img src="{{ asset($item->file_directory . $item->filename) }}"
                        class="media img-fluid mb-2" alt="{{ $item->filename }}" />
                @endif
                <a class="remove" data-media-id="{{ $item->id }}" onclick="sakib({{ $item->id }})"><span
                        class="fa fa-trash"></span></a>
            </a>
        </div>
    @endforeach
</div>
