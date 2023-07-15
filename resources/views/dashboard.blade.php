<x-app-layout>
    <link rel="stylesheet" href="https://bootswatch.com/5/simplex/bootstrap.min.css">
    <x-slot name="header">

   
    <div class="p-5 mb-4 bg-light rounded-3">
      <div class="container-fluid py-5">
        <h1 class="display-5 fw-bold">Amazon Prime Video</h1>
        <p class="col-md-8 fs-4">Te traemos una lista con los mejores servicios para alquilar películas , de forma que puedas verlas desde varios tipos de dispositivos diferentes. </p>
        <button class="btn btn-primary btn-lg" type="button">Panel de Peliculas</button>
      </div>
   
    
</div>
       
    </x-slot>
    <div class="container py-4">

    <div class="row align-items-md-stretch">
      <div class="col-md-6">
        <div class="h-100 p-5 text-white bg-dark rounded-3">
          <h2>Te Brindamos..</h2>
          <p>En la ficha de las películas tendrás toda la información sobre idiomas de audio y de subtítulos, una buena noticia para quienes preferimos verlas en versión original. También tendrás fichas para el reparto, encontrando más contenido de cada uno, contenido relacionado</p>
          
        </div>
      </div>
      <div class="col-md-6">
        <div class="h-100 p-5 bg-light border rounded-3">
          <h2>Te Brindamos..</h2>
          <p>En las descripciones de cada uno te diremos cómo suelen ser sus precios, si tienen contenidos en versión original u otros idiomas, y cuánto tiempo vas a tener para verla antes de que desaparezca de tu cuenta.</p>
          <button class="btn btn-outline-secondary" type="button">Mas..</button>
        </div>
      </div>
    </div>
    </div>
    <footer class="pt-3 mt-4 text-muted border-top">
      &copy; 2022
    </footer>
</x-app-layout>