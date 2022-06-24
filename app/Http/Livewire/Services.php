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

    public function resetInputFields()
    {
        $this->designation = '';
        $this->encronyme = '';
    }
    public function store()
    {
        $validatedData = $this->validate([
            'designation' => 'required',
            'encronyme' => 'required'
        ]);
        Service::create($validatedData);
        session()->flash('message', 'Services created successfully');
        $this->resetInputFields();
        $this->emit('ServiceAdded');
    }
    public function edit($id)
    {
        $service = Service::where('id',$id)->first();
        $this->ids = $service->id;
        $this->designation = $service->designation;
        $this->encronyme = $service->encronyme;
    }

    public function update()
    {
        $validatedData = $this->validate([
            'designation' => 'required',
            'encronyme' => 'required',
        ]);
        if($this->ids)
        {
            $student = Service::find($this->ids);
            $student->update([
                'designation' => $this->designation,
                'encronyme' => $this->encronyme
            ]);
            session()->flash('message', 'Service updated successfully');
            $this->resetInputFields();
            $this->emit('ServiceUpdated');
        }
    }
}
