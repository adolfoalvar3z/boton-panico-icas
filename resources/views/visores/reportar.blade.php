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
                                        <div wire:snapshot="{&quot;data&quot;:{&quot;name&quot;:&quot;&quot;,&quot;email&quot;:&quot;&quot;,&quot;password&quot;:&quot;&quot;},&quot;memo&quot;:{&quot;id&quot;:&quot;7wk6JhZI9gaSdCVfIGs3&quot;,&quot;name&quot;:&quot;create-user&quot;,&quot;path&quot;:&quot;usuarios\/new&quot;,&quot;method&quot;:&quot;GET&quot;,&quot;children&quot;:[],&quot;scripts&quot;:[],&quot;assets&quot;:[],&quot;errors&quot;:[],&quot;locale&quot;:&quot;en&quot;},&quot;checksum&quot;:&quot;afdceb3d4901fdbe459f1709d285bc1790051f58484e5edcd1bbb3160478d8dc&quot;}"
                                            wire:effects="[]" wire:id="7wk6JhZI9gaSdCVfIGs3" class="container">
                                            <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
                                            <div class="row">
                                                <div class="col-md-6 offset-md-3">
                                                    <form wire:submit="save">
                                                        <div class="form-group">
                                                            <label for="name">Observación:</label>

                                                            <textarea type="text" wire:model="title"
                                                                class="form-control" rows="15">{{$reporte->observacion}}</textarea>
                                                        </div>


                                                        <button type="submit" class="btn btn-primary btn-lg">Guardar
                                                            Observación a Alerta</button>
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
