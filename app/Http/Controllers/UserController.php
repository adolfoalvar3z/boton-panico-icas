<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    //
    public function index(){
        $usuarios = User::all();
        return view('usuarios.index', compact('usuarios'));
    }

    public function new(){
        return view('usuarios.new');
    }

    public function edit($usuario)
    {
        $usuario = User::find($usuario);
        return view('usuarios.editar', compact('usuario'));
    }

    public function update(Request $request, User $usuario)
    {
        $usuario->name = $request->name;
        $usuario->email = $request->email;
        if ($request->password != null && !empty($request->password)):
            $usuario->password = $request->password;
        endif;
        $usuario->save();
        return redirect()->route('usuarios.index');
    }
    public function destroy(User $usuario)
    {
        $usuario->delete();
        return redirect()->route('usuarios.index');
    }
}
