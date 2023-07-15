<?php

namespace App\Http\Controllers\AdminRenta;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class RentaAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $consulta = DB::table('users')
        ->join('roles','roles.id','=' ,'users.role_id')
        ->select ('users.id','users.name','users.apellido_paterno','users.apellido_materno','users.fecha_nacimiento')
        ->where('users.role_id',2)
        ->get();

        return view('adminrenta.administrador.index')->with('consulta',$consulta);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user=user::find($id);
        $rentas= DB::table('rentas')
        ->join('peliculas','peliculas.ide','=' ,'rentas.ide')
        ->join('users','users.id','=' ,'rentas.user_id')
        ->select ('users.name','rentas.cod','rentas.fecharegistro','rentas.Fechadevolucion','peliculas.nombre','peliculas.precio','peliculas.foto')
        ->where('users.id',$id)
        ->get();
        return view('adminrenta.administrador.show')->with('renta',$rentas);
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
        $user=user::find($id);
        $user->delete();
        return redirect('/adminrenta/administrador');
    }
}
