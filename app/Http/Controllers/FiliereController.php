<?php

namespace App\Http\Controllers;

use App\Models\Groupe;
use App\Models\Filiere;
use Illuminate\Http\Request;

class FiliereController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $filliere= Filiere::paginate(4);
        return view('filieres.index',compact('filliere'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    
       return  view('filieres.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       Filiere::create([
        "id"=>$request->id,
        "Libelle_Filliere"=>$request->Libelle_Filliere,
       
  

       ]);
       return redirect(route("filiere.index"));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Filiere  $filiere
     * @return \Illuminate\Http\Response
     */
    public function show(Filiere $filiere)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Filiere  $filiere
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $filiere = Filiere::find($id);
        return view('filieres/edit', ['filiere' => $filiere]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Filiere  $filiere
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $filiere = Filiere::find($id);
        $filiere->update($request->all());
        return redirect(route('filiere.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Filiere  $filiere
     * @return \Illuminate\Http\Response
     */
    public function destroy(Filiere $filiere)
    {
        $filiere->delete();
       return redirect(route("filiere.index"));
    }
}
