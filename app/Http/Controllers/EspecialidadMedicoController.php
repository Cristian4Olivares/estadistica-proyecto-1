<?php

namespace App\Http\Controllers;

use App\Models\EspecialidadMedico;
use App\Models\Medico;
use Illuminate\Http\Request;

/**
 * Class EspecialidadMedicoController
 * @package App\Http\Controllers
 */
class EspecialidadMedicoController extends Controller
{

    /* public function medicos(EspecialidadMedico $EspecialidadMedico){
        return $EspecialidadMedico->Medico;

    } */
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $especialidadMedicos = EspecialidadMedico::paginate();

        return view('especialidad_medico.index', compact('especialidadMedicos'))
            ->with('i', (request()->input('page', 1) - 1) * $especialidadMedicos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $especialidadMedico = new EspecialidadMedico();
        return view('especialidad_medico.create', compact('especialidadMedico'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(EspecialidadMedico::$rules);

        $especialidadMedico = EspecialidadMedico::create($request->all());

        return redirect()->route('especialidad-medicos.index')
            ->with('success', 'EspecialidadMedico created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $especialidadMedico = EspecialidadMedico::find($id);

        return view('especialidad_medico.show', compact('especialidadMedico'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $especialidadMedico = EspecialidadMedico::find($id);

        return view('especialidad_medico.edit', compact('especialidadMedico'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  EspecialidadMedico $especialidadMedico
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, EspecialidadMedico $especialidadMedico)
    {
        request()->validate(EspecialidadMedico::$rules);

        $especialidadMedico->update($request->all());

        return redirect()->route('especialidad_medico.index')
            ->with('success', 'EspecialidadMedico updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $especialidadMedico = EspecialidadMedico::find($id)->delete();

        return redirect()->route('especialidad-medicos.index')
            ->with('success', 'EspecialidadMedico deleted successfully');
    }
}
