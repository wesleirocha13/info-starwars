@extends('layouts.global')

@section('content')
    <div class="container">
        <div class="card text-center mt-5">
            <div class="card-header">
                <h1 class="display-4 text-center">INFO-Star Wars</h1>    
            </div>
            <div class="card-body pt-4">
              <h5 class="card-title">Bem vindo ao INFO-Star Wars!</h5>
              <p class="card-text pt-3 lead">Aqui você poderá ver várias curiosidades sobre os planetas e naves presentes em toda a saga!</p>
              <p class="card-text lead">Para acessar o conteúdo faça login ou cadastre-se.</p>
              <div class="pt-4">
                <a href="{{ route('login') }}" class="btn btn-primary" style="width: 150px;">Fazer Login</a>
              </div>
              <div class="pt-3 pb-4">
                <a href="{{ route('register') }}" class="btn btn-primary" style="width: 150px;">Cadastre-se</a>
              </div>
            </div>
        </div>
    </div>
@endsection