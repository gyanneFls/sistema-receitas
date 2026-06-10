@extends('adminlte::page')

@section('title', 'Receitas')

@section('content_header')
    <h1>🍳 Sistema de Receitas</h1>
@stop

@section('content')

<div class="container-fluid">

    <!-- MENU HORIZONTAL -->
    <div class="card mb-4">
        <div class="card-body d-flex justify-content-around flex-wrap">

            <a href="#" class="btn btn-outline-primary">Receitas Fáceis</a>
            <a href="#" class="btn btn-outline-success">Fitness</a>
            <a href="#" class="btn btn-outline-danger">Doces</a>
            <a href="#" class="btn btn-outline-warning">Salgados</a>
            <a href="#" class="btn btn-outline-info">Massas</a>
            <a href="#" class="btn btn-outline-secondary">Bebidas</a>

        </div>
    </div>

    <!-- RECEITAS EM DESTAQUE -->
<h3 class="mb-3">🍴 Receitas em Destaque</h3>

<div class="d-flex overflow-auto pb-3">

    <!-- Receita 1 -->
    <div class="card mr-3" style="min-width: 350px;">
        <img src="https://picsum.photos/350/200?1"
             class="card-img-top">

        <div class="card-body">
            <h5>Receita 1</h5>
            <a href="#" class="btn btn-primary">
                Ver Receita
            </a>
        </div>
    </div>

    <!-- Receita 2 -->
    <div class="card mr-3" style="min-width: 350px;">
        <img src="https://picsum.photos/350/200?2"
             class="card-img-top">

        <div class="card-body">
            <h5>Receita 2</h5>
            <a href="#" class="btn btn-primary">
                Ver Receita
            </a>
        </div>
    </div>

    <!-- Receita 3 -->
    <div class="card mr-3" style="min-width: 350px;">
        <img src="https://picsum.photos/350/200?3"
             class="card-img-top">

        <div class="card-body">
            <h5>Receita 3</h5>
            <a href="#" class="btn btn-primary">
                Ver Receita
            </a>
        </div>
    </div>

</div>

    <!-- PRINCIPAIS RECEITAS -->
    <h3 class="mb-3">🔥 Principais Receitas</h3>

    <div class="row">

        @for($i = 1; $i <= 4; $i++)
        <div class="col-md-3">
            <div class="card">

                <img src="https://picsum.photos/300/200?{{$i}}"
                     class="card-img-top">

                <div class="card-body">
                    <h5>Receita {{$i}}</h5>
                    <p>Descrição rápida da receita.</p>

                    <a href="#" class="btn btn-primary">
                        Ver Receita
                    </a>
                </div>

            </div>
        </div>
        @endfor

    </div>

    <!-- MAIS FAMOSAS -->
    <h3 class="mt-5 mb-3">⭐ Mais Famosas</h3>

    <div class="row">

        @for($i = 5; $i <= 8; $i++)
        <div class="col-md-3">
            <div class="card">

                <img src="https://picsum.photos/300/200?{{$i}}"
                     class="card-img-top">

                <div class="card-body">
                    <h5>Receita {{$i}}</h5>

                    <a href="#" class="btn btn-warning">
                        Ver Receita
                    </a>
                </div>

            </div>
        </div>
        @endfor

    </div>

    <!-- FITNESS -->
    <h3 class="mt-5 mb-3">💪 Fitness</h3>

    <div class="row">

        @for($i = 9; $i <= 12; $i++)
        <div class="col-md-3">
            <div class="card">

                <img src="https://picsum.photos/300/200?{{$i}}"
                     class="card-img-top">

                <div class="card-body">
                    <h5>Receita Fitness {{$i}}</h5>

                    <a href="#" class="btn btn-success">
                        Ver Receita
                    </a>
                </div>

            </div>
        </div>
        @endfor

    </div>

</div>

@stop