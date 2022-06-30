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
                    <form wire:submit.prevent="update">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-4">
                                    <label class="form-label" for="validationCustom">Matricule</label>
                                    <input type="text" class="form-control" id="validationCustom"
                                     wire:model='matricule' name="matricule" required>
                                     @error('matricule')
                                     <span class="text-danger">{{$message}}</span>
                                     @enderror
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label class="form-label" for="validationCustom01">Nom</label>
                                    <input type="text" class="form-control" id="validationCustom01"
                                     wire:model='nom' name="nom" required>
                                     @error('nom')
                                     <span class="text-danger">{{$message}}</span>
                                     @enderror
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label class="form-label" for="validationCustom02">Postnom</label>
                                    <input type="text" class="form-control" id="validationCustom02"
                                     wire:model='postnom' name="postnom" required>
                                     @error('postnom')
                                     <span class="text-danger">{{$message}}</span>
                                     @enderror
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label class="form-label" for="validationCustom02">Prenom</label>
                                    <input type="text" class="form-control" id="validationCustom02"
                                      wire:model='prenom' name="prenom" required>
                                      @error('prenom')
                                      <span class="text-danger">{{$message}}</span>
                                      @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label class="form-label" for="validationCustom03">Sexe</label>
                                    <select class="form-select" name="sexe" aria-label="Default select example" wire:model='sexe'>
                                        <option value="" selected>-- Select Sexe --</option>
                                        <option value="Homme" selected>Homme</option>
                                        <option value="Femme">Femme</option>
                                    </select>
                                    @error('sexe')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label class="form-label" for="validationCustom04">Services</label>
                                    <select class="form-select" name="service_id" aria-label="Default select example" wire:model='service_id'>
                                        <option selected value=""> --Select-- </option>
                                        @foreach ($services as $service)
                                            <option value="{{$service->id}}">{{$service->designation}}</option>
                                        @endforeach
                                    </select>
                                    @error('service_id')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <div class="form-check">
                                        <label class="form-label" for="validationCustom07">Signateur?</label>
                                        <select class="form-select" name="signateur" aria-label="Default select example" wire:model='signateur'>
                                            <option value="0" selected>Non Signateur</option>
                                            <option value="1">Signateur</option>
                                        </select>
                                        @error('signateur')
                                        <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-primary">Enregistrer</button>
                    </form>
                </div>
            </div>
            <!-- end card -->
        </div>
        <!-- end col -->
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
                                <td>{{$agent->designation}}</td>
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


