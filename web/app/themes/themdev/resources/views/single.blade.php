@extends('layouts.app')
@section('content')
<h1>single blade</h1>
  @while(have_posts()) @php(the_post())
    @includeFirst(['partials.content-single-' . get_post_type(), 'partials.content-single'])
  @endwhile
@endsection
