<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Balise;
use Schema;

class pagesBaliseController extends Controller
{
    //Appel de la vue aPropos
    public function balises(){
        $balise = new Balise();
        $balises = $balise->all();
        $nomsChamps = Schema::getColumnListing($balise->getTable());
        //dd($nomsChamps); // permet le débogage
        return view ('pages/balises')
            ->with('balises', $balises)
            ->with('nomsChamps', $nomsChamps);    
    }

    public function balise($id){
        $balise = new Balise();
        $baliseFind = $balise->find($id);
        $nomsChamps = Schema::getColumnListing($balise->getTable());
        //dd($nomsChamps); // permet le débogage
        return view ('pages/balise')
            ->with('baliseFind', $baliseFind)
            ->with('nomsChamps', $nomsChamps);    
    }

    public function releveBalise($id){
        $balise = balise::find($id);
        $releveBalise = $balise->releveBalise;
        //dd($releveBalise);
        return view ('pages/releveBalise')
            ->with('releveBalise', $releveBalise)
            ->with('balise', $balise);    
    }

    public function create() {
        return view ('pages/formAddBalise');
    }

    public function store(Request $request) {
        $balise = new Balise();
        $balise->sigfox_device =
        $request->input('sigfox_device');
        $balise->latitude = $request->input('latitude');
        $balise->longitude = $request->input('longitude');
        $balise->altitude = $request->input('altitude');
        $balise->save();
        return redirect (url('balises'));
    }

    public function edit($id){
        $baliseFind = new Balise();
        $baliseFind = $baliseFind->find($id);
        if (!is_null($baliseFind))
        return view ('pages/formEditBalise')
        ->with('baliseFind', $baliseFind);
        else
        return redirect (url('balises'));
    }

    public function update(Request $request) {
        $baliseUpDate = new Balise();
        $baliseUpDate = $baliseUpDate->find($request->input('id'));
        $baliseUpDate->nom = $request->input('nom');
        $baliseUpDate->sigfox_device = $request->input('sigfox_device');
        $baliseUpDate->latitude = $request->input('latitude');
        $baliseUpDate->longitude = $request->input('longitude');
        $baliseUpDate->altitude = $request->input('altitude');
        $baliseUpDate->save();
        return redirect (url('balises'));
    }
}
