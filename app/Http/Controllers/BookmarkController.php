<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bookmark;
use App\Models\Component;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;



class BookmarkController extends Controller
{
    public function book(Request $request, Component $component)
    {
        $bookmark = Bookmark::where('user_id', Auth::id())->where('component_id', $component->id)->first();

        if (!$bookmark) {
            $bookmark = Bookmark::create(['user_id' => Auth::id(), 'component_id' => $component->id]);
        }

        return redirect()->route('show', ['component' => $component->id]);
    }

    public function unbook(Request $request, Component $component)
    {
        $bookmark = Bookmark::where('user_id', Auth::id())->where('component_id', $component->id)->first();

        if ($bookmark) {
            $bookmark->delete();
        }

        return redirect()->route('show', ['component' => $component->id]);
    }

    
    public function bookmark(Bookmark $bookmark)
    {
        
        $id = Auth::id();
        $favorites = Bookmark::where('user_id','=', $id)->get();
        return view('bookmark')->with(['favorites' => $favorites]);
        
    }
}
