@extends('dashboard.layouts.main')
@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Categories</h1>
</div>

@if(session()->has('success'))
<div class="alert alert-success col-lg-6" role="alert">
    {{ session('success') }}
</div>
@endif

@error('slug')
<div class="alert alert-danger col-lg-6" role="alert">
    {{ $message }} - please input another title
</div>
@enderror
@error('name')
<div class="alert alert-danger col-lg-6" role="alert">
    {{ $message }} - please input another title
</div>
@enderror


<div class="table-responsive col-lg-6">
    {{-- <a href="/dashboard/categories/create" class="btn btn-primary mb-3">Create New Category</a> --}}
    <button class="btn btn-primary mb-3 mt-1 ms-1" type="button" data-bs-toggle="modal" data-bs-target="#inputModal">
        Create New Category
    </button>
    <table class="table table-striped table-sm">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Category Name</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $category)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $category->name }}</td>
                <td>
                    <a href="/dashboard/categories/{{ $category->slug }}/edit" class="badge bg-warning">
                        <span data-feather="edit"></span>
                    </a>
                    <form class="d-inline" action="/dashboard/categories/{{ $category->slug }}" method="POST">
                        @method('delete')
                        @csrf
                        <button class="badge bg-danger border-0" onclick="return confirm('are you sure?')"><span
                                data-feather="x-circle"></span></button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection

<!-- Modal -->
<div class="modal fade" id="inputModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add New Category</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <form method="POST" action="/dashboard/categories">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label @error('slug') is-invalid @enderror">Category Title</label>
                        <input type="text" class="form-control" name="name" id="name" value="{{ old('name') }}">
                        @error('name')
                        <small class="text-danger">This title already taken</small>
                        @enderror
                    </div>
                    <div class="d-flex justify-content-end">
                        <button type="button" id="btn-add" class="btn btn-secondary me-1"
                            data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Add Category</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>