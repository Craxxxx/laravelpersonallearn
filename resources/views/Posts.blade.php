@extends('layouts.Main')
@section('container')
{{-- @dd($posts)   dump and die --}}

@foreach ($posts as $post)
{{-- @dd($post) --}}
<article class="mb-5">
    <h1><a href="/posts/{{ $post["slug"] }}">{{ $post["judul"] }}</a></h1>
    <h5>{{ $post["author"] }}</h5>
    <p>{{ $post["body"] }}</p>
</article>

    
@endforeach 
@endsection
    