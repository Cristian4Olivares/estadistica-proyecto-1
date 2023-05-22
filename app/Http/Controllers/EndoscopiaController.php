<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use PhpParser\Node\Stmt\Return_;

use function GuzzleHttp\Promise\all;



//MODELOS CREADOS 
use App\Models\Endoscopia;

class EndoscopiaController extends Controller
{
    //Funcion que nos ayuda a verificar que este logeado 
    //para tener acceso al sistema
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     * 
     * @paran Illuminate\Http\Response;
     */
     
    public function index()
    {
        
        $endoscopias=Endoscopia::all();
        return view('dash/endoscopia.index')->with('endoscopias',$endoscopias);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dash/endoscopia.create');
    }

    /**
     * Store a newly created resource in storage.
     * 
     */
     
    public function store(Request $request) // METODO PARA CREAR LA INFORMACION
    {
        $endoscopias = new Endoscopia();
        $endoscopias-> id = $request->get('id');
        $endoscopias-> fechaRegistro = $request->get('fechaRegistro');
        $endoscopias-> facturaNumero = $request->get('facturaNumero');
        $endoscopias-> expediente = $request->get('expediente');
        $endoscopias-> nombre = $request->get('nombre');

        $endoscopias->save();
        return redirect('/endoscopia');

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
        $endoscopia=Endoscopia::find($id);
        return view('dash/endoscopia.edit')->with('endoscopias',$endoscopia);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $endoscopia = Endoscopia::find($id);
        //$endoscopia-> id = $request->get('id');
        $endoscopia-> fechaRegistro = $request->get('fechaRegistro');
        $endoscopia-> facturaNumero = $request->get('facturaNumero');
        $endoscopia-> expediente = $request->get('expediente');
        $endoscopia-> nombre = $request->get('nombre');

        $endoscopia->save();
        return redirect('/endoscopia');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $endoscopia = Endoscopia::find($id);
        $endoscopia->delete();
        return redirect('/endoscopia');
    }
}
