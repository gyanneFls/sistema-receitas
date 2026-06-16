<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Categorias;

class Receita extends Model
{
    protected $fillable = [
        'nome',
        'ingredientes',
        'descricao',
        'modo_preparo',
        'tempo_preparo',
        'imagem',
        'categoria_id',
        
    ];
    public function categoria(){
        return $this->belongsTo(Categorias::class, 'categoria_id');
    }
}

