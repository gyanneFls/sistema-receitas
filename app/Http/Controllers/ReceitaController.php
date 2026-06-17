<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Receita;
use App\Models\Categorias;


class ReceitaController extends Controller
{
    public function index(){

        $receitas = Receita::all();
        
        return view('receitas.index', compact('receitas'));

    }

    public function create(){
        $categorias = Categorias::all();
        return view('receitas.create', compact('categorias'));
    }


    public function store(Request $request){
        $dadosDaReceita = $request->all();

        if ($request->hasFile('imagem')) {
            $dadosDaReceita['imagem'] = $request->file('imagem')
                ->store('receitas', 'public');
        }
        Receita::create($dadosDaReceita);

        return redirect()->route('receitas.index');
    }
    public function edit(Receita $receita)
    {
        $categorias = Categorias::all();

        return view('receitas.edit', compact('receita', 'categorias'));
    }
    public function update(Request $request, Receita $receita)
    {
       $dadosDaReceita = $request->all();

        if ($request->hasFile('imagem')) {
            $dadosDaReceita['imagem'] = $request->file('imagem')
                ->store('receitas', 'public');
        }

        $receita->update($dadosDaReceita);

        return redirect()
            ->route('receitas.index')
            ->with('success', 'Receita atualizada com sucesso!');
    }
}
