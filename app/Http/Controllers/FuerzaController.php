<?php

namespace App\Http\Controllers;

use App\Models\Fuerza;
use Illuminate\Http\Request;

/**
 * Class FuerzaController
 * @package App\Http\Controllers
 */
class FuerzaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fuerzas = Fuerza::paginate();

        return view('fuerzas.index', compact('fuerzas'))
            ->with('i', (request()->input('page', 1) - 1) * $fuerzas->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $fuerza = new Fuerza();
        return view('fuerzas.create', compact('fuerza'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Fuerza::$rules);

        $fuerza = Fuerza::create($request->all());

        return redirect()->route('fuerzas.index')
            ->with('success', 'Fuerza created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $fuerza = Fuerza::find($id);

        return view('fuerza.show', compact('fuerza'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $fuerza = Fuerza::find($id);

        return view('fuerza.edit', compact('fuerza'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Fuerza $fuerza
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Fuerza $fuerza)
    {
        request()->validate(Fuerza::$rules);

        $fuerza->update($request->all());

        return redirect()->route('fuerzas.index')
            ->with('success', 'Fuerza updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $fuerza = Fuerza::find($id)->delete();

        return redirect()->route('fuerzas.index')
            ->with('success', 'Fuerza deleted successfully');
    }
}
