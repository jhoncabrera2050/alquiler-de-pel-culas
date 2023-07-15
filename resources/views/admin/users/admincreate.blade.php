<x-app-layout>
  
<link rel="stylesheet" href="https://bootswatch.com/5/simplex/bootstrap.min.css">
    <x-slot name="header">
    <a href="/admin/users" class="featured-button" tabindex="5">Cancelar</a>
    </x-slot>
    <div class="container">
    <br>

<h3>Registrar Pelicula</h3>
<hr>

<form action="/admin/users" method="POST">
    @csrf
    <div class="well">
        <div class="form-group">
          <label for="" class="form-label">ID</label>
          <input id="ide" name="ide" type="text" class="form-control" tabindex="1" >    
        </div>
        <div class="row">
            <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group">
                  <label for="" class="form-label">Nombre</label>
                  <input id="nombre" name="nombre" type="text" class="form-control" tabindex="2">
                  </div>
            </div>

            <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group">
                  <label for="" class="form-label">Genero</label>
                  <input id="genero" name="genero" type="text" class="form-control" tabindex="3">
                </div>
            </div>
        </div>
        <div class="row">

            <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group">
                    <label for="" class="form-label">Año</label>
                    <input id="año" name="año" type="text" class="form-control" tabindex="3" >
                  </div>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group">
                  <label for="" class="form-label">Director</label>
                  <input id="director" name="director" type="text" class="form-control" tabindex="3">
                  </div>
                </div>
            </div>
            <div class="row">

                <div class="col-xs-6 col-sm-6 col-md-6">
                  <div class="form-group">

                    <label for="" class="form-label">Artista</label>
                    <input id="artista" name="artista" type="text" class="form-control" tabindex="3">
                  </div>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group">
                    <label for="" class="form-label">Descripciòn</label>
                    <input id="descripcion" name="descripcion" type="text" class="form-control" tabindex="3">
                </div>
                </div>
              </div>
 
              <div class="form-group">
                <label for="" class="form-label">Foto</label>
                <input id="foto" name="foto" type="text" class="form-control" tabindex="3">
                </div>

                <div class="form-group">
                <label for="" class="form-label">Precio</label>
                <input id="precio" name="precio" type="text" step="any" value="0.00" class="form-control" tabindex="3">
               </div>
               <br>
</div>

  <button type="submit" class="featured-button" tabindex="4">Guardar</button>
</form>



    
</x-app-layout>
