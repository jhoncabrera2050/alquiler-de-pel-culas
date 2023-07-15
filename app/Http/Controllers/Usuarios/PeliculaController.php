<?php

namespace App\Http\Controllers\Usuarios;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\peliculas;

use App\Models\rentas;
use App\Models\User;
use Session;
class PeliculaController extends Controller
{
    //
    public function pelicula(){
        $peliculas = peliculas::all();
        return view('pelicula')->with('peliculas',$peliculas);
    }
    public function alquilar(){
        $consulta = rentas::orderBy('cod','DESC')->take(1)->get();
        $cuantos = count($consulta);
        if($cuantos==0)
        {
            $idesigue = 1;
        }
        else{
            $idesigue = $consulta[0]->cod+1;
        }
        $peliculas = peliculas::all();
        $jhon = user::all();
        return view('alquilar')->with('idesigue',$idesigue)->with('peliculas',$peliculas)->with('jhon',$jhon);
    }
    public function comprando($ide){

        $consulta = peliculas::join('renta','renta.ide','=','peliculas.ide')->select('renta.Fechadevolucion','renta.fecharegistro','peliculas.nombre','peliculas.precio','peliculas.ide','renta.cod','renta.cod as renta')->where('peliculas.ide',$ide)->get();
        /*$renta= renta::all();*/
        return view('comprando')->with('consulta',$consulta[0]);/*->with('renta',$renta);*/
    }


    public function agregar($ide){

        $consulta = peliculas::join('renta','renta.ide','=','peliculas.ide')->select('renta.Fechadevolucion','renta.fecharegistro','peliculas.nombre','peliculas.precio','peliculas.ide','renta.cod','renta.cod as renta')->where('peliculas.ide',$ide)->get();
        /*$renta= departamentos::all();*/
        return view('agregar')->with('consulta',$consulta[0]);/*->with('departamentos',$departamentos);*/
    }

    /*public function comprando($ide){

        $consulta = peliculas::find($ide)->join('renta','peliculas.ide','=','renta.cod')->select('peliculas.nombre','peliculas.precio','renta.cod','peliculas.ide')->where('ide',$ide)->get();
        /*$renta= departamentos::all();
        return view('comprando')->with('consulta',$consulta[0]);->with('departamentos',$departamentos);
    }*/
    public function guardarhoy(Request $request)
    {
        
        $user_id = auth()->id();
        $rentas = new rentas;
        $rentas->cod = $request->cod;
        $rentas->ide = $request->ide;
        $rentas->fecharegistro= $request->fecharegistro;
        $rentas->Fechadevolucion= $request->Fechadevolucion;
        $rentas->user_id=$user_id;
        $rentas->save();
        return redirect('/usuarios/usuarios');
    }
    public function detalle($ide){
        $peliculas = peliculas::find($ide);
        return view('detalle')->with('peliculas',$peliculas);
    }
    public function addtorenta($ide){
        $peliculas = peliculas::find($ide);
        $renta = session()->get('renta');
        if(!$renta){
            $renta = [
                $ide =>[
                    "nombre"=>$peliculas->nombre,
                    "quantity" => 1,
                    "precio"=>$peliculas->precio,
                    "foto"=>$peliculas->foto
                ]
                ];
                session()->put('renta',$renta);
                return redirect()->back()->with('Pelicula rentada');
        }
        if(isset($renta[$ide])){
            $renta[$ide]['quantity']++;
            session()->put('renta',$renta);
            return redirect()->back()->with('Pelicula rentada');
        }
        $renta[$ide]=[
            "nombre"=>$peliculas->nombre,
            "quantity" => 1,
            "precio"=>$peliculas->precio,
            "foto"=>$peliculas->foto

        ];
        session()->put('renta',$renta);
        return redirect()->back()->with('Pelicula rentada');
    }


    /*public function guardarhoy(Request $request)
    {
        $empleados = empleados::find($request->ide);
        $empleados->ide = $request->ide;
        $empleados->nombre = $request->nombre;
        $empleados->genero = $request->genero;
        $empleados->año= $request->año;
        $empleados->director= $request->director;
        $empleados->artista= $request->artista;
        $empleados->descripcion= $request->descripcion;
        $empleados->save();
        Session::flash('peliculas',"La pelicula $request->nombre del $request->año ha sido elegida correctamente");
        return redirect()->route('pelicula');
    }*/
}
