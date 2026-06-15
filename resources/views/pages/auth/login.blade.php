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

     @vite('resources/css/login.css')

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
