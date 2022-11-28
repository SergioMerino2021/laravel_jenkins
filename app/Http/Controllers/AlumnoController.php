<?php

namespace App\Http\Controllers;

use App\Models\Alumno;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class AlumnoController extends Controller{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('index');
    }
    public function crearAlumno(){
        return view('crearalumno');
    }
    public function recibirAlumno(Request  $request){
        $datos = $request->except('_token');

        $id = DB::table('tbl_alumno')->insertGetId(
            ['nombre' => $datos['nombre'], 'apellido' => $datos['apellido'],'edad'=>$datos['edad']]
        );

        //DB::insert('insert into tbl_alumno (nombre,apellido,edad) values (?, ?, ?)', [1, 'Dayle'])
        return view('profes.listado');
    }
    public function miweb(String $nombre){
        return view('hola', ['nombre'=>$nombre]);
        //compact == ['nombre'=>$nombre]
        //return view('hola', compact('nombre'));
        //return $nombre;
        //return view('hola');
    }
    public function profes(){
        return view('profes.listado');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Alumno  $alumno
     * @return \Illuminate\Http\Response
     */
    public function show(Alumno $alumno)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Alumno  $alumno
     * @return \Illuminate\Http\Response
     */
    public function edit(Alumno $alumno)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Alumno  $alumno
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Alumno $alumno)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Alumno  $alumno
     * @return \Illuminate\Http\Response
     */
    public function destroy(Alumno $alumno)
    {
        //
    }
}
