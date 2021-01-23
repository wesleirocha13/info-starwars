@extends('layouts.global')
@php
    $count = 1;
@endphp
@section('content')
    <div class="container pb-5">
        @if (Session::has('success'))
            <script>
                $(document).ready(function() {
                    $('#modalSuccess').modal('show');
                })
            </script>
            <div id="modalSuccess" class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="false">
                <div class="modal-dialog modal-sm">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title text-success">Sucesso:</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body text-success">
                            <p><strong>{{ session()->get('success') }}</strong></p>
                        </div>
                        <div class="modal-footer">
                            <a class="btn btn-primary btn-sm" href="{{ route('saved') }}">Ver salvos</a>
                        </div>
                    </div>
                </div>
            </div>
        @elseif (Session::has('failed'))
            <script>
                $(document).ready(function() {
                    $('#modalError').modal('show');
                })
            </script>
            <div id="modalError" class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="false">
                <div class="modal-dialog modal-sm">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title text-danger">Erro:</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body text-danger">
                            <p><strong>{{ session()->get('failed') }}</strong></p>
                        </div>
                    </div>
                </div>
            </div>     
        @endif
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