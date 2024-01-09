<div class="container">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            {{-- The best athlete wants his opponent at his best. --}}
            <form wire:submit="save">
                <div class="form-group">
                    <label for="name">Nombre:</label>
                    <input type="text" class="form-control" id="name" wire:model="name">
                    @error('name')
                    <span class="error text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" id="email" wire:model="email" required>
                    @error('email')
                    <span class="error text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="password">Clave:</label>
                    <input type="password" class="form-control" id="password" wire:model="password" required>
                    @error('password')
                    <span class="error text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary">Registrar Usuario</button>
            </form>
        </div>
    </div>
</div>
