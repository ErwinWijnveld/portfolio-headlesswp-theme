@extends('layouts.app')

@section('content')
  @if (!have_posts())
    <section class="page404">
      @options('404')
        <div class="wrap h-screen flex items-center justify-center flex-col">
          <h1 style="font-size: 9vw;" class="text-center">
            @if (get_sub_field('title'))
                @sub('title')
            @else
                404
            @endif
          </h1>
          <p class="text-center">
            @if (get_sub_field('text'))
              @sub('text')
            @else
              Deze pagina kon niet gevonden worden...
            @endif
          </p>
          <div class="flex items-center justify-center gap-4">
            @hassub('button_left')
              <a href="@sub('button_left', 'url')" class="btn">@sub('button_left', 'title')</a>
            @endsub
            @hassub('button_right')
              <a href="@sub('button_right', 'url')" class="btn">@sub('button_right', 'title')</a>
            @endsub
          </div>
        </div>
      @endoptions
    </section>
  @endif
@endsection
