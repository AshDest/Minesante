<?php

namespace App\Http\Livewire;

use App\Models\Agent;
use App\Models\Service;
use Livewire\Component;
use Livewire\WithPagination;

class Agents extends Component
{
    public $ids;
    public $idService;
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
        $this->idService = $agent->service_id;
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
            'idService' => 'required',
            'signateur' => 'required'
        ]);
        if($this->ids)
        {

        }
    }

    use WithPagination;
    public function render()
    {
        $agents = Agent::orderBy('nom', 'ASC')->paginate(10);
        $services = Service::orderBy('designation')->get();
        return view('livewire.agents', ['agents'=>$agents], ['services'=>$services]);
    }
}
