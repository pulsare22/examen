@extends('templates.admin')

@section('titulo')
        <title>Mascotas</title>
@stop

@section('content')

<section class="container ">
  <h1 class="center container">Registrar Mascota</h1>

    <form class="col s12" method="post" action="/registrarmas">
    {{ csrf_field() }}
      <div class="container">  
        
            <label class="active" for="nombre">Nombre de Mascota</label>
            <input name="nombre" id="nombre" type="text" required>
            
            <label class="active" for="edad">Edad</label>      
            <input name="edad" id="edad" type="text" required>
          
           <label class="active" for="tipo">Tipo</label>       
            <input name="tipo" id="tipo" type="text" required>
          
            <label class="active" for="color">Color</label>              
            <input name="color" id="color" type="text" required>
         
        
        <div class="center">         
            <button id="btn-registrar" class="btn waves-effect waves-light" type="submit" name="btn-registrar">Registrar</button>

            <a href="/administrador" class="btn waves-effect waves-light">Regresar</a>
            

         </div>

      </div>

    </form>

 

 
</section>

@stop