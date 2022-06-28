<?php

namespace App\Http\Livewire;

use App\Models\Province;
use App\Models\Service;
use Livewire\Component;
use Livewire\WithPagination;

class Provinces extends Component
{
    public $ids;
    public $code;
    public $designation;

    public function resetInputFields()
    {
        $this->code = '';
        $this->designation = '';
    }
    public function edit($id)
    {
        $province = Province::where('id',$id)->first();
        $this->ids = $province->id;
        $this->code = $province->code;
        $this->designation = $province->designation;
    }

    public function update()
    {
        $validatedData = $this->validate([
            'code' => 'required',
            'designation' => 'required',
        ]);

        if($this->ids)
        {
            $province = Province::find($this->ids);
            $province->update([
                'code' => $this->code,
                'designation' => $this->designation
            ]);
            session()->flash('message', 'Province updated Successfully');
            $this->resetInputFields();
            $this->emit('ProvinceUpdate');
        }
    }


    use WithPagination;
    public function render()
    {
        $provinces = Service::orderBy('designation', 'ASC')->paginate(10);
        return view('livewire.provinces', ['provinces'=>$provinces]);
    }
}
