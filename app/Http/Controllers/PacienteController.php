<?php

namespace App\Http\Controllers;

use App\Models\Paciente;
use Illuminate\Http\Request;

use App\Models\Fuerza;
use App\Models\Categoria;
use App\Models\Grado;
use App\Models\Genero;
/**
 * Class PacienteController
 * @package App\Http\Controllers
 */
class PacienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $paciente = new paciente();
        $pacientes = Paciente::paginate();
        $fuerzas = fuerza::pluck('tipo_fuerza','id');
        $categorias = Categoria::pluck('nombre_categoria','id');
        $generos = Genero::pluck('tipo_genero','idGenero');
        $grados = grado::pluck('tipo_grado','idGrado');
        return view('pacientes.index', compact('pacientes','paciente','categorias','fuerzas','generos','grados'))
            ->with('i', (request()->input('page', 1) - 1) * $pacientes->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $paciente = new Paciente();
        $fuerzas = fuerza::pluck('tipo_fuerza','id');
        $categorias = Categoria::pluck('nombre_categoria','id');
        $generos = Genero::pluck('tipo_genero','idGenero');
        $grados = grado::pluck('tipo_grado','idGrado');
        return view('pacientes.create', compact('paciente','categorias','fuerzas','generos','grados'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Paciente::$rules);

        $paciente = Paciente::create($request->all());

        return redirect()->route('pacientes.index')
            ->with('success', 'Paciente created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $paciente = Paciente::find($id);

        return view('pacientes.show', compact('paciente'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $paciente = Paciente::find($id);
        $pacientes = Paciente::paginate();
        $fuerzas = fuerza::pluck('tipo_fuerza','id');
        $categorias = Categoria::pluck('nombre_categoria','id');
        $generos = Genero::pluck('tipo_genero','idGenero');
        $grados = grado::pluck('tipo_grado','idGrado');

        return view('pacientes.edit', compact('paciente','paciente','categorias','fuerzas','generos','grados'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Paciente $paciente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Paciente $pacientes)
    {
        request()->validate(Paciente::$rules);

        $pacientes->update($request->all());

        return redirect()->route('pacientes.index')
            ->with('success', 'Paciente updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $paciente = Paciente::find($id)->delete();

        return redirect()->route('pacientes.index')
            ->with('success', 'Paciente deleted successfully');
    }
}
