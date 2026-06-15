<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ __('Cadastro') }} — ReceitasFáceis</title>

    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600&family=Inter:wght@400;500&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/css/adminlte.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <style>
        :root {
            --brand-primary: #C84B31;
            --brand-secondary: #E8A87C;
            --cream: #FAF6F0;
            --text-main: #2D2A26;
            --text-muted: #7A7269;
            --border: #E5DDD5;
            --radius: 12px;
        }

        body {
            background-color: var(--cream);
            font-family: 'Inter', sans-serif;
            color: var(--text-main);
            min-height: 100vh;
        }

        .register-wrapper {
            min-height: 100vh;
            display: grid;
            grid-template-columns: 1fr 1fr;
        }

        .hero-panel {
            background:
                linear-gradient(160deg, rgba(200,75,49,.72) 0%, rgba(45,42,38,.85) 100%),
                url('https://images.unsplash.com/photo-1495521821757-a1efb6729352?w=900&q=80')
                center/cover no-repeat;
            display: flex;
            flex-direction: column;
            justify-content: flex-end;
            padding: 3rem;
            color: white;
        }

        .hero-logo {
            font-family: 'Playfair Display', serif;
            font-size: 2rem;
            margin-bottom: auto;
        }

        .hero-logo span {
            color: var(--brand-secondary);
        }

        .hero-quote {
            font-size: 1.5rem;
            font-family: 'Playfair Display', serif;
            line-height: 1.3;
        }

        .hero-sub {
            opacity: .8;
            margin-top: .5rem;
        }

        .form-panel {
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 3rem;
        }

        .form-card {
            width: 100%;
            max-width: 450px;
        }

        .form-card h1 {
            font-family: 'Playfair Display', serif;
            margin-bottom: .5rem;
        }

        .subtitle {
            color: var(--text-muted);
            margin-bottom: 2rem;
        }

        .field {
            margin-bottom: 1.2rem;
        }

        .field label {
            display: block;
            margin-bottom: .4rem;
            font-size: .85rem;
            color: var(--text-muted);
            text-transform: uppercase;
        }

        .input-wrap {
            position: relative;
        }

        .input-wrap i {
            position: absolute;
            left: .9rem;
            top: 50%;
            transform: translateY(-50%);
            color: var(--brand-secondary);
        }

        .input-wrap input {
            width: 100%;
            padding: .8rem .8rem .8rem 2.5rem;
            border: 1px solid var(--border);
            border-radius: var(--radius);
            outline: none;
        }

        .input-wrap input:focus {
            border-color: var(--brand-primary);
            box-shadow: 0 0 0 3px rgba(200,75,49,.15);
        }

        .btn-register {
            width: 100%;
            border: none;
            padding: .9rem;
            border-radius: var(--radius);
            background: var(--brand-primary);
            color: white;
            font-weight: 600;
            cursor: pointer;
        }

        .btn-register:hover {
            background: #b03e27;
        }

        .card-footer-text {
            text-align: center;
            margin-top: 1.5rem;
            color: var(--text-muted);
        }

        .card-footer-text a {
            color: var(--brand-primary);
            font-weight: 600;
            text-decoration: none;
        }

        .invalid-feedback {
            display: block;
            color: #dc3545;
            margin-top: .3rem;
            font-size: .85rem;
        }

        .session-alert {
            background: #FEE9E9;
            border: 1px solid #F5A0A0;
            color: #7A0000;
            padding: .8rem;
            border-radius: var(--radius);
            margin-bottom: 1rem;
        }

        @media (max-width: 768px) {
            .register-wrapper {
                grid-template-columns: 1fr;
            }

            .hero-panel {
                display: none;
            }
        }
    </style>
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
                        <i class="bi bi-lock"></i>
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
