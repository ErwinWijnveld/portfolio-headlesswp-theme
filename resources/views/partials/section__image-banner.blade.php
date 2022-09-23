@group('section__image-banner')
    <section class="image-banner">
        <div class="image-banner__wrap @hassub('container') container @endsub">
            @hassub('image')
                <img @hassub('set_height') style="height: @sub('height')px" @endsub src="@sub('image','url')" alt="">
            @endsub
        </div>
    </section>
@endgroup