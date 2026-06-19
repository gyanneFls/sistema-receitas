<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Categorias;

class CategoriaSeeder extends Seeder
{
    public function run(): void
    {
        Categorias::create([
            'nome' => 'Doces'
        ]);
        Categorias::create([
            'nome' => 'Pratos principais'
        ]);
        Categorias::create([
            'nome' => 'Bebidas'
        ]);
        Categorias::create([
            'nome' => 'Massas'
        ]);
        Categorias::create([
            'nome' => 'Lanches'
        ]);
        Categorias::create([
            'nome' => 'Sopas'
        ]);
        Categorias::create([
            'nome' => 'Saladas'
        ]);
        
            
    }
}