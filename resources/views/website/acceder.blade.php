@extends('templates.main')

@section('titulo')
        <title>Acceder</title>
@stop

@section('content')

<section class="container">
        <h1 class="center container">Iniciar Sessión</h1>


    <form class="col s12" method="post" action="/login">
    {{ csrf_field() }}
      <div class="container" >  
          @if(Session::has('error'))
            <p class="error">Datos incorrectos</p>
          @endif
            <label class="active" for="email">Email</label>
            <input name="email" id="email" type="email" required> 
            
            <label class="active" for="password">Password</label>
            <input name="password" id="password" type="password" required>          
        
        
              <div class="center">
                 <button id="btn-ingresar" class="btn waves-effect waves-light" type="submit" name="btn-ingresar">Ingresar</button>

                 <a href="/" class="btn waves-effect waves-light">Regresar</a>
        
                    

                </div>

    </div>

    </form>

  
</section>

@stop