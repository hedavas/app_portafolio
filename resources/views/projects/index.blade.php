@extends('layout')
@section('title', 'Portfolio')
@section('contenido')
    <h1>Portfolio</h1>



    <ul>

	    	@forelse ($projects as $project)
	    		<li><a href="{{ route('projects.show', $project) }}">{{ $project->title}}</a></li>
	    	  	
			@empty
				<li>No hay Proyectos para mostrar</li>
			@endforelse


			
    </ul>


@endsection