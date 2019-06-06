<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCategoriesRequest;
use App\Http\Requests\UpdateCategoriesRequest;
use App\Categorie;
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
        // ophalen van alle categorieën
        $categories = Categorie::all();

        // een view returnen en de variabele $categories meesturen naar de view
        return view('categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(storeCategoriesRequest $request)
    {
        $categorie = new Categorie();

        $categorie->name = $request->name;
        $categorie->save();

        return redirect()->route('categories.index')->with('message','Categories is toegevoegd');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Categorie  $categorie
     * @return \Illuminate\Http\Response
     */
    public function edit(Categorie $categorie)
    {
        return view ('categories.edit', compact('categorie'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Categorie  $categorie
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCategoriesRequest $request, Categorie $categorie)
    {
        $categorie->name = $request->name;
        $categorie->save();

        return redirect()->route('categories.index')->with('message','Categorie is aangepast');
    }

    /**
     * show the form for deleting the specified resource.
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
    public function destroy($categorie_id)
    {
        $categorie = Categorie::find($categorie_id);
        $categorie ->delete();
        return redirect('categories')->with('message', 'Categorie is verwijderd');
    }
}
