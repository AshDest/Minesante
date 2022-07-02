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
    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Select2</h4>
                    <p class="card-title-desc">A mobile and touch friendly input spinner component for
                        Bootstrap</p>
                    <form>
                        <div class="mb-3">
                            <label class="form-label">Single Select</label>
                            <select class="form-control select2">
                                <option>Select</option>
                                <optgroup label="Alaskan/Hawaiian Time Zone">
                                    <option value="AK">Alaska</option>
                                    <option value="HI">Hawaii</option>
                                </optgroup>
                                <optgroup label="Pacific Time Zone">
                                    <option value="CA">California</option>
                                    <option value="NV">Nevada</option>
                                    <option value="OR">Oregon</option>
                                    <option value="WA">Washington</option>
                                </optgroup>
                                <optgroup label="Mountain Time Zone">
                                    <option value="AZ">Arizona</option>
                                    <option value="CO">Colorado</option>
                                    <option value="ID">Idaho</option>
                                    <option value="MT">Montana</option>
                                    <option value="NE">Nebraska</option>
                                    <option value="NM">New Mexico</option>
                                    <option value="ND">North Dakota</option>
                                    <option value="UT">Utah</option>
                                    <option value="WY">Wyoming</option>
                                </optgroup>
                                <optgroup label="Central Time Zone">
                                    <option value="AL">Alabama</option>
                                    <option value="AR">Arkansas</option>
                                    <option value="IL">Illinois</option>
                                    <option value="IA">Iowa</option>
                                    <option value="KS">Kansas</option>
                                    <option value="KY">Kentucky</option>
                                    <option value="LA">Louisiana</option>
                                    <option value="MN">Minnesota</option>
                                    <option value="MS">Mississippi</option>
                                    <option value="MO">Missouri</option>
                                    <option value="OK">Oklahoma</option>
                                    <option value="SD">South Dakota</option>
                                    <option value="TX">Texas</option>
                                    <option value="TN">Tennessee</option>
                                    <option value="WI">Wisconsin</option>
                                </optgroup>
                                <optgroup label="Eastern Time Zone">
                                    <option value="CT">Connecticut</option>
                                    <option value="DE">Delaware</option>
                                    <option value="FL">Florida</option>
                                    <option value="GA">Georgia</option>
                                    <option value="IN">Indiana</option>
                                    <option value="ME">Maine</option>
                                    <option value="MD">Maryland</option>
                                    <option value="MA">Massachusetts</option>
                                    <option value="MI">Michigan</option>
                                    <option value="NH">New Hampshire</option>
                                    <option value="NJ">New Jersey</option>
                                    <option value="NY">New York</option>
                                    <option value="NC">North Carolina</option>
                                    <option value="OH">Ohio</option>
                                    <option value="PA">Pennsylvania</option>
                                    <option value="RI">Rhode Island</option>
                                    <option value="SC">South Carolina</option>
                                    <option value="VT">Vermont</option>
                                    <option value="VA">Virginia</option>
                                    <option value="WV">West Virginia</option>
                                </optgroup>
                            </select>
                        </div>
                    </form>
                </div>
            </div>
            <!-- end select2 -->

        </div>
    </div>
    <h3>TERME DE REFERENCE N°:{{$reference->reference}}</h3>
    <div class="row">
        <div class="col-lg-4">

        </div>
        <div class="col-lg-4">
            <button type="button" class="btn btn-success">Test</button>
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
