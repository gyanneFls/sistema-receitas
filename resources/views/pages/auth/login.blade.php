<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ __('Entrar') }} — ReceitasFáceis</title>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600&family=Inter:wght@400;500&display=swap" rel="stylesheet">

    <!-- AdminLTE & Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/css/adminlte.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <style>
        /* ── Tokens ───────────────────────────────────────────── */
        :root {
            --brand-primary:   #C84B31;   /* páprica quente */
            --brand-secondary: #E8A87C;   /* laranja mel */
            --cream:           #FAF6F0;   /* fundo neutro */
            --text-main:       #2D2A26;
            --text-muted:      #7A7269;
            --border:          #E5DDD5;
            --radius:          12px;
        }

        /* ── Página ───────────────────────────────────────────── */
        body {
            background-color: var(--cream);
            font-family: 'Inter', sans-serif;
            color: var(--text-main);
            min-height: 100vh;
        }

        .login-wrapper {
            min-height: 100vh;
            display: grid;
            grid-template-columns: 1fr 1fr;
        }

        /* ── Painel esquerdo — imagem/hero ────────────────────── */
        .hero-panel {
            background:
                linear-gradient(160deg, rgba(200,75,49,.72) 0%, rgba(45,42,38,.85) 100%),
                url('https://images.unsplash.com/photo-1504674900247-0877df9cc836?w=900&q=80')
                center/cover no-repeat;
            display: flex;
            flex-direction: column;
            justify-content: flex-end;
            padding: 3rem;
            color: #fff;
        }

        .hero-logo {
            font-family: 'Playfair Display', serif;
            font-size: 2rem;
            letter-spacing: -.5px;
            margin-bottom: auto;
        }

        .hero-logo span { color: var(--brand-secondary); }

        .hero-quote {
            font-size: 1.55rem;
            font-family: 'Playfair Display', serif;
            line-height: 1.35;
            margin-bottom: .75rem;
        }

        .hero-sub {
            font-size: .875rem;
            opacity: .75;
        }

        /* ── Painel direito — formulário ──────────────────────── */
        .form-panel {
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 3rem 2rem;
        }

        .form-card {
            width: 100%;
            max-width: 420px;
        }

        .form-card h1 {
            font-family: 'Playfair Display', serif;
            font-size: 1.75rem;
            color: var(--text-main);
            margin-bottom: .25rem;
        }

        .form-card .subtitle {
            font-size: .9rem;
            color: var(--text-muted);
            margin-bottom: 2rem;
        }

        /* ── Campos ───────────────────────────────────────────── */
        .field { margin-bottom: 1.25rem; }

        .field label {
            display: block;
            font-size: .8rem;
            font-weight: 500;
            color: var(--text-muted);
            text-transform: uppercase;
            letter-spacing: .06em;
            margin-bottom: .4rem;
        }

        .input-wrap {
            position: relative;
        }

        .input-wrap i {
            position: absolute;
            left: .9rem;
            top: 50%;
            transform: translateY(-50%);
            font-size: 1rem;
            color: var(--brand-secondary);
            pointer-events: none;
        }

        .input-wrap input {
            width: 100%;
            padding: .7rem 1rem .7rem 2.5rem;
            border: 1px solid var(--border);
            border-radius: var(--radius);
            background: #fff;
            font-family: 'Inter', sans-serif;
            font-size: .95rem;
            color: var(--text-main);
            transition: border-color .2s, box-shadow .2s;
            outline: none;
        }

        .input-wrap input:focus {
            border-color: var(--brand-primary);
            box-shadow: 0 0 0 3px rgba(200,75,49,.12);
        }

        .input-wrap .toggle-pwd {
            position: absolute;
            right: .9rem;
            top: 50%;
            transform: translateY(-50%);
            background: none;
            border: none;
            cursor: pointer;
            color: var(--text-muted);
            font-size: 1rem;
            padding: 0;
            pointer-events: all;
        }

        /* ── Erros de validação ───────────────────────────────── */
        .invalid-feedback { display: block; font-size: .8rem; color: var(--brand-primary); margin-top: .3rem; }

        /* ── Linha lembre-me / esqueceu ──────────────────────── */
        .extras {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 1.5rem;
            font-size: .875rem;
        }

        .extras label { display: flex; align-items: center; gap: .4rem; cursor: pointer; color: var(--text-main); }

        .extras input[type="checkbox"] {
            accent-color: var(--brand-primary);
            width: 15px; height: 15px;
        }

        .link-forgot {
            color: var(--brand-primary);
            text-decoration: none;
            font-weight: 500;
        }

        .link-forgot:hover { text-decoration: underline; }

        /* ── Botão ────────────────────────────────────────────── */
        .btn-login {
            width: 100%;
            padding: .8rem;
            background: var(--brand-primary);
            color: #fff;
            border: none;
            border-radius: var(--radius);
            font-family: 'Inter', sans-serif;
            font-size: 1rem;
            font-weight: 500;
            cursor: pointer;
            transition: background .2s, transform .1s;
        }

        .btn-login:hover  { background: #b03e27; }
        .btn-login:active { transform: scale(.98); }

        /* ── Rodapé do card ───────────────────────────────────── */
        .card-footer-text {
            text-align: center;
            font-size: .875rem;
            color: var(--text-muted);
            margin-top: 1.5rem;
        }

        .card-footer-text a {
            color: var(--brand-primary);
            font-weight: 500;
            text-decoration: none;
        }

        .card-footer-text a:hover { text-decoration: underline; }

        /* ── Alerta de sessão ────────────────────────────────── */
        .session-alert {
            background: #FFF4E5;
            border: 1px solid #F5C87A;
            border-radius: var(--radius);
            padding: .7rem 1rem;
            font-size: .875rem;
            color: #7A4F00;
            margin-bottom: 1.25rem;
        }

        /* ── Responsivo ──────────────────────────────────────── */
        @media (max-width: 768px) {
            .login-wrapper { grid-template-columns: 1fr; }
            .hero-panel { display: none; }
        }
    </style>
</head>
<body>

<div class="login-wrapper">

    {{-- ── Painel esquerdo — hero visual ──────────────────────── --}}
    <div class="hero-panel">
        <div class="hero-logo">Receitas<span>Fáceis</span></div>

        <div>
            <p class="hero-quote">
                "A cozinha é o coração de todo lar."
            </p>
            <p class="hero-sub">
                Milhares de receitas testadas, passo a passo.
            </p>
        </div>
    </div>

    {{-- ── Painel direito — formulário ─────────────────────────── --}}
    <div class="form-panel">
        <div class="form-card">

            <h1>{{ __('Faça Login com sua conta!') }}</h1>
            <p class="subtitle">{{ __('Digite seu email e senha abaixo para entrar.') }}</p>

            {{-- Status de sessão (ex.: e-mail verificado, logout forçado) --}}
            @if (session('status'))
                <div class="session-alert">
                    <i class="bi bi-info-circle-fill me-1"></i>
                    {{ session('status') }}
                </div>
            @endif

            {{-- Erros gerais de validação --}}
            @if ($errors->any())
                <div class="session-alert" style="background:#FEE9E9; border-color:#F5A0A0; color:#7A0000;">
                    <i class="bi bi-exclamation-circle-fill me-1"></i>
                    {{ $errors->first() }}
                </div>
            @endif

            <form method="POST" action="{{ route('login.store') }}">
                @csrf

                {{-- E-mail --}}
                <div class="field">
                    <label for="email">{{ __('Endereço de email') }}</label>
                    <div class="input-wrap">
                        <i class="bi bi-envelope"></i>
                        <input
                            id="email"
                            name="email"
                            type="email"
                            value="{{ old('email') }}"
                            required
                            autofocus
                            autocomplete="email"
                            placeholder="email@exemplo.com"
                        >
                    </div>
                    @error('email')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>

                {{-- Senha --}}
                <div class="field">
                    <label for="password">{{ __('Senha') }}</label>
                    <div class="input-wrap">
                        <i class="bi bi-lock"></i>
                        <input
                            id="password"
                            name="password"
                            type="password"
                            required
                            autocomplete="current-password"
                            placeholder="{{ __('Sua senha') }}"
                        >
                        <button type="button" class="toggle-pwd" onclick="togglePwd()" aria-label="Mostrar/ocultar senha">
                            <i class="bi bi-eye" id="pwd-icon"></i>
                        </button>
                    </div>
                    @error('password')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>

                {{-- Lembre-me + esqueceu a senha --}}
                <div class="extras">
                    <label>
                        <input
                            type="checkbox"
                            name="remember"
                            {{ old('remember') ? 'checked' : '' }}
                        >
                        {{ __('Lembrar de mim') }}
                    </label>

                    @if (Route::has('password.request'))
                        <a class="link-forgot" href="{{ route('password.request') }}">
                            {{ __('Esqueceu sua senha?') }}
                        </a>
                    @endif
                </div>

                {{-- Botão de login --}}
                <button type="submit" class="btn-login" data-test="login-button">
                    {{ __('Entrar') }}
                </button>
            </form>

            {{-- Link para cadastro --}}
            <p class="card-footer-text">
                {{ __('Ainda não tem uma conta?') }}
                <a href="{{ route('register') }}">{{ __('Cadastre-se') }}</a>
            </p>

        </div>
    </div>

</div>

{{-- Bootstrap JS (AdminLTE dep.) --}}
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<script>
    function togglePwd() {
        const input = document.getElementById('password');
        const icon  = document.getElementById('pwd-icon');
        if (input.type === 'password') {
            input.type = 'text';
            icon.className = 'bi bi-eye-slash';
        } else {
            input.type = 'password';
            icon.className = 'bi bi-eye';
        }
    }
</script>

</body>
</html>
