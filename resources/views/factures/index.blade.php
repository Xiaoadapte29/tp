<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
   <h1>Liste des factures</h1>

<ul>
    @foreach ($factures as $facture)
        <li>
            Facture n°{{ $facture->id }} - Client: {{ $facture->client->nom }} {{ $facture->client->prenom }} - Date: {{ $facture->date }}
        </li>
    @endforeach
</ul>

</body>
</html>