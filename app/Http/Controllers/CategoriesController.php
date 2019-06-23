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
        return view('park.attractions.categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('park.attractions.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(storeCategoriesRequest $request)
    {
        $category = new Categorie();

        $category->name = $request->name;
        $category->save();

        return redirect()->route('categories.index')->with('message','Categorie is toegevoegd');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Categorie  $categorie
     * @return \Illuminate\Http\Response
     */
    public function edit(Categorie $category)
    {
        return view('park.attractions.categories.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Categorie  $categorie
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCategoriesRequest $request, Categorie $category)
    {
        $category->name = $request->name;
        $category->save();

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
        return view('park.attractions.categories.delete', compact('categorie'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Categorie  $categorie
     * @return \Illuminate\Http\Response
     */
    public function destroy(Categorie $category)
    {
        $category->delete();

        return redirect()->route('categories.index')->with('message', 'Categorie is verwijderd');
    }
}

