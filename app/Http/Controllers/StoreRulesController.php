<?php

namespace App\Http\Controllers;

use App\Product;
use App\Store;
use App\StoreRule;
use Illuminate\Http\Request;

class StoreRulesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Store $store)
    {
        //
        $storeRules = storeRule::all()->where('store_id','=',$store->id);

        return view('park.stores.storeRules.index', compact('storeRules', 'store'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Store $store)
    {
        //
        $products = Product::all();

        return view('park.stores.storeRules.create', compact('store', 'products'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Store $store)
    {
        //
        $storeRule = new StoreRule();

        $storeRule->store_id = $request->store_id;
        $storeRule->product_id = $request->product_id;

        $storeRule->save();

        return redirect()->route( 'storeRules.index',compact('store'))->with('message','Product is toegevoegd aan assortiment');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\StoreRule  $storeRule
     * @return \Illuminate\Http\Response
     */
    public function show(StoreRule $storeRule)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\StoreRule  $storeRule
     * @return \Illuminate\Http\Response
     */


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\StoreRule  $storeRule
     * @return \Illuminate\Http\Response
     */
    public function delete(Store $store, StoreRule $storeRule)
    {
        //
        return view('park.stores.storeRules.delete', compact('store','storeRule'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\StoreRule  $storeRule
     * @return \Illuminate\Http\Response
     */
    public function destroy(Store $store, StoreRule $storeRule)
    {
        //
        $storeRule->delete();

        return redirect()->route('storeRules.index', compact('store'))->with('message','Product is van assortiment verwijderd');
    }
}
