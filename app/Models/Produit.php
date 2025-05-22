<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
    use HasFactory;
    protected $table = ['libelle','prix'];
    
    public function factures(){
        return $this->belongsToMany(Facture::class, 'contient', 'id_produit', 'numeroFacture')
                ->withPivot('qte')
                ->withTimestamps();
    }
}
