@extends('layouts.backend.master')

@section('content')
    <div class="container">
        <h1>Blog List</h1>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Title</th>
                    <th>Author</th>
                    <th>Categories</th>
                    <th>Image</th>
        
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($blogs as $blog)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $blog->title }}</td>
                        <td>{{ $blog->author->name }}</td>
                        <td>
                            @foreach ($blog->categories as $category)
                                {{ $category->name }}@if(!$loop->last), @endif
                            @endforeach
                        </td>
                        <td>
                            @if($blog->image)
                                <img src="{{ asset('storage/' . $blog->image) }}" alt="{{ $blog->title }}" class="img-fluid" style="max-width: 100px;">
                            @endif
                        </td>
                     
                        <td>
                            <a href="{{ route('blogs.show', $blog->id) }}" class="btn btn-primary">view</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <div class="pagination">
            {{ $blogs->links() }}
        </div>
    </div>
@endsection
