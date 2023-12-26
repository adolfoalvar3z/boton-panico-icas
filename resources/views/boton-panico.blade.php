<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="bootstrap.min.css">
    <title>Botón de Pánico {{ $ip }}</title>
    <!-- Styles -->
    <style>
        body {
            background: linear-gradient(to bottom, #b3d9ff, #0099cc);
        }

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
        .redondo:hover{
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
    <div class="container">
        <div class="row justify-content-between pt-3 text-white">
            <div class="col-8">
                <span class="fw-bolder">IP: {{ $ip }}</span> <br>
                <span class="">Sala 06, digitador</span> <br>
                <span class="fw-bolder">
                    @if ($ip == $ip)
                        VÁLIDADO
                    @else
                        MÁQUINA NO VÁLIDA
                    @endif
                </span>
            </div>

            <div class="col-4">
                @if ($ip == $ip)
                    <button class="btn btn-danger redondo">ALERTAR</button>
                @endif
            </div>
            <div class="col-12 text-center fw-light">
                <span class="fs-15">Desarrollado por el equipo de informática de la Corte de Apelaciones de Santiago</span>
            </div>
        </div>
    </div>
</body>

</html>
