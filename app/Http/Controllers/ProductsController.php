<?php

namespace App\Http\Controllers;

use App\Product;
use App\Http\Requests\StoreProductsRequest;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
   /* public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('permission:create products',['only'  => ['create', 'store']]);
        $this->middleware('permission:edit products',['only'  => ['edit', 'update']]);
        $this->middleware('permission:delete products',['only'  => ['delete', 'destroy']]);
    }
   */
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $products = Product::all();

        return view('park.stores.products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('park.stores.products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProductsRequest $request)
    {
        //
        $product = new Product();

        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->save();

        return redirect()->route('products.index')->with('message','Product is toegevoegd');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
        return view('park.stores.products.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
        return view('park.stores.products.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(StoreProductsRequest $request, Product $product)
    {
        //
        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->save();

        return redirect()->route('products.index')->with('message','Product is aangepast');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */

    public function delete(Product $product)
    {
        return view('park.stores.products.delete', compact('product'));
    }

    public function destroy(Product $product)
    {
        //
        $product->delete();

        return redirect()->route('products.index')->with('message','Product is verwijderd');
    }
}
