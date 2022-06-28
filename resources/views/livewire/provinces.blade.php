<div class="page-content">
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between">
                <h4 class="page-title mb-0 font-size-18">PROVINCES</h4>
                <div class="page-title-right">
                </div>
            </div>
        </div>
    </div>
    @if (session()->has('message'))
    <div class="alert alert-success">{{session('message')}}</div>
    @endif

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form wire:submit.prevent="update">
                        <div class="mb-3 row">
                            <label for="example-text-input" class="col-md-2 col-form-label">Code Province</label>
                            <div class="col-md-10">
                                <input class="form-control" type="text"
                                    id="example-text-input" wire:model='code'>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="example-text-input" class="col-md-2 col-form-label">Nommination</label>
                            <div class="col-md-10">
                                <input class="form-control" type="text"
                                    id="example-text-input" wire:model='designation'>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-primary">Enregistrer</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- end col -->
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Provinces</h4>
                    <table id="datatable" class="table table-bordered dt-responsive nowrap"
                        style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>CODE PROVINCE</th>
                                <th>DESIGNATION</th>
                                <th>ACTIONS</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($provinces as $province)
                            <tr>
                                <th scope="row">{{$province->id}}</th>
                                <td>{{$province->code}}</td>
                                <td>{{$province->designation}}</td>
                                <td>
                                    <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#updateModal" wire:click.prevent="edit({{$province->id}})">Edit</button>
                                    <button type="button" class="btn btn-danger" wire:click.prevent="delete({{$province->id}})">Delete</button>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- end page title -->
    <div class="row">

    </div>
    <!-- end row -->
</div>

