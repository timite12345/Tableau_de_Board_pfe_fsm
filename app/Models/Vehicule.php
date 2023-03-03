<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicule extends Model
{
    use HasFactory;

    public function transport(){
        return $this->hasMany(Transport::class);
    }

    public function type_permis(){
        return $this->hasMany(Type_permis::class);
    }
}
