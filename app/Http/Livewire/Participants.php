<?php

namespace App\Http\Livewire;

use App\Models\Agent;
use App\Models\Participant;
use App\Models\ReferencesTerme;
use Livewire\Component;

class Participants extends Component
{

    public $idTerm;
    public function testIdParticipant($idTerm)
    {
        dd($idTerm);
    }

    public function mount($idTerm)
    {
        $this->idTerm = $idTerm;
    }
    public function render()
    {
        $participants = Participant::where($this->idTerm)
                            ->select('id','agents.nom as nom', 'agents.postnom as postnom', 'agents.prenom as prenom',
                                'services.designation as designation')
                                ->join('agents', 'agents.id','=','participants.agent_id')
                                ->join('services', 'services.id','=','agents.service_');
        $agents = Agent::all();
        return view('livewire.participants',['participants'=>$participants],['agents'=>$agents]);
    }
}
