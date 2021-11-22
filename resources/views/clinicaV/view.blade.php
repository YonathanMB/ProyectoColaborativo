@extends('layouts.app')
@section('content')
    <div class="container">
        <h1>VISTA DE HISTORIAL CLINICO</h1>
        <div>
            <label for="">NOMBRE</label>
            <input type="text" name="nombre" value="{{ $clinica->nombre }}" readonly>
        </div>
        <div>
            <label for="">IDPACIENTE</label>
            <input type="text" name="paciente" value="{{ $clinica->idPaciente }}" readonly>
        </div>
        <div>
            <label for="">ESPECIALIDAD</label>
            <input type="text" name="especialidad" value="{{ $clinica->especialidad }}" readonly>
        </div>
        <div>
            <label for="">OBSERVACIONES</label>
            <input type="text" name="observaciones" value="{{ $clinica->observaciones }}" readonly>
        </div>
        <div>
            <a href="{{ route('clinica.listar') }}"> Back</a>
        </div>
    </div>
@endsection
