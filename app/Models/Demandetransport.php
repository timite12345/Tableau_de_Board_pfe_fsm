<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Demandetransport extends Model
{
    use HasFactory;
    protected $fillable = [
        'condTransp',
        'nom',
        'prenom',
        'email',
        'date_Dep',
        'adresse_Dep',
        'adresse_Arriv',
        'estUrgent',
        'estFacture',
        'refEtb',
        'idMalade',
        'idChauffeur',

    ];

    public function personne_malade(){
        return $this->belongsToMany(Personne_malade::class);
    }

    public function etbsante(){
        return $this->belongsTo(Etbsante::class);
    }

    public function partenaire(){
        return $this->belongsToMany(Partenaire::class);
    }
    public function user(){
        return $this->hasOne(User::class);
    }
}
