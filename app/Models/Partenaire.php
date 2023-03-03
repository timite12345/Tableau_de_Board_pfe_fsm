<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Partenaire extends Model
{
    use HasFactory;

    public function demandetransport(){
        return $this->belongsToMany(Demandetransport::class);
    }
    public function facture(){
        return $this->hasMany(Facture::class);
    }
}
