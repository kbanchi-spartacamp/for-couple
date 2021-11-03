<?php

namespace App\Http\Controllers;

use App\Models\Husband;
use Illuminate\Http\Request;
use App\Models\User;

class HusbandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Models\Husband  $husband
     * @return \Illuminate\Http\Response
     */
    public function show(User $user, Husband $husband)
    {
        return view('users.husbands.show', compact('husband'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Husband  $husband
     * @return \Illuminate\Http\Response
     */
    public function edit(Husband $husband)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Husband  $husband
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Husband $husband)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Husband  $husband
     * @return \Illuminate\Http\Response
     */
    public function destroy(Husband $husband)
    {
        //
    }
}
