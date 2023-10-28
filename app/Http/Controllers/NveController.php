<?php

namespace App\Http\Controllers;

use App\Models\nve;
use Illuminate\Http\Request;
use App\Http\Requests\nveRequest;
use App\Http\Requests\nveModifierRequest;

class NveController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $nves = nve::all();
        return view('nve.index',compact('nves'));
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('nve.ajouter_nve');
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(nveRequest $request)
    {
        $nve = new nve() ;
        $nve->libelle =$request->libelle;
        $nve->save();
        return redirect('/nves')->with('status',"Le niveau d'etude a éte ajoute avec succes");
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(nve $nve)
    {
        $nve= nve::find($nve->id);
        return view('nve.detail', compact('nve'));
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(nve $nve)
    {
        $nve = nve::find($nve->id);
        return view('nve.editer', compact('nve'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(nveModifierRequest $request, nve $nve)
    {
        $nve->libelle =$request->libelle;
        $nve->save();
        return redirect('/nves');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(nve $nve)
    {
        $nve->delete();
        return redirect('/nves');
    }
}
