<?php

// app/Http/Controllers/BlogController.php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use App\Models\Author;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::with(['author', 'categories'])->latest()->paginate(10);
        return view('blogs.index', compact('blogs'));
    }

    public function show($id)
    {
        $blog = Blog::with(['author', 'categories'])->findOrFail($id);
        return view('blogs.show', compact('blog'));
    }

    public function create()
    {
        $authors = Author::all();
        $categories = Category::all();
        return view('blogs.create', compact('authors', 'categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required',
            'image' => 'nullable|image|max:1024',
            'author_id' => 'required|exists:authors,id',
            'category_ids' => 'required|array',
        ]);

        $imagePath = $request->hasFile('image') ? $request->file('image')->store('images', 'public') : null;

        $blog = Blog::create([
            'title' => $request->title,
            'content' => $request->content,
            'image' => $imagePath,
            'author_id' => $request->author_id,
        ]);

        $blog->categories()->sync($request->category_ids);

        return redirect()->route('blogs.index');
    }
}

