@extends('layouts.base')

@section('title', 'editar')

@section('content')

    <div class="row justify-content-center mt-5 mb-5">
        <div class="col-6">
            <h1>Parque {{ $parque->NOMBRE_PARQUE }}</h1>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-md-6">

            <form class="" action="{{ route("parque.update", $parque) }}" method="POST">
                @method('PUT')
                @csrf




                <div class="mb-3">
                    <label for="ID_PARQUE" class="form-label fw-bold">Id</label>
                    <input type="text" class="form-control" id="ID_PARQUE" value="{{ $parque->ID_PARQUE }}" readonly>
                </div>

                <div class="mb-3">
                    <label for="NOMBRE_PARQUE" class="form-label fw-bold">Nombre del parque</label>
                    <input type="text" class="form-control @error('NOMBRE_PARQUE') is-invalid @enderror" name="NOMBRE_PARQUE" value="{{ old('NOMBRE_PARQUE', $parque->NOMBRE_PARQUE) }}">
                    @error('NOMBRE_PARQUE')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="FECHA_VISITA" class="form-label fw-bold">Fecha de Visita</label>
                    <input type="date" class="form-control @error('FECHA_VISITA') is-invalid @enderror" name="FECHA_VISITA" value="{{ old('FECHA_VISITA', $parque->FECHA_VISITA) }}" readonly>
                    @error('FECHA_VISITA')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="VALOR_ENTRADA" class="form-label fw-bold">Valor entrada $</label>
                    <input type="number" class="form-control @error('VALOR_ENTRADA') is-invalid @enderror" name="VALOR_ENTRADA" value="{{ old('VALOR_ENTRADA', $parque->VALOR_ENTRADA) }}">
                    @error('VALOR_ENTRADA')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="DIRECCION_PARQUE" class="form-label fw-bold">Dirección</label>
                    <input type="text" class="form-control @error('DIRECCION_PARQUE') is-invalid @enderror" name="DIRECCION_PARQUE" value="{{ old('DIRECCION_PARQUE', $parque->DIRECCION_PARQUE) }}">
                    @error('DIRECCION_PARQUE')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="RECORRIDO_REALIZADO" class="form-label fw-bold">Recorrido Realizado</label>
                    <input type="text" class="form-control @error('RECORRIDO_REALIZADO') is-invalid @enderror" name="RECORRIDO_REALIZADO" value="{{ old('RECORRIDO_REALIZADO', $parque->RECORRIDO_REALIZADO) }}">
                    @error('RECORRIDO_REALIZADO')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="KILOMETROS_RECORRIDOS" class="form-label fw-bold">Kilometros Recorridos</label>
                    <input type="number" class="form-control @error('KILOMETROS_RECORRIDOS') is-invalid @enderror" name="KILOMETROS_RECORRIDOS" value="{{ old('KILOMETROS_RECORRIDOS', $parque->KILOMETROS_RECORRIDOS) }}">
                    @error('KILOMETROS_RECORRIDOS')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="row justify-content-center mt-5">
                    <div class="col text-start">
                        <a type="button" class="btn btn-outline-dark" href="{{ route('parque.show', $parque) }}">
                            <i class="bi bi-arrow-left"></i> Volver
                        </a>
                    </div>
                    <div class="col text-end">
                        <button type="submit" class="btn btn-outline-success"><i class="bi bi-floppy"></i> Guardar
                        </button>
                    </div>
                </div>

            </form>
        </div>


        @if($errors->any())
            {!! implode('', $errors->all('<div>:message</div>')) !!}
        @endif


    </div>
@stop


