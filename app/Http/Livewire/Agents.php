<?php

namespace App\Http\Livewire;

use App\Models\Agent;
use App\Models\Service;
use Livewire\Component;
use Livewire\WithPagination;

class Agents extends Component
{
    public $ids;
    public $service_id;
    public $matricule;
    public $nom;
    public $postnom;
    public $prenom;
    public $sexe;
    public $signateur;

    public function resetInputFields()
    {
        $this->matricule = '';
        $this->nom = '';
        $this->postnom = '';
        $this->prenom = '';
    }

    public function edit($ids)
    {
        $agent = Agent::where('id',$ids)->first();
        $this->ids = $agent->id;
        $this->matricule = $agent->matricule;
        $this->nom = $agent->nom;
        $this->postnom = $agent->postnom;
        $this->prenom = $agent->prenom;
        $this->sexe = $agent->sexe;
        $this->service_id = $agent->service_id;
        $this->signateur = $agent->signateur;
    }

    public function update()
    {
        $validatedData = $this->validate([
            'matricule' => 'required',
            'nom' => 'required',
            'postnom' => 'required',
            'prenom' => 'required',
            'sexe' => 'required',
            'service_id' => 'required',
            'signateur' => 'required'
        ]);
        if($this->ids)
        {
            $agent = Agent::find($this->ids);
            $agent->update([
                'matricule' => $this->matricule,
                'nom' => $this->nom,
                'postnom' => $this->postnom,
                'prenom' => $this->prenom,
                'sexe' => $this->sexe,
                'service_id' => $this->service_id,
                'signateur' => $this->signateur
            ]);
            session()->flash('message', 'Agent updated Successfully');
            $this->resetInputFields();
        }
        else
        {
            $validatedDatas = $this->validate([
                'matricule' => 'required',
                'nom' => 'required',
                'postnom' => 'required',
                'prenom' => 'required',
                'sexe' => 'required',
                'service_id' => 'required',
                'signateur' => 'required'
            ]);
            Agent::create($validatedDatas);
            session()->flash('message', 'Agent created Successfully');
            $this->resetInputFields();
        }
    }

    use WithPagination;
    public function render()
    {
        $agents = Agent::orderBy('nom', 'ASC')->join('services', 'services.id','=','agents.service_id')->get();
        $services = Service::orderBy('designation')->get();
        return view('livewire.agents', ['agents'=>$agents], ['services'=>$services]);
    }
}
