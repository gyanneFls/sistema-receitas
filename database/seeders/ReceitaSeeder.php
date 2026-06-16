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
            'imagem' => 'receitas/bolo.jpg',
            'categoria_id' => 1,
        ]);

        Receita::create([
            'nome' => 'Lasanha',
            'descricao' => 'Lasanha tradicional de carne.',
            'ingredientes' => 'Massa, carne moída, queijo e molho',
            'modo_preparo' => 'Monte as camadas e leve ao forno.',
            'imagem' => 'receitas/lasanha.jpg',
            'categoria_id' => 2,
        ]);

        Receita::create([
            'nome' => 'Suco de Laranja',
            'descricao' => 'Suco natural e refrescante.',
            'ingredientes' => 'Laranjas e gelo',
            'modo_preparo' => 'Esprema as laranjas e sirva gelado.',
            'imagem' => 'receitas/suco.jpg',
            'categoria_id' => 3,
        ]);

        Receita::create([
            'nome' => 'Macarrão ao Alho e Óleo',
            'descricao' => 'Receita rápida e saborosa.',
            'ingredientes' => 'Macarrão, alho e azeite',
            'modo_preparo' => 'Cozinhe o macarrão e misture ao molho.',
            'imagem' => 'receitas/macarrao.jpg',
            'categoria_id' => 4,
        ]);

        Receita::create([
            'nome' => 'Sanduíche Natural',
            'descricao' => 'Lanche leve para qualquer hora.',
            'ingredientes' => 'Pão, alface, tomate e frango',
            'modo_preparo' => 'Monte os ingredientes entre as fatias de pão.',
            'imagem' => 'receitas/sanduiche.jpg',
            'categoria_id' => 5,
        ]);
    }
    
}
