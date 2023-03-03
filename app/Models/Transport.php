<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transport extends Model
{
    use HasFactory;

    public function chauffeur(){
        return $this->hasOne(Chauffeur::class);
    }
    public function vehicule(){
        return $this->hasOne(Vehicule::class);
    }
    public function facture(){
        return $this->belongsTo(Facture::class);
    }
    public function demandetransport(){
        return $this->hasOne(Demandetransport::class);
    }
}
