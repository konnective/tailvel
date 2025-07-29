<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use Illuminate\Http\Response;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;


class BlogController extends Controller
{
    
    public function index()
    {
        $blogs = Blog::latest()->paginate(10);
        // $blogs->getCollection()->transform(function ($blog) {
        //     $blog->status_text = $blog->status ? 'Published' : 'Not Published';
        //     return $blog;
        // });

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
        
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:255|unique:blogs',
            'content' => 'required|string',
            'author' => 'required|string|max:100',
            'category' => 'required|string|max:50',
            'tags' => 'nullable|array',
            'tags.*' => 'string|max:50',
            'published_at' => 'nullable|date'
        ]);

        // Check if validation fails
        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'errors' => $validator->errors()
            ], 422);
        }

        try {
            // Create blog post
            $blog = Blog::create([
                'title' => $request->title,
                'slug' => Str::slug($request->title),
                'content' => $request->content,
                'author' => $request->author,
                'category' => $request->category,
                'tags' => $request->tags ? json_encode($request->tags) : null,
                'published_at' => $request->published_at ?? now(),
            ]);

            return response()->json([
                'status' => 'success',
                'message' => 'Blog post created successfully',
                'data' => $blog
            ], 201);

        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Failed to create blog post',
                'error' => $e->getMessage()
            ], 500);
        }
        // return response()->json($blog, Response::HTTP_CREATED);
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
