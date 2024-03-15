<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('img/apple-icon.png') }}">
    <link rel="icon" type="image/png" href="{{ asset('img/favicon.png') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>
        Sistema de botón de Pánico ICAS
    </title>
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <!-- Nucleo Icons -->
    <link href="{{ asset('css/nucleo-icons.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/nucleo-svg.css') }}" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <!--datatable-->
    <link href="{{ asset('datatables/datatables.min.css') }}" rel="stylesheet">
    <!-- CSS Files -->

    <link id="pagestyle" href=" {{ asset('css/soft-ui-dashboard.css') }}" rel="stylesheet" />

    @livewireStyles
</head>

<body class="g-sidenav-show  bg-gray-100">
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3 "
        id="sidenav-main">

        <div class="sidenav-header text-center">
            <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
                aria-hidden="true" id="iconSidenav"></i>
            <a class="navbar-brand m-0" href="{{ route('inicio') }}">
                <img src="{{ asset('img/logo-poder-judicial.png') }}" class="navbar-brand-img h-100" alt="main_logo">
                <br>
                <span class="ms-1 font-weight-bold">Botón de Pánico ICAS</span>
            </a>
        </div>

        <hr class="horizontal dark mt-0">
        <div class="collapse navbar-collapse w-auto " id="sidenav-collapse-main">
            <ul class="navbar-nav">

                <li class="nav-item">
                    <a class="nav-link {{ request()->is('home') ? 'active' : '' }}" href="{{ route('home') }}">
                        <div>
                            <i class="fas fa-tachometer-alt fa-2xl"></i>
                        </div>
                        <span class="nav-link-text ms-1"> Reportes</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('usuarios') ? 'active' : '' }}"
                        href="{{ route('usuarios.index') }}" wire:navigate>
                        <div>
                            <i class="fas fa-user-alt fa-2xl"></i>
                        </div>
                        <span class="nav-link-text ms-1"> Usuarios</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('botones') ? 'active' : '' }}"
                        href="{{ route('botones.index') }}">
                        <div>
                            <i class="fas fa-play fa-2xl"></i>
                        </div>
                        <span class="nav-link-text ms-1"> Botones</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('visores') ? 'active' : '' }}"
                        href="{{ route('visores.index') }}">
                        <div>
                            <i class="fas fa-eye fa-2xl"></i>
                        </div>
                        <span class="nav-link-text ms-1"> Visores</span>
                    </a>
                </li>
            </ul>
        </div>

    </aside>

    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <!-- Navbar -->
        <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur"
            navbar-scroll="true">
            <div class="container-fluid py-1 px-3">

                <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">

                    <ul class="navbar-nav justify-content-end">
                        <li class="nav-item d-flex align-items-center">
                            <a class="btn btn-outline-primary btn-sm mb-0 me-3" target="_blank"
                                href="{{ route('boton') }}">
                                Visión Botón
                            </a>
                        </li>
                        <li class="nav-item d-flex align-items-center">
                            <a class="btn btn-outline-info btn-sm mb-0 me-3" target="_blank"
                                href="{{ route('visor') }}">
                                Visión Gendarmería
                            </a>
                        </li>
                        <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
                            <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
                                <div class="sidenav-toggler-inner">
                                    <i class="sidenav-toggler-line"></i>
                                    <i class="sidenav-toggler-line"></i>
                                    <i class="sidenav-toggler-line"></i>
                                </div>
                            </a>
                        </li>
                    </ul>
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item ">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown ">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                                        Salir
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                        class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <!-- End Navbar -->
        <div class="container-fluid py-4">
            @yield('content')
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
    </main>
    <!--   Core JS Files   -->

    <script src="{{ asset('datatables/datatables.min.js') }}"></script>

    <script>
        var url = "{{ asset('datatables/es-ES.json') }}";
        var table = new DataTable('#example', {
            language: {
                url: url,
                "paginate": {
                    "first": "<<",
                    "last": ">>",
                    "next": ">",
                    "previous": "<"
                }
            },
            buttons: [
                'copy', 'print', 'excelHtml5', 'pdf', 'csvHtml5',
            ],
            dom: 'Bfrtip',
            pageLength: 25,
            order: [
                [0, "desc"]
            ] // Ordenar por la ultima columna (ID) en orden ascendente
        });
    </script>

    <script src="{{ asset('js/core/popper.min.js') }}"></script>
    <script src="{{ asset('js/core/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/plugins/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('js/plugins/smooth-scrollbar.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('datatables/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('datatables/pdfmake.min.js') }}"></script>
    <script src="{{ asset('datatables/vfs_fonts.js') }}"></script>
    <script>
        var win = navigator.platform.indexOf('Win') > -1;
        if (win && document.querySelector('#sidenav-scrollbar')) {
            var options = {
                damping: '0.5'
            }
            Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
        }
    </script>
    <!-- Github buttons -->
    <script async defer src="{{ asset('js/buttons.js') }}"></script>
    <script src="{{ asset('js/soft-ui-dashboard.js') }}"></script>
    <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
    @livewireScripts


</body>

</html>
