<?php

namespace App\Http\Controllers;

use App\Models\recette;
use App\Http\Controllers\Controller;
use App\Http\Requests\StorerecetteRequest;
use App\Http\Requests\UpdaterecetteRequest;

class RecetteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json(Recette::all()); // Ensure JSON response
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorerecetteRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(recette $recette)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(recette $recette)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdaterecetteRequest $request, recette $recette)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(recette $recette)
    {
        //
    }
}
