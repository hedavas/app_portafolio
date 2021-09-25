@extends('layout')
@section('title', 'Portfolio')
@section('contenido')
    <h1>Crear Nuevo Proyecto</h1>

  	<form method="POST" action="{{ route('projects.store')}}">
	

  		<label>
  			Titulo del proyecto <br>
  			<input type="text" name "title">
  		</label>
  		<label><br>	
  			URL del proyecto <br>
  			<input type="text" name "url">
  		</label>
  		<label><br>
  			Descripcion del proyecto <br>
  			<textarea name "description"></textarea
  		</label><br>
  		<button>Guardar</button>
  	</form>


@endsection

