<?php

namespace App\Http\Controllers;

use App\Dish;
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
    public function create(Restaurant $restaurant)
    {
        $dishes = Dish::all();

        return view('park.restaurants.restaurantRules.create', compact('restaurant', 'dishes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Restaurant $restaurant)
    {

        $restaurantRule = new RestaurantRule();

        $restaurantRule->restaurant_id = $request->restaurant_id;
        $restaurantRule->dish_id = $request->dish_id;

        $restaurantRule->save();

        return redirect()->route( 'restaurantRules.index',compact('restaurant'))->with('message','Gerecht is toegevoegd aan menu');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\RestaurantRule  $restaurantRule
     * @return \Illuminate\Http\Response
     */
    public function show(Restaurant $restaurant, RestaurantRule $restaurantRule)
    {
        return view('park.restaurants.restaurantRules.show', compact('restaurant','restaurantRule'));
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

    public function delete(Restaurant $restaurant, RestaurantRule $restaurantRule)
    {
        return view('park.restaurants.restaurantRules.delete', compact('restaurant','restaurantRule'));
    }

    public function destroy(Restaurant $restaurant, RestaurantRule $restaurantRule)
    {
        $restaurantRule->delete();

        return redirect()->route('restaurantRules.index', compact('restaurant'))->with('message','Gerecht is van menu verwijderd');
    }
}
