
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion - Salon de Coiffure</title>
</head>
<body>

    <h1>CONNECTEZ-VOUS</h1>

    @if (session('status'))
        <p>{{ session('status') }}</p>
    @endif

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
            >
            @error('email')
                <p>{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="password">Mot de passe :</label>
            <input
                type="password"
                id="password"
                name="password"
                required
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
