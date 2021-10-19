@extends('dashboard.layouts.main')
@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Create New Post</h1>
</div>
<div class="col-lg-8">
    <form method="POST" action="/dashboard/blogs" class="mb-5" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title"
                required autofocus value="{{ old('title') }}">
            @error('title')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="slug" class="form-label">Slug</label>
            <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug" required
                value="{{ old('value') }}">
            @error('slug')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="category" class="form-label">Slug</label>
            <select class="form-select" name="category_id">
                @foreach ($categories as $category)
                @if(old('category_id') == $category->id)
                <option value={{ $category->id }} selected>{{ $category->name }}</option>
                @else
                <option value={{ $category->id }}>{{ $category->name }}</option>
                @endif
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Image</label>
            <img id="img-preview" class="img-preview img-fluid mb-3 col-sm-5">
            <input class="form-control @error('image') is-invalid @enderror" type="file" id="image" name="image"
                onchange="loadFile(event)">
            @error('image')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="body" class="form-label">Body</label>
            <input id="body" type="hidden" name="body" value="{{ old('body') }}">
            <trix-editor input="body"></trix-editor>
            @error('body')
            <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Create Post</button>
    </form>
</div>
<script>
    const title = document.querySelector('#title');
    const slug = document.querySelector('#slug');

    title.addEventListener('change', function(){
        fetch('/dashboard/blogs/checkSlug?title=' + title.value)
            .then(response => response.json())
            .then(data => slug.value = data.slug);
    });

    document.addEventListener('trix-file-accept', function(e){
        e.preventDefault();
    });

</script>
<script>
    var loadFile = function(event) {
    var output = document.getElementById('img-preview');
    output.style.display = 'block';
    output.src = URL.createObjectURL(event.target.files[0]);
        output.onload = function() {
            URL.revokeObjectURL(output.src) // free memory
        }
    };
</script>
@endsection