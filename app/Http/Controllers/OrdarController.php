<?php

namespace App\Http\Controllers;

use App\Models\Ordar;
use Illuminate\Http\Request;

class OrdarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       return view('admin.ordar');
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Ordar $ordar)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Ordar $ordar)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Ordar $ordar)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Ordar $ordar)
    {
        //
    }
}
