<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
  <<h1>Détails de la facture</h1>
<p><strong>Numéro de facture :</strong> {{ $facture->numeroFacture }}</p>
<p><strong>Date :</strong> {{ $facture->date }}</p>

<h2>Liste des produits de la facture</h2>
<table border="1">
    <thead>
        <tr>
            <th>ID Produit</th>
            <th>Libellé</th>
            <th>Prix unitaire</th>
            <th>Quantité</th>
            <th>Total</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($facture->produits as $produit)
            <tr>
                <td>{{ $produit->id_produit }}</td>
                <td>{{ $produit->libelle }}</td>
                <td>{{ $produit->prix }}</td>
                <td>{{ $produit->pivot->qte }}</td>
                <td>{{ $produit->prix * $produit->pivot->qte }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
</body>
</html>