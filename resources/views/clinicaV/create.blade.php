@extends('layouts.app')
@section('content')
    <div class="container">
        <h1>CREAR NUEVO HISTORIAL CLINICO</h1>
        <form action="{{ route('clinica.guardar') }}" method="post">
            @csrf
            <div>
                <label for="">NOMBRE</label>
                <input type="text" name="nombre" value="{{ old('nombre') }}">
            </div>
            <div>
                <label for="">IDPACIENTE</label>
                <input type="text" name="paciente" value="{{ old('idPaciente') }}">
            </div>
            <div>
                <label for="">ESPECIALIDAD</label>
                <input type="text" name="especialidad" value="{{ old('especialidad') }}">
            </div>
            <div>
                <label for="">OBSERVACIONES</label>
                <input type="text" name="observaciones" value="{{ old('observaciones') }}">
            </div>
            <div>
                <input type="submit" value="Guardar">
            </div>
    </div>
@endsection
