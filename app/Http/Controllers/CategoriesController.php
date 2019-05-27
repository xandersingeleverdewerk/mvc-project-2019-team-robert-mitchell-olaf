<?php

namespace App\Http\Controllers;

use App\Categorie;
use App\Http\Requests\StoreCategorieRequest;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $categories = Categorie::all();

        // een view returnen en de variabele $categorie meesturen naar de view
        return view('categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCategorieRequest $request)
    {
        // aanmaken van een nieuwe categorie (met behulp van de Model)
        $categorie = new Categorie();
        // attribuut
        $categorie->name = $request->name;
        // categorie bewaren in de database (insert uitvoeren)
        $categorie->save();

        return redirect()->route('categories.index')->with('message', 'Categorie aangemaakt');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Categorie  $categorie
     * @return \Illuminate\Http\Response
     */
    public function show(Categorie $categorie)
    {
        //
        return view('categories.show', compact('categorie'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Categorie  $categorie
     * @return \Illuminate\Http\Response
     */
    public function edit(Categorie $categorie)
    {
        //
        return view ('categories.edit', compact('categorie'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Categorie  $categorie
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Categorie $categorie)
    {
        //attributen
        $categorie->name = $request->name;
        // categorie bewaren in de database (update uitvoeren)
        $categorie->save();

        return redirect()->route('categories.index')->with('message', 'Categorie geüpdate');
    }

    /**
     * Show the form for deleting the specific resource.
     *
     * @param \App\Categorie $categorie
     * @return \Illuminate\Http\Response
     */
    public function delete(Categorie $categorie)
    {
        return view('categories.delete', compact('categorie'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Categorie  $categorie
     * @return \Illuminate\Http\Response
     */
    public function destroy(Categorie $categorie)
    {
        //
        $categorie->delete();
        return redirect()->route('categories.index')->with('message', 'categorie verwijderd');
    }
}
