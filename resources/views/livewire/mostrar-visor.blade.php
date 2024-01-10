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
                                        Hora y Fecha</th>
                                    <th class="text-secondary opacity-7"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($reportes as $reporte)
                                    <tr class="fw-bold {{ $reporte->status == 'alerta' ? 'parpadeos' : '' }}">
                                        <td class="text-center">{{ $reporte->nombre_maquina_reporta }}</td>
                                        <td class="text-center">{{ $reporte->ip_reporta }}</td>
                                        <td class="text-center">
                                            <span
                                                class="badge badge-sm bg-gradient-{{ $reporte->status == 'alerta' ? 'danger' : 'warning' }}">{{ $reporte->status }}
                                            </span>
                                            @if ($reporte->status == 'alerta')
                                                @persist('player')
                                                <audio id="myAudio" autoplay loop>
                                                    <source src="{{ asset('alarma.mp3') }}" type="audio/mpeg" preload="auto">
                                                </audio>
                                                @endpersist
                                            @endif
                                        </td>
                                        <td class="text-center">{{ $reporte->created_at->format('H:i:s d-m-Y') }}</td>

                                        <td class="align-middle text-center">
                                            @if ($reporte->status == 'alerta')
                                                <button wire:click="asistir({{ $reporte->id }})" class="btn btn-warning bg-gradient-warning">
                                                    Asistir
                                                </button>
                                            @elseif ($reporte->status == 'asistencia')
                                                <button wire:click="finalizar({{ $reporte->id }})" class="btn btn-success bg-gradient-success">
                                                    Finalizar Reporte
                                                </button>
                                            @endif

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
@script
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
@endscript
