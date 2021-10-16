@extends('layouts.main')
@section('container')

    <h1 class="mb-5">{{ $title }}</h1>

    @if ($blogs->count())
        <div class="card mb-3">
            <img src="https://source.unsplash.com/1200x400?{{ $blogs[0]->category->name }}" class="card-img-top" alt="{{ $blogs[0]->category->name }}">
            <div class="card-body text-center">
            <h3 class="card-title"><a class="text-decoration-none text-dark" href="/blogs/{{ $blogs[0]->slug }}">{{ $blogs[0]->title }}</a></h3>
            <p><small class="text-muted">
                By : 
                <span class="badge bg-primary bg-light text-dark">
                    <a href="/author/{{ $blogs[0]->author->name }}" class="text-decoration-none">{{ $blogs[0]->author->name }}</a>
                </span> 
                in 
                <a href="/category/{{ $blogs[0]->category->slug }}" class="text-decoration-none"> {{ $blogs[0]->category->name }}</a>
                {{ $blogs[0]->created_at->diffForHumans() }}
            </small></p>
            <p class="card-text">{{ $blogs[0]->excerpt }}</p>
            <a href="/blogs/{{ $blogs[0]->slug }}" class="text-decoration-none btn btn-primary">Read More ...</a>
            </div>
        </div>
    @else 
        <p class="text-center fs-4">Not post found</p>
    @endif

    <div class="container">
        <div class="row">
        @foreach ($blogs->skip(1) as $blog)
            <div class="col-md-4 mb-4">
                <div class="card">
                    <div class="position-absolute px-3 py-2 text-white" style="background-color: rgba(0, 0, 0, 0.7)">
                        <a href="/category/{{ $blog->category->slug}}" class="text-white text-decoration-none">{{ $blog->category->name }}</a>
                    </div>
                    <img src="https://source.unsplash.com/500x400?{{ $blog->category->name }}" class="card-img-top" alt="https://source.unsplash.com/1200x400/?{{ $blog->category->name }}">
                    <div class="card-body">
                    <h5 class="card-title">{{ $blog->title }}</h5>
                    <p><small class="text-muted">
                            By : 
                            <span class="badge bg-primary bg-light text-dark">
                                <a href="/author/{{ $blog->author->name }}" class="text-decoration-none">{{ $blog->author->name }}</a>
                            </span> 
                            {{ $blog->created_at->diffForHumans() }}
                        </small></p>
                    <p class="card-text">{{ $blog->excerpt }}</p>
                    <a href="/blogs/{{ $blog->slug }}" class="btn btn-primary">Read More ..</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection
