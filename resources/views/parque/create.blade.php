@extends('layouts.base')

@section('title', 'crear')

@section('content')

    <div class="row justify-content-center mt-5 mb-5">
        <div class="col-6">
            <h1>Nuevo Registro</h1>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-md-6">

            <form class="" action="{{ route("parque.store") }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label for="NOMBRE_PARQUE" class="form-label fw-bold">Nombre del parque</label>
                    <input type="text" class="form-control @error('NOMBRE_PARQUE') is-invalid @enderror" name="NOMBRE_PARQUE" placeholder="Parque O'Higgins" value="{{old('NOMBRE_PARQUE')}}">
                    @error('NOMBRE_PARQUE')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>


                <div class="mb-3">
                    <label for="FECHA_VISITA" class="form-label fw-bold">Fecha de Visita</label>
                    <input type="date" class="form-control @error('FECHA_VISITA') is-invalid @enderror" name="FECHA_VISITA" value="{{old('FECHA_VISITA')}}">
                    @error('FECHA_VISITA')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="VALOR_ENTRADA" class="form-label fw-bold">Valor entrada $</label>
                    <input type="number" class="form-control @error('VALOR_ENTRADA') is-invalid @enderror" name="VALOR_ENTRADA" placeholder="1000" value="{{old('VALOR_ENTRADA')}}">
                    @error('VALOR_ENTRADA')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="DIRECCION_PARQUE" class="form-label fw-bold">Dirección</label>
                    <input type="text" class="form-control @error('DIRECCION_PARQUE') is-invalid @enderror" name="DIRECCION_PARQUE" placeholder="Luis Cousiño, Santiago" value="{{old('DIRECCION_PARQUE')}}">
                    @error('DIRECCION_PARQUE')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="RECORRIDO_REALIZADO" class="form-label fw-bold">Recorrido Realizado</label>
                    <input type="text" class="form-control @error('RECORRIDO_REALIZADO') is-invalid @enderror" name="RECORRIDO_REALIZADO" placeholder="Caminata 3x3" value="{{old('RECORRIDO_REALIZADO')}}">
                    @error('RECORRIDO_REALIZADO')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="KILOMETROS_RECORRIDOS" class="form-label fw-bold">Kilometros Recorridos</label>
                    <input type="number" class="form-control @error('KILOMETROS_RECORRIDOS') is-invalid @enderror" name="KILOMETROS_RECORRIDOS" placeholder="2" value="{{old('KILOMETROS_RECORRIDOS')}}">
                    @error('KILOMETROS_RECORRIDOS')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="row justify-content-center mt-5">
                    <div class="col text-start">
                        <a type="button" class="btn btn-outline-dark" href="{{ route('parque.index') }}">
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

    </div>
@stop
