@extends('layouts.global')
@php
    $count = 1;
@endphp
@section('content')
    <div class="container">
        <h1 class="display-4 text-center mt-2">Naves</h1>    
        <div class="table-responsive">
            <table class="table table-hover table-sm mt-3">
                <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Modelo</th>
                    <th scope="col">Fabricante</th>
                    <th scope="col">Detalhes</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($starships as $starship)
                    <tr>
                        <th scope="row">{{ $count++}}</th>
                        <td>{{$starship['name']}}</td>
                        <td>{{$starship['model']}}</td>
                        <td>{{$starship['manufacturer']}}</td>
                        <td>
                            <form action="{{ route('starship/show') }}" method="POST">
                                @csrf
                                <input type="hidden" name="url" value="{{ $starship['url'] }}">
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