<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Component;

class ComponentController extends Controller
{
    public function index(Request $request)
    {
        $keyword = $request->input('keyword');

        $query = Component::query();

        if(!empty($keyword)) {
            $query->where('name', 'LIKE', "%{$keyword}%");
        }

        $components = $query->get();

        return view('index', compact('components', 'keyword'));
    }
    public function show(Component $component)
        {
            //dd($component);
            return view('show')->with(['example' => $component]);

        } 
    public function bookmark_components()
    {
        $components = \Auth::user()->bookmark_components()->orderBy('created_at', 'desc')->paginate(10);
        $data = [
            'components' => $components,
        ];
        return view('components.bookmarks', $data);
    }    

}
