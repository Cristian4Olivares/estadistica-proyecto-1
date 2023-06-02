<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use PhpParser\Node\Stmt\Return_;
use function GuzzleHttp\Promise\all;

//MODELOS CREADOS 
use App\Models\Endoscopia;
use App\Models\Categoria;
use Carbon\Carbon;

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
        //$categorias = Categoria::orderBy('id','nombre_categoria');
        $categorias = Categoria::all();
        //$categorias = Categoria::pluck('nombre_categoria');
        //Funcion para obtener la fecha actual
        $now=Carbon::now();
        //return view('dash/endoscopia.index')->with('endoscopias',$endoscopias);
        return view('dash/endoscopia.index', compact('endoscopias','categorias','now'));
        //return view('dash/endoscopia.create', compact('categorias'));
       

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //$categorias = Categoria::all();
        return view('dash/endoscopia.create', compact('categorias'));
    }

    /**
     * Store a newly created resource in storage.
     * 
     */
     
    public function store(Request $request) // METODO PARA CREAR LA INFORMACION
    {    $categorias= new Categoria ();/*
        //TRAER DATOS DE LA TABLA CATEGORIA
       // $categorias = Categoria::pluck('id','nombre_categoria');
        
        $categorias-> nombre_categoria = $request->get('input_categorias_id');
        $categorias->save();
        print_r($categorias); */
        
       // $categorias= ('1');

        printf($categorias);
        //TRAER DATOS DE LA TRABA ENDOSCOSPIA
        $endoscopias = new Endoscopia();
        $endoscopias-> id = $request->get('id');
        $endoscopias-> fechaRegistro = $request->get('fechaRegistro');
        $endoscopias-> facturaNumero = $request->get('facturaNumero');
        $endoscopias-> expediente = $request->get('expediente');
        $endoscopias-> nombre = $request->get('nombre');
       // $endoscopias-> categoria_id=$categorias;

        /* $endoscopias-> categoria = $request->get($categorias); */
        //print_r($categorias);
        
        //GUARDADO DE DATOS DE LAS TABLAS ANTERIORES
        $endoscopias->save();
       /*  $categorias->save(); */
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
        $endoscopias=Endoscopia::find($id);
        $categorias=Categoria::find($id);
        return view('dash/endoscopia.index', compact('endoscopias'), compact('categorias'));
        /* return view('dash/endoscopia.edit')->with('endoscopias',$endoscopias);
        return view('dash/endoscopia.edit')->with('categorias',$categorias); */
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
