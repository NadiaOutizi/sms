<?php

namespace App\Http\Controllers;

use App\Models\Examen;
use App\Models\Module;
use Illuminate\Http\Request;

class ExamenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Examen=Examen::paginate(4);
        return view('Examens.index',compact('Examen'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $module=Module::all();
        return view('Examens.add',compact('module'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        Examen::create([
            "id"=>$request->id,
            "date"=>$request->date,
            "module_id"=>$request->module_id,
           
    
           ]);
           return redirect(route("Examen.index"));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Examen  $examen
     * @return \Illuminate\Http\Response
     */
    public function show(Examen $examen)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Examen  $examen
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $Examen= Examen::find($id);
        $module=Module::all();
        return view('Examens.edit', ['Examen' => $Examen,'module'=>$module]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Examen  $examen
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $Examen = Examen::find($id);
        $Examen->update($request->all());
        return redirect(route('Examen.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Examen  $examen
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $examen = Examen::find($id);
        $examen->delete();
        return redirect(route("Examen.index"));
    }
}
