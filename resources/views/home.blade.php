@extends('layouts.app')

@section('content')
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
                                    <table id="example" class="table table-striped" style="width:100%">
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
                                                    <td>{{ $reporte->created_at->format('d-m-Y H:i:s') }}</td>
                                                    <td>{{ $reporte->updated_at->format('d-m-Y H:i:s') }}</td>
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

