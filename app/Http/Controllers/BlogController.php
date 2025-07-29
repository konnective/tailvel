<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use Illuminate\Http\Response;


class BlogController extends Controller
{
    
    public function index()
    {
        $blogs = Blog::latest()->paginate(10);
        return response()->json($blogs, Response::HTTP_OK);
    }

    // 📄 Show a single blog
    public function show($id)
    {
        $blog = Blog::findOrFail($id);
        return response()->json($blog, Response::HTTP_OK);
    }

    // ➕ Create a new blog
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'author' => 'nullable|string',
            'status' => 'required|in:draft,published',
            'published_at' => 'nullable|date',
        ]);

        $blog = Blog::create($validated);
        return response()->json($blog, Response::HTTP_CREATED);
    }

    // 🛠️ Update an existing blog
    public function update(Request $request, $id)
    {
        $blog = Blog::findOrFail($id);

        $validated = $request->validate([
            'title' => 'sometimes|required|string|max:255',
            'content' => 'sometimes|required|string',
            'author' => 'nullable|string',
            'status' => 'required|in:draft,published',
            'published_at' => 'nullable|date',
        ]);

        $blog->update($validated);
        return response()->json($blog, Response::HTTP_OK);
    }

    // ❌ Delete a blog
    public function destroy($id)
    {
        $blog = Blog::findOrFail($id);
        $blog->delete();
        return response()->json(['message' => 'Blog deleted'], Response::HTTP_NO_CONTENT);
    }
}
