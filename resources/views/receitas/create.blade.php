@extends('adminlte::page')

@section('title', 'Sistema de Receitas')

@section('css')
    @vite('resources/css/create.css')
@stop

@section('content_header')
    
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Adicione sua receita favorita, ou crie uma!</h3>
        </div>
        <img src="{{ asset('vendor/adminlte/dist/img/ursologo.png') }}" class="logo">
        <div class="box">
        <form action="{{route('receitas.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
             <h1>Cadastre sua receita</h1>
             <br>
            <label>Nome da receita:
            <input type="text" name="nome" placeholder="Digite o nome da receita...">
            </label>
            <label>Descrição da receita:
            <input type="text" name="descricao" placeholder="Digite a descrição da receita...">
            </label>
            <label>Ingredientes:
            <input type="text" name="ingredientes" placeholder="Digite os ingredientes utilizados...">
            </label>
            <label>Modo de preparo:
           <textarea id="modo_preparo" name="modo_preparo" placeholder="Digite o modo de preparo..."></textarea>
           </label>

            <label for="categoria_id">Categoria:
            <select name="categoria_id" id="categoria_id" required>
                <option value="">Selecione uma categoria</option>
                @foreach($categorias as $categoria)
                    <option value="{{ $categoria->id }}">{{ $categoria->nome }}</option>
                @endforeach
            </select>
            </label>
            <label for="imagem">Foto da Receita:
            <input type="file" name="imagem" id="imagem" accept="image/*" required>
            </label>

            <button type="submit">Cadastrar</button>
            <a href="{{ route('receitas.index') }}" class="btn btn-secondary"> ← Voltar para lista </a>

        </form>

    </div>

    </div>
@stop
