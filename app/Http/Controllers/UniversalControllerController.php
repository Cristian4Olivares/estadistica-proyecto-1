<?php

namespace App\Http\Controllers;

use App\Models\universalController;
use Illuminate\Http\Request;

//Modelos creados
use App\Models\Mod_categoria;

class UniversalControllerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dash/endoscopia.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dash/endoscopia.index');
        
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
    public function show(universalController $universalController)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(universalController $universalController)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, universalController $universalController)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(universalController $universalController)
    {
        //
    }
}
