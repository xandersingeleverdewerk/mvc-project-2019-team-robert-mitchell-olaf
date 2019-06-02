<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreStoresRequest;
use App\Store;
use Illuminate\Http\Request;

class StoresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $stores = Store::all();

        return view('park.stores.index', compact('stores'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('park.stores.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreStoresRequest $request)
    {
        //
        $store = new Store();
        $facilitie = new Facilitie();

        $facilitie->name = $request->name;
        $facilitie->description = $request->description;
        $facilitie->opening_time = $request->opening_time;
        $facilitie->closing_time = $request->closing_time;
        $facilitie->save();

        $store->facilitie_id = $facilitie->id;
        $store->save();

        return redirect()->route('stores.index')->with('message','Winkel is toegevoegd');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Store  $store
     * @return \Illuminate\Http\Response
     */
    public function show(Store $store)
    {
        //
        return view('park.stores.show', compact('store'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Store  $store
     * @return \Illuminate\Http\Response
     */
    public function edit(Store $store)
    {
        //
        return view('park.stores.edit', compact('store'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Store  $store
     * @return \Illuminate\Http\Response
     */
    public function update(StoreStoresRequest $request, Store $store)
    {
        //
        $store->facilitie->name = $request->name;
        $store->facilitie->description = $request->description;
        $store->facilitie->opening_time = $request->opening_time;
        $store->facilitie->closing_time = $request->closing_time;
        $store->facilitie->save();

        return redirect()->route('stores.index')->with('message','Winkel is aangepast');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Store  $store
     * @return \Illuminate\Http\Response
     */
    public function destroy(Store $store)
    {
        //
        $store->delete();
        $store->facilitie->delete();

        return redirect()->route('stores.index')->with('message','Winkel is aangepast');
    }
}
