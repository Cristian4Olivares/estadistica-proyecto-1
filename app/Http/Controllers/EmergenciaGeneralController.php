<?php

namespace App\Http\Controllers;

use App\Models\EmergenciaGeneral;
use App\Models\EspecialidadMedico;
use App\Models\Medico;
use Carbon\Carbon;
use App\Models\DepartamentosHn;
use App\Models\Paciente;
use Illuminate\Http\Request;

/**
 * Class EmergenciaGeneralController
 * @package App\Http\Controllers
 */
class EmergenciaGeneralController extends Controller
{
    //PROPIEDADES NECESARIAS 
    /* public $selecMedico = null, $selectEspecialidad = null;
    public $Medico = null, $specialidadMedico = null; */
    

    /**
     * 
     * Display a listing of the resource.
     *@param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */

     
     public function getMedicosPorEspecialidad($especialidadId)
    {
        // Aquí puedes usar el $especialidadId para buscar los médicos correspondientes a esa especialidad
        // y devolver la respuesta apropiada, como un JSON con los médicos encontrados.
        // Por ejemplo:
        $medicos = Medico::where('especialidad_id', $especialidadId)->get();
        return response()->json($medicos);
    }

    public function getMunicipios($muni)
    {
        // Aquí puedes usar el $especialidadId para buscar los médicos correspondientes a esa especialidad
        // y devolver la respuesta apropiada, como un JSON con los médicos encontrados.
        // Por ejemplo:
        $Municipios = Medico::where('especialidad_id', $muni)->get();
        return response()->json($Municipios);
    }

  
     public function guardarSeleccionMedico(Request $request)
    {
        
        $medicoId = $request->input('medico_id');
        printf($medicoId); 
    // Realiza las operaciones necesarias para guardar el ID del médico en la base de datos
    // Por ejemplo, puedes crear un nuevo registro en la tabla "seleccion" o actualizar un campo en la tabla "medicos"

    // Crea un nuevo registro en la tabla "seleccion"
    /* $seleccion = new Consultaexterna();
    $seleccion->medico_id = $medicoId;
    $seleccion->save();
    printf($seleccion); */
    return redirect()->route('consultaexternas.store');
    return response()->json(['success' => true]); 
    
    }
    
    public function index()
    {
        $emergenciaGenerals = EmergenciaGeneral::paginate();

        return view('emergencia-general.index', compact('emergenciaGenerals'))
            ->with('i', (request()->input('page', 1) - 1) * $emergenciaGenerals->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
        $now=Carbon::now();
        $medicoespecialidad = EspecialidadMedico::pluck('tipo_especialidad','idEspecialidadMed');
        $medicos = Medico::pluck('nombre_medico','idMedicos');
        $depto = DepartamentosHn::pluck('nombre_depto','idDeptoHN');
        $emergenciaGeneral = new EmergenciaGeneral();
        $paciente =Paciente::pluck('nombre_paciente','id_paciente');
        return view('emergencia-general.create', compact('emergenciaGeneral','now','medicoespecialidad','paciente',
    'depto'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $medicoId = $request->input('medico_id');
        printf($medicoId);

        request()->validate(EmergenciaGeneral::$rules);

        $emergenciaGeneral = EmergenciaGeneral::create($request->all());

        return redirect()->route('emergenciagnr.index')
            ->with('success', 'EmergenciaGeneral created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $emergenciaGeneral = EmergenciaGeneral::find($id);

        return view('emergencia-general.show', compact('emergenciaGeneral'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $emergenciaGeneral = EmergenciaGeneral::find($id);

        return view('emergencia-general.edit', compact('emergenciaGeneral'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  EmergenciaGeneral $emergenciaGeneral
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, EmergenciaGeneral $emergenciaGeneral)
    {
        request()->validate(EmergenciaGeneral::$rules);

        $emergenciaGeneral->update($request->all());

        return redirect()->route('emergenciagnr.index')
            ->with('success', 'EmergenciaGeneral updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $emergenciaGeneral = EmergenciaGeneral::find($id)->delete();

        return redirect()->route('emergenciagnr.index')
            ->with('success', 'EmergenciaGeneral deleted successfully');
    }
}
