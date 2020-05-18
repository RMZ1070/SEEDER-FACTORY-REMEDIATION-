<?php

namespace App\Http\Controllers;

use App\Livre;
use Illuminate\Http\Request;

class LivreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $livres = Livre::all();

        return view('welcome',compact('livres'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $livre = Livre::all();
        return view('livre/add', compact('livre'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $livre = new Livre();

        
        $livre->titre=$request->input('titre');
        $livre->texte=$request->input('annee');
        $livre->texte=$request->input('auteur');

        $livre->save();
        return redirect()->route('livre');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Livre  $livre
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $livre= Livre::find($id);
        return view('livre/show',compact('livre'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Livre  $livre
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $livre= Livre::find($id);

        return view('livre/edit', compact('livre'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Livre  $livre
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $livre = Livre::find($id);
        $livre->titre = $request->input('titre');
        $livre->url = $request->input('annee');
        $livre->date = $request->input('auteur');

        $livre->save();

        return redirect()->route('welcome');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Livre  $livre
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $livre= Livre::find($id);
        $livre->delete();
        return redirect()->route('welcome');
    }
}
