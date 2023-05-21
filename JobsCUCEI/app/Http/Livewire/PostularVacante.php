<?php

namespace App\Http\Livewire;

use App\Models\Vacante;
use Livewire\Component;
use Livewire\WithFileUploads;

class PostularVacante extends Component
{
    use WithFileUploads;
    public $cv;
    public $vacante;

    protected $rules=[
        'cv'=>'required|mimes:pdf'

    ];

    public function mount(Vacante $vacante){
        $this->vacante = $vacante;


    }

    public function postularme(){
        $datos = $this->validate();

        $cv=$this->cv->store('public/cv');
        $datos['cv'] = str_replace('public/cv', '',$cv);

        $this->vacante->candidatos()->create([
            'user_id'=>auth()->user()->id,
            'cv'=>$datos['cv']

        ]);


        session()->flash('mensaje', 'Se envio tu cv correctamente');

        return redirect()->back();







        


    }

    public function render()
    {
        return view('livewire.postular-vacante');
    }
}
