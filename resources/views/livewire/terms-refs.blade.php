<div class="page-content">
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between">
                <h4 class="page-title mb-0 font-size-18">TERMES DE REFERENCES</h4>
                <div class="page-title-right">
                </div>
            </div>
        </div>
    </div>
    @if (session()->has('message'))
    <div class="alert alert-success">{{session('message')}}</div>
    @endif
    <!-- end page title -->
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Creation d'un terme de Reference</h4>
                    <form wire:submit.prevent="update">
                        <div data-repeater-list="outer-group" class="outer">
                            <div data-repeater-item class="outer">
                                <div class="form-group row mb-4">
                                    <label for="taskname" class="col-form-label col-lg-2">Numero Terme</label>
                                    <div class="col-lg-10">
                                        <input id="taskname" name="reference" wire:model='reference' type="text"
                                            class="form-control" placeholder="ORDRE DE SERVICE COLLECTIF N°:">
                                        @error('reference')
                                        <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label col-lg-2">Service</label>
                                    <div class="col-lg-10">
                                        <select class="form-select" name="service_id"
                                            aria-label="Default select example" wire:model='service_id'
                                            name="service_id">
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
                                <div class="form-group row mb-4">
                                    <label for="taskname" class="col-form-label col-lg-2">Objet de la Mission</label>
                                    <div class="col-lg-10">
                                        <textarea id="taskname" name="objet" wire:model='objet'
                                            class="form-control"></textarea>
                                        @error('objet')
                                        <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label col-lg-2">Dates</label>
                                    <div class="col-lg-10">
                                        <div class="mb-3">
                                            <input type="date" id="date_dep" name="date_dep" class="form-control" wire:model='date_dep'
                                            data-inputmask-inputformat="dd/mm/yyyy">
                                            <span class="text-muted">e.g "dd/mm/yyyy"</span>
                                            @error('date_dep')
                                            <span class="text-danger">{{$message}}</span>
                                            @enderror

                                            <input type="date" id="input-date1" name="date_ret" class="form-control" wire:model='date_ret'
                                            data-inputmask-inputformat="dd/mm/yyyy">
                                            <span class="text-muted">e.g "dd/mm/yyyy"</span>
                                            @error('date_dep')
                                            <span class="text-danger">{{$message}}</span>
                                            @enderror
                                            <!-- input-group -->
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label for="taskbudget" class="col-form-label col-lg-2">Moyen de Transport</label>
                                    <div class="col-lg-10">
                                        <input type="text" id="taskbudget" name="moyen_transp" wire:model='moyen_transp'
                                            placeholder="ex: Véhicule, Avion, Bateau, etc." class="form-control">
                                        @error('moyen_transp')
                                        <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label col-lg-2">Partenaire</label>
                                    <div class="inner col-lg-10 ms-md-auto">
                                        <div class="mb-3 row align-items-center">
                                            <div class="col-md-6">
                                                <select class="form-select" name="partenaire_id"
                                                    aria-label="Default select example" wire:model='partenaire_id'>
                                                    <option selected value=""> --Select-- </option>
                                                    @foreach ($partenaires as $partenaire)
                                                    <option value="{{$partenaire->id}}">{{$partenaire->designation}}
                                                    </option>
                                                    @endforeach
                                                </select>
                                                @error('partenaire_id')
                                                <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div>
                                            <div class="col-md-6">
                                                <select class="form-select" name="province_id"
                                                    aria-label="Default select example" wire:model='province_id'>
                                                    <option value="" selected>-- Provinces --</option>
                                                    @foreach ($provinces as $province)
                                                    <option value="{{$province->id}}">{{$province->designation}}
                                                    </option>
                                                    @endforeach
                                                </select>
                                                @error('province_id')
                                                <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label col-lg-2">Lieu</label>
                                    <div class="inner col-lg-10 ms-md-auto">
                                        <div class="mb-3 row align-items-center">
                                            <div class="col-md-6">
                                                <div class="col-lg-10">
                                                    <input id="taskbudget" name="lieu" wire:model='lieu' type="text"
                                                        placeholder="Le lieu à visiter..." class="form-control">
                                                    @error('lieu')
                                                    <span class="text-danger">{{$message}}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label col-lg-2">Signateur</label>
                                    <div class="inner col-lg-10 ms-md-auto">
                                        <div class="mb-3 row align-items-center">
                                            <div class="col-md-6">
                                                <div class="col-lg-10">
                                                    <select class="form-select" name="signateur"
                                                        aria-label="Default select example" wire:model='signateur'>
                                                        <option value="" selected>-- Agents --</option>
                                                        @foreach ($agents as $agent)
                                                        <option value="{{$agent->id}}">{{$agent->nom}}
                                                            {{$agent->postnom}} {{$agent->prenom}}
                                                        </option>
                                                        @endforeach
                                                    </select>
                                                    @error('signateur')
                                                    <span class="text-danger">{{$message}}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="col-lg-10">
                                                    <button class="btn btn-primary">Enregistrer</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Liste TDRs</h4>
                    <div class="table-responsive">
                        <table class="table table-hover mb-0">

                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Reference</th>
                                    <th>Objet</th>
                                    <th>Date Depart</th>
                                    <th>Date Retour</th>
                                    <th>Moyen Transport</th>
                                    <th>Province</th>
                                    <th>Lieu</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($term_refs as $term_ref)
                                <tr>
                                    <th scope="row">{{$term_ref->id}}</th>
                                    <td>{{$term_ref->reference}}</td>
                                    <td>{{$term_ref->objet}}</td>
                                    <td>{{$term_ref->date_dep}}</td>
                                    <td>{{$term_ref->date_ret}}</td>
                                    <td>{{$term_ref->moyen_transp}}</td>
                                    <td>{{$term_ref->province}}</td>
                                    <td>{{$term_ref->lieu}}</td>
                                    <td>
                                        <button type="button" class="btn btn-info" wire:click.prevent="edit({{$term_ref->id}})">Edit</button>
                                        <button type="button" class="btn btn-danger" wire:click.prevent="delete({{$term_ref->id}})">Delete</button>
                                    </td>

                                </tr>

                                @endforeach
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- end row -->
    <!-- end page title -->
    <div class="row">

    </div>
    <!-- end row -->
</div>
