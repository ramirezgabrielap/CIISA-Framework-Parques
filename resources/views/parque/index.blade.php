@extends('layouts.base')

@section('title', 'mis recorridos')

@section('content')

    <div class="row justify-content-center mt-5 mb-5">
        <div class="col-6">
            <h1>Mis recorridos</h1>
        </div>
    </div>

    <div class="row justify-content-center mb-5">
        <div class="col-6">
            <form method="GET">
                <div class="row">
                    <div class="col-6">
                        <input type="text" class="form-control" placeholder="Buscar" name="buscar">
                    </div>
                    <div class="col-2">
                        <button type="submit" class="btn btn-primary mb-3"><i class="bi bi-search"></i></button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-md-6">
            <table class="table table-hover">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Fecha</th>
                    <th scope="col"></th>
                </tr>
                </thead>
                <tbody>
                @foreach($parques as $parque)
                    <tr>
                        <th scope="row">{{ $parque->ID_PARQUE }}</th>
                        <td>{{ $parque->NOMBRE_PARQUE }}</td>
                        <td>{{ $parque->FECHA_VISITA}}</td>
                        <td>
                            <a type="button" class="btn btn-sm btn-outline-primary"
                               href="{{ route('parque.show', $parque) }}">
                                <i class="bi bi-eye-fill"></i>
                            </a>
                        </td>
                    </tr>
                @endforeach
                </tbody>

            </table>

            <div class="row justify-content-center mt-5">
                <div class="col text-start">
                    <a type="button" class="btn btn-outline-success" href="{{ route('parque.create') }}">
                        <i class="bi bi-file-earmark-plus"></i> Nuevo Registro
                    </a>
                </div>
            </div>
        </div>

    </div>
@stop
