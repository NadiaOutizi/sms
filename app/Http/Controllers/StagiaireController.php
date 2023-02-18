<?php

namespace App\Http\Controllers;

use App\Models\Groupe;
use App\Models\Stagiaire;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class StagiaireController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $stagiaire=Stagiaire::paginate(3);
      $groupes = Groupe::paginate(3);
    //    return view('stagiaires.index',compact('stagiaire'));
    return view('stagiaires.index',['stagiaire' => $stagiaire, 'groupes' => $groupes]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $groupes = Groupe::all();
        return view('stagiaires.add',compact('groupes'));
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
            'id' => 'required|integer',
            'nom' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'genre' => 'required|string|max:255',
            'adresse' => 'required|string',
            'age' => 'required|integer|min:0',
            'telephone' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
           'groupes_id'=>'required',
        ]);
    
       
        // $file=$request->image->store(config('image.path'));
        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('images'), $imageName);

 
        Stagiaire::create([
            'id'=>$validatedData['id'],
            'nom'=>$validatedData['nom'],
            'prenom'=>$validatedData['prenom'],
            'genre'=>$validatedData['genre'],
            'adresse'=>$validatedData['adresse'],
            'age'=>$validatedData['age'],
            'telephone'=>$validatedData['telephone'],
            // 'image' => $file,
            'image' => $imageName,
            'groupes_id'=>$validatedData['groupes_id'],
        ]);
    
        return redirect(route("stagiaire.index"))->with('created successfully');;
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $stagiaire = Stagiaire::find($id);
        if(!$stagiaire){
            return view('Fallback');
        }
    return view('stagiaires/edit', ['stagiaire' => $stagiaire]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function update(Request $request, $id)
    // {
    //     $stagiaire = Stagiaire::find($id);
    //     $stagiaire->update($request->all());
    //     return redirect(route('stagiaire.index'));
    // }
    public function update(Request $request, $id)
    {
        $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'genre' => 'required|string|max:255',
            'adresse'=>'required',
            'age' => 'required|integer|min:0',
            'telephone' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $stagiaire = Stagiaire::find($id);
        $stagiaire->update($request->except('image'));

        if($request->hasFile('image')){
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('images'), $imageName);
            $stagiaire->image = $imageName;
        }

        $stagiaire->save();

        return redirect(route('stagiaire.index'))->with('Stagiaire modifié avec succès');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Stagiaire $stagiaire)
    {
       $stagiaire->delete();
       return redirect(route("stagiaire.index"));
    }
    public function search(){
        $search_input=$_GET['query'];
        // $stagiaire= Stagiaire::where('nom','Like','%'.$search_input.'%')->paginate(5);
        // return view('stagiaires.index',compact('stagiaire'));
        $stagiaire = Stagiaire::where(function($query) use ($search_input) {
            $query->where('nom', 'Like', '%' . $search_input . '%')
                  ->orWhere('prenom', 'Like', '%' . $search_input . '%')
                  ->orWhere('genre', 'Like', '%' . $search_input . '%')
                  ->orWhere('age', 'Like', '%' . $search_input . '%')
                  ->orWhere('id', $search_input);
        })->paginate(4);
        $groupes = Groupe::paginate(3); 
        return view('stagiaires.index',compact('stagiaire','groupes'));
    }
    
public function chercher(Request $request)
{
  $groupe_id = $request->input('groupe_id');
  $stagiaire = Stagiaire::select('id', 'nom', 'prenom', 'genre', 'age', 'adresse', 'telephone', 'groupes_id', 'image')
                ->where('groupes_id', '=', $groupe_id)
                ->paginate(3);
                $groupes = Groupe::paginate(3);  
  return view('stagiaires.index', ['stagiaire' => $stagiaire, 'groupes' => $groupes]);
}

}
