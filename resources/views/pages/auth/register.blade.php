<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ __('Cadastro') }} — ReceitasFáceis</title>

    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600&family=Inter:wght@400;500&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/css/adminlte.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

     @vite('resources/css/register.css')

</head>
<body>

<div class="register-wrapper">

    <div class="hero-panel">
        <div class="hero-logo">
            Receitas<span>Fáceis</span>
        </div>

        <div>
            <p class="hero-quote">
                "Compartilhe suas melhores receitas com o mundo."
            </p>

            <p class="hero-sub">
                Crie sua conta e comece a publicar suas receitas favoritas.
            </p>
        </div>
    </div>

    <div class="form-panel">
        <div class="form-card">

            <h1>Criar Conta</h1>
            <p class="subtitle">
                Preencha os dados abaixo para criar sua conta.
            </p>

            @if ($errors->any())
                <div class="session-alert">
                    {{ $errors->first() }}
                </div>
            @endif

            <form method="POST" action="{{ route('register.store') }}">
                @csrf

                <div class="field">
                    <label>Nome Completo</label>
                    <div class="input-wrap">
                        <i class="bi bi-person"></i>
                        <input
                            type="text"
                            name="name"
                            value="{{ old('name') }}"
                            placeholder="Seu nome completo"
                            required
                        >
                    </div>
                </div>

                <div class="field">
                    <label>Email</label>
                    <div class="input-wrap">
                        <i class="bi bi-envelope"></i>
                        <input
                            type="email"
                            name="email"
                            value="{{ old('email') }}"
                            placeholder="email@exemplo.com"
                            required
                        >
                    </div>
                </div>

                <div class="field">
                    <label>Senha</label>
                    <div class="input-wrap">
                        <i class="bi bi-lock-fill"></i>
                        <input
                            type="password"
                            name="password"
                            placeholder="Digite sua senha"
                            required
                        >
                    </div>
                </div>

                <div class="field">
                    <label>Confirmar Senha</label>
                    <div class="input-wrap">
                        <i class="bi bi-lock-fill"></i>
                        <input
                            type="password"
                            name="password_confirmation"
                            placeholder="Confirme sua senha"
                            required
                        >
                    </div>
                </div>

                <button type="submit" class="btn-register">
                    Criar Conta
                </button>

            </form>

            <p class="card-footer-text">
                Já possui uma conta?
                <a href="{{ route('login') }}">Entrar</a>
            </p>

        </div>
    </div>

</div>

</body>
</html>
