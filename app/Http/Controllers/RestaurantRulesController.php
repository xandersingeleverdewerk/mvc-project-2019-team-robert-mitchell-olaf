<?php

namespace App\Http\Controllers;

use App\Restaurant;
use App\RestaurantRule;
use Illuminate\Http\Request;

class RestaurantRulesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Restaurant $restaurant)
    {
        $restaurantRules = restaurantRule::all()->where('restaurant_id','=',$restaurant->id);

        return view('park.restaurants.restaurantRules.index', compact('restaurantRules', 'restaurant'));
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
     * @param  \App\RestaurantRule  $restaurantRule
     * @return \Illuminate\Http\Response
     */
    public function show(RestaurantRule $restaurantRule)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\RestaurantRule  $restaurantRule
     * @return \Illuminate\Http\Response
     */

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\RestaurantRule  $restaurantRule
     * @return \Illuminate\Http\Response
     */

    public function delete() {

    }

    public function destroy(RestaurantRule $restaurantRule)
    {
        //
    }
}
