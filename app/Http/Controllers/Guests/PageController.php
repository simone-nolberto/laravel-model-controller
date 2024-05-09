<?php

namespace App\Http\Controllers\Guests;

use App\Http\Controllers\Controller;
use App\Models\Movie;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {

        $movies = Movie::all();
        // @dd($movies);

        return view('guests.welcome', compact('movies'));
    }
}
