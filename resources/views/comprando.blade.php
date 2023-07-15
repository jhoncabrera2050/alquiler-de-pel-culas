<x-app-layout>
   
    <x-slot name="header">


        
    </x-slot>

   


<div class="container">
    <br>

<h1>INFORMACION DE LA RENTA</h1>
<hr>
<form action = "" method = "POST">
   {{csrf_field()}}
    <div class="well">
      <div class="form-group">
          <label for="dni">Codigo de renta</label>
          <input type="text" name="cod" id="cod" value="{{$consulta->cod}}" readonly='readonly' class="form-control" placeholder="Clave empleado" tabindex="5">
      </div>
        <div class="row">
            <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group">
                    <label for="nombre">Nombre de la pelicula:</label>
                    <input type="text" name="nombre" id="nombre" value="{{$consulta->nombre}}" readonly='readonly'  class="form-control" placeholder="Nombre de la pelicula" tabindex="1">
                </div>
            </div>

            <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group">
                    <label for="apellido">Precio</label>
                    <input type="text" name="apellido" id="apellido" value="{{$consulta->precio}}"  readonly='readonly' class="form-control" placeholder="Precio" tabindex="2">
                </div>
            </div>
        </div>

        <div class="row">

            <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group">
                    <label for="email">Fecha de registro</label>
                    <input type="text" name="fecharegistro" id="fecharegistro" value="{{$consulta->fecharegistro}}" class="form-control" placeholder="Fecha de registro" tabindex="4">
                </div>
            </div>

            <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group">
                    <label for="celular">Fecha de devolucion</label>
                    <input type="text" name="Fechadevolucion" id="Fechadevolucion"  value="{{$consulta->Fechadevolucion}}"class="form-control" placeholder="Fecha de devolucion" tabindex="3">
                </div>
            </div>

        </div>

        <div class="row">

            <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group">
                    <label for="celular">CODIGO DE PELICULA</label>
                    <input type="text" name="ide" id="ide"  value="{{$consulta->ide}}" readonly='readonly' class="form-control" placeholder="Fecha de devolucion" tabindex="3">
                </div>
            </div>
        </div>
        <br>

        <div class="row">
            <div class="col-xs-6 col-md-6"><input type="submit" value="Guardar" class="featured-button"  tabindex="7"
                title="Guardar datos ingresados" ></div>
        </div>
    </div>

    </form>
 </div>

</x-app-layout>