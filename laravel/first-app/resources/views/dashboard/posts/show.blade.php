@extends('dashboard.layouts.main')
@section('container')
<div class="container">
    <div class="row my-3">
        <div class="col-lg-8">
            <h2 class="mb-3">{{ $post->title}}</h2>
            <a href="/dashboard/blogs/{{ $post->slug }}/edit" class="btn btn-warning"><span data-feather="edit"></span>
                edit</a>
            <form class="d-inline" action="/dashboard/blogs/{{ $post->slug }}" method="POST">
                @method('delete')
                @csrf
                <button class="btn btn-danger" onclick="return confirm('are you sure?')"><span
                        data-feather="x-circle"></span> delete</button>
            </form>
            <img class="img-fluid mt-2" src="https://source.unsplash.com/1200x400?{{ $post->category->name }}"
                alt="{{ $post->category->name }}">
            {{-- {{ $post->body }} with escaping character --}}
            <article class="my-3 fs-5">
                {!! $post->body !!}
            </article>
            <a href="/dashboard/blogs" class="d-block mt-3">Back to Blogs</a>
        </div>
    </div>
</div>
@endsection