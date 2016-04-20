@extends('templates.main')

@section('titulo')
        <title>Registrar Usuario</title>
@stop

@section('content')

<section class="container">
            <h1 class="center container">Registrar Usuario</h1>
  
      
  <form class="col s12" method="post" action="/registrar_usuario">
    {{ csrf_field() }}
      
      <div class="container">  
       
          <label >Nombre Usuario</label>
            <input name="nombre" id="nombre" type="text"  required>                

         <label>Email</label>                     
            <input name="email" id="email" type="email" required="">          
 
         <label>Password</label>
            <input name="password" id="password" type="password" class="validate" required="">
         
        
            <div class="center">
                  <button id="btn-registrar" class="btn waves-effect waves-light" type="submit" name="btn-registrar">Registrar</button>

                  <a href="/" class="btn waves-effect waves-light" id="regresar">Regresar</a>
                    <br> <br>
                  

            </div>

      </div>

  </form>

 
</section>

@stop