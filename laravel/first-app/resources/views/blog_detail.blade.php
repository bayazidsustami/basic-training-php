@extends('layouts.main')
@section('container')
    <article>
        <h2>{{ $post->title}}</h2>
        {{-- {{ $post->body }} with escaping character --}}
        {!! $post->body !!}
    </article>
    <a href="/blog">Back to Blogs</a>
@endsection