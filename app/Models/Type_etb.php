<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type_etb extends Model
{
    use HasFactory;

    public function etbsante(){
        return $this->hasMany(Etbsante::class);
    }
}
