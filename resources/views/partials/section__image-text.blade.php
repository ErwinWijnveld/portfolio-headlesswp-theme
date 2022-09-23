@group('section__image-text')
    <section class='image-text'>
        <div class='image-text__wrap container flex items-center'>
            @hassub('image')
                <img src="@sub('image', 'url')" alt="@sub('image', 'alt')" class="image">
            @endsub
            @group('info')
                <div class="info">
                    @hassub('title')
                        <h2 class="title mb-4">@sub('title')</h2>
                    @endsub
                    @hassub('text')
                        <div class="text mb-8">
                            @sub('text')
                        </div>
                    @endsub
                    @hassub('cta')
                        <a href="@sub('cta', 'url')" class="btn">@sub('cta', 'title')</a>
                    @endsub
                </div>
            @endgroup
        </div>
    </section>
@endgroup