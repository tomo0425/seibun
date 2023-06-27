<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\First;

class FirstController extends Controller
{
    public function index()
    {
        return view('first');
    }
}
