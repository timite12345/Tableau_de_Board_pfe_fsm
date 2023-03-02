<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Personne_malade extends Model
{
    use HasFactory;

    public function demandetransport(){
        return $this->hasMany(Demandetransport::class);
    }
}
