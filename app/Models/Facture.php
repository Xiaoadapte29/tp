<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Facture extends Model
{
    use HasFactory;
    protected $fillable = ['id_client','date'];

    public function client(){
        return $this->belongsTo(Client::class, 'id_client', 'id_client');
    }

    public function produits(){
        return $this->belongsToMany(Produit::class, 'contient', 'numeroFacture', 'id_produit')
                ->withPivot('qte')
                ->withTimestamps();
    }
}
