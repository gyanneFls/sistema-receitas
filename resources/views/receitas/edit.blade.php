@extends('adminlte::page')

@section('title', 'Edite sua receita')

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
        <form action="{{route('receitas.update', $receita->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
             <h1>Ajuste sua receita</h1>
             <br>
            <label>Nome da receita:
            <input type="text" name="nome" value="{{ $receita->nome }}" placeholder="Digite o nome da receita..." required>
            </label>
            <label>Descrição da receita:
            <input type="text" name="descricao" value="{{ $receita->descricao }}" placeholder="Digite a descrição da receita..." required>
            </label>
            <label>Ingredientes:
            <input type="text" name="ingredientes" value="{{ $receita->ingredientes }}" placeholder="Digite os ingredientes utilizados..." required>
            </label>
            <label>Modo de preparo:
           <textarea id="modo_preparo" name="modo_preparo" placeholder="Digite o modo de preparo...">{{ $receita->modo_preparo }}</textarea>
           </label>

            <label>Categoria:</label>
            <select name="categoria_id"
                    class="form-control mb-3"
                    required>

                @foreach($categorias as $categoria)
                    <option value="{{ $categoria->id }}"
                        {{ $receita->categoria_id == $categoria->id ? 'selected' : '' }}>
                        {{ $categoria->nome }}
                    </option>
                @endforeach

            </select>

              <label>Imagem atual:</label><br>

            @if($receita->imagem)
                <img src="{{ asset('storage/' . $receita->imagem) }}"
                     width="200"
                     class="mb-3">
            @endif

            <br>

            <label>Nova imagem (opcional):</label>
            <input type="file"
                   name="imagem"
                   class="form-control mb-3"
                   accept="image/*">

            <button type="submit">Salvar alterações</button>
            <a href="{{ route('receitas.index') }}" class="btn btn-secondary"> Cancelar </a>

        </form>

    </div>

    </div>
@stop
