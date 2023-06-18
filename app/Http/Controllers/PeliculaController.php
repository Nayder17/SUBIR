<?php

namespace App\Http\Controllers;
use App\Models\pelicula;

use Illuminate\Http\Request;

class PeliculaController extends Controller
{
    public function index(){
        $peliculas = Pelicula::All();
        return view("welcome")->with("peliculas",$peliculas);
    }

    public function detalle(int $id){
        $pelicula = Pelicula::find($id);
        return view("detalle")->with("pelicula",$pelicula);
    }
}
