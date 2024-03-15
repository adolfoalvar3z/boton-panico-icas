@extends('layouts.app')

@section('content')
<style>
    .truncate {
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
        max-width: 10px; /* Ajusta el ancho máximo según tus necesidades */
    }
</style>

    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-12">
                        <div class="card mb-4">
                            <div class="card-header pb-0">
                                <h6>Tabla de Reportes</h6>
                            </div>
                            <div class="card-body px-0 pt-0 pb-2">
                                <div class="table-responsive p-5">
                                    <table id="example" class="table table-sm table-hover">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Máquina Reporta</th>
                                                <th>IP Reporte</th>
                                                <th>Máquina Asiste</th>
                                                <th>IP Asiste</th>
                                                <th>Status</th>
                                                <th>Hora y Fecha Reporte</th>
                                                <th>Hora y Fecha Actualización</th>
                                                <th>observacion</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($reportes as $reporte)
                                                <tr>
                                                    <td>{{ $reporte->id }}</td>
                                                    <td>{{ $reporte->nombre_maquina_reporta }}</td>
                                                    <td>{{ $reporte->ip_reporta }}</td>
                                                    <td>{{ $reporte->nombre_maquina_asiste }}</td>
                                                    <td>{{ $reporte->ip_asiste }}</td>
                                                    <td>{{ $reporte->status }}</td>
                                                    <td>{{ optional($reporte->created_at)->format('d-m-Y H:i:s') }}</td>
                                                    <td>{{ optional($reporte->updated_at)->format('d-m-Y H:i:s') }}</td>
                                                    <td class="truncate">{{ $reporte->observacion }}</td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>ID</th>
                                                <th>Máquina Reporta</th>
                                                <th>IP Reporte</th>
                                                <th>Máquina Asiste</th>
                                                <th>IP Asiste</th>
                                                <th>Status</th>
                                                <th>Hora y Fecha Reporte</th>
                                                <th>Hora y Fecha Actualización</th>
                                                <th>observacion</th>
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
