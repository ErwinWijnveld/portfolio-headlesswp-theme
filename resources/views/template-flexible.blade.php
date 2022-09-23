{{--
  Template Name: Flexible Template
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp

    @php
      $flexible_content = get_field('flex_content');
    @endphp

    @dump($flexible_content)
    @dump(get_the_ID())
  
  {{-- Include flexible content --}}
  {{-- @include('flexible-layout') --}}

  @endwhile
@endsection
