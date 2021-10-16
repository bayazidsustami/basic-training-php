@extends('layouts.main')
@section('container')
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-8">
                <article>
                    <h2>{{ $post->title}}</h2>
                    <p>By : 
                        <span class="badge bg-primary bg-light text-dark">
                            <a href="/author/{{ $post->author->name }}" class="text-decoration-none">{{ $post->author->name }}</a> 
                        </span>
                        in 
                        <a class="text-decoration-none" href="/category/{{ $post->category->slug }}"> 
                            {{ $post->category->name }}
                        </a>
                    </p>
                    <img class="img-fluid" src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" alt="{{ $post->category->name }}">
                    {{-- {{ $post->body }} with escaping character --}}
                    <article class="my-3 fs-5">
                        {!! $post->body !!}
                    </article>
                </article>
                <a href="/blog" class="d-block mt-3">Back to Blogs</a>
            </div>
        </div>
    </div>
@endsection