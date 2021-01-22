<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Planet;
use App\Models\Starships;

class SavedController extends Controller
{
    public function index()
    {
        $planets = Planet::all();
        $starships = Starships::all();
        
        return view('saved', [
            'planets' => $planets,
            'starships' => $starships
        ]);
    }
}
