<!-- resources/views/blogs/index.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Blog List</h1>

        @foreach ($blogs as $blog)
            <div class="blog-card">
                <h2>{{ $blog->title }}</h2>
                <p>Author: {{ $blog->author->name }}</p>
                <p>Categories:
                    @foreach ($blog->categories as $category)
                        {{ $category->name }}@if(!$loop->last), @endif
                    @endforeach
                </p>
                @if($blog->image)
                    <img src="{{ asset('storage/' . $blog->image) }}" alt="{{ $blog->title }}" class="img-fluid">
                @endif
                <p>{{ Str::limit($blog->content, 100) }}</p>
                <a href="{{ route('blogs.show', $blog->id) }}" class="btn btn-primary">Read More</a>
            </div>
        @endforeach

        <div class="pagination">
            {{ $blogs->links() }}
        </div>
    </div>
@endsection
