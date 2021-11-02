<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome', 
        'endereco', 
        'cnpj', 
        'telefone', 
        'cep', 

        'email', 
        'inscricao_estadual', 
        'prazo_pgto', 
        'banco', 
        'local_entrega', 
        'comprador', 
        'vendedor', 
    ];
}
