@extends('adminlte::page')

@section('title', 'Sistema de Receitas')

@section('content_header')
    <h1>Sistema de Receitas</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Adicione sua receita favorita, ou crie uma!</h3>
        </div>

        <div class="box">

        <form action="{{route('receitas.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
             <h1>Cadastre sua receita</h1>
            <label>Nome da receita</label>
            <input type="text" name="nome" placeholder="Digite o nome da receita...">

            <label>Ingredientes</label>
            <input type="text" name="ingredientes" placeholder="Digite os ingredientes utilizados...">

            <label>Modo de preparo</label>
           <textarea id="modo_preparo" name="modo_preparo" placeholder="Digite o modo de preparo..."></textarea>

            <label for="categoria_id">Categoria:</label>
            <select name="categoria_id" id="categoria_id" required>
                <option value="">Selecione uma categoria</option>
                @foreach($categorias as $categoria)
                    <option value="{{ $categoria->id }}">{{ $categoria->nome }}</option>
                @endforeach
            </select>

            <label for="imagem">Foto da Receita:</label>
            <input type="file" name="imagem" id="imagem" accept="image/*" required>

            <button type="submit">Cadastrar</button>
            <a href="{{ route('receitas.index') }}" class="btn btn-secondary"> ← Voltar para lista </a>

        </form>

    </div>

    </div>
@stop
