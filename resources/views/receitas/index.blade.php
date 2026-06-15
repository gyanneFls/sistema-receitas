@extends('adminlte::page')

@section('title', 'Sistema de Receitas')

@section('content_header')
    <h1>Sistema de Receitas</h1>
    <a href="{{ route('receitas.create') }}" class="btn btn-primary mb-3">
        Nova Receita
    </a>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Conheça novas receitas e descubra sabores!</h3>
        </div>



<div class="row">

@foreach($receitas as $receita)

<div class="col-md-4">

    <div class="card">

        @if($receita->imagem)
            <img src="{{ asset('storage/' . $receita->imagem) }}"
                 height="200"
                 style="object-fit: cover;">
        @endif

        <div class="card-body">

            <h4>{{ $receita->nome }}</h4>

            <p>
                {{ Str::limit($receita->descricao, 100) }}
            </p>

            <a href="{{ route('receitas.show', $receita->id) }}"
               class="btn btn-primary">
                Ler mais
            </a>

        </div>

    </div>

</div>

@endforeach

</div>

@stop