<div class="page-content">
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between">
                <h4 class="page-title mb-0 font-size-18">LISTE DES PARTICIPANT AU TDR</h4>
                <div class="page-title-right">
                </div>
            </div>
        </div>
    </div>
    <input type="text" wire:model='idTerm'>
    <button type="button" class="btn btn-success" wire:click.prevent="edit({{$term_ref->id}})>Test</button>
</div>
