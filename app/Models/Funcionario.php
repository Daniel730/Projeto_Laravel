<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Funcionario extends Model
{
    protected $fillable = [
        'empresa_id',
        'nome', 
        'email', 
        'telefone', 
        'cpf', 
        'cep', 
        'rua', 
        'numero', 
        'bairro', 
        'cidade', 
        'estado'
    ];
}
