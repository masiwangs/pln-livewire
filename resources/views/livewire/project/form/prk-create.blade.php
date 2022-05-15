<form wire:submit.prevent="save">
    <div class="mb-3">
        <div class="badge badge-opacity-success">Terakhir disimpan: </div>
    </div>
    <div class="form-group mb-3">
        <label for="exampleInputUsername1">Nama Project</label>
        <input type="text" class="form-control" wire:model="name" id="exampleInputUsername1" placeholder="Username">
    </div>
    <div class="form-group mb-3">
        <label for="exampleInputUsername1">Nomor PRK</label>
        <input type="text" class="form-control" wire:model="prk_number" id="exampleInputUsername1" placeholder="Username">
    </div>
    <div class="form-group mb-3">
        <label for="exampleInputUsername1">Lot</label>
        <input type="text" class="form-control" wire:model="lot" id="exampleInputUsername1" placeholder="Username">
    </div>
    <div class="form-group mb-3">
        <label for="exampleInputUsername1">Prioritas</label><br>
        <div class="btn-group" role="group" aria-label="Basic example">
            <button type="button" wire:click="$set('priority', 0)" class="btn btn-sm {{ ($priority == 0) ? 'btn-primary' : 'btn-outline-secondary' }}">0</button>
            <button type="button" wire:click="$set('priority', 1)" class="btn btn-sm {{ ($priority == 1) ? 'btn-primary' : 'btn-outline-secondary' }}">1</button>
            <button type="button" wire:click="$set('priority', 2)" class="btn btn-sm {{ ($priority == 2) ? 'btn-primary' : 'btn-outline-secondary' }}">2</button>
            <button type="button" wire:click="$set('priority', 3)" class="btn btn-sm {{ ($priority == 3) ? 'btn-primary' : 'btn-outline-secondary' }}">3</button>
            <button type="button" wire:click="$set('priority', 4)" class="btn btn-sm {{ ($priority == 4) ? 'btn-primary' : 'btn-outline-secondary' }}">4</button>
        </div>
    </div>
</form>