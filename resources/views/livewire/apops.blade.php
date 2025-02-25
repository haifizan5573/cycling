<div>

    <div class="container mt-4">
        <h1 class="text-center mb-4">Lap To Go</h1>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">

                        <div class="input-group mb-3">
                            <button type="button" class="btn btn-sm btn-outline-secondary"
                                onclick="updateLap(-1)">-</button>
                            <input type="text" id="laptogo" wire:model.lazy="laptogo" class="form-control text-center"
                                placeholder="Enter title" required>
                            <button type="button" class="btn btn-sm btn-outline-secondary"
                                onclick="updateLap(1)">+</button>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-12 d-flex gap-1">
                                <button type="button" class="btn btn-sm btn-primary"
                                    wire:click="triggerViz('BackLayer.ps1','laptogo')">TRIGGER</button>
                                <button type="button" class="btn btn-sm btn-warning"
                                    wire:click="triggerViz('DirectUpdate.ps1','laptogo')">UPDATE</button>
                                <button type="button" class="btn btn-sm btn-danger"
                                    wire:click="triggerViz('Continue.ps1','laptogo')">TAKEOUT</button>
                                |
                                <button type="button" class="btn btn-sm btn-success"
                                    wire:click="setText('FINAL LAP')">FINAL LAP</button>
                                <button type="button" class="btn btn-sm btn-success"
                                    wire:click="setText('SPRINT LAP')">SPRINT LAP</button>
                                <button type="button" class="btn btn-sm btn-success"
                                    wire:click="setText('FINAL SPRINT')">FINAL SPRINT</button>
                                <button type="button" class="btn btn-sm btn-success"
                                    wire:click="setText('15 LAPS TO GO')">15 LAPS TO
                                    GO</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@section('scripts')
    <script>

Livewire.on('sendVizCommand', (data) => {
    console.log("Received Data", data);
});


    </script>
@endsection
