@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-12">
                        <div class="card mb-4">
                            <div class="card-header pb-0">
                                <h6>Formulario de Edición de Usuarios</h6>

                            </div>
                            <div class="card-body px-0 pt-0 pb-2">
                                <div class="table-responsive p-5">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-6 offset-md-3">
                                                {{-- The best athlete wants his opponent at his best. --}}
                                                <form method="post" action="{{ route('usuarios.update', $usuario) }}">
                                                    @csrf
                                                    @method('put')
                                                    <div class="form-group">
                                                        <label for="name">Nombre:</label>
                                                        <input type="text" class="form-control" name="name"
                                                            id="name" wire:model="name" required
                                                            value="{{ $usuario->name }}">
                                                        @error('name')
                                                            <span class="error text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="email">Email:</label>
                                                        <input type="email" class="form-control" name="email"
                                                            id="email" wire:model="email" required
                                                            value="{{ $usuario->email }}">
                                                        @error('email')
                                                            <span class="error text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="password">Clave:</label>
                                                        <input type="password" class="form-control" name="password"
                                                            id="password" wire:model="password">
                                                        @error('password')
                                                            <span class="error text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>

                                                    <button type="submit" class="btn btn-success">Actualizar
                                                        Usuario</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
