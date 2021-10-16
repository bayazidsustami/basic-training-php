@extends('layouts.main')
@section('container')
    <h1 class="mb-5">Post Category : {{ $category }}</h1>
    @foreach ($blogs as $blog)
        <article class="mb-5">
            <h2>
                <a href="/blogs/{{ $blog->slug }}">{{ $blog->title }}</a>
            </h2>
            <p>{{ $blog->excerpt }}</p>
        </article>
    @endforeach
@endsection