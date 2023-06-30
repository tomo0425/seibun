<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bookmark;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;



class BookmarkController extends Controller
{
    public function book(Request $request, $component_id)
    {
        $bookmark = Bookmark::create(['user_id' => Auth::id(), 'component_id' => $component_id]);
        dd($bookmark);

        return view('book')->with(['bookmark' => $bookmark]);
        
    }
}
