
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion - Salon de Coiffure</title>
</head>
<body>

    <h1 align="center" class="form-title">CONNECTEZ-VOUS</h1>

    @if (session('status'))
        <p>{{ session('status') }}</p>
    @endif

    <div class="form-container" align="center">
        <form method="POST" action="{{ route('login.store') }}">
            @csrf

        <div>
            <label for="email">Email :</label>
            <input
                type="email"
                id="email"
                name="email"
                value="{{ old('email') }}"
                required
                autofocus
                class="form-input" 
                placeholder="example@email.com"
            >
            @error('email')
                <p>{{ $message }}</p>
            @enderror
        </div>

        <div >
            <label for="password">Mot de passe :</label>
            <input
                type="password"
                id="password"
                name="password"
                required
                class="form-input"
                placeholder="entrer votre mot de passe"
            >
            @error('password')
                <p>{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label>
                <input type="checkbox" name="remember">
                Se souvenir de moi
            </label>
        </div>

        <button type="submit">Me connecter</button>
    </form>

    <p>
        Pas encore de compte ?
        <a href="{{ route('register') }}">Créer un compte</a>
    </p>

    <p>
        <a href="{{ route('password.request') }}">Mot de passe oublié ?</a>
    </p>

</body>
</html>
