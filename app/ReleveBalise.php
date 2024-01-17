<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class ReleveBalise extends Model
{
    // propriété automatique Balise
    // fournit la Balise liée à un relevé

    public function Balise(){
        return $this->belongsTo(Balise::class,'balise_id');
    }
}
