<div wire:poll.5s class="row">
    <div class="col-12">
        <div class="card mb-4">
            <div class="card-header pb-0">
                <h6>Visor de Alertas: {{ $visor != null ? $visor->name : 'Máquina no válida ❌' }}</h6>
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
                                        Máquina</th>
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
                                <tr>
                                    <td class="align-middle text-center">
                                        <h6 class="mb-0 text-sm">Elsa Pito</h6>
                                    </td>
                                    <td class="align-middle text-center">
                                        <p class="text-xs font-weight-bold mb-0">Manager</p>
                                    </td>
                                    <td class="align-middle text-center">
                                        <span class="badge badge-sm bg-gradient-danger">Alerta</span>
                                    </td>
                                    <td class="align-middle text-center">
                                        <span class="text-secondary text-xs font-weight-bold">23/04/18</span>
                                    </td>
                                    <td class="align-middle">
                                        <a href="javascript:;" class="text-secondary font-weight-bold text-xs"
                                            data-toggle="tooltip" data-original-title="Edit user">
                                            <button type="submit" class="btn btn-primary">
                                                Asistir
                                            </button>
                                        </a>
                                    </td>
                                </tr>

                            </tbody>
                        </table>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
