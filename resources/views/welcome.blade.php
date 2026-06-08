<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Receitas</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/css/adminlte.min.css">
</head>
<body class="hold-transition login-page">

<div class="login-box" style="width: 500px;">
    <div class="card">
        <div class="card-body login-card-body text-center">

            <h2>🍴 Sistema de Receitas</h2>

            <p class="mt-3">
                Compartilhe suas receitas favoritas e descubra novos pratos.
            </p>

            <div class="mt-4">
                <a href="{{ route('login') }}" class="btn btn-primary btn-block">
                    Entrar
                </a>

                <a href="{{ route('register') }}" class="btn btn-success btn-block mt-2">
                    Cadastrar-se
                </a>
            </div>

        </div>
    </div>
</div>

</body>
</html>