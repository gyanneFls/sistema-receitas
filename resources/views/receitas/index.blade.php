@extends('adminlte::page')
 
@section('title', 'Kidelicia')
 
@section('content_header')
<div class="header-receitas">
    <h1>Sistema de Receitas</h1>
</div>
    
@stop
@section('css')
    @vite('resources/css/index.css')
@stop
 
@section('content')
 
    <div class="box">
 
        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif
 
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h1 class="m-0" style="font-size: 1.6rem;">Receitas Cadastradas</h1>
            <a href="{{ route('receitas.create') }}" class="btn-cadastrar">+ Nova Receita</a>
        </div>
 
        <table class="table recipe-table">
            <thead>
                <tr>
                    <th>Imagem</th>
                    <th>Nome</th>
                    <th>Categoria</th>
                    <th>Descrição</th>
                    <th class="text-center">Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach($receitas as $receita)
                    <tr>
                        <td>
                            @if($receita->imagem)
                                <img src="{{ asset('storage/' . $receita->imagem) }}" class="recipe-thumb">
                            @else
                                <div class="recipe-thumb recipe-thumb-empty">
                                    <i class="fas fa-utensils"></i>
                                </div>
                            @endif
                        </td>
                        <td><strong>{{ $receita->nome }}</strong></td>
                        <td><span class="badge-category">{{ $receita->categoria->nome }}</span></td>
                        <td class="text-muted">{{ Str::limit($receita->descricao, 60) }}</td>
                        <td class="text-center">
                            <button type="button" class="btn-action btn-action-view" data-toggle="modal" data-target="#modal{{ $receita->id }}" title="Ler mais">
                                <i class="fas fa-eye"></i>
                            </button>
                            <a href="{{ route('receitas.edit', $receita->id) }}" class="btn-action btn-action-edit" title="Editar">
                                <i class="fas fa-pen"></i>
                            </a>
                            <form action="{{ route('receitas.destroy', $receita->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Tem certeza que deseja excluir esta receita?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn-action btn-action-delete" title="Excluir">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
 




                     <div class="modal fade" id="modal{{ $receita->id }}" tabindex="-1">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="card-header d-flex justify-content-between align-items-center">
                                    <span class="card-title">{{ $receita->nome }}</span>
                                    <button type="button" class="close text-white" data-dismiss="modal">&times;</button>
                                </div>
                                <div class="modal-body">
                                    @if($receita->imagem)
                                        <img src="{{ asset('storage/' . $receita->imagem) }}" class="img-fluid mb-3 rounded">
                                    @endif
                                    <span class="badge-category mb-3 d-inline-block">{{ $receita->categoria->nome }}</span>
                                    <p><strong>Descrição:</strong><br>{{ $receita->descricao }}</p>
                                    <p><strong>Ingredientes:</strong><br>{{ $receita->ingredientes }}</p>
                                    <p><strong>Modo de Preparo:</strong><br>{{ $receita->modo_preparo }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </tbody>
        </table>
 
        {{ $receitas->links() }}
 
    </div>
 
@stop