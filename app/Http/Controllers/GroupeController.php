<?php

namespace App\Http\Controllers;

use App\Models\Groupe;
use App\Models\Filiere;
use App\Models\Stagiaire;
use Illuminate\Http\Request;

class GroupeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $groupe = Groupe::paginate(5);
        return view("groupes.index", compact("groupe"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    //for edit
    public function create()
    {
     
        $filieres = Filiere::all();
        return view('groupes.add', compact('filieres'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'id' => 'required|numeric',
            'intitule' => 'required|string|max:255',
            'Annee' => 'required',
            'filieres_id' => 'required',
        ]);
        // |exists:filieres,id
        Groupe::create([
            'id' =>$validatedData['id'],
            'intitule' =>$validatedData['intitule'],
            'Annee' =>$validatedData['Annee'],
            'filiere_id' =>$validatedData['filieres_id'],
        ]);

        return redirect(route("groupe.index"));
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Groupe  $groupe
     * @return \Illuminate\Http\Response
     */
    public function show(Groupe $groupe)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Groupe  $groupe
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
{
    $group = Groupe::find($id);
    return view('groupes/edit', ['group' => $group]);
}


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Groupe  $groupe
     * @return \Illuminate\Http\Response
     */
    // public function update(Request $request, Groupe $groupe)
    // {
    //     $request->validate([
    //         'id' => 'required',
    //         'stagiaire_id' => 'required',
            
    //     ]);
    //     $groupe->update($request->all());
    
    //     return redirect(route('groupe.index'));
    // }
    public function update(Request $request, $id)
{
    $group = Groupe::find($id);
    $group->update($request->all());
    // return response()->json($group, 200);
    return redirect(route('groupe.index'));
}

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Groupe  $groupe
     * @return \Illuminate\Http\Response
     */
    public function destroy(Groupe $groupe)
    {
        $groupe->delete();
       return redirect(route("groupe.index"));

    }
}
