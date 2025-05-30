<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Modifier Etudiants</title>
</head>
<body>
    <div>
        <h1>Modifier un étudiant</h1>
        <form action="{{ route('admin.etudiants.update', $etudiant->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div>
                <label for="Nom">Nom:</label>
                <input type="text" id="Nom" name="nom" value="{{ $etudiant->nom }}" required>
            </div>
            <div>
                <label for="Prenom">Prénom:</label>
                <input type="text" id="Prenom" name="prenom" value="{{ $etudiant->prenom }}" required>
            </div>
            <div>
                <label for="Date_naissance">Date de naissance</label>
                <input type="date" id="Date_naissance" name="date_naissance" value="{{ $etudiant->date_naissance }}" required>
            </div>
            <button type="submit">Modifier</button>
            <a href="{{ route('admin.etudiants.index') }}">Annuler</a>
        </form>
</body>
</html>