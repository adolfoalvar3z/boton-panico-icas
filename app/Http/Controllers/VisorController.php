<?php

namespace App\Http\Controllers;

use App\Models\Visor;
use App\Models\Reporte;
use Illuminate\Http\Request;

class VisorController extends Controller
{
    //

    public function index()
    {
        $visores = Visor::all();
        return view('visores.index', compact('visores'));
    }


    public function new()
    {
        return view('visores.new');
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

    public function visor()
    {
        return view('visores.visor');
    }




}
