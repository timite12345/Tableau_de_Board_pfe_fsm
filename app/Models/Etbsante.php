<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etbsante extends Model
{
    use HasFactory;
    protected $fillable = [
        'refEtb',
        'nom',
        'adresseEtb',
        'email',
        'tel',
        'estValide'
    ];

    public function demandetransport(){
        return $this->hasMany(Demandetransport::class);
    }

    public function facture(){
        return $this->hasMany(Facture::class);
    }
    public function type_etb(){
        return $this->hasOne(Type_etb::class);
    }
}
