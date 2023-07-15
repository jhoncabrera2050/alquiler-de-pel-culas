<?php

namespace App\Http\Controllers\Usuarios;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RentaController extends Controller
{
    function showData(){
        $rentas=DB::table('rentas')
        ->join('peliculas','peliculas.ide','=' ,'rentas.ide')
        ->join('users','users.id','=' ,'rentas.cod')
        ->select ('rentas.cod','users.name','apellido_paterno','apellido_materno','rentas.fecharegistro','rentas.Fechadevolucion','peliculas.nombre','peliculas.precio')
        ->get();
        return view('adminrenta')->with('rentas',$rentas);
    }


}

