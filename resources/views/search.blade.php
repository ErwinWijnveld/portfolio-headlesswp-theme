@extends('layouts.app')

@section('content')


<section class="search-results py-12">

  @include('partials.page-header')
  
  <div class="search-results__wrap container">
    @if (!have_posts())
      <div class="alert alert-warning">
        {{ __('Sorry, no results were found.', 'sage') }}
      </div>
      {!! get_search_form(false) !!}
    @endif
    
    @while(have_posts()) @php the_post() @endphp
      @include('partials.content-search')
    @endwhile
  
  </div>
</section>


  {!! get_the_posts_navigation() !!}
@endsection