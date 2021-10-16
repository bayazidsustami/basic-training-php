@extends('layouts.main')
@section('container')
    <article>
        <h2>{{ $post->title}}</h2>
        <p>By : Bay bay in <a href="/category/{{ $post->category->slug }}"> {{ $post->category->name }}</a></p>
        {{-- {{ $post->body }} with escaping character --}}
        {!! $post->body !!}
    </article>
    <a href="/blog">Back to Blogs</a>
@endsection