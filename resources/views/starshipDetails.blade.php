@extends('layouts.global')
@section('content')
    <div class="container d-flex justify-content-start"">
        <a href="{{ url()->previous() }}" class="mt-2">
            <button type="button" class="btn btn-link"><< Voltar</button>
        </a>
    </div>
    <div class="container d-flex justify-content-center">
        <div class="card border-secondary mt-3 mb-5 " style="width: 80%">  
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
            <div class="text-center pb-3">
                <form action="{{ route('starship/store') }}" method="post">
                    @csrf
                    <input type="hidden" name="starship" value="{{$starship['url']}}">
                    <button type="submit" class="btn btn-primary" style="width: 150px">Salvar</button>
                </form>
            </div>
          </div>
    </div> 
@endsection