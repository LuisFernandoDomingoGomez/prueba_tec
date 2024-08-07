@extends('layouts.app')

@section('template_title')
    {{ $empleado->name ?? __('Show') . " " . __('Empleado') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">Detalles del Empleado</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('empleados.index') }}"> {{ __('Atras') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                        <div class="form-group mb-2 mb20">
                            <strong>Nombre:</strong>
                            {{ $empleado->name }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Empresa:</strong>
                            {{ $empleado->empresa->name }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Genero:</strong>
                            {{ $empleado->genero }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Fecha de Nacimiento:</strong>
                            {{ $empleado->fecha_nac }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>CURP:</strong>
                            {{ $empleado->curp }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Telefono de contacto:</strong>
                            {{ $empleado->telefono }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Sueldo diario:</strong>
                            ${{ $empleado->sueldo_diario }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
