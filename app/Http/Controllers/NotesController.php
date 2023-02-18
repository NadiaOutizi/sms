<?php

namespace App\Http\Controllers;

use App\Models\Notes;
use App\Models\Examen;
use App\Models\Stagiaire;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NotesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
 
     public function index(Request $request)
     {
         $query = Notes::query();
     
         $gradeFilter = $request->input('grade');
     
         if ($gradeFilter === 'lt_10') {
             $query->where('note', '<', 10);
         } elseif ($gradeFilter === 'gte_10') {
             $query->where('note', '>=', 10);
         }
     
         $notes = $query->paginate(4);
         $stagiaire = Stagiaire::paginate(4);
     
         return view('Notes.index', compact('notes', 'stagiaire'));
     }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $stagiaire=Stagiaire::all();
        $examen = Examen::all();
        return  view('Notes.add',compact('stagiaire','examen'));
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
            'id'=>'required',
            'stagiaire_id' => 'required|integer',
            'examen_id' => 'required|integer',
            'note'=> 'required'
        ]);
        Notes::create([
            'stagiaire_id'=> $validatedData['stagiaire_id'],
            'examen_id'=> $validatedData['examen_id'],
            'note'=> $validatedData['note'],
           ]);
        return redirect(route('Notes.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Notes  $note
     * @return \Illuminate\Http\Response
     */
    public function show(Note $note)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Notes $note
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $note = Notes::find($id);
        $stagiaire=Stagiaire::all();
        $examen=Examen::all();
        return view('Notes.edit', ['note' => $note,'stagiaire'=>$stagiaire,'examen'=>$examen]);
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Notes  $note
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $note = Notes::find($id);
        $note->update($request->all());
        return redirect(route('Notes.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Notes  $note
     * @return \Illuminate\Http\Response
     */
    public function destroy(Notes $Note)
{   
  
    $Note->delete();
    return redirect(route("Notes.index"));
}
// public function destroy($stagiaire_id, $examen_id)
// {   
//     $note = Notes::where('stagiaire_id', $stagiaire_id)
//                  ->where('examen_id', $examen_id)
//                  ->first();

//     if ($note) {
//         $note->delete();
//     }

//     return redirect()->route('notes.index');
// }

}
