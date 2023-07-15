<x-app-layout>
<link rel="stylesheet" href="https://bootswatch.com/5/simplex/bootstrap.min.css">
    <x-slot name="header">
    <a href="/admin/users/create" class="featured-button">Registrar </a>
    </x-slot>
    <div class="container">
        <div class="content-container">
          <div class="movie-list-container">
            <div class="movie-list-wrapper">
              <div class="py-12">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                  <div class="row">
                  @foreach ($peliculas as $pelicula)
                    <div class="col-4">
                    <div class="movie-list-item">
                      <img src="{{$pelicula->foto}}" class="movie-list-item-img"  alt="">
                      <p >ID : {{$pelicula->ide}}</p>
                      <p >Nombre : {{$pelicula->nombre}}</p>
                      <p >Genero: {{$pelicula->genero}}</p>
                      <p >Año : {{$pelicula->año}}</p>
                      <p >Director : {{$pelicula->director}}</p>
                      <p >Artista : {{$pelicula->artista}}</p>
                      <p >Descripcion : {{$pelicula->descripcion}}</p>
                      <p >Precio : {{$pelicula->precio}}</p>

                      <div class="movie-list-item">
                                              <form action="{{ route('admin.users.destroy',$pelicula->ide) }}" method="POST">
                                                <a href="/admin/users/{{$pelicula->ide}}/edit" class="featured-button" type="button">Editar</a>
                                                @csrf
                                                @method('DELETE')

                                                <button type="submit" class="featured-button">Eliminar</button>
                                              </form>
                                              
                      </div>
                      
                    </div>
                    <hr>
                    </div>
                  @endforeach
                 </div>
                    
                        </div> 
                        <i class="fas fa-chevron-right arrow"></i> 
                    </div>  
                </div>
            </div> 

            

       </div>                 
   </div>
</x-app-layout>