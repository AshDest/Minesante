<div class="page-content">
    @php
        use App\Models\ReferencesTerme;

        $reference = ReferencesTerme::select('id','reference')->where('id',$idTerm)->first();

    @endphp
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between">
                <h4 class="page-title mb-0 font-size-18">LISTE DES PARTICIPANT AU TDR</h4>
                <div class="page-title-right">
                </div>
            </div>
        </div>
    </div>
    <h3>{{$reference->reference}}</h3>
    <div class="row">
        <div class="col-lg-4">
            <input type="text" class="form-control">
        </div>
        <div class="col-lg-4">
            <button type="button" class="btn btn-success">Test</button>
        </div>
    </div>
</div>
