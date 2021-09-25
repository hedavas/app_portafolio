@extends('layout')
@section('title', 'Portfolio')
@section('contenido')

<h1>{{$project->title}}</h1>
<h1>{{$project->description}}</h1>
<h1>{{$project->created_at}}</h1>
<h1></h1>


@endsection