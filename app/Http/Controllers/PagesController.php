<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Balise;
use App\ReleveBalise;


class PagesController extends Controller
{
    //
   //Appel de la vue aPropos
    public function aPropos(){
        return view ('pages/aPropos') ;
    } 

    public function releveBalise($id)  {
        $balise = balise::find($id);
        // dd( $balise->releveBalise);
        //Attention la ligne du dessous ne fct ps !
        // $relevesBalise = $balise->releveBalise();
        //Celle-ci oui !!! (pq ? @PAtrice )
        $relevesBalise = $balise->releveBalise;
        
        // return view ('pages/aPropos') ;
       return view('pages/relevesBalise')->with('relevesBalise',$relevesBalise)->with('balise',$balise);
    }
}

