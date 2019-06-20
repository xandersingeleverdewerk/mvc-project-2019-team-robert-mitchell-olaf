<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateUsersRequest;
use App\User;
use App\Http\Requests\StoreUsersRequest;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $users = User::all();

        return view('users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUsersRequest $request)
    {
        $user = new User();
        $user->name = $request->name;
        $user->date_of_birth = $request->date_of_birth;
        $user->adress = $request->adress;
        $user->house_number = $request->house_number;
        $user->postal_code = $request->postal_code;
        $user->phone_number = $request->phone_number;
        $user->email = $request->email;
        $user->save();

        return redirect()->route('users.index')->with('message','Gebruiker is toegevoegd');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return view('users.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
        return view('users.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //
        $user->name = $request->name;
        $user->date_of_birth = $request->date_of_birth;
        $user->adress = $request->adress;
        $user->house_number = $request->house_number;
        $user->postal_code = $request->postal_code;
        $user->phone_number = $request->phone_number;
        $user->email = $request->email;
        $user->save();

        return redirect()->back()->with('message','Gebruiker is aangepast');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }
}
