<form wire:submit="store">
    @if (session()->has('success'))
    <div class="bg-success">
        <p>{{session('success')}}</p>
    </div>
    @endif
    <div class="container">
        <div class="mb-3">
            <label for="title" class="form-label">Titolo</label>
            <input type="text" name="title" class="form-control" id="title" wire:model.live.debounce.400ms="title">
            @error('title')
                <div class="bg-danger">
                    <p style="color:white">{{ $message }}</p>
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="body" class="form-label">Corpo del Post</label>
            <input type="text" name="body" class="form-control" id="body" wire:model.live.debounce.400ms="body">
            @error('body')
                <div class="bg-danger">
                    <p style="color:white">{{ $message }}</p>
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="author" class="form-label">Autore</label>
            <input type="text" name="author" class="form-control" id="author" wire:model.live.debounce.400ms="author">
            @error('author')
                <div class="bg-danger">
                    <p style="color:white">{{ $message }}</p>
                </div>
            @enderror
        </div>

        <button  type="submit" class="btn btn-primary">Salva</button>
    </div>
</form>
