<?php

namespace App\Http\Livewire;

use App\Models\ReferencesTerme;
use Livewire\Component;

class TermsRefs extends Component
{
    public $reference;
    public $service_id;
    public $objet;
    public $date_dep;
    public $date_ret;
    public $moyen_trans;
    public $partenaire_id;
    public $lieu;
    public $province_id;
    public $signateur;
    public $user_id;

    public function resetInputFields()
    {
        $this->reference = '';
        $this->service_id = '';
        $this->objet = '';
        $this->date_dep = '';
        $this->date_ret = '';
        $this->moyen_trans = '';
        $this->partenaire_id = '';
        $this->lieu = '';
        $this->province_id = '';
        $this->signateur = '';
        $this->user_id = '';
    }

    public function edit($ids)
    {
        $term_ref = ReferencesTerme::where('id',$ids)->first();
        $this->ids=$term_ref->id;
        $this->reference = $term_ref->reference;
        $this->service_id = $term_ref->service_id;
        $this->objet = $term_ref->objet;
        $this->date_dep = $term_ref->date_dep;
        $this->date_ret = $term_ref->date_ret;
        $this->moyen_trans = $term_ref->moyen_trans;
        $this->partenaire_id = $term_ref->partenaire_id;
        $this->lieu = $term_ref->lieu;
        $this->province_id = $term_ref->province_id;
        $this->signateur = $term_ref->signateur;
        $this->user_id = $term_ref->user_id;
    }

    public function update()
    {
        $validatedData = $this->validate([
            'reference' => 'required',
            'service_id' => 'required',
            'objet' => 'required',
            'date_dep' => 'required',
            'date_ret' => 'required',
            'moyen_trans' => 'required',
            'partenaire_id' => 'required',
            'lieu' => 'required',
            'province_id' => 'required',
            'signateur' => 'required',
            'user_id' => 'required',
        ]);
        if($this->ids)
        {
            $term_ref = ReferencesTerme::find($this->ids);
            $term_ref->update([
                'reference' => $this->reference,
                'service_id' => $this->service_id,
                'objet' => $this->objet,
                'date_dep' => $this->date_dep,
                'date_ret' => $this->date_ret,
                'moyen_trans' => $this->moyen_trans,
                'partenaire_id' => $this->partenaire_id,
                'lieu' => $this->lieu,
                'province_id' => $this->partenaire_id,
                'signateur' => $this->signateur,
                'user_id' => $this->user_id,
            ]);
            session()->flash('message', 'Termes updated Successfully');
            $this->resetInputFields();
        }
        else
        {
            $validatedDatas = $this->validate([
                'reference' => 'required',
                'service_id' => 'required',
                'objet' => 'required',
                'date_dep' => 'required',
                'date_ret' => 'required',
                'moyen_trans' => 'required',
                'partenaire_id' => 'required',
                'lieu' => 'required',
                'province_id' => 'required',
                'signateur' => 'required',
                'user_id' => 'required',
            ]);
            ReferencesTerme::create($validatedDatas);
            session()->flash('message', 'Terms created Successfully');
            $this->resetInputFields();
        }
    }

    public function render()
    {
        return view('livewire.terms-refs');
    }
}
