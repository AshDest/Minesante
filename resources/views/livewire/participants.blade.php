@php
use App\Models\ReferencesTerme;
use App\Models\Participant;
$reference = ReferencesTerme::select('id','reference')->where('id',$idTerm)->first();
@endphp
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
    <h3>TERME DE REFERENCE N°:{{$reference->reference}}</h3>
    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Participants</h4>
                    <form>
                        <div class="mb-3">
                            <select class="form-control select2">
                                <option>-- Select Agent --</option>
                                @foreach ($agents as $agent)
                                    <option value="{{$agent->id}}">{{$agent->nom}} {{$agent->postnom}} {{$agent->prenom}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-lg-4">
                            <button type="button" class="btn btn-success">Ajouter</button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- end select2 -->

        </div>

    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Liste des Participants</h4>
                    <div class="table-responsive">
                        <table class="table table-hover mb-0">

                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nom</th>
                                    <th>Post-nom</th>
                                    <th>Prenom</th>
                                    <th>Service</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($participants as $participant)
                                <tr>
                                    <th scope="row">{{$participant->id}}</th>
                                    <td>{{$participant->nom}}</td>
                                    <td>{{$participant->postnom}}</td>
                                    <td>{{$participant->prenom}}</td>
                                    <td>{{$participant->designation}}</td>
                                    <td>
                                        <button type="button" class="btn btn-info">Remplacer</button>
                                        <button type="button" class="btn btn-danger"
                                            wire:click.prevent="delete({{$participant->id}})">Delete</button>
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
