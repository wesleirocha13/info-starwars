@extends('layouts.global')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center pb-4">
        <div class="col-md-8">
            <div class="card mt-5">
                <div class="card-header text-center"><h4>Cadastre-se</h4></div>
                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="form-group row pt-3">
                            <label for="name" class="col-md-4 col-form-label text-center">Nome:</label>
                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row pt-3">
                            <label for="email" class="col-md-4 col-form-label text-center">E-mail:</label>
                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row pt-3">
                            <label for="password" class="col-md-4 col-form-label text-center">Senha:</label>
                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row pt-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-center">Confirme a senha:</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="text-center pt-4">
                                <button type="submit" class="btn btn-primary" style="width: 150px;">
                                    Cadastrar
                                </button>
                            </div>
                        </div>
                        <div class="text-center pt-3">
                            <a href="{{ route('login') }}">Já possui cadastro? Então faça login</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
