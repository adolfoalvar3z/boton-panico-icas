<?php

namespace App\Http\Controllers;

use App\Models\Boton;
use App\Models\Reporte;
use Illuminate\Http\Request;

class BotonController extends Controller
{
    public function index()
    {
        $botones = Boton::withTrashed()->get();
        return view('botones.index', compact('botones'));
    }

    public function show($boton)
    {
        $boton = Boton::find($boton);
        return view('botones.show', compact('boton'));
    }

    public function new()
    {
        return view('botones.new');
    }

    public function edit($boton)
    {
        $boton = Boton::find($boton);
        return view('botones.editar', compact('boton'));
    }

    public function update(Request $request, Boton $boton)
    {
        try {
            $validatedData = $request->validate([
                'ip' => 'required|ip',
                'name' => 'required|max:255',
            ]);

            $boton->ip = $validatedData['ip'];
            $boton->name = $validatedData['name'];
            $boton->save();

            return redirect()->route('botones.index');
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => 'Error al actualizar el botón: ' . $e->getMessage()]);
        }
    }

    public function destroy(Boton $boton)
    {
        $boton->delete();
        return redirect()->route('botones.index');
    }

    public function revive($boton)
    {
        $boton = Boton::onlyTrashed()->where('id', $boton)->first(); // Recuperar el botón eliminado
        $boton->restore(); // Restaurar el botón (establece deleted_at a null)
        return redirect()->route('botones.index');
    }

    public function boton()
    {
        return view('botones.boton');
    }
}
