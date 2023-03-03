<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Facture extends Model
{
    use HasFactory;

    public function etbsante(){
        return $this->hasOne(Etbsante::class);
    }

    public function transport(){
        return $this->hasOne(Transport::class);
    }

    public function type_etb(){
        return $this->hasOne(Type_etb::class);
    }
    
}
