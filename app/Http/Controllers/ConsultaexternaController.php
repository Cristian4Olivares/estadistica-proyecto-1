<?php

namespace App\Http\Controllers;
use App\Models\Fuerza;
use App\Models\Consultaexterna;
use App\Models\EspecialidadMedico;
use App\Models\Medico;
use Illuminate\Http\Request;
use Carbon\Carbon;

use function GuzzleHttp\Promise\all;

/**
 * Class ConsultaexternaController
 * @package App\Http\Controllers
 * 
 */


class ConsultaexternaController extends Controller

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
        $now=Carbon::now();
        $consultaexterna = new Consultaexterna();
        $consultaexternas = consultaexterna::paginate();
        $fuerzas = fuerza::pluck('tipo_fuerza','id');
       
        //$especialidades = EspecialidadMedico::pluck('idEspecialidadMed','tipo_especialidad' );
        $medicos = Medico::pluck('nombre_medico','idMedicos');

        $medicoespecialidad = EspecialidadMedico::pluck('tipo_especialidad','idEspecialidadMed');


        //$especialidades = EspecialidadMedico::all(); 
        

        return view('consultaexternas.index', compact('consultaexternas','consultaexterna','now','fuerzas',
        'medicos','medicoespecialidad'))
            ->with('i', (request()->input('page', 1) - 1) * $consultaexternas->perPage());
    }

    /**
     * Show the form for creating a new resource.
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     * @return \Illuminate\Http\Response
     */

    public function create($id)
    {
        $consultaexterna = new Consultaexterna();
        $fuerzas = fuerza::pluck('tipo_fuerza');
        $now=Carbon::now();
        $especialidades = EspecialidadMedico::pluck('idEspecialidadMed','tipo_especialidad' );
        return view('consultaexternas.create', compact('consultaexterna','fuerzas','now'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request )
    {
        
         
       
        
       // return response()->json(['success' => true]); 

       request()->validate(Consultaexterna::$rules);
       
       $consultaexterna = Consultaexterna::create($request->all());

       $especialidadid = $request->input('especialidad_id');
       printf($especialidadid);     

       $medicoId = $request->input('medico_id');
       printf($medicoId);

        //$consultaexterna = new Consultaexterna();
       
        //$consultaexterna-> id = $request->get('id');
      /*  $consultaexterna-> fechaRegistro = $request->get('fechaRegistro');
        $consultaexterna-> facturaNumero = $request->get('facturaNumero');
        $consultaexterna-> expediente = $request->get('expediente');
        $consultaexterna-> nombre = $request->get('nombre');
        $consultaexterna->fuerza_id = $request->get('fuerza_id');
        $consultaexterna-> medico_id = $request->get( $medicoId);
        $consultaexterna->save();   */

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
        $especialidades = EspecialidadMedico::all();
        $especialidades = EspecialidadMedico::pluck('idEspecialidadMed','tipo_especialidad' );
        $consultaexterna = Consultaexterna::find($id);
        return view('consultaexternas.show', compact('consultaexterna','especialidades'));
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
        $now=Carbon::now();
        $especialidades = EspecialidadMedico::all();
        $medicos = Medico::pluck('nombre_medico','idMedicos');

        return view('consultaexternas.edit', compact('consultaexterna','fuerzas','now','especialidades'));
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
        $especialidades = EspecialidadMedico::all();
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
