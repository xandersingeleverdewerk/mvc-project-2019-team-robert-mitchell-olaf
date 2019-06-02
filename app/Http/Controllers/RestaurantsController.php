<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRestaurantsRequest;
use App\Restaurant;
use App\Facilitie;
use Illuminate\Http\Request;

class RestaurantsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $restaurants = Restaurant::all();

        return view('park.restaurants.index', compact('restaurants'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('park.restaurants.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRestaurantsRequest $request)
    {
        $restaurant = new Restaurant();
        $facilitie = new Facilitie();

        $facilitie->name = $request->name;
        $facilitie->description = $request->description;
        $facilitie->opening_time = $request->opening_time;
        $facilitie->closing_time = $request->closing_time;
        $facilitie->save();

        $restaurant->facilitie_id = $facilitie->id;
        $restaurant->save();


        return redirect()->route('restaurants.index')->with('message','Restaurant is toegevoegd');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Restaurant  $restaurant
     * @return \Illuminate\Http\Response
     */
    public function show(Restaurant $restaurant)
    {
        return view('park.restaurants.show', compact('restaurant'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Restaurant  $restaurant
     * @return \Illuminate\Http\Response
     */
    public function edit(Restaurant $restaurant)
    {

        return view('park.restaurants.edit', compact('restaurant'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Restaurant  $restaurant
     * @return \Illuminate\Http\Response
     */
    public function update(StoreRestaurantsRequest $request, Restaurant $restaurant)
    {
        $restaurant->facilitie->name = $request->name;
        $restaurant->facilitie->description = $request->description;
        $restaurant->facilitie->opening_time = $request->opening_time;
        $restaurant->facilitie->closing_time = $request->closing_time;
        $restaurant->facilitie->save();

        return redirect()->route('restaurants.index')->with('message','Restaurant is aangepast');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Restaurant  $restaurant
     * @return \Illuminate\Http\Response
     */
    public function destroy(Restaurant $restaurant)
    {
        //
    }
}
