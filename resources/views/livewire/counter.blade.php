<div class='row' style="margin-top:30px;">
    <div class="col-3">
        <button class="btn btn-secondary" wire:click="increment"> Incrementa</button>
    </div>
    <div class="col-3">
        <button class="btn btn-secondary" wire:click="decrement"> Decrementa</button>
    </div>
    <div class="col-3">
        @if ($count > 10)
            <h1 style="color:red"> {{ $count }} </h1>
        @else
            <h1 style="color:blue"> {{ $count }} </h1>
        @endif
    </div>

</div>
