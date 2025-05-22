<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="container">
   <h1>Créer un client</h1>

<form action="{{ route('clients.store') }}" method="POST">
    @csrf
    <label for="nom">Nom:</label>
    <input type="text" name="nom" id="nom" required>
     <label for="nom">Prenom:</label>
    <input type="text" name="prenom" id="prenom" required>

    <button type="submit">Ajouter</button>
</form>

</div>    
</body>
</html>