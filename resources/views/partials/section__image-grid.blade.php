@group('section__image-grid')
    <section class='image-grid'>
        @if (get_sub_field('columns') && get_sub_field('mobile_columns'))
            
            <div class='image-grid__wrap container grid grid-cols-@sub('columns')' data-mobilecolumns="@sub('mobile_columns')">
                @php
                    $images = get_sub_field('images');
                @endphp
                @foreach ($images as $image)
                    <img src="<?= $image['url']; ?>" alt="" class="image">
                @endforeach
            </div>

        @endif
    </section>
@endgroup