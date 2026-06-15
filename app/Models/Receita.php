<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Receita extends Model
{
    protected $fillable = [
        'nome',
        'ingredientes',
        'modo_preparo',
        'tempo_preparo',
        'imagem',
        'categoria_id',
        
    ];
}
