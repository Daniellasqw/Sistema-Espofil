<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Compra extends Model
{
    use HasFactory;

    protected $fillable = [
        'empresa_id',
        'data', 
        'nota_fiscal',
        'quantidade', 
        'material',
        'preco_unitario',
        'valor_total',
        'ipi',
        'vencimento',
        'data_pagamento', 
    ];
}