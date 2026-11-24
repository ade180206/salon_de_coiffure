
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Tableau de bord - Salon de Coiffure</title>
</head>
<body>

    <h1>Bienvenue au Salon de Coiffure</h1>

    <p>Bonjour {{ auth()->user()->name }} !</p>

    <p>
        Votre rôle :
        {{ auth()->user()->role->value }}
    </p>

    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button type="submit">Se déconnecter</button>
    </form>

</body>
</html>
