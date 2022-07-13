<?php

namespace App\Http\Livewire;

use App\Models\Agent;
use App\Models\ReferencesTerme;
use App\Models\Service;
use Livewire\Component;

class Dashboads extends Component
{
    public $agents;
    public $termes;
    public $services;

    public function mount()
    {
        $this->agents = Agent::count();
        $this->termes = ReferencesTerme::count();
        $this->services = Service::count();
    }

    public function render()
    {
        return view('livewire.dashboads');
    }
}
