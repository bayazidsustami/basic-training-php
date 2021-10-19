@extends('dashboard.layouts.main')
@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">My Posts</h1>
</div>
<div class="table-responsive col-lg-8">
    <a href="/dashboard/blogs/create" class="btn btn-primary mb-3">Create New Post</a>
    <table class="table table-striped table-sm">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Category</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($blogs as $blog)
            <tr>
                <td>{{ $blog->iteration }}</td>
                <td>{{ $blog->title }}</td>
                <td>{{ $blog->category->name }}</td>
                <td>
                    <a href="/dashboard/blogs/{{ $blog->slug }}" class="badge bg-info">
                        <span data-feather="eye"></span>
                    </a>
                    <a href="/dashboard/blogs/{{ $blog->id }}" class="badge bg-warning">
                        <span data-feather="edit"></span>
                    </a>
                    <a href="/dashboard/blogs/{{ $blog->id }}" class="badge bg-danger">
                        <span data-feather="x-circle"></span>
                    </a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection