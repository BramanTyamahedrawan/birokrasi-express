<?php

namespace App\Http\Controllers;

use App\Models\KopSurat;
use App\Http\Requests\StoreKopSuratRequest;
use App\Http\Requests\UpdateKopSuratRequest;

class KopSuratController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kopSurat = KopSurat::all();
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
    public function store(StoreKopSuratRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(KopSurat $kopSurat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(KopSurat $kopSurat)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateKopSuratRequest $request, KopSurat $kopSurat)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(KopSurat $kopSurat)
    {
        //
    }
}
