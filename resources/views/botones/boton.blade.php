<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="{{ asset('img/favicon.png') }}">
    <title>
        Botón - Sistema de botón de Pánico ICAS
    </title>
    <!--     Fonts and icons     -->
    <!-- CSS Files -->
    <style>
        .btn-danger:hover,
        .btn.bg-gradient-danger:hover {
            background-color: #ea0606;
            border-color: #ea0606;
        }

        .btn-danger .btn.bg-outline-danger,
        .btn.bg-gradient-danger .btn.bg-outline-danger {
            border: 1px solid #ea0606;
        }

        .btn-danger:not(:disabled):not(.disabled).active,
        .btn-danger:not(:disabled):not(.disabled):active,
        .show>.btn-danger.dropdown-toggle,
        .btn.bg-gradient-danger:not(:disabled):not(.disabled).active,
        .btn.bg-gradient-danger:not(:disabled):not(.disabled):active,
        .show>.btn.bg-gradient-danger.dropdown-toggle {
            color: color-yiq(#ea0606);
            background-color: #ea0606;
        }

        .btn-danger.focus,
        .btn-danger:focus,
        .btn.bg-gradient-danger.focus,
        .btn.bg-gradient-danger:focus {
            color: #fff;
        }

        .btn-outline-danger {
            box-shadow: none;
        }

        .btn-outline-danger:hover:not(.active) {
            background-color: transparent;
            opacity: .75;
            box-shadow: none;
            color: #ea0606;
        }

        .bg-gradient-danger {
            background-image: linear-gradient(310deg, #ea0606 0%, #ff667c 100%);
        }

        .text-white {
            color: #fff !important;
        }

        /*# sourceMappingURL=dashboard-free.css.map */
        .redondo {
            /*hacer boton redondo*/
            text-align: center;
            border-radius: 10%;
            width: 70px;
            height: 30px;
            font-size: 10px;
            text-shadow: #000 5px 5px 3px;
            font-weight: bold;
            border: 4px solid #ff4500;
            /*parpadear tenuemente*/
            animation: parpadeoredondo 1s infinite;
            cursor: pointer;
        }

        .bg-gradient {
            background-image: var(--bs-gradient) !important;
        }

        .redondo:hover {
            animation: none;
        }

        .fw-bolder {
            font-weight: 700 !important;
            font-size: 12px
        }

        @keyframes parpadeoredondo {
            0% {
                opacity: 1;
            }

            25% {
                background: rgba(0, 0, 255, 0.491);
                color: white;
                border: 4px solid #0057f7;

            }

            100% {
                opacity: 1;
            }
        }

        .parpadeos {
            top: 0px;
            left: 0px;
            background-color: rgb(255, 68, 68);
            animation: parpadeogay 7s infinite;
            cursor: pointer;
        }

        .parpadeos:hover {
            animation: none;
        }

        button {
            border-radius: 0;
        }

        button:focus:not(:focus-visible) {
            outline: 0;
        }

        button,
        [type="button"],
        [type="reset"],
        [type="submit"] {
            -webkit-appearance: button;
        }

        button:not(:disabled),
        [type="button"]:not(:disabled),
        [type="reset"]:not(:disabled),
        [type="submit"]:not(:disabled) {
            cursor: pointer;
        }

        .container,
        .container-sm,
        .container-md,
        .container-lg,
        .container-xl,
        .container-xxl {
            max-width: 1320px;
        }


        .row {
            --bs-gutter-x: 1.5rem;
            --bs-gutter-y: 0;
            display: flex;
            flex-wrap: wrap;
            margin-top: calc(-1 * var(--bs-gutter-y));
            margin-right: calc(-.5 * var(--bs-gutter-x));
            margin-left: calc(-.5 * var(--bs-gutter-x));
        }

        .row>* {
            flex-shrink: 0;
            width: 100%;
            max-width: 100%;
            padding-right: calc(var(--bs-gutter-x) * .5);
            padding-left: calc(var(--bs-gutter-x) * .5);
            margin-top: var(--bs-gutter-y);
        }

        .col {
            flex: 1 0 0%;
        }

        .row-cols-auto>* {
            flex: 0 0 auto;
            width: auto;
        }

        .row-cols-1>* {
            flex: 0 0 auto;
            width: 100%;
        }

        .row-cols-2>* {
            flex: 0 0 auto;
            width: 50%;
        }

        .row-cols-3>* {
            flex: 0 0 auto;
            width: 33.333333%;
        }

        .row-cols-4>* {
            flex: 0 0 auto;
            width: 25%;
        }

        .row-cols-5>* {
            flex: 0 0 auto;
            width: 20%;
        }

        .row-cols-6>* {
            flex: 0 0 auto;
            width: 16.666667%;
        }

        .col-auto {
            flex: 0 0 auto;
            width: auto;
        }

        .col-1 {
            flex: 0 0 auto;
            width: 8.333333%;
        }

        .col-2 {
            flex: 0 0 auto;
            width: 16.666667%;
        }

        .col-3 {
            flex: 0 0 auto;
            width: 25%;
        }

        .col-4 {
            flex: 0 0 auto;
            width: 33.333333%;
        }

        .col-5 {
            flex: 0 0 auto;
            width: 41.666667%;
        }

        .col-6 {
            flex: 0 0 auto;
            width: 50%;
        }

        .col-7 {
            flex: 0 0 auto;
            width: 58.333333%;
        }

        .col-8 {
            flex: 0 0 auto;
            width: 66.666667%;
        }

        .col-9 {
            flex: 0 0 auto;
            width: 75%;
        }

        .col-10 {
            flex: 0 0 auto;
            width: 83.333333%;
        }

        .col-11 {
            flex: 0 0 auto;
            width: 91.666667%;
        }

        .col-12 {
            flex: 0 0 auto;
            width: 100%;
        }
    </style>
    @livewireStyles


</head>

<body>
    <livewire:mostrar-boton />
</body>
@livewireScripts


</html>
