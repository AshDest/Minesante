<div class="page-content">
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between">
                <h4 class="page-title mb-0 font-size-18">SERVICES</h4>
                <div class="page-title-right">
                </div>
            </div>
        </div>
    </div>
    @if (session()->has('message'))
    <div class="alert alert-success">{{session('message')}}</div>
    @endif
    <div class="row">
        <div class="col-lg-4">
            <div class="card">
                    <form wire:submit.prevent="store">
                        <label for="designation">Designation</label>
                        <input type="text" name="designation" class="form-control" wire:model='designation'>
                        <label for="encronyme">Encronyme</label>
                        <input type="text" name="encronyme" class="form-control" wire:model='encronyme'>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                            <button class="btn btn-primary">Ajouter</button>
                        </div>
                    </form>
            </div>
        </div>
        <div class="col-lg-8">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Services</h4>
                    <table id="datatable" class="table table-bordered dt-responsive nowrap"
                        style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>DESIGNATION</th>
                                <th>ENCRONYME</th>
                                <th>ACTIONS</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($services as $service)
                            <tr>
                                <th scope="row">{{$service->id}}</th>
                                <td>{{$service->designation}}</td>
                                <td>{{$service->encronyme}}</td>
                                <td>
                                    <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#updateModal" wire:click.prevent="edit({{$service->id}})">Edit</button>
                                    <button type="button" class="btn btn-danger" wire:click.prevent="delete({{$service->id}})">Delete</button>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
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

    <!-- end page title -->
    <div class="row">

    </div>
    <!-- end row -->
</div>
