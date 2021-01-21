<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Http;

class StarshipController extends Controller
{
    public function index()
    {

        $response = Http::get('https://swapi.dev/api/starships/')->json();
        $arrayResponse = [];
        
        while(true){
            $newResponse = $response;
            $arrayResponse = array_merge($arrayResponse, $newResponse['results']);
            if($response['next'] == null){
                break;
            }
            $response = Http::get($response['next'])->json(); 
        }

        //dd($arrayResponse);

        return view('starship', [
            'starships' => $arrayResponse
        ]);
    }

    public function show(Request $request)
    { 
        $response = Http::get($request->url)->json();
        return view('starshipDetails', [
            'starship' => $response
        ]);
    }
}
