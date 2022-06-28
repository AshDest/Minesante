<!-- Modal -->
<div class="modal fade" id="updateModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modifier Service</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form wire:submit.prevent="store">
                    <input type="hidden" id="id" wire:model='ids'>
                    <label for="designation">Designation</label>
                    <input type="text" name="designation" class="form-control" wire:model='designation'>
                    <label for="encronyme">Encronyme</label>
                    <input type="text" name="encronyme" class="form-control" wire:model='encronyme'>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" wire:click.prevent='update()'>Enregistrer</button>
            </div>
        </div>
    </div>
</div>
