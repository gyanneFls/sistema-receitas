<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Receitas</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/css/adminlte.min.css">

    <style>
        body{
            min-height:100vh;
            margin:0;
            display:flex;
            justify-content:center;
            align-items:center;

            background:
                linear-gradient(rgba(0,0,0,.55), rgba(0,0,0,.55)),
                url('https://images.unsplash.com/photo-1504674900247-0877df9cc836?auto=format&fit=crop&w=1600&q=80');

            background-size:cover;
            background-position:center;
            font-family: Arial, sans-serif;
        }

        .welcome-card{
            width:600px;
            background:rgba(255,255,255,.95);
            border-radius:15px;
            padding:40px;
            text-align:center;
            box-shadow:0 10px 30px rgba(0,0,0,.3);
        }

        .logo{
            font-size:3rem;
            margin-bottom:10px;
            width: 150px;
        }

        .titulo{
            font-size:2.2rem;
            font-weight:bold;
            color:#e85d04;
        }

        .descricao{
            margin-top:15px;
            color:#555;
            font-size:1.1rem;
        }

        .botoes{
            margin-top:30px;
        }

        .btn-login{
            background:#ff6b35;
            border:none;
        }

        .btn-login:hover{
            background:#e85d04;
        }

        .categorias{
            margin-top:35px;
        }

        .categoria{
            display:inline-block;
            margin:5px;
            padding:8px 15px;
            border-radius:20px;
            background:#fff0e6;
            color:#e85d04;
            font-weight:bold;
        }
    </style>
</head>
<body>

    <div class="welcome-card">

        <img src="{{ asset('vendor/adminlte/dist/img/ursologo.png') }}" class="logo">

        <div class="titulo">
            Sistema de Receitas
        </div>

        <p class="descricao">
            Compartilhe suas receitas favoritas, descubra novos pratos e inspire outros cozinheiros.
        </p>

        <div class="botoes">
            <a href="{{ route('login') }}" class="btn btn-login btn-lg btn-block text-white">
                Entrar
            </a>

            <a href="{{ route('register') }}" class="btn btn-success btn-lg btn-block mt-3">
                Cadastrar-se
            </a>
        </div>
    <!--
        <div class="categorias">
            <span class="categoria">🍰 Doces</span>
            <span class="categoria">🥗 Fitness</span>
            <span class="categoria">🍝 Massas</span>
            <span class="categoria">🍔 Lanches</span>
        </div>
    -->
    </div>

</body>
</html>
