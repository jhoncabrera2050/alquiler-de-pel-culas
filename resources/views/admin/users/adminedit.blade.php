<x-app-layout>
<link rel="stylesheet" href="https://bootswatch.com/5/simplex/bootstrap.min.css">
    <x-slot name="header">
    <a href="/admin/users" class="featured-button" tabindex="5">Cancelar</a>
    </x-slot>

    <div class="container">
    <br>

<h3>Editar Pelicula</h3>
<hr>
    <form action="/admin/users/{{$pelicula->ide}}" method="POST">
    @csrf
    @method('PUT')
    <div class="well">
      <div class="form-group">
        <label for="" class="form-label">ID</label>
        <input id="ide" name="ide" type="text" class="form-control"  value="{{$pelicula->ide}}">    
      </div>
      <div class="row">
            <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group">
                  <label for="" class="form-label">Nombre</label>
                  <input id="nombre" name="nombre" type="text" class="form-control" value="{{$pelicula->nombre}}" >
                </div>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group">
                <label for="" class="form-label">Genero</label>
                <input id="genero" name="genero" type="text" class="form-control" value="{{$pelicula->genero}}" >
                </div>
            </div>
      </div>
      <div class="row">
            <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group">
                  <label for="" class="form-label">Año</label>
                  <input id="año" name="año" type="text" class="form-control" value="{{$pelicula->año}}" >
                </div>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group">
                  <label for="" class="form-label">Director</label>
                  <input id="director" name="director" type="text" class="form-control" value="{{$pelicula->director}}" >
                </div>
            </div>
      </div>

      <div class="row">
            <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group">
                  <label for="" class="form-label">Artista</label>
                  <input id="artista" name="artista" type="text" class="form-control" value="{{$pelicula->artista}}" >
                </div>
            </div>

          <div class="col-xs-6 col-sm-6 col-md-6">
              <div class="form-group">
                  <label for="" class="form-label">Descripciòn</label>
                  <input id="descripcion" name="descripcion" type="text" class="form-control" value="{{$pelicula->descripcion}}">
              </div>
          </div>
      </div>
  <div class="form-group">
    <label for="" class="form-label">Foto</label>
    <input id="foto" name="foto" type="text" class="form-control" value="{{$pelicula->foto}}" >
  </div>
  <div class="form-group">
    <label for="" class="form-label">Precio</label>
    <input id="precio" name="precio" type="text" step="any"  class="form-control" value="{{$pelicula->precio}}" >
  </div>
<br>
</div>

  

  <button type="submit" class="featured-button" tabindex="4">Guardar</button>
</form>


</x-app-layout>
