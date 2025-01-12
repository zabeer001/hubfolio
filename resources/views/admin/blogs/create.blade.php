<!-- resources/views/blogs/create.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Create a New Blog</h1>

        <form action="{{ route('blogs.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="form-group">
                <label for="title">Blog Title</label>
                <input type="text" name="title" id="title" class="form-control" value="{{ old('title') }}" required>
            </div>

            <div class="form-group">
                <label for="content">Content</label>
                <textarea name="content" id="content" rows="5" class="form-control" required>{{ old('content') }}</textarea>
            </div>

            <div class="form-group">
                <label for="image">Image</label>
                <input type="file" name="image" id="image" class="form-control">
            </div>

            <div class="form-group">
                <label for="author_id">Author</label>
                <select name="author_id" id="author_id" class="form-control" required>
                    <option value="">Select Author</option>
                    @foreach($authors as $author)
                        <option value="{{ $author->id }}" {{ old('author_id') == $author->id ? 'selected' : '' }}>{{ $author->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="category_ids">Categories</label>
                <select name="category_ids[]" id="category_ids" class="form-control" multiple required>
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}" {{ in_array($category->id, old('category_ids', [])) ? 'selected' : '' }}>{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>

            <button type="submit" class="btn btn-success">Create Blog</button>
        </form>
    </div>
@endsection
