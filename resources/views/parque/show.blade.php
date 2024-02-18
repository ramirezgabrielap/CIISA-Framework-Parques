@extends('layouts.base')

@section('title', 'mostrar')

@section('content')

    <div class="row justify-content-center mt-5 mb-5">
        <div class="col-6">
            <h1>Parque {{ $parque->NOMBRE_PARQUE }}</h1>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-md-6">

            <div class="mb-3">
                <label for="ID_PARQUE" class="form-label fw-bold">Id</label>
                <input type="text" readonly class="form-control-plaintext" id="ID_PARQUE" value="{{ $parque->ID_PARQUE }}">
            </div>

            <div class="mb-3">
                <label for="NOMBRE_PARQUE" class="form-label fw-bold">Nombre del parque</label>
                <input type="text" readonly class="form-control-plaintext"
                       name="NOMBRE_PARQUE" value="{{ $parque->NOMBRE_PARQUE }}">
            </div>

            <div class="mb-3">
                <label for="FECHA_VISITA" class="form-label fw-bold">Fecha de Visita</label>
                <input type="date" readonly class="form-control-plaintext" name="FECHA_VISITA"
                       value="{{ $parque->FECHA_VISITA }}">
            </div>

            <div class="mb-3">
                <label for="VALOR_ENTRADA" class="form-label fw-bold">Valor entrada $</label>
                <input type="number" readonly class="form-control-plaintext"
                       name="VALOR_ENTRADA" value="{{$parque->VALOR_ENTRADA }}">
            </div>

            <div class="mb-3">
                <label for="DIRECCION_PARQUE" class="form-label fw-bold">Dirección</label>
                <input type="text" readonly class="form-control-plaintext"
                       name="DIRECCION_PARQUE" value="{{$parque->DIRECCION_PARQUE }}">
            </div>

            <div class="mb-3">
                <label for="RECORRIDO_REALIZADO" class="form-label fw-bold">Recorrido Realizado</label>
                <input type="text" readonly class="form-control-plaintext"
                       name="RECORRIDO_REALIZADO"
                       value="{{ $parque->RECORRIDO_REALIZADO }}">
            </div>

            <div class="mb-3">
                <label for="KILOMETROS_RECORRIDOS" class="form-label fw-bold">Kilometros Recorridos</label>
                <input type="number" readonly class="form-control-plaintext"
                       name="KILOMETROS_RECORRIDOS"
                       value="{{ $parque->KILOMETROS_RECORRIDOS }}">
            </div>

            <div class="row justify-content-center mt-5">
                <div class="col text-start">
                    <a type="button" class="btn btn-outline-dark" href="{{ route('parque.index') }}">
                        <i class="bi bi-arrow-left"></i> Volver
                    </a>
                </div>
                <div class="col text-center">
                    <button type="button" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        <i class="bi bi-trash"></i>
                    </button>
                </div>
                <div class="col text-end">
                    <a type="button" class="btn btn-outline-warning" href="{{ route('parque.edit', $parque) }}">
                        <i class="bi bi-pencil"></i> Editar
                    </a>
                </div>
            </div>


        </div>

    </div>


    <!-- Button trigger modal -->
{{--    href="{{ route('parque.destroy', $parque) }}"--}}

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Eliminar "{{ $parque->NOMBRE_PARQUE }}"</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    ¿Esta seguro de eliminar este registro?
                </div>
                <div class="modal-footer">

                    <div class="col text-start">
                        <form method="POST" action="{{ route('parque.destroy', $parque) }}">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-outline-danger"><i class="bi bi-trash"></i> Eliminar</button>
                        </form>
                    </div>

                    <div class="col text-end">
                        <button type="button" class="btn btn-outline-dark" data-bs-dismiss="modal"><i class="bi bi-x-lg"></i> Cancelar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>


@stop


