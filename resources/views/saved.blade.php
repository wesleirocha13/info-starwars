@extends('layouts.global')
@section('content')
<div class="container pb-4">
    <h1 class="display-4 text-center mt-3 mb-4">Salvos</h1>
    <div id="accordion">
        <div class="card">
            <div class="card-header">
                <ul class="nav nav-tabs card-header-tabs">
                    <li class="nav-item pr-1">
                        <a class="nav-link bg-white text-dark" href="#" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">Planetas</a>
                    </li>
                    <li class="nav-item pl-1">
                        <a class="nav-link bg-white text-dark" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Naves</a>
                    </li>
                </ul>
            </div>
            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                <div class="card-body">
                    @foreach ($planets as $planet)
                        <div class="d-flex justify-content-center">
                            <div class="card border-secondary mb-3" style="width: 80%">
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
                            </div>
                        </div>
                    @endforeach    
                </div>
            </div>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                <div class="card-body">
                    @foreach ($starships as $starship)
                        <div class="d-flex justify-content-center">
                            <div class="card border-secondary mb-3" style="width: 80%">  
                                <div class="card-header text-center">
                                <h4>{{$starship['name']}}</h4>
                                </div>
                                <div class="card-body text-left pl-5">
                                    <div class="row">
                                        <div class="col">
                                            <span class="border border-secondary rounded p-1 bg-light">
                                                <strong>Modelo: </strong>{{$starship['model']}}
                                            </span> 
                                        </div>
                                        <div class="col">
                                            <span class="border border-secondary rounded p-1 bg-light">
                                                <strong>Fabricante: </strong>{{$starship['manufacturer']}}
                                            </span>
                                        </div>
                                    </div>
                                    <div class="row pt-3">
                                        <div class="col">
                                            <span class="border border-secondary rounded p-1 bg-light">
                                                <strong>Custo: </strong>{{$starship['cost_in_credits']}}
                                            </span>
                                        </div>
                                        <div class="col">
                                            <span class="border border-secondary rounded p-1 bg-light">
                                                <strong>Tamanho: </strong>{{$starship['length']}}
                                            </span>
                                        </div>
                                    </div>
                                    <div class="row pt-3">
                                        <div class="col">
                                            <span class="border border-secondary rounded p-1 bg-light">
                                                <strong>Velocidade máxima: </strong>{{$starship['max_atmosphering_speed']}}
                                            </span>
                                        </div>
                                        <div class="col">
                                            <span class="border border-secondary rounded p-1 bg-light">    
                                                <strong>Tripulação: </strong>{{$starship['crew']}}
                                            </span>
                                        </div>
                                    </div>
                                    <div class="row pt-3">
                                        <div class="col">
                                            <span class="border border-secondary rounded p-1 bg-light">
                                                <strong>Passageiros: </strong>{{$starship['passengers']}}
                                            </span>
                                        </div>
                                        <div class="col">
                                            <span class="border border-secondary rounded p-1 bg-light">
                                                <strong>Capacidade de carga: </strong>{{$starship['cargo_capacity']}}
                                            </span>
                                        </div>
                                    </div>  
                                    <div class="row pt-3">
                                        <div class="col">
                                            <span class="border border-secondary rounded p-1 bg-light">
                                                <strong>COnsumíveis: </strong>{{$starship['consumables']}}
                                            </span>
                                        </div>
                                        <div class="col">
                                            <span class="border border-secondary rounded p-1 bg-light">
                                                <strong>Hyperdrive: </strong>{{$starship['hyperdrive_rating']}}
                                            </span>
                                        </div>
                                    </div>
                                    <div class="row pt-3">
                                        <div class="col">
                                            <span class="border border-secondary rounded p-1 bg-light">
                                                <strong>MGLT: </strong>{{$starship['MGLT']}}
                                            </span>
                                        </div>
                                        <div class="col">
                                            <span class="border border-secondary rounded p-1 bg-light">
                                                <strong>Classe da nave: </strong>{{$starship['starship_class']}}
                                            </span>
                                        </div>
                                    </div>       
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>



@endsection