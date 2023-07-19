<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Component;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\Paginator;
use App\Models\Bookmark;
use Illuminate\Support\Facades\Auth;

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
            return view('show')->with(['example' => $component, 'favorites' => $favorites]);

        } 
    
}
