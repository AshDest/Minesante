@extends('livewire._create_service')
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
    <div class="row">
        <div class="col-lg-3">
            <div class="card">
                <button type="button" class="btn btn-primary waves-effect waves-light" data-bs-toggle="modal"
                    data-bs-target=".bs-example-modal-center">Ajouter un Service</button>
            </div>
        </div>
    </div>

    @if (session()->has('message'))
    <div class="alert alert-success">{{session('message')}}</div>
    @endif
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="col-lg-6">
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
        </div>
    </div>
    <div class="col-lg-4">
        <input type="text" class="form-control" placeholder="Search..." wire:model="searchTerm" />
    </div>
    <!-- end page title -->
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Services</h4>
                    <div class="table-responsive">
                        <table class="table mb-0">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>DESIGNATION</th>
                                    <th>ENCRONYME</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($services as $service)
                                <tr>
                                    <th scope="row">{{$service->id}}</th>
                                    <td>{{$service->designation}}</td>
                                    <td>{{$service->encronyme}}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    {{$services->links()}}
                </div>
            </div>
        </div>
    </div>
    <!-- end row -->
