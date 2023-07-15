<x-app-layout>
<link rel="stylesheet" href="https://bootswatch.com/5/simplex/bootstrap.min.css">
    <x-slot name="header">
        <h6 class="font-semibold text-xl text-gray-800 leading-tight">
            
            <a href="{{'/pelicula'}}" class="featured-button" type="button">Volver</a>
        </h6>
        <h2>
        </h2>
    </x-slot>

    <div class="container">
        <div class="content-container">
          <div class="movie-list-container">
            <div class="movie-list-wrapper">
              <div class="py-12">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <hr>
                  <div class="row">
                    <div class="col-6">
                    <div class="movie-list-item">

                      <img src="{{$peliculas->foto}}"  width="350" height="350"  alt="">
                    </div>
                    </div>
                    <div class="col-6">
                    <div class="movie-list-item">
                      <p >ID : {{$peliculas->ide}}</p>
                      <p >Nombre : {{$peliculas->nombre}}</p>
                      <p >Genero: {{$peliculas->genero}}</p>
                      <p >Año : {{$peliculas->año}}</p>
                      <p >Director : {{$peliculas->director}}</p>
                      <p >Artista : {{$peliculas->artista}}</p>
                      <p >Descripcion : {{$peliculas->descripcion}}</p>
                      <p >Precio : {{$peliculas->precio}}</p>
                    
                    </div>
                    <div class="movie-list-item">

                    
                 <a href="/alquilar" class="featured-button" type="button">Alquilar</a>
                </div>
                    </div>
                    <br>
                    <br>
                    <hr>
                    </div>
                 </div>
                 
                        </div> 
                        <i class="fas fa-chevron-right arrow"></i> 
                    </div>  
                </div>
            </div> 

            

       </div>                 
   </div>
</x-app-layout>
