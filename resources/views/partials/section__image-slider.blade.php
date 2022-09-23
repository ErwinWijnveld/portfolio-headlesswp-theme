@group('section__image-slider')
    <section class="image-slider">
        <div class="image-slider__slider" @hassub('set_height') style="height: @sub('height')px" @endsub >
            @php
                $images = get_sub_field('images');
            @endphp
            <div class="swiper-wrapper">
                @foreach ($images as $image)
                    <div class="swiper-slide">
                        <img src="<?= $image['url'] ?>" alt="<?= $image['alt'] ?>">
                    </div>
                @endforeach
            </div>

            {{-- Standard Navigation --}}
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>

            {{-- Standard Pagination --}}
            <div class="swiper-pagination"></div>
        </div>
    </section>
@endgroup