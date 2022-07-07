<?php

namespace App\Http\Controllers;

use App\Models\teamleader;
use App\Http\Requests\StoreteamleaderRequest;
use App\Http\Requests\UpdateteamleaderRequest;

class TeamleaderController extends Controller
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
     * @param  \App\Http\Requests\StoreteamleaderRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreteamleaderRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\teamleader  $teamleader
     * @return \Illuminate\Http\Response
     */
    public function show(teamleader $teamleader)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\teamleader  $teamleader
     * @return \Illuminate\Http\Response
     */
    public function edit(teamleader $teamleader)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateteamleaderRequest  $request
     * @param  \App\Models\teamleader  $teamleader
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateteamleaderRequest $request, teamleader $teamleader)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\teamleader  $teamleader
     * @return \Illuminate\Http\Response
     */
    public function destroy(teamleader $teamleader)
    {
        //
    }
}
