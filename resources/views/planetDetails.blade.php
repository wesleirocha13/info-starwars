@extends('layouts.global')
@section('content')
    <div class="container d-flex justify-content-start"">
        <a href="{{ url()->previous() }}" class="mt-2">
            <button type="button" class="btn btn-link"><< Voltar</button>
        </a>
    </div>
    <div class="container d-flex justify-content-center">
        <div class="card border-secondary mt-3 mb-5 w-50">
            <div class="card-header text-center">
              <h4>{{$planet['name']}}</h4>
            </div>
            <div class="card-body text-left pl-5">
                <div class="row">
                    <div class="col">
                        <span class="border border-secondary rounded p-1 bg-light">
                            <strong>Período de rotação: </strong>{{$planet['rotation_period']}}
                        </span> 
                    </div>
                    <div class="col">
                        <span class="border border-secondary rounded p-1 bg-light">
                            <strong>Período orbital: </strong>{{$planet['orbital_period']}}
                        </span>
                    </div>
                </div>
                <div class="row pt-3">
                    <div class="col">
                        <span class="border border-secondary rounded p-1 bg-light">
                            <strong>Diâmetro: </strong>{{$planet['diameter']}}
                        </span>
                    </div>
                    <div class="col">
                        <span class="border border-secondary rounded p-1 bg-light">
                            <strong>Clima: </strong>{{$planet['climate']}}
                        </span>
                    </div>
                </div>
                <div class="row pt-3">
                    <div class="col">
                        <span class="border border-secondary rounded p-1 bg-light">
                            <strong>Gravidade: </strong>{{$planet['gravity']}}
                        </span>
                    </div>
                    <div class="col">
                        <span class="border border-secondary rounded p-1 bg-light">    
                            <strong>Terreno: </strong>{{$planet['terrain']}}
                        </span>
                    </div>
                </div>
                <div class="row pt-3">
                    <div class="col">
                        <span class="border border-secondary rounded p-1 bg-light">
                            <strong>Água superficial: </strong>{{$planet['surface_water']}}
                        </span>
                    </div>
                    <div class="col">
                        <span class="border border-secondary rounded p-1 bg-light">
                            <strong>População: </strong>{{$planet['population']}}
                        </span>
                    </div>
                </div>      
            </div>
            <div class="text-center pb-3">
                <a href="#" class="btn btn-primary" style="width: 150px;">Salvar</a>
            </div>
          </div>
    </div>






@endsection