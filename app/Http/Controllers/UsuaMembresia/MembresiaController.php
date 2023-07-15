<?php

namespace App\Http\Controllers\UsuaMembresia;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\membresias;
class MembresiaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('usuamembresia.membresia.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('usuamembresia.membresia.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user_id = auth()->id();
        $membresias = new membresias();
        $membresias->id_membresia= $request->get('id_membresia');
        $membresias->fecha_expedicion= $request->get('fecha_expedicion');
        $membresias->fecha_expiracion = $request->get('fecha_expiracion');
        $membresias->usuario_id = $user_id;

        $membresias->save();

        return redirect('/usuarios/membresia');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id_membresia)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id_membresia)
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
    public function update(Request $request, $id_membresia)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_membresia)
    {
        //
    }
}
