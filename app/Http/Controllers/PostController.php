<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;


class PostController extends Controller
{
    public function post(Post $post)
    {
        return view('post')->with(['posts' => $post->getByLimit()]);  
    }
    
    public function store(Request $request, $component_id)
    {
        $post = Post::create(['user_id' => Auth::id(), 'component_id' => $component_id]);

        return back();
    }
}
