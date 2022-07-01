<?php

namespace App\Http\Livewire;

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
        return view('livewire.participants');
    }
}
