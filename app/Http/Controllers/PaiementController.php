<?php

namespace App\Http\Controllers;

use App\Models\module;
use App\Models\paiement;
use App\Models\apprenant;
use Illuminate\Http\Request;

class PaiementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
      
        $paiements =paiement::all();
        return view('paiement.index', compact('paiements'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $apprenants = apprenant::all();
        $modules = module::all();
        return view('paiement.ajouter_paiement' ,compact('apprenants','modules') );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $paiement = new paiement() ;
        $paiement->mois =$request->mois;
        $paiement->id_apprenant=$request->id_apprenant;
        $paiement->id_module =$request->id_module;
        $paiement->save();
        return redirect('/paiements')->with('status',"Le niveau d'etude a éte ajoute avec succes");
    }

    /**
     * Display the specified resource.
     */
    public function show(paiement $paiement)
    {
        $paiement = paiement::find($paiement->id);
        return view('paiement.detail',compact('paiement'));
     
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(paiement $paiement)
    {
        $apprenants = apprenant::all();
        $modules = module::all();
        $paiement = paiement::find($paiement->id);
        return view('paiement.editer',compact('paiement','apprenants','modules'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, paiement $paiement)
    {
        $paiement->mois=$request->mois;
        $paiement->save();
         return redirect('/paiements');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(paiement $paiement)
    {
        $paiement->delete();
        return redirect('/paiements');
    }
}
