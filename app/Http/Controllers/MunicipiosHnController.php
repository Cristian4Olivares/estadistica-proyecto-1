<?php

namespace App\Http\Controllers;

use App\Models\DepartamentosHn;
use App\Models\MunicipiosHn;
use Illuminate\Http\Request;


/**
 * Class MunicipiosHnController
 * @package App\Http\Controllers
 */
class MunicipiosHnController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

         $municipiosHns = MunicipiosHn::paginate();
         $depto = DepartamentosHn::pluck('nombre_depto','idDeptoHN');

        return view('municipios-hn.index', compact('municipiosHns','depto'))
            ->with('i', (request()->input('page', 1) - 1) * $municipiosHns->perPage()); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $municipiosHn = new MunicipiosHn();
        $depto = DepartamentosHn::pluck('nombre_depto','idDeptoHN');
        
        

        return view('municipios-hn.create', compact('municipiosHn','depto'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(MunicipiosHn::$rules);

        $municipiosHn = MunicipiosHn::create($request->all());

        return redirect()->route('Municipios.index')
            ->with('success', 'MunicipiosHn created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $municipiosHn = MunicipiosHn::find($id);

        return view('municipios-hn.show', compact('municipiosHn'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $municipiosHn = MunicipiosHn::find($id);
        $depto = DepartamentosHn::pluck( 'nombre_depto','idDeptoHN');

        return view('municipios-hn.edit', compact('depto','municipiosHn'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  MunicipiosHn $municipiosHn
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MunicipiosHn $municipiosHn)
    {
        request()->validate(MunicipiosHn::$rules);

        $municipiosHn->update($request->all());

        return redirect()->route('Municipios.index')
            ->with('success', 'MunicipiosHn updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $municipiosHn = MunicipiosHn::find($id)->delete();

        return redirect()->route('Municipios.index')
            ->with('success', 'MunicipiosHn deleted successfully');
    }
}
