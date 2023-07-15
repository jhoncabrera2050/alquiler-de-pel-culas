<x-app-layout>
<link rel="stylesheet" href="https://bootswatch.com/5/simplex/bootstrap.min.css">
    <x-slot name="header">
            <a href="{{'/pelicula'}}" class="featured-button"  type="button">Cancelar</a>
            
       
    </x-slot>




<div class="container">
<h1>INGRESAR ALQUILER</h1>
<hr>
<form action = "{{route('guardarhoy')}}" method = "POST">
    {{csrf_field()}}
    <div class="well">
      <div class="form-group">
          <label for="dni">ID DE RENTA</label>
          <input type="text" name="cod" id="cod" value="{{$idesigue}}" readonly='readonly' class="form-control" placeholder="Clave empleado" tabindex="5">
      </div>
      <br>
        <div class="row">
            <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group">
                <div class="form-group">
                <label for="dni">Peliculas</label>
                <select name = 'ide' class="form-select">
                  <option selected="">Selecciona tu pelicula</option>
                  @foreach($peliculas as $peli)
                  <option value="{{$peli->ide}}">{{$peli->nombre}}</option>
                  @endforeach
                </select>
              </div>
                </div>
            </div>

            <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group">
                    
                </div>
            </div>
        </div>
        <br>

        <div class="row">

            <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group">
                    <label for="email">FECHA</label>
                    <input type="text" name="fecharegistro" id="fecharegistro" class="form-control" placeholder="FECHA DE INICIO" tabindex="4">
                </div>
            </div>

            <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group">
                    <label for="celular">FECHA DE FIN</label>
                    <input type="text" name="Fechadevolucion" id="Fechadevolucion" class="form-control" placeholder="FECHA DE FIN" tabindex="3">
                </div>
            </div>

        </div>
        <br>

        <br>
        <div class="row">
            <div class="col-xs-6 col-md-6"><input type="submit" value="Guardar" class="featured-button" tabindex="7"
                title="Guardar datos ingresados"></div>
        </div>
        
</form>


</body>
</html>

</x-app-layout>