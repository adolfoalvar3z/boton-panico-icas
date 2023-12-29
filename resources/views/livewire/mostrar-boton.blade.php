<div wire:poll.5s class="container">
    <div class="row justify-content-between text-black">
        <div class="col">
            <span class="fw-bolder">IP: {{ $ip }}</span> <br>
            <span class="">{{$boton != null ? $boton->name : "Máquina no válida ❌"}}</span> <br>
            <span class="fw-bolder">
                {{ $boton != null ? "Máquina Válida ✅" : "Máquina no válida ❌"}}
            </span>
        </div>

        <div class="col-4">
            @if (@$boton->ip == $ip)
                <button class="btn btn-danger redondo">ALERTAR</button>
            @else
            <p>🚫NO SE PUEDEN REALIZAR REPORTES🚫</p>
            @endif
        </div>
        <div class="col-12 text-center fw-light">
            <span class="fs-15">Desarrollado por el equipo de informática de la Corte de Apelaciones de Santiago</span>
        </div>
    </div>
</div>
