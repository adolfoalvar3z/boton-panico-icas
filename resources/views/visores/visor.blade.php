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
        <livewire:mostrar-visor />
        <!--cierretabla-->
        <footer class="footer pt-3  ">
            <div class="container-fluid">
                <div class="row align-items-center justify-content-lg-between">
                    <div class="col-lg-6 mb-lg-0 mb-4">
                        <div class="copyright text-center text-sm text-muted text-lg-start">
                            - Desarrollado por Equipo de Informática de la Corte de Apelaciones de Informática - Unidad
                            de
                            Servicios -
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <ul class="nav nav-footer justify-content-center justify-content-lg-end">
                            <li class="nav-item">
                                <a href="{{ url('/') }}" class="nav-link text-muted" target="_blank">Inicio</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('boton') }}" class="nav-link text-muted" target="_blank">Vista
                                    Botón</a>
                            </li>
                            <li class="nav-item">
                                <a href="https://www.cortesantiago.cl" class="nav-link text-muted" target="_blank">Sitio
                                    ICAS</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</body>

</html>
