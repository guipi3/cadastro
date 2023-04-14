<?php

namespace App\Http\Livewire;
use App\Models\Cadastro;

use Livewire\Component;

class FiltrarClientes extends Component
{
    public $search = '';

    public function render()
    {
        $dados = Cadastro::where('nome', $this->search)->get();
        return view('livewire.filtrar-clientes',compact('dados'));
    }

    public function mount()
    {
        //
        echo 'kkk';
    }
}
