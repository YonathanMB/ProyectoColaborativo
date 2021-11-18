@extends('layouts.app')
@section('content')
    <div class="container">
        <h1>EDITAR HISTORIAL</h1>
        <form action="{{ route('clinica.actualizar', $clinica->slug) }}" method="post">
            @csrf
            @method('patch')
            <div class="form-group">
                <label for="">Nombre</label>
                <input type="text" name="nombre" value="{{ $clinica->nombre }}">
            </div>
            <div class="form-group">
                <label for="">Especialidad</label>
                <input type="text" name="especialidad" value="{{ $clinica->epecialidad }}">
            </div>
            <div class="form-group">
                <label for="">Observaciones</label>
                <input type="text" name="observaciones" value="{{ $clinica->observaciones }}">
            </div>
            <div class="form-group" style="margin-top: 24px;">
                <input type="submit" value="Actualizar">
            </div>
    </div>
    </div>
@endsection
