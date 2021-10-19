@extends('layouts.main')
@section('container')
<div class="container">
    <div class="row justify-content-center mb-5">
        <div class="col-md-8">
            <article>
                <h2>{{ $post->title}}</h2>
                <p>By :
                    <span class="badge bg-primary bg-light text-dark">
                        <a href="/blog?author={{ $post->author->name }}" class="text-decoration-none">{{
                            $post->author->name }}</a>
                    </span>
                    in
                    <a class="text-decoration-none" href="/blog?category={{ $post->category->slug }}">
                        {{ $post->category->name }}
                    </a>
                </p>
                @if($post->image)
                <div style="max-height: 350px; overflow:hidden;">
                    <img class="img-fluid mt-2" src="{{ asset('storage/' . $post->image) }}"
                        alt="{{ $post->category->name }}">
                </div>
                @else
                <img class="img-fluid mt-2" src="https://source.unsplash.com/1200x400?{{ $post->category->name }}"
                    alt="{{ $post->category->name }}">
                @endif
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