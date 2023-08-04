<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Component;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\Paginator;
use App\Models\Bookmark;
use Illuminate\Support\Facades\Auth;
use App\Models\Post;
use Cloudinary;
use App\Http\Requests\PostRequest;

class ComponentController extends Controller
{
    public function index(Request $request, Bookmark $bookmark)
    {
        $id = Auth::id();
        $favorites = Bookmark::where('user_id','=', $id)->get();
        
        $keyword = $request->input('keyword');

        $query = Component::query();

        if(!empty($keyword)) {
            $query->where('name', 'LIKE', "%{$keyword}%");
        }

        $components = $query->paginate(2);

        return view('index', compact('components', 'keyword'))->with(['favorites' => $favorites]);
    }
    public function show(Component $component,Bookmark $bookmark)
    {
        $id = Auth::id();
        $favorites = Bookmark::where('user_id','=', $id)->get();
        $relatedPosts = Post::where('seibun', $component->name)->get();
        $isFavorite = $favorites->contains('component_id', $component->id);
        return view('show')->with(['example' => $component, 'favorites' => $favorites, 'relatedPosts' => $relatedPosts,'isFavorite' => $isFavorite,]);

    } 
    public function edit(Component $component, Bookmark $bookmark) {
        $id = Auth::id();
        $favorites = Bookmark::where('user_id','=', $id)->get();
         return view('edit')->with(['example' => $component, 'favorites' => $favorites,]);
     }
 
    public function update(Request $request, Component $component) {
        $component->name = $request->input('name');
        $component->effect = $request->input('effect');
        $component->save();
        return redirect()->route('show', $component);
    }   
}
