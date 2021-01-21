<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Http;

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

        //dd($arrayResponse);

        return view('planet', [
            'planets' => $arrayResponse
        ]);
    }

    /**
     * @param Illuminate\Http\Request $request
     * @return Illuminate\Http\Response;
     */

    public function show(Request $request)
    { 
        $response = Http::get($request->url)->json();
        return view('planetDetails', [
            'planet' => $response
        ]);
    }
}
