<?php

namespace App\Http\Livewire;
use Illuminate\Support\Facades\Http;

use Livewire\Component;

class Estados extends Component
{
    public $estado;

    public function render()
    {
        $municipios = false;

        $estados = json_decode(
            Http::get(
                'https://servicodados.ibge.gov.br/api/v1/localidades/estados',
                ['orderBy' => 'nome']
            )->body()
        );

        if($this->estado){
            $municipios = json_decode(
                Http::get(
                    "https://servicodados.ibge.gov.br/api/v1/localidades/estados/{$this->estado}/municipios",
                    ['orderBy' => 'nome']
                )->body()
            );
        }
        
        return view('livewire.estados',compact('estados','municipios'));
    }
}
