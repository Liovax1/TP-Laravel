<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Balise ;
use Schema;


class PagesBaliseController extends Controller
{
       //return listes des balises
       public function balises(){
        $balise = new Balise() ;
        $balises = $balise->all() ;
        //$balises = Balise::all() ;
        $nomsChamps = Schema::getColumnListing($balise->getTable());
        //dd($nomsChamps) ;
        return view ('pages/balises')->with('balises', $balises)->with('nomsChamps', $nomsChamps) ;
    } 
    // retourne les infos d'une balise
    public function balise($id){
        $balise = new Balise() ;
        $baliseFind = $balise->find($id) ;
        $nomsChamps = Schema::getColumnListing($balise->getTable());
        return view ('pages/balise')->with('baliseFind', $baliseFind)->with('nomsChamps', $nomsChamps) ;
    } 

    //
    //  BREAD
    //  https://laravel.sillo.org/cours-laravel-8-les-bases-formulaires-et-middlewares/
    //

    //
    // Affiche le formulaire de saisie d'une balise
    //
    public function create(){
        return view ('pages/formAddBalise');
    }
    
    //
    // enregistre les infos du formulaire d'une balise
    //
    public function store(Request $request){
        $balise = new Balise() ;

        if (!is_null($balise->where('sigfox_device', $request->input('sigfox_device'))->first()))
        {
            $request->session()->flash('Erreur', 'une balise est déjà enregistré avec cet sigfox_device');
            return redirect( url('balises'));
        }
            
        $balise->nom = $request->input('nom');
        $balise->sigfox_device = $request->input('sigfox_device');
        $balise->latitude = $request->input('latitude');
        $balise->longitude = $request->input('longitude');
        $balise->altitude = $request->input('altitude');
        $balise->save() ;   
        return redirect( url('balises')); 
    } 

    //
    // Formulaire d'édition d'une balise
    //
    public function edit($id){
        $baliseFind = new Balise() ;
        $baliseFind = $baliseFind->find($id) ;
        if (!is_null($baliseFind))
        {
            return view ('pages/formEditBalise')->with('baliseFind', $baliseFind);
        }
        else
        {
            Session::flash('Erreur', 'Il n\'existe pas de balise avec cet id');
            return redirect( url('balises'));
        }    
    }

    //
    // Mise à jourt des information d'une balise
    //
    public function upDate(Request $request){
        $baliseUpDate = new Balise() ;
        $baliseUpDate = $baliseUpDate->find($request->input('id'));
        //pas de modification du sigfox_device_old ou nouvelle sigfox_device pas enregistré
        if ($request->input('sigfox_device') == $request->input('sigfox_device_old') || is_null($baliseUpDate->where('sigfox_device', $request->input('sigfox_device'))->first()))
        {
            $baliseUpDate->nom = $request->input('nom');
            $baliseUpDate->sigfox_device = $request->input('sigfox_device');
            $baliseUpDate->latitude = $request->input('latitude');
            $baliseUpDate->longitude = $request->input('longitude');
            $baliseUpDate->altitude = $request->input('altitude');
            $baliseUpDate->save() ;   
            return redirect( url('balises')); 
        }
        else
        {
            $request->session()->flash('Erreur', 'une balise est déjà enregistré avec cet sigfox_device');
            return redirect( url('balises'));
        }
    }     

    //
    // Suppression d'une balise
    //
    public function delete($id){
        $baliseFind = new Balise() ;
        $baliseFind = $baliseFind->find($id) ;
        if (!is_null($baliseFind))
            $baliseFind->delete() ;
        return redirect( url('balises')); 
}

}