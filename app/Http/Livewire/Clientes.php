<?php

namespace App\Http\Livewire;


use Livewire\Component;
use App\Models\Cadastro;

class Clientes extends Component
{
    public $search = '';

    public function render()
    {   
        if($this->search){
            $dados = Cadastro::where('nome','like','%'.$this->search.'%')->get();
        }else{
            $dados = Cadastro::all();
        }
        
        return view('livewire.clientes',compact('dados'));
    }

    public function mount()
    {
    
    }
}
