<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Balise extends Model
{
    // propriété automatique releveBalises
    // fournit l'ensemble des relevés d'une balise

    public function releveBalise(){
        return $this->hasMany(ReleveBalise::class,'balises_id');
    }
}