<?php

namespace App\Http\Controllers;
use App\Category;
use App\Http\Requests\PostRequest;
use App\Post;
use Illuminate\Http\Request;

class PostShowController extends Controller
{
    public function index(Request $request)
    {
        if ($request->has('search')) {
            $posts = Post::with(['user','category'])->where('post_title', 'like', '%'.$request->search.'%')->paginate(setting('record_per_page', 10));
        }else{
            $posts = Post::with(['user','category'])->paginate(setting('record_per_page', 10));
        }
        $title =  'Posts';
        return view('frontend.post.index', compact('posts','title'));
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        $title = "Post Details";
        $post->with(['category','user']);
        return view('frontend.post.show', compact('title', 'post'));
    }
}
