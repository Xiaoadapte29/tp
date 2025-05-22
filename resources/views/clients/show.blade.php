<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
  <h1>Détails du client</h1>
<p><strong>ID Client :</strong> {{ $client->id_client }}</p>
<p><strong>Nom :</strong> {{ $client->nom }}</p>
<p><strong>Prénom :</strong> {{ $client->prenom }}</p>

<h2>Liste des factures</h2>
<ul>
    @foreach ($client->factures as $facture)
        <li>
            <strong>Numéro de facture :</strong> {{ $facture->numeroFacture }}<br>
            <strong>Date :</strong> {{ $facture->date }}<br>
            <a href="{{ route('factures.show', $facture->numeroFacture) }}">Voir les produits de cette facture</a>
        </li>
    @endforeach
</ul>


</body>
</html>