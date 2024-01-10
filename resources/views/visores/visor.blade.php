<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
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
    <style>
        .parpadeos {
            top: 0px;
            left: 0px;
            background-color: rgb(255, 68, 68);
            animation: parpadeo 7s infinite;
            cursor: pointer;
        }

        .parpadeos:hover {
            animation: none;
        }

        @keyframes parpadeo {
            0% {
                background: rgba(255, 0, 0, 0.508);
                color: white;
            }

            14% {
                background: rgba(255, 166, 0, 0.474);
            }

            28% {
                background: rgba(255, 255, 0, 0.491);
                color: black;
            }

            42% {
                background: rgba(0, 255, 0, 0.445);
                color: black;
            }

            57% {
                background: rgba(0, 0, 255, 0.491);
                color: white;
            }

            71% {
                background: rgba(76, 0, 130, 0.496);
                color: white;
            }

            85% {
                background: rgba(238, 130, 238, 0.559);
            }

            100% {
                background: rgba(255, 0, 0, 0.508);
                color: white;
            }
        }
    </style>

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

    <script src="{{ asset('js/core/bootstrap.min.js') }}"></script>

</body>

</html>
