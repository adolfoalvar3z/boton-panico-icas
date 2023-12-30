<div wire:poll.5s class="container">
    <div class="row justify-content-between text-black">
        <div class="col">
            <span class="fw-bolder">IP: {{ $ip }}</span> <br>
            <span class="">{{ $boton != null ? $boton->name : 'Máquina no válida ❌' }}</span> <br>
            <span class="fw-bolder">
                {{ $boton != null ? 'Máquina Válida ✅' : 'Máquina no válida ❌' }}
            </span>
        </div>

        <div class="col-5">
            @switch(optional($reporte)->status)
                @case('alerta')
                    @if (optional($boton)->ip == $ip)
                        <span class="fw-bolder text-center">REPORTADO</span>
                        <br>
                        <span class="fs-2 text-center">🚨🚨🚨</span>
                    @else
                        <p class="fs-1">🚩</p>
                    @endif
                @break

                @case('asistencia')
                    @if (optional($boton)->ip == $ip)
                        <span class="fw-bolder text-center">EN CAMINO</span>
                        <br>
                        <span class="fs-2 text-center">👮🏻👮🏻‍♂️</span>
                    @else
                        <p class="fs-1">🚩</p>
                    @endif
                @break

                @case('finalizado')

                    @default
                        @if (optional($boton)->ip == $ip)
                            <form action="{{ route('reportar') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <button type="submit" class="text-white bg-gradient-danger redondo">ALERTAR</button>
                            </form>
                        @else
                            <p class="fs-1">🚩</p>
                        @endif
                @endswitch

            </div>
            <div class="col-12 text-center fw-light">
                <span class="fs-15">Informática Corte de Apelaciones de Santiago</span>
            </div>
        </div>
    </div>
