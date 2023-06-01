<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//MODELOS CREADOS 
use App\Models\Categoria;

class categoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        return view('dash/endoscopia.create');
/*         $var_categorias=Categoria::all();
        return view('dash/endoscopia.index')/*->with('categorias', $var_categorias); */
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       /*  $var_categorias = Categoria::all();
        return view('dash/endoscopia.index', compact('categorias')); */
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
/*         $var_categorias = new Categoria();
        $var_categorias-> id = $request->get('id');
        $var_categorias-> nombre_categoria = $request->get('nombre_categoria');
      

        $var_categorias->save(); */
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
