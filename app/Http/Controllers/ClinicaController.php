<?php

namespace App\Http\Controllers;

use App\Models\clinica;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ClinicaController extends Controller
{
    public function crearClinica()
    {
        return view('clinicaV.create');
    }
    public function registrarClinica(Request $request)
    {
        $reglas = [
            'nombre' => 'required',
            'idPaciente' => 'required',
            'especialidad' => 'required',
            'observaciones' => 'required'
            //'email' => 'required|email'
        ];
        $mensajeDeError = [
            'required' => 'Ingreso de datos erróneo'
        ];
        $this->validate($request, $reglas, $mensajeDeError);
        clinica::create([
            'nombre' => $request->nombre,
            'slug' => Str::slug($request->nombre),
            'idPaciente' => $request->idPaciente,
            'especialidad' => $request->especialidad,
            'observaciones' => $request->observaciones
            //'email' => strtolower($request->email)
        ]);
        $this->mensaje('message', 'Historial clinico creado correctamente!');
        return redirect()->back();
    }
    public function listarClinica()
    {
        $clinicas = clinica::toBase()->get();
        return view('clinicaV.index', compact('clinicas'));
    }
    public function formularioEditarClinica(clinica $clinica)
    {
        echo "Formulario De Edicion";
        return view('clinicaV.edit', compact('clinica'));
    }
    public function ActualizarClinica(Request $request, clinica $clinica)
    {
        echo "FORMULARIO PARA EDITAR HISTORIAL CLINICO";
        $reglas = [
            'nombre' => 'required',
            'idPaciente' => 'required',
            'especialidad' => 'required',
            'observaciones' => 'required'
        ];
        $mensajeDeError = [
            'required' => 'Ingreso de datos erróneo'
        ];
        $this->validate($request, $reglas, $mensajeDeError);
        $clinica->update([

            'nombre' => $request->nombre,
            'idPaciente' => $request->idPaciente,
            'especialidad' => $request->especialidad,
            'observaciones' => $request->observaciones
            //'email' => strtolower($request->email)
        ]);
        $this->mensaje('message', 'Cliente Actualizado Correctamente!');
        return redirect()->back();
    }
    public function VerCliente(clinica $clinica)
    {
        return view('clinicaV.view', compact('clinica'));
    }
    public function EliminarCliente(clinica $clinica)
    {
        $clinica->delete();
        $this->mensaje('message', 'datos de Clinica Eliminado Correctamente');
        return redirect()->back();
    }
    public function mensaje(string $nombre = null, string $mensaje = null)
    {
        return session()->flash($nombre, $mensaje);
    }
}
