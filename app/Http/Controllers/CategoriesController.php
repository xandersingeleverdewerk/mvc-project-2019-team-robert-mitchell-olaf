<?php

namespace App\Http\Controllers;

use App\Category;
use App\Http\Requests\StoreCategoryRequest;
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
        $categories = Category::all();

        // een view returnen en de variabele $category meesturen naar de view
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
    public function store(StoreCategoryRequest $request)
    {
        // aanmaken van een nieuwe category (met behulp van de Model)
        $category = new Category();
        // attribuut
        $category->name = $request->name;
        // category bewaren in de database (insert uitvoeren)
        $category->save();

        return redirect()->route('categories.index')->with('message', 'Category aangemaakt');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
        return view('categories.show', compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        //
        return view ('categories.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        //attributen
        $category->name = $request->name;
        // category bewaren in de database (update uitvoeren)
        $category->save();

        return redirect()->route('categories.index')->with('message', 'Category geüpdate');
    }

    /**
     * Show the form for deleting the specific resource.
     *
     * @param \App\Category $category
     * @return \Illuminate\Http\Response
     */
    public function delete(Category $category)
    {
        return view('categories.delete', compact('category'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        //
        $category->delete();
        return redirect()->route('categories.index')->with('message', 'category verwijderd');
    }
}
