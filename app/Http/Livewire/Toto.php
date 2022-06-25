<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Toto extends Component
{
    public function render()
    {

        return view('livewire.toto');
    }
    public function test(){
        dd("dddddd");
    }
}
