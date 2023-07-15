<x-app-layout>
    <x-slot name="header">
    <link rel="stylesheet" href="https://bootswatch.com/5/simplex/bootstrap.min.css">
    </x-slot>
    <div class="container">
        <div class="content-container">
          <div class="movie-list-container">
            <div class="movie-list-wrapper">
              <div class="py-12">
              
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                  <div class="row"> 
                    @foreach ($membresia as  $membresia)
                    <div class="col-4">
                    <hr>
                    <div class="movie-list-item">
                    <img src="https://images.vexels.com/media/users/3/135247/isolated/preview/e70a6296c2a79dc7a56ab05b103f38e8-signo-de-usuario-con-fondo.png" class="movie-list-item-img"  alt="" width="10px">
                    <hr>
                    <p>Nombre: {{$membresia->name}}</p>
                    <p>Apellido Paterno: {{$membresia->apellido_paterno}}</p>
                    <p>Apellido Materno: {{$membresia->apellido_materno}}</p>
                    <p>Fecha Nacimiento: {{$membresia->fecha_nacimiento}}</p>

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