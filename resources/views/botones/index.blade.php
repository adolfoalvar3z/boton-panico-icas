<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Botón de Pánico {{ $ip }}</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" type="image/png" href="{{ asset('img/favicon.png') }}">
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <!-- CSS Files -->
    <link id="pagestyle" href=" {{ asset('css/soft-ui-dashboard.css') }}" rel="stylesheet" />
    <!-- Styles -->
    <style>
        .redondo {
            /*hacer boton redondo*/
            border-radius: 100%;
            width: 70px;
            height: 70px;
            font-size: 10px;
            font-weight: bold;
            border: 2px solid white;
            /*parpadear tenuemente*/
            animation: parpadeo 1s infinite;
            cursor: pointer;
        }

        .redondo:hover {
            animation: none;
        }

        @keyframes parpadeo {
            0% {
                opacity: 1;
            }

            25% {
                opacity: 0.10;
            }

            100% {
                opacity: 1;
            }
        }

        .fs-15 {
            font-size: 10px;
        }
    </style>
</head>

<body>
    <livewire:mostrar-boton />
</body>

</html>
