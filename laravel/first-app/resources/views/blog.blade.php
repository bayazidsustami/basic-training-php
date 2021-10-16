@extends('layouts.main')
@section('container')

    <h1 class="mb-5">{{ $title }}</h1>

    @foreach ($blogs as $blog)
        <article class="mb-5 border-bottom pb-3">
            <h2>
                <a href="/blogs/{{ $blog->slug }}" class="text-decoration-none">{{ $blog->title }}</a>
            </h2>

            <p>By : 
                <span class="badge bg-primary bg-light text-dark">
                    <a href="/author/{{ $blog->author->name }}" class="text-decoration-none">{{ $blog->author->name }}</a>
                </span> 
                in 
                <a href="/category/{{ $blog->category->slug }}" class="text-decoration-none"> {{ $blog->category->name }}</a>
            </p>

            <p>{{ $blog->excerpt }}</p>

            <a href="/blogs/{{ $blog->slug }}" class="text-decoration-none">Read More ...</a>
        </article>
    @endforeach
@endsection
