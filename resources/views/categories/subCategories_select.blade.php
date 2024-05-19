<style>
    .custom-card:hover {
        background-color: salmon;
        color: #fff;
    }
</style>


<ul>
    @foreach ($subCategories as $subCategory)
        <li class="" style="list-style: none;">
            <div style="border: 1px solid salmon;
            padding: 5px 10px;     margin: 4px 0px;" class="rounded custom-card">
                <input type="radio" name="category" value="{{ $subCategory->id }}" {{ !empty($post) && $post->category == $subCategory->id ? 'checked' : '' }}/> <span class="px-2">{{ $subCategory->title }}</span>
            </div>
            @if (count($subCategory->subCategories))
                @include('categories.subCategories_select', ['subCategories' => $subCategory->subCategories])
            @endif
        </li>
    @endforeach
</ul>
