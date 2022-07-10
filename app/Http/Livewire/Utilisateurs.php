<?php

namespace App\Http\Livewire;

use App\Models\Agent;
use App\Models\User;
use Livewire\Component;

class Utilisateurs extends Component
{
    public function render()
    {
        $utilisateurs = User::whereNotNull('agent_id')->get();
        return view('livewire.utilisateurs', ['utilisateurs'=>$utilisateurs]);
    }
}
