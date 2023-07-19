<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Component;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Cloudinary;
use App\Http\Requests\PostRequest;
use App\Models\Bookmark;


class PostController extends Controller
{
    public function index(Post $post,Bookmark $bookmark)
    {
        $id = Auth::id();
        $tweets = Post::where('user_id','=', $id)->get();
        $favorites = Bookmark::where('user_id','=', $id)->get();
        return view('posts.index')->with(['tweets' => $tweets, 'favorites' => $favorites]);
    }
    
    public function show(Post $post)
    {
       return view('posts.show')->with(['post' => $post]);
    }
    
    public function create(Bookmark $bookmark)
    {
        $id = Auth::id();
        $favorites = Bookmark::where('user_id','=', $id)->get();
        return view('posts.create')->with(['favorites' => $favorites]);
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
