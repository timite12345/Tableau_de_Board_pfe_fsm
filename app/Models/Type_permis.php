<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type_permis extends Model
{
    use HasFactory;

    public function chauffeur(){
        return $this->hasMany(Chauffeur::class);
    }
}
