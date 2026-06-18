<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Receita;
use App\Models\Categorias;
use Illuminate\Support\Facades\Storage;


class ReceitaController extends Controller
{
    public function index(){

       $receitas = Receita::with('categoria')->paginate(9);
        
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
    public function destroy(Receita $receita)
{
    // Apaga a imagem do storage
    if ($receita->imagem && Storage::disk('public')->exists($receita->imagem)) {
        Storage::disk('public')->delete($receita->imagem);
    }

    // Apaga a receita
    $receita->delete();

    return redirect()
        ->route('receitas.index')
        ->with('success', 'Receita excluída com sucesso!');
}
}
