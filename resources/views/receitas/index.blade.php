@extends('adminlte::page')

@section('title', 'Sistema de Receitas')

@section('content_header')
    <h1>Sistema de Receitas</h1>
@stop

 
@section('content')
 
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
 
    <a href="{{ route('receitas.create') }}" class="btn btn-warning mb-3">
        + Nova Receita
    </a>
 
    <div class="row">
        @foreach($receitas as $receita)
            <div class="col-md-4 mb-4">
                <div class="card">
                    @if($receita->imagem)
                        <img src="{{ asset('storage/' . $receita->imagem) }}" class="card-img-top" style="height: 180px; object-fit: cover;">
                    @endif
                    <div class="card-body">
                        <span class="badge badge-warning">{{ $receita->categoria->nome }}</span>
                        <h5 class="mt-2">{{ $receita->titulo }}</h5>
                        <p class="text-muted">{{ Str::limit($receita->descricao, 70) }}</p>
 
                        <button type="button" class="btn btn-sm btn-outline-warning" data-toggle="modal" data-target="#modal{{ $receita->id }}">
                            Ler mais
                        </button>
                        <a href="{{ route('receitas.edit', $receita->id) }}" class="btn btn-sm btn-outline-secondary">Editar</a>
                        <form action="{{ route('receitas.destroy', $receita->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Tem certeza que deseja excluir esta receita?')">

                             @csrf
                              @method('DELETE')

                                <button type="submit" class="btn btn-sm btn-outline-danger">
                                   Excluir
                                  </button>
                                </form>
                    </div>
                </div>
            </div>
 
            {{-- Modal --}}
            <div class="modal fade" id="modal{{ $receita->id }}" tabindex="-1">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">{{ $receita->titulo }}</h5>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body">
                            @if($receita->imagem)
                                <img src="{{ asset('storage/' . $receita->imagem) }}" class="img-fluid mb-3">
                            @endif
                            <p><strong>Categoria:</strong> {{ $receita->categoria->nome }}</p>
                            <p><strong>Descrição:</strong><br>{{ $receita->descricao }}</p>
                            <p><strong>Ingredientes:</strong><br>{{ $receita->ingredientes }}</p>
                            <p><strong>Modo de Preparo:</strong><br>{{ $receita->modo_preparo }}</p>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
 
   
 
@stop
