<div>
    <h1>Upload de Photo Perfil</h1>
    <hr>
    <form action="#" method="post" wire:submit.prevent="storagePhoto">
        <input type="file" wire:model="photo">
        @error('photo')
                {{ $message }}
        @enderror
        <br>
        <button type="submit">Fazer Upload</button>

    </form>
</div>
