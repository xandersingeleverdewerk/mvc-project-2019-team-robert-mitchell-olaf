<?php

namespace App\Http\Controllers;

use App\Dish;
use App\Http\Requests\StoreDishesRequest;
use Illuminate\Http\Request;

class DishesController extends Controller
{
   /* public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('permission:create dishes',['only'  => ['create', 'store']]);
        $this->middleware('permission:edit dishes',['only'  => ['edit', 'update']]);
        $this->middleware('permission:delete dishes',['only'  => ['delete', 'destroy']]);
    }
   */
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dishes = Dish::all();

        return view('park.restaurants.dishes.index', compact('dishes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('park.restaurants.dishes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDishesRequest $request)
    {
        $dish = new Dish();

        $dish->name = $request->name;
        $dish->description = $request->description;
        $dish->price = $request->price;
        $dish->save();

        return redirect()->route('dishes.index')->with('message','Gerecht is toegevoegd');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Dish  $dish
     * @return \Illuminate\Http\Response
     */
    public function show(Dish $dish)
    {
        return view('park.restaurants.dishes.show', compact('dish'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Dish  $dish
     * @return \Illuminate\Http\Response
     */
    public function edit(Dish $dish)
    {
        return view('park.restaurants.dishes.edit', compact('dish'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Dish  $dish
     * @return \Illuminate\Http\Response
     */
    public function update(StoreDishesRequest $request, Dish $dish)
    {
        $dish->name = $request->name;
        $dish->description = $request->description;
        $dish->price = $request->price;
        $dish->save();

        return redirect()->route('dishes.index')->with('message','Gerecht is aangepast');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Dish  $dish
     * @return \Illuminate\Http\Response
     */
    public function delete(Dish $dish)
    {
        return view('park.restaurants.dishes.delete', compact('dish'));
    }

    public function destroy(Dish $dish)
    {
        $dish->delete();

        return redirect()->route('dishes.index')->with('message','Gerecht is verwijderd');
    }
}
