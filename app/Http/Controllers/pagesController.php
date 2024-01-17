<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pagesController extends Controller
{
    //Appel de la vue aPropos
    public function aPropos(){
    return view ('pages/aPropos') ;
    }
}
