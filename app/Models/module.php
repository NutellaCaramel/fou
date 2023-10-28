<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class module extends Model
{
    use HasFactory;
    protected $fillable=[
        'libelle',
        'duree',
        'montant',
        'id_nve',
        'mois'

    ];



    public function nve(){
        return $this->BelongsTo(nve::class);
        
     }

     
    public function paiement(){
        return $this->BelongsTo(paiement::class);
        
     }

}

