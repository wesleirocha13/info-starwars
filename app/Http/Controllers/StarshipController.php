<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Http;
use App\Models\Starships;

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

    public function store(Request $request)
    {
        $response = Http::get($request->starship)->json();
        $starship = new Starships;
        $starship->name = $response['name'];
        $starship->model = $response['model'];
        $starship->manufacturer = $response['manufacturer'];
        $starship->cost_in_credits = $response['cost_in_credits'];
        $starship->length = $response['length'];
        $starship->max_atmosphering_speed = $response['max_atmosphering_speed'];
        $starship->crew = $response['crew'];
        $starship->passengers = $response['passengers'];
        $starship->cargo_capacity = $response['cargo_capacity'];
        $starship->consumables = $response['consumables'];
        $starship->hyperdrive_rating = $response['hyperdrive_rating'];
        $starship->MGLT = $response['MGLT'];
        $starship->starship_class = $response['starship_class'];
        
        try {
            $starship->save();
            return redirect()->route('starships')->with('success', 'Nave salva com sucesso!');;
        } catch (\Illuminate\Database\QueryException $e) {
            if($e->getCode() === '23000') {
                return redirect()->route('starships')->with('failed', 'Ops! Essa nave já havia sido salva.');
            }
        }
        
    }
}
