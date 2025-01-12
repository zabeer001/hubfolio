<!-- resources/views/blogs/show.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="blog-detail">
            <h1>{{ $blog->title }}</h1>
            <p>Author: {{ $blog->author->name }}</p>
            <p>Categories:
                @foreach ($blog->categories as $category)
                    {{ $category->name }}@if(!$loop->last), @endif
                @endforeach
            </p>
            @if($blog->image)
                <img src="{{ asset('storage/' . $blog->image) }}" alt="{{ $blog->title }}" class="img-fluid">
            @endif
            <div class="content">
                <p>{{ $blog->content }}</p>
            </div>
        </div>
    </div>
@endsection
