<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('img/apple-icon.png') }}">
    <link rel="icon" type="image/png" href="{{ asset('img/favicon.png') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>
        Visor - Sistema de botón de Pánico ICAS
    </title>
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <!-- CSS Files -->
    <link id="pagestyle" href=" {{ asset('css/soft-ui-dashboard.css') }}" rel="stylesheet" />
</head>

<body>
    <div class="container-fluid py-4">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-12">
                            <div class="card mb-4">
                                <div class="card-header pb-0">
                                    <h6>Formulario de Observación a Alerta #{{ $reporte->id }} - Maquina que Reportó:
                                        {{ $reporte->nombre_maquina_reporta }}</h6>
                                </div>
                                <div class="card-body px-0 pt-0 pb-2">
                                    <div class="table-responsive p-5">
                                        <div class="row">
                                            <div class="col-md-6 offset-md-3">
                                                <form method="post" action="{{route('reporte.new', $reporte)}}">
                                                    @csrf
                                                    @method('put')
                                                    <div class="form-group">
                                                        <label for="name">Observación:</label>

                                                        <textarea type="text" id="observacion" name="observacion" class="form-control" rows="10" required></textarea>
                                                    </div>

                                                    <div>
                                                        @error('observacion')
                                                            <span class="error text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                    <div>
                                                        <button type="submit" class="btn btn-primary btn-lg">Guardar
                                                            Observación a Alerta</button>
                                                        <a class="btn btn-info btn-lg"
                                                            href="{{ route('visor') }}">Volver a Visor</a>
                                                    </div>

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
    <footer class="footer pt-3">
        <div class="container-fluid">
            <div class="row align-items-center justify-content-lg-between">
                <div class="col-lg-12 mb-lg-0 mb-4">
                    <div class="copyright text-center text-sm text-muted text-lg-start">
                        - Informática Corte de Apelaciones de Santiago - Unidad de Servicios -
                    </div>
                </div>
            </div>
        </div>
    </footer>
    </div>
</body>

</html>
