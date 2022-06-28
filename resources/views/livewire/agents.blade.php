<div class="page-content">
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between">
                <h4 class="page-title mb-0 font-size-18">AGENTS</h4>
                <div class="page-title-right">
                </div>
            </div>
        </div>
    </div>
    @if (session()->has('message'))
    <div class="alert alert-success">{{session('message')}}</div>
    @endif

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <form class="needs-validation" novalidate>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label class="form-label" for="validationCustom01">Nom</label>
                                    <input type="text" class="form-control" id="validationCustom01"
                                        required>
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label class="form-label" for="validationCustom02">Postnom</label>
                                    <input type="text" class="form-control" id="validationCustom02"
                                         required>
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label class="form-label" for="validationCustom02">Prenom</label>
                                    <input type="text" class="form-control" id="validationCustom02"
                                         required>
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label class="form-label" for="validationCustom03">Sexe</label>
                                    <select class="form-select" aria-label="Default select example">
                                        <option selected>Select</option>
                                        <option>Homme</option>
                                        <option>Femme</option>
                                    </select>
                                    <div class="invalid-feedback">
                                        Please provide a valid city.
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label class="form-label" for="validationCustom04">Services</label>
                                    <select class="form-select" aria-label="Default select example" wire:model='idService'>
                                        <option selected>Select</option>
                                        @foreach ($services as $service)
                                            <option value="{{$service->id}}">{{$service->designation}}</option>
                                        @endforeach
                                    </select>
                                    <div class="invalid-feedback">
                                        Please provide a valid state.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="mb-3">
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input"
                                            id="invalidCheck" required>
                                        <label class="form-check-label ms-1" for="invalidCheck">Signateur?</label>
                                        <div class="invalid-feedback">
                                            You must agree before submitting.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-primary" type="submit">Enregistrer</button>
                    </form>
                </div>
            </div>
            <!-- end card -->
        </div>
        <!-- end col -->
        <!--
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form wire:submit.prevent="update">
                        <div class="mb-3 row">
                            <label for="example-text-input" class="col-md-2 col-form-label">Code Province</label>
                            <div class="col-md-10">
                                <input class="form-control" type="text"
                                    id="example-text-input" name="designation" wire:model='designation'>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-primary">Enregistrer</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
     -->
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Partenaires</h4>
                    <table id="datatable" class="table table-bordered dt-responsive nowrap"
                        style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>MATRICULE</th>
                                <th>NOM</th>
                                <th>POST-NOM</th>
                                <th>PRENOM</th>
                                <th>SEXE</th>
                                <th>SERVICE</th>
                                <th>SIGNATEUR</th>
                                <th>ACTIONS</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($agents as $agent)
                            <tr>
                                <th scope="row">{{$agent->id}}</th>
                                <td>{{$agent->matricule}}</td>
                                <td>{{$agent->nom}}</td>
                                <td>{{$agent->postnom}}</td>
                                <td>{{$agent->prenom}}</td>
                                <td>{{$agent->sexe}}</td>
                                <td>{{$agent->service_id}}</td>
                                <td>{{$agent->signateur}}</td>
                                <td>
                                    <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#updateModal" wire:click.prevent="edit({{$agent->id}})">Edit</button>
                                    <button type="button" class="btn btn-danger" wire:click.prevent="delete({{$agent->id}})">Delete</button>
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


