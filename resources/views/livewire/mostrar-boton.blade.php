<div class="container">
    <div class="row justify-content-between text-center text-black">
        <div class="col-auto">
            <span class="fw-bolder">{{ $ip }}</span> <br>
            <span class="">{{ $boton != null ? $boton->name : 'Máquina no válida ❌' }}</span> <br>
        </div>

        <div class="col-auto">
            @switch(optional($reporte)->status)
                @case('alerta')
                    <span class="text-danger" wire:poll.5s.keep-alive>
                        {!! $this->mostrarBoton($boton, $ip, 'REPORTADO', '🚨', '🚩') !!}
                    </span>
                @break

                @case('asistencia')
                    <span class="text-info" wire:poll.5s.keep-alive>
                        {!! $this->mostrarBoton($boton, $ip, 'EN CAMINO', '👮🏻', '🚩') !!}
                    </span>
                @break

                @case('finalizado')

                    @default
                        @if (optional($boton)->ip == $ip)
                            <button type="button" wire:click="reportar" wire:loading.attr="disabled"
                                wire:confirm="Por favor, confirme solicitud de Asistencia"
                                class="text-white bg-gradient-danger redondo">ALERTAR</button>
                        @else
                            <p class="fs-1">🚩</p>
                        @endif
                @endswitch

            </div>
        </div>
    </div>
