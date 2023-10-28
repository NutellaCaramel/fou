<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class paiement extends Model
{
    use HasFactory;

public function apprenant(){
    return $this->hasMany(Apprenant::class);
}

public function module(){
    return $this->hasMany(Module::class);
}

}

