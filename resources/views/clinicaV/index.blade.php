@extends('layouts.app')
@section('content')
    <div class="container">
        <h1>LISTA DE PACIENTES</h1>
        <table>
            <tr>
                <th>Nro </th>
                <th>Nombre </th>
                <th>IdPaciente </th>
                <th>Especialidad </th>
                <th>Observaciones </th>
                <th>Acciones</th>
            </tr>
            <tbody>
                @forelse ($clinicas as $clinica)
                    <tr>
                        <td>{{ $loop->index + 1 }}</td>
                        <td>{{ $clinica->nombre }}</td>
                        <td>{{ $clinica->especialidad }}</td>
                        <td>{{ $clinica->observaciones }}</td>
                        <td>
                            <a href="{{ route('clinica.editar', $clinica->slug) }}">Editar</a>
                            <a href="{{ route('clinica.ver', $clinica->slug) }}">Ver</a>
                            <a href="" onclick="if(confirm('¿Eliminar {{ $clinica->nombre }} ?'))event.preventDefault();
    document.getElementById('borrar-{{ $clinica->slug }}').submit();">Eliminar</a>
                            <form id="borrar-{{ $clinica->slug }}" method="post"
                                action="{{ route('clinica.eliminar', $clinica->slug) }}">
                                @csrf

                                @method('DELETE')

                        </td>
                    </tr>
                @empty
                    <p> No hay historial clinico!</p>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection
