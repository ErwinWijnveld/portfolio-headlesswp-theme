@options('header')
  <header class="site-header">
    <div class="site-header__wrap container flex items-center justify-between">
      @hassub('logo')
        <a class="site-logo" href="{{ home_url('/') }}">
          <img src="@sub('logo', 'url')" alt="">
        </a>
      @endsub
      <nav>
        @if (has_nav_menu('primary_navigation'))
          {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
        @endif
      </nav>
      <img src="@asset('images/hamburger-menu.svg')" alt="" id="mobile-menu--trigger">
    </div>
  </header>

  <div class="replacement-block"></div>

  <div class="mobile-menu">
    <div class="mobile-menu__wrap container">
      <img src="@asset('images/exit.svg')" alt="" id="mobile-menu--exit">
      @if (has_nav_menu('primary_navigation'))
        {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
      @endif
    </div>
  </div>
@endoptions