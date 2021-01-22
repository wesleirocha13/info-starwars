<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Http;
use App\Models\Planet;

class PlanetController extends Controller
{
    public function index()
    {
        $response = Http::get('https://swapi.dev/api/planets/')->json();
        $arrayResponse = [];
        
        while(true){
            $newResponse = $response;
            $arrayResponse = array_merge($arrayResponse, $newResponse['results']);
            if($response['next'] == null){
                break;
            }
            $response = Http::get($response['next'])->json(); 
        }

        return view('planet', [
            'planets' => $arrayResponse
        ]);
    }

    public function show(Request $request)
    { 
        $response = Http::get($request->url)->json();
        return view('planetDetails', [
            'planet' => $response
        ]);
    }

    public function store(Request $request)
    {
        $response = Http::get($request->planet)->json();
        $planet = new Planet;
        $planet->name = $response['name'];
        $planet->rotation_period = $response['rotation_period'];
        $planet->orbital_period = $response['orbital_period'];
        $planet->diameter = $response['diameter'];
        $planet->climate = $response['climate'];
        $planet->gravity = $response['gravity'];
        $planet->terrain = $response['terrain'];
        $planet->surface_water = $response['surface_water'];
        $planet->population = $response['population'];
        $planet->url = $response['url'];

        try {
            $planet->save();
            return redirect()->route('planets')->with('success', 'Planeta salvo com sucesso!');;
        } catch (\Illuminate\Database\QueryException $e) {
            if($e->getCode() === '23000') {
                return redirect()->route('planets')->with('failed', 'Ops! Esse planeta já havia sido salvo.');
            }
        }
    }
}
