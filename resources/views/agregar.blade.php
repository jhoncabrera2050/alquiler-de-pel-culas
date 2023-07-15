<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://bootswatch.com/5/lux/bootstrap.min.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarColor02">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link active" href="{{'dashboard'}}">inicio
            <span class="visually-hidden">(current)</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="">CRUD</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-sm-2" type="text" placeholder="Search">
        <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
<div class="container">
    <br>

<h1>AGREGAR PELICULA</h1>
<hr>
<form action = "{{route('guardarhoy')}}" method = "POST">
   {{csrf_field()}}
    <div class="well">
      <div class="form-group">
          <label for="dni">ID DE PELICULA</label>
          <input type="text" name="ide" id="ide" value="{{$consulta->ide}}" readonly='readonly' class="form-control" placeholder="Clave empleado" tabindex="5">
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
                    <input type="text" name="precio" id="precio" value="{{$consulta->precio}}"  readonly='readonly' class="form-control" placeholder="Precio" tabindex="2">
                </div>
            </div>
        </div>

        <div class="row">

            <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group">
                    <label for="email">Fecha de registro</label>
                    <input type="text" name="fecharegistro" id="fecharegistro" value="{{$consulta->fecharegistro}}"  class="form-control" placeholder="Fecha de registro" tabindex="4">
                </div>
            </div>

            <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group">
                    <label for="celular">Fecha de devolucion</label>
                    <input type="text" name="Fechadevolucion" id="Fechadevolucion" value="{{$consulta->Fechadevolucion}}"  class="form-control" placeholder="Fecha de devolucion" tabindex="3">
                </div>
            </div>

        </div>
        <div class="row">
        </div>
        <br>

        <div class="row">
            <div class="col-xs-6 col-md-6"><input type="submit" value="Guardar" class="btn btn-danger btn-block btn-lg" tabindex="7"
                title="Guardar datos ingresados"></div>
        </div>
        
</form>


</body>
</html>