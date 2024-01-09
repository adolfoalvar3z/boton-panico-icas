@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="row">
                <div class="col-12">
                    <div class="card mb-4">
                        <div class="card-header pb-0">
                            <h6>Formulario Edición de Visores</h6>

                        </div>
                        <div class="card-body px-0 pt-0 pb-2">
                            <div class="table-responsive p-5">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-6 offset-md-3">
                                            {{-- The best athlete wants his opponent at his best. --}}
                                            <form method="post" action="{{route('visores.update', $visor)}}">
                                                @csrf
                                                @method('put')
                                                <div class="form-group">
                                                    <label for="ip">IP Address:</label>
                                                    <input type="text" name="ip" class="form-control" id="ip" wire:model="ip" value="{{$visor->ip}}" minlength="7" maxlength="15" size="15" required pattern="^([0-9]{1,3}\.){3}[0-9]{1,3}$">
                                                    @error('ip')
                                                    <span class="error text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>

                                                <div class="form-group">
                                                    <label for="name">Name:</label>
                                                    <input type="text" name="name" class="form-control" value="{{$visor->name}}" id="name" wire:model="name" required>
                                                    @error('name')
                                                    <span class="error text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>

                                                <button type="submit" class="btn btn-info">Actualizar Visor</button>
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
