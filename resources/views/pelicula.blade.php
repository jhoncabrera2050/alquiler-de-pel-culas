<x-app-layout>
<link rel="stylesheet" href="https://bootswatch.com/5/simplex/bootstrap.min.css">
    <x-slot name="header">
    <div class="featured-content"
                style="background: linear-gradient(to bottom, rgba(0,0,0,0), #151515), url('img/f-1.jpg');">
                <img class="featured-title" src="img/f-t-1.png" alt="">
                <p class="featured-desc">Un antiguo esclavo une sus fuerzas con un cazador de recompensas alemán que lo libera y ayuda a cazar a los criminales más buscados del Sur, todo ello con la esperanza de encontrar a su esposa perdida hace mucho tiempo.</p>
            </div>
    </x-slot>

    <div class="container">
        <div class="content-container">
         

            <div class="movie-list-container">
                <hr>
                <h1 class="movie-list-title">NUEVOS LANZAMIENTOS</h1>
                <hr>
                <div class="movie-list-wrapper">

                    <div class="py-12">
                        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                            <div class="row">
                                @foreach($peliculas as $peliculas)
                                    <div class="col-4">

                                        <div class="movie-list-item">
                                             <img src="{{$peliculas->foto}}" class="movie-list-item-img"  alt="">

                                            <span class="movie-list-item-title">{{$peliculas->nombre}}</span>

                                            <p class="movie-list-item-desc">{{$peliculas->descripcion}}</p>

                                            <div class="movie-list-item">
                                                <a href="{{route('detalle',[$peliculas->ide])}}" class="movie-list-item-button" type="button">DETALLES</a>

                                    
                                                <br>
                                             </div>
                                        </div>
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
