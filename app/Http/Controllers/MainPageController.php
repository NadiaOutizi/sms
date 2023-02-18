<?php

namespace App\Http\Controllers;

use App\Models\Groupe;
use App\Models\MainPage;
use App\Models\Stagiaire;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MainPageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $count = Stagiaire::count();
        $groupe = Groupe::count();
        $failedPeople = DB::table('notes')
            ->where('note', '<', 10)
            ->count();
       $succededPeople=DB::table('notes')
       ->where('note', '>', 10)
       ->count();
        return view('MainPage')->with('count', $count)
        ->with('groupe', $groupe)->with('failedPeople',$failedPeople)->with('succededPeople',$succededPeople);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MainPage  $mainPage
     * @return \Illuminate\Http\Response
     */
    public function show(MainPage $mainPage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MainPage  $mainPage
     * @return \Illuminate\Http\Response
     */
    public function edit(MainPage $mainPage)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\MainPage  $mainPage
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MainPage $mainPage)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MainPage  $mainPage
     * @return \Illuminate\Http\Response
     */
    public function destroy(MainPage $mainPage)
    {
        //
    }
}
