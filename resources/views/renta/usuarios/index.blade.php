<x-app-layout>
<link rel="stylesheet" href="https://bootswatch.com/5/simplex/bootstrap.min.css">
    <x-slot name="header">
    <div class="bg-light p-5 rounded mt-3">

    <h1>Rentas </h1>

    <p class="lead"></p>
  </div>
    </x-slot>
    <div class="container">
        <div class="content-container">
          <div class="movie-list-container">
            <div class="movie-list-wrapper">
              <div class="py-12">
              
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                  <div class="row"> 
                    @foreach ($renta as  $renta)
                    <div class="col-4">
                    <hr>
                    <div class="movie-list-item">
                    <img src="{{$renta->foto}}" class="movie-list-item-img"  alt="">
                    <hr>
                    <p>Pelicula: {{$renta->nombre}}</p>

                    <p>Fecha Registro: {{$renta->fecharegistro}}</p>
                    <p>Fecha Devoluciòn {{$renta->Fechadevolucion}}</p>

                    <p>Precio: {{$renta->precio}}</p>
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