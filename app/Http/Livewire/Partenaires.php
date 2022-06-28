<?php

namespace App\Http\Livewire;

use App\Models\Partenaire;
use Livewire\Component;
use Livewire\WithPagination;

class Partenaires extends Component
{

    public $ids;
    public $designation;


    public function resetInputFields()
    {
        $this->designation = '';
    }

    public function edit($id)
    {
        $partenaire = Partenaire::where('id',$id)->first();
        $this->ids = $partenaire->id;
        $this->designation = $partenaire->designation;
    }

    public function update()
    {
        $validatedData = $this->validate([
            'designation' => 'required'
        ]);
        if($this->ids)
        {
            $partenaire = Partenaire::find($this->ids);
            $partenaire->update([
                'designation' => $this->designation
            ]);
            session()->flash('message', 'Partenaire updated Successfully');
            $this->resetInputFields();
            $this->emit('PartenaireUpdate');
        }
        else
        {
            $validatedDatas = $this->validate([
                'designation' => 'required'
            ]);
            Partenaire::create($validatedDatas);
            session()->flash('message', 'Partenaire Created Successfully');
            $this->resetInputFields();
            $this->emit('PartenaireAdded');
        }
    }

    public function delete($id)
    {
        if($id)
        {
            Partenaire::where('id',$id)->delete();
            session()->flash('message', 'Partenaire deleted successfully');
        }
    }


    use WithPagination;
    public function render()
    {
        $partenaires = Partenaire::orderBy('designation', 'ASC')->paginate(10);
        return view('livewire.partenaires', ['partenaires'=>$partenaires]);
    }
}
