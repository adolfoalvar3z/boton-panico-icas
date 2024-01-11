<div wire:poll.keep-alive class="container">
    <div class="row justify-content-between text-center text-black">
        <div class="col-12">
            <span class="fw-bolder">{{ $ip }}</span> <br>
            <span class="">{{ $boton != null ? $boton->name : 'Máquina no válida ❌' }}</span> <br>
        </div>

        <div class="col-12">
            @switch(optional($reporte)->status)
                @case('alerta')
                <span class="text-danger">
                    {!! $this->mostrarBoton($boton, $ip, 'REPORTADO', '🚨', '🚩') !!}
                </span>
                @break

                @case('asistencia')
                <span class="text-info">
                    {!! $this->mostrarBoton($boton, $ip, 'EN CAMINO', '👮🏻', '🚩') !!}
                </span>

                @break

                @case('finalizado')

                    @default
                        @if (optional($boton)->ip == $ip)
                                <button type="button" wire:click="reportar"
                                wire:loading.attr="disabled" wire:confirm="Está seguro que se está muriendo?" class="text-white bg-gradient-danger redondo">SOS</button>
                        @else
                            <p class="fs-1">🚩</p>
                        @endif
                @endswitch

            </div>
        </div>
    </div>
