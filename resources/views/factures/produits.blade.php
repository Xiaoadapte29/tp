<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h2>Produits de la facture n°{{ $facture->numeroFacture }}</h2>
<ul>
    @foreach ($facture->produits as $produit)
        <li>
            {{ $produit->libelle }} - Prix: {{ $produit->prix }} MAD - Quantité: {{ $produit->pivot->qte }}
        </li>
    @endforeach
</ul>

</body>
</html>