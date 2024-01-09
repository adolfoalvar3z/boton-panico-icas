@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-12">
                        <div class="card mb-4">
                            <div class="card-header pb-0">
                                <div class="row text-center">
                                    <div class="col-sm-6 col-lg-6">
                                        <h6>Usuarios Registrados</h6>

                                    </div>
                                    <div class="col-sm-6 col-lg-6">
                                        <a href="{{ route('usuarios.new') }}"><button class="btn btn-success">Agregar Nuevo
                                                Usuario</button></a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body px-0 pt-0 pb-2">
                                <div class="table-responsive p-5">
                                    <table id="example" class="table table-striped " wire:loading>
                                        <thead>
                                            <tr>
                                                <th>Nombre</th>
                                                <th>Email</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($usuarios as $user)
                                                <tr>
                                                    <td>{{ $user->name }}</td>
                                                    <td>{{ $user->email }}</td>

                                                    <td>
                                                        <div class="btn-group" role="group" aria-label="Basic example">
                                                            <a href="{{ route('usuarios.edit', $user->id) }}"> <button
                                                                    class="btn btn-warning" alt="Editar Registro"
                                                                    title="Editar Registro">
                                                                    <i class="fas fa-pen fa-2xl"></i>
                                                                </button></a>
                                                            <form action="{{ route('usuarios.destroy', $user->id) }}"
                                                                method="post">
                                                                @csrf
                                                                @method('delete')
                                                                <button class="btn btn-danger" alt="Eliminar"
                                                                    title="Eliminar">
                                                                    <i class="fas fa-trash fa-2xl"></i>

                                                                </button>
                                                            </form>
                                                        </div>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>Nombre</th>
                                                <th>Email</th>
                                                <th></th>
                                            </tr>
                                        </tfoot>
                                    </table>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
