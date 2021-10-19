@extends('layouts.main')
@section('container')

<h1 class="mb-3 text-center">{{ $title }}</h1>

<div class="row mb-3 justify-content-center">
    <div class="col-md-5">
        <form action="/blog">
            @if (request('category'))
            <input type="hidden" name="category" value="{{ request('category') }}">
            @endif
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Search blogs" name="search"
                    value="{{ request('search') }}">
                <button class="btn btn-danger" type="submit">Search</button>
            </div>
        </form>
    </div>
</div>

@if ($blogs->count())
<div class="card mb-3">
    @if($blogs[0]->image)
    <div style="max-height: 350px; overflow:hidden;">
        <img class="card-img-top" src="{{ asset('storage/' . $blogs[0]->image) }}"
            alt="{{ $blogs[0]->category->name }}">
    </div>
    @else
    <img class="card-img-top" src="https://source.unsplash.com/1200x400?{{ $post->category->name }}"
        alt="{{ $post->category->name }}">
    @endif
    <div class="card-body text-center">
        <h3 class="card-title"><a class="text-decoration-none text-dark" href="/blogs/{{ $blogs[0]->slug }}">{{
                $blogs[0]->title }}</a></h3>
        <p><small class="text-muted">
                By :
                <span class="badge bg-primary bg-light text-dark">
                    <a href="/blog?author={{ $blogs[0]->author->name }}" class="text-decoration-none">{{
                        $blogs[0]->author->name }}</a>
                </span>
                in
                <a href="/blog?category={{ $blogs[0]->category->slug }}" class="text-decoration-none"> {{
                    $blogs[0]->category->name }}</a>
                {{ $blogs[0]->created_at->diffForHumans() }}
            </small></p>
        <p class="card-text">{{ $blogs[0]->excerpt }}</p>
        <a href="/blogs/{{ $blogs[0]->slug }}" class="text-decoration-none btn btn-primary">Read More ...</a>
    </div>
</div>
<div class="container">
    <div class="row">
        @foreach ($blogs->skip(1) as $blog)
        <div class="col-md-4 mb-4">
            <div class="card">
                <div class="position-absolute px-3 py-2 text-white" style="background-color: rgba(0, 0, 0, 0.7)">
                    <a href="/blog?category={{ $blog->category->slug}}" class="text-white text-decoration-none">{{
                        $blog->category->name }}</a>
                </div>
                @if($blog->image)
                <img class="card-img-top" src="{{ asset('storage/' . $blog->image) }}"
                    alt="{{ $blog->category->name }}">
                @else
                <img class="card-img-top" src="https://source.unsplash.com/500x400?{{ $blog->category->name }}"
                    alt="{{ $blog->category->name }}">
                @endif

                <div class="card-body">
                    <h5 class="card-title">{{ $blog->title }}</h5>
                    <p><small class="text-muted">
                            By :
                            <span class="badge bg-primary bg-light text-dark">
                                <a href="/blog?author={{ $blog->author->name }}" class="text-decoration-none">{{
                                    $blog->author->name }}</a>
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
@else
<div class="container">
    <div class="row justify-content-center mb-5">
        <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
        <lottie-player class="center" src="https://assets3.lottiefiles.com/packages/lf20_scgyykem.json"
            background="transparent" speed="1" style="width: 300px; height: 300px;" loop autoplay></lottie-player>
    </div>
</div>
@endif
{{-- add pagination --}}
<div class="d-flex justify-content-end">
    {{ $blogs->links() }}
</div>
@endsection