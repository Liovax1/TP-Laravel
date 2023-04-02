<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

// use App\ReleveBalise;


class Balise extends Model
{
    public function releveBalise() {
        return $this->hasMany(ReleveBalise::class);
    }
}
