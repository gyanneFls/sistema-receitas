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
            'descricao' => 'Bolo de chocolate macio e fofinho, coberto com uma deliciosa calda cremosa de chocolate. Ideal para festas, cafés da tarde ou sobremesas especiais.',
            'ingredientes' => '3 xícaras de farinha de trigo, 2 xícaras de açúcar, 3 ovos, 1 xícara de leite, 1 xícara de chocolate em pó, 1 colher de sopa de fermento em pó e 1/2 xícara de óleo.',
            'modo_preparo' => 'Em uma tigela, misture os ovos, o açúcar e o óleo. Acrescente o leite e o chocolate em pó. Adicione a farinha aos poucos e misture até obter uma massa homogênea. Por último, acrescente o fermento. Despeje em uma forma untada e asse em forno preaquecido a 180°C por aproximadamente 40 minutos.',
            'imagem' => 'receitas/bolo.jpg',
            'categoria_id' => 1,
        ]);

        Receita::create([
            'nome' => 'Lasanha à Bolonhesa',
            'descricao' => 'Tradicional lasanha de carne moída com molho de tomate, presunto e queijo, gratinada ao forno até ficar dourada e irresistível.',
            'ingredientes' => '500g de massa para lasanha, 500g de carne moída, 300g de queijo muçarela, 200g de presunto, molho de tomate, cebola, alho, sal e temperos a gosto.',
            'modo_preparo' => 'Refogue a cebola e o alho, acrescente a carne moída e cozinhe até dourar. Adicione o molho de tomate e deixe apurar. Em um refratário, faça camadas de molho, massa, presunto e queijo. Repita o processo até finalizar os ingredientes. Cubra com queijo e leve ao forno por 35 minutos.',
            'imagem' => 'receitas/lasanha.jpg',
            'categoria_id' => 2,
        ]);

        Receita::create([
            'nome' => 'Suco Natural de Laranja',
            'descricao' => 'Bebida refrescante preparada com laranjas frescas, perfeita para acompanhar refeições ou se refrescar nos dias quentes.',
            'ingredientes' => '6 laranjas maduras, gelo a gosto e açúcar ou adoçante opcional.',
            'modo_preparo' => 'Esprema as laranjas até obter o suco. Coe se desejar, adicione gelo e açúcar a gosto. Misture bem e sirva imediatamente para preservar o sabor e os nutrientes.',
            'imagem' => 'receitas/suco.jpg',
            'categoria_id' => 3,
        ]);

        Receita::create([
            'nome' => 'Macarrão ao Alho e Óleo',
            'descricao' => 'Receita clássica, simples e muito saborosa, preparada com alho dourado e azeite de oliva, ideal para refeições rápidas.',
            'ingredientes' => '500g de macarrão espaguete, 6 dentes de alho fatiados, 5 colheres de sopa de azeite, sal e cheiro-verde a gosto.',
            'modo_preparo' => 'Cozinhe o macarrão conforme as instruções da embalagem. Em uma frigideira, aqueça o azeite e doure o alho. Escorra o macarrão e misture ao alho e óleo. Finalize com cheiro-verde e sirva quente.',
            'imagem' => 'receitas/macarrao.jpg',
            'categoria_id' => 4,
        ]);

        Receita::create([
            'nome' => 'Hamburguer Caseiro',
            'descricao' => 'Lanche leve e nutritivo, preparado com frango desfiado, vegetais frescos e pão integral.',
            'ingredientes' => 'Pão integral, 200g de frango desfiado, alface, tomate, cenoura ralada, maionese light e sal a gosto.',
            'modo_preparo' => 'Misture o frango desfiado com a maionese light. Monte o sanduíche adicionando alface, tomate, cenoura e o recheio de frango entre as fatias de pão. Sirva fresco.',
            'imagem' => 'receitas/sanduiche.jpg',
            'categoria_id' => 5,
        ]);
    }
    
}
