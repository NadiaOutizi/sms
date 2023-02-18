<?php

namespace App\Http\Controllers;

use App\Models\Notes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class UserGradesController extends Controller
{
   public function index(){

$notes = DB::table('notes')
    ->join('examens', 'notes.examen_id', '=', 'examens.id')
    ->join('stagiaires', 'notes.stagiaire_id', '=', 'stagiaires.id')
    ->join('groupes', 'stagiaires.groupes_id', '=', 'groupes.id')
    ->join('filieres', 'groupes.filiere_id', '=', 'filieres.id')
    ->join('modules', 'examens.module_id', '=', 'modules.id')
    ->select('notes.note', 'stagiaires.nom as nom_stagiaire','stagiaires.prenom as prenom_stagiaire', 'groupes.intitule as intitule_groupe', 'modules.Libelle_module', 'filieres.Libelle_Filliere')
    ->where('stagiaires.prenom', Auth::user()->name)
    ->get()
    ->map(function ($item) {
      $item->result = $item->note >= 10 ? "succeeded": "failed";
      return $item;
  });
      return view('Users.grades',compact('notes'));
}

public function UserExams(){
    $OldExams = DB::table('examens')
              ->join('notes','notes.examen_id', '=', 'examens.id')
              ->join('stagiaires', 'notes.stagiaire_id', '=', 'stagiaires.id')
              ->join('groupes', 'stagiaires.groupes_id', '=', 'groupes.id')
              ->join('filieres', 'groupes.filiere_id', '=', 'filieres.id')
              ->join('modules', 'examens.module_id', '=', 'modules.id')
              ->select('examens.id', 'examens.date', 'modules.Libelle_module', 'stagiaires.nom', 'stagiaires.prenom')
              ->where('stagiaires.prenom', Auth::user()->name)
              ->where('examens.date', '<', date('Y-m-d'))
              ->get();
 
    $NewExams = DB::table('examens')
    ->select('examens.id', 'examens.date', 'modules.Libelle_module', 'stagiaires.nom', 'stagiaires.prenom')
    ->leftjoin('notes', 'notes.examen_id', '=', 'examens.id')
    ->join('stagiaires', 'notes.stagiaire_id', '=', 'stagiaires.id')
    ->join('groupes', 'stagiaires.groupes_id', '=', 'groupes.id')
    ->join('filieres', 'groupes.filiere_id', '=', 'filieres.id')
    ->join('modules', 'examens.module_id', '=', 'modules.id')
    ->where('stagiaires.prenom', Auth::user()->name)
    ->whereNull('notes.stagiaire_id')
    ->where('examens.date', '>', date('Y-m-d'))
    ->get();
    // dd($NewExams);
    return view('Users.exams', compact('OldExams','NewExams'));
}
}
