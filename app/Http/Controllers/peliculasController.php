<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePeliculasRequest;
use App\Http\Requests\UpdatePeliculasRequest;
use App\Models\Peliculas;
use Illuminate\Http\Request;

class peliculasController extends Controller
{
    //GET LISTAR REGISTROS
    public function index(Request $request)
    {
        if($request->has('txtBuscar '))
        {
            $cartelera = Peliculas::where('nombre','like','%'.$request->txtBuscar.'%')
                ->get();
        }
        else
        {
            $cartelera = Peliculas::all();
        }
        return $cartelera;
    }

    //POST INSERTAR DATOS
    public function store(CreatePeliculasRequest $request)
    {
        $input = $request->all();
        Peliculas::create($input);
        return response()->json([
            'res'=>true,
            'message'=>'Registro creado correctamente'
            ], 200);
    }



    //GET RETORNA UN SOLO REGISTRO
    public function show(Peliculas $pelicula)
    {
        return $pelicula;
    }

    //PUT ACTUALIZAR REGISTROS
    public function update(UpdatePeliculasRequest $request, Peliculas $pelicula)
    {
        $input = $request->all();
        $pelicula->update($input);
        return response()->json([
            'res'=>true,
            'message'=>'Registro actualizado correctamente'
        ], 200);
    }

    //DELETE ELIMINAR REGISTROS
    public function destroy($id)
    {
        Peliculas::destroy($id);
        return response()->json([
            'res'=>true,
            'message'=>'Registro eliminando correctamente'
        ], 200);
    }
}
