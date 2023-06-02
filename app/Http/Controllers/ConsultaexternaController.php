<?php

namespace App\Http\Controllers;
use App\Models\Fuerza;
use App\Models\Consultaexterna;
use Illuminate\Http\Request;
use Carbon\Carbon;

/**
 * Class ConsultaexternaController
 * @package App\Http\Controllers
 */
class ConsultaexternaController extends Controller

{
    
    /**
     * 
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $consultaexterna = new Consultaexterna();
        $consultaexternas = consultaexterna::paginate();
        $fuerzas = fuerza::pluck('tipo_fuerza','id');
        $now=Carbon::now();
        return view('consultaexternas.index', compact('consultaexternas','consultaexterna','now','fuerzas'))
            ->with('i', (request()->input('page', 1) - 1) * $consultaexternas->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $consultaexterna = new Consultaexterna();
        $fuerzas = fuerza::pluck('tipo_fuerza','id');
        $now=Carbon::now();
        return view('consultaexternas.create', compact('consultaexterna','fuerzas','now'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Consultaexterna::$rules);

        $consultaexterna = Consultaexterna::create($request->all());

        return redirect()->route('consultaexternas.index')
            ->with('success', 'Consultaexterna created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Respo0nse
     */
    public function show($id)
    {
        $consultaexterna = Consultaexterna::find($id);
        return view('consultaexternas.show', compact('consultaexterna'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $consultaexterna = Consultaexterna::find($id);
        $fuerzas = fuerza::pluck('tipo_fuerza','id');

        return view('consultaexternas.edit', compact('consultaexterna','fuerzas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Consultaexterna $consultaexterna
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Consultaexterna $consultaexterna)
    {
        request()->validate(Consultaexterna::$rules);

        $consultaexterna->update($request->all());

        return redirect()->route('consultaexternas.index')
            ->with('success', 'Consultaexterna updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $consultaexterna = Consultaexterna::find($id)->delete();

        return redirect()->route('consultaexternas.index')
            ->with('success', 'Consultaexterna deleted successfully');
    }
}
