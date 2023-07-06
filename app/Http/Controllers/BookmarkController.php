<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bookmark;
use App\Models\Component;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;



class BookmarkController extends Controller
{
    public function book(Request $request, $component_id)
    {
        $bookmark = Bookmark::create(['user_id' => Auth::id(), 'component_id' => $component_id]);
        $keyword = null;
        $components = null;
        return view('index')->with(['bookmark' => $bookmark, 'keyword' => $keyword, 'components' => $components ]);
        
    }
    
    public function bookmark(Bookmark $bookmark)
    {
        
        $id = Auth::id();
        $favorites = Bookmark::where('user_id','=', $id)->get();
        return view('bookmark')->with(['favorites' => $favorites]);
        
    }
}
