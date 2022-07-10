<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class Utilisateurs extends Component
{
    public function render()
    {
        $utilisateurs = User::all();
        return view('livewire.utilisateurs', ['utilisateur'=>$utilisateurs]);
    }
}
