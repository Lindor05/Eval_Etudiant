<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Ajouter un étudiant</h1>
    <form action="{{ route('admin.etudiants.store') }}" method="POST">
        @csrf
        <div>
            <label for="Nom">Nom:</label>
            <input type="text" id="Nom" name="nom" required>
        </div>
        <div>
            <label for="Prenom">Prénom:</label>
            <input type="text" id="Prenom" name="Prenom" required>
        </div>
        <div>
            <label for="Date_naissance">Date de naissance</label>
            <input type="date" id="Date_naissance" name="Date_naissance" required>
            
        </div>
        <button type="submit">Ajouter</button>
        <a href="{{ route('admin.etudiants.index') }}">Annuler</a>
    </form>
</body>
</html>