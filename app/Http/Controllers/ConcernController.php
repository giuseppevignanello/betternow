<?php

namespace App\Http\Controllers;

use App\Models\Concern\Concern;
use App\Http\Requests\StoreConcernRequest;
use App\Http\Requests\UpdateConcernRequest;

class ConcernController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreConcernRequest $request)
    {
        dd("Test");
    }

    /**
     * Display the specified resource.
     */
    public function show(Concern $concern)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateConcernRequest $request, Concern $concern)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Concern $concern)
    {
        //
    }
}
