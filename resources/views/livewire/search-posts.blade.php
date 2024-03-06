<div class="container">
    <div class="flex-container">
        <label for="search" class="btn btn-success">Cerca</label>
        <input type="text" wire:model.live="search" id="search" placeholder="Cerca tra i posts"
            style="margin-top:30px;margin-bottom: 30px">
    </div>
    <div class="row">
        @foreach ($posts as $post)
            <div class="col-3" style="margin-bottom:30px">
                <div class="card" style="width: 18rem;background-color:rgba(0,0,0,0.8); height:550px">
                    <div class="card-body" style="color:white;  ">
                        <h5 class="card-title" style="margin-bottom:20px;font-weight:bold">{{ $post->title }}</h5>

                        <p class="card-text">{{ $post->body }}</p>

                        <p class="card-text" style="margin-top:20px;font-weight:200 ;color:rgba(255, 255, 255, 0.6)">-
                            {{ $post->author }} .</p>

                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-6">
                                <button class="btn btn-secondary">Modifica</button>
                            </div>
                            <div class="col-6">
                                <button class="btn btn-danger">Elimina</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
