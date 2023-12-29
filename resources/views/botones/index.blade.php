<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="bootstrap.min.css">
    <title>Botón de Pánico {{ $ip }}</title>
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
<livewire:mostrar-boton/>
</body>

</html>
