<?php

namespace App\Http\Controllers;

use App\Models\SuketDomisili;
use App\Http\Requests\StoreSuketDomisiliRequest;
use App\Http\Requests\UpdateSuketDomisiliRequest;

class SuketDomisiliController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('suket-domisili.suket-domisili');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSuketDomisiliRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(SuketDomisili $suketDomisili)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SuketDomisili $suketDomisili)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSuketDomisiliRequest $request, SuketDomisili $suketDomisili)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SuketDomisili $suketDomisili)
    {
        //
    }
}
