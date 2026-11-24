<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>inscription - salon de coiffure</title>
</head>
<body>
    

    <h1 align="center" class="form-title">CREER VOTRE COMPTRE</h1>

    <div class="form-container" align="center">
        <form method="POST" action="{{ route ('register.store') }}"">
        @csrf

        <div>
            <label for="name">Nom complet :</label>
            <input type="text" id="name" name="name"
                   value="{{ old('name') }}" required placeholder="veuillez entrer votre nom complet" class="form-input">
            @error('name')
                <p>{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="email">Email :</label>
            <input type="email" id="email" name="email"
                   value="{{ old('email') }}" required placeholder="veuillez entrer votre email " class="form-input">
            @error('email')
                <p>{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="password">Mot de passe :</label>
            <input type="password" id="password" name="password" required placeholder="veuillez entrer votre mot de passe " class="form-input">
            @error('password')
                <p>{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="password_confirmation">Confirmer le mot de passe :</label>
            <input type="password" id="password_confirmation"
                   name="password_confirmation" required placeholder=" entrer le même mot de passe pour confirmation " class="form-input">
        </div>

         <button type="submit">S'inscrire</button>
         <p>avez-vous déjà un compte ? <a href="{{ route('login') }}">connectez-vous</a></p>

    </form>
    </div>

    
</body>
</html>