<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Service;
class Services extends Component
{
    public $ids;
    public $designation;
    public $encronyme;


    public function render()
    {
        return view('livewire.services');
    }
}
