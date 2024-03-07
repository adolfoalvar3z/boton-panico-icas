<?php

namespace App\Http\Controllers;

use App\Models\Visor;
use App\Models\Reporte;
use Illuminate\Http\Request;

class VisorController extends Controller
{

    public function index()
    {
        $visores = Visor::withTrashed()->get();
        return view('visores.index', compact('visores'));
    }

    public function new()
    {
        return view('visores.new');
    }

    //reporte donde se ingresa observacion de alarma por parte de gendarmería o seguridad
    public function reportar($reporte)
    {
        $ip = $_SERVER['REMOTE_ADDR'];
        $maquina = Visor::where('ip', $ip)->first();
        $reporte = Reporte::find($reporte);

        if ($maquina != null) {
            if ($reporte->observacion != null) {
                return redirect()->route('visor');
            }
            return view('visores.reportar', compact('reporte'));

        } else {
            return redirect()->route('inicio');
        }
    }

    public function newReport(Request $request, Reporte $reporte)
    {
        try {
            $validatedData = $request->validate([
                'observacion' => 'required|max:255',
            ]);

            $reporte->observacion = $validatedData['observacion'];
            $reporte->save();

            return redirect()->route('visor');
        } catch (\Exception $e) {
            // Aquí puedes manejar el error como quieras. Por ejemplo, puedes redirigir al usuario a una página de error y mostrarle el mensaje de error.
            return redirect()->back()->withErrors(['error' => 'Error al ingresar observación e: ' . $e->getMessage()]);
        }
    }

    public function edit($visor)
    {
        $visor = Visor::find($visor);
        return view('visores.editar', compact('visor'));
    }

    public function update(Request $request, Visor $visor)
    {
        try {
            $visor->ip = $request->ip;
            $visor->name = $request->name;
            $visor->save();

            return redirect()->route('visores.index');
        } catch (\Exception $e) {
            // Aquí puedes manejar el error como quieras. Por ejemplo, puedes redirigir al usuario a una página de error y mostrarle el mensaje de error.
            return redirect()->back()->withErrors(['error' => 'Error al actualizar el visor: ' . $e->getMessage()]);
        }
    }

    public function destroy(Visor $visor)
    {
        $visor->delete();
        return redirect()->route('visores.index');
    }

    public function revive($visor)
    {
        $visor = Visor::onlyTrashed()->where('id', $visor)->first(); // Recuperar el botón eliminado
        $visor->restore(); // Restaurar el botón (establece deleted_at a null)
        return redirect()->route('visores.index');
    }

    public function visor()
    {
        return view('visores.visor');
    }
}
