@extends('adminlte::page')
 
@section('title', 'Kidelicia')

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
 
        <div class="row">
        @foreach($receitas as $receita)

            <div class="col-md-4 mb-4">
                <div class="recipe-card">

                    @if($receita->imagem)
                        <img src="{{ asset('storage/' . $receita->imagem) }}" class="recipe-img">
                    @else
                        <div class="recipe-img-empty">
                            <i class="fas fa-utensils"></i>
                        </div>
                    @endif

                    <div class="recipe-content">

                        <span class="badge-category">
                            {{ $receita->categoria->nome }}
                        </span>

                        <h4>{{ $receita->nome }}</h4>

                        <p>
                            {{ Str::limit($receita->descricao, 80) }}
                        </p>

                        <div class="recipe-actions">

                            <button type="button"
                                class="btn-action btn-action-view"
                                data-toggle="modal"
                                data-target="#modal{{ $receita->id }}">
                                <i class="fas fa-eye"></i>
                            </button>

                            <a href="{{ route('receitas.edit', $receita->id) }}"
                            class="btn-action btn-action-edit">
                                <i class="fas fa-pen"></i>
                            </a>

                            <form action="{{ route('receitas.destroy', $receita->id) }}"
                                method="POST"
                                class="d-inline"
                                onsubmit="return confirm('Deseja excluir esta receita?')">

                                @csrf
                                @method('DELETE')

                                <button type="submit"
                                    class="btn-action btn-action-delete">
                                    <i class="fas fa-trash"></i>
                                </button>

                            </form>

                        </div>

                    </div>

                </div>
            </div>

            <!-- Modal -->
            <div class="modal fade" id="modal{{ $receita->id }}" tabindex="-1">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">

                        <div class="card-header d-flex justify-content-between align-items-center">
                            <span class="card-title">{{ $receita->nome }}</span>

                            <button type="button"
                                    class="close text-white"
                                    data-dismiss="modal">
                                &times;
                            </button>
                        </div>

                        <div class="modal-body">

                            @if($receita->imagem)
                                <img src="{{ asset('storage/' . $receita->imagem) }}"
                                    class="receita-imagem img-fluid mb-3 rounded">
                            @endif

                            <span class="badge-category">
                                {{ $receita->categoria->nome }}
                            </span>

                            <hr>

                            <p><strong>Descrição:</strong><br>{{ $receita->descricao }}</p>

                            <p><strong>Ingredientes:</strong><br>{{ $receita->ingredientes }}</p>

                            <p><strong>Modo de Preparo:</strong><br>{{ $receita->modo_preparo }}</p>

                        </div>

                    </div>
                </div>
            </div>

            @endforeach
        </div>

    <div class="mt-4">
        {{ $receitas->links() }}
    </div>
 
        {{ $receitas->links() }}
 
    </div>
 
@stop