<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Component;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Cloudinary;
use App\Http\Requests\PostRequest;


class PostController extends Controller
{
    public function index(Post $post)
    {
        $id = Auth::id();
        $tweets = Post::where('user_id','=', $id)->get();
        return view('posts.index')->with(['tweets' => $tweets]);
    }
    
    public function show(Post $post)
    {
       return view('posts.show')->with(['post' => $post]);
    }
    
    public function create()
    {
        return view('posts.create');
    }
    
    
    public function store(Request $request, Post $post)
    {
        $post = new Post();
        $post->user_id = auth()->id();
        $post->component_id = NULL;
        if($request->file('image')){
            $path = Cloudinary::upload($request->file('image')->getRealPath())->getSecurePath();
            $post->image = $path;
        }
        $post->seibun = $request->post['seibun'];
        $post->text = $request->post['text'];
        $post->save();
        return redirect('/posts/index');
    }
    
}
