<div wire:poll class="container">
    <div class="row justify-content-between text-black">
        <div class="col-6">
            <span class="fw-bolder">IP: {{ $ip }}</span> <br>
            <span class="">{{ $boton != null ? $boton->name : 'Máquina no válida ❌' }}</span> <br>
            <span class="fw-bolder">
                {{ $boton != null ? 'Máquina Válida ✅' : 'Máquina no válida ❌' }}
            </span>
        </div>

        <div class="col-6">
            @switch(optional($reporte)->status)
                @case('alerta')
                    {!! $this->mostrarBoton($boton, $ip, 'REPORTADO', '🚨🚨', '🚩') !!}
                @break

                @case('asistencia')
                    {!! $this->mostrarBoton($boton, $ip, 'EN CAMINO', '👮🏻👮🏻‍♂️', '🚩') !!}
                @break

                @case('finalizado')

                    @default
                        @if (optional($boton)->ip == $ip)
                            <form wire:submit="reportar()" >
                                <button type="submit" wire:loading.attr="disabled" class="text-white bg-gradient-danger redondo">SOS</button>
                            </form>
                        @else
                            <p class="fs-1">🚩</p>
                        @endif
                @endswitch

            </div>
            <div class="col-12 text-center fw-light">
                <span class="fs-15">- Informática Corte de Apelaciones de Santiago - Unidad de Servicios - </span>
            </div>
        </div>
    </div>
