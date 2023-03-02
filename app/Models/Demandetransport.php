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
        return $this->belogsTo(Etbsante::class);
    }
}
