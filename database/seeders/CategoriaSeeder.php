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
            'nome' => 'pratos principais'
        ]);

        Categorias::create([
            'nome' => 'Bebidas'
        ]);
        Categorias::create([
            'nome' => 'Massas'
        ]);
        Categorias::create([
            'nome' => 'lanches'
        ]);
    }
}