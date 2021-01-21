@extends('layouts.global')
@php
    $count = 1;
@endphp
@section('content')
    <div class="container">
        <h1 class="display-4 text-center mt-2">Planetas</h1>
        <div class="table-responsive">
            <table class="table table-hover table-sm mt-3">
                <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Período de rotação</th>
                    <th scope="col">Período orbital</th>
                    <th scope="col">Detalhes</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($planets as $planet)
                    <tr>
                        <th scope="row">{{ $count++}}</th>
                        <td>{{$planet['name']}}</td>
                        <td>{{$planet['rotation_period']}}</td>
                        <td>{{$planet['orbital_period']}}</td>
                        <td>
                            <form action="{{ route('planet/show') }}" method="POST">
                                @csrf
                                <input type="hidden" name="url" value="{{ $planet['url'] }}">
                                <button type="submmit" class="btn btn-link">Detalhes</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection