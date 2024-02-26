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
                                        <h6>Visores Registrados</h6>

                                    </div>
                                    <div class="col-sm-6 col-lg-6">
                                        <a href="{{ route('visores.new') }}"><button class="btn btn-info btn-lg">Agregar Nuevo
                                                Visor</button></a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body px-0 pt-0 pb-2">
                                <div class="table-responsive p-5">
                                    <table id="example" class="table table-sm table-hover">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>IP</th>
                                                <th>Name</th>
                                                <th>Fec. Creación</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($visores as $visor)
                                                <tr class="{{ $visor->deleted_at == null ? '' : 'text-white bg-dark' }}">
                                                    <td>{{ $visor->id }}</td>
                                                    <td>{{ $visor->ip }}</td>
                                                    <td>{{ $visor->name }}</td>
                                                    <td>{{ $visor->created_at }}</td>
                                                    <td>
                                                        <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                                        @if(!$visor->deleted_at)

                                                            <a href="{{ route('visores.edit', $visor->id) }}">
                                                                <button class="btn btn-outline-warning" alt="Editar Registro"
                                                                    title="Editar Registro">
                                                                    <i class="fas fa-pen fa-2xl"></i>
                                                                </button>
                                                            </a>
                                                            @endif

                                                            @if (!$visor->deleted_at)
                                                                <form action="{{ route('visores.destroy', $visor->id) }}"
                                                                    method="post">
                                                                    @csrf
                                                                    @method('delete')
                                                                    <button class="btn btn-outline-danger" alt="Eliminar"
                                                                        title="Eliminar">
                                                                        <i class="fas fa-trash fa-2xl"></i>

                                                                    </button>
                                                                </form>
                                                            @endif
                                                            @if ($visor->deleted_at)
                                                                <form action="{{ route('visores.revive', $visor->id) }}"
                                                                    method="post">
                                                                    @csrf
                                                                    @method('put')
                                                                    <button class="btn btn-outline-info" alt="Revivir"
                                                                        title="Revivir">
                                                                        <i class="fas fa-arrow-up fa-2xl"></i>
                                                                    </button>
                                                                </form>
                                                            @endif
                                                        </div>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>#</th>
                                                <th>IP</th>
                                                <th>Name</th>
                                                <th>Hora y Fecha de Creación</th>
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
