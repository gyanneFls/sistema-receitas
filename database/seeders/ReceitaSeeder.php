<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Receita;

class ReceitaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       
        Receita::create([
            'nome' => 'Bolo de Chocolate',
            'descricao' => 'Bolo fofinho e delicioso.',
            'ingredientes' => 'Farinha, ovos, leite e chocolate',
            'modo_preparo' => 'Misture tudo e asse.',
            'imagem' => 'bolo.jpg',
            'categoria_id' => 1
        ]);

        Receita::create([
            'nome' => 'Lasanha',
            'descricao' => 'Lasanha caseira.',
            'ingredientes' => 'Massa, queijo e molho',
            'modo_preparo' => 'Monte as camadas e asse.',
            'imagem' => 'lasanha.jpg',
            'categoria_id' => 2
        ]);
    }
    
}
