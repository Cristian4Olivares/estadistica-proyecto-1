<?php

namespace App\Http\Controllers;

use App\Models\DepartamentosHn;
use Illuminate\Http\Request;

/**
 * Class DepartamentosHnController
 * @package App\Http\Controllers
 */
class DepartamentosHnController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $departamentosHns = DepartamentosHn::paginate();
        //$departamentosHns = new DepartamentosHn ();
        return view('departamentos_hns.index', compact('departamentosHns'))
            ->with('i', (request()->input('page', 1) - 1) * $departamentosHns->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $departamentosHn = new DepartamentosHn();
        return view('departamentos_hns.create', compact('departamentosHn'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(DepartamentosHn::$rules);

        $departamentosHn = DepartamentosHn::create($request->all());

        return redirect()->route('DepartamentosHn.index')
            ->with('success', 'DepartamentosHn created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $departamentosHn = DepartamentosHn::find($id);

        return view('departamentos_hns.show', compact('departamentosHn'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $departamentosHn = DepartamentosHn::find($id);

        return view('departamentos_hns.edit', compact('departamentosHn'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  DepartamentosHn $departamentosHn
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DepartamentosHn $departamentosHn)
    {
        request()->validate(DepartamentosHn::$rules);

        $departamentosHn->update($request->all());

        return redirect()->route('departamentos_hns.index')
            ->with('success', 'DepartamentosHn updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $departamentosHns = DepartamentosHn::find($id)->delete();

        return redirect()->route('DepartamentosHn.index')
            ->with('success', 'DepartamentosHn deleted successfully');
    }
}
