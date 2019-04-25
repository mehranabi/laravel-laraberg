<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function submit(Request $request)
    {
        $post = new Post;
        $post->title = $request->title;
        $post->save();
        $post->setContent($request->laraberg, true);

        return response()->json([
            'success' => true,
            'message' => 'Post Created Successfully!',
        ], 201);
    }

    /*public function update(Request $request)
    {
        $post = Post::findOrFail($request->id);
        $post->title = $request->title;
        $post->save();
        $post->setContent($request->laraberg, true);

        return response()->json([
            'success' => true,
            'message' => 'Post Updated Successfully!',
        ], 200);
    }*/

    public function indexAll()
    {
        $posts = Post::limit(10)->get(['title', 'id', 'created_at'])->sortByDesc('created_at');

        return view('posts.all')->with('posts', $posts->toArray());
    }

    public function index($id)
    {
        $post = Post::findOrFail($id);

        return view('posts.post')->with('post', $post);
    }
}
