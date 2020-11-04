<?php

namespace App\Http\Controllers;

use App\medicina;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MedicinaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $medicina = medicina::all();
        return $medicina;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
 

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $medicina = medicina::create($request->all());
        return $medicina;
    }

    public function leermedicina(){
        $medicina = DB::table('medicinas')
        ->get();

    return $medicina;

    }

    public function estoesingresarmedicina(request $medicinas){
        $nombre=$medicinas->nombre;
        $activo=$medicinas->activo;
        $tipo=$medicinas->tipo;
        $cantidad=$medicinas->cantidad;
        $area=$medicinas->area;

        DB::table('medicinas')->insert([
            'nombre'=>$nombre,
            'activo'=>$activo,
            'tipo'=>$tipo,
            'cantidad'=>$cantidad,
            'area'=>$area,
     
        ]);
        return "ingresado exitosamente";
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\medicina  $medicina
     * @return \Illuminate\Http\Response
     */
    public function show(medicina $medicina)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\medicina  $medicina
     * @return \Illuminate\Http\Response
     */
    public function edit(medicina $medicina)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\medicina  $medicina
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, medicina $medicina)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\medicina  $medicina
     * @return \Illuminate\Http\Response
     */
    public function destroy(medicina $medicina)
    {
        //
    }
}
