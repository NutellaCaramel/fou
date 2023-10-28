<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class nve extends Model
{
    use HasFactory;

    public function modules(){
        return $this->hasmany(module::class);
        
     }
}
