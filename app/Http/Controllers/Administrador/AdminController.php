<?php
namespace App\Http\Controllers\Administrador;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\peliculas;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $peliculas = peliculas::all();
        return view('admin.users.index')->with('peliculas',$peliculas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.users.admincreate');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $peliculas = new peliculas();
        $peliculas->ide= $request->get('ide');
        $peliculas->nombre= $request->get('nombre');
        $peliculas->genero = $request->get('genero');
        $peliculas->año = $request->get('año');
        $peliculas->director = $request->get('director');
        $peliculas->artista = $request->get('artista');
        $peliculas->descripcion = $request->get('descripcion');
        $peliculas->foto = $request->get('foto');
        $peliculas->precio = $request->get('precio');
        $peliculas->save();

        return redirect('/admin/users');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($ide)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($ide)
    {
        $pelicula = peliculas::find($ide);
         return view('admin.users.adminedit')->with('pelicula',$pelicula);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $ide)
    {
        $pelicula = peliculas::find($ide);
        $pelicula->ide= $request->get('ide');
        $pelicula->nombre= $request->get('nombre');
        $pelicula->genero = $request->get('genero');
        $pelicula->año = $request->get('año');
        $pelicula->director = $request->get('director');
        $pelicula->artista = $request->get('artista');
        $pelicula->descripcion = $request->get('descripcion');
        $pelicula->foto = $request->get('foto');
        $pelicula->precio = $request->get('precio');
        $pelicula->save();

        return redirect('/admin/users');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($ide)
    {
        $pelicula = peliculas::find($ide);        
        $pelicula->delete();

        return redirect('/admin/users');
    }
}
