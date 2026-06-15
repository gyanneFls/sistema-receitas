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
        return view('receitas.create');
    }


     public function store(Request $request){
        $dadosDaReceita = $request->all();
        Receita::create($dadosDaReceita);

        return redirect()->route('receitas.index');
    }
}
