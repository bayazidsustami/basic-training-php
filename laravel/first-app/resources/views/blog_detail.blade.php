@extends('layouts.main')
@section('container')
    <article>
        <h2>{{ $post->title}}</h2>
        <p>By : 
            <span class="badge bg-primary bg-light text-dark">
                <a href="#" class="text-decoration-none">{{ $post->user->name }}</a> 
            </span>
            in 
            <a class="text-decoration-none" href="/category/{{ $post->category->slug }}"> 
                {{ $post->category->name }}
            </a>
        </p>
        {{-- {{ $post->body }} with escaping character --}}
        {!! $post->body !!}
    </article>
    <a href="/blog" class="d-block mt-3">Back to Blogs</a>
@endsection