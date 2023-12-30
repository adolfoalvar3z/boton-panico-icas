<div wire:poll class="row">
    <div class="col-12">
        <div class="card mb-4">
            <div class="card-header pb-0">
                <h5>Visor de Alertas: {{ $visor != null ? $visor->name : 'Máquina no válida ❌' }}</h5>
                <h6>Dirección IP: {{ $ip }} - Estado:
                    {{ $visor != null ? 'Valido ✅' : 'Máquina no válida ❌' }}</h6>
            </div>


            <div class="card-body px-0 pt-0 pb-2">
                <div class="table-responsive p-5">
                    @if ($visor != null)
                        <table class="table align-items-center mb-0">
                            <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-center font-weight-bolder opacity-7">
                                        Máquina Reporta</th>
                                    <th class="text-uppercase text-secondary text-center font-weight-bolder opacity-7">
                                        IP</th>
                                    <th class="text-uppercase text-secondary text-center font-weight-bolder opacity-7">
                                        Estado</th>
                                    <th class="text-uppercase text-secondary text-center font-weight-bolder opacity-7">
                                        Fecha y Hora</th>
                                    <th class="text-secondary opacity-7"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($reportes as $reporte)
                                    <tr>
                                        <td class="text-center">{{ $reporte->nombre_maquina_reporta }}</td>
                                        <td class="text-center">{{ $reporte->ip_reporta }}</td>
                                        <td class="text-center">
                                            <span
                                                class="badge badge-sm bg-gradient-{{ $reporte->status == 'alerta' ? 'danger' : 'warning' }}">{{ $reporte->status }}
                                            </span>
                                            @if ($reporte->status == 'alerta')
                                            <br>
                                                <audio id="myAudio" autoplay loop >
                                                    <source src="{{ asset('alarma.mp3') }}" type="audio/mpeg" preload="auto">
                                                </audio>
                                            @endif
                                        </td>
                                        <td class="text-center">{{ $reporte->created_at->format('H:i:s d-m-Y') }}</td>

                                        <td class="align-middle">
                                            <a href="javascript:;" class="text-secondary font-weight-bold text-xs"
                                                data-toggle="tooltip" data-original-title="Edit user">
                                                <button type="submit" class="btn btn-primary">
                                                    Asistir
                                                </button>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    window.onload = function() {
        var audioElement = document.getElementById('myAudio');
        audioElement.play();
    }

    function unmuteAudio() {
        var audioElement = document.getElementById('myAudio');
        audioElement.muted = false;
    }
</script>
