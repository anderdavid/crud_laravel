<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use \App\peliculas; 

class PeliculasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
	{
		$peliculas = \App\peliculas::all();
		
		return view('viewPeliculas', ['peliculas' =>$peliculas,'name'=>'PELICULAS']);
		
		/* foreach($peliculas as $pelicula){
			echo "nombre: ".$pelicula->nombre."   Descripcion: ".$pelicula->descripcion."   Fecha_inicio: ".$pelicula->fecha_inicio." <br>";	
		} */
	
	}

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('createPeliculas');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
		echo "store";
		$pelicula =new \App\peliculas;
		$pelicula->nombre =$request->nombre;
		$pelicula->descripcion=$request->descripcion;
		$pelicula->fecha_inicio=$request->fecha_inicio;
		
		if($pelicula->save()){
			echo "pelicula guardada";
			return redirect('/peliculas');
		}else{
			echo "Error al guardar pelicula";
		} 
		
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
