<?php

namespace App\Http\Livewire;

use App\Models\Agent;
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

    }

    use WithPagination;
    public function render()
    {
        $agents = Agent::orderBy('nom', 'ASC')->paginate(10);
        return view('livewire.agents', ['agents'=>$agents]);
    }
}
