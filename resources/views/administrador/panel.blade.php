@extends('templates.admin')

@section('titulo')
        <title>Bienvenido {{session()->get('administrador')->nombre}}</title>
@stop

@section('content')
    <section class="container center">    
        
              <h1>Panel de Administrador </h1>
        
                <a href="/administrador/mascotas" class="waves-effect waves-light btn">Registrar Mascota</a>

                <a href="/logout" class="waves-effect waves-light btn">Salir</a>   
    
    </section>
@stop