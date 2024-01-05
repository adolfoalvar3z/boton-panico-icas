<div class="container">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            {{-- The best athlete wants his opponent at his best. --}}
            <form wire:submit="save">
                <div class="form-group">
                    <label for="ip">IP Address:</label>
                    <input type="text" class="form-control" id="ip" wire:model="ip">
                    @error('ip')
                    <span class="error text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" class="form-control" id="name" wire:model="name">
                    @error('name')
                    <span class="error text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary">Registrar Botón</button>
            </form>
        </div>
    </div>
</div>
