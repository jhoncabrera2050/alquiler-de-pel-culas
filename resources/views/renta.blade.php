<x-app-layout>

    <x-slot name="header">
       
            <a href="{{'pelicula'}}" class="featured-button"  type="button">Peliculas</a>  
       
    </x-slot>

    <div class="table-responsive-sm">
        <?php $valor = 0 ?>
        @if(session('renta'))
        <table class="table table-striped  table-light">
        <thead>
                <tr  >
                    <th  scope="col">
                        Pelicula
                    </th>
                    <th  scope="col">
                        Precio
                    </th>
                    <th  scope="col">
                        Cantidad
                    </th>
                    <th  scope="col">
                        Precio Total
                    </th>
                    <th  scope="col">
                        Fecha De Registro
                    </th>
                    <th  scope="col">
                        Precio De la Devolucion
                    </th>
                    <th  scope="col">
                        Foto
                    </th>
                </tr>
            </thead>
            <tbody>
            @foreach(session('renta') as $ide =>$detalles) 
            <tr>
                <th scope="row">
                    {{ $detalles['nombre'] }}
                </th>
                <th>
                    S./{{ $detalles['precio'] }}
                </th>
                <th>
                    {{ $detalles['quantity'] }}
                </th>
                <th>
                    ${{ $detalles['precio'] * $detalles['quantity'] }}
                </th>
                <th>
                
                </th>
                <th>
                    
                </th>
                <th>
                    <img src="{{$detalles['foto']}}" width="50" height="50"/>
                </th>
            </tr>
            @endforeach
            </tbody>
        </table>
        @endif
        <table>
            <th>
                <div class="badge badge-primary text-wrap" style="width:10rem;">
                <p></p>
                <p>ValorS/.{{ $valor}}</p>
                <p>IGV S./{{$valor*0.18}}</p>
                <p>Total S./{{$valor+$valor}}</p>

                </div>
            </th>
            
        </table>
        </div>
</x-app-layout>
