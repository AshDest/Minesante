<?php

namespace App\Http\Livewire;

use App\Models\Agent;
use App\Models\Partenaire;
use App\Models\Participant;
use App\Models\Province;
use App\Models\ReferencesTerme;
use Livewire\Component;
use App\Models\Service;
use Livewire\WithFileUploads;

class TermsRefs extends Component
{
    use WithFileUploads;
    public $ids;
    public $reference;
    public $service_id;
    public $objet;
    public $date_dep;
    public $date_ret;
    public $moyen_transp;
    public $partenaire_id;
    public $lieu;
    public $province_id;
    public $signateur;
    public $user_id;
    public $file;
    public $bool = true;

    //testing selection
    //public $selectedPartener = null;
    public $partenaires;
    public $services;
    public $provinces;
    public $agents;
    public $term_refs;

    //declaration of participants
    public $agent_id;
    public $reference_id;


    public $dateTest;

    public function resetInputFields()
    {
        $this->reference = '';
        $this->service_id = '';
        $this->objet = '';
        $this->date_dep = '';
        $this->date_ret = '';
        $this->moyen_transp = '';
        $this->partenaire_id = '';
        $this->lieu = '';
        $this->province_id = '';
        $this->signateur = '';
        $this->user_id = '';
        $this->file = '';
    }

    public function edit($ids)
    {
        $term_ref = ReferencesTerme::where('id',$ids)->first();
        $this->ids=$term_ref->id;
        $this->reference = $term_ref->reference;
        $this->service_id = $term_ref->service_id;
        $this->objet = $term_ref->objet;
        $this->file = $term_ref->file;
        $this->date_dep = $term_ref->date_dep;
        $this->date_ret = $term_ref->date_ret;
        $this->moyen_transp = $term_ref->moyen_transp;
        $this->partenaire_id = $term_ref->partenaire_id;
        $this->lieu = $term_ref->lieu;
        $this->province_id = $term_ref->province_id;
        $this->signateur = $term_ref->signateur;
       // $this->user_id = $term_ref->user_id;

    }

    public function update()
    {
        $validatedData = $this->validate([
            'reference' => 'required',
            'service_id' => 'required',
            'objet' => 'required',
            'date_dep' => 'required',
            'date_ret' => 'required',
            'moyen_transp' => 'required',
            'partenaire_id' => 'required',
            'lieu' => 'required',
            'province_id' => 'required',
            'signateur' => 'required',
            'file' => 'required'
            //'user_id' => 'required',
        ]);
        $this->file->storeAs('files', 'document');
        if($this->ids)
        {
            $term_ref = ReferencesTerme::find($this->ids);
            $term_ref->update([
                'reference' => $this->reference,
                'service_id' => $this->service_id,
                'objet' => $this->objet,
                'date_dep' => $this->date_dep,
                'date_ret' => $this->date_ret,
                'moyen_transp' => $this->moyen_transp,
                'partenaire_id' => $this->partenaire_id,
                'lieu' => $this->lieu,
                'province_id' => $this->partenaire_id,
                'signateur' => $this->signateur,
                'file' => $this->file
                //'user_id' => $this->user_id,
            ]);
            session()->flash('message', 'Termes updated Successfully');
            $this->resetInputFields();
        }
        else
        {
            ReferencesTerme::create($validatedData);
            session()->flash('message', 'Terms created Successfully');
            $this->resetInputFields();
        }
    }

    public function test()
    {
        dd($this->dateTest);
    }
    public function mount(){
        $this->partenaires = Partenaire::all();
        $this->services = Service::orderBy('designation')->get();
        $this->provinces = Province::orderBy('designation')->get();
        $this->agents = Agent::all();
        $this->term_refs = ReferencesTerme::orderBy('date_dep', 'DESC')
                        ->join('provinces', 'provinces.id','=','references_termes.province_id')
                        ->join('partenaires', 'partenaires.id','=', 'references_termes.partenaire_id')
                        ->join('services', 'services.id','=','references_termes.service_id')
                        ->select('references_termes.id as id','reference','objet','date_dep','date_ret',
                                'moyen_transp','lieu','provinces.designation as province',
                                'services.id as service_id','partenaires.id as partenaire_id','signateur',
                                'provinces.id as province_id')
                        ->get();
    }
    public function render()
    {
        return view('livewire.terms-refs');
    }
}
