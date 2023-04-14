<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cadastro extends Model
{
    public $timestamps = false;
    protected $fillable = ['nome','cpf','endereco','estado','cidade','sexo','nascimento'];
}
