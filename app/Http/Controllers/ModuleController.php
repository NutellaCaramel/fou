<?php

namespace App\Http\Controllers;

use App\Models\nve;
use App\Models\module;
use Illuminate\Http\Request;
use App\Http\Requests\moduleRequest;

class ModuleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $modules =module::all();
        return view('module.index', compact('modules'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {   
        $nves = nve::all();
        return view('module.ajouter_module' ,compact('nves'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(moduleRequest $request)
    {
        $module = new module() ;
        $module->libelle =$request->libelle;
        $module->duree =$request->duree;
        $module->montant =$request->montant;
        $module->id_nve =$request->id_nve;
        $module->save();
         return redirect('/modules');
    }

    /**
     * Display the specified resource.
     */
    public function show(module $module)
    {
        $module= module::find($module->id);
        return view('module.detail', compact('module'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(module $module)
    {
        $nves = nve::all();
        $module= module::find($module->id);
        return view('module.editer', compact('module'),compact('nves'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(moduleRequest $request, module $module)
    {
      
        $module->libelle =$request->libelle;
        $module->duree =$request->duree;
        $module->montant =$request->montant;
        $module->id_nve =$request->id_nve;
        $module->save();
         return redirect('/modules');
           //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(module $module)
    {
        $module->delete();
        return redirect('/modules');
        //
    }
}
