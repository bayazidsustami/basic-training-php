@extends('dashboard.layouts.main')
@section('container')
<div class="container">
    <div class="row my-3">
        <div class="col-lg-8">
            <h2 class="mb-3">{{ $post->title}}</h2>
            <a href="" class="btn btn-warning"><span data-feather="edit"></span> edit</a>
            <a href="" class="btn btn-danger"><span data-feather="x-circle"></span> delete</a>
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