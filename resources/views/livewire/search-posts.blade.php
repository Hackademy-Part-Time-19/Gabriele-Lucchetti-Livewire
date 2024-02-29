<div class="container">
    <div class="flex-container">
        <label for="search" class="btn btn-success">Cerca</label>
        <input type="text" wire:model.live="search" id="search" placeholder="Cerca tra i posts"
            style="margin-top:30px;margin-bottom: 30px">
    </div>
    <div class="row">
        @foreach ($posts as $post)
            <div class="col-3" style="margin-bottom:30px">
                <div class="card" style="width: 18rem;background-color:rgba(0,0,0,0.6)">
                    <div class="card-body" style="color:white">
                        <h5 class="card-title">{{ $post->title }}</h5>

                        <p class="card-text">{{ $post->body }}</p>
                        
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

