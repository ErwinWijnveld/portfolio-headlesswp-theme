@options('footer')
    <footer class="site-footer">
        <div class="site-footer__wrap container flex justify-between gap-4">
            @hassub('logo')
            <a class="site-logo site-footer__block" href="{{ home_url('/') }}">
                <img src="@sub('logo', 'url')" alt="">
            </a>
            @endsub
            
            @group('sitemap')
                <div class="site-footer__block">
                    @hassub('title')
                    <p class="title">@sub('title')</p>
                    @endsub
                    @fields('links')
                        <a href="@sub('link', 'url')" class="link">@sub('link', 'title')</a>
                    @endfields
                </div>
            @endgroup
            
            @group('contact')
                <div class="site-footer__block">
                    @hassub('title')
                    <p class="title">@sub('title')</p>
                    @endsub
                    @fields('links')
                        <a href="@sub('link', 'url')" class="link">@sub('link', 'title')</a>
                    @endfields
                </div>
            @endgroup
            
            @group('socials')
                <div class="site-footer__block">
                    @hassub('title')
                    <p class="title">@sub('title')</p>
                    @endsub
                    <div class="links flex items-start flex-wrap">
                        @fields('links')
                            <a href="@sub('link', 'url')" class="icon mr-4"><img src="@sub('icon', 'url')" alt=""></a>
                        @endfields
                    </div>
                </div>
            @endgroup
        </div>
    </footer>
@endoptions