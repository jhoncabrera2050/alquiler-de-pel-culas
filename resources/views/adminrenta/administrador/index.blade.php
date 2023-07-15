<x-app-layout>
    <x-slot name="header">
    <link rel="stylesheet" href="https://bootswatch.com/5/simplex/bootstrap.min.css">
    </x-slot>
    



  <div class="container-fluid">

  

 
  </div>
</nav>
@if(Session::has('mensaje'))
  <div class="alert alert-success">{{Session::get('mensaje')}}</div>
@endif
<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nombre </th>
      <th scope="col">Fecha Nacimiento</th>
      <th scope="col">Rentas</th>
    </tr>
  </thead>
  <tbody>
    @foreach($consulta as $c)
    <tr>
      <th scope="row">{{$c->id}}</th>
      <td>{{$c->name}} {{$c->apellido_paterno}}</td>
      <td>{{$c->fecha_nacimiento}}</td>

      <td>

  
      <form action="{{ route('adminrenta.administrador.destroy',$c->id) }}" method="POST">
        <a href="{{ route('adminrenta.administrador.show',$c->id) }}" class="featured-button" type="button">Detalles</a>
        @csrf
       @method('DELETE')

     
      </form>
                                              

      </td>
    </tr>
    @endforeach
  </tbody>
</table>
</x-app-layout>