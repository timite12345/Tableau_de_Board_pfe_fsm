<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Demandetransport extends Model
{
    use HasFactory;

    public function personne_malade(){
        return $this->hasOne(Personne_malade::class);
    }

    public function etbsante(){
        return $this->belongsTo(Etbsante::class);
    }

    public function partenaire(){
        return $this->hasMany(Partenaire::class);
    }
    public function user(){
        return $this->hasOne(User::class);
    }
}
