<x-app-layout>
    <x-slot name="header">
        
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
                    <img src="https://images.vexels.com/media/users/3/135247/isolated/preview/e70a6296c2a79dc7a56ab05b103f38e8-signo-de-usuario-con-fondo.png" class="movie-list-item-img"  alt="" width="10px">
                    <hr>
                    <p>ID : {{$renta->cod}}</p>
                    <p>Nombre: {{$renta->name}}</p>
                    <p>Apellido Paterno: {{$renta->apellido_paterno}}</p>
                    <p>Apellido Materno: {{$renta->apellido_materno}}</p>
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