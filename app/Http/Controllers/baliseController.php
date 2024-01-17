<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Balise;

class baliseController extends Controller
{
    function add(request $request){
        if (! $request->input('sigfox_device')){
        return response()->json( 'ERREUR : champ device vide!', 500 );
        }
        $balise = new Balise() ;
        if (!is_null($balise->where('sigfox_device',
        $request->input('sigfox_device'))->first()))
        return response()->json( 'ERREUR : sigfox_device déjà existant!', 500 );
        $balise->nom = $request->input('nom');
        $balise->sigfox_device = $request->input('sigfox_device');
        $balise->latitude = $request->input('latitude');
        $balise->longitude = $request->input('longitude');
        $balise->altitude = $request->input('altitude');
        $balise->save() ;
        return (response()->json('enregistrement ok : '.json_encode($balise), 200 ));
        }

    function all() {
        return Balise::all();
    }
    
    function show($id){
        $balise = new Balise();
        $balise = $balise->find($id) ;
        if (is_null($balise))
        return (0);
        else
        return $balise ;
    }

    function delete($id){
        $balise = new Balise() ;
        $balise = $balise->find($id) ;
        if (is_null($balise))
        return (0);
        else
        {
        $balise->delete() ;
        return (1) ;
        }
        
    }
}
