<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Service;
use Livewire\WithPagination;
class Services extends Component
{
    public $ids;
    public $designation;
    public $encronyme;
    public $searchTerm;

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
        else
        {
            $validatedDatas = $this->validate([
                'designation' => 'required',
                'encronyme' => 'required'
            ]);
            Service::create($validatedDatas);
            session()->flash('message', 'Services created successfully');
            $this->resetInputFields();
            $this->emit('ServiceAdded');
        }
    }

    public function delete($id)
    {
        if($id)
        {
            Service::where('id',$id)->delete();
            session()->flash('message', 'Service deleted successfully');
        }
    }

    use WithPagination;
    public function render()
    {
        $services = Service::orderBy('id','ASC')->paginate(100);
        return view('livewire.services', ['services'=>$services]);
    }
}
