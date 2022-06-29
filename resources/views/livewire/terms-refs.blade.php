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
                    <h4 class="card-title mb-4">Create New Task</h4>
                    <form class="outer-repeater" method="post">
                        <div data-repeater-list="outer-group" class="outer">
                            <div data-repeater-item class="outer">
                                <div class="form-group row mb-4">
                                    <label for="taskname" class="col-form-label col-lg-2">Numero Terme</label>
                                    <div class="col-lg-10">
                                        <input id="taskname" name="taskname" type="text" class="form-control"
                                            placeholder="ORDRE DE SERVICE COLLECTIF N°:">
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label col-lg-2">Task Description</label>
                                    <div class="col-lg-10">
                                        <select class="form-select" name="service_id"
                                            aria-label="Default select example" wire:model='service_id'>
                                            <option selected value=""> --Select-- </option>
                                            @foreach ($services as $service)
                                            <option value="{{$service->id}}">{{$service->designation}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label for="taskname" class="col-form-label col-lg-2">Objet de la Mission</label>
                                    <div class="col-lg-10">
                                        <textarea id="taskname" name="taskname" class="form-control"></textarea>
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label col-lg-2">Dates</label>
                                    <div class="col-lg-10">
                                        <div class="input-daterange input-group" data-provide="datepicker">
                                            <input type="text" class="form-control" placeholder="Date Départ"
                                                name="start" />
                                            <input type="text" class="form-control" placeholder="Date Retour"
                                                name="end" />
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label for="taskbudget" class="col-form-label col-lg-2">Moyen de Transport</label>
                                    <div class="col-lg-10">
                                        <input id="taskbudget" name="taskbudget" type="text"
                                            placeholder="ex: Véhicule, Avion, Bateau, etc." class="form-control">
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
                                                    <input id="taskbudget" name="taskbudget" type="text"
                                                        placeholder="Le lieu à visiter..." class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                    <div class="row justify-content-end">
                        <div class="col-lg-10">
                            <button type="submit" class="btn btn-primary">Create Task</button>
                        </div>
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
