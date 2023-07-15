<x-app-layout>
<link rel="stylesheet" href="https://bootswatch.com/5/simplex/bootstrap.min.css">
    <x-slot name="header">
    <a href="{{'/usuarios/membresia'}}" class="featured-button"  type="button">Cancelar</a>
    </x-slot>

    <div class="container">
<h1>Obtener Membresia</h1>
<hr>
<form action="/usuarios/membresia" method="POST">
    @csrf
    <div class="well">
    
        <div class="row">
            <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group">
                  <label for="" class="form-label">FECHA EXPIDICÒN</label>
                  <input id="fecha_expedicion" name="fecha_expedicion" type="text" class="form-control" tabindex="2">
                  </div>
            </div>

            <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group">
                  <label for="" class="form-label">FECHA EXPIRACIÒN</label>
                  <input id="fecha_expiracion" name="fecha_expiracion" type="text" class="form-control" tabindex="3">
                </div>
            </div>
        </div>
    


</div>
<br>
  <button type="submit" class="featured-button" tabindex="4">Guardar</button>
</form>









</x-app-layout>