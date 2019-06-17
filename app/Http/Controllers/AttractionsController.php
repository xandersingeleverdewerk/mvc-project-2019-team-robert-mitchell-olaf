<?php

namespace App\Http\Controllers;

use App\Http\Requests\ReviewsRequest;
use App\Http\Requests\StoreAttractionsRequest;
use App\Http\Requests\UpdateAttractionsRequest;
use App\Attraction;
use App\Facilitie;
use App\Review;
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
        return view('park.attractions.index', compact('attractions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('park.attractions.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(storeAttractionsRequest $request)
    {
        $attraction = new Attraction();
        $facilitie = new Facilitie();

        $facilitie->name = $request->name;
        $facilitie->description = $request->description;
        $facilitie->opening_time = $request->opening_time;
        $facilitie->closing_time = $request->closing_time;
        $facilitie->save();

        $attraction->waitTime = $request->waitTime;
        $attraction->minAge = $request->minAge;
        $attraction->minLength = $request->minLength;
        $attraction->facilitie_id = $facilitie->id;
        $attraction->save();

        return redirect()->route('attractions.index')->with('message','Attractie is toegevoegd');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Attraction  $attraction
     * @return \Illuminate\Http\Response
     */
    public function show(Attraction $attraction)
    {
        $reviews = Review::all()->where('facilitie_id','=',$attraction->facilitie->id);
        return view('park.attractions.show', compact('attraction','reviews'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Attraction  $attraction
     * @return \Illuminate\Http\Response
     */
    public function edit(Attraction $attraction)
    {
        return view ('park.attractions.edit', compact('attraction'));
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
        $attraction->facilitie->name = $request->name;
        $attraction->facilitie->description = $request->description;
        $attraction->facilitie->opening_time = $request->opening_time;
        $attraction->facilitie->closing_time = $request->closing_time;
        $attraction->facilitie->save();

        $attraction->waitTime = $request->waitTime;
        $attraction->minAge = $request->minAge;
        $attraction->minLength = $request->minLength;
        $attraction->save();

        return redirect()->route('attractions.index')->with('message','Attractie is aangepast');
    }

    /**
     * show the form for deleting the specified resource.
     *
     * @param \App\Attraction $attraction
     * @return \Illuminate\Http\Response
     */
    public function delete(Attraction $attraction)
    {
        return view('park.attractions.delete', compact('attraction'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Attraction  $attraction
     * @return \Illuminate\Http\Response
     */
    public function destroy(Attraction $attraction)
    {
        $attraction->delete();
        $attraction->facilitie->delete();

        return redirect()->route('attractions.index')->with('message','Attractie is verwijderd');
    }

    public function storeReview(ReviewsRequest $request)
    {
        $review = new Review();

        $review->name = $request->name;
        $review->review = $request->review;
        $review->user_id = $request->user_id;
        $review->facilitie_id = $request->facilitie_id;

        $review->save();

        return redirect()->back()->with('message','Review is geplaatst');
    }

    public function updateReview(ReviewsRequest $request, Review $review)
    {
        $review->name = $request->name;
        $review->review = $request->review;

        $review->save();

        return redirect()->back()->with('message','Review is aangepast');
    }

    public function destroyReview(Review $review)
    {
        $review->delete();

        return redirect()->back()->with('message','Review is verwijderd');
    }
}
