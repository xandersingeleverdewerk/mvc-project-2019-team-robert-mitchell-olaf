<?php

namespace App\Http\Controllers;

use App\Facilitie;
use App\Http\Requests\StoreAttractionsRequest;
use App\Http\Requests\UpdateAttractionsRequest;
use App\Attraction;
use Illuminate\Http\Request;

class AttractionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // ophalen van alle attracties
        $attractions = Attraction::all();

        // een view returnen en de variabele $attractions meesturen naar de view
        return view('attractions.index', compact('attractions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $facilities = Facilitie::pluck('name', 'id');
        return view('attractions.create', compact('facilities'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(storeAttractionsRequest $request)
    {
        $validated = $request->validated();
        // aanmaken van een nieuw attractie (met behulp van de Model)
        $attraction = new Attraction();
        // attributen
        $attraction->waitTime = $request->waitTime;
        $attraction->minAge = $request->minAge;
        $attraction->minLength = $request->minLength;
        $attraction->categorie_id = $request->categorie_id;
        $attraction->facilitie_id = $request->facilitie_id;
        // attractie bewaren in de database (insert uitvoeren)
        $attraction->save();

        return redirect('/attractions')->with('status', 'Attractie aangemaakt');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Attraction  $attraction
     * @return \Illuminate\Http\Response
     */
    public function show(Attraction $attraction)
    {
        //
        $facilities = Facilitie::pluck('name', 'id');
        return view('attractions.show', compact('attraction', 'facilities'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Attraction  $attraction
     * @return \Illuminate\Http\Response
     */
    public function edit(Attraction $attraction)
    {
        //
        return view ('attractions.edit', compact('attraction'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Attraction  $attraction
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAttractionsRequest $request, Attraction $attraction)
    {
        $validated = $request->validated();
        // attributen
        $attraction->waitTime = $request->waitTime;
        $attraction->minAge = $request->minAge;
        $attraction->minLength = $request->minLength;
        $attraction->categorie_id = $request->categorie_id;
        $attraction->facilitie_id = $request->facilitie_id;
        // attractie bewaren in de database (update uitvoeren)
        $attraction->save();

        return redirect ('/attractions')->with('status', 'Attractie gewijzigd');
    }

    /**
     * show the form for deleting the specified resource.
     *
     * @param \App\Attraction $attraction
     * @return \Illuminate\Http\Response
     */
    public function delete(Attraction $attraction)
    {
        return view('attractions.delete', compact('attraction'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Attraction  $attraction
     * @return \Illuminate\Http\Response
     */
    public function destroy(Attraction $attraction)
    {
        //
        $attraction->delete();
        return redirect ('/attractions')->with('status', 'Attractie verwijderd');
    }
}
