<?php

namespace App;

use Illuminate\Database\Eloquent\Model;



class ReleveBalise extends Model
{
    // protected $fillable = [
    //     'balise_id',
    //     'pression',
    //     'temperature',
    // ];


    public function Balise()    {
        return $this->belongsTo(Balise::class);
    }
}
