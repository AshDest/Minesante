<?php

namespace App\Http\Livewire;

use App\Models\Agent;
use App\Models\Participant;
use App\Models\ReferencesTerme;
use Livewire\Component;

class Participants extends Component
{

    public $ids;
    public $reference_id;
    public $agent_id;

    public function resetInputFields()
    {
        $this->agent_id = '';
    }

    public function edit($id)
    {
        $participant = Participant::where('id',$id)->first();
        $this->ids = $participant->id;
        $this->agent_id = $participant->agent_id;
    }

    public function update()
    {
        $validateData = $this->validate([
            'reference_id' => 'required',
            'agent_id' => 'required'
        ]);
        if($this->ids)
        {
            $participant = Participant::find($this->ids);
            $participant->update([
                'reference_id' => $this->reference_id,
                'agent_id' => $this->agent_id
            ]);
            session()->flash('message', 'Participant updated Successfully');
            $this->resetInputFields();
        }
        else
        {
            Participant::create($validateData);
            session()->flash('message', 'Agent ajouter Successfully');
            $this->resetInputFields();
        }
    }

    public function mount($reference_id)
    {
        $this->reference_id = $reference_id;
    }
    public function render()
    {
        $participants = Participant::where($this->reference_id)
                            ->select('id','agents.nom as nom', 'agents.postnom as postnom', 'agents.prenom as prenom',
                                'services.designation as designation')
                                ->join('agents', 'agents.id','=','participants.agent_id')
                                ->join('services', 'services.id','=','agents.service_');
        $agents = Agent::all();
        return view('livewire.participants',['participants'=>$participants],['agents'=>$agents]);
    }
}
