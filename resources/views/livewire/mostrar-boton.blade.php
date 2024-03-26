<div class="container" wire:poll.7s.keep-alive>
    <center>
    <div class="row justify-content-between text-center text-white">
        <div class="row">
            <span class="fw-bolder">{{ $ip }}</span>
        </div>
        <div class="row">
            <span class="fw-bolder">{{ $boton != null ? $boton->name : 'Máquina no válida ❌' }}</span>
        </div>

        <div >
            @switch(optional($reporte)->status)
                @case('alerta')
                <div class="row">

                    <span class="text-danger" >
                        {!! $this->mostrarBoton($boton, $ip, 'REPORTADO', '🚨', '🚩') !!}
                    </span>
                </div>
                @break

                @case('asistencia')
                <div class="row">
                    <span class="text-info">
                        {!! $this->mostrarBoton($boton, $ip, 'EN CAMINO', '👮🏻', '🚩') !!}
                    </span>
                </div>

                @break

                @case('finalizado')

                    @default
                        @if (optional($boton)->ip == $ip)
                        <div class="row">
                            <center>
                            <button type="button" wire:click="reportar" wire:loading.attr="disabled"
                                wire:confirm="Por favor, confirme solicitud de Asistencia"
                                class="text-white bg-gradient-danger redondo">ALERTAR</button>
                            </center>
                        </div>
                        @endif
                @endswitch

            </div>
        </div>
    </center>
    </div>
